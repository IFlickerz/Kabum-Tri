<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LogarTest</title>
</head>
<body>
    <?php
        session_start();
        require 'config.php';
        require 'conexao.php';
        require 'database.php';
       
        $usuario =  DBRead('cliente',"WHERE email = '{$_POST['loginEmail']}' AND senha = '{$_POST['loginSenha']}'");

        if(!$usuario){
            echo "<h1>Usuário não encontrado tente novamente</h1>";
        } else {
            $_SESSION['user'] = $usuario;
            header('Location:Perfil.php');
        }
    ?>
</body>
</html>