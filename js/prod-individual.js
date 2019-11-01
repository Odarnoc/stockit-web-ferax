var productos = "";

$( document ).ready(function() {
    var idres = localStorage.getItem("id");
    $.ajax({
        url: "http://138.68.241.20/api/publication/show/"+idres,
        method: "GET",
        dataType: "json",
        data: "",
        
        beforeSend: function (xhr) {
            /* Authorization header */
            xhr.setRequestHeader("Authorization", "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6IjVkYjBjZTc1NDNlZDBlMDY5OWRiNTM4NyIsImlhdCI6MTU3MTg2ODcxMywiZXhwIjoxNTc0NDYwNzEzfQ.ZxDtDle25gyg5lK--MIOaLgG2119C7WTjL5CP8Menqk");
        },
        
        success: function (data) {
            
            console.log("Datos")
            console.log(data);
          
        var html = 
                           '<div class="row" >'+
                                '<div class="col-md-1"></div>'+
                                '<div class="col-md-10">'+
                                    '<ul class="breadcrumb">'+
                                        '<li><a href="#">Chapala</a></li>'+
                                        '<li><a href="#">Hogar</a></li>'+
                                        '<li class="active"></li>'+
                                    '</ul>'+
                                '</div>'+
                            '</div>'+

                            '<div class="row">'+

                                '<div class="col-md-1"></div>'+

                                '<div class="col-md-6">'+
                                    '<div class="item-info-pro-ind">'+
                                        '<img src="http://138.68.241.20/api/image/'+data.publication.images[0]+'" alt="">'+

                                        '<div class="d-info-pro-ind">'+

                                            '<p class="t1">'+data.publication.category+'</p>'+
                                            '<p class="t2">'+data.publication.name+'</p>'+
                                            '<p class="t3">'+data.publication.description+'</p>'+

                                        '</div>'+

                                    '</div>'+

                                    '<div class="d-ubicacion-pro-ind">'+
                                        '<p class="t1">Ubicacion</p>'+
                                   '</div>'+

                                    '<div class="d-map-pro-ind">'+
                                        '<div id="map"></div>'+
                                    '</div>'+


                                    '<div class="d-contacto-pro-ind">'+
                                        '<p class="t1">Contacte al anunciante</p>'+
                                        '<form class="form-pro-ind">'+

                                            '<div class="form-row">'+
                                                '<div  class="form-group col-md-6 input-nombre-contacto">'+
                                                    '<input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Nombre">'+
                                                '</div>'+
                                                '<div class="form-group col-md-6 input-correo-contacto">'+
                                                    '<input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Correo electrónico">'+
                                                '</div>'+

                                            '</div>'+

                                            '<div class="form-group">'+
                                                '<textarea class="form-control" id="" rows="3" placeholder="Mensaje"></textarea>'+
                                            '</div>'+

                                            '<button type="submit" class="btn btn-form-pro-ind"><i class="fas fa-paper-plane"></i> Enviar mensaje</button>'+
                                        '</form>'+

                                    '</div>'+

                                '</div>'+
                                
                                
                                '<div class="col-md-4 sticky">'+
                                    '<div class="d-checkout-pro-ind">'+
                                        '<p class="t1">Públicado por</p>'+

                                       ' <div class="clearfix d-2">'+
                                            '<img src="images/profile-brayam-morando.png" alt="">'+
                                            '<p class="t1">'+data.publication.owner.fullname+'</p>'+
                                            '<p class="t2">Chapala, Jalisco.</p>'+
                                        '</div>'+

                                        '<div class="row row-horario-pro-ind">'+
                                            '<div class="col-md-12">'+
                                                '<p class="t2">Horario</p>'+
                                                '<p class="t3">Disponible de 10:00 AM a 8:00 PM</p>'+
                                            '</div>'+
                                        '</div>'+

                                        '<div class="row row-fechas-pro-ind">'+
                                            '<div class="col-md-6 col-xs-6">'+
                                                '<p style="margin-bottom: -7px;" class="t2">Fecha inicio</p>'+
                                                '<input class="input-date" type="date">'+

                                            '</div>'+
                                            '<div class="col-md-6 col-xs-6">'+
                                                '<p style="margin-bottom: -7px" class="t2">Fecha regreso</p>'+
                                                '<input class="input-date" type="date">'+

                                            '</div>'+

                                       '</div>'+

                                        '<div class="row row-cantidad-pro-ind">'+
                                            '<div class="col-md-6 col-xs-6">'+
                                                '<p class="t2">Cantidad</p>'+
                                                '<p class="t3">5 disponibles</p>'+

                                            '</div>'+
                                            '<div class="col-md-6 col-xs-6 d-cantidad-pro-ind">'+
                                                '<input class="input-cantidad" type="number" value="1">'+
                                            '</div>'+
                                        '</div>'+

                                        '<hr>'+

                                        '<div class="row row-precio-pro-ind">'+
                                            '<div class="col-md-6 col-xs-6">'+
                                                '<p class="t1">Precio por día</p>'+
                                            '</div>'+
                                            '<div class="col-md-6 col-xs-6">'+
                                                '<p class="t2">$'+data.publication.price+'<sup>00</sup></p>'+
                                           '</div>'+
                                        '</div>'+


                                        '<div class="row row-btns-pro-ind">'+
                                            '<div class="col-md-6">'+
                                                '<a class="btn btn-carrito-pro-ind" href="#" role="button">Agregar al carrito</a>'+
                                            '</div>'+
                                            '<div class="col-md-6">'+
                                                '<a class="btn btn-rentar-pro-ind" href="agregar-tarjeta.html" role="button">Rentar ahora</a>'+
                                            '</div>'+
                                        '</div>'+

                                    '</div>'+
                                '</div>'+

                                '<div class="col-md-1"></div>'+

                            '</div>';

                        productos=html
            $( "#prod-ineterno" ).append( productos );
        },
        error: function (error) {
            console.log(error);
        }
    });
    
    
});