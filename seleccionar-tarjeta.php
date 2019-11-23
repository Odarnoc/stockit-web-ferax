<?php
session_start();
if(!isset($_SESSION["token"])){
    header("Location: iniciar-sesion.php");
}
$key=$_SESSION["token"];

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
    <title>Revisar orden | Stockit</title>
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

    <?php include("menus/menu_logged_in.php"); ?>
    
    <!-- MainMenu-Area -->


    <section id="sec-registrarte" class="sec-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="d-form-registrarte">
                        <p class="p-title">Tarjetas</p>
                        <p class="p-sub-title">Seleccionar un metodo de pago.</p>


                        <form class="form-seleccionar-tarjeta">

                            <div class="form-row" id="tarjetas">

                            </div>

                            <div class="form-row">

                                <div class="form-group col-md-12">
                                    <p class="p-pasos">Paso 1 de 3</p>
                                </div>
                            </div>
                        </form>


                        <div class="row row-btns-revisar">
                            <div class="col-md-6 col-xs-6">
                                <a class="btn btn-regresar" onclick="back()" role="button"><i class="fas fa-chevron-left"></i> Regresar</a>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <a class="btn btn-confirmar-pago" onclick="continuar()" role="button">Continuar</a>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-2"></div>


            </div>

        </div>

    </section>


     <!-- Footer -->
     <?php include("footer/footer.php"); ?>
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

    <!--Custom scripts-->
    <script>
        var keyt = "<?php echo $key; ?>";
    </script>
    <script src="js/seleccioner-tarjeta.js"></script>

    <script>
        $('#myCarousel').carousel({
            interval: 5000
        });
    </script>
</body></html>
