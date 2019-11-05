<?php
    session_start();
    require 'config.php';
    require 'conexao.php';
    require 'database.php';
    var_dump($_GET['sair']);
    if($_GET['sair']){
        session_destroy();
    } else {
        DBDelete('cliente',"{$_SESSION['user'][0]['Id_cliente']}");   
        session_destroy(); 
    }
    header('Location:MainPage.php');
?>