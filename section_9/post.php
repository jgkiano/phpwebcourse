<?php
    echo $_POST["name"];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Document</title>
    </head>
    <body>
        <form action="post.php" method="post">
            <input type="text" name="name">
            <input type="submit" value="submit">
        </form>
    </body>
</html>
