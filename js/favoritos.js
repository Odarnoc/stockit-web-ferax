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
                    data.publications.forEach(function(item) {
                var html = 
                
                                '<div class="col-md-4">'+
                                '<div class="thumbnail">'+
                                    '<div class="d-img-thumbnail">'+
                                        '<img src="http://138.68.241.20/api/image/'+item.images[0]+'" alt="Slide11">'+
                                    '</div>'+
                                    '<div class="info-item-slide">'+
                                        '<span class="badge badge-success"><i class="fas fa-heart"></i>Favorito</span>'+
                                        '<p class="p2">'+item.name+'</p>'+
                                        '<p class="p4">$'+item.price+'.<sup>00 / día</sup></p>'+
                                        '<a class="btn btn-slide-productos" href="#" role="button">Ver producto <i class="fas fa-chevron-right"></i></a>'+
                                    '</div>'+
                                '</div>'+
                                '</div>';

                            productos+=html;
                      console.log(item);
                    });
                    $( "#favorito" ).append( productos );
                },
                error: function (error) {
                    console.log(error);
                }
            });
            
            
        });

