<?php
// test_config.php - COMPLETE VERSION
if (file_exists(__DIR__ . '/includes/config.php')) {
    require_once(__DIR__ . '/includes/config.php');
    echo "Config loaded successfully!" . PHP_EOL;
    echo "DB_HOST: " . DB_HOST . PHP_EOL;
    
    // =============================================
    // NEW DATABASE TEST SECTION (paste everything below)
    // =============================================
    echo PHP_EOL . "Testing database connection..." . PHP_EOL;
    
    try {
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        
        if ($mysqli->connect_error) {
            throw new Exception("Connection failed: " . $mysqli->connect_error);
        }
        
        echo "✓ Database connection successful!" . PHP_EOL;
        echo "   MySQL version: " . $mysqli->server_version . PHP_EOL;
        
        // Test creating a table (temporary)
        $testTable = "CREATE TABLE IF NOT EXISTS test_config_check (
            id INT AUTO_INCREMENT PRIMARY KEY,
            test_value VARCHAR(50),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        