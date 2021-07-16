<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Cubierta
            <small></small>
        </h1>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Cubierta</li>
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





                <!-- Para traerse el rol que esta registrado-->
                <?php
                //check user level
                $dataLevel = $this->userlevel->checkLevel($role);


                //check user level
                ?>
                <style>
                    #div1 {
                        overflow:scroll;
                        height:100%;
                        width:100%;
                    }               
                </style>


                <?php
                if ($dataLevel == 'is_admin') {
                    ?>
                    <a href="<?php echo base_url('cubierta/create') ?>" class="btn btn-primary">Agregar Cubierta</a>
                    <a href="<?php echo base_url('products/agregar') ?>" class="btn btn-foursquare">Actualizar Inventario</a>
                    <?php
                } else if (($dataLevel == 'is_editor')) {
                    ?>
                    <a href="<?php echo base_url('cubierta/create') ?>" class="btn btn-primary">Agregar Cubierta</a>
                    <a href="<?php echo base_url('products/agregar') ?>" class="btn btn-foursquare">Actualizar Inventario</a>
                    <?php
                }
                ?>
                <br /> <br />

        <!--<button type="button" class="btn btn-default" onclick="editFuncProducts(4)" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i>ejemplo</button>
                -->
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Administrar</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div id="div1">
                            <table id="manageTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr bgcolor="#0D9ECB">



                                        <?php
                                        if ($dataLevel == 'is_admin') {
                                            ?>

                                            <th>SKU</th>
                                            <th>Descripción</th>
                                           <!--<th>Línea</th>-->
                                            <th>Maquina</th>
                                            <th>Tiempo de surtido</th>
                                            <th>Fecha de última venta </th>
                                            <th>Stock</th>
                                            <th>Precio 1</th>
                                            <th>Precio 2</th>
                                            <th>Precio 3</th>
                                            <th>Precio 4</th>
                                            <th>Precio 5</th>
                                            <th>Circunferencia</th>
                                            <th>Id mm</th>
                                            <th>Ancho mm</th>
                                            <th>Espesor mm</th>
                                            <th>Equivalencias Cue</th>
                                            <th>Equivalencias Dicar</th>
                                            <th>Ubicación</th>
                                            <th>Acción</th>

                                            <?php
                                        } else if (($dataLevel == 'is_editor')) {
                                            ?>

                                            <th>SKU</th>
                                            <th>Descripción</th>
                                            <!--<th>Línea</th>-->
                                            <th>Maquina</th>
                                            <th>Tiempo de surtido</th>
                                            <th>Fecha de última venta </th>
                                            <th>Stock</th>
                                              <th>Precio 1</th>
                                            <th>Precio 2</th>
                                            <th>Precio 3</th>
                                            <th>Precio 4</th>
                                            <th>Precio 5</th>
                                            <th>Circunferencia</th>
                                            <th>Id mm</th>
                                            <th>Ancho mm</th>
                                            <th>Espesor mm</th>
                                            <th>Equivalencias Cue</th>
                                            <th>Equivalencias Dicar</th>
                                            <th>Ubicación</th>
                                            <th>Acción</th>

                                            <?php
                                        } else if (($dataLevel == 'is_almacen')) {
                                            ?>

                                            <th>SKU</th>
                                            <th>Descripción</th>
                                            <th>Ubicación</th>
<!--                                            <th>Línea</th>-->
                                            <th>Maquina</th>
                                            <th>Tiempo de surtido</th>
                                            <th>Fecha de última venta </th>
                                            <th>Stock</th>
                                            <th>Precio 2</th>
                                            <th>Precio 3</th>
                                            <th>Precio 4</th>
                                            <th>Precio 5</th>
                                            <th>Circunferencia</th>
                                            <th>Id mm</th>
                                            <th>Ancho mm</th>
                                            <th>Espesor mm</th>
                                            <th>Equivalencias Cue</th>
                                            <th>Equivalencias Dicar</th>


                                            <?php
                                        } else if (($dataLevel == 'is_refacciones')) {
                                            ?>

                                            <th>SKU</th>
                                            <th>Descripción</th>
                                            <th>Línea</th>
                                            <th>Maquina</th>
                                            <th>Tiempo de surtido</th>
                                            <th>Fecha de última venta </th>
                                            <th>Stock</th>
                                            <th>Precio 2</th>
                                            <th>Precio 3</th>
                                            <th>Precio 4</th>
                                            <th>Circunferencia</th>
                                            <th>Id mm</th>
                                            <th>Ancho mm</th>
                                            <th>Espesor mm</th>
                                            <th>Equivalencias Cue</th>
                                            <th>Equivalencias Dicar</th>
                                            <th>Ubicación</th>

                                            <?php
                                        } else if (($dataLevel == 'is_maquinaria')) {
                                            ?>

                                            <th>SKU</th>
                                            <th>Descripción</th>
                                            <th>Línea</th>
                                            <th>Maquina</th>
                                            <th>Tiempo de surtido</th>
                                            <th>Fecha de última venta </th>
                                            <th>Stock</th>
                                            <th>Precio 2</th>
                                            <th>Precio 3</th>
                                            <th>Precio 4</th>
                                            <th>Circunferencia</th>
                                            <th>Id mm</th>
                                            <th>Ancho mm</th>
                                            <th>Espesor mm</th>
                                            <th>Equivalencias Cue</th>
                                            <th>Equivalencias Dicar</th>
                                            <th>Ubicación</th>

                                            <?php
                                        } else if (($dataLevel == 'is_mantenimiento')) {
                                            ?>

                                            <th>SKU</th>
                                            <th>Descripción</th>
                                           <!-- <th>Línea</th>-->
                                            <th>Maquina</th>
                                            <th>Tiempo de surtido</th>
                                            <th>Fecha de última venta </th>
                                            <th>Stock</th>
                                            <th>Precio 2</th>
                                            <th>Precio 3</th>
                                            <th>Precio 4</th>
                                             <th>Precio 5</th>
                                            <th>Circunferencia</th>
                                            <th>Id mm</th>
                                            <th>Ancho mm</th>
                                            <th>Espesor mm</th>
                                            <th>Equivalencias Cue</th>
                                            <th>Equivalencias Dicar</th>
                                            <th>Ubicación</th>

                                            <?php
                                        } else if (($dataLevel == 'is_jefe_mantenimiento')) {
                                            ?>

                                            <th>SKU</th>
                                            <th>Descripción</th>
                                           
                                            <th>Maquina</th>
                                            <th>Tiempo de surtido</th>
                                            <th>Fecha de última venta </th>
                                            <th>Stock</th>
                                            <th>Precio 2</th>
                                            <th>Precio 3</th>
                                            <th>Precio 4</th>
                                              <th>Precio 5</th>
                                            <th>Circunferencia</th>
                                            <th>Id mm</th>
                                            <th>Ancho mm</th>
                                            <th>Espesor mm</th>
                                            <th>Equivalencias Cue</th>
                                            <th>Equivalencias Dicar</th>
                                            <th>Ubicación</th>

                                            <?php
                                        } else if (($dataLevel == 'is_servicio_a_clientes')) {
                                            ?>
                                            <th>SKU</th>
                                            <th>Descripción</th>
                                           <!-- <th>Línea</th>-->
                                            <th>Maquina</th>
                                            <th>Tiempo de surtido</th>
                                            <th>Fecha de última venta </th>
                                            <th>Stock</th>
                                            <th>Precio 2</th>
                                            <th>Precio 3</th>
                                            <th>Precio 4</th>
                                            <th>Precio 5</th>
                                            <th>Circunferencia</th>
                                            <th>Id mm</th>
                                            <th>Ancho mm</th>
                                            <th>Espesor mm</th>
                                            <th>Equivalencias Cue</th>
                                            <th>Equivalencias Dicar</th>
                                            <th>Ubicación</th>


                                            <?php
                                        } else if (($dataLevel == 'is_Gerente_Ventas')) {
                                            ?>

                                            <th>SKU</th>
                                            <th>Descripción</th>
                                           <!-- <th>Línea</th>-->
                                            <th>Maquina</th>
                                            <th>Tiempo de surtido</th>
                                            <th>Fecha de última venta </th>
                                            <th>Stock</th>
                                            <th>Precio 1/th>
                                            <th>Precio 2</th>
                                            <th>Precio 3</th>
                                            <th>Precio 4</th>
                                            <th>Precio 5</th>
                                            <th>Circunferencia</th>
                                            <th>Id mm</th>
                                            <th>Ancho mm</th>
                                            <th>Espesor mm</th>
                                            <th>Equivalencias Cue</th>
                                            <th>Equivalencias Dicar</th>
                                            <th>Ubicación</th>

                                            <?php
                                        }
                                        ?>
  <!--mostrar imagen<th>Imagen</th>-->

 <!--     <th>Disponibilidad</th>-->


                                    </tr>
                                </thead>

                                <tfoot>
                                    <tr>

                                        <?php
                                        if ($dataLevel == 'is_admin') {
                                            ?>

                                            <th>SKU</th>
                                            <th>Descripción</th>
                                            <!--<th>Línea</th>-->
                                            <th>Maquina</th>
                                            <th>Tiempo de surtido</th>
                                            <th>Fecha de última venta </th>
                                            <th>Stock</th>
                                            <th>Precio 1</th>
                                            <th>Precio 2</th>
                                            <th>Precio 3</th>
                                            <th>Precio 5</th>
                                            <th>Precio </th>
                                            <th>Circunferencia</th>
                                            <th>Id mm</th>
                                            <th>Ancho mm</th>
                                            <th>Espesor mm</th>
                                            <th>Equivalencias Cue</th>
                                            <th>Equivalencias Dicar</th>
                                            <th>Ubicación</th>
                                            <th>Acción</th>

                                            <?php
                                        } else if (($dataLevel == 'is_editor')) {
                                            ?>

                                            <th>SKU</th>
                                            <th>Descripción</th>
                                           <!-- <th>Línea</th>-->
                                            <th>Maquina</th>
                                            <th>Tiempo de surtido</th>
                                            <th>Fecha de última venta </th>
                                            <th>Stock</th>
                                                <th>Precio 1</th>
                                            <th>Precio 2</th>
                                            <th>Precio 3</th>
                                            <th>Precio 4</th>
                                            <th>Precio 5</th>
                                            <th>Circunferencia</th>
                                            <th>Id mm</th>
                                            <th>Ancho mm</th>
                                            <th>Espesor mm</th>
                                            <th>Equivalencias Cue</th>
                                            <th>Equivalencias Dicar</th>
                                            <th>Ubicación</th>
                                            <th>Acción</th>

                                            <?php
                                        } else if (($dataLevel == 'is_almacen')) {
                                            ?>

                                            <th>SKU</th>
                                            <th>Descripción</th>
                                            <th>Ubicación</th>
<!--                                            <th>Línea</th>
                                            <th>Maquina</th>-->
                                            <th>Tiempo de surtido</th>
                                            <th>Fecha de última venta </th>
                                            <th>Stock</th>
                                             <th>Precio 2</th>
                                            <th>Precio 3</th>
                                            <th>Precio 4</th>
                                            <th>Precio 5</th>
                                            <th>Circunferencia</th>
                                            <th>Id mm</th>
                                            <th>Ancho mm</th>
                                            <th>Espesor mm</th>
                                            <th>Equivalencias Cue</th>
                                            <th>Equivalencias Dicar</th>


                                            <?php
                                        } else if (($dataLevel == 'is_refacciones')) {
                                            ?>

                                            <th>SKU</th>
                                            <th>Descripción</th>
                                            <th>Línea</th>
                                            <th>Maquina</th>
                                            <th>Tiempo de surtido</th>
                                            <th>Fecha de última venta </th>
                                            <th>Stock</th>
                                            <th>Precio 2</th>
                                            <th>Precio 3</th>
                                            <th>Precio 4</th>
                                            <th>Circunferencia</th>
                                            <th>Id mm</th>
                                            <th>Ancho mm</th>
                                            <th>Espesor mm</th>
                                            <th>Equivalencias Cue</th>
                                            <th>Equivalencias Dicar</th>
                                            <th>Ubicación</th>

                                            <?php
                                        } else if (($dataLevel == 'is_maquinaria')) {
                                            ?>

                                            <th>SKU</th>
                                            <th>Descripción</th>
                                            <th>Línea</th>
                                            <th>Maquina</th>
                                            <th>Tiempo de surtido</th>
                                            <th>Fecha de última venta </th>
                                            <th>Stock</th>
                                            <th>Precio 2</th>
                                            <th>Precio 3</th>
                                            <th>Precio 4</th>
                                            <th>Circunferencia</th>
                                            <th>Id mm</th>
                                            <th>Ancho mm</th>
                                            <th>Espesor mm</th>
                                            <th>Equivalencias Cue</th>
                                            <th>Equivalencias Dicar</th>
                                            <th>Ubicación</th>

                                            <?php
                                        } else if (($dataLevel == 'is_mantenimiento')) {
                                            ?>

                                            <th>SKU</th>
                                            <th>Descripción</th>
                                          <!-- <th>Línea</th>-->
                                            <th>Maquina</th>
                                            <th>Tiempo de surtido</th>
                                            <th>Fecha de última venta </th>
                                            <th>Stock</th>
                                          <th>Precio 2</th>
                                            <th>Precio 3</th>
                                            <th>Precio 4</th>
                                             <th>Precio 5</th>
                                            <th>Circunferencia</th>
                                            <th>Id mm</th>
                                            <th>Ancho mm</th>
                                            <th>Espesor mm</th>
                                            <th>Equivalencias Cue</th>
                                            <th>Equivalencias Dicar</th>
                                            <th>Ubicación</th>

                                            <?php
                                        } else if (($dataLevel == 'is_jefe_mantenimiento')) {
                                            ?>

                                            <th>SKU</th>
                                            <th>Descripción</th>
                                           
                                            <th>Maquina</th>
                                            <th>Tiempo de surtido</th>
                                            <th>Fecha de última venta </th>
                                            <th>Stock</th>
                                           <th>Precio 2</th>
                                            <th>Precio 3</th>
                                            <th>Precio 4</th>
                                             <th>Precio 5</th>
                                            <th>Circunferencia</th>
                                            <th>Id mm</th>
                                            <th>Ancho mm</th>
                                            <th>Espesor mm</th>
                                            <th>Equivalencias Cue</th>
                                            <th>Equivalencias Dicar</th>
                                            <th>Ubicación</th>

                                            <?php
                                        } else if (($dataLevel == 'is_servicio_a_clientes')) {
                                            ?>
                                            <th>SKU</th>
                                            <th>Descripción</th>
                                           <!-- <th>Línea</th>-->
                                            <th>Maquina</th>
                                            <th>Tiempo de surtido</th>
                                            <th>Fecha de última venta </th>
                                            <th>Stock</th>
                                            <th>Precio 2</th>
                                            <th>Precio 3</th>
                                            <th>Precio 4</th>
                                             <th>Precio 5</th>
                                            <th>Circunferencia</th>
                                            <th>Id mm</th>
                                            <th>Ancho mm</th>
                                            <th>Espesor mm</th>
                                            <th>Equivalencias Cue</th>
                                            <th>Equivalencias Dicar</th>
                                            <th>Ubicación</th>


                                            <?php
                                        } else if (($dataLevel == 'is_Gerente_Ventas')) {
                                            ?>

                                            <th>SKU</th>
                                            <th>Descripción</th>
                                           <!-- <th>Línea</th>-->
                                            <th>Maquina</th>
                                            <th>Tiempo de surtido</th>
                                            <th>Fecha de última venta </th>
                                            <th>Stock</th>
                                            <th>Precio 1</th>
                                            <th>Precio 2</th>
                                            <th>Precio 3</th>
                                            <th>Precio 4</th>
                                            <th>Precio 5</th>
                                        
                                            <th>Circunferencia</th>
                                            <th>Id mm</th>
                                            <th>Ancho mm</th>
                                            <th>Espesor mm</th>
                                            <th>Equivalencias Cue</th>
                                            <th>Equivalencias Dicar</th>
                                            <th>Ubicación</th>

                                            <?php
                                        }
                                        ?>  

                                    </tr>


                                </tfoot>

                            </table>
                        </div>
                    </div>
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


<!-- remove brand modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="removeModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Eliminar Cubierta</h4>
            </div>

            <form role="form" action="<?php echo base_url('cubierta/remove') ?>" method="post" id="removeForm">
                <div class="modal-body">
                    <p>¿Realmente deseas eliminar?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
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

    // para hacer filtros en tfoot
    $('#manageTable tfoot th').each(function() {
        var title = $(this).text();
        //$(this).html('<input type="text" placeholder="Buscar ' + title + '" />');
        $(this).html('<input type="text" placeholder="Buscar" />')
    });

    // para hacer filtros en tfoot
    var manageTable;
    var base_url = "<?php echo base_url(); ?>";
    $(document).ready(function() {

        $("#mainProductNav").addClass('active');
        // initialize the datatable 
        manageTable = $('#manageTable').DataTable({
            'ajax': base_url + 'cubierta/fetchProductData',
            'order': []
            ,
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
            },
            // para hacer filtros en tfoot
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
                });
            } // para hacer filtros en tfoot

        });





    });
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
</script>







<script type="text/javascript">
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
                            type: 'post',
                            dataType: 'json',
                            success: function(response) {

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
                    }

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
                                store_id: id
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
</script>