<!DOCTYPE html>
<html>
<body>
<?php
    $bonoloto=[];
    for ($i=0; $i < 6; $i++) { 
        $bonoloto[$i]=rand(1,49);
        echo "$bonoloto[$i] </br>";
    }
?>
</body>
</html>