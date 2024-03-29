<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Ordenes</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12 col-xs-12">

                <div id="messages"></div>

                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php elseif ($this->session->flashdata('error')) : ?>
                    <div class="alert alert-error alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                <?php endif; ?>

                <style>
                    .sinborde {
                        border: 0;
                    }
                </style>
                <div class="box">
                    
                    <!-- /.box-header -->
                    <form role="form" action="<?php base_url('orders/create') ?>" method="post" class="form-horizontal">
                        <div class="box-body">

                            <?php echo validation_errors(); ?>

                            <!-- <div class="form-group">
                                <label for="date" class="col-sm-12 control-label">Date: <?php echo date('Y-m-d') ?></label>
                              </div>
                              <div class="form-group">
                                <label for="time" class="col-sm-12 control-label">Date: <?php echo date('h:i a') ?></label>
                              </div>-->
                           
                            <center><div class="row">
                                <div class="col-md-4">
<<<<<<< HEAD
                                    <label for="bill_no"  class="col-sm-5 control-label" style="text-align:left; font-size: 15px;">Tipo de entrada</label>
=======
                                    <label for="bill_no"  class="col-sm-5 control-label" style="text-align:left; font-size: 15px;">Tipo de salida</label>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                                    <div class="form-group">

                                        <input type="text" style="background-color:#D1D1D1;border:0;"  readonly class="form-control" id="bill_no" name="bill_no" placeholder="Escribe el numero de Factura" value="<?php echo $order_data['order']['tipo_de_documento'] ?>" autocomplete="off" />

                                    </div>
                                </div> 
                            </div> 
                            
                            </center>
                              <div class="row">



                                <div class="col-md-4">
                                    <label for="bill_no"  class="col-sm-5 control-label" style="text-align:left; font-size: 15px;">No</label>

                                    <div class="form-group">

                                        <input type="text" style="background-color:#D1D1D1;;"  readonly class="form-control " id="bill_no" name="bill_no" placeholder="Escribe el numero de Factura" value="<?php echo $order_data['order']['numero_documento'] ?>" autocomplete="off" />

                                    </div>
                                </div> 
                            </div>
                            
                               <div class="row">
                                <div class="col-md-4">
                                    <label for="bill_no"  class="col-sm-5 control-label" style="text-align:left; font-size: 15px;">Pedimento</label>

                                    <div class="form-group">

                                        <input type="text" style="background-color:#D1D1D1;border:0;"  readonly class="form-control" id="bill_no" name="bill_no" placeholder="Escribe el numero de Factura" value="<?php echo $order_data['order']['pedimento'] ?>" autocomplete="off" />

                                    </div>
                                </div> 
                            </div> 

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="gross_amount" class="col-sm-5 control-label" style="text-align:left; font-size: 15px;">Consecutivo</label>
                                        <div>
                                            <input type="text" readonly class="form-control" style="background-color:#D1D1D1;" id="consecutivo" name="consecutivo"  value="<?php echo $order_data['order']['consecutivo'] ?>" autocomplete="off"/>
                                        </div>   


                                    </div>
                                </div>
                            </div> 


                         
                        </div>


                        <br /> <br />

                        <div id="div1">
                            <table class="table table-bordered" id="product_info_table">
                                <thead>
                                    <tr>
                                        <th style="width:25%">Refacción</th>
                                        <th style="width:25%">Descripción</th>
                                        <th style="width:65%"> Piezas Agregadas </th>

                                    </tr>
                                </thead>

                                <tbody>

                                    <?php if (isset($order_data['order_item'])) : ?>
                                        <?php $x = 1; ?>
                                        <?php foreach ($order_data['order_item'] as $key => $val) : ?>
                                            <?php //print_r($v); 
                                            ?>
                                            <tr id="row_<?php echo $x; ?>">
                                                <td>
                                                    <select class="form-control select_group product sinborde" disabled data-row-id="row_<?php echo $x; ?>" id="product_<?php echo $x; ?>" name=id="product_<?php echo $x; ?>""product[]" style="width:100%;" onchange="getProductData(<?php echo $x; ?>)" required>
                                                        <option value=""></option>
                                                        <?php foreach ($products as $k => $v) : ?>
                                                            <option value="<?php echo $v['id'] ?>" <?php
                                                            if ($val['id_product'] == $v['id']) {
                                                              echo "selected='selected'";
                                                            }
                                                            ?>><?php echo $v['sku'] ?></option>
                                                     <?php endforeach ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    
                                                     <select class="form-control select_group product sinborde" disabled data-row-id="row_<?php echo $x; ?>" id="product_<?php echo $x; ?>" name=id="product_<?php echo $x; ?>""product[]" style="width:100%;" onchange="getProductData(<?php echo $x; ?>)" required>
                                                        <option value=""></option>
                                                        <?php foreach ($products as $k => $v) : ?>
                                                            <option value="<?php echo $v['id'] ?>" <?php
                                                            if ($val['id_product'] == $v['id']) {
                                                              echo "selected='selected'";
                                                            }
                                                            ?>><?php echo $v['description'] ?></option>
                                                     <?php endforeach ?>
                                                    </select>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    <!--<input readonly oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" min="1" max="5000" maxlength="4" type="number" name="qty[]" id="stock_<?php echo $x; ?>" class="form-control sinborde" onchange="getTotal(<?php echo $x; ?>)" onkeyup="getTotal(<?php echo $x; ?>)" value="<?php echo $val['stock'] ?>" autocomplete="off"></td>
                                                -->
                                                
                                                <td> 
                                                    
                                                   <!-- <input type="text" name="rate[]" id="rate_<?php echo $x; ?>" class="form-control" disabled value="<?php echo $val['pedimento'] ?>" autocomplete="off">
                                                    
                                                    
                                                    <br>-->
                                                   
                                                   
                                                    
                                                     <input type="text" name="rate[]" id="rate_<?php echo $x; ?>" class="form-control" disabled value="<?php echo $val['pieza_nuevas'] ?>" autocomplete="off">
                                                   
                                                        
                                                    <input type="hidden" name="rate_value[]" id="rate_value_<?php echo $x; ?>" class="form-control" value="<?php echo $val['total_de_piezas'] ?>" autocomplete="off">
                                                </td>

                             

                                        </tr>
                                        <?php $x++; ?>
    <?php endforeach; ?>
<?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <br /> <br />

                     

                </div>
                <!-- /.box-body -->

                <div class="box-footer">

                    <input type="hidden" name="service_charge_rate" value="<?php echo $company_data['service_charge_value'] ?>" autocomplete="off">
                    <input type="hidden" name="vat_charge_rate" value="<?php echo $company_data['vat_charge_value'] ?>" autocomplete="off">

                    <!-- <a target="__blank" href="<?php echo base_url() . 'orders/printDiv/' . $order_data['order']['id'] ?>" class="btn btn-default" >Imprimir</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>-->
                    <a href="<?php echo base_url('inventory/') ?>" class="btn btn-warning">Regresar</a>
                </div>
                </form>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- col-md-12 -->
</div>
<!-- /.row -->


</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
    var base_url = "<?php echo base_url(); ?>";

    // function printOrder(id)
    // {
    //   if(id) {
    //     $.ajax({
    //       url: base_url + 'orders/printDiv/' + id,
    //       type: 'post',
    //       success:function(response) {
    //         var mywindow = window.open('', 'new div', 'height=400,width=600');
    //         // mywindow.document.write('<html><head><title></title>');
    //         // mywindow.document.write('<link rel="stylesheet" href="<?php //echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') 
?>" type="text/css" />');
    //         // mywindow.document.write('</head><body >');
    //         mywindow.document.write(response);
    //         // mywindow.document.write('</body></html>');

    //         mywindow.print();
    //         mywindow.close();

    //         return true;
    //       }
    //     });
    //   }
    // }

    $(document).ready(function() {
        $(".select_group").select2();
        // $("#description").wysihtml5();

        $("#mainOrdersNav").addClass('active');
        $("#manageOrdersNav").addClass('active');


        // Add new row in the table 
        $("#add_row").unbind('click').bind('click', function() {
            var table = $("#product_info_table");
            var count_table_tbody_tr = $("#product_info_table tbody tr").length;
            var row_id = count_table_tbody_tr + 1;

            $.ajax({
                url: base_url + 'orders/getTableProductRow/',
                type: 'post',
                dataType: 'json',
                success: function(response) {


                    // console.log(reponse.x);
                    var html = '<tr id="row_' + row_id + '">' +
                            '<td>' +
                            '<select class="form-control select_group product" data-row-id="' + row_id + '" id="product_' + row_id + '" name="product[]" style="width:100%;" onchange="getProductData(' + row_id + ')">' +
                            '<option value=""></option>';
                    $.each(response, function(index, value) {
                        html += '<option value="' + value.id + '">' + value.sku + '</option>';
                    });

                    html += '</select>' +
                            '</td>' +
                            '<td><input oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  min="1"  max="5000" maxlength="4" type="number" name="qty[]" id="qty_' + row_id + '" class="form-control" onchange="getTotal(' + row_id + ')" onkeyup="getTotal(' + row_id + ')"></td>' +
                            '<td><input type="text" name="rate[]" id="rate_' + row_id + '" class="form-control" disabled><input type="hidden" name="rate_value[]" id="rate_value_' + row_id + '" class="form-control"></td>' +
                            '<td><input type="text" name="amount[]" id="amount_' + row_id + '" class="form-control" disabled><input type="hidden" name="amount_value[]" id="amount_value_' + row_id + '" class="form-control"></td>' +
                            '<td><button type="button" class="btn btn-default" onclick="removeRow(\'' + row_id + '\')"><i class="fa fa-close"></i></button></td>' +
                            '</tr>';

                    if (count_table_tbody_tr >= 1) {
                        $("#product_info_table tbody tr:last").after(html);
                    } else {
                        $("#product_info_table tbody").html(html);
                    }

                    $(".product").select2();

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

            subAmount();

        } else {
            alert('no row !! please refresh the page');
        }
    }

    // get the product information from the server
    // get the product information from the server
    function getProductData(row_id) {
        var product_id = $("#product_" + row_id).val();
        if (product_id == "") {
            $("#rate_" + row_id).val("");
            $("#rate_value_" + row_id).val("");

            $("#qty_" + row_id).val("");

            $("#amount_" + row_id).val("");
            $("#amount_value_" + row_id).val("");

        } else {
            $.ajax({
                url: base_url + 'orders/getProductValueById',
                type: 'post',
                data: {
                    product_id: product_id
                },
                dataType: 'json',
                success: function(response) {
                    // setting the rate value into the rate input field



                    // $("#rate_"+row_id).val(response.price);
                    $("#rate_" + row_id).val(response.qty);
                    $("#rate_value_" + row_id).val(response.price);

                    $("#qty_" + row_id).val(1);
                    $("#qty_value_" + row_id).val(1);

                    var total = Number(response.price) * 1;
                    total = total.toFixed(2);
                    $("#amount_" + row_id).val(total);
                    $("#amount_value_" + row_id).val(total);

                    subAmount();
                } // /success
            }); // /ajax function to fetch the product data 
        }
    }

    // calculate the total amount of the order
    function subAmount() {
        var service_charge = <?php echo ($company_data['service_charge_value'] > 0) ? $company_data['service_charge_value'] : 0; ?>;
        var vat_charge = <?php echo ($company_data['vat_charge_value'] > 0) ? $company_data['vat_charge_value'] : 0; ?>;

        var tableProductLength = $("#product_info_table tbody tr").length;
        var totalSubAmount = 0;
        for (x = 0; x < tableProductLength; x++) {
            var tr = $("#product_info_table tbody tr")[x];
            var count = $(tr).attr('id');
            count = count.substring(4);

            totalSubAmount = Number(totalSubAmount) + Number($("#amount_" + count).val());
        } // /for

        totalSubAmount = totalSubAmount.toFixed(2);

        // sub total
        $("#gross_amount").val(totalSubAmount);
        $("#gross_amount_value").val(totalSubAmount);

        // vat
        var vat = (Number($("#gross_amount").val()) / 100) * vat_charge;
        vat = vat.toFixed(2);
        $("#vat_charge").val(vat);
        $("#vat_charge_value").val(vat);

        // service
        var service = (Number($("#gross_amount").val()) / 100) * service_charge;
        service = service.toFixed(2);
        $("#service_charge").val(service);
        $("#service_charge_value").val(service);

        // total amount
        var totalAmount = (Number(totalSubAmount) + Number(vat) + Number(service));
        totalAmount = totalAmount.toFixed(2);
        // $("#net_amount").val(totalAmount);
        // $("#totalAmountValue").val(totalAmount);

        var discount = $("#discount").val();
        if (discount) {
            var grandTotal = Number(totalAmount) - Number(discount);
            grandTotal = grandTotal.toFixed(2);
            $("#net_amount").val(grandTotal);
            $("#net_amount_value").val(grandTotal);
        } else {
            $("#net_amount").val(totalAmount);
            $("#net_amount_value").val(totalAmount);

        } // /else discount 

        var paid_amount = Number($("#paid_amount").val());
        if (paid_amount) {
            var net_amount_value = Number($("#net_amount_value").val());
            var remaning = net_amount_value - paid_amount;
            $("#remaining").val(remaning.toFixed(2));
            $("#remaining_value").val(remaning.toFixed(2));
        }

    } // /sub total amount

    function paidAmount() {
        var grandTotal = $("#net_amount_value").val();

        if (grandTotal) {
            var dueAmount = Number($("#net_amount_value").val()) - Number($("#paid_amount").val());
            dueAmount = dueAmount.toFixed(2);
            $("#remaining").val(dueAmount);
            $("#remaining_value").val(dueAmount);
        } // /if
    } // /paid amoutn function

    function removeRow(tr_id) {
        $("#product_info_table tbody tr#row_" + tr_id).remove();
        subAmount();
    }
</script>