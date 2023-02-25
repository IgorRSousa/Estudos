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
    $string = "Ola mundo";
    //A função PHP strlen()retorna o comprimento de uma string.
    echo strlen($string);
    echo "<br>";
    //A função PHP str_word_count() conta o número de palavras em uma string.
    echo str_word_count($string);
    echo "<br>";

    //A função PHP strrev()inverte uma string.
    echo strrev($string);
    echo "<br>";

    //A função PHP strpos()procura por um texto específico dentro de uma string e a posicao de inicio 
    echo strpos($string, "mundo");
    echo "<br>";

    //A str_replace()função PHP substitui alguns caracteres por alguns outros caracteres em uma string.
    echo str_replace("mundo", "piranha",$string);
    echo "<br>";

    ?>
</body>
</html>