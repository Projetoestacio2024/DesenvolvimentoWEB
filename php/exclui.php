<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}

include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        // Prepara a query de exclusão
        $sql = "DELETE FROM tb_usuario WHERE id = :id";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        if ($stmt->rowCount()) 
        {
            echo "<script>        
            window.alert('Registro deletado com sucesso!');
            </script>";

            // Dedireciona após 5 segundos
            header("Refresh: 1;url=../deleta.php");
        } 
        else 
        {
            echo "<script>        
            window.alert('Erro ao deletar o registro!');
            </script>";
            
            // Dedireciona após 5 segundos
            header("Refresh: 1;url=../deleta.php");
        }

    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
} else {
    echo "<script>        
    window.alert('ID não fornecido!');
    </script>";

    // Dedireciona após 5 segundos
    header("Refresh: 1;url=../deleta.php");
}
?>