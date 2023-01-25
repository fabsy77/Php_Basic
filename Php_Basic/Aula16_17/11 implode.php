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
        $vetor[0] = "Curso";
        $vetor[1] = "em";
        $vetor[3] = "Video";

        $textoSeparadoEspaco = implode(" ", $vetor);
        print($textoSeparadoEspaco); // Curso em Video
        echo "<br><br>";

        $textoSeparadoCerquilha = implode("#", $vetor);
        print($textoSeparadoCerquilha); // Curso#em#Video
        echo "<br><br>";

        $textoSeparadoUnderline = implode("_", $vetor);
        print($textoSeparadoUnderline); // Curso_em_Video
        echo "<br><br>";

        $texto = join(" ", $vetor); // posso usar tanto implode quanto join
        print($texto);
    ?>
</div>
</body>
</html>