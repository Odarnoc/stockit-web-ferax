function sub() {
    var inp = document.getElementById('file-input');
    var numberOfImages = inp.files.length;
    let name = document.getElementById('name').value;
    let selectCategory = document.getElementById('category');
    let category = selectCategory.options[selectCategory.selectedIndex].value;
    let price = document.getElementById('price').value;
    let description = document.getElementById('description').value;
    let locat = document.getElementById('location').value;
    if (numberOfImages > 0 &&
        numberOfImages <= 6) {
        if (validar(name, "Nombre") &&
            validar(category, "Categoria") &&
            validar(price, "Precio por día") &&
            validar(description, "Descripción") &&
            validar(locat, "Dirección")) {
            var form = $('#sub')[0];
            var formData = new FormData(form);
            $.ajax({
                url: serverURL + "publication/create",
                method: "POST",
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function(xhr) {
                    /* Authorization header */
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
        }
    } else {
        swal("Error", `Al menos debes seleccionar una imagen y hasta un máximo de 6 imagenes.`, "error");
    }
}