<!DOCTYPE html>
<html>
<body>
<table border="1px">
<?php
    echo "<tr>";
    for ($i=0; $i < 13; $i++) { 
        if ($i==0) {
            echo "<th>X</th>";
        }else{
            echo "<th>$i</th>";
        }
    }
    echo "</tr>";
    for ($i=1; $i < 13; $i++) { 
        echo "<tr><th>$i</th>";
        for ($j=1; $j < 13; $j++) { 
            $multiplicacion=$i*$j;
            echo "<td>$multiplicacion</td>";
        }
        echo "<tr>";
    }
?>
</table>
</body>
</html>