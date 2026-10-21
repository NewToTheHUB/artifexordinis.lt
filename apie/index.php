<?php
require dirname(__DIR__) . '/inc/bootstrap.php';

ao_head('Apie — Saulius, Artifex Ordinis',
        'Saulius iš Kauno: nuo fizinio darbo ir technikos iki verslo procesų tvarkos. Patirtis gamyboje, užsakymų valdyme ir automatizacijoje.',
        '/apie/');
?>
<main id="turinys" class="page">
<section>
  <div class="wrap split rev">
    <div class="photos">
      <figure><img src="/assets/img/spinta.webp" width="1536" height="1024" alt="Drabužių kabyklos eskizas su išmatavimais"><figcaption>Laisvalaikiu projektuoju baldus</figcaption></figure>
      <figure><img src="/assets/img/euc.svg" width="618" height="382" alt="Elektrinis vienaratis"><figcaption>Kasdien važinėju vienaračiu</figcaption></figure>
    </div>
    <div>
      <p class="label"><b>Apie</b> Saulius</p>
      <h1>Nuo fizinio darbo iki procesų tvarkos.</h1>
      <p class="lead">Per skirtingus darbus perėjau kelią nuo fizinio darbo ir technikos iki sudėtingesnių procesų valdymo. Tai išmokė suprasti, kaip darbas iš tikrųjų veikia iš vidaus — ne teoriškai, o praktiškai.</p>
      <p>Ilgainiui pastebėjau, kad labiausiai mane traukia ne pats darbas, o tai, kaip jis organizuotas. Kur stringa procesai, kur per daug rankinio darbo, kur galima dirbti našiau ir sutaupyti laiko.</p>
      <p>Natūraliai pradėjau ieškoti sprendimų: kurti skaičiavimo logiką, automatizuoti pasikartojančius veiksmus, struktūruoti duomenis, programuoti. Šiandien geriausiai jaučiuosi ten, kur reikia perprasti visą darbo eigą ir paversti ją aiškia, veikiančia sistema — nuo problemos supratimo iki sprendimo, kuris veikia realiomis sąlygomis.</p>
    </div>
  </div>
</section>

<section>
  <div class="wrap split">
    <div>
      <div class="section-head">
        <p class="label"><b>I</b> Patirtis</p>
        <h2>Kur mokiausi tvarkos.</h2>
      </div>
      <ul class="cols one">
        <li>Užsakymų valdymas 3D spausdinimo gamyboje<small>B2B užsakymų srautas nuo gavimo iki išsiuntimo, gamybos sekimo sistema, kainos skaičiuoklė, skriptai rankiniam darbui panaikinti</small></li>
        <li>Techninis konsultantas<small>automatinių išdavimo aparatų įrengimas, gedimų šalinimas, klientų mokymai, komerciniai pasiūlymai, brūkšninių kodų projektas</small></li>
        <li>Inžinerinis projektavimas<small>vamzdynų projektavimas, techninė dokumentacija, 3D CAD</small></li>
        <li>CNC staklės<small>techniniai brėžiniai, programos, vienetinių detalių gamyba</small></li>
        <li>Statyba, logistika, gamybos priežiūra<small>darbas, kuris išmoko matyti procesą iš vidaus</small></li>
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
        <li>Išsilavinimas<small>elektromechanika</small></li>
      </ul>
    </div>
  </div>
</section>

<section>
  <div class="wrap">
    <div class="section-head">
      <p class="label"><b>III</b> Ne prie ekrano</p>
      <h2>Kas mane domina.</h2>
    </div>
    <ul class="chips">
      <li>Šokiai: bachata, salsa, tango</li><li>Sportas ir kovos menai</li><li>Kūno kalba ir psichologija</li>
      <li>Sugedusių daiktų taisymas</li><li>Naujų daiktų projektavimas</li><li>Elektrinis vienaratis</li>
    </ul>
    <p class="aside">Projektuodamas baldą ar taisydamas daiktą galvoju taip pat kaip apie verslo procesą: išmatuoti, pritaikyti vietai ir padaryti taip, kad vėliau būtų galima pakeisti.</p>
    <div class="actions"><a class="btn" href="<?= e(ao_cta()) ?>">Užsisakyti pokalbį</a></div>
  </div>
</section>
</main>
<?php ao_footer();
