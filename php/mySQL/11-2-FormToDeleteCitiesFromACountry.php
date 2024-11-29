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
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connection successfully<br>";
    $code= $_GET["countryCode"];
    $sql = 'DELETE FROM city WHERE CountryCode="' . $code .'";';
    $result = $conn->exec($sql);
    echo $result;
}
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?>


</body>
</html>