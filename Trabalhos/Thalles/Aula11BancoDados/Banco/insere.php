<?php 

//abrir a conexão com o BD
include 'conexao.php';

//ler os dados do formulário
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$salario = $_POST['salario'];
$nascimento = $_POST['data_nasc'];

//definir o comando SQL para inserir
$sql = "insert into tbpessoa(nome, idade, salario, data_nasc)
values('$nome', $idade, $salario, '$nascimento') "; //atenção nas aspas simples e duplas
$count = $con->exec($sql); //executar o comando SQL
//
//exibir o resultado
echo "<p> $count registro foi incluído</p>";
echo "<a href='consulta.php'>Consultar dados</a>"; //link da página de consulta

?>