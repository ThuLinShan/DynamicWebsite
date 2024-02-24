<?php
require 'config/database.php';
if (!isset($_SESSION['user-id'])) {
    header('location:' . ROOT_URL . 'signin.php');
    die();
}

if (isset($_GET['id'])) {
    $content_id         = filter_var($_GET['id'], FILTER_VALIDATE_INT);
    $user_id    = filter_var($_SESSION['user-id'], FILTER_VALIDATE_INT);

    // delete operation into records table
    $delete_record_query = "DELETE FROM records WHERE user_id=$user_id AND content_id=$content_id";
    $insert_record_result = mysqli_query($connection, $delete_record_query);

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
