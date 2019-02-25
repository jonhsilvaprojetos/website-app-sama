<?php

	require "config/isLogged.php";

?>
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
<div id="cabecalho" class="p-3 shadow-default">
    <div class="container">
        <div class="row">
            <div class="logo col-lg-2 col-md-3 col-sm-12 col-xs-12 float-left text-center">
                <a href="#"><img class="img-fluid" src="images/logo-minimal.png" alt="logo app samá"></a>
            </div>
            <div class="bloco-menus col-lg-10 col-md-9 col-sm-12 col-xs-12 float-right">
                <nav class="menu-cabecalho float-left">
                    <ul>
                        <li class="m-r-15 p-2"><a href="#">Apps</a></li>
                        <li class="p-2"><a href="#">Temas</a></li>
                    </ul>
                </nav>

             <div class="botoes-config float-right">
                    <ul>
                        <div class="usuario-logado float-left m-r-50 m-t-7">
                        <?php echo $_SESSION['userName'] ?> <i class="fas fa-caret-down"></i>
                        </div>
                       <li class="m-r-10 suporte"><a href="#"><i class="fas fa-question-circle"></i></a></li> 
                       <li class="m-r-10 configuracao"><a href="#"><i class="fas fa-cog"></i></a></li> 
                       <li class="m-r-10 ver-loja"><a href="#"><i class="fas fa-external-link-square-alt"></i></a></li> 
                       <li class="deslogar"><a href="config/logout.php"><i class="fas fa-sign-out-alt"></i></a></li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="corpo" class="m-t-50 m-b-40">
    <div class="container">
        <div class="row">
            <h3>Painel de controle</h3>
            <div id="aplicacoes" class="col-12 m-t-20 shadow-default">
                <table class="table table-aplicacoes table-painel">
                    <thead class="thead-custom">
                        <tr>
                            <th class="border-0" colspan="3">Apps instalados</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-0">Compre junto 2.0</td>
                            <td class="border-0"><span class="status-app ativo-s">Ativo</span></td>
                            <td class="border-0 text-right"><a class="config-app p-2" href="../app_sama/apps/compre_junto"><i class="fas fa-wrench"></i></a></td>
                        </tr>
                        <tr>
                            <td class="border-0">Plugin instagram</td>
                            <td class="border-0"><span class="status-app inativo-s">inativo</span></td>
                            <td class="border-0 text-right"><a class="config-app p-2" href="javascript:;"><i class="fas fa-wrench"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div> <!-- finaliza bloco aplicacoes -->
            <div id="parceiros" class="col-md-6 col-sm-12 m-t-45">
                <h5>Parceiros</h5>
                <div class="bg-branco bg-black border-clean shadow-default">
                    <a href="#"><img class="img-fluid" src="images/banner-730.jpg" alt="Parceiro Loja integrada"></a>
                </div>
            </div>
            <div id="temas" class="col-md-6 col-sm-12 m-t-45">
                <h5>Temas</h5>
                <div class="bg-branco bg-black border-clean shadow-default">
                    <a href="#"><img class="img-fluid" src="images/banner-730-v2.jpg" alt="Parceiro Loja integrada"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="rodape">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12 direitos-autorais float-left">
            Agência Samá © Todos direitos reservados 2019
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12 redes-sociais float-right text-right">
                <ul>
                    <li class="social-icon social-facebook m-r-15"><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li class="social-icon social-instagram m-r-15"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li class="social-icon social-youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script src="vendors/jquery/jquery-3.2.1.min.js"></script>
<script src="vendors/bootstrap/js/popper.min.js"></script>
<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>