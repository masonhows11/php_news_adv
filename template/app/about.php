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
            <?= print_r($data) ?>
            <div class="container custom-container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-wrap">
                            <div class="breadcrumb-content">
                                <ul class="page-list">
                                    <li><a href="<?php echo url('/')?>"><i class="fas fa-home"></i>Home</a></li>
                                    <li><a href="<?php echo url('about_us')?>">About Us</a></li>
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

        <section class="author-section-area">
            <img src="assets/img/section-img/about-us/about-shape.png" class="about-shape" alt="">
            <div class="container custom-container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="thumbnail style-01">
                            <img src="assets/img/section-img/about-us/about.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="author-content-wrap">
                            <div class="author-details">
                                <h6 class="designation">About us</h6>
                                <h4 class="author-name">We’re Leading In The Market</h4>
                            </div>
                            <div class="about">
                                <p>We woke reasonably late following the feast and free flowing wine the night before. After gathering ourselves and our packs, we headed down to our homestay family’s small dining room for breakfast. Refreshingly, what was.</p>
                            </div>
                        </div>
                        <div class="list-items">
                            <ul class="list-parent">
                                <li class="list-child"><img src="assets/img/section-img/about-us/arrow.svg" alt=""> Pasting their cartoon to form over bags</li>
                                <li class="list-child"><img src="assets/img/section-img/about-us/arrow.svg" alt=""> Clothes can transform your mood</li>
                                <li class="list-child"><img src="assets/img/section-img/about-us/arrow.svg" alt=""> I think I’d go mad if I didn’t have a place</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Author Section End Here -->



        <!-- Team Section Start Here -->
      <!--  <section class="team-section-area">
            <div class="container custom-container">
                <div class="theme-heading-title desktop-center">
                    <h6 class="subtitle">Our Team</h6>
                    <h4 class="title">Meet Our Team</h4>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="team-single-item">
                            <div class="thumb">
                                <img src="assets/img/section-img/team/team-01.png" alt="">
                                <ul class="social-icon style-01">
                                    <li><a href="#" class="style-01" tabindex="0"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="style-01" tabindex="0"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="style-01" tabindex="0"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#" class="style-01" tabindex="0"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>

                            <div class="content">
                                <a href="#" tabindex="0"><h2 class="title">Kelvine Pitterson</h2></a>
                                <span>Sr. Marketer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-single-item">
                            <div class="thumb">
                                <img src="assets/img/section-img/team/team-02.png" alt="">
                                <ul class="social-icon style-01">
                                    <li><a href="#" class="style-01" tabindex="0"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="style-01" tabindex="0"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="style-01" tabindex="0"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#" class="style-01" tabindex="0"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>

                            <div class="content">
                                <a href="#" tabindex="0"><h2 class="title">Abhisek Roy</h2></a>
                                <span>News Editor</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-single-item">
                            <div class="thumb">
                                <img src="assets/img/section-img/team/team-03.png" alt="">
                                <ul class="social-icon style-01">
                                    <li><a href="#" class="style-01" tabindex="0"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="style-01" tabindex="0"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="style-01" tabindex="0"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#" class="style-01" tabindex="0"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>

                            <div class="content">
                                <a href="#" tabindex="0"><h2 class="title">Rashma Mandan</h2></a>
                                <span>News Presentar</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- Team Section End Here -->

        <!-- Newslatter Section Start Here -->
       <!-- <div class="news-latter-section style-01 bg-image" style="background-image: url(assets/img/section-img/cta/cta-bg.png);">
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
        </div>-->
        <!-- Newslatter Section End Here -->
    </main>
    <!-- Main Section End Here -->

    <!-- footer area start -->
<?php
    include_once BASE_PATH . "/template/app/layouts/footer.php";
?>
