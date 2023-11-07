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
                        <button type="submit" class="btn btn-success" onclick="PDF()">Descargar PDF</button>

                        
                        
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <script>
    window.jsPDF = window.jspdf.jsPDF;

    function PDF() {
    var doc = new jsPDF();

    doc.setFontSize(25);
    doc.text('DADES DE LA RESERVA', 100, 40, { align: 'center' });

    var margenSuperiorElementos = 50;

    <?php foreach ($reserves as $index => $reserva) : ?>
        doc.setFontSize(16);

        var y = margenSuperiorElementos + 10 * <?php echo $index; ?>;
        doc.text('RESERVA <?php echo $index + 1; ?>:', 10, y);

        y += 20;
        doc.text("Data d'entrada: <?php echo $reserva['Data_Entrada']; ?>", 20, y);

        y += 10;
        doc.text("Data de sortida: <?php echo $reserva['Data_Sortida']; ?>", 20, y);

        y += 10;
        doc.text('Nombre de persones: <?php echo $reserva['n_persones']; ?>', 20, y);



        if (<?php echo $index; ?> < <?php echo count($reserves) - 1; ?>) {
            doc.addPage();
        }
        
    <?php endforeach; ?>
    doc.save('Info_reserva.pdf');
}
</script>
    <footer>
<?php include 'footer.php' ?>
</footer>
</body>
</html>