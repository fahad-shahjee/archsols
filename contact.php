<?php
$page      = 'contact';
$pageTitle = 'Contact Us | Archsols';
$pageDesc  = 'Contact Archsols for a free estimate or quote on your next project.';
require __DIR__ . '/includes/header.php';
?>

        <main>
        <!-- hero start -->
        <section class="breadcrumb pos-rel" data-bg-color="#f3f1ed">
            <div class="container mxw-1650">
                <div class="breadcrumb__content">
                    <h2 class="breadcrumb__title">Contact us</h2>
                    <div class="breadcrumb__list_wrap ul_li_between">
                        <ul class="breadcrumb__list clearfix list-unstyled">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="far fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item">Contact us</li>
                        </ul>
                        <p class="breadcrumb__text">Send us your plans for a clear quote on estimating or drafting work.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero end -->

        <!-- contact start -->
        <section class="contact pt-150">
            <div class="container mxw-1650">
                <div class="xb-contact-wrapper">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="xb-contact-form xb-main-contact">
                                <h3 class="form-heading mb-35">
                                    Send your plans. Get a clear quote.
                                </h3>
                                <form action="#!" class="xb-contact-input-form">
                                    <div class="row mt-none-20">
                                        <div class="col-lg-6 col-md-6 mt-20">
                                            <div class="xb-input-field">
                                                <input id="author-name" type="text" required>
                                                <label for="author-name">Your Name*</label>
                                                <img src="assets/img/icon/user-balck-icon.svg" alt="icon">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 mt-20">
                                            <div class="xb-input-field">
                                                <input id="author-email" type="email" required>
                                                <label for="author-email">Email Address*</label>
                                                <img src="assets/img/icon/sms-balck-icon.svg" alt="icon">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 mt-20">
                                            <div class="xb-input-field">
                                                <input id="author-phone" type="text" required>
                                                <label for="author-phone">Contact No*</label>
                                                <img src="assets/img/icon/call-icon02.svg" alt="icon">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 mt-20">
                                            <div class="xb-input-field xb-upload-file">
                                                <input type="file" required="">
                                                <img src="assets/img/icon/upload-icon02.svg" alt="icon">
                                                <div class="xb-input-file">
                                                    <p>Upload Plans</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 mt-20">
                                            <div class="xb-input-field xb-select-field">
                                                <select class="nice-select">
                                                    <option value="1">Select Service*</option><?= service_options('                                                    ') ?>
                                                </select>
                                                <img src="assets/img/icon/list-icon.svg" alt="icon">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 mt-20">
                                            <div class="xb-input-field xb-massage-field">
                                                <textarea id="massage" required></textarea>
                                                <label for="massage">Tell us about your project</label>
                                                <img src="assets/img/icon/messages-icon.svg" alt="icon">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-submit-button mt-30">
                                        <button class="thm-btn construction-btn w-100 arrow_hover_effect" type="submit" data-split-link="" aria-label="Send request">
                                            <span class="text" data-link-shadow="">Send request</span>
                                            <span class="xb-icon">
                                                <span class="xb-arrow">
                                                    <img src="assets/img/icon/arrow-white.svg" alt="icon">
                                                    <img src="assets/img/icon/arrow-white.svg" alt="icon">
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="google-map">
                                <iframe src="https://maps.google.com/maps?q=San%20Francisco%2C%20California&amp;z=12&amp;output=embed"></iframe>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact end -->

        <!-- contact start -->
        <section class="contact pb-150">
            <div class="container mxw-1650">
                <div class="xb-contact-top">
                    <div class="container">
                        <h2 class="xb-title">Get in touch with the Archsols estimating team. We aim to respond <span>within one business day to review your plans</span> and send a clear quote for your project scope, timeline and bid date</h2>
                    </div>
                    <div class="xb-shape"><img src="assets/img/contact/building.png" alt=""></div>
                </div>
                <div class="xb-main-contact-wrapper">
                    <h3 class="xb-details-content-title mb-35">get in touch with archsols</h3>
                    <div class="row mt-none-30">
                        <div class="col-lg-4 col-md-6 mt-30">
                            <div class="xb-contact-items hover-effect-img wow fadeInUp" data-wow-delay="0ms" data-wow-duration="600ms">
                                <div class="xb-item--inner">
                                    <div class="xb-img o-hidden">
                                        <a href="#!"><img class="img" src="assets/img/contact/img01.jpg" alt="image"></a>
                                    </div>
                                    <div class="xb-item--holder">
                                        <p class="xb-item--location">Market#203 San Francisco, California (CA).</p>
                                        <a class="xb-item--contact_info" href="tel:+13105550143">+1 310-555-0143</a>
                                        <a class="xb-item--contact_info" href="mailto:info@archsols.com">info@archsols.com</a>
                                        <a class="thm-btn construction-btn construction-btn--black arrow_hover_effect mt-45" href="contact.php">
                                            <div class="text">click to see location</div>
                                            <div class="xb-icon">
                                                <div class="xb-arrow">
                                                    <img src="assets/img/icon/arrow-white.svg" alt="icon">
                                                    <img src="assets/img/icon/arrow-white.svg" alt="icon">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-30">
                            <div class="xb-contact-items hover-effect-img wow fadeInUp" data-wow-delay="100ms" data-wow-duration="600ms">
                                <div class="xb-item--inner">
                                    <div class="xb-img o-hidden">
                                        <a href="#!"><img class="img" src="assets/img/contact/img02.jpg" alt="image"></a>
                                    </div>
                                    <div class="xb-item--holder">
                                        <p class="xb-item--location">Quotes & Project Support</p>
                                        <a class="xb-item--contact_info" href="tel:+13105550143">+1 310-555-0143</a>
                                        <a class="xb-item--contact_info" href="mailto:info@archsols.com">info@archsols.com</a>
                                        <a class="thm-btn construction-btn construction-btn--black arrow_hover_effect mt-45" href="contact.php">
                                            <div class="text">request a quote</div>
                                            <div class="xb-icon">
                                                <div class="xb-arrow">
                                                    <img src="assets/img/icon/arrow-white.svg" alt="icon">
                                                    <img src="assets/img/icon/arrow-white.svg" alt="icon">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-30">
                            <div class="xb-contact-items hover-effect-img wow fadeInUp" data-wow-delay="200ms" data-wow-duration="600ms">
                                <div class="xb-item--inner">
                                    <div class="xb-img o-hidden">
                                        <a href="#!"><img class="img" src="assets/img/contact/img03.jpg" alt="image"></a>
                                    </div>
                                    <div class="xb-item--holder">
                                        <p class="xb-item--location">Send Your Plans</p>
                                        <a class="xb-item--contact_info" href="tel:+13105550143">+1 310-555-0143</a>
                                        <a class="xb-item--contact_info" href="mailto:info@archsols.com">info@archsols.com</a>
                                        <a class="thm-btn construction-btn construction-btn--black arrow_hover_effect mt-45" href="contact.php">
                                            <div class="text">send your plans</div>
                                            <div class="xb-icon">
                                                <div class="xb-arrow">
                                                    <img src="assets/img/icon/arrow-white.svg" alt="icon">
                                                    <img src="assets/img/icon/arrow-white.svg" alt="icon">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- contact end -->

    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
