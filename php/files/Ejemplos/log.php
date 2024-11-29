<?php
$myfile = fopen("./data/info.txt", "w") or die("Unable to open file!");
$hora_actual = date('Y-m-d H:i:s');
$txt = "La hora y fecha actual es $hora_actual\n";
fwrite($myfile, $txt);
$txt = "$_SERVER[REMOTE_ADDR]\n";
fwrite($myfile, $txt);
$txt = "$_SERVER[HTTP_USER_AGENT]\n";
fwrite($myfile, $txt);
fclose($myfile);
echo "The file was created";
?>