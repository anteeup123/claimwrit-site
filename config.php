<?php
<<<<<<< HEAD
// includes/config.php

// 1. DATABASE SETTINGS (Laragon default)
define('DB_HOST', 'localhost');  // Leave as 'localhost'
define('DB_USER', 'root');       // Laragon default username
define('DB_PASS', '');           // Empty password for local development
define('DB_NAME', 'claimwrit');  // Your database name

// 2. ERROR REPORTING (Development only)
error_reporting(E_ALL);          // Show all errors
ini_set('display_errors', 1);    // Display errors on screen

// 3. SESSION START
=======
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
>>>>>>> 47c43d32a7a0f70b2ef528280815ecd948dd4501
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>