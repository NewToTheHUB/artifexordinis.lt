<?php
// Turinys vienoje vietoje: tie patys duomenys naudojami HTML puslapyje,
// Markdown versijoje agentams ir struktūruotuose duomenyse (JSON-LD).

$AO_SERVICES = [
    ['id' => 'pokalbis', 'name' => 'Pokalbis', 'note' => '30 min., gyvai arba nuotoliu',
     'desc' => 'Išsiaiškiname, kas trukdo, ir ar galiu padėti.', 'price' => 'Nemokamai', 'min' => 0, 'exact' => true],
    ['id' => 'auditas', 'name' => 'Tvarkos auditas', 'note' => 'Proceso žemėlapis, skaičiai, prioritetai ir fiksuota įdiegimo kaina. Įskaičiuojama į įdiegimą, jei pradedame per 30 dienų.',
     'desc' => 'Pažiūriu, kaip juda darbas, suskaičiuoju, kiek kainuoja netvarka, ir pasakau, ką keisti pirmiausia.', 'price' => '150 €', 'min' => 150, 'exact' => true,
     'badge' => 'pilotinė kaina pirmiesiems trims klientams'],
    ['id' => 'idiegimas', 'name' => 'Sistemos įdiegimas', 'note' => 'Fiksuota kaina, žinoma iš anksto',
     'desc' => '2–4 savaitės. Dalį sistemos naudojate jau po pirmos savaitės.', 'price' => 'nuo 800 €', 'min' => 800, 'exact' => false],
    ['id' => 'prieziura', 'name' => 'Priežiūra', 'note' => 'Pakeitimai, klausimai, vienas kontaktas',
     'desc' => 'Keičiasi verslas, keičiasi ir sistema. Aiškus mėnesio biudžetas.', 'price' => 'nuo 150 €/mėn.', 'min' => 150, 'exact' => false],
];

$AO_CASES = [
    [
        'tag' => 'Gamyba · užsakymų ir gamybos sekimas',
        'title' => 'Kiekvienas užsakymas matomas nuo užklausos iki išsiuntimo.',
        'rows' => [
            ['Prieš', 'Užklausos, kainos ir gamybos būsenos išmėtytos po skirtingus failus ir laiškus.'],
            ['Sprendimas', 'Viena sistema visam keliui: užklausa → kainos skaičiavimas → gamyba → kokybės patikra → pakavimas. Kiekvienas darbuotojas mato tik savo darbo vaizdą.'],
            ['Po', 'Užsakymo būsena matoma iš karto, be skambučių ir perrašinėjimo.'],
        ],
    ],
    [
        'tag' => 'Optikos salonai · vizitų registracija',
        'title' => 'Laisvi vizitų laikai susidaro patys pagal kiekvieno filialo darbo laiką.',
        'rows' => [
            ['Prieš', 'Vizitai derinami telefonu, o kiekvienas filialas savo grafiką veda atskirai.'],
            ['Sprendimas', 'Filialų darbo laikas ir specialistų grafikai vienoje vietoje. Sistema sugeneruoja laisvus laikus, o užregistruoti vizitai patenka į bendrą sąrašą.'],
            ['Po', 'Visi filialai ir jų užimtumas matomi viename lange.'],
        ],
    ],
    [
        'tag' => 'Paslaugos · darbų aktai ir sąskaitos',
        'title' => 'Nuo atlikto darbo iki išsiųstos sąskaitos — keli paspaudimai.',
        'rows' => [
            ['Prieš', 'Darbų aktai ir sąskaitos pildomi rankomis ir siunčiami po vieną.'],
            ['Sprendimas', 'Darbai fiksuojami lentelėje, suma apskaičiuojama automatiškai, PDF aktas ir sąskaita sugeneruojami ir išsiunčiami klientui. Klientas mato savo statistiką.'],
            ['Po', 'Visada aišku, kas išsiųsta, kas dar ne ir kiek uždirbta per mėnesį.'],
        ],
    ],
    [
        'tag' => 'Šokių mokyklos · Dance Check-in',
        'title' => 'Nuskenuotas QR kodas — ir apsilankymas jau įrašytas.',
        'rows' => [
            ['Prieš', 'Lankomumas ir abonementų likučiai sekami rankomis.'],
            ['Sprendimas', 'Registracija į pamoką QR kodu, abonementų likučiai realiuoju laiku, administravimo langas.'],
            ['Po', 'Mokykla mato, kas atėjo ir kiek pamokų liko, nieko neperrašinėdama.'],
        ],
    ],
    [
        'tag' => 'Automatizacija · kai darbas kartojasi',
        'title' => 'Jei tas pats veiksmas kartojasi kasdien, jį atlieka skriptas.',
        'rows' => [
            ['Prieš', 'Šimtai failų rūšiuojami ir lyginami rankomis, duomenys iš PDF perrašomi į lentelę.'],
            ['Sprendimas', 'Skriptas atpažįsta susijusius failus, ištraukia duomenis iš PDF ir ZIP archyvų ir sudeda juos į lentelę.'],
            ['Po', 'Žmogus tikrina tik išimtis, o ne kiekvieną eilutę.'],
        ],
    ],
];

$AO_FAQ = [
    ['Ar dirbate tik su mažomis įmonėmis?',
     'Ne. Svarbu ne dydis ar teisinė forma, o tai, kad darbas kartojasi: užklausos, skaičiavimai, pasiūlymai, užsakymai, ataskaitos. Dirbu ir su vienu žmogumi, ir su kelių dešimčių darbuotojų komanda.'],
    ['Ar galite tik patarti, nekurdamas sistemos?',
     'Taip. Tvarkos auditas baigiasi aiškiu sąrašu, ką pakeisti. Kartais užtenka paprastų pakeitimų, kuriuos galite padaryti patys, — tada taip ir pasakysiu.'],
    ['Ar reikės keisti programas, kurias jau naudojame?',
     'Dažniausiai ne. Sistema sujungia tai, ką jau turite: el. paštą, kalendorių, skaičiuokles. Keičiame tik tai, kas iš tikrųjų trukdo.'],
    ['Kieno paskyroje bus sistema?',
     'Kol kuriame ir bandome, sistema veikia mano paskyroje, todėl jums licencijų nereikia. Kai sistema paruošta, renkatės: perkeliu ją į jūsų Superhuman Docs paskyrą arba ji lieka mano priežiūroje už mėnesinį mokestį.'],
    ['Kiek kainuoja Superhuman Docs licencijos?',
     'Mokama tik už kūrėjus (Doc Makers), t. y. žmones, kurie kuria naujus dokumentus. Darbuotojai, kurie sistema tik naudojasi ir ją pildo, nemoka. Tikslią kainą pasakysiu pokalbio metu, nes ji priklauso nuo plano.'],
    ['Ar sistemoje veiks dirbtinis intelektas (AI)?',
     'Gali veikti: santraukos apie klientą, laiškų juodraščiai, laukų užpildymas, rytinė suvestinė. AI funkcijos naudoja Superhuman plano kreditus, todėl jas įdiegiame tik ten, kur jos atsiperka.'],
    ['Ar mūsų duomenys saugūs?',
     'Duomenys saugomi Superhuman Docs platformoje, o ne mano kompiuteryje. Su kiekvienu klientu pasirašome duomenų tvarkymo sutartį pagal BDAR.'],
    ['Kiek laiko visa tai užtrunka?',
     'Auditas trunka 1–2 savaites. Sistemos įdiegimas — 2–4 savaites, o dalį sistemos naudojate jau po pirmos savaitės.'],
    ['Ar dirbate ne Kaune?',
     'Taip. Susitinkame gyvai Kaune arba nuotoliu visoje Lietuvoje. Dirbu lietuvių ir anglų kalbomis.'],
];

$AO_BUILDS = [
    ['Užsakymų valdymas', 'nuo užklausos iki apmokėjimo'],
    ['Skaičiuoklės ir komerciniai pasiūlymai', 'per kelias minutes, ne valandas'],
    ['Sandėlis ir likučiai', 'nurašomi automatiškai pagal užsakymus'],
    ['Klientai ir užklausos', 'paprasta CRM sistema vienoje vietoje'],
    ['Vadovo ir investuotojo suvestinė', 'statistika ir analitika realiuoju laiku'],
    ['PDF dokumentai ir laiškai', 'aktai, sąskaitos, priminimai išsiunčiami patys'],
    ['AI pagalbininkas', 'santraukos, juodraščiai, laukų užpildymas'],
    ['Skriptai ir automatizacijos', 'kai tas pats darbas kartojasi kasdien'],
];

$AO_SECTORS = ['Gamyba', 'Kavinės ir kebabinės', 'Klinikos ir salonai', 'Renginiai', 'Statyba ir remontas',
               'Servisai', 'Prekyba ir sandėlis', 'Konsultantai'];

// Markdown versija agentams (Accept: text/markdown)
function ao_markdown_home(): string
{
    global $AO_SERVICES, $AO_CASES, $AO_FAQ, $AO_BUILDS, $AO_SECTORS;
    $md  = "# Artifex Ordinis — verslo procesų tvarka\n\n";
    $md .= "> Saulius, Kaunas. Išanalizuoju, kaip įmonėje juda darbas, ir užsakymus, skaičiuokles, pasiūlymus, sandėlį ir ataskaitas sujungiu į vieną gyvą valdymo centrą (Superhuman Docs, Superhuman Go AI, skriptai). Tikslas: mažiau rankinio darbo, greitesnis procesas.\n\n";
    $md .= "## Kam tinka\n\n" . implode(', ', $AO_SECTORS) . ". Nuo vieno žmogaus iki kelių dešimčių darbuotojų.\n\n";
    $md .= "## Ką sukuriu\n\n";
    foreach ($AO_BUILDS as $b) { $md .= "- {$b[0]}: {$b[1]}\n"; }
    $md .= "\n## Paslaugos ir kainos\n\n";
    foreach ($AO_SERVICES as $s) { $md .= "- **{$s['name']}** — {$s['price']}. {$s['desc']}\n"; }
    $md .= "\n## Pavyzdžiai\n\n";
    foreach ($AO_CASES as $c) {
        $md .= "### {$c['title']}\n{$c['tag']}\n\n";
        foreach ($c['rows'] as $r) { $md .= "- {$r[0]}: {$r[1]}\n"; }
        $md .= "\n";
    }
    $md .= "## Dažni klausimai\n\n";
    foreach ($AO_FAQ as $q) { $md .= "**{$q[0]}**\n{$q[1]}\n\n"; }
    $md .= "## Kontaktai\n\n- El. paštas: " . AO_EMAIL . "\n- Užklausos forma: " . AO_SITE . "/kontaktai/\n- Apie: " . AO_SITE . "/apie/\n";
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
        if ($s['exact']) { $offer['price'] = (string)$s['min']; }
        else { $offer['priceSpecification'] = ['@type' => 'PriceSpecification', 'minPrice' => $s['min'], 'priceCurrency' => 'EUR']; }
        $offers[] = $offer;
    }
    $graph = [
        ['@type' => 'WebSite', '@id' => AO_SITE . '/#web', 'url' => AO_SITE . '/', 'name' => 'Artifex Ordinis', 'inLanguage' => 'lt', 'publisher' => ['@id' => $org]],
        array_filter([
            '@type' => ['Organization', 'LocalBusiness', 'ProfessionalService'],
            '@id' => $org,
            'name' => 'Artifex Ordinis',
            'slogan' => 'Tvarka, kuri dirba už jus.',
            'url' => AO_SITE . '/',
            'logo' => AO_SITE . '/assets/img/logo.svg',
            'image' => AO_SITE . '/assets/img/logo.svg',
            'email' => AO_EMAIL,
            'description' => 'Verslo procesų tvarka: užsakymų valdymas, skaičiuoklės ir komerciniai pasiūlymai, sandėlis, CRM, PDF dokumentai ir vadovo suvestinės vienoje gyvoje sistemoje su Superhuman Docs, AI ir skriptais.',
            'address' => ['@type' => 'PostalAddress', 'addressLocality' => 'Kaunas', 'addressCountry' => 'LT'],
            'areaServed' => ['@type' => 'Country', 'name' => 'Lithuania'],
            'knowsLanguage' => ['lt', 'en'],
            'priceRange' => '€€',
            'founder' => ['@type' => 'Person', 'name' => 'Saulius', 'jobTitle' => 'Procesų konsultantas',
                          'knowsAbout' => ['Verslo procesų optimizavimas', 'Užsakymų valdymas', 'Superhuman Docs', 'Coda', 'Automatizacija', 'Gamybos procesai']],
            'contactPoint' => ['@type' => 'ContactPoint', 'contactType' => 'customer service', 'email' => AO_EMAIL,
                               'url' => AO_SITE . '/kontaktai/', 'availableLanguage' => ['lt', 'en']],
            'hasOfferCatalog' => ['@type' => 'OfferCatalog', 'name' => 'Paslaugos', 'itemListElement' => $offers],
            'sameAs' => $linkedin !== '' ? [$linkedin] : null,
        ]),
    ];
    if ($withFaq) {
        $graph[] = [
            '@type' => 'FAQPage',
            'mainEntity' => array_map(fn($q) => ['@type' => 'Question', 'name' => $q[0],
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => $q[1]]], $AO_FAQ),
        ];
    }
    return json_encode(['@context' => 'https://schema.org', '@graph' => $graph], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
}
