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
        $frase = "Eu estou aprendendo PHP";
        // acha a palavra solicitada tanto em minuscula quanto em maiuscula
        $posicao = stripos($frase, "php");

        print("Analisando a string : <br>'$frase'<br><br>");
    ?>
</div>
</body>
</html>