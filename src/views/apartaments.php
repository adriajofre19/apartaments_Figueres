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
                <p class="card-text"><?= $task['Preu_Alta']; ?></p>
                <p class="card-text"><?= $task['Preu_Baixa']; ?></p>
                <p class="card-text"><?= $task['Temporades']; ?></p>
                <p class="card-text"><?= $task['Longitud']; ?></p>
                <p class="card-text"><?= $task['Latitud']; ?></p>
                <p class="card-text"><?= $task['N_Habitacions']; ?></p>
                <p class="card-text"><?= $task['Metres_Quadrats']; ?></p>
                <p class="card-text"><?= $task['Descripcio']; ?></p>
                <p class="card-text"><?= $task['Adreca_Postal']; ?></p>
            </div>
        </div>
    </div>
<?php endforeach; ?>
        
        
      </div>
    </div>
  </div>
</div>
</body>
</html>