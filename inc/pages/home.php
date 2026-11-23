<?php
// Pagrindinio puslapio šablonas. Kalbą nustato failas, kuris jį įtraukia (/index.php arba /en/index.php).
// Struktūra: darbo eiga (dabar / su sistema) → pavyzdžiai → kaip dirbu → kaina → kodėl → DUK → kontaktai.

if (ao_wants_markdown()) { ao_send_markdown(ao_markdown_home()); }
require __DIR__ . '/parts.php';

ao_head(t('home_title'), t('home_desc'), 'home', true);
?>
<main id="turinys">

<section class="hero">
  <div class="wrap split">
    <div>
      <p class="eyebrow"><?= e(t('hero_eyebrow')) ?></p>
      <h1><?= e(t('hero_h1')) ?></h1>
      <p class="lead"><?= e(t('hero_lead')) ?></p>
      <div class="actions">
        <a class="btn" href="<?= e(AO_ORDERS_DEMO) ?>" target="_blank" rel="noopener"><?= e(t('hero_demo')) ?></a>
        <a class="btn ghost" href="<?= e(ao_cta()) ?>"><?= e(t('hero_cta')) ?></a>
      </div>
      <p class="note"><?= e(t('hero_note')) ?></p>
    </div>
    <div>
<?php ao_hero_demo(); ?>
    </div>
  </div>
</section>

<section id="kaip-veikia">
  <div class="wrap">
    <div class="section-head">
      <p class="label"><b>I</b> <?= e(t('flow_label')) ?></p>
      <h2><?= e(t('flow_h2')) ?></h2>
      <p><?= e(t('flow_p')) ?></p>
    </div>
    <ol class="flow-chain" aria-hidden="true">
<?php foreach ($AO_FLOW as $f): ?>
      <li><?= e($f[0]) ?></li>
<?php endforeach; ?>
    </ol>
    <div class="flow">
      <div class="flow-head" aria-hidden="true"><span></span><span><?= e(t('flow_now')) ?></span><span><?= e(t('flow_new')) ?></span></div>
<?php foreach ($AO_FLOW as $i => $f): ?>
      <div class="flow-row">
        <h3><span class="num"><?= $i + 1 ?></span><?= e($f[0]) ?></h3>
        <p class="now"><span class="k"><?= e(t('flow_now')) ?></span><?= e($f[1]) ?></p>
        <p class="new"><span class="k"><?= e(t('flow_new')) ?></span><?= e($f[2]) ?></p>
      </div>
<?php endforeach; ?>
    </div>
    <p class="note"><?= e(t('flow_sectors')) ?></p>
  </div>
</section>

<section id="galimybes">
  <div class="wrap">
    <div class="section-head">
      <p class="label"><b>II</b> <?= e(t('build_label')) ?></p>
      <h2><?= e(t('build_h2')) ?></h2>
      <p><?= e(t('build_p')) ?></p>
    </div>
<?php ao_build_grid($AO_BUILD); ?>
  </div>
</section>

<section id="pavyzdziai">
  <div class="wrap">
    <div class="section-head">
      <p class="label"><b>III</b> <?= e(t('cases_label')) ?></p>
      <h2><?= e(t('cases_h2')) ?></h2>
      <p><?= e(t('cases_p')) ?></p>
    </div>
    <div class="cases two">
<?php foreach (array_slice($AO_CASES, 0, 2) as $c) { ao_case($c); } ?>
    </div>
    <p class="docs-intro"><?= e(t('docs_intro')) ?> <a href="<?= e(AO_DOCS_INTRO) ?>" target="_blank" rel="noopener"><?= e(t('docs_intro_link')) ?></a></p>
    <p class="center-cta"><a class="btn" href="<?= e(ao_url('pavyzdziai')) ?>"><?= e(t('cases_all')) ?></a></p>
  </div>
</section>

<section id="kaip">
  <div class="wrap">
    <div class="section-head">
      <p class="label"><b>IV</b> <?= e(t('how_label')) ?></p>
      <h2><?= e(t('how_h2')) ?></h2>
    </div>
    <ol class="steps">
<?php foreach ($AO_SERVICES as $i => $s): ?>
      <li><span class="num"><?= $i + 1 ?></span><h3><?= e($s['name']) ?></h3><p><?= e($s['desc']) ?></p></li>
<?php endforeach; ?>
    </ol>
    <p class="aside"><?= e(t('how_aside')) ?></p>
  </div>
</section>

<section id="kainos">
  <div class="wrap split">
    <div>
      <div class="section-head">
        <p class="label"><b>V</b> <?= e(t('price_label')) ?></p>
        <h2><?= e(t('price_h2')) ?></h2>
      </div>
      <dl class="pricing">
<?php foreach ($AO_PRICING as $p): ?>
        <dt><?= e($p[0]) ?></dt><dd><?= e($p[1]) ?></dd>
<?php endforeach; ?>
      </dl>
    </div>
    <div>
      <p class="note"><?= e(t('price_note')) ?> <a href="https://superhuman.com/plans" rel="noopener"><?= e(t('price_plans')) ?></a></p>
    </div>
  </div>
  <div class="wrap">
    <p class="center-cta"><a class="btn" href="<?= e(ao_url('kainos')) ?>"><?= e(t('price_more')) ?></a></p>
  </div>
</section>

<section id="apie">
  <div class="wrap split rev">
    <figure class="portrait small">
      <img src="/assets/img/saulius.webp" width="720" height="1165" loading="lazy" alt="<?= e(t('portrait_alt')) ?>">
    </figure>
    <div>
      <div class="section-head">
        <p class="label"><b>VI</b> <?= e(t('about_label')) ?></p>
        <h2><?= e(t('about_h2')) ?></h2>
      </div>
      <p><?= e(t('about_p1')) ?></p>
      <p><?= e(t('about_p2')) ?></p>
      <p><a href="<?= e(ao_url('apie')) ?>"><?= e(t('about_link')) ?></a></p>
    </div>
  </div>
</section>

<section id="duk">
  <div class="wrap">
    <div class="section-head">
      <p class="label"><b>VII</b> <?= e(t('faq_label')) ?></p>
      <h2><?= e(t('faq_h2')) ?></h2>
    </div>
    <div class="faq">
<?php foreach ($AO_FAQ as $q) { if (!empty($q['top'])) { ao_faq_item($q); } } ?>
    </div>
    <p class="center-cta"><a class="btn" href="<?= e(ao_url('duk')) ?>"><?= e(t('faq_all')) ?></a></p>
  </div>
</section>

<section id="kontaktai">
  <div class="wrap split<?= ao_docs_form_url() !== '' ? ' split-form' : '' ?>">
    <div>
      <div class="section-head">
        <p class="label"><b>VIII</b> <?= e(t('contact_label')) ?></p>
        <h2><?= e(t('contact_h2')) ?></h2>
        <p><?= e(t('contact_p')) ?></p>
      </div>
      <ul class="contact-list">
        <li><span><?= e(t('c_phone')) ?></span><a href="tel:<?= e(AO_PHONE) ?>"><?= e(AO_PHONE_DISPLAY) ?></a></li>
        <li><span><?= e(t('c_email')) ?></span><a href="mailto:<?= e(AO_EMAIL) ?>"><?= e(AO_EMAIL) ?></a></li>
      </ul>
    </div>
    <div class="contact-box">
      <?php ao_contact_form(); ?>
    </div>
  </div>
</section>

</main>
<script>
// Hero pavyzdys: užsakymas keliauja per žingsnius. Jei lankytojas išjungė animacijas, lieka galutinė būsena.
(function () {
  var m = document.querySelector('.mock');
  if (!m || matchMedia('(prefers-reduced-motion: reduce)').matches) return;
  var steps = JSON.parse(m.dataset.steps), btn = JSON.parse(m.dataset.btn), toast = JSON.parse(m.dataset.toast);
  var li = m.querySelectorAll('.mock-steps li'), chip = m.querySelector('.chip.live');
  var b = m.querySelector('.mock-btn'), tt = m.querySelector('.mock-toast'), i = 0;
  function show() {
    li.forEach(function (el, k) { el.classList.toggle('on', k <= i); el.classList.toggle('now', k === i); });
    chip.textContent = steps[i];
    b.textContent = btn[i];
    b.classList.remove('press'); void b.offsetWidth; b.classList.add('press');
    tt.textContent = i > 0 ? toast[i - 1] : '';
    tt.classList.toggle('show', i > 0);
    i = (i + 1) % steps.length;
  }
  show(); setInterval(show, 2200);
})();
</script>
<?php ao_footer();
