<?php
require 'config/database.php';

if (isset($_POST['submit'])) {
    // Get form data
    $id                 = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $firstname          = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname           = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username           = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email              = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $password           = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword           = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Check for valid input
    if (!$firstname || !$lastname || !$username || !$email) {
        $_SESSION['edit-user'] = "Missing input";
    } else if (isset($password) && isset($confirmpassword) &&  $password != $confirmpassword) {
        $_SESSION['edit-user'] = "Password do not match";
    } else if (isset($password) && isset($confirmpassword) &&  strlen($password) < 8) {
        $_SESSION['edit-user'] = "New password is less than 8 characters";
    } else {
        if (!isset($password)) {
            $query = "UPDATE users SET
                        firstname='$firstname',
                        lastname='$lastname',
                        username='$username',
                        email = '$email'
                        WHERE id='$id' LIMIT 1";
        } else {
            $query = "UPDATE users SET
                        firstname='$firstname',
                        lastname='$lastname',
                        username='$username',
                        email = '$email',
                        password = '$password'
                        WHERE id='$id' LIMIT 1";
        }
        $result = mysqli_query($connection, $query);

        if (mysqli_errno($connection)) {
            $_SESSION['edit-user'] = "Unknown error, failed to update user";
        }

        if ($_SESSION['edit-user']) {
            header('location: ' . ROOT_URL . 'edit_account.php');
            die();
        } else {
            $_SESSION['edit-user-success'] = "User $username updated succesfully";
            header('location: ' . ROOT_URL . 'myaccount.php');
            die();
        }
    }
} else {
    header('location: ' . ROOT_URL . 'myaccount.php');
    die();
}
