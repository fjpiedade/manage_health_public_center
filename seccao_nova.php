<?php

session_start();
date_default_timezone_set("Europe/London");

//include_once '../app-config.php';
require_once "app_conect.php";

function __autoload($nome_classe) {
    require_once 'Classes/' . $nome_classe . '.class.php';
}

if (isset($_POST['btngravar'])) {

    if (isset($_POST['nome']) && isset($_POST['departamento'])) {

        //nome, sigla, fundacao,lema,enderenco,telefone,email,website, logotipo, criado_por, abreviacao
        $seccao = new Seccao();
        //$candidato = Candidato::findById($db, $_POST['cod_candidato']);
        $db = testdb_connect();

        //iddepartamento, descricao,sigla,datacriacao,idutilizador

        $descricao = $_POST['nome'];
        $iddepartamento = (int) $_POST['departamento'];
        //$fundacao= $_POST['fundacao'];
        //$telefone= $_POST['telefone'];
        //$email= $_POST['email'];
        $datacriacao = date('Y-m-d');

        $utilizador = new Utilizador();
        $utilizador = unserialize($_SESSION['user']);
        $idutilizador = $utilizador->getIdutilizador();

        $seccao->setDescricao($descricao);
        $seccao->setIddepartamento($iddepartamento);
        $seccao->setDatacriacao($datacriacao);
        $seccao->setIdutilizador($idutilizador);
        $seccao->insertIntoDatabase($db);

        header("Location: index.php?" . md5('pagina seccao'));
    } else {
        //sem post... msg faca o seu login para entrar no sistema.
        echo "sem post algum";
    }
}
?>