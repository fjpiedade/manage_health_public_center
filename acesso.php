<?php

session_start();

include_once 'app_config.php';

function __autoload($nome_classe) {
    require_once 'Classes/' . $nome_classe . '.class.php';
}
?>

<?php

if ($_POST['entrar'] == -1 || !isset($_POST['entrar'])) {
    //Redireccionar com uma mensagem de erro
    header("Location: login.php?error=1"); //NÃO HOUVE POST DE DADOS
} else {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $utilizador = new Utilizador();
        $utilizadores = Utilizador::findBySql($db, "select * from utilizador where password=md5('" . $password . "') and username='" . $username . "'");

        if (!$utilizadores) {
            header("Location: login.php?error=1"); //NÃO DADOS INVALIDOS POSTADOS
            exit();
        } else {
            foreach ($utilizadores as $utilizador) {
                break;
            }
            if ($utilizador) {
                if (strcmp($utilizador->getStuto(), "Activo")) {
                    header("Location: login.php?error=2"); //ESTADO DESATIVADO
                    exit();
                } else {
                    $_SESSION['user'] = serialize($utilizador);
                    $_SESSION['LOGIN'] = true;
                    //$consulta = $db->query("SELECT *  FROM estudante WHERE cod_utilizador=" . $utilizador->getCod());
                    header("Location: index.php");
                    exit();
                }
            }
        }
    } else {
        header("Location: login.php?error=1"); //CAMPOS VAZIOS
        exit();
    }
}