<?php
$target_file = "users.txt";

// check if the file already exists
if (file_exists($target_file)){ //Si el archivo users.txt ya existe, lo elimina usando unlink().
    unlink($target_file);
}

//Mueve el archivo subido a la ubicación de destino

// Mueve el archivo subido desde su ubicación temporal a users.txt.
if (move_uploaded_file($_FILES["fileUsers"]["tmp_name"],$target_file)){
    header("Location: home.php"); //Si el movimiento es exitoso, redirige al usuario a home.php
}
else {
    echo "General error ";
}
?>