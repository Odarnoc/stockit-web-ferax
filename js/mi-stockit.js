var productos = "";
$(document).ready(function() {
    inicial();

});

function inicial() {
    $.ajax({
        url: serverURL + "publication/myStockit",
        method: "POST",
        dataType: "json",
        data: "",
        beforeSend: function(xhr) {
            /* Authorization header */
            xhr.setRequestHeader("Authorization", keyt);
        },
        success: function(data) {
            console.log(data);
            data.publications.forEach(function(item) {
                console.log("Despues de value");
                var boton="";
                console.log(item.status);
                if(item.status==1){
                    boton='<a style="color: white; width: 100%;" class="btn btn-danger " onclick="disableArticulo(\'' + item._id + '\')" role="button">Deshabilitar producto </a>';
                }else{
                    boton='<a style="color: white; width: 100%;" class="btn btn-success " onclick="enableArticulo(\'' + item._id + '\')" role="button">Habilitar producto </a>';
                }
                var html =
                    '<div class="col-md-4">' +
                    '<div class="thumbnail">' +
                    '<div class="d-img-thumbnail img-resolution">' +
                    '<img src="' + serverURL + 'image/' + item.images[0] + '" width="100%" alt="Slide11">' +
                    '</div>' +
                    '<div class="info-item-slide">' +
                    '<p class="p2">' + item.name + '</p>' +
                    '<p class="p4">$' + item.price + '.<sup>00 / día</sup></p>' +
                    '<a class="btn btn-slide-productos" href="editar-articulo.php?id=' + item._id + '" role="button">Editar producto <i class="fas fa-chevron-right"></i></a>' +
                    boton +
                    '</div>' +
                    '</div>' +
                    '</div>';
                productos += html;
                console.log(item);
            });
            $("#mi-stockit-productos").append(productos);

        },
        error: function(error) {
            console.log(error);
        }
    });
}

function disableArticulo(id) {

    swal({
            title: "Deseas deshabilitar el articulo?",
            text: "El artículo seleccionado se deshabilitara!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                disable(id);
            }
        });
}
function enableArticulo(id) {

    swal({
            title: "Deseas habilitar el articulo?",
            text: "El artículo seleccionado se habilitara!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                enable(id);
            }
        });
}
function enable(id) {
    console.log(id);
    $.ajax({
        url: serverURL + "publication/enable/" + id,
        method: "DELETE",
        beforeSend: function(xhr) {
            /* Authorization header */
            xhr.setRequestHeader("Authorization", keyt);
        },
        success: function(data) {
            swal("Se habilito el artículo seleccionado!", {
                icon: "success",
            }).then((willDelete) => {
                if (willDelete) {
                    location.reload();
                }
            });
            setTimeout(function(){ location.reload(); }, 5000);
        }
    });
}

function disable(id) {
    console.log(id);
    $.ajax({
        url: serverURL + "publication/disable/" + id,
        method: "DELETE",
        beforeSend: function(xhr) {
            /* Authorization header */
            xhr.setRequestHeader("Authorization", keyt);
        },
        success: function(data) {
            swal("Se deshabilito el artículo seleccionado!", {
                icon: "success",
            }).then((willDelete) => {
                if (willDelete) {
                    location.reload();
                }
            });
            setTimeout(function(){ location.reload(); }, 5000);
        }
    });
}