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
            $v = isset($_GET ["val"]) ? $_GET["val"] : 1;
            echo "<h3>Calcutando o fatorial de $v</h3>";
            $contador = $v;
            $fat = 1;
            
            do{
                $fat = $fat * $contador;
                $contador--;
            }
            while($contador>=1);
            echo "<h2> $v ! = $fat </h2>"
        ?>
        <a href="02Fatorial.html">Voltar</a>
    </div>
</body>
</html>
