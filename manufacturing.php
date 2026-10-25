<?php
define('BOSS_ENTERPRISE',true);
require_once __DIR__.'/includes/config.php';
$page_title='Manufacturing';
$page_desc ='Inside our manufacturing facility — from raw material to finished biomass pellets. 8 key stages, careful control at every step.';
require_once __DIR__.'/includes/header.php';
?>

<section class="page-intro">
  <div class="container">
    <span class="section-label">INSIDE OUR MANUFACTURING FACILITY</span>
    <h1>From Raw Material<br>to Finished Pellets</h1>
    <p>Take a closer look at the equipment and key stages involved in our manufacturing process.</p>
    <div class="contact-placeholder-note" style="margin-top:24px;max-width:420px">
      Sample photographs are shown — keep in photos of your own facility in their place.
    </div>
  </div>
</section>

<section class="mfg-process-full">
  <div class="container">

    <!-- Tab bar -->
    <div class="process-tabs">
      <?php
      $tabs=['Raw Material Preparation','Grinding','Drying','Pellet Pressing','Cooling','Screening','Quality Inspection','Packaging'];
      foreach($tabs as $i=>$t):
      ?>
      <div class="process-tab<?= $i===0?' active':'' ?>">
        <span class="t-num"><?= $i+1 ?></span>
        <span class="t-name"><?= h($t) ?></span>
      </div>
      <?php endforeach ?>
    </div>

    <!-- Stage cards grid (all 8) -->
    <div class="mfg-stages-full">
      <?php
      $stages=[
        ['1','Raw Material Preparation','Wood raw material is received, sorted and prepared for processing.','raw-material.jpg'],
        ['2','Grinding','Prepared material is ground into fine, uniform particles for consistent pressing.','grinding.jpg'],
        ['3','Drying','Ground material is dried to the right moisture level before it reaches the die.','drying.jpg'],
        ['4','Pellet Pressing','Dried material is compressed through the pellet die to form dense, solid pellets.','pressing.jpg'],
        ['5','Cooling','Fresh pellets are cooled so they harden and hold their shape.','cooling.jpg'],
        ['6','Screening','Pellets are screened so only well-formed pellets move forward.','screening.jpg'],
        ['7','Quality Inspection','Finished pellets are checked for quality before packing.','quality-lab.jpg'],
        ['8','Packaging','Packed and staged, ready for storage and dispatch.','packaging.jpg'],
      ];
      foreach($stages as $s):
      ?>
      <div class="mfg-stage-full fade-up">
        <div class="mfg-stage-full-img" style="position:relative">
          <img src="<?= BASE_URL ?>/assets/images/<?= h($s[3]) ?>"
               alt="<?= h($s[1]) ?>"
               style="width:100%;aspect-ratio:4/3;object-fit:cover;display:block;"
               loading="lazy">
          <span class="stage-badge">Stage <?= h($s[0]) ?></span>
        </div>
        <div class="mfg-stage-full-body">
          <h3><?= h($s[1]) ?></h3>
          <p><?= h($s[2]) ?></p>
        </div>
      </div>
      <?php endforeach ?>
    </div>

  </div>
</section>

<!-- Visit band -->
<div class="visit-band">
  <div class="container visit-band-inner">
    <h3>Planning a visit? We're happy to walk customers through the facility.</h3>
    <a href="<?= BASE_URL ?>/contact.php" class="btn-green">Arrange a Visit ↗</a>
  </div>
</div>

<?php require_once __DIR__.'/includes/footer.php'; ?>
