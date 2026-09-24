<?php
$page      = 'services';
$pageTitle = 'Services | Archsols';
$pageDesc  = 'Tile, flooring, drywall, paint, countertop and window treatment estimating, plus 3D rendering services.';
require __DIR__ . '/includes/header.php';
?>

        <main>
        <!-- hero start -->
        <section class="breadcrumb pos-rel" data-bg-color="#f3f1ed">
            <div class="container mxw-1650">
                <div class="breadcrumb__content">
                    <h2 class="breadcrumb__title">Archsols Services</h2>
                    <div class="breadcrumb__list_wrap ul_li_between">
                        <ul class="breadcrumb__list clearfix list-unstyled">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="far fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item">Services</li>
                        </ul>
                        <p class="breadcrumb__text">Accurate estimates, clear drawings, fast turnaround</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero end -->

        <!-- service start -->
        <section class="service pb-150 pt-135 pt-md-140">
            <div class="container mxw-1650">
                <div class="sp-service-top ul_li_between mb-70">
                    <div class="sec-title sec-title--page">
                        <h2 class="title">Our Services</h2>
                    </div>
                    <p class="content fs-20">Estimating, takeoff and 3D rendering services for contractors, builders and designers</p>
                </div>
                <div class="sp-service-wrap">
                    <?php foreach (SERVICES as $service): ?>
                    <div class="sp-service-item" id="<?= e($service['id']) ?>">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-12">
                                <div class="xb-item--left_content">
                                    <h2 class="xb-item--title border-effect"><a href="service.php#<?= e($service['id']) ?>"><?= e($service['name']) ?></a></h2>
                                    <p class="xb-item--content"><?= e($service['desc']) ?></p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="xb-item--right_content ul_li">
                                    <div class="xb-item--img">
                                        <a href="contact.php"><img src="assets/img/service/<?= e($service['img']) ?>" alt="<?= e($service['name']) ?>"></a>
                                    </div>
                                    <ul class="xb-item--list list-unstyled">
                                        <?php foreach ($service['list'] as $point): ?>
                                        <li><?= e($point) ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- service end -->

    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
