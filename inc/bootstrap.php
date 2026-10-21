<?php
declare(strict_types=1);

// Bendra pradžia visiems puslapiams: nustatymai, pagalbinės funkcijos, antraštės.

date_default_timezone_set('Europe/Vilnius');

const AO_SITE  = 'https://artifexordinis.lt';
const AO_EMAIL = 'saulius@artifexordinis.lt';
const AO_PHONE = '+37063821522';
const AO_PHONE_DISPLAY = '+370 638 21522';

// Nustatymai gyvena UŽ public_html ribų: domains/artifexordinis.lt/private/config.php
$aoCfgFile = dirname(__DIR__, 2) . '/private/config.php';
$AO_CFG = is_file($aoCfgFile) ? (array)require $aoCfgFile : [];

function cfg(string $key, $default = '')
{
    global $AO_CFG;
    return $AO_CFG[$key] ?? $default;
}

function e(string $s): string
{
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

function ao_private_dir(): string
{
    return dirname(__DIR__, 2) . '/private';
}

// AI agentams: nuoroda į Markdown santrauką (RFC 8288 Link antraštė).
function ao_link_header(): void
{
    if (!headers_sent()) {
        header('Link: <' . AO_SITE . '/llms.txt>; rel="alternate"; type="text/markdown"', false);
        header('Vary: Accept', false);
    }
}

// Ar užklausa prašo Markdown (Accept: text/markdown)?
function ao_wants_markdown(): bool
{
    $accept = strtolower($_SERVER['HTTP_ACCEPT'] ?? '');
    return str_contains($accept, 'text/markdown');
}

// Markdown atsakymas agentams. no-store: CDN jo neįsimena, todėl žmonės visada gauna HTML.
function ao_send_markdown(string $md): void
{
    header('Content-Type: text/markdown; charset=utf-8');
    header('Cache-Control: no-store');
    echo $md;
    exit;
}

require __DIR__ . '/content.php';
require __DIR__ . '/talpa.php';
require __DIR__ . '/layout.php';

ao_link_header();
