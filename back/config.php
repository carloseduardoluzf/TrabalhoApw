<?php 

$host = "localhost";
$usuario = "root";
$senha = "";
$database = "projetoduds";

$conexao = new mysqli($host, $usuario, $senha, $database);

/*if($conexao->connect_errno){
    echo "Error";
}
else
{
    echo "Conexão efetuada com sucesso!";
}
*/