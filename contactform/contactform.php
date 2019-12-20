<?php

$errors = array();

$name = '';
$email = '';
$subject = '';
$message = '';


if ($_POST) {
    if (empty($_POST['name'])) {
        array_push($errors, 'Your name is required!');
    }

    if (empty($_POST['email'])) {
        array_push($errors, 'Email is required!');
    }

    if (empty($_POST['subject'])) {
        array_push($errors, 'Please input a subject!');
    }

    if (empty($_POST['message'])) {
        array_push($errors, 'Oops, you forgot to type in your message.');
    }

    if ($_POST["email"] && !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        array_push($errors, 'Your email address is invalid.');
    }
}


if (isset($_POST['send-message'])) {
    if (count($errors) != 0) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $errors;

    } else {
        $emailTo = "uniquepumsa@gmail.com";
        $subject = $_POST['subject'];
        $content = $_POST['message'];
        $headers = "From: " . $_POST['email'];

        if (mail($emailTo, $subject, $content, $headers)) {
            $_SESSION['message'] = 'Your message was sent. We\'ll get back to you shortly';
            $_SESSION['type'] = 'alert-success';
            header('location: ' . BASE_URL . '/contact.php');
            exit();
        } else {
            array_push($errors, 'Sorry, your message couldn\'t be sent.');
        }
    }
}
