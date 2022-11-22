<?php 
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM tb_usuarios WHERE email = '$email' AND senha = '$senha'";

        $resultado = $conexao->query($sql);

       // print_r($sql);
        //print_r($resultado);

        if(mysqli_num_rows($resultado) < 1){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        } else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: listar.php');
        }

    }
    else{
        
        header('Location: login.php');
    }

?>