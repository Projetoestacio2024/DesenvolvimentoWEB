<?php

//verifica o login na sessão
session_start();
if((isset($_SESSION['login']) == false)) 
{
    unset($_SESSION['login']);
    header('location:../login.php#paralogin');
}
// ler o login da sessão
$logado = $_SESSION['login'];

?>