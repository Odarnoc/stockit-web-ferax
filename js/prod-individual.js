var productos = "";
var dayReservation = [];
var precioPublication = 0;

$(document).ready(function() {
    $.ajax({
        url: serverURL + "publication/show/" + idProductoJs,
        method: "GET",
        dataType: "json",
        data: "",

        beforeSend: function(xhr) {
            /* Authorization header */
            xhr.setRequestHeader("Authorization", keyt);
        },

        success: function(data) {
            if(user_id == data.publication.owner._id){
                location.href = "editar-articulo.php?id="+idProductoJs;
            }

            console.log("Datos")
            console.log(data);
            switch (parseInt(data.publication.category)) {
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
            var profile = 'images/avatar.png';
            if (!(data.publication.owner.image == null || data.publication.owner.image == "")) {
                profile = serverURL + 'image/' + data.publication.owner.image;
            }

            var html =
                '<div class="row">' +
                '<div class="col-md-1"></div>' +
                '<div class="col-md-6">' +
                '<div class="item-info-pro-ind">' +
                '<img src="' + serverURL + 'image/' + data.publication.images[0] + '" alt="">' +
                '<div class="d-info-pro-ind">' +
                '<p class="t1">' + category + '</p>' +
                '<p class="t2">' + data.publication.name + '</p>' +
                '<p class="t3">' + data.publication.description + '</p>' +
                '</div>' +
                '</div>' +
                '</div>' +


                '<div class="col-md-4 sticky">' +
                '<div class="d-checkout-pro-ind">' +
                '<p class="t1" style="text-align:center;">Públicado por</p>' +

                ' <div class="clearfix d-2">' +
                '<center>' +
                '<div  class="ratio img-responsive img-circle" style="background-image: url(' + profile + ');"></div>' +
                '<p class="t1">' + data.publication.owner.fullname + '</p>' +
                '<p class="t2">' + data.publication.locationId.route +' '+ data.publication.locationId.streetNumber + '-' +
                data.publication.locationId.internalNumber + ', ' + data.publication.locationId.locality + ', ' + data.publication.locationId.state +
                ' ' + data.publication.locationId.postalCode + '</p>' +
                '</center>' +
                '</div>' +



                '<div class="row row-fechas-pro-ind">' +
                '<div class="col-md-12 col-xs-12">' +
                '<input id="calendario" style="width:100%;text-align:center;border-radius: 5px" type="text" name="daterange" value="" />' +
                '</div>' +

                '</div>' +

                '<hr>' +

                '<div class="row row-precio-pro-ind">' +
                '<div class="col-md-6 col-xs-6">' +
                '<p class="t1">Precio por día</p>' +
                '</div>' +
                '<div class="col-md-6 col-xs-6">' +
                '<p class="t2">$' + data.publication.price + '<sup>00</sup></p>' +
                '</div>' +
                '</div>' +

                '<div class="row row-precio-pro-ind">' +
                '<div class="col-md-6 col-xs-6">' +
                '<p class="t1">Total</p>' +
                '</div>' +
                '<div class="col-md-6 col-xs-6">' +
                '<p class="t2">$<span id="total">' + data.publication.price + '</span><sup>00</sup></p>' +
                '</div>' +
                '</div>' +


                '<div class="row row-btns-pro-ind">' +
                '<div class="col-md-12">' +
                '<a class="btn btn-rentar-pro-ind" onclick="rentar()" role="button">Rentar ahora</a>' +
                '</div>' +
                '</div>' +

                '</div>' +
                '</div>' +

                '<div class="col-md-1"></div>' +

                '</div>';

            productos = html
            precioPublication = data.publication.price;
            $("#prod-ineterno").append(productos);
            var hoy = new Date(Date.now());
            hoy.setDate(hoy.getDate() + 1);
            console.log(hoy);


            dayReservation.push(hoy);

            var hoystr = "" + hoy.getDate() + "/" + (hoy.getMonth() + 1) + "/" + hoy.getFullYear();


            $('#calendario').val(hoystr + ' - ' + hoystr);

            $("#calendario").daterangepicker({
                "locale": {
                    "format": "DD/MM/YYYY",
                    "separator": " - ",
                    "applyLabel": "Aplicar",
                    "cancelLabel": "Cancelar",
                    "fromLabel": "De",
                    "toLabel": "A",
                    "daysOfWeek": [
                        "Do",
                        "Lu",
                        "Ma",
                        "Mi",
                        "Ju",
                        "Vi",
                        "Sa"
                    ],
                    "monthNames": [
                        "Enero",
                        "Febrero",
                        "Marzo",
                        "Abril",
                        "Mayo",
                        "Junio",
                        "Julio",
                        "Agosto",
                        "Septiembre",
                        "Octubre",
                        "Noviembre",
                        "Deciembre"
                    ],
                    "firstDay": 1
                },
                "autoUpdateInput": false,
                "startDate": hoystr,
                "endDate": hoystr,
                "minDate": hoystr
            }, function(start, end, label) {});

            $('#calendario').on('apply.daterangepicker', function(ev, picker) {
                var desde = moment(picker.startDate);
                var hasta = moment(picker.endDate);
                var results = diasEntreFechas(desde, hasta);
                dayReservation = results;

                $('#calendario').val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
                $("#total").text(dayReservation.length * precioPublication);
            });
        },
        error: function(error) {
            console.log(error);
        }
    });


});

function rentar() {
    let datajson = {
        numberDays: dayReservation.length,
        daysReservation: dayReservation.toString(),
        publicationId: idProductoJs
    };
    console.log(datajson);

    $.ajax({
        url: serverURL + "prereservation/create",
        method: "POST",
        dataType: "json",
        data: datajson,
        beforeSend: function(xhr) {
            /* Authorization header */
            xhr.setRequestHeader("Authorization", keyt);
        },
        success: function(data) {
            console.log(data.prereservation._id);
            location.href = "seleccionar-envio.php?id=" + data.prereservation._id;
        },
        error: function(error) {
            console.log(error.responseJSON);
            if (error.responseJSON.errors.errors.daysReservation == "daysReservation.must.to.be.after.today") {
                swal("Error!", "Asegurese que la fecha seleccionada sea mayor al dia actual", "error");
            }
        }
    });


};

function diasEntreFechas(desde, hasta) {
    var dia_actual = desde;
    var fechas = [];
    while (dia_actual.isSameOrBefore(hasta)) {
        fechas.push(new Date(dia_actual.format('MM-DD-YYYY')));
        dia_actual.add(1, 'days');
    }
    return fechas;
}