<?php
    session_start();
    if(!isset($_SESSION["token"])){
        header("Location: iniciar-sesion.php");
    }
    $key=$_SESSION["token"];
    
    $idPreReservation = $_GET['id'];
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
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from the above) -->
    <!--
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    -->

    <!-- Main Style CSS (Please use minify version for better website load performance) -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
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
        padding-bottom: 100px;
        position: relative;
        width: 100px;
    }

    .img-circle {
        border-radius: 50px;
    }

    .img-responsive {
        display: block;
        height: auto;
        max-width: 100px;
    }
    </style>

</head>

<body class="template-color-1">

    <?php include("menus/menu_logged_in.php"); ?>

    <div class="main-wrapper" style="margin-top:80px;">

        <!-- Begin Torress's Breadcrumb Area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Interesados</h2>
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li>Interesados</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Torress's Breadcrumb Area End Here -->


        <section class="sec-mi-stockit sec-fechas-int">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 offset-lg-3 offset-md-3">
                        <div class="d-fechas-interesados">
                            <div class="d-foto-interesados">
                                <center style="margin-bottom: 1rem;">
                                    <div id="interesadoPerfil" class="ratio img-responsive img-circle"></div>
                                </center>
                                <p class="t1" id="nameInteresad"></p>
                                <button type="button" class="btn btn-contacto-int" data-toggle="modal" data-target="#exampleModalCenter">
                                    Contacto
                                </button>
                            </div>
                            <div class="d-dias-int">
                                <div class="d-dias-renta">
                                    <p class="t1" id="diasRenta"></p>
                                    <p class="t2">Días de renta</p>
                                </div>
                            </div>
                            <div class="d-fechas-int">
                                <div class="d-item-fechas form-group">
                                    <p class="t1">Programar fecha de entrega</p>
                                    
                                    <input style="text-align:center" class="form-control" type="text" id="daterenta">
                                </div>
                                <div class="d-item-fechas form-group">
                                    <label for="comment">Mensaje privado</label>
                                    <textarea id="mensaje" class="form-control" rows="5" id="comment"></textarea>
                                </div>
                            </div>
                            <div class="d-precio-int">
                                <p class="t1">Total <b>$ <span id="total"></span><sup>.00</sup></b></p>
                            </div>
                            <div class="d-btns-int">
                                <a class="btn btn-lg-green"  onclick="rentar()" role="button">Confirmar</a>
                                <p><a class="btn btn-link-muted mt-3" href="interesados.php" role="button">Cancelar</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Modal -->
        <div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header mh-int-contact">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mb-int-contact">
                        <center style="margin-bottom: 1rem;">
                            <div id="modalImage" class="ratio img-responsive img-circle"></div>
                        </center>
                        <p class="t1" id="nameInteresadModal">Brayam Morando</p>
                        
                        <div class="d-links-contact">
                            <p class="t1"><i class="fas fa-envelope" ></i> <a href="" id="correoInteresado"></a></p>
                            
                            <p class="t1"><i class="fas fa-phone" ></i> <a href="" id="telInteresado"></a></p>
                            
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-close-modal" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Footer -->
        <?php include("footer/footer.php"); ?>
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

    <script src="js/moment.min.js"></script>

    <script type="text/javascript" src="js/daterangepicker.min.js"></script>

    <!-- Vendor & Plugins JS (Please remove the comment from below vendor.min.js & plugins.min.js for better website load performance and remove js files from avobe) -->
    <!--
<script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/plugins/plugins.min.js"></script>
-->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <script>
    var keyt = "<?php echo $key; ?>";
    var idConfirmar = "<?php echo $idPreReservation; ?>";
    </script>

<script src="js/interested-date.js"></script>

</body></html>
