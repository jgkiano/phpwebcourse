<?php
$name = "somename";
$value = 100;
$expire = time() + (60 * 60 * 24 * 7);
setcookie($name,$value,$expire);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Document</title>
    </head>
    <body>
        <?php
            if(isset($_COOKIE["somename"])) {
                print_r($_COOKIE);
                $someone = $_COOKIE["somename"];
                echo $someone;
            } else {
                $somename = "";
            }
        ?>
    </body>
</html>
