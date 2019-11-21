var productos = "";
        $( document ).ready(function() {
            $.ajax({
                url: "http://138.68.241.20/api/publication/favorites",
                method: "POST",
                dataType: "json",
                data: "",
                beforeSend: function (xhr) {
                    /* Authorization header */
                    xhr.setRequestHeader("Authorization", keyt);
                },
                success: function (data) {
                    console.log(data);
                    var nofavorito=  '<section class="sec-gray">'+
                    '<div class="container">'+
                        '<div class="row">'+
                            '<div class="col-lg-12 col-md-12">'+
                                '<div class="d-title-interesados">'+
                                    '<p class="t1">Sin articulos favoritos</p>'+
                                    '<p class="t2">Aquí podrás visualizar el listado con los articulos marcados como favortios.</p>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+ 
                '</section>';
                if(data.publications.length == 0){
                    console.log(data.publications.length);
                    productos=nofavorito;
                }else{
                data.publications.forEach(function(item) {
                var html = 
                                '<div class="col-md-4">'+
                                '<div class="thumbnail">'+
                                    '<div class="d-img-thumbnail">'+
                                    '<a href="producto-individual.php?id='+item._id+'">'+
                                        '<img src="http://138.68.241.20/api/image/'+item.images[0]+'" alt="Slide11">'+
                                    '</a>'+
                                    '</div>'+
                                    '<div class="info-item-slide">'+
                                        '<button onclick="favorito(\''+item._id+'\')"  class="badge badge-success" style="margin-top: 10px"><i class="fas fa-heart"></i>Favorito</button>'+
                                        '<p class="p2">'+item.name+'</p>'+
                                        '<p class="p4">$'+item.price+'.<sup>00 / día</sup></p>'+
                                        '<a class="btn btn-slide-productos" href="producto-individual.php?id='+item._id+'" role="button">Ver producto <i class="fas fa-chevron-right"></i></a>'+
                                    '</div>'+
                                '</div>'+
                                '</div>';
                            productos+=html;
                    console.log(item);
                    });
                }
                    $( "#favorito" ).append( productos );
                },
                error: function (error) {
                    console.log(error);
                }
            });
        });

        function favorito(id){
            $.ajax({
                url: "http://138.68.241.20/api/publication/checkFavorites/"+id,
                method: "POST",
                dataType: "json",
                data: "",
                beforeSend: function (xhr) {
                    /* Authorization header */
                    xhr.setRequestHeader("Authorization", keyt);
                },
                success: function (message) {
                    console.log(message);
                    location.reload();
                }
            });  
        }

