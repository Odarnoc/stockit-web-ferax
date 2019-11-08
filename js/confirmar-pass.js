$( document ).ready(function() {
    $("#code-but").click(function (event){
       event.preventDefault();
      cdpass();
    });
});

function cdpass() {
   var codigo = $("#cd-pass").val();
    if(codigo=="" || codigo==null){
        swal("Error!", "Ingresar un PIN", "error");
        return;
    }
    localStorage.setItem('cod',codigo);
   let jsonData = {
       code: codigo,
   };

   console.log(jsonData);

   $.ajax({
       type: 'post',
       url: 'http://138.68.241.20/api/user/confirmCode',
       data: jsonData,
       success: function (response) {
           console.log(response);
           if (response.message == null || response.message == "" || response.message == undefined) {
               swal("Error!", "Problemas en el servidor", "error");
           } else {
               location.href = "nueva-contrasena.php";

           }
           console.log(response.responseJSON.message);

       },
       error: function (response) {
        if(response.responseJSON.message == "bad.code.expired"){
            swal("Error!", "PIN Incorrecto", "error");
        }
    }
   });
}
