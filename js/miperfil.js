$( document ).ready(function() {
    $.ajax({
        url: "http://138.68.241.20/api/user/show",
        method: "GET",
        dataType: "json",
        data: "",
        beforeSend: function (xhr) {
            /* Authorization header */
            xhr.setRequestHeader("Authorization", keyt) },
        success: function (data) {
            console.log(data);

            $("#name").val(data.user.fullname);
            $("#email").val(data.user.email);
            $("#tele").val(data.user.phone);

            if(data.user.credential != null ){
                $("#noval").hide();
                $("#val").show();
            }else{
                $("#noval").show();
                $("#val").hide();
            }
        },
        error: function (error) {
            console.log(error);
        }
    });
    
    
});