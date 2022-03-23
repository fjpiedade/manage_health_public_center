
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
if (isset($_GET['iddocumento'])) {
    $documento = new Documento();
    $documento = Documento::findById($db, $_GET['iddocumento']);
    if (!empty($documento)) {
        unlink('uploads/documentos/'.$documento->getCaminho());
        $documento->deleteFromDatabase($db);
        header("Location: index.php?" . md5('pagina perfil funcionario') . "&idrecebe=" . $_GET['idfuncionario']);
        exit();
    }
 else {
        echo 'empty';
    }
}  else {
    echo 'isset';
}



