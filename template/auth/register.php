<?php
include_once(BASE_PATH."/template/app/layouts/header.php");
?>
<body>
<!--<div class="preloader" id="preloader">-->
<!--    <div class="preloader-inner">-->
<!---->
<!--    </div>-->
<!--</div>-->
<main class="main-section">
    <?php
    include_once(BASE_PATH."/template/app/layouts/navbar.php");
    include_once(BASE_PATH."/template/app/layouts/cart.php");
    include_once(BASE_PATH."/template/app/layouts/sidebar.php");
    ?>
    <div class="breadcrumb-section" style="background-image: url(../../public/front_assets/img/section-img/about-us/about-bg.png);">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-wrap">
                        <div class="breadcrumb-content">
                            <ul class="page-list">
                                <li><a href="index.html"><i class="fas fa-home"></i>Home</a></li>
                                <li><a href="signup.html">Sign up</a></li>
                            </ul>
                        </div>
                        <div class="advertise-banner">
                            <img src="../../public/front_assets/img/section-img/advertise/advertise-bg-01.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="signup-section-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form action="#" class="contact-page-form signup">
                        <h4 class="title">Sign Up</h4>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>User Name <span>*</span></label>
                                    <input type="text" name="lname" class="form-control" required="" aria-required="true">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Email Address <span>*</span></label>
                                    <input type="text" name="lname" class="form-control" required="" aria-required="true">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Password <span>*</span></label>
                                    <input type="password" name="fname" class="form-control" required="" aria-required="true">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Re-Enter Password  <span>*</span></label>
                                    <input type="password" name="fname" class="form-control" required="" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrap">
                            <a href="#" class="boxed-btn submit-btn">Login Up</a>
                        </div>
                    </form>
                    <p>Already have an account? <a href="login.html">Login In</a></p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
include_once(BASE_PATH."/template/app/layouts/footer.php");
?>
