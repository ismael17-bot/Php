<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $prod="leite";
    $preco=4.5;
    printf("O %s está custando R$%.2f<br>",$prod,$preco);
    $x[0]=2;
    $x[1]=3;
    $x[2]=54;
    $x[3]=65;
    print_r($x);
    $v=array(2,3,544,5654,474,45745,747457,4);
    print("<br><br>");
    print_r($v);
    print("<br><br>");
    var_dump($v);
    print("<br><br>");
    var_export($v);
    print("<br><br>");
    $txt="testando as funçoes nativas da linguagem, escrevendo algo grande para testar o wordwrap";
    $res=wordwrap($txt,20,"<br>\n",false);
    echo $res;
    print("<br><br>");
    $nome="   Ismael de Toledo Medeiros  ";
    echo ("<br> $nome");
    echo(strlen($nome));
    print("<br><br>");
    print("Abaixo utilizei a funçao trim, ela corta os espaços antes de uma string");
    $novo= trim($nome);
    print("<br><br>");
    echo (strlen($novo));
    print("<br><br>");
    print("vou utilizar a funçao str_word_count com a quantidade de palavras na fase> Eu vou estudar php");
    $fra="Eu vou estudar php";
    //a mesma funçao serve pra fazer um vetor com as string
    // e so colocar no lugar do 0 o 1
    // e se colocar o 2 ela faz um vetor com a posicao inicial de cada palavra
    $cont=str_word_count($fra,0);
    print("<br>");
    print($cont);
    print("<br><br>");
    $site="Curso em video";
    $vetor= explode(" ",$site);
    print_r($vetor);
    /*
    funçao chr(cod) pega o cod de uma letra e mostra ela
     ''    ord (c) e mostra o cod
    */
    print("<br>Essa funçao pegas as letras maiusculas e deixa minusculas<br>");
    echo $nome;
    print("<br><br>");
    echo " Seu nome é ".strtolower($nome);
    print("<br><br>");

    echo " Seu nome é ".strtoupper($nome);
    print("<br>so a primeira maiuscala<br>");

    echo " Seu nome é ".ucfirst($nome);
    print("<br>deixa as primeiras letra maiuscula<br>");

    echo " Seu nome é ".ucwords($nome);
    print("<br><br>");

    echo " Seu nome é ".strrev($nome);
    $curso="oi tudo bem testando medeiros,testando,amnaha ,testando";
    print("<br><br>");
    print(" procura a posicao de uma palavra na string");
    echo " ".stripos($curso,"medeiros");
    print("<br><br>");
    print("A funçao serve para procurar a quantidade de vezes que repete uma palavra:");
    $oi=substr_count($curso,"testando");
    print(" a palavra testando apareceu $oi vezes");
    
    
    ?>
    
</body>
</html>