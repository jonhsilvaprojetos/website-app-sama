class ajaxREQ{

    static get(type,url,startREQ,completeREQ){
        return ajaxREQ.requisicao(type, url,'GET', startREQ,completeREQ);
    }
    static post(type,url,startREQ,completeREQ){
        return ajaxREQ.requisicao(type, url,'POST', startREQ,completeREQ);
    }

    static requisicao(type,url,method, startREQ, completeREQ){
        
        return new Promise((resolve, reject)=>{
            $.ajax({
                url: url,
                type: method,
                dataType: type,
                beforeSend: startREQ,
                success: function(data) {
                    resolve(data);
                },
                complete: completeREQ,
                error: function(err) {
                   reject(err);
                }
            });
        });
    }
}
