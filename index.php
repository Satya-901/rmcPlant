<!DOCTYPE html>
<html lang="en">

<?php

include_once('include/head.php'); ?>
<style>
    .location-list {
        display: block;
        margin-bottom: 5px;
        padding: 0;
        text-align: left;
        /* color: #B0B9AE; */
        font-weight: normal;
        text-transform: capitalize;
        transition: .3s;
    }

    .location-list::before {
        position: relative;
        content: "\f105";
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        margin-right: 10px;
    }
</style>

<body>
    <?php include_once('include/header.php'); ?>

    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div style="height: 560px;" class="carousel-item active">
                    <video class="w-100" autoplay loop muted>
                        <source src="video/<?= $_SESSION['website_info']['video'] ?>" type="video/mp4">
                    </video>
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">25 Years
                                        of Working Experience</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Industrial Solution
                                        Providing Company</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInRight">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


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
                                    <h5 class="mb-0">
                                        +91
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


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <?php
        $visionsql = "SELECT * FROM `vision`";
        $visionresult = $conn->query($visionsql);
        $visiondata = $visionresult->fetch_assoc();
        ?>
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100" src="img/feature.png" alt="">
                        <span
                            class="position-absolute top-50 start-100 translate-middle bg-white rounded-circle d-none d-lg-block"
                            style="width: 120px; height: 120px;"></span>
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Why Choosing Us!</p>
                    <h1 class="display-5 mb-4">Few Reasons Why People Choosing Us!</h1>
                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>
                                        <?= $visiondata['heading1'] ?>
                                    </h4>
                                    <span>
                                        <?= $visiondata['text1'] ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>
                                        <?= $visiondata['heading2'] ?>
                                    </h4>
                                    <span>
                                        <?= $visiondata['text2'] ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>
                                        <?= $visiondata['heading3'] ?>
                                    </h4>
                                    <span>
                                        <?= $visiondata['text3'] ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Plan Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div style="overflow: hidden;" class="modal-body">
                    <video height="445" controls src="video/<?= $_SESSION['website_info']['video'] ?>"></video>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


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
                $servicesql = $conn->query("SELECT * FROM `services` ORDER BY `services`.`id` DESC LIMIT 3");
                while ($servicedata = $servicesql->fetch_assoc()) {
                    ?>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="<?php echo '0.' . $i++; ?>s">
                        <div class="service-item">
                            <img style="height: 380px;" class="img-fluid" src="img/<?= $servicedata['image'] ?>" alt="">
                            <div class="service-img">
                                <img style="height: 110px; width: 110px;" class="img-fluid"
                                    src="img/<?= $servicedata['image'] ?>" alt="">
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


    <!-- Product Start -->
    <div class="container-fluid bg-dark pt-5 my-5 px-0">
        <div class="text-center mx-auto mt-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="fw-medium text-uppercase text-primary mb-2">Our Product</p>
            <h1 class="display-5 text-white mb-5">See What We Have Completed Recently</h1>
        </div>
        <div class="owl-carousel project-carousel wow fadeIn" data-wow-delay="0.1s">
            <?php
            $projectsql = $conn->query("SELECT * FROM `projects` ORDER BY `projects`.`id` DESC");
            while ($projectdata = $projectsql->fetch_assoc()) {
                ?>
                <a class="project-item" href="">
                    <img style="height: 380px; width: 304px;" class="img-fluid" src="img/<?= $projectdata['image'] ?>"
                        alt="<?= $projectdata['image'] ?>">
                    <div class="project-title">
                        <h5 class="text-primary mb-0">
                            <?= ucwords($projectdata['name']) ?>
                        </h5>
                    </div>
                </a>
                <?php
            }
            ?>
        </div>
    </div>
    <!-- Project End -->

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


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Testimonial</p>
                <h1 class="display-5 mb-5">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <?php
                $qry = $conn->query("SELECT * FROM `testimonial`");
                while ($row = $qry->fetch_assoc()) {
                    ?>
                    <div class="testimonial-item text-center">
                        <div class="testimonial-img position-relative">
                            <img class="img-fluid rounded-circle mx-auto mb-5" src="img/<?= $row['image'] ?>">
                            <div class=" btn-square bg-primary rounded-circle">
                                <i class="fa fa-quote-left text-white"></i>
                            </div>
                        </div>
                        <div class="testimonial-text text-center rounded p-4">
                            <p>
                                <?= $row['text'] ?>
                            </p>
                            <h5 class="mb-1">
                                <?= $row['name'] ?>
                            </h5>
                            <span class="fst-italic">
                                <?= date('F d, Y', strtotime($row['date'])) ?>
                            </span>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <?php include_once('include/footer.php'); ?>
</body>

</html>