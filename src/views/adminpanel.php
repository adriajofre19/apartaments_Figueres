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
    <script src="https://kit.fontawesome.com/1c1c9d7025.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/plug-ins/1.13.7/i18n/ca.json"></script>

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
                <th>Editar/Eliminar</th>
                
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
                        <td><button type="submit" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></button>
                        <a href="index.php?r=deleteuser&id=<?= $app['ID']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
                </form>
            </tr>
            <?php endforeach; ?> 
        </tbody> 
    </table>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUserModal">
              Afegir Usuari
            </button>
        
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
                <th>Serveis</th>
                <th>Editar/Eliminar</th>
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
                    <td><input name="serveis" type="text" class="form-control panel" value="<?php echo $room['Serveis'] ?>"></td>
                    <td><button type="submit" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></button>
                    <a href="index.php?r=deleteroom&id=<?= $room['ID']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
            </form>
            </tr>
            <?php endforeach; ?> 
        </tbody>
    </table>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addAppModal">
              Afegir Apartament
        </button>
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
                <td><a href="index.php?r=deletereserve&id=<?= $reserva['ID']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
                
            
            </form>
            </tr>
            <?php endforeach; ?> 
        </tbody>
        
    </table>



        
    </div>
  </div>
</div>

<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addUserModalLabel">Afegir Usuari</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="index.php" method="post">
            <input type="hidden" name="r" value="doregister">
                <input name="nom" type="text" class="form-control panel" placeholder="Nom">
                <input name="cognoms" type="text" class="form-control panel" placeholder="Cognoms">
                <input name="telefon" type="text" class="form-control panel" placeholder="Telèfon">
                <input name="email" type="text" class="form-control panel" placeholder="Email">
                <input name="card" type="text" class="form-control panel" placeholder="Targeta de crèdit">
                <input name="user" type="text" class="form-control panel" placeholder="Usuari">
                <input name="pass" type="text" class="form-control panel" placeholder="Contrasenya">
                <select name="rol" class="form-control panel" id="rol" required>
                    <option value="usuari">Rol: Usuari</option>
                    <option value="gestor">Rol: Gestor</option>
                    <option value="admin">Rol: Admin</option>
                </select>
                <button type="submit" class="btn btn-primary">Afegir</button>
                
            </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="addAppModal" tabindex="-1" role="dialog" aria-labelledby="addAppModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addAppModalLabel">Afegir Usuari</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="index.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="r" value="do_add">
                <input name="titol" type="text" class="form-control panel" placeholder="Títol">
                <input name="preu_alta" type="text" class="form-control panel" placeholder="Preu temporada alta">
                <input name="preu_baixa" type="text" class="form-control panel" placeholder="Preu temporada baixa">
                <input name="temporades" type="text" class="form-control panel" placeholder="Temporada Alta/Baixa">
                <input name="longitud" type="text" class="form-control panel" placeholder="Longitud">
                <input name="latitud" type="text" class="form-control panel" placeholder="Latitud">
                <input name="n_habitacions" type="text" class="form-control panel" placeholder="Número d'habitacions">
                <input name="metres_quadrats" type="text" class="form-control panel" placeholder="Metres quadrats">
                <input name="descripcio" type="text" class="form-control panel" placeholder="Descripció">
                <input name="adreca_postal" type="text" class="form-control panel" placeholder="Adreça">
                <input name="serveis" type="text" class="form-control panel" placeholder="Serveis">
                <input type="file" name="foto" id="foto" accept="image/jpeg">
                <button type="submit" class="btn btn-primary">Afegir</button>
            </form>
      </div>
    </div>
  </div>
</div>
<footer>
<?php include 'footer.php' ?>
</footer>
</body>

</html>