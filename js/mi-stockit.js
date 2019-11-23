var productos = "";
$( document ).ready(function() {
        inicial();
        
    });
    function inicial(){
        $.ajax({
            url: "http://138.68.241.20/api/publication/myStockit",
            method: "POST",
            dataType: "json",
            data: "",
                beforeSend: function (xhr) {
                      /* Authorization header */
                    xhr.setRequestHeader("Authorization", keyt);
                },
                success: function (data) {
                    console.log(data);
                    data.publications.forEach(function(item) {
                    console.log("Despues de value");
            var html = 
                        '<div class="col-md-4">'+
                                '<div class="thumbnail">'+
                                    '<div class="d-img-thumbnail">'+
                                        '<img src="http://138.68.241.20/api/image/'+item.images[0]+'" alt="Slide11">'+
                                '</div>'+
                                    '<div class="info-item-slide">'+
                                        '<p class="p2">'+item.name+'</p>'+
                                        '<p class="p4">$'+item.price+'.<sup>00 / día</sup></p>'+
                                        '<a class="btn btn-slide-productos" href="editar-articulo.php?id='+item._id+'" role="button">Editar producto <i class="fas fa-chevron-right"></i></a>'+
                                        '<a style="color: white; width: 100%;" class="btn btn-danger " onclick="eliminar(\''+item._id+'\')" role="button">Eliminar producto </a>'+
                                    '</div>'+
                                '</div>'+
                            '</div>';
                        productos+=html;
                console.log(item);
                });
                $( "#mi-stockit-productos" ).append( productos );
                
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

    function eliminar(id){
        console.log(id);
        $.ajax({
            url: "http://138.68.241.20/api/publication/delete/"+id,
            method: "DELETE",
                beforeSend: function (xhr) {
                      /* Authorization header */
                    xhr.setRequestHeader("Authorization", keyt);
                },
                success: function (data) {
                    location.reload();
                }
            });
        }