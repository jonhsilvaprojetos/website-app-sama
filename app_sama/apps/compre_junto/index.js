class formController{
 
}


        var myOBJECT = {
            store_data: [],
            items_data: []
        };

        ajaxREQ.get('xml','https://tema-base-sama.lojaintegrada.com.br/xml/822ee/googlemerchant.xml',Start=>{
            console.log('startou agor');
        },Finish=>{
            console.log('finalizou agr');
        }).then(data=>{
            var xmlOBJ = data.childNodes[0];

            if( xmlOBJ.childNodes.length === 3 ) {

                var toARRAY = Array.prototype.slice.call(xmlOBJ.childNodes[1].children);

                toARRAY.forEach(function(e,i){
                var indexBox = i - 3;
                    if( e.nodeName === 'title' || e.nodeName === 'link' || e.nodeName === 'description'){
                        myOBJECT.store_data.push({
                            type: e.nodeName,
                            text: e.textContent
                        });

                    }else if( e.nodeName === 'item') {
                        var toARRAYitem = Array.prototype.slice.call(e.children);
                        myOBJECT.items_data.push({
                            full_text: e.textContent,
                            info_item: {},
                        });

                        toARRAYitem.forEach(function(a,b){
                            
                            if( a.nodeName === 'g:installment'){
                                myOBJECT.items_data[indexBox].info_item.push({installment:{
                                months: `${a.childNodes[0].textContent}`,
                                price_months: `${a.childNodes[1].textContent}`  
                                }})

                            }else {
                                myOBJECT.items_data[indexBox].info_item[`${a.nodeName}`] = a.textContent;
                            }

                        });    

                    }
                });
        
            }
            console.log('Objeto tratado!');
            console.log('-------------------------');
            console.log(myOBJECT)
            console.log('-------------------------');

        },err=>{
            console.log(err)
        });
