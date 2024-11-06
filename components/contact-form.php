<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $errors = array();

    if (empty($name) || strlen($name) < 2) {
        $errors['name'] = "Please enter a valid name.";
    }

    if (empty($email) ||!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Please enter a valid email address.";
    }

    if (empty($message) || strlen($message) < 10) {
        $errors['message'] = "Please enter a message with atleast 10 characters";
    }

    if (empty($errors)) {
        // Send the email
        $to = 'Dummy.Dummy0123@gmail.com';
        $subject = 'Contact Form Submission';
        $message = "Name: $name \n Email: $email \n Message: $message";
    
        $headers = "From: $email"; // sender
    
        if (mail($to, $subject, $message, $headers)) {
            header('Location:../pages/contact.php?success=1');
            exit; // Redirect to success page
        } else {
            // Handle email sending error
            $emailError = error_get_last();
            echo "Sorry, we couldn't send your message. Please try again later. (Error: ". $emailError['message'].")";
            exit; // Exit after displaying error message
        }
    } else {
        // stores the error in the session
        $_SESSION['errors'] = $errors;
        header('Location:../pages/contact.php');
        exit;
    }
}
?>