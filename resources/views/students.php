<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php
    foreach($students as $x){
        echo "<li>$x</li>";
    }
    ?>
    </ul>
    <?php
    echo $msg;
    ?>

</body>
</html>