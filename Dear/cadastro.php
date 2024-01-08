<?php
include('conexao.php');
session_start();

if (isset($_SESSION['alerta'])) {
    echo '<script>alert("' . $_SESSION['alerta'] . '");</script>';
    unset($_SESSION['alerta']);
}

?>


<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="cadastrocss.css" />
    <title>Cadastre-se</title>
</head>

<body>
    <div class="tela">
        <div class="left">
            <h1>Bem-vindo ao site de doações Dear</h1>
            <img src="logo.png" class="left-img">
            <h3>Doação é amor resignificado</h3>
        </div><!--fecha left-->


        <div class="right">
            <div class="card">
                <h1>CADASTRO</h1>

                <br>
                <form action="recebecad" method="POST" class="form">
                    <div class="divplace">
                        <label>Nome:</label>
                        <input type="text" class="nome" name="formnome" placeholder="Digite seu nome completo" required></input>
                    </div>
                    <br>

                    <div class="divplace">
                        <label>E-mail:</label>
                        <input type="email" name="formemail" placeholder="Digite seu email" required></input>
                    </div>
                    <br>
                    <div class="divplace">
                        <label>Senha:</label>
                        <input type="password" placeholder="Digite sua senha" name="formsenha" required></input>
                    </div>
                    <br>
                    <button type="submit" class="button">ENTRAR</button>

                </form>
                <br>
                <button type="submit" class="button" name="button" onclick="location.href='login.php'" required>LOGIN</button>

            </div> <!-- fecha card -->
        </div> <!--fecha right -->

    </div> <!--tela -->

</body>

</html>