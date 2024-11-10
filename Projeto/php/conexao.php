<?php

// Banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "db_usuario";

// Cria a conexão
$con = new mysqli($servidor, $usuario, $senha, $dbname);

// Tentar a execução dos comandos
try 
{ 
    // Criar Conexão Com Host 
    $con = new PDO("mysql:host=$servidor;dbname=db_usuario", $usuario, $senha);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $e) 
{
    //echo "Erro na conexão: " . $e->getMessage();
}
?>