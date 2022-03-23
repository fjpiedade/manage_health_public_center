
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
if (isset($_GET['idefectividade'])) {
    $efectividade = new Efectividade();
    $efectividade = Efectividade::findById($db, $_GET['idefectividade']);
    if (!empty($efectividade)) {
        unlink('uploads/efectividades/'.$efectividade->getFicheiro());
        $efectividade_funcionario = new EfectividadeFuncionario();
        $efectividade_funcionario=  $db->query("DELECT funcionario WHERE idefectividade= ".$_GET['idefectividade']);
        $efectividade->deleteFromDatabase($db);
        header("Location: index.php?" . md5('pagina efect'));
        exit();
    }
 else {
        echo 'empty';
    }
}  else {
    echo 'isset';
}
