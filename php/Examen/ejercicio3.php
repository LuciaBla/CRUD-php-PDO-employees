<!DOCTYPE html>
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
        $sql = "SELECT LANGUAGE, CountryCode from countrylanguage";
        $result = $conn->query($sql);
?>
<form action="listaPaises.php" method="get">
Idioma: <select name="idioma">
<?php
    foreach ($result as $row){
        echo '<option  value="' . $row["LANGUAGE"] .'" name="LANGUAGE" > '.  $row["CountryCode"]  . '</option>';
    }
?>
</select>
<input type="submit" value="OK">   
</form>
    <?php
        }
        catch(PDOException $e)
            {
            echo "Error: " . $e->getMessage();
            }
    $conn = null;
    ?>
</body>