<!-- Spinner Start -->
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-dark px-0">
    <div class="row g-0 d-none d-lg-flex">
        <div class="col-lg-6 ps-5 text-start">
            <div class="h-100 d-inline-flex align-items-center text-white">
                <span>Follow Us:</span>
                <a class="btn btn-link text-light" href="<?= $_SESSION['website_info']['fb_link'] ?>" target="_blank"><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-link text-light" href="<?= $_SESSION['website_info']['tw_link'] ?>" target="_blank"><i
                        class="fab fa-twitter"></i></a>
                <a class="btn btn-link text-light" href="<?= $_SESSION['website_info']['ig_link'] ?>" target="_blank"><i
                        class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-6 text-end">
            <div class="h-100 topbar-right d-inline-flex align-items-center text-white py-2 px-5">
                <span class="fs-5 fw-bold me-2"><i class="fa fa-phone-alt me-2"></i>Call Us:</span>
                <span class="fs-5 fw-bold">
                    <?= $_SESSION['website_info']['contact1'] ?>
                </span>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
    <a href="./" class="navbar-brand ps-5 me-0">
        <h1 class="text-white m-0">
            <?php
            if ($_SESSION['website_info']['logo'] == "") {
                echo $_SESSION['website_info']['website_name'];
            } else {
                echo '<img class="img-fluid" src="img/' . $_SESSION['website_info']['logo'] . '" alt="logo">';
            }
            ?>
        </h1>
    </a>
    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">

            <a href="./" class="nav-item nav-link <?php if ($page_name == '')
                echo 'active'; ?>">Home</a>

            <a href="about.php" class="nav-item nav-link <?php if ($page_name == 'about')
                echo 'active'; ?>">About</a>

            <div class="nav-item dropdown">
                <a href="services.php" data-bs-toggle="dropdown" class="nav-link dropdown-toggle <?php if ($page_name == 'services' || $page_name == 'services_details')
                    echo 'active'; ?>">Services</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="services.php" class="dropdown-item">All Services</a>
                    <?php
                    $qry = $conn->query("SELECT * FROM `services`");
                    while ($row = $qry->fetch_assoc()) {
                        ?>
                        <a href="services_details.php?&service=<?= $row['id'] ?>" class="dropdown-item">
                            <?= ucwords($row['service']) ?>
                        </a>
                        <?php
                    }
                    ?>
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="services.php" data-bs-toggle="dropdown" class="nav-link dropdown-toggle <?php if ($page_name == 'product' || $page_name == 'product_details')
                    echo 'active'; ?>">products</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="product.php" class="dropdown-item">All products</a>
                    <?php
                    $productqry = $conn->query("SELECT * FROM `product`");
                    while ($productrow = $productqry->fetch_assoc()) {
                        ?>
                        <a href="product_details.php?product=<?= $productrow['id'] ?>" class="dropdown-item">
                            <?= ucwords($productrow['name']) ?>
                        </a>
                        <?php
                    }
                    ?>
                </div>
            </div>

            <a href="gallery.php" class="nav-item nav-link <?php if ($page_name == 'gallery')
                echo 'active'; ?>">Gallery</a>

            <a href="contact.php" class="nav-item nav-link <?php if ($current_page == 'home')
                echo 'active'; ?>">Contact</a>

        </div>
        <!-- <a href="" class="btn btn-primary px-3 d-none d-lg-block">Get A Quote</a> -->
    </div>
</nav>
<!-- Navbar End -->