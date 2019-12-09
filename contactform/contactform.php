<?php

$error = "";
$sendmessage = "";

if ($_POST) {
    if (!$_POST["name"]) {
        $error = "A name is required. <br>";
    }

    if (!$_POST["email"]) {
        $error = "A valid email address is required. <br>";
    }

    if (!$_POST["subject"]) {
        $error = "Please enter a subject. <br>";
    }

    if (!$_POST["message"]) {
        $error = "Oops, you forgot to type in your message. <br>";
    }

    if ($_POST["email"] && !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $error = "The email address is invalid. <br>";
    }

    if ($error != "") {
        $error = '<div id="errormessage">' . $error . '</div>';
    } else {
        $emailTo = "paulshimbal@gmail.com";
        $subject = $_POST['subject'];
        $content = $_POST['message'];
        $headers = "From: " . $_POST['email'];

        if (mail($emailTo, $subject, $content, $headers)) {
            $sendmessage = '<div id="sendmessage"> Your message was sent. We\'ll get back to you shortly.  </div>';
        } else {
            $error = '<div id="errormessage"> Sorry. Your message couldn\'t be sent.  </div>';
        }
    }
}

?>
