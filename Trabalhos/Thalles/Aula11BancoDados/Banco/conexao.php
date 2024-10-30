<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
try { //tentar a execução dos comandos
    $con = new PDO("mysql:host=$servidor;dbname=bdteste", $usuario, $senha);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexão OK"; //remover posteriormente
} catch (PDOException $e) {
    //echo "Erro na conexão: " . $e->getMessage();
}
?>