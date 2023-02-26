<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Testes Condicionais</h1>
    <?php

    $x = true;
    $y = false;
    echo "If padrão: <br>";
    if($x){
        echo "Variavel x é verdadeira !<br>";
    }else{
        echo "Variavel x é Falso ! <br>";
    };

    echo "<br>If com elseif: <br>";
    if($y){
        echo "Variavel x é verdadeira !<br>";
    }elseif($x){
        echo "Variavel x é verdadeira e y é falsa!<br>";
    }else{
        echo "Variavel x e y é Falso ! <br>";
    };

    echo "<br>Switch teste de caso a caso: <br>";

    $corFavorita = "Azul";

    switch($corFavorita){
        case "Vermelho" :
            echo "Sua cor favorita é Vermelho !";
            break;
        case "Azul" :
            echo "Sua cor favorita é Azul !";
            break;
        case "Verde" :
            echo "Sua cor favorita é Verde !";
            break;
        case "Roxo" :
            echo "Sua cor favorita é Roxo !";
            break;  
    };
    ?>
</body>
</html>