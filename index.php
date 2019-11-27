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
    <title>Renta los mejores productos, Stockit</title>
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
    <link rel="stylesheet" href="css/carousel.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
   
    <!-- MainMenu-Area -->

    <?php include("menus/menu_logged_in.php"); ?>

    <!-- MainMenu-Area-End -->

    <!-- Home-Area -->
    <header class="home-area overlay" id="home_page">
        <div class="container">
            <div class="row">

                <div class="col-md-2"></div>
                <div class="col-xs-12 col-md-8">
                    <div class="div-info-header">
                        <p class="p1 wow fadeInUp" data-wow-delay=".2s">Renta los mejores productos</p>
                        <input type="text" class="form-control input-search-header" id="text-busqueda" placeholder="Buscar...">
                        <p class="p2">Navegue entre miles de productos en renta</p>

                        <form class="form-header">

                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <select class="form-control select-header" id="select-categorias">
                                        <option value="0" hidden>Categoria</option>
                                        <option value="1">Accesorios</option>
                                        <option value="2">Camping</option>
                                        <option value="3">Cocina</option>
                                        <option value="4">Deportes</option>
                                        <option value="5">Familiar</option>
                                        <option value="6">Fiesta</option>
                                        <option value="7">Gamers</option>
                                        <option value="8">Herramientas</option>
                                        <option value="9">Hogar</option>
                                        <option value="10">Juegos</option>
                                        <option value="11">Libros</option>
                                        <option value="12">Outdoors</option>
                                        <option value="13">Probar</option>
                                        <option value="14">Viajes</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <a class="btn btn-search-header" onclick="buscar()" role="button">Buscar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </header>
    <!-- Home-Area-End -->

    <!-- Categorias-Area -->
    <!-- <section class="section-padding" id="sec-categorias">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="space-20"></div>
                    <div class="sec-title text-center">
                        <p class="p1 wow fadeInUp" data-wow-delay=".2s">Categorias</p>
                        <p class="p2 wow fadeInUp" data-wow-delay=".4s">Echa un vistazo a los anuncios de nuestros miembros de las categorías populares</p>
                    </div>
                </div>
            </div>

            <div class="row row-categorias">
                <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                    <div id="item-electronica" class="div-item-categoria overlay-categoria">
                        <div class="info-categoria text-center">
                            <p class="p1">Electrónica</p>
                            <a class="btn btn-categoria" href="#" role="button">Ver productos <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-delay=".3s">
                    <div id="item-muebles" class="div-item-categoria overlay-categoria">
                        <div class="info-categoria text-center">
                            <p class="p1">Muebles</p>
                            <a class="btn btn-categoria" href="#" role="button">Ver productos <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-delay=".4s">
                    <div id="item-herramientas" class="div-item-categoria overlay-categoria">
                        <div class="info-categoria text-center">
                            <p class="p1">Herramientas</p>
                            <a class="btn btn-categoria" href="#" role="button">Ver productos <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-delay=".5s">
                    <div id="item-hogar" class="div-item-categoria overlay-categoria">
                        <div class="info-categoria text-center">
                            <p class="p1">Hogar</p>
                            <a class="btn btn-categoria" href="#" role="button">Ver productos <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-delay=".6s">
                    <div id="item-autos" class="div-item-categoria overlay-categoria">
                        <div class="info-categoria text-center">
                            <p class="p1">Autos</p>
                            <a class="btn btn-categoria" href="#" role="button">Ver productos <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-delay=".7s">
                    <div id="item-foto-video" class="div-item-categoria overlay-categoria">
                        <div class="info-categoria text-center">
                            <p class="p1">Foto y Video</p>
                            <a class="btn btn-categoria" href="#" role="button">Ver productos <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!-- Ultimos Productos -->
    <section class="section-padding" id="sec-slider-productos">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="space-20"></div>
                    <div class="sec-title text-center">
                        <p class="p1 wow fadeInUp" data-wow-delay=".2s">Últimos productos añadidos</p>
                        <p class="p2 wow fadeInUp" data-wow-delay=".4s">Echa un vistazo a los últimos anuncios de nuestros miembros</p>
                    </div>
                </div>
            </div>

            <div class="row row-slider-productos">
                <div class="container">
                    <div class="row">
                        <div class="div-slider-productos wow fadeInUp" data-wow-delay=".6s">
                            <!-- Carousel
            ============ ====================================== -->
                        <div class="owl-carousel owl-theme" id="prod-carou">
                                
                        </div><!-- End Well -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonios -->
    <!-- <section class="section-padding" id="sec-testimonios">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="space-20"></div>
                    <div class="sec-title text-center">
                        <p class="p1 wow fadeInUp" data-wow-delay=".2s">Testimonios</p>
                        <p class="p2 wow fadeInUp" data-wow-delay=".4s">Conozca lo que nuestros clientes dicen sobre nosotros</p>
                    </div>
                </div>
            </div>

            <div class="row row-testimonios">
                <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                    <div class="div-info-testimonio text-center">
                        <p class="p1"><i class="fas fa-quote-right"></i></p>
                        <p class="p2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente placeat molestiae assumenda animi non</p>
                        <p class="p3">Camila Lara</p>
                        <p class="p4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay=".4s">
                    <div class="div-info-testimonio text-center">
                        <p class="p1"><i class="fas fa-quote-right"></i></p>
                        <p class="p2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente placeat molestiae assumenda animi non</p>
                        <p class="p3">Brayam Morando</p>
                        <p class="p4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay=".6s">
                    <div class="div-info-testimonio text-center">
                        <p class="p1"><i class="fas fa-quote-right"></i></p>
                        <p class="p2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente placeat molestiae assumenda animi non</p>
                        <p class="p3">Lenny Alvarez</p>
                        <p class="p4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!-- Contacto -->
    <!-- <section class="section-padding" id="sec-contacto">
        <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="space-20"></div>
                        <div class="sec-title text-center sec-title-contact">
                            <p class="p1 wow fadeInUp" data-wow-delay=".2s">Contacto</p>
                            <p class="p2 wow fadeInUp" data-wow-delay=".4s">¿Quieres más información? ¡Escribenos!</p>
                        </div>
                    </div>
                </div>
                <div class="row row-form-contact wow fadeInUp" data-wow-delay=".6s">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <form class="form-contact">

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Correo electrónico" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="email" class="form-control" id="" placeholder="Mensaje" required>
                                </div>
                                <div class="form-group col-md-4">
                                   <a class="btn btn-enviar-contact" href="#" role="button"><i class="fas fa-paper-plane"></i> Enviar mensaje</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2"></div>
                </div>

          

        </div>
    </section> -->



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
    
    <script src="js/car-prod.js"></script> 

    <script>
        function buscar() {
            var busqueda = $("#text-busqueda").val();
            var categoria = $("#select-categorias").val();

            location.href="lista-productos.php?categoria="+categoria+"&busqueda="+busqueda;
        }
        
    </script>
    
    

</body></html>
