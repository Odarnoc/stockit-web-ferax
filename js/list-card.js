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
                        var ttarjet="";
                        if(item.brand==	"visa"){
                            ttarjet='logo-visa.png';
                        }else{
                            ttarjet='logo-master-card.png';    
                        }
                var html = 
                                    '<div class="col-md-6" >'+
                                        '<div class="d-item-tarjeta" >'+
                                            '<div class="row" >'+
                                                '<div class="col-md-6 col-xs-6 d-img-card">'+
                                                    '<img src="images/'+ttarjet+'" alt="">'+
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
                                                    '<a class="btn btn-card" onclick="elimtarjeta(\''+item._id+'\')" role="button">Eliminar tarjeta</a>'+
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

    
        function elimtarjeta(id){
            $.ajax({
                type: 'DELETE',
                url: 'http://138.68.241.20/api/payMethod/delete/'+id,
                dataType: "json",
                beforeSend: function (xhr) {
                    /* Authorization header */
                    xhr.setRequestHeader("Authorization", keyt);
                },
                success: function (response) {
                    console.log(response);
                    if(response.message == "publication.erased"){
                        location.href = "metodos-de-pago.php";
                    }
                },
                error: function (response) {
                }
            });
        }

       