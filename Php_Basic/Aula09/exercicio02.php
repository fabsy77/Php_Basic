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
        $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
        $i = date("Y") - $a; # Ypsilon maisuclo mostra 4 digitos
        echo "Voce nasceu em $a e tera $i anos";
        if ($i < 16) {
            $tipoVoto = "nao vota";
        } elseif ($i >= 16 && $i < 18 || ($i > 65)) {

            $tipoVoto  = "voto opcional";
        } else {
            $tipoVoto  = "voto obrigatorio";
        }

        echo "<br/>Para essa idade voce $tipoVoto";
        ?>
    </div>
</body>
</html>