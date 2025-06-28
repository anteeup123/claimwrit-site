<nav class="nav-bar">
    <ul>
        <li><a href="<?= $base_url ?>/index.php" <?= ($currentPage == 'home') ? 'class="active"' : '' ?>>Home</a></li>
        <li><a href="<?= $base_url ?>/mission.php" <?= ($currentPage == 'mission') ? 'class="active"' : '' ?>>Our Mission</a></li>
        <li><a href="<?= $base_url ?>/services.php" <?= ($currentPage == 'services') ? 'class="active"' : '' ?>>How We Help</a></li>
        <li><a href="<?= $base_url ?>/sample-request.php" <?= ($currentPage == 'sample') ? 'class="active"' : '' ?>>Request Sample</a></li>
        <li><a href="<?= $base_url ?>/contact.php" <?= ($currentPage == 'contact') ? 'class="active"' : '' ?>>Contact</a></li>
        <li><a href="<?= $base_url ?>/client-upload.php" <?= ($currentPage == 'client') ? 'class="active"' : '' ?>>Client Portal</a></li>
    </ul>
</nav>