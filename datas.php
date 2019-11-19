<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplos com Datas e Horas</title>
</head>
<body>
    <?php

        // Retorna a data atual (tempo) em segundos.
        $agora = time();
        echo $agora . "<br/>";

        // Formata a data de acordo com os parametros abaixo.
        echo date("Y-m-d H:i:s", time()) . "<br/>";

        echo "Dia: ".date("d", time()) . "<br/>";
        echo "Ano: ".date("Y", time()) . "<br/>";
        
        $novoTimestamp = strtotime("+ 1 day", time());
        echo date("Y-m-d H:i:s", $novoTimestamp) . "<br/>";

        echo date("Y-m-d H:i:s", strtotime("+ 7 day", time())) . "<br/>";
        echo date("Y-m-d H:i:s", strtotime("next monday", time())) . "<br/>";
        echo date("Y-m-d H:i:s", strtotime("last friday", time())) . "<br/>";
        echo date("Y-m-d H:i:s", strtotime("+ 1 month", time())) . "<br/>";
        echo date("Y-m-d H:i:s", strtotime("+ 10 hour", time())) . "<br/>";
        echo date("Y-m-d H:i:s", strtotime("+ 1 week", time())) . "<br/>";

        $meuTimestamp = mktime(0, 0, 0, 1, 1, 2000);
        echo $meuTimestamp . "<br/>";
        echo date("d/m/Y H:i:s", $meuTimestamp)."<br/>";

        // Verifica se a data é válida.
        $data1 = checkdate(2, 15, 2020);
        if($data1){
            echo "Essa data existe."."<br/>";
        } else {
            echo "Essa não data existe."."<br/>";
        }

        $data2 = checkdate(22, 15, 2020);
        if($data2){
            echo "Essa data existe."."<br/>";
        } else {
            echo "Essa não data existe."."<br/>";
        }

        // Operação entre datas.
        $data1 = mktime(0,0,0,11,29,2020);
        $data2 = mktime(0,0,0,12,31,2020);
        $data3 = time();

        echo "Data 3: ".$data3."<br/>";
        echo date("d-m-Y H:i:s", $data3)."<br/>";

        $difSeconds = $data2 - $data1;
        echo "Diferença em segundos: ".$difSeconds."<br/>";

        $difMinutos = ($data2 - $data1)/60;
        echo "Diferença em minutos: ".$difMinutos."<br/>";

        $difHoras = ($data2 - $data1)/60/60;
        echo "Diferença em horas: ".$difHoras."<br/>";
        
        $difDias = ($data2 - $data1)/60/60/24;
        echo "Diferença em dias: ".$difDias."<br/>";

    ?>
</body>
</html>