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
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <!-- Date Picker -->
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

    <div class="main-wrapper">

    <!-- MainMenu-Area -->
    <?php include("menus/menu_logged_in.php"); ?>
    <!-- EndMainMenu-Area -->

        <!-- Begin Torress's Breadcrumb Area -->
        <div class="main-wrapper" style="margin-top:80px;">
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <h2>Rentas</h2>
                        <ul>
                            <li><a href="index.php">Inicio</a></li>
                            <li>Rentas</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Torress's Breadcrumb Area End Here -->
        
        <section class="sec-mi-stockit">
            <div class="container">
                <div class="row" id="rentas">
                
                </Button>
                </div>
            </div>
        </section>
    </div>

        <!-- Modal-->
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
                        <div>
                            <div class="d-dias-renta">
                                <p class="t1" id="diasRenta"></p>
                                <p class="t2">Días de renta</p>
                            </div>
                        </div>
                        <div>
                            <div class="d-dias-renta">
                            <div id="rentaFechas"></div>
                            <p class="t2"> Dias de reservacion</p>
                            </div>
                        </div>
                        <div>
                            <div class="d-dias-renta">
                                <p class="t1">$ <span id="rentaTotal"></span><span>.</span><sup>00</sup></p>
                                <p class="t2">Total</p>
                            </div>
                        </div>  
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-close-modal" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="modatExtender" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header mh-int-contact">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mb-int-contact">
                       
                        <p class="t1" id="productoModal"></p>
                        
                        <div>
                            <div class="d-dias-renta">
                                <p class="t1" id="fechaVencimiento"></p>
                                <p class="t2">Fecha de Vencimiento</p>
                            </div>
                        </div>
                        <div>
                            <div class="d-dias-renta">
                            <input style="text-align:center" class="form-control" type="text" id="daterenta" >
                            <p class="t2"> Nueva Fecha de Vencimiento</p>
                            </div>
                        </div>
                        <div>
                            <div class="d-dias-renta">
                                <p class="t1">$ <span id="rentaTotalT"></span><span>.</span><sup>00</sup></p>
                                <p class="t2">Total</p>
                            </div>
                        </div>  
                    </div>
                    <div class="modal-footer">
                    <a class="btn btn-extender-renta" id="extender" style="display:none" onclick="extender_renta_b();" role="button">Extender Renta</a>
                        <button type="button" class="btn btn-close-modal" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="modalCalificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Califica tu experiencia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body pt-5 pb-5">

                    <div class="row row-item-calificacion">
                        <div class="col-lg-12">
                            <div class="d-calificacion">
                                <div class="item-calificacion">
                                    <p class="p-calificacion">¿Como calificarias el estado del articulo?</p>
                                    <fieldset class="rating star mt-3">
                                        <input type="radio" id="field6_star5" onclick="calificar(5)" name="rating2" class="radio-rate" value="5" /><label class="full" for="field6_star5"></label>
                                        <input type="radio" id="field6_star4" onclick="calificar(4)" name="rating2" class="radio-rate" value="4" /><label class="full" for="field6_star4"></label>
                                        <input type="radio" id="field6_star3" onclick="calificar(3)" name="rating2" class="radio-rate" value="3" /><label class="full" for="field6_star3"></label>
                                        <input type="radio" id="field6_star2" onclick="calificar(2)" name="rating2" class="radio-rate" value="2" /><label class="full" for="field6_star2"></label>
                                        <input type="radio" id="field6_star1" onclick="calificar(1)" name="rating2" class="radio-rate" value="1" /><label class="full" for="field6_star1"></label>
                                    </fieldset>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row row-item-calificacion">
                        <div class="col-lg-12">
                            <div class="d-calificacion">
                                <div class="item-calificacion">
                                    <p class="p-calificacion">¿Como calificarias la atención del arrendador?</p>
                                    <fieldset class="rating star mt-3">
                                        <input type="radio" id="field7_star5" onclick="calificar2(5)" name="rating3" class="radio-rate" value="5" /><label class="full" for="field7_star5"></label>
                                        <input type="radio" id="field7_star4" onclick="calificar2(4)" name="rating3" class="radio-rate" value="4" /><label class="full" for="field7_star4"></label>
                                        <input type="radio" id="field7_star3" onclick="calificar2(3)" name="rating3" class="radio-rate" value="3" /><label class="full" for="field7_star3"></label>
                                        <input type="radio" id="field7_star2" onclick="calificar2(2)" name="rating3" class="radio-rate" value="2" /><label class="full" for="field7_star2"></label>
                                        <input type="radio" id="field7_star1" onclick="calificar2(1)" name="rating3" class="radio-rate" value="1" /><label class="full" for="field7_star1"></label>
                                    </fieldset>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                <a class="btn btn-extender-renta" id="encuesta" style="display:none" onclick="enviar_encuesta();" role="button">Enviar Encuesta</a>
                    <button type="button" class="btn btn-cancelar-modal" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="modalCalificar2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Califica tu experiencia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body pt-5 pb-5">

                    <div class="row row-item-calificacion">
                        <div class="col-lg-12">
                            <div class="d-calificacion">
                                <div class="item-calificacion">
                                    <p class="p-calificacion">¿Como calificarias al arrendatario?</p>
                                    <fieldset class="rating star mt-3">
                                        <input type="radio" id="field8_star5" onclick="calificar3(5)" name="rating4" class="radio-rate" value="5" /><label class="full" for="field8_star5"></label>
                                        <input type="radio" id="field8_star4" onclick="calificar3(4)" name="rating4" class="radio-rate" value="4" /><label class="full" for="field8_star4"></label>
                                        <input type="radio" id="field8_star3" onclick="calificar3(3)" name="rating4" class="radio-rate" value="3" /><label class="full" for="field8_star3"></label>
                                        <input type="radio" id="field8_star2" onclick="calificar3(2)" name="rating4" class="radio-rate" value="2" /><label class="full" for="field8_star2"></label>
                                        <input type="radio" id="field8_star1" onclick="calificar3(1)" name="rating4" class="radio-rate" value="1" /><label class="full" for="field8_star1"></label>
                                    </fieldset>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                <a class="btn btn-extender-renta" id="encuesta2" style="display:none" onclick="terminar_renta();" role="button">Terminar Renta</a>
                    <button type="button" class="btn btn-cancelar-modal" data-dismiss="modal">Cancelar</button>
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
    <script src="js/sweetalert.min.js"></script>

    <script type="text/javascript" src="js/daterangepicker.min.js"></script>

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
    <script>
        $(document).ready(function() {
          
        });

        $('#myCarousel').carousel({
            interval: 5000
        });

        /*  RADIO STAR CALIFICACION */

        $("label").click(function() {
            $(this).parent().find("label").css({
                "background-color": "rgba(0,0,0,.15)"
            });
            $(this).css({
                "background-color": "#F3B71B"
            });
            $(this).nextAll().css({
                "background-color": "#F3B71B"
            });
        });

        $(".star label").click(function() {
            $(this).parent().find("label").css({
                "color": "rgba(0,0,0,.15)"
            });
            $(this).css({
                "color": "#F3B71B"
            });
            $(this).nextAll().css({
                "color": "#F3B71B"
            });
            $(this).css({
                "background-color": "transparent"
            });
            $(this).nextAll().css({
                "background-color": "transparent"
            });
        });
    </script>

<script src="js/rentas.js"></script>

</body></html>
