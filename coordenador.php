<?php
//Hablita os erros do PHP 
//QUando aparece erro 500 ele não mostra os erros por segurança
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

session_start();

// Conexão com o banco
$conn = new mysqli("localhost", "root", "root", "banco");
if ($conn->connect_error) 
{
    die("Erro de conexão: " . $conn->connect_error);
}

// Verifica login

$email = $_POST['email'];
$senha = $_POST['senha'];

// Busca usuário pelo email
$res = $conn->query("SELECT * FROM coordenadores WHERE email='$email'");

if ($res->num_rows > 0) {
  /*usar session*/  $_SESSION['coordenador'] = $res->fetch_assoc();
    header("Location: index.php");

    exit;
} else {
    $erro = "Email não encontrado.";
}




?>