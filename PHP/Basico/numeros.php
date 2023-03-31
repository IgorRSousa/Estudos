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
        $x = 5234;
        $y = 25.5;
        echo "Testanto se valores são interiros:<br>";
        var_dump(is_int($x));
        echo "<br>";
        var_dump(is_int($y));

        
        echo "<br><br>Testanto se valores são decimais: <br>";
        var_dump(is_float($x));
        echo "<br>";
        var_dump(is_float($y));

        echo "<br><br>Um valor numérico maior que PHP_FLOAT_MAX é considerado infinito.<br>";
        $z = 1.9e411;
        var_dump($z);
        echo "<br>";
        var_dump(is_finite($z));
        echo "<br>";
        var_dump(is_infinite($z));

        echo "<br><br>O PHP possui as seguintes funções para verificar se um valor não é um número: <br>";
        $a = acos(8);
        var_dump($a);

        echo "<br><br> A função PHP is_numeric() pode ser usada para descobrir se uma variável é numérica. A função retorna true se a variável for um número ou uma string numérica, false caso contrário.<br>";
        $b = 5985;
        var_dump(is_numeric($b));

        $b = "5985";
        var_dump(is_numeric($b));

        $b = "59.85" + 100;
        var_dump(is_numeric($b));

        $b = "Hello";
        var_dump(is_numeric($b));

        echo "<br><br>Às vezes, você precisa converter um valor numérico em outro tipo de dados: <br>";
        // float para inteiro
        $c = 23465.768;
        $int_cast = (int)$c;
        echo $int_cast;

        echo "<br>";

        // string para inteiro
        $c = "23465.768";
        $int_cast = (int)$c;
        echo $int_cast;
    ?>
</body>
</html>