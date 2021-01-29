<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula04 e Operações</title>
</head>
<body>
    <h1>Aula 04 e operadores 05</h1>
    <?php
    $n=19;
    $nome= "ismael";
    
    echo "$nome tem $n anos<br>";
    echo $nome." tem ".$n." anos<br>";
    
    $n1=$_GET["a"];
    $n2=$_GET["b"];
    echo "<br><h2>Os valores recebidos: $n1 e $n2</h2>";
    echo "<br>A soma : ".($n1 + $n2);
    echo "<br>A sub : ".($n1 - $n2);
    echo "<br>A div : ".($n1 / $n2);
    echo "<br>O mod : ".($n1 % $n2);
    
    echo "<br><h2>Funçoes aritiméticas</h2>";#oi
    $num=-4;
    echo "<br>abs($num) Pega o valor absoluto= ".abs($num);
    echo "<br> pow(numero,numero) Potenciação";
    echo "<br> $n1<sup>$n2</sup> = ".pow($n1,$n2);
    echo "<br> sqrt(numero) raiz de 25 ".sqrt(25);
    
    echo "<br> roud(numero)";//ceil para cima floor para baixo
    echo "<br> intval(numero) Pega aparte inteira do numero";
    echo "<br> number_format em moeda R$".number_format($n1,2,",",".");
    ?>
    
</body>
</html>