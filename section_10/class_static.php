<?php
    class Car {
        static $wheels = 4;
        var $hood = 1;
        function moveWheels() {
            Car::$wheels = 10;
        }
    }
    $bmw = new Car();
    echo Car::$wheels;
    echo $bmw -> mo
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Document</title>
    </head>
    <body>

    </body>
</html>
