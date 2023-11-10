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

    <div class="container d-flex justify-content-center align-items-center">
      <div class="shadow-form text-center form-dades">
<form action="index.php" method="post">
<input type="hidden" name="r" value="doupdateuser2">
<div class="mb-3">
  <h1 class="account">Les meves dades</h1>
</div>
<div class="mb-3">
  <label class="form-label h6">Nom</label>
  <input name="nom" type="text" class="form-control" value="<?php echo $tasks['nom'] ?>">
</div>
<div class="mb-3">
  <label class="form-label h6">Cognoms</label>
  <input name="cognoms" type="text" class="form-control" value="<?php echo $tasks['cognoms'] ?>">
</div>
<div class="mb-3">
  <label class="form-label h6">Telèfon</label>
  <input name="telefon" type="text" class="form-control" value="<?php echo $tasks['telefon'] ?>">
</div>
<div class="mb-3">
  <label class="form-label h6">Email</label>
  <input name="email" type="text" class="form-control" value="<?php echo $tasks['email'] ?>">
</div>
<div class="mb-3">
  <label class="form-label h6">Targeta de credit</label>
  <input name="card" type="text" class="form-control" value="<?php echo $tasks['card'] ?>">
</div>
<div class="mb-3">
  <label class="form-label h6">Usuari</label>
  <input name="user" type="text" class="form-control" value="<?php echo $tasks['user'] ?>">
</div>
<div class="mb-3">
  <label class="form-label h6">Contrasenya</label>
  <input name="pass" type="password" class="form-control" value="<?php echo $tasks['pass'] ?>">
</div>
<div class="mb-3">
  <label class="form-label h6">Rol</label>
  <input name="rol" type="text" class="form-control" value="<?php echo $tasks['rol'] ?>" disabled>
</div>
<button type="submit" class="btn btn-primary">Actualitzar dades</button>
</form>
</div>
</div>


    <footer>
        <?php include 'footer.php' ?>
    </footer>
</body>
</html>



