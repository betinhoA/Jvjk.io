	<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // You can perform validation here
    // For example, checking if fields are not empty and email is valid

    $to = "betinhoalbertodossantos625@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $messageBody = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Send the email
    mail($to, $subject, $messageBody);

    // Optionally, you can redirect the user to a thank you page
    header("Location: thank_you.html");
    exit();
}
?>

    