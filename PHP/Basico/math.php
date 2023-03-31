<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Funções matematicas</h1>
    
    <?php
    echo "Como chamar o valor de pi(π): <br>";
    echo (pi());

    echo "<br><br>As funções min()e max()podem ser usadas para encontrar o valor mais baixo ou mais alto em uma lista (Array) de argumentos: <br>";
    echo "Menor valor: ".min(1,2,3,4,5,6,7,8,9,10,-1,-10)."<br>";
    echo "Maior valor: ".max(1,2,3,4,5,6,7,8,9,10,-1,-10)."<br>";

    echo "<br> A função abs() retorna o valor absoluto (positivo) de um número: <br>";
    echo ("Valor absoluto (positivo) de -5.2: ".abs(-5.2));

    echo "<br><br>A função sqrt() retorna a raiz quadrada de um número: <br>";
    echo ("Raiz quadrada de 64: ".sqrt(64));

    echo "<br><br>A função round() arredonda um número de ponto flutuante para seu inteiro mais próximo: <br>";
    echo "Valor arredondado para cima -> ".round(1.51)."<br>";
    echo "Valor arredondado para baixo -> ".round(1.49);

    echo "<br><br>A função rand() gera um número aleatório: <br>";
    echo rand(1,10);
    ?>
</body>
</html>