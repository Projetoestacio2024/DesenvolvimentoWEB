<?php

// Banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";

// Tentar a execução dos comandos
try 
{ 
    // Criar Conexão Com Host 
    $con = new PDO("mysql:host=$servidor;dbname=tb_usuarios", $usuario, $senha);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $e) 
{
    //echo "Erro na conexão: " . $e->getMessage();
}
?>