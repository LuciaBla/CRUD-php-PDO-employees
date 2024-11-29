<?php
$password= $_GET["password"];
$usuario=$_GET["usuario"];
$vocalesUser;
for ($i=0; $i <= strlen($usuario); $i++) { 
   if($usuario[$i]=="a" || $usuario[$i]=="e" || $usuario[$i]=="i" || $usuario[$i]=="o" || $usuario[$i]=="u"){
      $vocalesUser=$usuario[$i];
      for ($i=0; $i <= strlen($password); $i++) { 
         if($password[$i]==$vocalesUser){
            echo "Usuario o contraseña incorrecta";
            return;
         }
      }
   }
}
echo '<a href="/images/myw3schoolsimage.jpg" download>
  <img src="/images/myw3schoolsimage.jpg" alt="W3Schools"></a>';
?>