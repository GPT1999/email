<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];

    // Send email to you
    $to = "your-email@example.com"; // Replace with your email
    $subject = "New Form Submission";
    $message = "Name: $name\nLast Name: $lname\nEmail: $email\nMobile: $mobile";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    // Send email to the user (You may need to configure your server to send emails)
    $userSubject = "Thank You for Your Submission";
    $userMessage = "Dear $name,\n\nThank you for submitting the form. We will get back to you soon.";
    $userHeaders = "From: Your Name <your@example.com>"; // Replace with your email

    mail($email, $userSubject, $userMessage, $userHeaders);

    // Return a success message
    echo "success";
}
?>
