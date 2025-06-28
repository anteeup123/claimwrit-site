<?php
require_once __DIR__ . '/includes/config.php';

// Set default page title if not defined
if (!isset($pageTitle)) {
    $pageTitle = 'Legal Document Services';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?> | <?= $site_name ?></title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?= $base_url ?>/css/styles.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Favicon -->
    <link rel="icon" href="<?= $base_url ?>/images/favicon.png" type="image/png">
</head>
<body>
    <header class="site-header">
        <div class="header-container">
            <a href="<?= $base_url ?>/index.php" class="logo-link">
                <img src="<?= $base_url ?>/images/ClaimWrit-Logo.jpg" 
                     alt="ClaimWrit Logo" 
                     class="logo-image"
                     width="220"
                     height="70">
                <span class="subline">Clarity · Structure · Resolution</span>
            </a>
            <button class="mobile-menu-toggle" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <?php include __DIR__ . '/nav.php'; ?>
    </header>