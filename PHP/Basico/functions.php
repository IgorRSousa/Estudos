<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    echo "<h1>Funcões: </h1>";
    function escreverMSG(){
        echo("Olá piranhas !<br>");
    }
    function escreverMSGComARG($agr){
        echo("Olá piranhas eu sou: $agr! <br>");
    }
    function funcComARGTipado(int  $agr1, int  $agr2){
        return $agr1+$agr2;
    }

    escreverMSG();
    escreverMSGComARG("Igor");
    echo funcComARGTipado(5,"5")."<br>";
    ?>
</body>
</html>