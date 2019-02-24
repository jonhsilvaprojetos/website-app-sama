var root="http://"+document.location.hostname+"/sama-website/app_sama/";
$('#botaoPagamento').on('click', function(event){


    event.preventDefault();

    $.ajax({
        url: root+"controllers/ControllerPagamentoDireto.php",
        type: "POST",
        dataType: "html",
        success: function(data){
            $("#code").val(data);
            $("#formPagamento").submit();
        }
    });

});