<?php
session_start();
date_default_timezone_set("Europe/London");

//include_once '../app-config.php';
require_once "app_conect.php";

function __autoload($nome_classe) {
    require_once 'Classes/' . $nome_classe . '.class.php';
}

if (isset($_POST['btngravar'])) {

    if (isset($_POST['nome']) && isset($_POST['salario'])) {

        //nome, sigla, fundacao,lema,enderenco,telefone,email,website, logotipo, criado_por, abreviacao
        $categoria = new Categoria();
        //$candidato = Candidato::findById($db, $_POST['cod_candidato']);
        $db = testdb_connect();

        //iddepartamento, descricao,sigla,datacriacao,idutilizador

        $descricao = $_POST['nome'];
        $salariomes = (double)$_POST['salario'];
        //$fundacao= $_POST['fundacao'];
        //$telefone= $_POST['telefone'];
        //$email= $_POST['email'];
        $datacriacao = date('Y-m-d');
        $idutilizador = 1;

        $categoria->setDescricao($descricao);
        $categoria->setSalariomes($salariomes);
        $categoria->setIdutilizador($idutilizador);
         
        $categoria->insertIntoDatabase($db);

        header("Location: index.php?" . md5('pagina categoria'));
    } else {
        //sem post... msg faca o seu login para entrar no sistema.
        echo "sem post algum";
    }
}
?>
