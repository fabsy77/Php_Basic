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
        $nome = "GG";
        $nome1 = str_pad($nome, 6, "*", STR_PAD_RIGHT);
        $nome2 = str_pad($nome, 6, "*", STR_PAD_BOTH);
        $nome3 = str_pad($nome, 6, "*", STR_PAD_LEFT);

        print("<br>Meu professor <span class='foco'> $nome1 </span> é legal!<br>");
        print("<br>Meu professor <span class='foco'> $nome2 </span> é legal!<br>");
        print("<br>Meu professor <span class='foco'> $nome3 </span> é legal!<br>");

/*
        Meu professor GG**** é legal!
        Meu professor **GG** é legal!
        Meu professor ****GG é legal!
*/
    ?>
</div>
</body>
</html>