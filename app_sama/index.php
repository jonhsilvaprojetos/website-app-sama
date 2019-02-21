<?php

session_start();

?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>

	<title>Login - App Samá</title>

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

<!--		<div class="logo-dash p-b-30 p-t-50">

			<img alt="" src="assets/demo/media/img/logo/logo.png" />

		</div> -->

		<div class="wrap-login100 p-l-55 p-r-55 p-t-50 p-b-30">

			<div class="avatar_user_remember text-center p-b-30"></div>

			<form class="login100-form validate-form" method="post" action="config/login.php" onsubmit="verificaLogin(event)">

				<span class="login100-form-title p-b-37">

					ENTRAR

				</span>



				<div class="wrap-input100 validate-input m-b-20" data-validate="Digite um email válido">

					<input id="emailL" class="input100" type="email" name="emailL" placeholder="email" autocomplete="off">

					<span class="focus-input100"></span>

				</div>



				<div class="wrap-input100 validate-input m-b-25" data-validate = "Digite sua senha">

					<input id="passL" class="input100" type="password" name="passL" placeholder="senha">

					<span class="focus-input100"></span>

				</div>



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

							Lembrar-me

						</label>

					</div>



					<div>

						<a href="#" class="txt1">

							Esqueceu sua senha?

						</a>

					</div>

				</div>



				<div class="container-login100-form-btn">

					<button type="submit" class="login100-form-btn">

						Entrar

					</button>

				</div>



				<!--<div class="text-center p-t-57 p-b-20">

					<span class="txt1">

						Ou faça login pelas redes

					</span>

				</div>



				<div class="flex-c p-b-112">

					<a href="#" class="login100-social-item">

					<i class="fab fa-facebook-f"></i>

					</a>



					<a href="#" class="login100-social-item">

						<img src="images/icons/icon-google.png" alt="GOOGLE">

					</a>

				</div>-->



				<div class="text-center p-t-50">

						<span class="txt1">

							Não tem uma conta? 

						</span>

					<a href="form_cadastro" class="txt2 hov1">

						Cadastre-se

					</a>

				</div>

			</form>



			

		</div>

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

	<script src="js/remember_user.js"></script>



</body>

</html>

