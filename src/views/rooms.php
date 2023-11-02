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
    <div class="apartments">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($rooms as $room): ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="images/habitacio<?= $room['ID']; ?>.jpg" class="card-img-top" alt="..." data-bs-toggle="modal" data-bs-target="#hotelModal<?= $room['ID']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $room['Titol']; ?></h5>
                            <p class="card-text">Preu: <?= $room['Preu_Alta']; ?></p>
                            <p class="card-text">Habitacions: <?= $room['N_Habitacions']; ?></p>
                            <p class="card-text">Adreça: <?= $room['Adreca_Postal']; ?></p>
                            <div id="map<?= $room['ID']; ?>-modal" style="height: 400px;"></div>
                            <a href="index.php?r=delete&id=<?= $room['ID']; ?>" class="btn btn-danger">Eliminar</a>
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
    <?php foreach ($rooms as $room): ?>
        var mymap<?= $room['ID']; ?> = L.map('map<?= $room['ID']; ?>-modal').setView([<?= $room['Latitud']; ?>, <?= $room['Longitud']; ?>], 25);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(mymap<?= $room['ID']; ?>);

        L.marker([<?= $room['Latitud']; ?>, <?= $room['Longitud']; ?>]).addTo(mymap<?= $room['ID']; ?>);
    <?php endforeach; ?>
</script>
</html>
