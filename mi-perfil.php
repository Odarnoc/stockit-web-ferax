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

    <!-- MainMenu-Area -->

    <?php include("menus/menu_logged_in.php"); ?>

    <!-- MainMenu-Area-End -->


    <section class="sec-gray" style="margin-top: 50px">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">

                    <div class="d-mi-cuenta d-mi-perfil">

                        <form class="form-mi-perfil" id="miperfil">

                        <div class="image-upload" style="background-image: url(images/bg-image-upload.jpg);">
                            <label for="file-input">
                                <i class="fas fa-plus"></i> Subir foto
                            </label>
                                <input id="file-input" type="file" onchange="readURL(this);" name="Image" />
                        </div>

                            <div class="form-group">
                                <label class="label-form">Nombre de usuario</label>
                                <input type="text" placeholder="Jesus Martinez" name="fullname" id="name" class="form-control input-form"  required >
                            </div>

                            <div class="form-group">
                                <label class="label-form">Correo electrónico</label>
                                <input type="email" name="email" id="email" class="form-control input-form" aria-describedby="emailHelp"  required readonly>
                            </div>

                            <div class="form-group">
                                <label class="label-form">Teléfono</label>
                                <input  placeholder="Agregar número de teléfono" type="tel" name="phone" id="tele" class="form-control input-form"  required >

                            </div>
                            
                            <button class="btn btn-form-green" onclick="update()" type="button">Guardar</button>
                        </form>

                        <p id="noval"  class="p-verificar-perfil"><i class="fas fa-info-circle"></i> Perfil no verificado <a href="verificar-perfil.php">Verificar perfil</a></p>
                        <p id="val" class="p-perfil-verificado"><i class="fas fa-check-circle"></i> Perfil verificado</p>

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
    </script>
    <script src ="js/miperfil.js"></script>

    <script>
        $('#myCarousel').carousel({
            interval: 5000
        });
    </script>

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
                    imageChange = true;
                }
            }
        </script>
</body></html>
