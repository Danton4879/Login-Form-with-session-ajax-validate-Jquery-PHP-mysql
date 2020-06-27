<?php

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