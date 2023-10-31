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

<div class="apartaments">
   <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col"><a href="index.php?r=rooms">
    <div class="card h-100">
      <img src="images/habitacio1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title"><?= $apps[0]['Titol']; ?></h5>
                            <p class="card-text">Preu: <?= $apps[0]['Preu_Alta']; ?></p>
                            <p class="card-text">Habitacions: <?= $apps[0]['N_Habitacions']; ?></p>
                            <p class="card-text">Adreça: <?= $apps[0]['Adreca_Postal']; ?></p>
      </div>
    </div>
  </div></a>
  <div class="col"><a href="index.php?r=rooms">
    <div class="card h-100">
      <img src="images/habitacio2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title"><?= $apps[1]['Titol']; ?></h5>
                            <p class="card-text">Preu: <?= $apps[1]['Preu_Alta']; ?></p>
                            <p class="card-text">Habitacions: <?= $apps[1]['N_Habitacions']; ?></p>
                            <p class="card-text">Adreça: <?= $apps[1]['Adreca_Postal']; ?></p>
      </div>
    </div>
  </div></a>
  <div class="col"><a href="index.php?r=rooms">
    <div class="card h-100">
      <img src="images/habitacio3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title"><?= $apps[2]['Titol']; ?></h5>
                            <p class="card-text">Preu: <?= $apps[2]['Preu_Alta']; ?></p>
                            <p class="card-text">Habitacions: <?= $apps[2]['N_Habitacions']; ?></p>
                            <p class="card-text">Adreça: <?= $apps[2]['Adreca_Postal']; ?></p>
      </div>
    </div>
  </div></a>
  <div class="col"><a href="index.php?r=rooms">
    <div class="card h-100">
      <img src="images/habitacio4.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title"><?= $apps[3]['Titol']; ?></h5>
                            <p class="card-text">Preu: <?= $apps[3]['Preu_Alta']; ?></p>
                            <p class="card-text">Habitacions: <?= $apps[3]['N_Habitacions']; ?></p>
                            <p class="card-text">Adreça: <?= $apps[3]['Adreca_Postal']; ?></p>
      </div>
    </div>
  </div></a>
  <div class="col"><a href="index.php?r=rooms">
    <div class="card h-100">
      <img src="images/habitacio5.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title"><?= $apps[4]['Titol']; ?></h5>
                            <p class="card-text">Preu: <?= $apps[4]['Preu_Alta']; ?></p>
                            <p class="card-text">Habitacions: <?= $apps[4]['N_Habitacions']; ?></p>
                            <p class="card-text">Adreça: <?= $apps[4]['Adreca_Postal']; ?></p>
    </div>
  </div></a>
  <div class="col"><a href="index.php?r=rooms">
    <div class="card h-100">
      <img src="images/habitacio6.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title"><?= $apps[5]['Titol']; ?></h5>
                            <p class="card-text">Preu: <?= $apps[5]['Preu_Alta']; ?></p>
                            <p class="card-text">Habitacions: <?= $apps[5]['N_Habitacions']; ?></p>
                            <p class="card-text">Adreça: <?= $apps[5]['Adreca_Postal']; ?></p>
      </div>
    </div>
  </div>
</div>
</div></a> 
<footer>
<?php include 'footer.php' ?>
</footer>
</body>
</html>