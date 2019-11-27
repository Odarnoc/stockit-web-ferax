var userdata = {};

$(document).ready(function() {
    $.ajax({
        url: serverURL + "user/show",
        method: "GET",
        dataType: "json",
        data: "",
        beforeSend: function(xhr) {
            /* Authorization header */
            xhr.setRequestHeader("Authorization", keyt)
        },
        success: function(data) {
            $('.image-upload').attr("style", "background-image: url(" + serverURL + "image/" + data.user.image + ");");
            $('.image-upload').addClass('overlay-image-upload');
            $('.image-upload label').css('color', 'rgba(255,255,255,1)');
            console.log(data);
            userdata = data.user;
            $("#name").val(data.user.fullname);
            $("#email").val(data.user.email);
            $("#tele").val(data.user.phone);

            if (data.user.credential != null) {
                $("#noval").hide();
                $("#val").show();
            } else {
                $("#noval").show();
                $("#val").hide();
            }
        },
        error: function(error) {
            console.log(error);
        }
    });
});

function update() {

    var form = $('#miperfil')[0];
    var formData = new FormData(form);
    $.ajax({
        url: serverURL + `user/update`,
        method: "PUT",
        data: formData,
        contentType: false,
        processData: false,
        beforeSend: function(xhr) {
            /* Authorization header  */
            xhr.setRequestHeader("Authorization", keyt);
        },
        success: function(data) {
            console.log(data);
            location.href = "mi-perfil.php";

        },
        error: function(error) {
            console.log(error);
        }
    });

    $.ajax({
        url: serverURL + "user/update",
        method: "PUT",
        dataType: "json",
        data: userdata,
        beforeSend: function(xhr) {
            /* Authorization header */
            xhr.setRequestHeader("Authorization", keyt)
        },
        success: function(data) {
            console.log(data);
        },
        error: function(error) {
            console.log(error);
        }
    });
}