function continuar() {
    var radioValue = $("input[name='tarjetaData']:checked").val();
    if (radioValue == undefined || radioValue == null || radioValue == "") {
        swal("Error!", "Seleccione un método de envío para continuar", "error");
    } else {
        console.log(radioValue)
        var json = JSON.parse(radioValue.replace(/[']/g, "\""));
        console.log(json);
        if (json == '1') {
            location.href = "seleccionar-tarjeta.php?id="+id
        }else if(json == '2'){
            swal("Lo sentimos", "Esta opción continua en desarrollo", "info");
        }

    }
}

function back() {
    window.history.back();
}