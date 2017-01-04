<?php
    class Car {
        function moveWheels() {
            echo "vroom vroom";
        }
    }
    if(method_exists("Car","moveWheels")) {
        echo "exists";
    } else {
        echo "nope";
    }
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
