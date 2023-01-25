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
            $v = array("nome"=>"Ana",// string
                       "idade"=>23, // inteiro
                       "peso"=>65.5);//numero real
            $v["fuma"]=true; // adiciona indice
            
            foreach($v as $campo => $valor){
                echo "O campo $campo possui o conteudo $valor<br>";
            }
        ?>
    </div>
</body>
</html>