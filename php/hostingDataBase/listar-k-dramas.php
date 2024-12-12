<?php
$servername = "sql210.vastserve.com";
$username = "vasts_37887201";
$password = "abc123.";
$myDB = "vasts_37887201_Kdrama";
try {
    //1.Open
    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
  
    //2.Process
    $sql = "SELECT * from Kdramas";
  
    $result = $conn->query($sql);
  
    foreach ($result as $row) {
      echo "ID: ".$row["id"] . " Nombre: " . $row["nombre"] . " Año de Lanzamiento: " . $row["ano_lanzamiento"]
      . " Popularidad: " . $row["popularidad"] . " Director: " . $row["director"]. " Empresa: " . $row["empresa"]. "<br>";
    }
  

  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  //3.Close
  $conn = null;
  ?>
