var successResponseHandler = function(token) {
    console.log("entro");
    console.log(token);
    let data = {
        tokenCardId: token.id
    }

    $.ajax({
        url: serverURL + "payMethod/create",
        method: "POST",
        dataType: "json",
        data: data,
        beforeSend: function(xhr) {
            /* Authorization header */
            xhr.setRequestHeader("Authorization", keyt)
        },
        success: function(data) {
            location.href = "";
        },
        error: function(error) {
            console.log(error);
        }
    });
};

var errorResponseHandler = function(error) {
    Swal.fire('Error', error.message_to_purchaser, 'error');

    console.log(error);
};

function addCard() {
    console.log("generando token");
    var nombre = $("#nombre").val();
    var num = $("#noTarjeta").val() + "";
    var mes = $("#mes").val();
    var anio = $("#anio").val();
    var cvv = $("#cvv").val();

    if (num.length >= 15 &&  num.length <= 16) {
        if (Conekta.card.validateExpirationDate(mes, anio)) {
            if (Conekta.card.validateCVC(cvv)) {

                Conekta.setPublicKey("key_UzxusuNmrsqxSocRFHfzbUg");
                Conekta.setLanguage("es");
                var tokenParams = {
                    card: {
                        number: num,
                        name: nombre,
                        exp_year: anio,
                        exp_month: mes,
                        cvc: cvv,
                    }
                };
                console.log(tokenParams);

                Conekta.Token.create(tokenParams, successResponseHandler, errorResponseHandler);
            } else {
                Swal.fire('Error', 'CVV no valido!', 'error');
            }
        } else {
            Swal.fire('Error', 'fecha de expiracion no valida!', 'error');
        }
    } else {
        Swal.fire('Error', 'Numero de targeta no valido!', 'error');
    }
}