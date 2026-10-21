<?php
// Artifex Ordinis — nustatymai.
// Šio failo kopiją pavadinkite config.php ir laikykite serveryje:
//   domains/artifexordinis.lt/private/config.php   (UŽ public_html ribų)
// Į Git šis failas su tikromis reikšmėmis NIEKADA nekeliamas.

return [
    // Superhuman Docs API tokenas: docs.superhuman.com/account → API settings.
    'docs_api_token' => '',
    'docs_api_base'  => 'https://coda.io/apis/v1',

    // Užimtumas: doc ID ir lentelė „Talpa“ (Mėnuo, Vietos, Užimta, Rodyti).
    'docs_doc_id'    => '',
    'docs_table'     => 'Talpa',
    'cache_ttl'      => 900,
    'talpa_fallback' => [
        ['Lapkritis', 2, 1],
        ['Gruodis', 2, 0],
    ],

    // Užklausos forma → Docs automatizacija su trigeriu „Webhook invoked“.
    // Nuoroda atrodo taip: https://coda.io/apis/v1/docs/<DOC_ID>/hooks/automation/<RULE_ID>
    'docs_webhook_url' => '',

    // ARBA vietoj savos formos — Superhuman Docs forma (Share → Embed → src nuoroda).
    // Jei užpildyta, svetainėje rodoma Docs forma, o sava forma ir webhook nenaudojami.
    'form_url' => '',

    // Pokalbio rezervacija (Google Calendar appointment schedule) ir LinkedIn.
    'booking_url'  => '',
    'linkedin_url' => '',

    // Užklausų laiškai per Hostinger SMTP (su DKIM parašu, kad nekristų į šlamštą).
    // Tuščias slaptažodis = siunčiama per PHP mail(), kuris dažnai patenka į Spam.
    'smtp_host' => 'smtp.hostinger.com',
    'smtp_port' => 465,
    'smtp_user' => 'saulius@artifexordinis.lt',
    'smtp_pass' => '',
];
