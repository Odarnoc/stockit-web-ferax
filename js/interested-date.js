var fecha;
$(document).ready(function() {
    rentaDatos();
    var hoy = new Date(Date.now());
    hoy.setDate(hoy.getDate() + 1);
    var hoystr = "" + hoy.getDate() + "/" + (hoy.getMonth() + 1) + "/" + hoy.getFullYear();
    $('#daterenta').daterangepicker({
        "locale": {
            "format": "DD/MM/YYYY hh:mm A",
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
        "minDate": hoystr,
        "singleDatePicker": true,
        "timePicker": true
    }, function(start, end, label) {});

    $('#daterenta').on('apply.daterangepicker', function(ev, picker) {
        var desde = moment(picker.startDate);
        fecha = desde.toString();
        console.log(desde.toString());
        $('#daterenta').val(picker.startDate.format('DD/MM/YYYY hh:mm A'));
    });
});

function rentar() {
    let jsonData = {
        prereservationId: idConfirmar,
        dateTimeDelivery: fecha,
        message: $("#mensaje").val()
    };
    console.log(jsonData);

    $.ajax({
        url: "http://138.68.241.20/api/reservation/create",
        method: "POST",
        data: jsonData,
        beforeSend: function(xhr) {
            /* Authorization header */
            xhr.setRequestHeader("Authorization", keyt);
        },
        success: function(data) {
            window.history.back();
        }
    });
}

function rentaDatos() {
    $.ajax({
        url: "http://138.68.241.20/api/prereservation/show/" + idConfirmar,
        method: "POST",
        dataType: "json",
        data: "",
        beforeSend: function(xhr) {
            /* Authorization header */
            xhr.setRequestHeader("Authorization", keyt);
        },
        success: function(data) {
            var interesado = data.prereservation.interesed;
            console.log(data);
            $("#nameInteresad").text(interesado.fullname);
            $("#diasRenta").text(data.prereservation.numberDays);
            $("#total").text(data.prereservation.total);
            $("#interesadoPerfil").attr("src", "http://138.68.241.20/api/image/" + interesado.image);

            /*Modal*/
            $("#modalImage").attr("src", "http://138.68.241.20/api/image/" + interesado.image);
            $("#nameInteresadModal").text(interesado.fullname);
            $("#correoInteresado").text(interesado.email);
            $("#telInteresado").text(interesado.phone);

        }
    });
}