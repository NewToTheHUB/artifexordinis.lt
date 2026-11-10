<?php
define('AO_LANG', 'en');
require dirname(__DIR__, 2) . '/inc/bootstrap.php';

ao_head('About — Saulius, Artifex Ordinis',
        'Saulius: from physical work and technology to business process order. Experience in manufacturing, order management and automation.',
        'apie');
?>
<main id="turinys" class="page">
<section>
  <div class="wrap split rev">
    <figure class="portrait">
      <img src="/assets/img/saulius.webp" width="720" height="1165" alt="Saulius Elinskas">
    </figure>
    <div>
      <p class="label"><b>About</b> me</p>
      <h1>From physical work to process order.</h1>
      <p class="lead">After school I was looking for my path: I worked and travelled around the world. I tried construction, logistics, customer service, electrical engineering and technical consulting. Everywhere I was curious about the same thing: how processes work, why they work that way and how they can be improved.</p>
      <p>After several years of travel and life experience, I came back to Lithuania. In employed work I often saw that tasks could be done in a more flexible and simpler way: take monotonous work away from people and leave them time for what is really useful.</p>
      <p>There was always more work and less time. Quality suffered. So sooner or later, a company needs a system. It must be clear, simple and helpful, not something that slows work down.</p>
      <p>A world that changes every day, with endless technologies, apps and sources of information, overloads even an analytical mind. I needed a method and a tool to keep my thoughts in order. That tool became Coda, now Superhuman Docs.</p>
      <p>For the third year now it has held my goals and priorities, my finances and my planned time. Managed time is saved time, and it leaves time for life with my dear partner. Now I build the same kind of order for businesses.</p>
    </div>
  </div>
</section>

<section>
  <div class="wrap split">
    <div>
      <div class="section-head">
        <p class="label"><b>I</b> Experience</p>
        <h2>Where I saw disorder.</h2>
        <p>In these places I saw work get stuck. I designed the order myself.</p>
      </div>
      <ul class="cols one">
        <li>Order management in 3D printing manufacturing<small>B2B order flow from intake to shipping, a production tracking system, a price calculator, scripts that remove manual work</small></li>
        <li>Technical consultant<small>installing automated dispensing machines, troubleshooting, client training, commercial quotes, a barcode project</small></li>
        <li>Engineering design<small>piping design, technical documentation, 3D CAD</small></li>
        <li>CNC machines<small>technical drawings, programs, one-off part production</small></li>
        <li>Construction, logistics, production supervision<small>work that taught me to see the process from the inside</small></li>
      </ul>
    </div>
    <div>
      <div class="section-head">
        <p class="label"><b>II</b> Tools</p>
        <h2>What I work with.</h2>
      </div>
      <ul class="cols one">
        <li>Superhuman Docs (formerly Coda)<small>tables, formulas, automations, system design</small></li>
        <li>Superhuman Go and AI<small>summaries, drafts, work with documents</small></li>
        <li>Scripts<small>PowerShell, JavaScript, Python — file processing, data extraction from PDF, ZIP, DOCX, XML</small></li>
      </ul>
    </div>
  </div>
</section>

<section>
  <div class="wrap">
    <div class="section-head">
      <p class="label"><b>III</b> Hobbies</p>
      <h2>Away from the screen.</h2>
    </div>
    <ul class="chips">
      <li>Dancing: bachata, salsa, tango</li><li>Sports and martial arts</li><li>Body language and psychology</li>
      <li>Designing new things</li><li>Riding an electric unicycle</li>
    </ul>
    <p class="aside">I design furniture out of need: the flat is rented, and clothes have to hang somewhere. I do not want a bulky wardrobe, but a cosy wooden piece that can stand anywhere and come along when I move. The principle is the same as in business: first understand the need and the space, then build.</p>
    <div class="actions"><a class="btn" href="<?= e(ao_cta()) ?>">Book a call</a></div>
  </div>
</section>
</main>
<?php ao_footer();
