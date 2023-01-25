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
        $t = " Aqui temos um  texto gigante criado pelo PHP e vai mostrar o funcionamento da funcao wordwrap";
        $r = wordwrap($t, 5, "<br/>\n", true); // faz quebra de palavra com mais de cinco letras
        echo $r;
        ?>
    </div>
</body>

</html>