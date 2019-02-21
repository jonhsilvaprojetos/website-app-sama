
   $('button.register-form').click(function(){
        $('.bg').removeClass('active-height');
        $('.left-form').addClass('active-register');
        $('.left-form').removeClass('active-login');

    });
    $('button.login-form').click(function(){
        $('.bg').addClass('active-height');
        $('.left-form').addClass('active-login');
        $('.left-form').removeClass('active-register');   
    });
    
    function verificaCampos(event){
        let nomeInput = $("#nome").val();
        let emailInput = $("#email").val();
        let telInput = $("#telefone").val();
        let senhaInput = $("#senha").val();
        let senhaInputConfirm = $("#senha-confirm").val();
        
        if(nomeInput != "" && emailInput != "" && telInput != "" && senhaInput != ""){

            let chkBox = document.getElementById('ckb1');
            if(chkBox.checked != true){
                Swal({
                    type: 'warning',
                    title: 'Aceite os termos para continuar'
                  });
                event.preventDefault();
            }

            if(senhaInput != senhaInputConfirm){
                Swal({
                    type: 'error',
                    title: 'As senhas precisam ser iguais'
                });
                event.preventDefault();
            }
        } else {
            Swal({
                type: 'error',
                title: 'Preencha todos os campos'
              });
            $('.left-form').addClass('active-register');
            event.preventDefault();
        }
    }


    function verificaDadosLoja(event){
        let storeNameInput = $("#storeName").val();
        let storeLinkInput = $("#storeLink").val();
        
        if(storeNameInput == "" && storeLinkInput == ""){
            Swal({
                type: 'error',
                title: 'Preencha todos os campos'
              });
            $('.left-form').addClass('active-register');
            event.preventDefault();
        }
    }

    function verificaLogin(event){
        let emailLInput = $("#emailL").val();
        let passLInput = $("#passL").val();
        let chkBox = document.getElementById('ckb1');
        
        if(emailLInput == "" && passLInput == ""){
            Swal({
                type: 'error',
                title: 'Preencha todos os campos'
              });
            $('.left-form').addClass('active-register');
            event.preventDefault();
        }else{
            
            if(chkBox.checked == true){
                localStorage.setItem("lembrar_usuario", emailLInput);
            }else{
                if(localStorage.getItem("lembrar_usuario") != null){
                    localStorage.removeItem("lembrar_usuario");
                }
            }
        }
    }


    function confirmDel(idUser){
            Swal({
            title: 'Você tem certeza?',
            text: "Uma vez deletado, você não poderá recuperar este usuário",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirmar'
            }).then((result) => {
                if (result.value) {
                    Swal(
                    'Usuário removido com sucesso!'
                    )
                    setTimeout(function(){
                        window.location.href = "config/deletar_user.php?id="+idUser;
                    }, 1000);
                }else{
                    return false;
                }
            });
    }

    function confirmDes(idUser){
        Swal({
        title: 'Você tem certeza?',
        text: "Uma vez desativada, você não poderá acessar esta conta novamente",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Confirmar'
        }).then((result) => {
            if (result.value) {
                Swal(
                'Sua conta foi desativada com sucesso!',
                'Você será desconectado em 2 segundos.'
                )
                setTimeout(function(){
                    window.location.href = "config/desativa_user.php?id="+idUser;
                }, 2000);
            }else{
                return false;
            }
        });
}
    