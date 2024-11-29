<?php include 'menu.php'; ?>
<!--Hay que ponerle lo del padding y margin pata que no 
escriba debajo del menu-->
<div style="margin-left:210px; padding:15px;">
    <?php
    $estensionImagen="";
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $direccionDestino = "images/";
        $uploadOK = 1;//para saber si fue sudbido 1 si se subio 0 no se subio
        $archivoDestino = $direccionDestino . basename ($_FILES["archivo"]["name"]);
        $estensionImagen = strtolower(pathinfo($archivoDestino,PATHINFO_EXTENSION));
        if($estensionImagen!="jpg" && $estensionImagen!="gif" && $estensionImagen!="png" && $estensionImagen!="jpeg"){
            $uploadOK = 0;
        }
        if ($uploadOK == 1) {
            if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivoDestino)) {
                echo "El archivo ". htmlspecialchars(basename($_FILES["archivo"]["name"])). " ha sido subido.";
            } else {
                echo "Lo siento, hubo un error al subir tu archivo.";
            }
        } else {
            echo 'Lo siento, solo se permiten archivos JPG, JPEG, PNG y GIF.';
        }
    }
    function ($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="archivo" id="archivo">
    <input type="submit" value="Upload Image" name="submit">
</form>
</div>


