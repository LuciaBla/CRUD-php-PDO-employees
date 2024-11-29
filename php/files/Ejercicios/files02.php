<?php include 'menu.php'; ?>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $password= $_POST["password"];
        $usuario=$_POST["usuario"];
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
        $file = fopen("./data/files02.txt", "a") or die("Unable to open file!");
                $registro="Usuario: $usuario\tPassword: $password\n";
                fwrite($file,$registro);
    }
    function ($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>
<!--Hay que ponerle lo del padding y margin pata que no 
escriba debajo del menu-->
<div style="margin-left:210px; padding:15px;">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Usuario : <input type="text" name="usuario"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit">
    </form>
    <?php
        
    ?>
</div>