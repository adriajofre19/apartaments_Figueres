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

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Usuaris
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
            <div class="mb-3 dades">
                <a type="text" class=" panel">Nom</a>
                <a type="text" class=" panel">Cognoms</a>
                <a type="text" class=" panel">Telèfon</a>
                <a type="text" class=" panel">Email</a>
                <a type="text" class=" panel">Targeta de crèdit</a>
                <a type="text" class=" panel">Usuari</a>
                <a type="text" class=" panel">Contrasenya</a>
                <a type="text" class=" panel">Rol</a>
                
            </div>
        
            <?php foreach ($apps as $app): ?>
                
                    <div class="container2">
                        <form action="index.php" method="post">
                        <input type="hidden" name="r" value="doupdateuser">
                        <div class="mb-3">
                        <input name="nom" type="text" class="form-control panel" value="<?php echo $app['Nom'] ?>">
                        <input name="cognoms" type="text" class="form-control panel" value="<?php echo $app['Cognoms'] ?>">
                        <input name="telefon" type="text" class="form-control panel" value="<?php echo $app['Telefon'] ?>">
                        <input name="email" type="text" class="form-control panel" value="<?php echo $app['Email'] ?>">
                        <input name="card" type="text" class="form-control panel" value="<?php echo $app['Card'] ?>">
                        <input name="user" type="text" class="form-control panel" value="<?php echo $app['user'] ?>">
                        <input name="pass" type="text" class="form-control panel" value="<?php echo $app['pass'] ?>">
                        <input name="rol" type="text" class="form-control panel" value="<?php echo $app['rol'] ?>">
                        <button type="submit" class="btn btn-primary">Actualitzar dades</button>
                        <a href="index.php?r=deleteuser&id=<?= $app['ID']; ?>" class="btn btn-danger">Eliminar</a>
                        </div>
                        </form>
                        </div>
                
            <?php endforeach; ?>

            <div class="container2">
                        <form action="index.php" method="post">
                        <input type="hidden" name="r" value="doregister">
                        <div class="mb-3">
                        <input name="nom" type="text" class="form-control panel">
                        <input name="cognoms" type="text" class="form-control panel">
                        <input name="telefon" type="text" class="form-control panel">
                        <input name="email" type="text" class="form-control panel">
                        <input name="card" type="text" class="form-control panel">
                        <input name="user" type="text" class="form-control panel">
                        <input name="pass" type="text" class="form-control panel">
                        <input name="rol" type="text" class="form-control panel">
                        <button type="submit" class="btn btn-primary">Crear usuari</button>
                        </div>
                        </form>
                        </div>
        
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Apartaments
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">

      <div class="mb-3 dades">
                <a type="text" class=" panel">Titol</a>
                <a type="text" class=" panel">Preu Alta</a>
                <a type="text" class=" panel">Preu Baixa</a>
                <a type="text" class=" panel">Temporada</a>
                <a type="text" class=" panel">Longitud</a>
                <a type="text" class=" panel">Latitud</a>
                <a type="text" class=" panel">N d'Habitacions</a>
                <a type="text" class=" panel">Metres Quadrats</a>
                <a type="text" class=" panel">Descripció</a>
                <a type="text" class=" panel">Adreça Postal</a>
                
            </div>

      <?php foreach ($rooms as $room): ?>
        <div class="container2">
            <form action="index.php" method="post">
            <input type="hidden" name="r" value="doupdateroom">
            <div class="mb-3">
                <input name="titol" type="text" class="form-control panel" value="<?php echo $room['Titol'] ?>">
                <input name="preu_alta" type="text" class="form-control panel" value="<?php echo $room['Preu_Alta'] ?>">
                <input name="preu_baixa" type="text" class="form-control panel" value="<?php echo $room['Preu_Baixa'] ?>">
                <input name="temporades" type="text" class="form-control panel" value="<?php echo $room['Temporades'] ?>">
                <input name="longitud" type="text" class="form-control panel" value="<?php echo $room['Longitud'] ?>">
                <input name="latitud" type="text" class="form-control panel" value="<?php echo $room['Latitud'] ?>">
                <input name="n_habitacions" type="text" class="form-control panel" value="<?php echo $room['N_Habitacions'] ?>">
                <input name="metres_quadrats" type="text" class="form-control panel" value="<?php echo $room['Metres_Quadrats'] ?>">
                <input name="descripcio" type="text" class="form-control panel" value="<?php echo $room['Descripcio'] ?>">
                <input name="adreca_postal" type="text" class="form-control panel" value="<?php echo $room['Adreca_Postal'] ?>">
                <button type="submit" class="btn btn-primary">Actualitzar dades</button>
                <a href="index.php?r=deleteroom&id=<?= $room['ID']; ?>" class="btn btn-danger">Eliminar</a>
            </div>
        </div>
        <?php endforeach; ?>

        
      
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Reserves
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>


    <footer>
        <?php include 'footer.php' ?>
    </footer>
</body>

</html>