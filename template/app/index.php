<?php
$title = $setting['title'];
$description = $setting['description'] ?? '';
$keywords = $setting['keywords'] ? str_replace('-',',',$setting['keywords']) : '' ;
$icon = $setting['icon'];
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

    <section class="latest-news-section style-02">
        <div class="container custom-container-02">
            <div class="row">

                <!-- Don't Miss section -->
                <div class="col-lg-3 col-md-6">
                    <div class="top-sticky-wrapper">
                        <div class="theme-heading-title">
                            <div class="title">Don't Miss</div>
                        </div>
                        <!-- Image Box Items Start -->
                        <div class="header-image-box-item">
                            <div class="thumbnail style-01">
                                <img src="../../public/front_assets/img/section-img/recent/recent-08.png" alt="">
                            </div>
                            <div class="content">
                                <span class="tag-02">fashion</span>
                                <a href="business-02.html"><h4 class="title style-01">The Surprising Ret urn of a Forgotten</h4></a>
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

                <!-- Latest News section-->
                <div class="col-lg-6 col-md-6">
                    <div class="theme-heading-title">
                        <div class="title">Latest News</div>
                    </div>
                    <div class="image-box-item-four style-01">
                        <div class="thumbnail">
                            <img src="../../public/front_assets/img/section-img/news/news-08.png" alt="">
                        </div>
                        <div class="content ml-xl-4 ml-sm-6">
                            <span class="tag-02">LIFE STYLE</span>
                            <a href="business-02.html"><h4 class="title">Lexi Daken’s family 1 year later and how the N.B. teen</h4></a>
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
                            <p>Anthony Rotolo, a professor from Syracuse University is offering the. Ahen an unknown</p>
                            <div class="btn-wrap">
                                <a href="service-single.html" class="boxed-btn news-btn">
                                    Read More
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Top Stories section -->
                <div class="col-lg-3">
                    <div class="top-sticky-wrapper">
                        <div class="theme-heading-title">
                            <div class="title">Top Stories</div>
                        </div>
                        <!-- Top Story Slider Start -->
                        <div class="top-story-slider-wrap">
                            <div class="top-story-slider">
                                <div class="blog-grid-item-01 margin-bottom-35">
                                    <div class="thumb">
                                        <img src="../../public/front_assets/img/section-img/news/news-15.png" alt="">
                                    </div>
                                    <span class="tag style-01">politics</span>
                                    <div class="content">
                                        <a href="blog-single.html"><h4 class="title">If you went round the world which places could</h4></a>
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
                                <div class="blog-grid-item-01 margin-bottom-35">
                                    <div class="thumb">
                                        <img src="../../public/front_assets/img/section-img/news/story-slider.png" alt="">
                                    </div>
                                    <span class="tag style-01">politics</span>
                                    <div class="content">
                                        <a href="blog-single.html"><h4 class="title">If you went round the world which places could</h4></a>
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
                                <div class="blog-grid-item-01 margin-bottom-35">
                                    <div class="thumb">
                                        <img src="../../public/front_assets/img/section-img/news/top-story-slider-two.png" alt="">
                                    </div>
                                    <span class="tag style-01">politics</span>
                                    <div class="content">
                                        <a href="blog-single.html"><h4 class="title">If you went round the world which places could</h4></a>
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
                        <!-- Top Story Slider End -->
                        <!-- Contact Info item-->
                        <div class="contact-info-wrapper">
                            <ul class="contact_info_list">
                                <li class="single-info-item">
                                    <div class="icon">
                                        <i class="fab fa-facebook-square"></i>
                                    </div>
                                    <div class="details">
                                        <p><span>1250M +</span>Followers</p>
                                    </div>
                                </li>
                                <li class="single-info-item style-01">
                                    <div class="icon">
                                        <i class="fab fa-twitter-square"></i>
                                    </div>
                                    <div class="details">
                                        <p><span>1250M +</span>Followers</p>
                                    </div>
                                </li>
                                <li class="single-info-item style-02">
                                    <div class="icon">
                                        <i class="fab fa-youtube-square"></i>
                                    </div>
                                    <div class="details">
                                        <p><span>1250M +</span>Followers</p>
                                    </div>
                                </li>
                                <li class="single-info-item style-03">
                                    <div class="icon">
                                        <i class="fab fa-linkedin"></i>
                                    </div>
                                    <div class="details">
                                        <p><span>1250M +</span>Followers</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Contact Info item-->
                        <!-- Image Box Items Start -->
                        <div class="header-image-box-item style-01">
                            <div class="thumbnail style-01">
                                <img src="../../public/front_assets/img/section-img/recent/recent-11.png" alt="">
                            </div>
                            <div class="content ml-xl-4 ml-sm-6">
                                <span class="tag-02">fashion</span>
                                <a href="business-02.html"><h4 class="title style-01">The Surprising Ret urn of a Forgotten</h4></a>
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
                        <div class="header-image-box-item style-01">
                            <div class="thumbnail style-01">
                                <img src="../../public/front_assets/img/section-img/recent/recent-12.png" alt="">
                            </div>
                            <div class="content ml-xl-4 ml-sm-6">
                                <span class="tag-02">food</span>
                                <a href="business-02.html"><h4 class="title style-01">However Distant She quite eve</h4></a>
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
                        <div class="header-image-box-item style-01">
                            <div class="thumbnail style-01">
                                <img src="../../public/front_assets/img/section-img/recent/recent-13.png" alt="">
                            </div>
                            <div class="content ml-xl-4 ml-sm-6">
                                <span class="tag-02">life style</span>
                                <a href="business-02.html"><h4 class="title style-01">Insipidity Sufficien dispatched</h4></a>
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
                        <!-- Image Box Items End -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once(BASE_PATH.'/template/app/partials/btm_info.php') ?>

</main>



<?php
include_once(BASE_PATH."/template/app/layouts/footer.php");
?>

