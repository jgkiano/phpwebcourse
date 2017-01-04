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
    // if(method_exists("Car","moveWheels")) {
    //     echo "exists";
    // } else {
    //     echo "nope";
    // }
    $bmw = new Car();
    $truck = new Car();
    echo $bmw->wheels . "<br>";
    echo $truck->wheels = 10;
    $truck ->createDoors();
    echo $truck->doors;
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
