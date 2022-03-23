<?php

session_start();
date_default_timezone_set("Europe/London");
//include_once '../app-config.php';
require_once "app_conect.php";

function __autoload($nome_classe) {
    require_once 'Classes/' . $nome_classe . '.class.php';
}

if (isset($_POST['btngravar'])) {        
        $ano = $_POST['ano'];
        $mes = $_POST['mes'];
        $datacriacao = date('Y-m-d');
        $pasta = 'uploads/efectividades/';
        $permition = array('image/zip', 'image/pdf', 'image/doc', 'image/png', 'image/jpg', 'image/btm');
        $ficheiro = $_FILES["documento"];
        $tmp_name = $ficheiro["tmp_name"];
        $nome = date('His') . '_' . date('Ymd') . '_' . $ficheiro["name"];
        $type = $ficheiro["type"];

        $upload_Mat = $pasta . basename($nome);

        if (move_uploaded_file($tmp_name, $upload_Mat)) {
            
            //move_uploaded_file($_FILES['documento']['tmp_name'], $_UP['pasta'] . $nome_final);
            
            $utilizador = new Utilizador();
            $utilizador = unserialize($_SESSION['user']);
            $idutilizador = $utilizador->getIdutilizador();
            
            $db = testdb_connect();
            
            $efectividade = new Efectividade();
            $efectividade->setAno($ano);
            $efectividade->setMes($mes);
            $efectividade->setFicheiro($nome);
            $efectividade->setDatacriacao($datacriacao);
            $efectividade->setIdutilizador($idutilizador);
            $efectividade->insertIntoDatabase($db);
            
            echo"Upload feito com sucesso do Arquivo " . $nome;
            header("Location: index.php?" . md5('pagina efect'));
        } else {
            echo"Não Foi Ppossivel Fazer o Upload do ficheiro " . $nome;
        }
    } else {
        //sem post... msg faca o seu login para entrar no sistema.
        echo "sem post algum";
    }