<?php
require 'partials/header.php';
?>
<?php if (!isset($_SESSION['user-id'])) : ?>

    <main class="information-body">

        <img src="<?= ROOT_URL ?>assets/images/banner4_spotted.png" alt="" class="information-bg-img" />
        <div class="main-banner">
            <h2>Unauthorized ✌️</h2>
        </div>
    </main>
<?php else : ?>
    <?php
    //Fetch user
    $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $user = mysqli_fetch_assoc($result);
    ?>

    <main class="signin">

        <img src="<?= ROOT_URL ?>assets/images/banner4_spotted.png" alt="" class="information-bg-img" />
        <!-- Main Starts -->

        <div class="main-banner my-5">
            <?php if (isset($_SESSION['edit-user'])) : ?>
                <div class="p-5 bg-dark font-danger ">
                    <p class="font-bold font-large">
                        <?= $_SESSION['edit-user'];
                        unset($_SESSION['edit-user']); ?>
                    </p>
                </div>
            <?php endif ?>

            <form action="<?= ROOT_URL ?>edit_account_logic.php" class=" py-5 bg-dark-half border-light" method="post">
                <div class="container align-center">
                    <input type="hidden" value="<?= $user['id'] ?>" name="id">

                    <label for="firstname">First Name</label>
                    <input value="<?= $user['firstname'] ?>" name="firstname" type="text" id="firstname" class="form-control mb-5">

                    <label for="lastname">Last Name</label>
                    <input value="<?= $user['lastname'] ?>" name="lastname" type="text" id="lastname" class="form-control mb-5">

                    <label for="username">Username</label>
                    <input value="<?= $user['username'] ?>" name="username" type="text" id="username" class="form-control mb-5">

                    <label for="email">Email</label>
                    <input value="<?= $user['email'] ?>" name="email" type="email" id="email" class="form-control mb-5">

                    <label for="password">Password</label>
                    <input name="createpassword" type="password" id="password" class="form-control mb-5">

                    <label for="confirm_password">Confirm Password</label>
                    <input name="confirmpassword" type="password" id="confirm_password" class="form-control mb-5">

                    <button name="submit" class="btn btn-light">Update my account</button>
                </div>
            </form>
        </div>
        <!-- Main Ends -->

    </main>
<?php endif ?>

<?php
include 'partials/footer.php'
?>