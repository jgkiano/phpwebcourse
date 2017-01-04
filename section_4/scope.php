<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Document</title>
    </head>
    <body>

        <?php
            $x = "outside";
            function convert() {
                global $x;
                $x = "inside";
            }
            echo $x;
            echo "<br>";
            convert();
            echo $x;
        ?>

    </body>
</html>
