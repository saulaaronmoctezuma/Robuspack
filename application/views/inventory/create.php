






<!-- Content Wrapper. Contains page content -->


<?php
//check user level
$dataLevel = $this->userlevel->checkLevel($role);

$dataLevel_id = $this->userlevel->id($id);
$result = $this->User_model->getAllSettings();
$site_title = $result->site_title;
//check user level
?>

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
    
         .centrado {
    text-align: center;
  }
</style>


   <script type=text/javascript>
function validate(){


chk= document.getElementById('check_1');
pedimento= document.getElementById('pedimento_1');

if (chk.checked){
pedimento.value='Sin Pedimento';
pedimento.readOnly = true;
pedimento.style.backgroundColor = "#03E7F7";
pedimento.placeholder='Sin Pedimento';
         // alert("checked") ;
}else{
pedimento.readOnly = false;
pedimento.style.backgroundColor = "#ffffff";
pedimento.placeholder='Escribe tu pedimento';
pedimento.value='';
 //alert("no") ;
}
}
</script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Administrar
            <small>Entradas</small>
        </h1>
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


                <div class="box">

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

                          






                          





                           
                              



                                <?php
                                if ($dataLevel == 'is_admin1') {
                                    
                                } else if (($dataLevel == 'is_editor1') && ($dataLevel_id == 3)) {
                                    
                                } else if ($dataLevel == 'is_almacen1') {
                                    
                                } else if (($dataLevel == 'is_editor1') && ($dataLevel_id == 4)) {
                                    
                                }
                                ?>





                        
                        
                        
                        <div class="container"  style="background-color:#ddd" >      <div class="row">
        <div class="col-md-6" >
          
          <div class="row">
            <div class="col-md-12" >
              
               <div class="row" >
                                        <div class="col-sm-4">
                                            <center><B>Consecutivo</B></center>
                                        </div>
                                        <div class="col-sm-6">
                                            <input required class="form-control" id="consecutivo" name="consecutivo" type="text" />
                                        </div>
                                    </div>
            
            
            </div><br><br>
            <div class="col-md-12">
              
              
                <div class="row">
                                        <div class="col-sm-4">
                                            <center><B>Pedimento</B></center>
                                        </div>
                                        <div class="col-sm-6">
                                          <input class="form-control" placeholder='Escribe tu pedimento' id="pedimento_1" name="numero_de_pedimento" type="text" />

                                            <FONT FACE="Arial" SIZE=2 COLOR="red">Seleccione si no tiene pedimento</font>

                                            <input type="checkbox" name="check" onclick="validate()"  id="check_1" value="1"/>
                                        </div>
                                    </div>
              
              
              
              
              
              
            </div><br>
          
            <div class="col-md-12">
              
              <div class="row"  >
                           <div class="col-sm-4"> <center>
                              
                                           <select name="tipo_de_documento" class="col-sm-12 control-label form-select " id="tipo_documento" required onchange="showInp()">
                                        <option value="">Tipo de entrada</option>
                                        <option value="Compra">Compra</option>
                                        <option value="Devolución">Devolución</option>
                                        <option value="Por ajuste">Por ajuste</option>

                                    </select>
                  </center>
                                        </div>
                                        <div class="col-sm-6">
                                               <input class="form-control" id="vacio" type="text" disabled />
                                        <input class="form-control" id="factura" type="text" style="display: none" required name="numero_documento" disabled placeholder="No Factura" />
                                        <input class="form-control" id="remision" type="text" style="display: none" required name="numero_documento" disabled placeholder="No Vale ó Garantía" />
                                        <input class="form-control" id="ajuste" type="text" style="display: none" required name="numero_documento" disabled placeholder="Escribe una observación" />
                                        </div>
                                    </div>
              
              
            </div><br>
          </div>
        </div>
        <div class="col-md-4">
          
           <div class="col-sm-8 centrado">
            
                   <img width="150px" height="150px" src="https://scrobuspack.com/assets/images/almacenentrada.png"></center>
          </div>
        </div>
      </div>
</div>
                        <input type="hidden" class="form-control input-sm" id="customer_phone" name="customer_phone">


                        <br /> <br />

                        <div style="overflow-x:auto;">
                            <form>
                                <table class="table table-bordered" id="product_info_table">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <!--<th>Pedimento</th>-->
                                            <th>Descripción</th>
                                            <th>Cantidad</th>
                                            <th>Stock</th>
                                            <th>Total de Stock</th>
                                            <th><button type="button" id="add_row" class="btn btn-default"><i class="fa fa-plus"></i></button></th>
                                        </tr>
                                    </thead>

                                    <tbody>


                                        <tr id="row_1">
                                            <td>



                                                <select style="width:170px;"  class="form-control desabilitar  select_group product" name="product[]" id="category-1" required>
                                                    <option value="Null">Seleccione</option>
                                                    <?php foreach ($category as $row) : ?>
                                                        <option value="<?php echo $row->id; ?>"><?php echo $row->sku; ?></option>
                                                    <?php endforeach; ?>
                                                </select>





                                            </td>




                                            <td> <input type="text" style="width:250px;" name="rate_value[]"  readonly id="rate_value_1" class="form-control desabilitar" disabled autocomplete="off"></td>
                                            <td> <input type="hidden" id="idproduct-1" value="">
                                                <input style="width:90px;" type="number" min="1" required name="qty[]"  id="qty_1" class="form-control desabilitar claseSuma_1" onchange="sumaInventarioEntrada()" onkeyup="sumaInventarioEntrada()" required  ></td>
                                            <td>

                                                <input type="text" style="width:90px;" readonly name="rate[]" id="rate_1" class="form-control desabilitar claseSuma_1" onchange="sumaInventarioEntrada()" onkeyup="sumaInventarioEntrada()" disabled autocomplete="off">

                                            </td>
                                            <td>

                                                <input type="text" class="form-control" name="total_de_piezas[]" style="background-color:#03E7F7;" readonly="" id="suma_1">
                                            </td>



                                    <input type="hidden" name="amount[]" id="amount_1" class="form-control desabilitar" disabled autocomplete="off">
                                    <input type="hidden" name="total_de_piezas[]" id="amount_value_1 desabilitar" class="form-control" autocomplete="off">

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
                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer">
                                        <input type="hidden" name="service_charge_rate" value="<?php echo $company_data['service_charge_value'] ?>" autocomplete="off">
                                        <input type="hidden" name="vat_charge_rate" value="<?php echo $company_data['vat_charge_value'] ?>" autocomplete="off">
                                        <button type="submit" id="botonOrden" class="btn btn-primary botonOrden">Crear Entrada</button>
                                        <!--   <a href="<?php echo base_url('inventory/') ?>" class="btn btn-warning">Regresar</a>-->
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
<!-- /.con








<!-- Script
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->









<div>

</div>




<script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/js/inventory_create.js' ?>"></script>

<script type="text/javascript" src="<?php echo base_url() . 'assets/buscar/js/select2.js' ?>"></script>
<!--<script type="text/javascript" src="<?php echo base_url() . 'assets/buscar/jquery-3.1.1.min.js' ?>"></script>-->


<script type="text/javascript">
                                            $(document).ready(function() {
                                                $(".select_group").select2();
                                            });
</script>