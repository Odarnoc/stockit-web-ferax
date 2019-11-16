var productos = "";
        $( document ).ready(function() {
            $.ajax({
                url: "http://138.68.241.20/api/payMethod/list",
                method: "POST",
                dataType: "json",
                data: "",
                beforeSend: function (xhr) {
                    /* Authorization header */
                    xhr.setRequestHeader("Authorization", keyt);
                },
                success: function (data) {
                    console.log(data);
                    data.payMethods.forEach(function(item) {
                var html = 
                                    '<div class="container">'+
                                        '<div class="row">'+
                                            '<div class="col-md-2"></div>'+
                                            '<div class="col-md-8">'+
                                                '<div class="d-metodos-pago">'+
                                                    '<div class="row row-tarjetas-perfil" id="lista-tarjeta">'+
                                                        '<div class="col-md-6">'+
                                                            '<a href="agregar-tarjeta.php">'+
                                                                '<div class="d-item-tarjeta-nueva">'+
                                                                    '<i class="fas fa-plus"></i>'+
                                                                    '<p class="t1">Nueva tarjeta</p>'+
                                                                '</div>'+
                                                            '</a>'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="col-md-2"></div>'+
                                        '</div>'+
                                    '</div>';
                            productos+=html;
                        console.log(item);
                    });
                    $( "#historial" ).append( productos );
                },
                error: function (error) {
                    console.log(error);
                }
            });
        });