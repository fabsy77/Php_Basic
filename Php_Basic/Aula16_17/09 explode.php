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
        $site = "Curso em Video";
        $vetor = explode(" ", $site);
        print_r($vetor); // Array ( [0] => Curso [1] => em [2] => Video )
    ?>
</div>
</body>
</html>