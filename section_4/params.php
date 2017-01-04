<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Document</title>
    </head>
    <body>

        <?php
            function greeting($message) {
                echo $message;
            }
            function calculate ($num1, $num2) {
                $sum = $num1 + $num2;
                echo $sum;
            }
            calculate(48, 48);
            greeting("boom");
        ?>

    </body>
</html>
