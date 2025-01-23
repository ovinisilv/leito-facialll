<?php
include 'config.php';

$sql = "SHOW TABLES";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_array()) {
        echo "Tabela encontrada: " . $row[0] . "<br>";
    }
} else {
    echo "Nenhuma tabela encontrada no banco.";
}

$conn->close();
?>

