var $stars;
var reservacionSeleccionada = "";
var puntos = 0;
var productos = "";
var listaHistorial;
$(document).ready(function() {

    var myDefaultWhiteList = $.fn.tooltip.Constructor.Default.whiteList
    myDefaultWhiteList.textarea = [];
    myDefaultWhiteList.button = [];

    $stars = $('.rate-popover');

    $stars.on('mouseover', function() {
        var index = $(this).attr('data-index');
        markStarsAsActive(index);
    });

    function markStarsAsActive(index) {
        unmarkActive();
        for (var i = 0; i <= index - 1; i++) {
            $($stars.get(i)).addClass('amber-text');
        }
    }

    function unmarkActive() {
        $stars.removeClass('amber-text');
    }

    $stars.on('click', function() {
        var index = $(this).attr('data-index');
        puntos = index;
        $("#botonGuardar").show();
    });



    $.ajax({
        url: "http://138.68.241.20/api/reservation/records",
        method: "POST",
        dataType: "json",
        data: "",
        beforeSend: function(xhr) {
            /* Authorization header */
            xhr.setRequestHeader("Authorization", keyt);
        },
        success: function(data) {
            console.log(data);
            var cont = 0;
            listaHistorial = data.records;
            data.records.forEach(function(item) {
                var html =
                    '<div class="col-md-4">' +
                    '<div class="thumbnail">' +
                    '<div class="d-img-thumbnail">' +
                    '<img src="http://138.68.241.20/api/image/' + item.prereservation.publication.images[0] + '" alt="Slide11">' +
                    '</div>' +
                    '<div class="info-item-interesados">' +
                    '<p class="t1">$' + item.prereservation.publication.price + '<sup>00 / día</sup></p>' +
                    '<p class="t2 one-line">' + item.prereservation.publication.name + '</p>' +
                    '<a style="width: 100%;color: #20c997;" class="btn btn-slide-productos" onclick="idCapture(\'' + cont + '\')" data-toggle="modal" data-target="#exampleModalCenter" role="button">Calificar producto<i class="fas fa-chevron-right"></i></a>' +
                    '</div>' +
                    '</div>' +
                    '</div>';
                productos += html;
                console.log(item);
                cont++;
            });
            $("#historial").append(productos);
        },
        error: function(error) {
            console.log(error);
        }
    });
});

function idCapture(captureId) {
    var elementIguality = listaHistorial[captureId];

    $("#name-in").text(elementIguality.owner.fullname);
    $("#image-in").attr("src", "http://138.68.241.20/api/image/" + elementIguality.owner.image);

    $("#text4").text(elementIguality.prereservation.publication.name);
    $("#price-in").text(elementIguality.prereservation.publication.price + ".00 MXN / Día");
    $("#modalImg").attr("style", "background-image: url(http://138.68.241.20/api/image/" + elementIguality.prereservation.publication.images[0] + ");");

    console.log(listaHistorial[captureId]);

    reservacionSeleccionada = elementIguality._id;
    $("#botonGuardar").hide();



}


function puntuar() {
    console.log(puntos);
    console.log(reservacionSeleccionada);


    $.ajax({
        url: "http://138.68.241.20/api/evaluation/create",
        method: "POST",
        dataType: "json",
        data: {
            stars: puntos,
            reservationId: reservacionSeleccionada
        },
        beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", keyt);
        },
        success: function(data) {
            console.log(data);
            swal("Éxito!", "Puntuación guardada correctamente", "success");

        },
        error: function(error) {
            if (error.responseJSON.message == "reservation.evaluated.before") {
                swal("Error!", "Usted ya ha evaluado esta reservación", "error");
            } else {
                swal("Error!", "Hubo un error al guardar su puntuación", "error");
            }
        }
    });
}

$(function() {
    $('.rate-popover').tooltip();
});