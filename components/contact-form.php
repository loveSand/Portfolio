<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'r.jonas.p22@gmail.com';
    $subject = "New Contact Form Message from " . $name;
    $body = "Name: $name \n Email: $email \n Message: \n $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo '<p class="success">Thank you for reaching out, $name! Your message has been sent.</p>';
    } else {
        echo '<p class="error">Sorry, there was an error sending your message. Please try again later.</p>';
    }
}
?>