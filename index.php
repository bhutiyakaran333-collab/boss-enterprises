<?php
define('BOSS_ENTERPRISE',true);
require_once __DIR__.'/includes/config.php';
$page_title='Home';
$page_desc ='BOSS Enterprise manufactures quality biomass pellets — clean-burning, renewable fuel for industrial and commercial use.';
require_once __DIR__.'/includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container hero-inner">
    <div class="hero-text fade-up">
      <p class="hero-label">BIOMASS PELLET MANUFACTURER</p>
      <h1>Quality Biomass<br>Pellets.<br><em>Reliable Industrial<br>Fuel Solutions.</em></h1>
      <p>Discover our biomass pellet products and manufacturing process, built around consistent quality and dependable service.</p>
      <div class="hero-actions">
        <a href="<?= BASE_URL ?>/products.php"       class="btn-green">Explore Our Products →</a>
        <a href="<?= BASE_URL ?>/manufacturing.php"  class="btn-outline">See Our Manufacturing Process</a>
      </div>
      <p class="hero-caption">BOSS ENTERPRISE — INDUSTRIAL &amp; COMMERCIAL FUEL</p>
    </div>
    <div class="hero-image fade-up">
      <img src="<?= BASE_URL ?>/assets/images/pellets-wood.jpg"
           alt="Biomass wood pellets – quality fuel for industrial use"
           class="hero-image-main"
           width="600" height="750" loading="eager">
    </div>
  </div>
</section>

<!-- PROCESS BAR -->
<div class="process-bar">
  <div class="container">
    <div class="process-bar-inner">
      <?php
      $steps=['Raw Material Preparation','Grinding','Drying','Pellet Pressing','Cooling','Screening','Quality Inspection','Packaging'];
      foreach($steps as $i=>$s):
      ?>
      <div class="process-step-tab<?= $i===0?' active':'' ?>">
        <span class="step-num"><?= $i+1 ?></span>
        <span class="step-name"><?= h($s) ?></span>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</div>

<!-- TICKER -->
<div class="ticker" aria-hidden="true">
  <div class="ticker-inner">
    <?php
    $tags=['RENEWABLE INDUSTRIAL FUEL','CONSISTENT QUALITY','DEPENDABLE SUPPLY','WOOD-DERIVED ENERGY','MANUFACTURED IN-HOUSE','BIOMASS PELLETS'];
    // duplicate for seamless loop
    for($r=0;$r<2;$r++) foreach($tags as $tag):
    ?><span class="ticker-item"><span class="ticker-dot"></span><?= h($tag) ?></span><?php endforeach ?>
  </div>
</div>

<!-- ABOUT (homepage) -->
<section class="section about-home">
  <div class="container about-home-grid">
    <div class="about-home-image fade-up">
      <div style="position:relative;border-radius:var(--radius-md);overflow:hidden">
        <img src="<?= BASE_URL ?>/assets/images/packaging.jpg"
             alt="BOSS Enterprise manufacturing facility"
             style="width:100%;aspect-ratio:4/3;object-fit:cover;display:block;"
             loading="lazy">
        <div style="position:absolute;bottom:0;left:0;right:0;padding:14px 16px;background:linear-gradient(transparent,rgba(0,0,0,.6))">
          <div class="img-caption">OUR MANUFACTURING FACILITY</div>
        </div>
      </div>
    </div>
    <div class="about-home-text fade-up">
      <span class="section-label">ABOUT US</span>
      <h2>Focused on Quality. Built for Industry.</h2>
      <p><strong>BOSS ENTERPRISE</strong> manufactures biomass pellets — clean-burning, renewable fuel produced from processed wood material for industrial and commercial use.</p>
      <p>Our facility is built around one priority: delivering consistent, dependable pellets to every customer, on every batch.</p>
      <a href="<?= BASE_URL ?>/about.php" class="text-link">More About Us →</a>
    </div>
  </div>
</section>

<!-- MANUFACTURING PREVIEW -->
<section class="mfg-preview">
  <div class="container">
    <div class="mfg-preview-header">
      <div>
        <span class="section-label" style="color:var(--gold)">INSIDE OUR MANUFACTURING FACILITY</span>
        <h2>From Raw Material to<br>Finished Pellets</h2>
      </div>
      <a href="<?= BASE_URL ?>/manufacturing.php" class="btn-outline-white">Explore the Full Process ↗</a>
    </div>
    <div class="mfg-stages">
      <?php
      $stages=[
        ['1','Raw Material Preparation','Wood raw material is received, sorted and prepared for processing.','raw-material.jpg'],
        ['2','Grinding','Prepared material is ground into fine, uniform particles for consistent pressing.','grinding.jpg'],
        ['3','Drying','Ground material is dried to the right moisture level before it reaches the die.','drying.jpg'],
        ['4','Pellet Pressing','Dried material is compressed through the pellet die to form dense, solid pellets.','pressing.jpg'],
      ];
      foreach($stages as $s):
      ?>
      <div class="mfg-stage-card fade-up">
        <div class="mfg-img-wrap" style="position:relative">
          <img src="<?= BASE_URL ?>/assets/images/<?= h($s[3]) ?>"
               alt="<?= h($s[1]) ?>"
               style="width:100%;aspect-ratio:3/2;object-fit:cover;display:block;"
               loading="lazy">
          <span class="stage-badge">Stage <?= h($s[0]) ?></span>
        </div>
        <div class="mfg-stage-body">
          <h4><?= h($s[1]) ?></h4>
          <p><?= h($s[2]) ?></p>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</section>

<!-- PRODUCTS PREVIEW -->
<section class="section products-preview">
  <div class="container">
    <div class="products-preview-header">
      <div>
        <span class="section-label">OUR PRODUCTS</span>
        <h2>Biomass Pellets, Made to Spec</h2>
      </div>
      <a href="<?= BASE_URL ?>/products.php" class="view-all-link">View All Products →</a>
    </div>
    <div class="products-grid">
      <div class="product-card fade-up">
        <div class="product-img-wrap">
          <img src="<?= BASE_URL ?>/assets/images/pellets-wood.jpg"
               alt="Biomass Wood Pellets" class="product-img" loading="lazy">
          <span class="product-tag">RENEWABLE FUEL</span>
        </div>
        <div class="product-body">
          <h3>Biomass Wood Pellets</h3>
          <p>Clean-burning pellets manufactured from processed wood material — suited to industrial boilers and commercial heating applications.</p>
          <div class="product-body-footer">
            <a href="<?= BASE_URL ?>/contact.php" class="btn-green">Enquire Now →</a>
            <span class="bulk-label">BULK &amp; RETAIL ENQUIRIES</span>
          </div>
        </div>
      </div>
      <div class="product-card fade-up">
        <div class="product-img-wrap">
          <img src="<?= BASE_URL ?>/assets/images/pellets-agri.jpg"
               alt="Industrial Biomass Pellets" class="product-img" loading="lazy">
          <span class="product-tag">BULK SUPPLY</span>
        </div>
        <div class="product-body">
          <h3>Industrial Biomass Pellets</h3>
          <p>Produced for large-scale industrial fuel requirements, with consistent quality maintained from batch to batch.</p>
          <div class="product-body-footer">
            <a href="<?= BASE_URL ?>/contact.php" class="btn-green">Enquire Now →</a>
            <span class="bulk-label">BULK &amp; RETAIL ENQUIRIES</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- QUALITY PREVIEW -->
<section class="section quality-preview" style="padding-top:0">
  <div class="container quality-inner">
    <div class="quality-text fade-up">
      <span class="section-label">QUALITY</span>
      <h2>Quality Checked at Every Important Stage</h2>
      <p>From incoming raw material to the finished pellet, our process includes checks at the stages that matter most.</p>
      <div class="quality-steps">
        <?php
        $qs=[
          ['1','Incoming Material Check','Raw wood material is reviewed for cleanliness and suitability before it enters production.'],
          ['2','In-Process Monitoring','Moisture and texture are watched closely during grinding, drying and pressing.'],
          ['3','Finished Pellet Checks','Pellets are inspected for form, strength and consistency as they come off the line.'],
        ];
        foreach($qs as $q):
        ?>
        <div class="quality-step">
          <span class="quality-step-num"><?= h($q[0]) ?></span>
          <div class="quality-step-text">
            <h4><?= h($q[1]) ?></h4>
          </div>
        </div>
        <?php endforeach ?>
      </div>
      <a href="<?= BASE_URL ?>/quality.php" class="text-link" style="display:inline-flex;align-items:center;gap:6px;font-size:14px;font-weight:600;color:var(--text-link);margin-top:20px">Our Quality Process →</a>
    </div>
    <div class="quality-img-wrap fade-up">
      <img src="<?= BASE_URL ?>/assets/images/quality-lab.jpg"
           alt="Quality testing of biomass pellets in laboratory"
           style="width:100%;aspect-ratio:4/5;object-fit:cover;border-radius:var(--radius-md)"
           loading="lazy">
    </div>
  </div>
</section>

<?php require_once __DIR__.'/includes/footer.php'; ?>
