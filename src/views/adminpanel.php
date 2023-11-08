<!DOCTYPE html>
<html>
<head>
    <title>HOTELS</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

    <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="script/script.js"></script>

<body>
    <header>
        <?php include 'header.php' ?>
    </header>

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header bg-primary">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Usuaris
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          
      <table id="users" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Cognoms</th>
                <th>Telèfon</th>
                <th>Email</th>
                <th>Targeta de crèdit</th>
                <th>Usuari</th>
                <th>Contrasenya</th>
                <th>Rol</th>
                <th>Actualitzar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($apps as $app): ?>
            <tr>
                <form action="index.php" method="post">
                <input type="hidden" name="r" value="doupdateuser">
                        <td><input name="nom" type="text" class="form-control panel" value="<?php echo $app['Nom'] ?>"></td>
                        <td><input name="cognoms" type="text" class="form-control panel" value="<?php echo $app['Cognoms'] ?>"></td>
                        <td><input name="telefon" type="text" class="form-control panel" value="<?php echo $app['Telefon'] ?>"></td>
                        <td><input name="email" type="text" class="form-control panel" value="<?php echo $app['Email'] ?>"></td>
                        <td><input name="card" type="text" class="form-control panel" value="<?php echo $app['Card'] ?>"></td>
                        <td><input name="user" type="text" class="form-control panel" value="<?php echo $app['user'] ?>"></td>
                        <td><input name="pass" type="text" class="form-control panel" value="<?php echo $app['pass'] ?>"></td>
                        <td><input name="rol" type="text" class="form-control panel" value="<?php echo $app['rol'] ?>"></td>
                        <td><button type="submit" class="btn btn-primary">Actualitzar</button></td>
                        <td><a href="index.php?r=deleteuser&id=<?= $app['ID']; ?>" class="btn btn-danger">Eliminar</a></td>
                </form>
            </tr>
            <?php endforeach; ?> 
        </tbody>
        <tbody>
          <tr>
            <form action="index.php" method="post">
            <input type="hidden" name="r" value="doregister">
                <td><input name="nom" type="text" class="form-control panel"></td>
                <td><input name="cognoms" type="text" class="form-control panel"></td>
                <td><input name="telefon" type="text" class="form-control panel"></td>
                <td><input name="email" type="text" class="form-control panel"></td>
                <td><input name="card" type="text" class="form-control panel"></td>
                <td><input name="user" type="text" class="form-control panel"></td>
                <td><input name="pass" type="text" class="form-control panel"></td>
                <td><input name="rol" type="text" class="form-control panel"></td>
                <td><button type="submit" class="btn btn-primary">Afegir</button></td>
                <td></td>
            </form>
          </tr>
        </tbody> 
    </table>
        
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



<table id="apartaments" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Titol Apartament</th>
                <th>Preu Alta</th>
                <th>Preu Baixa</th>
                <th>Temporada</th>
                <th>Longitud</th>
                <th>Latitud</th>
                <th>Nº Habitacions</th>
                <th>m2</th>
                <th>Descripció</th>
                <th>Adreça Postal</th>
                <th>Actualitzar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rooms as $room): ?>
            <tr>
                <form action="index.php" method="post">
                <input type="hidden" name="r" value="doupdateroom">
                    <td><input name="titol" type="text" class="form-control panel" value="<?php echo $room['Titol'] ?>"></td>
                    <td><input name="preu_alta" type="text" class="form-control panel" value="<?php echo $room['Preu_Alta'] ?>"></td>
                    <td><input name="preu_baixa" type="text" class="form-control panel" value="<?php echo $room['Preu_Baixa'] ?>"></td>
                    <td><input name="temporades" type="text" class="form-control panel" value="<?php echo $room['Temporades'] ?>"></td>
                    <td><input name="longitud" type="text" class="form-control panel" value="<?php echo $room['Longitud'] ?>"></td>
                    <td><input name="latitud" type="text" class="form-control panel" value="<?php echo $room['Latitud'] ?>"></td>
                    <td><input name="n_habitacions" type="text" class="form-control panel" value="<?php echo $room['N_Habitacions'] ?>"></td>
                    <td><input name="metres_quadrats" type="text" class="form-control panel" value="<?php echo $room['Metres_Quadrats'] ?>"></td>
                    <td><input name="descripcio" type="text" class="form-control panel" value="<?php echo $room['Descripcio'] ?>"></td>
                    <td><input name="adreca_postal" type="text" class="form-control panel" value="<?php echo $room['Adreca_Postal'] ?>"></td>
                    <td><button type="submit" class="btn btn-primary">Actualitzar</button></td>
                    <td><a href="index.php?r=deleteroom&id=<?= $room['ID']; ?>" class="btn btn-danger">Eliminar</a></td>
            </form>
            </tr>
            <?php endforeach; ?> 
        </tbody>
        <tbody>
          <tr>
            <form action="index.php" method="post">
            <input type="hidden" name="r" value="do_add">
            
              
                <td><input name="titol" type="text" class="form-control panel"></td>
                <td><input name="preu_alta" type="text" class="form-control panel"></td>
                <td><input name="preu_baixa" type="text" class="form-control panel"></td>
                <td><input name="temporades" type="text" class="form-control panel"></td>
                <td><input name="longitud" type="text" class="form-control panel"></td>
                <td><input name="latitud" type="text" class="form-control panel"></td>
                <td><input name="n_habitacions" type="text" class="form-control panel"></td>
                <td><input name="metres_quadrats" type="text" class="form-control panel"></td>
                <td><input name="descripcio" type="text" class="form-control panel"></td>
                <td><input name="adreca_postal" type="text" class="form-control panel"></td>
                <td><button type="submit" class="btn btn-primary">Afegir</button></td>
                <td></td>
                
            
            </form>
          </tr>
        </tbody>
        
    </table>
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


<table id="reserves" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Usuari</th>
                <th>Apartament</th>
                <th>Data d'entrada</th>
                <th>Data de sortida</th>
                <th>Preu per dia</th>
                <th>Nº persones</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reserves as $reserva): ?>
            <tr>
                <form action="index.php" method="post">
                <input type="hidden" name="r" value="doupdateroom">
            
                <td><?php echo $reserva['user_nombre'] ?></td>
                <td><?php echo $reserva['apartamento_titulo'] ?></td>
                <td><?php echo $reserva['Data_Entrada'] ?></td>
                <td><?php echo $reserva['Data_Sortida'] ?></td>
                <td><?php echo $reserva['Preu_Per_Dia'] ?></td>
                <td><?php echo $reserva['n_persones'] ?></td>
                <td><a href="index.php?r=deletereserve&id=<?= $reserva['ID']; ?>" class="btn btn-danger">Eliminar</a></td>
                
            
            </form>
            </tr>
            <?php endforeach; ?> 
        </tbody>
        
    </table>



        
    </div>
  </div>
</div>

</body>

</html>