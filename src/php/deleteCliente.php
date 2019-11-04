<?php
    session_start();
    require 'config.php';
    require 'conexao.php';
    require 'database.php';   
    DBDelete('cliente',"{$_SESSION['user'][0]['Id_cliente']}");   
    session_abort();
    header('Location:MainPage.html');
?>