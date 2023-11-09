<!DOCTYPE html>
<html>
<head>
    <!-- Include the Leaflet library -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
</head>
    
    <header>
        <?php include 'header.php'; ?>
    </header>

  
<div class="container mt-5 buscador">
     <form method="POST" action="index.php?r=rooms">
      <div class="row">
        <div class="col-md-4">
          <div class="mb-3">
            <label for="fechaEntrada" class="form-label">Data d'entrada</label>
            <input name="Data_Entrada" type="date" class="form-control" id="fechaEntrada">
          </div>
          <input type="submit" class="btn btn-primary btn_date" value="Enviar"></input>
        </div>
        <div class="col-md-4">
          <div class="mb-3">
            <label for="fechaSalida" class="form-label">Data de sortida</label>
            <input name="Data_Sortida" type="date" class="form-control" id="fechaSalida">
          </div>
          
        </div>
        <div class="col-md-4">
          <div class="mb-3">
            
            <input name="n_persones" type="hidden" class="form-control" id="numPersonas">
          </div>
          
        </div>
        
      </div>
      
    </form>
  </div>


<div class="container">
  <h2>Apartaments disponibles</h2>
  <?php if (!empty($apps)): ?>
    <div class="d-flex flex-wrap justify-content-center">
      <?php foreach ($apps as $app): ?>
        <div class="card card-margin" style="width: 18rem;">
          
          <img src="images/<?= $app['Titol']; ?>.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $app['Titol']; ?></h5>
        <h6 class="card-title">Preu per dia</h6>
        <p class="card-text"><?= $app['Preu_Baixa'] . " / " . $app['Preu_Alta']; ?></p>
        <h6 class="card-title">Adreça</h6>
        <p class="card-text"><?= $app['Adreca_Postal']; ?></p>
        <h6 class="card-title">Numero d'habitacions</h6>
        <p class="card-text"><?= $app['N_Habitacions']; ?></p>
        <button type="button" class="btn btn-primary openModal" data-bs-toggle="modal" data-bs-target="#exampleModal" data-apartament-id="<?= $app['ID']; ?>">
          Tancar
        </button>
            
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  <?php else: ?>
    <p>No hi ha apartaments disponibles amb les dades proporcionades.</p>
  <?php endif; ?>
</div>






<div class="container">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Titol"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <div class="row">
      <center>
      <img id="apartmentImage" src="images/" alt="">
      </center>
        <div class="col-md-6">
            <div id="map" style="height: 350px;"></div>
        </div>
        <div class="col-md-6">
    <h6>Descripcio</h6>
    <p id="Descripcio"></p>

    <h6 class="d-inline">Numero d'habitacions</h6>
    <p id="N_Habitacions" class="d-inline"></p><br>

    <h6 class="d-inline">Metres Quadrats</h6>
    <p id="Metres_Quadrats" class="d-inline"></p><br>
    
    <h6>Adreça</h6>
    <p id="Adreca_Postal"></p>

    <h6>Serveis</h6>
    <p id="Serveis"></p>

    <h6>Preu per dia</h6>
    <p id="Precio_Reserva"></p>

</div>

    </div>
      
</div>

      <div class="modal-footer">
        
      <div class="container">
        <form class="form-registrar" action="index.php" method="post">
    <input type="hidden" name="r" value="addreserve">
    <center>
    <div class="mb-3">
      <input name="ID_Usuari" type="hidden" class="form-control form-reserve" id="input" aria-describedby="emailHelp" value="<?php echo $user['ID'] ?>">
      <input name="ID_Apartament" type="hidden" class="form-control form-reserve" id="input" aria-describedby="emailHelp">
      <input name="Data_Entrada" type="date" class="form-control form-reserve" id="Data_Entrada" aria-describedby="emailHelp">
      <input name="Data_Sortida" type="date" class="form-control form-reserve" id="Data_Sortida">
      <input name="Preu_Per_Dia" type="hidden" class="form-control form-reserve" id="Precio_Reserva">
      <input name="n_persones" type="hidden" class="form-control form-reserve" id="persones">
      <button type="submit" class="btn btn-danger">Tancar</button>
    </div>
  </form>
    </div>

        
      </div>

    </div>
  </div>
  </div>
</div>
    <script src="script/script.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
