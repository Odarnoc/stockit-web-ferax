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

</head>

<body class="template-color-1">

    <div class="main-wrapper">

        <!-- Begin Torress's Header Main Area -->
        <header class="header-main_area">
            <div class="header-top_area">
                <div class="container">
                </div>
            </div>
            <div class="header-middle_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-5 col-sm-5">
                            <div class="header-logo">
                                <a href="index.html">
                                    <img src="images/logo-stockit.png" alt="Stockit Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="hm-form_area">
                                <form action="#" class="hm-searchbox">
                                    <input type="text" placeholder="Buscar...">
                                    <button class="torress-search_btn" type="submit"><i class="ion-android-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 d-none d-lg-block">
                            <div class="hm-minicart_area">
                                <ul>
                                    <li>
                                        <a href="">
                                            <div class="minicart-icon">
                                                <i class="ion-bag"></i>
                                                <span class="item-count">02</span>
                                            </div>
                                            <div class="minicart-title">
                                                <span class="item_total">$157.00</span>
                                            </div>
                                        </a>
                                        <ul class="minicart-body">
                                            <li class="minicart-item_area">
                                                <div class="minicart-single_item">
                                                    <div class="product-item_remove">
                                                        <span class="ion-android-close" title="Remove This Item"></span>
                                                    </div>
                                                    <div class="minicart-img">
                                                        <a href="#0">
                                                            <img src="assets/images/product/medium-size/1.jpg" alt="Torress's Product Image">
                                                        </a>
                                                    </div>
                                                    <div class="minicart-content">
                                                        <div class="product-name">
                                                            <h6>
                                                                <a href="#0">
                                                                    Proyector Epson S39
                                                                </a>
                                                            </h6>
                                                        </div>
                                                        <span class="product-quantity">Cantidad 1</span>
                                                        <div class="price-box">
                                                            <span class="new-price">$399.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="minicart-item_area">
                                                <div class="minicart-single_item">
                                                    <div class="product-item_remove">
                                                        <span class="ion-android-close" title="Remove This Item"></span>
                                                    </div>
                                                    <div class="minicart-img">
                                                        <a href="#0">
                                                            <img src="assets/images/product/medium-size/3.jpg" alt="Torress's Product Image">
                                                        </a>
                                                    </div>
                                                    <div class="minicart-content">
                                                        <div class="product-name">
                                                            <h6>
                                                                <a href="#0">
                                                                    Asador Circular
                                                                </a>
                                                            </h6>
                                                        </div>
                                                        <span class="product-quantity">Cantidad 1</span>
                                                        <div class="price-box">
                                                            <span class="new-price">$199.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="price_content">
                                                    <div class="cart-subtotals">
                                                        <div class="products subtotal-list">
                                                            <span class="label">Subtotal</span>
                                                            <span class="value">$598.00</span>
                                                        </div>
                                                        <div class="shipping subtotal-list">
                                                            <span class="label">Envío</span>
                                                            <span class="value">$0.00</span>
                                                        </div>
                                                        <div class="tax subtotal-list">
                                                            <span class="label">IVA</span>
                                                            <span class="value">$95.68</span>
                                                        </div>
                                                        <div class="cart-total subtotal-list">
                                                            <span class="label">Total</span>
                                                            <span class="value">$693.68</span>
                                                        </div>
                                                    </div>
                                                    <div class="minicart-button">
                                                        <a class="torress-btn torress-btn_fullwidth" href="checkout.html">Continuar</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 d-block d-lg-none">
                            <div class="mobile-menu_area">
                                <ul>
                                    <li class="minicart-area">
                                        <a href="cart.html"><i class="ion-bag"></i><span class="item-count">2</span></a>
                                    </li>
                                    <li>
                                        <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white d-lg-none d-block">
                                            <i class="ion-navicon"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 d-none d-lg-block position-static">
                            <div class="main-menu_area">
                                <nav class="main_nav">
                                    <ul>
                                        <li class="dropdown-holder"><a href="index.html">Inicio</a>
                                        </li>
                                        <li class="megamenu-holder"><a href="shop-left-sidebar.html">Categorias</a>
                                            <ul class="torress-megamenu">
                                                <li><span class="megamenu-title">Electrónica</span>
                                                    <ul>
                                                        <li><a href="#0">Item Electrónica</a></li>
                                                        <li><a href="#0">Item Electrónica</a></li>
                                                        <li><a href="#0">Item Electrónica</a></li>
                                                        <li><a href="#0">Item Electrónica</a></li>
                                                        <li><a href="#0">Item Electrónica</a></li>
                                                        <li><a href="#0">Item Electrónica</a></li>
                                                    </ul>
                                                </li>
                                                <li><span class="megamenu-title">Muebles</span>
                                                    <ul>
                                                        <li><a href="#0">Item Muebles</a></li>
                                                        <li><a href="#0">Item Muebles</a></li>
                                                        <li><a href="#0">Item Muebles</a></li>
                                                        <li><a href="#0">Item Muebles</a></li>
                                                        <li><a href="#0">Item Muebles</a></li>
                                                        <li><a href="#0">Item Muebles</a></li>
                                                    </ul>
                                                </li>
                                                <li><span class="megamenu-title">Herramientas</span>
                                                    <ul>
                                                        <li><a href="#0">Item Herramientas</a></li>
                                                        <li><a href="#0">Item Herramientas</a></li>
                                                        <li><a href="#0">Item Herramientas</a></li>
                                                        <li><a href="#0">Item Herramientas</a></li>
                                                        <li><a href="#0">Item Herramientas</a></li>
                                                        <li><a href="#0">Item Herramientas</a></li>
                                                    </ul>
                                                </li>
                                                <li><span class="megamenu-title">Hogar</span>
                                                    <ul>
                                                        <li><a href="#0">Item Hogar</a></li>
                                                        <li><a href="#0">Item Hogar</a></li>
                                                        <li><a href="#0">Item Hogar</a></li>
                                                        <li><a href="#0">Item Hogar</a></li>
                                                        <li><a href="#0">Item Hogar</a></li>
                                                        <li><a href="#0">Item Hogar</a></li>
                                                    </ul>
                                                </li>

                                                <li><span class="megamenu-title">Foto y Video</span>
                                                    <ul>
                                                        <li><a href="#0">Item Foto y Video</a></li>
                                                        <li><a href="#0">Item Foto y Video</a></li>
                                                        <li><a href="#0">Item Foto y Video</a></li>
                                                        <li><a href="#0">Item Foto y Video</a></li>
                                                        <li><a href="#0">Item Foto y Video</a></li>
                                                        <li><a href="#0">Item Foto y Video</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                        <li><a href="mi-stockit.php">Mi Stockit</a></li>

                                        <li><a href="interesados.php">Interesados</a></li>

                                        <li><a href="rentas.php">Rentas</a></li>

                                        <li><a href="mis-favoritos.php">Favoritos</a></li>

                                        <li><a href="mi-cuenta.php">Mi cuenta</a></li>


                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom_area header-sticky stick">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-5 col-sm-5">
                            <div class="header-logo">
                                <a href="index.html">
                                    <img style="margin-top: -5px;" src="images/logo-stockit.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 d-none d-lg-block position-static">
                            <div class="main-menu_area">
                                <nav class="main_nav">
                                    <ul>
                                        <li class="dropdown-holder"><a href="index.html">Inicio</a>
                                        </li>
                                        <li class="megamenu-holder"><a href="shop-left-sidebar.html">Categorias</a>
                                            <ul class="torress-megamenu">
                                                <li><span class="megamenu-title">Electrónica</span>
                                                    <ul>
                                                        <li><a href="#0">Item Electrónica</a></li>
                                                        <li><a href="#0">Item Electrónica</a></li>
                                                        <li><a href="#0">Item Electrónica</a></li>
                                                        <li><a href="#0">Item Electrónica</a></li>
                                                        <li><a href="#0">Item Electrónica</a></li>
                                                        <li><a href="#0">Item Electrónica</a></li>
                                                    </ul>
                                                </li>
                                                <li><span class="megamenu-title">Muebles</span>
                                                    <ul>
                                                        <li><a href="#0">Item Muebles</a></li>
                                                        <li><a href="#0">Item Muebles</a></li>
                                                        <li><a href="#0">Item Muebles</a></li>
                                                        <li><a href="#0">Item Muebles</a></li>
                                                        <li><a href="#0">Item Muebles</a></li>
                                                        <li><a href="#0">Item Muebles</a></li>
                                                    </ul>
                                                </li>
                                                <li><span class="megamenu-title">Herramientas</span>
                                                    <ul>
                                                        <li><a href="#0">Item Herramientas</a></li>
                                                        <li><a href="#0">Item Herramientas</a></li>
                                                        <li><a href="#0">Item Herramientas</a></li>
                                                        <li><a href="#0">Item Herramientas</a></li>
                                                        <li><a href="#0">Item Herramientas</a></li>
                                                        <li><a href="#0">Item Herramientas</a></li>
                                                    </ul>
                                                </li>
                                                <li><span class="megamenu-title">Hogar</span>
                                                    <ul>
                                                        <li><a href="#0">Item Hogar</a></li>
                                                        <li><a href="#0">Item Hogar</a></li>
                                                        <li><a href="#0">Item Hogar</a></li>
                                                        <li><a href="#0">Item Hogar</a></li>
                                                        <li><a href="#0">Item Hogar</a></li>
                                                        <li><a href="#0">Item Hogar</a></li>
                                                    </ul>
                                                </li>

                                                <li><span class="megamenu-title">Foto y Video</span>
                                                    <ul>
                                                        <li><a href="#0">Item Foto y Video</a></li>
                                                        <li><a href="#0">Item Foto y Video</a></li>
                                                        <li><a href="#0">Item Foto y Video</a></li>
                                                        <li><a href="#0">Item Foto y Video</a></li>
                                                        <li><a href="#0">Item Foto y Video</a></li>
                                                        <li><a href="#0">Item Foto y Video</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                        <li><a href="blog-left-sidebar.php">Ofertas</a></li>

                                        <li><a href="javascript:void(0)">Iniciar sesión</a></li>

                                        <li><a href="contact.php">Contacto</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 d-block d-lg-none">
                            <div class="mobile-menu_area">
                                <ul>
                                    <li class="minicart-area">
                                        <a href="cart.html"><i class="ion-bag"></i><span class="item-count">2</span></a>
                                    </li>
                                    <li>
                                        <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white d-lg-none d-block">
                                            <i class="ion-navicon"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu_wrapper" id="mobileMenu">
                <div class="offcanvas-menu-inner">
                    <div class="container">
                        <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                        <div class="offcanvas-inner_search">
                            <form action="#" class="hm-searchbox">
                                <input type="text" placeholder="Buscar...">
                                <button class="search_btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                        <nav class="offcanvas-navigation">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children active"><a href="index.html"><span class="mm-text">Inicio</span></a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="shop-left-sidebar.html">
                                        <span class="mm-text">Categorias</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="shop-left-sidebar.html">
                                                <span class="mm-text">Electrónica</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="shop-3-column.html">
                                                        <span class="mm-text">Item Electrónica</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-left-sidebar.html">
                                                        <span class="mm-text">Item Electrónica</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-right-sidebar.html">
                                                        <span class="mm-text">Item Electrónica</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="shop-left-sidebar.html">
                                                <span class="mm-text">Muebles</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="shop-3-column.html">
                                                        <span class="mm-text">Item Muebles</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-left-sidebar.html">
                                                        <span class="mm-text">Item Muebles</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-right-sidebar.html">
                                                        <span class="mm-text">Item Muebles</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="shop-left-sidebar.html">
                                                <span class="mm-text">Herramientas</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="shop-3-column.html">
                                                        <span class="mm-text">Item Herramientas</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-left-sidebar.html">
                                                        <span class="mm-text">Item Herramientas</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-right-sidebar.html">
                                                        <span class="mm-text">Item Herramientas</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="shop-left-sidebar.html">
                                                <span class="mm-text">Hogar</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="shop-3-column.html">
                                                        <span class="mm-text">Item Hogar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-left-sidebar.html">
                                                        <span class="mm-text">Item Hogar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-right-sidebar.html">
                                                        <span class="mm-text">Item Hogar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="shop-left-sidebar.html">
                                                <span class="mm-text">Autos</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="shop-3-column.html">
                                                        <span class="mm-text">Item Autos</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-left-sidebar.html">
                                                        <span class="mm-text">Item Autos</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-right-sidebar.html">
                                                        <span class="mm-text">Item Autos</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="shop-left-sidebar.html">
                                                <span class="mm-text">Foto y Video</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="shop-3-column.html">
                                                        <span class="mm-text">Item Foto y Video</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-left-sidebar.html">
                                                        <span class="mm-text">Item Foto y Video</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-right-sidebar.html">
                                                        <span class="mm-text">Item Foto y Video</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="shop-left-sidebar.html">
                                                <span class="mm-text">Otro</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="shop-3-column.html">
                                                        <span class="mm-text">Item Otro</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-left-sidebar.html">
                                                        <span class="mm-text">Item Otro</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-right-sidebar.html">
                                                        <span class="mm-text">Item Otro</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                <li class="menu-item-has-children active"><a href="#0"><span class="mm-text">Ofertas</span></a>
                                </li>

                            </ul>
                        </nav>
                        <nav class="offcanvas-navigation user-setting_area">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children active"><a href="#0"><span class="mm-text">Registrarte</span></a>
                                </li>
                                <li class="menu-item-has-children active"><a href="#0"><span class="mm-text">Iniciar sesión</span></a>
                                </li>
                                <li class="menu-item-has-children active"><a href="#0"><span class="mm-text">Contacto</span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Torress's Header Main Area End Here -->

        <!-- Begin Torress's Breadcrumb Area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Historial</h2>
                    <ul>
                        <li><a href="index.html">Inicio</a></li>
                        <li>Mi cuenta</li>
                        <li>Historial</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Torress's Breadcrumb Area End Here -->


        <section class="sec-mi-stockit">
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        <div class="thumbnail">
                            <div class="d-img-thumbnail">
                                <img src="images/proyector.png" alt="Slide11">
                            </div>
                            <div class="info-item-historial">
                                <span class="badge badge-info"><i class="fas fa-history"></i> 05/11/2019</span>
                                <p class="t1">Proyector Epson S39</p>
                                <p class="t2">$399.00 <sup></sup> / día</p>
                                <a class="btn btn-slide-productos" href="#" role="button">Ver producto <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


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

</body></html>
