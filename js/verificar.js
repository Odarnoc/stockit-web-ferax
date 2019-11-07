function img(){
    var form = $('#verifica')[0];
  var formData = new FormData(form);


          $.ajax({
              url: "http://138.68.241.20/api/user/verifyProfile",
              method: "PUT",
              data: formData,
              contentType: false,
              processData: false,
              beforeSend: function (xhr) {
                  /* Authorization header */
                  xhr.setRequestHeader("Authorization", keyt);
              },
              success: function (data) {
                  console.log(data);
                  location.href="mi-perfil.php";
              
              },
              error: function (error) {
                  console.log(error);
              }
          });
  }
