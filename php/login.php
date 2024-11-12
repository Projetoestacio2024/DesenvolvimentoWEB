<?php

//iniciar a sessão
session_start() ;

//abrir a conexão com o BD
include 'conexao.php';

//ler os dados do formulário
$login = $_POST['email_login'];
$senha = $_POST['senha_login'];

// Se o botão foi clicado
if(isset($_POST['btnAcessar'])) 
{
    // Executar a consulta de login
    $sql = "SELECT * FROM tb_usuario WHERE email_cad='$login' AND senha_cad='$senha'";
    
    // Se foram zero registros retornados
    if($con->query($sql)->rowCount() == 0) 
    {
        echo "<script>        
        window.alert('O login ou senha estão inválidos');
        </script>";
        
        // Desativa o login da sessão
        unset($_SESSION['login']);
        
        // Dedireciona após 5 segundos
        header("Refresh: 5; url=../index.php");
    } 
    else 
    {         
        // Armazena na sessão
        $_SESSION['login'] = $login;  

        echo "<script>        
        window.alert('Voce se conectou a sua conta');
        </script>";

        // Dedireciona após 5 segundos
        header("Refresh: 1;url=../index.php");
    }
}
?>