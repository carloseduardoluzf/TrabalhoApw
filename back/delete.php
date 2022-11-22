<?php

    if(!empty($_GET['id']))
    {
        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM tb_usuarios WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM tb_usuarios WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }

        header('Location: login.php');

         session_start();
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }


    header('Location: listar.php');
   
?>