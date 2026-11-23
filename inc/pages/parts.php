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

// Hero: animuotas užsakymų lentelės pavyzdys. Be JS rodoma galutinė būsena; JS tik suka ciklą.
function ao_hero_demo(): void
{
    $m = t('mock');
    $last = count($m['steps']) - 1;
    ?>
      <figure class="mock" aria-label="<?= e($m['aria']) ?>" data-steps="<?= e(json_encode($m['steps'], JSON_UNESCAPED_UNICODE)) ?>" data-btn="<?= e(json_encode($m['btn'], JSON_UNESCAPED_UNICODE)) ?>" data-toast="<?= e(json_encode($m['toast'], JSON_UNESCAPED_UNICODE)) ?>">
        <div class="mock-bar"><span class="dots" aria-hidden="true"><i></i><i></i><i></i></span><b><?= e($m['title']) ?></b><span class="mock-tag"><?= e($m['sample']) ?></span></div>
        <ol class="mock-steps" aria-hidden="true">
<?php foreach ($m['steps'] as $i => $s): ?>
          <li class="<?= $i <= $last ? 'on' : '' ?>"><?= e($s) ?></li>
<?php endforeach; ?>
        </ol>
        <table class="mock-table">
          <thead><tr><?php foreach ($m['cols'] as $c): ?><th><?= e($c) ?></th><?php endforeach; ?></tr></thead>
          <tbody>
<?php foreach ($m['rows'] as $i => $r): ?>
            <tr class="<?= $i === 0 ? 'active' : '' ?>"><td><?= e($r[0]) ?></td><td><?= e($r[1]) ?></td><td><?= e($r[2]) ?></td><td><span class="chip<?= $i === 0 ? ' live' : '' ?>"><?= e($i === 0 ? $m['steps'][$last] : $m['steps'][min($i, $last - 1)]) ?></span></td></tr>
<?php endforeach; ?>
          </tbody>
        </table>
        <div class="mock-foot"><span class="mock-btn"><?= e($m['btn'][$last]) ?></span><span class="mock-toast" role="status"><?= e($m['toast'][$last - 1]) ?></span></div>
      </figure>
<?php
}

function ao_build_grid(array $items): void
{
    ?>
    <div class="bento">
<?php foreach ($items as $b): ?>
      <article class="tile<?= $b['wide'] ? ' wide' : '' ?>">
        <?php if ($b['product']): ?><span class="tag"><?= e(t('build_product')) ?></span><?php endif; ?>
        <h3><?= e($b['name']) ?></h3>
        <p><?= e($b['desc']) ?></p>
<?php if ($b['demo'] !== ''): ?>
        <a class="tile-link" href="<?= e($b['demo']) ?>" target="_blank" rel="noopener"><?= e(t('case_try')) ?></a>
<?php endif; ?>
      </article>
<?php endforeach; ?>
      <article class="tile own">
        <h3><?= e(t('build_own_h')) ?></h3>
        <p><?= e(t('build_own_p')) ?></p>
        <a class="tile-link" href="<?= e(ao_cta()) ?>"><?= e(t('build_own_cta')) ?></a>
      </article>
    </div>
<?php
}
