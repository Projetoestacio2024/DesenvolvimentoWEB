<?php 

include 'conexao.php';
include 'sessao.php';

//ler os dados do formulário
$nome_cad = $_POST['nome_cad'];
$cpf_cad = $_POST['cpf_cad'];
$nasc_cad = $_POST['nasc_cad'];
$email_cad = $_POST['email_cad'];
$senha_cad = $_POST['senha_cad'];
$tel_cad = $_POST['tel_cad'];
$estado_cad = $_POST['estado_cad'];
$bairro_cad = $_POST['bairro_cad'];
$rua_cad = $_POST['rua_cad'];
$num_cad = $_POST['num_cad'];
$comp_cad = $_POST['comp_cad'];

// Definindo o comando SQL para inserir
$sql = "insert into tb_usuario(nome_cad, cpf_cad, nasc_cad, email_cad, senha_cad, tel_cad, estado_cad, bairro_cad, rua_cad, num_cad, comp_cad)
values('$nome_cad', '$cpf_cad', '$nasc_cad', '$email_cad', '$senha_cad', '$tel_cad', '$estado_cad', '$bairro_cad', '$rua_cad', '$num_cad', '$comp_cad') ";
$count = $con->exec($sql);
?>