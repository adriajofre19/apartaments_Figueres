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
        <form action="process_reserve.php" method="POST" class="mt-3">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="data_inici">Data Inici:</label>
                    <input type="date" class="form-control" name="data_inici" required>
                </div>

                <div class="form-group col-md-4">
                    <label for="data_final">Data Final:</label>
                    <input type="date" class="form-control" name="data_final" required>
                </div>

                <div class="form-group col-md-4">
                    <label for="num_persones">Número de Persones:</label>
                    <input type="number" class="form-control" name="num_persones" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
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

