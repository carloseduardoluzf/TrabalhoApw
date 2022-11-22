
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Traveling - Login</title>
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <div class="container">
                <div class="form-image">
                    <img src="img/icons8-airplane-take-off-96.png" alt="">
                </div>
            <div class="form"> 
                
                <form action="testLogin.php" method="POST">
                
                    <div class="form-header">
                    
                        <div class="title">
                            <h1>Embarque nessa viagem</h1>
                        </div>
                    </div>

                    <div class="input-group">
                        
                        <div class="input-box">
                            <label for="email">E-mail</label>
                            <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                        </div>


                        <div class="input-box">
                            <label for="senha">Senha</label>
                            <input id="senha" type="password" name="senha" placeholder="Digite sua senha" required>
                        </div>


                    </div>
                    <div class="continue-button">
                        <button type="submit" name="submit"><a href="#">Entrar</a> </button>
                        <small>Não possui uma conta? <a href="index.php">Clique aqui</a></small>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>