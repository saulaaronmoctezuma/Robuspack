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

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Administrar
            <small>Cubierta</small>
        </h1>
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


                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Editar</h3>
                    </div>
                    <!-- /.box-header -->
                    <form role="form" action="<?php base_url('users/update') ?>" method="post" enctype="multipart/form-data">
                        <div class="box-body">

                            <?php echo validation_errors(); ?>

                            <!--  <div class="form-group">
                                <label>Imagen Previa</label>
                                <img src="<?php echo base_url() . $product_data['image'] ?>" width="150" height="150" class="img-circle">
                            </div>

                            <div class="form-group">
                                <label for="product_image">Actualizar Imagen</label>
                                <div class="kv-avatar">
                                    <div class="file-loading">
                                        <input id="product_image" name="product_image" type="file">
                                    </div>
                                </div>
                            </div>-->

                            <input type="hidden" class="form-control input-sm" id="product_image" name="product_image">

                            <div class="form-group">
                                <label for="sku">Sku</label>
                                <input type="text" class="form-control" id="sku" name="sku" placeholderr="Enter sku" value="<?php echo $product_data['sku']; ?>" autocomplete="off" />
                            </div>

                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <input type="text" class="form-control" id="description1" name="description" placeholderr="description" value="<?php echo $product_data['description']; ?>" autocomplete="off" />
                            </div>



                            <input type="hidden" class="form-control" id="traduccion" name="traduccion" placeholderr="traduccion" value="<?php echo $product_data['traduccion']; ?>" autocomplete="off" />



                            <input type="hidden" class="form-control" id="serie_maquina" name="serie_maquina" placeholderr="serie_maquina" value="<?php echo $product_data['serie_maquina']; ?>" autocomplete="off" />


                            <div class="form-group">
                                <label for="medida_maquina">Medida de Máquina</label>
                                <input type="text" class="form-control" id="medida_maquina" name="medida_maquina" placeholderr="medida_maquina" value="<?php echo $product_data['medida_maquina']; ?>" autocomplete="off" />
                            </div>



                            <input type="hidden" class="form-control" id="modulo" name="modulo" placeholderr="modulo" value="<?php echo $product_data['modulo']; ?>" autocomplete="off" />
                            <input type="hidden" class="form-control" id="tipo_maquina" name="tipo_maquina" placeholderr="tipo de máquina" value="<?php echo $product_data['tipo_maquina']; ?>" autocomplete="off" />
                            <input type="hidden" class="form-control" id="medidas_caracteristicas" name="medidas_caracteristicas" placeholderr="medidas caracteristicas" value="<?php echo $product_data['medidas_caracteristicas']; ?>" autocomplete="off" />


                            <div class="form-group">
                                <label for="linea">Linea</label>
                                <input type="text" class="form-control" id="linea" name="linea" placeholderr="Linea" value="<?php echo $product_data['linea']; ?>" autocomplete="off" />
                            </div>

                            <input type="hidden" class="form-control" id="refacciones_consumibles" name="refacciones_consumibles" placeholderr="Refacciones / Consumibles" value="<?php echo $product_data['refacciones_consumibles']; ?>" autocomplete="off" />


                            <div class="form-group">
                                <label for="tiempo_surtido">Tiempo Surtido</label>
                                <input type="text" class="form-control" id="tiempo_surtido" name="tiempo_surtido" placeholderr="Tiempo Surtido" value="<?php echo $product_data['tiempo_surtido']; ?>" autocomplete="off" />
                            </div>

                            <div class="form-group">
                                <label for="fecha_ultima_venta">Fecha Ultima Venta</label>
                                <input type="date" class="form-control" id="fecha_ultima_venta" name="fecha_ultima_venta" placeholderr="Fecha Ultima Venta" value="<?php echo $product_data['fecha_ultima_venta']; ?>" autocomplete="off" />
                            </div>


                            <div class="form-group">
                                <label for="dias_ultima_venta">Dias Última Venta</label>
                                <input type="text" class="form-control" id="dias_ultima_venta" name="dias_ultima_venta" placeholderr="Días ultima venta" value="<?php echo $product_data['dias_ultima_venta']; ?>" autocomplete="off" />
                            </div>

                            <div class="form-group">
                                <label for="qty">Stock</label>
                                <input type="text" class="form-control" readonly id="qty" name="qty" placeholderr="Escribe la cantidad" value="<?php echo $product_data['qty']; ?>" autocomplete="off" />
                            </div>
                            
                            
                            <!--<input type="hidden" class="form-control" id="price" name="price" placeholderr="Escribe el precio 1" value="<?php echo $product_data['price']; ?>" autocomplete="off" />
                            -->
                            
                            
                            <div class="form-group">
                                <label for="price2">Precio Venta 1 </label>
                                <input type="text" class="form-control" id="price" name="price" onclick="fechaValidaActualizacionPrecio()" onkeyup="fechaValidaActualizacionPrecio()" placeholderr="Escribe el precio 1"  value="<?php echo $product_data['price']; ?>" autocomplete="off" />
                            </div>
                            
                            
                            

                            <div class="form-group">
                                <label for="price2">Precio Venta 2 </label>
                                <input type="text" class="form-control" id="price2" name="price2" onclick="fechaValidaActualizacionPrecio()" onkeyup="fechaValidaActualizacionPrecio()" placeholderr="Escribe el precio 2"  value="<?php echo $product_data['price2']; ?>" autocomplete="off" />
                            </div>


                            <div class="form-group">
                                <label for="price2">Precio Venta 3</label>
                                <input type="text" class="form-control" id="price3" name="price3" onclick="fechaValidaActualizacionPrecio()" onkeyup="fechaValidaActualizacionPrecio()" placeholderr="Escribe el precio 3"  value="<?php echo $product_data['price3']; ?>" autocomplete="off" />
                            </div>

                            <div class="form-group">
                                <label for="price2">Precio Venta 4 </label>
                                <input type="text" class="form-control" id="price4" name="price4" onclick="fechaValidaActualizacionPrecio()" onkeyup="fechaValidaActualizacionPrecio()" placeholderr="Escribe el precio 4"  value="<?php echo $product_data['price4']; ?>" autocomplete="off" />
                            </div>
                            
                                                        <div class="form-group">
                                <label for="price2">Precio Venta 5 </label>
                                <input type="text" class="form-control" id="price5" name="price5" onclick="fechaValidaActualizacionPrecio()" onkeyup="fechaValidaActualizacionPrecio()" placeholderr="Escribe el precio 5"  value="<?php echo $product_data['price5']; ?>" autocomplete="off" />
                            </div>
                             <div class="form-group">
                                <label for="fecha_actualizacion_precio">Fecha Actualizacion Precio </label>
                                <input type="date" class="form-control" id="fecha_actualizacion_precio" name="fecha_actualizacion_precio" placeholderr="Escribe el precio 5" value="<?php echo $product_data['fecha_actualizacion_precio']; ?>" autocomplete="off" />
                            </div>
                            


                            <div class="form-group">
                                <label for="min">Cantidad Mínima</label>
                                <input type="text" class="form-control" id="min" name="min" value="<?php echo $product_data['min']; ?>" autocomplete="off" />
                            </div>

                            <div class="form-group">
                                <label for="max">Cantidad Máxima</label>
                                <input type="text" class="form-control" id="max" name="max" value="<?php echo $product_data['max']; ?>" autocomplete="off" />
                            </div>



                            <div class="form-group">
                                <label for="location">Ubicación</label>
                                <input type="text" class="form-control" id="location" name="location" placeholderr="Ubicacion" value="<?php echo $product_data['location']; ?>" autocomplete="off" />
                            </div>


                            <!--<div class="form-group">
                              <label for="area">Area</label>
                              <input type="text" class="form-control" id="area" name="area" placeholder="Area" value="<?php echo $product_data['area']; ?>" autocomplete="off" />
                            </div>-->


                            <div class="form-group">
                                <label for="Corrugados">Área</label>



                                <SELECT name="area" id="tipo_entrega" class="form-control input-sm">
                                    <optgroup label="Selecciona una opción">


                                        <option value="" <?php
                                        if ($product_data['area'] == " ") {
                                            echo "Selected";
                                        }
                                        ?>>Selecciona una opción</option>
                                        <option value="Conversión" <?php
                                        if ($product_data['area'] == "Conversión") {
                                            echo "Selected";
                                        }
                                        ?>>Conversión</option>
                                        <option value="Corrugados" <?php
                                        if ($product_data['area'] == "Corrugados") {
                                            echo "Selected";
                                        }
                                        ?>>Corrugados</option>
                                    </optgroup>
                                </SELECT>

                            </div>


                            <!--<div class="form-group">
                              <label for="description">Descripción</label>
                              <textarea type="text" class="form-control" id="description" name="description" placeholder="Enter 
                              description" autocomplete="off">
                            <?php echo $product_data['description']; ?>
                              </textarea>
                            </div>-->





                            <?php $attribute_id = json_decode($product_data['attribute_value_id']); ?>
                            <?php if ($attributes) : ?>
                                <?php foreach ($attributes as $k => $v) : ?>
                                    <div class="form-group">
                                        <label for="groups"><?php echo $v['attribute_data']['name'] ?></label>
                                        <select class="form-control select_group" id="attributes_value_id" name="attributes_value_id[]" multiple="multiple">
                                            <?php foreach ($v['attribute_value'] as $k2 => $v2) : ?>
                                                <option value="<?php echo $v2['id'] ?>" <?php
                                                if (in_array($v2['id'], $attribute_id)) {
                                                    echo "selected";
                                                }
                                                ?>><?php echo $v2['value'] ?></option>
                                                    <?php endforeach ?>
                                        </select>
                                    </div>
                                <?php endforeach ?>
                            <?php endif; ?>

                            <!-- <div class="form-group">
                               <label for="brands">Etiquetas</label>
                            <?php $brand_data = json_decode($product_data['brand_id']); ?>
                               <select class="form-control select_group" id="brands" name="brands[]" multiple="multiple">
                            <?php foreach ($brands as $k => $v) : ?>
                                                                   <option value="<?php echo $v['id'] ?>" <?php
                                if (in_array($v['id'], $brand_data)) {
                                    echo 'selected="selected"';
                                }
                                ?>><?php echo $v['name'] ?></option>
                            <?php endforeach ?>
                               </select>
                             </div>-->

                            <!--<div class="form-group">
                              <label for="category">Categorias</label>
                            <?php $category_data = json_decode($product_data['category_id']); ?>
                              <select class="form-control select_group" id="category" name="category[]" multiple="multiple">
                            <?php foreach ($category as $k => $v) : ?>
                                                                  <option value="<?php echo $v['id'] ?>" <?php
                                if (in_array($v['id'], $category_data)) {
                                    echo 'selected="selected"';
                                }
                                ?>><?php echo $v['name'] ?></option>
                            <?php endforeach ?>
                              </select>
                            </div>-->

                            <!-- no borrar<div class="form-group">
                                <label for="store">Almacén</label>
                                <select class="form-control select_group" id="store" name="store">
                            <?php foreach ($stores as $k => $v) : ?>
                                            <option value="<?php echo $v['id'] ?>" <?php
                                if ($product_data['store_id'] == $v['id']) {
                                    echo "selected='selected'";
                                }
                                ?>><?php echo $v['name'] ?></option>
                            <?php endforeach ?>
                                </select>
                            </div>-->


                            <input type="hidden" class="form-control input-sm" id="store" name="store" value="<?php echo $product_data['store_id']; ?>">


                            <!--<div class="form-group">
                              <label for="store">Disponibilidad</label>
                              <select class="form-control" id="availability" name="availability">
                                <option value="1" <?php
                            if ($product_data['availability'] == 1) {
                                echo "selected='selected'";
                            }
                            ?>>Si</option>
                                <option value="2" <?php
                            if ($product_data['availability'] != 1) {
                                echo "selected='selected'";
                            }
                            ?>>No</option>
                              </select>
                            </div>-->

                            <input type="hidden" class="form-control input-sm" id="availability" name="availability" value="<?php echo $product_data['availability']; ?>">




                            <!--<label for="product_name">Precio Costo</label>-->
                            <input type="hidden" class="form-control" id="product_name" name="product_name" placeholderr="Escribe el precio del costo" value="<?php echo $product_data['name']; ?>" autocomplete="off" />
                            


                            <div class="form-group">
                                <label for="circunferencia">Circunferencia</label>
                                <input type="text" class="form-control"  id="circunferencia" name="circunferencia" value="<?php echo $product_data['circunferencia']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="ancho">Ancho</label>
                                <input type="text" class="form-control"  id="ancho" name="ancho" value="<?php echo $product_data['ancho']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="espesor">Espesor</label>
                                <input type="text" class="form-control" id="espesor" name="espesor" value="<?php echo $product_data['espesor']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="cue">Cue</label>
                                <input type="text" class="form-control"  id="cue" name="cue" value="<?php echo $product_data['cue']; ?>">
                            </div>   

                            <div class="form-group">
                                <label for="dicar">Dicar</label>
                                <input type="text" class="form-control" id="dicar" name="dicar" value="<?php echo $product_data['dicar']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="proveedor_principal">Proveedor Principal</label>
                                <input type="text" class="form-control" id="proveedor_principal" name="proveedor_principal" placeholderr="proveedor_principal" value="<?php echo $product_data['proveedor_principal']; ?>" autocomplete="off" />
                            </div>


                            <div class="form-group">
                                <label for="proveedor_secundario">Proveedor Secundario</label>
                                <input type="text"  class="form-control" id="proveedor_secundario" name="proveedor_secundario" placeholderr="proveedor_secundario" value="<?php echo $product_data['proveedor_secundario']; ?>" autocomplete="off" />
                            </div>


                            <input type="hidden" class="form-control input-sm" id="precio_de_compra" name="precio_de_compra" value="<?php echo $product_data['precio_de_compra']; ?>">
                            <input type="hidden" class="form-control input-sm" id="valor_almacen" name="valor_almacen" value="<?php echo $product_data['valor_almacen']; ?>">
                            <input type="hidden" class="form-control input-sm" id="indice_abc" name="indice_abc" value="<?php echo $product_data['indice_abc']; ?>">
                            <input type="hidden" class="form-control input-sm" id="cantidad_sugerida_a_solicitar" name="cantidad_sugerida_a_solicitar" value="<?php echo $product_data['cantidad_sugerida_a_solicitar']; ?>">
                            <input type="hidden" class="form-control input-sm" id="condicion" name="condicion" value="<?php echo $product_data['condicion']; ?>">




                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <!-- <a href="<?php echo base_url('users/') ?>" class="btn btn-warning"></a>-->
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
        $("#manageProductNav").addClass('active');

        var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' +
                'onclick="alert(\'Call your custom code here.\')">' +
                '<i class="glyphicon glyphicon-tag"></i>' +
                '</button>';
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
            layoutTemplates: {
                main2: '{preview} ' + btnCust + ' {remove} {browse}'
            },
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