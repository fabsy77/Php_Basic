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
        $posicao = strpos($frase, "PHP");

        print("Analisando a string : <br>'$frase'<br><br>");

        print("O tamanho da string : " .strlen($frase) . " posições <br><br>");

        print("Encontrado a ocorrência da palavra 'PHP' na posição $posicao.");
        // Encontrado a ocorrência da palavra 'PHP' na posição 20.
    ?>
</div>

</body>
</html>