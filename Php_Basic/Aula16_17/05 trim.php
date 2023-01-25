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
        $letraComAcento = "é";          // 2
        echo(strlen($letraComAcento));  // uma letra acentuada tem tamanho de 2 !
        pulaLinha();

        $letraSemAcento = "e";
        echo(strlen($letraSemAcento)); // 1
        pulaLinha();

        $nome = "   Jose da Silva   ";
        echo(strlen($nome)); // 19
        pulaLinha();

        $novo = trim($nome); // Função trim() : Elimina espaços em branco antes e depois de uma string.
        echo($novo); // Jose da Silva
        pulaLinha();

        echo(strlen($novo)); // 13
    ?>
</div>
</body>
</html>