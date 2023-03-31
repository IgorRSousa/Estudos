<?php

    require_once "vendor/autoload.php";

    use Pasta\Recursos\Curso;

    $recurso = new Curso();
    $soma = new Igor\Math();
    $a = $soma->somar(10,20);
    echo $a;
    $recurso->ola();
    
?>