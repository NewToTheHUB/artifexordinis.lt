<?php
require dirname(__DIR__) . '/inc/bootstrap.php';

ao_head('Kontaktai — Artifex Ordinis',
        'Parašykite, kas jūsų versle užima daugiausia laiko. Atsakau per 24 valandas. Kaunas, visa Lietuva nuotoliu.',
        '/kontaktai/');
$booking = (string)cfg('booking_url');
?>
<main id="turinys" class="page">
<section>
  <div class="wrap split">
    <div>
      <p class="label"><b>Kontaktai</b></p>
      <h1>Papasakokite, kas vyksta.</h1>
      <p class="lead">Kelių sakinių pakanka. Atsakau per 24 valandas ir pasiūlau laiką nemokamam 30 min. pokalbiui.</p>
      <ul class="contact-list">
        <li><span>El. paštas</span><a href="mailto:<?= e(AO_EMAIL) ?>"><?= e(AO_EMAIL) ?></a></li>
<?php if ($booking !== ''): ?>
        <li><span>Pokalbis</span><a href="<?= e($booking) ?>">Rezervuoti 30 min.</a></li>
<?php endif; ?>
        <li><span>Vieta</span>Kaunas · visa Lietuva nuotoliu</li>
        <li><span>Kalbos</span>Lietuvių, anglų</li>
        <li><span>Veikla</span>Saulius, individuali veikla<!-- PATIKRINTI: ar rodyti pavardę ir pažymos numerį --></li>
      </ul>
    </div>
    <div class="contact-box">
      <?php ao_contact_form(); ?>
    </div>
  </div>
</section>
</main>
<?php ao_footer();
