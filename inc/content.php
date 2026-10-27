<?php
// Turinys vienoje vietoje: tie patys duomenys naudojami HTML puslapyje,
// Markdown versijoje agentams ir struktūruotuose duomenyse (JSON-LD).

$AO_SERVICES = [
    ['id' => 'pokalbis', 'name' => 'Pokalbis ir demonstracija', 'note' => '30 min. pokalbis ir vieno proceso demonstracija',
     'desc' => 'Išsiaiškiname, ar pagalba reikalinga ir įmanoma. Jei norite, parodau vieno jūsų proceso demonstraciją.', 'price' => 'Nemokamai', 'free' => true],
    ['id' => 'auditas', 'name' => 'Tvarkos auditas', 'note' => 'Proceso žemėlapis, skaičiai, prioritetai ir aiški įdiegimo kaina.',
     'desc' => 'Pažiūriu, kaip juda darbas, suskaičiuoju, kiek kainuoja netvarka, ir pasakau, ką keisti pirmiausia.', 'price' => 'Fiksuota, sutariama iš anksto'],
    ['id' => 'idiegimas', 'name' => 'Sistemos įdiegimas', 'note' => 'Nuo kelių valandų darbo iki kelių savaičių sistemos',
     'desc' => 'Kuriu tik tai, ko reikia jūsų darbui, o ne šabloną visiems. Didesnes sistemas diegiame etapais, todėl pirmąsias dalis galima naudoti dar prieš baigiant visą projektą.', 'price' => 'Fiksuota, pagal apimtį'],
    ['id' => 'prieziura', 'name' => 'Priežiūra', 'note' => 'Pakeitimai, klausimai, vienas kontaktas',
     'desc' => 'Keičiasi verslas, keičiasi ir sistema. Priežiūrai siūlau mėnesio paketus pagal sistemos dydį.', 'price' => 'Mėnesio paketas'],
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
        'demo' => '', // nuoroda į peržiūrimą Docs versiją; tuščia = „Peržiūra kuriama“
    ],
    [
        'tag' => 'Optikos salonai · vizitų registracija',
        'title' => 'Laisvi vizitų laikai susidaro patys pagal kiekvieno filialo darbo laiką.',
        'rows' => [
            ['Iššūkis', 'Keli filialai, skirtingas darbo laikas ir specialistų grafikai, o klientas turi matyti tik tikrai laisvus laikus.'],
            ['Sprendimas', 'Filialų darbo laikas ir specialistų grafikai vienoje vietoje. Sistema sugeneruoja laisvus laikus, o užregistruoti vizitai patenka į bendrą sąrašą.'],
            ['Po', 'Visi filialai ir jų užimtumas matomi viename lange.'],
        ],
        'demo' => '',
    ],
    [
        'tag' => 'Paslaugos · darbų aktai ir sąskaitos',
        'title' => 'Nuo atlikto darbo iki išsiųstos sąskaitos — keli paspaudimai.',
        'rows' => [
            ['Prieš', 'Darbų aktai ir sąskaitos pildomi rankomis ir siunčiami po vieną.'],
            ['Sprendimas', 'Darbai fiksuojami lentelėje, suma apskaičiuojama automatiškai, PDF aktas ir sąskaita sugeneruojami ir išsiunčiami klientui. Klientas mato savo statistiką.'],
            ['Po', 'Visada aišku, kas išsiųsta, kas dar ne ir kiek uždirbta per mėnesį.'],
        ],
        'demo' => '',
    ],
    [
        'tag' => 'Šokių mokyklos · Danc’in',
        'title' => 'Mokytojai moko, o ne pildo lenteles.',
        'rows' => [
            ['Prieš', 'Lankomumas ir abonementai sekami rankomis, o mokytojai administravimui skiria laiką, kurio reikia pamokoms.'],
            ['Sprendimas', 'Registracija į pamoką QR kodu, abonementų likučiai tikruoju laiku, priminimai mokiniams apie likusias pamokas ir abonemento galiojimą, administravimo langas.'],
            ['Po', 'Mokytojai sutaupo laiko, mokiniai žino, kiek pamokų liko, o mokykla mato, kas atėjo, nieko neperrašinėdama.'],
        ],
        'demo' => '',
    ],
    [
        'tag' => 'Automatizacija · kai darbas kartojasi',
        'title' => 'Jei tas pats veiksmas kartojasi kasdien, jį atlieka skriptas.',
        'rows' => [
            ['Prieš', 'Šimtai failų rūšiuojami ir lyginami rankomis, duomenys iš PDF perrašomi į lentelę.'],
            ['Sprendimas', 'Skriptas atpažįsta susijusius failus, ištraukia duomenis iš PDF ir ZIP archyvų ir sudeda juos į lentelę.'],
            ['Po', 'Žmogus tikrina tik išimtis, o ne kiekvieną eilutę.'],
        ],
        'demo' => '',
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
     'Jūsų. Superhuman Docs — ne mano platforma: aš joje sukuriu sistemą, pritaikytą būtent jūsų darbui. Kol kuriu, jūsų paskyroje turiu kūrėjo (Doc Maker) licenciją, o baigus darbus ją galima išjungti. Doc Maker licenciją galima bet kada vėl įjungti ir išjungti, todėl prireikus pakeitimų po pusmečio ar metų mokate tik už tą laiką, kol dirbu. Jei patogiau, sistemą galiu sukurti savo paskyroje ir apmokėtą perduoti jums.'],
    ['Kas atsako už mūsų duomenis?',
     'Jūs esate duomenų valdytojas, aš — duomenų tvarkytojas, o platforma (Superhuman Docs) duomenis saugo pagal savo sutartį su jumis. Duomenis tvarkau tik pagal jūsų rašytinius nurodymus, apie bet kokį saugumo incidentą pranešu per 24 valandas, o baigus darbus duomenis grąžinu arba ištrinu per 30 dienų. Visa tai įrašoma į duomenų tvarkymo sutartį pagal BDAR 28 straipsnį.'],
    ['Kiek kainuoja?',
     'Priklauso nuo apimties: kartais užtenka kelių valandų darbo, kartais reikia kelių savaičių sistemos. Pokalbis ir vieno proceso demonstracija nemokami. Po audito gaunate fiksuotą kainą sutartai darbų apimčiai — dar prieš pradedant darbus. Priežiūrai siūlau mėnesio paketus pagal sistemos dydį.'],
    ['Ar galiu pamatyti, kaip sistema atrodytų, prieš mokėdamas?',
     'Taip. Savo paskyroje nemokamai sukuriu vieną pagrindinį jūsų procesą su netikrais duomenimis ir jį parodau. Užsiregistruoti demonstracijai galite užklausos formoje.'],
    ['Kiek kainuoja Superhuman Docs licencijos?',
     'Mokama tik už kūrėjus (Doc Makers), t. y. žmones, kurie kuria naujus dokumentus. Darbuotojai, kurie sistema tik naudojasi ir ją pildo, nemoka. Tinkamiausią planą parinksime pokalbio metu.',
     ['https://superhuman.com/plans', 'Superhuman planai ir kainos →']],
    ['Kodėl tai dažnai pigiau nei populiarios platformos?',
     'Kiekviena programa turi savo skaitliuką, vadinamą value metric. Daugelis platformų skaičiuoja kiekvieną prisijungusį žmogų, įrašą ar automatizacijos veiksmą. Kai verslas auga, tokia sąskaita auga pati. Superhuman Docs skaičiuoja tik tuos, kurie kuria (Doc Makers). Darbuotojai, kurie sistema naudojasi, nemoka. Todėl per kelerius metus skirtumas dažnai būna kelis kartus. Tikslų palyginimą su jūsų žmonių skaičiumi parodau pokalbio metu.'],
    ['Ar sistemoje veiks dirbtinis intelektas (AI)?',
     'Gali veikti, jei jo reikia. Superhuman Docs yra Superhuman rinkinio dalis, todėl, jei norite, sistemą galima sujungti su Superhuman Mail, Grammarly ir Superhuman Go AI asistentu jūsų paskyroje. AI funkcijos naudoja jūsų plano kreditus, todėl jas diegiame tik ten, kur jos atsiperka.'],
    ['Ar padedate ir su kitais Superhuman įrankiais?',
     'Taip. Superhuman Docs yra Superhuman rinkinio dalis. Rinkinyje taip pat yra Superhuman Mail el. paštui, Grammarly tekstams ir Superhuman Go AI asistentas. Galiu padėti įsivesti ir šiuos įrankius, kad el. paštas, dokumentai ir sistema veiktų kartu.'],
    ['Ar mūsų duomenys saugūs?',
     'Duomenys saugomi Superhuman Docs platformoje, o ne mano kompiuteryje: perduodami šifruotu ryšiu (TLS), laikomi šifruoti (AES-256). Prieiga suteikiama tik tiems, kam jos reikia darbui. Daugiau — privatumo politikoje.'],
    ['Kiek laiko visa tai užtrunka?',
     'Priklauso nuo apimties, komandos dydžio ir reikalavimų. Paprastą sistemą kartais galima sukurti per kelias valandas, didesnę — per kelias savaites. Terminus sutariame kiekvienam projektui atskirai: auditas dažniausiai užtrunka 1–2 savaites, o didesnes sistemas diegiame etapais.'],
    ['Kur dirbate?',
     'Nuotoliu, su klientais visoje Lietuvoje: per vaizdo skambučius ir bendrą dokumentą, kuriame matote, kaip sistema kuriama. Rezultatą greičiau parodyti, nei apie jį papasakoti. Dirbu lietuvių ir anglų kalbomis.'],
];

$AO_BUILDS = [
    ['Užsakymų valdymas', 'nuo užklausos iki sąskaitos'],
    ['Skaičiuoklės ir komerciniai pasiūlymai', 'per kelias minutes, ne valandas'],
    ['Sandėlis ir likučiai', 'nurašomi automatiškai pagal užsakymus'],
    ['Klientai ir užklausos', 'paprasta CRM sistema vienoje vietoje'],
    ['Vadovo suvestinė', 'svarbiausi skaičiai tikruoju laiku'],
    ['PDF dokumentai', 'sąskaitos, pasiūlymai ir darbų aktai per minutę'],
    ['AI pagalbininkas', 'Superhuman Go jūsų paskyroje, jei jo reikia'],
    ['Naršyklės plėtiniai ir skriptai', 'kai neužtenka lentelių: duomenų surinkimas ir įkėlimas'],
    ['Svetainės', 'nekainuoja tūkstančių, o prižiūrėti mokėsite patys: jei mokate dirbti su Word, mokėsite ir čia'],
];

$AO_SECTORS = ['Gamyba', 'Kavinės ir kebabinės', 'Klinikos ir salonai', 'Renginiai', 'Statyba ir remontas',
               'Servisai', 'Prekyba ir sandėlis', 'Konsultantai'];

// Markdown versija agentams (Accept: text/markdown)
function ao_markdown_home(): string
{
    global $AO_SERVICES, $AO_CASES, $AO_FAQ, $AO_BUILDS, $AO_SECTORS;
    $md  = "# Artifex Ordinis — verslo procesų tvarka\n\n";
    $md .= "> Saulius, nuotoliu visoje Lietuvoje. Išanalizuoju, kaip įmonėje juda darbas, ir užsakymus, skaičiuokles, pasiūlymus, sandėlį ir ataskaitas sujungiu į vieną gyvą valdymo centrą (Superhuman Docs, Superhuman Go AI, skriptai). Tikslas: mažiau rankinio darbo, greitesnis procesas.\n\n";
    $md .= "## Kam tinka\n\n" . implode(', ', $AO_SECTORS) . ". Nuo vieno žmogaus iki kelių dešimčių darbuotojų.\n\n";
    $md .= "## Galimybės\n\n";
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
    foreach ($AO_FAQ as $q) { $md .= "**{$q[0]}**\n{$q[1]}" . (!empty($q[2]) ? " {$q[2][0]}" : '') . "\n\n"; }
    $md .= "## Kontaktai\n\n- El. paštas: " . AO_EMAIL . "\n- Telefonas: " . AO_PHONE_DISPLAY . "\n- Užklausos forma: " . AO_SITE . "/kontaktai/\n- Apie: " . AO_SITE . "/apie/\n";
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
        ['@type' => 'WebSite', '@id' => AO_SITE . '/#web', 'url' => AO_SITE . '/', 'name' => 'Artifex Ordinis', 'inLanguage' => 'lt', 'publisher' => ['@id' => $org]],
        array_filter([
            '@type' => ['Organization', 'ProfessionalService'],
            '@id' => $org,
            'name' => 'Artifex Ordinis',
            'slogan' => 'Tvarka, kuri dirba jums.',
            'url' => AO_SITE . '/',
            'logo' => AO_SITE . '/assets/img/logo.svg',
            'image' => AO_SITE . '/assets/img/logo.svg',
            'email' => AO_EMAIL,
            'telephone' => AO_PHONE,
            'description' => 'Verslo procesų tvarka: užsakymų valdymas, skaičiuoklės ir komerciniai pasiūlymai, sandėlis, CRM, PDF dokumentai ir vadovo suvestinės vienoje gyvoje sistemoje su Superhuman Docs, AI ir skriptais.',
            'address' => ['@type' => 'PostalAddress', 'addressCountry' => 'LT'],
            'areaServed' => ['@type' => 'Country', 'name' => 'Lithuania'],
            'knowsLanguage' => ['lt', 'en'],
            'priceRange' => '€€',
            'founder' => ['@type' => 'Person', 'name' => 'Saulius', 'jobTitle' => 'Procesų konsultantas',
                          'knowsAbout' => ['Verslo procesų optimizavimas', 'Užsakymų valdymas', 'Superhuman Docs', 'Coda', 'Automatizacija', 'Gamybos procesai']],
            'contactPoint' => ['@type' => 'ContactPoint', 'contactType' => 'customer service', 'email' => AO_EMAIL, 'telephone' => AO_PHONE,
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
