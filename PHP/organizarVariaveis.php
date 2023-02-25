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
    $txt = "mundo"; 
    $x = 5;
    $y = 10.5;
    function myTeste(){
        // variaavel global so pode ser chamada na funcão se for intanciada !
        global $x,$y, $txt;
        // static faz com que a variavel não  seja apagada ao fim da function ! 
        static $z = 0;
        $x = 10;
        echo "Olá ".$txt . " !<br>";
        echo ($x + $y);
        $z++;
        echo "<br> $z";
    }
    myTeste();
    echo "<br>$x";
    
    ?>
</body>
</html>