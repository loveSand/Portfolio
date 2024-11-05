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
        header('Location:../pages/contact.php?success=1');
        exit;
    } else {
        // stores the error in the session
        $_SESSION['errors'] = $errors;
        header('Location:../pages/contact.php');
        exit;
    }
}
?>