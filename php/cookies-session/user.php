<html></html>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = $_POST["user"];
  setcookie($user);

  if(!isset($_COOKIE[$user])) {
    echo "¡La cookie denominada . $user . no está configurada!";
  } else {
    echo "¡La cookie denominada . $user . no está configurada!<br>";
    echo "Value is: " . $_COOKIE[$user];
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form method="POST">
User: <input type="text" name="user"><br>
<input type="submit">
</form>

</body>
</html>