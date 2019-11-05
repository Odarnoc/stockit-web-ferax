$( document ).ready(function() {
    $("#reset-but").click(function (event){
       event.preventDefault();
       restpass();
    });
});

function restpass() {

   var codigo =  localStorage.getItem('cod'); ;
   var pass1 =  $("#pass1").val();
   var pass2 =  $("#pass2").val();

   if(pass1 == "" || pass2 == null){
        swal("Error!", "Agregar nueva Contraseña", "error");
       return;
    }

    if(pass1!=pass2){
        swal("Error!", "Las Contraseñas no coinciden", "error");
        return;
    }
   

   let jsonData = {
       code: codigo,
       password: pass1
   };

   console.log(jsonData);

   $.ajax({
       type: 'post',
       url: 'http://138.68.241.20/api/user/resetPassword',
       data: jsonData,
       success: function (response) {
           console.log(response);
           if (response.message == null || response.message == "" || response.message == undefined) {
               swal("Error!", "Problemas en el servidor", "error");
           } else {
               location.href = "iniciar-sesion.html";

           }
           console.log(response.responseJSON.message);

       },
       error: function (response) {
            if(response.responseJSON.message == "registerToken.errors"){
                swal("Error!", "La contraseña es muy corta", "error");
            }
        }
   });
}