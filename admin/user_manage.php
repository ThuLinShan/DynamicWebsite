<?php
include 'partials/header.php';


$query = " SELECT *
            FROM users WHERE is_admin=0";
$users = mysqli_query($connection, $query);
?>

<main class="information-body">
    <img src="<?= ROOT_URL ?>assets/images/banner4_spotted.png" alt="" class="information-bg-img" />
    <!-- Aims Start -->
    <div class="third-banner">
        <div class="">
            <!-- Results Start -->
            <div class="illu-banner">
                <h2>User Management</h2>

                <div class="container">
                    <?php if (mysqli_num_rows($users)) : ?>
                        <table class="text-center">
                            <tr>
                                <th>Email</th>
                                <th>Newsletter</th>
                            </tr>
                            <?php while ($row = mysqli_fetch_assoc($users)) : ?>
                                <tr>
                                    <td><?= $row['email'] ?></td>
                                    <?php if ($row['newsletter'] == 1) : ?>
                                        <td class="font-blue">Accept</td>
                                    <?php else : ?>
                                        <td class="font-danger">Decline</td>
                                    <?php endif ?>
                                </tr>
                            <?php endwhile ?>
                        </table>
                    <?php else : ?>
                        <h3>No users found found</h3>
                    <?php endif ?>
                </div>
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