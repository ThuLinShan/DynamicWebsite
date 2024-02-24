<?php
require 'config/database.php';

if (isset($_POST['submit'])) {
    $header         = filter_var($_POST['header'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description    = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $img_credit    = filter_var($_POST['img_credit'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $category       = filter_var($_POST['category'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $img            = $_FILES['img'];

    // Validate input values;
    if (!$header) {
        $_SESSION['add-article'] = "Please enter a header";
    } elseif (!$description) {
        $_SESSION['add-article'] = "Please enter  description";
    } elseif (!$category) {
        $_SESSION['add-article'] = "Please select a category";
    } elseif (!$img_credit) {
        $_SESSION['add-article'] = "Please enter Image Credits Data";
    } elseif (!$img['name']) {
        $_SESSION['add-article'] = "Please add an Image";
    } else {
        //  Rename avatar file
        $time = time(); // Time as unique identifier
        $img_name = $time . $img['name'];
        $img_tmp_name = $img['tmp_name'];
        $img_destination_path = '../assets/images/article/' . $img_name;

        // Validate file format
        $allowed_files = ['png', 'jpg', 'jpeg'];
        $extension = explode('.', $img_name);
        $extension = end($extension);
        if (in_array($extension, $allowed_files)) {
            // Validate file size
            if ($img['size'] <= 2_000_000) {
                // Upload image
                move_uploaded_file($img_tmp_name, $img_destination_path);
            } else {
                $_SESSION['add-article'] = "img should not be bigger than 2MB";
            }
        } else {
            $_SESSION['add-article'] = "Please add a valid image file";
        }
    }

    // Return if validation fails
    if (isset($_SESSION['add-article'])) {
        // Return form data back to add post page
        $_SESSION['add-article-data'] = $_POST;
        header('location: ' . ROOT_URL . 'admin/add_article.php');
        die();
    } else {
        // Insert operation into posts table
        $insert_post_query = "INSERT INTO content (
                                header,
                                img_credit,
                                img,
                                category,
                                description
                                ) VALUES (
                                '$header',
                                '$img_credit',
                                '$img_name',
                                '$category',
                                '$description'
                                )";
        $insert_post_result = mysqli_query($connection, $insert_post_query);

        if (!mysqli_errno($connection)) {
            // Redirect to manage posts page
            $_SESSION['add-article-success'] = "New article $header successfully added";
            header('location: ' . ROOT_URL . 'admin/index.php');
            die();
        } else {
            // Return form data back to add post page
            $_SESSION['add-article-data'] = $_POST;
            $_SESSION['add-article'] = "Something went wrong";
            header('location: ' . ROOT_URL . 'admin/add_article.php');
            die();
        }
    }
} else {
    header('location: ' . ROOT_URL . 'admin/add_article.php');
    die();
}
