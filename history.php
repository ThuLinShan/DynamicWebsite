<?php
include 'partials/header.php';

$query = " SELECT *
            FROM history WHERE user_id=" . $_SESSION['user-id'];
$history = mysqli_query($connection, $query);
?>
<main class="details-body">
    <img src="<?= ROOT_URL ?>assets/images/banner6.png" alt="" class="information-bg-img" />
    <!-- Main Starts -->
    <div class="main-banner my-5">
        <div class="container bg-darker rounded align-center">
            <h3>Search History</h3>
        </div>
        <div class="container bg-darker align-center mb-5">
            <p>Information stored here are only visible by the user. No third parties can access to this
                information.</p>
            <p>You can manage the browsing history.</p>
        </div>

        <!-- history Start -->
        <?php if (mysqli_num_rows($history)) : ?>
            <a class="btn btn-light" href="<?= ROOT_URL ?>remove_history_logic.php?method=1">Delete all search history</a>
            <?php while ($row = mysqli_fetch_assoc($history)) : ?>
                <div class="img-container-2 border-light bg-darker content-between">
                    <div>
                        <p class="px-5"><?= $row['search_key'] ?></p>
                    </div>
                    <div>
                        <a class="btn-sm btn-red" href="<?= ROOT_URL ?>remove_history_logic.php?id=<?= $row['id'] ?>&method=0">Delete</a>
                    </div>
                </div>
            <?php endwhile ?>
        <?php else : ?>
            <h3>No Search History</h3>
        <?php endif ?>
        <!-- history End -->
    </div>

    <!-- Main Ends -->
</main>
</body>
<?php
include 'partials/footer.php'
?>