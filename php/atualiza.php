<?php
    // Seção
    session_start();

    // Incluindo a conexão com o banco de dados
    include 'conexao.php'; 

    // Verifica se o usuário está logado
    if (!isset($_SESSION['login'])) {
        header("Location: login.php");
        exit();
    }

    // Verifica se os dados do formulário foram enviados via POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Obtém os dados enviados do formulário
        $id = $_POST['id'];
        $nome = $_POST['nome_cad'];
        $email = $_POST['email_cad'];
        $nasc = $_POST['nasc_cad'];
        $cpf = $_POST['cpf_cad'];
        $tel = $_POST['tel_cad'];
        $estado = $_POST['estado_cad'];
        $bairro = $_POST['bairro_cad'];
        $rua = $_POST['rua_cad'];
        $num = $_POST['num_cad'];

        try {
            // Preparar a query para atualizar os dados
            $sql = "UPDATE tb_usuario SET 
                        nome_cad = :nome, 
                        email_cad = :email, 
                        nasc_cad = :nasc, 
                        cpf_cad = :cpf, 
                        tel_cad = :tel, 
                        estado_cad = :estado, 
                        bairro_cad = :bairro, 
                        rua_cad = :rua,
                        num_cad = :num
                    WHERE id = :id";

            // Preparando a execução da query
            $stmt = $con->prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':nasc', $nasc);
            $stmt->bindParam(':cpf', $cpf);
            $stmt->bindParam(':tel', $tel);
            $stmt->bindParam(':estado', $estado);
            $stmt->bindParam(':bairro', $bairro);
            $stmt->bindParam(':rua', $rua);
            $stmt->bindParam(':num', $num);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            // Executando a query
            if ($stmt->execute()) {
                // Em caso de erro na execução da query, exibe o erro
                echo "<script>        
                window.alert('Os dados deste usuario foram atualizados!');
                </script>";

                // Dedireciona após 5 segundos
                header("Refresh: 1;url=../deleta.php");
                exit();
            } else {
                // Em caso de erro na execução da query, exibe o erro
                echo "<script>        
                window.alert('Erro ao atualizar este usuário, tente novamente!');
                </script>";

                // Dedireciona após 5 segundos
                header("Refresh: 1;url=../deleta.php");
            }
        } catch (PDOException $e) 
        {
            // Em caso de erro na execução da query, exibe o erro
            echo "<script>        
            window.alert('Erro ao atualizar este usuário!');
            </script>";

            // Dedireciona após 5 segundos
            header("Refresh: 1;url=../deleta.php");
        }
    } else {
        // Em caso de erro na execução da query, exibe o erro
        echo "<script>        
        window.alert('Erro ao atualizar este usuário!');
        </script>";

        // Dedireciona após 5 segundos
        header("Refresh: 1;url=../deleta.php");
    }
?>