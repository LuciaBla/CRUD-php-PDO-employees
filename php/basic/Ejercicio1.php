<?php
$palabra="CalEndario";
$pasadaMin=strtolower($palabra);
$contador=0;
for($i=0; $i <= strlen($pasadaMin);$i++){
    if($pasadaMin[$i]=="a"|| $pasadaMin[$i]=="e"|| $pasadaMin[$i]=="i"||$pasadaMin[$i]=="o"||$pasadaMin[$i]=="u"){
        $contador=$contador+1;
    }
}
echo "La palabra tiene $contador vocales";
?> 