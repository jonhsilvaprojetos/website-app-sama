class ProductsObject{
    constructor(){ 
        
        this.initEvents();
    }

    initEvents(){
        let $class = this
        $class.returnXMLobj((obj)=>{
                console.log(obj.items_data);
                $class.setProducts(obj.items_data); 

                $class.clickBoxPrimary();

            });     
    }

    clickBoxPrimary(){
        let $class = this

        $('.box_primary').click(function(){
            console.log($(this));
            $class.showModalProds();
            $class.selectProduct($(this));
        });
    }

    setProducts(obj){
        obj.splice(0,100).forEach(element=>{
            var e = element.info_item
            $('#products-modal .row.wrap-prds').append(`
            <div class="col-md-3">
                <div class="product-block">
                    <div  class="wrapdataset hidden">
                    <input class="hidden" id="input-product-dataset" type="text" data-sku="${e['g:id']}" data-name="${e.title}" data-link="${e.link}" data-image="${e['g:image_link']}">
                    </div>
                    <div class="img-product">
                        <div class="wrapimg"><img src="${e['g:image_link']}" alt="${e.title}"></div>
                    </div>
                    <div class="info-product">
                        <div class="name-prod">
                            <span class="txt-name">${e.title}</span>
                        </div>
                        <div class="sku-prod">
                            <span class="txt-sku">SKU: ${e['g:id']}</span>
                        </div>
                    </div>
                    <div id="btn-select-product"><span>Selecionar</span></div>
                </div>
                </div>
            `);

        });
    }


    returnXMLobj(callback){
        var myOBJECT = {
            store_data: [],
            items_data: []
        };
        ajaxREQ.get('xml','https://tema-base-sama.lojaintegrada.com.br/xml/822ee/googlemerchant.xml',Start=>{
            console.log('startou agor');
        },Finish=>{
            console.log('finalizou agr');
        }).then(obj=>{
                   var xmlOBJ = obj.childNodes[0];
        if( xmlOBJ.childNodes.length === 3 ) {
            var toARRAY = Array.prototype.slice.call(xmlOBJ.childNodes[1].children);
            toARRAY.forEach(function(e,i){
            var indexBox = i - 3;
                if( e.nodeName === 'title' || e.nodeName === 'link' || e.nodeName === 'description'){
                    myOBJECT.store_data.push({
                        type: e.nodeName, text: e.textContent
                    });
                }else if( e.nodeName === 'item') {
                    var toARRAYitem = Array.prototype.slice.call(e.children);
                    myOBJECT.items_data.push({
                        full_text: e.textContent,
                        info_item: {}
    
                    });
                    toARRAYitem.forEach(function(a,b){
                        if( a.nodeName === 'g:installment'){
                            myOBJECT.items_data[indexBox].info_item.installments = {
                            months: `${a.childNodes[0].textContent}`, price_months: `${a.childNodes[1].textContent}`  
                            }

                        }else {
                            myOBJECT.items_data[indexBox].info_item[`${a.nodeName}`] = a.textContent;
                        }
                    });    
                }
            });
        }
        callback(myOBJECT);
        },err=>{
            return err
        });
    } /* finish object */


    showModalProds(){
        $('button#triggerModal').click();
    } 
    hideModalProds(){
        $('.modal_products button.close').click();
    }

    selectProduct(THIS){
        let $class = this;
        let thisParents = THIS.parents('[data-parent="parent"]');

        $('div#btn-select-product').click(function(){
            let datasetObject = $(this).parents('.product-block').find('input#input-product-dataset')[0].dataset
            let sttr = JSON.stringify(datasetObject);
            thisParents.find('input#data_set')[0].dataset.select = sttr;
            thisParents.find('#getProductHTML').html($class.htmlProdSelected(datasetObject));

            $class.hideModalProds();
        });	
    }




    htmlProdSelected(obj){
        let htmlProd = `
        <div class="prod_select">
            <div class="img_select">
                <img src="${obj.image}" alt="${obj.name}">
            </div>
            <div class="info_select">
                <span class="name_select">${obj.name}</span>
                <span class="sku_select">SKU: ${obj.sku}</span>
            </div>
        </div>`;
        return htmlProd
    }



} /* end class */




const productsObject = new ProductsObject();

