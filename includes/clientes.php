<?php
$query = "SELECT * FROM t_clientes";
$resultado = mysqli_query($conexao, $query);

if (mysqli_num_rows($resultado) > 0) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Nome: " . $row['nome'] . "<br>";
        echo "Email: " . $row['email'] . "<br><br>";
    }
} else {
    echo "Nenhum cliente encontrado.";
}
?>
