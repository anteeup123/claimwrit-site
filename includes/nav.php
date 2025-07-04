<?php
// Determine current page for active state
$currentPage = basename($_SERVER['PHP_SELF'], '.php');
if ($currentPage == 'index') $currentPage = 'home';
?>
<nav class="nav-bar">
    <ul class="nav-list">
        <li class="nav-item"><a href="/index.php" <?= ($currentPage=='home')?'class="active"':'' ?>>Home</a></li>
        <li class="nav-item"><a href="/mission.php" <?= ($currentPage=='mission')?'class="active"':'' ?>>Our Mission</a></li>
        <li class="nav-item"><a href="/services.php" <?= ($currentPage=='services')?'class="active"':'' ?>>How We Help</a></li>
        <li class="nav-item"><a href="/sample-request.php" <?= ($currentPage=='sample')?'class="active"':'' ?>>Sample Request</a></li>
        <li class="nav-item"><a href="/contact.php" <?= ($currentPage=='contact')?'class="active"':'' ?>>Contact</a></li>
        <li class="nav-item"><a href="/client-upload.php" <?= ($currentPage=='client')?'class="active"':'' ?>>Client Upload</a></li>
        <li class="nav-item"><a href="/blog/" <?= ($currentPage=='blog')?'class="active"':'' ?>>ClaimWrit Blogs</a></li>
    </ul>
</nav>