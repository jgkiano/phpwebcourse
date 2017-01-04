<?php
    if(isset($_POST["submit"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $name = array("James","Kilua", "Danny", "Mike");
        if(strlen($username) < 5) {
            echo "Username has to be longer than 5";
        }
        if(!in_array($username,$name)) {
            echo "sorry you are not allowed";
        } else {
            echo "welcome";
        }
    }
?>
