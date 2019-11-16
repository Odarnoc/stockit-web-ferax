var productos = "";
var miId = "";
        $( document ).ready(function() {
            $.ajax({
                url: "http://138.68.241.20/api/publication/interesed",
                method: "POST",
                dataType: "json",
                data: "",
                beforeSend: function (xhr) {
                    /* Authorization header */
                    xhr.setRequestHeader("Authorization", keyt);
                },
                success: function (data) {
                    console.log(data);
                var nointeres=  '<section class="sec-gray">'+
                                    '<div class="container">'+
                                        '<div class="row">'+
                                            '<div class="col-lg-12 col-md-12">'+
                                                '<div class="d-title-interesados">'+
                                                    '<p class="t1">Sin usuarios interesados</p>'+
                                                    '<p class="t2">Aquí podrás visualizar el listado con la información de los usuarios que estén interesados en tus publicaciones.</p>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+ 
                                '</section>';
                if(data.publications.length == 0){
                    console.log(data.publications.length);
                    productos=nointeres;
                }else{
                data.publications.forEach(function(item) {
                var html = '<div class="col-lg-4 col-md-4 col-sm-6" style="paddign-top: 15px">'+
                                '<div class="slide-item">'+
                                    '<div class="single-product">'+
                                        '<div class="product-img">'+
                                                '<a href="producto-individual.php?id='+item._id+'">'+
                                                    '<img class="primary-img" src="http://138.68.241.20/api/image/'+item.images[0]+'">'+
                                                '</a>'+
                                            '</div>'+
                                            '<div class="product-content">'+
                                                '<div class="product-desc_info">'+
                                                    '<p class="name-product">'+item.name+'</p>'+
                                                    '<div style="text-align: left;">'+
                                                        '<span class="new-price">$'+item.price+'.00</span>'+
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
                                '</div>';
                            productos+=html;
                    console.log(item);
                    });
                    }
                    $( "#interes" ).append( productos );
                },
                error: function (error) {
                    console.log(error);
                }
            });
            
            
        });