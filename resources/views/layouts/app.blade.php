<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pool Service Software (PSS) | Invoices, Routes, Jobs & More!</title>
    <meta name="description" content="PSS offers both FREE and paid plans. Modernize your pool business (single poler or large companies), and save time and money with our powerful, yet simple all-in-one software solution">
    <meta name="keywords" content="PSS, pool service software, pool software, field service software, pool program, pool service app, pool app, pool service app, pool industry software">
    <!--- Seclect2 CSS ---->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!--- Style CSS ---->
    <link href="css/style.css" rel="stylesheet">
    <!--- Style BootStrap.CSS ---->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--- Style Silk.CSS ---->
    <link rel="stylesheet" href="css/slick.min.css" />
    <!--- AOS Animate.CSS ---->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.0/dist/aos.css" />
    <!--- Font Favicon CSS ---->
    <link rel="icon" type="image/png" href="images/favicon.svg" />
    <link rel="icon" type="image/png" href="images/favicon.svg" />
    <!-- Hotjar Tracking Code for www.poolservice.software -->
    <?php

    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $link = "https";
    else
        $link = "http";

    $link .= "://";

    $link .= $_SERVER['HTTP_HOST'];

    if($link == 'https://poolservice.software'){
?>
<script>
    (function(h, o, t, j, a, r) {
        h.hj = h.hj || function() {
            (h.hj.q = h.hj.q || []).push(arguments)
        };
        h._hjSettings = {
            hjid: 2448306,
            hjsv: 6
        };
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script');
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
</script>
<script src="//code.tidio.co/cq8duxaqvxbazpatc9s9mz2odn6s5baw.js" async></script>
<?php } ?>


<!-- Global site tag (gtag.js) - Google Ads: 375468631 --> 
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-375468631"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-375468631'); </script>


@yield('header_scripts')
</head>

<body>
    <!-- ==== Section Header (Mobile) === -->
    <header class="mobile-header bg-white sticky d-flex align-items-center justify-content-around">
        <!-- NavBar Brand -->
        <a class="navbar-brand d-block" href="#">
            <img class="img-fluid" src="images/logo.svg" alt="">
        </a>
        <div id="myNav" class="overlay primary_color_bg">
            <div class="overlay-content">
                <ul class="p-0 m-0">
                    <li class="d-flex align-items-center justify-content-center mb-5">
                        <span class="text-white"> • </span>
                        <a class="d-block text-white font_18 linehight_23 fw-500 px-2 active" aria-current="page" href="/">Home</a>
                        <span class="text-white"> • </span>
                    </li>
                    @php
                    $url = URL::to("/");
                    $features=$url.'#features';
                    $mobilefeatures=$url.'#mobilefeatures';
                    if(Request::is('/')){
                        $pricing=$url.'#pricing_tables';
                    }
                    else{
                        $pricing=$url.'?got_to_pricing=1';
                    }

                    @endphp
                    <li class="d-flex align-items-center justify-content-center mb-5">
                        <span class="text-white"> • </span>
                        <a class="d-block text-white font_18 linehight_23 fw-500 px-2 closebtn" href="<?php echo $mobilefeatures; ?>">Features</a>
                        <span class="text-white"> • </span>
                    </li>
                    <li class="d-flex align-items-center justify-content-center mb-5">
                        <span class="text-white"> • </span>
                        <a class="d-block text-white font_18 linehight_23 fw-500 px-2 closebtn" href="<?php echo $pricing; ?>">Plans & Pricing</a>
                        <span class="text-white"> • </span>
                    </li>
                    <li class="d-flex align-items-center justify-content-center mb-5">
                        <span class="text-white"> • </span>
                        <a class="d-block text-white font_18 linehight_23 fw-500 px-2" href="/testimonial">Testimonials</a>
                        <span class="text-white"> • </span>
                    </li>
                    <li class="d-flex align-items-center justify-content-center mb-5">
                        <span class="text-white"> • </span>
                        <a class="d-block text-white font_18 linehight_23 fw-500 px-2" href="/faq">FAQ</a>
                        <span class="text-white"> • </span>
                    </li>
                    <li class="d-flex align-items-center justify-content-center mb-5">
                        <span class="text-white"> • </span>
                        <a class="d-block text-white font_18 linehight_23 fw-500 px-2" href="/contact-support">Contact</a>
                        <span class="text-white"> • </span>
                    </li>
                </ul>
                <form class="d-flex flex-column align-items-center mb-5">
                    <a class="button_btn main_btn align_items text-white" href="<?php echo env('REDIRECT_DOMAIN'); ?>admin">Login</a>
                    <a class="button_btn main_btn align_items active mt-4" type="submit" href="/getdemo">Get Demo</a>
                </form>
                <article class="d-flex align-items-center justify-content-center">
                    <a href="https://www.facebook.com/poolservicesoftware" target="_blank"><img class="img-fluid" src="images/facebook.svg" alt="Facebook Icon"></a>
                    <a href="https://www.instagram.com/poolservicesoftware/" target="_blank"><img class="img-fluid ms-4" src="images/insta.svg" alt="Facebook Icon"></a>
                </article>
            </div>
        </div>
        <a href="javascript:void(0)" class="closebtn" style="display: none;"><img class="imf-fluid" src="/images/remove.svg" alt="remove"></a>
        <a href="javascript:void(0)" class="openbtn"><img class="img-fluid" src="images/hamberger.svg" alt="togglr icon"></a>
    </header>
    <!-- ==== Section Header (Desktop) === -->
    <header class="desktop-header bg-white sticky align-items-center">
        <!-- <nav class="navbar navbar-expand-lg navbar-light"> -->
            <div class="container">
                <div class="d-flex align-items-center">
                    <a class="navbar-brand" href="/">
                        <img class="img-fluid" src="images/logo.svg" alt="Company Logo">
                    </a>
                    <ul class="d-flex ms-auto mb-0 p-0">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center primary_color font_14 linehight_19 p-0 active" aria-current="page" href="/">Home
                                <span> • </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center primary_color font_14 linehight_19 p-0" href="<?php echo  $features; ?>">Features
                                <span> • </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center primary_color font_14 linehight_19 p-0" href="<?php echo  $pricing; ?>">Plans & Pricing
                                <span> • </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center primary_color font_14 linehight_19 p-0" href="/testimonial">Testimonials
                                <span> • </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center primary_color font_14 linehight_19 p-0" href="/faq">FAQ
                                <span> • </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center primary_color font_14 linehight_19 p-0" href="/contact-support">Contact
                                <span> • </span>
                            </a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <a class="button_btn main_btn ms-4 align_items" href="<?php echo env('REDIRECT_DOMAIN'); ?>admin">Login</a>
                        <a class="button_btn main_btn ms-4 align_items active" type="submit" href="/getdemo">Get Demo</a>
                    </form>
                </div>
            </div>
            <!-- </nav> -->
        </header>

        @yield('content')

        <!-- === Section Footer (DeskTop View) === -->
        <section class="footer">
            <!-- === Section Footer_main === -->
            <div class="container">
                <div class="footer-content px-4">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-3">
                            <a href="/">
                                <img class="img-fluid" src="images/f-logo.svg" alt="">
                            </a>
                        </div>
                        <div class="col-12 col-md-9">
                            <ul class="navbar-nav flex-row justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link text-white font_14 linehight_19 active" aria-current="page" href="/">Home</a>
                                </li>
                                <li class="nav-item ms-5">
                                    <a class="nav-link text-white font_14 linehight_19" href="<?php echo $features; ?>">Features</a>
                                </li>
                                <li class="nav-item ms-5">
                                    <a class="nav-link text-white font_14 linehight_19 " href="<?php echo $pricing; ?>">Plans &amp; Pricing</a>
                                </li>
                                <li class="nav-item ms-5">
                                    <a class="nav-link text-white font_14 linehight_19" href="/testimonial">Testimonials</a>
                                </li>
                                <li class="nav-item ms-5">
                                    <a class="nav-link text-white font_14 linehight_19" href="/faq">FAQ</a>
                                </li>
                                <li class="nav-item ms-5">
                                    <a class="nav-link text-white font_14 linehight_19" href="/contact-support">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col-12 col-md-6">
                            <p class="font_14 linehight_23 text-white m-0">Made by software and pool industry pros</p>
                            <p class="font_14 linehight_23 text-white m-0">in<img class="img-fluid ps-1" src="images/sun.svg" alt="Sun Icon"> sunny Florida
                            </p>
                        </div>
                        <div class="col-12 col-md-6 justify-content-end d-flex">
                            <a href="https://www.facebook.com/poolservicesoftware" target="_blank"><img class="img-fluid" src="images/facebook.svg" alt="Facebook Icon"></a>
                            <a href="https://www.instagram.com/poolservicesoftware/" target="_blank"><img class="img-fluid ms-3" src="images/insta.svg" alt="Facebook Icon"></a>
                        </div>
                    </div>
                    <div class="row pt-4 align-items-center">
                        <div class="col-12 col-md-5">
                            <p class="font_14 linehight_23 text-white m-0">Copyright (c) 2021 Pool Service Software, LLC. All rights reserved.
                            </p>
                        </div>
                        <div class="col-12 col-md-7">
                            <ul class="navbar-nav justify-content-start flex-row">
                                <li class="nav-item ms-5">
                                    <a class="nav-link text-white font_14 linehight_19" aria-current="page" href="/privacy">Privacy Notice</a>
                                </li>
                                <li class="nav-item ms-5">
                                    <a class="nav-link text-white font_14 linehight_19" aria-current="page" href="/term-of-use">Term of Use</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- === Section Footer (Mobile View) === -->
        <section class="mobile-footer">
            <!-- === Section Footer_main === -->
            <div class="container">
                <div class="footer-content px-4">
                    <div class="text-center">
                        <a href="/">
                            <img class="img-fluid" src="images/f-logo.svg" alt="footer logo">
                        </a>
                        <p class="font_14 linehight_19 text-white m-0 pt-3">Made by software and pool industry pros in<img class="img-fluid ps-1" src="images/sun.svg" alt="Sun Icon"> sunny Florida</p>
                        <article class="d-flex pt-5 align-item-center justify-content-around">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link text-white font_12 linehight_19 active" aria-current="page" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white font_12 linehight_19" href="<?php echo $mobilefeatures; ?>">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white font_12 linehight_19 " href="<?php echo $pricing; ?>">Plans &amp; Pricing</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link text-white font_12 linehight_19" href="/faq">FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white font_12 linehight_19" href="/contact-support">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white font_12 linehight_19" href="/testimonial">Testimonials</a>
                                </li>
                            </ul>
                        </article>
                        <article class="d-flex pt-3 align-item-center justify-content-center">
                            <a href="https://www.facebook.com/poolservicesoftware"><img class="img-fluid" src="images/facebook.svg" alt="Facebook Icon"></a>
                            <a href="https://www.instagram.com/poolservicesoftware/"><img class="img-fluid ms-3" src="images/insta.svg" alt="Facebook Icon"></a>
                        </article>
                        <p class="font_14 linehight_23 text-white m-0 pt-3">Copyright (c) 2021 Pool Service Software, LLC. All rights reserved.</p>
                        <ul class="navbar-nav justify-content-between flex-row pt-4">
                            <li class="nav-item">
                                <a class="nav-link text-white font_14 linehight_19" aria-current="page" href="/privacy">Privacy Notice</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white font_14 linehight_19" aria-current="page" href="/term-of-use">Term of Use</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==== JQuery.JS === -->
        <script src="js/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <!-- ==== Bootstrap.JS === -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

        <!-- ==== Silk.JS === -->
        <script src="js/slick.js"></script>
        <!-- ==== AOS Animation.JS === -->
        <script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
        <!-- ==== Script For Select2 (Multi Select) === -->
        <script>
            $(".js-example-placeholder-single").select2({

                minimumResultsForSearch: -1,
                placeholder: {
                    id: '-1',
                    text: 'Month',
                    id: '-2',
                    text: 'Choose One',
                }
            });
        </script>
        <!-- ==== Script For APP_Slider (Mobile View) === -->
        <script>
            $('.fade-slider').slick({
                autoplay: true,
                fade: true,
                dots: true,
                arrows: false,
                pauseOnHover: true,
                autoplay: true,
                cssEase: 'linear',
            });
        </script>
        <!-- ==== Script For APP_Slider (Desktop View) === -->
        <script>
            function utcformat(str) {
                str = str / -60;
                str = str + '';
                split = str.split("");
                if (split[0] == '-') {
                    split = split[0] + '0' + split[1] + '00';
                } else {
                    split = '+' + '0' + split[0] + '00';
                }
                return split;
            }

            if ($(".js-slider").length) {
                $(function() {
                    $(".js-slider-item").each(function() {
                        $(this).attr("data-item", $(this).index());
                    });
                    $(".js-slider-item[data-item=0]").addClass("active-1");
                    $(".js-slider-item[data-item=1]").addClass("active-2");
                    $(".js-slider-item[data-item=2]").addClass("active-3");
                    $(".js-slider-item[data-item=3]").addClass("active-4");
                    $(".js-slider-item[data-item=4]").addClass("active-5");

                    function sliderInit(slider, arrows) {
                        slider.slick({
                            dots: true,
                            arrows: true,
                            infinite: true,
                            autoplay: true,
                            cssEase: 'linear',
                            slidesToShow: 5,
                            slidesToScroll: 1,
                            speed: 1000,
                            center: true,
                            appendArrows: arrows,
                            pauseOnHover: true,
                            responsive: [{
                                breakpoint: 980,
                                settings: {
                                    slidesToShow: 3,
                                    slidesToScroll: 1
                                }
                            },
                            {
                                breakpoint: 480,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 2
                                }
                            }
                            ]
                        });

                    }
                    setTimeout(function() {
                        $(".js-slider-list").on("init", function() {
                            $(".js-slider-loader").removeClass("loaded");
                        });

                        $(".js-slider-list").each(function() {
                            var $this = $(this),
                            $arrows = $this
                            .closest(".js-slider")
                            .find(".js-slider-arrows");
                            if ($(this).hasClass("js-slider-news")) {
                                newsInit($this, $arrows);
                            } else {
                                sliderInit($this, $arrows);
                            }
                        });

                        $(".js-slider-list").on("beforeChange", function(
                            event,
                            slick,
                            currentSlide,
                            nextSlide
                            ) {
                            $(this).find(".js-slider-item").removeClass("active-1 active-2 active-3 active-4 active-5");
                            $(this).find(".js-slider-item[data-item=" + nextSlide + "]").addClass("active-1").removeClass("active-2 active-3 active-4 active-5");
                            var slickSlideNext1 = $(this).find(".js-slider-item[data-item=" + nextSlide + "]").closest(".slick-slide").next(".slick-slide").find(".js-slider-item").attr("data-item");
                            var slickSlideNext2 = $(this).find(".js-slider-item[data-item=" + nextSlide + "]").closest(".slick-slide").next(".slick-slide").next(".slick-slide").find(".js-slider-item").attr("data-item");
                            var slickSlideNext3 = $(this).find(".js-slider-item[data-item=" + nextSlide + "]").closest(".slick-slide").next(".slick-slide").next(".slick-slide").next(".slick-slide").find(".js-slider-item").attr("data-item");
                            var slickSlideNext4 = $(this).find(".js-slider-item[data-item=" + nextSlide + "]").closest(".slick-slide").next(".slick-slide").next(".slick-slide").next(".slick-slide").next(".slick-slide").find(".js-slider-item").attr("data-item");
                            $(this).find(".js-slider-item[data-item=" + slickSlideNext2 + "]").addClass("active-3");
                            $(this).find(".js-slider-item[data-item=" + slickSlideNext1 + "]").addClass("active-2");
                            $(this).find(".js-slider-item[data-item=" + slickSlideNext3 + "]").addClass("active-4");
                            $(this).find(".js-slider-item[data-item=" + slickSlideNext4 + "]").addClass("active-5");
                        });
                    }, 500);

                });
}
</script>
<!-- ==== Script For add Active_Class (App_Slider Arrow) === -->
<script>
    $(document).ready(function() {
        $(document).on('click', '.slick-arrow', function() {
            $(".slick-arrow").removeClass("active");
            $(this).addClass("active");

        });
        $('.slick-next').addClass('active')
    });
</script>
<!-- ==== Script For add Active_Class (New) === -->
<script>
    $(document).ready(function() {
        $(document).on('click', '.border__item--one', function() {
            $(".border__item--one").removeClass("active");
            $(this).addClass("active");

        });
        $('.slick-next').addClass('active')
    });
</script>
<!-- ==== Script For A_O_S ANimation === -->
<script>
    AOS.init({
        duration: 1200,
    })
</script>
<!-- ==== Script For Tabs (Feature & Work) Desktop Version === -->
<script>
    function features(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = $(".features .tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = $(".features .tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    function weWork(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = $(".we-work .weworktabcontent");

        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = $(".we-work .wework-links");

        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
<script>
    $(document).ready(
        function() {
            var website = '<?php echo env('REDIRECT_DOMAIN'); ?>';
            $(document).on('change', '#user_email', function() {
                var useremail = $(this).val();
                $.ajax({
                    url: website + "api/isemailexist",
                    type: "post",
                    data: {
                        secret: 'websitereg',
                        email: useremail
                    },
                    beforeSend: function() {

                    },
                    success: function(response) {
                        console.log(response)
                    }
                })

            })
        }
        );
    </script>
    <!-- ==== Script For Mobile_Menu (Header) === -->
    <script>
        $(document).on('click', '.openbtn', function() {
            $('.closebtn').show();
            $('#myNav').css('width', '100%');
            $(this).hide();
        })

        $(document).on('click', '.closebtn', function() {
            $('.openbtn').show();
            $('#myNav').css('width', '0');
            $('.closebtn').hide();
            $(this).hide();
        })
    </script>
    <!-- ==== Script For Features_Slider (mobile version & Tablit) === -->
    <script type="text/javascript">
        $('.silk-mobile-slider').slick({
            centerMode: true,
            autoplay: true,
            dots: true,
            arrows: false,
            pauseOnHover: true,
            centerPadding: '60px',
            slidesToShow: 2,
            cssEase: 'linear',
            responsive: [{
                breakpoint: 575,
                settings: {
                    dots: true,
                    arrows: false,
                    centerMode: true,
                    centerPadding: '21px',
                    slidesToShow: 1,
                    autoplay: true,
                    pauseOnHover: true,

                }
            }]

        });
    </script>

<script async src="//code.tidio.co/cq8duxaqvxbazpatc9s9mz2odn6s5baw.js" async></script>
    @yield('script')


</body>

</html>
