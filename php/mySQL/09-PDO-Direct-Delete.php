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
  //DELETE FROM city WHERE `city`.`ID` = 4081"
  //$sql = "DELETE FROM city WHERE ID=4079";
  $sql = "DELETE FROM country WHERE country.Code='AFG";

  $num = $conn->exec($sql);

  echo "Number of deleted records: " . $num;

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
//Close
$conn = null;
?>