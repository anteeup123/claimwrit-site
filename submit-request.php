<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $sampleType = trim($_POST['sample-type']);

    $to = $email;
    $subject = "ClaimWrit: Sample Request Received";
    $message = "Dear $name,\n\nThank you for requesting a sample of our legal demand letter for the $sampleType category.\n\n";
    $message .= "Our team will verify your credentials and follow up with you shortly.\n\n";
    $message .= "For any questions, reach out to Joanna Hatch at joanna@claimwrit.com or call ‪(954) 408-1937‬.\n\n";
    $message .= "Sincerely,\nClaimWrit Team";
    $headers = "From: joanna@claimwrit.com\r\n";

    mail($to, $subject, $message, $headers);
    header("Location: thank-you.html?sampleType=" . urlencode($sampleType));
    exit;
} else {
    header("Location: request-sample.html");
    exit;
}
?>