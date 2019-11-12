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
                                        '<div class="col-md-6" >'+
                                        '<div class="d-item-tarjeta">'+
                                            '<div class="row">'+
                                                '<div class="col-md-6 col-xs-6 d-img-card">'+
                                                    '<img src="images/logo-visa.png" alt="">'+
                                                '</div>'+
                                                '<div class="col-md-6 col-6 d-number-card">'+
                                                    '<p class="t1">****'+item.last4Digits+'</p>'+
                                                '</div>'+
                                                '</div>'+
                                                '<div class="d-name-card">'+
                                                    '<p class="t1"></p>'+
                                                    '<p class="t2">Vence el '+item.expMonth+'/'+item.expYear+'</p>'+
                                                '</div>'+
                                                '<div class="d-btn-card">'+
                                                    '<a class="btn btn-card" onclick="elimtarjeta()" role="button">Eliminar tarjeta</a>'
                                                '</div>'+
                                        '</div>'+
                                    '</div>';

                            productos+=html;
                      console.log(item);
                    });
                    $( "#lista-tarjeta" ).append( productos );
                },
                error: function (error) {
                    console.log(error);
                }
            });
            
            
        });

    
        function elimtarjeta(){
            $.ajax({
                type: 'DELETE',
                url: 'http://138.68.241.20/api/payMethod/delete/5dca2b054367a8522fd3f9a6',
                success: function (response) {
                    console.log(response);
                    var jsondata = JSON.parse(response);
                    if(jsondata.mensaje == "ok"){
                        location.href = "metodos-de-pago.php";
                    }
                },
                error: function (response) {
                }
            });
        }

       