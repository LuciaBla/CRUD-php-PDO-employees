<?php include 'menu.php'; ?>
<!--Hay que ponerle lo del padding y margin pata que no 
escriba debajo del menu-->
<div style="margin-left:210px; padding:15px;">
    <?php
    $direccionDestino = "images/";
    if (opendir($direccionDestino)) {
        while (($file = readdir($dh)) != false) {
            $estensionImagen = strtolower(pathinfo($file,PATHINFO_EXTENSION));
            if($estensionImagen=="jpg" || $estensionImagen=="gif" || $estensionImagen=="png" || $estensionImagen=="jpeg"){
                echo '<img src="' . $direccionDestino . $file . '" alt="' . $file . '">';
            }
        
        }
    }
?>

</form>
</div>