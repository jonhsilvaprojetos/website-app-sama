<?php

	session_start();

?>



<!DOCTYPE html>

<html lang="pt-BR">

<head>

	<title>Dados da loja - App Samá</title>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->	

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

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

			<form class="login100-form validate-form" method="post" action="config/concluir_cadastro.php" onsubmit="verificaDadosLoja(event)">

				<span class="login100-form-title p-b-37">

					Olá, <?php echo $_SESSION['usuarioCadastrado'] ?>!

					<small class="p-t-5">Complete seu cadastro</small>

				</span>



				<div class="wrap-input100 validate-input m-b-20" data-validate="Digite o nome da loja">

					<input id="storeName" class="input100" type="text" name="storename" placeholder="nome da loja">

					<span class="focus-input100"></span>

				</div>



				<div class="wrap-input100 validate-input m-b-20" data-validate="Digite o Link da loja">

					<input id="storeLink" class="input100" type="text" name="storelink" placeholder="link da loja">

					<span class="focus-input100"></span>

				</div>



				<div class="container-login100-form-btn">

					<button type="submit" class="login100-form-btn">

						CONTINUAR

					</button>

				</div>



				<div class="text-center p-t-50">

						<span class="txt1">

						<i class="la la-info-circle"></i> Mais informações serão solicitadas dentro do painel de controle

						</span>

				</div>

			</form>



			

		</div>

		<footer class="hidden-xs p-t-50 text-center">

			<small>Etapa 2 de 2</small>

			<ol class="indicators">

				<li class=""></li>

				<li class="active m-l-5"></li>

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

	<script src="vendors/sweetalert2/sweetalert2.min.js"></script>

	<script src="js/scripts.js"></script>



</body>

</html>