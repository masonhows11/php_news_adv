<?php
$title = $setting['title'];
$description = $setting['description'] ?? '';
$keywords = $setting['keywords'] ? str_replace('-', ',', $setting['keywords']) : '';
$icon = $setting['icon'];
include_once(BASE_PATH . "/template/app/layouts/header.php");
?>
<body>

<!--<div class="preloader" id="preloader">-->
<!--    <div class="preloader-inner">-->
<!---->
<!--    </div>-->
<!--</div>-->

<main class="main-section">

    <?php
    include_once(BASE_PATH . "/template/app/layouts/navbar.php");
    include_once(BASE_PATH . "/template/app/layouts/cart.php");
    ?>
    <div class="header-style-02">
        <div class="container custom-container-03">
            <div class="header-main-wrapper">

                <!-- sidebar -->
                <?php
                include_once(BASE_PATH . "/template/app/layouts/sidebar.php");
                ?>
                <!--end sidebar -->
                <div class="main-content">

                    <!-- 3 box top -->
                    <div class="image-box-wrapper">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="h3"><strong>Editor's Choice</strong></h3>
                            </div>
                            <?php if (!empty($topSelectedPosts)): ?>
                                <?php foreach ($topSelectedPosts as $post): ?>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="image-box-item-three">
                                            <div class="thumbnail">
                                                <!--   <img src="../../public/front_assets/img/section-img/recent/recent-21.png" alt="">-->
                                                <img src="<?= assets($post['image']) ?>" alt="">
                                            </div>
                                            <div class="content style-01">
                                                <span class="tag-02"><?= $post['category_name'] ?></span>
                                                <a href="<?= url('post/'.$post['id']) ?>"><h4 class="title"><?= $post['summary'] ?>
                                                        <span><?= $post['title'] ?></span></h4></a>
                                                <ul class="post-meta">
                                                    <li>
                                                        <a href="#">By <span><?= $post['user_name'] ?></span></a>
                                                    </li>
                                                    <li>
                                                    <span class="posted-on">
                                                        <a href="#" rel="bookmark">
                                                            <span class="entry-date published updated"><i
                                                                        class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                                        </a>
                                                    </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="image-box-item-three">
                                        <div class="thumbnail">
                                            <img src="../../public/front_assets/img/section-img/recent/recent-22.png"
                                                 alt="">
                                        </div>
                                        <div class="content style-01">
                                            <span class="tag-02">fashion</span>
                                            <a href="#"><h4 class="title">Moon They Land Main Close If
                                                    <span>Winterized</span></h4></a>
                                            <ul class="post-meta">
                                                <li>
                                                    <a href="#">By <span>Admin</span></a>
                                                </li>
                                                <li>
                                                     <span class="posted-on">
                                                         <a href="#" rel="bookmark">
                                                             <span class="entry-date published updated"><i
                                                                         class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
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
                                            <img src="../../public/front_assets/img/section-img/recent/recent-22.png"
                                                 alt="">
                                        </div>
                                        <div class="content style-01">
                                            <span class="tag-02">fashion</span>
                                            <a href="#"><h4 class="title">Moon They Land Main Close If
                                                    <span>Winterized</span></h4></a>
                                            <ul class="post-meta">
                                                <li>
                                                    <a href="#">By <span>Admin</span></a>
                                                </li>
                                                <li>
                                                     <span class="posted-on">
                                                         <a href="#" rel="bookmark">
                                                             <span class="entry-date published updated"><i
                                                                         class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
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
                                            <img src="../../public/front_assets/img/section-img/recent/recent-23.png"
                                                 alt="">
                                        </div>
                                        <div class="content style-01">
                                            <span class="tag-02">food</span>
                                            <a href="#"><h4 class="title">Mortgage Rundow Winterized
                                                    <span>The countdown</span></h4></a>
                                            <ul class="post-meta">
                                                <li>
                                                    <a href="#">By <span>Admin</span></a>
                                                </li>
                                                <li>
                                                     <span class="posted-on">
                                                         <a href="#" rel="bookmark">
                                                             <span class="entry-date published updated"><i
                                                                         class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                                         </a>
                                                     </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>


                        </div>
                    </div>

                    <!-- 2 big  box top -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="h3"><strong>Breaking News</strong></h3>
                        </div>
                        <?php if (!empty($breakingNews)): ?>
                            <?php foreach ($breakingNews as $news): ?>
                                <div class="col-lg-6"> <!-- url(../../public/front_assets/img/header/header-bg-02.png) -->
                                    <div class="image-box-item-five bg-image"
                                         style="background-image: url('<?php echo assets($news['image']) ?>');
                                                 background-position: center ;
                                                 background-size: contain">
                                        <div class="content">
                                            <span class="tag-02 style-01"><?= $news['title'] ?></span>
                                            <h4 class="title"><a href="<?= url('post/'.$news['id']) ?>"><?= $news['summary'] ?>
                                                    <br> <?= $news['title'] ?></a></h4>
                                            <ul class="post-meta">
                                                <li class="style-01">
                                                    <a href="#">By <span class="white">Admin</span></a>
                                                </li>
                                                <li>
                                                <span class="posted-on">
                                                    <a href="#" rel="bookmark">
                                                        <span class="entry-date style-01 published updated"><i
                                                                    class="fas fa-calendar-alt"></i><?= jdate($news['created_at'])->format('%B %d, %Y') ?></span>
                                                    </a>
                                                </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="col-lg-6">
                                <div class="image-box-item-five bg-image"
                                     style="background-image: url(../../public/front_assets/img/header/header-bg-02.png);">
                                    <div class="content">
                                        <span class="tag-02 style-01">LIFE STYLE</span>
                                        <h4 class="title"><a href="#">Sanctions against Russia benefit
                                                Canadian <br> farmers and commodity producers</a></h4>
                                        <ul class="post-meta">
                                            <li class="style-01">
                                                <a href="#">By <span class="white">Admin</span></a>
                                            </li>
                                            <li>
                                                <span class="posted-on">
                                                    <a href="#" rel="bookmark">
                                                        <span class="entry-date style-01 published updated"><i
                                                                    class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                                    </a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="image-box-item-five bg-image"
                                     style="background-image: url(../../public/front_assets/img/header/header-bg-03.png);">
                                    <div class="content">
                                        <span class="tag-02 style-01">LIFE STYLE</span>
                                        <h4 class="title"><a href="#">Sanctions against Russia benefit
                                                Canadian <br> farmers and commodity producers</a></h4>
                                        <ul class="post-meta">
                                            <li class="style-01">
                                                <a href="#">By <span class="white">Admin</span></a>
                                            </li>
                                            <li>
                                                <span class="posted-on">
                                                    <a href="#" rel="bookmark">
                                                        <span class="entry-date style-01 published updated"><i
                                                                    class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                                    </a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>

                    <!-- hot categories -->
                    <div class="news-slider-wrapper">
                        <div class="theme-heading-title">
                            <div class="title">Hot Categories</div>
                        </div>
                        <div class="news-slider-two">
                            <?php if (!empty($categories)): ?>
                            <?php foreach ($categories as $category): ?>
                                    <div class="image-box-item-six bg-image"
                                         style="background-image: url(../../public/front_assets/img/section-img/hot-catagory/hot-catagory-01.png);">
                                        <div class="content">
                                            <a href="<?= url('post/category/'.$category['id']) ?>"><h4 class="title"><?= $category['title'] ?></h4></a>
                                        </div>
                                <!--   <span class="box-number">03</span>-->
                                    </div>
                            <?php endforeach; ?>
                            <?php else: ?>
                                <div class="image-box-item-six bg-image"
                                     style="background-image: url(../../public/front_assets/img/section-img/hot-catagory/hot-catagory-01.png);">
                                    <div class="content">
                                        <a href="#"><h4 class="title">food</h4></a>
                                    </div>
                                    <span class="box-number">03</span>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- most commented posts -->
                    <div class="whats-new-section">
                        <div class="new-wrapper">
                            <div class="theme-heading-title">
                                <!--  <div class="title">What’s New</div>-->
                                <div class="title">Most Commented</div>
                            </div>
                           <!-- <ul class="nav nav-pills">
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
                            </ul>-->
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                            <!-- class="tab-pane post" -->
                            <div class="" id="politics">
                                <div class="row">
                                    <?php if(!empty($mostCommented)): ?>
                                    <?php foreach ($mostCommented as $post): ?>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="blog-grid-item-01 margin-bottom-30">
                                                    <div class="thumb">
                                                        <?php if ($post['image'] != null): ?>
                                                        <img src="<?= assets($post['image']) ?>" alt="post-image">
                                                        <?php else: ?>
                                                        <img src="../../public/front_assets/img/section-img/gallery/instra-big-06.png" alt="post-image">
                                                        <?php endif; ?>

                                                    </div>
                                                    <span class="tag"><?= $post['category_name'] ?></span>
                                                    <div class="content">
                                                        <a href="<?= url('post/'.$post['id']) ?>"><h4 class="title"><?= $post['title'] ?></h4></a>
                                                        <p><?= $post['summary'] ?></p>
                                                        <ul class="post-meta">
                                                            <li>
                                                                <i class="far fa-comment-alt"></i>  <span style="font-family: Amiri, Georgia, "Times New Roman", serif" ><?= $post['comments_count'] ?> </span>
                                                            </li>
                                                            <li>
                                                                <a href="<?= url('post/'.$post['id']) ?>">By <span><?= $post['user_name'] ?></span></a>
                                                            </li>
                                                            <li>
                                                            <span class="posted-on">
                                                                <a href="#" rel="bookmark">
                                                                    <span class="entry-date published updated"><i
                                                                                class="fas fa-calendar-alt"></i><?= jdate($post['created_at'])->format('%B %d, %Y') ?></span>
                                                                </a>
                                                            </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php endforeach; ?>
                                    <?php else: ?>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="blog-grid-item-01 margin-bottom-30">
                                                <div class="thumb">
                                                    <img src="../../public/front_assets/img/section-img/gallery/instra-big-06.png"
                                                         alt="">
                                                </div>
                                                <span class="tag">Products</span>
                                                <div class="content">
                                                    <a href="#"><h4 class="title">Animal Nation Are Strugling
                                                            To Save Their Wildlife</h4></a>
                                                    <p>Anthony Rotolo, a professor from Syracuse University is offering the.
                                                        Ahen an unknown</p>
                                                    <ul class="post-meta">
                                                        <li>
                                                            <a href="#">By <span>Admin</span></a>
                                                        </li>
                                                        <li>
                                                            <span class="posted-on">
                                                                <a href="#" rel="bookmark">
                                                                    <span class="entry-date published updated"><i
                                                                                class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
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
                                                    <img src="../../public/front_assets/img/section-img/gallery/instra-big-04.png"
                                                         alt="">
                                                </div>
                                                <span class="tag style-02">Health</span>
                                                <div class="content">
                                                    <a href="#"><h4 class="title">How childhood viral
                                                            infections may year 2021</h4></a>
                                                    <p>Anthony Rotolo, a professor from Syracuse University is offering the.
                                                        Ahen an unknown</p>
                                                    <ul class="post-meta">
                                                        <li>
                                                            <a href="#">By <span>Admin</span></a>
                                                        </li>
                                                        <li>
                                                            <span class="posted-on">
                                                                <a href="#" rel="bookmark">
                                                                    <span class="entry-date published updated"><i
                                                                                class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
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
                                                    <img src="../../public/front_assets/img/section-img/gallery/instra-big-05.png"
                                                         alt="">
                                                </div>
                                                <span class="tag style-01">Politics</span>
                                                <div class="content">
                                                    <a href="#"><h4 class="title">If you went round the world
                                                            which places could</h4></a>
                                                    <p>Anthony Rotolo, a professor from Syracuse University is offering the.
                                                        Ahen an unknown</p>
                                                    <ul class="post-meta">
                                                        <li>
                                                            <a href="#">By <span>Admin</span></a>
                                                        </li>
                                                        <li>
                                                            <span class="posted-on">
                                                                <a href="#" rel="bookmark">
                                                                    <span class="entry-date published updated"><i
                                                                                class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                                                </a>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- slider 6 box middle post -->
                   <?php  include_once(BASE_PATH.'/template/app/partials/static_post.php'); ?>


                    <!-- banner -->
                    <div class="call-to-action-03">
                        <div class="row">
                            <div class="col-lg-12">
                                <?php if (!empty($banner)): ?>
                                    <img src="<?= assets($banner['image']) ?>" class="" height="350px"
                                         alt="banner-news">
                                <?php else: ?>
                                    <img src="../../public/front_assets/img/section-img/cta/cta-bg-03.png"
                                         alt="banner-news">
                                <?php endif; ?>
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
                            <div class="title">Most visited</div>
                        </div>
                        <!-- Image Box Items Start -->
                        <?php if (!empty($mostVisited)): ?>
                            <?php foreach ($mostVisited as $post): ?>
                                <div class="header-image-box-item">
                                    <div class="thumbnail style-01">
                                        <?php if($post['image'] != null): ?>
                                            <img src="<?= $post['image'] ?>" alt="">
                                        <?php else: ?>
                                            <img src="../../public/front_assets/img/section-img/recent/recent-08.png" alt="">
                                        <?php endif; ?>

                                    </div>
                                    <div class="content">
                                        <span class="tag-02"><?= $post['category_name'] ?></span>
                                        <a href="<?= url('post/'.$post['id']) ?>"><h4 class="title style-01"><?= $post['title'] ?></h4></a>
                                        <ul class="post-meta">
                                            <li>
                                                <a href="#">By <span><?= $post['user_name'] ?></span></a>
                                            </li>
                                            <li>
                                            <span class="posted-on">
                                                <a href="#" rel="bookmark">
                                                    <span class="entry-date published updated"><i
                                                                class="fas fa-calendar-alt"></i><?= jdate($news['created_at'])->format('%B %d, %Y') ?></span>
                                                </a>
                                            </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="header-image-box-item">
                                <div class="thumbnail style-01">
                                    <img src="../../public/front_assets/img/section-img/recent/recent-08.png" alt="">
                                </div>
                                <div class="content">
                                    <span class="tag-02">Test Title</span>
                                    <a href="#"><h4 class="title style-01">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4></a>
                                    <ul class="post-meta">
                                        <li>
                                            <a href="#">By <span>Test Author</span></a>
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
                        <?php endif; ?>

                    </div>
                </div>

                <!-- Latest News section-->
                <div class="col-lg-6 col-md-6">
                    <div class="theme-heading-title">
                        <div class="title">Latest News</div>
                    </div>
                    <?php if (!empty($lastNews)): ?>
                        <?php foreach ($lastNews as $news): ?>
                            <div class="image-box-item-four style-01">
                                <div class="thumbnail">
                                    <img src="<?= assets($news['image']) ?>" alt="">
                                    <!--                                    <img src="../../public/front_assets/img/section-img/news/news-08.png" alt="">-->
                                </div>
                                <div class="content ml-xl-4 ml-sm-6">
                                    <span class="tag-02"><?= $news['category_name'] ?></span>
                                    <a href="<?= url('post/'.$news['id']) ?>"><h4 class="title"><?= $news['title'] ?></h4></a>
                                    <ul class="post-meta">
                                        <li>
                                            <a href="#">By <span><?= $news['user_name'] ?></span></a>
                                        </li>
                                        <li>
                                    <span class="posted-on">
                                            <a href="#" rel="bookmark">
                                                <span class="entry-date published updated"><i
                                                            class="fas fa-calendar-alt"></i><?= jdate($news['created_at'])->format('%B %d, %Y') ?></span>
                                            </a>
                                    </span>
                                        </li>
                                    </ul>
                                    <p><?= $news['summary'] ?></p>
                                    <div class="btn-wrap">
                                        <a href="#" class="boxed-btn news-btn">
                                            Read More
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="image-box-item-four style-01">
                            <div class="thumbnail">
                                <img src="../../public/front_assets/img/section-img/news/news-08.png" alt="">
                            </div>
                            <div class="content ml-xl-4 ml-sm-6">
                                <span class="tag-02">Test Title</span>
                                <a href="#"><h4 class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4></a>
                                <ul class="post-meta">
                                    <li>
                                        <a href="#">By <span>Test Author</span></a>
                                    </li>
                                    <li>
                                    <span class="posted-on">
                                            <a href="#" rel="bookmark">
                                                <span class="entry-date published updated"><i
                                                            class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                            </a>
                                    </span>
                                    </li>
                                </ul>
                                <p>Anthony Rotolo, a professor from Syracuse University is offering the. Ahen an
                                    unknown</p>
                                <div class="btn-wrap">
                                    <a href="#" class="boxed-btn news-btn">
                                        Read More
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

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
                                        <a href="#"><h4 class="title">If you went round the world which
                                                places could</h4></a>
                                        <ul class="post-meta">
                                            <li>
                                                <a href="#">By <span>Admin</span></a>
                                            </li>
                                            <li>
                                                    <span class="posted-on">
                                                        <a href="#" rel="bookmark">
                                                            <span class="entry-date published updated"><i
                                                                        class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                                        </a>
                                                    </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-grid-item-01 margin-bottom-35">
                                    <div class="thumb">
                                        <img src="../../public/front_assets/img/section-img/news/story-slider.png"
                                             alt="">
                                    </div>
                                    <span class="tag style-01">politics</span>
                                    <div class="content">
                                        <a href="#"><h4 class="title">If you went round the world which
                                                places could</h4></a>
                                        <ul class="post-meta">
                                            <li>
                                                <a href="#">By <span>Admin</span></a>
                                            </li>
                                            <li>
                                                    <span class="posted-on">
                                                        <a href="#" rel="bookmark">
                                                            <span class="entry-date published updated"><i
                                                                        class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                                        </a>
                                                    </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-grid-item-01 margin-bottom-35">
                                    <div class="thumb">
                                        <img src="../../public/front_assets/img/section-img/news/top-story-slider-two.png"
                                             alt="">
                                    </div>
                                    <span class="tag style-01">politics</span>
                                    <div class="content">
                                        <a href="#"><h4 class="title">If you went round the world which
                                                places could</h4></a>
                                        <ul class="post-meta">
                                            <li>
                                                <a href="#">By <span>Admin</span></a>
                                            </li>
                                            <li>
                                                    <span class="posted-on">
                                                        <a href="#" rel="bookmark">
                                                            <span class="entry-date published updated"><i
                                                                        class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
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
                                <a href="#"><h4 class="title style-01">The Surprising Ret urn of a
                                        Forgotten</h4></a>
                                <ul class="post-meta">
                                    <li>
                                        <a href="#">By <span>Admin</span></a>
                                    </li>
                                    <li>
                                            <span class="posted-on">
                                                <a href="#" rel="bookmark">
                                                    <span class="entry-date published updated"><i
                                                                class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
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
                                <a href="#"><h4 class="title style-01">However Distant She quite eve</h4>
                                </a>
                                <ul class="post-meta">
                                    <li>
                                        <a href="#">By <span>Admin</span></a>
                                    </li>
                                    <li>
                                            <span class="posted-on">
                                                <a href="#" rel="bookmark">
                                                    <span class="entry-date published updated"><i
                                                                class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
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
                                <a href="#"><h4 class="title style-01">Insipidity Sufficien
                                        dispatched</h4></a>
                                <ul class="post-meta">
                                    <li>
                                        <a href="#">By <span>Admin</span></a>
                                    </li>
                                    <li>
                                            <span class="posted-on">
                                                <a href="#" rel="bookmark">
                                                    <span class="entry-date published updated"><i
                                                                class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
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

    <?php include_once(BASE_PATH . '/template/app/partials/btm_info.php') ?>

</main>


<?php
include_once(BASE_PATH . "/template/app/layouts/footer.php");
?>

