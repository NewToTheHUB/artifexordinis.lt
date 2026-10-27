<?php
// Užklausos formos gavėjas.
// 1) Apsauga nuo šlamšto: paslėptas laukas, minimalus pildymo laikas, ribojimas pagal IP.
// 2) Siunčia į Superhuman Docs automatizaciją (webhook) — eilutė atsiranda „Užklausos“ lentelėje.
// 3) Papildomai siunčia pranešimą el. paštu. Raktai — tik private/config.php, ne čia.
require __DIR__ . '/inc/bootstrap.php';

function ao_back(string $status): void
{
    $ref = $_SERVER['HTTP_REFERER'] ?? '';
    $path = parse_url($ref, PHP_URL_PATH) ?: '/kontaktai/';
    $host = parse_url($ref, PHP_URL_HOST);
    $self = explode(':', (string)($_SERVER['HTTP_HOST'] ?? ''))[0];
    if ($host && $host !== $self) { $path = '/kontaktai/'; }
    header('Location: ' . $path . '?forma=' . $status . '#forma', true, 303);
    exit;
}

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') { header('Location: /kontaktai/', true, 303); exit; }

$clean = fn(string $k, int $max) => trim(mb_substr(str_replace(["\r", "\0"], '', (string)($_POST[$k] ?? '')), 0, $max));
$vardas = $clean('vardas', 120);
$email  = $clean('el_pastas', 200);
$imone  = $clean('imone', 200);
$zinute = $clean('zinute', 4000);

// Šlamštas: paslėptas laukas užpildytas arba forma išsiųsta greičiau nei per 3 s — apsimetame, kad viskas gerai.
$t = (int)($_POST['t'] ?? 0);
if (($_POST['svetaine'] ?? '') !== '' || ($t > 0 && time() - $t < 3)) { ao_back('gauta'); }

if ($vardas === '' || $zinute === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) { ao_back('trukumas'); }

// Ko klientas nori: pokalbio ar demonstracijos. Įrašoma žinutės pradžioje, kad matytųsi ir Docs, ir laiške.
$norai = ['pokalbis' => 'Nemokamas 30 min. pokalbis', 'demonstracija' => 'Nemokama vieno proceso demonstracija'];
$noras = $norai[(string)($_POST['noras'] ?? '')] ?? $norai['pokalbis'];
$zinute = "Pageidauja: $noras\n\n" . $zinute;

// Ribojimas: ne daugiau 5 užklausų per valandą iš vieno IP.
$rlDir = ao_private_dir() . '/cache';
if (!is_dir($rlDir)) { @mkdir($rlDir, 0750, true); }
$rlFile = $rlDir . '/rl_' . hash('sha256', ($_SERVER['REMOTE_ADDR'] ?? '') . date('YmdH'));
$count = is_file($rlFile) ? (int)file_get_contents($rlFile) : 0;
if ($count >= 5) { ao_back('klaida'); }
@file_put_contents($rlFile, (string)($count + 1), LOCK_EX);

$payload = [
    'vardas' => $vardas, 'el_pastas' => $email, 'imone' => $imone, 'zinute' => $zinute,
    'saltinis' => 'artifexordinis.lt', 'puslapis' => (string)($_SERVER['HTTP_REFERER'] ?? ''),
    'laikas' => date('c'),
];

$ok = false;

// Atsarginė kopija serveryje (už public_html ribų): private/uzklausos/YYYY-MM.jsonl.
// Net jei laiškas nenueina, užklausa išlieka ir ją galima rasti per Failų tvarkyklę.
$logDir = ao_private_dir() . '/uzklausos';
if (!is_dir($logDir)) { @mkdir($logDir, 0750, true); }
$logged = @file_put_contents($logDir . '/' . date('Y-m') . '.jsonl',
    json_encode($payload, JSON_UNESCAPED_UNICODE) . "\n", FILE_APPEND | LOCK_EX) !== false;

// Superhuman Docs automatizacija: „Webhook invoked“ trigeris.
$hook = (string)cfg('docs_webhook_url');
$token = (string)cfg('docs_api_token');
if ($hook !== '' && $token !== '' && function_exists('curl_init')) {
    $ch = curl_init($hook);
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 6,
        CURLOPT_HTTPHEADER => ['Authorization: Bearer ' . $token, 'Content-Type: application/json'],
        CURLOPT_POSTFIELDS => json_encode($payload, JSON_UNESCAPED_UNICODE),
    ]);
    curl_exec($ch);
    $code = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    $ok = $code >= 200 && $code < 300;
}

// Tiesiogiai į Business OS → Leads per Docs API (be automatizacijos taisyklės).
// Reikia tik 'docs_api_token' faile private/config.php. Lentelės ir stulpelių ID nėra slapti.
if (!$ok && $token !== '' && function_exists('curl_init')) {
    $doc = (string)cfg('leads_doc_id', 'BsiN9tYW_P');
    $tbl = (string)cfg('leads_table', 'grid-61hKKY8RGK');
    $cells = [
        ['column' => 'c-ekvZ1YYjmv', 'value' => $vardas],                                   // Lead
        ['column' => 'c-Sca8-vhYOi', 'value' => $imone],                                    // Organizacija
        ['column' => 'c-oUXlZBx3Wm', 'value' => 'Svetainė'],                                // Šaltinis
        ['column' => 'c-LTFBCT-obo', 'value' => 'Naujas'],                                  // Statusas
        ['column' => 'c-tr0hHCbktV', 'value' => $zinute],                                   // Problema / poreikis
        ['column' => 'c-YJtTe91ght', 'value' => 'Atsakyti ir pasiūlyti pokalbio laiką'],    // Kitas veiksmas
        ['column' => 'c-kWsw8yKMi_', 'value' => date('Y-m-d', time() + 86400)],             // Kito veiksmo data
        ['column' => 'c-PkHFZlbOP1', 'value' => "El. paštas: $email\nGauta: " . date('Y-m-d H:i')], // Pastabos
    ];
    $base = rtrim((string)cfg('docs_api_base', 'https://coda.io/apis/v1'), '/');
    $ch = curl_init("$base/docs/$doc/tables/$tbl/rows");
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 6,
        CURLOPT_HTTPHEADER => ['Authorization: Bearer ' . $token, 'Content-Type: application/json'],
        CURLOPT_POSTFIELDS => json_encode(['rows' => [['cells' => $cells]]], JSON_UNESCAPED_UNICODE),
    ]);
    curl_exec($ch);
    $code = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    $ok = $code >= 200 && $code < 300;
}

// El. laiškas sau (visada, kaip atsarginis kanalas).
$subject = '=?UTF-8?B?' . base64_encode('Nauja užklausa: ' . $vardas) . '?=';
$body = "Vardas: $vardas\nEl. paštas: $email\nĮmonė: $imone\n\n$zinute\n\n— artifexordinis.lt, " . date('Y-m-d H:i');
$headers = "From: Artifex Ordinis svetainė <" . AO_EMAIL . ">\r\n"
         . "Reply-To: $email\r\n"
         . "Content-Type: text/plain; charset=UTF-8\r\n";
// Pirmiausia per SMTP (nepatenka į šlamštą); jei slaptažodis neįrašytas ar SMTP nepasiekiamas — PHP mail().
require_once __DIR__ . '/inc/smtp.php';
$mailed = ao_smtp_send(AO_EMAIL, $subject, $body, $email) || @mail(AO_EMAIL, $subject, $body, $headers);

ao_back(($ok || $mailed || $logged) ? 'gauta' : 'klaida');
