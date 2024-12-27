<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $feedback = htmlspecialchars($_POST['feedback']);

    // Recipient email address
    $to = "girija.g2023@vitstudent.ac.in";
    $subject = "Feedback from " . $name;

    // Email content
    $message = "Name: " . $name . "\n";
    $message .= "Email: " . $email . "\n\n";
    $message .= "Feedback: \n" . $feedback . "\n";

    // Email headers
    $headers = "From: " . $email;

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Feedback sent successfully!');</script>";
    } else {
        echo "<script>alert('There was an issue sending your feedback.');</script>";
    }
}
?>
