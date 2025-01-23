<?php
include 'config.php';

$sql = "SELECT * FROM imagens WHERE processado = 1 ORDER BY criado_em DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<img src='" . $row['caminho'] . "' width='200'><br>";
        echo "Descrição: " . $row['descricao'] . "<br>";
        echo "Processado: Sim<br><hr>";
    }
} else {
    echo "Nenhuma imagem processada ainda.";
}
?>
