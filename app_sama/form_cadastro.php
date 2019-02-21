<?php

	session_start();

?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>

	<title>Criar conta - App Samá</title>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->	

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="vendors/bootstrap/css/bootstrap.min.css">

<!--===============================================================================================-->

	<link href="vendors/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css" />

	<link href="vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="vendors/animate/animate.css">

<!--===============================================================================================-->	

	<link rel="stylesheet" type="text/css" href="vendors/css-hamburgers/hamburgers.min.css">

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="vendors/animsition/css/animsition.min.css">

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="vendors/select2/select2.min.css">

<!--===============================================================================================-->	

	<link rel="stylesheet" type="text/css" href="vendors/daterangepicker/daterangepicker.css">

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="css/util.css">

	<link rel="stylesheet" type="text/css" href="css/main.css">

	<link rel="stylesheet" href="vendors/sweetalert2/sweetalert2.min.css">

<!--===============================================================================================-->

</head>

<body>

	

	

	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">

		<div class="wrap-login100 p-l-55 p-r-55 p-t-60 p-b-30">

			<form class="login100-form validate-form" method="post" action="config/registrar.php" onsubmit="verificaCampos(event)">

				<span class="login100-form-title p-b-37">

					CRIAR CONTA

				</span>



				<div class="wrap-input100 validate-input m-b-20" data-validate="Digite seu nome">

					<input id="nome" class="input100" type="text" name="username" placeholder="nome">

					<span class="focus-input100"></span>

				</div>



				<div class="wrap-input100 validate-input m-b-20" data-validate="Digite um email válido">

					<input id="email" class="input100" type="email" name="useremail" placeholder="email" autocomplete="off">

					<span class="focus-input100"></span>

				</div>



				<div class="wrap-input100 validate-input m-b-20" data-validate="Digite um telefone">

					<input id="telefone" class="input100" type="text" name="userphone" placeholder="telefone">

					<span class="focus-input100"></span>

				</div>



				<div class="wrap-input100 validate-input m-b-25" data-validate = "Digite sua senha">

					<input id="senha" class="input100" type="password" name="pass" placeholder="senha">

					<span class="focus-input100"></span>

				</div>



				<div class="wrap-input100 validate-input m-b-25" data-validate = "Confirme sua senha">

					<input id="senha-confirm" class="input100" type="password" name="rpass" placeholder="confirmar senha">

					<span class="focus-input100"></span>

				</div>



				<span class="verifica-pass p-b-20 d-block"></span>



				<?php

                    if(isset($_SESSION['msg'])){

                        echo $_SESSION['msg'];

                        session_destroy();

                    }

                ?>



				<div class="flex-sb-m w-full p-t-3 p-b-24">

					<div class="contact100-form-checkbox">

						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">

						<label class="label-checkbox100" for="ckb1">

							Aceito os termos e condições

						</label>

					</div>

				</div>



				<div class="container-login100-form-btn">

					<button type="submit" class="login100-form-btn">

						CADASTRAR

					</button>

				</div>



				<div class="text-center p-t-50">

						<span class="txt1">

							Já é cadastrado? 

						</span>

					<a href="index.php" class="txt2 hov1">

						Fazer login

					</a>

				</div>

			</form>



			

		</div>

		<footer class="hidden-xs p-t-50 text-center">

			<small>Etapa 1 de 2</small>

			<ol class="indicators">

				<li class="active m-r-5"></li>

				<li class=""></li>

			</ol>

		</footer>

	</div>

	

	



	<div id="dropDownSelect1"></div>

	

<!--===============================================================================================-->

	<script src="vendors/jquery/jquery-3.2.1.min.js"></script>

<!--===============================================================================================-->

	<script src="vendors/animsition/js/animsition.min.js"></script>

<!--===============================================================================================-->

	<script src="vendors/bootstrap/js/popper.js"></script>

	<script src="vendors/bootstrap/js/bootstrap.min.js"></script>

<!--===============================================================================================-->

	<script src="vendors/select2/select2.min.js"></script>

<!--===============================================================================================-->

	<script src="vendors/daterangepicker/moment.min.js"></script>

	<script src="vendors/daterangepicker/daterangepicker.js"></script>

<!--===============================================================================================-->

	<script src="vendors/countdowntime/countdowntime.js"></script>

<!--===============================================================================================-->

	<script src="js/main.js"></script>

	<script src="js/verifypass.js"></script>

	<script src="vendors/jquery-mask/jquery.mask.min.js"></script>

	<script src="js/mask-telefone.js"></script>

	<script src="vendors/sweetalert2/sweetalert2.min.js"></script>

	<script src="js/scripts.js"></script>





</body>

</html>