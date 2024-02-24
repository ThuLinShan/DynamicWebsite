<?php
require 'config/database.php';
$activePage = basename($_SERVER['PHP_SELF'], ".php");
//Fetch user
if (isset($_SESSION['user-id'])) {
    //Fetch user
    $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT username, firstname, lastname FROM users WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $user = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/style.css" />


    <!-- fevicon -->
    <link rel="shortcut icon" href="<?= ROOT_URL ?>assets/utilities/cursor.png" type="image/x-icon">

    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <!-- Header Starts -->
    <nav class="nav">
        <div>
            <a href="<?= ROOT_URL ?>index.php"><img src="<?= ROOT_URL ?>assets/logos/smcLightBold.png" width="150px" alt="" /></a>
        </div>

        <div class="nav-full">
            <ul>
                <li><a class="btn-sm <?= ($activePage == 'index') ? 'btn-nav' : ''; ?>" href="<?= ROOT_URL ?>index.php">Home</a></li>
                <li>
                    <a class="btn-sm <?= ($activePage == 'information') ? 'btn-nav' : ''; ?>" href="<?= ROOT_URL ?>information.php">Information</a>
                </li>
                <li>
                    <a class="btn-sm <?= ($activePage == 'social') ? 'btn-nav' : ''; ?>" href="<?= ROOT_URL ?>social.php">Most Popular Social Media Apps</a>
                </li>
                <li>
                    <div class="dropdown">
                        <button onclick="myFunction()" class="btn-sm dropbtn">
                            &#x25BC
                        </button>
                        <div id="myDropdown" class="dropdown-content">
                            <a class="btn-sm <?= ($activePage == 'contact') ? 'btn-nav' : ''; ?>" href="<?= ROOT_URL ?>contact.php">Contact</a>
                            <a class="btn-sm <?= ($activePage == 'parents') ? 'btn-nav' : ''; ?>" href="<?= ROOT_URL ?>parents.php">How Parents Can Help</a>
                            <a class="btn-sm <?= ($activePage == 'legislation') ? 'btn-nav' : ''; ?>" href="<?= ROOT_URL ?>legislation.php">Legislation and Guidance</a>
                            <?php if (isset($_SESSION['user-id'])) : ?>
                                <?php if (isset($_SESSION['user_is_admin']) && $_SESSION['user_is_admin'] == true) : ?>
                                    <a class="btn-sm <?= ($activePage == 'myaccount') ? 'btn-nav' : ''; ?>" href="<?= ROOT_URL ?>admin/">My Account</a>
                                <?php else : ?>
                                    <a class="btn-sm <?= ($activePage == 'myaccount') ? 'btn-nav' : ''; ?>" href="<?= ROOT_URL ?>myaccount.php">My Account</a>
                                <?php endif ?>
                                <a class="btn-sm <?= ($activePage == 'signout') ? 'btn-nav' : ''; ?>" href="<?= ROOT_URL ?>signout.php">Sign Out</a>
                            <?php else : ?>
                                <a class="btn-sm <?= ($activePage == 'signin') ? 'btn-nav' : ''; ?>" href="<?= ROOT_URL ?>signin.php">Sign In</a>
                                <a class="btn-sm <?= ($activePage == 'signup') ? 'btn-nav' : ''; ?>" href="<?= ROOT_URL ?>signup.php">Sign Up</a>
                            <?php endif ?>
                        </div>
                    </div>
                </li>
                <li><a class="btn-sm <?= ($activePage == 'livestreaming') ? 'btn-nav' : ''; ?>" href="<?= ROOT_URL ?>livestreaming.php">Livestreaming</a></li>
            </ul>
        </div>

        <div class="nav-control" id="nav-open">
            <img src="<?= ROOT_URL ?>assets/utilities/bars.png" width="30px" alt="" />
        </div>
    </nav>
    <div id="nav-bg" class="nav-bg">
        <div class="nav-item">
            <div class="nav-item-header">
                <h3>Menu</h3>
                <img id="nav-close" src="<?= ROOT_URL ?>assets/utilities/close.png" width="20px" alt="" />
            </div>
            <ul>
                <li><a href="<?= ROOT_URL ?>index.php">Home</a></li>
                <li><a href="<?= ROOT_URL ?>information.php">Information</a></li>
                <li><a href="<?= ROOT_URL ?>social.php">Most Popular Social Media Apps</a></li>
                <li><a href="<?= ROOT_URL ?>parents.php">How Parents Can Help</a></li>
                <li><a href="<?= ROOT_URL ?>livestreaming.php">Livestreaming</a></li>
                <li><a href="<?= ROOT_URL ?>contact.php">Contact</a></li>
                <li><a href="<?= ROOT_URL ?>legislation.php">Legislation and Guidance</a></li>
                <?php if (isset($_SESSION['user-id'])) : ?>
                    <a class="btn-sm <?= ($activePage == 'myaccount') ? 'btn-nav' : ''; ?>" href="<?= ROOT_URL ?>myaccount.php">My Account</a>
                    <a class="btn-sm <?= ($activePage == 'signout') ? 'btn-nav' : ''; ?>" href="<?= ROOT_URL ?>signout.php">Sign Out</a>
                <?php else : ?>
                    <a class="btn-sm <?= ($activePage == 'signin') ? 'btn-nav' : ''; ?>" href="<?= ROOT_URL ?>signin.php">Sign In</a>
                    <a class="btn-sm <?= ($activePage == 'signup') ? 'btn-nav' : ''; ?>" href="<?= ROOT_URL ?>signup.php">Sign Up</a>
                <?php endif ?>
            </ul>
        </div>
    </div>
    <div class="search-bar">
        <form action="<?= ROOT_URL ?>search_result.php" method="Get">
            <select class="form-select" name="category" id="category">
                <option value="Social">Social Media Technique</option>
                <option value="Campaigns">Campaigns</option>
                <option value="Parents">Parents</option>
                <option value="Livestreaming">Livestreaming</option>
                <option value="Legislation">Legislation</option>
            </select>
            <div class="search-side">
                <input class="form-control" type="text" name="search_key" />
                <button type="submit" class="btn-sm btn-light">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </form>
    </div>
    <div class="user font-yellow bg-dark">
        <?php if (isset($_SESSION['user-id'])) : ?>
            <p class="text-center">Hello <?= $user['username'] ?></p>
        <?php else : ?>
            <p class="text-center">Log in or Register for better experience</p>
        <?php endif ?>
    </div>
    <!-- Header End Here -->