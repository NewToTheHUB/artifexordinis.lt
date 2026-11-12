<?php
// Bendros dalys keliems puslapiams.

// Minimalus Superhuman Docs galimybių pavyzdys.
const AO_DOCS_INTRO = 'https://docs.superhuman.com/@artifexordinis/docs-kas-tai';

// Pavyzdžio kortelė: problema, tada „Dabar“ ir „Mūsų variantas“ su mygtuku.
// $full = true: puslapyje /pavyzdziai/ abi pusės stovi greta (plačiame ekrane).
function ao_case(array $c, bool $full = false): void
{
    ?>
      <article class="case<?= $full ? ' full' : '' ?>">
        <span class="tag"><?= e($c['tag']) ?></span>
        <h3><?= e($c['problem']) ?></h3>
        <div class="vs">
          <div class="vs-old">
            <p class="vs-label"><?= e(t('case_old')) ?></p>
            <p><?= e($c['old']) ?></p>
          </div>
          <div class="vs-new">
            <p class="vs-label"><?= e(t('case_new')) ?></p>
            <p><?= e($c['new']) ?></p>
            <p class="vs-result"><?= e($c['result']) ?></p>
<?php if (!empty($c['demo'])): ?>
            <a class="btn case-link" href="<?= e($c['demo']) ?>" target="_blank" rel="noopener"><?= e(t('case_try')) ?></a>
<?php else: ?>
            <a class="btn ghost case-link" href="<?= e(ao_cta()) ?>"><?= e(t('case_call')) ?></a>
<?php endif; ?>
          </div>
        </div>
<?php if ($full && !empty($c['embed'])): ?>
        <iframe class="demo-frame" src="<?= e($c['embed']) ?>" title="<?= e(t('case_frame')) ?>: <?= e($c['tag']) ?>" loading="lazy"></iframe>
<?php endif; ?>
      </article>
<?php
}
