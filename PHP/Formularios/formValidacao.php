<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formValidacao</title>
    <style>
        .erro{color: red}
    </style>
</head>
<body>
    <?php
        // Iniciar todas as variaveis vazias 
        $nomeErro = $emailErro = $generoErro = $webSiteErro =  "";
        $nome = $email = $genero = $comentarios = $webSite = "";
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            if(empty($_POST["nome"])){
                $nomeErro = "Campo Nome é Obrigatorio!";
            }else{
                $nome = teste_input($_POST["nome"]);
                if(!preg_match("/^[a-zA-Z-' ]*$/", $nome)){
                    $nomeErro = "Somente letras e espaços em branco são permitidos!";
                }
            }
            if(empty($_POST["email"])){
                $emailErro = "Campo E-mail é Obrigatorio!";
            }else{
                $email = teste_input($_POST["email"]);
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $emailErro = "Formato de email inválido!";
                }    
            }

            if(empty($_POST["genero"])){
                $generoErro = "Campo Genero é Obrigatorio!";
            }else{
                $genero = teste_input($_POST["genero"]);
            }

            if(empty($_POST["comentarios"])){
                $comentarios = "";
            }else{
                $comentarios = teste_input($_POST["comentarios"]);
            }

            if(empty($_POST["webSite"])){
                $webSite = "";
            }else{
                $webSite = teste_input($_POST["webSite"]);
                if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$webSite)){
                    $webSiteErro = "URL inválida";
                }
            }

        }

        function teste_input($dado){
            $dado = trim($dado);
            $dado = stripslashes($dado);
            $dado = htmlspecialchars($dado);
            return $dado;
        }
    ?>
    <h2>Exemplo de Formulario em PHP</h2>
    <p class="erro"><span>* São campos obrigatorios</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        
        Nome: <input type="text" name="nome" value="<?php echo $nome?>">
        <span class="erro">* <?php echo $nomeErro; ?></span><br><br>
        
        E-mail: <input type="text" name="email" value="<?php echo $email?>">
        <span class="erro">* <?php echo $emailErro; ?></span><br><br>
        
        Site: <input type="text" name="webSite" value="<?php echo $webSite?>">
        <span class="erro">* <?php echo $webSiteErro; ?></span><br><br>
        
        Comentarios: <textarea name="comentarios" rows="5" cols="40"><?php echo $comentarios?></textarea> <br><br>
        
        Genero: 
        <input type="radio" name="genero" <?php if(isset($genero) && $genero == "feminino") echo "checked"?> value="feminino"> Feminino
        <input type="radio" name="genero" <?php if(isset($genero) && $genero == "masculino") echo "checked"?> value="masculino"> Masculino 
        <input type="radio" name="genero" <?php if(isset($genero) && $genero == "outro") echo "checked"?> value="outro"> Outro 
        <span class="erro">* <?php echo $generoErro; ?></span><br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>

    
    <?php
    echo "<h2>Seus Inputs:</h2>";
    echo $nome;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $genero;
    echo "<br>";
    echo $comentarios;
    echo "<br>";
    echo $webSite;
    echo "<br>";
    ?>
</body>
</html>