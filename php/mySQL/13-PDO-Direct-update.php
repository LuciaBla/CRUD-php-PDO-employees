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
  //$sql = "UPDATE `city` SET `District` = \'Kabol-north\' WHERE `city`.`ID` = 1;";
  
    //change the Amsterdam city name
  //$sql="UPDATE city SET Population = 1780001 WHERE ID = 1"; 
    //add Kabul city to Spain
  //$sql = "UPDATE city SET Name = 'ALGO' WHERE  Name= 'Amsterdam'";

  //$sql = "UPDATE city SET CountryCode = 'ESP' WHERE  Name= 'Kabul'";
    //Conquer Italy cities (change CountryCode from Italy to Spain)
  //$sql = "UPDATE city SET CountryCode = 'ESP' WHERE  CountryCode= 'ITA'";
    //incremente a 10% the population of all Portugese cities
  $sql = "UPDATE city SET Population=Population+(Population*0.1) WHERE CountryCode='PRT';";

  $num = $conn->exec($sql);
  echo $sql; //sometimes it's important to debug
  $conn->exec($sql);
  echo "<br/>Number of updated records: " . $num;

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
//Close
$conn = null;
?>