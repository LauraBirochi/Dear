<?php
include('conexao.php');
?>


<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="logincss.css" />
    <title>Entre!</title>
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
                <h1>LOGIN</h1>

                <br>
                <form action="" method="POST" class="form">

                    <br>

                    <div class="divplace">
                        <label>E-mail:</label>
                        <input type="email" name="email_login" placeholder="Digite seu email"></input>
                    </div>
                    <br>
                    <div class="divplace">
                        <label>Senha:</label>
                        <input type="password" placeholder="Digite sua senha" name="senha_login"></input>
                    </div>
                    <br>
                    <label class="label-embaixo">
                        <?php
                        if (isset($_POST['email_login']) || isset($_POST['senha_login'])) {

                            if (strlen($_POST['email_login']) == 0) {
                                echo "Preencha seu e-mail";
                            } else if (strlen($_POST['senha_login']) == 0) {
                                echo "Preencha sua senha";
                            } else {

                                $email = $conn->real_escape_string($_POST['email_login']);
                                $senha = $conn->real_escape_string(base64_encode($_POST['senha_login']));

                                $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
                                $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);

                                $quantidade = $sql_query->num_rows;

                                if ($quantidade == 1) {

                                    $usuario = $sql_query->fetch_assoc();

                                    if (!isset($_SESSION)) {
                                        session_start();

                                        $_SESSION['email_usuario'] = $email;
                                        $_SESSION['senha_usuario'] = $senha;
                                    }

                                    header("Location: inicio.php");
                                } else {
                                    echo "Falha ao logar! E-mail ou senha incorretos";
                                }
                            }
                        }
                        ?>
                    </label>

                    <button type="submit" class="button">ENTRAR</button>

                </form>
                <br>
                <button type="submit" class="button" name="button" onclick="location.href='cadastro.php'">CADASTRAR</button>
            </div> <!-- fecha card -->
        </div> <!--fecha right -->

    </div> <!--tela -->

</body>

</html>