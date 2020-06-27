<?php
    session_start();

    if (!isset($_SESSION['logado'])) {
        header('Location: login.php');
        exit();
    }

?>

<a href="logout.php"><input type="button" value="sair"></a>

logado