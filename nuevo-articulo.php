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


    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.image-upload').attr("style", "background-image: url(" + e.target.result + ");");
                    $('.image-upload').addClass('overlay-image-upload');
                    $('.image-upload label').css('color', 'rgba(255,255,255,1)');
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

</head>

<body onload="loadLocations()">

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
                                <label for="" style="font-size:1rem;">Puedes seleccionar hasta 6 imagenes. La imagen de muestra será la principal.</label>
                                <div class="image-upload" style="background-image: url(images/bg-image-upload.jpg);">
                                    <label for="file-input">
                                        <i class="fas fa-plus"></i> Subir foto
                                    </label>
                                    <input id="file-input" type="file" onchange="readURL(this);" name="Images" multiple/>

                                </div>
                            </div>
                            <div class="form-group">
                            <label class="label-form">Categoría</label>
                            <select class="form-control input-form" style="height:50px;padding-bottom: 0;padding-top: 0;" name="category" id="category" onchange="loadCatalog(this)" required>
                                        <option hidden value="" selected="selected">Categoria</option>
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
                            <div class="form-group">
                            <label class="label-form">Medidas y peso (igual o menor)</label>
                            <select class="form-control input-form" style="height:50px;padding-bottom: 0;padding-top: 0;" name="catalogId" id="catalogId" required>
                                <option hidden value="" selected="selected">Seleccione una opción</option>
                            </select>
                            </div>
                            <div class="form-group">
                                <label class="label-form">Nombre</label>
                                <input type="text" class="form-control input-form" name="name" id="name" required>
                            </div>

                            <div class="form-group">
                                <label class="label-form">Descripción</label>
                                <textarea class="form-control input-form" rows="2" name="description" id="description" required></textarea>
                            </div>
                            <div class="form-group">
                            <label class="label-form">Dirección</label><br>
                            <label class="label-form" data-toggle="modal" data-target="#modatExtender"><i class="fas fa-plus"></i> Agregar nueva dirección</label>
                            <select class="form-control input-form" style="height:50px;padding-bottom: 0;padding-top: 0;" name="locationId" id="locationId" required>
                                <option hidden value="" selected="selected">Seleccione una opción</option>           
                            </select>
                            </div>
                            <div class="form-group" style="display:none;">
                                <label class="label-form d-none">Dirección</label>
                                <input type="text" class="form-control input-form" name="location" id="location" value="-" required>
                            </div>

                            <div class="form-group">
                                <label class="label-form">Precio por día</label>
                                <input type="number" class="form-control input-form" name="price" id="price" required>
                            </div>

                            <input type="button" class="btn btn-form-green" onclick="sub()" value="Guardar">

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
    <div class="modal" id="modatExtender" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Renta</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <div class="modal-body modal-body-interesados">
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
                           
                            <input type="button" class="btn btn-form-green" onclick="guardarDireccion()" value="Agregar Dirección">

                        </form>
                        </div>
                        <div class="modal-footer">

                        <div class="col-md-8">
                           
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-close-modal" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>


   


    


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
    <script src="js/sweetalert.min.js"></script>
    <script src="js/validador.js"></script>
    <script src="js/nueva-direccion_prod.js"></script>
    <script src="js/nuevo-articulo.js"></script>
</body></html>
