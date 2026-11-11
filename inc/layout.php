<?php
// Bendras puslapio karkasas: <head>, viršutinė juosta, poraštė ir užklausos forma.

// Ženklas: arka iš 5 akmenų su variniu raktiniu akmeniu. Proporcijos pagal φ: šoninis akmuo = raktas × φ, kojos aukštis = arkos storis × φ.
const AO_MARK = '<svg viewBox="0 -10.17 200 200" aria-hidden="true"><path fill="currentColor" d="M0.00 100.00A100 100 0 0 1 21.39 38.19L59.12 67.86A52 52 0 0 0 48.00 100.00ZM23.15 36.02A100 100 0 0 1 77.77 2.50L88.44 49.30A52 52 0 0 0 60.04 66.73ZM122.23 2.50A100 100 0 0 1 176.85 36.02L139.96 66.73A52 52 0 0 0 111.56 49.30ZM178.61 38.19A100 100 0 0 1 200.00 100.00L152.00 100.00A52 52 0 0 0 140.88 67.86ZM0 102H48V179.67H0ZM152 102H200V179.67H152Z"/><path style="fill:var(--accent)" d="M80.50 1.92A100 100 0 0 1 119.50 1.92L110.14 49.00A52 52 0 0 0 89.86 49.00Z"/></svg>';

// $page — puslapio ID iš AO_PATHS. Iš jo gaunamas kanoninis adresas ir kitos kalbos versija (hreflang).
function ao_head(string $title, string $desc, string $page = 'home', bool $faqLd = false): void
{
    $url = AO_SITE . ao_url($page);
    $other = AO_LANG === 'en' ? 'lt' : 'en';
    ?><!doctype html>
<html lang="<?= e(t('html_lang')) ?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($title) ?></title>
<meta name="description" content="<?= e($desc) ?>">
<link rel="canonical" href="<?= e($url) ?>">
<link rel="alternate" hreflang="lt" href="<?= e(AO_SITE . ao_url($page, 'lt')) ?>">
<link rel="alternate" hreflang="en" href="<?= e(AO_SITE . ao_url($page, 'en')) ?>">
<link rel="alternate" hreflang="x-default" href="<?= e(AO_SITE . ao_url($page, 'lt')) ?>">
<link rel="alternate" type="text/markdown" href="/llms.txt" title="<?= e(t('md_title')) ?>">
<meta name="color-scheme" content="light dark">
<script>
// Tema: lankytojo pasirinkimas (jei yra) svarbiau už sistemos nustatymą. Vykdoma prieš CSS, kad ekranas nemirgėtų.
try { var t = localStorage.getItem('tema'); if (t === 'light' || t === 'dark') document.documentElement.setAttribute('data-theme', t); } catch (e) {}
</script>
<meta name="theme-color" content="#F7F3EC" media="(prefers-color-scheme: light)">
<meta name="theme-color" content="#15110D" media="(prefers-color-scheme: dark)">
<link rel="icon" href="/favicon.svg?v=<?= (int)@filemtime(dirname(__DIR__) . '/favicon.svg') ?>" type="image/svg+xml">
<meta property="og:type" content="website">
<meta property="og:locale" content="<?= e(t('og_locale')) ?>">
<meta property="og:locale:alternate" content="<?= e(AO_LANG === 'en' ? 'lt_LT' : 'en_GB') ?>">
<meta property="og:site_name" content="Artifex Ordinis">
<meta property="og:title" content="<?= e($title) ?>">
<meta property="og:description" content="<?= e($desc) ?>">
<meta property="og:url" content="<?= e($url) ?>">
<link rel="preload" href="/assets/fonts/fraunces-latin-500-normal.woff2" as="font" type="font/woff2" crossorigin>
<link rel="stylesheet" href="/assets/styles.css?v=<?= (int)@filemtime(dirname(__DIR__) . '/assets/styles.css') ?>">
<script type="application/ld+json"><?= ao_jsonld($faqLd) ?></script>
</head>
<body>
<a class="skip" href="#turinys"><?= e(t('skip')) ?></a>
<header class="top">
  <div class="wrap">
    <a class="brand" href="<?= e(ao_url('home')) ?>" aria-label="<?= e(t('brand_home')) ?>"><?= AO_MARK ?><span>Artifex Ordinis</span></a>
    <nav class="nav" aria-label="<?= e(t('nav_label')) ?>">
      <a href="<?= e(ao_url('home')) ?>#kaip-veikia"><?= e(t('nav_flow')) ?></a>
      <a href="<?= e(ao_url('pavyzdziai')) ?>"><?= e(t('nav_cases')) ?></a>
      <a href="<?= e(ao_url('kainos')) ?>"><?= e(t('nav_prices')) ?></a>
      <a href="<?= e(ao_url('apie')) ?>"><?= e(t('nav_about')) ?></a>
      <button class="theme" type="button" aria-label="<?= e(t('theme_label')) ?>" title="<?= e(t('theme_label')) ?>"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9" fill="none" stroke="currentColor" stroke-width="1.6"/><path d="M12 3a9 9 0 0 1 0 18Z" fill="currentColor"/></svg></button>
      <a class="lang" href="<?= e(ao_url($page, $other)) ?>" hreflang="<?= e($other) ?>" lang="<?= e($other) ?>" aria-label="<?= e(t('lang_other_label')) ?>"><?= e(t('lang_other')) ?></a>
      <a class="btn" href="<?= e(ao_cta()) ?>"><?= e(t('nav_cta')) ?></a>
    </nav>
  </div>
</header>
<script>
// Viršutinė juosta: slenkant žemyn pasislepia, vos paslinkus į viršų vėl atsiranda.
(function () {
  var top = document.querySelector('.top'), last = window.scrollY;
  window.addEventListener('scroll', function () {
    var y = window.scrollY;
    top.classList.toggle('hide', y > last && y > 120);
    last = y;
  }, { passive: true });
  // Temos jungiklis: perjungia tarp šviesios ir tamsios, pasirinkimą įsimena šiame įrenginyje.
  var btn = document.querySelector('.theme'), root = document.documentElement;
  btn.addEventListener('click', function () {
    var cur = root.getAttribute('data-theme') || (matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
    var next = cur === 'dark' ? 'light' : 'dark';
    root.setAttribute('data-theme', next);
    try { localStorage.setItem('tema', next); } catch (e) {}
  });
})();
</script>
<?php
}

function ao_cta(): string
{
    $b = (string)cfg('booking_url');
    return $b !== '' ? $b : ao_url('home') . '#kontaktai';
}

function ao_footer(): void
{
    $linked = (string)cfg('linkedin_url');
    ?>
<footer>
  <div class="wrap">
    <span>© <?= date('Y') ?> Artifex Ordinis</span>
    <nav class="foot-nav" aria-label="<?= e(t('foot_label')) ?>">
      <a href="<?= e(ao_url('apie')) ?>"><?= e(t('f_about')) ?></a>
      <a href="<?= e(ao_url('pavyzdziai')) ?>"><?= e(t('f_cases')) ?></a>
      <a href="<?= e(ao_url('duk')) ?>"><?= e(t('f_faq')) ?></a>
      <a href="<?= e(ao_url('home')) ?>#kontaktai"><?= e(t('f_contacts')) ?></a>
      <a href="<?= e(ao_url('privacy')) ?>"><?= e(t('f_privacy')) ?></a>
      <a href="mailto:<?= e(AO_EMAIL) ?>"><?= e(AO_EMAIL) ?></a>
      <a href="tel:<?= e(AO_PHONE) ?>"><?= e(AO_PHONE_DISPLAY) ?></a>
<?php if ($linked !== ''): ?>
      <a href="<?= e($linked) ?>" rel="me">LinkedIn</a>
<?php endif; ?>
    </nav>
  </div>
</footer>
</body>
</html>
<?php
}

// Sava užklausos forma. toolname / tooldescription — WebMCP deklaratyvūs atributai:
// naršyklės AI agentas mato šią formą kaip įrankį „užsakyti pokalbį“ ir gali ją užpildyti vartotojo prašymu.
function ao_contact_form(): void
{
    // Lietuviškame puslapyje — registracija Business OS (Superhuman Docs forma, iframe).
    // config.php 'form_url' reikšmė, jei nustatyta, turi pirmenybę.
    $docsForm = (string)cfg('form_url');
    if ($docsForm === '' && AO_LANG === 'lt') {
        $docsForm = 'https://docs.superhuman.com/form/Registracija_dPODHplSJE1';
    }
    if ($docsForm !== '') {
        echo '<iframe id="forma" class="docs-form" src="' . e($docsForm) . '" title="' . e(t('form_frame')) . '" loading="lazy"></iframe>';
        return;
    }
    $status = $_GET['forma'] ?? '';
    ?>
<form class="inquiry" id="forma" method="post" action="/uzklausa.php"
      toolname="<?= e(t('form_toolname')) ?>"
      tooldescription="<?= e(t('form_tool')) ?>">
  <input type="hidden" name="kalba" value="<?= e(AO_LANG) ?>">
<?php if ($status === 'gauta'): ?>
  <p class="form-msg ok" role="status"><?= e(t('form_ok')) ?></p>
<?php elseif ($status === 'klaida'): ?>
  <p class="form-msg err" role="alert"><?= e(t('form_err')) ?> <a href="mailto:<?= e(AO_EMAIL) ?>"><?= e(AO_EMAIL) ?></a>.</p>
<?php elseif ($status === 'trukumas'): ?>
  <p class="form-msg err" role="alert"><?= e(t('form_missing')) ?></p>
<?php endif; ?>
  <label><span><?= e(t('form_name')) ?></span><input name="vardas" autocomplete="name" required maxlength="120"></label>
  <label><span><?= e(t('form_email')) ?></span><input name="el_pastas" type="email" autocomplete="email" required maxlength="200"></label>
  <label><span><?= e(t('form_company')) ?> <small><?= e(t('form_optional')) ?></small></span><input name="imone" autocomplete="organization" maxlength="200"></label>
  <fieldset class="areas"><legend><?= e(t('form_areas')) ?></legend>
<?php foreach ($GLOBALS['AO_FORM_AREAS'] as $k => $label): ?>
    <label class="check"><input type="checkbox" name="sritys[]" value="<?= e($k) ?>"> <?= e($label) ?></label>
<?php endforeach; ?>
  </fieldset>
  <label><span><?= e(t('form_msg')) ?> <small><?= e(t('form_optional')) ?></small></span><textarea name="zinute" rows="4" maxlength="4000" placeholder="<?= e(t('form_msg_ph')) ?>"></textarea></label>
  <div class="hp" aria-hidden="true"><label><span><?= e(t('form_site')) ?></span><input name="svetaine" tabindex="-1" autocomplete="off"></label></div>
  <input type="hidden" name="t" value="<?= time() ?>">
  <button class="btn" type="submit"><?= e(t('form_submit')) ?></button>
  <p class="note"><?= e(t('form_privacy')) ?> <a href="<?= e(ao_url('privacy')) ?>"><?= e(t('form_privacy_link')) ?></a>.</p>
</form>
<?php
}
