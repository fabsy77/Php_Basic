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
      <pre>
       <?php
            $m = array(array(6,4),
                       array(4,9),
                        array(3,2,9));
            $m[0][1] = $m[2][0];
            print_r($m);
        ?>
        </pre>
    </div>
</body>
</html>