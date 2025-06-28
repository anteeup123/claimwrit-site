<?php
// Database configuration (if needed)
define('DB_HOST', 'localhost');
define('DB_USER', 'username');
define('DB_PASS', 'password');
define('DB_NAME', 'claimwrit_db');

// Base URL
$base_url = 'http://claimwrit.com';

// Site settings
$site_name = 'ClaimWrit';
$company_name = 'ClaimWrit dba Envisage Companies LLC';
$company_location = 'Fort Lauderdale, FL';

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>