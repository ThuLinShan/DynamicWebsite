<?php
require 'config/database.php';

if (isset($_POST['submit'])) {
    $username_email = filter_var($_POST['username_email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password       = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Validate input values
    if (!$username_email) {
        $_SESSION['signin'] = "Please input username or email";
    } elseif (!$password) {
        $_SESSION['signin'] = "Password field is empty";
    } else {
        $fetch_user_query = "SELECT * FROM users WHERE 
                                username='$username_email' OR
                                email='$username_email'";
        $fetch_user_result = mysqli_query($connection, $fetch_user_query);

        if (mysqli_num_rows($fetch_user_result) == 1) {
            $db_user = mysqli_fetch_assoc($fetch_user_result);
            $db_password = $db_user['password'];

            // Validate input password with db password
            if ($password == $db_password) {
                $_SESSION['user-id'] = $db_user['id'];
                if ($db_user['is_admin'] == 1) {
                    $_SESSION['user_is_admin'] = true;
                    //Log in to admin
                    header('location: ' . ROOT_URL . 'admin/');
                } else {
                    header('location: ' . ROOT_URL);
                }
            } else {
                $_SESSION['signin'] = "Invalid password";
            }
        } else {
            $_SESSION['signin'] = "User not found";
        }
    }

    if (isset($_SESSION['signin'])) {
        $_SESSION['signin-data'] = $_POST;

        // timer logic
        if (!isset($_SESSION['attempt'])) {
            $_SESSION['attempt'] = 1;
        } else if ($_SESSION['attempt'] < 2) {
            $_SESSION['attempt'] = $_SESSION['attempt'] + 1;
        } else {
            $_SESSION['lock'] = true;
            $_SESSION['lock_time'] = time();
            unset($_SESSION['attempt']);
        }
        // timer logic end

        header('location: ' . ROOT_URL . 'signin.php');

        die();
    }
} else {
    header('location: ' . ROOT_URL . 'signin.php');
    die();
}
