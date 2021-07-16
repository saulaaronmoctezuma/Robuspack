

$(document).ready(function() {
$(".select_group").select2();
        });
        var base_url = document.location.origin + "/master";
        $(document).ready(function() {
addSelectAction();
        $(".select_group1").select2();
        $("#category-2").select2({
placeholder: "Select Country",
        allowClear: true
});
        // $("#description").wysihtml5();


        // Add new row in the table 
        $("#add_row").on('click', function() {
/*
$('#myform').validate({ // initialize the plugin
        rules: {
            field1: {
                required: true,
               
            }
            
        }
    });*/
var table = $("#product_info_table");
        
        /*if ($("#rate_" + count_table_tbody_tr).val() === "0") {
alert("Fuera de stock");
        return false;
}

let
        subCat = $("#sub_category-" + count_table_tbody_tr + " option:selected");
        if (subCat.text() === "Seleccione una opción"){
alert("Debe seleccionar un pedimento o sin pedimento");
        return false;
}
let sku = $("#category-" + count_table_tbody_tr + " option:selected").text();
        let pediment = $("#sub_category-" + count_table_tbody_tr + " option:selected").text();
        let orderQty = $("#qty_" + count_table_tbody_tr).val();
        let
        postData = {sku : sku, qty :orderQty, pediment:pediment };
        $.ajax({
        method: "POST",
                url: base_url + "/products/updateProduct/",
                data: postData,
                dataType: "JSON",
        }).done(function(response) {
if (response.success) {*/


var count_table_tbody_tr = $("#product_info_table tbody tr").length;
$("#category-" + count_table_tbody_tr).attr("disabled", "disabled");
        $("#sub_category-" + count_table_tbody_tr).attr("disabled", "disabled");
        $("#suname-" + count_table_tbody_tr).attr("readonly", "readonly");
        $("#qty_" + count_table_tbody_tr).attr("readonly", "readonly");
        $("#deleteRow-" + count_table_tbody_tr).hide();
        var row_id = count_table_tbody_tr + 1;
        
        
    /*     $('#myform').validate({ // initialize the plugin
        rules: {
            qty1: {
                required: true,
                
            }
        }
    });*/
    
    
        $.ajax({
        url: base_url + '/orders/getTableProductRow/',
                type: 'post',
                dataType: 'json',
                success: function(response) {

                // console.log(reponse.x);
                var html = '<tr id="row_' + row_id + '">' +
                        '<td>' +
                        '<select class="form-control desabilitar autocomplete" style="width:170px;" data-row-id="' + row_id + '" id="category-' + row_id + '" name="product[]" style="width:100%;" onchange="getProductData(' + row_id + ');">' +
                        '<option value="Null">Seleccione una opción</option>';
                        $.each(response, function(index, value) {
                        html += '<option value="' + value.id + '">' + value.sku + '</option>';
                        });
                        html += '</select><br></td>' +
                        '<!--<select style="width:250px;" required class="form-control desabilitar autocomplete" id="sub_category-' + row_id + '" name="sub_category[]  ">' +
                        '<option value=""></option>';
                        $.each(response, function(index, value1) {
                        html += '<option value="' + value1.id + '">' + value1.sku + '</option>';
                        });
                        html += '</select>-->\n\
                            <!--<input type="text" style="width:250px;" name="numero_de_pedimento[]" id="sub_category_1" class="form-control desabilitar" autocomplete="off">-->\n\
                            \n\
                            <!--<div id="oculto' + row_id + '" style="visibility:hidden1"> Cantidad X Pedimento</div>  ' +
                        '  <input type="text" style="width:250px;" name="cantidad_por_pedimento"  class="form-control desabilitar input-sm" id="suname-' + row_id + '"> -->' +
                        '' +
                        ' <td> <input type="text"  style="width:250px;" name="rate_value[]" id="rate_value_' + row_id + '" class="form-control desabilitar" disabled autocomplete="off"></td>' +
                        '<td><input type="hidden" id="idproduct-' + row_id + '" value=""> \n\
                                                <input type="number" name="qty[]" required onchange="sumaInventarioEntrada()" onkeyup="sumaInventarioEntrada()"  style="width:90px;" id="qty_' + row_id + '" class="form-control desabilitar claseSuma_' + row_id + '" min="1"></td>' +
                        '<<\n\
\n\
<td><input type="text" onchange="sumaInventarioEntrada()" onkeyup="sumaInventarioEntrada()"  name="rate[]" style="width:90px;"   id="rate_' + row_id + '" class="form-control desabilitar claseSuma_' + row_id + '" disabled></td>\n\
\n\
\n\
<td>  <input type="text" class="form-control" name="total_de_piezas[]" style="background-color:#03E7F7;" readonly="" id="suma_' + row_id + '"> </td><input type="hidden" name="rate_value1[]" id="rate_value1_' + row_id + '" class="form-control">' +
                        '<input type="hidden" name="amount[]" id="amount_' + row_id + '" class="form-control desabilitar" disabled><input type="hidden" name="total_de_piezas[]" id="amount_value_' + row_id + '" class="form-control">' +
                        '<td><button type="button" class="btn btn-default" id="deleteRow-' + row_id + '" onclick="removeRow(\'' + row_id + '\')"><i class="fa fa-close"></i></button></td>' +
                        '</tr>'





                        ;
                        if (count_table_tbody_tr >= 1) {
                $("#product_info_table tbody tr:last").after(html);
                } else {
                $("#product_info_table tbody").html(html);
                }


                addSelectAction();
                        $(".autocomplete").select2();
                }
        });
/*}
});*/
        return false;
});
        }); // /document




        $(document).ready(function() {

$('.botonOrden').on('click', function() {
$('.desabilitar').removeAttr("disabled");
        $('.desabilitar').removeAttr("readonly");
})
        });
        /*function getTotal(row = null) {
        if (row) {
        var total = Number($("#rate_value_" + row).val()) * Number($("#qty_" + row).val());
                total = total.toFixed(2);
                $("#amount_" + row).val(total);
                $("#amount_value_" + row).val(total);
                //  subAmount();
                } else {
        alert('no row !! please refresh the page');
        }
        }*/

// get the product information from the server


// calculate the total amount of the order
// function subAmount() {
//         var service_charge = <?php echo ($company_data['service_charge_value'] > 0) ? $company_data['service_charge_value'] : 0; ?>;
//         var vat_charge = <?php echo ($company_data['vat_charge_value'] > 0) ? $company_data['vat_charge_value'] : 0; ?>;
//         var tableProductLength = $("#product_info_table tbody tr").length;
//         var totalSubAmount = 0;
//         for (x = 0; x < tableProductLength; x++) {
//                 var tr = $("#product_info_table tbody tr")[x];
//                 var count = $(tr).attr('id');
//                 count = count.substring(4);
//                 totalSubAmount = Number(totalSubAmount) + Number($("#amount_" + count).val());
//         } // /for

//         totalSubAmount = totalSubAmount.toFixed(2);
//         // sub total
//         $("#gross_amount").val(totalSubAmount);
//         $("#gross_amount_value").val(totalSubAmount);
//         // vat
//         var vat = (Number($("#gross_amount").val()) / 100) * vat_charge;
//         vat = vat.toFixed(2);
//         $("#vat_charge").val(vat);
//         $("#vat_charge_value").val(vat);
//         // service
//         var service = (Number($("#gross_amount").val()) / 100) * service_charge;
//         service = service.toFixed(2);
//         $("#service_charge").val(service);
//         $("#service_charge_value").val(service);
//         // total amount
//         var totalAmount = (Number(totalSubAmount) + Number(vat) + Number(service));
//         totalAmount = totalAmount.toFixed(2);
//         // $("#net_amount").val(totalAmount);
//         // $("#totalAmountValue").val(totalAmount);

//         var discount = $("#discount").val();
//         if (discount) {
//                 var grandTotal = Number(totalAmount) - Number(discount);
//                 grandTotal = grandTotal.toFixed(2);
//                 $("#net_amount").val(grandTotal);
//                 $("#net_amount_value").val(grandTotal);
//         } else {
//                 $("#net_amount").val(totalAmount);
//                 $("#net_amount_value").val(totalAmount);
//         } // /else discount 

// } // /sub total amount

function removeRow(tr_id) {
$("#product_info_table tbody tr#row_" + tr_id).remove();
        let
        lastRow = tr_id - 1;
        $("#category-" + lastRow).removeAttr("disabled");
        let
        sku = $("#category-" + lastRow + " option:selected").text();
        let
        pedimento = $("#sub_category-" + lastRow + " option:selected").text();
        let
        qty = $("#qty_" + lastRow).val();
        let
        postData = {sku:sku, qty:qty, numero:pedimento}
$.ajax({
method: "POST",
        url: base_url + "/products/updateProductRollback/",
        data: postData,
        dataType: "JSON",
});
        $("#sub_category-" + lastRow).removeAttr("disabled");
        $("#suname-" + lastRow).removeAttr("readonly");
        //$("#qty_" + lastRow).removeAttr("readonly");
        $("#deleteRow-" + lastRow).show();
        }




$(document).ready(function() {


});
        $(document).ready(function() {

$('#clave').change(function() {
var sku1 = $(this).val();
        $.ajax({
        url: base_url + '/orders/productsDetails',
                method: 'post',
                data: {
                clave: sku1
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
        function showInp() {
        getSelectValue = document.getElementById("tipo_documento").value;
                if (getSelectValue === "") {
        document.getElementById("vacio").style.display = "inline-block";
                document.getElementById("remision").style.display = "none";
               
               
                document.getElementById("remision").disabled = true;
             
                document.getElementById("factura").disabled = true;
                
                document.getElementById("factura").style.display = "none";
                
               
        } else if (getSelectValue === "Venta") {
        document.getElementById("factura").disabled = false;
                document.getElementById("remision").disabled = true;
              
                document.getElementById("factura").style.display = "inline-block";
                document.getElementById("vacio").style.display = "none";
                document.getElementById("remision").style.display = "none";
               
        } else if (getSelectValue === "Devolución") {
        document.getElementById("factura").disabled = true;
                document.getElementById("remision").disabled = false;
                document.getElementById("vacio").style.display = "none";
               
                document.getElementById("factura").style.display = "none";
                document.getElementById("remision").style.display = "inline-block";
              
        } 


        }




/*function mostrarPedimento() {
 
 for (let i = 1; i < 10000; i++) {
 
 
 var getSelectValue = document.getElementById("category-"+i).value;
 if (getSelectValue === "Null") {
 //alert ('if')
 document.getElementById("sub_category-"+ i).style.display = "none";
 document.getElementById("suname-"+ i).style.display = "none";
 document.getElementById("suname-"+ i).value="";
 document.getElementById("sub_category-"+ i).value=0;
 document.getElementById('oculto'+ i).style.visibility='hidden';
 } else  {
 // alert ('else')
 document.getElementById("sub_category-"+ i).style.display = "inline-block";
 document.getElementById("suname-"+ i).style.display = "inline-block";
 //document.getElementById("suname-"+ i).value="No Aplica";
 document.getElementById('oculto'+ i).style.visibility='visible';
 
 }
 
 }
 
 }*/


function sumaInventarioEntrada() {
    $(document).ready(function() {

        id_tr = $("#product_info_table tbody tr").length;


//$(".claseSuma_"+id_tr).on("blur", function(){



        var sum = 0;
        $(".claseSuma_" + id_tr).each(function() {
            if ($(this).val() !== "")
                sum += parseInt($(this).val());
        });

        $("#suma_" + id_tr).val(sum);

//});         


    });

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

/*
function compararSiHayStock(obj) {
let
        qty = parseInt($(obj).val(), 10);
        let
        idVal = $(obj).attr("id");
        let
        rateVal = idVal.split("_")[1];
        let
        idRate = $("#rate_" + rateVal);
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
*/


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




        // $("#rate_"+row_id).val(response.price);
        //fucion que recoge el valor de unidades por codigo
        $("#rate_" + row_id).val(response.qty);
                $("#rate_value_" + row_id).val(response.description);
               // $("#qty_" + row_id).val(0);
                $("#qty_value_" + row_id).val(1);
               // var total = Number(response.price) * 1;
               // total = total.toFixed(2);
                $("#amount_" + row_id).val(total);
                $("#amount_value_" + row_id).val(total);
                $("#rate_" + row_id).attr('data-total', response.qty);
                // subAmount();
        } // /success
}).done(function() {


}); // /ajax function to fetch the product data 
}
}

var num_row;
        function addSelectAction()
                {

                $('select[id|=category]').change(function() {
                num_row = $(this).parent().parent().attr("id").split("_")[1];
                        let
                        id_product = $(this).val();
                        getProductData(num_row, id_product);
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

                                var html = '<option value="0">Seleccione una opción</option>';
                                        var i;
                                        if (data.length == 0) {
                                html += '<option >Sin Pedimento</option>';
                                }/*else{
                                 html += '<option >Sin Pedimento</option>';
                                 }*/
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
                let
                        activeText = $(this).val();
                        let
                        selected = $(this).attr("id");
                        $('select[id|=sub_category').each(function() {
                if (activeText === $(this).val() && activeText !== 0 && $(this).attr("id") != selected) {
                /*if ($("#" + selected.slice(4)).val() === $("#" + $(this).attr("id").slice(4)).val()) {

                alert("escoge otra opción")
                        $("#" + selected + " > option[value=0]").prop("selected", true)
                        // return false;

                }*/
                }
                })

                        var username = $(this).val();
                        //let pedimento = $("#sub_category-"+lastRow+" option:selected").text();
                        let
                        sku = $("#category-" + num_row + " option:selected").text();
                        let
                        postData = {numero: username, sku:sku}
                $.ajax({
                url: base_url + '/index.php/Orders/userDetails',
                        method: 'post',
                        data: postData,
                        dataType: 'json',
                        success: function(response) {
                        var len = response.length;
                                $('#suname,#sname,#idproduct').text('');
                                if (len > 0) {
                        // Read values
                        var uname = response[0].cantidad;
                                var name = response[0].numero;
                                var idproduct = response[0].id_producto;
                                $('#suname-' + num_row).val(uname);
                                $('#sname').text(name);
                                $('#idproduct-' + num_row).val(idproduct);
                                $('#qty_' + num_row).attr('max', uname);
                                //$('#qty_'+num_row).attr('maxlength', uname);


                                $('#qty_' + num_row).change(function() {
                        var cambie = $('#qty_' + num_row).val();
                                $('#rate_' + num_id).attr('data-valor', cambie);
                        });
                        } else {
                        $('#suname-' + num_row).val("");
                                $("#qty_" + num_row).removeAttr("max");
                        }
                        }
                });
                });
                        }

function estaSeleccionado(id_tr) {
    id_tr = $("#product_info_table tbody tr").length;

    $(ckbox).html('');
    var ckbox = $('#check_1');
    //$('#check_'+id_tr ).on('click', function() {
    if (ckbox.is(':checked')) {
        //ckbox.prop('checked', true)
       // alert('seleccionado' + id_tr + 'pedimento_' + id_tr);
        $('#pedimento_1').css('background-color', '#03E7F7');
        $("#pedimento_1").attr("placeholder", "Sin Pedimento").placeholder();
        $('#pedimento_1').val('');

        $('#pedimento_1' ).addClass("readOnly");
    } else if ($('#check_1' ).is(":not(:checked)")) {
        //ckbox .prop('checked', false)
     // alert('no esta seleccionado' + id_tr)
        $('#pedimento_1' ).css('background-color', '#FFFFFF');
        $('#pedimento_1' ).val('');
        $('#pedimento_1').removeAttr("readonly");

          $("#pedimento_1").attr("placeholder", "").placeholder();
    }
    // });


}