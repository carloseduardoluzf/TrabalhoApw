<?php
    // isset -> serve para saber se uma variável está definida
    
    if(isset($_POST['update']))
    {
        include_once('config.php');
        $id = $_POST['id'];
        $cpf = $_POST['cpf'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $data_nascimento = $_POST['data_nascimento'];
        $senha = $_POST['senha'];
        
        
        $sqlInsert = "UPDATE tb_usuarios 
        SET cpf='$cpf',nome='$nome',email='$email',telefone='$telefone',data_nascimento='$data_nascimento',senha='$senha'
        WHERE id='$id'";
        $result = $conexao->query($sqlInsert);
        print "<script>alert('Editado com sucesso');</script>";

    }
    header('Location: update.php');
     print "<script>alert('Não foi possível editar');</script>";

?>