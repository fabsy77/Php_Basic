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
        function f($v, $n)// funcao f com 2 parametros
        { 
            if ($n <= 0) return 1;
            else
                return $v[$n - 1] * f($v, $n - 2) + 1; 
        }
        $a = array(0, 1, 2, 3);
        print(f($a, 4));
        ?>
    </div>
</body>

</html>

if(x==y)
comand1
else
domando
