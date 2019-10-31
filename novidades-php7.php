<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Algumas Novidades do PHP 7</title>    
</head>
<body>
    <?php

        echo "Iniciando o arquivo <br>";
        try{
            mysql_connect("localhost");
        } catch (Error $e) {
            echo "Houve um erro! <br>";
        }       

        $x = null;

        if(isset($x) == TRUE){
            $y = $x;
        } else {
            $y = "Valor alternativo";
        }

        echo $y . "<br>";

        // Se $x possuir algum valor atribui a $z esse valor, caso contrário mostra a mensagem "Valor alternativo"
        $z = $x ?? "Valor alternativo";
        echo $z . "<br>";

        echo "Finalizando o arquivo <br>";

    ?>    
</body>
</html>