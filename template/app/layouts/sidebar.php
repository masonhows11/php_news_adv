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
                <?php foreach ($menus as $menu): ?>
                    <li>
                        <!--                                    <a href="--><?php //= url($menu['url']) ?><!--">--><?php //= $menu['name'] ?><!--</a>-->
                        <a href="<?= $menu['url'] ?>"><?= $menu['name'] ?></a>
                    </li>
                <?php endforeach; ?>
                <!-- <li>
                     <a href="business.html">Archive</a>
                 </li>-->
                <!--<li class="menu-has-child">
                    <a href="#">Post Picks</a>
                    <ul class="has-sub-menu">
                        <li><a href="business.html">Business</a></li>
                        <li><a href="business-02.html">Business two</a></li>
                        <li><a href="sport.html">Sports</a></li>
                    </ul>
                </li>-->
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
