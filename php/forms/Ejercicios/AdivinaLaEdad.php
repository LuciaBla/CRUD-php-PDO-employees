<html>
<body>

Hola <?php echo $_GET["name"]; ?><br>
Tu edad es 
<?php
    $fecha=date_create($_GET["fecha"]);
    $fechaActual=date_create();
    $intervalo=date_diff($fecha,$fechaActual);
    $edad=$intervalo->format("%Y");
    echo $edad;
?>
</body>
</html>