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

        // Criando um array somente com valores
        $arrayExemplo = array(140.1, 200, 215.05, 550);
        print_r($arrayExemplo);
        echo "<br/>";

        // Criando uma função que recebe um valor e o retorna.
        function insereMoeda($valor){
            $valor = "R$ ".$valor;
            return $valor;
        }

        // Acrescenta no arrayexemplo o retorno da função insereMoeda.
        $arrayExemplo = array_map("insereMoeda", $arrayExemplo);
        print_r($arrayExemplo);
        echo "<br/>";

        // Criando um array com novos valores.
        $arrayExemplo = array("Linguagem1" => "PHP",
                              "Linguagem2" => "SQL",
                              "Linguagem3" => 100,
                              "Linguagem4" => "Java");
        print_r($arrayExemplo);
        echo "<br/>";

        // Verificando se existe a chave no array.
        if(array_key_exists("Linguagem2", $arrayExemplo)){
            echo "Existe Linguagem2 no array"."<br/>";
        } else {
            echo "Não existe Linguagem2 no array"."<br/>";
        }

        // Mostrando as chaves que existem no array.
        $keys = array_keys($arrayExemplo);
        foreach($keys as $key){
            echo $key.", ";
        }
        echo "<br/>";

        // Procura um elemento no array.
        $key = array_search("SQL", $arrayExemplo);
        echo "Chave do elemento SQL é: ".$key."<br/>";

        $isIn = in_array("PHP1", $arrayExemplo);
        if($isIn){
            echo "Elemento existe no array."."<br/>";
        } else {
            echo "Elemento não existe no array."."<br/>";
        }

        print_r($arrayExemplo);
        echo "<br/>";
        // Embaralha o array.
        shuffle($arrayExemplo);        
        print_r($arrayExemplo);
        echo "<br/>";

        // Ordena o array.
        sort($arrayExemplo);
        print_r($arrayExemplo);
        echo "<br/>";

        // Ordena o array inverso.
        rsort($arrayExemplo);
        print_r($arrayExemplo);
        echo "<br/>";

        // Transforma a string em um array.
        $stringExemplo = "10;20;30;40;50";
        $arrayExemplo = explode(";", $stringExemplo);
        print_r($arrayExemplo);
        echo "<br/>";

        // Transforma um array em string.
        $arrayExemplo = array("a", "b", "c", "d", "e");
        $stringExemplo = implode(";", $arrayExemplo);
        echo $stringExemplo;
        echo "<br/>";

        // Criando um array atraves de uma string.
        $stringExemplo = "chave=valor&chave2=valor2&var=PHP";
        parse_str($stringExemplo, $arrayExemplo);
        print_r($arrayExemplo);

    ?>
</body>
</html>