<?php
session_start();

include 'php/conexao.php';

// Verifica se o usuário está logado
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        // Prepara a query para buscar os dados do registro
        $sql = "SELECT * FROM tb_usuario WHERE id = :id";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$row) {
            echo "Registro não encontrado!";
            exit();
        }

    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
} else {
    echo "ID não fornecido!";
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>    
    <meta charset="utf-8">
    <title>Editar Registro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />

    <!-- Suporte para Bootstrap-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     
    <!--Arquivos CSS-->
    <link rel="stylesheet" href="css/rodape.css">
    <link rel="stylesheet" href="css/icon_zap.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/consulta.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Titan+One&display=swap');

        /* Estilização personalizada */
        .imagem_topo {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .texto_lado_imagem {
            font-family: 'Titan One', cursive;
            font-size: 32px;
            color:white;
            display: flex;
            align-items: center;
            text-align: center;
        }

        .container {
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <!-- Menu Hamburguer -->
    <header>
    <label class="burger" for="burger">
        <input type="checkbox" id="burger">
        <span></span>
         <span></span>
        <span></span>
        <div class="menu_overlay"></div>
        <nav class = "menu_header">            
            <ul class = "menu_item">
                <!-- Opções -->
                <li class = "menu_li"><a class = "menu_a" href = "index.php">Home</a></li>         
                <li class = "menu_li"><a class = "menu_a" href = "servicos.php">Serviços</a></li>
                <li class = "menu_li"><a class = "menu_a" href = "quemsomos.php">Quem somos</a></li>
                <?php if(!empty($_SESSION['login'])): ?>
                    <br><br><br>                    
                    <li class = "menu_li"><a class = "menu_a" href = "deleta.php">Lista de usuários</a></li>
                    <li class = "menu_li"><a class = "menu_a" href = "php/logout.php">Sair</a></li>
                <?php else: ?>
                    <br><br><br>
                    <li class = "menu_li"><a class = "menu_a" href = "login.php">Entrar</a></li>
                <?php endif; ?>
            </ul>
        </nav>    
    </header>

    <!-- Main -->
    <main role = "main">    

    <!-- Topo da página -->
    <br><br><br><br>
    <section class = "jumbotron text-center">
        <div class = "">            
        <h1>Sistema apenas para usuarios desenvolvedores</h1>
        <p class = "lead text-muted">
            Você está acessando uma aba que lhe permite acesso ao cadastro dos clientes.
        </p>
            <p class = "lead text-muted">
            Esta aba só deve ser acessada durante o desenvolvimento do sistema.
        </p>                      
        </div>
    </section>
    <div class="form-container">
        <form method="post" action="php/atualiza.php">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />

            <div class="mb-3">
                <label for="nome_cad" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome_cad" name="nome_cad" value="<?php echo htmlspecialchars($row['nome_cad']); ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="email_cad" class="form-label">Email</label>
                <input type="email" class="form-control" id="email_cad" name="email_cad" value="<?php echo htmlspecialchars($row['email_cad']); ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="nasc_cad" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="nasc_cad" name="nasc_cad" value="<?php echo htmlspecialchars($row['nasc_cad']); ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="cpf_cad" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf_cad" name="cpf_cad" value="<?php echo htmlspecialchars($row['cpf_cad']); ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="tel_cad" class="form-label">Telefone</label>
                <input type="tel" class="form-control" id="tel_cad" name="tel_cad" value="<?php echo htmlspecialchars($row['tel_cad']); ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="estado_cad" class="form-label">Estado</label>
                <input type="text" class="form-control" id="estado_cad" name="estado_cad" value="<?php echo htmlspecialchars($row['estado_cad']); ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="bairro_cad" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="bairro_cad" name="bairro_cad" value="<?php echo htmlspecialchars($row['bairro_cad']); ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="rua_cad" class="form-label">Rua</label>
                <input type="text" class="form-control" id="rua_cad" name="rua_cad" value="<?php echo htmlspecialchars($row['rua_cad']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="num_cad" class="form-label">Número</label>
                <input type="text" class="form-control" id="num_cad" name="num_cad" value="<?php echo htmlspecialchars($row['num_cad']); ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
    <br><br><br><br>    

    <!--Rodapé-->    
    <footer>
        <div class="rodape">

        <!--ICONE ZAP -->
        <button class="Btn">
            <div class="sign">
                <svg class="socialSvg whatsappSvg" viewBox="0 0 16 16">
                    <path
                    d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
                </svg>
            </div>
            <a class="text" href="https://api.whatsapp.com/send?1=pt_BR&phone=5521980997790">Whatsapp</a>
        </button>  

        <!-- RODAPÉ-->
        <p class="p_rodape">Todos os direitos reservados &copy; 2024</p>
        <p class="p_rodape">Entre em contato pelo e-mail: webestacio2024@gmail.com</p>
        <nav>
            <ul class="ul_rodape">
                <li class="li_rodape"><a class="a_rodape" href="index.php">Home</a></li>
                <li class="li_rodape"><a class="a_rodape" href="quemsomos.php">Quem somos</a></li>
                <li class="li_rodape"><a class="a_rodape" href="servicos.php">Serviços</a></li>
            </ul>            
        </nav>
        </div>
    </footer>                  
</body>
</html>