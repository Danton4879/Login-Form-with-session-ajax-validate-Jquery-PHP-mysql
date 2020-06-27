<?php
    session_start();
    //se ja estiver logado
    if (isset($_SESSION['logado'])) {
        header('Location: dashbord.php');
        exit();
    }

    if (isset($_POST['login'])) {
        $connection = new mysqli('localhost', 'root', '', 'sistemaalper');

        $email = $connection->real_escape_string($_POST['emailPHP']);
        $senha = md5($connection->real_escape_string($_POST['senhaPHP']));

        $data = $connection->query("SELECT id FROM contas WHERE email='$email' AND senha='$senha'");
        if ($data->num_rows > 0) { //ok, vamos logar
            $_SESSION['logado'] = '1';
            $_SESSION['email'] = $email;
            exit('<font color="green">Login bem sucedido!</font>');
        }else {  
            exit('<font color="red">Login ou senha incorreto</font>');
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styleLogin.css">
    <title>Cadastro Consultores</title>
</head>
<body>
    <nav class="loginAlper">
        <div class="logoAlper">
            <img src="assets/img/Logo-Agencia-Alper.png" width="250">
        </div>
        <div class="container">
                <form id="formLogin" class="campoDeLogin form" method="POST" action="index.php">
                    <div class="row-form">
                        <div class="campoUser">
                            <input type="email" id="email" name="email" placeholder="Digite seu Email" class="textUsuario email">
                        </div>
                        <div class="campoSenha">
                            <input type="password" id="senha" name="senha" placeholder="Digite sua senha" class="senhaUsuario senha">
                        </div>
                        <div class="campoBotaoLogar">
                            <input type="button" id="btnLogin" class="enviarLogin logar" value="Logar">
                        </div>
                        <div class="botaoVoltar">
                            <a href="cadastro.php">Cadastrar</a>
                        </div>
                    </div>
                </form>
                <p id="response"></p>
        </div>
    </nav>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#btnLogin").on('click', function () {
                var email = $("#email").val();
                var senha = $("#senha").val();
                
                if (email == "" || senha == "")
                    alert("Um ou mais campos não foram preenchidos");
                else {
                    $.ajax(
                        {
                            url: 'login.php',
                            method: "POST",
                            data: {
                                login: 1,
                                emailPHP: email,
                                senhaPHP: senha
                            },
                            success: function (resposta) {
                                $("#response").html(resposta);

                                if (response.indexOf('sucedido') >= 0)
                                    window.location = 'dashbord.php';
                            },
                            dataType: 'text'
                        }
                    );
                }
            });
        });
    </script>
</body>
</html>