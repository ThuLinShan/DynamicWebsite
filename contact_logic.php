<?php
require 'config/database.php';
if (!isset($_SESSION['user-id'])) {
    header('location:' . ROOT_URL . 'signin.php');
    die();
}

if (isset($_POST['submit'])) {
    $subject         = filter_var($_POST['subject'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $details    = filter_var($_POST['details'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    // Validate input values;
    if (!$subject) {
        $_SESSION['contact'] = "Please enter a subject";
    } elseif (!$details) {
        $_SESSION['contact'] = "Please enter  details";
    }

    // Return if validation fails
    if (isset($_SESSION['contact'])) {
        header('location: ' . ROOT_URL . 'contact.php');
        die();
    } else {
        // Insert operation into posts table
        $insert_post_query = "INSERT INTO contact (
                                subject,
                                description
                                ) VALUES (
                                '$subject',
                                '$details'
                                )";
        $insert_post_result = mysqli_query($connection, $insert_post_query);

        if (!mysqli_errno($connection)) {
            // Redirect to manage posts page
            $_SESSION['contact-success'] = "Contact data successfully sent.";
            header('location: ' . ROOT_URL . 'contact.php');
            die();
        } else {
            $_SESSION['contact'] = "Something went wrong";
            header('location: ' . ROOT_URL . 'contact.php');
            die();
        }
    }
} else {
    header('location: ' . ROOT_URL . 'myaccount.php');
    die();
}
