<?php /* Shared footer and scripts. */ ?>
        <!-- footer strt -->
        <footer class="footer footer-area" data-bg-color="#0c1c24">
            <div class="container mxw-1830">
                <div class="xb-footer">
                    <div class="ar-footer-wrap">
                        <div class="row g-0">
                            <div class="col-lg-4 col-md-12">
                                <div class="ar-footer-left mt-60">
                                    <div class="xb-logo">
                                        <a href="index.php"><img src="assets/img/logo/logo-white.png" alt="Archsols"></a>
                                    </div>
                                    <p class="xb-content">
                                        Archsols delivers accurate construction estimates, detailed quantity takeoffs
                                        and design-ready architectural drawings that help you bid with confidence.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <ul class="ar-footer-nav list-unstyled">
                                    <li><a href="index.php"><span>Home</span> <img
                                                src="assets/img/icon/footer-nav-arrow.svg" alt=""></a></li>
                                    <li><a href="about.php"><span>About</span> <img
                                                src="assets/img/icon/footer-nav-arrow.svg" alt=""></a></li>
                                    <li><a href="service.php"><span>Services</span> <img
                                                src="assets/img/icon/footer-nav-arrow.svg" alt=""></a></li>
                                    <li><a href="project.php"><span>Projects</span> <img
                                                src="assets/img/icon/footer-nav-arrow.svg" alt=""></a></li>
                                    <li><a href="contact.php"><span>Contact Us</span> <img
                                                src="assets/img/icon/footer-nav-arrow.svg" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="ar-footer-info">
                                    <p class="title">Ready to get an accurate estimate for your next project?</p>
                                    <ul class="info list-unstyled">
                                        <li>Call Us</li>
                                        <li><a href="tel:<?= e(SITE['phone_tel']) ?>"><?= e(SITE['phone']) ?></a></li>
                                    </ul>
                                    <ul class="info list-unstyled">
                                        <li>Email Us</li>
                                        <li><a href="mailto:<?= e(SITE['email']) ?>"><?= e(SITE['email']) ?></a></li>
                                    </ul>
                                    <ul class="info list-unstyled">
                                        <li>Our Office Location</li>
                                        <li><?= SITE['address'] ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xb-footer_bottom ar-footer_bottom">
                        <p>Copyright © <?= date('Y') ?> <a href="index.php">ARCHSOLS</a>. All rights reserved.</p>
                    </div>
                </div>
            </div>
            <div class="xb-footer-title-wrap text-center">
                <h2 class="xb-footer-bigtitle wow fadeInUp" data-wow-delay="0ms" data-wow-duration="600ms">
                    <a class="xb-text-scale-anim" href="index.php">ARCHSOLS</a>
                </h2>
            </div>
        </footer>
        <!-- footer end -->

    </div>

    <!-- jquery include -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.marquee.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>

    <!-- Parallax & Effects -->
    <script src="assets/js/parallaxie.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>
    <script src="assets/js/cursor-bundle.js"></script>

    <!-- Special plugins -->
    <script src="assets/js/plugin.js"></script>
    <script src="assets/js/lenis.js"></script>

    <!-- Main custom script -->
    <script src="assets/js/main.js"></script>
    <script>
        // Give each letter of the footer big title the matching slice of one shared texture.
        (function () {
            function fitBigTitle() {
                document.querySelectorAll('.xb-footer-bigtitle a').forEach(function (a) {
                    var ar = a.getBoundingClientRect();
                    var w = ar.width, h = w * 1214 / 1821; // text_bg.jpg aspect ratio
                    var offsetY = (h - ar.height) / 2;
                    a.querySelectorAll('.xb-letter').forEach(function (l) {
                        l.style.backgroundSize = w + 'px ' + h + 'px';
                        l.style.backgroundPosition = -(l.offsetLeft) + 'px ' + -(l.offsetTop + offsetY) + 'px';
                    });
                });
            }
            fitBigTitle();
            if (document.fonts && document.fonts.ready) { document.fonts.ready.then(fitBigTitle); }
            window.addEventListener('load', fitBigTitle);
            window.addEventListener('resize', fitBigTitle);
        })();
    </script>

</body>

</html>
