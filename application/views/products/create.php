<script type="text/javascript">
$(document).ready(function() {
    $("form").keypress(function(e) {
        if (e.which == 13) {
            return false;
        }
    });
});
</script>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Administrar
      <small>Productos</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Productos</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12 col-xs-12">

        <div id="messages"></div>

        <?php if($this->session->flashdata('success')): ?>
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('success'); ?>
          </div>
        <?php elseif($this->session->flashdata('error')): ?>
          <div class="alert alert-error alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('error'); ?>
          </div>
        <?php endif; ?>


        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Agregar Productos</h3>
          </div>
          <!-- /.box-header -->
          <form role="form" action="<?php base_url('users/create') ?>" method="post" enctype="multipart/form-data">
              <div class="box-body">

                <?php echo validation_errors(); ?>

                <div class="form-group">

                 <label for="product_image">Imagen</label>
                  <div class="kv-avatar">
                      <div class="file-loading">
                          <input id="product_image" name="product_image" type="file">
                      </div>
                  </div>
                </div>
                  
                 <!--<div class="form-group">
                  <label for="bill_no">bill_no</label>
                  <input type="text" class="form-control" id="bill_no" name="bill_no" placeholder="Escribe el Numero de factura" autocomplete="off" />
                </div>-->
                  
                 <div class="form-group">
                  <label for="sku">Código del Producto</label>
                  <input type="text" class="form-control" id="sku" name="sku" placeholder="Escribe el SKU" autocomplete="off" />
                </div>
                  
                  
                  <div class="form-group">
                  <label for="description">Descripcion</label>
                  <input type="text" class="form-control" id="description1" name="description" placeholder="Escribe la descripción " autocomplete="off" />
                </div>
                  
                  
                <div class="form-group">
                  <label for="product_name">Precio Costo</label>
                  <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Escribe el Precio Costo" autocomplete="off"/>
                </div>

                           
                  
                <div class="form-group">
                  <label for="price">Precio Venta</label>
                  <input type="text" class="form-control" id="price" name="price" placeholder="Escribe el Precio de Venta" autocomplete="off" />
                </div>

                <div class="form-group">
                  <label for="qty">Cantidad Stock</label>
                  <input type="text" class="form-control" id="qty" name="qty" placeholder="Escribe el stock" autocomplete="off" />
                </div>

                <!--<div class="form-group">
                  <label for="">Descripción</label>
                  <textarea type="text" class="form-control" id="description" name="Escribe la descripción" placeholder="Escribe la descripción" autocomplete="off">
                  </textarea>
                </div>-->
                  
                  
                  
                  
                  
                    <div class="form-group">
                  <label for="location">Ubicacion</label>
                  <input type="text" class="form-control" id="location" name="location" placeholder="Escribe la ubicación" autocomplete="off" />
                </div>
<!--
                <?php /*if($attributes):*/ ?>
                  <?php /*foreach ($attributes as $k => $v):*/ ?>
                    <div class="form-group">
                      <label for="groups"><?php /*echo $v['attribute_data']['name']*/ ?></label>
                      <select class="form-control select_group" id="attributes_value_id" name="attributes_value_id[]" multiple="multiple">
                        <?php /*foreach ($v['attribute_value'] as $k2 => $v2):*/ ?>
                          <option value="<?php /*echo $v2['id']*/ ?>"><?php /*echo $v2['value']*/ ?></option>
                        <?php /*endforeach*/ ?>
                      </select>
                    </div>    
                  <?php /*endforeach*/ ?>
                <?php /*endif;*/ ?>

-->

            <!--    <div class="form-group">
                  <label for="brands">Eiquetas</label>
                  <select class="form-control select_group" id="brands" name="brands[]" multiple="multiple">
                    <?php foreach ($brands as $k => $v): ?>
                      <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
-->
               <!-- <div class="form-group">
                  <label for="category">Categoría</label>
                  <select class="form-control select_group" id="category" name="category[]" multiple="multiple">
                    <?php foreach ($category as $k => $v): ?>
                      <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
               -->
                <div class="form-group">
                  <label for="store">Almacen</label>
                  <select class="form-control select_group" id="store" name="store">
                    <?php foreach ($stores as $k => $v): ?>
                      <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>

                <!--<div class="form-group">
                  <label for="store">Disponibilidad</label>
                  <select class="form-control" id="availability" name="availability">
                    <option value="1">Si</option>
                    <option value="2">No</option>
                  </select>
                </div>-->
                
                 <input type="hidden" class="form-control input-sm"  id="availability" name="availability" value="1">

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
             <!--   <a href="<?php echo base_url('products/') ?>" class="btn btn-warning">Regresar</a>-->
                 <a class="btn btn-warning" href="javascript:history.back(1)">Regresar</a>
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
  $(document).ready(function() {
    $(".select_group").select2();
    $("#description").wysihtml5();

    $("#mainProductNav").addClass('active');
    $("#addProductNav").addClass('active');
    
    var btnCust = '<!--<button type="button" class="btn btn-secondary" title="Add picture tags" ' + 
        'onclick="alert(\'Call your custom code here.\')">' +
        '<i class="glyphicon glyphicon-tag"></i>' +
        '</button>-->'; 
    $("#product_image").fileinput({
        overwriteInitial: true,
        maxFileSize: 1500,
        showClose: false,
        showCaption: false,
        browseLabel: '',
        removeLabel: '',
        browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
        removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
        removeTitle: 'Cancel or reset changes',
        elErrorContainer: '#kv-avatar-errors-1',
        msgErrorClass: 'alert alert-block alert-danger',
        // defaultPreviewContent: '<img src="/uploads/default_avatar_male.jpg" alt="Your Avatar">',
        layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
        allowedFileExtensions: ["jpg", "png", "gif"]
    });

  });
</script>