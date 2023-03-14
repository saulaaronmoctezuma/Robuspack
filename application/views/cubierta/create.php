<script>
    
function fechaValidaActualizacionPrecio()
{
let fechaActual = new Date();
let dd = fechaActual.getDate()  ;
let mm = fechaActual.getMonth() + 1; //January is 0!
let yyyy = fechaActual.getFullYear();
if (dd < 10) {
  dd = '0' + dd
}
if (mm < 10) {
  mm = '0' + mm
}

fechaActual = yyyy + '-' + mm + '-' + dd;
console.log(fechaActual);

//let fecha_actualizacion_precio = document.getElementById("fecha_actualizacion_precio");

//fecha_actualizacion_precio.min = fechaActual;
//fecha_actualizacion_precio = fechaActual;
document.getElementById("fecha_actualizacion_precio").value = fechaActual;

}
</script>
>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Catálogo de productos  
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Refacciones</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12 col-xs-12">

                <div id="messages"></div>

                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php elseif ($this->session->flashdata('error')): ?>
                    <div class="alert alert-error alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                <?php endif; ?>


                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Agregar Cubierta</h3>
                    </div>
                    <!-- /.box-header -->
                    <form role="form" action="<?php base_url('users/create') ?>" method="post" enctype="multipart/form-data">
                        <div class="box-body">

                            <?php echo validation_errors(); ?>

                            <div class="row">


                                <!--
                                Este sirve para agregar la imagen
                                <div class="form-group col-xs-4">
          
                           <label for="product_image">Imagen</label>
                            <div class="kv-avatar">
                                <div class="file-loading">
                                    <input id="product_image" name="product_image" type="file">
                                </div>
                            </div>
                          </div>-->



                                <div class="form-group col-xs-6">
                                    <label for="sku">Sku</label>
                                    <input type="text" class="form-control"  required="required" id="sku" name="sku" placeholder="Escribe el SKU" autocomplete="off" />
                                </div>


                                <div class="form-group col-xs-6">
                                    <label for="description">Descripción</label>
                                    <input type="text" class="form-control" id="description1" name="description" placeholder="Escribe la descripción " autocomplete="off" />
                                </div>


                            </div><br>




                            <input type="hidden" value="No Aplica" class="form-control" id="traduccion" name="traduccion" placeholder="Escribe la traducción" autocomplete="off" />





                            <input type="hidden" value="No Aplica" class="form-control" id="serie_maquina" name="serie_maquina" placeholder="Escribe la serie de la máquina" autocomplete="off" />
                            <input type="hidden"  value="No Aplica" class="form-control" id="modulo" name="modulo" placeholder="Escribe el módulo" autocomplete="off" />



                            <input type="hidden" value="No Aplica" class="form-control" id="tipo_maquina" name="tipo_maquina" placeholder="Escribe el tipo de máquina" autocomplete="off" />






                            <div class="row">





                                <div class="form-group col-xs-6">
                                    <label for="medida_maquina">Medida de la máquina</label>
                                    <input type="text" class="form-control" id="medida_maquina" name="medida_maquina" placeholder="Escribe la medida de máquina" autocomplete="off" />
                                </div>

                                <div class="form-group col-xs-6">
                                    <label for="linea">Linea</label>
                                    <input type="text" class="form-control" id="linea" name="linea" VALUE="CUBIE" readonly placeholder="Escribe la linea" autocomplete="off" />

                                </div>
                            </div><br>
                            <div class="row">



                                <input type="hidden" value="No Aplica" class="form-control" id="refacciones_consumibles" name="refacciones_consumibles" placeholder="Escribe la refacciones_consumibles" autocomplete="off" />





                                <div class="form-group col-xs-6">
                                    <label for="tiempo_surtido">Tiempo Surtido</label>
                                    <input type="text" class="form-control" id="tiempo_surtido" name="tiempo_surtido" placeholder="Escribe la tiempo surtido" autocomplete="off" />

                                </div>
                                <div class="form-group col-xs-6">
                                    <label for="fecha_ultima_venta">Fecha Última Venta</label>
                                    <input type="date" class="form-control" id="fecha_ultima_venta" name="fecha_ultima_venta" placeholder="Escribe la fecha ultima venta" autocomplete="off" />
                                </div>

                            </div><br>


                            <div class="row">
                               

                                <div class="form-group col-xs-6">
                                    <label for="dias_ultima_venta">Días Última Venta</label>
                                    <input type="text" class="form-control" id="dias_ultima_venta" name="dias_ultima_venta" placeholder="Escribe la dias ultima venta" autocomplete="off" />
                                </div>
                                
                                
                                
<div class="form-group col-xs-6">
                                    <label for="qty">Existencias</label>
                                    <input type="text" class="form-control" id="qty" name="qty" value="0" placeholder="Escribe el Existencias" autocomplete="off" />
                                </div>
                            </div><br>




                            <div class="row">
                                



                                <input type="hidden" class="form-control" id="product_name" name="product_name" placeholder="Escribe el precio de compra" autocomplete="off"/>
                                <div class="form-group col-xs-6">
                                    <label for="price">Precio Venta 1</label>
                                    <input type="text" class="form-control" id="price" onclick="fechaValidaActualizacionPrecio()" onkeyup="fechaValidaActualizacionPrecio()" name="price" placeholder="Escribe el Precio de Venta"  autocomplete="off" />
                                </div>

 <div class="form-group col-xs-6">
                                    <label for="price2">Precio Venta 2</label>
                                    <input type="text" class="form-control" id="price2" onclick="fechaValidaActualizacionPrecio()" onkeyup="fechaValidaActualizacionPrecio()" name="price2" placeholder="Escribe el Precio de Venta 2"  autocomplete="off" />
                                </div>


                            </div>

                            <br>  
                            <div class="row">


                               

                                <div class="form-group col-xs-6">
                                    <label for="price3">Precio Venta 3</label>
                                    <input type="text" class="form-control" id="price3" onclick="fechaValidaActualizacionPrecio()" onkeyup="fechaValidaActualizacionPrecio()" name="price3" placeholder="Escribe el Precio de Venta 3"  autocomplete="off" />
                                </div>

                                <div class="form-group col-xs-6">
                                    <label for="price4">Precio Venta 4</label>
                                    <input type="text" class="form-control" id="price3" onclick="fechaValidaActualizacionPrecio()" onkeyup="fechaValidaActualizacionPrecio()" name="price4" placeholder="Escribe el Precio de Venta 4"  autocomplete="off" />
                                </div>
                                
                               
                                
                                <input type="hidden" class="form-control" id="price5" name="price5" placeholder="Escribe el Precio de Venta 4"  autocomplete="off" />

                            </div>

                            <br>
                            <div class="row">



 <div class="form-group col-xs-4">
                                    <label for="price2">Fecha Actualizacion precio</label>
                                    <input type="date" class="form-control" id="fecha_actualizacion_precio" onkeyup="fechaValidaActualizacionPrecio()" onclick="fechaValidaActualizacionPrecio()" name="fecha_actualizacion_precio" placeholder="Escribe el Precio de Venta 4" autocomplete="off" />
                                </div>

                               

                                <div class="form-group col-xs-4">
                                    <label for="min">Cantidad Mínima</label>
                                    <input type="text" class="form-control" id="min" name="min" placeholder="Escribe la cantidad mínima" autocomplete="off" />
                                </div>
            
              <div class="form-group col-xs-4">
                                    <label for="max">Cantidad Máxima</label>
                                    <input type="text" class="form-control" id="max" name="max" placeholder="Escribe la cantidad máxima" autocomplete="off" />
                                </div>



                            </div>


                            <br>   
                            <div class="row">


                                <!--
                                el id sirve para mostrar y opermita diseño      
                                <div class="form-group">
                                      <label for="">Descripción</label>
                                      <textarea type="text" class="form-control" id="description" name="Escribe la descripción" placeholder="Escribe la descripción" autocomplete="off">
                                      </textarea>
                                    </div>-->


                              



                                <div class="form-group col-xs-6">
                                    <label for="location">Ubicación</label>
                                    <input type="text" class="form-control" id="location" name="location" placeholder="Escribe la ubicación" autocomplete="off" />
                                </div>

    <div class="form-group col-xs-6"> <label for="area">Área</label>

                                    <select name="area" id="area" class="form-control input-sm" require>
                                        <option  value="">Selecciona una opción</option>
                                        <OPTION VALUE="Conversión">Conversión</OPTION>
                                        <OPTION VALUE="Corrugados">Corrugados</OPTION>

                                    </select>
                                </div>


                            </div>

                            <!--<div class="form-group">
                            <label for="area">Area</label>
                            <input type="text" class="form-control" id="area" name="area" placeholder="Escribe el area" autocomplete="off" />
                          </div>-->

                            <br>      
                            <div class="row"> 

                                
                                <div class="form-group col-xs-6">
                                    <label for="proveedor_principal">Proveedor Principal</label>
                                    <input type="text" class="form-control" id="proveedor_principal" name="proveedor_principal" placeholder="Escribe proveedor principal" autocomplete="off" />

                                </div> 
                                
                                
                                
                                   <div class="form-group col-xs-6">
                                    <label for="proveedor_secundario">Proveedor Secundario</label>
                                    <input type="text" class="form-control" id="proveedor_secundario" name="proveedor_secundario" placeholder="Escribe proveedor secundario" autocomplete="off" />
                                </div>

                                
                                
                                <!--NO BORRAR
                                <div class="form-group col-xs-6">
                                    <label for="store">Almacén</label>
                                    <select class="form-control select_group" id="store" name="store">
                                <?php foreach ($stores as $k => $v): ?>
                                                <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
                                <?php endforeach ?>
                                    </select>
                                </div>
                                -->

                                <input type="hidden" class="form-control" id="store" name="store" value="1"/>



                                <input type="hidden" value="No Aplica" class="form-control" id="medidas_caracteristicas" name="medidas_caracteristicas" placeholder="Escribe las medidas o caracteristicas" autocomplete="off" />



                                <!--
                                <?php /* if($attributes): */ ?>
                                <?php /* foreach ($attributes as $k => $v): */ ?>
                                                    <div class="form-group">
                                                      <label for="groups"><?php /* echo $v['attribute_data']['name'] */ ?></label>
                                                      <select class="form-control select_group" id="attributes_value_id" name="attributes_value_id[]" multiple="multiple">
                                <?php /* foreach ($v['attribute_value'] as $k2 => $v2): */ ?>
                                                          <option value="<?php /* echo $v2['id'] */ ?>"><?php /* echo $v2['value'] */ ?></option>
                                <?php /* endforeach */ ?>
                                                      </select>
                                                    </div>    
                                <?php /* endforeach */ ?>
                                <?php /* endif; */ ?>
                                
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

                            </div>
                            <!--<div class="form-group">
                              <label for="store">Disponibilidad</label>
                              <select class="form-control" id="availability" name="availability">
                                <option value="1">Si</option>
                                <option value="2">No</option>
                              </select>
                            </div>-->

                            <input type="hidden" class="form-control input-sm"  id="availability" name="availability" value="1">







                            <br>        

                            <div class="row"> 




                             
                                <div class="form-group col-xs-6">
                                    <label for="circunferencia">Circunferencia</label>
                                    <input type="text" class="form-control" id="circunferencia" name="circunferencia" placeholder="Escribe circunferencia" autocomplete="off" />
                                </div>
                                
                                
                                 <div class="form-group col-xs-6">
                                    <label for="medidas_id">ID</label>
                                    <input type="text" class="form-control" id="medidas_id" name="medidas_id" placeholder="Escribe el id" autocomplete="off" />
                                </div>


                            </div><br>

                            <div class="row"> 



                               
                                <div class="form-group col-xs-6">
                                    <label for="ancho">Ancho</label>
                                    <input type="text" class="form-control" id="ancho" name="ancho" placeholder="Escribe ancho" autocomplete="off" />
                                </div>
                                
                                <div class="form-group col-xs-6">
                                    <label for="espesoro">Espesor</label>
                                    <input type="text" class="form-control" id="espesor" name="espesor" placeholder="Escribe espesor" autocomplete="off" />
                                </div>

                            </div><br>

                            <div class="row"> 



                                

                                <div class="form-group col-xs-6">
                                    <label for="cue">Cue</label>
                                    <input type="text" class="form-control" id="cue" name="cue" placeholder="Escribe cue" autocomplete="off" />
                                </div>
                                
                                
                                <div class="form-group col-xs-6">
                                    <label for="dicar">Dicar</label>
                                    <input type="text" class="form-control" id="dicar" name="dicar" placeholder="Escribe dicar" autocomplete="off" />
                                </div>

                            </div><br>
                            <div class="row"> 



                                
                            </div>
                            <input type="hidden" value="No Aplica" class="form-control" id="tipo_maquina" name="precio_de_compra" autocomplete="off" />
                            <input type="hidden" value="No Aplica" class="form-control" id="tipo_maquina" name="valor_almacen" autocomplete="off" />
                            <input type="hidden" value="No Aplica" class="form-control" id="tipo_maquina" name="indice_abc" autocomplete="off" />
                            <input type="hidden" value="No Aplica" class="form-control" id="tipo_maquina" name="cantidad_sugerida_a_solicitar" autocomplete="off" />
                            <input type="hidden" value="No Aplica" class="form-control" id="tipo_maquina" name="condicion" autocomplete="off" />







                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" id="botonOrden" class="btn btn-primary">Guardar</button>
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
            layoutTemplates: {main2: '{preview} ' + btnCust + ' {remove} {browse}'},
            allowedFileExtensions: ["jpg", "png", "gif"]
        });

    });



    $(document).ready(function() {
        $("form").keypress(function(e) {
            if (e.which == 13) {
                return false;
            }
        });
    });
</script>