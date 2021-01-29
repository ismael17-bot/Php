<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $valor=$_GET["v"];
    $rq=sqrt($valor);
    echo "<br> O valor enviado foi $valor ";
    echo "<br> A raiz do valor é: ".number_format($rq,2);

    ?>
    <a href="formulario.html"><h3>Voltar</h3></a>
</body>
</html>