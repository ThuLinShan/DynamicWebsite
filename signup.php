<?php
include 'partials/header.php';



// Get back form data if registration fails
$firstname          = $_SESSION['signup-data']['firstname'] ?? null;
$lastname           = $_SESSION['signup-data']['lastname'] ?? null;
$username           = $_SESSION['signup-data']['username'] ?? null;
$email              = $_SESSION['signup-data']['email'] ?? null;
$createpassword     = $_SESSION['signup-data']['createpassword'] ?? null;
$confirmpassword    = $_SESSION['signup-data']['confirmpassword'] ?? null;

// Delete signup data session
unset($_SESSION['signup-data']);
?>
<main class="signin">
    <img src="<?= ROOT_URL ?>assets/images/banner6.png" alt="" class="information-bg-img" />
    <!-- Main Starts -->
    <div class="main-banner my-5">
        <h2>Register an account</h2>
        <?php if (isset($_SESSION['signup'])) : ?>
            <div class="p-5 bg-dark font-danger ">
                <p class="font-bold font-large">
                    <?= $_SESSION['signup'];
                    unset($_SESSION['signup']); ?>
                </p>
            </div>
        <?php endif ?>
        <form action="<?= ROOT_URL ?>signup_logic.php" class=" py-5 bg-dark-half border-light" method="post">
            <div class="container align-center">

                <label for="firstname">First Name</label>
                <input value="<?= $firstname ?>" name="firstname" type="text" id="firstname" class="form-control mb-5">

                <label for="lastname">Last Name</label>
                <input value="<?= $lastname ?>" name="lastname" type="text" id="lastname" class="form-control mb-5">

                <label for="username">Username</label>
                <input value="<?= $username ?>" name="username" type="text" id="username" class="form-control mb-5">

                <label for="email">Email</label>
                <input value="<?= $email ?>" name="email" type="email" id="email" class="form-control mb-5">

                <label for="password">Password</label>
                <input value="<?= $createpassword ?>" name="createpassword" type="password" id="password" class="form-control mb-5">

                <label for="confirm_password">Confirm Password</label>
                <input value="<?= $confirmpassword ?>" name="confirmpassword" type="password" id="confirm_password" class="form-control mb-5">

                <label for="newsletter">I would like to receive newsletter</label>
                <input type="checkbox" value="1" id="newsletter" name="newsletter" class="mb-5" checked>

                <button name="submit" class="btn btn-light">Register</button>
            </div>
        </form>
        <div class="container bg-dark-half">
            <p>Already have an account?</p>
            <a class="btn-sm" href="<?= ROOT_URL ?>signin.php">Sigin Here</a>
        </div>
    </div>
    <!-- Main Ends -->
</main>
</body>

<?php
include 'partials/footer.php'
?>