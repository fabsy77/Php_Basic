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
        function pulaLinha() {
            echo "<br><br>";
        }
        $nome = "   Jose da Silva   ";
        echo(strlen($nome)); // 19
        pulaLinha();
        $novo = ltrim($nome); // Função ltrim() : Elimina espaços em branco antes de uma string.
        echo($novo); // Jose da Silva___
        pulaLinha();
        echo(strlen($novo)); // 16
    ?>
</div>
</body>
</html>