<?php

    session_start();

    require "conexao.php";



    if(isset($_POST['emailL']) && !empty($_POST['emailL'])){



        $email = addslashes($_POST['emailL']);

        $senha = md5(addslashes($_POST['passL']));



        $sql = "SELECT * FROM usuarios WHERE (email = '$email') AND (senha = '$senha')";

        $sql = $pdo->query($sql);



        if($sql){

            if($sql->rowCount() > 0){

                

                     $usuario = $sql->fetch();

                        $_SESSION['isLogged'] = true;

                        $_SESSION['userId'] = $usuario['id'];

                        $_SESSION['userName'] = $usuario['nome'];

                        $_SESSION['userEmail'] = $usuario['email'];

                        $_SESSION['userTel'] = $usuario['telefone'];

                        $_SESSION['nivel_acesso'] = $usuario['nivel_acesso'];


                        header("Location: ../dash");



            }else{

                

                $_SESSION['msg'] = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>

                Login e/ou senha inválido.

                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>

                <span aria-hidden='true'>&times;</span>

                </button>

                </div>";

                header("Location: ../index");

            }

        }else {

            $_SESSION['msg'] = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>

            Não existe usuário com este e-mail.

            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>

            <span aria-hidden='true'>&times;</span>

            </button>

            </div>";

            header("Location: ../index");

        }



    }else{

        $_SESSION['msg'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>

        Por favor, preencha todos os campos.

        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>

        <span aria-hidden='true'>&times;</span>

        </button>

        </div>";



        header("Location: ../index");

    }





?>