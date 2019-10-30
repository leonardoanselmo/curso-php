<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Hello!</title>
</head>
<body>

    <?php        
        echo 'Hello Leonardo Anselmo. <br>'; 
        $var1 = "PHP";
        $variavelValor = 50.15;

        echo $var1 . "<br>";
        echo $variavelValor . "<br>";
        
        define("PI", 3.14);
        define("NOME_EMPRESA", "Plugue Informática");

        $resultado = 3 * PI;
        echo $resultado . "<br>";
        echo "Nome da empresa: " . NOME_EMPRESA . "<BR>";

        $x = 3 + 5;
        echo $x . "<br>";

        $x = 3;
        $y = 1 + $x++;
        echo "x = " . $x . " e y = " . $y . "<br>";

        $x = 3;
        $y = 1 + ++$x;
        echo "x = " . $x . " e y = " . $y . "<br>";
        
        echo round(5.5, 0, PHP_ROUND_HALF_DOWN). "<br>";
        echo round(5.5, 0, PHP_ROUND_HALF_UP). "<BR>";
        echo round(5.5, 0, PHP_ROUND_HALF_EVEN). "<BR>";
        echo round(5.5, 0, PHP_ROUND_HALF_ODD). "<BR>";

        echo round(5.55, 1, PHP_ROUND_HALF_DOWN). "<br>";
        echo round(5.55, 1, PHP_ROUND_HALF_UP). "<BR>";
        echo round(5.55, 1, PHP_ROUND_HALF_EVEN). "<BR>";
        echo round(5.55, 1, PHP_ROUND_HALF_ODD). "<BR>";

        if(3 < 4 || 10 < 8) {
            echo "Condição aceita."."<br>";
        } else {
            echo "Negado!"."<br>";
        }

        $x = 10 / 2 == 5 ? "É cinco" : "Não é cinco";
        echo $x."<br>";

        for($i = 0; $i < 10; $i++){
            echo $i . " ";
        }
        echo "<br>";

        for($i = 0; $i < 10; ++$i){
            echo $i . " ";
        }
        echo "<br>";

        echo $_SERVER["SERVER_ADDR"]."<br>";
        echo $_SERVER["SERVER_NAME"]."<br>";
        echo $_SERVER["HTTP_USER_AGENT"]."<br>";
        echo $_SERVER["REMOTE_ADDR"]."<br>";
    ?>

</body>
</html>

