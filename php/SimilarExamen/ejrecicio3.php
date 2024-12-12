<?php include 'menu.php'; ?>
<!--Hay que ponerle lo del padding y margin pata que no 
escriba debajo del menu-->
<div style="margin-left:210px; padding:15px;">
<form method="get">
Codigo de la ciudad/ID : <input type="text" name="id_f"><br>
<input type="submit" value="Borrar">
<?php
$servername = "localhost";
$username = "lucia";
$password = "abc123.";
$myDB = "world";
try {
    //1.Open
    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
  
    //2.Process
    $ID= $_GET["id_f"];
    if ($ID!="") {
        $sql = 'DELETE FROM city WHERE ID='. $ID .' AND CountryCode="ARG";';
        $result = $conn->query($sql);
    }else {echo" ";}
    
    
  
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  //3.Close
  $conn = null;
  ?>
</form>