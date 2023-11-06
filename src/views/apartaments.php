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
            <?php foreach ($tasks as $task): ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="images/habitacio<?= $task['ID']; ?>.jpg" class="card-img-top" alt="..." data-bs-toggle="modal" data-bs-target="#hotelModal<?= $task['ID']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $task['Titol']; ?></h5>
                            <p class="card-text">Preu: <?= $task['Preu_Alta']; ?></p>
                            <p class="card-text">Habitacions: <?= $task['N_Habitacions']; ?></p>
                            <p class="card-text">Adreça: <?= $task['Adreca_Postal']; ?></p>
                            <div id="map<?= $task['ID']; ?>-modal" style="height: 400px;"></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    
</body>
</html>