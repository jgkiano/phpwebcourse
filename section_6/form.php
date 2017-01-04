<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Document</title>
    </head>
    <body>
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
        <form action="form.php" method="post">
            <input type="text" name="username" value="" placeholder="Enter Username">
            <input type="password" name="password" value="" placeholder="Password">
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>
