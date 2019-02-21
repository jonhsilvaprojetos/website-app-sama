<?php

    session_start();
    require "conexao.php";

    if(isset($_POST['nomeUser']) && !empty($_POST['nomeUser'])){

        $nome = addslashes($_POST['nomeUser']);
        $email = addslashes($_POST['emailUser']);
        $telefone = addslashes($_POST['telUser']);

        if(isset($_POST['senhaUser']) && !empty($_POST['senhaUser'])){

            $senha = md5(addslashes($_POST['senhaUser']));

            $sql = "UPDATE usuarios SET nome = '$nome', email = '$email', telefone = '$telefone', senha = '$senha' WHERE id = {$_SESSION['userId']}";
            $sql = $pdo->query($sql);

            session_destroy();
            header("Location: ../index");

        } else{

        $sql = "UPDATE usuarios SET nome = '$nome', email = '$email', telefone = '$telefone' WHERE id = {$_SESSION['userId']}";
        $sql = $pdo->query($sql);

        $_SESSION['userName'] = $nome;
        $_SESSION['userEmail'] = $email;
        $_SESSION['userTel'] = $telefone;

        header("Location: ../profile");

        }
    }

?>