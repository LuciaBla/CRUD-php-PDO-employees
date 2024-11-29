<?php
$myfile = fopen("./data/newfile.txt", "a") or die("Unable to open file!");
$txt = "Jdfg\n";
fwrite($myfile, $txt);
$txt = "Jfgde\n";
fwrite($myfile, $txt);
fclose($myfile);
echo "The file was created";
?>