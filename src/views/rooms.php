<!DOCTYPE html>
<html>
<head>
    <!-- Include the Leaflet library -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
</head>
<body>
    <header>
        <?php include 'header.php'; ?>
    </header>

    <!-- Mapa en la parte superior de la página -->
    <div id="mapGlobal"></div>

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
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        var mapGlobal = L.map('mapGlobal').setView([<?= $apps[0]['Latitud']; ?>, <?= $apps[0]['Longitud']; ?>], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(mapGlobal);

        <?php foreach ($apps as $app): ?>
            L.marker([<?= $app['Latitud']; ?>, <?= $app['Longitud']; ?>]).addTo(mapGlobal);
        <?php endforeach; ?>
    </script>
</body>
</html>
