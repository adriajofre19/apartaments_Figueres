
<!DOCTYPE html>
<html>
<head>
    <!-- Include the Leaflet library -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <script
        src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    ></script>
</head>
<body>
    <header>
        <?php include 'header.php'; ?>
    </header>

    <div id="mapGlobal" style="height: 500px;"></div>

    <div class="apartments">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($apps as $app): ?>
            <div class="col">
                <div class="card h-100">
                    <img src="images/habitacio<?= $app['ID']; ?>.jpg" class="card-img-top" alt="..."
                        data-bs-toggle="modal" data-bs-target="#hotelModal<?= $app['ID']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $app['Titol']; ?></h5>
                        <p class="card-text">Preu: <?= $app['Preu_Alta']; ?></p>
                        <p class="card-text">Habitacions: <?= $app['N_Habitacions']; ?></p>
                        <p class="card-text">Adreça: <?= $app['Adreca_Postal']; ?></p>
                        <div class="modal fade" id="hotelModal<?= $app['ID']; ?>" tabindex="-1" aria-labelledby="hotelModalLabel<?= $app['ID']; ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="hotelModalLabel<?= $app['ID']; ?>">Información del Apartamento</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <h5><?= $app['Titol']; ?></h5>
                                    <p>Precio: $<?= $app['Preu_Alta']; ?></p>
                                    <img src="images/habitacio<?= $app['ID']; ?>.jpg" alt="<?= $app['Titol']; ?>" class="img-fluid">
                                    </div>
                                    <div class="modal-footer">
                                        <a href="index.php?r=deleteroom&id=<?= $app['ID']; ?>" class="btn btn-danger">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin del modal -->
                    </div>
                    <div id="map<?= $app['ID']; ?>-modal" style="height: 300px;"></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

    <script>
        var map = L.map("mapGlobal").setView([0, 0], 2); // El centro y el zoom iniciales no importan

        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution:
                '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var bounds = new L.LatLngBounds(); // Inicializa los límites del mapa

        <?php foreach ($apps as $app): ?>
            var lat = <?= $app['Latitud']; ?>;
            var lng = <?= $app['Longitud']; ?>;
            var marker = L.marker([lat, lng]).addTo(map);
            marker.bindPopup("<?= $app['Titol']; ?>"); // Puedes personalizar el contenido del marcador

            bounds.extend([lat, lng]); // Extiende los límites del mapa para abarcar esta ubicación
        <?php endforeach; ?>

        // Ajusta el mapa para abarcar todos los marcadores
        map.fitBounds(bounds);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
<script>
    <?php foreach ($apps as $app): ?>
        var mymap<?= $app['ID']; ?> = L.map('map<?= $app['ID']; ?>-modal').setView([<?= $app['Latitud']; ?>, <?= $app['Longitud']; ?>], 25);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(mymap<?= $app['ID']; ?>);

        L.marker([<?= $app['Latitud']; ?>, <?= $app['Longitud']; ?>]).addTo(mymap<?= $app['ID']; ?>);
    <?php endforeach; ?>
</script>
</body>
</html>


    
</body>
</html>


    
</body>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    <?php foreach ($tasks as $task): ?>
        var mymap<?= $task['ID']; ?> = L.map('map<?= $task['ID']; ?>-modal').setView([<?= $task['Latitud']; ?>, <?= $task['Longitud']; ?>], 25);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(mymap<?= $task['ID']; ?>);

        L.marker([<?= $task['Latitud']; ?>, <?= $task['Longitud']; ?>]).addTo(mymap<?= $task['ID']; ?>);
    <?php endforeach; ?>
</script>
</html>
