<?php

session_start(); // Iniciar a sessão

ob_start(); // Limpar o buffer de saida para evitar erro de redirecionamento

include('conexao.php')
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="iniciocss.css" />
    <title>Doe aqui!</title>
</head>

<body>


    <h3>Bem-vindo ao site de doações Dear <span id="nome-usuario"><?php echo $_SESSION['nome_usuario']; ?></span></h3>

    <div class="container">
        <div><button type="submit" class="btn-donate" name="button" onclick="location.href='chat_banheiro.php'" required>Objetos de banheiro</button>
        </div>
        <br>
        <div><button type="submit" class="btn-donate" name="button" onclick="location.href='chat_cozinha.php'" required>Objetos de cozinha</button>
        </div>
        <br>
        <div><button type="submit" class="btn-donate" name="button" onclick="location.href='chat_brinquedos.php'" required>Brinquedos</button>
        </div>
        <br>
        <div><button type="submit" class="btn-donate" name="button" onclick="location.href='chat_moveis.php'" required>Móveis</button>
        </div>
        <br>
        <div><button type="submit" class="btn-donate" name="button" onclick="location.href='chat_roupas.php'" required>Roupas</button>
        </div>



    </div>




</body>

</html>