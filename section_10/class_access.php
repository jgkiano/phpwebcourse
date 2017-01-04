<?php
    class Car {
        public $wheels = 4;
        protected $hood = 1;
        private $engine = 1;
        var $doors = 4;
        function moveWheels() {
            $this->wheels = 10;
        }
        function createDoors() {
            $this->doors = 6;
        }
    }

    $bmw = new Car();
    // echo $bmw->showProp();
    $semi = new Semi();

    class Semi extends Car {
        function showProp() {
            echo $this->hood;
        }
    }
    echo $semi -> showProp();
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
