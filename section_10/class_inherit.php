<?php
    class Car {
        var $wheels = 4;
        var $hood = 1;
        var $engine = 1;
        var $doors = 4;
        function moveWheels() {
            $this->wheels = 10;
        }
        function createDoors() {
            $this->doors = 6;
        }
    }
    class Plane extends Car {
        var $wheels = 20;
    }
    $bmw = new Car();
    $jet = new Plane();
    echo $jet -> wheels;
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
