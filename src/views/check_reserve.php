<!DOCTYPE html>
<html>
<head>
    <title>Consultar Reserves</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <header>
        <?php include 'header.php' ?>
    </header>
    
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($reserves as $index => $reserva): ?>
            <div class="col">
                <div class="card h-100">
                        
                    <div class="card-body">
                        <h6>Nom d'usuari</h6>
                        <p class="card-text"><?php echo $reserva['user_nombre']; ?></p>
                        <h6>Nom de l'apartament</h6>
                        <p class="card-text"><?php echo $reserva['apartamento_titulo']; ?></p>
                        <h6>Data_Entrada</h6>
                        <p class="card-text"><?php echo $reserva['Data_Entrada']; ?></p>
                        <h6>Data_Sortida</h6>
                        <p class="card-text"><?php echo $reserva['Data_Sortida']; ?></p>
                        <h6>Preu_Total</h6>
                        <p class="card-text"><?php echo $reserva['Preu_Per_Dia']; ?></p>
                        <h6>Nombre d'habitacions</h6>
                        <p class="card-text"><?php echo $reserva['n_habitacions']; ?></p>
                        <button class="btn btn-success" onclick="PDF(<?php echo $index; ?>)">Descargar PDF</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <script>
    window.jsPDF = window.jspdf.jsPDF;

    function PDF(index) {
        var doc = new jsPDF();

        doc.setFontSize(25);
        doc.text('DADES DE LA RESERVA', 100, 40, { align: 'center' });

        var marge = 50;
        var reserva = <?php echo json_encode($reserves); ?>; 

        doc.setFontSize(16);

        var y = marge;
        doc.text('RESERVA ' + (index + 1) + ':', 10, y);
        y += 10;
        doc.text("Nom d'usuari: " + reserva[index].user_nombre, 20, y);
        y += 10;
        doc.text("Nom de l'apartament: " + reserva[index].apartamento_titulo, 20, y);
        y += 20;
        doc.text("Data d'entrada: " + reserva[index].Data_Entrada, 20, y);
        y += 10;
        doc.text("Data de sortida: " + reserva[index].Data_Sortida, 20, y);
        y += 10;
        doc.text('Nombre de persones: ' + reserva[index].n_persones, 20, y);

        doc.save('Info_reserva_' + (index + 1) + '.pdf');
    }
</script>
<footer>
    <?php include 'footer.php' ?>
</footer>
</body>
</html>
