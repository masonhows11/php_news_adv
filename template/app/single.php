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
                            <?php if($post['image'] != null): ?>
                                <img src="<?= assets($post['image']) ?>" alt="post-image">
                            <?php else: ?>
                                <img src="<?= assets('/public/front_assets/img/section-img/business/business-details-01.png') ?>" alt="post-image">
                            <?php endif; ?>

                        </div>
                        <div class="content">
                            <a href="#"><h4 class="title"><?= $post['body'] ?></h4></a>
                            <ul class="post-meta">
                                <li>
                                    <a href="#">By <span><?= $post['user_name'] ?></span></a>
                                </li>
                                <li>
                                        <span class="posted-on">
                                            <a href="#" rel="bookmark">
                                                <span class="entry-date published updated"><i class="fas fa-calendar-alt"></i><?= jdate($post['created_at'])->format('%B %d, %Y') ?></span>
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
                    <?php include_once(BASE_PATH . '/template/app/post/tags.php') ?>

                    <!-- author -->
                    <div class="testimonial-items">
                        <div class="thumbnail">
                            <img src="<?= assets('/public/front_assets/img/section-img/business/business-client.png') ?>"
                                 alt="author-image">
                        </div>
                        <div class="content">
                            <h4 class="title"><?= $post['user_name'] ?></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias asperiores consequuntur corporis dolor dolores excepturi, impedit incidunt ipsam itaque laborum modi molestiae officiis porro praesentium, quos ullam ut veniam veritatis.</p>
                        </div>
                    </div>
                    <!-- related-post -->
                    <?php include_once(BASE_PATH . '/template/app/post/related_posts.php') ?>
                    <!--  comments -->
                    <?php include_once(BASE_PATH . '/template/app/post/comments.php') ?>
                    <!-- write comments -->
                    <?php include_once(BASE_PATH . '/template/app/post/write_comment.php') ?>
                </div>
                <!-- right sidebar in single page -->
                <?php include_once(BASE_PATH . '/template/app/post/right_sidebar_single.php') ?>
            </div>
        </div>
    </section>
    <!-- end main content -->
</main>
<!-- Main Section End Here -->

<?php
include_once BASE_PATH . "/template/app/layouts/footer.php";
?>

