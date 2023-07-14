<?php
$query = "SELECT * FROM t_suporte";
$resultado = mysqli_query($conexao, $query);

if (mysqli_num_rows($resultado) > 0) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Nome: " . $row['nome'] . "<br>";
        echo "Mensagem: " . $row['mensagem'] . "<br><br>";
    }
} else {
    echo "Nenhuma mensagem de suporte encontrada.";
}
?>
