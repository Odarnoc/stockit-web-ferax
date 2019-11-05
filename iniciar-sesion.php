<?php
session_start();
if(isset($_SESSION["token"])){
    header("Location: index.php");
}

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
    <title>Iniciar sesión | Stockit</title>
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
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".mainmenu-area">

    <!-- MainMenu-Area -->
    <nav id="nav-out-header" class="mainmenu-area" data-spy="affix" data-offset-top="0">
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
                    <li><a href="index.php#home_page">Inicio</a></li>
                    <li><a href="index.php#sec-categorias">Categorias</a></li>
                    <li><a href="index.php#sec-slider-productos">Populares</a></li>
                    <li><a href="index.php#sec-testimonios">Testimonios</a></li>
                    <li><a href="index.php#sec-contacto">Contacto</a></li>
                    <li class="active"><a href="">Iniciar sesión</a></li>
                </ul>
                <div class="right-button hidden-xs">
                    <a href="registrarte.html">Registrarte</a>
                </div>
            </div>
        </div>
    </nav>


    <section id="sec-registrarte" class="sec-gray">

        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="d-form-registrarte">
                        <p class="t1"><img src="images/icon-stockit.png" alt=""> Iniciar sesión</p>
                        <form class="form-registrarte">
                           
                            <div class="form-group">
                                <label class="label-form">Correo electrónico</label>
                                <input type="email" class="form-control input-form" id="email" aria-describedby="emailHelp" required>
                            </div>

                            <div class="form-group">
                                <label class="label-form">Contraseña</label>
                                <input type="password" class="form-control input-form" id="pass" required>
                            </div>
                            
                            <a class="btn btn-form-green" onclick="login()" role="button">Iniciar sesión</a>


                        </form>
                        
                        <p class="t2">¿Aún no tienes una cuenta? <a href="registrarte.html">Registrarte</a></p>
                        <p class="t2">¿Olvidaste tu contraseña? <a href="recuperar-contrasena.html">Recuperar Contraseña</a></p>

                    </div>
                </div>     
                <div class="col-md-3"></div>
            </div>
        </div>
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

    <!--swall alert-->
    <script src="js/sweetalert.min.js"></script>

    <script src="js/sesion.js"></script>

    

    <script>
        $('#myCarousel').carousel({
            interval: 5000
        });
    </script>
</body></html>