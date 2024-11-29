<?php
// define variables and set to empty values
$genero = $altura ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $genero = test_input($_POST["genero"]);
  $altura = test_input($_POST["altura"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
Genero: 
  <input type="radio" name="genero" value="Hombre">Hombre
  <input type="radio" name="genero" value="Mujer">Mujer
  <br><br>
  Altura en metros : <input type="text" name="altura">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
<?php
  $hombre=array("1.50"=>50, "1.52"=>53,"1.55"=>56,"1.57"=>59, 
  "1.60"=>62,"1.63"=>65,"1.65"=>68,"1.68"=>71, 
  "1.70"=>74,"1.73"=>77,"1.75"=>80,"1.78"=>83, 
  "1.80"=>86,"1.83"=>89,"1.85"=>92,"1.88"=>95, 
  "1.91"=>98,"1.93"=>101,"1.96"=>104,"1.98"=>107, 
  "2.01"=>110,"2.03"=>113,"2.06"=>116,"2.08"=>119);

  $mujer=array("1.50"=>48, "1.52"=>50,"1.55"=>53,"1.57"=>55, 
  "1.60"=>58,"1.63"=>60,"1.65"=>63,"1.68"=>65, 
  "1.70"=>68,"1.73"=>70,"1.75"=>73,"1.78"=>75, 
  "1.80"=>78,"1.83"=>80,"1.85"=>83,"1.88"=>85, 
  "1.91"=>88,"1.93"=>90,"1.96"=>93,"1.98"=>95, 
  "2.01"=>98,"2.03"=>100,"2.06"=>103,"2.08"=>105);

  if ($genero=="Hombre"){
      foreach ($hombre as $x => $y) {
        if($x==$altura){
          echo "Tu peso ideal es $y Kgs";
        }
      }
  }else if($genero=="Mujer"){
    foreach ($mujer as $x => $y) {
      if($x==$altura){
        echo "Tu peso ideal es $y Kgs";
      }
    }
  }
?>