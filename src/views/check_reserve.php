<?php
print_r($reserves);
?>
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
    
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($reserves as $reserva): ?>
            <div class="col">
                <div class="card h-100">
                        
                    <div class="card-body">
                        <h6>ID_Usuari</h6>
                        <p class="card-text"><?php echo $reserva['ID_Usuari']; ?></p>
                        <h6>ID_Apartament</h6>
                        <p class="card-text"><?php echo $reserva['ID_Apartament']; ?></p>
                        <h6>Data_Entrada</h6>
                        <p class="card-text"><?php echo $reserva['Data_Entrada']; ?></p>
                        <h6>Data_Sortida</h6>
                        <p class="card-text"><?php echo $reserva['Data_Sortida']; ?></p>
                        <h6>Preu_Total</h6>
                        <p class="card-text"><?php echo $reserva['Preu_Per_Dia']; ?></p>
                        <h6>Num persones</h6>
                        <p class="card-text"><?php echo $reserva['n_persones']; ?></p>

                        
                        
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <footer>
<?php include 'footer.php' ?>
</footer>
</body>
</html>