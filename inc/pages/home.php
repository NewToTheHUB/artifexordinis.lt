<?php
// Pagrindinio puslapio šablonas. Kalbą nustato failas, kuris jį įtraukia (/index.php arba /en/index.php).

if (ao_wants_markdown()) { ao_send_markdown(ao_markdown_home()); }

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
        <a class="btn" href="<?= e(ao_cta()) ?>"><?= e(t('hero_cta')) ?></a>
        <a class="btn ghost" href="#pavyzdziai"><?= e(t('hero_cases')) ?></a>
      </div>
      <p class="note"><?= e(t('hero_note')) ?></p>
    </div>
    <div>
      <svg class="hero-figure" viewBox="0 -10.17 200 200" role="img" aria-label="<?= e(t('hero_fig')) ?>">
<g class="arch"><path d="M0.00 100.00A100 100 0 0 1 21.39 38.19L59.12 67.86A52 52 0 0 0 48.00 100.00Z" class="v"/><path d="M23.15 36.02A100 100 0 0 1 77.77 2.50L88.44 49.30A52 52 0 0 0 60.04 66.73Z" class="v"/><path d="M122.23 2.50A100 100 0 0 1 176.85 36.02L139.96 66.73A52 52 0 0 0 111.56 49.30Z" class="v"/><path d="M178.61 38.19A100 100 0 0 1 200.00 100.00L152.00 100.00A52 52 0 0 0 140.88 67.86Z" class="v"/><path d="M0 102H48V179.67H0Z" class="v"/><path d="M152 102H200V179.67H152Z" class="v"/><path d="M80.50 1.92A100 100 0 0 1 119.50 1.92L110.14 49.00A52 52 0 0 0 89.86 49.00Z" class="ks"/></g>
</svg>
    </div>
  </div>
</section>

<section id="netvarka">
  <div class="wrap">
    <div class="section-head">
      <p class="label"><b>I</b> <?= e(t('pain_label')) ?></p>
      <h2><?= e(t('pain_h2')) ?></h2>
      <p><?= e(t('pain_p')) ?></p>
    </div>
    <ol class="numbered">
<?php foreach (t('pain_items') as $p): ?>
      <li><?= e($p) ?></li>
<?php endforeach; ?>
    </ol>
  </div>
</section>

<section id="ka-daro">
  <div class="wrap">
    <div class="section-head">
      <p class="label"><b>II</b> <?= e(t('jobs_label')) ?></p>
      <h2><?= e(t('jobs_h2')) ?></h2>
      <p><?= e(t('jobs_p')) ?></p>
    </div>
    <ul class="jobs">
<?php foreach ($AO_JOBS as $j): ?>
      <li><h3><?= e($j[0]) ?></h3><p><?= e($j[1]) ?></p></li>
<?php endforeach; ?>
    </ul>
    <h3 class="sub"><?= e(t('extras_h3')) ?></h3>
    <ul class="cols">
<?php foreach ($AO_EXTRAS as $x): ?>
      <li><?= e($x[0]) ?><small><?= e($x[1]) ?></small></li>
<?php endforeach; ?>
    </ul>
  </div>
</section>

<section id="kam">
  <div class="wrap">
    <div class="section-head">
      <p class="label"><b>III</b> <?= e(t('sectors_label')) ?></p>
      <h2><?= e(t('sectors_h2')) ?></h2>
    </div>
    <ul class="chips" aria-label="<?= e(t('sectors_aria')) ?>">
<?php foreach ($AO_SECTORS as $s): ?>
      <li><?= e($s) ?></li>
<?php endforeach; ?>
    </ul>
    <p class="note"><?= e(t('sectors_note')) ?></p>
    <p class="aside"><?= e(t('sectors_aside')) ?></p>
  </div>
</section>

<section class="statement">
  <div class="wrap">
    <p class="label"><b>IV</b> <?= e(t('stmt_label')) ?></p>
    <blockquote><?= t('stmt_quote') ?></blockquote>
    <p><?= e(t('stmt_p')) ?></p>
  </div>
</section>

<section id="pavyzdziai">
  <div class="wrap">
    <div class="section-head">
      <p class="label"><b>V</b> <?= e(t('cases_label')) ?></p>
      <h2><?= e(t('cases_h2')) ?></h2>
      <p><?= e(t('cases_p')) ?></p>
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
        <a class="btn ghost case-link" href="<?= e($c['demo']) ?>" target="_blank" rel="noopener"><?= e(t('case_try')) ?></a>
<?php else: ?>
        <a class="btn ghost case-link" href="<?= e(ao_cta()) ?>"><?= e(t('case_call')) ?></a>
<?php endif; ?>
      </article>
<?php endforeach; ?>
    </div>
    <div class="process">
      <h3><?= e(t('process_h3')) ?></h3>
      <p><?= e(t('process_p1')) ?></p>
      <p><?= e(t('process_p2')) ?></p>
    </div>
    <p class="demo-note"><?= e(t('demo_note')) ?></p>
  </div>
</section>

<section id="kaip">
  <div class="wrap">
    <div class="section-head">
      <p class="label"><b>VI</b> <?= e(t('how_label')) ?></p>
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
        <p class="label"><b>VII</b> <?= e(t('price_label')) ?></p>
        <h2><?= e(t('price_h2')) ?></h2>
      </div>
      <dl class="pricing">
<?php foreach ($AO_PRICING as $p): ?>
        <dt><?= e($p[0]) ?></dt><dd><?= e($p[1]) ?></dd>
<?php endforeach; ?>
      </dl>
      <p><a class="btn ghost" href="<?= e(ao_url('kainos')) ?>"><?= e(t('price_more')) ?></a></p>
    </div>
    <div>
      <p class="note"><?= e(t('price_note')) ?> <a href="https://superhuman.com/plans" rel="noopener"><?= e(t('price_plans')) ?></a></p>
    </div>
  </div>
</section>

<section id="apie">
  <div class="wrap split rev">
    <figure class="portrait">
      <img src="/assets/img/saulius.webp" width="720" height="1165" loading="lazy" alt="<?= e(t('portrait_alt')) ?>">
    </figure>
    <div>
      <div class="section-head">
        <p class="label"><b>VIII</b> <?= e(t('about_label')) ?></p>
        <h2 class="pointer"><span class="arrow" aria-hidden="true">←</span> Saulius</h2>
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
      <p class="label"><b>IX</b> <?= e(t('faq_label')) ?></p>
      <h2><?= e(t('faq_h2')) ?></h2>
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
        <p class="label"><b>X</b> <?= e(t('contact_label')) ?></p>
        <h2><?= e(t('contact_h2')) ?></h2>
        <p><?= e(t('contact_p')) ?></p>
      </div>
      <ul class="contact-list">
        <li><span><?= e(t('c_email')) ?></span><a href="mailto:<?= e(AO_EMAIL) ?>"><?= e(AO_EMAIL) ?></a></li>
        <li><span><?= e(t('c_phone')) ?></span><a href="tel:<?= e(AO_PHONE) ?>"><?= e(AO_PHONE_DISPLAY) ?></a></li>
        <li><span><?= e(t('c_work')) ?></span><?= e(t('c_work_val')) ?></li>
      </ul>
    </div>
    <div class="contact-box">
      <?php ao_contact_form(); ?>
    </div>
  </div>
</section>

</main>
<?php ao_footer();
