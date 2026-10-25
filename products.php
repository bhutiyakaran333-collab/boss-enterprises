<?php
define('BOSS_ENTERPRISE',true);
require_once __DIR__.'/includes/config.php';
$page_title='Products';
$page_desc ='Biomass pellets for industrial and commercial use — Biomass Wood Pellets and Industrial Biomass Pellets. Enquire for specs, availability and pricing.';
require_once __DIR__.'/includes/header.php';
?>

<section class="page-intro">
  <div class="container">
    <span class="section-label">OUR PRODUCTS</span>
    <h1>Biomass Pellets for<br>Industrial &amp; Commercial Use</h1>
    <p>Finished, packed pellets manufactured in-house. Enquire for specifications, availability and pricing.</p>
    <div class="contact-placeholder-note" style="margin-top:24px;max-width:420px">
      Product names and photos are simple to update as your range grows.
    </div>
  </div>
</section>

<section class="products-full">
  <div class="container">
    <div class="products-full-grid">

      <div class="product-full-card fade-up">
        <div class="product-full-img" style="position:relative">
          <img src="<?= BASE_URL ?>/assets/images/pellets-wood.jpg"
               alt="Biomass Wood Pellets"
               style="width:100%;aspect-ratio:16/10;object-fit:cover;display:block;"
               loading="lazy">
          <span class="product-tag">RENEWABLE FUEL</span>
        </div>
        <div class="product-full-body">
          <h2>Biomass Wood Pellets</h2>
          <p>Clean-burning pellets manufactured from processed wood material — suited to industrial boilers and commercial heating applications.</p>
          <div class="product-full-footer">
            <a href="<?= BASE_URL ?>/contact.php" class="btn-green">Enquire Now →</a>
            <span class="bulk-label">BULK &amp; RETAIL ENQUIRIES</span>
          </div>
        </div>
      </div>

      <div class="product-full-card fade-up">
        <div class="product-full-img" style="position:relative">
          <img src="<?= BASE_URL ?>/assets/images/pellets-agri.jpg"
               alt="Industrial Biomass Pellets"
               style="width:100%;aspect-ratio:16/10;object-fit:cover;display:block;"
               loading="lazy">
          <span class="product-tag">BULK SUPPLY</span>
        </div>
        <div class="product-full-body">
          <h2>Industrial Biomass Pellets</h2>
          <p>Produced for large-scale industrial fuel requirements, with consistent quality maintained from batch to batch.</p>
          <div class="product-full-footer">
            <a href="<?= BASE_URL ?>/contact.php" class="btn-green">Enquire Now →</a>
            <span class="bulk-label">BULK &amp; RETAIL ENQUIRIES</span>
          </div>
        </div>
      </div>

    </div>

    <div class="need-specific fade-up">
      <strong>Need something specific?</strong> Tell us your requirement — quantity, application and delivery location — and we'll respond with what we can do.
      Reach us at <a href="tel:<?= h(COMPANY_PHONE) ?>"><?= h(COMPANY_PHONE) ?></a> or <a href="mailto:<?= h(COMPANY_EMAIL) ?>"><?= h(COMPANY_EMAIL) ?></a>.
    </div>
  </div>
</section>

<?php require_once __DIR__.'/includes/footer.php'; ?>
