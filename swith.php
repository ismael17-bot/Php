<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
         $n=isset($_GET["num"])?$_GET["num"]:0;
         $o=isset($_GET["oper"])?$_GET["oper"]:1;
         $r=0;
         switch($o){
             case '1':
                $r=$n*2;
                break;
             case '2':
                $r=$n^3;
                break;
             case '3':
                $r = sqrt($n);
                break;
             default:
                echo "Erro";        
         }
        echo "O resultado da questao escolhida foi $r";
        ?>
        <a href="swith.html">VOltar</a>
    </div>
</body>
</html>