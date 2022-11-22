<?php 
  session_start();

   if((!isset($_SESSION['email']) == true) AND (!isset($_SESSION['senha']) == true)){
        
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');

   } else {

   $logado = $_SESSION['email'];

   }

    if(!empty($_GET['id']))
    { 

        include_once('config.php');
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM tb_usuarios WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $cpf = $user_data['cpf'];
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
                $data_nascimento = $user_data['data_nascimento'];
                $senha = $user_data['senha'];
                
            }
            
            
        }else
        {
            header('Location: listar.php');
        }
        
    } else {
        header('Location: listar.php');
       

    }
	
    
   
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traveling - Perfil</title>
    <link rel="stylesheet" href="css/update.css">
</head>
<body>
  <div class="container">
        
        <div class="form-image">
        
            <h1></h1>
            <img src="img/undraw_social_user_re_8cky.svg" alt="">
        </div>
        <div class="form">
        
            <form action="saveEdit.php" method="POST">
                <div class="form-header">
                   
                    <div class="title">
                        <h1>Dados do perfil</h1> 
                        
                    </div> 
                <div class="comeback-button">
                    <button><a href="comeback.php">Sair</a></button>
                </div>
                    
                </div>
               
                <div class="input-group">
                    <div class="input-box">
                        <label for="cpf">Cpf</label>
                        <input id="cpf" type="text" name="cpf" placeholder="Digite seu cpf" value="<?php echo $cpf;?>" required>
                    </div>

                    <div class="input-box">
                        <label for="nome">Nome Completo</label>
                        <input id="nome" type="text" name="nome" placeholder="Digite seu nome" value="<?php echo $nome;?>" required>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" value="<?php echo $email;?>" required>
                    </div>

                    <div class="input-box">
                        <label for="telefone">Celular</label>
                        <input id="telefone" type="tel" name="telefone" placeholder="(xx) xxxx-xxxx" value="<?php echo $telefone;?>" required>
                    </div>

                     <div class="input-box">
                        <label for="data_nascimento">Data de nascimento</label>
                        <input id="data_nascimento" type="text" name="data_nascimento" placeholder="xxxx/xx/xx" value="<?php echo $data_nascimento;?>" required>
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite sua senha" value="<?php echo $senha;?>" required>
                    </div>


                </div>

                <div class="update-button">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="submit" name="update" id="update" value="Atualizar"></a> </input>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

                        