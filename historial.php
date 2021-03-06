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
    <link rel="stylesheet" href="css/bootstrap.min.css">
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

    <link rel="stylesheet" href="css/avatar-image.css">

    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/style.css">


    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from the above) -->
    <!--
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    -->
    <!-- Main Style CSS (Please use minify version for better website load performance) -->
    
    <link rel="stylesheet" href="css/responsive.css">
    <link href="css/mdb.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="assets/css/style.min.css">-->

    <style>
    .caption div {
        box-shadow: 0 0 5px #C8C8C8;
        transition: all 0.3s ease 0s;
    }

    .img-circle {
        border-radius: 50px;
    }

    .img-circle {
        border-radius: 0;
    }

    .ratio {
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;

        height: 0;
        padding-bottom: 65px;
        position: relative;
        width: 65px;
    }

    .img-circle {
        border-radius: 50px;
    }

    .img-responsive {
        display: block;
        height: auto;
        max-width: 65px;
    }
    </style>

</head>

<body class="template-color-1">

<div class="main-wrapper" style="margin-top:80px;">

<!-- Begin Torress's Header Main Area -->
<?php include("menus/menu_logged_in.php"); ?>
<!-- Torress's Header Main Area End Here -->

<!-- Begin Torress's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Historial</h2>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li>Historial</li>
            </ul>
        </div>
    </div>
</div>

<!-- Torress's Breadcrumb Area End Here -->
<section class="sec-mi-stockit">
    <div class="container">
        <div class="row" id="historial">
        </div>
    </div>
</section>
</div>

<!-- Modal -->
    <div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div id="modalImg" class="modal-header modal-header-interesados" style="background-image: url(images/asador-circular.jpg)">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body modal-body-interesados">
                    <p class="t1" id="text4"></p>
                    <p class="t4" id="price-in"></p>
                    <div>
                        <span id="rateMe" class="empty-stars">
                            <i class="fas fa-star py-2 px-1 rate-popover" data-index="1" data-html="true" data-toggle="popover" data-placement="top" title="Muy malo"></i>
                            <i class="fas fa-star py-2 px-1 rate-popover" data-index="2" data-html="true" data-toggle="popover" data-placement="top" title="Malo"></i>
                            <i class="fas fa-star py-2 px-1 rate-popover" data-index="3" data-html="true" data-toggle="popover" data-placement="top" title="OK"></i>
                            <i class="fas fa-star py-2 px-1 rate-popover" data-index="4" data-html="true" data-toggle="popover" data-placement="top" title="Bueno"></i>
                            <i class="fas fa-star py-2 px-1 rate-popover" data-index="5" data-html="true" data-toggle="popover" data-placement="top" title="Exelente"></i>
                        </span>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-borderless table-interesados">
                            <tbody id="interested">
                                <tr>
                                    <td class="td-img-int"><div id="image-in" class="ratio img-responsive img-circle"></div></td>
                                    <td class="td-name-int" id="name-in">Steph Leroy</td> 
                                </tr>
                                <tr>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="botonGuardar" type="button" onclick="puntuar()" class="btn btn-close-modal" data-dismiss="modal" style="background-color: #20c997;color: white;font-size: 1.2rem;">Guardar puntuación</button>
                    <button type="button" class="btn btn-close-modal" data-dismiss="modal" style="font-size: 1.2rem;">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

<!-- Footer -->
<?php include("footer/footer.php"); ?>
<!-- Footer-Area-End -->


    <!-- JS
============================================ -->

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery-migrate-1.4.1.min.js"></script>
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Popper JS -->
    <script src="assets/js/vendor/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

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

    <!--swall alert-->
    <script src="js/sweetalert.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script src="js/addons/rating.js"></script>

    <!--swall alert-->
    <script src="js/sweetalert.min.js"></script>

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
    

    <script src="js/historial.js"></script>

</body></html>
