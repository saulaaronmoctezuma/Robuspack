        var base_url = document.location.origin+"/master";
        $(document).ready(function() {
        addSelectAction();
        // $(".select_group").select2();
                // $("#description").wysihtml5();

                $("#mainOrdersNav").addClass('active');
                $("#addOrderNav").addClass('active');
                var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' +
                        'onclick="alert(\'Call your custom code here.\')">' +
                        '<i class="glyphicon glyphicon-tag"></i>' +
                        '</button>';
                // Add new row in the table 
                $("#add_row").on('click', function() {
                        var table = $("#product_info_table");
                        var count_table_tbody_tr = $("#product_info_table tbody tr").length;
                        var row_id = count_table_tbody_tr + 1;
                        $.ajax({
                                url: base_url + '/orders/getTableProductRow/',
                                type: 'post',
                                dataType: 'json',
                                success: function(response) {

                                        // console.log(reponse.x);
                                        var html = '<tr id="row_' + row_id + '">' +
                                                '<td>' +
                                                '<select required class="form-control select_group product" data-row-id="' + row_id + '" id="category-' + row_id + '" name="product[]" style="width:100%;" onchange="getProductData(' + row_id + ');">' +
                                                '<option value=""></option>';
                                        $.each(response, function(index, value) {
                                                html += '<option value="' + value.id + '">' + value.sku + '</option>';
                                        });
                                        html += '</select><br></td>' +
                                                '<td><select required class="form-control" id="sub_category-' + row_id + '" name="sub_category' + row_id + '">' +
                                                '<option value=""></option>';
                                        $.each(response, function(index, value1) {
                                                html += '<option value="' + value1.id + '">' + value1.sku + '</option>';
                                        });
                                        html += '</select>Cantidad X Pedimento' +
                                        '  <input type="text" name="customer_name" class="form-control" id="suname-'+ row_id + '" readonly>'+
                                                '</td>' +
                                                ' <td> <input type="text" name="rate_value[]" id="rate_value_' + row_id + '" class="form-control" disabled autocomplete="off"></td>' +
                                                '<td><input type="number" name="qty[]" id="qty_' + row_id + '" class="form-control" min="1" onchange="getTotal(' + row_id + ');compararSiHayStock();" onkeyup="getTotal(' + row_id + ');compararSiHayStock();"></td>' +
                                                '<td><input type="text" name="rate[]" id="rate_' + row_id + '" class="form-control" disabled><input type="hidden" name="rate_value[]" id="rate_value_' + row_id + '" class="form-control"></td>' +
                                                '<input type="hidden" name="amount[]" id="amount_' + row_id + '" class="form-control" disabled><input type="hidden" name="amount_value[]" id="amount_value_' + row_id + '" class="form-control">' +
                                                '<td><button type="button" class="btn btn-default" onclick="removeRow(\'' + row_id + '\')"><i class="fa fa-close"></i></button></td>' +
                                                '</tr>'





                                        ;
                                        if (count_table_tbody_tr >= 1) {
                                                $("#product_info_table tbody tr:last").after(html);
                                        } else {
                                                $("#product_info_table tbody").html(html);
                                        }

                                // $(".product").select2();
                                addSelectAction();
                                }
                        });
                        return false;
                });

                



        }); // /document

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
                subAmount();
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
                                document.getElementById("valedesalida").style.display = "none";
                                document.getElementById("bill_no").disabled = true;
                                document.getElementById("remision").disabled = true;
                                document.getElementById("valedesalida").disabled = true;
                        } else if (getSelectValue === "Venta") {
                                document.getElementById("factura").disabled = false;
                                document.getElementById("remision").disabled = true;
                                document.getElementById("valedesalida").disabled = true;
                                document.getElementById("factura").style.display = "inline-block";
                                document.getElementById("vacio").style.display = "none";
                                document.getElementById("remision").style.display = "none";
                                document.getElementById("valedesalida").style.display = "none";
                        } else if (getSelectValue === "Reposición") {
                                document.getElementById("factura").disabled = true;
                                document.getElementById("remision").disabled = false;
                                document.getElementById("vacio").style.display = "none";
                                document.getElementById("valedesalida").disabled = true;
                                document.getElementById("factura").style.display = "none";
                                document.getElementById("remision").style.display = "inline-block";
                                document.getElementById("valedesalida").style.display = "none";
                        } else if (getSelectValue === "Préstamo") {
                                document.getElementById("vacio").style.display = "none";
                                document.getElementById("factura").disabled = true;
                                document.getElementById("remision").disabled = true;
                                document.getElementById("valedesalida").disabled = false;
                                document.getElementById("factura").style.display = "none";
                                document.getElementById("remision").style.display = "none";
                                document.getElementById("valedesalida").style.display = "inline-block";
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


        function compararSiHayStock() {

                for (let i = 1; i < 10000; i++) {
                        if (parseInt(document.getElementById("qty_" + i).value) > parseInt(document.getElementById("rate_" + i).value)) {
                                alert("No hay Stock Suficiente");
                                // document.getElementById("boton") .disabled = true;
                                document.getElementById("qty_" + i).value = null;
                        } else if (document.getElementById("product_" + i).value === " ") {

                        } else {
                                document.getElementById("boton").disabled = false;
                        }
                }
        }



        function getProductData(row_id,product_id) {
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
                                $("#qty_" + row_id).val(1);
                                $("#qty_value_" + row_id).val(1);
                                var total = Number(response.price) * 1;
                                total = total.toFixed(2);
                                $("#amount_" + row_id).val(total);
                                $("#amount_value_" + row_id).val(total);
                                
                                $("#rate_"+ row_id).attr('data-total' , response.qty); 
                                
                                // subAmount();
                        } // /success
                }).done(function(){
                
                        
                }); // /ajax function to fetch the product data 
        }
        }

        var num_row;
        function addSelectAction()
        {
        
        $('select[id|=category]').change(function() {
                num_row = $(this).parent().parent().attr("id").split("_")[1];
                let id_product = $(this).val();
                getProductData(num_row,id_product);
                var id_AJAX = $(this).val();
                $.ajax({
                        url: base_url+'/orders/get_sub_category',
                        method: "POST",
                        data: {
                                id_input: id_AJAX
                        },
                        async: true,
                        dataType: 'json',
                        success: function(data) {

                                var html = '';
                                var i;
                                for (i = 0; i < data.length; i++) {

                                        html += '<option value="' + data[i].numero + '">' + data[i].numero + '</option>';
                                }

                                $('#sub_category-'+num_row).html(html);
                        

                        }
                }).done(function(){
                $("#sub_category-"+num_row).trigger("change");
                });
                return false;
        });
        $('select[id|=sub_category').change(function() {
        var username = $(this).val();
        $.ajax({
                url: base_url+'/index.php/Orders/userDetails',
                method: 'post',
                data: {
                        numero: username
                },
                dataType: 'json',
                success: function(response) {
                        var len = response.length;
                        $('#suname,#sname,#semail').text('');
                        if (len > 0) {
                                // Read values
                                var uname = response[0].cantidad;
                                var name = response[0].numero;
                                var email = response[0].id_producto;
                                $('#suname-'+num_row).val(uname);
                                $('#sname').text(name);
                                $('#semail').text(email);

                                
                                $('#qty_'+num_row).attr('max', uname);
                                //$('#qty_'+num_row).attr('maxlength', uname);
                                

                                

                              
                              
                              $('#qty_'+num_row).change(function() {
                                        var cambie = $('#qty_'+num_row).val();

                                        
                                
                                        $('#rate_'+num_id).attr('data-valor',cambie);

                                });

                                


                                
                                

                                
                        
                                
                        }
                }
        });
        });
        }

