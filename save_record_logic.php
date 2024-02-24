<?php
require 'config/database.php';
if (!isset($_SESSION['user-id'])) {
    header('location:' . ROOT_URL . 'signin.php');
    die();
}

if (isset($_GET['id'])) {
    $content_id         = filter_var($_GET['id'], FILTER_VALIDATE_INT);
    $user_id    = filter_var($_SESSION['user-id'], FILTER_VALIDATE_INT);

    // Insert operation into posts table
    $insert_post_query = "INSERT INTO records (
                                user_id,
                                content_id
                                ) VALUES (
                                '$user_id',
                                '$content_id'
                                )";
    $insert_post_result = mysqli_query($connection, $insert_post_query);

    if (!mysqli_errno($connection)) {
        header('location: ' . ROOT_URL . 'details.php?id=' . $content_id);
        die();
    } else {
        header('location: ' . ROOT_URL . 'details.php?id=' . $content_id);
        die();
    }
} else {
    header('location: ' . ROOT_URL);
    die();
}
