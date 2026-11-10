<?php
// DUK puslapis (/duk/ ir /en/faq/): visi klausimai pagal grupes, įskaitant „Ko nedarau“.

ao_head(t('faq_title'), t('faq_desc'), 'duk', true);
?>
<main id="turinys" class="page">
<section>
  <div class="wrap">
    <p class="label"><b><?= e(t('faq_label')) ?></b></p>
    <h1><?= e(t('faq_h2')) ?></h1>
    <p class="lead"><?= e(t('faq_lead')) ?></p>
<?php foreach ($AO_FAQ_GROUPS as $g => $gName): ?>
    <h2 class="sub" id="<?= e($g) ?>"><?= e($gName) ?></h2>
    <div class="faq">
<?php foreach ($AO_FAQ as $q) { if ($q['g'] === $g) { ao_faq_item($q); } } ?>
    </div>
<?php endforeach; ?>
    <div class="actions"><a class="btn" href="<?= e(ao_cta()) ?>"><?= e(t('hero_cta')) ?></a></div>
  </div>
</section>
</main>
<?php ao_footer();
