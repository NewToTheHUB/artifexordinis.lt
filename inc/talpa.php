<?php
// Užimtumas iš Superhuman Docs lentelės "Talpa".
// Veikia serveryje: API tokenas niekada nepatenka į naršyklę, o rezultatas įrašomas tiesiai į HTML,
// todėl jį mato ir lankytojai, ir paieškos / AI robotai.

function ao_talpa(array $cfg): array
{
    $cacheDir  = ao_private_dir() . '/cache';
    $cacheFile = $cacheDir . '/talpa.json';
    $ttl       = (int)($cfg['cache_ttl'] ?? 900);

    // 1. Šviežia talpykla — naudojame ją, Docs nekviečiame.
    if (is_file($cacheFile) && (time() - filemtime($cacheFile)) < $ttl) {
        $rows = json_decode((string)file_get_contents($cacheFile), true);
        if (is_array($rows)) return $rows;
    }

    // 2. Bandome pasiimti iš Docs API.
    $rows = ao_talpa_fetch($cfg);
    if ($rows !== null) {
        if (!is_dir($cacheDir)) @mkdir($cacheDir, 0750, true);
        @file_put_contents($cacheFile, json_encode($rows, JSON_UNESCAPED_UNICODE), LOCK_EX);
        return $rows;
    }

    // 3. Docs nepasiekiamas — sena talpykla geriau nei nieko.
    if (is_file($cacheFile)) {
        $rows = json_decode((string)file_get_contents($cacheFile), true);
        if (is_array($rows)) return $rows;
    }

    // 4. Atsarginės reikšmės iš config.php (arba numatytosios).
    $out = [];
    $fallback = $cfg['talpa_fallback'] ?? [['Lapkritis', 2, 1], ['Gruodis', 2, 0]];
    foreach ($fallback as $r) {
        $out[] = ['menuo' => (string)$r[0], 'vietos' => (int)$r[1], 'uzimta' => (int)$r[2]];
    }
    return $out;
}

function ao_talpa_fetch(array $cfg): ?array
{
    $token = $cfg['docs_api_token'] ?? '';
    $doc   = $cfg['docs_doc_id'] ?? '';
    $table = $cfg['docs_table'] ?? 'Talpa';
    if ($token === '' || $doc === '' || !function_exists('curl_init')) return null;

    $url = rtrim($cfg['docs_api_base'] ?? 'https://coda.io/apis/v1', '/')
         . '/docs/' . rawurlencode($doc)
         . '/tables/' . rawurlencode($table)
         . '/rows?useColumnNames=true&valueFormat=simple&limit=24';

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => 4,
        CURLOPT_CONNECTTIMEOUT => 3,
        CURLOPT_HTTPHEADER     => ['Authorization: Bearer ' . $token, 'Accept: application/json'],
    ]);
    $body = curl_exec($ch);
    $code = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if ($body === false || $code !== 200) return null;

    $data = json_decode($body, true);
    if (!isset($data['items']) || !is_array($data['items'])) return null;

    $out = [];
    foreach ($data['items'] as $item) {
        $v = $item['values'] ?? [];
        $show = $v['Rodyti'] ?? true;
        if ($show === false || $show === 'false') continue;
        $menuo = trim((string)($v['Mėnuo'] ?? ''));
        if ($menuo === '') continue;
        $out[] = [
            'menuo'  => $menuo,
            'vietos' => max(0, (int)($v['Vietos'] ?? 0)),
            'uzimta' => max(0, (int)($v['Užimta'] ?? 0)),
        ];
    }
    return $out;
}

// Lietuviška daugiskaita: 1 laisva vieta · 2–9 laisvos vietos · 0, 10–20 laisvų vietų
function ao_laisvos(int $n): string
{
    if ($n <= 0) return 'Užimta';
    $m10 = $n % 10; $m100 = $n % 100;
    if ($m10 === 1 && $m100 !== 11) return $n . ' laisva vieta';
    if ($m10 >= 2 && $m10 <= 9 && ($m100 < 10 || $m100 > 20)) return $n . ' laisvos vietos';
    return $n . ' laisvų vietų';
}
