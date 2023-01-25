<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <?php
        $letra = "c";
        $cod = ord($letra);
        print("A letra $letra tem código ASCII <span class='foco'> $cod </span>");
        // A letra c tem código ASCII 99

        echo "<br><br>";

        $letra = "C";
        $cod = ord($letra);
        print("A letra $letra tem código ASCII <span class='foco'> $cod </span>")
        // A letra C tem código ASCII 67
    ?>
</div>
</body>
</html>