<?php
$query = "SELECT * FROM t_produtos";
$resultado = mysqli_query($conexao, $query);

if (mysqli_num_rows($resultado) > 0) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Nome: " . $row['nome'] . "<br>";
        echo "Preço: " . $row['preco'] . "<br><br>";
    }
} else {
    echo "Nenhum produto encontrado.";
}
?>
