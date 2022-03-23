<?php

session_start();
date_default_timezone_set("Europe/London");
//include_once '../app-config.php';
require_once "app_conect.php";

function __autoload($nome_classe) {
    require_once 'Classes/' . $nome_classe . '.class.php';
}

if (isset($_POST['btnprocessar'])) {
    $idefectividade=$_GET['idefectividade'];
    $ano = $_POST['ano'];
    
    $datacriacao = date('Y-m-d');
    
    $utilizador = new Utilizador();
    $utilizador = unserialize($_SESSION['user']);
    $idutilizador = $utilizador->getIdutilizador();
    
    header("Location: index.php?" . md5('pagina efect ver')."&idefectividade=".$_GET['idefectividade']);
} else {
    //sem post... msg faca o seu login para entrar no sistema.
    echo "sem post algum";
}