<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplos de Arrays</title>
</head>
<body>
    <?php

        // Cria um array e imprime o seu conteúdo.
        $arrayExemplo = array("PHP", "SQL", 100, "curso" => "Java");
        print_r($arrayExemplo);
        echo "<br/>";

        // Exibe o conteudo de acordo com a posição no array.
        echo "Posição 0: ".$arrayExemplo[0]."<br/>";
        echo "Posição curso: ".$arrayExemplo["curso"]."<br/>";

        // Exclui um elemento no array buscando pela chave.
        unset($arrayExemplo["curso"]);
        print_r($arrayExemplo);
        echo "<br/>";

        // Conta quantos elementos tem no array.
        echo "Têm quantos elementos o array? ".count($arrayExemplo)."<br/>";


        



    ?>
</body>
</html>