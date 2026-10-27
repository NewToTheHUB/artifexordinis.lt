<?php
// Bendras puslapio karkasas: <head>, viršutinė juosta, poraštė ir užklausos forma.

// Ženklas: arka iš 5 akmenų su variniu raktiniu akmeniu. Proporcijos pagal φ: šoninis akmuo = raktas × φ, kojos aukštis = arkos storis × φ.
const AO_MARK = '<svg viewBox="0 -10.17 200 200" aria-hidden="true"><path fill="currentColor" d="M0.00 100.00A100 100 0 0 1 21.39 38.19L59.12 67.86A52 52 0 0 0 48.00 100.00ZM23.15 36.02A100 100 0 0 1 77.77 2.50L88.44 49.30A52 52 0 0 0 60.04 66.73ZM122.23 2.50A100 100 0 0 1 176.85 36.02L139.96 66.73A52 52 0 0 0 111.56 49.30ZM178.61 38.19A100 100 0 0 1 200.00 100.00L152.00 100.00A52 52 0 0 0 140.88 67.86ZM0 102H48V179.67H0ZM152 102H200V179.67H152Z"/><path style="fill:var(--accent)" d="M80.50 1.92A100 100 0 0 1 119.50 1.92L110.14 49.00A52 52 0 0 0 89.86 49.00Z"/></svg>';

function ao_head(string $title, string $desc, string $path = '/', bool $faqLd = false): void
{
    $url = AO_SITE . $path;
    ?><!doctype html>
<html lang="lt">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($title) ?></title>
<meta name="description" content="<?= e($desc) ?>">
<link rel="canonical" href="<?= e($url) ?>">
<link rel="alternate" type="text/markdown" href="/llms.txt" title="Santrauka AI agentams">
<meta name="color-scheme" content="light dark">
<meta name="theme-color" content="#F7F3EC" media="(prefers-color-scheme: light)">
<meta name="theme-color" content="#15110D" media="(prefers-color-scheme: dark)">
<link rel="icon" href="/favicon.svg?v=<?= (int)@filemtime(dirname(__DIR__) . '/favicon.svg') ?>" type="image/svg+xml">
<meta property="og:type" content="website">
<meta property="og:locale" content="lt_LT">
<meta property="og:site_name" content="Artifex Ordinis">
<meta property="og:title" content="<?= e($title) ?>">
<meta property="og:description" content="<?= e($desc) ?>">
<meta property="og:url" content="<?= e($url) ?>">
<link rel="preload" href="/assets/fonts/fraunces-latin-500-normal.woff2" as="font" type="font/woff2" crossorigin>
<link rel="stylesheet" href="/assets/styles.css?v=<?= (int)@filemtime(dirname(__DIR__) . '/assets/styles.css') ?>">
<script type="application/ld+json"><?= ao_jsonld($faqLd) ?></script>
</head>
<body>
<a class="skip" href="#turinys">Pereiti prie turinio</a>
<header class="top">
  <div class="wrap">
    <a class="brand" href="/" aria-label="Artifex Ordinis — pradžia"><?= AO_MARK ?><span>Artifex Ordinis</span></a>
    <nav class="nav" aria-label="Pagrindinė navigacija">
      <a href="/#kaip">Kaip dirbu</a>
      <a href="/#pavyzdziai">Pavyzdžiai</a>
      <a href="/#kainos">Kainos</a>
      <a href="/apie/">Apie</a>
      <a class="btn" href="<?= e(ao_cta()) ?>">Pokalbis</a>
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
})();
</script>
<?php
}

function ao_cta(): string
{
    $b = (string)cfg('booking_url');
    return $b !== '' ? $b : '/kontaktai/#forma';
}

function ao_footer(): void
{
    $linked = (string)cfg('linkedin_url');
    ?>
<footer>
  <div class="wrap">
    <span>© <?= date('Y') ?> Artifex Ordinis</span>
    <nav class="foot-nav" aria-label="Poraštės navigacija">
      <a href="/apie/">Apie</a>
      <a href="/kontaktai/">Kontaktai</a>
      <a href="/privatumo-politika/">Privatumo politika</a>
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
    // Alternatyva: Superhuman Docs forma (iframe). Įjungiama config.php 'form_url' reikšme.
    $docsForm = (string)cfg('form_url');
    if ($docsForm !== '') {
        echo '<iframe id="forma" class="docs-form" src="' . e($docsForm) . '" title="Užklausos forma" loading="lazy"></iframe>';
        return;
    }
    $status = $_GET['forma'] ?? '';
    ?>
<form class="inquiry" id="forma" method="post" action="/uzklausa.php"
      toolname="uzsakyti_pokalbi"
      tooldescription="Užsakyti nemokamą 30 min. pokalbį arba nemokamą vieno proceso demonstraciją su Artifex Ordinis (Saulius, nuotoliu visoje Lietuvoje) apie verslo procesų tvarką. Reikia vardo, el. pašto ir trumpo aprašymo, kokią problemą norima išspręsti.">
<?php if ($status === 'gauta'): ?>
  <p class="form-msg ok" role="status">Ačiū! Užklausą gavau ir atsakysiu per vieną darbo dieną.</p>
<?php elseif ($status === 'klaida'): ?>
  <p class="form-msg err" role="alert">Nepavyko išsiųsti. Parašykite tiesiai į <a href="mailto:<?= e(AO_EMAIL) ?>"><?= e(AO_EMAIL) ?></a>.</p>
<?php elseif ($status === 'trukumas'): ?>
  <p class="form-msg err" role="alert">Užpildykite vardą, el. paštą ir žinutę.</p>
<?php endif; ?>
  <label><span>Vardas</span><input name="vardas" autocomplete="name" required maxlength="120"></label>
  <label><span>El. paštas</span><input name="el_pastas" type="email" autocomplete="email" required maxlength="200"></label>
  <label><span>Įmonė <small>(nebūtina)</small></span><input name="imone" autocomplete="organization" maxlength="200"></label>
  <label><span>Kas jūsų versle užima daugiausia laiko?</span><textarea name="zinute" rows="5" required maxlength="4000"></textarea></label>
  <label class="check"><input type="checkbox" name="demonstracija" value="1"> Norėčiau ir nemokamos vieno proceso demonstracijos<small>Demonstracijai reikės daugiau informacijos apie jūsų procesą, todėl ją aptarsime pokalbio metu.</small></label>
  <div class="hp" aria-hidden="true"><label><span>Svetainė</span><input name="svetaine" tabindex="-1" autocomplete="off"></label></div>
  <input type="hidden" name="t" value="<?= time() ?>">
  <button class="btn" type="submit">Siųsti užklausą</button>
  <p class="note">Duomenis naudosiu tik atsakyti į jūsų užklausą. Daugiau — <a href="/privatumo-politika/">privatumo politikoje</a>.</p>
  <p class="note agent-note"><b>Turite AI asistentą?</b> Ši forma pažymėta kaip WebMCP įrankis <code>uzsakyti_pokalbi</code>, todėl asistentas naršyklėje gali ją užpildyti už jus.</p>
</form>
<?php
}
