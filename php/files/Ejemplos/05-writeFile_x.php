<?php
$myfile = fopen("data/newfile.txt", "x");
if ($myfile){
    $txt = "John Doe\n";
    fwrite($myfile, $txt);
    $txt = "Jane Doe\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    echo "The file has new content";
}
else{
    echo "A file with the same name was there";
}
?>