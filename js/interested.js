var productos = "";
var listaproductos;
var miId = "";
$(document).ready(function() {
    $.ajax({
        url: "http://138.68.241.20/api/publication/interesed",
        method: "POST",
        dataType: "json",
        data: "",
        beforeSend: function(xhr) {
            /* Authorization header */
            xhr.setRequestHeader("Authorization", keyt);
        },
        success: function(data) {
            console.log(data);
            var nointeres = '<section class="sec-gray">' +
                '<div class="container">' +
                '<div class="row">' +
                '<div class="col-lg-12 col-md-12">' +
                '<div class="d-title-interesados">' +
                '<p class="t1">Sin usuarios interesados</p>' +
                '<p class="t2">Aquí podrás visualizar el listado con la información de los usuarios que estén interesados en tus publicaciones.</p>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</section>';
            if (data.publications.length == 0) {
                console.log(data.publications.length);
                productos = nointeres;
            } else {
                var cont = 0;
                listaproductos = data.publications;
                data.publications.forEach(function(item) {
                    var html =
                        '<div class="col-md-4">' +
                        '<div class="thumbnail">' +
                        '<div class="d-img-thumbnail">' +
                        '<Button onclick="senddata(' + cont + ')" data-toggle="modal" data-target="#exampleModalCenter" style="width:100%">' +
                        '<img src="http://138.68.241.20/api/image/' + item.images[0] + '" alt="Slide11">' +
                        '</Button>' +
                        '</div>' +
                        '<Button onclick="senddata(' + cont + ')" data-toggle="modal" data-target="#exampleModalCenter" style="width:100%;text-align: unset;">' +
                        '<div class="info-item-interesados">' +
                        '<span class="badge badge-success"><i class="fas fa-bookmark"></i>Guardado</span>' +
                        '<p class="t1">$' + item.price + '<sup>00 / día</sup></p>' +
                        '<p class="t2 one-line">' + item.name + '</p>' +
                        '</div>' +
                        '<div class="d-interesados">' +
                        '<div class="row">';
                    var terminar = 0;
                    item.prereservations.forEach(function(item2) {
                        if (terminar == 2) {
                            return;
                        }
                        var defect = '<div class="col-md-6"><i class="fas fa-user-circle" style="color: white; font-size: 50px"></i></div>';
                        if (!(item2.interesed.image == null || item2.interesed.image == "")) {
                            defect = '<div class="col-md-6"><img class="image-round" style="height: 50px;" src="http://138.68.241.20/api/image/' + item2.interesed.image + '" alt=""></div>';
                        }
                        html += defect;
                        terminar++;
                    });
                    html += '</div>' +
                        '</div>' +
                        '</Button>' +
                        '</div>' +
                        '</div>';
                    productos += html;
                    cont++;
                    console.log(item);
                });

            }
            $("#interes").append(productos);
        },
        error: function(error) {
            console.log(error);
        }
    });
});

function senddata(items) {
    var objetselect = listaproductos[items];
    console.log(objetselect);
    var htmlInsertar = "";
    objetselect.prereservations.forEach(function(item) {
        var imagen = '<i class="fas fa-user-circle" style="color: gray; font-size: 70px"></i>';
        console.log(item.interesed.image);

        if (!(item.interesed.image == null || item.interesed.image == "")) {
            imagen = '<img id="image-in" class="image-user-table" src="http://138.68.241.20/api/image/' + item.interesed.image + '" alt="" style="height: 65px;">';
        }
        var htmlinteresado =
            '<tr>' +
            '<td class="td-img-int">' + imagen + '</td>' +
            '<td class="td-name-int" id="name-in">' + item.interesed.fullname + '</td>' +
            '<td class="td-cancel-int"><a class="btn btn-cancel-table" onclick="cancelarPreReservation(\'' + item._id + '\')" role=""><i class="fas fa-times"></i></a></td>' +
            '<td class="td-check-int"><a class="btn btn-check-table" href="fechas-interesados.php?id=' + item._id + '" role=""><i class="fas fa-check"></i></a></td>' +
            '</tr>';
        htmlInsertar += htmlinteresado;

    });
    $("#interested").empty();
    $("#interested").append(htmlInsertar);
    $("#price-in").text(objetselect.price + ".00 MXN / Día");
    $("#cantInteresados").text(objetselect.prereservations.length + " Usuario(s)");
    $("#modalImg").attr("style", "background-image: url(http://138.68.241.20/api/image/" + objetselect.images[0] + ");");
}

function cancelarPreReservation(id) {
    console.log(id);
}