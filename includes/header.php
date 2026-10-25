<?php
defined('BOSS_ENTERPRISE') or define('BOSS_ENTERPRISE', true);
require_once __DIR__ . '/config.php';
$cur = basename($_SERVER['PHP_SELF'], '.php');
function isActive(string $p): string { global $cur; return $cur === $p ? ' active' : ''; }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?= h($page_desc ?? SITE_DESC) ?>">
<title><?= h(isset($page_title) ? $page_title . ' | ' . SITE_NAME : SITE_NAME . ' – ' . SITE_TAGLINE) ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">
<link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/responsive.css">
<link rel="icon" type="image/jpeg" href="<?= BASE_URL ?>/assets/images/icon.jpeg">
</head>
<body>

<!-- ===== SPLASH SCREEN – "B" shield logo only ===== -->
<div id="splash-screen" role="status" aria-label="Loading BOSS Enterprise">
  <!-- SVG: "B" shield emblem only (no text) -->
  <svg class="splash-logo" viewBox="0 0 200 220" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <!-- Outer shield body -->
    <path d="M100 8 L188 42 L188 120 C188 168 100 212 100 212 C100 212 12 168 12 120 L12 42 Z"
          fill="#1a3d2b" stroke="#c9a84c" stroke-width="4"/>

    <!-- Inner shield highlight (lighter green) -->
    <path d="M100 22 L175 51 L175 118 C175 160 100 198 100 198 C100 198 25 160 25 118 L25 51 Z"
          fill="#2a5a3b"/>

    <!-- Shield top bevel (gold accent) -->
    <path d="M100 14 L182 46 L182 48 L100 20 L18 48 L18 46 Z"
          fill="#c9a84c" opacity="0.7"/>

    <!-- Laurel branch left -->
    <g stroke="#4a8a5a" stroke-width="1.5" fill="none" opacity="0.85">
      <path d="M34 90 Q28 80 20 76"/>
      <ellipse cx="24" cy="77" rx="7" ry="4" transform="rotate(-30 24 77)" fill="#3a7a4a" stroke="none"/>
      <path d="M32 104 Q24 97 16 96"/>
      <ellipse cx="20" cy="96" rx="7" ry="4" transform="rotate(-20 20 96)" fill="#3a7a4a" stroke="none"/>
      <path d="M34 118 Q26 114 20 116"/>
      <ellipse cx="22" cy="116" rx="6" ry="3.5" transform="rotate(-10 22 116)" fill="#3a7a4a" stroke="none"/>
      <path d="M38 130 Q32 128 28 132"/>
      <ellipse cx="29" cy="132" rx="6" ry="3.5" transform="rotate(5 29 132)" fill="#3a7a4a" stroke="none"/>
    </g>
    <!-- Laurel branch right -->
    <g stroke="#4a8a5a" stroke-width="1.5" fill="none" opacity="0.85">
      <path d="M166 90 Q172 80 180 76"/>
      <ellipse cx="176" cy="77" rx="7" ry="4" transform="rotate(30 176 77)" fill="#3a7a4a" stroke="none"/>
      <path d="M168 104 Q176 97 184 96"/>
      <ellipse cx="180" cy="96" rx="7" ry="4" transform="rotate(20 180 96)" fill="#3a7a4a" stroke="none"/>
      <path d="M166 118 Q174 114 180 116"/>
      <ellipse cx="178" cy="116" rx="6" ry="3.5" transform="rotate(10 178 116)" fill="#3a7a4a" stroke="none"/>
      <path d="M162 130 Q168 128 172 132"/>
      <ellipse cx="171" cy="132" rx="6" ry="3.5" transform="rotate(-5 171 132)" fill="#3a7a4a" stroke="none"/>
    </g>

    <!-- Gear at bottom -->
    <g transform="translate(100,168)" fill="#c9a84c" opacity="0.7">
      <circle cx="0" cy="0" r="10"/>
      <circle cx="0" cy="0" r="6" fill="#2a5a3b"/>
      <!-- Gear teeth -->
      <rect x="-2.5" y="-14" width="5" height="5" rx="1"/>
      <rect x="-2.5" y="9"  width="5" height="5" rx="1"/>
      <rect x="9"   y="-2.5" width="5" height="5" rx="1"/>
      <rect x="-14" y="-2.5" width="5" height="5" rx="1"/>
      <rect x="5.5"  y="-12" width="5" height="5" rx="1" transform="rotate(45 8 -9.5)"/>
      <rect x="-10.5" y="-12" width="5" height="5" rx="1" transform="rotate(-45 -8 -9.5)"/>
      <rect x="5.5"  y="8"  width="5" height="5" rx="1" transform="rotate(-45 8 10.5)"/>
      <rect x="-10.5" y="8"  width="5" height="5" rx="1" transform="rotate(45 -8 10.5)"/>
    </g>

    <!-- Lightning bolts -->
    <g fill="#c9a84c" opacity="0.75">
      <polygon points="72,72 68,92 74,90 70,110 78,86 72,88"/>
      <polygon points="128,72 124,92 130,90 126,110 134,86 128,88"/>
    </g>

    <!-- Letter B – pellet-textured look using rounded rect + cutout -->
    <g>
      <!-- B stem -->
      <rect x="74" y="56" width="14" height="72" rx="4" fill="#c9a84c"/>
      <!-- B top bump -->
      <path d="M88 56 Q116 56 116 74 Q116 92 88 92 L88 56 Z" fill="#c9a84c"/>
      <path d="M90 62 Q110 62 110 74 Q110 86 90 86 L90 62 Z" fill="#2a5a3b"/>
      <!-- B bottom bump -->
      <path d="M88 92 Q120 92 120 110 Q120 128 88 128 L88 92 Z" fill="#c9a84c"/>
      <path d="M90 98 Q114 98 114 110 Q114 122 90 122 L90 98 Z" fill="#2a5a3b"/>
    </g>

    <!-- Pellet dots overlaid on B for texture -->
    <g fill="#a8882e" opacity="0.45">
      <ellipse cx="97" cy="70" rx="3" ry="2" transform="rotate(-20 97 70)"/>
      <ellipse cx="104" cy="75" rx="3" ry="2" transform="rotate(10 104 75)"/>
      <ellipse cx="97" cy="108" rx="3" ry="2" transform="rotate(-15 97 108)"/>
      <ellipse cx="105" cy="113" rx="3" ry="2" transform="rotate(20 105 113)"/>
      <ellipse cx="100" cy="118" rx="3" ry="2" transform="rotate(5 100 118)"/>
    </g>
  </svg>
</div>
<!-- ===== END SPLASH ===== -->

<header class="site-header" id="site-header">
  <div class="header-inner container">

    <a href="<?= BASE_URL ?>/" class="logo" aria-label="<?= h(SITE_NAME) ?> Home">
      <img src="<?= BASE_URL ?>/assets/images/logo.png" alt="BOSS Enterprises Logo" class="logo-img">
    </a>

    <nav class="main-nav" aria-label="Main navigation">
      <ul>
        <li><a href="<?= BASE_URL ?>/"                class="nav-link<?= isActive('index') ?>">Home</a></li>
        <li><a href="<?= BASE_URL ?>/about.php"       class="nav-link<?= isActive('about') ?>">About Us</a></li>
        <li><a href="<?= BASE_URL ?>/manufacturing.php" class="nav-link<?= isActive('manufacturing') ?>">Manufacturing</a></li>
        <li><a href="<?= BASE_URL ?>/products.php"    class="nav-link<?= isActive('products') ?>">Products</a></li>
        <li><a href="<?= BASE_URL ?>/quality.php"     class="nav-link<?= isActive('quality') ?>">Quality</a></li>
        <li><a href="<?= BASE_URL ?>/contact.php"     class="nav-link<?= isActive('contact') ?>">Contact</a></li>
      </ul>
    </nav>

    <a href="<?= BASE_URL ?>/contact.php" class="btn-cta">Get In Touch <span>↗</span></a>

    <button class="hamburger" id="hamburger" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-nav">
      <span></span><span></span><span></span>
    </button>
  </div>

  <nav class="mobile-nav" id="mobile-nav" aria-hidden="true">
    <ul>
      <li><a href="<?= BASE_URL ?>/">Home</a></li>
      <li><a href="<?= BASE_URL ?>/about.php">About Us</a></li>
      <li><a href="<?= BASE_URL ?>/manufacturing.php">Manufacturing</a></li>
      <li><a href="<?= BASE_URL ?>/products.php">Products</a></li>
      <li><a href="<?= BASE_URL ?>/quality.php">Quality</a></li>
      <li><a href="<?= BASE_URL ?>/contact.php">Contact</a></li>
      <li><a href="<?= BASE_URL ?>/contact.php" class="mobile-cta-link">Get In Touch ↗</a></li>
    </ul>
  </nav>
</header>
