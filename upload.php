<?php
$adminEmail = "support@claimwrit.com";
$uploadDir = "uploads/";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $folder = preg_replace('/[^a-zA-Z0-9_\- ]/', '', $_POST['folder']);
    $targetPath = $uploadDir . $folder . "/";
    
    if (!file_exists($targetPath)) {
        mkdir($targetPath, 0777, true);
    }

    $uploadedFiles = [];
    foreach ($_FILES['files']['name'] as $key => $name) {
        $tmp = $_FILES['files']['tmp_name'][$key];
        $destination = $targetPath . basename($name);
        move_uploaded_file($tmp, $destination);
        $uploadedFiles[] = $name;
    }

    // Send confirmation email
    $attorneyEmail = $_POST['email'];
    $subject = "ClaimWrit Upload Confirmation";
    $message = "Your files have been received:\n\n" . implode("\n", $uploadedFiles);
    mail($attorneyEmail, $subject, $message, "From: no-reply@claimwrit.com");
    
    header("Location: /client-upload.php?success=1");
    exit;
}
?>