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
    <form method="get" action="03Tabuada.php">
            
            Numero: <select name="num">
            <?php
                $v = 1;
                while($v <= 10){
                    echo "<option value='$v'>$v</option>";
                    $v++;
                }
            ?>
            </select>
            <input type="submit" value="Tabuada"/>
        </form>
    </div>
</body>
</html>