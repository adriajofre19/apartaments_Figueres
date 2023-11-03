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

    <div class="container">
<form action="index.php" method="post">
<input type="hidden" name="r" value="doupdate">
<div class="mb-3">
  <label class="form-label">Nom</label>
  <input name="nom" type="text" class="form-control" value="<?php echo $tasks[0]['nom'] ?>">
</div>
<div class="mb-3">
  <label class="form-label">Cognoms</label>
  <input name="cognoms" type="text" class="form-control" value="<?php echo $tasks[0]['cognoms'] ?>">
</div>
<div class="mb-3">
  <label class="form-label">Telèfon</label>
  <input name="telefon" type="text" class="form-control" value="<?php echo $tasks[0]['telefon'] ?>">
</div>
<div class="mb-3">
  <label class="form-label">Email</label>
  <input name="email" type="text" class="form-control" value="<?php echo $tasks[0]['email'] ?>">
</div>
<div class="mb-3">
  <label class="form-label">Targeta de credit</label>
  <input name="card" type="text" class="form-control" value="<?php echo $tasks[0]['card'] ?>">
</div>
<div class="mb-3">
  <label class="form-label">Usuari</label>
  <input name="user" type="text" class="form-control" value="<?php echo $tasks[0]['user'] ?>">
</div>
<div class="mb-3">
  <label class="form-label">Contrasenya</label>
  <input name="pass" type="password" class="form-control" value="<?php echo $tasks[0]['pass'] ?>">
</div>
<div class="mb-3">
  <label class="form-label">Rol</label>
  <input name="rol" type="text" class="form-control" value="<?php echo $tasks[0]['rol'] ?>">
</div>
<button type="submit" class="btn btn-primary">Actualitzar dades</button>
</form>
</div>


    <footer>
        <?php include 'footer.php' ?>
    </footer>
</body>

</html>



