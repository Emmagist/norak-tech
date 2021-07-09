<?php

    require "db.php";

    // if (isset($_GET['getData'])) {
    //     $get = $_GET['getData'];
    // }


    // if ($get == 002) {
    //     echo "Working";
    // }

    if (isset($_POST['submitButton'])) {
        $errors = [];
        $success = '';
        $name = mysqli_real_escape_string($db, $_POST['w3lName']);
        $email = mysqli_real_escape_string($db, $_POST['w3lSender']);
        $subject = mysqli_real_escape_string($db, $_POST['w3lSubect']);
        $message = mysqli_real_escape_string($db, $_POST['w3lMessage']);
        $date = date("Y-m-d");

        if (empty($name)) {
            $errors['name'] = "Full name is required !";
        }

        if (empty($email)) {
            $errors['email'] = "Email is required !";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email-val'] = "A valid email address is required !";
        }

        if (empty($subject)) {
            $errors['subject'] = "Subject is required !";
        }

        if (empty($message)) {
            $errors['message'] = "Message is required !";
        }

        if (empty($errors)) {
            $sql = "INSERT INTO message_us(full_name, email, message, subject, xdate) VALUES('$name', '$email', '$message', '$subject', '$date')";
            mysqli_query($db, $sql);
            $success = "Message sent successfully...";
        }
    }

    if (isset($_POST['subscribe'])) {
        $erros = [];
        $succes = '';
        $email = mysqli_real_escape_string($db, $_POST['email']);

        if (empty($email)) {
            $erros['email'] = "Email is required !";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erros['email-val'] = "A valid email address is required !";
        }

        if (empty($erros)) {
            $sql = "INSERT INTO landing_page(full_name, email, selection) VALUES('', '$email', '')";
            mysqli_query($db, $sql);
            $succes = "Message sent successfully...";
        }
    }

?>