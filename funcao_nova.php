<?php

session_start();
date_default_timezone_set("Europe/London");

//include_once '../app-config.php';
require_once "app_conect.php";

function __autoload($nome_classe) {
    require_once 'Classes/' . $nome_classe . '.class.php';
}

if (isset($_POST['btngravar'])) {

    if (isset($_POST['nome'])) {

        //nome, sigla, fundacao,lema,enderenco,telefone,email,website, logotipo, criado_por, abreviacao
        $funcao = new Funcao();
         
        $db = testdb_connect();
 
        $descricao = $_POST['nome'];
        $datacriacao = date('Y-m-d');
        $utilizador = new Utilizador();
        $utilizador = unserialize($_SESSION['user']);
        $idutilizador = $utilizador->getIdutilizador();

        $funcao->setDescricao($descricao);
         
        $funcao->setDatacriado($datacriacao);
        $funcao->setIdutilizador($idutilizador);
        $funcao->insertIntoDatabase($db);

        header("Location: index.php?" . md5('pagina funcao'));
    } else {
        //sem post... msg faca o seu login para entrar no sistema.
        echo "sem post algum";
    }
}
?>
