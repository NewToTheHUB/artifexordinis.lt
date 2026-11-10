<?php
// Kainų puslapis (/kainos/ ir /en/pricing/).
// Skaičiuoklė: config.php 'calc_embed_url' — viešai paskelbtos Tvarkos skaičiuoklės nuoroda.
// Kol jos nėra, rodomas kvietimas skaičiuoklę užpildyti pokalbio metu.

ao_head(t('pr_title'), t('pr_desc'), 'kainos');
$calc = (string)cfg('calc_embed_url');
?>
<main id="turinys" class="page">
<section>
  <div class="wrap">
    <p class="label"><b><?= e(t('pr_label')) ?></b></p>
    <h1><?= e(t('pr_h1')) ?></h1>
    <p class="lead"><?= e(t('pr_lead')) ?></p>
    <ol class="steps three">
<?php foreach ($AO_PRICING as $i => $p): ?>
      <li><span class="num"><?= $i + 1 ?></span><h3><?= e($p[0]) ?></h3><p><?= e($p[1]) ?></p></li>
<?php endforeach; ?>
    </ol>
    <p class="note"><?= e(t('price_note')) ?> <a href="https://superhuman.com/plans" rel="noopener"><?= e(t('price_plans')) ?></a></p>
  </div>
</section>

<section>
  <div class="wrap">
    <div class="section-head">
      <p class="label"><b>I</b> <?= e(t('pr_why_label')) ?></p>
      <h2><?= e(t('pr_why_h2')) ?></h2>
    </div>
    <dl class="pricing why">
<?php foreach ($AO_PRICING_WHY as $w): ?>
      <dt><?= e($w[0]) ?></dt><dd><?= e($w[1]) ?></dd>
<?php endforeach; ?>
    </dl>
  </div>
</section>

<section id="skaiciuokle">
  <div class="wrap">
    <div class="section-head">
      <p class="label"><b>II</b> <?= e(t('pr_calc_label')) ?></p>
      <h2><?= e(t('pr_calc_h2')) ?></h2>
      <p><?= e(t('pr_calc_p')) ?></p>
<?php if (t('pr_calc_lang') !== ''): ?>
      <p class="note"><?= e(t('pr_calc_lang')) ?></p>
<?php endif; ?>
    </div>
<?php if ($calc !== ''): ?>
    <iframe class="calc" src="<?= e($calc) ?>" title="<?= e(t('pr_calc_frame')) ?>" loading="lazy"></iframe>
    <p class="note"><a href="<?= e($calc) ?>" target="_blank" rel="noopener"><?= e(t('pr_calc_open')) ?></a></p>
<?php else: ?>
    <p class="aside"><?= e(t('pr_calc_none')) ?></p>
<?php endif; ?>
  </div>
</section>

<section>
  <div class="wrap">
    <div class="section-head">
      <p class="label"><b>III</b> <?= e(t('faq_label')) ?></p>
      <h2><?= e(t('pr_faq_h2')) ?></h2>
    </div>
    <div class="faq">
<?php foreach (t('pr_faq_ids') as $i): $q = $AO_FAQ[$i]; ?>
      <details><summary><?= e($q[0]) ?></summary><p><?= e($q[1]) ?><?php if (!empty($q[2])): ?> <a href="<?= e($q[2][0]) ?>" rel="noopener"><?= e($q[2][1]) ?></a><?php endif; ?></p></details>
<?php endforeach; ?>
    </div>
  </div>
</section>

<section>
  <div class="wrap">
    <div class="section-head">
      <h2><?= e(t('pr_cta_h2')) ?></h2>
      <p><?= e(t('pr_cta_p')) ?></p>
    </div>
    <div class="actions"><a class="btn" href="<?= e(ao_cta()) ?>"><?= e(t('hero_cta')) ?></a></div>
  </div>
</section>
</main>
<?php ao_footer();
