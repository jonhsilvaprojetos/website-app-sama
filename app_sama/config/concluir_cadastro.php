<?php
session_start();
require "conexao.php";

if(isset($_SESSION['emailCadastrado']) && !empty($_SESSION['emailCadastrado'])){

    $emailCadastroAnterior = addslashes($_SESSION['emailCadastrado']);

    $sql = "SELECT * FROM usuarios WHERE email = '$emailCadastroAnterior'";
    $sql = $pdo->query($sql);

    if($sql->rowCount() > 0){
        //echo "Achou o usuario";
        $dadoUsuarioAnterior = $sql->fetch();
    }

}

if(isset($_POST['storename']) && !empty($_POST['storename'])){

    $storeName = addslashes($_POST['storename']);
    $storeLink = addslashes($_POST['storelink']);
    $idCadastroAnterior = addslashes($dadoUsuarioAnterior['id']);

    $sql = "INSERT INTO lojas (id, nome_loja, link_loja) VALUES ('$idCadastroAnterior', '$storeName', '$storeLink')";
    $sql = $pdo->query($sql);

    if($sql){

        $_SESSION['msg'] = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        Cadastro realizado com sucesso!
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button>
        </div>";
        header("Location: ../index");

    } else{
        echo "Ocorreu um erro";
        echo $_SESSION['emailCadastrado'];
        echo $storeName;
        echo $storeLink;
        echo $idCadastroAnterior;
    }


}

?>