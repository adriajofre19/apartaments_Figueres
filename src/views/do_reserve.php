<!DOCTYPE html>
<html>
<head>
    <title>Formulari de Reserva</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php include 'header.php' ?>
    </header>
    <div class="container">
        <h1 class="mt-5">Formulari de Reserva</h1>
        <form action="index.php" method="POST" class="mt-3">
        <input type="hidden" name="r" value="do_add_reserve">
            <div class="form-row">
            <div class="form-group col-md-4">
                    <label for="data_inici">ID_usuari:</label>
                    <input type="number" class="form-control" name="id_usuari" required>
                </div>
            <div class="form-group col-md-4">
                    <label for="data_inici">ID_apartament:</label>
                    <input type="number" class="form-control" name="id_apartament" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="data_inici">Data Entrada:</label>
                    <input type="date" class="form-control" name="data_entrada" required>
                </div>

                <div class="form-group col-md-4">
                    <label for="data_final">Data Sortida:</label>
                    <input type="date" class="form-control" name="data_sortida" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="data_final">Preu:</label>
                    <input type="number" class="form-control" name="preu_per_dia" required>
                </div>

                <div class="form-group col-md-4">
                    <label for="num_persones">Número de Persones:</label>
                    <input type="number" class="form-control" name="num_persones" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <footer>
<?php include 'footer.php' ?>
</footer>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>

