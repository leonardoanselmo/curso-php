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

    $buscaString = strchr($frase, " ");
    echo $buscaString . "<br/>";

    
    

    ?>    
</body>
</html>