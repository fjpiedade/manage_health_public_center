<?php

session_start();

function __autoload($nome_classe) {
    require_once 'Classes/' . $nome_classe . '.class.php';
}

require_once "app_conect.php";
include_once 'app_config.php';

if (isset($_POST['btntransferir'])) {
    if (isset($_GET['id_funcionario'])) {
        $db = testdb_connect();
        $funcionario = new Funcionario();
        $funcionario = Funcionario::findById($db, $_GET['id_funcionario']);
        if (!empty($funcionario)) {
            $new_departamento = $_POST["departamento_dest"];
            $dataalterarcao = date('Y-m-d');
            $funcionario->setIddepartamento($new_departamento);
            $funcionario->updateToDatabase($db);
            header("Location: index.php?" . md5('pagina trans'));
            exit();
        }
    } else {
        echo 'empty';
    }
} else {
    echo 'isset';
}
