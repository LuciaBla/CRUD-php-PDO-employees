<!DOCTYPE html>
<html>
<body>
<?php
    $num=5;
    $sumaNum=$num;
    for ($i=1; $i < $num; $i++) { 
        $sumaNum=$sumaNum*$i;
    }
    echo "Con el for $sumaNum </br>";
    $sumaNum=$num;
    $cont=1;
    while($num>$cont){
        $sumaNum=$sumaNum*$cont;
        $cont++;
    }
    echo "Con el while $sumaNum </br>";
    $sumaNum=$num;
    $cont=1;
    do{
        $sumaNum=$sumaNum*$cont;
        $cont++;
    }while($num>$cont);
    echo "Con el do while $sumaNum </br>";
?>
</body>
</html>