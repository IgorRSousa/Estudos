<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Constantes</h1>
    <?php
    echo "Uma constante é um identificador (nome) para um valor simples. O valor não pode ser alterado durante o script.
    Um nome de constante válido começa com uma letra ou sublinhado (sem sinal $ antes do nome da constante).<br>
    Nota: Ao contrário das variáveis, as constantes são automaticamente globais em todo o script.<br>";
    
    echo "<br>Para criar uma constante, use a função define(). <br>";
    define("texto", "Ola piranhas como estão vocês?");
    echo texto;
    
    echo "<br   ><br>Constantes com listas: <br>";
    define("placasDeVideo",["GTX 1660 ", "RTX 2060 ", "RTX 4080"]);
    echo placasDeVideo[0], placasDeVideo[1], placasDeVideo[2];

    echo "<br><br>Constantes são sempre globais !<br>";
    function testeGloabal(){
        echo placasDeVideo[0];
    };
    testeGloabal()
    
    ?>
</body>
</html>