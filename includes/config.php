<?php
defined('BOSS_ENTERPRISE') or define('BOSS_ENTERPRISE', true);

// Site
define('SITE_NAME',    'BOSS Enterprise');
define('SITE_TAGLINE', 'Biomass Pellet Manufacturer');
define('SITE_DESC',    'BOSS Enterprise manufactures quality biomass pellets for industrial and commercial fuel needs.');

// Contact — replace with your real details
define('COMPANY_PHONE',    '+91 95108 66624');
define('COMPANY_EMAIL',    'Bossenterprise111@gmail.com');
define('COMPANY_ADDRESS',  'Survey No. 7, Paiki 1, Near Amangaleshwar Bio Fuel, Zanzmer Road, Near EVA Institute of Ayurved Hospital, Supedi, Rajkot, Gujarat – 360440, India.');
define('COMPANY_WHATSAPP', '919510866624'); // digits only for WhatsApp link

define('SMTP_FROM', 'Bossenterprise111@gmail.com');

// Social
define('SOCIAL_LINKEDIN', '#');
define('SOCIAL_TWITTER',  '#');

// Base URL
$_proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
define('BASE_URL', $_proto . '://' . $_SERVER['HTTP_HOST'] . '/OM');

// Errors: log, don't display
error_reporting(E_ALL);
ini_set('display_errors', '0');
ini_set('log_errors', '1');

// Session
if (session_status() === PHP_SESSION_NONE) {
    ini_set('session.cookie_httponly', '1');
    ini_set('session.use_strict_mode', '1');
    session_start();
}

// CSRF helpers
function csrf_token(): string {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}
function csrf_verify(string $t): bool {
    return !empty($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $t);
}

// Safe output
function h(string $s): string {
    return htmlspecialchars($s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
