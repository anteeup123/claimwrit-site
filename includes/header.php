<?php
require_once __DIR__ . '/config.php';

// Defaults if not set by the page
if (!isset($pageTitle)) $pageTitle = 'Legal Document Services';
if (!isset($currentPage)) $currentPage = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($pageTitle) ?> | <?= $site_name ?></title>
    
    <!-- Direct Relative Path to CSS -->
    <link rel="stylesheet" href="/css/styles.css" />
    
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Favicon (Optional) -->
    <link rel="icon" href="/images/favicon.png" type="image/png" />
</head>
<body>
    <header class="site-header">
        <div class="header-container">
            <a href="/index.php" class="logo-link">
                <img src="/images/ClaimWrit-Logo.jpg" 
                     alt="ClaimWrit Logo" 
                     class="logo-image"
                     width="220"
                     height="70" />
                <span class="subline">Clarity · Structure · Resolution</span>
            </a>
            <button class="mobile-menu-toggle" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <?php require __DIR__ . '/nav.php'; ?>
    </header>
