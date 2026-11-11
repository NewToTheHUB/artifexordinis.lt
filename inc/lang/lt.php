<?php
// Lietuviškas turinys. Tie patys duomenys eina į HTML, Markdown versiją agentams ir JSON-LD.
// Angliška kopija: inc/lang/en.php. Abu failai turi tuos pačius raktus.

$AO_SERVICES = [
    ['id' => 'pokalbis', 'name' => 'Pokalbis ir gyva peržiūra', 'note' => '30 min. pokalbis su veikiančių sistemų peržiūra',
     'desc' => 'Išsiaiškiname, ar pagalba reikalinga ir įmanoma. Pokalbio metu gyvai parodau, kaip panašus darbas atrodo sistemoje.', 'price' => 'Nemokamai', 'free' => true],
    ['id' => 'auditas', 'name' => 'Tvarkos auditas', 'note' => 'Proceso žemėlapis, skaičiai, prioritetai ir aiški kūrimo kaina.',
     'desc' => 'Pažiūriu, kaip juda darbas, suskaičiuoju, kiek kainuoja netvarka, ir pasakau, ką keisti pirmiausia.', 'price' => 'Fiksuota, sutariama iš anksto'],
    ['id' => 'idiegimas', 'name' => 'Sistemos sukūrimas', 'note' => 'Nuo kelių valandų darbo iki kelių savaičių sistemos',
     'desc' => 'Kuriu tik tai, ko reikia jūsų darbui. Didesnes sistemas kuriame etapais, todėl pirmąsias dalis galite naudoti anksčiau.', 'price' => 'Vienkartinė, sutariama iš anksto'],
    ['id' => 'prieziura', 'name' => 'Priežiūra', 'note' => 'Pakeitimai, klausimai, vienas kontaktas',
     'desc' => 'Keičiasi verslas, keičiasi ir sistema. Priežiūrą galite pasirinkti. Ji mokama kas mėnesį.', 'price' => 'Pasirinktinai, kas mėnesį'],
];

// Darbo eiga: žingsnis, kaip yra dabar, kaip bus su sistema.
$AO_FLOW = [
    ['Užklausa',   'Užklausos ir kainos išbarstytos po laiškus. Neaišku, kam kokią kainą siūlėte. Kolega, perėmęs darbą, visko ieško iš naujo.',
                   'Kiekviena užklausa turi vieną kortelę su visa istorija ir siūlytomis kainomis. Kolegai nieko ieškoti nereikia. Matote, į kurią dar neatsakėte.'],
    ['Pasiūlymas', 'Pasiūlymą ruošiate valandą: ieškote kainų, tikrinate sumas, taisote kliento duomenis arba laukiate, kol tai padarys administratorė.',
                   'Kainas sistema ima iš kainyno, o šablonas jau paruoštas. Pasirenkate klientą, ir jo duomenys užsipildo patys.'],
    ['Užsakymas',  'Tą patį užsakymą įrašote kelis kartus. Senų užsakymų būseną žino tik vienas žmogus, todėl tenka klausti.',
                   'Pasiūlymas tampa užsakymu vienu paspaudimu. Užsakytos prekės nusirašo iš likučio. Kai likutis mažėja, sistema gali išsiųsti laišką tiekėjui.'],
    ['Užduotys',   'Kas ką daro, žino tik tas, kuris paskyrė. Būseną klausiate telefonu arba einate pasitikrinti patys.',
                   'Kiekvienas mato savo užduotis ir terminus. Visi darbai savo vietose, todėl vadovui nereikia skambinti.'],
    ['Dokumentai', 'Sąskaitas ir aktus pildote Word faile. Ieškote, kuri versija naujausia, ir tai užtrunka.',
                   'Sąskaita ir aktas užsipildo patys iš užsakymo per minutę. Dokumentai saugomi prie užsakymo, todėl jų ieškoti nereikia.'],
    ['Ataskaita',  'Mėnesio ataskaitą renkate iš kelių failų. Arba laukiate, kol analitikas ją parodys susirinkime. Tada skaičiai jau pasenę.',
                   'Aktualiausi skaičiai matomi realiu laiku, todėl ataskaitos laukti nereikia. Jei reikia, tą pačią ataskaitą galima išsaugoti kaip šabloną.'],
];

// Pavyzdžiai: problema, senas ir naujas būdas, rezultatas.
// 'demo' — vieša nuoroda. 'embed' — Superhuman Docs įterpimo (Share → Embed) nuoroda; tuščia = rodoma tik nuoroda.
$AO_CASES = [
    [
        'tag' => 'Paslaugos → aktai → sąskaitos',
        'problem' => 'Sąskaitą pildote Word faile, o kliento rekvizitus kaskart perrašote.',
        'old' => 'Atliktus darbus užsirašote atskirai. Tada atidarote seną sąskaitą, keičiate datas, sumas ir rekvizitus. Išsaugote naują versiją ir siunčiate.',
        'new' => 'Darbus įvedate vieną kartą. Pasirenkate klientą, ir aktas su sąskaita užsipildo patys.',
        'result' => 'Visada matote, kas išrašyta, kas apmokėta ir kuri sąskaita vėluoja.',
        'demo' => 'https://docs.superhuman.com/@artifexordinis/3-paslaugos-aktai-saskaitos', 'embed' => '',
    ],
    [
        'tag' => 'Servisas · remontas ir aptarnavimas',
        'problem' => 'Darbai, dalys ir klientai užrašyti skirtingose vietose.',
        'old' => 'Vizitai yra kalendoriuje, dalys – sąsiuvinyje, kontaktai – telefone. Mėnesio pajamas skaičiuojate vakare.',
        'new' => 'Darbų kalendorius susietas su klientais, atliktais darbais ir panaudotomis dalimis.',
        'result' => 'Vadovas mato dienos darbus ir mėnesio pajamas be atskirų ataskaitų.',
        'demo' => 'https://docs.superhuman.com/@artifexordinis/servisas', 'embed' => '',
    ],
    [
        'tag' => 'Sąmatos ir pasiūlymai · statyba, apželdinimas, gamyba',
        'problem' => 'Viena sąmata užtrunka valandą.',
        'old' => 'Atidarote Excel failą, ieškote naujausių kainų ir kopijuojate jas ranka. Sumas tikrinate dar kartą.',
        'new' => 'Prekes ir paslaugas pasirenkate iš kainyno. Sistema suskaičiuoja sumą ir paruošia dokumentą klientui.',
        'result' => 'Sąmatą paruošiate per kelias minutes, o kainos visada tos pačios.',
        'demo' => '', 'embed' => '',
    ],
    [
        'tag' => 'Užsakymų valdymas · gamyba, spauda, prekyba',
        'problem' => 'Užsakymo būseną žino tik vienas žmogus.',
        'old' => 'Užklausos, kainos ir būsenos išmėtytos po laiškus, failus ir žinutes. Kai žmogus atostogauja, darbas stoja.',
        'new' => 'Viena užsakymo eilutė sujungia kainą, etapą, terminą ir atsakingą žmogų.',
        'result' => 'Kiekvienas darbuotojas mato, ką daryti toliau, be skambučių ir perrašinėjimo.',
        'demo' => '', 'embed' => '',
    ],
    [
        'tag' => 'Registracija ir grafikas · klinikos, salonai, servisai',
        'problem' => 'Vizitus derinate telefonu.',
        'old' => 'Klientas skambina, jūs tikrinate kelis grafikus ir siūlote laiką. Kartais tas pats laikas užimamas du kartus.',
        'new' => 'Sistema iš darbo grafikų sugeneruoja laisvus laikus. Registracijos patenka į bendrą sąrašą.',
        'result' => 'Klientas mato tik tikrai laisvus laikus. Visų specialistų užimtumas matomas viename lange.',
        'demo' => '', 'embed' => '',
    ],
];

$AO_PRICING = [
    ['Sistemos sukūrimas', 'Mokate vieną kartą. Kainą sutariame iš anksto. Ją skaičiuojame iš to, kiek sistema sutaupys per mėnesį.'],
    ['Platformos licencija', 'Ją mokate Superhuman tik už žmones, kurie kuria struktūrą. Darbuotojai, kurie sistema naudojasi, nemoka.'],
    ['Priežiūra', 'Ją galite pasirinkti. Ji mokama kas mėnesį.'],
];

$AO_PRICING_WHY = [
    ['Kodėl ne valandinis įkainis?', 'Kai mokama už valandas, ilgesnis darbas atneša daugiau pinigų. Aš noriu greitai sukurti tai, kas veikia.'],
    ['Kodėl ne mokestis už kiekvieną žmogų?', 'Toks mokestis auga kartu su jūsų komanda. Jūsų sąskaita už sistemą neturi augti vien todėl, kad pasamdėte žmogų.'],
];

// DUK. 'g' — grupė (darbas, kaina, platforma, nedarau). 'top' — rodoma pagrindiniame puslapyje.
$AO_FAQ_GROUPS = [
    'darbas'    => 'Darbas',
    'kaina'     => 'Kaina',
    'platforma' => 'Platforma ir duomenys',
    'nedarau'   => 'Ko nedarau ir kada netinka',
];

$AO_FAQ = [
    ['g' => 'kaina', 'top' => true, 'q' => 'Kiek kainuoja?',
     'a' => 'Sistemos sukūrimo kainą sutariame iš anksto. Ją skaičiuojame iš to, kiek sistema sutaupys per mėnesį, o ne iš valandų. Pirmas pokalbis nemokamas. Priežiūros kainą gaunate individualiame pasiūlyme.',
     'link' => ['kainos', 'Kaip skaičiuojama kaina →']],
    ['g' => 'darbas', 'top' => true, 'q' => 'Ar galiu pamatyti, kaip sistema atrodytų, prieš mokėdamas?',
     'a' => 'Taip. Savo paskyroje nemokamai sukuriu vieną pagrindinį jūsų procesą su netikrais duomenimis ir jį parodau. Apie tai susitariame pokalbio metu.'],
    ['g' => 'darbas', 'top' => true, 'q' => 'Ar reikės keisti programas, kurias jau naudojame?',
     'a' => 'Dažniausiai ne. Sistema sujungia tai, ką jau turite: el. paštą, kalendorių, skaičiuokles. Keičiame tik tai, kas iš tikrųjų trukdo.'],
    ['g' => 'platforma', 'top' => true, 'q' => 'Kieno paskyroje bus sistema?',
     'a' => 'Jūsų. Superhuman Docs — ne mano platforma: aš joje sukuriu sistemą, pritaikytą jūsų darbui. Kol kuriu, jūsų paskyroje turiu kūrėjo (Doc Maker) licenciją. Baigus darbus ją galima išjungti, o prireikus pakeitimų – vėl įjungti. Todėl mokate tik už tą laiką, kol dirbu. Jei patogiau, sistemą galiu sukurti savo paskyroje ir apmokėtą perduoti jums.'],
    ['g' => 'nedarau', 'top' => true, 'q' => 'Ar tvarkote buhalteriją ir mokesčių deklaracijas?',
     'a' => 'Ne. PVM deklaracijas, i.SAF, SAF-T ir darbo užmokestį tvarko apskaitos programa arba buhalteris. Sistema tvarko tai, kas vyksta šalia apskaitos: užklausas, užsakymus, užduotis. Ji gali paruošti duomenis buhalteriui.'],

    ['g' => 'darbas', 'q' => 'Ar dirbate tik su mažomis įmonėmis?',
     'a' => 'Ne. Svarbu ne dydis ar teisinė forma, o tai, kad darbas kartojasi: užklausos, skaičiavimai, pasiūlymai, užsakymai, ataskaitos. Dirbu ir su vienu žmogumi, ir su kelių šimtų darbuotojų įmone.'],
    ['g' => 'darbas', 'q' => 'Ar galite tik patarti, nekurdamas sistemos?',
     'a' => 'Taip. Tvarkos auditas baigiasi aiškiu sąrašu, ką pakeisti. Kartais užtenka paprastų pakeitimų, kuriuos galite padaryti patys. Tada taip ir pasakysiu.'],
    ['g' => 'darbas', 'q' => 'Ar tvarkote ir mažus kasdienius darbus?',
     'a' => 'Taip. Dažnai daugiausia laiko atima ne dideli procesai, o maži darbai, kuriuos darote kelis kartus per dieną. Pavyzdžiui, kopijuojate kontaktus, perrašote sumas ar ieškote failo. Per metus tokie darbai virsta savaitėmis.'],
    ['g' => 'darbas', 'q' => 'Kiek laiko visa tai užtrunka?',
     'a' => 'Priklauso nuo apimties, komandos dydžio ir reikalavimų. Paprastą sistemą kartais galima sukurti per kelias valandas, didesnę — per kelias savaites. Auditas dažniausiai užtrunka 1–2 savaites, o didesnes sistemas kuriame etapais.'],
    ['g' => 'darbas', 'q' => 'Kur dirbate?',
     'a' => 'Nuotoliu, su klientais visoje Lietuvoje: per vaizdo skambučius ir bendrą dokumentą, kuriame matote, kaip sistema kuriama. Dirbu lietuvių ir anglų kalbomis.'],
    ['g' => 'darbas', 'q' => 'Ar kuriate svetaines?',
     'a' => 'Taip. Svetainė nekainuoja tūkstančių, o prižiūrėti ją galite patys. Jei mokate dirbti su Word, mokėsite ir čia.'],

    ['g' => 'kaina', 'q' => 'Kiek kainuoja Superhuman Docs licencijos?',
     'a' => 'Mokama tik už kūrėjus (Doc Makers), t. y. žmones, kurie kuria naujus dokumentus. Darbuotojai, kurie sistema tik naudojasi ir ją pildo, nemoka. Tinkamiausią planą parinksime pokalbio metu.',
     'link' => ['https://superhuman.com/plans', 'Superhuman planai ir kainos →']],
    ['g' => 'kaina', 'q' => 'Ar kaina pasikeis, kai pasamdysime naujų žmonių?',
     'a' => 'Ne. Žmonės, kurie sistema naudojasi, licencijos nemoka. Licencija reikalinga tik tiems, kurie kuria struktūrą: naujas lenteles, puslapius ir taisykles.'],
    ['g' => 'kaina', 'q' => 'Kodėl tai dažnai pigiau nei populiarios platformos?',
     'a' => 'Kiekviena programa turi savo skaitliuką, vadinamą value metric. Daugelis platformų skaičiuoja kiekvieną prisijungusį žmogų, įrašą ar automatizacijos veiksmą. Kai verslas auga, tokia sąskaita auga pati. Superhuman Docs skaičiuoja tik tuos, kurie kuria (Doc Makers). Todėl per kelerius metus skirtumas dažnai būna kelis kartus. Tikslų palyginimą su jūsų žmonių skaičiumi parodau pokalbio metu.'],

    ['g' => 'platforma', 'q' => 'Ar mūsų duomenys saugūs?',
     'a' => 'Duomenys saugomi jūsų Superhuman Docs paskyroje, o ne mano kompiuteryje. Platforma juos perduoda šifruotu ryšiu (TLS) ir laiko šifruotus (AES-256). Prieigą gauna tik tie, kam jos reikia darbui.',
     'link' => ['privacy', 'Privatumo politika →']],
    ['g' => 'platforma', 'q' => 'Kas atsako už mūsų duomenis?',
     'a' => 'Jūs esate duomenų valdytojas, aš — duomenų tvarkytojas, o platforma duomenis saugo pagal savo sutartį su jumis. Duomenis tvarkau tik pagal jūsų rašytinius nurodymus. Apie saugumo incidentą pranešu per 24 valandas. Baigus darbus duomenis grąžinu arba ištrinu per 30 dienų. Visa tai įrašoma į duomenų tvarkymo sutartį pagal BDAR 28 straipsnį.'],
    ['g' => 'platforma', 'q' => 'Ar sistemoje veiks dirbtinis intelektas (AI)?',
     'a' => 'Tai galimybė. Superhuman Go yra AI asistentas Superhuman rinkinyje. Jį galite įsijungti patys savo paskyroje, mano pagalbos tam nereikia. Go naudoja jūsų plano kreditus, todėl jį verta naudoti ten, kur jis atsiperka.'],
    ['g' => 'platforma', 'q' => 'Ar padedate ir su kitais Superhuman įrankiais?',
     'a' => 'Taip. Rinkinyje taip pat yra Superhuman Mail el. paštui ir Grammarly tekstams. Galiu padėti juos suderinti, kad el. paštas, dokumentai ir sistema veiktų kartu.'],

    ['g' => 'nedarau', 'q' => 'Ar pakeisite mūsų apskaitos programą ar ERP?',
     'a' => 'Ne. Sistema dirba šalia jos. Ji tvarko tą dalį, kurią šiandien darote Excel faile, laiškuose ir atmintyje.'],
    ['g' => 'nedarau', 'q' => 'Su kokiais duomenimis nedirbu?',
     'a' => 'Nekuriu sistemų pacientų sveikatos įrašams, mokėjimo kortelių duomenims ir slaptažodžiams saugoti. Tokiems duomenims reikia specializuotų sistemų su atskirais sertifikatais. Vizitų registracija su kontaktais tinka.'],
    ['g' => 'nedarau', 'q' => 'Ar sistema keičiasi duomenimis su kitomis programomis iš karto?',
     'a' => 'Viename doc\'e viskas persiskaičiuoja per sekundes. Su kitomis programomis duomenys atsinaujina kas valandą arba kasdien, priklausomai nuo plano. Jei duomenys iš kitos sistemos turi atsirasti per sekundes, šis sprendimas gali netikti.'],
    ['g' => 'nedarau', 'q' => 'Kada šis modelis brangsta?',
     'a' => 'Kai beveik visi jūsų žmonės turi kurti naujas lenteles ir puslapius. Tada licencija reikalinga daugumai, ir kiti įrankiai gali būti pigesni. Tai suskaičiuojame prieš pradedant.'],
    ['g' => 'nedarau', 'q' => 'Ar sistema atlaikys didelius duomenų kiekius?',
     'a' => 'Taip, jei ji suprojektuota iš anksto. Viena sistema turi dydžio ribas. Todėl senus duomenis perkeliame į archyvą, o skirtingas sritis laikome atskiruose doc\'uose. Tai mano darbo dalis.'],
    ['g' => 'nedarau', 'q' => 'Ar prižiūrite kompiuterius ir tinklą?',
     'a' => 'Ne. IT įrangos ir tinklo priežiūros neteikiu. Sistemai užtenka naršyklės arba programėlės ir interneto ryšio.'],
];

$AO_SECTORS = ['Gamyba', 'Kavinės ir kebabinės', 'Klinikos ir salonai', 'Renginiai', 'Statyba ir remontas',
               'Servisai', 'Prekyba ir sandėlis', 'Konsultantai'];

// Formos pasirinkimai: raktas => tekstas. Raktai bendri abiem kalboms.
$AO_FORM_AREAS = [
    'uzklausos'  => 'Užklausos',
    'pasiulymai' => 'Pasiūlymai ir sąmatos',
    'uzsakymai'  => 'Užsakymai ir sandėlis',
    'uzduotys'   => 'Užduotys ir terminai',
    'dokumentai' => 'Dokumentai ir sąskaitos',
    'ataskaitos' => 'Ataskaitos',
    'nezinau'    => 'Nežinau – padėkite rasti',
];

// Sąsajos tekstai.
$AO_T = [
    'html_lang' => 'lt', 'og_locale' => 'lt_LT',
    'skip' => 'Pereiti prie turinio',
    'brand_home' => 'Artifex Ordinis — pradžia',
    'nav_label' => 'Pagrindinė navigacija',
    'nav_flow' => 'Kaip veikia', 'nav_cases' => 'Pavyzdžiai', 'nav_prices' => 'Kainos', 'nav_about' => 'Apie', 'nav_cta' => 'Pokalbis',
    'lang_other' => 'EN', 'lang_other_label' => 'English version',
    'theme_label' => 'Perjungti šviesią ar tamsią temą',
    'md_title' => 'Santrauka AI agentams',

    'home_title' => 'Artifex Ordinis — viena vieta jūsų verslui',
    'home_desc' => 'Užklausos, pasiūlymai, užsakymai, užduotys, dokumentai ir ataskaitos vienoje gyvoje sistemoje, sukurtoje pagal jūsų darbą. Pirmas pokalbis nemokamas.',
    'hero_eyebrow' => 'Tvarkos architektas',
    'hero_h1' => 'Tvarka, kuri dirba jums.',
    'hero_lead' => 'Viena vieta jūsų verslui, kuri auga kartu su jumis. Užklausos, pasiūlymai, užsakymai, užduotys, dokumentai ir ataskaitos sujungti į vieną gyvą sistemą. Ją kuriu pagal tai, kaip jūsų versle jau juda darbas.',
    'hero_cta' => 'Užsisakyti 30 min. pokalbį',
    'hero_cases' => 'Pažiūrėti pavyzdžius',
    'hero_note' => 'Pirmas pokalbis nemokamas. Jo metu gyvai parodau veikiančias sistemas.',
    'hero_fig' => 'Artifex Ordinis ženklas: arka iš penkių akmenų su variniu raktiniu akmeniu',

    'pain_label' => 'Ar atpažįstate?',
    'pain_h2' => 'Netvarkos nesimato, kai joje gyveni.',
    'pain_p' => 'Iš vidaus ji atrodo kaip „pas mus taip įprasta“. Todėl sunku įsivaizduoti, kaip galėtų būti kitaip.',
    'pain_items' => [
        'Informacija išbarstyta: Excel, el. paštas, „Messenger“ ir kažkieno atmintis.',
        '„Paklausk Rasos, tik ji žino.“',
        'Tą patį įvedate du ar tris kartus — ir kartais su klaida.',
        'Apie problemą pirmas praneša klientas, o ne jūsų sistema.',
    ],

    'flow_label' => 'Kaip veikia',
    'flow_h2' => 'Nuo užklausos iki ataskaitos — be perrašinėjimo.',
    'flow_p' => 'Sistema apima visą darbo eigą. Ji taip pat pašalina mažus darbus, kuriuos darote kelis kartus per dieną.',
    'flow_now' => 'Dabar', 'flow_new' => 'Su sistema',
    'flow_sectors' => 'Tinka gamybai, prekybai, paslaugoms, servisams ir kiekvienam verslui, kuriame darbas kartojasi.',

    'stmt_label' => 'Principas',
    'stmt_quote' => 'Gera sistema ne prideda darbo. Ji <em>pašalina nereikalingą</em>.',
    'stmt_p' => 'Tikslas visada tas pats: mažiau rankinio darbo, greitesnis procesas ir daugiau laiko tam, kas iš tikrųjų svarbu.',

    'cases_label' => 'Pavyzdžiai',
    'cases_h2' => 'Pažiūrėkite, kaip tai veikia.',
    'cases_p' => 'Kiekvienas pavyzdys parodo seną ir naują būdą. Kai kuriuos galite išbandyti patys.',
    'cases_all' => 'Visi pavyzdžiai →',
    'case_old' => 'Senas būdas', 'case_new' => 'Naujas būdas', 'case_result' => 'Rezultatas',
    'case_try' => 'Išbandyti sistemą →',
    'case_call' => 'Pamatyti pokalbio metu →',
    'docs_intro' => 'Pirmą kartą girdite apie Superhuman Docs?',
    'docs_intro_link' => 'Pažiūrėkite trumpą galimybių pavyzdį →',
    'case_frame' => 'Pavyzdinė sistema',
    'demo_note' => 'Viešose peržiūrose — netikri duomenys, todėl sistemą galite drąsiai spaudinėti patys. Kitus pavyzdžius gyvai parodau pokalbio metu.',
    'ex_title' => 'Pavyzdžiai — Artifex Ordinis',
    'ex_desc' => 'Seni ir nauji darbo būdai: sąskaitos, servisas, sąmatos, užsakymai ir registracija. Viešus pavyzdžius galite išbandyti patys.',
    'ex_h1' => 'Senas būdas ir naujas būdas.',
    'ex_lead' => 'Kiekvienas pavyzdys prasideda nuo problemos, kurią daug kas laiko normalia. Tada parodau, kaip tą patį darbą atlieka sistema.',
    'process_h3' => 'Kaip vyksta kūrimas',
    'process_p1' => 'Sistemą kuriame etapais. Po kiekvieno etapo jūs ją išbandote, o aš pataisau.',
    'process_p2' => 'Tam reikia ir mano, ir jūsų komandos laiko. Jūs paskiriate žmogų, kuris atsako į klausimus ir išbando sprendimus.',

    'how_label' => 'Kaip dirbu',
    'how_h2' => 'Pirma suprasti, tik tada kurti.',
    'how_aside' => 'Kalbuosi su keliais jūsų žmonėmis, ne tik su vadovu. Kiekvienas parodo, kaip iš tikrųjų atlieka savo darbą. Taip randu vietas, kur darbas stringa ar kartojasi.',

    'price_label' => 'Kainos',
    'price_h2' => 'Kaina priklauso nuo naudos, ne nuo valandų.',
    'price_more' => 'Kodėl taip ir kiek tai kainuotų jums →',
    'price_note' => 'Superhuman Docs — platforma, kurioje kuriu. Sistema lieka jūsų paskyroje.',
    'price_plans' => 'Superhuman planai ir kainos →',

    'about_label' => 'Kodėl tai darau',
    'about_h2' => 'Mačiau tuos pačius veiksmus vėl ir vėl.',
    'about_p1' => 'Dirbau statybose, logistikoje, gamyboje ir techninėje priežiūroje. Visur žmonės kartojo tuos pačius veiksmus ranka. Įmonėms labai trūko tvarkos.',
    'about_p2' => 'Gyvenimas mane vis grąžindavo prie tos pačios problemos. Todėl nusprendžiau ją spręsti.',
    'about_link' => 'Mano istorija →',
    'portrait_alt' => 'Saulius Elinskas',

    'faq_label' => 'Dažni klausimai',
    'faq_h2' => 'Ko dažniausiai klausiama.',
    'faq_all' => 'Visi klausimai, taip pat ko nedarau →',
    'faq_title' => 'Dažni klausimai — Artifex Ordinis',
    'faq_desc' => 'Atsakymai apie darbą, kainą, platformą ir duomenis. Taip pat sąžiningai: ko nedarau ir kada šis sprendimas netinka.',
    'faq_lead' => 'Čia rasite ir tai, ko nedarau. Geriau sužinoti dabar nei po metų.',

    'contact_label' => 'Kontaktai',
    'contact_h2' => 'Pasirinkite pokalbio laiką.',
    'contact_p' => 'Registracija vyksta mano paties sistemoje. Pasirinktas laikas iškart patenka į mano darbo sistemą ir kalendorių, o jūs gaunate kvietimą. Tokią pat registraciją galiu sukurti ir jūsų verslui.',
    'contact_cases' => 'Dar nežinote, ko norite? Pažiūrėkite pavyzdžius →',
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

    // Poraštė
    'foot_label' => 'Poraštės navigacija',
    'f_about' => 'Apie', 'f_cases' => 'Pavyzdžiai', 'f_faq' => 'DUK', 'f_contacts' => 'Kontaktai', 'f_privacy' => 'Privatumo politika',

    // Forma
    'form_frame' => 'Registracijos forma',
    'form_open' => 'Forma neatsidaro? Atidarykite ją naujame lange →',
    'form_toolname' => 'uzsakyti_pokalbi',
    'form_tool' => 'Užsiregistruoti nemokamam 30 min. pokalbiui su gyva sistemų peržiūra su Artifex Ordinis (Saulius, nuotoliu visoje Lietuvoje). Reikia vardo, el. pašto ir pažymėtų darbų, kurie užima daugiausia laiko, arba trumpo darbo eigos aprašymo.',
    'form_ok' => 'Ačiū! Užklausą gavau ir atsakysiu per vieną darbo dieną.',
    'form_err' => 'Nepavyko išsiųsti. Parašykite tiesiai į',
    'form_missing' => 'Įrašykite vardą ir el. paštą. Tada pažymėkite bent vieną darbą arba trumpai aprašykite savo dieną.',
    'form_name' => 'Vardas', 'form_email' => 'El. paštas', 'form_company' => 'Įmonė', 'form_optional' => '(nebūtina)',
    'form_areas' => 'Kurie darbai užima daugiausia laiko?',
    'form_msg' => 'Kaip šiandien vyksta jūsų darbas?',
    'form_msg_ph' => 'Pvz.: užklausa ateina el. paštu, kainą skaičiuojame Excel faile, sąskaitą rašome Word faile…',
    'form_site' => 'Svetainė',
    'form_submit' => 'Užsiregistruoti pokalbiui',
    'form_privacy' => 'Duomenis naudosiu tik atsakyti į jūsų užklausą. Daugiau —',
    'form_privacy_link' => 'privatumo politikoje',
];
