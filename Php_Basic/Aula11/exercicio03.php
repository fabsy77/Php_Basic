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
            $inicio = isset($_GET["inicio"]) ? $_GET["inicio"] : 0;
            $final = isset($_GET["final"]) ? $_GET["final"] : 0;
            $incremento = isset($_GET["incremento"]) ? $_GET["incremento"] : 0;

            if($inicio < $final){
                while($inicio <= $final){
                    echo "$inicio<br/>";
                    $inicio = $inicio + $incremento;
                }
            }elseif($inicio > $final){
                while($inicio >= $final){
                    echo "$inicio<br/>";
                    $inicio = $inicio - $incremento;
                }
            }

            ?>
    </div>
</body>
</html>