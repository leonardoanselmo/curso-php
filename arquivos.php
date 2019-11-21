<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplos com Manipulação de Arquivos</title>
</head>
<body>
    <?php

        $filepath = "teste.txt";

        if(is_file($filepath)){
            echo "O arquivo já existe!"."<br/>";
        } else {
            echo "O arquivo não existe! Estou criando..."."<br/>";
            $meuArquivo = fopen($filepath, "a+");
            fwrite($meuArquivo, "Leonardo Anselmo");
            fwrite($meuArquivo, " - Aprendendo Italiano");
            fwrite($meuArquivo, "\r\n");
            fclose($meuArquivo);
        }

        



    ?>
</body>
</html>