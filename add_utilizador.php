<?php

session_start();

function __autoload($nome_class) {
    require_once 'Classes/' . $nome_class . '.class.php';
}

include_once 'app_config.php';

if (isset($_POST['gravar'])) {
    try {
        $utilizador = new Utilizador();
        $utilizador->setUsername(utf8_encode($_POST['nome']));
        $utilizador->setPassword(md5($_POST['senha']));
        $utilizador->setStuto(utf8_encode($_POST['estado']));
        $utilizador->insertIntoDatabase($db);
        header('Location: index.php?' . md5('pagina utilizador'));
        exit();
    } catch (Exception $e) {
        //header("Location: config.php?item=".md5('inscricao')."&ndi=".md5($_POST['ndi'])."&s=".md5('nok2'));
    }
} else {
    header('Location: index.php?' . md5('pagina utilizador novo'));
    exit();
}
?>

