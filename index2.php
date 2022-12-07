<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Thrift Pop</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Start Main Top -->
    <header class="main-header" style="padding: 15px;">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    </button>
                    <a class="navbar-brand" href="index2.php"><img src="images/brand.png" style="width: 50%;" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index2.php">Home</a></li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown">Promo</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="sedangpromo.php">Sedang Promo</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                    </div>
                                    <!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="cart.php" class="nav-link">Keranjang</a>
                        </li>
                        <?php
                        session_start();
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="profil.php"><?= $_SESSION['username']; ?></a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->
    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Cari">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-left">
                <img src="images/banner1.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Thrift Pop</strong></h1>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Thrift Pop</strong></h1>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-right">
                <img src="images/banner2.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Thrift Pop</strong></h1>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/jaket.jpg" alt="" />
                        <a class="btn hvr-hover" href="jaket.php">Jaket</a>
                    </div>
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/hoodie.jfif" alt="" />
                        <a class="btn hvr-hover" href="hoodie.php">Hoodie</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/kaospolos.jfif" alt="" />
                        <a class="btn hvr-hover" href="kaos.php">Kaos</a>
                    </div>
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/434856/item/goods_57_434856.jpg?width=1600&impolicy=quality_75" alt="" />
                        <a class="btn hvr-hover" href="celana.php">Celana</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="https://cf.shopee.co.id/file/91d26f7215f1ffba1dfa983f6aa06d84" alt="" />
                        <a class="btn hvr-hover" href="vest.php">Vest</a>
                    </div>
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/topi.jpg" alt="" />
                        <a class="btn hvr-hover" href="topi.php">Topi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->
    <!-- start footer -->
    <div class="footer-basic" style="text-align:center ; background-color:#d33b33;">
        <footer>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#" style="color:#ffffff ;">Home</a></li>
                <li class="list-inline-item"><a href="#" style="color:#ffffff ;">Services</a></li>
                <li class="list-inline-item"><a href="#" style="color:#ffffff ;">About</a></li>
                <li class="list-inline-item"><a href="#" style="color:#ffffff ;">Terms</a></li>
                <li class="list-inline-item"><a href="#" style="color:#ffffff ;">Privacy Policy</a></li>
            </ul>
            <p class="copyright" style="color:#ffffff ;">Thrift Pop © 2022</p>
        </footer>
    </div>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>