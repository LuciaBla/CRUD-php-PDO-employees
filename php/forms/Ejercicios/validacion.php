<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $password = test_input($_POST["password"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  Password: <input type="password" name="password">
  <input type="submit" name="ok" value="ok">  
</form>

<?php
if($name == "" && $password ==""){

}else if ($name != "lucia" || $password != "abc123."){
    echo "El usuario o la contraseña no es corecta";
}else echo "El usuario y la contraseña es corecta";
?>

</body>
</html>