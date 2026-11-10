<?php
// Lietuviškas turinys. Tie patys duomenys eina į HTML, Markdown versiją agentams ir JSON-LD.
// Angliška kopija: inc/lang/en.php. Abu failai turi tuos pačius raktus.

$AO_SERVICES = [
    ['id' => 'pokalbis', 'name' => 'Pokalbis ir gyva peržiūra', 'note' => '30 min. pokalbis su veikiančių sistemų peržiūra',
     'desc' => 'Išsiaiškiname, ar pagalba reikalinga ir įmanoma. Pokalbio metu gyvai parodau, kaip panašus darbas atrodo sistemoje.', 'price' => 'Nemokamai', 'free' => true],
    ['id' => 'auditas', 'name' => 'Tvarkos auditas', 'note' => 'Proceso žemėlapis, skaičiai, prioritetai ir aiški įdiegimo kaina.',
     'desc' => 'Pažiūriu, kaip juda darbas, suskaičiuoju, kiek kainuoja netvarka, ir pasakau, ką keisti pirmiausia.', 'price' => 'Fiksuota, sutariama iš anksto'],
    ['id' => 'idiegimas', 'name' => 'Sistemos sukūrimas', 'note' => 'Nuo kelių valandų darbo iki kelių savaičių sistemos',
     'desc' => 'Kuriu tik tai, ko reikia jūsų darbui, o ne šabloną visiems. Didesnes sistemas kuriame etapais, todėl pirmąsias dalis galite naudoti dar prieš baigiant visą projektą.', 'price' => 'Vienkartinė, sutariama iš anksto'],
    ['id' => 'prieziura', 'name' => 'Priežiūra', 'note' => 'Pakeitimai, klausimai, vienas kontaktas',
     'desc' => 'Keičiasi verslas, keičiasi ir sistema. Priežiūrą galite pasirinkti. Ji mokama kas mėnesį.', 'price' => 'Pasirinktinai, kas mėnesį'],
];

// Ką sistema daro: darbas (job), kurį ji atlieka, ir rezultatas.
$AO_JOBS = [
    ['Nuo užklausos iki sąskaitos', 'Užklausa, pasiūlymas, užsakymas ir sąskaita yra vienoje eilutėje. Informacija nepasimeta tarp laiškų.'],
    ['Pasiūlymai ir sąmatos', 'Sistema ima kainas iš kainyno ir suskaičiuoja sumą pati. Pasiūlymą paruošiate per kelias minutes.'],
    ['Sandėlis ir likučiai', 'Užsakymas pats nurašo prekes iš likučio. Sistema įspėja, kai prekių lieka mažai.'],
    ['Klientai', 'Kiekvieno kliento kontaktai, užklausos ir užsakymai matomi vienoje vietoje.'],
    ['Užduotys ir terminai', 'Kiekvienas žmogus mato, ką daryti toliau ir iki kada.'],
    ['Vadovo suvestinė', 'Svarbiausi skaičiai atsinaujina patys. Ataskaitos laukti nereikia.'],
];

$AO_EXTRAS = [
    ['PDF dokumentai', 'sąskaitos, pasiūlymai ir darbų aktai per minutę'],
    ['Superhuman Go AI asistentas', 'galimybė: jį įsijungiate patys savo paskyroje'],
    ['Svetainės', 'nekainuoja tūkstančių, o prižiūrėti mokėsite patys: jei mokate dirbti su Word, mokėsite ir čia'],
];

$AO_CASES = [
    [
        'tag' => 'Užsakymų valdymas · gamyba, spauda, prekyba',
        'title' => 'Kiekvienas užsakymas matomas nuo užklausos iki pristatymo.',
        'rows' => [
            ['Prieš', 'Užklausos, kainos ir būsenos išmėtytos po laiškus, failus ir žinutes.'],
            ['Sprendimas', 'Viena užsakymo eilutė sujungia kainą, etapą, terminą ir atsakingą žmogų.'],
            ['Po', 'Kiekvienas darbuotojas mato, ką daryti toliau, be skambučių ir perrašinėjimo.'],
        ],
        'demo' => '', // nuoroda į viešą Docs versiją; tuščia = parodoma pokalbio metu
    ],
    [
        'tag' => 'Registracija ir grafikas · klinikos, salonai, servisai',
        'title' => 'Klientas mato tik tikrai laisvus laikus.',
        'rows' => [
            ['Prieš', 'Vizitai derinami telefonu, o specialistų grafikai saugomi atskirai.'],
            ['Sprendimas', 'Sistema iš darbo grafikų sugeneruoja laisvus laikus. Registracijos patenka į bendrą sąrašą.'],
            ['Po', 'Visų specialistų užimtumas matomas viename lange.'],
        ],
        'demo' => '',
    ],
    [
        'tag' => 'Paslaugos → aktai → sąskaitos',
        'title' => 'Nuo atlikto darbo iki išrašytos sąskaitos — keli paspaudimai.',
        'rows' => [
            ['Prieš', 'Darbų aktai ir sąskaitos pildomi rankomis, o kliento rekvizitai kaskart perrašomi iš naujo.'],
            ['Sprendimas', 'Darbai įvedami vieną kartą. Suma apskaičiuojama automatiškai, o aktas ir sąskaita užsipildo patys pagal pasirinktą klientą.'],
            ['Po', 'Visada aišku, kas išrašyta, kas apmokėta ir kuri sąskaita vėluoja.'],
        ],
        'demo' => 'https://docs.superhuman.com/@artifexordinis/3-paslaugos-aktai-saskaitos',
    ],
    [
        'tag' => 'Sąmatos ir skaičiuoklės · statyba, apželdinimas, gamyba',
        'title' => 'Sąmata susidaro iš kainyno, o ne iš atminties.',
        'rows' => [
            ['Prieš', 'Sąmatos skaičiuojamos Excel faile, o kainos kopijuojamos ranka.'],
            ['Sprendimas', 'Prekes ir paslaugas pasirenkate iš kainyno. Sistema suskaičiuoja sumą ir paruošia dokumentą klientui.'],
            ['Po', 'Sąmata paruošiama per kelias minutes, o kainos visada tos pačios.'],
        ],
        'demo' => '',
    ],
    [
        'tag' => 'Servisas · remontas ir aptarnavimas',
        'title' => 'Klientas, darbas, dalys ir sąskaita — vienoje vietoje.',
        'rows' => [
            ['Prieš', 'Darbai, panaudotos dalys ir klientų kontaktai užrašomi skirtingose vietose.'],
            ['Sprendimas', 'Darbų kalendorius susietas su klientais, atliktais darbais ir panaudotomis prekėmis.'],
            ['Po', 'Vadovas mato dienos darbus ir mėnesio pajamas be atskirų ataskaitų.'],
        ],
        'demo' => 'https://docs.superhuman.com/@artifexordinis/servisas',
    ],
];

// Kainodara: rodoma pagrindiniame puslapyje ir /kainos/.
$AO_PRICING = [
    ['Sistemos sukūrimas', 'Mokate vieną kartą. Kainą sutariame iš anksto. Ją skaičiuojame iš to, kiek sistema sutaupys per mėnesį.'],
    ['Platformos licencija', 'Ją mokate Superhuman tik už žmones, kurie kuria struktūrą. Darbuotojai, kurie sistema naudojasi, nemoka.'],
    ['Priežiūra', 'Ją galite pasirinkti. Ji mokama kas mėnesį.'],
];

$AO_PRICING_WHY = [
    ['Kodėl ne valandinis įkainis?', 'Kai mokama už valandas, ilgesnis darbas atneša daugiau pinigų. Aš noriu greitai sukurti tai, kas veikia.'],
    ['Kodėl ne mokestis už kiekvieną žmogų?', 'Toks mokestis auga kartu su jūsų komanda. Jūsų sąskaita už sistemą neturi augti vien todėl, kad pasamdėte žmogų.'],
];

$AO_FAQ = [
    ['Ar dirbate tik su mažomis įmonėmis?',
     'Ne. Svarbu ne dydis ar teisinė forma, o tai, kad darbas kartojasi: užklausos, skaičiavimai, pasiūlymai, užsakymai, ataskaitos. Dirbu ir su vienu žmogumi, ir su kelių šimtų darbuotojų įmone.'],
    ['Ar galite tik patarti, nekurdamas sistemos?',
     'Taip. Tvarkos auditas baigiasi aiškiu sąrašu, ką pakeisti. Kartais užtenka paprastų pakeitimų, kuriuos galite padaryti patys, — tada taip ir pasakysiu.'],
    ['Ar reikės keisti programas, kurias jau naudojame?',
     'Dažniausiai ne. Sistema sujungia tai, ką jau turite: el. paštą, kalendorių, skaičiuokles. Keičiame tik tai, kas iš tikrųjų trukdo.'],
    ['Kieno paskyroje bus sistema?',
     'Jūsų. Superhuman Docs — ne mano platforma: aš joje sukuriu sistemą, pritaikytą būtent jūsų darbui. Kol kuriu, jūsų paskyroje turiu kūrėjo (Doc Maker) licenciją, o baigus darbus ją galima išjungti. Doc Maker licenciją galima bet kada vėl įjungti ir išjungti, todėl prireikus pakeitimų po pusmečio ar metų mokate tik už tą laiką, kol dirbu. Jei patogiau, sistemą galiu sukurti savo paskyroje ir apmokėtą perduoti jums.'],
    ['Kas atsako už mūsų duomenis?',
     'Jūs esate duomenų valdytojas, aš — duomenų tvarkytojas, o platforma (Superhuman Docs) duomenis saugo pagal savo sutartį su jumis. Duomenis tvarkau tik pagal jūsų rašytinius nurodymus, apie bet kokį saugumo incidentą pranešu per 24 valandas, o baigus darbus duomenis grąžinu arba ištrinu per 30 dienų. Visa tai įrašoma į duomenų tvarkymo sutartį pagal BDAR 28 straipsnį.'],
    ['Kiek kainuoja?',
     'Sistemos sukūrimo kainą sutariame iš anksto. Ją skaičiuojame iš to, kiek sistema sutaupys per mėnesį, o ne iš valandų. Pirmas pokalbis nemokamas. Priežiūros kainą gaunate individualiame pasiūlyme.',
     ['/kainos/', 'Kaip skaičiuojama kaina →']],
    ['Ar galiu pamatyti, kaip sistema atrodytų, prieš mokėdamas?',
     'Taip. Savo paskyroje nemokamai sukuriu vieną pagrindinį jūsų procesą su netikrais duomenimis ir jį parodau. Apie tai susitariame pokalbio metu.'],
    ['Kiek kainuoja Superhuman Docs licencijos?',
     'Mokama tik už kūrėjus (Doc Makers), t. y. žmones, kurie kuria naujus dokumentus. Darbuotojai, kurie sistema tik naudojasi ir ją pildo, nemoka. Tinkamiausią planą parinksime pokalbio metu.',
     ['https://superhuman.com/plans', 'Superhuman planai ir kainos →']],
    ['Ar kaina pasikeis, kai pasamdysime naujų žmonių?',
     'Ne. Žmonės, kurie sistema naudojasi, licencijos nemoka. Licencija reikalinga tik tiems, kurie kuria struktūrą: naujas lenteles, puslapius ir taisykles.'],
    ['Kodėl tai dažnai pigiau nei populiarios platformos?',
     'Kiekviena programa turi savo skaitliuką, vadinamą value metric. Daugelis platformų skaičiuoja kiekvieną prisijungusį žmogų, įrašą ar automatizacijos veiksmą. Kai verslas auga, tokia sąskaita auga pati. Superhuman Docs skaičiuoja tik tuos, kurie kuria (Doc Makers). Darbuotojai, kurie sistema naudojasi, nemoka. Todėl per kelerius metus skirtumas dažnai būna kelis kartus. Tikslų palyginimą su jūsų žmonių skaičiumi parodau pokalbio metu.'],
    ['Ar sistemoje veiks dirbtinis intelektas (AI)?',
     'Tai galimybė. Superhuman Go yra AI asistentas Superhuman rinkinyje. Jį galite įsijungti patys savo paskyroje, mano pagalbos tam nereikia. Go naudoja jūsų plano kreditus, todėl jį verta naudoti ten, kur jis atsiperka.'],
    ['Ar padedate ir su kitais Superhuman įrankiais?',
     'Taip. Superhuman Docs yra Superhuman rinkinio dalis. Rinkinyje taip pat yra Superhuman Mail el. paštui, Grammarly tekstams ir Superhuman Go AI asistentas. Galiu padėti juos suderinti, kad el. paštas, dokumentai ir sistema veiktų kartu.'],
    ['Ar mūsų duomenys saugūs?',
     'Duomenys saugomi jūsų Superhuman Docs paskyroje, o ne mano kompiuteryje. Platforma juos perduoda šifruotu ryšiu (TLS) ir laiko šifruotus (AES-256). Prieigą gauna tik tie, kam jos reikia darbui. Daugiau — privatumo politikoje.'],
    ['Kiek laiko visa tai užtrunka?',
     'Priklauso nuo apimties, komandos dydžio ir reikalavimų. Paprastą sistemą kartais galima sukurti per kelias valandas, didesnę — per kelias savaites. Terminus sutariame kiekvienam projektui atskirai: auditas dažniausiai užtrunka 1–2 savaites, o didesnes sistemas kuriame etapais.'],
    ['Kur dirbate?',
     'Nuotoliu, su klientais visoje Lietuvoje: per vaizdo skambučius ir bendrą dokumentą, kuriame matote, kaip sistema kuriama. Rezultatą greičiau parodyti, nei apie jį papasakoti. Dirbu lietuvių ir anglų kalbomis.'],
];

$AO_SECTORS = ['Gamyba', 'Kavinės ir kebabinės', 'Klinikos ir salonai', 'Renginiai', 'Statyba ir remontas',
               'Servisai', 'Prekyba ir sandėlis', 'Konsultantai'];

// Sąsajos tekstai.
$AO_T = [
    'html_lang' => 'lt', 'og_locale' => 'lt_LT',
    'skip' => 'Pereiti prie turinio',
    'brand_home' => 'Artifex Ordinis — pradžia',
    'nav_label' => 'Pagrindinė navigacija',
    'nav_jobs' => 'Ką daro', 'nav_cases' => 'Pavyzdžiai', 'nav_prices' => 'Kainos', 'nav_about' => 'Apie', 'nav_cta' => 'Pokalbis',
    'lang_other' => 'EN', 'lang_other_label' => 'English version',
    'md_title' => 'Santrauka AI agentams',

    'home_title' => 'Artifex Ordinis — viena vieta jūsų verslui',
    'home_desc' => 'Užsakymai, pasiūlymai, sandėlis, klientai ir ataskaitos vienoje gyvoje sistemoje, sukurtoje pagal jūsų darbą. Kaina priklauso nuo naudos. Pirmas pokalbis nemokamas.',
    'hero_eyebrow' => 'Tvarkos architektas',
    'hero_h1' => 'Tvarka, kuri dirba jums.',
    'hero_lead' => 'Viena vieta jūsų verslui, kuri auga kartu su jumis. Užsakymai, pasiūlymai, sandėlis, klientai ir ataskaitos sujungti į vieną gyvą sistemą. Ją kuriu pagal tai, kaip jūsų versle jau juda darbas.',
    'hero_cta' => 'Užsisakyti 30 min. pokalbį',
    'hero_cases' => 'Pažiūrėti pavyzdžius',
    'hero_note' => 'Pirmas pokalbis nemokamas. Jo metu gyvai parodau veikiančias sistemas.',
    'hero_fig' => 'Artifex Ordinis ženklas: arka iš penkių akmenų su variniu raktiniu akmeniu',

    'pain_label' => 'Ar atpažįstate?',
    'pain_h2' => 'Netvarka retai atrodo kaip netvarka.',
    'pain_p' => 'Dažniausiai ji atrodo kaip „pas mus taip įprasta“.',
    'pain_items' => [
        'Informacija išbarstyta: Excel, el. paštas, „Messenger“ ir kažkieno atmintis.',
        '„Paklausk Rasos, tik ji žino.“',
        'Tą patį įvedate du ar tris kartus — ir kartais su klaida.',
        'Viena klaida, kurios buvo galima išvengti, virsta perdarytu darbu, vėlavimu ir nepatenkintu klientu.',
        'Apie problemą pirmas praneša klientas, o ne jūsų sistema.',
    ],

    'jobs_label' => 'Ką sistema daro',
    'jobs_h2' => 'Kiekvienas darbas turi savo vietą.',
    'jobs_p' => 'Sistema sujungia tai, kas šiandien išbarstyta po failus ir laiškus. Duomenis įvedate vieną kartą, o jie matomi visur, kur reikia.',
    'extras_h3' => 'Papildomai',

    'sectors_label' => 'Kam tinka',
    'sectors_h2' => 'Kiekvienam verslui, kuris skaičiuoja, rengia pasiūlymus ir vykdo užsakymus.',
    'sectors_aria' => 'Sričių pavyzdžiai',
    'sectors_note' => 'Nuo vieno žmogaus iki kelių šimtų darbuotojų įmonės. Svarbu ne dydis, o tai, kad darbas kartojasi.',
    'sectors_aside' => 'Tai ne šablonas visiems. Pradedame nuo to, kaip dirbate jūs, ir sukuriame tik tai, ko reikia.',

    'stmt_label' => 'Gyvai, ne skaidrėse',
    'stmt_quote' => 'Jokių „PowerPoint“ prezentacijų. Vadovas, komanda ir investuotojas mato <em>tuos pačius skaičius</em> tą pačią akimirką.',
    'stmt_p' => 'Tikslas visada tas pats: mažiau rankinio darbo, greitesnis procesas ir daugiau laiko tam, kas iš tikrųjų svarbu.',

    'cases_label' => 'Pavyzdžiai',
    'cases_h2' => 'Ką galiu parodyti.',
    'cases_p' => 'Tai ne šablonai. Kiekviena sistema kuriama pagal konkretų darbą, o pavyzdžiai parodo kryptį.',
    'case_try' => 'Išbandyti sistemą →',
    'case_call' => 'Pamatyti pokalbio metu →',
    'process_h3' => 'Kaip vyksta kūrimas',
    'process_p1' => 'Sistemą kuriame etapais. Po kiekvieno etapo jūs ją išbandote, o aš pataisau.',
    'process_p2' => 'Tam reikia ir mano, ir jūsų komandos laiko. Jūs paskiriate žmogų, kuris atsako į klausimus ir išbando sprendimus.',
    'demo_note' => 'Viešose peržiūrose — netikri duomenys, todėl sistemą galite drąsiai spaudinėti patys. Kitus pavyzdžius gyvai parodau pokalbio metu.',

    'how_label' => 'Kaip dirbu',
    'how_h2' => 'Pirma suprasti, tik tada kurti.',
    'how_aside' => 'Tai bendras darbas. Kalbuosi su keliais jūsų žmonėmis, ne tik su vadovu. Kiekvienas parodo, kaip iš tikrųjų atlieka savo darbą. Taip randu vietas, kur darbas stringa ar kartojasi. Jūs paskiriate atsakingą žmogų ir skiriate laiko. Sistema nėra vienkartinis pirkinys: ji auga kartu su jūsų verslu.',

    'price_label' => 'Kainos',
    'price_h2' => 'Kaina priklauso nuo naudos, ne nuo valandų.',
    'price_more' => 'Kodėl taip ir kiek tai kainuotų jums →',
    'price_note' => 'Superhuman Docs — platforma, kurioje kuriu. Sistema lieka jūsų paskyroje.',
    'price_plans' => 'Superhuman planai ir kainos →',

    'about_label' => 'Apie mane',
    'about_p1' => 'Dirbau statybose, logistikoje, gamyboje ir techninėje priežiūroje — Lietuvoje ir užsienyje. Daugelyje įmonių mačiau tą patį: darbas vyksta lėtai ir rankomis, viskas laikoma Excel lentelėse, o tvarkinga sistema atrodo kaip kelių dešimčių tūkstančių eurų projektas. Dažniausiai taip nėra.',
    'about_p2' => 'Todėl sistemas kuriu „no-code“ įrankiais, kuriuos lengva suprasti, o šiek tiek pasimokius — ir pasikoreguoti patiems. Mano tikslas — ne pririšti jus prie savęs, o išmokyti ir atiduoti įrankį į jūsų rankas, jei norite mokytis.',
    'about_link' => 'Mano istorija →',
    'portrait_alt' => 'Saulius Elinskas',

    'faq_label' => 'Dažni klausimai',
    'faq_h2' => 'Ko dažniausiai klausiama.',

    'contact_label' => 'Kontaktai',
    'contact_h2' => 'Kuri vieta jūsų darbe stringa?',
    'contact_p' => 'Papasakokite apie ją. Aš paruošiu demo, kuris tą problemą sprendžia. 30 min. pokalbio metu jūs išbandysite demo gyvai.',
    'c_email' => 'El. paštas', 'c_phone' => 'Telefonas', 'c_work' => 'Darbas', 'c_work_val' => 'Nuotoliu, visoje Lietuvoje',

    // Kainų puslapis
    'pr_title' => 'Kainos — Artifex Ordinis',
    'pr_desc' => 'Kaip skaičiuojama sistemos kaina: vienkartinis sukūrimas pagal naudą, licencija tik kuriantiems žmonėms ir pasirinktinė priežiūra.',
    'pr_label' => 'Kainos',
    'pr_h1' => 'Kaina priklauso nuo naudos, ne nuo valandų.',
    'pr_lead' => 'Mokate už tris aiškiai atskirtus dalykus. Kiekvieną jų žinote iš anksto.',
    'pr_why_label' => 'Kodėl taip',
    'pr_why_h2' => 'Kaina neturi augti be priežasties.',
    'pr_calc_label' => 'Skaičiuoklė',
    'pr_calc_h2' => 'Kiek tai kainuotų jums?',
    'pr_calc_p' => 'Įveskite savo skaičius: kiek žmonių dirba, kiek laiko užima rankinis darbas ir kiek žmonių kurs sistemą. Skaičiuoklė parodys dabartinės tvarkos kainą ir palyginimą per trejus metus.',
    'pr_calc_frame' => 'Tvarkos skaičiuoklė',
    'pr_calc_lang' => '',
    'pr_calc_none' => 'Skaičiuoklę kartu užpildome pokalbio metu, su jūsų skaičiais.',
    'pr_calc_open' => 'Atidaryti skaičiuoklę naujame lange →',
    'pr_faq_h2' => 'Klausimai apie kainą',
    'pr_cta_h2' => 'Norite pamatyti savo skaičius?',
    'pr_cta_p' => 'Pirmas pokalbis nemokamas. Jo metu kartu suskaičiuojame, kiek jums kainuoja dabartinė tvarka.',
    'pr_faq_ids' => [7, 8, 9, 3],

    // Poraštė
    'foot_label' => 'Poraštės navigacija',
    'f_about' => 'Apie', 'f_contacts' => 'Kontaktai', 'f_privacy' => 'Privatumo politika',

    // Forma
    'form_frame' => 'Užklausos forma',
    'form_toolname' => 'uzsakyti_pokalbi',
    'form_tool' => 'Užsiregistruoti nemokamam 30 min. pokalbiui su gyva sistemų peržiūra su Artifex Ordinis (Saulius, nuotoliu visoje Lietuvoje) apie verslo procesų tvarką. Reikia vardo, el. pašto ir trumpo aprašymo, kokią problemą norima išspręsti.',
    'form_ok' => 'Ačiū! Užklausą gavau ir atsakysiu per vieną darbo dieną.',
    'form_err' => 'Nepavyko išsiųsti. Parašykite tiesiai į',
    'form_missing' => 'Užpildykite vardą, el. paštą ir žinutę.',
    'form_name' => 'Vardas', 'form_email' => 'El. paštas', 'form_company' => 'Įmonė', 'form_optional' => '(nebūtina)',
    'form_msg' => 'Kuri vieta jūsų darbe stringa?', 'form_site' => 'Svetainė',
    'form_submit' => 'Užsiregistruoti pokalbiui',
    'form_privacy' => 'Duomenis naudosiu tik atsakyti į jūsų užklausą. Daugiau —',
    'form_privacy_link' => 'privatumo politikoje',
    'form_agent' => '<b>Turite AI asistentą?</b> Ši forma pažymėta kaip WebMCP įrankis <code>uzsakyti_pokalbi</code>, todėl asistentas naršyklėje gali ją užpildyti už jus.',
];
