<?php
$palabra = fopen("Palabras.txt", "r") or die("Unable to open file!");
$palabraDes =fopen("aux.txt", "w") or die("Unable to open file!");
while(!feof($palabra)) {
    $linia = fgets($palabra);
    $letra=$linia[0];
    $lfo=strlen($linia);
    for ($i=1; $i < $lfo-1; $i++) { 
        $letra="$letra$linia[$i]";
    }
    $desordenada = str_shuffle($letra);
    $largura=strlen($letra);
    $aEscribir="$desordenada#$largura\n";
    fwrite($palabraDes, $aEscribir);
}

fclose($palabra);
fclose ($palabraDes);
unlink("Desordenadas.txt");//Eliminar el archivo original
rename("aux.txt","Desordenadas.txt");//renombrar el archivo temporal
?>