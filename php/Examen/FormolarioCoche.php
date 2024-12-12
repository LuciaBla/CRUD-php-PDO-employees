<?php
//Inicializa las variables de entrada como cadenas vacías.
 $errorMarca =  ""; $marca = "";
 $errorModelo =  ""; $modelo = "";
 $errorFabricacion =  ""; $fabricacion = "";
 $errorKilometraje =  ""; $kilometraje = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mensajeCorecto="Forulario hecho correctamente";

    /*Marca */
    if (empty($_POST["marca"])) {
      $errorMarca = "Campo Obligatorio";
      $mensajeCorecto="";
    }else {
      $marca2=$_POST["marca"];
      $numero="0123456789";
      for ($i=0; $i < strlen($numero); $i++) { 
        for ($j=0; $j < strlen($marca2); $j++) { 
           if ($marca2[$j]==$numero[$i]) {
                $errorMarca="El campo no puede contener numeros";
                $mensajeCorecto="";
           }
        }
      }
      if(empty($errorMarca)){$marca=$_POST["marca"];}
    } 

    /*Modelo */
    if (empty($_POST["modelo"])) {
        $errorModelo = "Campo Obligatorio";
        $mensajeCorecto="";
      }else {
        if(strlen($_POST["modelo"])<2){
            $errorModelo="El campo tiene que tener minimo 2 caracteres";
            $mensajeCorecto="";
        }else{$modelo=$_POST["modelo"];}
      } 

    /* Año de fabricacion*/
    $fabricacion=$_POST["fabricacion"];
    if (!empty($fabricacion)) {
        if (intval($fabricacion)<1900 || intval($fabricacion)>2024) {
            $errorFabricacion="* Año de fabricacion invalido";
            $mensajeCorecto="";
        }else{$fabricacion=$_POST["fabricacion"];}
    }

    /*kilometraje */
    $kilometraje=$_POST["kilometraje"];
    if (!empty($kilometraje)) {
            for ($j=0; $j < strlen($kilometraje); $j++) { 
                if ($kilometraje[$j]!= "1" && $kilometraje[$j]!= "2" && $kilometraje[$j]!= "3" && $kilometraje[$j]!= "4" 
                && $kilometraje[$j]!= "5" &&$kilometraje[$j]!= "6" &&$kilometraje[$j]!= "7" &&$kilometraje[$j]!= "8" 
                &&$kilometraje[$j]!= "9" && $kilometraje[$j]!= "0"){
                    $errorKilometraje="* El campo solo puede contener numeros";
                    $mensajeCorecto="";
                }else{
   
                }
            }

      if(empty($errorKilometraje)){$kilometraje=$_POST["kilometraje"];}
    }
    if (!empty($kilometraje)&& !empty($fabricacion)) {
        $fechaActual=date_create();
        $año=$fechaActual->format("Y");
        $añosP=intval($año)-intval($fabricacion);
        $media=intval($kilometraje)/$añosP;
        $mensajeCorecto="La media de km por año es de $media";
    }else{
        $mensajeCorecto="Enorabuena <br>Marca: $marca <br>Modelo: $modelo";
    }
  }
    
  function ($data) {//Define una función para limpiar los datos de entrada
    $data = trim($data);//Elimina los espacios en blanco al principio y al final de la cadena.
    $data = stripslashes($data);//Elimina las barras invertidas de la cadena
    $data = htmlspecialchars($data);//Convierte caracteres especiales en entidades HTML.
    return $data;//Devuelve la cadena limpiada
  }
?>




<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Marca: <input type="text" name="marca" value="<?php echo $marca;?>"> * <?php echo ($errorMarca); ?>
  <br><br>
  Modelo: <input type="text" name="modelo" value="<?php echo $modelo;?>"> * <?php echo ($errorModelo); ?>
  <br><br>
  Año fabricacion: <input type="text" name="fabricacion" value="<?php echo $fabricacion;?>"> <?php echo ($errorFabricacion); ?>
  <br><br>
  Kilometraje: <input type="text" name="kilometraje" value="<?php echo $kilometraje;?>"> <?php echo ($errorKilometraje); ?>
  <br><br>
  <input type="submit" name="submit" value="Submit"> 
</form>
<?php echo "$mensajeCorecto";?>