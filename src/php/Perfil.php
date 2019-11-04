<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/MultiDropdown.css"> 
    <link rel="stylesheet" href="../style/MeuStyle.css"> 
    <link rel="icon" href="../img/Kt.png">
    <title>Perfil</title>
</head>
<body>
    <?php
        require 'config.php';
        require 'conexao.php';
        require 'database.php';
        session_start();
        $endereco = DBRead('endereco',"WHERE id_cliente = {$_SESSION['user'][0]['Id_cliente']}");
    ?>
    <nav class="navbar navbar-expand-lg navbar-light" id="navbarSKT">
            <a class="navbar-brand" href="MainPage.html" style="font-size: 40px;">
                <img src="../img/Kt.png"  width="50" height="50" class="d-inline-block-top mr-2" id="logo">KabumTega
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarKT">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarKT" >
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="DropdownComputadores" role="button" data-toggle="dropdown" href="#">Computadores</a>
                        <ul class="dropdown-menu multi-column columns-2" aria-labelledby="DropdownComputadores" style="background-color:#ff9b21;">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="multi-column-dropdown">
                                        <li><a href="#">Placa de video</a></li>
                                        <li><a href="#">Placa Mãe</a></li>
                                        <li><a href="#">Processadores</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="multi-column-dropdown">
                                        <li><a href="#">Gabinete</a></li>
                                        <li><a href="#">Cooler</a></li>
                                        <li><a href="#">LED</a></li>
                                    </ul>
                                </div>
                            </div>                  
                        </ul>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Smartphones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Periféricos</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <?php
                            if(isset($_SESSION['user'])){
                                echo '<a class='."nav-link".'href="">'.$_SESSION['user'][0]['Nome'].'</a>';
                            } else {
                                echo '<a class="nav-link" href="">Login/Register</a>';
                            }  
                        ?>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="searchContainer">
                <div class="container">
                    <form class="ml-4 mr-4 my-auto d-inline w-100">
                        <div class="input-group">
                            <input type="text" class="form-control border-right-0" placeholder="Buscar"> 
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary border-left-0" type="button" id="btnSearch">IR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <div class="barra1"></div>
        <div class="barra2"></div>
    
    <div class="container my-3" id="test">
        <div>
            <h1>Perfil:</h1>
            <p class="lead">Veja as suas informações</p>
            <div>
                <div class="row">
                    <div class="col-10">
                        <h3>Foto: </h3>
                    </div>
                    <div class="col-2">
                        <?php echo '<img width="30" height = "30" src="uploadsFiles/'.$_SESSION['user'][0]['Foto'].'">' ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <h3>Email: </h3>
                    </div>
                    <div class="col-2">
                        <h4><?php echo $_SESSION['user'][0]['Email'] ?></h4>
                    </div>
                </div>
                <div id="campo" class="row">
                    <div class="col-10">
                        <h3>Nome: </h3>
                    </div>
                    <div class="col-2">
                        <h4><?php echo $_SESSION['user'][0]['Nome'] ?></h4>
                    </div>
                </div>
                <div id="campo" class="row">
                    <div class="col-10">
                        <h3>CPF: </h3>
                    </div>
                    <div class="col-2">
                        <h4><?php echo $_SESSION['user'][0]['CPF'] ?></h4>
                    </div>
                </div>
                <div id="campo" class="row">
                    <div class="col-10">
                        <h3>Idade: </h3>
                    </div>
                    <div class="col-2">
                        <h4><?php echo $_SESSION['user'][0]['Idade'] ?></h4>
                    </div>
                </div>
                <div id="campo" class="row">
                    <div class="col-10">
                        <h3>Data de nascimento: </h3>
                    </div>
                    <div class="col-2">
                        <h4><?php echo $_SESSION['user'][0]['DataDeNascimento'] ?></h4>
                    </div>
                </div>
            </div>
            <div id="campo" class="row">
                <div class="col-10">
                    <h3>Endreço: </h3>
                </div>
                <div class="col-2">
                    <h4><?php echo $endereco[0]['Endereco'] ?></h4>
                </div>
            </div>
            <div id="campo" class="row">
                <div class="col-10">
                    <h3>Cidade: </h3>
                </div>
                <div class="col-2">
                    <h4><?php echo $endereco[0]['Cidade'] ?></h4>
                </div>
            </div>
            <div id="campo" class="row">
                <div class="col-10">
                    <h3>Estado: </h3>
                </div>
                <div class="col-2">
                    <h4><?php echo $endereco[0]['Estado']?></h4>
                </div>
            </div>
            <div id="campo" class="row">
                <div class="col-10">
                    <h3>CEP: </h3>
                </div>
                <div class="col-2">
                    <h4><?php echo $endereco[0]['CEP']?></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <div class="row">
            <div class="col">
            <form action="deleteCliente.php">
                <button type="sumbit" class="btn btn-danger btn-lg btn-block">Deletar</button>
            </form>
                
            </div>
            <div class="col">
                <form action="">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Atualizar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>