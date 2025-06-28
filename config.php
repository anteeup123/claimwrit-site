<?php
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
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>