<?php
include 'partials/header.php';


$query = " SELECT *
            FROM content WHERE category='Livestreaming'";
$livestreaming = mysqli_query($connection, $query);

?>

<main>
    <div class="information-body">
        <img src="<?= ROOT_URL ?>assets/images/banner6.png" alt="" class="information-bg-img" />
        <!-- Main Starts -->

        <div id="discover" class="illu-banner bg-dark-half">
            <h2>Livestreaming</h2>

            <?php if (mysqli_num_rows($livestreaming)) : ?>
                <?php while ($row = mysqli_fetch_assoc($livestreaming)) : ?>
                    <div class="img-container-2">
                        <div class="img-container">
                            <img class="img-3d border-light img-blue-to-primary" src="<?= ROOT_URL ?>assets/images/article/<?= $row['img'] ?>" alt="" />
                            <a class="btn" href="<?= $row['img_credit'] ?>">Image Credits</a>
                        </div>
                        <div class="container">
                            <h2><?= $row['header'] ?></h2>
                            <p>
                                <?= substr($row['description'], 0, 300) ?>...
                            </p>
                            <a class="btn" href="<?= ROOT_URL ?>details.php?id=<?= $row['id'] ?>">Details</a>
                        </div>
                    </div>
                <?php endwhile ?>

            <?php else : ?>
                <h3>Currently no articles for our campaigns available</h3>
            <?php endif ?>
        </div>
        <!-- Main Ends -->
    </div>
</main>
</body>

<?php
include 'partials/footer.php'
?>