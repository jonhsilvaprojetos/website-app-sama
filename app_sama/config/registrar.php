<?php



	session_start();

	require "conexao.php";



	if(isset($_POST['useremail']) && !empty($_POST['useremail'])){



		$emailVerify = addslashes($_POST['useremail']);

		$verifyEmail = "SELECT * FROM usuarios WHERE email = '$emailVerify'";

		$verifyEmail = $pdo->query($verifyEmail);



		if($verifyEmail->rowCount() > 0){

			$_SESSION['msg'] = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>

						Este email está sendo utilizado.

						<button type='button' class='close' data-dismiss='alert' aria-label='Close'>

						<span aria-hidden='true'>&times;</span>

						</button>

						</div>";

			header("Location: ../form_cadastro");

		}else {

			if(isset($_POST['username']) && !empty($_POST['username'])){



				$nome = addslashes($_POST['username']);

				$email = addslashes($_POST['useremail']);

				$telefone = addslashes($_POST['userphone']);

				$senha = md5(addslashes($_POST['pass']));

				$token = md5(rand(0, 9999).date().time().rand(0, 9999));

				$periodo = date("d/m/Y", strtotime('+5 day'));

			
				$sql = "INSERT INTO usuarios (nome, email, telefone, senha, token, periodo) VALUES ('$nome', '$email', '$telefone', '$senha', '$token', '$periodo')";

				$sql = $pdo->query($sql);

			

					if($sql){

						$_SESSION['emailCadastrado'] = $email;

						$_SESSION['usuarioCadastrado'] = $nome;


						header("Location: ../form_dados_loja");						

					}else{

						$_SESSION['msg'] = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>

						Houve um erro ao cadastrar.

						<button type='button' class='close' data-dismiss='alert' aria-label='Close'>

						<span aria-hidden='true'>&times;</span>

						</button>

						</div>";

						header("Location: ../form_cadastro");

					}

			

				}

		}







	}



?>