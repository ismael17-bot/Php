<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n=isset($_GET["num"])?($_GET["num"]):1;
        for($c=1;$c<=1000;$c++){
            $r=$n*$c;
            echo"$n x $c = $r<br>";
        }
    
    ?>
</body>
</html>