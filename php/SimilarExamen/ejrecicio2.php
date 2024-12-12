<?php include 'menu.php'; ?>
<!--Hay que ponerle lo del padding y margin pata que no 
escriba debajo del menu-->
<div style="margin-left:210px; padding:15px;">
<?php
$servername = "localhost";
$username = "lucia";
$password = "abc123.";
$myDB = "world";

//REMEMBER: keywords in SQL ar not CASESENSITIVE. OBJECT NAMES (tables, rows...) ARE

try {
  //1.Open
  $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";

  //2.Process
  $sql = "SELECT Language,Percentage FROM `countrylanguage`WHERE Percentage<50 AND IsOfficial=\"T\";"; 
  $result = $conn->query($sql);

  while ($tuple = $result->fetch(PDO::FETCH_ASSOC)){
    echo "Lenguaje: ". $tuple["Language"]. "--Porcentaje de personas que lo hablen: " . $tuple["Percentage"] . "%<br>"; 
  }

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
//3.Close
$conn = null;
?>