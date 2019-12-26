<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../style/MultiDropdown.css"> 
    <link rel="stylesheet" href="../style/MeuStyle.css">
    <link rel="stylesheet" href="../style/mainpage.css">
    <link rel="icon" href="../img/Kt.png">
    <title>KabumTri</title>
</head>
<body>
    <?php
        session_start();
        require 'config.php';
        require 'conexao.php';
        require 'database.php';
    ?>
    <nav class="navbar navbar-expand-lg navbar-light" id="navbarSKT">
            <a class="navbar-brand" href="MainPage.html" style="font-size: 40px;">
                <img src="../img/kticon_yoA_2.ico"  width="50" height="50" class="d-inline-block-top mr-2" id="logo">KabumTri
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarKT">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarKT" >
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a  class="nav-link dropdown-toggle" id="DropdownComputadores" role="button" data-toggle="dropdown" href="#">Computadores</a>
                        <ul class="dropdown-menu multi-column columns-2" aria-labelledby="DropdownComputadores" style="background-color:#ff9b21;">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="multi-column-dropdown">
                                    <li><a href="Produtos.php?type=Placadevideo">Placa de video</a></li>
                                    <li><a href="Produtos.php?type=Placamae">Placa Mãe</a></li>
                                    <li><a href="Produtos.php?type=Processador">Processadores</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="multi-column-dropdown">
                                    <li><a href="Produtos.php?type=Gabinete">Gabinete</a></li>
                                    <li><a href="Produtos.php?type=Cooler">Cooler</a></li>
                                    <li><a href="Produtos.php?type=Led">LED</a></li>
                                </ul>
                            </div>
                        </div>                  
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Produtos.php?type=Smartphones">Smartphones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Produtos.php?type=Periferico">Periféricos</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="">Login/Register</a>
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
    
    <div class="container">
        <div class="recomendTitle">
            <a class="recomendados">
                <?php
                    $category = '';
                    switch($_GET['type']){
                        case 'Placadevideo': echo('Placas de Vídeo'); $category = 'Placadevideo';
                        break;
                        case 'Placamae': echo('Placas mãe'); $category = 'Placamae';
                        break;
                        case 'Processador': echo('Processadores'); $category = 'Processador';
                        break;
                        case 'Gabinete': echo('Gabinetes'); $category = 'Gabinete';
                        break;
                        case 'Cooler': echo('Coolers'); $category = 'Cooler';
                        break;
                        case 'Led': echo('LEDs'); $category = 'Led';
                        break;
                        case 'Periferico': echo('Periféricos'); $category = 'Periferico';
                        break;
                        case 'Smartphones': echo('Smartphones'); $category = 'Smartphones';
                        break;
                    } 
                ?>
            </a>
        </div>
        <!-- Bootstrap Cards for good -->
        <?php $product = DBread('Produto', "WHERE Categoria = '$category'"); $i = 0; while($i < sizeof($product)) : ?>
        
        <div class="card-deck">
            <?php while($i < sizeof($product)) : ?>
            <div class="barra1" style="margin-top: 10px; margin-bottom: 10px;"></div>
            <?php if($product[$i]['Quantidade'] > 0) : ?>
            <div class="card">
                <img src="../img/<?= $product[$i]['Imagem']; ?>" class="card-img-top" alt="<?= $product[$i]['Titulo']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $product[$i]['Titulo']; ?></h5>
                    <p class="card-text"><?= $product[$i]['Descricao']; ?></p>
                    <p class="card-text quantidade"><?= $product[$i]['Quantidade'];?></p>
                    <p class="card-text">Preço: R$<?= $product[$i]['Preco']; $i++;?></p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
            
            <?php else : ?>
            <div class="card">
                <img src="../img/<?= $product[$i]['Imagem']; ?>" class="card-img-top" alt="<?= $product[$i]['Titulo']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $product[$i]['Titulo']; ?></h5>
                    <p class="card-text"><?= $product[$i]['Descricao']; ?></p>
                    <p class="card-text quantidade"><?= $product[$i]['Quantidade'];?></p>
                    <p class="card-text">Preço: R$<?= $product[$i]['Preco']; $i++;?></p>
                    <a href="#" class="btn btn-primary disabled" aria-disabled="true">Fora de Estoque</a>
                </div>
            </div>
            <?php endif;?>
            <?php if(($i % 3) == 0){break;}?>
            <?php endwhile; ?>
        </div>
        <br>
        <?php endwhile; ?>
    </div>
    <div class="barra1" style="margin-top: 10vh"></div>
    <div class="espaco"></div>
    <div class="barra2"></div>
    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script> 
</body>
</html>
