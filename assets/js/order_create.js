var inputSku = $("#input-sku");
let skus = [];
var pedimentSku = [];
var base_url = document.location.origin + "/master";
var num_row;

$(document).ready(function() {

    $("form").on("submit",function(e){
        e.preventDefault();
    });

    inputSku.on("keydown",function(e){
        // console.log(e);
        let sku;
        // console.log(e.keyCode);
        sku= $(this).val(); 
        if(e.keyCode === 13){
            let trs = $("input[id^='order-item-']").length;
            if(skus.includes(sku)){//skus son los que ya metí, si ya existe ... 
                let trIndex = skus.indexOf(sku)+1
                let blocked = $("#blocked_"+trIndex).prop("checked");
                debugger;
                if(blocked){
                    $("#add_row").trigger("click");//sino, agrego una fila ... esto lleva a toda una rutina. 
                    return false;

                }
                $("input[id^='order-item-']").each(function(k,v){//recorro los rows que existen buscando coincidencias 
                    let tr= k+1;
                    if($(this).val()== sku){
                        if(zeroStock(tr)){
                           alert("Fuera de stock");
                           cleanReader(inputSku)
                            return false;
                        }                
                        $("#qty_"+tr).val(parseInt($("#qty_"+tr).val(),10)+1);//aumento stock
                        $("#rate_"+tr).val(parseInt($("#rate_"+tr).val(),10)-1);
                       cleanReader(inputSku);
                        return false;               
                    }
                }); 
                              
            }
            else{//si el código que acabo de leer no existe en skus 
                skus.push(sku);

                if($("#order-item-1").val()==""){//si la primera fila está vacía, ahí pongo el valor 
                    $("#order-item-1").val(sku);
                    inputSku.val("");
                }else{

                    $("#add_row").trigger("click");//sino, agrego una fila ... esto lleva a toda una rutina. 
                    return false;
            
                }
                searchSku(sku,trs);//voy por la información del sku y le digo donde ponerla.

            }
        }
        $("select[id^='category-']> option").each(function(key,val){
            if(sku === key){
                alert("SKU : " +sku);
            }
        });

    });

  // Add new row in the table 
    $("#add_row").on('click', function() {

        var table = $("#product_info_table");
        var count_table_tbody_tr = $("#product_info_table tbody tr").length;
        if ($("#rate_" + count_table_tbody_tr).val() === "0") {
            //  alert("Fuera de stock")
            // return false;
        }
        let subCat = $("#sub_category-" + count_table_tbody_tr + " option:selected");
        if (subCat.text() === "Seleccione una opción"){
            alert("Debe seleccionar un pedimento o sin pedimento");
            return false;
        }
        let sku = $("#category-" + count_table_tbody_tr + " option:selected").text();
        let pediment = $("#sub_category-" + count_table_tbody_tr + " option:selected").text();
        let ValorIdProduct = $("#sub_category-" + count_table_tbody_tr + " option:selected").val();
        let orderQty = $("#qty_" + count_table_tbody_tr).val();
        var row_id = count_table_tbody_tr + 1;
        $.ajax({
    url: base_url + '/orders/getTableProductRow/',
    type: 'post',
    dataType: 'json',
    success: function(response) {

    // console.log(reponse.x);
    var html = '<tr id="row_' + row_id + '">' +
            '<td><input type="checkbox" name="blocked_'+row_id+'" id="blocked_'+row_id+'" data-toggle="toggle" data-size="sm"></td>'+
            '<td>  <input type="text" readonly id="order-item-'+row_id+'" value="'+inputSku.val()+'" >' +
            '</td><td><select row_id="' + row_id + '" style="width:250px;" required class="form-control desabilitar autocomplete" id="sub_category-' + row_id + '" name="sub_category[]  ">' +
            '<option value=""></option>';
            $.each(response, function(index, value1) {
            html += '<option  value="' + value1.id + '">' + value1.sku + '</option>';
            });
            html += '</select row_id="' + row_id + '"><div id="oculto' + row_id + '" style="visibility:hidden1"> Cantidad X Pedimento</div>  ' +
            '  <input row_id="' + row_id + '" type="text" style="width:250px;" name="customer_name"  class="form-control desabilitar input-sm" id="suname-' + row_id + '" readonly>' +
            '</td>' +
            ' <td> <input row_id="' + row_id + '" type="text"  style="width:250px;" name="rate_value[]" id="rate_value_' + row_id + '" class="form-control desabilitar" disabled autocomplete="off"></td>' +
            '<td><input row_id="' + row_id + '" type="hidden" name="idproduct-' + row_id + '" id="idproduct-' + row_id + '" value=""> \n\
                                    <input row_id="' + row_id + '" type="number" name="qty[]" style="width:90px;" id="qty_' + row_id + '" readOnly class="form-control desabilitar" min="1" onChange="getTotal(' + row_id + ');compararSiHayStock(this);" onkeyup="getTotal(' + row_id + ');compararSiHayStock(this);"></td>' +
            '<td><input row_id="' + row_id + '" type="text" name="rate[]" style="width:90px;"   id="rate_' + row_id + '" class="form-control desabilitar" disabled><input type="hidden" name="rate_value1[]" id="rate_value1_' + row_id + '" class="form-control"></td>' +
            '<input row_id="' + row_id + '" type="hidden" name="amount[]" id="amount_' + row_id + '" class="form-control desabilitar" disabled><input type="hidden" name="amount_value[]" id="amount_value_' + row_id + '" class="form-control">' +
            '<td><button type="button" class="btn btn-default" id="deleteRow-' + row_id + '" onclick="removeRow(\'' + row_id + '\')"><i class="fa fa-close"></i></button></td>' +
            '</tr>'
            ;
            if (count_table_tbody_tr >= 1) {
                    $("#product_info_table tbody tr:last").after(html);
                    searchSku(inputSku.val(),row_id);
            } else {
              $("#product_info_table tbody").html(html);
             }


            addSelectAction(row_id);
            $("#blocked_"+row_id).bootstrapToggle();
            inputSku.val("");
           // $(".autocomplete").select2();
           addCompareAction(row_id);
    }
        });
//}
//});
        return false;
    });
    addSelectAction(1);
    
    $('.botonOrden').on('click', function() {
        $('.desabilitar').removeAttr("disabled");
                $('.desabilitar').removeAttr("readonly");
    });

    $('#clave').change(function() {
        var sku1 = $(this).val();
        $.ajax({
            url: base_url + '/orders/productsDetails',
            method: 'post',
            data: {
                clave: response.id
            },
            dataType: 'json',
            success: function(response) {
                var len = response.length;
                $('#snombre,#sprecio,#sstock').text('');
                if (len > 0) {
                    // Read values
                    var descripcion = response[0].nombre;
                    var precio = response[0].id_cliente;
                    var stock = response[0].qty;
                    $('#snombre').val(descripcion);
                    $('#sprecio').text(precio);
                    $('#sstock').text(stock);
                }
            }
        });
    });

});
function searchSku(sku1,tr){
    $.ajax({ 
        url: base_url + '/orders/getTableProductRow/',
        type: 'post',
        dataType: 'json',
        data :{sku :sku1},
    }).done(function(response){
        if(undefined != response.success && response.success==false){
            alert(response.message);
            removeRow(tr);
        }
        getProductData(tr,response[0].id);
        var id_AJAX =response[0].id;
        $.ajax({
            url: base_url + '/orders/get_sub_category',
            method: "POST",
            data: {
                id_input: id_AJAX
            },
            async: true,
            dataType: 'json',
            success: function(data) {
                var html = '';
                var i;
                if (data.length == 0) {
                    html += '<option >Sin Pedimento</option>';
                }
                for (i = 0; i < data.length; i++) {
                    html += '<option value="' + data[i].numero + '">' + data[i].numero + '</option>';
                }
                $('#sub_category-' +tr).html(html);
            }
        }).done(function() {
            $("#sub_category-" + tr).trigger("change");
        });
    });
}
      
       
function getTotal(row = null) {
    if (row) {
        var total = Number($("#rate_value_" + row).val()) * Number($("#qty_" + row).val());
        total = total.toFixed(2);
        $("#amount_" + row).val(total);
        $("#amount_value_" + row).val(total);
        //  subAmount();
    } else {
        alert('no row !! please refresh the page');
    }
}

function removeRow(tr_id) {
    if(tr_id ==1){
        skus.pop();
        $("#order-item-"+tr_id).val("");
        return false;
    }
    $("#product_info_table tbody tr#row_" + tr_id).remove();
    let lastRow = tr_id - 1;
        
    $("#category-" + lastRow).removeAttr("disabled");
    let sku = $("#category-" + lastRow + " option:selected").text();
    let pedimento = $("#sub_category-" + lastRow + " option:selected").text();
    let id_producto = $("#sub_category-" + lastRow + " option:selected").text();
    let qty = $("#qty_" + lastRow).val();
    let postData = {sku:sku, qty:qty, numero:pedimento,id_producto:id_producto }
    $.ajax({
            method: "POST",
            url: base_url + "/products/updateProductRollback/",
            data: postData,
            dataType: "JSON",
    });
    $("#sub_category-" + lastRow).removeAttr("disabled");
    $("#suname-" + lastRow).removeAttr("readonly");
    $("#qty_" + lastRow).removeAttr("readonly");
    $("#deleteRow-" + lastRow).show();
 }

function showInp() {
    getSelectValue = document.getElementById("tipo_documento").value;
    if (getSelectValue === "") {

        document.getElementById("vacio").style.display = "inline-block";
        document.getElementById("remision").style.display = "none";
        document.getElementById("valedesalida").style.display = "none";
        
        document.getElementById("remision").disabled = true;
        document.getElementById("valedesalida").disabled = true;
        document.getElementById("factura").disabled = true;
        
        document.getElementById("factura").style.display = "none";
        
        document.getElementById("porajuste").style.display = "none";
        document.getElementById("porajuste").disabled = true;
    } else if (getSelectValue === "Venta") {
        document.getElementById("factura").disabled = false;
        document.getElementById("remision").disabled = true;
        document.getElementById("valedesalida").disabled = true;
        document.getElementById("factura").style.display = "inline-block";
        document.getElementById("vacio").style.display = "none";
        document.getElementById("remision").style.display = "none";
        document.getElementById("valedesalida").style.display = "none";
        document.getElementById("porajuste").style.display = "none";
    } else if (getSelectValue === "Reposición") {

        document.getElementById("factura").disabled = true;
        document.getElementById("remision").disabled = false;
        document.getElementById("vacio").style.display = "none";
        document.getElementById("valedesalida").disabled = true;
        document.getElementById("factura").style.display = "none";
        document.getElementById("remision").style.display = "inline-block";
        document.getElementById("valedesalida").style.display = "none";
        document.getElementById("porajuste").style.display = "none";
    } else if (getSelectValue === "Préstamo") {
        document.getElementById("vacio").style.display = "none";
        document.getElementById("factura").disabled = true;
        document.getElementById("remision").disabled = true;
        document.getElementById("valedesalida").disabled = false;
        document.getElementById("factura").style.display = "none";
        document.getElementById("remision").style.display = "none";
        document.getElementById("valedesalida").style.display = "inline-block";
        document.getElementById("porajuste").style.display = "none";
    }else if (getSelectValue === "Porajuste") {

        document.getElementById("vacio").style.display = "none";
        document.getElementById("factura").disabled = true;
        document.getElementById("remision").disabled = true;
        document.getElementById("valedesalida").disabled = true;
        document.getElementById("porajuste").disabled = false;
        document.getElementById("factura").style.display = "none";
        document.getElementById("remision").style.display = "none";
        document.getElementById("valedesalida").style.display = "none";
        document.getElementById("porajuste").style.display = "inline-block";
    }



}


function pedimentoNulo() {

    let optionsLength = document.getElementById ("sub_category-1").length;
    if (optionsLength >= 0) {

        alert("La longitud es:" + optionsLength);
        var opt = document.createElement('option');
        // create text node to add to option element (opt)
        opt.appendChild(document.createTextNode('New Option Text'));
        // set value property of opt
        opt.value = 'option value';
        // add opt to end of select box (sel)
        sel.appendChild(opt);
    }
    else
    {
        alert('hola');
    }
}
function ocultarMas() {

    if (document.getElementById("category-1").value = "Null") {
        document.getElementById('add_row').style.visibility = 'hidden';
        alert('if');
    }
    else
    {
        alert('else');
        document.getElementById('add_row').style.visibility = 'hidden';
    }

}


function maxLengthCheck(object) {
    if (object.value.length > object.max.length)
        object.value = object.value.slice(0, object.max.length)
}

function isNumeric(evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode(key);
    var regex = /[0-9]|\./;
    if (!regex.test(key)) {
        theEvent.returnValue = false;
        if (theEvent.preventDefault)
        theEvent.preventDefault();
    }
}


function compararSiHayStock(obj) {
    let qty = parseInt($(obj).val(), 10);
    let idVal = $(obj).attr("id");
    let rateVal = idVal.split("_")[1];
    let idRate = $("#rate_" + rateVal);
    if ($(obj).attr("max") !== undefined) {
        if (qty > parseInt($(obj).attr("max"), 10)) {
            alert("no se puede");
            $(obj).val($(obj).attr("max"));
        }
    } else {
        if (qty > parseInt(idRate.val(), 10)) {
            alert("no se puede"); 
            $(obj).val(idRate.val());
        }
    }
}



function getProductData(row_id, product_id) {
    if (product_id == "") {
        $("#rate_" + row_id).val("");
        $("#rate_value_" + row_id).val("");
        $("#qty_" + row_id).val("");
        $("#amount_" + row_id).val("");
        $("#amount_value_" + row_id).val("");
    } else {
        $.ajax({
            url: base_url + '/orders/getProductValueById',
            type: 'post',
            data: {
                product_id: product_id
            },
            dataType: 'json',
            success: function(response) {
                // setting the rate value into the rate input field
                //fucion que recoge el valor de unidades por codigo
                $("#rate_" + row_id).val(parseInt(response.qty,10)-1);
                $("#rate_value_" + row_id).val(response.description);
                $("#qty_" + row_id).val(1);
                $("#qty_value_" + row_id).val(1);
                var total = Number(response.price) * 1;
                total = total.toFixed(2);
                $("#amount_" + row_id).val(total);
                $("#amount_value_" + row_id).val(total);
                $("#rate_" + row_id).attr('data-total', response.qty);
                // subAmount();
            } // /success
        }).done(function() {    
            compareStock()
        }); // /ajax function to fetch the product data 
    }
}

function addSelectAction(row_id)
{

    $('select[id|=category]').change(function() {
        num_row = row_id; 
        let id_product = $(this).val();
        var id_AJAX = $(this).val();
        $.ajax({
            url: base_url + '/orders/get_sub_category',
            method: "POST",
            data: {
                id_input: id_AJAX
            },
            async: true,
            dataType: 'json',
            success: function(data) {

                var html = '';
                var i;
                if (data.length == 0) {
                    html += '<option >Sin Pedimento</option>';
                }
                for (i = 0; i < data.length; i++) {

                    html += '<option value="' + data[i].numero + '">' + data[i].numero + '</option>';
                }

                $('#sub_category-' + num_row).html(html);
            }
        }).done(function() {
            $("#sub_category-" + num_row).trigger("change");
        });
        return false;
    });
    $('select[id|=sub_category').change(function() {
        let activeText = $(this).val();
        let selected = $(this).attr("id");
        let row_id = $(this).attr("row_id");
        console.info(row_id);

        var username = $(this).val();
        //let pedimento = $("#sub_category-"+lastRow+" option:selected").text();
        let sku = $("#order-item-" + row_id ).val();
        let postData = {numero: username, sku:sku}
        $.ajax({
            url: base_url + '/index.php/Orders/userDetails',
            method: 'post',
            data: postData,
            dataType: 'json',
            success: function(response) {
                var len = response.length;
                // $('#suname,#sname,#idproduct').text('');
                if (len > 0) {
                    // Read values
                    var uname = response[0].cantidad;
                    var name = response[0].numero;
                    var idproduct = response[0].id_producto;
                    $('#suname-' + row_id).val(uname);
                    $('#sname-'+row_id).text(name);
                    $('#idproduct-' + row_id).val(idproduct);
                    $('#qty_' + row_id).attr('max', uname);
                    //$('#qty_'+row_id).attr('maxlength', uname);
                    $('#qty_' + row_id).change(function() {
                        var cambie = $('#qty_' + row_id).val();
                        $('#rate_' + num_id).attr('data-valor', cambie);
                    });
                } else {
                        $('#suname-' + row_id).val("");
                        $("#qty_" + row_id).removeAttr("max");
                }
            }
        });
    });
}

function  zeroStock(inputId)
{
    let  rate= parseInt($("#rate_"+inputId).val(),10);
    let qty = parseInt($("#qty_"+inputId).val(),10);
    return rate===0;

}
function  cleanReader(inputSku)
{
    inputSku.val("");//boro input del sku
    inputSku[0].focus;//regreso el foco al input del sku para la siguiente lectura 

}