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

        // Outra forma de contar elementos no array.
        echo "Têm quantos elementos o array? ".sizeof($arrayExemplo)."<br/>";

        // Percorrendo o array
        foreach($arrayExemplo as $elemento){
            echo "Tem no array: ".$elemento." ,";
        }
        echo "<br/>";

        // Adiciona um novo elemento no array.
        array_push($arrayExemplo, "Leonardo");
        print_r($arrayExemplo);
        echo "<br/>";

        // Retorna o último elemento do array.
        $ultimo_elemento = array_pop($arrayExemplo);
        echo "Retorna o último elemento: ".$ultimo_elemento."<br/>";

        // Retorna o primeiro elemento do array excluindo do mesmo.
        $primeiro_elemento = array_shift($arrayExemplo);
        echo "Retorna o primeiro elemento excluindo do array: ".$primeiro_elemento."<br/>";

        echo "Array sem o primeiro elemento: ";
        print_r($arrayExemplo);
        echo "<br/>";

        // Adiciona um elemento na primeira posição do array.
        echo "Adicionando um elemento na primeira posição: ";
        array_unshift($arrayExemplo, "Anselmo");
        print_r($arrayExemplo);
        echo "<br/>";

        


        








        



    ?>
</body>
</html>