<?php
require 'config/database.php';
if (!isset($_SESSION['user-id'])) {
    header('location:' . ROOT_URL . 'signin.php');
    die();
}

$method = filter_var($_GET['method'], FILTER_VALIDATE_INT);
$user_id    = filter_var($_SESSION['user-id'], FILTER_VALIDATE_INT);

if ($method == 1) {
    // delete operation into records table
    $delete_record_query = "DELETE FROM history WHERE user_id=$user_id";
    $insert_record_result = mysqli_query($connection, $delete_record_query);
} else {
    $id         = filter_var($_GET['id'], FILTER_VALIDATE_INT);

    // delete operation into records table
    $delete_record_query = "DELETE FROM history WHERE id=$id";
    $insert_record_result = mysqli_query($connection, $delete_record_query);
}

if (!mysqli_errno($connection)) {
    header('location: ' . ROOT_URL . 'history.php');
    die();
} else {
    header('location: ' . ROOT_URL . 'history.php');
    die();
}
