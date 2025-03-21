<?php
include_once(BASE_PATH . "/template/app/layouts/header.php");
?>
<body>
<main class="main-section">

    <div class="breadcrumb-section"
         style="background-image: url(../../public/front_assets/img/section-img/about-us/about-bg.png);">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-wrap">
                        <div class="breadcrumb-content">
                            <ul class="page-list">
                                <li><a href="<?= url('/') ?>"><i class="fas fa-home"></i>Home</a></li>
                                <li><a href="<?= url('forgot_password') ?>">Forgot Password</a></li>
                            </ul>
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

                    <form action="<?= url('forgot_request') ?>" method="post" class="contact-page-form login">
                        <h4 class="title">Forgot Password</h4>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <?php
                                $messages = flashMessage('forgot_error');
                                if (!empty($messages)) : ?>
                                    <div class="mt-2 alert alert-warning text-center"
                                         style="font-weight:bold;font-size:1.5rem">
                                        <strong class="form-text text-dark">
                                            <?php echo $messages  ?>
                                        </strong>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Email<span>*</span></label>
                                    <input type="email" name="email" class="form-control" aria-required="true">
                                </div>
                            </div>

                        </div>

                        <div class="btn-wrap">
                            <button type="submit" class="boxed-btn submit-btn">send email</button>
                        </div>
                    </form>

                    <p class="text-center mt-4">If you don't have an account? <a href="<?= url('register') ?>">Sign
                            up</a></p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
include_once(BASE_PATH . "/template/app/layouts/footer.php");
?>

