<!DOCTYPE html>
<html>
<head>
    <title>HOTELS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
</head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
</head>
<body>
    <header>
        <?php include 'header.php'; ?>
        <?php include 'header.php'; ?>
    </header>
    <div class="apartments">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($apps as $app): ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="images/habitacio<?= $app['ID']; ?>.jpg" class="card-img-top" alt="..." data-bs-toggle="modal" data-bs-target="#hotelModal<?= $app['ID']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $app['Titol']; ?></h5>
                            <p class="card-text">Preu: <?= $app['Preu_Alta']; ?></p>
                            <p class="card-text">Habitacions: <?= $app['N_Habitacions']; ?></p>
                            <p class="card-text">Adreça: <?= $app['Adreca_Postal']; ?></p>
                            <div id="map<?= $app['ID']; ?>-modal" style="height: 400px;"></div>
                            <a href="index.php?r=delete&id=<?= $app['ID']; ?>" class="btn btn-danger">Eliminar</a>
                        </div>
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
</html>
