<!doctype html>
<html class="no-js" lang="ru">

</html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Вход</title>
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
                        <li class="active"><a href="login.php">Вход</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="log-in pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="well">
                            <div class="new-customer">
                                <h3>Новый покупатель?</h3>
                                <p class="mtb-10"><strong>Регистрация</strong></p>
                                <p>Создайте аккаунт, это даст новые возможности</p>
                                <a class="customer-btn" href="register.php">Продолжить</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="well">
                            <div class="return-customer">
                                <h3 class="mb-10">Вход</h3>
                                <form action="#" method="POST">
                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <input type="text" name="email" placeholder="Enter" id="input-email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Пароль</label>
                                        <input type="password" name="pass" placeholder="Пароль" id="input-password" class="form-control">
                                    </div>
                                    <p class="lost-password"><a href="forgot-password.html">Забыли пароль?</a></p>
                                    <input type="submit" value="Войти" class="return-customer-btn">
                                </form>
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
    <?php 
if (isset($_POST['email'])) { $login = $_POST['email']; if ($login == '') { unset($login);} } 
if (isset($_POST['pass'])) { $password=$_POST['pass']; if ($password =='') { unset($password);} }
if (empty($login) or empty($password))
{
exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
$login = trim($login);
$password = trim($password);
$result2 =login($login,$password);
if ($result2=='TRUE')
{
    //$URL = 'localhost/index.php$login=1';
    header('index.php');
    die;
}
else {
    $_SESSION["message"]="Ошибка входа";
echo "Ошибка! Вы не зарегистрированы.";
}
?>
</body>

</html>