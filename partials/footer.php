<footer>
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
                <div class="">
                    <h2>Footer, end of the page</h2>
                    <p>You are currently at</p>
                </div>
                <p class="btn btn-light">
                    <?= ($activePage == 'index') ? 'Home Page' : ''; ?>
                    <?= ($activePage == 'contact') ? 'Contact Page' : ''; ?>
                    <?= ($activePage == 'details') ? 'Detail Page' : ''; ?>
                    <?= ($activePage == 'information') ? 'Information Page' : ''; ?>
                    <?= ($activePage == 'legislation') ? 'Legislation and Guidance Page' : ''; ?>
                    <?= ($activePage == 'livestreaming') ? 'Live Streaming Page' : ''; ?>
                    <?= ($activePage == 'myaccount') ? 'My Account Page' : ''; ?>
                    <?= ($activePage == 'parents') ? 'Parents Page' : ''; ?>
                    <?= ($activePage == 'privacy') ? 'Privacy and Policy Page' : ''; ?>
                    <?= ($activePage == 'records') ? 'Browsing Records Page' : ''; ?>
                    <?= ($activePage == 'search_result') ? 'Results Page' : ''; ?>
                    <?= ($activePage == 'signin') ? 'Sign In Page' : ''; ?>
                    <?= ($activePage == 'signup') ? 'Sign Up Page' : ''; ?>
                    <?= ($activePage == 'social') ? 'Popular Social Media Page' : ''; ?>
                </p>
                <div class="container-flex"></div>
                <p>Copyright &copy; thulinshan1234@gmail.com. All rights reserved.</p>
                <p>
                    All the banner images, icons and other assets are created
                    manually by open source software:
                </p>
                <a href="https://inkscape.org/" class="btn-sm">Inkscape</a>

                <h3>Social Media Links</h3>
                <div class="d-flex content-center">
                    <a class="btn-sm" href=""><i class="fa-brands fa-facebook"></i></a>
                    <a class="btn-sm" href=""><i class="fa-brands fa-twitter"></i></a>
                    <a class="btn-sm" href=""><i class="fa-brands fa-instagram"></i></a>
                    <a class="btn-sm" href=""><i class="fa-brands fa-whatsapp"></i></a>
                    <a class="btn-sm" href=""><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- script -->
<script src="https://kit.fontawesome.com/026a8fc3c8.js" crossorigin="anonymous"></script>
<script src="./js/main.js"></script>
<script src="./js/news_api.js"></script>
<script src="./js/wiki_api.js"></script>


</html>