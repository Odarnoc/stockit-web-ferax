$( document ).ready(function() {
    $.ajax({
        url: "http://138.68.241.20/api/payMethod/list",
        method: "POST",
        dataType: "json",
        data: "",
        beforeSend: function (xhr) {
            /* Authorization header */
            xhr.setRequestHeader("Authorization", keyt);
        },
        success: function (data) {
            var productos="";
            var cont= 0;
            console.log(data);
            data.payMethods.forEach(function(item) {
                cont++;
                var info= JSON.stringify(item).replace(/["]/g, "\'");
                console.log(info);
                var html= 
                                '<div class="form-group col-md-6">'+
                                    '<div class="form-check">'+
                                        '<input class="form-check-input" type="radio" name="tarjetaData" id="exampleRadios'+cont+'" value="'+info+'">'+
                                        '<label class="form-check-label" for="exampleRadios'+cont+'">'+
                                            item.brand+' ****'+item.last4Digits+
                                        '</label>'+
                                    '</div>'+
                                    '<p class="p-check-label">Vence el '+item.expMonth+'/'+item.expYear+'</p>'+
                                '</div>';
                productos+=html;
                console.log(item);
            });
            $( "#tarjetas" ).append( productos );
        },
        error: function (error) {
            console.log(error);
        }
    });
});


function continuar(){
    var radioValue = $("input[name='tarjetaData']:checked").val();
    if(radioValue == undefined || radioValue == null || radioValue == ""){
        swal("Error!", "Seleccione una tarjeta para continuar", "error");
    }else{
        var json = JSON.parse(radioValue.replace(/[']/g, "\""));
        console.log(json);
    }
}

function back(){
    window.history.back();
}