<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Utilizando strings</title>
</head>
<body>
    <?php

    $frase = "Frase utilizada para teste das strings.";

    // Imprime o conteúdo na tela.
    echo($frase . "<br/>");
    print($frase . "<br/>");

    // Exibe o tamanho da string.
    $tamString = strlen($frase);
    echo $tamString . "<br/>";

    // Acentos e caracteres especiais: utilize o utf8_decode.
    $tamString = strlen(utf8_decode($frase));
    echo $tamString . "<br/>";

    // Localiza na string a posição da primeira ocorrência informada.
    $buscaString = strpos($frase, "a");
    echo $buscaString . "<br/>";

    // Localiza na string a ocorrência informada começando na posição 3.
    $buscaString = strpos($frase, "a", 3);
    echo $buscaString . "<br/>";

    $posicao = strpos($frase, "a");
    while($posicao !== FALSE){
        echo "Posição: " . $posicao . "<br/>";
        $posicao = strpos($frase, "a", $posicao+1);
    }

    // Mostra em tela do primeiro espaço até o final da string.
    $buscaString = strchr($frase, " ");
    echo $buscaString . "<br/>";

    // Busca a ocorrência "para" e mostra até o final da string.
    $buscaString = strchr($frase, "para");
    echo $buscaString . "<br/>";

    // Busca a informação do primeiro espaço em branco invertido na string.
    $buscaString = strrchr($frase, " ");
    echo $buscaString . "<br/>";    

    // Busca numericamente uma informação na string.
    $buscaString = substr($frase, 4);
    echo $buscaString . "<br/>";

    // Busca numericamente uma informação na string até um limite.
    $buscaString = substr($frase, 6, 9);
    echo $buscaString . "<br/>";

    // Substitui uma informação na string por outra.
    $buscaString = str_replace("utilizada", "criada", $frase);
    echo $buscaString . "<br/>";
    
    // Transforma a string em caixa baixa.
    $buscaString = strtolower($frase);
    echo $buscaString . "<br/>";

    // Transforma a string em caixa alta.
    $buscaString = strtoupper($frase);
    echo $buscaString . "<br/>";

    // Primeira letra na frase em maiusculas.
    $buscaString = ucfirst($frase);
    echo $buscaString . "<br/>";

    // Cada palavra da string em maiusculas.
    $buscaString = ucwords($frase);
    echo $buscaString . "<br/>";

    // Inverte a string.
    $buscaString = strrev($frase);
    echo $buscaString . "<br/>";

    // Quebra a string em partes separadas por espaço.
    $buscaString = explode(" ", $frase);
    echo $buscaString[0] . "<br/>";
    echo $buscaString[1] . "<br/>";
    echo $buscaString[2] . "<br/>";
    echo $buscaString[3] . "<br/>";
    echo $buscaString[4] . "<br/>";
    echo $buscaString[5] . "<br/>";


    ?>    
</body>
</html>