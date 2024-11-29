<?php include 'menu.php'; ?>
<!--Hay que ponerle lo del padding y margin pata que no 
escriba debajo del menu-->
<div style="margin-left:210px; padding:15px;">
    <h2>Hola!!!</h2>
    <?php
        $fecha = new DateTime();
        $dia = $fecha->format('d');
        $mes = $fecha->format('m');
        $año = $fecha->format('Y');
        $hora = $fecha->format('H');
        $minuto = $fecha->format('i');
        $segundo = $fecha->format('s');
        $ip=$_SERVER['REMOTE_ADDR'];
        $navegador=$_SERVER['HTTP_USER_AGENT'];
        
        $file = fopen("./data/files01.txt", "a") or die("Unable to open file!");
        $registro="Fecha: $dia/$mes/$año\tHora: $hora:$minuto:$segundo\tIP: $ip\tNavegador: $navegador\n";
        fwrite($file,$registro);
    ?>
</div>
