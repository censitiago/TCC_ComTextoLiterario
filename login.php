<?php
session_start();

// Conexão com o banco
$conn = new mysqli("localhost", "root", "root", "banco");
if ($conn->connect_error) die("Erro de conexão: " . $conn->connect_error);

// Verifica login
if (isset($_POST['login'])) {
    $email = $_POST['email'];

    // Busca usuário pelo email
    $res = $conn->query("SELECT * FROM coordenadores WHERE email='$email'");
    
    if ($res->num_rows > 0) {
        $_SESSION['coordenador'] = $res->fetch_assoc();
        header("Location: login.php");

        exit;
    } else {
        $erro = "Email não encontrado.";
    }
}
?>