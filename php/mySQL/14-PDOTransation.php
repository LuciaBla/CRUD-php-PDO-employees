<?php
$servername = "localhost";
$username = "lucia";
$password = "abc123.";
$myDB = "world";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    $conn->exec("set names utf8");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    //process
    $conn->beginTransaction();
        $sql = "INSERT INTO city (Name, CountryCode, Population) VALUES ('P', 'ESP',11 )";
        $conn->exec($sql);

        $sql = "INSERT INTO city (Name, CountryCode, Population) VALUES ('Baño de Molgas', 'ESP', 2000)"; //change between ESP and XXX to force the error
        $conn->exec($sql);
        //$conn->rollBack();
    $conn->commit();

    
    echo "<br>Records inserted";    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>