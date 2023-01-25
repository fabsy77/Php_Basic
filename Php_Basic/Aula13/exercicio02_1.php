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
        <!-- botao que vai mostrar opcao dentre 1 a 10 dentro de um for-->
        <form method="get" action="exercicio02_2.php">
            <select name="num">
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<option>$i</option>";
                }
                ?>
            </select>
            <input type="submit" value="Tabuada">
    </div>
</body>

</html>