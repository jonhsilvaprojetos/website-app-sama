<?php
    require "conexao.php";

    if(isset($_GET['id'])){
        $idUsuario = addslashes($_GET['id']);
        $sql = "DELETE FROM usuarios WHERE id = '$idUsuario'";
        $sql = $pdo->query($sql);

        if($sql){
            session_destroy();
            header("Location: ../index");
        }
    }

?>