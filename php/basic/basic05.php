<!DOCTYPE html>
<html>
<body>
<?php
    $fecha=date_create("2005-09-19");
    $fechaActual=date_create();
    $intervalo=date_diff($fecha,$fechaActual);
    echo $intervalo->format("%Y");
?>
</body>
</html>