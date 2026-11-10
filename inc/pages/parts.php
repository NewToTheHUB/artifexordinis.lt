<?php
// Bendros dalys keliems puslapiams.

// Pavyzdžio kortelė. $full = true rodo seną/naują būdą ir įterptą demo (jei yra).
function ao_case(array $c, bool $full = false): void
{
    ?>
      <article class="case<?= $full ? ' full' : '' ?>">
        <span class="tag"><?= e($c['tag']) ?></span>
        <h3><?= e($c['problem']) ?></h3>
        <dl>
          <dt><?= e(t('case_old')) ?></dt><dd><?= e($c['old']) ?></dd>
          <dt class="new"><?= e(t('case_new')) ?></dt><dd><?= e($c['new']) ?></dd>
<?php if ($full): ?>
          <dt><?= e(t('case_result')) ?></dt><dd><?= e($c['result']) ?></dd>
<?php endif; ?>
        </dl>
<?php if ($full && !empty($c['embed'])): ?>
        <iframe class="demo-frame" src="<?= e($c['embed']) ?>" title="<?= e(t('case_frame')) ?>: <?= e($c['tag']) ?>" loading="lazy"></iframe>
<?php endif; ?>
<?php if (!empty($c['demo'])): ?>
        <a class="btn ghost case-link" href="<?= e($c['demo']) ?>" target="_blank" rel="noopener"><?= e(t('case_try')) ?></a>
<?php else: ?>
        <a class="btn ghost case-link" href="<?= e(ao_cta()) ?>"><?= e(t('case_call')) ?></a>
<?php endif; ?>
      </article>
<?php
}
