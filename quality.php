<?php
define('BOSS_ENTERPRISE',true);
require_once __DIR__.'/includes/config.php';
$page_title='Quality';
$page_desc ='Quality checked at every important stage — from incoming raw material to finished biomass pellets ready for dispatch.';
require_once __DIR__.'/includes/header.php';
?>

<section class="page-intro">
  <div class="container">
    <span class="section-label">QUALITY</span>
    <h1>Quality Checked at<br>Every Important Stage</h1>
    <p>Our process includes checks at the stages that matter most — from incoming raw material to the finished pellet.</p>
  </div>
</section>

<section class="quality-full">
  <div class="container quality-detail-grid">

    <div class="fade-up">
      <p style="font-size:18px;font-weight:600;color:var(--text);margin-bottom:12px;line-height:1.5">We focus on the checks that keep pellets consistent — nothing more, nothing less.</p>
      <p style="font-size:15px;color:var(--text-muted);line-height:1.8;margin-bottom:32px">We don't make claims we can't support. Ask us directly about how we check quality and we'll gladly walk you through it.</p>

      <div class="quality-checks">
        <?php
        $checks=[
          ['1','Incoming Material Check','Raw wood material is reviewed for cleanliness and suitability before it enters production.'],
          ['2','In-Process Monitoring','Moisture and texture are watched closely during grinding, drying and pressing.'],
          ['3','Finished Pellet Checks','Pellets are inspected for form, strength and consistency as they come off the line.'],
          ['4','Pre-Dispatch Review','A final look-over before any load leaves the plant for the customer.'],
        ];
        foreach($checks as $c):
        ?>
        <div class="quality-check">
          <div class="quality-check-num"><?= h($c[0]) ?></div>
          <h3><?= h($c[1]) ?></h3>
          <p><?= h($c[2]) ?></p>
        </div>
        <?php endforeach ?>
      </div>
    </div>

    <div class="fade-up" style="display:flex;flex-direction:column;gap:20px">
      <div style="position:relative;border-radius:var(--radius-md);overflow:hidden">
        <img src="<?= BASE_URL ?>/assets/images/quality-lab.jpg"
             alt="Quality testing of biomass pellets in laboratory"
             style="width:100%;aspect-ratio:4/3;object-fit:cover;display:block;"
             loading="lazy">
        <div style="position:absolute;bottom:0;left:0;right:0;padding:12px 16px;background:linear-gradient(transparent,rgba(0,0,0,.6))">
          <div class="img-caption">QUALITY TESTING IN LABORATORY</div>
        </div>
      </div>
      <div style="position:relative;border-radius:var(--radius-md);overflow:hidden">
        <img src="<?= BASE_URL ?>/assets/images/screening.jpg"
             alt="Pellet screening and quality inspection process"
             style="width:100%;aspect-ratio:16/7;object-fit:cover;display:block;"
             loading="lazy">
        <div style="position:absolute;bottom:0;left:0;right:0;padding:12px 16px;background:linear-gradient(transparent,rgba(0,0,0,.6))">
          <div class="img-caption">SCREENING BEFORE DISPATCH</div>
        </div>
      </div>
    </div>

  </div>
</section>

<?php require_once __DIR__.'/includes/footer.php'; ?>
