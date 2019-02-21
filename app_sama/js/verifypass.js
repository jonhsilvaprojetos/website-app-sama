$("#senha-confirm").keyup(function(){
    let senhaInput = $("#senha").val();
    let senhaInputConfirm = $("#senha-confirm").val();
if(senhaInput != senhaInputConfirm){
        $(".verifica-pass").html("<i class='far fa-times-circle' style='color: #ec3f3f'></i> Senha não confere");
}else{
        $(".verifica-pass").html("<i class='far fa-check-circle' style='color: #5ae874'></i> Senha válida");  
}
});