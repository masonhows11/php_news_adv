<div class="header-style-02">
    <div class="container custom-container-03">
        <div class="header-main-wrapper">
            <div class="sidebar-menu-wrapper">
                <div class="sidebar-menu">
                    <!-- Sidebar  navbar area start -->
                    <nav class="sidebar-nav">
                        <div class="sidebar-nav-header">
                            <div class="header-top">
                                <div class="date">
                                    <p><i class="fas fa-calendar-alt"></i>january 14, 2022</p>
                                </div>
                                <ul class="social-share">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="logo-wrapper">
                                <img src="../../public/front_assets/img/logo/logo-white.svg" alt="" class="logo">
                            </div>
                        </div>
                        <div class="search-wrap">
                            <div class="cart-icon">
                                <i class="flaticon-trolley"></i>
                            </div>
                            <div class="search-icon">
                                <i class="flaticon-search"></i>
                            </div>
                            <form action="#" class="sidebar-search-form">
                                <input type="text" placeholder="search-here">
                            </form>
                        </div>
                        <ul class="navigation">
                            <li class="menu-has-child">
                                <a class="" href="<?= url('/') ?>">Home</a>
                            </li>
                            <?php if(checkAuth()):  ?>
                                <li>
                                    <a href="<?= url('logout') ?>">logout</a>
                                </li>
                            <?php else: ?>
                                <li>
                                    <a href="<?= url('login') ?>">login</a>
                                </li>
                            <?php endif; ?>
                            <li>
                                <a href="business.html">Archive</a>
                            </li>
                            <li class="menu-has-child">
                                <a href="#">Post Picks</a>
                                <ul class="has-sub-menu">
                                    <li><a href="business.html">Business</a></li>
                                    <li><a href="business-02.html">Business two</a></li>
                                    <li><a href="sport.html">Sports</a></li>
                                </ul>
                            </li>
                            <li class="menu-has-child">
                                <a href="#">Pages</a>
                                <ul class="has-sub-menu">
                                    <li><a href="business.html">Business</a></li>
                                    <li><a href="business-02.html">Business two</a></li>
                                    <li><a href="financial.html">Financial</a></li>
                                    <li><a href="signup.html">Sign in</a></li>
                                    <li><a href="signup.html">Sign up</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Features</a>
                            </li>
                            <li class="menu-has-child">
                                <a href="#">Shop</a>
                                <ul class="has-sub-menu">
                                    <li><a href="products.html">Products</a></li>
                                    <li><a href="product-details.html">Products Details</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?= url('contact_us') ?>">Contact</a>
                            </li>
                            <li>
                                <a href="<?= url('about_us') ?>">About</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="sidebar-nav-footer">
                        <div class="icon">
                            <i class="fas fa-share"></i>
                        </div>
                        <div class="content">
                            <span>Magcal Fisher Basical Navikea Area</span>
                        </div>
                    </div>
                    <!-- Sidebar navbar area end -->
                </div>
            </div>
            
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
