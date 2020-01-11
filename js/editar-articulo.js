function getPublication(id) {
    $.ajax({
        url: serverURL + `publication/show/${id}`,
        method: "GET",
        contentType: false,
        processData: false,
        beforeSend: function(xhr) {
            /* Authorization header */
            xhr.setRequestHeader("Authorization", keyt);
        },
        success: function(data) {
            console.log(data);
            $('.image-upload').attr("style", "background-image: url(" + serverURL + "image/" + data.publication.images[0] + ");");
            $('.image-upload').addClass('overlay-image-upload');
            $('.image-upload label').css('color', 'rgba(255,255,255,1)');
            $("#name").val(data.publication.name);
            $("#category").val(data.publication.category);
            //Load catalog
            loadCatalog(data.publication.category, data.publication.catalogId._id);
            
            //Load locations
            loadLocations(data.publication.locationId._id);
            
            $("#description").val(data.publication.description);
            $("#location").val(data.publication.location);
            $("#price").val(data.publication.price);
            idImagesToRemove = data.publication.images;
        },
        error: function(error) {
            console.log(error);
        }
    });
}

function editar() {
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
    if (!imageChange) {
        if (validar(name, "Nombre") &&
            validar(category, "Categoria") &&
            validar(price, "Precio por día") &&
            validar(description, "Descripción") &&
            validar(size, "Medidas y peso (igual o menor)") &&
            validar(l, "Dirección")) {
            var form = $('#sub')[0];
            var formData = new FormData(form);
            formData.delete("Images");
            $.ajax({
                url: serverURL + `publication/update/${id}`,
                method: "PUT",
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
        if (numberOfImages > 0 && numberOfImages <= 6) {
            if (validar(name, "Nombre") &&
                validar(category, "Categoria") &&
                validar(price, "Precio por día") &&
                validar(description, "Descripción") &&
                validar(locat, "Dirección")) {
                var form = $('#sub')[0];
                var formData = new FormData(form);
                formData.append('imagesRemovedIds', idImagesToRemove.toString());
                $.ajax({
                    url: serverURL + `publication/update/${id}`,
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
            }
        }
    }
}

function selectCatalog(select){
    //console.log(select.value);
    let category = select.value;
    loadCatalog(category);
    /**/
}
function loadCatalog(value, id){
    let category = value;
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
            let html = '';
            data.catalogs.forEach(element => {
                html += '<option value="'+ element._id +'">'+ element.Weight +'gr.,'+element.width+'cm x '+element.height+'cm x '+element.depth+'cm</option>'
            });
            $('#catalogId').append(html);
            if (id) {
                $('#catalogId').val(id);
            }
        },
        error: function(error) {
            console.log(error);
        }
    });
}

function loadLocations(id){
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
            let html = '';
            emision.forEach(element => {
                html += '<option value="'+ element._id +'">'+ element.route +' '+element.streetNumber+', '+element.neighborhood+'</option>'
            });
            $('#locationId').append(html);
            $('#locationId').val(id);
        },
        error: function(error) {
            console.log(error);
        }
    });
}