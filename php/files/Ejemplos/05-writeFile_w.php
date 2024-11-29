<?php
$myfile = fopen("./data/newfile.txt", "w") or die("Unable to open file!");
$txt = "Jdhjgoe\n";
fwrite($myfile, $txt);
$txt = "ghf\n";
fwrite($myfile, $txt);
fclose($myfile);
echo "The file was created";
?>