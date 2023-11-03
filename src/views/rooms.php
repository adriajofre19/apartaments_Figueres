
<!DOCTYPE html>
<html>
<head>
    <title>HOTELS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
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

    
</body>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
