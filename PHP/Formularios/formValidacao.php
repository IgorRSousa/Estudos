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
        $nomeErro = $emailErro = $generoErro = "";
        $nome = $email = $genero = $comentarios = $webSite = "";
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            if(empty($_POST["nome"])){
                $nomeErro = "Campo Nome é Obrigatorio!";
            }else{
                if(!preg_match("/^[a-zA-Z-' ]*$/", $nome)){
                    $nomeErro = "Somente letras e espaços em branco são permitidos!";
                }else{
                    $nome = teste_input($_POST["nome"]);
                }
                
            }

            if(empty($_POST["email"])){
                $emailErro = "Campo E-mail é Obrigatorio!";
            }else{
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $emailErro = "Formato de email inválido!";
                }
                    $email = teste_input($_POST["email"]);
            }

            if(empty($_POST["genero"])){
                $generoErro = "Campo Genero é Obrigatorio!";
            }else{
                if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$webSite)){
                    $generoErro = "URL inválida";
                }
                
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
        Nome: <input type="text" name="nome">
        <span class="erro">* <?php echo $nomeErro; ?></span><br><br>
        
        E-mail: <input type="text" name="email">
        <span class="erro">* <?php echo $emailErro; ?></span><br><br>
        
        Site: <input type="text" name="webSite"><br><br>
        
        Comentarios: <textarea name="comentarios" rows="5" cols="40"></textarea> <br><br>
        
        Genero: 
        <input type="radio" name="genero" value="feminino"> Feminino
        <input type="radio" name="genero" value="masculino"> Masculino 
        <input type="radio" name="genero" value="outro"> Outro 
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