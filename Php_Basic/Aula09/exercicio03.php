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
            $nota1 = isset($_GET["n1"]) ? $_GET["n1"] : "nota nao informada";
            $nota2 = isset($_GET["n2"]) ? $_GET["n2"] : "nota nao informada";
            $media = ($nota1+$nota2)/2;
            echo "A media entre $nota1 e $nota2 é igual a $media<br/>";

            if($media < 5){
                $aluno = "reprovado";
            }
            elseif($media >= 5 && $media <= 7){
                    $aluno = "recuperacao";
             }
             else{
                    $aluno = "Aprovado";
            }

            echo "Situação do aluno: <span>$aluno</span><br/>";
        ?>
        <a class="btn" href="exercicio03.html">Voltar</a></p>
    </div>
</body>

</html>