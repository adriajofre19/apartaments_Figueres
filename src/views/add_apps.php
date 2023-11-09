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
  <div class="container d-flex justify-content-center align-items-center vh-100">
      <div class="shadow-form text-center form-dades">
            <form action="index.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="r" value="do_add">
            
              
                <input name="titol" type="text" class="form-control container-m10" placeholder="Títol">
                <input name="preu_alta" type="text" class="form-control container-m10" placeholder="Preu temporada alta">
                <input name="preu_baixa" type="text" class="form-control container-m10" placeholder="Preu temporada baixa">
                <input name="temporades" type="text" class="form-control container-m10" placeholder="Temporada Alta/Baixa">
                <input name="longitud" type="text" class="form-control container-m10" placeholder="Longitud">
                <input name="latitud" type="text" class="form-control container-m10" placeholder="Latitud">
                <input name="n_habitacions" type="text" class="form-control container-m10" placeholder="Número d'habitacions">
                <input name="metres_quadrats" type="text" class="form-control container-m10" placeholder="Metres quadrats">
                <input name="descripcio" type="text" class="form-control container-m10" placeholder="Descripció">
                <input name="adreca_postal" type="text" class="form-control container-m10" placeholder="Adreça">
                <input type="file" name="foto" id="foto" accept="image/jpeg">
                <button type="submit" class="btn btn-primary">Afegir</button>
                
            
            </form>
      </div>
    </div>
</body>
</html>