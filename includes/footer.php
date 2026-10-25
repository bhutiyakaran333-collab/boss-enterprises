<!-- CTA BAND — shown on most pages via include -->
<section class="cta-band">
  <div class="container cta-band-inner">
    <div class="cta-band-text">
      <p class="cta-band-label"><span class="gold-line"></span> BUSINESS ENQUIRIES</p>
      <h2>Discuss Your Requirements</h2>
      <p class="cta-band-sub">Tell us what you need — our team will respond with details on availability, specifications and pricing.</p>
    </div>
    <div class="cta-band-actions">
      <a href="<?= BASE_URL ?>/contact.php" class="btn-green">Get in Touch →</a>
      <a href="tel:<?= h(COMPANY_PHONE) ?>" class="btn-outline-white">Call <?= h(COMPANY_PHONE) ?></a>
    </div>
  </div>
</section>

<footer class="site-footer">
  <div class="container footer-grid">

    <div class="footer-brand">
      <a href="<?= BASE_URL ?>/" class="logo footer-logo">
        <img src="<?= BASE_URL ?>/assets/images/logo.png" alt="BOSS Enterprises Logo" class="logo-img logo-img-footer">
      </a>
      <p>Manufacturers of quality biomass pellets for industrial and commercial fuel needs.</p>
    </div>

    <div class="footer-col">
      <h4>EXPLORE</h4>
      <ul>
        <li><a href="<?= BASE_URL ?>/">Home</a></li>
        <li><a href="<?= BASE_URL ?>/about.php">About Us</a></li>
        <li><a href="<?= BASE_URL ?>/manufacturing.php">Manufacturing</a></li>
        <li><a href="<?= BASE_URL ?>/products.php">Products</a></li>
        <li><a href="<?= BASE_URL ?>/quality.php">Quality</a></li>
        <li><a href="<?= BASE_URL ?>/contact.php">Contact</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4>PRODUCTS</h4>
      <ul>
        <li><a href="<?= BASE_URL ?>/products.php">Biomass Wood Pellets</a></li>
        <li><a href="<?= BASE_URL ?>/products.php">Industrial Biomass Pellets</a></li>
      </ul>
    </div>

    <div class="footer-col footer-contact-col">
      <h4>CONTACT</h4>
      <ul>
        <li><a href="tel:<?= h(COMPANY_PHONE) ?>"><?= h(COMPANY_PHONE) ?></a></li>
        <li><a href="mailto:<?= h(COMPANY_EMAIL) ?>"><?= h(COMPANY_EMAIL) ?></a></li>
        <li><?= h(COMPANY_ADDRESS) ?></li>
      </ul>
      <a href="https://wa.me/<?= h(COMPANY_WHATSAPP) ?>" class="btn-whatsapp-footer" target="_blank" rel="noopener">
        WhatsApp Enquiry ↗
      </a>
    </div>

  </div>

  <div class="footer-bottom">
    <div class="container footer-bottom-inner">
      <p>© <?= date('Y') ?> <?= h(SITE_NAME) ?>. All rights reserved.</p>
      
      <p class="footer-dev">Developed by <a href="https://www.skywardinfotech.com/index.html" target="_blank" rel="noopener">SKYWARD INFOTECH</a></p>
    </div>
  </div>
</footer>

<script src="<?= BASE_URL ?>/assets/js/main.js" defer></script>
</body>
</html>
