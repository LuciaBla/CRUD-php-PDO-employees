<?php include 'menu.php'; ?>
<!--Hay que ponerle lo del padding y margin pata que no 
escriba debajo del menu-->
<div style="margin-left:210px; padding:15px;">
<?php

    $file = fopen('palabras.txt', 'r');
    $length = 0;

    while(!feof($file)) {
        $line = fgets($file);
        $sinEspacios=trim($line);
        $length=$length+strlen($sinEspacios);
    }
    fclose($file);

    $file = fopen('palabras.txt', 'a');
    fwrite($file, "\nLargura: " . $length);
    fclose($file);

   
    $file = fopen('palabras.txt', 'r');
    while(!feof($file)) {
        $line = fgets($file);//lee una línea del archivo
        if (trim($line) !=""){//si es diferente muestra.
            echo $line."<br>";
        }
    }
    fclose($file);
?>