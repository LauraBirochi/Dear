<?php
include('conexao.php');
session_start();

$nome_usuario = $_POST['formnome'];
$email_usuario = $_POST['formemail'];
$senha_usuario = base64_encode($_POST['formsenha']);

$busca_usuario = "SELECT COUNT(*) FROM usuarios WHERE email = '{$email_usuario}'";
$busca_usuario = mysqli_query($conn, $busca_usuario);
$row = $busca_usuario->fetch_row();

if ($row[0] > 0) {
    $_SESSION['alerta'] = 'E-mail já cadastrado';
    header('location: cadastro.php');
} else {
    $result_usuario = "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome_usuario','$email_usuario', '$senha_usuario')";
    $result_usuario = mysqli_query($conn, $result_usuario);

    $_SESSION['nome_usuario'] = $nome_usuario;
    $_SESSION['email_usuario'] = $email_usuario;
    $_SESSION['senha_usuario'] = $senha_usuario;
    header("location: inicio.php");
}


?>
