<?php
include 'partials/header.php';

// Get back form data if add post fails
$header                = $_SESSION['add-article-data']['header'] ?? null;
$description           = $_SESSION['add-article-data']['description'] ?? null;
$img_credit           = $_SESSION['add-article-data']['img_credit'] ?? null;

// Delete add post data
unset($_SESSION['add-article-data']);
?>

<main class="information-body">
    <img src="<?= ROOT_URL ?>assets/images/banner4_spotted.png" alt="" class="information-bg-img" />
    <!-- Aims Start -->
    <div class="illu-banner">
        <div class="">
            <!-- Results Start -->
            <div class="content">
                <h2>Add new article</h2>
                <?php if (isset($_SESSION['add-article'])) : ?>
                    <div>
                        <p class="bg-danger font-bold font-large text-center">
                            <?= $_SESSION['add-article'];
                            unset($_SESSION['add-article']); ?>
                        </p>
                    </div>
                <?php endif ?>

                <form class="form bg-dark-half py-5" action="<?= ROOT_URL ?>admin/add_article_logic.php" enctype="multipart/form-data" method="POST">

                    <label for="header">Header</label>
                    <input id="header" value="<?= $header ?>" type="text" name="header" class="form-control">

                    <label for="description">description</label>
                    <textarea name="description" id="description" rows="10" class="form-control"><?= $description ?></textarea>

                    <label for="img">Thumbnail</label>
                    <input id="img" type="file" name="img" class="form-control file-control">

                    <label for="img_credit">Image Credits Link</label>
                    <input id="img_credit" value="<?= $img_credit ?>" type="text" name="img_credit" class="form-control file-control">

                    <label for="category">Categories</label>
                    <select name="category" id="category" class="form-control">
                        <option value="Social">Social Media Technique</option>
                        <option value="Campaigns">Campaigns</option>
                        <option value="Aims">Aims</option>
                        <option value="Parents">Parents</option>
                        <option value="Livestreaming">Livestreaming</option>
                        <option value="Legislation">Legislation</option>
                    </select>

                    <button class="btn btn-yelloe" name="submit">Create Article</button>
                </form>
            </div>
            <!-- Results End -->
        </div>

        <!-- Just raining` -->
        <div class="social-safety">
            <div class="second-banner">
                <div id="second-banner">
                    <div class="second-banner-bg">
                        <!-- following four divs are droping rains -->
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Aims End -->
    </div>
</main>
</body>

<?php
include 'partials/footer.php';
?>