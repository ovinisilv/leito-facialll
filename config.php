<?php
$servername = "162.240.153.81"; // IP do banco remoto
$username = "wwhost_vinisilv"; // Novo usuário do MySQL remoto
$password = "Wer3004ber"; // Senha do MySQL remoto
$dbname = "wwhost_leitor-facial"; // Nome correto do banco de dados

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
