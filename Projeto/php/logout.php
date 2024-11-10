<?php
// Iniciar a sessão
session_start();

// Destruir todas as variáveis de sessão
unset($_SESSION['login']);

echo "<script>        
window.alert('Voce se desconectou da sua conta');
</script>";

// Redirecionar para a página de login ou página inicial
header('location:../index.php');
?>