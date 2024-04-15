<html>
<head>
    <title>Schedule</title>
</head>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fechaCita = $_POST["fechaCita"];
        $tipoCita = $_POST["tipoCita"];
        $horaCita = $_POST["horaCita"];
    ?>
        <h1>Detalles de la cita:</h1>
        <p>Fecha de la cita: <?php echo $fechaCita; ?></p>
        <p>Tipo de cita: <?php echo $tipoCita; ?></p>
        <p>Hora de la cita: <?php echo $horaCita; ?></p>
    <?php } ?>
        
  
</body>
</html>
