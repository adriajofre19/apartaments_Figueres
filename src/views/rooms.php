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
<div class="apartaments">
   <div class="row row-cols-1 row-cols-md-3 g-4">      
        <?php foreach ($tasks as $task): ?>
    <div class="col">
        <div class="card h-100">
            <img src="images/habitacio<?= $task['ID']; ?>.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $task['Titol']; ?></h5>
                <p class="card-text">Preu Temporada Alta:<?= $task['Preu_Alta']; ?></p>
                <p class="card-text">Preu Temporada Baixa:<?= $task['Preu_Baixa']; ?></p>
                <p class="card-text">Temporada: <?= $task['Temporades']; ?></p>
                <p class="card-text">Longitud: <?= $task['Longitud']; ?></p>
                <p class="card-text">Latitut: <?= $task['Latitud']; ?></p>
                <p class="card-text">Numero d'habitacions: <?= $task['N_Habitacions']; ?></p>
                <p class="card-text">Metres quadrats: <?= $task['Metres_Quadrats']; ?></p>
                <p class="card-text">Descripcio: <?= $task['Descripcio']; ?></p>
                <p class="card-text">Adreça: <?= $task['Adreca_Postal']; ?></p>
            </div>
        </div>
    </div>
<?php endforeach; ?>
        
        
      </div>
    </div>
  </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</html>
