<?php
        require 'config.php';
        require 'conexao.php';
        require 'database.php';

        // Atributos      
        $email = isset($_POST['cadastroEmail']) ? $_POST['cadastroEmail'] : null;
        $nome = isset($_POST['cadastroNome']) ? $_POST['cadastroNome'] : null;
        $senha = isset($_POST['cadastroSenha']) ? $_POST['cadastroSenha'] : null;
        $dia = isset($_POST['cadastroDia']) ?(int) $_POST['cadastroDia'] : null;
        $mes = isset($_POST['cadastroMes']) ? $_POST['cadastroMes'] : null;
        $ano = isset($_POST['cadastroAno']) ? (int)$_POST['cadastroAno'] : null;
        $idade = calcularIdade($dia, $mes , $ano);
        $CPF = isset($_POST['cadastroCPF']) ? $_POST['cadastroCPF'] : null;
        $RG = isset($_POST['cadastroRG']) ? $_POST['cadastroRG'] : null;
        $endereco = isset($_POST['cadastroEndereco']) ? $_POST['cadastroEndereco'] : null;
        $cidade = isset($_POST['cadastroCidade']) ? $_POST['cadastroCidade'] : null;
        $estado = isset($_POST['cadastroEstado']) ? $_POST['cadastroEstado'] : null;
        $CEP = isset($_POST['cadastroCEP']) ? $_POST['cadastroCEP'] : null;
        $foto = isset($_FILES['cadastroFoto']['name']) ? $_POST['cadastroFoto']['name'] : null;
        $dataDeNascimento = "{$dia}/{$mes}/${ano}";
        
     

        function calcularIdade( $dia, $mes, $ano){
            $data = date("d/m/Y");
            $idade;
            list($day, $month, $year) = explode("/", $data);

            $day = (int) $day;
            $month = (int) $month;
            $year = (int) $year;

            switch ($mes) {
                case 'Janeiro':
                    $mes = 1;
                    break;
                case 'Fevereiro':
                    $mes = 2;
                    break;
                case 'Março':
                    $mes = 3;
                    break;
                case 'Abril':
                    $mes = 4;
                    break;
                case 'Maio':
                    $mes = 5;
                    break;
                case 'Junho':
                    $mes = 6;
                    break;
                case 'Julho':
                    $mes = 7;
                    break;
                case 'Agosto':
                    $mes = 8;
                    break;
                case 'Setembro':
                    $mes = 9;
                case 'Outubro':
                    $mes = 10;
                    break;
                case 'Novembro':
                    $mes = 11;
                    break;
                case 'Dezembro':
                    $mes = 12;
                    break;
            }

            if($mes < $month){
                $idade = $year - $ano;
            } elseif ($mes == $month && $dia < $day){
                $idade = $year - $ano;
            } else {
                $idade = ($year - $ano) -1; 
            }
            return $idade;
        }

        $cliente = array(
            'email' => "{$email}",
            'cpf' => "{$CPF}",
            'senha' => "{$senha}",
            'nome' => "{$nome}",
            'rg' => "{$RG}",
            'idade' => "{$idade}",
            'datadenascimento' => "{$dataDeNascimento}",
            'foto' => "{$foto}"
        );

        $idCliente = DBCreate('cliente',$cliente, true);

        $endereco = array(
            'estado' => "{$estado}",
            'endereco' => "{$endereco}",
            'cidade' => "{$cidade}",
            'cep' => "{$CEP}",
            'id_cliente' => "{$idCliente}"
        );

       DBCreate('endereco',$endereco);
        header('Location:MainPage.html');   
?>




