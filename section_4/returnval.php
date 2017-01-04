<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Document</title>
    </head>
    <body>
        <?php
            function addNumbers($num1, $num2) {
                $sum = $num1 + $num2;
                return $sum;
            }
            echo addNumbers(45,56);
        ?>
    </body>
</html>
