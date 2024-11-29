<!DOCTYPE html>
<html>
<body>
<?php
    $estudiante=["alex"=>7, "noa"=>8,"alba"=>2,"sol"=>4];
    echo "Ordenado por nombre:<br>";
    ksort($estudiante);
    foreach ($estudiante as $nombre => $nota){
        echo "$nombre : $nota <br>";
    }
    echo "<br>Ordenado por notas:<br>";
    asort($estudiante);
    foreach ($estudiante as $nombre => $nota){
        echo "$nombre : $nota <br>";
    }

?>
</body>
</html>