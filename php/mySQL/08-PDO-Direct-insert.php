<html>
<body>

<form action="08-PDO-Direct-insert.php" method="get">
Village: <input type="text" name="vill"><br>
Population: <input type="text" name="popu"><br>
<input type="submit">
</form>
</body>
</html>

<?php
$servername = "localhost";
$username = "lucia";
$password = "abc123.";
$myDB = "world";

//REMEMBER: keywords in SQL ar not CASESENSITIVE. OBJECT NAMES (tables, rows...) ARE

try {
  //Open
  $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
  //Process
  // copy the template from phpmyadmin
  //INSERT INTO `city` (`ID`, `Name`, `CountryCode`, `District`, `Population`) VALUES (NULL, 'Gibara', 'CUB', '', '10000');
  //$sql ="INSERT INTO city (Name,CountryCode,Population) VALUES ('Baldrei','ESP',5)";
//2 Set a sentece with previous variables
    //$nameCity="Gon";
    //$popu=20000;
    //$codigoCo="ESP";
    //$sql ="INSERT INTO city (Name,CountryCode,Population) VALUES ('". $nameCity ."','". $codigoCo ."',". $popu .")";

//3 insert in the city table with data from a from
    $nameCity=$_GET["vill"];
    $popu=$_GET["popu"];
    if (isset ($_GET["vill"])and isset ($_GET["popu"])){
        $sql ="INSERT INTO city (Name,CountryCode,Population) VALUES ('". $nameCity ."','ESP',". $popu .")";
    }

  echo $sql; //sometimes it's important to debug
  $conn->exec($sql);
  echo "<br>Reord inserted";

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
//Close
$conn = null;
?>