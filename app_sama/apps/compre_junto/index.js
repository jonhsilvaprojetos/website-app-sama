class ProductsObject{
    constructor(){ 
        
        this.initEvents();
    }

    initEvents(){
        let $class = this
        $class.returnXMLobj((obj)=>{
                console.log(obj.items_data);
                $class.loadProducts(obj.items_data); 
                $class.clickBoxPrimary();
                $class.clickBoxThumb();
                $class.clickAddMoreMore();
            });     
    }

    clickAddMoreMore(){
        let $class = this;
        $('.add_miniaturas').click(function(){
            let thisAdd = $(this).siblings('.wrap_receive');
            $class.showModalProds();
                $('div#btn-select-product').unbind().click(function(e){
                    let datasetObject = $(this).parents('.product-block').find('input#input-product-dataset')[0].dataset
                    let sttr = JSON.stringify(datasetObject);
                    thisAdd.append(`<div id="data_parent_thumb">
                                    <div class="box_thumbnails">
                                        <div class="wrap_dataset">
                                            <div class="wrap_date hidden">
                                                <div class="i-date hidden"><input class="hidden" type="text" id="data_set" data-select="${sttr}"></div>
                                            </div>
                                        </div>
                                        <div id="getProductHTML">
                                            ${$class.htmlProdSelected(datasetObject)}
                                        </div> 
                                        <div class="action_block">
                                        <div id="change_prod"><i class="fas fa-exchange-alt"></i></div>   
                                        <div class="remove"><i class="fas fa-trash"></i></div>
                                        </div>
                                    </div>
                                </div>`);
                    $class.changeProd();
            $class.hideModalProds();     
            });	

        });
    }
    changeProd(){
        let $class = this
        $class.clickBoxToAdd('div#data_parent_thumb div#change_prod','div#data_parent_thumb');
    }

    clickBoxPrimary(){
        let $class = this
        $class.clickBoxToAdd('.box_primary','#data_parent_primary');
    }

    clickBoxThumb(){
        let $class = this
        $class.clickBoxToAdd('.actions_thumb','#data_parent_thumb');
    }
    
    clickBoxToAdd(Element, Parents){
        let $class = this
        $(Element).click(function(){
            
            $class.showModalProds();
            $class.selectProduct($(this), Parents);
        });
    }

    
    selectProduct(THIS, PARENTS){
        let $class = this;
        let thisParents = THIS.parents(PARENTS);
        $('div#btn-select-product').unbind().on('click',function(e){
                console.log(thisParents);
                let datasetObject = $(this).parents('.product-block').find('input#input-product-dataset')[0].dataset
                let sttr = JSON.stringify(datasetObject);
                thisParents.find('input#data_set')[0].dataset.select = sttr;
                thisParents.find('input#data_set')[0].value = sttr;
                thisParents.find('#getProductHTML').html($class.htmlProdSelected(datasetObject));
                thisParents.find('.action_block').removeClass('hidden');
                THIS.addClass('received');
                $class.hideModalProds();     
        });	
    }

    DOMProducts(e){
        let prodLoaded = `<div class="col-md-3">
        <div class="product-block">
            <div  class="wrapdataset hidden">
            <input class="hidden" id="input-product-dataset" type="text" data-sku="${e['g:id']}" data-name="${e.title}" data-link="${e.link}" data-image="${e['g:image_link']}">
            </div>
            <div class="img-product">
                <div class="wrapimg"><img src="${e['g:image_link'].replace('/800x800/','/300x300/')}" alt="${e.title}"></div>
            </div>
            <div class="info-product">
                <div class="name-prod">
                    <span class="txt-name data-toggle="tooltip" data-placement="bottom" title="${e.title}">${e.title}</span>
                </div>
                <div class="sku-prod">
                    <span class="txt-sku">SKU: ${e['g:id']}</span>
                </div>
            </div>
            <div id="btn-select-product"><span>Selecionar</span></div>
        </div>
        </div>`;
        return prodLoaded;

    }

    loadProducts(obj){
        let $class = this;
        let inicio = 0;
        let fim = 50;


        $('div#exampleModal').scroll(function() {
            if($('div#exampleModal').scrollTop() + $('div#exampleModal').height() == $('.modal-dialog').height() + 40) {
                inicio + 50
                fim + 100;
                obj.splice(inicio,fim).forEach(element=>{
                    var e = element.info_item
                    $('#products-modal .row.wrap-prds').append($class.DOMProducts(e));
   
                });
            }
        });

                obj.splice(inicio,fim).forEach(element=>{
                    var e = element.info_item
                    $('#products-modal .row.wrap-prds').append($class.DOMProducts(e));
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

