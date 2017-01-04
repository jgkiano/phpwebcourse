<?php
$file = "example.txt";

if($handle = fopen($file,"r")) {
    echo filesize($file);
    echo $content = fread($handle,filesize($file));//each bit equals a character
    fclose($handle);
} else {
    echo "something went wrong, check permissions";
}
?>
