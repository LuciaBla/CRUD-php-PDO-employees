<!DOCTYPE html>
<html>
<body>
    
<?php
$myfile = fopen("users.txt", "a") or die("Unable to open file!");//Abre el archivo

$record = $_GET["ID"] ."#" . $_GET["name"] ."\n";//Crear el nuevo registro
fwrite($myfile, $record);//Escribir el nuevo registro en el archivo
fclose($myfile);//Cerrar el archivo
header("Location: home.php");//Redirigir al usuario a home.php
?>

</body>
</html>