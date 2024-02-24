<?php
include 'partials/header.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = " SELECT *
                FROM content WHERE id='$id' Limit 1";
    $result = mysqli_query($connection, $query);
    $article = mysqli_fetch_assoc($result);

    if (isset($_SESSION['user-id'])) {
        $query = "SELECT * FROM records WHERE user_id=" . $_SESSION['user-id'] . " AND content_id=" . $id;
        $result = mysqli_query($connection, $query);
        $record = mysqli_fetch_assoc($result);
    }
}
?>
<main class="details-body">
    <img src="<?= ROOT_URL ?>assets/images/banner6.png" alt="" class="information-bg-img" />

    <!-- Main Starts -->
    <?php if (isset($article)) : ?>

        <div class="main-banner my-5">
            <div class="container align-center">
                <img src="<?= ROOT_URL ?>assets/images/article/<?= $article['img'] ?>" class="img-fluid" alt="">
                <div class="d-flex">
                    <a class="btn btn-light" href="<?= $article['img_credit'] ?>">Image Credits</a>
                    <?php if (isset($record)) : ?>
                        <a class="btn btn-blue" href="<?= ROOT_URL ?>remove_record_logic.php?id=<?= $id ?>">Remove from favourite</a>
                    <?php else : ?>
                        <a class="btn btn-light" href="<?= ROOT_URL ?>save_record_logic.php?id=<?= $id ?>">Save to favourite</a>
                    <?php endif ?>
                </div>
            </div>
            <div class="container align-center rounded bg-darker border-light">
                <h3 class="p-5 rounded"><?= $article['header'] ?></h3>
                <p><?= $article['description'] ?></p>
            </div>
        </div>

    <?php else : ?>
        <h3>Currently no articles related to legislation and guidance is available</h3>
    <?php endif ?>
    <!-- Main Ends -->

    </div>
</main>
</body>
<?php
include 'partials/footer.php'
?>