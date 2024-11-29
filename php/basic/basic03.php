<!DOCTYPE html>
<html>
<body>
<?php
    $cadena1="DOLORES";
    $cadena2="CLA";
    $cadena3="FAVOR";
    if(strlen($cadena1)>strlen($cadena2)&& strlen($cadena1)>strlen($cadena3)){
        if(strlen($cadena2)>strlen($cadena3)){
            echo "El mas largo $cadena1, el segundo es $cadena2 y el tercero $cadena3";
        }else{
            echo "El mas largo $cadena1, el segundo es $cadena3 y el tercero $cadena2";
        }
    }else if(strlen($cadena2)>strlen($cadena1)&& strlen($cadena2)>strlen($cadena3)){
        if(strlen($cadena1)>strlen($cadena3)){
            echo "El mas largo $cadena2, el segundo es $cadena1 y el tercero $cadena3";
        }else{
            echo "El mas largo $cadena2, el segundo es $cadena3 y el tercero $cadena1";
        }
    }else if(strlen($cadena3)>strlen($cadena2)&& strlen($cadena3)>strlen($cadena1)){
        if(strlen($cadena1)>strlen($cadena2)){
            echo "El mas largo $cadena3, el segundo es $cadena1 y el tercero $cadena2";
        }else{
            echo "El mas largo $cadena3, el segundo es $cadena2 y el tercero $cadena1";
        }
    }
?>
</body>
</html>