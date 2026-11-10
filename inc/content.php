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
    'pavyzdziai' => ['lt' => '/pavyzdziai/',      'en' => '/en/examples/'],
    'duk'     => ['lt' => '/duk/',                'en' => '/en/faq/'],
];

function t(string $key)
{
    global $AO_T;
    return $AO_T[$key] ?? $key;
}

// Nuoroda: pilnas URL lieka toks pat, puslapio ID virsta adresu dabartine kalba.
function ao_href(string $target): string
{
    return str_starts_with($target, 'http') ? $target : ao_url($target);
}

// Vienas DUK klausimas kaip <details>.
function ao_faq_item(array $q): void
{
    echo '      <details><summary>' . e($q['q']) . '</summary><p>' . e($q['a']);
    if (!empty($q['link'])) {
        echo ' <a href="' . e(ao_href($q['link'][0])) . '">' . e($q['link'][1]) . '</a>';
    }
    echo "</p></details>\n";
}

// Puslapio adresas dabartine (arba nurodyta) kalba.
function ao_url(string $page, ?string $lang = null): string
{
    return AO_PATHS[$page][$lang ?? AO_LANG] ?? '/';
}

// Markdown versija agentams (Accept: text/markdown)
function ao_markdown_home(): string
{
    global $AO_SERVICES, $AO_CASES, $AO_FAQ, $AO_FAQ_GROUPS, $AO_FLOW, $AO_SECTORS, $AO_PRICING, $AO_PRICING_WHY;
    $en = AO_LANG === 'en';
    $L = $en
        ? ['Saulius, remote, across Lithuania. I study how work moves in a company and join inquiries, quotes, orders, tasks, documents and reports into one live system built on Superhuman Docs. The system stays in the client\'s account.',
           'Who it is for', 'From a single person to a company of several hundred employees.', 'Preview', 'shown during the call', 'Contact', 'Email', 'Phone', 'Inquiry form', 'About', 'Lietuviškai']
        : ['Saulius, nuotoliu visoje Lietuvoje. Išanalizuoju, kaip įmonėje juda darbas, ir užklausas, pasiūlymus, užsakymus, užduotis, dokumentus ir ataskaitas sujungiu į vieną gyvą sistemą Superhuman Docs platformoje. Sistema lieka kliento paskyroje.',
           'Kam tinka', 'Nuo vieno žmogaus iki kelių šimtų darbuotojų įmonės.', 'Peržiūra', 'parodoma pokalbio metu', 'Kontaktai', 'El. paštas', 'Telefonas', 'Užklausos forma', 'Apie', 'In English'];
    $md  = '# ' . t('home_title') . "\n\n> {$L[0]}\n\n";
    $md .= '## ' . t('pain_h2') . "\n\n" . t('pain_p') . "\n\n";
    $md .= '## ' . t('flow_h2') . "\n\n" . t('flow_p') . "\n\n";
    foreach ($AO_FLOW as $f) { $md .= "- **{$f[0]}** — " . t('flow_now') . ": {$f[1]} " . t('flow_new') . ": {$f[2]}\n"; }
    $md .= "\n## {$L[1]}\n\n" . implode(', ', $AO_SECTORS) . ". {$L[2]}\n\n";
    $md .= '## ' . t('cases_label') . "\n\n";
    foreach ($AO_CASES as $c) {
        $md .= "### {$c['problem']}\n{$c['tag']}\n\n- " . t('case_old') . ": {$c['old']}\n- " . t('case_new') . ": {$c['new']}\n- " . t('case_result') . ": {$c['result']}\n";
        $md .= "- {$L[3]}: " . (!empty($c['demo']) ? $c['demo'] : $L[4]) . "\n\n";
    }
    $md .= '## ' . t('how_label') . "\n\n";
    foreach ($AO_SERVICES as $s) { $md .= "- **{$s['name']}** — {$s['price']}. {$s['desc']}\n"; }
    $md .= "\n## " . t('price_label') . "\n\n**" . t('price_h2') . "**\n\n";
    foreach ($AO_PRICING as $p) { $md .= "- {$p[0]}: {$p[1]}\n"; }
    $md .= "\n";
    foreach ($AO_PRICING_WHY as $w) { $md .= "**{$w[0]}** {$w[1]}\n\n"; }
    $md .= AO_SITE . ao_url('kainos') . "\n\n## " . t('faq_label') . "\n\n";
    foreach ($AO_FAQ_GROUPS as $g => $gName) {
        $md .= "### {$gName}\n\n";
        foreach ($AO_FAQ as $q) {
            if ($q['g'] !== $g) continue;
            $md .= "**{$q['q']}**\n{$q['a']}" . (!empty($q['link']) ? ' ' . (str_starts_with($q['link'][0], 'http') ? $q['link'][0] : AO_SITE . ao_url($q['link'][0])) : '') . "\n\n";
        }
    }
    $home = AO_SITE . ao_url('home');
    $md .= "## {$L[5]}\n\n- {$L[6]}: " . AO_EMAIL . "\n- {$L[7]}: " . AO_PHONE_DISPLAY . "\n- {$L[8]}: {$home}#kontaktai\n- {$L[9]}: " . AO_SITE . ao_url('apie') . "\n- {$L[10]}: " . AO_SITE . ao_url('home', $en ? 'lt' : 'en') . "\n";
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
            'mainEntity' => array_map(fn($q) => ['@type' => 'Question', 'name' => $q['q'],
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => $q['a']]], $AO_FAQ),
        ];
    }
    return json_encode(['@context' => 'https://schema.org', '@graph' => $graph], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
}
