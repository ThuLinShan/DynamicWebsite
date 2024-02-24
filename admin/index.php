<?php
include 'partials/header.php';


$query = " SELECT id,header,date
            FROM content WHERE category='Social' ";
$social = mysqli_query($connection, $query);


$query = " SELECT id,header,date
            FROM content WHERE category='Campaigns'";
$campaigns = mysqli_query($connection, $query);


$query = " SELECT id,header,date
            FROM content WHERE category='Aims'";
$aims = mysqli_query($connection, $query);


$query = " SELECT id,header,date
            FROM content WHERE category='Parents'";
$parents = mysqli_query($connection, $query);


$query = " SELECT id,header,date
            FROM content WHERE category='Livestreaming'";
$livestreaming = mysqli_query($connection, $query);


$query = " SELECT id,header,date
            FROM content WHERE category='Legislation'";
$legislation = mysqli_query($connection, $query);


$query = " SELECT *
            FROM contact";
$contact = mysqli_query($connection, $query);

?>
<main class="information-body">
    <img src="<?= ROOT_URL ?>assets/images/banner4_spotted.png" alt="" class="information-bg-img" />
    <!-- Aims Start -->
    <div class="third-banner">
        <div class="">
            <!-- Results Start -->
            <div class="illu-banner bg-dark-half">

                <?php if (isset($_SESSION['add-article-success'])) : ?>
                    <p class="font-yellow font-bold font-large text-center">
                        <?= $_SESSION['add-article-success'];
                        unset($_SESSION['add-article-success']); ?>
                    </p>
                <?php endif ?>
                <div class="accordion-body">
                    <div class="accordion bg-dark font-blue">
                        <h2 class="p-5 my-5">Admin dashboard</h2>
                        <a href="<?= ROOT_URL ?>admin/add_article.php" class="btn btn-yelloe text-center">Add new article</a>
                        <a href="<?= ROOT_URL ?>admin/user_manage.php" class="btn btn-yelloe text-center">User management</a>
                        <hr>

                        <!-- Articles Start -->
                        <div class="container">
                            <div class="label font-dark bg-blue">Popular Social Media Technique</div>
                            <div class="content bg-darker">
                                <div class="container">
                                    <?php if (mysqli_num_rows($social)) : ?>
                                        <table class="text-center">
                                            <tr>
                                                <th>Name</th>
                                                <th>Date</th>
                                            </tr>
                                            <?php while ($row = mysqli_fetch_assoc($social)) : ?>
                                                <tr>
                                                    <td><?= $row['header'] ?></td>
                                                    <td><?= $row['date'] ?></td>
                                                </tr>
                                            <?php endwhile ?>
                                        </table>
                                    <?php else : ?>
                                        <h3>No article related to social found</h3>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <!-- Article End -->
                        <hr>

                        <!-- Articles Start -->
                        <div class="container">
                            <div class="label font-dark bg-blue">Parents involvement</div>
                            <div class="content bg-darker">
                                <div class="container">
                                    <?php if (mysqli_num_rows($parents)) : ?>
                                        <table class="text-center">
                                            <tr>
                                                <th>Name</th>
                                                <th>Date</th>
                                            </tr>
                                            <?php while ($row = mysqli_fetch_assoc($parents)) : ?>
                                                <tr>
                                                    <td><?= $row['header'] ?></td>
                                                    <td><?= $row['date'] ?></td>
                                                </tr>
                                            <?php endwhile ?>
                                        </table>
                                    <?php else : ?>
                                        <h3>No article related to parents involvement were found</h3>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <!-- Article End -->
                        <hr>

                        <!-- Articles Start -->
                        <div class="container">
                            <div class="label font-dark bg-blue">Campaigns</div>
                            <div class="content bg-darker">
                                <div class="container">
                                    <?php if (mysqli_num_rows($campaigns)) : ?>
                                        <table class="text-center">
                                            <tr>
                                                <th>Name</th>
                                                <th>Date</th>
                                            </tr>
                                            <?php while ($row = mysqli_fetch_assoc($campaigns)) : ?>
                                                <tr>
                                                    <td><?= $row['header'] ?></td>
                                                    <td><?= $row['date'] ?></td>
                                                </tr>
                                            <?php endwhile ?>
                                        </table>
                                    <?php else : ?>
                                        <h3>No article related to campaigns involvement were found</h3>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <!-- Article End -->
                        <hr>


                        <!-- Articles Start -->
                        <div class="container">
                            <div class="label font-dark bg-blue">Aims and visions</div>
                            <div class="content bg-darker">
                                <div class="container">
                                    <?php if (mysqli_num_rows($aims)) : ?>
                                        <table class="text-center">
                                            <tr>
                                                <th>Name</th>
                                                <th>Date</th>
                                            </tr>
                                            <?php while ($row = mysqli_fetch_assoc($aims)) : ?>
                                                <tr>
                                                    <td><?= $row['header'] ?></td>
                                                    <td><?= $row['date'] ?></td>
                                                </tr>
                                            <?php endwhile ?>
                                        </table>
                                    <?php else : ?>
                                        <h3>No article related to aims and visions were found</h3>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <!-- Article End -->
                        <hr>

                        <!-- Articles Start -->
                        <div class="container">
                            <div class="label font-dark bg-blue">Livestreaming</div>
                            <div class="content bg-darker">
                                <div class="container">
                                    <?php if (mysqli_num_rows($livestreaming)) : ?>
                                        <table class="text-center">
                                            <tr>
                                                <th>Name</th>
                                                <th>Date</th>
                                            </tr>
                                            <?php while ($row = mysqli_fetch_assoc($livestreaming)) : ?>
                                                <tr>
                                                    <td><?= $row['header'] ?></td>
                                                    <td><?= $row['date'] ?></td>
                                                </tr>
                                            <?php endwhile ?>
                                        </table>
                                    <?php else : ?>
                                        <h3>No article related to livestreaming were found</h3>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <!-- Article End -->
                        <hr>


                        <!-- Articles Start -->
                        <div class="container">
                            <div class="label font-dark bg-blue">Legislation and Guidance</div>
                            <div class="content bg-darker">
                                <div class="container">
                                    <?php if (mysqli_num_rows($legislation)) : ?>
                                        <table class="text-center">
                                            <tr>
                                                <th>Name</th>
                                                <th>Date</th>
                                            </tr>
                                            <?php while ($row = mysqli_fetch_assoc($legislation)) : ?>
                                                <tr>
                                                    <td><?= $row['header'] ?></td>
                                                    <td><?= $row['date'] ?></td>
                                                </tr>
                                            <?php endwhile ?>
                                        </table>
                                    <?php else : ?>
                                        <h3>No article related to legislation and guidance were found</h3>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <!-- Article End -->
                        <hr>
                    </div>
                </div>
            </div>
            <!-- Results End -->

            <!--Contact start -->
            <div class="accordion-body">
                <h2>Contacts</h2>
                <div class="accordion bg-dark font-blue"><!-- Articles Start -->
                    <div class="container">
                        <div class="label font-dark bg-blue">Users' contacts</div>
                        <div class="content bg-darker">
                            <div class="container">
                                <?php if (mysqli_num_rows($contact)) : ?>
                                    <table class="text-center">
                                        <tr>
                                            <th>Subject</th>
                                        </tr>
                                        <?php while ($row = mysqli_fetch_assoc($contact)) : ?>
                                            <tr>
                                                <td><?= $row['subject'] ?></td>
                                            </tr>
                                        <?php endwhile ?>
                                    </table>
                                <?php else : ?>
                                    <h3>No contact</h3>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                    <!-- Article End -->
                </div>
            </div>
            <!-- Contact End -->
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