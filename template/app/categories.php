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

    <!-- Cart area start Here -->
    <?php
    include_once BASE_PATH . "/template/app/partials/cart.php";
    ?>
    <!-- Cart area End Here -->


    <div class="breadcrumb-section" style="background-image: url('<?php echo assets('public/front_assets/img/section-img/about-us/about-bg.png') ?>');">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-wrap">
                        <div class="breadcrumb-content">
                            <ul class="page-list">
                                <li><a href="<?php echo url('/')?>"><i class="fas fa-home"></i>Home</a></li>
                                <li><a href="<?php echo url('post/'.$post['id']) ?>"><?= $post['title'] ?></a></li>
                            </ul>
                        </div>
                        <!-- <div class="advertise-banner">
                             <img src="assets/img/section-img/advertise/advertise-bg-01.png" alt="">
                         </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- main content -->
    <section class="business-details-section">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- main article section -->
                    <div class="blog-grid-item-02 style-01 margin-bottom-30">
                        <div class="thumb">
                            <img src="assets/img/section-img/business/business-details-01.png" alt="">
                        </div>
                        <div class="content">
                            <a href="business-02.html"><h4 class="title">If you went round the world which places could Animal nation are struggling</h4></a>
                            <ul class="post-meta">
                                <li>
                                    <a href="#">By <span>Admin</span></a>
                                </li>
                                <li>
                                        <span class="posted-on">
                                            <a href="#" rel="bookmark">
                                                <span class="entry-date published updated"><i class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                            </a>
                                        </span>
                                </li>
                            </ul>
                        </div>
                        <div class="social-links">
                            <ul class="social-share">
                                <li><a href="#" class="facebook"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fab fa-twitter-square"></i></a></li>
                                <li><a href="#" class="youtube"><i class="fab fa-youtube-square"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--end main article section -->


                    <!-- tags -->
                    <div class="social-tags-wrapper">
                        <div class="tags">
                            <h4 class="title">Tags :</h4>
                            <a href="#">Business</a>
                            <a href="#">Corporate</a>
                            <a href="#">Food</a>
                        </div>
                        <div class="social-links">
                            <h4 class="title">Share This Post:</h4>
                            <ul class="social-share">
                                <li><a href="#" class="facebook"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fab fa-twitter-square"></i></a></li>
                                <li><a href="#" class="youtube"><i class="fab fa-youtube-square"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- author -->
                    <div class="testimonial-items">
                        <div class="thumbnail">
                            <img src="assets/img/section-img/business/business-clinet.png" alt="">
                        </div>
                        <div class="content">
                            <h4 class="title">Jenny Preston</h4>
                            <p>Mravel orem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galleyof typed scrambled it to make a type specimen book.</p>
                        </div>
                    </div>

                    <!-- related-post -->
                    <div class="related-post">
                        <div class="theme-heading-title">
                            <div class="title">You May Also Like</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-grid-item-01 margin-bottom-30">
                                    <div class="thumb">
                                        <img src="assets/img/section-img/news/news-22.png" alt="">
                                    </div>
                                    <span class="tag absolute">Products</span>
                                    <div class="content">
                                        <a href="business-02.html"><h4 class="title">Animal Nation Are Strugling To Save Their Wildlife</h4></a>
                                        <ul class="post-meta">
                                            <li>
                                                <a href="#">By <span>Admin</span></a>
                                            </li>
                                            <li>
                                                    <span class="posted-on">
                                                        <a href="#" rel="bookmark">
                                                            <span class="entry-date published updated"><i class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                                        </a>
                                                    </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-grid-item-01 margin-bottom-30">
                                    <div class="thumb">
                                        <img src="assets/img/section-img/news/news-23.png" alt="">
                                    </div>
                                    <span class="tag style-02 absolute">Business</span>
                                    <div class="content">
                                        <a href="business-02.html"><h4 class="title">Animal Nation Are Strugling To Save Their Wildlife</h4></a>
                                        <ul class="post-meta">
                                            <li>
                                                <a href="#">By <span>Admin</span></a>
                                            </li>
                                            <li>
                                                    <span class="posted-on">
                                                        <a href="#" rel="bookmark">
                                                            <span class="entry-date published updated"><i class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                                        </a>
                                                    </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- comments -->
                    <div class="comment-form-area">
                        <div class="theme-heading-title">
                            <div class="title">Leave a comment</div>
                        </div>
                        <form action="#" class="comment-form">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="fname" placeholder="Name" class="form-control" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="email" name="lname" placeholder="Email" class="form-control" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group textarea">
                                        <textarea class="form-control textarea" placeholder="Comments..."></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group custom-check">
                                        <input type="checkbox" id="html">
                                        <label for="html">I agree that my submitted data is being collected and stored. *</label>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap">
                                <a href="#" class="boxed-btn submit-btn">Post Comment</a>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- right sidebar in single page -->
                <?php include_once(BASE_PATH.'/template/app/partials/right_sidebar_single.php') ?>
            </div>
        </div>
    </section>
    <!-- end main content -->





</main>
<!-- Main Section End Here -->

<!-- footer area start -->
<?php
include_once BASE_PATH . "/template/app/layouts/footer.php";
?>

