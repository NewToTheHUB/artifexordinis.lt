<?php
require __DIR__ . '/inc/bootstrap.php';

if (ao_wants_markdown()) { ao_send_markdown(ao_markdown_home()); }

$talpa = ao_talpa($AO_CFG);

ao_head('Artifex Ordinis — verslo procesų tvarka | Kaunas',
        'Sutvarkau, kaip juda darbas jūsų versle: užsakymai, skaičiuoklės, pasiūlymai, sandėlis ir ataskaitos vienoje gyvoje sistemoje. Pirmas pokalbis nemokamas.',
        '/', true);
?>
<main id="turinys">

<section class="hero">
  <div class="wrap split">
    <div>
      <p class="eyebrow">Tvarkos architektas · Kaunas</p>
      <h1>Tvarka, kuri dirba už jus.</h1>
      <p class="lead">Ateinu, pažiūriu, kaip jūsų versle iš tikrųjų juda darbas, ir parodau, kur prarandama laiko ir pinigų. Tada užsakymus, skaičiuokles, pasiūlymus, sandėlį ir ataskaitas sujungiu į vieną gyvą valdymo centrą.</p>
      <div class="actions">
        <a class="btn" href="<?= e(ao_cta()) ?>">Užsisakyti 30 min. pokalbį</a>
        <a class="btn ghost" href="#pavyzdziai">Pažiūrėti pavyzdžius</a>
      </div>
      <p class="note">Pirmas pokalbis nemokamas. Jei manęs jums nereikia, taip ir pasakysiu.</p>
    </div>
    <div>
      <svg class="hero-figure" viewBox="-14 -14 128 190" role="img" aria-label="Arka su raktiniu akmeniu, sukonstruota pagal aukso pjūvį">
<g class="construct"><rect x="0" y="0" width="100" height="161.80"/><rect x="38.20" y="0.00" width="61.80" height="61.80"/><rect x="0.00" y="0.00" width="38.20" height="38.20"/><rect x="0.00" y="38.20" width="23.61" height="23.61"/><rect x="23.61" y="47.21" width="14.59" height="14.59"/><rect x="29.18" y="38.20" width="9.02" height="9.02"/><rect x="23.61" y="38.20" width="5.57" height="5.57"/><rect x="23.61" y="43.77" width="3.44" height="3.44"/><path d="M0 161.80A100.00 100.00 0 0 1 100.00 61.80A61.80 61.80 0 0 1 38.20 0.00A38.20 38.20 0 0 1 0.00 38.20A23.61 23.61 0 0 1 23.61 61.80A14.59 14.59 0 0 1 38.20 47.21A9.02 9.02 0 0 1 29.18 38.20A5.57 5.57 0 0 1 23.61 43.77A3.44 3.44 0 0 1 27.05 47.21"/></g>
<g class="arch"><path d="M0.00 49.30A50.0 50.0 0 0 1 4.65 28.94L21.97 36.98A30.90 30.90 0 0 0 19.10 49.57Z" class="v"/><path d="M5.26 27.68A50.0 50.0 0 0 1 18.28 11.35L30.40 26.11A30.90 30.90 0 0 0 22.35 36.20Z" class="v"/><path d="M19.37 10.48A50.0 50.0 0 0 1 38.19 1.41L42.70 19.97A30.90 30.90 0 0 0 31.07 25.57Z" class="v"/><path d="M39.56 1.10A50.0 50.0 0 0 1 60.44 1.10L56.45 19.78A30.90 30.90 0 0 0 43.55 19.78Z" class="ks"/><path d="M61.81 1.41A50.0 50.0 0 0 1 80.63 10.48L68.93 25.57A30.90 30.90 0 0 0 57.30 19.97Z" class="v"/><path d="M81.72 11.35A50.0 50.0 0 0 1 94.74 27.68L77.65 36.20A30.90 30.90 0 0 0 69.60 26.11Z" class="v"/><path d="M95.35 28.94A50.0 50.0 0 0 1 100.00 49.30L80.90 49.57A30.90 30.90 0 0 0 78.03 36.98Z" class="v"/><path d="M0 50.90H19.10V161.80H0Z" class="v"/><path d="M80.90 50.90H100.00V161.80H80.90Z" class="v"/></g>
<g class="dim"><path d="M-8 0V161.80M-10 0H-6M-10 161.80H-6M0 -8H100M0 -10V-6M100 -10V-6"/>
<text x="-10" y="80.9" transform="rotate(-90 -10 80.9)">φ</text><text x="50" y="-10">1</text></g>
</svg>
    </div>
  </div>
</section>

<section id="netvarka">
  <div class="wrap">
    <div class="section-head">
      <p class="label"><b>I</b> Ar atpažįstate?</p>
      <h2>Netvarka retai atrodo kaip netvarka.</h2>
      <p>Dažniausiai ji atrodo kaip „pas mus taip įprasta“.</p>
    </div>
    <ol class="numbered">
      <li>Informacija išbarstyta: Excel, el. paštas, „Messenger“ ir kažkieno atmintis.</li>
      <li>„Paklausk Rasos, tik ji žino.“</li>
      <li>Tą patį įvedate du ar tris kartus — ir kartais su klaida.</li>
      <li>Negalite per 10 sekundžių pasakyti, kas vėluoja ir kiek uždirbote.</li>
      <li>Kažkas prasprūsta, o sužinote per vėlai.</li>
    </ol>
  </div>
</section>

<section id="kaip">
  <div class="wrap">
    <div class="section-head">
      <p class="label"><b>II</b> Kaip dirbu</p>
      <h2>Pirma suprasti, tik tada kurti.</h2>
    </div>
    <ol class="steps">
<?php foreach ($AO_SERVICES as $i => $s): ?>
      <li><span class="num"><?= $i + 1 ?></span><h3><?= e($s['name']) ?></h3><p><?= e($s['desc']) ?></p></li>
<?php endforeach; ?>
    </ol>
    <p class="aside">Kartais užtenka patarimo. Jei problemą išspręs paprastas pakeitimas, kurį galite padaryti patys, rekomenduosiu jį, o ne naują sistemą.</p>
  </div>
</section>

<section id="kam">
  <div class="wrap">
    <div class="section-head">
      <p class="label"><b>III</b> Kam tinka</p>
      <h2>Kiekvienam verslui, kuris skaičiuoja, rengia pasiūlymus ir vykdo užsakymus.</h2>
    </div>
    <ul class="chips" aria-label="Sričių pavyzdžiai">
<?php foreach ($AO_SECTORS as $s): ?>
      <li><?= e($s) ?></li>
<?php endforeach; ?>
    </ul>
    <p class="note">Nuo vieno žmogaus iki kelių dešimčių darbuotojų komandos. Svarbu ne dydis, o tai, kad darbas kartojasi.</p>
    <h3 class="sub">Ką sukuriu</h3>
    <ul class="cols" aria-label="Ką sukuriu">
<?php foreach ($AO_BUILDS as $b): ?>
      <li><?= e($b[0]) ?><small><?= e($b[1]) ?></small></li>
<?php endforeach; ?>
    </ul>
  </div>
</section>

<section class="statement">
  <div class="wrap">
    <p class="label"><b>IV</b> Gyvai, ne skaidrėse</p>
    <blockquote>Jokių „PowerPoint“ prezentacijų. Vadovas, komanda ir investuotojas mato <em>tuos pačius skaičius</em> tą pačią akimirką.</blockquote>
    <p>Tikslas visada tas pats: mažiau rankinio darbo, greitesnis procesas ir daugiau laiko tam, kas iš tikrųjų svarbu.</p>
  </div>
</section>

<section id="pavyzdziai">
  <div class="wrap">
    <div class="section-head">
      <p class="label"><b>V</b> Pavyzdžiai</p>
      <h2>Ką jau esu sutvarkęs.</h2>
      <p>Skirtingos sritys, tas pats principas: duomenys vienoje vietoje, o pasikartojantis darbas atliekamas automatiškai.</p>
    </div>
    <div class="cases">
<?php foreach ($AO_CASES as $c): ?>
      <article class="case">
        <span class="tag"><?= e($c['tag']) ?></span>
        <h3><?= e($c['title']) ?></h3>
        <dl>
<?php foreach ($c['rows'] as $r): ?>
          <dt><?= e($r[0]) ?></dt><dd><?= e($r[1]) ?></dd>
<?php endforeach; ?>
        </dl>
      </article>
<?php endforeach; ?>
    </div>
    <p class="demo-note">Peržiūrimos versijos su netikrais duomenimis ir trumpu gidu ruošiamos. Kol kas jas parodau pokalbio metu.</p>
  </div>
</section>

<section id="kainos">
  <div class="wrap split">
    <div>
      <div class="section-head">
        <p class="label"><b>VI</b> Kainos</p>
        <h2>Pirmas žingsnis — mažas ir aiškus.</h2>
      </div>
      <table class="prices">
        <tbody>
<?php foreach ($AO_SERVICES as $s): ?>
          <tr><th scope="row"><?= e($s['name']) ?><small><?= e($s['note']) ?></small></th><td><?= e($s['price']) ?><?php if (!empty($s['badge'])): ?><small><?= e($s['badge']) ?></small><?php endif; ?></td></tr>
<?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div>
      <p class="note">Kol kuriame, sistema veikia mano paskyroje, todėl jums licencijų nereikia. Kai sistemą perimate, mokate tik už kūrėjus (Doc Makers), o darbuotojai, kurie sistema naudojasi, nemoka.</p>
    </div>
  </div>
</section>

<section id="uzimtumas">
  <div class="wrap split">
    <div>
      <div class="section-head">
        <p class="label"><b>VII</b> Užimtumas</p>
        <h2>Vienu metu imu nedaug projektų.</h2>
        <p>Kad kiekvienam skirčiau tikrą dėmesį.</p>
      </div>
      <ul class="capacity">
<?php foreach ($talpa as $m):
        $vietos = (int)$m['vietos']; $uzimta = min((int)$m['uzimta'], $vietos); $laisva = $vietos - $uzimta; ?>
        <li>
          <span class="m"><?= e((string)$m['menuo']) ?></span>
          <span class="slots" aria-hidden="true"><?php for ($i = 0; $i < $vietos; $i++): ?><span class="dot<?= $i < $uzimta ? ' taken' : '' ?>"></span><?php endfor; ?></span>
          <span class="free"><?= e(ao_laisvos($laisva)) ?></span>
        </li>
<?php endforeach; ?>
      </ul>
      <a class="btn" href="<?= e(ao_cta()) ?>">Rezervuoti pokalbį</a>
    </div>
    <div>
      <p class="note">Viena arka — viena įdiegimo vieta. Užpildyta arka reiškia, kad vieta jau užimta. Pokalbiui ir auditui laiką rasime greičiau.</p>
    </div>
  </div>
</section>

<section id="apie">
  <div class="wrap split rev">
    <div class="photos">
      <figure><img src="/assets/img/spinta.webp" width="1536" height="1024" loading="lazy" alt="Drabužių kabyklos eskizas su išmatavimais"><figcaption>Laisvalaikiu projektuoju baldus</figcaption></figure>
      <figure><img src="/assets/img/euc.svg" width="618" height="382" loading="lazy" alt="Elektrinis vienaratis"><figcaption>Kasdien važinėju vienaračiu</figcaption></figure>
    </div>
    <div>
      <div class="section-head">
        <p class="label"><b>VIII</b> Apie mane</p>
        <h2>Esu Saulius.</h2>
      </div>
      <p>Mano kelias prasidėjo nuo fizinio darbo ir technikos: statybos, CNC staklės, vamzdynų projektavimas, automatinių išdavimo aparatų įrengimas, 3D spausdinimo gamyba. Todėl žinau, kaip darbas atrodo iš vidaus — ne teoriškai, o praktiškai.</p>
      <p>Ilgainiui supratau, kad labiausiai mane traukia ne pats darbas, o tai, kaip jis organizuotas: kur stringa procesai, kur per daug rankinio darbo ir kur galima sutaupyti laiko.</p>
      <p><a href="/apie/">Daugiau apie mane →</a></p>
    </div>
  </div>
</section>

<section id="duk">
  <div class="wrap">
    <div class="section-head">
      <p class="label"><b>IX</b> Dažni klausimai</p>
      <h2>Ko dažniausiai klausiama.</h2>
    </div>
    <div class="faq">
<?php foreach ($AO_FAQ as $q): ?>
      <details><summary><?= e($q[0]) ?></summary><p><?= e($q[1]) ?></p></details>
<?php endforeach; ?>
    </div>
  </div>
</section>

<section id="kontaktai">
  <div class="wrap split">
    <div>
      <div class="section-head">
        <p class="label"><b>X</b> Kontaktai</p>
        <h2>Papasakokite, kas vyksta.</h2>
        <p>Atsakau per 24 valandas.</p>
      </div>
      <ul class="contact-list">
        <li><span>El. paštas</span><a href="mailto:<?= e(AO_EMAIL) ?>"><?= e(AO_EMAIL) ?></a></li>
        <li><span>Vieta</span>Kaunas · visa Lietuva nuotoliu</li>
        <li><span>Daugiau</span><a href="/kontaktai/">Kontaktų puslapis</a></li>
      </ul>
    </div>
    <div class="contact-box">
      <?php ao_contact_form(); ?>
    </div>
  </div>
</section>

</main>
<?php ao_footer();
