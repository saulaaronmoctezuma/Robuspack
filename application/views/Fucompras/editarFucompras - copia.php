<!--
/**

 * class @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 02/09/2019 Hora 11:14 am
 *  Fecha : Ultimo Cambio 12/09/2019 Hora 9:00 am
 */-->
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Robuspack</title>

        <!-- Bootstrap -->

       
        <?php
        //check user level
        $dataLevel = $this->userlevel->checkLevel($role);


        //check user level
        ?>
    </head>
    
    
        <script language=javascript type=text/javascript>
         
       
        
   

        
        </script> 

    <body>
        <div id="maquinaria">
            <form action="<?= base_url() ?>Fucompras/updatedata" method="post" enctype="multipart/form-data">

                <MARQUEE SCROLLDELAY =200></MARQUEE>
                <div class="container" ><h1>Actualizar datos</h1>
                    <table class="table table-bordered table-striped">
                        <tbody>



<!-- <tr>

    <td><b>Cliente</b></td>
   <td colspan="3">  <select id="a3" class="form-control" name="cliente"   <?php echo form_dropdown('clienteCombo', $clienteCombo, $data->cliente, '#', 'id="clienteCombo"'); ?> </select></td>


</tr> -->


                            <tr>
                                <td><b>Ref</b></td>
                                <td>
                                    <input id="ref" class="form-control" type="text" name="ref" value="<?= $data->ref ?>">
                               </td>
                            </tr>


                            <tr>
                                <td><b>Estatus</b></td>
                                <td >
                                    <input id="estatus" class="form-control" type="text" name="estatus" value="<?= $data->estatus ?>">
                              </td>
                            </tr>


                            <tr>
                                <td><b>compania_importadora</b></td>
                                <td >
                                   <input id="compania_importadora" class="form-control" type="text" name="compania_importadora" value="<?= $data->compania_importadora ?>">
                                  
                                </td>
                            </tr>

                            
                            <tr>
                                <td><b>cliente_proveedor</b></td>
                                <td >
                                   <input id="cliente_proveedor" class="form-control" type="text" name="cliente_proveedor" value="<?= $data->cliente_proveedor ?>">
                                  
                                </td>
                            </tr>

                           <tr>
                                <td><b>awb</b></td>
                                <td >
                                   <input id="awb" class="form-control" type="text" name="awb" value="<?= $data->awb ?>">
                                  
                                </td>
                            </tr>
                            
                            
                             <!-- 
                              <tr>
                         <td><b>awb</b></td>
                        <td> <SELECT name="tipo_de_prod" class="form-control " > 
                            
                                 <option value="" <?php if ($data->tipo_de_prod == "") {echo "Selected"; } ?>>Selecciona una opción</option>
                                
                                <option value="REFACCION" <?php if ($data->tipo_de_prod == "REFACCION") {echo "Selected"; } ?>>REFACCION</option>
                                <option value="CUBIERTA" <?php if ($data->tipo_de_prod == "CUBIERTA") {  echo "Selected";} ?>>CUBIERTA</option>
                               
                          
                           </SELECT></td>
                    </tr>
                            -->
                              <tr>
                                <td><b>courier</b></td>
                                <td >
                                   <input id="rfc" class="form-control" type="text" name="courier" value="<?= $data->courier ?>">
                                  
                                </td>
                            </tr>
                            
                            <tr>
                                <td><b>clave</b></td>
                                <td >
                                   <input id="factura" class="form-control" type="text" name="clave" value="<?= $data->clave ?>">
                                  
                                </td>
                            </tr>
                            
                             
                   
                            
                           
                            
                            
                             <tr>
                                <td><b>tipo_de_prod</b></td>
                                <td >
                                   <input id="tipo_de_prod" class="form-control" type="text" name="tipo_de_prod" value="<?= $data->tipo_de_prod ?>">
                                  
                                </td>
                            </tr>
                            
                            
                             <tr>
                                <td><b>descripcion</b></td>
                                <td >
                                   <input id="descripcion" class="form-control" type="text" name="descripcion" value="<?= $data->descripcion ?>">
                                  
                                </td>
                            </tr>
                            
                            
                            <tr>
                                <td><b>factura</b></td>
                                <td >
                                   <input id="factura" class="form-control" type="text" name="factura" value="<?= $data->factura ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>imn</b></td>
                                <td >
                                   <input id="imn" class="form-control" type="text" name="imn" value="<?= $data->imn ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>ocv</b></td>
                                <td >
                                   <input id="ocv" class="form-control" type="text" name="ocv" value="<?= $data->ocv ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>qty</b></td>
                                <td >
                                   <input id="qty" class="form-control" type="text" name="qty" value="<?= $data->qty ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>pu_usd</b></td>
                                <td >
                                   <input id="pu_usd" class="form-control" type="text" name="pu_usd" value="<?= $data->pu_usd ?>">
                                  
                                </td>
                            </tr>
                            
                              <tr>
                                <td><b>total_usd</b></td>
                                <td >
                                   <input id="total_usd" class="form-control" type="text" name="total_usd" value="<?= $data->total_usd ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>tipo_de_embarque</b></td>
                                <td >
                                   <input id="tipo_de_embarque" class="form-control" type="text" name="tipo_de_embarque" value="<?= $data->tipo_de_embarque ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>tc_pedimento</b></td>
                                <td >
                                   <input id="tc_pedimento" class="form-control" type="text" name="tc_pedimento" value="<?= $data->tc_pedimento ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>importacion_por_partida_pz_mxn</b></td>
                                <td >
                                   <input id="importacion_por_partida_pz_mxn" class="form-control" type="text" name="importacion_por_partida_pz_mxn" value="<?= $data->importacion_por_partida_pz_mxn ?>">
                                  
                                </td>
                            </tr>
                            
                            
                            

                              <tr>
                                <td><b>importacion_por_partida_pz_usd</b></td>
                                <td >
                                   <input id="importacion_por_partida_pz_usd" class="form-control" type="text" name="importacion_por_partida_pz_usd" value="<?= $data->importacion_por_partida_pz_usd ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>impx_unidad</b></td>
                                <td >
                                   <input id="impx_unidad" class="form-control" type="text" name="impx_unidad" value="<?= $data->impx_unidad ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>costo_total_compra_usd_lab_qro</b></td>
                                <td >
                                   <input id="costo_total_compra_usd_lab_qro" class="form-control" type="text" name="costo_total_compra_usd_lab_qro" value="<?= $data->costo_total_compra_usd_lab_qro ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>costo_unitario_compra_usd_lab_qro</b></td>
                                <td >
                                   <input id="costo_unitario_compra_usd_lab_qro" class="form-control" type="text" name="costo_unitario_compra_usd_lab_qro" value="<?= $data->costo_unitario_compra_usd_lab_qro ?>">
                                  
                                </td>
                            </tr>
                            
                            
                            

                            
                              <tr>
                                <td><b>com</b></td>
                                <td >
                                   <input id="com" class="form-control" type="text" name="com" value="<?= $data->com ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>cm</b></td>
                                <td >
                                   <input id="cm" class="form-control" type="text" name="cm" value="<?= $data->cm ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>cm_c</b></td>
                                <td >
                                   <input id="cm_c" class="form-control" type="text" name="cm_c" value="<?= $data->cm_c ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>ent</b></td>
                                <td >
                                   <input id="ent" class="form-control" type="text" name="ent" value="<?= $data->ent ?>">
                                  
                                </td>
                            </tr>
                            
                            
                            
  <tr>
                                <td><b>pedimento</b></td>
                                <td >
                                   <input id="pedimento" class="form-control" type="text" name="pedimento" value="<?= $data->pedimento ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>fecha_pedimento</b></td>
                                <td >
                                   <input id="fecha_pedimento" class="form-control" type="text" name="fecha_pedimento" value="<?= $data->fecha_pedimento ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>valor_aduana</b></td>
                                <td >
                                   <input id="valor_aduana" class="form-control" type="text" name="valor_aduana" value="<?= $data->valor_aduana ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>arancel_igi</b></td>
                                <td >
                                   <input id="arancel_igi" class="form-control" type="text" name="arancel_igi" value="<?= $data->arancel_igi ?>">
                                  
                                </td>
                            </tr>
                            
                            
                            
  <tr>
                                <td><b>arancel</b></td>
                                <td >
                                   <input id="arancel" class="form-control" type="text" name="arancel" value="<?= $data->arancel ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>dta</b></td>
                                <td >
                                   <input id="dta" class="form-control" type="text" name="dta" value="<?= $data->dta ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>iva_del_pedimento</b></td>
                                <td >
                                   <input id="iva_del_pedimento" class="form-control" type="text" name="iva_del_pedimento" value="<?= $data->iva_del_pedimento ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>costo_del_flete_mxn</b></td>
                                <td >
                                   <input id="costo_del_flete_mxn" class="form-control" type="text" name="costo_del_flete_mxn" value="<?= $data->costo_del_flete_mxn ?>">
                                  
                                </td>
                            </tr>
                            
                            
                            
  <tr>
                                <td><b>honorarios_courier</b></td>
                                <td >
                                   <input id="honorarios_courier" class="form-control" type="text" name="honorarios_courier" value="<?= $data->honorarios_courier ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>costo_del_flete_usd</b></td>
                                <td >
                                   <input id="costo_del_flete_usd" class="form-control" type="text" name="costo_del_flete_usd" value="<?= $data->costo_del_flete_usd ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>pv_extra_bajo_ref_x_pz</b></td>
                                <td >
                                   <input id="pv_extra_bajo_ref_x_pz" class="form-control" type="text" name="pv_extra_bajo_ref_x_pz" value="<?= $data->pv_extra_bajo_ref_x_pz ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>utilidad_refx_pz	</b></td>
                                <td >
                                   <input id="utilidad_refx_pz	" class="form-control" type="text" name="utilidad_refx_pz" value="<?= $data->utilidad_refx_pz?>">
                                  
                                </td>
                            </tr>
                            
                            
                            
  <tr>
                                <td><b>utilidad</b></td>
                                <td >
                                   <input id="utilidad" class="form-control" type="text" name="utilidad" value="<?= $data->utilidad ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>observaciones</b></td>
                                <td >
                                   <input id="observaciones" class="form-control" type="text" name="observaciones" value="<?= $data->observaciones ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>fecha_pi</b></td>
                                <td >
                                   <input id="fecha_pi" class="form-control" type="text" name="fecha_pi" value="<?= $data->fecha_pi ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>codigo_arancelario</b></td>
                                <td >
                                   <input id="codigo_arancelario" class="form-control" type="text" name="codigo_arancelario" value="<?= $data->codigo_arancelario ?>">
                                  
                                </td>
                            </tr>
                            
                           
                            
                             <?php
                            if (($data->factura_proveedor == null)) {
                                echo '    <tr>
                            <td><b>Factura <i style="font-size:18px;color:red" class="fa fa-file-pdf-o"></i></b></td>
                            <td><font color="red">No tienes ningún archivo cargado</font>
                            <input  id="archivo"  class="form-control" type="file"  name="factura_proveedor"></td>
                        </tr>';
                            } else if (($data->factura_proveedor != null)) {
                                echo '
                            <tr>
                            <td ><b>Factura <i style="font-size:18px;color:red" class="fa fa-file-pdf-o"></i></b></td>
                            <td>
                           <a  title="Da clic para visualizar el archivo" href="' . base_url() . 'assets/fucompras/' . $data->factura_proveedor . '" target=”_blank” rel=”nofollow”> <font color="green">Ya tienes un archivo cargado</font></a><br>
                           <br><input  id="archivo"  class="form-control" type="file"  name="factura_proveedor">
                           </td>
                        </tr>';
                            }
                            ?>
                            
                            
                            
                              
                             <?php
                            if (($data->pedimentopdf == null)) {
                                echo '    <tr>
                            <td><b>Pedimento <i style="font-size:18px;color:red" class="fa fa-file-pdf-o"></i></b></td>
                            <td><font color="red">No tienes ningún archivo cargado</font>
                            <input  id="archivo"  class="form-control" type="file"  name="pedimentopdf"></td>
                        </tr>';
                            } else if (($data->pedimentopdf != null)) {
                                echo '
                            <tr>
                            <td ><b>Pedimento <i style="font-size:18px;color:red" class="fa fa-file-pdf-o"></i></b></td>
                            <td>
                           <a  title="Da clic para visualizar el archivo" href="' . base_url() . 'assets/fucompras/' . $data->pedimentopdf . '" target=”_blank” rel=”nofollow”> <font color="green">Ya tienes un archivo cargado</font></a><br>
                           <br><input  id="archivo"  class="form-control" type="file"  name="pedimentopdf">
                           </td>
                        </tr>';
                            }
                            ?>
                            
                            
                            
                              
                             <?php
                            if (($data->honorarios_importacion == null)) {
                                echo '    <tr>
                            <td><b>Honorarios <i style="font-size:18px;color:red" class="fa fa-file-pdf-o"></i></b></td>
                            <td><font color="red">No tienes ningún archivo cargado</font>
                            <input  id="archivo"  class="form-control" type="file"  name="honorarios_importacion"></td>
                        </tr>';
                            } else if (($data->honorarios_importacion != null)) {
                                echo '
                            <tr>
                            <td ><b>Honorarios <i style="font-size:18px;color:red" class="fa fa-file-pdf-o"></i></b></td>
                            <td>
                           <a  title="Da clic para visualizar el archivo" href="' . base_url() . 'assets/fucompras/' . $data->honorarios_importacion . '" target=”_blank” rel=”nofollow”> <font color="green">Ya tienes un archivo cargado</font></a><br>
                           <br><input  id="archivo"  class="form-control" type="file"  name="honorarios_importacion">
                           </td>
                        </tr>';
                            }
                            ?>
                            

                            
                            
                            
                            

                            
                            <!--<input type="file" class="form-control input-sm" name="facturapdf"><br>-->
                            
                            
                            
                            
                            
                              
                   
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                                <td colspan="2">    <center> <input  class="btn btn-success" title="Da clic para guardar los datos" type="submit" value="Guardar" >
                            <a title="Da clic para regresar al menú" href="../../Fucompras" class="btn btn-warning">Cancelar</a></center>
                        </td>
                        </tr>



  <!--<tr>
      <td colspan="2">
          <input class="form-control btn btn-success"  type="submit" value="Guardar" >
      </td>
  </tr>-->
                        </tbody>


                    </table>
                </div>

                <!-- file lama -->
                <input type="hidden" name="id" value="<?= $data->id_fucompras ?>">
                <!-- ID -->
                <input type="hidden" name="id" value="<?= $data->id_fucompras ?>">

                   <!-- <input type="submit" name="submit" value="Enviar" class="btn btn-default">-->



            </form>

        </div>
    </div>
    <!-- END KONTEN UTAMA -->

  <!--  <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>-->
</body>
