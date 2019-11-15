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
                        <p class="p-title">Revisar orden</p>
                        <p class="p-sub-title">Revisa que todo este correcto en tu pedido, a continuación confirme su compra.</p>

                        <div class="d-table-revisar">
                            <div class="table-responsive">
                                <table class="table table-revisar-orden">
                                    <thead>
                                        <tr>
                                            <th class="th-producto-revisar">Producto</th>
                                            <th class="th-fechas-revisar">Fechas</th>
                                            <th class="th-ubicacion-revisar">Ubicación</th>
                                            <th class="th-precio-revisar">Precio</th>
                                            <th class="th-cant-revisar">Cant</th>
                                            <th class="th-total-revisar">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="td-producto-revisar"><img src="images/asador-circular.jpg" alt=""></td>
                                            <td class="td-fechas-revisar">
                                                <p class="p-td-revisar">30/08/19 <i class="fas fa-chevron-right"></i> 31/08/2019 <br> <b class="b-td-revisar">de 8:00 am A 5:00 pm</b></p>
                                            </td>
                                            <td class="td-ubicacion-revisar">
                                                <p class="p-td-revisar">Mesa Vista 0357, Chapala, Jal.<br><b class="b-td-revisar"><a href=""><i class="fas fa-map-marker-alt"></i> Abrir mapa</a></b></p>
                                            </td>
                                            <td class="td-precio-revisar">
                                                <p class="p-td-revisar">$ 199.00 <br> <b class="b-td-revisar">Por 1 día</b></p>
                                            </td>
                                            <td class="td-cant-revisar">1</td>
                                            <td class="td-total-revisar">$ 199.00</td>
                                        </tr>

                                        <tr>
                                            <td class="td-producto-revisar"><img src="images/escalera.png" alt=""></td>
                                            <td class="td-fechas-revisar">
                                                <p class="p-td-revisar">30/08/19 <i class="fas fa-chevron-right"></i> 31/08/2019 <br> <b class="b-td-revisar">de 8:00 am A 5:00 pm</b></p>
                                            </td>
                                            <td class="td-ubicacion-revisar">
                                                <p class="p-td-revisar">Mesa Vista 0357, Chapala, Jal.<br><b class="b-td-revisar"><a href=""><i class="fas fa-map-marker-alt"></i> Abrir mapa</a></b></p>
                                            </td>
                                            <td class="td-precio-revisar">
                                                <p class="p-td-revisar">$ 299.00 <br> <b class="b-td-revisar">Por 1 día</b></p>
                                            </td>
                                            <td class="td-cant-revisar">2</td>
                                            <td class="td-total-revisar">$ 598.00</td>
                                        </tr>

                                        <tr>
                                            <td class="td-producto-revisar"><img src="images/proyector.png" alt=""></td>
                                            <td class="td-fechas-revisar">
                                                <p class="p-td-revisar">30/08/19 <i class="fas fa-chevron-right"></i> 31/08/2019 <br> <b class="b-td-revisar">de 8:00 am A 5:00 pm</b></p>
                                            </td>
                                            <td class="td-ubicacion-revisar">
                                                <p class="p-td-revisar">Mesa Vista 0357, Chapala, Jal.<br><b class="b-td-revisar"><a href=""><i class="fas fa-map-marker-alt"></i> Abrir mapa</a></b></p>
                                            </td>
                                            <td class="td-precio-revisar">
                                                <p class="p-td-revisar">$ 399.00 <br> <b class="b-td-revisar">Por 1 día</b></p>
                                            </td>
                                            <td class="td-cant-revisar">1</td>
                                            <td class="td-total-revisar">$ 399.00</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-3"></div>
                            <div class="col-md-3 col-xs-6">
                                <div class="d-info-total-revisar">
                                    <p class="t1">Subtotal</p>
                                </div>

                                <div class="d-info-total-revisar">
                                    <p class="t1">IVA</p>
                                </div>

                                <div class="d-info-total-revisar">
                                    <p class="t2">Total</p>
                                </div>

                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="d-info-total-revisar">
                                    <p class="t1">$ 1,196.00</p>
                                </div>

                                <div class="d-info-total-revisar">
                                    <p class="t1">$ 191.36</p>
                                </div>
                                
                                 <div class="d-info-total-revisar">
                                    <p class="t2">$ 1,387.36</p>
                                </div>

                            </div>
                        </div>
                        
                        
                        <p class="p-pasos">Paso 2 de 3</p>
                        
                        <div class="row row-btns-revisar">
                            <div class="col-md-6 col-xs-6">
                                <a class="btn btn-regresar" href="agregar-tarjeta.php" role="button"><i class="fas fa-chevron-left"></i> Regresar</a>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <a class="btn btn-confirmar-pago" href="pago-confirmado.php" role="button">Confirmar pago</a>
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

    <!--Custom scripts-->
    <script>
        var keyt = "<?php echo $key; ?>";
    </script>

    <script>
        $('#myCarousel').carousel({
            interval: 5000
        });
    </script>
</body></html>
