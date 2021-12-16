<html class="no-js" lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Главная</title>
    <meta name="description" content="Default Description">
    <meta name="keywords" content="E-commerce" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/icon/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Lily+Script+One" rel="stylesheet">
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/nivo-slider.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <?php require("$_SERVER[DOCUMENT_ROOT]/php/db.php"); ?>
</head>

<body>
    <div class="wrapper homepage">
        <header>
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 d-center">
                            <div class="header-top-left">
                                <img src="img/icon/call.png" alt="">Тел : +375(29)3429xxx
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="header-top-right">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-2 col-sm-5 col-5">
                            <div class="logo">
                                <a href="index.php"><img alt="logo-image" src="img/logo/logo_2.jpg"></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7 d-none d-lg-block">
                            <div class="middle-menu pull-right">
                                <nav>
                                    <ul class="middle-menu-list">
                                        <li><a href="index.php">Главная</a></li>
                                        <li><a href="shop_1.php?id=1">Товары</a></li>
                                        <li><a href="about.html">О нас</a></li>
                                        <li><a href="contact.html">Поддержка</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-7 col-7">
                            <div class="cart-box text-right">
                                <ul>
                                    <li><a href=""><i class="fa fa-cog"></i></a>
                                        <ul class="ht-dropdown">
                                            <li><a href="login.php">Вход</a></li>
                                            <li><a href="register.php">Регистрация</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-12 d-lg-none">
                            <div class="mobile-menu">
                                <nav>
                                    <ul>
                                        <li><a href="index.php">Главная</a>
                                        </li>
                                        <li><a href="shop.html">Товары</a></li>
                                        <li><a href="about.html">О нас</a></li>
                                        <li><a href="contact.html">Поддержка</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="slider-area pb-60">
            <div class="slider-wrapper theme-default  nivo2">
                <div id="slider" class="nivoSlider">
                    <a href="shop.html"><img src="img/slider/1_1.jpg" data-thumb="img/slider/1_1.jpg" alt="" title="#slider-1-caption1" /></a>
                    <a href="shop.html"><img src="img/slider/2_1.jpg" data-thumb="img/slider/2_1.jpg" alt="" title="#slider-1-caption2" /></a>
                </div>
                <div id="slider-1-caption1" class="nivo-html-caption nivo-caption">
                    <div class="text-content-wrapper">
                        <div class="container">
                            <div class="text-content">
                                <h4 class="title2 wow bounceInLeft mb-16" data-wow-duration="2s" data-wow-delay="0s">Planes.org</h4>
                                <h1 class="title1 wow bounceInRight mb-16" data-wow-duration="2s" data-wow-delay="1s" >Мы делем <br>Небо доступным каждому</h1>
                                <div class="banner-readmore wow bounceInUp mt-35" data-wow-duration="2s" data-wow-delay="2s">
                                    <a class="button slider-btn" href="shop_1.php">К товарам</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slider-1-caption2" class="nivo-html-caption nivo-caption">
                    <div class="text-content-wrapper">
                        <div class="container">
                            <div class="text-content slide-2">
                                <h4 class="title2 wow bounceInLeft mb-16" data-wow-duration="1s" data-wow-delay="1s">Planes.org</h4>
                                <h1 class="title1 wow flipInX  mb-16" data-wow-duration="1s" data-wow-delay="2s">Выбери самолет своей мечты</h1>
                                <div class="banner-readmore wow bounceInUp mt-35" data-wow-duration="1s" data-wow-delay="2s">
                                    <a class="button slider-btn" href="shop_1.php">К товарам</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="upper-banner banner pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="single-banner zoom">
                            <a href="#"><img src="img/banner/banner1.jpg" alt="slider-banner"></a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="single-banner zoom">
                            <a href="#"><img src="img/banner/banner2.jpg" alt="slider-banner"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="new-products pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 order-2">
                        <div class="side-product-list">
                            <div class="group-title">
                                <h2>Лучшие товары</h2>
                            </div>
                            <div class="slider-right-content side-product-list-active owl-carousel">
                                <div class="double-pro">
                                    <?php require("$_SERVER[DOCUMENT_ROOT]/php/get_item_2.php"); ?>  

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8  order-lg-2">
                        <div class="new-pro-content">
                            <div class="pro-tab-title border-line">
                                <ul class="nav product-list product-tab-list">
                                    <li><a class="active" data-toggle="tab" href="#new-arrival">Новинки</a></li>
                                    <li><a data-toggle="tab" href="#toprated">Популярное</a></li>
                                    <li><a data-toggle="tab" href="#new-arrival">Лучшее</a></li>
                                </ul>
                            </div>
                            <div class="tab-content product-tab-content jump">
                                <div id="new-arrival" class="tab-pane active">
                                    <div class="new-pro-active owl-carousel">
                                        <?php require("$_SERVER[DOCUMENT_ROOT]/php/get_item_2.php"); ?> 
                                    </div>
                                </div>
                                <div id="toprated" class="tab-pane">
                                    <div class="new-pro-active owl-carousel">
                                        <?php require("$_SERVER[DOCUMENT_ROOT]/php/get_item_2.php"); ?> 
                                    </div>
                                </div>
                            </div>
                            <div class="single-banner zoom mt-30 mt-sm-10">
                                <a href="#"><img src="img/banner/tab-baner.jpg" alt="slider-banner"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="company-policy pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-policy">
                            <div class="icone-img">
                                <img src="img/icon/1.png" alt="">
                            </div>
                            <div class="policy-desc">
                                <h3>Бесплатная доставка</h3>
                                <p>В любую точку мира</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-policy">
                            <div class="icone-img">
                                <img src="img/icon/2.png" alt="">
                            </div>
                            <div class="policy-desc">
                                <h3>Круглосуточная поддержка</h3>
                                <p>В любое время, в любом месте</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-policy">
                            <div class="icone-img">
                                <img src="img/icon/3.png" alt="">
                            </div>
                            <div class="policy-desc">
                                <h3>Возврат средств</h3>
                                <p>Если что-то пойдет не так</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-policy">
                            <div class="icone-img">
                                <img src="img/icon/4.png" alt="">
                            </div>
                            <div class="policy-desc">
                                <h3>Низкие цены</h3>
                                <p>Ниже вы нигде не найдете</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-area pb-60">
            <div class="container">
                <div class="brand-banner owl-carousel">
                <div class="single-brand">
                        <a href="#"><img class="img" src="img/brand/1.jpg" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/2-1.png" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/3.jpg" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/4-1.png" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/5.jpg" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img class="img" src="img/brand/1.jpg" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/2-1.png" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/3.jpg" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/4-1.png" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/5.jpg" alt="brand-image"></a>
                    </div>
                </div>
            </div>
        </div>
        <footer class="off-white-bg">
            <div class="footer-top pt-50 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mr-auto ml-auto">
                            <div class="newsletter text-center">
                                <div class="main-news-desc">
                                    <div class="news-desc">
                                        <h3>Всегда узнавайте всё первым</h3>
                                        <p>Введите e-mail для получения рассылки о свежих скидках</p>
                                    </div>
                                </div>
                                <div class="newsletter-box">
                                    <form action="#">
                                        <input class="subscribe" placeholder="Enter your email address" name="email" id="subscribe" type="text">
                                        <button type="submit" class="submit">Подписаться</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4  col-md-7 col-sm-6">
                            <div class="single-footer">
                                <h3>Поддержка</h3>
                                <div class="footer-content">
                                    <div class="loc-address">
                                        <span><i class="fa fa-map-marker"></i>Ближе чем вы думаете</span>
                                        <span><i class="fa fa-envelope-o"></i>Почта : yourinfo@example.com</span>
                                        <span><i class="fa fa-phone"></i>Тел: +375(29)3429ххх</span>
                                    </div>
                                    <div class="payment-mth">
                                        <a href="#"><img class="img" src="img/footer/1.png" alt="payment-image"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom off-white-bg2">
                <div class="container">
                    <div class="footer-bottom-content">
                        <p class="copy-right-text">Copyright © <a href="#">Jantrik</a> Все права защищены.</p>
                        <div class="footer-social-content">
                            <ul class="social-content-list">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-wifi"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/jquery.meanmenu.min.js"></script>
    <script src="js/jquery.scrollUp.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nivo.slider.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>