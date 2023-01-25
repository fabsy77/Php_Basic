<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
         $v = $_GET['numero'];
         $contador = 1;
         $resultado = 1;
         echo "<h4>Mostrando a Tabuada de $v</h4>";
         do{
             $resultado = $v * $contador;
             echo "$v X $contador = $resultado<br/>";
             $contador++;
         }while($contador <= 10);
        ?>
        <br/><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>

