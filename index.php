<?php
require __DIR__ . '/inc/bootstrap.php';

if (ao_wants_markdown()) { ao_send_markdown(ao_markdown_home()); }


ao_head('Artifex Ordinis — verslo procesų tvarka',
        'Sutvarkau, kaip juda darbas jūsų versle: užsakymai, skaičiuoklės, pasiūlymai, sandėlis ir ataskaitos vienoje gyvoje sistemoje. Pirmas pokalbis nemokamas.',
        '/', true);
?>
<main id="turinys">

<section class="hero">
  <div class="wrap split">
    <div>
      <p class="eyebrow">Tvarkos architektas</p>
      <h1>Tvarka, kuri dirba jums.</h1>
      <p class="lead">Pažiūriu, kaip jūsų versle iš tikrųjų juda darbas, ir parodau, kur prarandama laiko ir pinigų. Tada užsakymus, skaičiuokles, pasiūlymus, sandėlį ir ataskaitas sujungiu į vieną gyvą valdymo centrą.</p>
      <div class="actions">
        <a class="btn" href="<?= e(ao_cta()) ?>">Užsisakyti 30 min. pokalbį</a>
        <a class="btn ghost" href="#pavyzdziai">Pažiūrėti pavyzdžius</a>
      </div>
      <p class="note">Pirmas pokalbis ir vieno proceso demonstracija nemokami. Jei manęs jums nereikia, taip ir pasakysiu.</p>
    </div>
    <div>
      <svg class="hero-figure" viewBox="0 -10.17 200 200" role="img" aria-label="Artifex Ordinis ženklas: arka iš penkių akmenų su variniu raktiniu akmeniu">
<g class="arch"><path d="M0.00 100.00A100 100 0 0 1 21.39 38.19L59.12 67.86A52 52 0 0 0 48.00 100.00Z" class="v"/><path d="M23.15 36.02A100 100 0 0 1 77.77 2.50L88.44 49.30A52 52 0 0 0 60.04 66.73Z" class="v"/><path d="M122.23 2.50A100 100 0 0 1 176.85 36.02L139.96 66.73A52 52 0 0 0 111.56 49.30Z" class="v"/><path d="M178.61 38.19A100 100 0 0 1 200.00 100.00L152.00 100.00A52 52 0 0 0 140.88 67.86Z" class="v"/><path d="M0 102H48V179.67H0Z" class="v"/><path d="M152 102H200V179.67H152Z" class="v"/><path d="M80.50 1.92A100 100 0 0 1 119.50 1.92L110.14 49.00A52 52 0 0 0 89.86 49.00Z" class="ks"/></g>
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
    <h3 class="sub">Galimybės</h3>
    <ul class="cols" aria-label="Galimybės">
<?php foreach ($AO_BUILDS as $b): ?>
      <li><?= e($b[0]) ?><small><?= e($b[1]) ?></small></li>
<?php endforeach; ?>
    </ul>
    <p class="aside">Tai ne šablonas visiems. Pradedame nuo to, kaip dirbate jūs, ir sukuriame tik tai, ko reikia.</p>
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
      <h2>Kas jau sukurta.</h2>
      <p>Skirtingos sritys, tas pats principas: visi duomenys vienoje vietoje, o rankinio darbo lieka kuo mažiau.</p>
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
<?php if (!empty($c['demo'])): ?>
        <a class="btn ghost case-link" href="<?= e($c['demo']) ?>" target="_blank" rel="noopener">Išbandyti sistemą →</a>
<?php else: ?>
        <span class="btn ghost case-link soon">Peržiūra kuriama</span>
<?php endif; ?>
      </article>
<?php endforeach; ?>
    </div>
    <p class="demo-note">Peržiūros versijose — netikri duomenys, todėl sistemą galite drąsiai spaudinėti patys.</p>
  </div>
</section>

<section id="kainos">
  <div class="wrap split">
    <div>
      <div class="section-head">
        <p class="label"><b>VI</b> Kainos</p>
        <h2>Kaina — sutarta iš anksto pagal darbų apimtį.</h2>
        <p>Kartais užtenka kelių valandų darbo, kartais reikia kelių savaičių sistemos. Todėl po pokalbio ar audito sutariame darbų apimtį ir jos kainą. Jei apimtis keičiasi, naują kainą suderiname prieš tęsdami darbus.</p>
      </div>
      <table class="prices">
        <tbody>
<?php foreach ($AO_SERVICES as $s): ?>
          <tr><th scope="row"><?= e($s['name']) ?><small><?= e($s['note']) ?></small></th><td><?= e($s['price']) ?></td></tr>
<?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div>
      <p class="note">Superhuman Docs — platforma, kurioje kuriu, o aš sukuriu tai, kas pritaikyta būtent jums. Sistema lieka jūsų paskyroje. Mokate tik už kūrėjus (Doc Makers), o darbuotojai, kurie sistema naudojasi, nemoka. <a href="https://superhuman.com/plans" rel="noopener">Planai ir kainos →</a></p>
    </div>
  </div>
</section>

<section id="apie">
  <div class="wrap split rev">
    <figure class="portrait">
      <img src="/assets/img/saulius.webp" width="720" height="1165" loading="lazy" alt="Saulius Elinskas">
    </figure>
    <div>
      <div class="section-head">
        <p class="label"><b>VII</b> Apie mane</p>
        <h2 class="pointer"><span class="arrow" aria-hidden="true">←</span> Saulius</h2>
      </div>
      <p>Dirbau statybose, logistikoje, gamyboje ir techninėje priežiūroje — Lietuvoje ir užsienyje. Daugelyje įmonių mačiau tą patį: darbas vyksta lėtai ir rankomis, viskas laikoma Excel lentelėse, o tvarkinga sistema atrodo kaip kelių dešimčių tūkstančių eurų projektas. Dažniausiai taip nėra.</p>
      <p>Todėl sistemas kuriu „no-code“ įrankiais, kuriuos lengva suprasti, o šiek tiek pasimokius — ir pasikoreguoti patiems. Mano tikslas — ne pririšti jus prie savęs, o išmokyti ir atiduoti įrankį į jūsų rankas, jei norite mokytis.</p>
      <p><a href="/apie/">Mano istorija →</a></p>
    </div>
  </div>
</section>

<section id="duk">
  <div class="wrap">
    <div class="section-head">
      <p class="label"><b>VIII</b> Dažni klausimai</p>
      <h2>Ko dažniausiai klausiama.</h2>
    </div>
    <div class="faq">
<?php foreach ($AO_FAQ as $q): ?>
      <details><summary><?= e($q[0]) ?></summary><p><?= e($q[1]) ?><?php if (!empty($q[2])): ?> <a href="<?= e($q[2][0]) ?>" rel="noopener"><?= e($q[2][1]) ?></a><?php endif; ?></p></details>
<?php endforeach; ?>
    </div>
  </div>
</section>

<section id="kontaktai">
  <div class="wrap split">
    <div>
      <div class="section-head">
        <p class="label"><b>IX</b> Kontaktai</p>
        <h2>Papasakokite, kas vyksta.</h2>
        <p>Paprastai atsakau per vieną darbo dieną.</p>
      </div>
      <ul class="contact-list">
        <li><span>El. paštas</span><a href="mailto:<?= e(AO_EMAIL) ?>"><?= e(AO_EMAIL) ?></a></li>
        <li><span>Telefonas</span><a href="tel:<?= e(AO_PHONE) ?>"><?= e(AO_PHONE_DISPLAY) ?></a></li>
        <li><span>Darbas</span>Nuotoliu, visoje Lietuvoje</li>
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
