<!DOCTYPE html>
<html>
<head>
    <title>HOTELS</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
<body>
    <header>
        <?php include 'header.php' ?>
    </header>

    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/hotel1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/hotel2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/hotel3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

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
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

<footer>
<?php include 'footer.php' ?>
</footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</html>