(function ($) {
    "use strict";

    $(document).ready(function () {

        /*-------------------------------
            Navbar Fix
          ------------------------------*/
        if ($(window).width() < 991) {
            navbarFix()
        }

        $(".menu-item-has-children a").on("click", function () {
            var element = $(this).parent("li");
            if (element.hasClass("show")) {
                element.removeClass("show");
                element.children("ul").slideUp(500);
            } else {
                element.siblings("li").removeClass('show');
                element.addClass("show");
                element.siblings("li").find("ul").slideUp(500);
                element.children('ul').slideDown(500);
            }
        });

        /*--------------------
           Remove cart item
        ---------------------*/
        $('.remove-cart').on('click', function (e) {
            e.preventDefault();
            $(this).parent().parent().hide(300);
        });

        /*-------------------------
            product + - start here
        -------------------------*/

        $(function () {
            $(".qtybutton").on("click", function () {
                var $button = $(this);
                var oldValue = $button.parent().find("input").val();
                if ($button.text() === "+") {
                    var newVal = parseFloat(oldValue) + 1;
                } else {
                    // Don't allow decrementing below zero
                    if (oldValue > 1) {
                        var newVal = parseFloat(oldValue) - 1;
                    } else {
                        newVal = 1;
                    }
                }
                $button.parent().find("input").val(newVal);
            });
        });

        /*-------------------------
            magnific popup activation
        -------------------------*/
        $('.video-play-btn,.video-popup,.small-vide-play-btn').magnificPopup({
            type: 'video'
        });
        $('.image-popup').magnificPopup({
            type: 'image',
            removalDelay: 260,
            mainClass: 'mfp-zoom-in',
        });

        /*------------------
            back to top
        ------------------*/
        $(document).on('click', '.back-to-top', function () {
            $("html,body").animate({
                scrollTop: 0
            }, 2000);
        });

        /*-----------------------
            Home-two searchbar
        ------------------------*/
        $('.search-icon').on('click', function () {
            $('.sidebar-search-form').toggleClass('search-active');
        });

        /*-------------------------------
           Nice Select initialize
        ------------------------------*/
        $("select").niceSelect();

        /*-------------------------------
           Theia Sticky Sidebar
        ------------------------------*/
        var w = $(window).width();
        var MarginTop = (w > 1199) ? 0 : 0;
        if ($('.sidebar-menu-wrapper').length) {
            $('.sidebar-menu-wrapper').theiaStickySidebar({
                'containerSelector': '.header-main-wrapper',
                'additionalMarginTop': MarginTop,
                'minWidth': 200,
            });
        }

        /*----------------------
            Cart Sidebar
        -----------------------*/
        $('.open-cart').on('click', function () {
            $('.cart-menu-wrap').addClass('cart-open');
            $('.cart-menu-overlay').addClass('cart-overlay-open');
        });

        $('.cart-menu-overlay,.close-btn-03').on('click', function () {
            $('.cart-menu-wrap').removeClass('cart-open');
            $('.cart-menu-overlay').removeClass('cart-overlay-open');
        });

        /*----------------------
            Sidebar
        -----------------------*/
        $('.open-sidebar').on('click', function () {
            $('.sidebar-menu-wrap').addClass('sidebar-open');
            $('.side-menu-overlay').addClass('overlay-open');
        });

        $('.side-menu-overlay,.close-btn-02').on('click', function () {
            $('.sidebar-menu-wrap').removeClass('sidebar-open');
            $('.side-menu-overlay').removeClass('overlay-open');
        });

        /*----------------------
            Home Three Sidebar
        -----------------------*/
        $('.open-sidebar-02').on('click', function () {
            $('.sidebar-menu-wrap').addClass('sidebar-open-02');
            $('.side-menu-overlay').addClass('overlay-open');
        });

        $('.side-menu-overlay,.close-btn-02').on('click', function () {
            $('.sidebar-menu-wrap').removeClass('sidebar-open-02');
            $('.side-menu-overlay').removeClass('overlay-open');
        });

        /*----------------------
            Search Popup
        -----------------------*/
        var bodyOvrelay = $('#body-overlay');
        var searchPopup = $('#search-popup');

        $(document).on('click', '#body-overlay', function (e) {
            e.preventDefault();
            bodyOvrelay.removeClass('active');
            searchPopup.removeClass('active');
        });
        $(document).on('click', '.border-none', function (e) {
            e.preventDefault();
            bodyOvrelay.removeClass('active');
            searchPopup.removeClass('active');
        });
        $(document).on('click', '#search', function (e) {
            e.preventDefault();
            searchPopup.addClass('active');
            bodyOvrelay.addClass('active');
        });

    });


    /*---------------------------
        News Slider One
    ---------------------------*/
    var $headerSlider = $('.news-slider-one');
    if ($headerSlider.length > 0) {
        $headerSlider.slick({
            dots: true,
            arrows: false,
            nextArrow: '<button class="slide-arrow prev-arrow"><i class="fas fa-arrow-right"></i></button>',
            prevArrow: '<button class="slide-arrow next-arrow"><i class="fas fa-arrow-left"></i></button>',
            speed: 1000,
            // autoplay: true,
            speed: 1000,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }

    /*---------------------------
        News Slider two
    ---------------------------*/
    var $headerSlider = $('.news-slider-two');
    if ($headerSlider.length > 0) {
        $headerSlider.slick({
            dots: true,
            arrows: false,
            nextArrow: '<button class="slide-arrow prev-arrow"><i class="fas fa-arrow-right"></i></button>',
            prevArrow: '<button class="slide-arrow next-arrow"><i class="fas fa-arrow-left"></i></button>',
            speed: 1000,
            // autoplay: true,
            speed: 1000,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1366,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }

    /*---------------------------
        video news slider
    ---------------------------*/
    var $headerSlider = $('.video-news-slider');
    if ($headerSlider.length > 0) {
        $headerSlider.slick({
            dots: false,
            arrows: true,
            nextArrow: '<button class="slide-arrow prev-arrow"><i class="fas fa-arrow-right"></i></button>',
            prevArrow: '<button class="slide-arrow next-arrow"><i class="fas fa-arrow-left"></i></button>',
            speed: 1000,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }

    /*---------------------------
        Latest Video Slider one
    ---------------------------*/
    var $headerSlider = $('.video-slider-one');
    if ($headerSlider.length > 0) {
        $headerSlider.slick({
            dots: false,
            arrows: true,
            nextArrow: '<button class="slide-arrow prev-arrow"><i class="fas fa-arrow-right"></i></button>',
            prevArrow: '<button class="slide-arrow next-arrow"><i class="fas fa-arrow-left"></i></button>',
            speed: 1000,
            // autoplay: true,
            speed: 1000,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }

    /*---------------------------
        Latest Video Slider two
    ---------------------------*/
    var $headerSlider = $('.video-slider-two');
    if ($headerSlider.length > 0) {
        $headerSlider.slick({
            dots: false,
            arrows: true,
            nextArrow: '<button class="slide-arrow prev-arrow"><i class="fas fa-arrow-right"></i></button>',
            prevArrow: '<button class="slide-arrow next-arrow"><i class="fas fa-arrow-left"></i></button>',
            speed: 1000,
            speed: 1000,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }

    /*---------------------------
        Life Style Slider
    ---------------------------*/
    var $headerSlider = $('.life-style-slider');
    if ($headerSlider.length > 0) {
        $headerSlider.slick({
            dots: false,
            arrows: true,
            // vertical: true,
            // verticalSwiping: true,
            nextArrow: '<button class="slide-arrow prev-arrow"><i class="fas fa-arrow-down"></i></button>',
            prevArrow: '<button class="slide-arrow next-arrow"><i class="fas fa-arrow-up"></i></button>',
            speed: 1000,
            // autoplay: true,
            speed: 1000,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }

    /*---------------------------
        Banner Slider One
    ---------------------------*/
     var $headerSlider = $('.banner-slider');
     if ($headerSlider.length > 0) {
         $headerSlider.slick({
             dots: true,
             arrows: false,
             nextArrow: '<button class="slide-arrow prev-arrow"><i class="flaticon-next"></i></button>',
             prevArrow: '<button class="slide-arrow next-arrow"><i class="flaticon-back"></i></button>',
             speed: 1000,
             // autoplay: true,
             speed: 1000,
             slidesToShow: 1,
             slidesToScroll: 1,
             responsive: [{
                     breakpoint: 1024,
                     settings: {
                         slidesToShow: 1,
                         slidesToScroll: 1,
                         infinite: true,
                     }
                 },
                 {
                     breakpoint: 992,
                     settings: {
                         slidesToShow: 1,
                         slidesToScroll: 1,
                         infinite: true,
                     }
                 },
                 {
                     breakpoint: 768,
                     settings: {
                         slidesToShow: 1,
                         slidesToScroll: 1
                     }
                 },
                 {
                     breakpoint: 600,
                     settings: {
                         slidesToShow: 1,
                         slidesToScroll: 1
                     }
                 },
                 {
                     breakpoint: 480,
                     settings: {
                         slidesToShow: 1,
                         slidesToScroll: 1
                     }
                 }
             ]
         });
    }
    
    /*---------------------------
        Product Slider 
    ---------------------------*/
    var $headerSlider = $('.product-slider-big');
    if ($headerSlider.length > 0) {
        $headerSlider.slick({
            dots: false,
            arrows: false,
            nextArrow: '<button class="slide-arrow prev-arrow"><i class="fas fa-arrow-right"></i></button>',
            prevArrow: '<button class="slide-arrow next-arrow"><i class="fas fa-arrow-left"></i></button>',
            speed: 1000,
            speed: 1000,
            slidesToShow: 1,
            slidesToScroll: 1,
            asNavFor: ".product-slider",
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }

    var $headerSlider = $('.product-slider');
    if ($headerSlider.length > 0) {
        $headerSlider.slick({
            dots: false,
            arrows: false,
            nextArrow: '<button class="slide-arrow prev-arrow"><i class="fas fa-arrow-right"></i></button>',
            prevArrow: '<button class="slide-arrow next-arrow"><i class="fas fa-arrow-left"></i></button>',
            speed: 1000,
            speed: 1000,
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: ".product-slider-big",
            focusOnSelect: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }

     /*---------------------------
        Top Story Slider
    ---------------------------*/
     var $headerSlider = $('.top-story-slider');
     if ($headerSlider.length > 0) {
         $headerSlider.slick({
             dots: false,
             arrows: true,
             nextArrow: '<button class="slide-arrow prev-arrow"><i class="flaticon-right-arrow"></i></button>',
             prevArrow: '<button class="slide-arrow next-arrow"><i class="flaticon-left-arrow"></i></button>',
             speed: 1000,
             autoplay: true,
             speed: 1000,
             slidesToShow: 1,
             slidesToScroll: 1,
             responsive: [{
                     breakpoint: 1024,
                     settings: {
                         slidesToShow: 1,
                         slidesToScroll: 1,
                         infinite: true,
                     }
                 },
                 {
                     breakpoint: 992,
                     settings: {
                         slidesToShow: 2,
                         slidesToScroll: 1,
                         infinite: true,
                     }
                 },
                 {
                     breakpoint: 768,
                     settings: {
                         slidesToShow: 1,
                         slidesToScroll: 1
                     }
                 },
                 {
                     breakpoint: 600,
                     settings: {
                         slidesToShow: 1,
                         slidesToScroll: 1
                     }
                 },
                 {
                     breakpoint: 480,
                     settings: {
                         slidesToShow: 1,
                         slidesToScroll: 1
                     }
                 }
             ]
         });
     }

    //define variable for store last scrolltop
    var lastScrollTop = '';

    $(window).on('scroll', function () {

        //back to top show/hide
        var ScrollTop = $('.back-to-top');
        if ($(window).scrollTop() > 1000) {
            ScrollTop.fadeIn(1000);
        } else {
            ScrollTop.fadeOut(1000);
        }

        // Sticky-Memu
        if ($(window).width() > 991) {
            StickyMenu();
        }
    });


    $(window).on('resize', function () {
        /*-------------------------------
            Navbar Fix
        ------------------------------*/
        if ($(window).width() < 991) {
            navbarFix()
        }
    });


    $(window).on('load', function () {

        /*-----------------
            preloader
        ------------------*/
        setInterval(function () {
            $("#preloader").fadeOut(300);
        }, 700);

        /*-----------------
            back to top
        ------------------*/
        var backtoTop = $('.back-to-top')
        backtoTop.fadeOut();

    });

    function navbarFix() {
        $(document).on('click', '.navbar-area .navbar-nav li.menu-item-has-children>a, .navbar-area .navbar-nav li.appside-megamenu>a', function (e) {
            e.preventDefault();
        })
    }

    function StickyMenu() {
        /*--------------------------
        sticky menu activation
        ---------------------------*/
        var st = $(this).scrollTop();
        var mainMenuTop = $('.navbar-area');
        if ($(window).scrollTop() > 500) {
            mainMenuTop.addClass('nav-fixed');
        } else {
            mainMenuTop.removeClass('nav-fixed');
        }
        lastScrollTop = st;

        /*--------------------------
        sticky menu activation-02
        ---------------------------*/
        var st = $(this).scrollTop();
        var mainMenuTop = $('.navbar-area');
        if ($(window).scrollTop() > 3400 && window.outerWidth > 1199) {
            mainMenuTop.addClass('nav-fixed-02');
        } else if ($(window).scrollTop() > 500 && window.outerWidth <= 1199) {
            mainMenuTop.addClass('nav-fixed-02');
        } else {
            mainMenuTop.removeClass('nav-fixed-02');
        }
        lastScrollTop = st;
    }

    /*--------------------------
        Marquee js initialize
    ---------------------------*/
    
    var width = $(window).width();
    let $marquee = undefined;
    $marquee = $('.top-news-ticker-runner').marquee({
        speed: width < 400 ? 80 : 100,
        duplicated: true,
        pauseOnHover: true,
        gap: 0
    }).bind('paused', function () {
        $('.top-news-ticker .pause-btn .fa-pause').addClass('d-none').siblings().removeClass('d-none');
    }).bind('resumed', function () {
        $('.top-news-ticker .pause-btn .fa-play').addClass('d-none').siblings().removeClass('d-none');
    });

    $('.top-news-ticker .pause-btn').on('click', function () {
        $marquee.marquee('toggle');
    });

})(jQuery);
