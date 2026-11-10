<?php
// Turinys vienoje vietoje: tie patys duomenys naudojami HTML puslapyje,
// Markdown versijoje agentams ir struktūruotuose duomenyse (JSON-LD).
// Kalba: puslapis prieš bootstrap.php apibrėžia AO_LANG ('lt' arba 'en'). Numatyta — 'lt'.

if (!defined('AO_LANG')) { define('AO_LANG', 'lt'); }
require __DIR__ . '/lang/' . (AO_LANG === 'en' ? 'en' : 'lt') . '.php';

// Puslapių adresai abiem kalbomis. Raktas — puslapio ID.
const AO_PATHS = [
    'home'    => ['lt' => '/',                    'en' => '/en/'],
    'kainos'  => ['lt' => '/kainos/',             'en' => '/en/pricing/'],
    'apie'    => ['lt' => '/apie/',               'en' => '/en/about/'],
    'privacy' => ['lt' => '/privatumo-politika/', 'en' => '/en/privacy/'],
];

function t(string $key)
{
    global $AO_T;
    return $AO_T[$key] ?? $key;
}

// Puslapio adresas dabartine (arba nurodyta) kalba.
function ao_url(string $page, ?string $lang = null): string
{
    return AO_PATHS[$page][$lang ?? AO_LANG] ?? '/';
}

// Markdown versija agentams (Accept: text/markdown)
function ao_markdown_home(): string
{
    global $AO_SERVICES, $AO_CASES, $AO_FAQ, $AO_JOBS, $AO_EXTRAS, $AO_SECTORS, $AO_PRICING, $AO_PRICING_WHY;
    $en = AO_LANG === 'en';
    $L = $en
        ? ['Artifex Ordinis — one place for your business', 'Saulius, remote, across Lithuania. I study how work moves in a company and join orders, quotes, stock, clients and reports into one live system built on Superhuman Docs. The system stays in the client\'s account. Goal: less manual work and a faster process.',
           'Who it is for', 'From a single person to a company of several hundred employees.', 'What the system does', 'Also', 'Pricing', 'How I work', 'Examples', 'Preview', 'shown during the call', 'FAQ', 'Contact', 'Email', 'Phone', 'Inquiry form', 'About', 'Lietuviškai']
        : ['Artifex Ordinis — viena vieta jūsų verslui', 'Saulius, nuotoliu visoje Lietuvoje. Išanalizuoju, kaip įmonėje juda darbas, ir užsakymus, pasiūlymus, sandėlį, klientus ir ataskaitas sujungiu į vieną gyvą sistemą Superhuman Docs platformoje. Sistema lieka kliento paskyroje. Tikslas: mažiau rankinio darbo, greitesnis procesas.',
           'Kam tinka', 'Nuo vieno žmogaus iki kelių šimtų darbuotojų įmonės.', 'Ką sistema daro', 'Papildomai', 'Kainos', 'Kaip dirbu', 'Pavyzdžiai', 'Peržiūra', 'parodoma pokalbio metu', 'Dažni klausimai', 'Kontaktai', 'El. paštas', 'Telefonas', 'Užklausos forma', 'Apie', 'In English'];
    $md  = "# {$L[0]}\n\n> {$L[1]}\n\n";
    $md .= "## {$L[2]}\n\n" . implode(', ', $AO_SECTORS) . ". {$L[3]}\n\n";
    $md .= "## {$L[4]}\n\n";
    foreach ($AO_JOBS as $j) { $md .= "- {$j[0]}: {$j[1]}\n"; }
    $md .= "\n### {$L[5]}\n\n";
    foreach ($AO_EXTRAS as $x) { $md .= "- {$x[0]}: {$x[1]}\n"; }
    $md .= "\n## {$L[6]}\n\n**" . t('price_h2') . "**\n\n";
    foreach ($AO_PRICING as $p) { $md .= "- {$p[0]}: {$p[1]}\n"; }
    $md .= "\n";
    foreach ($AO_PRICING_WHY as $w) { $md .= "**{$w[0]}** {$w[1]}\n\n"; }
    $md .= AO_SITE . ao_url('kainos') . "\n\n## {$L[7]}\n\n";
    foreach ($AO_SERVICES as $s) { $md .= "- **{$s['name']}** — {$s['price']}. {$s['desc']}\n"; }
    $md .= "\n## {$L[8]}\n\n";
    foreach ($AO_CASES as $c) {
        $md .= "### {$c['title']}\n{$c['tag']}\n\n";
        foreach ($c['rows'] as $r) { $md .= "- {$r[0]}: {$r[1]}\n"; }
        $md .= "- {$L[9]}: " . (!empty($c['demo']) ? $c['demo'] : $L[10]) . "\n\n";
    }
    $md .= "## {$L[11]}\n\n";
    foreach ($AO_FAQ as $q) { $md .= "**{$q[0]}**\n{$q[1]}" . (!empty($q[2]) ? " {$q[2][0]}" : '') . "\n\n"; }
    $home = AO_SITE . ao_url('home');
    $md .= "## {$L[12]}\n\n- {$L[13]}: " . AO_EMAIL . "\n- {$L[14]}: " . AO_PHONE_DISPLAY . "\n- {$L[15]}: {$home}#kontaktai\n- {$L[16]}: " . AO_SITE . ao_url('apie') . "\n- {$L[17]}: " . AO_SITE . ao_url('home', $en ? 'lt' : 'en') . "\n";
    return $md;
}

// Struktūruoti duomenys (schema.org JSON-LD)
function ao_jsonld(bool $withFaq = false): string
{
    global $AO_SERVICES, $AO_FAQ;
    $org = AO_SITE . '/#org';
    $linkedin = (string)cfg('linkedin_url');
    $offers = [];
    foreach ($AO_SERVICES as $s) {
        $offer = [
            '@type' => 'Offer',
            'name' => $s['name'],
            'description' => $s['desc'],
            'priceCurrency' => 'EUR',
            'itemOffered' => ['@type' => 'Service', 'name' => $s['name'], 'provider' => ['@id' => $org]],
        ];
        if (!empty($s['free'])) { $offer['price'] = '0'; } else { unset($offer['priceCurrency']); }
        $offers[] = $offer;
    }
    $graph = [
        ['@type' => 'WebSite', '@id' => AO_SITE . '/#web', 'url' => AO_SITE . '/', 'name' => 'Artifex Ordinis', 'inLanguage' => ['lt', 'en'], 'publisher' => ['@id' => $org]],
        array_filter([
            '@type' => ['Organization', 'ProfessionalService'],
            '@id' => $org,
            'name' => 'Artifex Ordinis',
            'slogan' => t('hero_h1'),
            'url' => AO_SITE . '/',
            'logo' => AO_SITE . '/assets/img/logo.svg',
            'image' => AO_SITE . '/assets/img/logo.svg',
            'email' => AO_EMAIL,
            'telephone' => AO_PHONE,
            'description' => t('home_desc'),
            'address' => ['@type' => 'PostalAddress', 'addressCountry' => 'LT'],
            'areaServed' => ['@type' => 'Country', 'name' => 'Lithuania'],
            'knowsLanguage' => ['lt', 'en'],
            'priceRange' => '€€',
            'founder' => ['@type' => 'Person', 'name' => 'Saulius', 'jobTitle' => 'Procesų konsultantas',
                          'knowsAbout' => ['Verslo procesų optimizavimas', 'Užsakymų valdymas', 'Superhuman Docs', 'Coda', 'Automatizacija', 'Gamybos procesai']],
            'contactPoint' => ['@type' => 'ContactPoint', 'contactType' => 'customer service', 'email' => AO_EMAIL, 'telephone' => AO_PHONE,
                               'url' => AO_SITE . ao_url('home') . '#kontaktai', 'availableLanguage' => ['lt', 'en']],
            'hasOfferCatalog' => ['@type' => 'OfferCatalog', 'name' => AO_LANG === 'en' ? 'Services' : 'Paslaugos', 'itemListElement' => $offers],
            'sameAs' => $linkedin !== '' ? [$linkedin] : null,
        ]),
    ];
    if ($withFaq) {
        $graph[] = [
            '@type' => 'FAQPage',
            'inLanguage' => AO_LANG,
            'mainEntity' => array_map(fn($q) => ['@type' => 'Question', 'name' => $q[0],
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => $q[1]]], $AO_FAQ),
        ];
    }
    return json_encode(['@context' => 'https://schema.org', '@graph' => $graph], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
}
