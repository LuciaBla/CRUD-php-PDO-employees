<!DOCTYPE html>
<html>
<body>
    
<?php

if ($_GET["IDm"]!=""){//que no este vacio
    $myfile = fopen("users.txt", "r") or die("Unable to open file!");//abrir modo lectura
    $aux =fopen("aux.txt", "w") or die("Unable to open file!");//Abrir un archivo temporal aux.txt en modo de escritura
    while(!feof($myfile)) {//lee linia por linia
        $record = fgets($myfile);//lee linia
        $fields = explode ("#", $record);//divide la liniea
        if ($fields[0]==$_GET["IDm"]){//Si el primer campo ($fields[0]) coincide con IDm, escribe la nueva línea en aux.txt. Si no, escribe la línea original.
            $line = $_GET["IDm"] . "#" . $_GET["name"] . "\n";
            fwrite($aux, $line);
        }
        else{
            fwrite($aux, $record);
        }
    }        
    fclose($myfile); //cierra
    fclose ($aux);//cierra
    unlink("users.txt");//Eliminar el archivo original
    rename("aux.txt","users.txt");//renombrar el archivo temporal
    header("Location: home.php");
}

if ($_GET["ID"]!=""){//que no este vacio
    $myfile = fopen("users.txt", "r") or die("Unable to open file!");//Abrir el archivo users.txt en modo de lectura y buscar el registro
    while(!feof($myfile)) {
        $record = fgets($myfile);
        $fields = explode ("#", $record);
        if ($fields[0]==$_GET["ID"]){
            $id_founded = $fields[0];
            $name =  $fields[1];
            break;
        }
    }        
    fclose ($myfile);
    if (isset($id_founded)) { //Si se encuentra el registro, mostrar el formulario para modificarlo
        ?>
            <form method="get" action="<?php $_SERVER["PHP_SELF"];?>">  
            <br>
            ID: <input type="text" name="IDm" value="<?php echo $id_founded;?>" readonly="readonly">   <br>
            Name: <input type="text" name="name" value="<?php echo $name;?>"> <br>            
            <input type="submit" name="submit" value="Modify">  
            </form>
        <?php
    }
}
?>

</body>
</html>