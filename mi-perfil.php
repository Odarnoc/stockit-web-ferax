<?php
session_start();
$key=$_SESSION["token"];
if(!isset($key)){
    header("Location: iniciar-sesion.php");
}
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Mi perfil | Stockit</title>
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

<body>

    <section class="sec-mi-cuenta">
        <div class="container">
            <div class="col-lg-6 col-md-6 col-xs-6">
                <a href="lista-productos.php"><img class="img-logo-nav" src="images/logo-stockit.png" alt=""></a>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-6">
                <p class="p-mi-cuenta">Mi perfil</p>
            </div>
        </div>
    </section>


    <section class="sec-gray">

        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">

                    <div class="d-mi-cuenta d-mi-perfil">

                        <div class="d-foto-perfil">
                            <a href="#"><img src="images/profile-brayam-morando.png" alt=""></a>
                            <p><a class="btn btn-editar-perfil" href="#" role="button">Editar perfil</a></p>
                        </div>

                        <form class="form-mi-perfil">

                            <div class="form-group">
                                <label class="label-form">Nombre de usuario</label>
                                <input type="text" id="name" class="form-control input-form"  required readonly>
                            </div>

                            <div class="form-group">
                                <label class="label-form">Correo electrónico</label>
                                <input type="email" id="email" class="form-control input-form" aria-describedby="emailHelp"  required readonly>
                            </div>

                            <div class="form-group">
                                <label class="label-form">Teléfono</label>
                                <input type="tel" id="tele" class="form-control input-form"  required readonly>

                            </div>
                            <a class="btn btn-form-green" href="mi-cuenta-php" role="button">Guardar</a>
                        </form>

                        <p id="noval"  class="p-verificar-perfil"><i class="fas fa-info-circle"></i> Perfil no verificado <a href="verificar-perfil.html">Verificar perfil</a></p>
                        <p id="val" class="p-perfil-verificado"><i class="fas fa-check-circle"></i> Perfil verificado</p>

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

    <!--Custom scripts-->
    <script>
        var keyt = "<?php echo $key; ?>";
    </script>
    <script src ="js/miperfil.js"></script>

    <script>
        $('#myCarousel').carousel({
            interval: 5000
        });
    </script>
</body></html>
