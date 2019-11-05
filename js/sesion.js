function login(){
    var correo = $("#email").val();
    var pass = $("#pass").val();

    let jsonData = { 
        email:correo,
        password:pass
    }; 

    console.log(jsonData);

    $.ajax({
        type: 'post',
        url: 'http://138.68.241.20/api/user/login',
        data: jsonData ,
        success: function (response) {
          console.log(response);
          if(response.token == null || response.token == "" || response.token == undefined){
            swal("Error!", "Problemas en el servidor", "error");
          }else{
            location.href = "index.html";
          }
        },
        error: function (response) {
            if(response.responseJSON.message == "bad.credentials"){
                swal("Error!", "Correo o Contraseña invalidos!", "error");
            }
            if(response.responseJSON.message == "user.errors"){
                if(response.responseJSON.errors.message == "User validation failed: password: password.minlength"){
                    swal("Error!", "La contraseña debe contener minimo 8 caracteres", "error");
                }
                if(response.responseJSON.errors.message == "User validation failed: email: email.required, password: password.required"){
                    swal("Error!", "Complete los campos de Usuario y Contraseña", "error");
                }

                if(response.responseJSON.errors.message == "User validation failed: password: password.required"){
                    swal("Error!", "Complete el campo Contraseña", "error");
                }

                if(response.responseJSON.errors.message == "User validation failed: email: email.required"){
                    swal("Error!", "Complete el campo Usuario", "error");
                }
                
                if(response.responseJSON.errors.message == "User validation failed: email: email.required, password: password.minlength"){
                    swal("Error!", "Complete el campo Usuario. Contraseña demaciado corta", "error");
                }
            }
        }
    });
}