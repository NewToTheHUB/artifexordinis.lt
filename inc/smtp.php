<?php
// Mažas SMTP siuntėjas be bibliotekų: jungiasi prie Hostinger pašto serverio (SSL, 465 prievadas)
// ir siunčia laišką autentifikuotas. Taip laiškas gauna DKIM parašą ir praeina SPF patikrą,
// todėl nebekrenta į šlamštą. Slaptažodis — tik private/config.php ('smtp_pass').

function ao_smtp_send(string $to, string $subject, string $body, string $replyTo = ''): bool
{
    $pass = (string)cfg('smtp_pass');
    if ($pass === '') { return false; }
    $host = (string)cfg('smtp_host', 'smtp.hostinger.com');
    $port = (int)cfg('smtp_port', 465);
    $user = (string)cfg('smtp_user', AO_EMAIL);

    $fp = @stream_socket_client("ssl://$host:$port", $errno, $errstr, 10);
    if (!$fp) { return false; }
    stream_set_timeout($fp, 10);

    // Atsakymas gali būti kelių eilučių („250-…“); paskutinė eilutė turi tarpą po kodo („250 …“).
    $read = function () use ($fp): string {
        $data = '';
        while (($line = fgets($fp, 515)) !== false) {
            $data .= $line;
            if (strlen($line) < 4 || $line[3] === ' ') { break; }
        }
        return $data;
    };
    $cmd = function (string $c, string $expect) use ($fp, $read): bool {
        if ($c !== '') { fwrite($fp, $c . "\r\n"); }
        return strncmp($read(), $expect, 3) === 0;
    };

    $ok = $cmd('', '220')
        && $cmd('EHLO artifexordinis.lt', '250')
        && $cmd('AUTH LOGIN', '334')
        && $cmd(base64_encode($user), '334')
        && $cmd(base64_encode($pass), '235')
        && $cmd('MAIL FROM:<' . $user . '>', '250')
        && $cmd('RCPT TO:<' . $to . '>', '250')
        && $cmd('DATA', '354');

    if ($ok) {
        $fromName = '=?UTF-8?B?' . base64_encode('Artifex Ordinis svetainė') . '?=';
        $headers = "From: $fromName <$user>\r\n"
                 . "To: <$to>\r\n"
                 . ($replyTo !== '' ? "Reply-To: <$replyTo>\r\n" : '')
                 . "Subject: $subject\r\n"
                 . 'Date: ' . date('r') . "\r\n"
                 . 'Message-ID: <' . bin2hex(random_bytes(12)) . "@artifexordinis.lt>\r\n"
                 . "MIME-Version: 1.0\r\n"
                 . "Content-Type: text/plain; charset=UTF-8\r\n"
                 . "Content-Transfer-Encoding: base64\r\n";
        $ok = $cmd($headers . "\r\n" . chunk_split(base64_encode($body)) . '.', '250');
    }

    @fwrite($fp, "QUIT\r\n");
    fclose($fp);
    return $ok;
}
