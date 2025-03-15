<?php
include_once(BASE_PATH."/template/app/layouts/header.php");
?>
<body>
<main class="main-section">
    <div class="breadcrumb-section" style="background-image: url(../../public/front_assets/img/section-img/about-us/about-bg.png);">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-wrap">
                        <div class="breadcrumb-content">
                            <ul class="page-list">
                                <li><a href="<?= url('/') ?>"><i class="fas fa-home"></i>Home</a></li>
                                <li><a href="<?= url('register') ?>">Sign up</a></li>
                            </ul>
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
                    <form action="<?= url('register/store') ?>" method="post" class="contact-page-form signup">
                        <h4 class="title">Sign Up</h4>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>User Name <span>*</span></label>
                                    <input type="text" name="name" class="form-control"  aria-required="true">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Email Address <span>*</span></label>
                                    <input type="text" name="email" class="form-control"  aria-required="true">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Password <span>*</span></label>
                                    <input type="password" name="password" class="form-control" aria-required="true">
                                </div>
                            </div>
                           <!-- <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Re-Enter Password  <span>*</span></label>
                                    <input type="password" name="fname" class="form-control" required="" aria-required="true">
                                </div>
                            </div>-->
                        </div>
                        <div class="btn-wrap">
                            <button type="submit"  class="boxed-btn submit-btn">Sign Up</button>
                        </div>
                    </form>
                    <p>Already have an account? <a href="<?= url('login') ?>">Login In</a></p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
include_once(BASE_PATH."/template/app/layouts/footer.php");
?>
