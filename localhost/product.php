<!doctype html>
<html class="no-js" lang="ru">

<head>
    <?php require("$_SERVER[DOCUMENT_ROOT]/php/db.php"); ?>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Товар <?php echo get_single_by_id($_GET['id'])["name"]?></title>
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
</head>

<body>
    <div class="wrapper">
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
                                        <li><a href="shop_1.php">Товары</a></li>
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
        <div class="breadcrumb-area ptb-60 ptb-sm-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.php">Главная</a></li>
                        <li><a href="shop_1.php">Товары</a></li>
                        <li class="active"><a href="product.php">Товар</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-product-thumbnail pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="tab-content">
                            <div id="thumb1" class="tab-pane active">
                                <a data-fancybox="images" href="img/products/1.jpg"><img src="<?php echo get_single_by_id($_GET['id'])["image"]?>" alt="product-view"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="thubnail-desc fix">
                            <h3 class="product-header"><?php echo get_single_by_id($_GET['id'])["name"]?></h3>
                            <div class="pro-price mb-10">
                                <p><span class="price"><?php echo get_single_by_id($_GET['id'])["cost"]?></span></p>
                            </div>
                            <div class="box-quantity">
                                <form action="#">
                                    <a class="add-cart" href="cart.html">Приобрести</a>
                                </form>
                            <div class="thumnail-desc pb-">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <ul class="main-thumb-desc nav">
                                                <li><a class="active" data-toggle="tab" href="#dtail">Описание</a></li>
                                            </ul>
                                            <div class="tab-content thumb-content border-default">
                                                <div id="dtail" class="tab-pane in active">
                                                <?php echo get_single_by_id($_GET['id'])["decript"]?>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="related-product pb-30">
            <div class="container">
                <div class="usel-product">
                    <div class="group-title">
                        <h2>Похожие модели</h2>
                    </div>
                    <div class="new-upsell-pro owl-carousel">
                        <?php
                            $single = get_single_all();
                            foreach ($single as $singles):
                            if($singles["tag"] == $_GET['tag']) :?>
                            <div id="<?php echo $singles["id"] ?>" class="single-product">
                                <div class="pro-img">
                                        <a href="product.php?id=<?php echo $singles["id"]?>">
                                            <img class="primary-img" src="<?php echo $singles["image"] ?>" alt="single-product">
                                        </a>
                                    </div>
                                    <div class="pro-content">
                                        <h4><a href="product.php?id=<?php echo $singles["id"]?>"><?php echo $singles["name"] ?></a></h4>
                                        <p><span class="price"><?php echo $singles["cost"] ?></span></p>
                                    <div class="pro-actions">
                                        <div class="actions-secondary">
                                            <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Приобрести</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif;
                                endforeach; ?>
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