var productos = "";
$(document).ready(function() {
    $.ajax({
        url: serverURL + "reservation/deliveries",
        method: "POST",
        dataType: "json",
        data: "",
        beforeSend: function(xhr) {
            /* Authorization header */
            xhr.setRequestHeader("Authorization", keyt);
        },
        success: function(data) {
            console.log(data);
            var noEntregas =
                '<div class="col-lg-12 col-md-12">' +
                '<div class="d-title-interesados">' +
                '<p class="t1">Sin entregas próximas</p>' +
                '<p class="t2">Aquí podrás consultar la información de los usuarios que hayan rentado artículos de tu disposición.</p>' +
                '</div>' +
                '</div>';
            if (data.deliveries.length == 0) {
                console.log(data.deliveries.length);
                productos = noEntregas;
            } else {
                data.deliveries.forEach(function(item) {
                    var fecha = moment(item.dateTimeDelivery);
                    console.log(fecha.format('h:mm a'));
                    console.log(fecha.format('DD/MM/YYYY'));

                    var profile = 'images/avatar.png';

                    if (!(item.interesed.image == null || item.interesed.image == "")) {
                        profile = serverURL + "image/" + item.interesed.image;
                    }

                    var html = '<div class="col-md-4 sticky" style="position: unset;">' +
                        '<div class="d-checkout-pro-ind">' +
                        '<div class="clearfix d-2">' +
                        '<center style="margin-bottom: 1rem;">' +
                        '<div class="ratio img-responsive img-circle" style="background-image: url(' + profile + ');"></div>' +
                        '<p class="t1">' + item.interesed.fullname + '</p>' +
                        '</center>' +
                        '</div>' +
                        '<hr>' +
                        '<div class="row" style="text-align:center;">' +
                        '<div class="col-md-6 col-xs-6">' +
                        '<p class="t2">Fecha:</p>' +
                        '<p class="t1">' + fecha.format('DD/MM/YYYY') + '</p>' +
                        '</div>' +
                        '<div class="col-md-6 col-xs-6">' +
                        '<p class="t2">Hora:</p>' +
                        '<p class="t1">' + fecha.format('h:mm a') + '</p>' +
                        '</div>' +
                        '</div>' +
                        '<div class="row" style="text-align:center;">' +
                        '<div class="col-md-12 col-xs-12">' +
                        '<p class="t2">Mensaje:</p>' +
                        '<p class="t1">' + item.message + '</p>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>';
                    productos += html;
                    console.log(item);
                });
            }
            $("#entregas").append(productos);
        },
    });
});