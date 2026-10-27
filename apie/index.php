<?php
require dirname(__DIR__) . '/inc/bootstrap.php';

ao_head('Apie — Saulius, Artifex Ordinis',
        'Saulius: nuo fizinio darbo ir technikos iki verslo procesų tvarkos. Patirtis gamyboje, užsakymų valdyme ir automatizacijoje.',
        '/apie/');
?>
<main id="turinys" class="page">
<section>
  <div class="wrap split rev">
    <figure class="portrait">
      <img src="/assets/img/saulius.webp" width="720" height="1165" alt="Saulius Elinskas">
    </figure>
    <div>
      <p class="label"><b>Apie</b> mane</p>
      <h1>Nuo fizinio darbo iki procesų tvarkos.</h1>
      <p class="lead">Baigęs mokyklą ieškojau savęs: dirbau ir keliavau po pasaulį. Išbandžiau statybas, logistiką, klientų aptarnavimą, elektrotechniką ir techninį konsultavimą. Visur mane domino tas pats: kaip veikia procesai, kodėl jie veikia būtent taip ir kaip juos galima pagerinti.</p>
      <p>Po kelerių metų kelionių, sukaupęs gyvenimo patirties, grįžau į Lietuvą. Dirbdamas samdomą darbą dažnai mačiau, kad užduotis galima atlikti lanksčiau ir paprasčiau: atimti iš žmogaus monotonišką darbą ir palikti jam laiko tam, kas iš tikrųjų naudinga.</p>
      <p>Kasdien besikeičiantis pasaulis su begale technologijų, programų ir informacijos šaltinių perkrauna net analitiškai mąstantį žmogų. Man reikėjo metodo ir įrankio tvarkai mintyse. Juo tapo Coda, dabar — Superhuman Docs.</p>
      <p>Jau trečius metus jame sudėlioti mano tikslai ir prioritetai, matyti finansai ir suplanuotas laikas. Valdomas laikas yra sutaupytas laikas, o jo lieka ir gyvenimui su mylima drauge. Tokią pačią tvarką dabar kuriu verslams.</p>
    </div>
  </div>
</section>

<section>
  <div class="wrap split">
    <div>
      <div class="section-head">
        <p class="label"><b>I</b> Patirtis</p>
        <h2>Kur pamačiau netvarką.</h2>
        <p>Šiose vietose mačiau, kaip darbas stringa. Tvarką sugalvojau pats.</p>
      </div>
      <ul class="cols one">
        <li>Užsakymų valdymas 3D spausdinimo gamyboje<small>B2B užsakymų srautas nuo gavimo iki išsiuntimo, gamybos sekimo sistema, kainos skaičiuoklė, skriptai rankiniam darbui panaikinti</small></li>
        <li>Techninis konsultantas<small>automatinių išdavimo aparatų įrengimas, gedimų šalinimas, klientų mokymai, komerciniai pasiūlymai, brūkšninių kodų projektas</small></li>
        <li>Inžinerinis projektavimas<small>vamzdynų projektavimas, techninė dokumentacija, 3D CAD</small></li>
        <li>CNC staklės<small>techniniai brėžiniai, programos, vienetinių detalių gamyba</small></li>
        <li>Statyba, logistika, gamybos priežiūra<small>darbas, kuris išmokė matyti procesą iš vidaus</small></li>
      </ul>
    </div>
    <div>
      <div class="section-head">
        <p class="label"><b>II</b> Įrankiai</p>
        <h2>Kuo dirbu.</h2>
      </div>
      <ul class="cols one">
        <li>Superhuman Docs (buvęs Coda)<small>lentelės, formulės, automatizacijos, sistemų projektavimas</small></li>
        <li>Superhuman Go ir AI<small>santraukos, juodraščiai, darbas su dokumentais</small></li>
        <li>Skriptai<small>PowerShell, JavaScript, Python — failų apdorojimas, duomenų išgavimas iš PDF, ZIP, DOCX, XML</small></li>
      </ul>
    </div>
  </div>
</section>

<section>
  <div class="wrap">
    <div class="section-head">
      <p class="label"><b>III</b> Hobiai</p>
      <h2>Ne prie ekrano.</h2>
    </div>
    <ul class="chips">
      <li>Šokiai: bachata, salsa, tango</li><li>Sportas ir kovos menai</li><li>Kūno kalba ir psichologija</li>
      <li>Naujų daiktų projektavimas</li><li>Važinėjimas elektriniu vienaračiu</li>
    </ul>
    <p class="aside">Baldus projektuoju iš reikmės: butas nuomojamas, o drabužius kažkur reikia sukabinti. Norisi ne griozdiškos spintos, o jaukaus medinio daikto, kurį galima pastatyti bet kur ir pasiimti persikraustant. Principas tas pats kaip versle: pirma suprasti poreikį ir vietą, tik tada kurti.</p>
    <div class="actions"><a class="btn" href="<?= e(ao_cta()) ?>">Užsisakyti pokalbį</a></div>
  </div>
</section>
</main>
<?php ao_footer();
