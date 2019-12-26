<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login e atualizar</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../style/MultiDropdown.css"> 
    <link rel="stylesheet" href="../style/MeuStyle.css">
    <link rel="icon" href="../img/Kt.png">
</head>
<body id="pageatualizar">
    <?php
        session_start();
        require 'config.php';
        require 'conexao.php';
        require 'database.php';   
        $endereco = DBRead('endereco',"WHERE id_cliente = {$_SESSION['user'][0]['Id_cliente']}");
    ?>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-light" id="navbarSKT">
        <a class="navbar-brand" href="MainPage.php" style="font-size: 40px;">
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
                        <a class="nav-link" href="LoginECadstro.html">Login/Register</a>
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
    <div class="barra2"></div> <!-- Fim da NavBar -->
    
    <!-- Formulário -->
    <div class="container my-5" id="test">    
            <div>
                <h1>Atulizar!!</h1>
                <p class="lead">Mude os campos que você desseja atualizar</p>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                        
                        <div class="form-group col-6">
                            <label for="inputEmail">Digite seu email:</label>
                            <input name="atualizarEmail" type="text" class="form-control" id="inputEmail" value=<?= $_SESSION['user'][0]['Email'] ?>>
                        </div>
                        <div class="form-group col-6">
                            <label for="inputNome">Digite seu nome:</label>
                            <input name="atualizarNome" type="text" class="form-control" id="inputNome" value=<?= $_SESSION['user'][0]['Nome'] ?>>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="inputSenha">Senha:</label>
                            <input name="atualizarSenha" type="password" class="form-control" id="inputSenha" value=<?= $_SESSION['user'][0]['Senha'] ?>>
                        </div>
                        <div class="form-group col-6">
                            <label for="inputSenha">Idade:</label>
                            <input name="atualizarIdade" type="number" class="form-control" id="inputSenha" value=<?= $_SESSION['user'][0]['Idade'] ?>>
                        </div>
                    </div>
                    <div class="form-row">
                            <div class="form-group col-4">
                                    <label for="inputCPF">CPF:</label>
                                    <input name="atualizarCPF" type="number" class="form-control" id="inputCPF" value=<?= $_SESSION['user'][0]['CPF']?> >
                            </div>
                            <div class="form-group col-4">
                                <label for="inputRG">RG:</label>
                                <input name="atualizarRG" type="number" class="form-control" id="inputRG" value=<?= $_SESSION['user'][0]['RG']?>>
                            </div>
                          
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="endereco">Endereço</label>
                            <input type="text" class="form-control" id="endereco" name="atualizarEndereco" value="<?= $endereco[0]['Endereco']?>">
                        </div>
                        <div class="form-group col">
                            <label for="cidade">Cidade</label>
                            <input type="text" class="form-control" id="cidade" name="atualizarCidade" value="<?= $endereco[0]['Cidade']?>">
                        </div>
                        <div class="form-group col">
                            <label for="estado">Estado</label>
                            <select name="atualizarEstado" class="form-control" value="<?= $endereco[0]['Estado']?>" >
                                    <option>RS</option>
                                    <option>SC</option>
                                    <option>PR</option>
                                    <option>SP</option>
                                    <option>RJ</option>
                                    <option>ES</option>
                                    <option>MG</option>
                                    <option>BA</option>
                                    <option>SE</option>
                                    <option>AL</option>
                                    <option>PE</option>
                                    <option>PB</option>
                                    <option>RN</option>
                                    <option>CE</option>
                                    <option>PI</option>
                                    <option>MA</option>
                                    <option>TO</option>
                                    <option>PA</option>
                                    <option>AP</option>
                                    <option>RR</option>
                                    <option>AM</option>
                                    <option>AC</option>
                                    <option>RO</option>
                                    <option>MT</option>
                                    <option>GO</option>
                                    <option>DF</option>
                                    <option>MS</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                            <div class="form-group col-4">
                                <label for="inputCPF">CEP:</label>
                                <input name="atualizarCEP" type="number" class="form-control" id="inputCEP" value="<?= $endereco[0]['CEP']?>">
                            </div>
                            <div class="form-group ">
                                <br>
                                <button type="submit" name="atualizar" class="btn btn-warning btn-lg text-light ml-2">Atualizar</button>
                            </div>
                            <div>
                                <br>
                                <a href = "Perfil.php" class="btn btn-primary btn-lg text-light ml-2">Voltar</a>
                            </div>             
                    </div>
                </form>
            </div>
        
    </div> <!-- Fim do fomulario -->

    <footer id="cadastroLogin">&copy; KambumTri</footer>

    <?php
        if(isset($_POST['atualizar'])){
            $email = isset($_POST['atualizarEmail']) ? $_POST['atualizarEmail'] : null;
            $nome = isset($_POST['atualizarNome']) ? $_POST['atualizarNome'] : null;
            $senha = isset($_POST['atualizarSenha']) ? $_POST['atualizarSenha'] : null;
            $idade = isset($_POST['atualizarIdade']) ? $_POST['atualizarIdade'] : null;
            $CPF = isset($_POST['atualizarCPF']) ? $_POST['atualizarCPF'] : null;
            $RG = isset($_POST['atualizarRG']) ? $_POST['atualizarRG'] : null;
            $ende = isset($_POST['atualizarEndereco']) ? $_POST['atualizarEndereco'] : null;
            $cidade = isset($_POST['atualizarCidade']) ? $_POST['atualizarCidade'] : null;
            $estado = isset($_POST['atualizarEstado']) ? $_POST['atualizarEstado'] : null;
            $CEP = isset($_POST['atualizarCEP']) ? $_POST['atualizarCEP'] : null;
            $foto = isset($_FILES['atualizarFoto']['name']) ? $_FILES['atualizarFoto']['name'] : null;

            $cliente = array(
                'Id_cliente' => "{$_SESSION['user'][0]['Id_cliente']}",
                'Email' => "{$email}",
                'CPF' => "{$CPF}",
                'Senha' => "{$senha}",
                'Nome' => "{$nome}",
                'RG' => "{$RG}",
                'Idade' => "{$idade}",
                'DataDeNascimento' => "{$_SESSION['user'][0]['DataDeNascimento']}",
                'Foto' => "{$_SESSION['user'][0]['Foto']}"
            );

            //var_dump($_SESSION['user'][0]);
            //Checa oq mudou
            foreach($_SESSION['user'][0] as $key => $value){
                if($value != $cliente[$key]){
                    $data[$key] = $cliente[$key];
                }
            }
            //var_dump($data);
            if(isset($data)){
                DBUpdate('cliente',$data,"Id_cliente = {$_SESSION['user'][0]['Id_cliente']}");
                $usuario =  DBRead('cliente',"WHERE Id_cliente = {$_SESSION['user'][0]['Id_cliente']}");
                $_SESSION['user'] = $usuario;
            }
            $endercoAt = array(
                'Id_endereco' => "{$endereco[0]['Id_endereco']}",
                'Estado' => "{$estado}",
                'Endereco' => "{$ende}",
                'Cidade' => "{$cidade}",
                'CEP' => "{$CEP}",
                'Id_cliente' => "{$endereco[0]['Id_cliente']}"         
            );
            
            foreach($endereco[0] as $key => $value){
                if($value != $endercoAt[$key]){
                    $dataEn[$key] = $endercoAt[$key];
                }
            }

            if(isset($dataEn)){
                DBUpdate('endereco',$dataEn,"Id_cliente = {$endereco[0]['Id_cliente']}");
            }
        }
        
        

          
    
    
    
    
    ?>

    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script> 
</body>
</html>
