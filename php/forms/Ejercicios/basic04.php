<?php
 $errorName =  ""; $nombre = "";
 $errorDni =  ""; $dni = "";
 $errorEdad =  ""; $edad = "";
 $errorEmail =  ""; $email = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {//para saber si el formilario a sido enviado (si es POST se envio)
    $mensajeCorecto="Forulario hecho correctamente";
    if (empty($_POST["nombre"])) {//empty para mirar si el campo esta vacio.
      $errorName = "Campo Obligatorio";
      $mensajeCorecto="";
    }else{
      $nombre=$_POST["nombre"];
    }

    if (empty($_POST["dni"])) {
      $errorDni = "Campo Obligatorio";
      $mensajeCorecto="";
    }else{
      $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
      $dni=$_POST["dni"];
      $letra=substr($dni, -1);//para sacar la letra
      $num=substr($dni,0,-1); //para cojer los numeros
      $posicion=$num%23;
      if($letras[$posicion] != strtoupper($letra)){
        $errorDni = "El DNI no es válido.";
        $mensajeCorecto="";
      }else{
        $dni=$_POST["dni"];
      }
    }
    
    $edad = $_POST["edad"];
    if ($edad<18 || $edad>150){
      $errorEdad = "* Edad invalida";
      $mensajeCorecto="";
    }else{
      $edad =$_POST["edad"];
    }

    $email = $_POST["email"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errorEmail = "* Invalid email format";
      $mensajeCorecto="";
    }else{
      $email = $_POST["email"];
    }
  }
    
  function ($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Nombre: <input type="text" name="nombre" value="<?php echo $nombre;?>"> * <?php echo ($errorName); ?>
  <br><br>
  Apellidos: <input type="text" name="apellidos"> 
  <br><br>
  DNI: <input type="text" name="dni" value="<?php echo $dni;?>"> * <?php echo ($errorDni); ?>
  <br><br>
  Edad: <input type="text" name="edad" value="<?php echo $edad;?>"><?php echo ($errorEdad); ?>
  <br><br>
  Genero: 
  <input type="radio" name="genero" value="hombre">Hombre
  <input type="radio" name="genero" value="mujer">Mujer
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>"><?php echo ($errorEmail);?>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php echo "$mensajeCorecto";?>