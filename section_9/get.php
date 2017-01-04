<?php
$id = 10;
print_r($_GET);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Document</title>
    </head>
    <body>
        <a href="get.php?id=<?php echo $id ?>">click</a>
    </body>
</html>
