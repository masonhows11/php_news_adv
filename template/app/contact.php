<?php
    include_once BASE_PATH . "/template/app/layouts/header.php";
?>
<body>
    <!-- preloader area start -->
    <!-- <div class="preloader" id="preloader">
        <div class="preloader-inner">

        </div>
    </div> -->
    <!-- preloader area end -->
    <main class="main-section">
        <?php
            include_once BASE_PATH . "/template/app/partials/searchbar.php";
        ?>
        <div class="header-style-01">
            <?php
                include_once BASE_PATH . "/template/app/partials/topbar.php";
            ?>
            <?php
                include_once BASE_PATH . "/template/app/partials/navbar.php";
            ?>
        </div>
        <?php
            include_once BASE_PATH . "/template/app/partials/sidebar.php";
        ?>


        <!-- Cart area start Here -->
        <?php
            include_once BASE_PATH . "/template/app/partials/cart.php";
        ?>
        <!-- Cart area End Here -->

     
        <div class="breadcrumb-section" style="background-image: url(assets/img/section-img/about-us/about-bg.png);">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-wrap">
                            <div class="breadcrumb-content">
                                <ul class="page-list">
                                    <li><a href="<?php echo url('/')?>"><i class="fas fa-home"></i>Home</a></li>
                                    <li><a href="<?php echo url('contact_us')?>">Contact</a></li>
                                </ul>
                            </div>
                            <div class="advertise-banner">
                                <img src="assets/img/section-img/advertise/advertise-bg-01.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     



        <!-- Contact Section Start Here -->
        <div class="contact-section-area mt-5">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-icon-box">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="content">
                                <span>7 Green Lake Street</span>
                                <span>Crawfordsville, IN 47933</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-icon-box active">
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="content">
                                <span>+11 0369 569 032</span>
                                <span>+11 0775 541 076</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-icon-box">
                            <div class="icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="content">
                                <span>info@example.com</span>
                                <span>Support@example.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section End Here -->

        <!-- Contact Form Section Start Here -->
        <div class="contact-form-section">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="request.html" class="contact-page-form" novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Enter Name <span>*</span></label>
                                        <input type="text" name="fname" class="form-control" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Your Email <span>*</span></label>
                                        <input type="email" name="lname" class="form-control" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Your Phone <span>*</span></label>
                                        <input type="tel" name="lname" class="form-control" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Your Subject <span>*</span></label>
                                        <input type="text" name="lname" class="form-control" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Write Message</label>
                                        <textarea class="form-control text-area"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap">
                                <a href="#" class="boxed-btn submit-btn">Send Now</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Form Section End Here -->

        <!-- Newslatter Section Start Here -->
        <div class="news-latter-section style-02 bg-image" style="background-image: url(assets/img/section-img/cta/cta-bg.png);">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="subscibe-wrapper">
                            <div class="content">
                                <div class="title">Sign Up for Our Newsletter <br> For Daily Update</div>
                            </div>
                            <div class="subscribe-form">
                                <div class="form-group">
                                    <input type="text" name="fname" placeholder="Enter Email" class="form-control" required="" aria-required="true">
                                </div>
                                <div class="btn-wrap">
                                    <a href="service-single.html" class="boxed-btn subscribe-btn">subscribe now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newslatter Section End Here -->
    </main>
    <!-- Main Section End Here -->

    <!-- footer area start -->
<?php
    include_once BASE_PATH . "/template/app/layouts/footer.php";
?>
