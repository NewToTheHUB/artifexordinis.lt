<?php
require dirname(__DIR__) . '/inc/bootstrap.php';

ao_head('Privatumo politika — Artifex Ordinis',
        'Kaip artifexordinis.lt tvarko užklausos formoje pateiktus asmens duomenis: kokie duomenys, kam, kiek laiko ir kokias teises turite.',
        '/privatumo-politika/');
?>
<main id="turinys" class="page">
<section>
  <div class="wrap">
    <p class="label"><b>Privatumo politika</b></p>
    <h1>Kaip tvarkau jūsų duomenis.</h1>
    <div class="prose">
      <p class="note">Atnaujinta 2026-10-21 · <a href="#klientu-sistemos">Kai kuriu sistemą jūsų įmonei</a></p>

      <h2>Kas tvarko duomenis</h2>
      <p>Duomenų valdytojas — Saulius Elinskas, vykdantis individualią veiklą Artifex Ordinis vardu, Kaunas, Lietuva. El. paštas: <a href="mailto:<?= e(AO_EMAIL) ?>"><?= e(AO_EMAIL) ?></a>.</p>

      <h2>Kokius duomenis renku</h2>
      <p>Tik tuos, kuriuos patys pateikiate užklausos formoje arba el. laiške: vardą, el. pašto adresą, įmonės pavadinimą (jei nurodote) ir žinutės tekstą. Svetainė nenaudoja slapukų, analitikos ar reklamos sekimo.</p>

      <h2>Kam naudoju</h2>
      <p>Kad atsakyčiau į jūsų užklausą, suderinčiau pokalbį ir, jei susitarsime, parengčiau pasiūlymą. Teisinis pagrindas — veiksmai prieš sudarant sutartį jūsų prašymu (BDAR 6 str. 1 d. b p.).</p>

      <h2>Kiek laiko saugau</h2>
      <p>Užklausų duomenis saugau ne ilgiau kaip 2 metus nuo paskutinio bendravimo arba kol paprašote juos ištrinti. Jei tampame partneriais, sutarties duomenys saugomi tiek, kiek reikalauja apskaitos teisės aktai.</p>

      <h2>Kas dar gali matyti duomenis</h2>
      <ul>
        <li><strong>Hostinger</strong> — svetainės talpinimas ir el. paštas (ES).</li>
        <li><strong>Superhuman (Superhuman Docs)</strong> — užklausų sąrašas, kuriame jas tvarkau. Duomenys gali būti perduodami į JAV taikant Europos Komisijos patvirtintas standartines sutarčių sąlygas.</li>
        <li><strong>bunny.net</strong> — šriftų pateikimas (ES); jūsų IP adresas naudojamas tik šriftams perduoti.</li>
      </ul>
      <p>Duomenų neparduodu ir neperduodu kitiems tikslams.</p>

      <h2 id="klientu-sistemos">Kai kuriu sistemą jūsų įmonei</h2>
      <p>Superhuman Docs — ne mano platforma. Aš joje sukuriu sistemą, pritaikytą jūsų darbui, todėl atsakomybė pasiskirsto taip:</p>
      <ul>
        <li><strong>Jūsų įmonė</strong> — duomenų valdytojas: sprendžia, kokie duomenys tvarkomi ir kam.</li>
        <li><strong>Artifex Ordinis</strong> — duomenų tvarkytojas: duomenis tvarkau tik pagal jūsų rašytinius nurodymus ir jokiais savais tikslais.</li>
        <li><strong>Superhuman (Docs platforma)</strong> — subtvarkytojas: saugo duomenis savo infrastruktūroje.</li>
      </ul>
      <p>Tai įtvirtinama duomenų tvarkymo sutartyje pagal BDAR 28 straipsnį. Joje sutariame:</p>
      <ul>
        <li>prieiga suteikiama tik tiems, kam jos reikia darbui, o visi prieigą turintys asmenys saugo konfidencialumą;</li>
        <li>apie saugumo incidentą pranešu ne vėliau kaip per 24 valandas;</li>
        <li>duomenų subjektų prašymus persiunčiu jums per 2 darbo dienas;</li>
        <li>baigus darbus duomenis grąžinu arba ištrinu per 30 dienų.</li>
      </ul>
      <p>Kol sistema kuriama, ji veikia mano Superhuman Docs paskyroje, o jūs turite redaktoriaus teises. Kai sistema paruošta ir apmokėta, jūsų prašymu per 3 dienas perduodu jums administratoriaus teises ir pašalinu savo prieigą. Platforma duomenis perduoda šifruotu ryšiu (TLS 1.2 ar naujesnis) ir saugo šifruotus (AES-256); jos saugumo ataskaitas (SOC 2, ISO 27001 santraukas) pateikiu jums paprašius.</p>

      <h2>Jūsų teisės</h2>
      <p>Galite prašyti susipažinti su savo duomenimis, juos ištaisyti, ištrinti, apriboti jų tvarkymą arba nesutikti, kad jie būtų tvarkomi. Parašykite <a href="mailto:<?= e(AO_EMAIL) ?>"><?= e(AO_EMAIL) ?></a> — atsakysiu per 30 dienų. Jei manote, kad jūsų teisės pažeistos, galite kreiptis į Valstybinę duomenų apsaugos inspekciją (<a href="https://vdai.lrv.lt">vdai.lrv.lt</a>).</p>
    </div>
  </div>
</section>
</main>
<?php ao_footer();
