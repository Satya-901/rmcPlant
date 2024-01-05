<!DOCTYPE html>
<html lang="en">
<?php include_once('include/head.php'); ?>

<body>

    <?php
    include_once('include/header.php');
    $servicesql = "SELECT * FROM `services` WHERE id = '" . $_GET['service'] . "'";
    $serviceresult = $conn->query($servicesql);
    $servicedata = $serviceresult->fetch_assoc();
    ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">
                <?= $servicedata['service']; ?>
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Service Detail</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid" src="img/<?= $servicedata['image'] ?>">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Service Detail</p>
                    <h1 class="display-5 mb-4">
                        <?= $servicedata['service']; ?>
                    </h1>
                    <span class="mb-4">
                        <?= $servicedata['text']; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- service End -->

    <?php include_once('include/footer.php'); ?>
</body>

</html>