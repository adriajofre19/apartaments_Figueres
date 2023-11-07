<!DOCTYPE html>
<html>
<head>
    <title>Consultar Reserves</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php include 'header.php' ?>
    </header>
    <div class="container">
<form action="index.php" method="post">
<input type="hidden" name="r" value="do_add">
<div class="mb-3">
  <label class="form-label">Titol</label>
  <input name="titol" type="text" class="form-control">
</div>
<div class="mb-3">
  <label class="form-label">Preu_Alta</label>
  <input name="preu_alta" type="text" class="form-control">
</div>
<div class="mb-3">
  <label class="form-label">Preu_Baixa</label>
  <input name="preu_baixa" type="text" class="form-control">
</div>
<div class="mb-3">
  <label class="form-label">Temporades</label>
  <input name="temporades" type="text" class="form-control">
</div>
<div class="mb-3">
  <label class="form-label">Longitud</label>
  <input name="longitud" type="number" class="form-control" step="any">
</div>
<div class="mb-3">
  <label class="form-label">Latitud</label>
  <input name="latitud" type="number" class="form-control" step="any">
</div>
<div class="mb-3">
  <label class="form-label">N_Habitacions</label>
  <input name="n_habitacions" type="number" class="form-control">
</div>
<div class="mb-3">
  <label class="form-label">Metres_Quadrats</label>
  <input name="metres_quadrats" type="text" class="form-control">
</div>
<div class="mb-3">
  <label class="form-label">Descripcio</label>
  <input name="descripcio" type="text" class="form-control">
</div>
<div class="mb-3">
  <label class="form-label">Adreca_Postal</label>
  <input name="adreca_postal" type="text" class="form-control">
</div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
    <footer>
<?php include 'footer.php' ?>
</footer>
</body>
</html>