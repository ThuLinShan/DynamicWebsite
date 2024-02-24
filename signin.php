<?php
include 'partials/header.php';

// Refill from if registration fails
$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password       = $_SESSION['signin-data']['password'] ?? null;

// Delete signup data session
unset($_SESSION['signin-data']);

?>
<main class="signin">
    <img src="<?= ROOT_URL ?>assets/images/banner6.png" alt="" class="information-bg-img" />
    <!-- Main Starts -->
    <div class="main-banner my-5">
        <h2>Sigin</h2>
        <?php if (isset($_SESSION['signup-success'])) : ?>
            <div class="bg-dark font-yellow">
                <p class="font-bold font-large">
                    <?= $_SESSION['signup-success'];
                    unset($_SESSION['signup-success']); ?>
                </p>
            </div>
        <?php elseif (isset($_SESSION['signin'])) : ?>
            <div class="bg-dark font-danger">
                <p class="font-bold font-large">
                    <?= $_SESSION['signin'];
                    unset($_SESSION['signin']); ?>
                </p>
            </div>
        <?php endif ?>
        <form action="<?= ROOT_URL ?>signin_logic.php" class=" py-5 bg-dark-half border-light" method="post">
            <div class="container align-center">
                <label for="username_email">Username or Email</label>
                <input name="username_email" type="text" id="username_email" class="form-control mb-5">

                <label for="password">Password</label>
                <input name="password" type="password" id="password" class="form-control mb-5">

                <?php if (isset($_SESSION['lock']) && $_SESSION['lock'] == true) : ?>
                    <?php
                    $time1 = time();
                    $time2 = $_SESSION['lock_time'];
                    $interval = $time1 - $time2;
                    $interval = number_format($interval, 2);

                    if ($interval > 9.9) {
                        $_SESSION['lock'] = false;
                    } else {

                        $mins = $interval % 60;
                        $seconds = ($interval - $mins) * 60;

                        echo gmdate("i:s", $interval) . ' passed.';
                        echo '
                        <p>You have failed to login for 3 attempts.</p>
                        <p>Please wait for 10 min to login again.</p>';
                    }

                    ?>
                <?php else : ?>
                    <button name="submit" class="btn btn-light">Signin</button>
                <?php endif ?>
            </div>
        </form>
        <div class="container bg-dark-half">
            <p>Don't have an account?</p>
            <a class="btn-sm" href="<?= ROOT_URL ?>signup.php">Register Here</a>
        </div>
    </div>
    <!-- Main Ends -->
</main>
</body>
<?php
include 'partials/footer.php'
?>