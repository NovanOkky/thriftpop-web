<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

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

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

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



    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                    </div>
                </div>
                <div class="row product-categorie-box">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                    <div class="products-single fix">
                                        <div class="box-img-hover">
                                            <img src="https://www.planetsports.asia/media/catalog/product/cache/932b880b51303ef8bdfacfab1d810ff5/0/1/01-NEW-ERA-E04HPNRA0-NRA60112617-Navy_1.jpg" class="img-fluid" alt="Image">
                                            <div class="mask-icon">
                                                <a class="cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="why-text">
                                            <h4>Topi New Era</h4>
                                            <h5> $9.79</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                    <div class="products-single fix">
                                        <div class="box-img-hover">
                                            <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2021/10/20/119bb61f-b268-432a-892d-12a29b7d861c.jpg" class="img-fluid" alt="Image">
                                            <div class="mask-icon">
                                                <a class="cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="why-text">
                                            <h4>Lorem ipsum dolor sit amet</h4>
                                            <h5> $9.79</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                    <div class="products-single fix">
                                        <div class="box-img-hover">
                                            <img src="https://media.karousell.com/media/photos/products/2019/03/18/kaos_nike_hitam_1552902383_fbc17cc80_progressive" class="img-fluid" alt="Image">
                                            <div class="mask-icon">
                                                <a class="cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="why-text">
                                            <h4>Lorem ipsum dolor sit amet</h4>
                                            <h5> $9.79</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                    <div class="products-single fix">
                                        <div class="box-img-hover">
                                            <img src="https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/439807/item/goods_36_439807.jpg?width=1600&impolicy=quality_75" class="img-fluid" alt="Image">
                                            <div class="mask-icon">
                                                <a class="cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="why-text">
                                            <h4>Lorem ipsum dolor sit amet</h4>
                                            <h5> $9.79</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                    <div class="products-single fix">
                                        <div class="box-img-hover">
                                            <img src="https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/433797/item/goods_69_433797.jpg?width=1008&impolicy=quality_75" class="img-fluid" alt="Image">
                                            <div class="mask-icon">
                                                <a class="cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="why-text">
                                            <h4>Lorem ipsum dolor sit amet</h4>
                                            <h5> $9.79</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                    <div class="products-single fix">
                                        <div class="box-img-hover">
                                            <img src="https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/435378/item/goods_80_435378.jpg?width=1008&impolicy=quality_75" class="img-fluid" alt="Image">
                                            <div class="mask-icon">
                                                <a class="cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="why-text">
                                            <h4>Lorem ipsum dolor sit amet</h4>
                                            <h5> $9.79</h5>
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

    <!-- End Shop Page -->
    <!-- <footer class="deneb_footer">
        <div class="widget_wrapper" style="background-image: url(http://demo.tortoizthemes.com/deneb-html/deneb-ltr/assets/images/footer_bg.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="widget widegt_about">
                            <div class="widget_title">
                                <img src="assets/images/logo_1.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="widget widget_link">
                            <div class="widget_title">
                                <h4>Links</h4>
                            </div>
                            <ul>
                                <li><a href="#" style="color:#000000 ;">About Us</a></li>
                                <li><a href="#" style="color:#000000 ;">Services</a></li>
                                <li><a href="#" style="color:#000000 ;">Portfolio</a></li>
                                <li><a href="#" style="color:#000000 ;">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="widget widget_contact">
                            <div class="widget_title">
                                <h4>Contact Us</h4>
                            </div>
                            <div class="contact_info">
                                <div class="single_info">
                                    <div class="icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="info">
                                        <p><a href="tel:+919246147999" style="color:#000000 ;">1800-121-3637</a></p>
                                        <p><a href="tel:+919246147999" style="color:#000000 ;">+91 924-614-7999</a></p>
                                    </div>
                                </div>
                                <div class="single_info">
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="info">
                                        <p><a href="mailto:info@deneb.com" style="color:#000000 ;">info@deneb.com</a></p>
                                        <p><a href="mailto:services@deneb.com" style="color:#000000 ;">services@deneb.com</a></p>
                                    </div>
                                </div>
                                <div class="single_info">
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info">
                                        <p>125, Park street aven, Brocklyn,<span>Newyork.</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright_text">
                            <p>Copyright &copy; 2020 All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

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
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>