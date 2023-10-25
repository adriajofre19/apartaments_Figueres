
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="shadow-form">
  <h1 class="account">Inici Sessió</h1>
  <form class="form-registrar" action="index.php" method="post">
    <input type="hidden" name="r" value="dologin">
    <div class="mb-3">
      <label for="exampleInputName1" class="form-label">Nom</label>
      <input name="user" type="text" class="form-control" id="input" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="exampleInputLastName1" class="form-label">Contrasenya</label>
      <input name="pass" type="password" class="form-control" id="input" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <button type="submit" class="btn btn-primary2">Enviar</button>
    <a href="index.php?r=register" class="return">No tens usuari, regista't aqui</a>
  </form>
</div>
</body>
</html>

