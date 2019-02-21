

if(localStorage.getItem("lembrar_usuario") != null){
    $("#emailL").val(localStorage.getItem("lembrar_usuario"));
    $("#ckb1").attr("checked", "checked");

    var user_email = localStorage.getItem("lembrar_usuario");
    var dados = {
        user_email: user_email
    }

    $.post( "config/user_remember.php", dados, function( retorna ) {
        var retorno = JSON.parse(retorna);
        $(".avatar_user_remember").html("<img src='images/users/"+ retorno.avatar_remember +"'/>");
        $('.login100-form-title').html("Entrar como "+ retorno.user_name_remember + "<a href='javascript:;' onclick='trocarConta()' class='p-t-5'>Não é você?</a>").attr("style", "font-size: 24px");
    });
}

function trocarConta(){
    if(localStorage.getItem("lembrar_usuario") != null){
        localStorage.removeItem("lembrar_usuario");
        window.location.href = "./index.php";
    }
}