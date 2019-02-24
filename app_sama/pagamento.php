<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900|Source+Sans+Pro:600,700,900" rel="stylesheet">
<link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="vendors/fontawesome5/css/all.css">
<link rel="stylesheet" href="css/util.css">
<link rel="stylesheet" href="css/painel.css">
<title>Painel de Controle</title>
</head>
<body>
<h3>Pagamento via botão</h3>
<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<input type="hidden" name="code" value="6534C71DCBCB8A5EE4882F958AFAC21D" />
<input type="hidden" name="iot" value="button" />
<input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-pagar-azul-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
</form>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->

<script src="vendors/jquery/jquery-3.2.1.min.js"></script>
<script src="vendors/bootstrap/js/popper.min.js"></script>
<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>