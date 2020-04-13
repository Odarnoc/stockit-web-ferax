var productos = "";
$(document).ready(function() {
    $.ajax({
        url: serverURL + "publication/listFree",
        method: "POST",
        dataType: "json",
        data: "",
        beforeSend: function(xhr) {
            /* Authorization header */
            xhr.setRequestHeader("Authorization", keyt);
        },
        success: function(data) {
            console.log(data);

            data.publications.forEach(function(item) {

                var category = "Na";

                switch (parseInt(item.category)) {
                    case 1:
                        category = "Accesorios";
                        break;
                    case 2:
                        category = "Camping";
                        break;
                    case 3:
                        category = "Cocina";
                        break;
                    case 4:
                        category = "Deportes";
                        break;
                    case 5:
                        category = "Familiar";
                        break;
                    case 6:
                        category = "Fiesta";
                        break;
                    case 7:
                        category = "Gamers";
                        break;
                    case 8:
                        category = "Herramientas";
                        break;
                    case 9:
                        category = "Hogar";
                        break;
                    case 10:
                        category = "Juegos";
                        break;
                    case 11:
                        category = "Libros";
                        break;
                    case 12:
                        category = "Outdoors";
                        break;
                    case 13:
                        category = "Probar";
                        break;
                    case 14:
                        category = "Viajes";
                        break;
                    default:
                        category = "NA";
                        break;
                }


                var plantillaProductos =
                    '<div class="item" >' +
                    '<div class="thumbnail">' +
                    '<a href="producto-individual.php?id=' + item._id + '"><img style="width:100%;height:200px;object-fit:cover;" src="' + serverURL + 'image/' + item.images[0] + '" alt="Slide11" ></a>' +
                    '<div class="info-item-slide">' +
                    '<p class="p1">' + category + '</p>' +
                    '<p class="p2">' + item.name + '</p>' +
                    '<p class="p4">$' + item.price + '.<sup>00</sup></p>' +
                    '<a class="btn btn-slide-productos" href="producto-individual.php?id=' + item._id + '" role="button">Ver producto <i class="fas fa-chevron-right"></i></a>' +
                    '</div>' +
                    '</div>' +
                    '</div>';
                console.log(item);

                productos += plantillaProductos;

            });
            $("#prod-carou").append(productos);

            $('.owl-carousel').owlCarousel({
                items: 3,
                nav: true,
                navText: ['<i class="fas fa-chevron-circle-left"></i>', '<i class="fas fa-chevron-circle-right"></i>'],
                loop: false,
                margin: 50,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,

                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 3,
                    },
                }
            });
        },
        error: function(error) {
            console.log(error);
        }
    });

});