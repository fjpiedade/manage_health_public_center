<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
require_once "app_conect.php";

function __autoload($nome_classe) {
    require_once 'Classes/' . $nome_classe . '.class.php';
}

$db = testdb_connect();
$resposta = array();
if (isset($_GET['iddepartamento'])) {
    $departamento = new Departamento();
    $departamento = Departamento::findById($db, $_GET['iddepartamento']);
    if (!empty($departamento)) {
        $departamento->deleteFromDatabase($db);
        header('Location: index.php?' . md5('pagina departamento'));
        exit();
    }
 else {
        echo 'empty';
    }
}  else {
    echo 'isset';
}
?>


