$( document ).ready(function() {
    $("#registrar_but").click(function (event){
       event.preventDefault();
      registrar();
    });
});
function registrar() {
    var nombre = $("#nombre").val();
    var correo = $("#correo").val();
    var pass = $("#pass").val();

    let jsonData = {
        fullname: nombre,
        email: correo,
        password: pass
    };

    console.log(jsonData);

    $.ajax({
        type: 'post',
        url: 'http://138.68.241.20/api/user/register',
        data: jsonData,
        success: function (response) {
            console.log(response);
            if (response.message == null || response.message == "" || response.message == undefined) {
                swal("Error!", "Problemas en el servidor", "error");
            } else {
               location.href = "iniciar-sesion.php";

            }

        },
        error: function (response) {
            if (response.responseJSON.message == "user.errors") {
                swal("Error!", "Favor de completar los campos!", "error");
            }
            

            if (response.responseJSON.message == "user.errors") {
                if (response.responseJSON.errors.message == "User validation failed: password: password.required, email: email.required") {
                    swal("Error!", "Favor de completar los campos Contraseña y Correo", "error");
                }

                if (response.responseJSON.message == "user.errors") {
                    if (response.responseJSON.errors.message == "User validation failed: fullname: fullname.required") {
                        swal("Error!", "Favor de completar correctamente el campo Nombre", "error");
                    }
                }
                if (response.responseJSON.message == "user.errors") {
                    if (response.responseJSON.errors.message == "User validation failed: password: password.required") {
                        swal("Error!", "Favor de completar el campo Contraseña", "error");
                    }
                }
                if (response.responseJSON.message == "user.errors") {
                    if (response.responseJSON.errors.message == "User validation failed: email: email.required") {
                        swal("Error!", "Favor de completar el campo Email", "error");
                    }
                }
                    
                
            }
        }
    });
}