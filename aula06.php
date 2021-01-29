<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x="abc";
        $$x="def";
        echo "<br> O conteudo da variavel X e $x";
        echo "<br>A variavel abc criada recebeu o valor =$abc ";
        $a=10;
        $b=5;
        $a>$b?print"<br>O A e maior":print"<br>O B e maior";
        //ou da pra fazer assim
        echo" <br>verificar se a e maior que b ".($a>$b?"<br>O A e maior":"<br>O B e maior");
        $ano=$_GET["an"];
        $atual=$_GET["atual"];
        $idade=$atual-$ano;
        echo "<br>Sua idade é $idade";
        $tipo= (($idade>=18)&&($idade<65))?"Voto é obrigatorio":"O voto não é obrigatorio";
        echo "<br>$tipo";
    ?>
</body>
</html>