<?php
require dirname(__DIR__) . '/inc/bootstrap.php';

ao_head('Kontaktai — Artifex Ordinis',
        'Parašykite, kas jūsų versle užima daugiausia laiko. Paprastai atsakau per vieną darbo dieną. Dirbu nuotoliu, visoje Lietuvoje.',
        '/kontaktai/');
$booking = (string)cfg('booking_url');
?>
<main id="turinys" class="page">
<section>
  <div class="wrap split">
    <div>
      <p class="label"><b>Kontaktai</b></p>
      <h1>Papasakokite, kas vyksta.</h1>
      <p class="lead">Kelių sakinių pakanka. Paprastai atsakau per vieną darbo dieną ir pasiūlau laiką nemokamam 30 min. pokalbiui. Jei norite iš karto pamatyti, kaip sistema atrodytų, pasirinkite nemokamą vieno proceso demonstraciją.</p>
      <ul class="contact-list">
        <li><span>El. paštas</span><a href="mailto:<?= e(AO_EMAIL) ?>"><?= e(AO_EMAIL) ?></a></li>
        <li><span>Telefonas</span><a href="tel:<?= e(AO_PHONE) ?>"><?= e(AO_PHONE_DISPLAY) ?></a></li>
<?php if ($booking !== ''): ?>
        <li><span>Pokalbis</span><a href="<?= e($booking) ?>">Rezervuoti 30 min.</a></li>
<?php endif; ?>
        <li><span>Darbas</span>Nuotoliu, visoje Lietuvoje</li>
      </ul>
    </div>
    <div class="contact-box">
      <?php ao_contact_form(); ?>
    </div>
  </div>
</section>
</main>
<?php ao_footer();
