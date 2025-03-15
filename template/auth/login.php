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
                                <li><a href="index.html"><i class="fas fa-home"></i>Home</a></li>
                                <li><a href="login.html">Log in</a></li>
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

    <section class="login-section-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form action="#" class="contact-page-form login">
                        <h4 class="title">Login In</h4>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Enter Adress <span>*</span></label>
                                    <input type="email" name="lname" class="form-control" required="" aria-required="true">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Password <span>*</span></label>
                                    <input type="password" name="fname" class="form-control" required="" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="radio-wrapper">
                            <div>
                                <input type="radio" id="male" name="gender">
                                <label for="male">Remember Me</label>
                            </div>
                            <p>Forgot your password? </p>
                        </div>
                        <div class="btn-wrap">
                            <a href="#" class="boxed-btn submit-btn">Login In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
include_once(BASE_PATH."/template/app/layouts/footer.php");
?>
