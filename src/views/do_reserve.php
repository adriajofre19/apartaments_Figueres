<!DOCTYPE html>
<html>
<head>
    <title>Formulari de Reserva</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <header>
        <?php include 'header.php' ?>
    </header>
    <div class="container">
        <h1 class="mt-5">Formulari de Reserva</h1>
        <form class="form-registrar" action="index.php" method="post">
    <input type="hidden" name="r" value="addreserve">
    <div class="mb-3">
      <label for="exampleInputName1" class="form-label">Id usuari</label>
      <input name="ID_Usuari" type="text" class="form-control" id="input" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="exampleInputLastName1" class="form-label">Id Apartament</label>
      <input name="ID_Apartament" type="text" class="form-control" id="input" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Data Entrada</label>
      <input name="Data_Entrada" type="date" class="form-control" id="input" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Data Sortida</label>
      <input name="Data_Sortida" type="date" class="form-control" id="input">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Preu</label>
      <input name="Preu_Per_Dia" type="text" class="form-control" id="input">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Num persones</label>
      <input name="n_persones" type="text" class="form-control" id="input">
    </div>
    <button type="submit" class="btn btn-primary2">Enviar</button>
  </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>
</html>

