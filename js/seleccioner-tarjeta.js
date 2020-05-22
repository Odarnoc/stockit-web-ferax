let prereserva;
$(document).ready(function () {
  $.ajax({
    url: serverURL + "prereservation/showComplete/" + idPreReservation,
    method: "POST",
    dataType: "json",
    data: "",
    beforeSend: function (xhr) {
      /* Authorization header */
      xhr.setRequestHeader("Authorization", keyt);
    },
    success: function (data) {
    
      prereserva=data.prereservation;
      console.log(prereserva);
    }
  });
  $.ajax({
    url: serverURL + "payMethod/list",
    method: "POST",
    dataType: "json",
    data: "",
    beforeSend: function (xhr) {
      /* Authorization header */
      xhr.setRequestHeader("Authorization", keyt);
    },
    success: function (data) {
      var productos = "";
      var cont = 0;
      console.log(data);
      $("#balance_text").empty().append("$" + parseFloat(data.balance).toFixed(2));
      data.payMethods.forEach(function (item) {
        cont++;
        var info = JSON.stringify(item).replace(/["]/g, "'");
        console.log(info);
        var html =
          '<div class="form-group col-md-6">' +
          '<div class="form-check">' +
          '<input class="form-check-input" type="radio" name="tarjetaData" id="exampleRadios' +
          cont +
          '" value="' +
          info +
          '">' +
          '<label class="form-check-label" for="exampleRadios' +
          cont +
          '">' +
          item.brand +
          " ****" +
          item.last4Digits +
          "</label>" +
          "</div>" +
          '<p class="p-check-label">Vence el ' +
          item.expMonth +
          "/" +
          item.expYear +
          "</p>" +
          "</div>";
        productos += html;
        console.log(item);
      });
      $("#tarjetas").append(productos);
    },
    error: function (error) {
      console.log(error);
    },
  });
});

function continuar(oxxo=null) {
  var radioValue = $("input[name='tarjetaData']:checked").val();
  if (radioValue == undefined || radioValue == null || radioValue == "") {
    swal("Error!", "Seleccione una tarjeta para continuar", "error");
  } else {
    let datajson=null;
    if (radioValue == "electronico") {
        datajson = {
            balance: "True",
            dias:dias
          };
    } else {
      var json = JSON.parse(radioValue.replace(/[']/g, '"'));
      console.log(json);
      datajson = {
        token_card: json.idConekta,
        dias:dias
      };
      console.log(datajson);
    }

    var urlWS=serverURL + "prereservation/pay/" + idPreReservation;
    if(dias!=""){
      urlWS=serverURL + "prereservation/extend/" + idPreReservation
    }
    if(oxxo!=null){
      urlWS=serverURL + "prereservation/oxxoPay/" + idPreReservation
      datajson = {
        oxxo_url: oxxo
      };
    }
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
          if (data.message == "pay.success") {
            if(oxxo!=null){
            location.href = "pago-enproceso.php";
            }else{
              location.href = "pago-confirmado.php";
            }
          } else if (data.message == "payment.made.previously") {
            swal("Error!", "Esta reservacion ya ha sido solicitada", "error");
          }
        },
        error: function (error) {
          if(error.responseJSON.message=="insufficient.balance.reject.pay"){
            swal("Error!", "No cuentas con suficiente dinero electronico.", "error");
          }else{
          if (error.responseJSON.errors.details) {
            var mensaje = "";
            error.responseJSON.errors.details.forEach(function (item) {
              mensaje += item.message;
            });
            swal("Error!", mensaje, "error");
          }
        }
        },
      });
    
  }
}

function back() {
  window.history.back();
}
