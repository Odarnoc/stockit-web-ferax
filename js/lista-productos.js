var productos = "";
var miId = "";
        $( document ).ready(function() {
            $.ajax({
                url: "http://138.68.241.20/api/publication/list",
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
                var html = '<div class="col-lg-4 col-md-4 col-sm-6">'+
                                '<div class="slide-item">'+
                                    '<div class="single-product">'+
                                        '<div class="product-img">'+
                                            '<a href="producto-individual.php?id='+item._id+'">'+
                                                '<img class="primary-img" src="http://138.68.241.20/api/image/'+item.images[0]+'" alt="">'+
                                            '</a>'+
                                            '<div class="add-actions">'+
                                                '<ul>'+
                                                    '<li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="producto-individual.php?id='+item._id+'" data-toggle="tooltip" data-placement="top" title="Ver producto"><i class="ion-ios-search"></i></a>'+
                                                    '</li>'+
                                                    '<li><a data-toggle="tooltip" onclick="favorito(\''+item._id+'\')" data-placement="top" title="Agregar a favoritos"><i class="far fa-heart"></i></a>'+
                                                    '</li>'+
                                                    '<li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Agregar al carrito"><i class="ion-bag"></i></a>'+
                                                    '</li>'+
                                                '</ul>'+
                                            '</div>'+
                                        '</div>'+
                                        '<div class="product-content">'+
                                            '<div class="product-desc_info">'+
                                                '<p class="name-product">'+item.name+'</p>'+
                                                '<div class="price-box">'+
                                                    '<span class="new-price">$'+item.price+'</span>'+
                                                '</div>'+
                                                '<div class="rating-box">'+
                                                    '<ul>'+
                                                        '<li><i class="ion-ios-star"></i></li>'+
                                                        '<li><i class="ion-ios-star"></i></li>'+
                                                        '<li><i class="ion-ios-star"></i></li>'+
                                                        '<li class="silver-color"><i class="ion-ios-star-half"></i></li>'+
                                                        '<li class="silver-color"><i class="ion-ios-star-outline"></i></li>'+
                                                    '</ul>'+
                                                '</div>'+
                                            '</div>'+
                                       '</div>'+
                                    '</div>'+
                                '</div>'+
                             '</div>';
                            productos+=html;
                      console.log(item);
                    });
                    $("#cant_prods").text(data.total);
                    $( "#lista-productos" ).append( productos );
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
            }
        });  
    }