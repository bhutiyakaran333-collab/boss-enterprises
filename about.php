<?php
define('BOSS_ENTERPRISE',true);
require_once __DIR__.'/includes/config.php';
$page_title='About Us';
$page_desc ='BOSS Enterprise — focused on quality, built for industry. We manufacture biomass pellets for industrial and commercial use.';
require_once __DIR__.'/includes/header.php';
?>

<section class="page-intro">
  <div class="container">
    <span class="section-label">ABOUT US</span>
    <h1>Focused on Quality.<br>Built for Industry.</h1>
    <p>BOSS ENTERPRISE manufactures biomass pellets — clean-burning, renewable fuel produced from processed wood material for industrial and commercial use.</p>
  </div>
</section>

<section class="about-story">
  <div class="container about-story-grid">
    <div class="about-home-image fade-up">
      <div style="position:relative;border-radius:var(--radius-md);overflow:hidden">
        <img src="<?= BASE_URL ?>/assets/images/packaging.jpg"
             alt="BOSS Enterprise manufacturing facility"
             style="width:100%;aspect-ratio:4/3;object-fit:cover;display:block;"
             loading="lazy">
        <div style="position:absolute;bottom:0;left:0;right:0;padding:14px 16px;background:linear-gradient(transparent,rgba(0,0,0,.6))">
          <div class="img-caption">INSIDE THE PRODUCTION LINE</div>
        </div>
      </div>
    </div>
    <div class="about-story-text fade-up">
      <span class="section-label">WHO WE ARE</span>
      <p>We keep our process straightforward: carefully prepared raw material, controlled production, and quality checks before dispatch.</p>
      <p>Our facility is organised around the pellet line itself — from grinding and drying through pressing, cooling and packing — so that every stage gets the attention it needs. That focus is how we keep our pellets consistent, batch after batch.</p>
      <a href="<?= BASE_URL ?>/manufacturing.php" class="text-link" style="display:inline-flex;align-items:center;gap:6px;font-size:14px;font-weight:600;color:var(--text-link);margin-top:8px">See How We Manufacture →</a>
    </div>
  </div>
</section>

<section class="how-we-work section-sm">
  <div class="container">
    <h2>How We Work</h2>
    <div class="how-work-grid" style="margin-top:32px">
      <div class="how-work-card fade-up">
        <p class="how-num">1</p>
        <h3>Consistent Quality</h3>
        <p>Careful preparation and controlled production keep every batch dependable.</p>
      </div>
      <div class="how-work-card fade-up">
        <p class="how-num">2</p>
        <h3>Dependable Service</h3>
        <p>Clear communication and straightforward supply, from enquiry to dispatch.</p>
      </div>
      <div class="how-work-card fade-up">
        <p class="how-num">3</p>
        <h3>Straightforward Process</h3>
        <p>A clean, well-organised line from raw material to finished, packed pellets.</p>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__.'/includes/footer.php'; ?>
