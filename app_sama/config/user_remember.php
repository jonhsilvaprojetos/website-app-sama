<?php



    if(isset($_POST["user_email"])){

        include_once "conexao.php";



        $sql = "SELECT * FROM usuarios WHERE email = '{$_POST['user_email']}'";

        $sql = $pdo->query($sql);



        if($sql->rowCount() > 0){

            $user_remember = $sql->fetch();

            echo json_encode(array("user_name_remember" => $user_remember['nome']));

        }

    }



?>