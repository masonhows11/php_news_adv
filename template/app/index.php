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
    ?>
    <div class="header-style-02">
        <div class="container custom-container-03">
            <div class="header-main-wrapper">

                <!-- sidebar -->
                <?php
                include_once(BASE_PATH."/template/app/layouts/sidebar.php");
                ?>
                <!--end sidebar -->
                <div class="main-content">
                    <div class="image-box-wrapper">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="image-box-item-three">
                                    <div class="thumbnail">
                                        <img src="../../public/front_assets/img/section-img/recent/recent-21.png" alt="">
                                    </div>
                                    <div class="content style-01">
                                        <span class="tag-02">life style</span>
                                        <a href="business-02.html"><h4 class="title">Winterized motorho me turns family <span>Moon They</span></h4></a>
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
                            <div class="col-lg-4 col-md-6">
                                <div class="image-box-item-three">
                                    <div class="thumbnail">
                                        <img src="../../public/front_assets/img/section-img/recent/recent-22.png" alt="">
                                    </div>
                                    <div class="content style-01">
                                        <span class="tag-02">fashion</span>
                                        <a href="business-02.html"><h4 class="title">Moon They Land Main Close If <span>Winterized</span></h4></a>
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
                            <div class="col-lg-4 col-md-6">
                                <div class="image-box-item-three">
                                    <div class="thumbnail">
                                        <img src="../../public/front_assets/img/section-img/recent/recent-23.png" alt="">
                                    </div>
                                    <div class="content style-01">
                                        <span class="tag-02">food</span>
                                        <a href="business-02.html"><h4 class="title">Mortgage Rundow Winterized <span>The countdown</span></h4></a>
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
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="image-box-item-five bg-image" style="background-image: url(../../public/front_assets/img/header/header-bg-02.png);">
                                <div class="content">
                                    <span class="tag-02 style-01">LIFE STYLE</span>
                                    <h4 class="title"><a href="business-02.html">Sanctions against Russia benefit Canadian <br> farmers and commodity producers</a></h4>
                                    <ul class="post-meta">
                                        <li class="style-01">
                                            <a href="#">By <span class="white">Admin</span></a>
                                        </li>
                                        <li>
                                                <span class="posted-on">
                                                    <a href="#" rel="bookmark">
                                                        <span class="entry-date style-01 published updated"><i class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                                    </a>
                                                </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image-box-item-five bg-image" style="background-image: url(../../public/front_assets/img/header/header-bg-03.png);">
                                <div class="content">
                                    <span class="tag-02 style-01">LIFE STYLE</span>
                                    <h4 class="title"><a href="business-02.html">Sanctions against Russia benefit Canadian <br> farmers and commodity producers</a></h4>
                                    <ul class="post-meta">
                                        <li class="style-01">
                                            <a href="#">By <span class="white">Admin</span></a>
                                        </li>
                                        <li>
                                                <span class="posted-on">
                                                    <a href="#" rel="bookmark">
                                                        <span class="entry-date style-01 published updated"><i class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                                    </a>
                                                </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news-slider-wrapper">
                        <div class="theme-heading-title">
                            <div class="title">Hot Categories</div>
                        </div>
                        <div class="news-slider-two">
                            <div class="image-box-item-six bg-image" style="background-image: url(../../public/front_assets/img/section-img/hot-catagory/hot-catagory-01.png);">
                                <div class="content">
                                    <a href="business-02.html"><h4 class="title">food</h4></a>
                                </div>
                                <span class="box-number">03</span>
                            </div>
                            <div class="image-box-item-six bg-image" style="background-image: url(../../public/front_assets/img/section-img/hot-catagory/hot-catagory-02.png);">
                                <div class="content">
                                    <a href="business-02.html"><h4 class="title">life style</h4></a>
                                </div>
                                <span class="box-number">05</span>
                            </div>
                            <div class="image-box-item-six bg-image" style="background-image: url(../../public/front_assets/img/section-img/hot-catagory/hot-catagory-03.png);">
                                <div class="content">
                                    <a href="business-02.html"><h4 class="title">Business</h4></a>
                                </div>
                                <span class="box-number">07</span>
                            </div>
                            <div class="image-box-item-six bg-image" style="background-image: url(../../public/front_assets/img/section-img/hot-catagory/hot-catagory-03.png);">
                                <div class="content">
                                    <a href="business-02.html"><h4 class="title">tech</h4></a>
                                </div>
                                <span class="box-number">09</span>
                            </div>
                        </div>
                    </div>
                    <div class="whats-new-section">
                        <div class="new-wrapper">
                            <div class="theme-heading-title">
                                <div class="title">What’s New</div>
                            </div>
                            <ul class="nav nav-pills">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" data-bs-toggle="pill" data-bs-target="#travel">Travel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="pill" data-bs-target="#politics">Politics</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="pill" data-bs-target="#business">Business</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="pill" data-bs-target="#health">Health</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="travel">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="blog-grid-item-01 margin-bottom-30">
                                            <div class="thumb">
                                                <img src="../../public/front_assets/img/section-img/gallery/instra-big-04.png" alt="">
                                            </div>
                                            <span class="tag style-02">Health</span>
                                            <div class="content">
                                                <a href="business-02.html"><h4 class="title">How childhood viral infections may year 2021</h4></a>
                                                <p>Anthony Rotolo, a professor from Syracuse University is offering the. Ahen an unknown</p>
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
                                    <div class="col-lg-4 col-md-6">
                                        <div class="blog-grid-item-01 margin-bottom-30">
                                            <div class="thumb">
                                                <img src="../../public/front_assets/img/section-img/gallery/instra-big-05.png" alt="">
                                            </div>
                                            <span class="tag">Products</span>
                                            <div class="content">
                                                <a href="business-02.html"><h4 class="title">Animal Nation Are Strugling To Save Their Wildlife</h4></a>
                                                <p>Anthony Rotolo, a professor from Syracuse University is offering the. Ahen an unknown</p>
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
                                    <div class="col-lg-4 col-md-6">
                                        <div class="blog-grid-item-01 margin-bottom-30">
                                            <div class="thumb">
                                                <img src="../../public/front_assets/img/section-img/gallery/instra-big-06.png" alt="">
                                            </div>
                                            <span class="tag style-01">Politics</span>
                                            <div class="content">
                                                <a href="business-02.html"><h4 class="title">If you went round the world which places could</h4></a>
                                                <p>Anthony Rotolo, a professor from Syracuse University is offering the. Ahen an unknown</p>
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
                            <div class="tab-pane fade" id="politics">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="blog-grid-item-01 margin-bottom-30">
                                            <div class="thumb">
                                                <img src="../../public/front_assets/img/section-img/gallery/instra-big-06.png" alt="">
                                            </div>
                                            <span class="tag">Products</span>
                                            <div class="content">
                                                <a href="business-02.html"><h4 class="title">Animal Nation Are Strugling To Save Their Wildlife</h4></a>
                                                <p>Anthony Rotolo, a professor from Syracuse University is offering the. Ahen an unknown</p>
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
                                    <div class="col-lg-4 col-md-6">
                                        <div class="blog-grid-item-01 margin-bottom-30">
                                            <div class="thumb">
                                                <img src="../../public/front_assets/img/section-img/gallery/instra-big-04.png" alt="">
                                            </div>
                                            <span class="tag style-02">Health</span>
                                            <div class="content">
                                                <a href="business-02.html"><h4 class="title">How childhood viral infections may year 2021</h4></a>
                                                <p>Anthony Rotolo, a professor from Syracuse University is offering the. Ahen an unknown</p>
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
                                    <div class="col-lg-4 col-md-6">
                                        <div class="blog-grid-item-01 margin-bottom-30">
                                            <div class="thumb">
                                                <img src="../../public/front_assets/img/section-img/gallery/instra-big-05.png" alt="">
                                            </div>
                                            <span class="tag style-01">Politics</span>
                                            <div class="content">
                                                <a href="business-02.html"><h4 class="title">If you went round the world which places could</h4></a>
                                                <p>Anthony Rotolo, a professor from Syracuse University is offering the. Ahen an unknown</p>
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
                            <div class="tab-pane fade" id="business">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="blog-grid-item-01 margin-bottom-30">
                                            <div class="thumb">
                                                <img src="../../public/front_assets/img/section-img/gallery/instra-big-04.png" alt="">
                                            </div>
                                            <span class="tag">Products</span>
                                            <div class="content">
                                                <a href="business-02.html"><h4 class="title">Animal Nation Are Strugling To Save Their Wildlife</h4></a>
                                                <p>Anthony Rotolo, a professor from Syracuse University is offering the. Ahen an unknown</p>
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
                                    <div class="col-lg-4 col-md-6">
                                        <div class="blog-grid-item-01 margin-bottom-30">
                                            <div class="thumb">
                                                <img src="../../public/front_assets/img/section-img/gallery/instra-big-06.png" alt="">
                                            </div>
                                            <span class="tag style-01">Politics</span>
                                            <div class="content">
                                                <a href="business-02.html"><h4 class="title">If you went round the world which places could</h4></a>
                                                <p>Anthony Rotolo, a professor from Syracuse University is offering the. Ahen an unknown</p>
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
                                    <div class="col-lg-4 col-md-6">
                                        <div class="blog-grid-item-01 margin-bottom-30">
                                            <div class="thumb">
                                                <img src="../../public/front_assets/img/section-img/gallery/instra-big-05.png" alt="">
                                            </div>
                                            <span class="tag style-02">Health</span>
                                            <div class="content">
                                                <a href="business-02.html"><h4 class="title">How childhood viral infections may year 2021</h4></a>
                                                <p>Anthony Rotolo, a professor from Syracuse University is offering the. Ahen an unknown</p>
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
                            <div class="tab-pane fade" id="health">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="blog-grid-item-01 margin-bottom-30">
                                            <div class="thumb">
                                                <img src="../../public/front_assets/img/section-img/gallery/instra-big-06.png" alt="">
                                            </div>
                                            <span class="tag style-02">Health</span>
                                            <div class="content">
                                                <a href="business-02.html"><h4 class="title">How childhood viral infections may year 2021</h4></a>
                                                <p>Anthony Rotolo, a professor from Syracuse University is offering the. Ahen an unknown</p>
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
                                    <div class="col-lg-4 col-md-6">
                                        <div class="blog-grid-item-01 margin-bottom-30">
                                            <div class="thumb">
                                                <img src="../../public/front_assets/img/section-img/gallery/instra-big-05.png" alt="">
                                            </div>
                                            <span class="tag style-01">Politics</span>
                                            <div class="content">
                                                <a href="business-02.html"><h4 class="title">If you went round the world which places could</h4></a>
                                                <p>Anthony Rotolo, a professor from Syracuse University is offering the. Ahen an unknown</p>
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
                                    <div class="col-lg-4 col-md-6">
                                        <div class="blog-grid-item-01 margin-bottom-30">
                                            <div class="thumb">
                                                <img src="../../public/front_assets/img/section-img/gallery/instra-big-04.png" alt="">
                                            </div>
                                            <span class="tag">Products</span>
                                            <div class="content">
                                                <a href="business-02.html"><h4 class="title">Animal Nation Are Strugling To Save Their Wildlife</h4></a>
                                                <p>Anthony Rotolo, a professor from Syracuse University is offering the. Ahen an unknown</p>
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
                        </div>
                    </div>
                    <div class="life-style-slider-wrap">
                        <div class="life-style-slider">
                            <div class="image-box-item-five style-01 bg-image" style="background-image: url(../../public/front_assets/img/section-img/life-style/life-style-03.png);">
                                <div class="content">
                                    <span class="tag-02 style-01">LIFE STYLE</span>
                                    <h4 class="title"><a href="business-02.html">Our new national disgrace: haras<br>sing TV journalists</a></h4>
                                    <ul class="post-meta">
                                        <li class="style-01">
                                            <a href="#">By <span class="white">Admin</span></a>
                                        </li>
                                        <li>
                                                <span class="posted-on">
                                                    <a href="#" rel="bookmark">
                                                        <span class="entry-date style-01 published updated"><i class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                                    </a>
                                                </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="image-box-item-five style-01 bg-image" style="background-image: url(../../public/front_assets/img/section-img/life-style/life-style-03.png);">
                                <div class="content">
                                    <span class="tag-02 style-01">LIFE STYLE</span>
                                    <h4 class="title"><a href="business-02.html">Our new national disgrace: haras<br>sing TV journalists</a></h4>
                                    <ul class="post-meta">
                                        <li class="style-01">
                                            <a href="#">By <span class="white">Admin</span></a>
                                        </li>
                                        <li>
                                                <span class="posted-on">
                                                    <a href="#" rel="bookmark">
                                                        <span class="entry-date style-01 published updated"><i class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                                    </a>
                                                </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popular-news-section style-01">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="image-box-item-three style-01">
                                    <div class="thumbnail">
                                        <img src="../../public/front_assets/img/section-img/news/popular-02.png" alt="">
                                    </div>
                                    <div class="content style-01">
                                        <span class="tag-02">business</span>
                                        <a href="business-02.html"><h4 class="title">Winterized motorho me turns family <span>February</span></h4></a>
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
                                <div class="image-box-item-three style-01">
                                    <div class="thumbnail">
                                        <img src="../../public/front_assets/img/section-img/news/popular-03.png" alt="">
                                    </div>
                                    <div class="content style-01">
                                        <span class="tag-02">food</span>
                                        <a href="business-02.html"><h4 class="title">Sarah Polley hopes her Jian qusu <span>Winterized</span></h4></a>
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
                                <div class="image-box-item-three style-01">
                                    <div class="thumbnail">
                                        <img src="../../public/front_assets/img/section-img/news/popular-03.png" alt="">
                                    </div>
                                    <div class="content style-01">
                                        <span class="tag-02">fashion</span>
                                        <a href="business-02.html"><h4 class="title">In Toronto, February market starts <span>penthouse</span></h4></a>
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
                            <div class="col-lg-4 col-md-12">
                                <div class="thumbnail middle">
                                    <img src="../../public/front_assets/img/section-img/news/popular-09.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="image-box-item-three style-01">
                                    <div class="thumbnail">
                                        <img src="../../public/front_assets/img/section-img/news/popular-05.png" alt="">
                                    </div>
                                    <div class="content style-01">
                                        <span class="tag-02">technology</span>
                                        <a href="business-02.html"><h4 class="title">Sub penthouse at for One Bloor goes <span>Winterized</span></h4></a>
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
                                <div class="image-box-item-three style-01">
                                    <div class="thumbnail">
                                        <img src="../../public/front_assets/img/section-img/news/popular-06.png" alt="">
                                    </div>
                                    <div class="content style-01">
                                        <span class="tag-02">life Style</span>
                                        <a href="business-02.html"><h4 class="title">Cava producers are looking good <span>penthouse</span></h4></a>
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
                                <div class="image-box-item-three style-01">
                                    <div class="thumbnail">
                                        <img src="../../public/front_assets/img/section-img/news/popular-07.png" alt="">
                                    </div>
                                    <div class="content style-01">
                                        <span class="tag-02">health</span>
                                        <a href="business-02.html"><h4 class="title">Mortgage Rundown The countdown <span>producers</span></h4></a>
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
                    <div class="call-to-action-03">
                        <div class="row">
                            <div class="col-lg-12">
                                <img src="../../public/front_assets/img/section-img/cta/cta-bg-03.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

