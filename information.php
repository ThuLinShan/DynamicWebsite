<?php
include 'partials/header.php';

$query = " SELECT *
            FROM content WHERE category='Campaigns' Limit 9";
$campaigns = mysqli_query($connection, $query);


$query = " SELECT *
            FROM content WHERE category='Aims' Limit 9";
$aims = mysqli_query($connection, $query);
?>
<main class="information-body">

  <img src="<?= ROOT_URL ?>assets/images/banner4_spotted.png" alt="" class="information-bg-img" />
  <!-- Main Starts -->
  <div class="main-banner">
    <h2>Information</h2>
    <p>Our Campaigns, Our Aims, Our Visions, Your online safety.</p>
    <div>
      <a class="btn btn-light" href="#discover">Discover</a>
    </div>
  </div>
  <!-- Main Ends -->

  <!-- Campaign Start -->
  <div id="discover" class="illu-banner bg-dark-half">
    <h2>Our Campaigns</h2>

    <?php if (mysqli_num_rows($campaigns)) : ?>
      <?php while ($row = mysqli_fetch_assoc($campaigns)) : ?>
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
  <!-- Campaign End -->

  <!-- Aims Start -->
  <div class="third-banner">
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
          <div class="second-banner">
            <div class="container mb-5">
              <h2>Our Aims and Visions</h2>
            </div>
          </div>
        </div>
      </div>

      <?php if (mysqli_num_rows($aims)) : ?>
        <?php while ($row = mysqli_fetch_assoc($aims)) : ?>

          <div class="container border-yelloe rounded mb-5">
            <h2><?= $row['header'] ?></h2>
            <p>
              <?= $row['description'] ?>
            </p>
          </div>
        <?php endwhile ?>

      <?php else : ?>
        <h3>Currently no articles related to our aims and vision is available</h3>
      <?php endif ?>
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
          <div class="second-banner">

          </div>
        </div>
      </div>
      <!-- Aims End -->
</main>
</body>
<?php
include 'partials/footer.php'
?>