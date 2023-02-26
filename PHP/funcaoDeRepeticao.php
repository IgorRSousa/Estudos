<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Estruturas de repetição</h1>
    <?php
       echo "<h3>While:</h3>";
        $cont = 0;
        $cont1 = 0;
        $cores = array("azul","Amarelo","Roxo","Vermelho");
        $idade = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

        while($cont < 5){
            echo "Ciclo: $cont<br>";
            $cont++;
        };

        echo "<h3>doWhile:</h3>";
        
        do{
            echo "Ciclo: $cont1<br>";
            $cont1++;
        }while($cont1 < 5);

        echo "<h3>For:</h3>";
        
        for($cont2 = 0; $cont2<5; $cont2++){
            echo "Ciclo: $cont2<br>";
        };

        echo "<h3>ForEach:</h3>";
        
        foreach($cores as $itens){
            echo "Itens da lista: $itens<br>";
        };
        echo "<br>";
        foreach($idade as $x => $itens){
            echo "X = $itens<br>";
        };
    ?>
</body>
</html>