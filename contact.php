<?php
include 'partials/header.php';
?>
<main class="contact">
    <div class="bg-img1 main-banner">
        <h2>Contact Us</h2>
        <p>
            We are welcome to all sorts of consulting, supporting, and communication.
        </p>
        <a href="<?= ROOT_URL ?>privacy.php" class="btn-sm font-light">Our privacy policy</a>
        <div class="font-blue mt-5">
            <ul class="d-flex flex-column">
                <li><i class="icon ti-location-pin"></i><span>No 00 Street Street 100/1,
                        <br>City, Country</span></li>
                <li><a class="btn" href="tel:+0123456789"><i class="fa fa-phone"></i> (+01) 123 456
                        789</a></li>
                <li><a class="btn" href="mailto:info@example.com"><i class="fa fa-envelope-open" aria-hidden="true"></i> example@example.com</a>
                </li>

                <?php if (isset($_SESSION['contact-success'])) : ?>
                    <div>
                        <p class="font-yellow font-bold font-large text-center">
                            <?= $_SESSION['contact-success'];
                            unset($_SESSION['contact-success']); ?>
                        </p>
                    </div>
                <?php endif ?>

            </ul>
        </div>
    </div>

    <!-- contact form -->
    <div class="second-banner my-5 py-5">
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
                <h2>Submit what you want to tell us here</h2>
                <form action="<?= ROOT_URL ?>contact_logic.php" method="post">
                    <?php if (isset($_SESSION['contact'])) : ?>
                        <div>
                            <p class="bg-danger font-bold font-large text-center">
                                <?= $_SESSION['contact'];
                                unset($_SESSION['contact']); ?>
                            </p>
                        </div>
                    <?php elseif (isset($_SESSION['contact-success'])) : ?>
                        <div>
                            <p class="font-yellow font-bold font-large text-center">
                                <?= $_SESSION['contact-success'];
                                unset($_SESSION['contact-success']); ?>
                            </p>
                        </div>
                    <?php endif ?>

                    <label class="d-block" for="subject">Subject</label>
                    <input class="form-control" type="text" id="subject" name="subject" required>
                    <label class="d-block" for="details">Details</label>
                    <textarea class="form-control" type="text" id="details" rows="7" name="details" required>
                        </textarea>
                    <button class="btn" name="submit" type="submit">Submit<i class="fa-solid fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
    </div>
    <!-- contact form end -->

</main>
</body>
<?php
include 'partials/footer.php'
?>