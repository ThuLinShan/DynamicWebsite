<?php
include 'config/database.php';
// Check login status
if (!isset($_SESSION['user-id'])) {
    header('location:' . ROOT_URL);
    die();
} else if (!isset($_GET['key'])) {
    header('location:' . ROOT_URL);
    die();
}
//Fetch user
$id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
$key = filter_var($_GET['key'], FILTER_SANITIZE_NUMBER_INT);

$query = "UPDATE users SET
                        newsletter = $key
                    WHERE id='$id' LIMIT 1";
$result = mysqli_query($connection, $query);

header('location:' . ROOT_URL . 'myaccount.php');
