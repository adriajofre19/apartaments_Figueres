<?php
print_r($apps['ID']);
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Include the Leaflet library -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    


</head>

    <header>
        <?php include 'header.php'; ?>
    </header>

    <div id="mapGlobal" style="height: 500px;"></div>

    <div class="apartments">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($apps as $app): ?>
            <div class="col">
                <div class="card h-100">
                    <img src="images/habitacio<?= $app['ID']; ?>.jpg" class="card-img-top" alt="...">
                        
                    <div class="card-body">
                      <?php
                      print_r($app['ID']);
                      ?>
                        <h5 class="card-title"><?= $app['Titol']; ?></h5>
                        <p class="card-text">Preu: <?= $app['Preu_Alta']; ?></p>
                        <p class="card-text">Habitacions: <?= $app['N_Habitacions']; ?></p>
                        <p class="card-text">Adreça: <?= $app['Adreca_Postal']; ?></p>
                        <button type="button" class="btn btn-primary openModal" data-bs-toggle="modal" data-bs-target="#exampleModal" data-apartament-id="<?= $app['ID']; ?>">
                        Launch demo modal
                        </button>
                        
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="map"> </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="js/script.js"></script>

</body>
</html>
