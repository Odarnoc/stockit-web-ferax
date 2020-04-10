var productos = "";
var miId = "";
$(document).ready(function() {
    console.log(categoriaFiltro);
    console.log(busquedaFiltro);
    $.ajax({
        url: serverURL + "publication/listFreeNear10km",
        method: "POST",
        dataType: "json",
        data: "",
        beforeSend: function(xhr) {
            /* Authorization header */
            xhr.setRequestHeader("Authorization", keyt);
        },
        success: function(data) {
            console.log(data);
            var cantProds = 0;
            data.publications.forEach(function(item) {
                var html = '<div class="col-lg-4 col-md-4 col-sm-6" style="paddign-top: 15px">' +
                    '<div class="slide-item">' +
                    '<div class="single-product">' +
                    '<div class="product-img">' +
                    '<a href="producto-individual.php?id=' + item._id + '">' +
                    '<img class="primary-img" src="' + serverURL + 'image/' + item.images[0] + '">' +
                    '</a>' +
                    '<div class="add-actions">' +
                    '<ul>' +
                    '<li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="producto-individual.php?id=' + item._id + '" data-toggle="tooltip" data-placement="top" title="Ver producto"><i class="ion-ios-search"></i></a>' +
                    '</li>' +
                    '<li><a data-toggle="tooltip" onclick="favorito(\'' + item._id + '\')" data-placement="top" title="Agregar a favoritos"><i class="far fa-heart"></i></a>' +
                    '</li>' +
                    '<li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Agregar al carrito"><i class="ion-bag"></i></a>' +
                    '</li>' +
                    '</ul>' +
                    '</div>' +
                    '</div>' +
                    '<div class="product-content">' +
                    '<div class="product-desc_info">' +
                    '<p class="name-product">' + item.name + '</p>' +
                    '<div style="text-align: left;">' +
                    '<span class="new-price">$' + item.price + '.00</span>' +
                    '</div>' +
                    '<div class="rating-box">' +
                    '<ul>' +
                    '<li><i class="ion-ios-star"></i></li>' +
                    '<li><i class="ion-ios-star"></i></li>' +
                    '<li><i class="ion-ios-star"></i></li>' +
                    '<li class="silver-color"><i class="ion-ios-star-half"></i></li>' +
                    '<li class="silver-color"><i class="ion-ios-star-outline"></i></li>' +
                    '</ul>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +


                    '<div class="list-slide_item">' +
                    '<div class="single-product">' +
                    '<div class="product-img">' +
                    '<a href="producto-individual.php?id=' + item._id + '">' +
                    '<img src="' + serverURL + 'image/' + item.images[0] + '">' +
                    '</a>' +
                    '</div>' +
                    '<div class="torress-product-content">' +
                    '<div class="product-desc_info">' +
                    '<h6 class="product-name"><a href="#0">' + item.name + '</a>' +
                    '</h6>' +
                    '<div style="text-align: left">' +
                    '<span class="new-price">$' + item.price + '.00</span>' +
                    '</div>' +
                    '<div class="rating-box">' +
                    '<ul>' +
                    '<li><i class="ion-ios-star"></i></li>' +
                    '<li><i class="ion-ios-star"></i></li>' +
                    '<li><i class="ion-ios-star"></i></li>' +
                    '<li><i class="ion-ios-star"></i></li>' +
                    '<li class="silver-color"><i class="ion-ios-star-outline"></i></li>' +
                    '</ul>' +
                    '</div>' +
                    '</div>' +
                    '<div class="add-actions">' +
                    '<ul>' +
                    '<li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="producto-individual.php?id=' + item._id + '" data-toggle="tooltip" data-placement="top" title="Ver producto"><i class="ion-ios-search"></i></a>' +
                    '</li>' +
                    '<li><a data-toggle="tooltip" onclick="favorito(\'' + item._id + '\')" data-placement="top" title="Agregar a favoritos"><i class="far fa-heart"></i></a>' +
                    '</li>' +
                    '<li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Agregar al carrito"><i class="ion-bag"></i></a>' +
                    '</li>' +
                    '</ul>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>';

                if (categoriaFiltro == 0 && busquedaFiltro == "") {
                    console.log("no filtrar");
                    productos += html;
                    cantProds++;
                } else if (categoriaFiltro == 0 && busquedaFiltro != "") {
                    if (String(item.name).toLowerCase().indexOf(busquedaFiltro.toLowerCase()) !== -1) {
                        productos += html;
                        cantProds++;
                    }
                } else if (categoriaFiltro != 0 && busquedaFiltro == "") {
                    if (parseInt(item.category) == parseInt(categoriaFiltro)) {
                        productos += html;
                        cantProds++;
                    }
                } else if (categoriaFiltro != 0 && busquedaFiltro != "") {
                    if ((String(item.name).toLowerCase().indexOf(busquedaFiltro.toLowerCase()) !== -1) || (parseInt(item.category) == parseInt(categoriaFiltro))) {
                        productos += html;
                        cantProds++;
                    }
                }
                console.log(item);
            });
            $("#cant_prods").text(cantProds);
            $("#lista-productos").append(productos);
        },
        error: function(error) {
            console.log(error);
        }
    });


});

function favorito(id) {
    $.ajax({
        url: serverURL + "publication/checkFavorites/" + id,
        method: "POST",
        dataType: "json",
        data: "",
        beforeSend: function(xhr) {
            /* Authorization header */
            xhr.setRequestHeader("Authorization", keyt);
        },

        success: function(message) {
            console.log(message);
        }
    });
}