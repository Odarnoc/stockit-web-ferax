function sub() {
    var inp = document.getElementById('file-input');
    var numberOfImages = inp.files.length;
    let name = document.getElementById('name').value;
    let selectCategory = document.getElementById('category');
    let category = selectCategory.options[selectCategory.selectedIndex].value;
    let price = document.getElementById('price').value;
    let description = document.getElementById('description').value;
    let locat = document.getElementById('location').value;
    let size = $('#catalogId').val();
    let l = $('#locationId').val();
    if (numberOfImages > 0 &&
        numberOfImages <= 6) {
        if (validar(name, "Nombre") &&
            validar(category, "Categoria") &&
            validar(price, "Precio por día") &&
            validar(description, "Descripción") &&
            validar(size, "Medidas y peso (igual o menor)")&&
            validar(l, "Dirección")) {
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
                    location.href = "mi-stockit.php";

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
function loadCatalog(select){
    //console.log(select.value);
    let category = select.value;
    console.log(category);
    $.ajax({
        url: serverURL + "catalog/getByCategoryNumber/" + category,
        method: "GET",
        contentType: false,
        processData: false,
        beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", keyt);
        },
        success: function(data) {
            console.log(data);
            $('#catalogId').empty()
            let html = '<option hidden value="" selected="selected">Seleccione una opción</option>';
            data.catalogs.forEach(element => {
                html += '<option value="'+ element._id +'">'+ element.Weight +'gr.,'+element.width+'cm x '+element.height+'cm x '+element.depth+'cm</option>'
            });
            $('#catalogId').append(html);
        },
        error: function(error) {
            console.log(error);
        }
    });
    /**/
}
function loadLocations(){
    $.ajax({
        url: serverURL + "location/getByUser",
        method: "GET",
        contentType: false,
        processData: false,
        beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", keyt);
        },
        success: function(data) {
            console.log(data);
            //$('#locationId').empty()
            let emision = data.locations.filter(function(address){
                return address.type === 2
            })
            console.log(emision)
            let html = '<option hidden value="" selected="selected">Seleccione una opción</option>';
            emision.forEach(element => {
                html += '<option value="'+ element._id +'">'+ element.route +' '+element.streetNumber+', '+element.neighborhood+'</option>'
            });
            $('#locationId').append(html);
        },
        error: function(error) {
            console.log(error);
        }
    });
}