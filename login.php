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
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/menu.css">

</head>
<body>

  <!-- NAVBAR  -->
  <header>

    <div class="container" >
        <a class="links" id="paracadastro"></a>
        <a class="links" id="paralogin"></a>
         
        <div class="content">      
          <!--FORMULÁRIO DE LOGIN-->
          <div id = "login">
            <form method="post" action="php/login.php"> 
              <h1>Login</h1> 
              <p> 
                <label for="email_login">Seu email</label>
                <input id="email_login" name="email_login" required="required" type="email" placeholder="ex. contato@seuemail.com"/>
              </p>
              
              <p> 
                <label for="senha_login">Sua senha</label>
                <input id="senha_login" name="senha_login" required="required" type="password" placeholder="ex. senha" /> 
              </p>
               
              <p> 
                <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
                <label for="manterlogado">Manter-me logado</label>
              </p>
               
              <p> 
                <input type = "submit" value = "Entrar" name='btnAcessar'>
              </p>
               
              <p class="link">
                Ainda não tem conta?
              <a href="#paracadastro">Cadastre-se</a>
              </p>
            </form>
          </div>
     
          <!--FORMULÁRIO DE CADASTRO-->
          <div id="cadastro">
            <form method ="post" action="php/inserir.php"> 
              <h1>Cadastro</h1> 
               
              <div class="form-row">

                <!--Campo Nome-->
                <p> 
                  <label for="nome_cad">Digite seu nome</label>
                  <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="digite seu nome" />
                </p:>
                
                <!--Campo CPF-->
                <p> 
                <label for="cpf_cad">Digite seu CPF</label>
                <input id="cpf_cad" name="cpf_cad" required="required" type="text" placeholder="digite seu cpf"/> 
                </p>

                <!--Campo Nascimento -->
                <p> 
                  <label for="nasc_cad">Data de nascimento</label>
                  <input id="nasc_cad" name="nasc_cad" required="required" type="date" placeholder="ex. 1234"/>
                </p>
              </div>

              <!--SEGUNDA LINHA -->  
              <div class="form-row">

                <!--Campo Email -->
                  <p> 
                    <label for="email_cad">Seu e-mail</label>
                    <input id="email_cad" name="email_cad" required="required" type="email" placeholder="contato@seuemail.com"/> 
                  </p>

                  <!--Campo Senha -->
                  <p> 
                    <label for="senha_cad">Sua senha</label>
                    <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="ex. 1234"/>
                  </p>

                  <!--Campo Telefone -->
                  <p> 
                    <label for="tel_cad">Telefone para contato</label>
                    <input id="tel_cad" name="tel_cad" required="required" type="tel" placeholder="ex. (99) 99999-9999"/>
                  </p>
              </div>

              <!--TERCEIRA LINHA -->
              <div class="form-row">

                <!--Campo Estado -->
                <p> 
                  <label for="estado_cad">Estado</label>
                  <input id="estado_cad" name="estado_cad" required="required" type="text" placeholder="ex. Rio de Janeiro"/>
                </p>

                <!--Campo Bairro -->
                <p> 
                  <label for="bairro_cad">Bairro</label>
                  <input id="bairro_cad" name="bairro_cad" required="required" type="text" placeholder="ex. Campo Grande"/>
                </p>
              </div>

              <!--QUARTA LINHA -->
              <div class="form-row">

                <!--Campo Endereço -->
                <p> 
                  <label for="rua_cad">Rua</label>
                  <input id="rua_cad" name="rua_cad" required="required" type="text" placeholder="ex. Rua 9"/>
                </p>

                <!--Campo Número -->
                <p> 
                  <label for="num_cad">Número</label>
                  <input id="num_cad" name="num_cad" required="required" type="text" placeholder="ex. 500"/>
                </p>

                <!--Campo Complemento -->
                <p> 
                  <label for="comp_cad">Complemento</label>
                  <input id="comp_cad" name="comp_cad" required="required" type="text" placeholder="ex. Lote, Quadra, Apto"/>
                </p>
              </div>


              <p><input type="submit" value="Cadastrar"/></p>
               
              <!-- Botao entrar -->
              <p class="link">  
                Já tem conta?
              <a href="#paralogin"> Ir para Login </a>
              </p>

            </form>
          </div>
        </div>
      </div>  

      <a href="index.php" class="botao-imagem">
        <img src="imagens/home.png" alt="Imagem do Botão">
      </a>
    
</body>
</html>
