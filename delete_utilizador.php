<?php

session_start();

function __autoload($nome_class) {
    require_once 'Classes/' . $nome_class . '.class.php';
}

include_once 'app_config.php';

if (isset($_GET['id_user'])) {
    $utilizador = new Utilizador();
    $utilizador = Utilizador::findById($db, $_GET['id_user']);
    if (!empty($utilizador)) {
        $utilizador->deleteFromDatabase($db);
        header('Location: index.php?' . md5('pagina utilizador'));
        exit();
    }
 else {
        echo 'empty';
    }
}  else {
    echo 'isset';
}
?>


