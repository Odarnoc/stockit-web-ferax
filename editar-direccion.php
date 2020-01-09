<?php
session_start();
if(!isset($_SESSION["token"]) || !isset($_GET["id"]) ){
    header("Location: iniciar-sesion.php");
}
$key=$_SESSION["token"];
$id = $_GET["id"];
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
    <title>Nuevo articulo | Stockit</title>
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
    <link rel="stylesheet" href="css/nueva-direccion.css">
</head>

<body onload="obtenerPorId()">


        <!-- MainMenu-Area -->
        <?php include("menus/menu_logged_in.php"); ?>
        <!-- MainMenu-Area -->

    <!--<section class="sec-mi-cuenta">
        <div class="container">
            <div class="col-lg-6 col-md-6 col-xs-6">
                <a href="lista-productos.html"><img class="img-logo-nav" src="images/logo-stockit.png" alt=""></a>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-6">
                <p class="p-mi-cuenta">Nuevo artículo</p>
            </div>
        </div>
    </section> -->



    <section class="sec-gray" style="margin-top: 50px">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">

                    <div class="d-mi-cuenta d-nuevo-articulo">

                        <form class="form-nuevo-articulo" id="sub">
                            <div class="form-group">
                            <label class="label-form">Tipo</label>
                            <select class="form-control input-form fa" style="height:50px;padding-bottom: 0;padding-top: 0;" name="type" id="type" required>
                                        <option hidden value="" selected="selected">Tipo</option>
                                        <option value="2" class="fa">&#xf4df Emisión</option>
                                        <option value="1" class="fa">&#xf015 Recepción</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label class="label-form">Calle</label>
                                <input type="text" class="form-control input-form" name="route" id="route" required>
                            </div>

                            <div class="form-group">
                                <label class="label-form">Número exterior</label>
                                <input type="text" class="form-control input-form" name="streetNumber" id="streetNumber" required>
                            </div>

                            <div class="form-group">
                                <label class="label-form">Número interior</label>
                                <input type="text" class="form-control input-form" name="internalNumber" id="internalNumber" required>
                            </div>
                            <div class="form-group">
                                <label class="label-form">Código postal</label>
                                <input type="number" class="form-control input-form" name="postalCode" id="postalCode" required>
                                <button type="button" class="btn btn-primary" onclick="buscarPorCodigoPostal()">Buscar</button>
                            </div>
                            <div class="form-group">
                                <label class="label-form">Colonia</label>
                                <input type="text" class="form-control input-form" name="neighborhood" id="neighborhood" required>
                            </div>
                            <div class="form-group">
                                <label class="label-form">Municipio</label>
                                <input type="text" class="form-control input-form" name="locality" id="locality" required>
                            </div>
                            <div class="form-group">
                                <label class="label-form">Estado</label>
                                <input type="text" class="form-control input-form" name="state" id="state" required>
                            </div>
                            <div class="form-group">
                                <label class="label-form">País</label>
                                <input type="text" class="form-control input-form" name="country" id="country" required disabled value="MX">
                            </div>
                           
                            <input type="button" class="btn btn-form-green" onclick="editarDireccion()" value="Guardar">

                        </form>

                    </div>
                </div>
                <div class="col-md-3"></div>
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

    <!--Custom scripts-->
    <script>
        var keyt = "<?php echo $key; ?>";
        var id = "<?php echo $id; ?>";
    </script>

    <script src="js/sweetalert.min.js"></script>
    <script src="js/validador.js"></script>
    <script src="js/editar-direccion.js"></script>
</body></html>
