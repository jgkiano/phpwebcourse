<?php
$file = "example.txt";

if($handle = fopen($file,"w")) {
    fwrite($handle,"I love php too");
    fclose($handle);
} else {
    echo "something went wrong, check permissions";
}
?>
