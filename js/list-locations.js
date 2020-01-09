var productos = "";
$(document).ready(function() {
    $.ajax({
        url: serverURL + "location/getByUser",
        method: "GET",
        beforeSend: function(xhr) {
            /* Authorization header */
            xhr.setRequestHeader("Authorization", keyt);
        },
        success: function(data) {
            console.log(data);
            data.locations.forEach(function(item) {
                var type = "";
                if (item.type === 1) {
                    type = '<i class="fas fa-home"></i>';
                } else {
                    type = '<i class="fas fa-truck-moving"></i>';
                }
                var html =
                    '<div class="col-md-6" >' +
                    '<div class="d-item-tarjeta location-card" onclick="editar(\'' + item._id + '\')">' +
                    '<div class="row" >' +
                    '<div class="col-md-6 col-xs-6 d-img-card">' +
                    type +
                    '</div>' +
                    '<div class="col-md-6 col-6 d-number-card">' +
                    '<p class="t1">'+ item.locality +', ' + item.state + '</p>' +
                    '</div>' +
                    '</div>' +
                    '<div class="d-name-card">' +
                    '<p class="t1"></p>' +
                    '<p class="t2">' + item.route + '</p>' +
                    '</div>' +
                    '<div class="d-btn-card">' +
                    '<a class="btn btn-card" onclick="eliminarDireccion(\'' + item._id + '\', \'' + item.route + '\')" role="button">Eliminar dirección</a>' +
                    '</div>' +
                    '</div>' +
                    '</div>';
                productos += html;
                console.log(item);
            });
            $("#lista-tarjeta").append(productos);
        },
        error: function(error) {
            console.log(error);
        }
    });
});

function editar(id){
    location.href = "editar-direccion.php?id="+id;
}
function eliminarDireccion(id, direccion) {
    swal({
        title: 'Eliminar',
        text: '¿Esta seguro de eliminar la dirección '+direccion+'?',
        icon: "warning",
        dangerMode: true,
        buttons: ['No', 'Sí']
    }).then((willDelete) => {
        if (willDelete) {
            console.log("eliminado")
                $.ajax({
                    type: 'DELETE',
                    url: serverURL + 'location/deleteLocation/' + id,
                    dataType: "json",
                    beforeSend: function(xhr) {
                        /* Authorization header */
                        xhr.setRequestHeader("Authorization", keyt);
                    },
                    success: function(response) {
                        console.log("succes");
                        console.log(response);
                        console.log("message");
                        console.log(response.message);
                        if (response.message == "location.deleted") {
                            location.href = "direcciones.php";
                        } else {
                            swal("Algo ha salido mal, por favor intente más tarde.");
                        }
                    },
                    error: function(response) {console.log("error");console.log(response);}
                });
        } else {

            console.log("cancelado")
        }
      });
}