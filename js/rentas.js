var productos = "";
var listaproductos = [];
$(document).ready(function() {
    $.ajax({
        url: serverURL + "reservation/list",
        method: "POST",
        dataType: "json",
        data: "",
        beforeSend: function(xhr) {
            /* Authorization header */
            xhr.setRequestHeader("Authorization", keyt);
        },
        success: function(data) {
            console.log(data);
            var nofavorito = '<section class="sec-gray">' +
                '<div class="container">' +
                '<div class="row">' +
                '<div class="col-lg-12 col-md-12">' +
                '<div class="d-title-interesados">' +
                '<p class="t1">Sin rentas disponibles</p>' +
                '<p class="t2">Aquí podrás visualizar el listado con los articulos en renta.</p>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</section>';
            if (data.reservations.length == 0) {
                console.log(data.reservations.length);
                productos = nofavorito;
            } else {
                var cont = 0;
                listaproductos = data.reservations;
                data.reservations.forEach(function(item) {
                    var formato = item.prereservation.publication;
                    var html =
                        '<div class="col-md-4">' +
                        '<Button onclick="datosInteresado(' + cont + ')" data-toggle="modal" data-target="#exampleModalCenter">' +
                        '<div class="thumbnail">' +
                        '<div class="d-img-thumbnail">' +
                        '<img src="' + serverURL + 'image/' + formato.images[0] + '" alt="Slide11">' +
                        '</div>' +
                        '<div class="info-item-slide">' +
                        '<p class="p2">' + formato.name + '</p>' +
                        '<p class="p4">$' + formato.price + '.<sup>00 / día</sup></p>' +
                        '</div>' +
                        '<div class="row">' +
                        '<div class="col-6" style="text-align: center">' +
                        '<p><i class="far fa-flag"></i>  Inicia</p>' +
                        '<p>' + String(item.prereservation.daysReservation[0]).substr(0, 10) + '</p>' +
                        '</div>' +
                        '<div class="col-6" style="text-align: center">' +
                        '<p><i class="fas fa-flag-checkered"></i>  Termina</p>' +
                        '<p>' + String(item.prereservation.daysReservation[item.prereservation.daysReservation.length - 1]).substr(0, 10) + '</p>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</Button>' +
                        '</div>';
                    productos += html;
                    cont++;
                    console.log(item);
                });
            }
            $("#rentas").append(productos);
        },
    });
});

function datosInteresado(dato) {
    var objetselect = listaproductos[dato];
    console.log(objetselect);

    if (!(objetselect.interesed.image == null || objetselect.interesed.image == "")) {
        $("#modalImage").attr("style", "background-image: url(" + serverURL + "image/" + objetselect.interesed.image + ");");
    } else {
        $("#modalImage").attr("style", "background-image: url(images/avatar.png);");
    }


    $("#nameInteresadModal").text(objetselect.interesed.fullname);
    $("#correoInteresado").text(objetselect.interesed.email);
    $("#telInteresado").text(objetselect.interesed.phone);
    $("#diasRenta").text(objetselect.prereservation.numberDays);
    $("#rentaTotal").text(objetselect.prereservation.total);
    $("#rentaFechas").empty();

    objetselect.prereservation.daysReservation.forEach(function(item) {
        $("#rentaFechas").append('<p class="t1">' + String(item).substr(0, 10) + '</p>');
    });
}