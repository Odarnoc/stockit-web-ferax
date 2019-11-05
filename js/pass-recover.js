$( document ).ready(function() {
    $("#boton_recuperar").click(function (event){
       event.preventDefault();
       recuperar();
    });
});

function recuperar() {
   var correo = $("#celetronico").val();

   let jsonData = {
       email: correo,
   };

   console.log(jsonData);

   $.ajax({
       type: 'post',
       url: 'http://138.68.241.20/api/user/forgotPassword',
       data: jsonData,
       success: function (response) {
           console.log(response);
           if (response.message == null || response.message == "" || response.message == undefined) {
               swal("Error!", "Problemas en el servidor", "error");
           } else {
               location.href = "pin-confirmacion.html";

           }
           console.log(response.responseJSON.message);

       },
       error: function (response) {
        if(response.responseJSON.message == "email.required"){
            swal("Error!", "Completar campo Correo", "error");
        }
        if(response.responseJSON.message == "email.not.found"){
            swal("Error!", "Ingresar correo valido", "error");
        }
    }


   
   });
}