<?php

session_start();
date_default_timezone_set("Europe/London");

//include_once '../app-config.php';
require_once "app_conect.php";

function __autoload($nome_classe) {
    require_once 'Classes/' . $nome_classe . '.class.php';
}

if (isset($_POST['btngravar'])) {

    if (isset($_POST['nome']) && isset($_POST['nomepai'])) {


        $funcionario = new Funcionario();

        /*
         * idfuncionario,nome,nomepai,nomemae,genero,provincia,datanascimento,
         * estadocivil,idcategoria,
         * iddepartamento,idutilizador,telefone,endereco,email,foto,bi,banco,conta,iban
         */

        $db = testdb_connect();
        $nome = $_POST['nome'];
        $nomepai = $_POST['nomepai'];
        $nomemae = $_POST['nomemae'];
        $genero = $_POST['genero'];
        $provincia = $_POST['provincia'];

        $datanascimento = $_POST['datanascimento'];
        $estadocivil = $_POST['estadocivil'];
        $idcategoria = (int)$_POST['categoria'];
        $iddepartamento = (int)$_POST['departamento'];
        
        $utilizador = new Utilizador();
        $utilizador = unserialize($_SESSION['user']);
        $idutilizador = $utilizador->getIdutilizador();
        
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $email = $_POST['email'];
        $foto = $_POST['foto'];
        $bi = $_POST['bi'];
        $banco = $_POST['banco'];
        $conta = $_POST['conta'];
        $iban = $_POST['iban'];

        $funcionario->setNome($nome);
        $funcionario->setNomepai($nomepai);
        $funcionario->setNomemae($nomemae);
        $funcionario->setGenero($genero);
        $funcionario->setProvincia($provincia);
        $funcionario->setDatanascimento($datanascimento);
        $funcionario->setEstadocivil($estadocivil);
        $funcionario->setIdcategoria($idcategoria);
        $funcionario->setIddepartamento($iddepartamento);
        $funcionario->setIdutilizador($idutilizador);
        $funcionario->setTelefone($telefone);
        $funcionario->setEndereco($endereco);
        $funcionario->setEmail($email);
        $funcionario->setFoto($foto);
        $funcionario->setBi($bi);
        $funcionario->setBanco($banco);
        $funcionario->setConta($conta);
        $funcionario->setIban($iban);
        $funcionario->insertIntoDatabase($db);

        header("Location: index.php?" . md5('pagina funcionario novo'));
    } else {
        //sem post... msg faca o seu login para entrar no sistema.
        echo "sem post algum";
    }
}
?>
