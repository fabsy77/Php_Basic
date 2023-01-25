<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #btn-voltar{
            background-color: #9392ed;
            color: #fff;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid black;

        }
    </style>
</head>
<body>
    <div>
    <?php
            $e = isset($_GET['est'])?$_GET['est']:"XX";
            switch ($e) {
                       case "AC":
                       case "AP":
                       case "AM":
                       case "PA":
                       case "RO":
                       case "RR":
                       case "TO":
                           $r = "Regiao Norte";
                           break;
                       case "AL":
                       case "BA":
                       case "CE":
                       case "MA":
                       case "PB":
                       case "PE":
                       case "PI":
                       case "RN":
                       case "SE":
                           $r = "Regiao Nordeste";
                           break;
                       case "DF":
                       case "GO":
                       case "MT":
                       case "MS":
                           $r = "Regiao Centro-Oeste";
                           break;
                       case "ES":
                       case "MG":
                       case "RJ":
                       case "SP":
                           $r = "Regiao Sudeste";
                           break;
                       case "PR":
                       case "RS":
                       case "SC":
                           $r = "Regiao Sul";
                           break;
                       default:
                           $r = "Regiao Invalida";
                   }
            echo "Você mora na <span class='foco'>$r</span>";
        ?>
    </div>
        <br/><a id="btn-voltar"  href="javascript:history.go(-1)">Voltar</a> <!--javascript:history.go(-1) siginifica volte uma pagina de navegacao-->      
</body>
</html>