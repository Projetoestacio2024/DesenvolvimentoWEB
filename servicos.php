<?php

//verifica o login na sessão
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>    
    <meta charset="utf-8">
    <title>Projeto Pet</title>

    <!-- Suporte para Boosttrap-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     
    <!--Arquivos CSS-->
    <link rel="stylesheet" href="css/rodape.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/icon_zap.css">
    <link rel="stylesheet" href="css/layout.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Titan+One&display=swap');
    </style>

</head>
<body cz-shortcut-listen="true">

    <!-- NAVBAR (PRECISA COLOCAR LOGO DA MARCA) -->
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
                </div>
            </nav>
        
        </header>
    <!--Itens da Página-->
    <br><br>
    <main role = "main">

        <!-- Topo -->
        <section class = "jumbotron text-center">
            <div class = "lead">            
            <h1>Veja nossos serviços disponíveis</h1>
            <p class = "lead text-muted">
                Seja muito bem vindo, abaixo está listado alguns de nossos serviços utilize nosso chat online ou entre em contato utilizando nosso email principal.
            </p>
            <p>
              <a href = "https://api.whatsapp.com/send?1=pt_BR&phone=5521980997790" class = "btn btn-primary my-2">Falar com atendente</a>
            </p>
          </div>
        </section>

        <!-- Item 1 -->
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">            
                        <div class="card mb-4 shadow-sm">
                            <img src="imagens/day.jpeg" class = "bd-placeholder-img card-img-top"
                                width="100%"
                                height = "225"
                                preserveAspectRatio = "xMidYMid slice"
                                focusable = "false"
                                role = "imagens/daycare.jpg" 
                                aria-label = "Placeholder: Thumbnail">

                                <title>Daycare</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Spa Pet:</text>
                            </img>              

                            <div class = "card-body">

                                <!--Informação-->
                                <p class="card-text">
                                    Sessões de relaxamento com massagem, aromaterapia e cuidados estéticos.
                                </p>

                                <!--Ler Mais-->
                                <div class = "d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" href = "https://api.whatsapp.com/send?1=pt_BR&phone=5521980997790">Mais detalhes</button>                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="col-md-4">            
                        <div class="card mb-4 shadow-sm">
                            <img src="imagens/banho.jpg" class = "bd-placeholder-img card-img-top"
                                width="100%"
                                height = "225"
                                preserveAspectRatio = "xMidYMid slice"
                                focusable = "false"
                                role = "img"
                                aria-label = "Placeholder: Thumbnail">

                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">    Banho e tosa:</text>
                        </img>

                            <div class = "card-body">

                                <!--Informação-->
                                <p class="card-text">
                                    Banho com produtos especializados para diferentes tipos de pelagem.
                                </p>

                                <!--Ler Mais-->
                                <div class = "d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" href = "https://api.whatsapp.com/send?1=pt_BR&phone=5521980997790">Mais detalhes</button>                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="col-md-4">            
                        <div class="card mb-4 shadow-sm">
                            <img src="imagens/creche.jpg" class = "bd-placeholder-img card-img-top"
                                width="100%"
                                height = "225"
                                preserveAspectRatio = "xMidYMid slice"
                                focusable = "false"
                                role = "img"
                                aria-label = "Placeholder: Imagem">

                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">    Creche:</text>
                            </img>

                            <div class = "card-body">

                                <!--Informação-->
                                <p class="card-text">
                                    Serviço de cuidado diário para pets com atividades recreativas, interação com outros animais, e monitoramento.
                                </p>

                                <!--Ler Mais-->
                                <div class = "d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" href = "https://api.whatsapp.com/send?1=pt_BR&phone=5521980997790">Mais detalhes</button>                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="col-md-4">            
                        <div class="card mb-4 shadow-sm">
                            <img src="imagens/consulta.jpg" class = "bd-placeholder-img card-img-top"
                                width="100%"
                                height = "225"
                                preserveAspectRatio = "xMidYMid slice"
                                focusable = "false"
                                role = "img"
                                aria-label = "Placeholder: Thumbnail">

                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">    Consulta veterinária</text>
                            </img>

                            <div class = "card-body">

                                <!--Informação-->
                                <p class="card-text">
                                    Atendimento veterinário de rotina, vacinas, check-ups e consultas emergenciais.
                                </p>

                                <!--Ler Mais-->
                                <div class = "d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" href = "https://api.whatsapp.com/send?1=pt_BR&phone=5521980997790">Mais detalhes</button>                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="col-md-4">            
                        <div class="card mb-4 shadow-sm">
                            <img src="imagens/adetra.jpg" class = "bd-placeholder-img card-img-top"
                                width="100%"
                                height = "225"
                                preserveAspectRatio = "xMidYMid slice"
                                focusable = "false"
                                role = "img"
                                aria-label = "Placeholder: Thumbnail">

                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">    Serviços de Adestramento</text>
                            </img>

                            <div class = "card-body">

                                <!--Informação-->
                                <p class="card-text">
                                    Adestramento comportamental, socialização com outros animais e treinamento de obediência básica.
                                </p>

                                <!--Ler Mais-->
                                <div class = "d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" href = "https://api.whatsapp.com/send?1=pt_BR&phone=5521980997790">Mais detalhes</button>                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 6 -->
                    <div class="col-md-4">            
                        <div class="card mb-4 shadow-sm">
                            <img src="imagens/foto.jpg" class = "bd-placeholder-img card-img-top"
                                width="100%"
                                height = "225"
                                preserveAspectRatio = "xMidYMid slice"
                                focusable = "false"
                                role = "img"
                                aria-label = "Placeholder: Thumbnail">

                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">    Fotografia Pet</text>
                            </img>

                            <div class = "card-body" href = "https://api.whatsapp.com/send?1=pt_BR&phone=5521980997790">

                                <!--Informação-->
                                <p class="card-text">
                                    Sessões fotográficas profissionais para registrar momentos especiais dos animais.
                                </p>

                                <!--Ler Mais-->
                                <div class = "d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type = "post" class="btn btn-sm btn-outline-secondary">Mais detalhes</button>                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </main>

    <!--Rodapé-->
    <footer><div class="rodape">
        
        <!--ICONE ZAP -->
        <button class = "Btn">
            <div class = "sign">
                <svg class="socialSvg whatsappSvg" viewBox="0 0 16 16">
                    <path
                    d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
                    </svg>
            </div>
            <a class = "text" href = "https://api.whatsapp.com/send?1=pt_BR&phone=5521980997790">Whatsapp</a>
        </button>

        <!--Rodapé-->
        <p class="p_rodape">Todos os direitos reservados &copy; 2024</p>
        <p class="p_rodape">Entre em contato pelo e-mail: webestacio2024@gmail.com</p>
        <nav>
            <ul class = "ul_rodape">
                <li class = "li_rodape"><a class = "a_rodape" href="index.php">Home</a></li>
                <li class = "li_rodape"><a class = "a_rodape" href="quemsomos.php">Quem somos</a></li>
                <li class = "li_rodape"><a class = "a_rodape" href="servicos.php">Serviços</a></li>
            </ul>            
        </nav>
        </div>
    </footer>
</body>
</html>
