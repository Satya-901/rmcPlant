<!DOCTYPE html>
<html lang="en">
<?php include_once('include/head.php'); ?>

<body>
    <?php include_once('include/header.php'); ?>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight"> Gallery </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Gallery </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2"> Gallery</p>
                <!-- <h1 class="display-5 mb-4">We Provide Best Industrial Product</h1> -->
            </div>
            <div class="row gy-5 gx-4">
                <?php
                $qry = $conn->query("SELECT * FROM `gallery`");
                while ($row = $qry->fetch_assoc()) {
                    ?>
                    <div class="col-md-4">
                        <img src="img/<?= $row['image'] ?>" class="img-fluid" alt="...">
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <?php include_once('include/footer.php'); ?>
</body>

</html>