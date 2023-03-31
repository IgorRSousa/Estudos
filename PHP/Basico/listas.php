<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação de listas</title>
</head>
<body>
    <h2>Criação de listas: <br></h2>
    <?php
        echo "<h3>Lista padrão: </h3>";
        $listaPadrao = array("Pedro","Renam","Mateus");
        echo "Lista contem ".count($listaPadrao) ." elementos  sendo eles: $listaPadrao[0], $listaPadrao[1], $listaPadrao[2].";

        echo "<h3>Lista Associativa: </h3>";
        $listaAssociativa = array("Pedro"=>"Piranha","Renam"=>"Asiatico","Mateus"=>"Agiota");
        
        foreach($listaAssociativa as $x => $valor){
            echo "Key = " . $x . ", valor = " . $valor."<br>";
        }

        echo "<h3>Lista Multidimensional(Matriz): </h3>";
        $matriz = array(array("Pedro","Marombeiro","Empregado"),
                        array("Renam","Funcionario Publico","Empregado"),
                        array("Mateus","Vagabundo","Desempregado"));
        
        for($linha = 0; $linha < 3;$linha++){
            for($coluna = 0; $coluna < 3;$coluna++){
                echo $matriz[$linha][$coluna]." ";
            };
            echo "<br>";
        };

        echo "<h3>Ordenar listas:</h3>";
        $listaNumeriaca = array(5,8,3,1,8,6,10);
        $listaApha = array("Laura","Maísa","Lia","Gabriel","Isaac");
        $listaAphaAssociativa = array("Laura"=>"20","Maísa"=>"15","Lia"=>"36","Gabriel"=>"62","Isaac"=>"25");

        sort($listaNumeriaca);
        sort($listaApha);
        ksort($listaAphaAssociativa);
        
        echo "lista numerica ordenada: ";
        foreach($listaNumeriaca as $valores){
            echo "$valores ";
        };
        echo "<br>";

        sort($listaNumeriaca);
        sort($listaApha);
        ksort($listaAphaAssociativa);
        
        echo "lista alfabetica ordenada: ";
        foreach($listaApha as $valores){
            echo "$valores ";
        };
        echo "<br>";

        echo "lista Associativa ordenada por chave: <br>";
        foreach($listaAphaAssociativa as $key => $valores){
            echo "◉ $key => $valores <br>";
        };
        echo "<br>";

    ?>
</body>
</html>