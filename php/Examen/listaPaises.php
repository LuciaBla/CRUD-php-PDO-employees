<html>
<body>

<?php
$servername = "localhost";
$username = "lucia";
$password = "abc123.";
$myDB = "world";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    $conn->exec("set names utf8");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $code= $_GET["idioma"];

    
    $sql = 'SELECT Name FROM country WHERE Code='. $code .';';
   
    $result = $conn->query($sql);
    foreach ($result as $row) {
        echo " Nombre: " . $row["Name"] . "<br>";
      }
}
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?>


</body>
</html>