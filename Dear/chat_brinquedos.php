<?php
session_start();
include 'conexao.php';

// echo "Olá"; echo $_SESSION['nome_usuario'];

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href='assets/css/style.css'>
    <title>Brinquedos</title>
</head>

<body> 
    <button class="volta" onclick="location.href='inicio.php'">Voltar</button>
    <aside>
        <img src="assets/imgs/Icon ionic-ios-chatboxes.png" alt="Chat" title="Chat" />
       

        <p><?php echo "Olá <br>";
            echo $_SESSION['nome_usuario'];
            echo "!"; ?> </p>
        <h4>Chat de doações de brinquedos</h4>

        <form id="form1">
            <div class="form-control">
                <input class="input input-alt" placeholder="Digite seu nome <?php echo $_SESSION['nome_usuario']; ?>" name="name" id="name" />
                <span class="input-border input-border-alt"></span>
            </div>

            <!-- <input type="text" placeholder="Digite seu nome <?php echo $_SESSION['nome_usuario']; ?>" name="name" id="name" />
            <input type="text" placeholder="Digite sua mensagem..." name="message" id="message" /> -->
            <br>
            <div class="form-control">
                <input class="input input-alt" placeholder="Digite sua mensagem..." name="message" id="message" type="text" />
                <span class="input-border input-border-alt"></span>
            </div>
            
        </form>

        <button id="btn1">Enviar</button>

    </aside>
    <section id="content"> </section>

    <script src='assets/js/script.js'></script>

    

</body>

</html>