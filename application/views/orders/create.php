<<<<<<< HEAD
    
    
=======
z<!-- Content Wrapper. Contains page content -->


>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
<?php
//check user level
$dataLevel = $this->userlevel->checkLevel($role);

$dataLevel_id = $this->userlevel->id($id);
$result = $this->User_model->getAllSettings();
$site_title = $result->site_title;
//check user level
?>
<<<<<<< HEAD
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                    <h1>
                            Administrar
                            <small>Salidas</small>
                    </h1>
                    <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                            <li class="active">Salidas</li>
                    </ol>
            </section>
            <script>

            </script>
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


                                    <div class="box">
                                            <div class="box-header">
                                                    <h3 class="box-title">Agregar</h3>
                                            </div>
                                            <!-- /.box-header -->
                                            <form role="form" action="<?php base_url('orders/create') ?>" method="post" class="form-horizontal">
                                                    <div class="box-body">

                                                            <?php echo validation_errors(); ?>

                                                            <div class="form-group">
                                                                    <label for="gross_amount" class="col-sm-12 control-label">Fecha: <?php echo date('Y-m-d') ?></label>
                                                            </div>
                                                            <div class="form-group">
                                                                    <label for="gross_amount" class="col-sm-12 control-label">Hora: <?php echo date('h:i a') ?></label>
                                                            </div>











 <div class="row">
                                <div class="col-md-2">   <center><B>Consecutivo</B></center>
                                </div>
                                <div class="col-md-2"> <input class="form-control" required id="consecutivo" name="consecutivo" type="text" />
=======
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Administrar
            <small>Ordenes</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Ordenes</li>
        </ol>
    </section>
    <script>

    </script>
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


                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Agregar</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- <form role="form" id="order-out" action="<?php base_url('orders/create') ?>" method="post" class="form-horizontal"> -->
                        <div class="box-body">

                            <?php echo validation_errors(); ?>

                            <div class="form-group">
                                <label for="gross_amount" class="col-sm-12 control-label">Fecha: <?php echo date('Y-m-d') ?></label>
                            </div>
                            <div class="form-group">
                                <label for="gross_amount" class="col-sm-12 control-label">Hora: <?php echo date('h:i a') ?></label>
                            </div>

                            <div class="row">
                                <div class="col-md-2">   <center><B>Consecutivo</B></center>
                                </div>
                                <div class="col-md-2"> <input class="form-control" id="consecutivo" name="consecutivo" type="text" />
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                </div>

                            </div>
                            <br>

<<<<<<< HEAD
=======
                            <div class="col-md-4 col-xs-12 pull pull-left">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606







<<<<<<< HEAD




                                                            <div class="col-md-4 col-xs-12 pull pull-left">
                                                                
                                                                <!--
                                                                    <div class="form-group">

                                                                            <select name="tipo_de_documento" class="col-sm-5 control-label " id="tipo_documento" required onchange="showInp()">
                                                                                    <option value="">Tipo de salida</option>
                                                                                    <option value="Venta">Venta</option>
                                                                                    <option value="Reposición">Reposición</option>
                                                                                    <option value="Préstamo">Préstamo</option>
                                                                            </select>

                                                                            <div class="col-sm-7">
                                                                                    <input class="form-control" id="vacio" type="text" disabled />
                                                                                    <input class="form-control" id="factura" type="text" style="display: none" required name="bill_no" placeholder="No Factura" />
                                                                                    <input class="form-control" id="remision" type="text" style="display: none" required name="bill_no" placeholder="No Remisión" />
                                                                                    <input class="form-control" id="valedesalida" type="text" style="display: none" required name="bill_no" placeholder="No Vale de Salida" />
                                                                            </div>
                                                                    </div>-->
                                                                    
                                                                    
                                                                    
                                                                          <?php
=======
                                 <?php
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                if ($dataLevel == 'is_admin') {
                                    echo'
                                    <div class="form-group">

                                    <select name="tipo_de_documento" class="col-sm-5 control-label " id="tipo_documento" required onchange="showInp()">
                                        <option value="">Tipo de salida</option>
                                        <option value="Venta">Venta</option>
                                        <option value="Reposición">Reposición</option>
                                        <option value="Préstamo">Préstamo</option>
                                        <option value="Porajuste">Por ajuste</option>
                                    </select>

                                    <div class="col-sm-7">
                                        <input class="form-control" id="vacio" type="text" disabled />
                                        <input class="form-control" id="factura" type="text" style="display: none" required name="bill_no" placeholder="No Factura" />
                                        <input class="form-control" id="remision" type="text" style="display: none" required name="bill_no" placeholder="No Remisión" />
                                        <input class="form-control" id="valedesalida" type="text" style="display: none" required name="bill_no" placeholder="No Vale de Salida" />
<<<<<<< HEAD
                                       <textarea id="porajuste"  name="bill_no" class="form-control input-sm" rows="5" cols="80" style="resize:none;display: none" placeholder="Ingresa una observación"></textarea>
=======
                                       <textarea id="porajuste"  name="bill_no" class="form-control input-sm" rows="5" cols="80" style="resize:none;display: none" placeholder="Ingresa una observación" =""></textarea>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                   </div>
                                </div>
                            
                         
                            ';
                                }  else if(($dataLevel == 'is_editor')&&($dataLevel_id==3)) {
                                          echo'
                                    <div class="form-group">

                                    <select name="tipo_de_documento" class="col-sm-5 control-label " id="tipo_documento" required onchange="showInp()">
                                        <option value="">Tipo de salida</option>
                                        <option value="Venta">Venta</option>
                                        <option value="Reposición">Reposición</option>
                                        <option value="Préstamo">Préstamo</option>
                                        <option value="Porajuste">Por ajuste</option>
                                    </select>

                                    <div class="col-sm-7">
                                        <input class="form-control" id="vacio" type="text" disabled />
                                        <input class="form-control" id="factura" type="text" style="display: none" required name="bill_no" placeholder="No Factura" />
                                        <input class="form-control" id="remision" type="text" style="display: none" required name="bill_no" placeholder="No Remisión" />
                                        <input class="form-control" id="valedesalida" type="text" style="display: none" required name="bill_no" placeholder="No Vale de Salida" />
<<<<<<< HEAD
                                      <!--  <input class="form-control" style="display: none" type="text" required name="ajuste" placeholder="Por ajuste" />
                                       --> <textarea id="porajuste"  name="bill_no" class="form-control input-sm" rows="5" cols="80" style="resize:none;display: none" placeholder="Ingresa una observación"></textarea>
=======
                                        <input class="form-control" style="display: none" type="text" required name="ajuste" placeholder="Por ajuste" />
                                        <textarea id="porajuste"  name="bill_no" class="form-control input-sm" rows="5" cols="80" style="resize:none;display: none" placeholder="Ingresa una observación" =""></textarea>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                   </div>
                                </div>
                            
                         
                            ';
<<<<<<< HEAD
                                }
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                else if(($dataLevel == 'is_editor')&&($dataLevel_id==17)) {
=======
                                }else if($dataLevel == 'is_almacen') {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                          echo'
                                    <div class="form-group">

                                    <select name="tipo_de_documento" class="col-sm-5 control-label " id="tipo_documento" required onchange="showInp()">
                                        <option value="">Tipo de salida</option>
                                        <option value="Venta">Venta</option>
                                        <option value="Reposición">Reposición</option>
                                        <option value="Préstamo">Préstamo</option>
<<<<<<< HEAD
                                        <option value="Porajuste">Por ajuste</option>
                                    </select>

                                    <div class="col-sm-7">
                                        <input class="form-control" id="vacio" type="text" disabled />
                                        <input class="form-control" id="factura" type="text" style="display: none" required name="bill_no" placeholder="No Factura" />
                                        <input class="form-control" id="remision" type="text" style="display: none" required name="bill_no" placeholder="No Remisión" />
                                        <input class="form-control" id="valedesalida" type="text" style="display: none" required name="bill_no" placeholder="No Vale de Salida" />
                                        <!--<input class="form-control" style="display: none" type="text" required name="ajuste" placeholder="Por ajuste" />-->
                                        <textarea id="porajuste"  name="bill_no" class="form-control input-sm" rows="5" cols="80" style="resize:none;display: none" placeholder="Ingresa una observación"></textarea>
                                   </div>
                                </div>
                            
                         
                            ';
                                }
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                 else if($dataLevel == 'is_almacen') {
                                          echo'
                                    <div class="form-group">

                                    <select name="tipo_de_documento" class="col-sm-5 control-label " id="tipo_documento" required onchange="showInp()">
                                        <option value="">Tipo de salida</option>
                                        <option value="Venta">Venta</option>
                                        <option value="Reposición">Reposición</option>
                                        <option value="Préstamo">Préstamo</option>
                                        <option value="Porajuste">Por ajuste</option>
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                        
                                    </select>

                                    <div class="col-sm-7">
                                        <input class="form-control" id="vacio" type="text" disabled />
                                        <input class="form-control" id="factura" type="text" style="display: none" required name="bill_no" placeholder="No Factura" />
                                        <input class="form-control" id="remision" type="text" style="display: none" required name="bill_no" placeholder="No Remisión" />
                                        <input class="form-control" id="valedesalida" type="text" style="display: none" required name="bill_no" placeholder="No Vale de Salida" />
<<<<<<< HEAD
                                         <textarea id="porajuste"  name="bill_no" class="form-control input-sm" rows="5" cols="80" style="resize:none;display: none" placeholder="Ingresa una observación"></textarea>
                                  
                                   </div>
                                </div>
                            
                         
                            ';
                                }
                                
                                
                                else if($dataLevel == 'is_servicio_a_clientes') {
                                          echo'
                                    <div class="form-group">

                                    <select name="tipo_de_documento" class="col-sm-5 control-label " id="tipo_documento" required onchange="showInp()">
                                        <option value="">Tipo de salida</option>
                                        <option value="Venta">Venta</option>
                                        <option value="Reposición">Reposición</option>
                                        <option value="Préstamo">Préstamo</option>
                                        <option value="Porajuste">Por ajuste</option>
                                        
                                    </select>

                                    <div class="col-sm-7">
                                        <input class="form-control" id="vacio" type="text" disabled />
                                        <input class="form-control" id="factura" type="text" style="display: none" required name="bill_no" placeholder="No Factura" />
                                        <input class="form-control" id="remision" type="text" style="display: none" required name="bill_no" placeholder="No Remisión" />
                                        <input class="form-control" id="valedesalida" type="text" style="display: none" required name="bill_no" placeholder="No Vale de Salida" />
                                              <textarea id="porajuste"  name="bill_no" class="form-control input-sm" rows="5" cols="80" style="resize:none;display: none" placeholder="Ingresa una observación"></textarea>
                                  
=======
                                        <textarea id="porajuste"  name="bill_no" class="form-control input-sm" rows="5" cols="80" style="resize:none;display: none" placeholder="Ingresa una observación" =""></textarea>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                   </div>
                                </div>
                            
                         
                            ';
                                }else if(($dataLevel == 'is_editor')&&($dataLevel_id==4)) {
                                          echo'
                                    <div class="form-group">

                                    <select name="tipo_de_documento" class="col-sm-5 control-label " id="tipo_documento" required onchange="showInp()">
                                        <option value="">Tipo de salida</option>
                                        <option value="Venta">Venta</option>
                                        <option value="Reposición">Reposición</option>
                                        <option value="Préstamo">Préstamo</option>
                                        
                                    </select>

                                    <div class="col-sm-7">
                                        <input class="form-control" id="vacio" type="text" disabled />
                                        <input class="form-control" id="factura" type="text" style="display: none" required name="bill_no" placeholder="No Factura" />
                                        <input class="form-control" id="remision" type="text" style="display: none" required name="bill_no" placeholder="No Remisión" />
                                        <input class="form-control" id="valedesalida" type="text" style="display: none" required name="bill_no" placeholder="No Vale de Salida" />
<<<<<<< HEAD
                                       <textarea id="porajuste"  name="bill_no" class="form-control input-sm" rows="5" cols="80" style="resize:none;display: none" placeholder="Ingresa una observación" =""></textarea>
=======
                                        <input class="form-control" style="display: none" type="text" required name="bill_no" placeholder="Por ajuste" />
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                   </div>
                                </div>
                            
                         
                            ';
                                }
                                ?>
<<<<<<< HEAD



                                                                    Clave del Cliente:
                                                                    <select required id='clave' data-live-search="true" data-live-search-style="startsWith" class="form-control  select_group product" name="customer_address">
                                                                            <?php
                                                                                echo '<option>Selecciona</option>';
                                                                                foreach ($users as $user) {

                                                                                        echo "<option value='" . $user['clave'] . "' >" . $user['clave'] . "</option>";
                                                                                }
                                                                                ?>
                                                                    </select>
                                                                    <br> <br>
                                                                    <input type="text" name="customer_name" class="form-control desabilitar" id="snombre" required onkeypress="return false;" autocomplete="off" >
                                                                    <br> <br>
=======
                                Clave del Cliente:
                                <select required id = 'clave' data-live-search = "true" data-live-search-style = "startsWith" class = "form-control  select_group product" name = "customer_address">
                                    <?php
                                    echo '<option>Selecciona</option>';
                                    foreach ($users as $user) {

                                        echo "<option value='" . $user['clave'] . "' >" . $user['clave'] . "</option>";
                                    }
                                    ?>
                                </select>
                                <br> <br>
                                <input type="text" name="customer_name" class="form-control desabilitar" id="snombre" readonly>
                                <br> <br>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606




<<<<<<< HEAD
                                                            </div>
=======
                            </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606





<<<<<<< HEAD
                                                    </div>

                                                    <input type="hidden" class="form-control input-sm" id="customer_phone" name="customer_phone">


                                                    <br /> <br />
                                                    <meta name="viewport" content="width=device-width, initial-scale=1">
                                                    <style>
                                                            table {
                                                                    border-collapse: collapse;
                                                                    border-spacing: 0;
                                                                    width: 100%;
                                                                    border: 1px solid #ddd;
                                                            }

                                                            th,
                                                            td {
                                                                    text-align: left;
                                                                    padding: 8px;
                                                            }

                                                            tr:nth-child(even) {
                                                                    background-color: #f2f2f2
                                                            }
                                                    </style>
                                                    <div style="overflow-x:auto;">
                                                        <form>
                                                            <table class="table table-bordered" id="product_info_table">
                                                                    <thead>
                                                                            <tr>
                                                                                    <th>Código</th>
                                                                                    <th>Pedimento</th>
                                                                                    <th>Descripción</th>
                                                                                    <th>Cantidad</th>
                                                                                    <th>Stock</th>
                                                                                    <!-- <th style="width:20%">Importe</th>-->
                                                                                    <th><button type="button" id="add_row" class="btn btn-default classOrden"><i class="fa fa-plus"></i></button></th>
                                                                            </tr>
                                                                    </thead>

                                                                    <tbody>


                                                                            <tr id="row_1">
                                                                                    <td>



                                                                                            <select style="width:170px;" onchange="this.style.width=200" class="form-control desabilitar  select_group product" name="product[]" id="category-1" required>
                                                                                                    <option value="Null">Seleccione</option>
                                                                                                    <?php foreach ($category as $row) : ?>
                                                                                                            <option value="<?php echo $row->id; ?>"><?php echo $row->sku; ?></option>
                                                                                                    <?php endforeach; ?>
                                                                                            </select>





                                                                                    </td>
                                                                                    <td>


                                                                                            <select style="width:250px;border:1px solid #04467E;background-color:#DDFFFF;color:#2D4167;font-size:18px" class="form-control desabilitar select_group product" id="sub_category-1" name="sub_category[]" required>

                                                                                                    <option value=''>Selecciona una opción</option>
                                                                                                    <?php foreach ($category as $row) : ?>
                                                                                                            <option value="<?php echo $row->id; ?>"><?php echo $row->sku; ?></option>
                                                                                                    <?php endforeach; ?>
                                                                                            </select>
                                                                                            
                                                                                            
                                                                                            
                                                                                            
                                                                                            <div id="oculto1" style="visibility:hidden1">
                                                                                                    Cantidad X Pedimento
                                                                                            </div>
                                                                                            <input type="text" style="width:250px;" name="customer_name" class="form-control input-sm desabilitar" id="suname-1" >
                                                                                            <br />
                                                                                         


                                                                                    </td>
                                                                                    <td> <input type="text" style="width:250px;" name="rate_value[]" id="rate_value_1" class="form-control desabilitar" disabled autocomplete="off"></td>
                                                                                    <td> <input type="hidden" name="idproduct-1" id="idproduct-1" value="">
                                                                                            <input style="width:90px;" type="number" min="1" required name="qty[]" id="qty_1" class="form-control desabilitar" required onkeyup="getTotal(1);" onChange="getTotal(1);"></td>
                                                                                    <td>
                                                                                            <input type="text" style="width:90px;" name="rate[]" id="rate_1" class="form-control desabilitar" disabled autocomplete="off">



                                                                                    </td>

                                                                                    <input type="hidden" name="amount[]" id="amount_1" class="form-control desabilitar" disabled autocomplete="off">
                                                                                    <input type="hidden" name="amount_value[]" id="amount_value_1 desabilitar" class="form-control" autocomplete="off">

                                                                                    <td><button type="button" class="btn btn-default" onclick="removeRow('1')" id="deleteRow-1"><i class="fa fa-close"></i></button></td>
                                                                            </tr>
                                                                    </tbody>
                                                            </table>
                                                        <form>
                                                    </div>

                                                    <br /> <br />

                                                    <div class="col-md-6 col-xs-12 pull pull-right">

                                                            <div class="form-group">
                                                                    <label for="gross_amount" class="col-sm-5 control-label"></label>
                                                                    <div class="col-sm-7">
                                                                            <input type="hidden" class="form-control" id="gross_amount" name="gross_amount" disabled autocomplete="off">
                                                                            <input type="hidden" class="form-control" id="gross_amount_value" name="gross_amount_value" autocomplete="off">
                                                                    </div>
                                                            </div>
                                                            <?php if ($is_service_enabled == true) : ?>
                                                                    <div class="form-group">
                                                                            <label for="service_charge" class="col-sm-5 control-label">S-Charge <?php echo $company_data['service_charge_value'] ?> %</label>
                                                                            <div class="col-sm-7">
                                                                                    <input type="text" class="form-control" id="service_charge" name="service_charge" disabled autocomplete="off">
                                                                                    <input type="hidden" class="form-control" id="service_charge_value" name="service_charge_value" autocomplete="off">
                                                                            </div>
                                                                    </div>
                                                            <?php endif; ?>
                                                            <?php if ($is_vat_enabled == true) : ?>
                                                                    <div class="form-group">
                                                                            <label for="vat_charge" class="col-sm-5 control-label">IVA <?php echo $company_data['vat_charge_value'] ?> %</label>
                                                                            <div class="col-sm-7">
                                                                                    <input type="text" class="form-control" id="vat_charge" name="vat_charge" disabled autocomplete="off">
                                                                                    <input type="hidden" class="form-control" id="vat_charge_value" name="vat_charge_value" autocomplete="off">
                                                                            </div>
                                                                    </div>
                                                            <?php endif; ?>
                                        
                                                            <input type="hidden" class="form-control" id="discount" name="discount" value="0">

                                           
                                                            <input type="hidden" class="form-control" id="net_amount_value" name="net_amount_value" autocomplete="off" value="0">
                                                    </div>
=======
                        </div>

                        <input type="hidden" class="form-control input-sm" id="customer_phone" name="customer_phone">


                        <br /> <br />
                        <meta name="viewport" content="width=device-width, initial-scale=1">
                        <style>
                            table {
                                border-collapse: collapse;
                                border-spacing: 0;
                                width: 100%;
                                border: 1px solid #ddd;
                            }

                            th,
                            td {
                                text-align: left;
                                padding: 8px;
                            }

                            tr:nth-child(even) {
                                background-color: #f2f2f2
                            }
                        </style>
                        <div style="overflow-x:auto;">
                            
                                <table class="table table-bordered" id="product_info_table">
                                    <thead>
                                        <tr>
                                            <th><input id="input-sku" type="text" placeholder="C&oacute;digo"></th>
                                            <th>SKU</th>
                                            <th>Pedimento</th>
                                            <th>Descripción</th>
                                            <th>Cantidad</th>
                                            <th>Stock</th>
                                            <!-- <th style="width:20%">Importe</th>-->
                                            <th><button type="button" id="add_row" class="btn btn-default"><i class="fa fa-plus"></i></button></th>
                                        </tr>
                                    </thead>

                                    <tbody>


                                        <tr id="row_1">

                                        <td>
                                            
                                            <input type="checkbox" name="blocked_1" id="blocked_1" data-toggle="toggle" data-size="sm">
                                 
                                            </td>
                                            <td>
                                                <input type="text" readonly id="order-item-1" >
                                            </td>
                                                                                       
                                            <td>
                                                <select row_id ="1" style="width:250px;border:1px solid #04467E;background-color:#DDFFFF;color:#2D4167;font-size:18px" class="form-control desabilitar " id="sub_category-1" name="sub_category[]" required>

                                                    <option value=''>Selecciona una opción</option>
                                                    <?php foreach ($category as $row) : ?>
                                                        <option value="<?php echo $row->id; ?>"><?php echo $row->sku; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <div id="oculto1" style="visibility:hidden1">
                                                    Cantidad X Pedimento
                                                </div>
                                                <input  row_id ="1" type="text" style="width:250px;" name="customer_name" class="form-control input-sm desabilitar" id="suname-1" readonly>
                                                <br />



                                            </td>
                                            <td> <input  row_id ="1" type="text" style="width:250px;" name="rate_value[]" id="rate_value_1" class="form-control desabilitar" disabled autocomplete="off"></td>
                                            <td> <input  row_id ="1" type="hidden" name="idproduct-1" id="idproduct-1" value="2">
                                                <input  row_id ="1" style="width:90px;"   id="qty_1" class="form-control desabilitar" ></td>
                                            <td>
                                                <input  row_id ="1" type="text" style="width:90px;" name="rate[]" id="rate_1" class="form-control desabilitar" disabled autocomplete="off">

                                                        

                                            </td>

                                    <input type="hidden" name="amount[]" id="amount_1" class="form-control desabilitar" disabled autocomplete="off">
                                    <input type="hidden" name="amount_value[]" id="amount_value_1 desabilitar" class="form-control" autocomplete="off">

                                    <td><button type="button" class="btn btn-default" onclick="removeRow('1')" id="deleteRow-1"><i class="fa fa-close"></i></button></td>
                                    </tr>
                                    </tbody>
                                </table>
                                
                                    </div>

                                    <br /> <br />

                                    <div class="col-md-6 col-xs-12 pull pull-right">

                                        <div class="form-group">
                                            <label for="gross_amount" class="col-sm-5 control-label"></label>
                                            <div class="col-sm-7">
                                                <input type="hidden" class="form-control" id="gross_amount" name="gross_amount" disabled autocomplete="off">
                                                <input type="hidden" class="form-control" id="gross_amount_value" name="gross_amount_value" autocomplete="off">
                                            </div>
                                        </div>
                                        <?php if ($is_service_enabled == true) : ?>
                                            <div class="form-group">
                                                <label for="service_charge" class="col-sm-5 control-label">S-Charge <?php echo $company_data['service_charge_value'] ?> %</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="service_charge" name="service_charge" disabled autocomplete="off">
                                                    <input type="hidden" class="form-control" id="service_charge_value" name="service_charge_value" autocomplete="off">
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($is_vat_enabled == true) : ?>
                                            <div class="form-group">
                                                <label for="vat_charge" class="col-sm-5 control-label">IVA <?php echo $company_data['vat_charge_value'] ?> %</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="vat_charge" name="vat_charge" disabled autocomplete="off">
                                                    <input type="hidden" class="form-control" id="vat_charge_value" name="vat_charge_value" autocomplete="off">
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <input type="hidden" class="form-control" id="discount" name="discount" value="0">


                                        <input type="hidden" class="form-control" id="net_amount_value" name="net_amount_value" autocomplete="off" value="0">
                                    </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer">
<<<<<<< HEAD
                                            <input type="hidden" name="service_charge_rate" value="<?php echo $company_data['service_charge_value'] ?>" autocomplete="off">
                                            <input type="hidden" name="vat_charge_rate" value="<?php echo $company_data['vat_charge_value'] ?>" autocomplete="off">
                                            <button type="submit" id="botonOrden" class="botonOrden btn btn-primary">Crear Orden</button>
                                            <!--   <a href="<?php echo base_url('orders/') ?>" class="btn btn-warning">Regresar</a>-->
                                    </div>
                                    </form>
                                    <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                    </div>
                    <!-- col-md-12 -->
    </div>
    <!-- /.row -->
=======
                                        <input type="hidden" name="service_charge_rate" value="<?php echo $company_data['service_charge_value'] ?>" autocomplete="off">
                                        <input type="hidden" name="vat_charge_rate" value="<?php echo $company_data['vat_charge_value'] ?>" autocomplete="off">
                                        <button type="submit" id="botonOrden" class="btn btn-primary botonOrden" onclick="compararSiHayStock();">Crear Orden</button>
                                        <!--   <a href="<?php echo base_url('orders/') ?>" class="btn btn-warning">Regresar</a>-->
                                    </div>
                                <!-- </form> -->
                                <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                </div>
                <!-- col-md-12 -->
            </div>
            <!-- /.row -->
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606


    </section>
    <!-- /.content -->
<<<<<<< HEAD
    </div>
    <!-- /.content-wrapper -->
=======
</div>
<!-- /.content-wrapper -->
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
















<<<<<<< HEAD
    <!-- Script
=======
<!-- Script
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->







<<<<<<< HEAD
   

    <div>

    </div>



 <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/order_create.js' ?>"></script>

    <script type="text/javascript" src="<?php echo base_url() . 'assets/buscar/js/select2.js' ?>"></script>
    <!--<script type="text/javascript" src="<?php echo base_url() . 'assets/buscar/jquery-3.1.1.min.js' ?>"></script>-->
    

    <script type="text/javascript">
            $(document).ready(function() {
                    $(".select_group").select2();
            });
    </script>

    <!--<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.2.1.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/order_create.js' ?>"></script>
   
    <script type="text/javascript" src="<?php echo base_url() . 'assets/buscar/js/select2.js' ?>"></script>
    
    
    
    
    <script type="text/javascript">
	$(document).ready(function(){
			 $(".select_group").select2();
	});
</script>-->
=======


<div>

</div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606




<<<<<<< HEAD
<!--estadocumentado<script type="text/javascript" src="<?php echo base_url() . 'assets/buscar/jquery-3.1.1.min.js' ?>"></script>-->
=======
<script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/js/order_create.js' ?>"></script>

<script type="text/javascript" src="<?php echo base_url() . 'assets/buscar/js/select2.js' ?>"></script>
<!--<script type="text/javascript" src="<?php echo base_url() . 'assets/buscar/jquery-3.1.1.min.js' ?>"></script>-->


<script type="text/javascript">
                                            $(document).ready(function() {
                                                $(".select_group").select2();
                                            });
</script>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
