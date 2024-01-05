<!DOCTYPE html>
<html lang="en">
<?php include_once('include/head.php'); ?>

<body>
    <?php include_once('include/header.php'); ?>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Services</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Our Services</p>
                <h1 class="display-5 mb-4">We Provide Best Industrial Services</h1>
            </div>
            <div class="row gy-5 gx-4">
                <?php
                $i = 1;
                $servicesql = $conn->query("SELECT * FROM `services` ORDER BY `services`.`id` DESC");
                while ($servicedata = $servicesql->fetch_assoc()) {
                    ?>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="<?php echo '0.' . $i++; ?>s">
                        <div class="service-item">
                            <img style="height: 380px;" class="img-fluid" src="img/<?= $servicedata['image'] ?>" alt="">
                            <div class="service-img">
                                <img style="height: 110px; width: 110px;" class="img-fluid" src="img/<?= $servicedata['image'] ?>" alt="">
                            </div>
                            <div class="service-detail">
                                <div class="service-title">
                                    <hr class="w-25">
                                    <h3 class="mb-0">
                                        <?= ucwords($servicedata['service']) ?>
                                    </h3>
                                    <hr class="w-25">
                                </div>
                                <div class="service-text">
                                    <p class="text-white mb-0">
                                        <?= $servicedata['stext'] ?>
                                    </p>
                                </div>
                            </div>
                            <a class="btn btn-light" href="./services_details.php?service=<?= $servicedata['id'] ?>">Read
                                More</a>
                        </div>
                    </div>
                    <?php
                    $i++;
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <?php include_once('include/footer.php'); ?>
</body>

</html>