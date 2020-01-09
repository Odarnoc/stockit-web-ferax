function buscarPorCodigoPostal(){
    let codigoPostal = $('#postalCode').val();
    if (codigoPostal.length === 0) {
        return;
    }
    $.ajax({
        url: `${serverURL}location/zipcode/${codigoPostal}`,
        method: "GET",
        beforeSend: function(xhr) {
            /* Authorization header */
            xhr.setRequestHeader("Authorization", keyt);
        },
        success: function(data) {
            let place = data.place;
            $('#neighborhood').val(place.colony);
            
            $('#state').val(place.state);
            
            $('#locality').val(place.municipality);
            
            console.log(data)
        },
        error: function(error) {
            if(error.status === 404)
            swal({
                title: 'No se encontró el código postal',
                icon: "warning"
            })
            else
            swal({
                title: 'Algo ha salido mal, por favor intentelo más tarde',
                icon: "warning"
            })
        }
    });
}
function guardarDireccion(){
    let data = {};
    let type = $('#type').val();
    let route = $('#route').val();
    let streetNumber = $('#streetNumber').val();
    let internalNumber = $('#internalNumber').val();
    let postalCode = $('#postalCode').val();
    let neighborhood = $('#neighborhood').val();
    let locality = $('#locality').val();
    let state = $('#state').val();
    let country = $('#country').val();
    if (validar(type,'Tipo') && validar(route,'Calle') && validar(streetNumber,'Número exterior') &&
    validar(postalCode,'Código postal') && validar(neighborhood,'Colonia') && validar(locality,'Municipio') &&
    validar(state,'Estado') && validar(country,'País')) {
        data = {
            type: +type, route, streetNumber, internalNumber,
            postalCode, neighborhood, locality, state,
            country
        }
        $.ajax({
            url: serverURL + "location/create",
            method: "POST",
            data: JSON.stringify(data),
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            processData: false,
            beforeSend: function(xhr) {
                /* Authorization header */
                xhr.setRequestHeader("Authorization", keyt);
            },
            success: function(data) {
                console.log(data);
                if (data.message == 'location.created') {
                    location.href = "direcciones.php";
                }
            },
            error: function(error) {
                console.log(error);
                swal({
                    title: 'Algo ha salido mal, por favor intentelo más tarde',
                    icon: "warning"
                })
            }
        });
    }
    
    console.log("Hola", data)
}