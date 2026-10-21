<?php
// Bendras puslapio karkasas: <head>, viršutinė juosta, poraštė ir užklausos forma.

const AO_MARK = '<svg viewBox="0 0 100 161.8" aria-hidden="true"><path d="M0.00 49.30A50.0 50.0 0 0 1 4.65 28.94L21.97 36.98A30.90 30.90 0 0 0 19.10 49.57Z" fill="currentColor"/><path d="M5.26 27.68A50.0 50.0 0 0 1 18.28 11.35L30.40 26.11A30.90 30.90 0 0 0 22.35 36.20Z" fill="currentColor"/><path d="M19.37 10.48A50.0 50.0 0 0 1 38.19 1.41L42.70 19.97A30.90 30.90 0 0 0 31.07 25.57Z" fill="currentColor"/><path d="M39.56 1.10A50.0 50.0 0 0 1 60.44 1.10L56.45 19.78A30.90 30.90 0 0 0 43.55 19.78Z" style="fill:var(--accent)"/><path d="M61.81 1.41A50.0 50.0 0 0 1 80.63 10.48L68.93 25.57A30.90 30.90 0 0 0 57.30 19.97Z" fill="currentColor"/><path d="M81.72 11.35A50.0 50.0 0 0 1 94.74 27.68L77.65 36.20A30.90 30.90 0 0 0 69.60 26.11Z" fill="currentColor"/><path d="M95.35 28.94A50.0 50.0 0 0 1 100.00 49.30L80.90 49.57A30.90 30.90 0 0 0 78.03 36.98Z" fill="currentColor"/><path d="M0 50.90H19.10V161.80H0Z" fill="currentColor"/><path d="M80.90 50.90H100.00V161.80H80.90Z" fill="currentColor"/></svg>';

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
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<meta property="og:type" content="website">
<meta property="og:locale" content="lt_LT">
<meta property="og:site_name" content="Artifex Ordinis">
<meta property="og:title" content="<?= e($title) ?>">
<meta property="og:description" content="<?= e($desc) ?>">
<meta property="og:url" content="<?= e($url) ?>">
<link rel="preload" href="/assets/fonts/fraunces-latin-500-normal.woff2" as="font" type="font/woff2" crossorigin>
<link rel="stylesheet" href="/assets/styles.css?v=3">
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
      <a href="/kontaktai/">Kontaktai</a>
      <a class="btn" href="<?= e(ao_cta()) ?>">Pokalbis</a>
    </nav>
  </div>
</header>
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
    <span>© <?= date('Y') ?> Artifex Ordinis · Kaunas</span>
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
      tooldescription="Užsakyti nemokamą 30 min. pokalbį su Artifex Ordinis (Saulius, Kaunas) apie verslo procesų tvarką. Reikia vardo, el. pašto ir trumpo aprašymo, kokią problemą norima išspręsti.">
<?php if ($status === 'gauta'): ?>
  <p class="form-msg ok" role="status">Ačiū! Užklausą gavau ir atsakysiu per 24 valandas.</p>
<?php elseif ($status === 'klaida'): ?>
  <p class="form-msg err" role="alert">Nepavyko išsiųsti. Parašykite tiesiai į <a href="mailto:<?= e(AO_EMAIL) ?>"><?= e(AO_EMAIL) ?></a>.</p>
<?php elseif ($status === 'trukumas'): ?>
  <p class="form-msg err" role="alert">Užpildykite vardą, el. paštą ir žinutę.</p>
<?php endif; ?>
  <label><span>Vardas</span><input name="vardas" autocomplete="name" required maxlength="120"></label>
  <label><span>El. paštas</span><input name="el_pastas" type="email" autocomplete="email" required maxlength="200"></label>
  <label><span>Įmonė <small>(nebūtina)</small></span><input name="imone" autocomplete="organization" maxlength="200"></label>
  <label><span>Kas jūsų versle užima daugiausia laiko?</span><textarea name="zinute" rows="5" required maxlength="4000"></textarea></label>
  <div class="hp" aria-hidden="true"><label><span>Svetainė</span><input name="svetaine" tabindex="-1" autocomplete="off"></label></div>
  <input type="hidden" name="t" value="<?= time() ?>">
  <button class="btn" type="submit">Siųsti užklausą</button>
  <p class="note">Duomenis naudosiu tik atsakyti į jūsų užklausą. Daugiau — <a href="/privatumo-politika/">privatumo politikoje</a>.</p>
  <p class="note agent-note"><b>Turite AI asistentą?</b> Ši forma pažymėta kaip WebMCP įrankis <code>uzsakyti_pokalbi</code>, todėl asistentas naršyklėje gali ją užpildyti už jus.</p>
</form>
<?php
}
