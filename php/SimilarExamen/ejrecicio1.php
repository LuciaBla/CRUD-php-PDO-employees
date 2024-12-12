<?php include 'menu.php'; ?>
<!--Hay que ponerle lo del padding y margin pata que no 
escriba debajo del menu-->
<div style="margin-left:210px; padding:15px;">
<form method="get">
    Numero1 : <input type="text" name="num1"><br>
    Numero2 : <input type="text" name="num2"><br>
    Numero3 : <input type="text" name="num3"><br>
    <input type="submit">
    <?php
    $num1= intval($_GET["num1"]);
    $num2= intval($_GET["num2"]);
    $num3= intval($_GET["num3"]);
    if($num1>$num2 && $num1>$num3){
        echo "El mayor número es: $num1";
    }else if ($num2>$num1 && $num2>$num3) {
        echo "El mayor número es: $num2";
    }else if ($num3>$num1&&$num3>$num2) {
        echo "El mayor número es: $num3";
    }
    /* $mayor = max($num1, $num2, $num3);
     // Mostrar el resultado 
     echo "El mayor número es: " . $mayor*/
    ?>
</form>