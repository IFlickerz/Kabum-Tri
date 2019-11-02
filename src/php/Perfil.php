<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        echo $_SESSION['user'][0]['Nome'];
    ?>
</body>
</html>