<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/mainpage.css">
    <link rel="stylesheet" href="../style/MultiDropdown.css"> 
    <link rel="stylesheet" href="../style/MeuStyle.css"> 
    <link rel="icon" href="../img/Kt.png">
    <title>KabumTri</title>
    <?php session_start(); ?>
</head>
<body>
  <!-- NavBar -->
  <nav class="navbar navbar-expand-lg navbar-light" id="navbarSKT">
        <a class="navbar-brand" href="MainPage.html" style="font-size: 40px;">
            <img src="../img/Kt.png"  width="50" height="50" class="d-inline-block-top mr-2" id="logo">KabumTri
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
                    <?php if(isset($_SESSION['user'])) : ?>
                        <a class="nav-link" href="Perfil.php"><?= $_SESSION['user'][0]['Nome']?> </a>
                    <?php else : ?>
                        <a class="nav-link" href="LoginECadastro.html">Login/Register</a>
                    <?php endif;?>
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

    <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/2080ti.png" class="ImageCarousel d-block w-100" alt="carouselRTX">
            </div>
            <div class="carousel-item">
                <img src="../img/HyperX-Cloud-Revolver-S-0.jpg" class="ImageCarousel d-block w-100" alt="carouselRevolver">
            </div>
            <div class="carousel-item">
                <img src="../img/07-intel.jpg" class="ImageCarousel d-block w-100" alt="carouselINOVE">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="barra2"></div>
    <div class="espaco"></div>
    <div class="barra1"></div>
    <div class="container">
        <div class="recomendTitle"><a class="recomendados">Recomendados</a></div>
        <div class="card-deck">
            <div class="card">
                <img src="../img/2080ti.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">NVIDIA RTX 2080 TI</h5>
                    <p class="card-text">Essa é a placa de vídeo mais avançada já feita, possuí um poder de processamento de outro planeta! Além, é claro, da tecnologia RAY TRACING.</p>
                    <a href="#" class="btn btn-primary">TENHO INTERESSE!</a>
                </div>
            </div>
            <div class="card">
                <img src="../img/HyperX-Cloud-Revolver-S-0.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">HyperX Cloud Revolver S</h5>
                    <p class="card-text">Uma das maiores marcas do mercado inovando novamente e superando espectativas com o novo Cloud Revolver S da HyperX!</p>
                    <a href="#" class="btn btn-primary">TENHO INTERESSE!</a>
                </div>
            </div>
            <div class="card">
                <img src="../img/I9K.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">I9-9900K Skylake</h5>
                    <p class="card-text">Experimente o que é poder de processamento com a nova linha de processadores I9 da 9ª geração. Diga adeus aos gargalos!</p>
                    <a href="#" class="btn btn-primary">TENHO INTERESSE!</a>
                </div>
            </div>
        </div>
    </div>
    <div class="barra1" style="margin-top: 10vh"></div>
    <div class="espaco"></div>
    <div class="barra2"></div>

    
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
