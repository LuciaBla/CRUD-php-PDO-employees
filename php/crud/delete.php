<!DOCTYPE html>
<html>
<body>
    
<?php

if ($_GET["ID"]!=""){//parámetro ID  no este vacío
    $myfile = fopen("users.txt", "r") or die("Unable to open file!");//abrir modo lectura
    $aux =fopen("aux.txt", "w") or die("Unable to open file!");//Abrir un archivo temporal aux.txt en modo de escritura
    while(!feof($myfile)) {
        $record = fgets($myfile);// lee una línea del archivo
        $fields = explode ("#", $record);//divide la línea en un array usando #
        if ($fields[0]!=$_GET["ID"])// Si el primer campo ($fields[0]) no coincide con el ID proporcionado, escribe la línea en aux.txt
            fwrite($aux, $record);
    }        
    fclose($myfile); //Cerrar ambos archivos
    fclose ($aux);
    unlink("users.txt");//Eliminar el archivo original
    rename("aux.txt","users.txt");//renombrar el archivo temporal
    header("Location: home.php");
}

?>

</body>
</html>