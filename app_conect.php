<?php
# pdo_testdb_connect.php - function for connecting to the "test" database

function testdb_connect() {
    $db = new PDO("mysql:host=localhost;dbname=gsp", "root", "");
    return ($db);
}
?>
