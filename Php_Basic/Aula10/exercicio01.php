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
        $n = isset($_GET["num"]) ? $_GET["num"] : 0; //
        $o = isset($_GET["oper"]) ? $_GET["oper"] : 1;// verificar se foi configurado o op caso contrario sera 1

        switch($o) {
            case 1:
                $r = $n * 2;
                break;
            case 2:
                $r = pow($n,3);//"$r = pow($n,3);"
                break;       
            case 3:
                $r = sqrt($n); 
                break;
        }
        echo" o resultado da operacao foi <span class = 'foco'>$r<span/>";// esse span é para dar um destque ao $r
        ?>
        <br/>
        <p><a href="exercicio01.html"> Voltar</a><p/>

        <!--y <p><a href="exercicio01.html" class="botao">Voltar</a></p>-->
    </div>
</body>
</html>