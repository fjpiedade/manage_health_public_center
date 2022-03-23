<?php
    $app_nome = 'Gestão de Saúde Pública v.1';
    $app_legal = '&copy; GSP - 2013 - Software';
    try{
        $db = new PDO('mysql:host=localhost;dbname=gsp', 'root', '', array(PDO::ATTR_PERSISTENT => true));
    }catch(PDOException $e){
        echo '<p><center class="error">NAO FOI POSSIVEL CONECTAR AO SERVIDOR</center></p>';
    }
    ob_start();
    //error_reporting(E_ALL & ~(E_NOTICE|E_WARNING));
?>