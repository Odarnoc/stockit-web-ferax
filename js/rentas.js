var productos = "";
var listaproductos = [];
var fecha;
var fechainicio;
var precio;
var objeto;
var dias = 0;
var calif = 0;
var calif2 = 0;
var reserva;
$(document).ready(function () {
  getList();
});
function getList() {
  $("#rentas").empty();
  productos = "";
  listaproductos = [];
  $.ajax({
    url: serverURL + "reservation/list",
    method: "POST",
    dataType: "json",
    data: "",
    beforeSend: function (xhr) {
      /* Authorization header */
      xhr.setRequestHeader("Authorization", keyt);
    },
    success: function (data) {
      console.log(data);
      var nofavorito =
        '<section class="sec-gray">' +
        '<div class="container">' +
        '<div class="row">' +
        '<div class="col-lg-12 col-md-12">' +
        '<div class="d-title-interesados">' +
        '<p class="t1">Sin rentas disponibles</p>' +
        '<p class="t2">Aquí podrás visualizar el listado con los articulos en renta.</p>' +
        "</div>" +
        "</div>" +
        "</div>" +
        "</div>" +
        "</section>";
      if (data.reservations.length == 0) {
        console.log(data.reservations.length);
        productos = nofavorito;
      } else {
        var cont = 0;
        var ended = 0;
        listaproductos = data.reservations;
        data.reservations.forEach(function (item) {
          var formato = item.prereservation.publication;
          var funcion = "datosInteresado";
          var botones = "";
          if (item.interesed._id == data.user_id) {
            funcion = "datosOwner";
            var reduce = 1;
            if (item.prereservation.daysReservation.length > 2) {
              reduce = 2;
            }
            var d1 = new Date(
              item.prereservation.daysReservation[
                item.prereservation.daysReservation.length - reduce
              ]
            );
            var d3 = new Date(
              item.prereservation.daysReservation[
                item.prereservation.daysReservation.length - 1
              ]
            );
            var d2 = new Date();
            var d4 = new Date();
            d2.setDate(d2.getDate() - 2);

            if (d2 <= d1) {
              botones =
                '<a class="btn btn-extender-renta" onclick="extender_renta(' +
                cont +
                ')" role="button">Extender Renta</a>';
            } else {
              if (item.prereservation.califOne == 0) {
                botones =
                  '<a class="btn btn-calificar-renta" onclick="calificar_articulo(' +
                  cont +
                  ')" role="button">Calificar Articulos</a>';
              } else {
                ended = 1;
              }
            }
          } else {
            var d3 = new Date(
              item.prereservation.daysReservation[
                item.prereservation.daysReservation.length - 1
              ]
            );
            var d2 = new Date();
            if (d3 <= d2 && !item.ended) {
              botones =
                '<a class="btn btn-calificar-renta" onclick="terminar_renta(' +
                cont +
                ')" role="button">Terminar Renta</a>';
            }
          }
          if (ended == 0) {
            var html =
              '<div class="col-md-4">' +
              '<div class="thumbnail">' +
              '<div class="d-img-thumbnail">' +
              '<Button onclick="' +
              funcion +
              "(" +
              cont +
              ')" data-toggle="modal" data-target="#exampleModalCenter">' +
              '<img src="' +
              serverURL +
              "image/" +
              formato.images[0] +
              '" alt="Slide11">' +
              "</div>" +
              '<div class="info-item-slide">' +
              '<p class="p2">' +
              formato.name +
              "</p>" +
              '<p class="p4">$' +
              formato.price +
              ".<sup>00 / día</sup></p>" +
              "</div>" +
              '<div class="row">' +
              '<div class="col-6" style="text-align: center">' +
              '<p><i class="far fa-flag"></i>  Inicia</p>' +
              "<p>" +
              String(item.prereservation.daysReservation[0]).substr(0, 10) +
              "</p>" +
              "</div>" +
              '<div class="col-6" style="text-align: center">' +
              '<p><i class="fas fa-flag-checkered"></i>  Termina</p>' +
              "<p>" +
              String(
                item.prereservation.daysReservation[
                  item.prereservation.daysReservation.length - 1
                ]
              ).substr(0, 10) +
              "</p>" +
              "</div>" +
              "</Button>" +
              botones +
              "</div>" +
              "</div>" +
              "</div>";
            productos += html;
          }
          cont++;
          //console.log(item);
        });
      }
      $("#rentas").append(productos);
    },
  });
}
function puntuar(puntos) {
  $.ajax({
    url: serverURL + "evaluation/create",
    method: "POST",
    dataType: "json",
    data: {
      stars: puntos,
      reservationId: reserva._id,
    },
    beforeSend: function (xhr) {
      xhr.setRequestHeader("Authorization", keyt);
    },
    success: function (data) {
      console.log(data);
      swal("Éxito!", "Puntuación guardada correctamente", "success");
    },
    error: function (error) {},
  });
}
function datosInteresado(dato) {
  var objetselect = listaproductos[dato];
  console.log(objetselect);

  if (
    !(objetselect.interesed.image == null || objetselect.interesed.image == "")
  ) {
    $("#modalImage").attr(
      "style",
      "background-image: url(" +
        serverURL +
        "image/" +
        objetselect.interesed.image +
        ");"
    );
  } else {
    $("#modalImage").attr("style", "background-image: url(images/avatar.png);");
  }

  $("#nameInteresadModal").text(objetselect.interesed.fullname);
  $("#correoInteresado").text(objetselect.interesed.email);
  $("#telInteresado").text(objetselect.interesed.phone);
  $("#diasRenta").text(objetselect.prereservation.numberDays);
  $("#rentaTotal").text(objetselect.prereservation.total);
  $("#rentaFechas").empty();

  objetselect.prereservation.daysReservation.forEach(function (item) {
    $("#rentaFechas").append(
      '<p class="t1">' + String(item).substr(0, 10) + "</p>"
    );
  });
}
function datosOwner(dato) {
  var objetselect = listaproductos[dato];
  console.log(objetselect);

  if (!(objetselect.owner.image == null || objetselect.owner.image == "")) {
    $("#modalImage").attr(
      "style",
      "background-image: url(" +
        serverURL +
        "image/" +
        objetselect.owner.image +
        ");"
    );
  } else {
    $("#modalImage").attr("style", "background-image: url(images/avatar.png);");
  }

  $("#nameInteresadModal").text(objetselect.owner.fullname);
  $("#correoInteresado").text(objetselect.owner.email);
  $("#telInteresado").text(objetselect.owner.phone);
  $("#diasRenta").text(objetselect.prereservation.numberDays);
  $("#rentaTotal").text(objetselect.prereservation.total);
  $("#rentaFechas").empty();

  objetselect.prereservation.daysReservation.forEach(function (item) {
    $("#rentaFechas").append(
      '<p class="t1">' + String(item).substr(0, 10) + "</p>"
    );
  });
}
function calificar_articulo(dato) {
  var objetselect = listaproductos[dato];
  console.log(objetselect.prereservation);
  objeto = objetselect.prereservation;
  reserva = objetselect;
  $("#modalCalificar").modal("toggle");
}
function extender_renta(dato) {
  var objetselect = listaproductos[dato];
  $("#rentaTotalT").empty().append(0);
  console.log(objetselect.prereservation);
  $("#productoModal")
    .empty()
    .append(objetselect.prereservation.publication.name);
  $("#fechaVencimiento")
    .empty()
    .append(
      String(
        objetselect.prereservation.daysReservation[
          objetselect.prereservation.daysReservation.length - 1
        ]
      ).substr(0, 10)
    );
  objeto = objetselect.prereservation;
  reserva = objetselect;
  initialize_datepicker(
    objetselect.prereservation.daysReservation[
      objetselect.prereservation.daysReservation.length - 1
    ]
  );
  precio = objetselect.prereservation.publication.price;
  fechainicio = new Date(
    objetselect.prereservation.daysReservation[
      objetselect.prereservation.daysReservation.length - 1
    ]
  );
  $("#modatExtender").modal("toggle");
}
function initialize_datepicker(fechain) {
  var hoy = new Date(fechain);
  hoy.setDate(hoy.getDate() + 1);
  var hoystr =
    "" + hoy.getDate() + "/" + (hoy.getMonth() + 1) + "/" + hoy.getFullYear();
  $("#daterenta").daterangepicker(
    {
      locale: {
        format: "DD/MM/YYYY",
        separator: " - ",
        applyLabel: "Aplicar",
        cancelLabel: "Cancelar",
        fromLabel: "De",
        toLabel: "A",
        daysOfWeek: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
        monthNames: [
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
          "Deciembre",
        ],
        firstDay: 1,
      },
      autoUpdateInput: false,
      startDate: hoystr,
      endDate: hoystr,
      minDate: hoystr,
      singleDatePicker: true,
    },
    function (start, end, label) {}
  );

  $("#daterenta").on("apply.daterangepicker", function (ev, picker) {
    var desde = moment(picker.startDate);
    fecha = desde.toString();
    $("#daterenta").val(picker.startDate.format("DD/MM/YYYY"));

    var fechaInicio = new Date(fechainicio).getTime();
    var fechaFin = new Date(fecha).getTime();

    var diff = fechaFin - fechaInicio;
    dias = diff / (1000 * 60 * 60 * 24);
    console.log(dias);
    console.log(precio);
    $("#rentaTotalT")
      .empty()
      .append(dias * precio);
    if (dias != 0) {
      $("#extender").show();
    }
  });
}
function extender_renta_b() {
  window.location.href =
    "seleccionar-tarjeta.php?id=" + objeto._id + "&dias=" + dias;
}
function calificar(valor) {
  calif = valor;
  if (calif != 0 && calif2 != 0) {
    $("#encuesta").show();
  } else {
    $("#encuesta").hide();
  }
}
function calificar2(valor) {
  calif2 = valor;
  if (calif != 0 && calif2 != 0) {
    $("#encuesta").show();
  } else {
    $("#encuesta").hide();
  }
}
function enviar_encuesta() {
  let datajson = null;

  datajson = {
    calif1: calif,
    calif2: calif2,
  };
  var urlWS = serverURL + "prereservation/qualify/" + objeto._id;
  $.ajax({
    url: urlWS,
    method: "POST",
    dataType: "json",
    data: datajson,
    beforeSend: function (xhr) {
      /* Authorization header */
      xhr.setRequestHeader("Authorization", keyt);
    },
    success: function (data) {
      console.log(data);
      if (data.message == "saved.success") {
        var puntos = (calif + calif2) / 2;
        puntuar(parseInt(puntos));
        $("#modalCalificar").modal("hide");
        getList();
      }
    },
    error: function (error) {
      if (error.responseJSON.errors.details) {
        var mensaje = "";
        error.responseJSON.errors.details.forEach(function (item) {
          mensaje += item.message;
        });
        swal("Error!", mensaje, "error");
      }
    },
  });
}
function terminar_renta(dato) {
  var objetselect = listaproductos[dato];
  swal({
    type: "info",
    title: "¿Seguro que deseas marcar la renta como terminada?",
    confirmButtonText: "Aceptar",
    buttons: ["Cancelar", true],
    cancelButtonText: "Cancelar",
  }).then((value) => {
    if(value){
      var urlWS = serverURL + "reservation/endRent/" + objetselect._id;
      $.ajax({
        url: urlWS,
        method: "POST",
        dataType: "json",

        beforeSend: function (xhr) {
          /* Authorization header */
          xhr.setRequestHeader("Authorization", keyt);
        },
        success: function (data) {
          if (data.message == "saved.success") {
            getList();
          }
        },
        error: function (error) {
          if (error.responseJSON.errors.details) {
            var mensaje = "";
            error.responseJSON.errors.details.forEach(function (item) {
              mensaje += item.message;
            });
            swal("Error!", mensaje, "error");
          }
        },
      });
    }
  });
}
