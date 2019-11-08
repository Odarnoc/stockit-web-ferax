    <nav class="mainmenu-area" data-spy="affix" data-offset-top="200">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary_menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#home_page"><img src="images/logo-stockit.png" alt="Logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="primary_menu">
                <ul class="nav navbar-nav mainmenu">
                    <li class="active"><a href="index.php#home_page">Inicio</a></li>
                    <li><a href="index.php#sec-categorias">Categorias</a></li>
                    <li><a href="lista-productos.php">Productos</a></li>
                    <li><a href="mi-stockit.php">Mi stockit</a></li>
                    <li><a href="favoritos.php">Mis favoritos</a></li>
                    <li><a href="interesados.php">Interesados</a></li>
                    <li><a href="index.php#sec-slider-productos">Populares</a></li>
                    <li><a href="index.php#sec-testimonios">Testimonios</a></li>
                    <li><a href="index.php#sec-contacto">Contacto</a></li>
                    <li><a href="mi-cuenta.php">Mi Cuenta </a></li>
                    <li><a onclick="logout()">Cerrar sesión</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <script>
        function logout(){
            $.ajax({
                type: 'get',
                url: '../user_preferences/cerrar_sesion.php',
                success: function (response) {
                    console.log(response);
                    var jsondata = JSON.parse(response);
                    if(jsondata.mensaje == "ok"){
                        location.href = "iniciar-sesion.php";
                    }
                },
                error: function (response) {
                }
            });
        }
    </script>