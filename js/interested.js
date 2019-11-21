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
                var html = 
                            '<div class="col-md-4">'+
                                    '<div class="thumbnail">'+
                                        '<div class="d-img-thumbnail">'+
                                            '<img src="http://138.68.241.20/api/image/'+item.images[0]+'" alt="Slide11">'+
                                        '</div>'+
                                        '<div class="info-item-interesados">'+
                                            '<span class="badge badge-success"><i class="fas fa-bookmark"></i>Guardado</span>'+
                                            '<p class="t1">$'+item.price+'<sup>00 / día</sup></p>'+
                                            '<p class="t2 one-line">'+item.name+'</p>'+
                                        '</div>'+
                                        '<div class="d-interesados">'+
                                            '<ul>';
                                            item.prereservations.forEach(function(item2) {
                                                var defect = '<li><i class="fas fa-user-circle" style="color: white; font-size: 50px"></i></li>';
                                                if(!(item2.interesed.image == null || item2.interesed.image == "")){ 
                                                    defect= '<li><a href=""><img class="image-round" style="height: 50px;" src="http://138.68.241.20/api/image/'+item2.interesed.image+'" alt=""></a></li>'
                                                }
                                                html+=defect;
                                                });
                                            html+='</ul>'+
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