<?php
$bd_usuario = "root";
$bd_senha = "";
$bd_servidor = "10.125.47.33";
$bd_banco = "db_integrador";
$conexao = mysqli_connect($bd_servidor, $bd_usuario, $bd_senha, $bd_banco);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
} else {
    echo "Conexão bem-sucedida!";
}

?>