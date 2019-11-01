var productos = "";
$( document ).ready(function() {
    $.ajax({
        url: "http://138.68.241.20/api/publication/list",
        method: "POST",
        dataType: "json",
        data: "",
        beforeSend: function (xhr) {
            /* Authorization header */
            xhr.setRequestHeader("Authorization", "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6IjVkYjBjZTc1NDNlZDBlMDY5OWRiNTM4NyIsImlhdCI6MTU3MTg2ODcxMywiZXhwIjoxNTc0NDYwNzEzfQ.ZxDtDle25gyg5lK--MIOaLgG2119C7WTjL5CP8Menqk");
        },
        success: function (data) {
            console.log(data);
             
            data.publications.forEach(function(item) {
    

        var plantillaProductos=    
                                    '<div class="item" >'+
                                        '<div class="thumbnail">'+
                                            '<img src="http://138.68.241.20/api/image/'+item.images[0]+'" alt="Slide11" >'+
                                            '<div class="info-item-slide">'+
                                                '<p class="p1">'+item.category+'</p>'+
                                                '<p class="p2">'+item.name+'</p>'+
                                                '<p class="p3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>'+
                                                '<p class="p4">$'+item.price+'.<sup>00</sup></p>'+
                                                '<a class="btn btn-slide-productos" href="producto-individual.php?id='+item._id+'" role="button">Ver producto <i class="fas fa-chevron-right"></i></a>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>';         
              console.log(item);
             
              productos+=plantillaProductos;
            
            });
            $("#prod-carou").append( productos );

            $('.owl-carousel').owlCarousel({
                items:3,
                nav:true,
                navText: ['<i class="fas fa-chevron-circle-left"></i>','<i class="fas fa-chevron-circle-right"></i>'],
                loop:false,
                margin:50,
                autoplay:true,
                autoplayTimeout:5000,
                autoplayHoverPause:true,
              
                responsive:{
                    0:{
                        items:1,
                    },
                    600:{
                        items:3,  
                    },
                }
            });    
        },
        error: function (error) {
            console.log(error);
        }
    });
    
});