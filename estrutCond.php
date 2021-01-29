<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $ano=isset(($_GET["ano"]))?($_GET["ano"] ): 1900;
    $idade=date("Y")-$ano;
    if($idade>=18){
        echo "Sua idade é $idade anos<br/>";
        echo "Você tem idade para fazer carteira e o seu voto e obrigatorio<br/>";
    }else{
        echo "Você não tem idade suficiente ";
    }


    ?>
    <a href="estrutCond.html" >Voltar</a>
</body>
</html>