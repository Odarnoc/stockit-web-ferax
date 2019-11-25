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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!--<link rel="stylesheet" href="assets/css/style.min.css">-->

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
                        <li><a href="index.html">Inicio</a></li>
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
                                <img src="images/profiles/profile-brayam-morando.png" alt="">
                                <p class="t1">Brayam Morando</p>
                                <button type="button" class="btn btn-contacto-int" data-toggle="modal" data-target="#exampleModalCenter">
                                    Contacto
                                </button>
                            </div>

                            <div class="d-dias-int">
                                <div class="d-dias-renta">
                                    <p class="t1">7</p>
                                    <p class="t2">Días de renta</p>
                                </div>
                            </div>

                            <div class="d-fechas-int">
                                <div class="d-item-fechas">
                                    <p class="t1">Marzo 2019</p>
                                    <ul>
                                        <li>5</li>
                                        <li>16</li>
                                        <li>27</li>
                                        <li>28</li>
                                    </ul>

                                </div>

                                <div class="d-item-fechas">
                                    <p class="t1">Diciembre 2019</p>
                                    <ul>
                                        <li>10</li>
                                        <li>20</li>
                                        <li>21</li>
                                    </ul>

                                </div>

                            </div>

                            <div class="d-precio-int">
                                <p class="t1">Total <b>$1,389.<sup>00</sup></b></p>
                            </div>

                            <div class="d-btns-int">
                                <a class="btn btn-lg-green" href="#" role="button">Confirmar</a>
                                <p><a class="btn btn-link-muted mt-3" href="interesados.html" role="button">Cancelar</a></p>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </section>


        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header mh-int-contact">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mb-int-contact">
                        <img src="images/profile-brayam-morando.png" alt="">
                        <p class="t1">Brayam Morando</p>
                        
                        <div class="d-links-contact">
                            <p class="t1"><a href="mailto:brayamdesign@gmail.com"><i class="fas fa-envelope"></i>brayamdesign@gmail.com</a></p>
                            
                            <p class="t1"><a href="tel:3322692108"><i class="fas fa-phone"></i>33 2269 2108</a></p>
                            
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

    <script>
    var keyt = "<?php echo $key; ?>";
    var idProductoJs = "<?php echo $idPreReservation; ?>";
    </script>

</body></html>
