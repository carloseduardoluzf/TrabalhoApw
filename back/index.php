<?php

    if(isset($_POST['submit']))
    {
    
        include_once('config.php');

        $cpf = $_POST['cpf'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $data_nascimento = $_POST['data_nascimento'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO tb_usuarios(cpf,nome,email,telefone,data_nascimento,senha) 
        VALUES ('$cpf','$nome','$email','$telefone','$data_nascimento','$senha')");

        header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Formulário</title>
</head>

<body>
    <div class="container">
      
        <div class="form-image">
            <div class="title-image">
                <h1>Traveling Us</h1>
            </div>
                <img src="img/undraw_traveling_01tc.svg" alt="">
        </div>  
        
        <div class="form">
            <form action="index.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                        
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="cpf">Cpf</label>
                        <input id="cpf" type="text" name="cpf" placeholder="Digite seu cpf" required>
                    </div>

                    <div class="input-box">
                        <label for="nome">Nome Completo</label>
                        <input id="nome" type="text" name="nome" placeholder="Digite seu nome" required>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="telefone">Celular</label>
                        <input id="telefone" type="tel" name="telefone" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                     <div class="input-box">
                        <label for="data_nascimento">Data de nascimento</label>
                        <input id="data_nascimento" type="text" name="data_nascimento" placeholder="xxxx/xx/xx" required>
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>
                    <div class="send-button">
                        <input type="submit" name="submit" id="submit" value="Enviar"> </input>
                        <br>
                        <small>Já possui uma conta? <a href="login.php">Clique aqui</a></small>
                    </div>

                </div>

            </form>
        </div>
        <a href="https://github.com/carloseduardoluzf" target="_blank"><img src="img/iconegit.svg" alt=""></a>
    </div>
</body>



</html>

