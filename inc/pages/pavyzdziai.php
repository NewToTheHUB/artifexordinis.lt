<?php
// Pavyzdžių puslapis (/pavyzdziai/ ir /en/examples/): problema, senas ir naujas būdas, demo.
require __DIR__ . '/parts.php';

ao_head(t('ex_title'), t('ex_desc'), 'pavyzdziai');
?>
<main id="turinys" class="page">
<section>
  <div class="wrap">
    <p class="label"><b><?= e(t('cases_label')) ?></b></p>
    <h1><?= e(t('ex_h1')) ?></h1>
    <p class="lead"><?= e(t('ex_lead')) ?></p>
    <div class="cases one">
<?php foreach ($AO_CASES as $c) { ao_case($c, true); } ?>
    </div>
    <p class="docs-intro"><?= e(t('docs_intro')) ?> <a href="<?= e(AO_DOCS_INTRO) ?>" target="_blank" rel="noopener"><?= e(t('docs_intro_link')) ?></a></p>
    <div class="process">
      <h3><?= e(t('process_h3')) ?></h3>
      <p><?= e(t('process_p1')) ?></p>
      <p><?= e(t('process_p2')) ?></p>
    </div>
    <div class="actions"><a class="btn" href="<?= e(ao_cta()) ?>"><?= e(t('hero_cta')) ?></a></div>
  </div>
</section>
</main>
<?php ao_footer();
