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
    <title>Verificar perfil | Stockit</title>
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

<body>

    <section class="sec-mi-cuenta">
        <div class="container">
            <div class="col-lg-6 col-md-6 col-xs-6">
                <a href="lista-productos.html"><img class="img-logo-nav" src="images/logo-stockit.png" alt=""></a>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-6">
                <p class="p-mi-cuenta">Verificar perfil</p>
            </div>
        </div>
    </section>


    <section class="sec-gray">

        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">

                    <div class="d-mi-cuenta d-mi-perfil">

                        <form id="verifica" enctype="multipart/form-data" class="form-verificar-perfil">

                            <div class="form-group">
                                <div class="image-upload" style="background-image: url(images/bg-image-upload.jpg);">
                                    <label for="file-input">
                                        <i class="fas fa-plus"></i> Subir foto
                                    </label>
                                    <input id="file-input" name="Image" type="file" onchange="readURL(this);" />

                                </div>
                            </div>
                            
                            <div class="form-group">
                                <p class="p-text-verificar-perfil">Para verificar tu cuenta Stockit sube una fotografía de la parte frontal de una identificación oficial.</p>
                            </div>

                            <a class="btn btn-form-green" onclick="img()" role="button">Verificar perfil</a>

                        </form>

                        <p class="p-verificar-perfil"><i class="fas fa-info-circle"></i> Esto es con el fin de garantizar la seguridad y tranquilidad entre los usuarios Stockit.</p>
                        
                    </div>

                </div>

                <div class="col-md-3"></div>

            </div>

        </div>

    </section>


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
    <script src="js/verificar.js"></script>

    <script>
        $('#myCarousel').carousel({
            interval: 5000
        });
    </script>
</body></html>
