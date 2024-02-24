<?php
include 'partials/header.php';

if (isset($_GET['category']) && isset($_GET['search_key'])) {
    $category = $_GET['category'];
    $search_key = filter_var($_GET['search_key'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $query = " SELECT *
                FROM content WHERE header LIKE '%$search_key%' AND category='$category' ORDER BY date DESC";
    $articles = mysqli_query($connection, $query);

    if (isset($_SESSION['user-id']) && $search_key != null) {
        $insert_post_query = "INSERT INTO history (
            user_id,
            search_key
            ) VALUES (
            '" . $_SESSION['user-id'] . "',
            '$search_key'
            )";
        $insert_post_result = mysqli_query($connection, $insert_post_query);
    }
}
?>
<main>
    <div class="information-body">
        <img src="<?= ROOT_URL ?>assets/images/banner6.png" alt="" class="information-bg-img" />
        <!-- Main Starts -->

        <div id="discover" class="illu-banner bg-dark-half">
            <h2>Results</h2>

            <?php if (isset($articles) && mysqli_num_rows($articles) > 0) : ?>
                <?php while ($row = mysqli_fetch_assoc($articles)) : ?>
                    <div class="img-container-2">
                        <div class="img-container">
                            <img class="img-3d border-light img-blue-to-primary" src="<?= ROOT_URL ?>assets/images/article/<?= $row['img'] ?>" alt="" />
                            <a class="btn" href="<?= $row['img_credit'] ?>">Image Credits</a>
                        </div>
                        <div class="container bg-dark">
                            <h2><?= $row['header'] ?></h2>
                            <p>
                                <?= substr($row['description'], 0, 300) ?>...
                            </p>
                            <a class="btn" href="<?= ROOT_URL ?>details.php?id=<?= $row['id'] ?>">Details</a>
                        </div>
                    </div>

                <?php endwhile ?>

            <?php else : ?>
                <div class="my-5 py-5 bg-dark">
                    <p class="text-center">No Results</p>
                </div>
            <?php endif ?>
        </div>
        <!-- Main Ends -->
    </div>
</main>
</body>

<?php
include 'partials/footer.php'
?>