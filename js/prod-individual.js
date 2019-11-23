var productos = "";

$( document ).ready(function() {
    $.ajax({
        url: "http://138.68.241.20/api/publication/show/"+idProductoJs,
        method: "GET",
        dataType: "json",
        data: "",
        
        beforeSend: function (xhr) {
            /* Authorization header */
            xhr.setRequestHeader("Authorization", keyt);
        },
        
        success: function (data) {
            
            console.log("Datos")
            console.log(data);
            switch (parseInt(data.publication.category)) {
                case 1:
                    category= "Accesorios";
                    break;
                case 2:
                    category= "Camping";
                    break;
                case 3:
                    category= "Cocina";
                    break;
                case 4:
                    category= "Deportes";
                    break;
                case 5:
                    category= "Familiar";
                    break;
                case 6:
                    category= "Fiesta";
                    break;
                case 7:
                    category= "Gamers";
                    break;
                case 8:
                    category= "Herramientas";
                    break;
                case 9:
                    category= "Hogar";
                    break;
                case 10:
                    category= "Juegos";
                    break;
                case 11:
                    category= "Libros";
                    break;
                case 12:
                    category= "Outdoors";
                    break;
                case 13:
                    category= "Probar";
                    break;
                case 14:
                    category= "Viajes";
                    break;
                default:
                    category= "NA";
                    break;
              }
          
        var html = 
                            '<div class="row">'+
                                '<div class="col-md-1"></div>'+
                                '<div class="col-md-6">'+
                                    '<div class="item-info-pro-ind">'+
                                        '<img src="http://138.68.241.20/api/image/'+data.publication.images[0]+'" alt="">'+
                                        '<div class="d-info-pro-ind">'+
                                            '<p class="t1">'+category+'</p>'+
                                            '<p class="t2">'+data.publication.name+'</p>'+
                                            '<p class="t3">'+data.publication.description+'</p>'+
                                        '</div>'+
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
                                            '<div class="col-md-12">'+
                                                '<a class="btn btn-rentar-pro-ind" onclick="rentar()" role="button">Rentar ahora</a>'+
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

function rentar(){
    location.href="seleccionar-tarjeta.php";
}