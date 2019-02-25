<?php

session_start();

if($_SESSION['isLogged']){

  require "../../config/conexao.php";

}else{

  header("Location: ../../index");

}

$tokenuser = $_SESSION['userToken'];

if(isset($_POST['data_primary']) && isset($_SESSION['userToken'])){

$appname = "Compre Junto";
$dataApp = addslashes($_POST['data_primary']);

$sql = "INSERT INTO apps (nome_app, token_user, dados_app) VALUES ('$appname', '$tokenuser', '$dataApp')";
$sql = $pdo->query($sql);

}


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900|Source+Sans+Pro:600,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../../vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../vendors/fontawesome5/css/all.css">
    <link rel="stylesheet" href="style.css">

</head>
<body id="body_app">

        <button id="triggerModal" type="button" class="btn btn-primary hidden" data-toggle="modal" data-target="#exampleModal"> </button>
      
      
      <div class="modal fade modal_products" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <div id="products-modal">
                <div class="row wrap-prds"></div>
              </div>
              <div class="loading_sama text-center"><img src="https://loading.io/spinners/typing/lg.-text-entering-comment-loader.gif"></div>
            </div>
          </div>
        </div>
      </div>

    <div class="app_content">
        <div class="container" id="app_container">
            <div class="app_config">

            </div>




            <div class="box_content_app_compre_junto">
                <div class="wrap_content">
                    <form id="form_create_date" method="POST">
                        <div id="data_parent_primary">
                            <div class="box_primary">
                                    <div class="wrap_dataset">
                                            <div class="wrap_date hidden">
                                                <div class="i-date hidden"><input class="hidden" type="text" name="data_primary" id="data_set"></div>
                                            </div>
                                    </div>
                                    <div id="getProductHTML"></div>
                                    <div class="actions_box_primary">
                                            <div class="content-mini">adicionar produto</div>    
                                    </div>
                                <div class="action_block hidden">
                                <div id="change_prod"><i class="fas fa-exchange-alt"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap_receive" id="items_receive">
                          <div id="data_parent_thumb" name="thumb">
                              <div class="box_thumbnails">
                                  <div class="wrap_dataset">
                                      <div class="wrap_date hidden">
                                          <div class="i-date hidden"><input class="hidden" type="text" id="data_set"></div>
                                      </div>
                                  </div>
                                  <div id="getProductHTML"></div>
                                  <div class="actions_thumb">  
                                  </div>     
                                  <div class="action_block hidden">
                                    <div id="change_prod"><i class="fas fa-exchange-alt"></i></div>   
                                    <div class="remove"><i class="fas fa-trash"></i></div>
                                  </div>
                              </div>
                          </div>
                        </div>         
                            <div class="add_miniaturas off">+1</div>
                            <button type="submit" id="save_date"class="btn btn-success">Salvar</button>
                    </form>   
                </div>
            </div>

            
            <?php

              $sql = "SELECT * FROM apps WHERE token_user = '$tokenuser'";
              $sql = $pdo->query($sql);

              if($sql->rowCount() > 0){

                foreach($sql->fetchAll() as $dataProd){
                  if($dataProd['nome_app'] == "Compre Junto"){
                    echo '<div class="box_content_app_compre_junto">';
                    echo '<div class="wrap_content">';
                    $obj = json_decode($dataProd['dados_app']);
                    echo "<h3>{$obj->name}</h3>";
                    echo "<a href='{$obj->link}'><img src='{$obj->image}'/></a>";
                    echo '</div>';
                    echo '</div>';
                  }
                }
              }
            ?>
        </div>
    </div>


 
<script src="../../vendors/jquery/jquery-3.2.1.min.js"></script>
<script src="../../vendors/bootstrap/js/popper.min.js"></script>
<script src="../../vendors/bootstrap/js/bootstrap.min.js"></script>

<script src="../../controllers/ResquestController/RequestController.js"></script>
<script src="index.js"></script>
</body>
</html>