<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: blanchedalmond;
        }
    </style>
</head>
<body>
    <?php
    $nome=isset($_GET["nome"])? $_GET["nome"]:"[não informado]";
    $ano=isset($_GET["ano"])? $_GET["ano"]:0;
    $sexo=isset($_GET["sexo"])? $_GET["sexo"]:"[não informado]";
    $idade= date("Y")-$ano;
    echo"$nome é $sexo tem $idade anos";
    ?><br>
    <a href="formulario2.html" >Voltar</a>
</body>
</html>