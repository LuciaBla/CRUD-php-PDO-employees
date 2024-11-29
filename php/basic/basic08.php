<!DOCTYPE html>
<html>
<body>
<?php
    $media=0;
    $suspensos=0;
    $notaMax=0;
    $cont=0;
    $estudiante=["alex"=>7, "noa"=>8,"alba"=>2,"sol"=>4];
    foreach ($estudiante as $nombre => $nota){
        echo "$nombre : $nota <br>";
        $media=$media+$nota;
        if($nota > $notaMax){$notaMax=$nota;}
        if($nota < 5){$suspensos++;}
        $cont++;
    }
    echo 'La media es de '.($media/$cont).". <br>La nota máxima es $notaMax. <br> El número de
alumnos que han suspendido es $suspensos.";
?>
</body>
</html>