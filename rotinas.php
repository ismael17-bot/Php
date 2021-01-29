<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //existe a o require, tbm serve para adicionar arquivos externos, mas ai e obrigado
    //incluindo arquivo externo para as funções 
    //include_once e pra conferir se ja incluiu alguma vez
    include "funçoes.php";

    $retorno=soma(2,2,2,2,2);
    echo "A soma e $retorno<br>";

    //passagem por referecia

    $a=3;
    test($a);
    echo "$a<br>";
    ?>
</body>
</html>