<!DOCTYPE html>
<html lang="en">
<?php include_once('include/head.php'); ?>

<body>

    <?php include_once('include/header.php'); ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">About Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <?php
        $aboutsql = "SELECT * FROM `about`";
        $aboutresult = $conn->query($aboutsql);
        $aboutdata = $aboutresult->fetch_assoc();
        ?>
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid" src="img/<?= $aboutdata['image'] ?>">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">About Us</p>
                    <h1 class="display-5 mb-4">
                        <?= $aboutdata['heading']; ?>
                    </h1>
                    <p class="mb-4">
                        <?= $aboutdata['stext']; ?>
                    </p>
                    <div class="row pt-2">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-envelope-open text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-2">Email us</p>
                                    <h5 class="mb-0">
                                        <?= $_SESSION['website_info']['email1'] ?>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-2">Call us</p>
                                    <h5 class="mb-0">+91
                                        <?= $_SESSION['website_info']['contact1'] ?>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid facts my-5 p-5">
        <?php
        $stripsql = "SELECT * FROM `strip`";
        $stripresult = $conn->query($stripsql);
        $stripdata = $stripresult->fetch_assoc();
        ?>
        <div class="row g-5">
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="text-center border p-5">
                    <i class="fa fa-certificate fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">
                        <?= $stripdata['text1'] ?>
                    </h1>
                    <span class="fs-5 fw-semi-bold text-white">
                        <?= $stripdata['heading1'] ?>
                    </span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="text-center border p-5">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">
                        <?= $stripdata['text2'] ?>
                    </h1>
                    <span class="fs-5 fw-semi-bold text-white">
                        <?= $stripdata['heading2'] ?>
                    </span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="text-center border p-5">
                    <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">
                        <?= $stripdata['text3'] ?>
                    </h1>
                    <span class="fs-5 fw-semi-bold text-white">
                        <?= $stripdata['heading3'] ?>
                    </span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="text-center border p-5">
                    <i class="fa fa-check-double fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">
                        <?= $stripdata['text4'] ?>
                    </h1>
                    <span class="fs-5 fw-semi-bold text-white">
                        <?= $stripdata['heading4'] ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Location Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Our Locations</p>
                <h1 class="display-5 mb-5">Across Uttar Pradesh</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div>
                        <p class="d-grid gap-1">
                            <a style="text-align: start; padding: 20px;" class="btn btn-primary" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false"
                                aria-controls="collapseExample">
                                Running Plants <span style="float:right;;"><i
                                        class="bi bi-arrow-down-circle-fill"></i></span>
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample1">
                            <div class="card card-body mb-2">
                                <?php
                                $location_query = "SELECT * FROM `location` WHERE type = '1'";
                                $location_result = mysqli_query($conn, $location_query);
                                while ($location = mysqli_fetch_assoc($location_result)) {
                                    ?>
                                    <p class="location-list">
                                        <?= $location['point'] ?>
                                    </p>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <div>
                        <p class="d-grid gap-1">
                            <a style="text-align: start; padding: 20px;" class="btn btn-primary" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false"
                                aria-controls="collapseExample">
                                Supply Location <span style="float:right;;"><i
                                        class="bi bi-arrow-down-circle-fill"></i></span>
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample2">
                            <div class="card card-body mb-2">
                                <?php
                                $type_query = "SELECT * FROM `location` WHERE type = '2'";
                                $type_result = mysqli_query($conn, $type_query);
                                while ($type = mysqli_fetch_assoc($type_result)) {
                                    ?>
                                    <p class="location-list">
                                        <?= $type['point'] ?>
                                    </p>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <div>
                        <p class="d-grid gap-1">
                            <a style="text-align: start; padding: 20px;" class="btn btn-primary" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false"
                                aria-controls="collapseExample">
                                Supply Location <span style="float:right;;"><i
                                        class="bi bi-arrow-down-circle-fill"></i></span>
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample3">
                            <div class="card card-body mb-2">
                                <?php
                                $data_query = "SELECT * FROM `location` WHERE type = '3'";
                                $data_result = mysqli_query($conn, $data_query);
                                while ($data = mysqli_fetch_assoc($data_result)) {
                                    ?>
                                    <p class="location-list">
                                        <?= $data['point'] ?>
                                    </p>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 ">
                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                        <img style="height: 250px; float: right;" class="img-fluid" src="img/map.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Location End -->


    <?php include_once('include/footer.php'); ?>
</body>

</html>