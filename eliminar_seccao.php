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
if (isset($_GET['idseccao'])) {
    $seccao = new Seccao();
    $seccao = Seccao::findById($db, $_GET['idseccao']);
    if (!empty($seccao)) {
        $seccao->deleteFromDatabase($db);
        header('Location: index.php?' . md5('pagina seccao'));
        exit();
    }
 else {
        echo 'empty';
    }
}  else {
    echo 'isset';
}
?>
