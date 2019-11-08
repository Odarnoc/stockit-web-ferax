<?php
    session_start();
    if(!isset($_SESSION["token"])){
        header("Location: iniciar-sesion.php");
    }
    $key=$_SESSION["token"];
    
    $idProducto = $_GET['id'];
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Sumon Rahman">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Asador circular, Chapala, Jalisco | Stockit</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKW5XPX9NHuUvH1kByiebdSvHVrRPYFoo&libraries=places&callback=initialize"></script>

</head>

<body data-spy="scroll" data-target=".mainmenu-area">

    <!-- MainMenu-Area -->
    <nav id="nav-out-header" class="mainmenu-area" data-spy="" data-offset-top="0">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary_menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#home_page"><img src="images/logo-stockit.png" alt="Logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="primary_menu">
                <ul class="nav navbar-nav mainmenu">
                    <li><a href="index.html#home_page">Inicio</a></li>
                    <li><a href="index.html#sec-categorias">Categorias</a></li>
                    <li><a href="index.html#sec-slider-productos">Populares</a></li>
                    <li><a href="index.html#sec-testimonios">Testimonios</a></li>
                    <li><a href="index.html#sec-contacto">Contacto</a></li>
                    <li><a href="registrarte.html">Registrarte</a></li>
                </ul>
                <div class="right-button hidden-xs">
                    <a href="iniciar-sesion.html">Iniciar sesión</a>
                </div>
            </div>
        </div>
    </nav>

    <section id="sec-producto-ind" class="sec-gray">
        <div class="container" id="prod-ineterno"></div>
    </section>

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
                            <a href="#home_page">Inicio</a>
                            <a href="#sec-categorias">Categorias</a>
                            <a href="#sec-slider-productos">Populares</a>
                            <a href="#sec-testimonios">Testimonios</a>
                            <a href="#sec-contacto">Contacto</a>
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


    <!--Vendor-JS-->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/jquery-ui.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="js/ajaxchimp.js"></script>
    <script src="js/scrollUp.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/wow.min.js"></script>
    <!--Main-active-JS-->
    <script src="js/main.js"></script>
    <script src="js/map-style.js"></script>

     <!--Custom scripts-->
    <script>
        var keyt = "<?php echo $key; ?>";
        var idProductoJs = "<?php echo $idProducto; ?>";
    </script>
    <script src="js/prod-individual.js"></script>
    
    <script>
        $('#myCarousel').carousel({
            interval: 5000
        });
    </script>
</body></html>
