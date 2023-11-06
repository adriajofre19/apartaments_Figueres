$(document).ready(function() {
    $(".openModal").on("click", function() {
        var apartamentId = $(this).data("apartament-id");
        console.log(apartamentId);

        $.ajax({

            type: "POST",
            url: "index.php?r=openModal",
            data: { apartament_id: apartamentId },
            dataType: "json",

            success: function(apartment) {

                    console.log(apartment);
                    jQuery("#Titol").html(apartment.Titol);
                    var map = L.map('map').setView([apartment.Latitud, apartment.Longitud], 7);

                    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        maxZoom: 19,
                        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                    }).addTo(map);

                    var marker = L.marker([apartment.Latitud, apartment.Longitud]).addTo(map);
                
            },
            error: function(xhr, textStatus, errorThrown) {
                console.log("Error en la solicitud AJAX: " + errorThrown);
            }
        });
    });
});