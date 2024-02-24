<?php
include 'partials/header.php';


$query = " SELECT *
            FROM content WHERE category='Social' Limit 9";
$social = mysqli_query($connection, $query);

?>
<main class="social">
  <img src="<?= ROOT_URL ?>assets/images/banner2.png" alt="" class="information-bg-img" />
  <div class="first  container">
    <h3 class="px-5">Most Popular Social Media Apps</h3>
    <ul class="social-icons d-flex content-between mx-auto">
      <li><i class="fa-brands fa-facebook"></i></li>
      <li><i class="fa-brands fa-linkedin"></i></li>
      <li><i class="fa-brands fa-whatsapp"></i></li>
      <li><i class="fa-brands fa-instagram"></i></li>
    </ul>
    <ul class="social-icons d-flex content-between mx-auto">
      <li><i class="fa-brands fa-twitter"></i></li>
      <li><i class="fa-brands fa-reddit"></i></li>
      <li><i class="fa-brands fa-tiktok"></i></li>
      <li><i class="fa-brands fa-discord"></i></li>
    </ul>
    <p></p>
  </div>

  <div class="">
    <!-- Results Start -->
    <div class="illu-banner">
      <h2>Resultss</h2>

      <?php if (mysqli_num_rows($social)) : ?>
        <?php while ($row = mysqli_fetch_assoc($social)) : ?>
          <div class="img-container-2">
            <div class="container">
              <h2><?= $row['header'] ?></h2>
              <p>
                <?= substr($row['description'], 0, 300) ?>...
              </p>
            </div>
            <div class="img-container">
              <img class="img-3d border-light img-blue-to-primary" src="<?= ROOT_URL ?>assets/images/article/<?= $row['img'] ?>" alt="" />
              <a class="btn" href="<?= ROOT_URL ?>details.php?id=<?= $row['id'] ?>">Details</a>
              <a class="btn" href="<?= $row['img_credit'] ?>">Image Credits</a>
            </div>
          </div>
        <?php endwhile ?>

      <?php else : ?>
        <h3>Currently no articles related to Social media technique is available</h3>
      <?php endif ?>
    </div>
    <!-- Results End -->
  </div>
</main>
</body>

<?php
include 'partials/footer.php'
?>