var productos = "";
var listaHistorial;
        $( document ).ready(function() {
                $('#rateMe2').mdbRate();
            $.ajax({
                url: "http://138.68.241.20/api/reservation/records",
                method: "POST",
                dataType: "json",
                data: "",
                beforeSend: function (xhr) {
                    /* Authorization header */
                    xhr.setRequestHeader("Authorization", keyt);
                },
                success: function (data) {
                    console.log(data);
                    var cont = 0;
                    listaHistorial = data.records;
                    data.records.forEach(function(item) {
                        var html =
                            '<div class="col-md-4">' +
                            '<div class="thumbnail">' +
                            '<div class="d-img-thumbnail">' +
                            '<img src="http://138.68.241.20/api/image/' + item.prereservation.publication.images[0] + '" alt="Slide11">' +
                            '</div>' +
                            '<div class="info-item-interesados">' +
                            '<p class="t1">$' + item.prereservation.publication.price + '<sup>00 / día</sup></p>' +
                            '<p class="t2 one-line">' + item.prereservation.publication.name + '</p>' +
                            '<a class="btn btn-slide-productos" onclick="idCapture(\''+cont+'\')" data-toggle="modal" data-target="#exampleModalCenter" role="button">Calificar producto<i class="fas fa-chevron-right"></i></a>'+
                            '</div>' +
                            '</div>' +
                            '</div>';
                        productos += html;
                        console.log(item);
                        cont++;
                    });
                    $( "#historial" ).append( productos );
                },
                error: function (error) {
                    console.log(error);
                }
            });
        });

        function idCapture(captureId){
            var elementIguality = listaHistorial[captureId];

        $("#name-in").text(elementIguality.owner.fullname);
        $("#image-in").attr("src", "http://138.68.241.20/api/image/" + elementIguality.owner.image);
        
        $("#text4").text(elementIguality.prereservation.publication.name);
        $("#price-in").text(elementIguality.prereservation.publication.price + ".00 MXN / Día");
        $("#modalImg").attr("style", "background-image: url(http://138.68.241.20/api/image/" + elementIguality.prereservation.publication.images[0] + ");");

        console.log(listaHistorial[captureId]);
        
        
        
    }