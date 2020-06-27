<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/scripts/verificarCadastro.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styleCadastro.css">
    <title>Cadastro Consultores</title>
</head>
<body>
    <nav class="cadastroAlper">
        <div class="logoAlper">
            <img src="assets/img/Logo-Agencia-Alper.png" width="250">
        </div>
        <div class="container">
                <form id="formCadastro" class="formularioDeCadastro form" method="POST" action="" onsubmit="return verificarCadastro()">
                    <div class="row-form">
                        <div class="campoUser">
                            <input type="text" name="usuario" placeholder="Nome de usuário" class="textUsuario usuario">
                        </div>
                        <div class="campoSenha">
                            <input type="password" name="senha" placeholder="Senha" class="senhaUsuario senha">
                        </div>
                        <div class="campoConfirmSenha">
                            <input type="password" name="usuario" placeholder="Confirmar Senha" class="textUsuario confirmSenha">
                        </div>
                        <div class="campoBotaoCadastrar">
                            <input type="submit" class="enviarCadastro cadastro" value="Cadastrar">
                        </div>
                        <div class="botaoVoltar">
                            <a href="index.php">Voltar</a>
                        </div>
                    </div>
                </form>
        </div>
    </nav>
</body>
</html>