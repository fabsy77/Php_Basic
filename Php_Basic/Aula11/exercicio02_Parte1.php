<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../_css/style.css" />
    <style>
        input[type="number"]{
            width: 70px;
        }
        input[type="submit"]{
            background-color: #9392ed;
            color: #fff;
            padding: 10px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div>
        <form method="get" action="exercicio02_parte2.php">
            <?php
            // faz 5 caixas de 1 formulario
             $n = 1;
             while ($n <= 5){
                echo " Valor $n: <input type='number' name='v$n' min '0' max '100' value='0'/> <br/>";
                $n++;
            }
            ?>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>