<?php
define('AO_LANG', 'en');
require dirname(__DIR__, 2) . '/inc/bootstrap.php';

ao_head('Privacy policy — Artifex Ordinis',
        'How artifexordinis.lt handles the personal data submitted in the inquiry form: what data, why, for how long and what rights you have.',
        'privacy');
?>
<main id="turinys" class="page">
<section>
  <div class="wrap">
    <p class="label"><b>Privacy policy</b></p>
    <h1>How I handle your data.</h1>
    <div class="prose">
      <p class="note">Updated 2026-10-21 · <a href="#client-systems">When I build a system for your company</a> · The Lithuanian version is the binding one: <a href="/privatumo-politika/">privatumo politika</a>.</p>

      <h2>Who handles the data</h2>
      <p>The data controller is Saulius Elinskas, operating as a sole trader under the name Artifex Ordinis, Lithuania. Email: <a href="mailto:<?= e(AO_EMAIL) ?>"><?= e(AO_EMAIL) ?></a>.</p>

      <h2>What data I collect</h2>
      <p>Only what you submit yourself in the inquiry form or by email: your name, email address, company name (if you provide it) and the message text. The website uses no cookies, analytics or ad tracking.</p>

      <h2>What I use it for</h2>
      <p>To reply to your inquiry, arrange a call and, if we agree, prepare a proposal. The legal basis is steps taken at your request before entering into a contract (GDPR Art. 6(1)(b)).</p>

      <h2>How long I keep it</h2>
      <p>I keep inquiry data for no longer than 2 years from our last contact, or until you ask me to delete it. If we become partners, contract data is kept as long as accounting laws require.</p>

      <h2>Who else may see the data</h2>
      <ul>
        <li><strong>Hostinger</strong> — website hosting, email and a backup copy of inquiries on the server (EU).</li>
        <li><strong>Superhuman (Superhuman Docs)</strong> — the inquiry list where I handle inquiries. Data may be transferred to the USA under the EU–US Data Privacy Framework and the standard contractual clauses approved by the European Commission.</li>
      </ul>
      <p>I do not sell the data or pass it on for other purposes.</p>

      <h2 id="client-systems">When I build a system for your company</h2>
      <p>Superhuman Docs is not my platform. I build a system in it that fits your work, so responsibility is shared like this:</p>
      <ul>
        <li><strong>Your company</strong> — the data controller: decides what data is processed and why.</li>
        <li><strong>Artifex Ordinis</strong> — the data processor: I process data only on your written instructions and never for my own purposes.</li>
        <li><strong>Superhuman (Docs platform)</strong> — stores the data on its infrastructure under its own data processing agreement with you. If the system is built in my account, the platform is my sub-processor during that time.</li>
      </ul>
      <p>This is set out in a data processing agreement under GDPR Article 28. In it we agree that:</p>
      <ul>
        <li>access is given only to those who need it for their work, and everyone with access keeps it confidential;</li>
        <li>I report a security incident within 24 hours at the latest;</li>
        <li>I forward data subject requests to you within 2 business days;</li>
        <li>after the work ends, I return or delete the data within 30 days.</li>
      </ul>
      <p>The system is built in your Superhuman Docs account, and I get only the access the work requires. If I build the system in my account, I hand it over to you ready and paid for, and remove my access. The platform sends data over an encrypted connection (TLS 1.2 or newer) and stores it encrypted (AES-256). Its certifications (ISO 27001, SOC 2 Type 2) are described on the platform's security page <a href="https://coda.io/trust/security">coda.io/trust/security</a>.</p>

      <h2>Your rights</h2>
      <p>You can ask to access your data, correct it, delete it, restrict its processing or object to it being processed. Write to <a href="mailto:<?= e(AO_EMAIL) ?>"><?= e(AO_EMAIL) ?></a> — I will reply within 30 days. If you believe your rights have been violated, you can contact the State Data Protection Inspectorate of Lithuania (<a href="https://vdai.lrv.lt">vdai.lrv.lt</a>).</p>
    </div>
  </div>
</section>
</main>
<?php ao_footer();
