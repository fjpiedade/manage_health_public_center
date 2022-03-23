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
if (isset($_GET['idfuncionario'])) {
    $funcionario = new Funcionario();
    $funcionario = Funcionario::findById($db, $_GET['idfuncionario']);
    if (!empty($funcionario)) {
        $funcionario->deleteFromDatabase($db);
        header('Location: index.php?' . md5('pagina funcionario'));
        exit();
    }
 else {
        echo 'empty';
    }
}  else {
    echo 'isset';
}
?>
