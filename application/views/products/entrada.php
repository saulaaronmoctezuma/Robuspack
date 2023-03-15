<<<<<<< HEAD
    <!doctype html>
<html>
 <head>
   <title>Entrada </title>
 </head>
 <body>
 
     
     
   
  
    <form action="<?= base_url('Products/productModificar') ?>" method="post" align="center" onsubmit="return vali()">



    <br>
    <br><br>  
    <center>
        
        <style>
            td{
                font-size: 150%;
            }
            
        </style>  
        <h1>Entrada a  Inventario</h1>
    <table border="1" class="tablas table-bordered table-striped">
        <tr><td>
                Selecciona un SKU  :</td><td> <select required id='sku' data-live-search="true" data-live-search-style="startsWith" class="form-control selectpicker"  name="sku" class="form-control select_group"  onkeypress="sumar()" onChange="document.getElementById('multiplicador').value = '';document.getElementById('qty').value = ''" onselect="sumar()">
     <?php
     
     echo '<option>Selecciona una SKU</option>';
     foreach($users as $user){
         
	echo "<option value='".$user['sku']."' >".$user['sku']."</option>";
     }
     ?>
  </select>
            </td></tr>
  <!-- User details -->
  <div >
      
       <input type="hidden" name="sidproducto" id='sidproducto'>
      <tr>  <td> Descripcion :</td><td> <span id='sdescripcion'></span><br/></td></tr>
   <!--<tr> <td>Precio : </td><td><span id='sprecio'></span><br/></td></tr>-->
   <tr> <td>Stock Existente  :</td> <td><span id='sstock' onkeypress="sumar()" onChange="sumar()" onselect="sumar()"></span></td><br/></tr>
   
      
  </div>


  
  <tr><td> Nuevas Piezas :</td> <td  ><input onKeyPress="return soloNumeros(event)" required type="number" class="form-control" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  min="1"  max="5000" maxlength="4" id="multiplicador" name="multiplicador" onkeyup="sumar();" onChange="sumar();"> </td><br/><br></tr>
  <tr> <td>Total de Piezas :</td><td> <input type="text" class="form-control" name="qty" style="background-color:#03E7F7;" readonly id="qty"></td></tr>
  <tr><td> No. Pedimento  : </td> <td  ><input class="form-control"   maxlength="20" id="pedimento" name="pedimento" onkeyup="();" onChange="();"> </td><br/><br></tr>
 
   <tr><td colspan="2"><FONT FACE="Arial" SIZE=2 COLOR="red">Seleccione si no tiene pedimento</font>
   
<input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent()"/></td></tr>
   
   
  <tr><td> <select name="tipo_de_documento" id="tipo_documento" required onchange="showInp()">
                                        <option value="">Tipo de documento</option>
                                        <option value="Compra">Compra</option>
                                        
                                        <option value="Devolución">Devolución</option> 
          </select> </td> <td> <input class="form-control" id="vacio" type="text"  disabled />
                                        <input class="form-control" id="factura" type="text" style="display: none" required name="numero_documento" placeholder="No Factura"/>
                                           <input class="form-control" id="vale_garantia" type="text" style="display: none" required  name="numero_documento"  placeholder="No Vale ó Garantía"/>
                                        
  
  
 

                                  

                                   
                                        
                                  
    </table>
    </center>
  <br><br>
 <input class="btn btn-success" type="submit" title="Da clic para guardar los datos" value="Guardar" data-toggle="tooltip" data-placement="right" title="Da clic para guardar los datos de la venta">


                <a title="Da clic para regresar al menú" href="javascript:window.history.go(-1);" class="btn btn-danger"><b> </b>Cancelar</a>
</form>

  <!--<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.2.1.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>-->
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/entrada_inventario.js' ?>"></script>
                       
  <!-- Script 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.css" />
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script>
    
    
    <script>
        
        function soloNumeros(e){
	var key = window.Event ? e.which : e.keyCode
	return (key >= 48 && key <= 57)
}


window.onload = function() {
  var myInput = document.getElementById('multiplicador');
  myInput.onpaste = function(e) {
    e.preventDefault();
    //alert("esta acción está prohibida");
  }
  
  myInput.oncopy = function(e) {
    e.preventDefault();
   // alert("esta acción está prohibida");
  }
}
    </script>
 </body>
</html>
=======
<!doctype html>

<body>

    <?php
    /* $dataLevel = $this->userlevel->checkLevel($role);

      $dataLevel_id = $this->userlevel->id($id);
      $result = $this->User_model->getAllSettings();
      $site_title = $result->site_title;
      ?>

      <?php
      if ($dataLevel == 'is_admin') {

      } */
    ?>
    <!--
    
        <form action="<?= base_url('Products/productModificar') ?>" method="post" align="center" onsubmit="return vali()">
    
    
    
            <br>
            <br><br>  
            <center>
    
                <style>
                    td{
                        font-size: 150%;
                    }
    
                </style>  
                <h1>Entrada a  Inventario</h1>
                <table border="1" class="tablas table-bordered table-striped">
                    <tr><td>
                            Selecciona un SKU  :</td><td> <select required id='sku' data-live-search="true" data-live-search-style="startsWith" class="form-control selectpicker"  name="sku" class="form-control select_group"  onkeypress="sumar()" onChange="document.getElementById('multiplicador').value = '';
                                    document.getElementById('qty').value = ''" onselect="sumar()">
    <?php
    echo '<option>Selecciona una SKU</option>';
    foreach ($users as $user) {

        echo "<option value='" . $user['sku'] . "' >" . $user['sku'] . "</option>";
    }
    ?>
                            </select>
    
    
    
                        </td></tr>
                  
                    <div >
    
                        <input type="hidden" name="sidproducto" id='sidproducto'>
                        <tr>  <td> Descripcion :</td><td> <span id='sdescripcion'></span><br/></td></tr>
                     <tr> <td>Stock Existente  :</td> <td><span id='sstock' onkeypress="sumar()" onChange="sumar()" onselect="sumar()"></span></td><br/></tr>
    
    
                    </div>
    
    
    
                    <tr><td> Nuevas Piezas :</td> <td  ><input onKeyPress="return soloNumeros(event)" required type="number" class="form-control" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  min="1"  max="5000" maxlength="4" id="multiplicador" name="multiplicador" onkeyup="sumar();" onChange="sumar();"> </td><br/><br></tr>
                    <tr> <td>Total de Piezas :</td><td> <input type="text" class="form-control" name="qty" style="background-color:#03E7F7;" readonly id="qty"></td></tr>
                    <tr><td> No. Pedimento  : </td> <td  ><input class="form-control"   maxlength="20" id="pedimento" name="pedimento"> </td><br/><br></tr>
    
                    <tr><td colspan="2">No tiene pedimento
    
                            <input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent()"/></td></tr>
    
    
                    <tr><td> 
    
    <?php
    if ($dataLevel == 'is_admin') {
        ?>
                                                            <select name="tipo_de_documento" id="tipo_documento" required onchange="showInpEntrada()">
                                                                <option value="">Tipo de documento</option>
                                                                <option value="Compra">Compra</option>
                                                                <option value="Devolución">Devolución</option> 
                                                                <option value="Ajuste">Por ajuste</option> 
                                                            </select> </td> <td> <input class="form-control" id="vacio" type="text"  disabled />
                                                            <input class="form-control" id="factura" type="text" style="display: none" required name="numero_documento" placeholder="No Factura"/>
                                                            <input class="form-control" id="vale_garantia" type="text" style="display: none" required  name="numero_documento"  placeholder="No Vale ó Garantía"/>
                                
                                
                                                            <textarea id="porajuste"  name="numero_documento" class="form-control input-sm" rows="5"  style="resize:none;display: none" placeholder="Ingresa una justificación"></textarea>
                                
        <?php
    } else if (($dataLevel == 'is_editor') && ($dataLevel_id == 4)) {
        ?>
                                                            <select name="tipo_de_documento" id="tipo_documento" required onchange="showInpEntrada()">
                                                                <option value="">Tipo de documento</option>
                                                                <option value="Compra">Compra</option>
                                                                <option value="Devolución">Devolución</option> 
                                                                <option value="Ajuste">Por ajuste</option> 
                                                            </select> </td> <td> <input class="form-control" id="vacio" type="text"  disabled />
                                                            <input class="form-control" id="factura" type="text" style="display: none" required name="numero_documento" placeholder="No Factura"/>
                                                            <input class="form-control" id="vale_garantia" type="text" style="display: none" required  name="numero_documento"  placeholder="No Vale ó Garantía"/>
                                                           <textarea id="porajuste"  name="numero_documento" class="form-control input-sm" rows="5"  style="resize:none;display: none" placeholder="Ingresa una justificación"></textarea>
        <?php
    } else {
        ?>
                                                            <select name="tipo_de_documento" id="tipo_documento" required onchange="showInpEntrada()">
                                                                <option value="">Tipo de documento</option>
                                                                <option value="Compra">Compra</option>
                                                                <option value="Devolución">Devolución</option> 
                                                                <option value="Ajuste">Por ajuste</option> 
                                                            </select> </td> <td> <input class="form-control" id="vacio" type="text"  disabled />
                                                            <input class="form-control" id="factura" type="text" style="display: none" required name="numero_documento" placeholder="No Factura"/>
                                                            <input class="form-control" id="vale_garantia" type="text" style="display: none" required  name="numero_documento"  placeholder="No Vale ó Garantía"/>
                                                           <textarea id="porajuste"  name="numero_documento" class="form-control input-sm" rows="5"  style="resize:none;display: none" placeholder="Ingresa una justificación"></textarea>
        <?php
    }
    ?>
    
    
    
    
    
    
    
    
    
    
                </table>
            </center>
            <br><br>
            <input class="btn btn-success" type="submit" title="Da clic para guardar los datos" value="Guardar" data-toggle="tooltip" data-placement="right" title="Da clic para guardar los datos de la venta">
    
    
            <a title="Da clic para regresar al menú" href="javascript:window.history.go(-1);" class="btn btn-danger"><b> </b>Cancelar</a>
        </form>
    
     
        <script type="text/javascript" src="<?php echo base_url() . 'assets/js/entrada_inventario.js' ?>"></script>
    
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script>
    </body>
    </html>-->



















































    <!-- Content Wrapper. Contains page content -->


    <?php
//check user level
    $dataLevel = $this->userlevel->checkLevel($role);

    $dataLevel_id = $this->userlevel->id($id);
    $result = $this->User_model->getAllSettings();
    $site_title = $result->site_title;
//check user level
    ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                ENTRADAS
                <small>ENTRADAS</small>
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
                    <h1>    <MARQUEE WIDTH=100% HEIGHT=60>   ENTRADAS     </MARQUEE></h1>
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

                
                                    <!--<input autocomplete="off" autofocus class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">
                    --><div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Agregar</h3>
                        </div>
                        <!-- /.box-header -->
                        <form role="form" action="<?php base_url('') ?>" method="post" class="form-horizontal">
                            <div class="box-body">

                                <?php echo validation_errors(); ?>

                                <!-- <div class="form-group">
                                     <label for="gross_amount" class="col-sm-12 control-label">Fecha: <?php echo date('Y-m-d') ?></label>
                                 </div>
                                 <div class="form-group">
                                     <label for="gross_amount" class="col-sm-12 control-label">Hora: <?php echo date('h:i a') ?></label>
                                 </div>
     
                                 <div class="row">
                                     <div class="col-md-2">   <center><B>Consecutivo</B></center>
                                     </div>
                                     <div class="col-md-2"> <input class="form-control" id="consecutivo" name="consecutivo" type="text" />
                                     </div>
     
                                 </div>
                                 <br>
     
                                 <div class="col-md-4 col-xs-12 pull pull-left">-->







                                <?php
                                if ($dataLevel == 'is_admin') {
                                    echo'
                                      <div class="form-group">

                                      <select class="form-control" name="tipo_de_documento" class="col-sm-5 control-label " id="tipo_de_documento"    onchange="cambiarTipoDocumento()" required >
                                                <option value="Tipo de salida">Tipo de entrada</option>
                                                <option value="Venta">Venta</option>
                                                <option value="Reposición">Devolución</option>
                                                
                                            </select>
<br><br>
                                      <div class="col-sm-7">
                                      <input class="form-control" id="vacio" type="text" disabled />
                                            <input class="form-control" id="factura" type="text" style="display: none" required name="bill_no" placeholder="No Factura" />
                                            <input class="form-control" id="remision" type="text" style="display: none" required name="bill_no" placeholder="No Vale o Garantía" />
                                            

                                        <!--<textarea id="porajuste"  name="bill_no" class="form-control input-sm" rows="5" cols="80" style="resize:none;display: none" placeholder="Ingresa una observación" =""></textarea>
                                      --></div>
                                      </div>


                                      ';
                                } else if (($dataLevel == 'is_editor') && ($dataLevel_id == 3)) {
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
                                        <br>
                                            <input class="form-control" id="vacio_1" type="text" disabled />
                                            <input class="form-control" id="factura_1" type="text" style="display: none" required name="bill_no" placeholder="No Factura" />
                                            <input class="form-control" id="remision_1" type="text" style="display: none" required name="bill_no" placeholder="No Remisión" />
                                            <input class="form-control" id="valedesalida_1" type="text" style="display: none" required name="bill_no" placeholder="No Vale de Salida" />
                                            <input class="form-control" id="porajuste_1" style="display: none" type="text" required name="bill_no" placeholder="Por ajuste" />
                                        <textarea id="porajuste"  name="bill_no" class="form-control input-sm" rows="5" cols="80" style="resize:none;display: none" placeholder="Ingresa una observación" =""></textarea>
                                   </div>
                                </div>
                            
                         
                            ';
                                } else if ($dataLevel == 'is_almacen') {
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
                                        <input class="form-control" style="display: none" type="text" required name="bill_no" placeholder="Por ajuste" />
                                   </div>
                                </div>
                            
                         
                            ';
                                } else if ($dataLevel == 'is_editor') {
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
                                        <input class="form-control" style="display: none" type="text" required name="bill_no" placeholder="Por ajuste" />
                                   </div>
                                </div>
                            
                         
                            ';
                                }
                                ?>
                                <!--  Clave del Cliente:
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
  
                                -->


                            </div>





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
                            <table class="table table-bordered" id="product_info_table" border="1">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                     <!--   <th>Pedimento</th>-->
                                        <th>Descripción</th>

                                        <th>Stock</th>
                                        <th>Cantidad</th>
                                        <!-- <th style="width:20%">Importe</th>-->
                                        <th><button type="button" id="add_row" class="btn btn-default"><i class="fa fa-plus"></i></button></th>
                                    </tr>
                                </thead>

                                <tbody>


                                    <tr id="row_1">
                                        <td>



                                            <select style="width:170px;" onchange="this.style.width = 200" onkeyup="sumar();" onchange="sumar();" class="form-control desabilitar  select_group product sku" name="sku[]" id="category-1" required>
                                                <option value="Null">Seleccione</option>
                                                <?php foreach ($category as $row) : ?>
                                                    <option value="<?php echo $row->id; ?>"><?php echo $row->sku; ?></option>
                                                <?php endforeach; ?>
                                            </select>

                                            <br>
                                            Total de Piezas : <input type="text" class="form-control" name="total_de_piezas[]" style="background-color:#03E7F7;" readonly id="suma_1">



                                        </td>
                                       <!-- <td>


                                            <select style="width:250px;border:1px solid #04467E;background-color:#DDFFFF;color:#2D4167;font-size:18px" class="form-control desabilitar select_group product" id="sub_category-1" name="sub_category[]" required>

                                                <option value=''>Selecciona una opción</option>
                                        <?php foreach ($category as $row) : ?>
                                                                                <option value="<?php echo $row->id; ?>"><?php echo $row->sku; ?></option>
                                        <?php endforeach; ?>
                                            </select>
                                            <div id="oculto1" style="visibility:hidden1">
                                                Cantidad X Pedimento
                                            </div>
                                            <input type="text" style="width:250px;" name="customer_name" class="form-control input-sm desabilitar" id="suname-1" readonly>
                                            <br />



                                        </td>-->
                                        <td> <input type="text" style="width:250px;" name="descripcion[]" id="rate_value_1" class="form-control desabilitar" disabled autocomplete="off" onkeyup="sumar();" onchange="sumar();">


                                            No. Pedimento  : 
                                            <input class="form-control"   maxlength="20" id="pedimento_1" name="pedimento_[]"><br>
                                            <FONT FACE="Arial" SIZE=2 COLOR="red">Seleccione si no tiene pedimento</font>

                                            <input type="checkbox" name="check" onclick="estaSeleccionado('1')" id="check_1" value="1"/>
                                        </td>

                                        <td>
                                            <input type="text" style="width:90px;" name="rate[]" id="rate_1" class="form-control desabilitar claseSuma_1" onchange="sumaInventarioEntrada()" onkeyup="sumaInventarioEntrada()" disabled autocomplete="off">
                                            <br>

                                            <!--<select class="form-control" name="tipo_de_documento_1" class="col-sm-5 control-label " id="tipo_de_documento_1"    onchange="cambiarTipoDocumento()" required >
                                                <option value="Tipo de salida_1">Tipo de salida</option>
                                                <option value="Venta_1">Venta</option>
                                                <option value="Reposición_1">Reposición</option>
                                                <option value="Préstamo_1">Préstamo</option>
                                                <option value="Por ajuste_1">Por ajuste</option>
                                            </select>--> </td> <td>     <input onKeyPress="return soloNumeros(event)" required type="number" class="form-control claseSuma_1" onchange="sumaInventarioEntrada()" onkeyup="sumaInventarioEntrada()" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  min="1"  max="5000" maxlength="4" id="nuevas_piezas_1" name="nuevas_piezas[]"> 



                                          


                                            <input type="hidden" name="amount[]" id="amount_1" class="form-control desabilitar" disabled autocomplete="off">
                                            <input type="hidden" name="amount_value[]" id="amount_value_1 desabilitar" class="form-control" autocomplete="off">

                                        <td><button type="button" class="btn btn-default" onclick="removeRow('1')" id="deleteRow-1"><i class="fa fa-close"></i></button></td>


                                        <td colspan="2">

                                        </td>
                                        <td> <input type="hidden" id="idproduct-1" value="">
                                          <!--   <input style="width:90px;" type="number" min="1" required name="qty[]" id="qty_1" class="form-control desabilitar" required onkeyup="getTotal(1);
                                                   " onChange="getTotal(1);
                                                   ">
                                            --> </td>



                                <br><br><br><br>
                                <td>  </td><br/><br>




                                <td> </td>

                                </tbody>
                            </table>
                            <form>
                                </div>

                                <br /> <br />

                                <div class="col-md-6 col-xs-12 pull pull-right">



                                    <input type="hidden" class="form-control" id="discount" name="discount" value="0">


                                    <input type="hidden" class="form-control" id="net_amount_value" name="net_amount_value" autocomplete="off" value="0">
                                </div>
                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" id="botonOrden" class="btn btn-primary botonOrden" >Crear ENTRADAS</button>
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


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
















    <!-- Script
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->









    <div>

    </div>




    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/entrada_inv.js' ?>"></script>

    <script type="text/javascript" src="<?php echo base_url() . 'assets/buscar/js/select2.js' ?>"></script>
    <!--<script type="text/javascript" src="<?php echo base_url() . 'assets/buscar/jquery-3.1.1.min.js' ?>"></script>-->


    <script type="text/javascript">
                                            $(document).ready(function() {
                                                $(".select_group").select2();
                                            });</script>


    <script>



    </script>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
