<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include("header.php"); ?>
  <div class="shadow-form">
  <h1 class="account">Crea un compte</h1>
  <form class="form-registrar">
    <div class="mb-3">
      <label for="exampleInputName1" class="form-label">Nom</label>
      <input type="text" class="form-control" id="input" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="exampleInputLastName1" class="form-label">Cognom</label>
      <input type="text" class="form-control" id="input" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input name="email" type="email" class="form-control" id="input" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Telèfon</label>
<<<<<<< HEAD
      <input type="tel" class="form-control" id="input">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Contrasenya</label>
      <input type="password" class="form-control" id="input">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Nº de Targeta</label>
      <input type="text" class="form-control" id="input">
    </div>
    <button type="submit" class="btn btn-primary2">Enviar</button>
    <a href="" class="return">Tornar al menú principal</a>
      <input name="telefon" type="tel" class="form-control" id="input">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Nº de Targeta</label>
      <input name="targeta_credit" type="text" class="form-control" id="input">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Usuari</label>
      <input name="user" type="text" class="form-control" id="input">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Contrasenya</label>
      <input name="pass" type="text" class="form-control" id="input">
    </div>
    <button type="submit" class="btn btn-primary2">Enviar</button>
  </form>
</div>
<footer>
<?php include 'footer.php' ?>
</footer>
</body>
