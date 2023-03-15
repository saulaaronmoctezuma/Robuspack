<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
<<<<<<< HEAD
           Con Inv Refacciones
=======
            Refacciones
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            <small></small>
        </h1>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<<<<<<< HEAD
            <li class="active">Con Inv Refacciones</li>
        </ol>
    </section>

=======
            <li class="active">Refacciones</li>
        </ol>
    </section>


    
    
    
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
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

                <!-- Para traerse el rol que esta registrado-->
                <?php
                //check user level
                $dataLevel = $this->userlevel->checkLevel($role);


                //check user level
                ?>



                <?php
                if ($dataLevel == 'is_admin') {
                    ?>
                    <a href="<?php echo base_url('products/create') ?>" class="btn btn-primary">Agregar Refacciones</a>
                    <a href="<?php echo base_url('products/agregar') ?>" class="btn btn-foursquare">Actualizar Inventario</a>
                    <?php
                } else if (($dataLevel == 'is_editor')) {
                    ?>
                    <a href="<?php echo base_url('products/create') ?>" class="btn btn-primary">Agregar Refacciones</a>
                    <a href="<?php echo base_url('products/agregar') ?>" class="btn btn-foursquare">Actualizar Inventario</a>
                    <?php
<<<<<<< HEAD
                }else if (($dataLevel == 'is_servicio_a_clientes')) {
                    ?>
                    <a href="<?php echo base_url('products/create') ?>" class="btn btn-primary">Agregar Refacciones</a>
                    <a href="<?php echo base_url('products/agregar') ?>" class="btn btn-foursquare">Actualizar Inventario</a>
                    <?php
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                }
                ?>

                <br /> <br />

        <!--<button type="button" class="btn btn-default" onclick="editFuncProducts(4)" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i>ejemplo</button>
                -->
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Administrar</h3>
                    </div>
<<<<<<< HEAD
                    
=======

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    <!-- /.box-header -->
                    <div id="div1">
                        <table id="manageTable" class="table table-bordered table-striped">
                            <thead>
<<<<<<< HEAD
                                <tr bgcolor="#76DDFD">
                                  <!--mostrar imagen<th>Imagen 0D9ECB  </th>-->
=======
                                <tr bgcolor="#0D9ECB">
                                  <!--mostrar imagen<th>Imagen</th>-->
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606


                                    <?php
                                    if ($dataLevel == 'is_admin') {
                                        ?>
                                        <th>SKU</th>
                                        <th>Descripción</th>
<<<<<<< HEAD
                                        
                                         <th>Stock</th>
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                        <th>Traducción</th>
                                        <th>Serie Máquina</th>
                                        <th>Tipo de Máquina</th>
                                        <th>Modulo</th>
<<<<<<< HEAD
                                       
=======
                                        <th>Stock</th>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                        <th> Medidas o caractetisticas</th>
                                        <th>Medida de la máquina</th>
                                        <th>Línea</th>
                                        <th>Tipo Consumibles</th>
                                        <th>Fecha de última venta</th>
                                        <th>Precio de compra</th>
                                        <th>Valor en almacen </th>
                                        <th>Precio 1 (17%) </th>
                                        <th>Precio 2 (25%) </th>
                                        <th>Precio 3 (35%) </th>
<<<<<<< HEAD
                                          <th>Fecha actualizacion precio </th>
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                        <th>Tiempo de fabricación (DIAS)</th>
                                        <th>Indice ABC </th>
                                        <th>Min </th>
                                        <th>Max </th>
                                        <th>Cantidad sugeridad a solicitar</th>
                                        <th>Cond</th>
                                        <th>Proveedor principal</th>
                                        <th>Proveedor secundario</th>
                                        <th>Ubicación</th>
                                        <th>Acción</th><?php
<<<<<<< HEAD
                                } else if (($dataLevel == 'is_editor')) {
=======
                                    } else if (($dataLevel == 'is_editor')) {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                        ?>



                                        <th>SKU</th>
                                        <th>Descripción</th>
                                        <th>Traducción</th>
                                        <th>Serie Máquina</th>
<<<<<<< HEAD
                                        <th>Tipo de Máquina</th>
                                        <th>Modulo</th>
                                        <th>Stock</th>
                                        <th> Medidas o caractetisticas</th>
                                        <th>Medida de la máquina</th>
                                        <th>Linea</th>
                                        <th>Tipo Consumibles</th>
                                        <th>Fecha de última venta</th>
=======
                                        <th>Medida de la máquina</th>
                                        <th>Modulo</th>
                                        <th>Tipo de Máquina</th>
                                        <th> Medidas o caractetisticas</th>
                                        <th>Linea</th>
                                        <th>Tipo Consumibles</th>
                                        <th>Fecha de última venta</th>
                                        <th>Stock</th>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                        <th>Precio de compra</th>
                                        <th>Valor en almacen </th>
                                        <th>Precio 1 (17%) </th>
                                        <th>Precio 2 (25%) </th>
                                        <th>Precio 3 (35%) </th>
<<<<<<< HEAD
                                        <th>Fecha actualizacion precio </th>
                                        <th>Tiempo de fabricación (Días)</th>
                                        <th>Indice ABV </th>
=======
                                        <th>Tiempo de fabricación (Días)</th>
                                        <th>Indice ABC </th>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                        <th>Min </th>
                                        <th>Max </th>
                                        <th>Cantidad sugeridad a solicitar</th>
                                        <th>Cond</th>
                                        <th>Proveedor principal</th>
                                        <th>Proveedor secundario</th>
                                        <th>Ubicación</th>
                                        <th>Acción</th>


                                        <?php
                                    } else if (($dataLevel == 'is_almacen')) {
                                        ?>



                                        <th>SKU</th>
                                        <th>Descripción</th>
                                        <th>Ubicación</th>
                                        <th>Traducción</th>
                                        <th>Serie Máquina</th>
                                        <th>Tipo de Máquina</th>
                                        <th>Modulo</th>
                                        <th>Stock</th>
                                        <th> Medidas o caractetisticas</th>
                                        <th>Medida de la máquina</th>
                                        <th>Linea</th>
                                        <th>Tipo Consumibles</th>
                                        <th>Fecha de última venta</th>
                                       <!--<th>Precio de compra</th>
                                       <th>Valor en almacen </th>
                                        <th>PRECIO 1 (17%) </th>-->
<<<<<<< HEAD
                                        <th>PRECIO 2  </th>
                                        <th>PRECIO 3 </th>
                                        <th>Fecha actualizacion precio </th>
=======
                                        <th>PRECIO 2 (25%) </th>
                                        <th>PRECIO 3 (35%) </th>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                        <th>Tiempo de fabricacion (Días)</th>
                                        <th>Indice ABC </th>
                                        <th>Min </th>
                                        <th>Max </th>
                                         <!--<th>Cantidad sugeridad a solicitar</th>
                                        <th>Cond</th>-->
                                        <th>Proveedor principal</th>
                                        <th>Proveedor secundario</th>




                                        <?php
                                    } else if (($dataLevel == 'is_servicio_a_clientes')) {
                                        ?>



                                        <th>SKU</th>
                                        <th>Descripción</th>
                                        <th>Traducción</th>
<<<<<<< HEAD
                                         <th>Stock</th>
                                             <th>Precio 1 </th>
                                        <th>Precio 2  </th>
                                        <th>Precio 3  </th>
                                        <th>Fecha actualizacion precio </th>
                                        <th>Serie Máquina</th>
                                        <th>Tipo de Máquina</th>
                                        <th>Modulo</th>
                                       
=======
                                        <th>Serie Máquina</th>
                                        <th>Tipo de Máquina</th>
                                        <th>Modulo</th>
                                        <th>Stock</th>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                        <th> Medidas o caractetisticas</th>
                                        <th>Medida de la máquina</th>
                                        <th>Linea</th>
                                        <th>Tipo Consumibles</th>
                                        <th>Fecha de última venta</th>
<<<<<<< HEAD
                                       <th>Precio de compra</th>
                                     <!--  <th>Valor en almacen </th>-->
                                    
=======
                                       <!--<th>Precio de compra</th>
                                       <th>Valor en almacen </th>
                                        <th>PRECIO 1 (17%) </th>-->
                                        <th>Precio 2 (25%) </th>
                                        <th>Precio 3 (35%) </th>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                        <th>Tiempo de fabricación (Días)</th>
                                      <!--  <th>Indice ABC </th>
                                        <th>Min </th>
                                        <th>Max </th>
                                         <th>Cantidad sugeridad a solicitar</th>
                                        <th>Cond</th>
                                        <th>Proveedor principal</th>
                                        <th>Proveedor secundario</th>-->
                                        <th>Ubicación</th>
<<<<<<< HEAD
                                        <th>Acción</th>
                            
=======


>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                                        <?php
                                    } else if (($dataLevel == 'is_jefe_mantenimiento')) {
                                        ?>



                                        <th>SKU</th>
                                        <th>Descripción</th>
                                        <th>Traducción</th>
                                        <th>Serie Máquina</th>
                                        <th>Tipo de Máquina</th>
                                        <th>Modulo</th>
                                        <th>Stock</th>
                                        <th> Medidas o caractetisticas</th>
                                        <th>Medida de la máquina</th>
                                        <th>Linea</th>
                                       <!-- <th>Tipo Consumibles</th>
                                        <th>Fecha de última venta</th>
                                       <th>Precio de compra</th>
                                       <th>Valor en almacen </th>
                                        <th>PRECIO 1 (17%) </th>-->
<<<<<<< HEAD
                                        <th>Precio 2  </th>
                                        <th>Precio 3  </th>
                                        <th>Fecha actualizacion precio </th>
=======
                                        <th>Precio 2 (25%) </th>
                                        <th>Precio 3 (35%) </th>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                       <!--  <th>Tiempo de fabricacion (DIAS)</th>
                                       <th>Indice ABC </th>
                                        <th>Min </th>
                                        <th>Max </th>
                                         <th>Cantidad sugeridad a solicitar</th>
                                        <th>Cond</th>
                                        <th>Proveedor principal</th>
                                        <th>Proveedor secundario</th>-->
                                        <th>Ubicación</th>



                                        <?php
                                    } else if (($dataLevel == 'is_mantenimiento')) {
                                        ?>



                                        <th>SKU</th>
                                        <th>Descripción</th>
                                        <th>Traducción</th>
                                        <th>Serie Máquina</th>
                                        <th>Tipo de Máquina</th>
                                        <th>Modulo</th>
                                        <th>Stock</th>
                                        <th> Medidas o caractetisticas</th>
                                        <th>Medida de la máquina</th>
                                        <th>Linea</th>
                                       <!-- <th>Tipo Consumibles</th>
                                        <th>Fecha de última venta</th>
                                       <th>Precio de compra</th>
                                       <th>Valor en almacen </th>
                                        <th>PRECIO 1 (17%) </th>-->
<<<<<<< HEAD
                                        <th>Precio 2  </th>
                                        <th>Precio 3  </th>
                                        <th>Fecha actualizacion precio </th>
=======
                                        <th>Precio 2 (25%) </th>
                                        <th>Precio 3 (35%) </th>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                       <!--  <th>Tiempo de fabricacion (DIAS)</th>-->
                                        <th>Indice ABC </th>
                                           <!--<th>Min </th>
                                         <th>Max </th>
                                          <th>Cantidad sugeridad a solicitar</th>
                                         <th>Cond</th>
                                         <th>Proveedor principal</th>
                                         <th>Proveedor secundario</th>-->
                                        <th>Ubicación</th>



                                        <?php
                                    } else if (($dataLevel == 'is_refacciones')) {
                                        ?>



                                        <th>SKU</th>
                                        <th>Descripción</th>
                                        <th>Traducción</th>
                                        <th>Serie Máquina</th>
                                        <th>Tipo de Máquina</th>
                                        <th>Modulo</th>
                                        <th>Stock</th>
                                        <th> Medidas o caractetisticas</th>
                                        <th>Medida de la máquina</th>
                                        <th>Linea</th>
                                        <th>Tipo Consumibles</th>
                                        <th>Fecha de última venta</th>
                                    <!--  <th>Precio de compra</th>
                                      <th>Valor en almacen </th>
                                       <th>PRECIO 1 (17%) </th>-->
<<<<<<< HEAD
                                        <th>PRECIO 2 </th>
                                        <th>PRECIO 3  </th>
                                        <th>Fecha actualizacion precio </th>
=======
                                        <th>PRECIO 2 (25%) </th>
                                        <th>PRECIO 3 (35%) </th>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                        <th>Tiempo de fabricacion (Días)</th>
                                        <th>Indice ABC </th>
                                        <!-- <th>Min </th>
                                         <th>Max </th>
                                          <th>Cantidad sugeridad a solicitar</th>
                                         <th>Cond</th>
                                         <th>Proveedor principal</th>
                                         <th>Proveedor secundario</th>-->
                                        <th>Ubicación</th>



                                        <?php
                                    } else if (($dataLevel == 'is_maquinaria')) {
                                        ?>



                                        <th>SKU</th>
                                        <th>Descripción</th>
                                        <th>Traducción</th>
                                        <th>Serie Máquina</th>
                                        <th>Tipo de Máquina</th>
                                        <th>Modulo</th>
                                        <th>Stock</th>
                                        <th> Medidas o caractetisticas</th>
                                        <th>Medida de la máquina</th>
                                        <th>Linea</th>
                                        <th>Tipo Consumibles</th>
                                        <th>Fecha de última venta</th>
                                    <!--  <th>Precio de compra</th>
                                      <th>Valor en almacen </th>
                                       <th>PRECIO 1 (17%) </th>-->
<<<<<<< HEAD
                                        <th>PRECIO 2 </th>
                                        <th>PRECIO 3  </th>
                                        <th>Fecha actualizacion precio </th>
=======
                                        <th>PRECIO 2 (25%) </th>
                                        <th>PRECIO 3 (35%) </th>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                        <th>Tiempo de fabricación (Días)</th>
                                     <!-- <th>Indice ABC </th>
                                       <th>Min </th>
                                       <th>Max </th>
                                        <th>Cantidad sugeridad a solicitar</th>
                                       <th>Cond</th>
                                       <th>Proveedor principal</th>
                                       <th>Proveedor secundario</th>-->
                                        <th>Ubicación</th>



                                        <?php
                                    } else if (($dataLevel == 'is_Gerente_Ventas')) {
                                        ?>



                                        <th>SKU</th>
                                        <th>Descripción</th>
                                        <th>Traducción</th>
                                        <th>Serie Máquina</th>
                                        <th>Tipo de Máquina</th>
                                        <th>Modulo</th>
                                        <th>Stock</th>
                                        <th> Medidas o caractetisticas</th>
                                        <th>Medida de la máquina</th>
                                        <th>Linea</th>
                                        <th>Tipo Consumibles</th>
                                        <th>Fecha de última venta</th>
                                    <!--  <th>Precio de compra</th>
<<<<<<< HEAD
                                      <th>Valor en almacen </th>-->
                                       <th>PRECIO 1  </th>
                                        <th>PRECIO 2 </th>
                                        <th>PRECIO 3  </th>
                                        <th>Fecha actualizacion precio </th>
=======
                                      <th>Valor en almacen </th>
                                       <th>PRECIO 1 (17%) </th>-->
                                        <th>PRECIO 2 (25%) </th>
                                        <th>PRECIO 3 (35%) </th>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                        <th>Tiempo de fabricacion (Días)</th>
                                        <th>Indice ABC </th>
                                        <!-- <th>Min </th>
                                         <th>Max </th>
                                          <th>Cantidad sugeridad a solicitar</th>
                                         <th>Cond</th>
                                         <th>Proveedor principal</th>
                                         <th>Proveedor secundario</th>-->
                                        <th>Ubicación</th>



                                        <?php
                                    }
                                    ?>






<!--   <th>Disponibilidad</th>-->








                                </tr>
                            </thead>
<<<<<<< HEAD
                            <tbody></tbody>
                            
                            
                               <tfoot>
                                <tr bgcolor="gray">
                                     <?php
=======







<!--<tbody></tbody>-->
                            <tfoot>
                                <tr bgcolor="gray">




                                    <?php
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                    if ($dataLevel == 'is_admin') {
                                        ?>
                                        <th>SKU</th>
                                        <th>Descripción</th>
<<<<<<< HEAD
                                          <th>Stock</th>
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                        <th>Traducción</th>
                                        <th>Serie Máquina</th>
                                        <th>Tipo de Máquina</th>
                                        <th>Modulo</th>
<<<<<<< HEAD
                                      
=======
                                        <th>Stock</th>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                        <th> Medidas o caractetisticas</th>
                                        <th>Medida de la máquina</th>
                                        <th>Línea</th>
                                        <th>Tipo Consumibles</th>
                                        <th>Fecha de última venta</th>
                                        <th>Precio de compra</th>
                                        <th>Valor en almacen </th>
                                        <th>Precio 1 (17%) </th>
                                        <th>Precio 2 (25%) </th>
                                        <th>Precio 3 (35%) </th>
<<<<<<< HEAD
                                        <th>Fecha actualizacion precio </th>
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                        <th>Tiempo de fabricación (DIAS)</th>
                                        <th>Indice ABC </th>
                                        <th>Min </th>
                                        <th>Max </th>
                                        <th>Cantidad sugeridad a solicitar</th>
                                        <th>Cond</th>
                                        <th>Proveedor principal</th>
                                        <th>Proveedor secundario</th>
                                        <th>Ubicación</th>
                                        <th>Acción</th><?php
<<<<<<< HEAD
                                } else if (($dataLevel == 'is_editor')) {
=======
                                    } else if (($dataLevel == 'is_editor')) {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                        ?>



                                        <th>SKU</th>
                                        <th>Descripción</th>
                                        <th>Traducción</th>
                                        <th>Serie Máquina</th>
<<<<<<< HEAD
                                        <th>Tipo de Máquina</th>
                                        <th>Modulo</th>
                                        <th>Stock</th>
                                        <th> Medidas o caractetisticas</th>
                                        <th>Medida de la máquina</th>
                                        <th>Linea</th>
                                        <th>Tipo Consumibles</th>
                                        <th>Fecha de última venta</th>
=======
                                        <th>Medida de la máquina</th>
                                        <th>Modulo</th>
                                        <th>Tipo de Máquina</th>
                                        <th> Medidas o caractetisticas</th>
                                        <th>Linea</th>
                                        <th>Tipo Consumibles</th>
                                        <th>Fecha de última venta</th>
                                        <th>Stock</th>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                        <th>Precio de compra</th>
                                        <th>Valor en almacen </th>
                                        <th>Precio 1 (17%) </th>
                                        <th>Precio 2 (25%) </th>
                                        <th>Precio 3 (35%) </th>
<<<<<<< HEAD
                                        <th>Fecha actualizacion precio </th>
                                        <th>Tiempo de fabricación (Días)</th>
                                        <th>Indice ABV </th>
=======
                                        <th>Tiempo de fabricación (Días)</th>
                                        <th>Indice ABC </th>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                        <th>Min </th>
                                        <th>Max </th>
                                        <th>Cantidad sugeridad a solicitar</th>
                                        <th>Cond</th>
                                        <th>Proveedor principal</th>
                                        <th>Proveedor secundario</th>
                                        <th>Ubicación</th>
                                        <th>Acción</th>


                                        <?php
                                    } else if (($dataLevel == 'is_almacen')) {
                                        ?>



                                        <th>SKU</th>
                                        <th>Descripción</th>
                                        <th>Ubicación</th>
                                        <th>Traducción</th>
                                        <th>Serie Máquina</th>
                                        <th>Tipo de Máquina</th>
                                        <th>Modulo</th>
                                        <th>Stock</th>
                                        <th> Medidas o caractetisticas</th>
                                        <th>Medida de la máquina</th>
                                        <th>Linea</th>
                                        <th>Tipo Consumibles</th>
                                        <th>Fecha de última venta</th>
                                       <!--<th>Precio de compra</th>
                                       <th>Valor en almacen </th>
                                        <th>PRECIO 1 (17%) </th>-->
<<<<<<< HEAD
                                        <th>PRECIO 2  </th>
                                        <th>PRECIO 3 </th>
                                        <th>Fecha actualizacion precio </th>
=======
                                        <th>PRECIO 2 (25%) </th>
                                        <th>PRECIO 3 (35%) </th>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                        <th>Tiempo de fabricacion (Días)</th>
                                        <th>Indice ABC </th>
                                        <th>Min </th>
                                        <th>Max </th>
                                         <!--<th>Cantidad sugeridad a solicitar</th>
                                        <th>Cond</th>-->
                                        <th>Proveedor principal</th>
                                        <th>Proveedor secundario</th>




                                        <?php
                                    } else if (($dataLevel == 'is_servicio_a_clientes')) {
                                        ?>



                                        <th>SKU</th>
                                        <th>Descripción</th>
                                        <th>Traducción</th>
<<<<<<< HEAD
                                         <th>Stock</th>
                                           <th>Precio 1 </th>
                                        <th>Precio 2  </th>
                                        <th>Precio 3  </th>
                                        <th>Fecha actualizacion precio </th>
                                        <th>Serie Máquina</th>
                                        <th>Tipo de Máquina</th>
                                        <th>Modulo</th>
                                       
=======
                                        <th>Serie Máquina</th>
                                        <th>Tipo de Máquina</th>
                                        <th>Modulo</th>
                                        <th>Stock</th>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                        <th> Medidas o caractetisticas</th>
                                        <th>Medida de la máquina</th>
                                        <th>Linea</th>
                                        <th>Tipo Consumibles</th>
                                        <th>Fecha de última venta</th>
<<<<<<< HEAD
                                      <th>Precio de compra</th>
                                       <!-- <th>Valor en almacen </th>
                                        <th>PRECIO 1 (17%) </th>
                                        <th>Precio 2  </th>
                                        <th>Precio 3  </th>-->
=======
                                       <!--<th>Precio de compra</th>
                                       <th>Valor en almacen </th>
                                        <th>PRECIO 1 (17%) </th>-->
                                        <th>Precio 2 (25%) </th>
                                        <th>Precio 3 (35%) </th>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                        <th>Tiempo de fabricación (Días)</th>
                                      <!--  <th>Indice ABC </th>
                                        <th>Min </th>
                                        <th>Max </th>
                                         <th>Cantidad sugeridad a solicitar</th>
                                        <th>Cond</th>
                                        <th>Proveedor principal</th>
                                        <th>Proveedor secundario</th>-->
                                        <th>Ubicación</th>
<<<<<<< HEAD
                                         <th>Acción</th>
=======

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606


                                        <?php
                                    } else if (($dataLevel == 'is_jefe_mantenimiento')) {
                                        ?>



                                        <th>SKU</th>
                                        <th>Descripción</th>
                                        <th>Traducción</th>
                                        <th>Serie Máquina</th>
                                        <th>Tipo de Máquina</th>
                                        <th>Modulo</th>
                                        <th>Stock</th>
                                        <th> Medidas o caractetisticas</th>
                                        <th>Medida de la máquina</th>
                                        <th>Linea</th>
                                       <!-- <th>Tipo Consumibles</th>
                                        <th>Fecha de última venta</th>
                                       <th>Precio de compra</th>
                                       <th>Valor en almacen </th>
                                        <th>PRECIO 1 (17%) </th>-->
<<<<<<< HEAD
                                        <th>Precio 2  </th>
                                        <th>Precio 3  </th>
                                        <th>Fecha actualizacion precio </th>
=======
                                        <th>Precio 2 (25%) </th>
                                        <th>Precio 3 (35%) </th>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                       <!--  <th>Tiempo de fabricacion (DIAS)</th>
                                       <th>Indice ABC </th>
                                        <th>Min </th>
                                        <th>Max </th>
                                         <th>Cantidad sugeridad a solicitar</th>
                                        <th>Cond</th>
                                        <th>Proveedor principal</th>
                                        <th>Proveedor secundario</th>-->
                                        <th>Ubicación</th>



                                        <?php
                                    } else if (($dataLevel == 'is_mantenimiento')) {
                                        ?>



                                        <th>SKU</th>
                                        <th>Descripción</th>
                                        <th>Traducción</th>
                                        <th>Serie Máquina</th>
                                        <th>Tipo de Máquina</th>
                                        <th>Modulo</th>
                                        <th>Stock</th>
                                        <th> Medidas o caractetisticas</th>
                                        <th>Medida de la máquina</th>
                                        <th>Linea</th>
                                       <!-- <th>Tipo Consumibles</th>
                                        <th>Fecha de última venta</th>
                                       <th>Precio de compra</th>
                                       <th>Valor en almacen </th>
                                        <th>PRECIO 1 (17%) </th>-->
<<<<<<< HEAD
                                        <th>Precio 2  </th>
                                        <th>Precio 3  </th>
                                        <th>Fecha actualizacion precio </th>
=======
                                        <th>Precio 2 (25%) </th>
                                        <th>Precio 3 (35%) </th>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                       <!--  <th>Tiempo de fabricacion (DIAS)</th>-->
                                        <th>Indice ABC </th>
                                           <!--<th>Min </th>
                                         <th>Max </th>
                                          <th>Cantidad sugeridad a solicitar</th>
                                         <th>Cond</th>
                                         <th>Proveedor principal</th>
                                         <th>Proveedor secundario</th>-->
                                        <th>Ubicación</th>



                                        <?php
                                    } else if (($dataLevel == 'is_refacciones')) {
                                        ?>



                                        <th>SKU</th>
                                        <th>Descripción</th>
                                        <th>Traducción</th>
                                        <th>Serie Máquina</th>
                                        <th>Tipo de Máquina</th>
                                        <th>Modulo</th>
                                        <th>Stock</th>
                                        <th> Medidas o caractetisticas</th>
                                        <th>Medida de la máquina</th>
                                        <th>Linea</th>
                                        <th>Tipo Consumibles</th>
                                        <th>Fecha de última venta</th>
                                    <!--  <th>Precio de compra</th>
                                      <th>Valor en almacen </th>
                                       <th>PRECIO 1 (17%) </th>-->
<<<<<<< HEAD
                                        <th>PRECIO 2 </th>
                                        <th>PRECIO 3  </th>
                                        <th>Fecha actualizacion precio </th>
=======
                                        <th>PRECIO 2 (25%) </th>
                                        <th>PRECIO 3 (35%) </th>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                        <th>Tiempo de fabricacion (Días)</th>
                                        <th>Indice ABC </th>
                                        <!-- <th>Min </th>
                                         <th>Max </th>
                                          <th>Cantidad sugeridad a solicitar</th>
                                         <th>Cond</th>
                                         <th>Proveedor principal</th>
                                         <th>Proveedor secundario</th>-->
                                        <th>Ubicación</th>



                                        <?php
                                    } else if (($dataLevel == 'is_maquinaria')) {
                                        ?>



                                        <th>SKU</th>
                                        <th>Descripción</th>
                                        <th>Traducción</th>
                                        <th>Serie Máquina</th>
                                        <th>Tipo de Máquina</th>
                                        <th>Modulo</th>
                                        <th>Stock</th>
                                        <th> Medidas o caractetisticas</th>
                                        <th>Medida de la máquina</th>
                                        <th>Linea</th>
                                        <th>Tipo Consumibles</th>
                                        <th>Fecha de última venta</th>
                                    <!--  <th>Precio de compra</th>
                                      <th>Valor en almacen </th>
                                       <th>PRECIO 1 (17%) </th>-->
<<<<<<< HEAD
                                        <th>PRECIO 2 </th>
                                        <th>PRECIO 3  </th>
                                        <th>Fecha actualizacion precio </th>
=======
                                        <th>PRECIO 2 (25%) </th>
                                        <th>PRECIO 3 (35%) </th>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                        <th>Tiempo de fabricación (Días)</th>
                                     <!-- <th>Indice ABC </th>
                                       <th>Min </th>
                                       <th>Max </th>
                                        <th>Cantidad sugeridad a solicitar</th>
                                       <th>Cond</th>
                                       <th>Proveedor principal</th>
                                       <th>Proveedor secundario</th>-->
                                        <th>Ubicación</th>



                                        <?php
                                    } else if (($dataLevel == 'is_Gerente_Ventas')) {
                                        ?>



                                        <th>SKU</th>
                                        <th>Descripción</th>
                                        <th>Traducción</th>
                                        <th>Serie Máquina</th>
                                        <th>Tipo de Máquina</th>
                                        <th>Modulo</th>
                                        <th>Stock</th>
                                        <th> Medidas o caractetisticas</th>
                                        <th>Medida de la máquina</th>
                                        <th>Linea</th>
                                        <th>Tipo Consumibles</th>
                                        <th>Fecha de última venta</th>
                                    <!--  <th>Precio de compra</th>
                                      <th>Valor en almacen </th>-->
<<<<<<< HEAD
                                       <th>PRECIO 1 </th>
                                        <th>PRECIO 2 </th>
                                        <th>PRECIO 3  </th>
                                        <th>Fecha actualizacion precio </th>
=======
                                     <th>th  PRECIO 1  </th>
                                        <th>PRECIO 2 (25%) </th>
                                        <th>PRECIO 3 (35%) </th>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                        <th>Tiempo de fabricacion (Días)</th>
                                        <th>Indice ABC </th>
                                        <!-- <th>Min </th>
                                         <th>Max </th>
                                          <th>Cantidad sugeridad a solicitar</th>
                                         <th>Cond</th>
                                         <th>Proveedor principal</th>
                                         <th>Proveedor secundario</th>-->
                                        <th>Ubicación</th>



                                        <?php
                                    }
<<<<<<< HEAD
                                    ?> 
                                    
                                    </tr>
                            </tfoot> 

=======
                                    ?>






                                </tr>
                            </tfoot>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        </table>
                    </div>
                </div>
                <!-- /.ox-body -->
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


<!-- remove brand modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="removeModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Eliminar Producto</h4>
            </div>

            <form role="form" action="<?php echo base_url('products/remove') ?>" method="post" id="removeForm">
                <div class="modal-body">
                    <p>¿Realmente deseas eliminar?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Eliminar</button>
                </div>
            </form>


        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->














<!--
<div class="modal fade" tabindex="-1" role="dialog" id="editModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Editar</h4>
      </div>
      <form role="form" action="<?php echo base_url('products/updateStock') ?>" method="post" id="updateForm">
        <div class="modal-body">
          <div id="messages"></div>
          <div class="form-group">
            <label for="edit_product_name">Nombre</label>
            <input type="text" class="form-control" id="edit_product_name" name="edit_product_name" placeholder="Escribe un nombre de almacen" autocomplete="off">
          </div>
          
          
         <div class="form-group">
            <label for="edit_product_name">Nombre</label>
            <input type="text" class="form-control" id="edit_qty" name="edit_qty" placeholder="Escribe un nombre de almacen" autocomplete="off">
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
  </form>
</div>  
  </div>
</div>
-->


<script type="text/javascript">


<<<<<<< HEAD
 // Setup - add a text input to each footer cell
=======

    // Setup - add a text input to each footer cell
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
    $('#manageTable tfoot th').each(function() {
        var title = $(this).text();
        //$(this).html('<input type="text" placeholder="Buscar ' + title + '" />');
        $(this).html('<input type="text" placeholder="Buscar" />')
    });
    var manageTable;
<<<<<<< HEAD
            var base_url = "<?php echo base_url(); ?>";
            
            
            
            /*$(document).ready(function() {

    $("#mainProductNav").addClass('active');
            // initialize the datatable 
            manageTable = $('#manageTable').DataTable({
    'ajax': base_url + 'products/fetchProductData',
            'order': []
    });
    });*/
    
    
    
    
       $(document).ready(function() {
=======
    var base_url = "<?php echo base_url(); ?>";
    $(document).ready(function() {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606




        $("#mainProductNav").addClass('active');
        // initialize the datatable 

        manageTable = $('#manageTable').DataTable({
            'ajax': base_url + 'products/fetchProductData',
            'order': [],
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
<<<<<<< HEAD
            },
            
            
            
            
            
            
            
             dom: 'Bfrtip',
=======
            }
            ,
            dom: 'Bfrtip',
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            buttons: [
                //'copy', 'csv', 'excel', 'pdf', 'print'
                 'excel'
            ],
            
            
            
            
            
            
            
            
            
<<<<<<< HEAD
=======
            
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            "initComplete": function() {
                this.api().columns().every(function() {
                    var that = this;

                    $('input', this.footer()).on('keyup change', function() {
                        if (that.search() !== this.value) {
                            that
                                    .search(this.value)
                                    .draw();
                        }
                    });
                })
            }

        });





    });
<<<<<<< HEAD
            // remove functions 
                    function removeFunc(id) {
                    if (id) {
                    $("#removeForm").on('submit', function() {

                    var form = $(this);
                            // remove the text-danger
                            $(".text-danger").remove();
                            $.ajax({
                            url: form.attr('action'),
                                    type: form.attr('method'),
                                    data: {
                                    product_id: id
                                    },
                                    dataType: 'json',
                                    success: function(response) {

                                    manageTable.ajax.reload(null, false);
                                            if (response.success === true) {
                                    $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">' +
                                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                                            '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>' + response.messages +
                                            '</div>');
                                            // hide the modal
                                            $("#removeModal").modal('hide');
                                    } else {

                                    $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">' +
                                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                                            '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>' + response.messages +
                                            '</div>');
                                    }
                                    }
                            });
                            return false;
                    });
                    }
                    }
=======
    // remove functions 
    function removeFunc(id) {
        if (id) {
            $("#removeForm").on('submit', function() {

                var form = $(this);
                // remove the text-danger
                $(".text-danger").remove();
                $.ajax({
                    url: form.attr('action'),
                    type: form.attr('method'),
                    data: {
                        product_id: id
                    },
                    dataType: 'json',
                    success: function(response) {

                        manageTable.ajax.reload(null, false);
                        if (response.success === true) {
                            $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">' +
                                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                                    '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>' + response.messages +
                                    '</div>');
                            // hide the modal
                            $("#removeModal").modal('hide');
                        } else {

                            $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">' +
                                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                                    '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>' + response.messages +
                                    '</div>');
                        }
                    }
                });
                return false;
            });
        }
    }
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
</script>







<script type="text/javascript">
<<<<<<< HEAD
            // submit the create from 
            $("#createForm").unbind('submit').on('submit', function() {
            var form = $(this);
                    // remove the text-danger
                    $(".text-danger").remove();
                    $.ajax({
                    url: form.attr('action'),
                            type: form.attr('method'),
                            data: form.serialize(), // /converting the form data into array and sending it to server
                            dataType: 'json',
                            success: function(response) {

                            manageTable.ajax.reload(null, false);
                                    if (response.success === true) {
                            $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">' +
                                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                                    '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>' + response.messages +
                                    '</div>');
                                    // hide the modal
                                    $("#addModal").modal('hide');
                                    // reset the form
                                    $("#createForm")[0].reset();
                                    $("#createForm .form-group").removeClass('has-error').removeClass('has-success');
                            } else {

                            if (response.messages instanceof Object) {
                            $.each(response.messages, function(index, value) {
                            var id = $("#" + index);
                                    id.closest('.form-group')
                                    .removeClass('has-error')
                                    .removeClass('has-success')
                                    .addClass(value.length > 0 ? 'has-error' : 'has-success');
                                    id.after(value);
                            });
                            } else {
                            $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">' +
                                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                                    '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>' + response.messages +
                                    '</div>');
                            }
                            }
                            }
                    });
                    return false;
            });
            });
            // edit function
                    function editFuncProducts(id) {
                    $.ajax({
                    url: 'fetchStoresDataById/' + id,
=======
    // submit the create from 
    $("#createForm").unbind('submit').on('submit', function() {
        var form = $(this);
        // remove the text-danger
        $(".text-danger").remove();
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: form.serialize(), // /converting the form data into array and sending it to server
            dataType: 'json',
            success: function(response) {

                manageTable.ajax.reload(null, false);
                if (response.success === true) {
                    $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">' +
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                            '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>' + response.messages +
                            '</div>');
                    // hide the modal
                    $("#addModal").modal('hide');
                    // reset the form
                    $("#createForm")[0].reset();
                    $("#createForm .form-group").removeClass('has-error').removeClass('has-success');
                } else {

                    if (response.messages instanceof Object) {
                        $.each(response.messages, function(index, value) {
                            var id = $("#" + index);
                            id.closest('.form-group')
                                    .removeClass('has-error')
                                    .removeClass('has-success')
                                    .addClass(value.length > 0 ? 'has-error' : 'has-success');
                            id.after(value);
                        });
                    } else {
                        $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">' +
                                '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                                '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>' + response.messages +
                                '</div>');
                    }
                }
            }
        });
        return false;
    });
    });
            // edit function
                    function editFuncProducts(id) {
                        $.ajax({
                            url: 'fetchStoresDataById/' + id,
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            type: 'post',
                            dataType: 'json',
                            success: function(response) {

<<<<<<< HEAD
                            $("#edit_product_name").val(response.name);
                                    $("#edit_qty").val(response.qty);
                                    // submit the edit from 
                                    $("#updateForm").unbind('submit').bind('submit', function() {
                            var form = $(this);
                                    // remove the text-danger
                                    $(".text-danger").remove();
                                    $.ajax({
                                    url: form.attr('action') + '/' + id,
                                            type: form.attr('method'),
                                            data: form.serialize(), // /converting the form data into array and sending it to server
                                            dataType: 'json',
                                            success: function(response) {

                                            manageTable.ajax.reload(null, false);
                                                    if (response.success === true) {
                                            $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">' +
                                                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                                                    '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>' + response.messages +
                                                    '</div>');
                                                    // hide the modal
                                                    $("#editModal").modal('hide');
                                                    // reset the form 
                                                    $("#updateForm .form-group").removeClass('has-error').removeClass('has-success');
                                            } else {

                                            if (response.messages instanceof Object) {
                                            $.each(response.messages, function(index, value) {
                                            var id = $("#" + index);
                                                    id.closest('.form-group')
                                                    .removeClass('has-error')
                                                    .removeClass('has-success')
                                                    .addClass(value.length > 0 ? 'has-error' : 'has-success');
                                                    id.after(value);
                                            });
                                            } else {
                                            $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">' +
                                                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                                                    '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>' + response.messages +
                                                    '</div>');
                                            }
                                            }
                                            }
                                    });
                                    return false;
                            });
                            }
                    });
=======
                                $("#edit_product_name").val(response.name);
                                $("#edit_qty").val(response.qty);
                                // submit the edit from 
                                $("#updateForm").unbind('submit').bind('submit', function() {
                                    var form = $(this);
                                    // remove the text-danger
                                    $(".text-danger").remove();
                                    $.ajax({
                                        url: form.attr('action') + '/' + id,
                                        type: form.attr('method'),
                                        data: form.serialize(), // /converting the form data into array and sending it to server
                                        dataType: 'json',
                                        success: function(response) {

                                            manageTable.ajax.reload(null, false);
                                            if (response.success === true) {
                                                $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">' +
                                                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                                                        '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>' + response.messages +
                                                        '</div>');
                                                // hide the modal
                                                $("#editModal").modal('hide');
                                                // reset the form 
                                                $("#updateForm .form-group").removeClass('has-error').removeClass('has-success');
                                            } else {

                                                if (response.messages instanceof Object) {
                                                    $.each(response.messages, function(index, value) {
                                                        var id = $("#" + index);
                                                        id.closest('.form-group')
                                                                .removeClass('has-error')
                                                                .removeClass('has-success')
                                                                .addClass(value.length > 0 ? 'has-error' : 'has-success');
                                                        id.after(value);
                                                    });
                                                } else {
                                                    $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">' +
                                                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                                                            '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>' + response.messages +
                                                            '</div>');
                                                }
                                            }
                                        }
                                    });
                                    return false;
                                });
                            }
                        });
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    }

            // remove functions 
            function removeFunc(id) {
<<<<<<< HEAD
            if (id) {
            $("#removeForm").on('submit', function() {

            var form = $(this);
                    // remove the text-danger
                    $(".text-danger").remove();
                    $.ajax({
                    url: form.attr('action'),
                            type: form.attr('method'),
                            data: {
                            store_id: id
=======
                if (id) {
                    $("#removeForm").on('submit', function() {

                        var form = $(this);
                        // remove the text-danger
                        $(".text-danger").remove();
                        $.ajax({
                            url: form.attr('action'),
                            type: form.attr('method'),
                            data: {
                                store_id: id
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            },
                            dataType: 'json',
                            success: function(response) {

<<<<<<< HEAD
                            manageTable.ajax.reload(null, false);
                                    if (response.success === true) {
                            $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">' +
                                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                                    '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>' + response.messages +
                                    '</div>');
                                    // hide the modal
                                    $("#removeModal").modal('hide');
                            } else {

                            $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">' +
                                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                                    '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>' + response.messages +
                                    '</div>');
                            }
                            }
                    });
                    return false;
            });
            }
=======
                                manageTable.ajax.reload(null, false);
                                if (response.success === true) {
                                    $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">' +
                                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                                            '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>' + response.messages +
                                            '</div>');
                                    // hide the modal
                                    $("#removeModal").modal('hide');
                                } else {

                                    $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">' +
                                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                                            '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>' + response.messages +
                                            '</div>');
                                }
                            }
                        });
                        return false;
                    });
                }
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            }
</script>