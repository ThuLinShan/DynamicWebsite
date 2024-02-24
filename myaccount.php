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

    $query = "SELECT * FROM records WHERE user_id=" . $_SESSION['user-id'];
    $records = mysqli_query($connection, $query);
    ?>

    <main class="information-body">

        <img src="<?= ROOT_URL ?>assets/images/banner4_spotted.png" alt="" class="information-bg-img" />
        <!-- Main Starts -->
        <div class="main-banner">
            <?php if (isset($_SESSION['edit-user-success'])) : ?>
                <div class="p-5 bg-blue font-dark ">
                    <p class="font-bold font-large">
                        <?= $_SESSION['edit-user-success'];
                        unset($_SESSION['edit-user-success']); ?>
                    </p>
                </div>
            <?php endif ?>
            <div class="py-5 bg-dark">
                <h3>User <span class="font-blue"><?= $user['username'] ?></span></h3>
                <h3>First name: <span class="font-blue"><?= $user['firstname'] ?></span></h3>
                <h3>Last name: <span class="font-blue"><?= $user['lastname'] ?></span></h3>
                <h3>E-mail address: <span class="font-blue"><?= $user['email'] ?></span></h3>
            </div>
            <div class="p-5 border-light mt-5 rounded">
                <?php if ($user['newsletter'] == 1) : ?>
                    <h3 class="font-blue">Newsletter receiving.</h3>
                    <a class="btn" href="<?= ROOT_URL ?>newsletter_logic.php?key=0">Stop subscription.</a>
                <?php else : ?>
                    <h3 class="font-danger">Newsletter not receiving</h3>
                    <a class="btn btn-light" href="<?= ROOT_URL ?>newsletter_logic.php?key=1">I would like to receive newsletter.</a>
                <?php endif ?>
            </div>

            <div class="p-5 mt-5 border-blue bg-dark rounded">
                <a class="btn btn-blue" href="<?= ROOT_URL ?>edit_account.php">Manage Account</a>
                <a class="btn btn-blue" href="<?= ROOT_URL ?>history.php">Search History</a>
            </div>


            <div class="main-banner font-light my-5">
                <div class="container bg-darker py-5 rounded align-center">
                    <h3>Saved Articles</h3>
                    <p>Information stored here are only visible by the user. No third parties can access to this
                        information.</p>
                    <p>You can manage your saved records.</p>
                </div>

                <!-- Records Start -->
                <h3>Records</h3>
                <?php if (mysqli_num_rows($records)) : ?>
                    <?php while ($row = mysqli_fetch_assoc($records)) : ?>
                        <?php
                        $query = "SELECT * FROM content WHERE id=" . $row['content_id'];
                        $result = mysqli_query($connection, $query);
                        $content = mysqli_fetch_assoc($result);
                        ?>
                        <div class="img-container-2 border-light bg-darker content-between">
                            <div>
                                <p class="px-5"><?= $content['header'] ?></p>
                            </div>
                            <div>
                                <a class="btn" href="<?= ROOT_URL ?>details.php?id=<?= $content['id'] ?>">Details</a>
                            </div>
                        </div>
                    <?php endwhile ?>
                <?php else : ?>
                    <h3>No favourite articles</h3>
                <?php endif ?>
                <!-- Records End -->
            </div>
        </div>
        <!-- Main Ends -->

    </main>
<?php endif ?>

<?php
include 'partials/footer.php'
?>