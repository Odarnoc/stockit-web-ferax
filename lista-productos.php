<?php
session_start();
if(!isset($_SESSION["token"])){
    header("Location: iniciar-sesion.php");
}
$key=$_SESSION["token"];

?>

<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Renta los mejores productos con Stockit</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href="assets/css/vendor/fontawesome-stars.css">
    <!-- Ion Icon -->
    <link rel="stylesheet" href="assets/css/vendor/ion-fonts.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <!-- Animation -->
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
    <!-- Venobox.css -->
    <link rel="stylesheet" href="assets/css/plugins/venobox.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">


    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from the above) -->
    <!--
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    -->

    <!-- Main Style CSS (Please use minify version for better website load performance) -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--<link rel="stylesheet" href="assets/css/style.min.css">-->


    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="template-color-1" >

    <!-- MainMenu-Area -->

    <?php include("menus/menu_logged_in.php"); ?>

    <div class="main-wrapper" style="margin-top:80px;">

        <!-- Begin Torress's Breadcrumb Area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Buscar productos</h2>
                    <ul>
                        <li><a href="index.html">Inicio</a></li>
                        <li>Productos</li>
                        <li class="active">Busqueda</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Torress's Breadcrumb Area End Here -->

        <!-- Begin Torress's Content Wrapper Area -->
        <div class="torress-content_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-2 order-lg-1">
                        <div class="torress-sidebar-catagories_area">

                            <div class="torress-sidebar_categories category-module">
                                <div class="torress-categories_title">
                                    <h5>Categorias</h5>
                                </div>
                                <div class="sidebar-categories_menu">
                                    <ul>
                                        <li class="has-sub"><a href="javascript:void(0)">Electrónica <i class="ion-chevron-right"></i></a>
                                            <ul>
                                                <li><a href="#0">Item electrónica</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-sub"><a href="javascript:void(0)">Muebles<i class="ion-chevron-right"></i></a>
                                            <ul>
                                                <li><a href="#0">Item muebles</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-sub"><a href="javascript:void(0)">Herramientas <i class="ion-chevron-right"></i></a>
                                            <ul>
                                                <li><a href="#0">Item herramientas</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-sub"><a href="javascript:void(0)">Hogar<i class="ion-chevron-right"></i></a>
                                            <ul>
                                                <li><a href="#0">Item hogar</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-sub"><a href="javascript:void(0)">Autos<i class="ion-chevron-right"></i></a>
                                            <ul>
                                                <li><a href="#0">Item autos</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-sub"><a href="javascriptEvoid(0)">Foto y Video<i class="ion-chevron-right"></i></a>
                                            <ul>
                                                <li><a href="#0">Item foto y video</a></li>
                                            </ul>
                                        </li>

                                        <li class="has-sub"><a href="javascriptEvoid(0)">Otro<i class="ion-chevron-right"></i></a>
                                            <ul>
                                                <li><a href="#0">Item otro</a></li>
                                            </ul>
                                        </li>
                                        <li style="display: none"><a href="javascript:void(0)">Sin categoria</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="torress-sidebar_categories torress-banner_area sidebar-banner_area">
                                <div class="img-hover_effect">
                                    <div class="banner-img">
                                        <a href="javascript:void(0)">
                                            <img class="img-full" src="assets/images/banner/6.jpg" alt="Torress's Banner">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 order-1 order-lg-2">
                        <div class="shop-toolbar">
                            <div class="product-view-mode">
                                <a class="active grid-3" data-target="gridview-3" data-toggle="tooltip" data-placement="top" title="Grid View"><i class="fa fa-th"></i></a>
                                <a class="list" data-target="listview" data-toggle="tooltip" data-placement="top" title="List View"><i class="fa fa-th-list"></i></a>
                            </div>
                            <div class="product-page_count">
                                <p>Mostrando <span id="cant_prods"></span> resultados</p>
                            </div>
                        </div>

                        <div class="shop-product-wrap grid gridview-3 row" id="lista-productos">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Torress's Content Wrapper Area End Here -->

    </div>

    <!-- Footer -->
    <footer id="footer-home">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-left">
                        <img src="images/logo-stockit.png" alt="">
                        <p class="p1">© Todos los derechos son reservados</p>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="footer-center">
                        <p class="p1">
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-right">
                        <p class="p1">
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a></p>
                    </div>

                </div>
            </div>

        </div>

    </footer>
    <!-- Footer-Area-End -->


    <!-- JS
============================================ -->

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Popper JS -->
    <script src="assets/js/vendor/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <!-- Slick Slider JS -->
    <script src="assets/js/plugins/slick.min.js"></script>
    <!-- Countdown JS -->
    <script src="assets/js/plugins/countdown.js"></script>
    <!-- Barrating JS -->
    <script src="assets/js/plugins/jquery.barrating.min.js"></script>
    <!-- Counterup JS -->
    <script src="assets/js/plugins/jquery.counterup.js"></script>
    <!-- Nice Select JS -->
    <script src="assets/js/plugins/jquery.nice-select.js"></script>
    <!-- Sticky Sidebar JS -->
    <script src="assets/js/plugins/jquery.sticky-sidebar.js"></script>
    <!-- jQuery UI -->
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <!-- jQuery UI Touch Punch -->
    <script src="assets/js/plugins/jquery.ui.touch-punch.min.js"></script>
    <!-- Venobox JS -->
    <script src="assets/js/plugins/venobox.min.js"></script>
    <!-- Scroll Top JS -->
    <script src="assets/js/plugins/scroll-top.js"></script>
    <!-- Theia Sticky Sidebar JS -->
    <script src="assets/js/plugins/theia-sticky-sidebar.min.js"></script>
    <!-- Waypoints JS -->
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <!-- ElevateZoom JS -->
    <script src="assets/js/plugins/jquery.elevateZoom-3.0.8.min.js"></script>
    <!-- Images loaded JS -->
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <!-- Isotope JS -->
    <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
    <!-- Ajax Mail JS -->
    <script src="assets/js/ajax-mail.js"></script>
    

    <!-- Vendor & Plugins JS (Please remove the comment from below vendor.min.js & plugins.min.js for better website load performance and remove js files from avobe) -->
    <!--
<script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/plugins/plugins.min.js"></script>
-->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!--Custom scripts-->
    <script>
        var keyt = "<?php echo $key; ?>";
    </script>
    <script src="js/lista-productos.js"></script>

</body></html>


