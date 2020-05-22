var server="";
window.Mercadopago.setPublishableKey(
  "APP_USR-7c786e56-33cf-4138-8b3e-ffdf10de9b3a"
);

window.Mercadopago.getIdentificationTypes();

document
  .getElementById("cardNumber")
  .addEventListener("keyup", guessPaymentMethod);
document
  .getElementById("cardNumber")
  .addEventListener("change", guessPaymentMethod);

function guessPaymentMethod(event) {
  let cardnumber = document.getElementById("cardNumber").value;

  if (cardnumber.length >= 6) {
    let bin = cardnumber.substring(0, 6);
    window.Mercadopago.getPaymentMethod(
      {
        bin: bin
      },
      setPaymentMethod
    );
  }
}

function setPaymentMethod(status, response) {
  if (status == 200) {
    let paymentMethodId = response[0].id;
    let element = document.getElementById("payment_method_id");
    element.value = paymentMethodId;
    getInstallments();
  } else {
    alert(`payment method info error: ${response}`);
  }
}

function getInstallments() {
  window.Mercadopago.getInstallments(
    {
      payment_method_id: document.getElementById("payment_method_id").value,
      amount: parseFloat(document.getElementById("transaction_amount").value)
    },
    function(status, response) {
      if (status == 200) {
        document.getElementById("installments").options.length = 0;
        response[0].payer_costs.forEach(installment => {
          let opt = document.createElement("option");
          opt.text = installment.recommended_message;
          opt.value = installment.installments;
          document.getElementById("installments").appendChild(opt);
        });
      } else {
        alert(`installments method info error: ${response}`);
      }
    }
  );
}

$("#pay").submit(function(event) {
  event.preventDefault();

  var $form = document.querySelector("#pay");

  window.Mercadopago.createToken($form, sdkResponseHandler);

  return false;
});

function sdkResponseHandler(status, response) {
  if (status != 200 && status != 201) {
    alert("Verifica los datos");
  } else {
    $("#token").val(response.id);
    if($("#sector").length){
        cliente_sel = $("#sector").val();
        if (cliente_sel != "") {
          cliente = clientes[cliente_sel];
        }
    }else{
        cliente=cliente_external;
    }
  var data=$("#pay").serializeArray();
  data.push({ name: "email", value: cliente.correo });
    $.ajax({
      url: server + "webserviceapp/create_payment_mp.php",
      type: "post",
      data: data,
      dataType: "html",
      beforeSend() {
        swal({
          title: "Cargando...",
          showConfirmButton: false,
          imageUrl: "resources/loader.gif"
        });
      },
      success(data) {
        console.log(data);
        swal.close();
        if (data == "approved") {
          check_quantities("Mercado Pago", total_google);
          $("#pay")[0].reset();
          $("#modalTarjeta").modal("hide");
          
        }else{
            swal(
                "<p id='pswalerror'> Error </p>",
                "<p id='psswalerror'>"+data+".</p> ",
                "error"
              );
        }
        Mercadopago.clearSession();
      },
      error(error) {
        swal(
          "<p id='pswalerror'> Error </p>",
          "<p id='psswalerror'>El pago no ha podido ser procesado. Intente de nuevo, por favor.</p> ",
          "error"
        );
      }
    });
  }
}
function enviar_pago_oxxo(){
  var cantidad="1000";
  var cliente="Oswaldo Villagrana";
  var email="odvillagrana@gmail.com";
    $.ajax({
        url: server + "webserviceapp/create_oxxo_pay.php",
        type: "post",
        data: {'transaction_amount':prereserva.total*3,email:prereserva.interesed.email,'producto':"Stockit, Renta de "+prereserva.publication.name},
        dataType: "html",
        beforeSend() {
          swal({
            title: "Cargando...",
            showConfirmButton: false,
            imageUrl: "resources/loader.gif"
          });
        },
        success(data) {
          console.log(data);
          swal.close();
          window.open(data,'_blank');
          continuar(data);
          Mercadopago.clearSession();
        },
        error(error) {
          swal(
            "<p id='pswalerror'> Error </p>",
            "<p id='psswalerror'>El pago no ha podido ser procesado. Intente de nuevo, por favor.</p> ",
            "error"
          );
        }
      });
}
