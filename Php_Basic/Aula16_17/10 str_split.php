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
        $nome = "Fabiana";
        $vetor = str_split($nome);
        print_r($vetor);
        // Array ( [0] => F [1] => a [2] => b [3] => i [4] => a [5] => n [6] => a )
    ?>
</div>
</body>
</html>