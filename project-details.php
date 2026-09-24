<?php
$page      = 'projects';
$pageTitle = 'Project Details | Archsols';
$pageDesc  = 'Project details from the Archsols portfolio.';
require __DIR__ . '/includes/header.php';
?>

        <main>
        <!-- hero start -->
        <section class="breadcrumb pos-rel" data-bg-color="#f3f1ed">
            <div class="container mxw-1650">
                <div class="breadcrumb__content">
                    <h2 class="breadcrumb__title">Project details</h2>
                    <div class="breadcrumb__list_wrap ul_li_between">
                        <ul class="breadcrumb__list clearfix list-unstyled">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="far fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item">Project details</li>
                        </ul>
                        <p class="breadcrumb__text">A closer look at how we scope, estimate and deliver.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero end -->

        <!-- service start -->
        <section class="service pt-150 pb-150">
            <div class="container mxw-1650">
                <div class="sp-service-details-wrap">
                    <div class="row mt-none-50">
                        <div class="col-lg-3 mt-50">
                            <div class="sp-service-left">
                                <div class="sp-ser-side-item border-list">
                                    <h3 class="service-sidebar-title">project details</h3>
                                    <ul class="sp-service-list sp-service-list--border list-unstyled">
                                        <li>Client: Private Developer</li>
                                        <li>Category: Residential</li>
                                        <li>Location: United States</li>
                                        <li>Service: Cost Estimating</li>
                                        <li>Delivery: Excel & PDF</li>
                                    </ul>
                                </div>
                                <div class="sp-ser-side-item">
                                    <h3 class="service-sidebar-title">See project location</h3>
                                    <div class="google-map mt-25">
                                        <iframe src="https://maps.google.com/maps?q=United%20States&amp;z=4&amp;output=embed"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 mt-50">
                            <div class="sp-service-right">
                                <div class="sp-service-img scale-up-img o-hidden mb-50">
                                    <img class="img-cover scale-up" src="assets/img/project/img13.jpg" alt="project image">
                                </div>

                                <h2 class="xb-details-title mb-25">A complete cost estimate for a multi-family residential building</h2>
                                <p class="mb-30">A private developer asked Archsols for a detailed, bid-ready estimate on a four-story apartment building of roughly 40,000 to 60,000 square feet to compare contractor pricing.</p>
                                <p class="mb-85">The drawing set covered site work, a concrete podium, wood-framed residential floors and full interior finishes. Our estimators completed a quantity takeoff for every trade in PlanSwift and Bluebeam, then priced materials, labor and equipment using current regional rates and RSMeans data. The scope included concrete and masonry, drywall and framing, roofing, flooring and finishes, as well as electrical, plumbing and HVAC. The final estimate was organized by CSI division, so the client could compare bids line by line, spot scope gaps and make informed decisions before construction began.</p>

                                <h3 class="xb-details-content-title mb-45">project SCOPE</h3>
                                <div class="sp-service-img mb-50"><img src="assets/img/project/img14.jpg" alt="project image"></div>

                                <h3 class="xb-details-content-title mb-25">project DELIVERY</h3>
                                <p class="mb-25">The estimate was delivered in Excel and PDF within the agreed turnaround. When the architect issued a revised drawing set, we updated the quantities and pricing at no extra cost so the client's budget stayed aligned with the latest design.</p>
                                <div class="sp-service-img mb-50"><img  src="assets/img/project/img15.jpg" alt="service image"></div>

                                <div class="sp-service-img"><img  src="assets/img/project/img16.jpg" alt="service image"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service end -->

    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
