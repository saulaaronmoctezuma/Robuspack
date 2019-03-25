<!--
 * @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 16/11/2018 Hora 2:34 pm
 * Sistema de Control Robuspack
 */-->
<php>
    <html lang="es-mx">
        <title>Robuspack</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">

        <link rel="icon" href="<?= base_url('assets/images/robuspack_icon.png') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">      

        <?php
        defined('BASEPATH') OR exit('No direct script access allowed');

        $result = $this->User_model->getAllSettings();
        $theme = $result->theme;
        ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $theme; ?>">
        <link rel="stylesheet" href="<?php echo base_url() . 'public/css/main.css' ?>">       

        <div id="maquinaria">
            <form action="<?= base_url('BitacoraMtto/bitacoraMttoModificar') ?>" method="post" align="center" onsubmit="return vali()">
                <h1>Actualizar datos</h1>
                <MARQUEE SCROLLDELAY =200></MARQUEE>
                <div class="container" >
                    <table class="table table-bordered table-striped">
                        <tbody>


                        <input class="form-control"type="hidden" name="id_bitacora" value="<?= $id_bitacora ?>">
                        </tr>
                        <tr>
                            
                            <!--<td colspan="3" ><input id="a1" class="form-control" type="text" name="planta" value="<?= $planta ?>"></td>
                            
                            -->
                            
                            
                              <td>Cliente</td>
                        <td colspan="3">  <select id="a3" class="form-control" name="planta"   <?php echo form_dropdown('clienteCombo', $clienteCombo, $planta, '#', 'id="clienteCombo"'); ?> </select></td>
                        
                        </tr> 


                        <tr>
                            <td>Modelo</td>
                            <td colspan="3"><input id="a2" class="form-control" type="text" name="modelo" value="<?= $modelo ?>"></td>
                        </tr>
                        <tr>
                            <td>Maquina</td>
                            <td colspan="3"><input id="a2" class="form-control" type="text" name="maquina" value="<?= $maquina ?>"></td>
                        </tr>

                        <tr>
                            <td>Fecha</td>
                            <td colspan="3" ><input id="a3" class="form-control" type="text" name="fecha"  value="<?= $fecha ?>" ></td>
                        </tr>
                        <tr>
                            <td>OC</td>
                            <td colspan="3" ><input id="a4" class="form-control" type="text" name="oc"  value="<?= $oc ?>"></td>
                        </tr>


<!--<tr>
    <td>Tipo</td>
    <td><input id="a4" class="form-control" type="text" name="tipo"  value="<?= $tipo ?>"></td>
</tr>-->





                        <tr>
                            <td>Tipo</td>

                            <td colspan="3"> 
                                <SELECT name="tipo" id="tipo" class="form-control input-sm"> 
                                    <optgroup label="Selecciona una opción">

                                        <option value="Intalación/Garantía" <?php
                                        if ($tipo == "Intalación/Garantía") {
                                            echo "Selected";
                                        }
                                        ?>>Intalación/Garantía</option>
                                        <option value="Servicio" <?php
                                        if ($tipo == "Servicio") {
                                            echo "Selected";
                                        }
                                        ?>>Servicio</option>
                                    </optgroup>
                                </SELECT>
                            </td>
                        </tr>













                        <tr>
                            <td>Mantenimiento</td>

                            <td colspan="3">
                                <SELECT name="mantenimiento" id="mantenimiento" class="form-control input-sm"> 
                                    <optgroup label="Selecciona una opción">

                                        <option value="Correctivo" <?php
                                        if ($mantenimiento == "Correctivo") {
                                            echo "Selected";
                                        }
                                        ?>>Correctivo</option>
                                        <option value="Preventivo" <?php
                                        if ($mantenimiento == "Preventivo") {
                                            echo "Selected";
                                        }
                                        ?>>Preventivo</option>


                                        <option value="Predictivo" <?php
                                        if ($mantenimiento == "Predictivo") {
                                            echo "Selected";
                                        }
                                        ?>>Predictivo</option>

                                    </optgroup>
                                </SELECT>
                            </td>
                        </tr>









<!--<tr>
    <td>Mantenimiento</td>
    <td><input id="a4" class="form-control" type="text" name="mantenimiento"  value="<?= $mantenimiento ?>"></td>
</tr>-->
                        <input id="a4" class="form-control" type="hidden" name="reporto"  value="<?= $reporto ?>">

 <!--<tr>
     <td>Descripción de Actividades Efectuadas</td>
     <td><input id="a4" class="form-control" type="text" name="des_acti"  value="<?= $des_acti ?>"></td>
 </tr>-->





                        <tr>
                            <td>Descripción de Actividades Efectuadas</td>
                            <td colspan="3">
                                <textarea name="des_acti" class="form-control input-sm" style="resize:none;" rows="10" cols="80"><?= $des_acti ?></textarea>
                            </td>
                        </tr>

















                        <tr>
                            <td ROWSPAN=10>Refacciones Usadas </td>
                            <td><input id="a4" class="form-control" type="text" name="ref_usadas1"  value="<?= $ref_usadas1 ?>"></td>
                            <td><input id="a4" class="form-control" type="text" name="ref_usadas2"  value="<?= $ref_usadas2 ?>"></td>
                            <td><input id="a4" class="form-control" type="text" name="ref_usadas3"  value="<?= $ref_usadas3 ?>"></td>

                        </tr>

                </div>

                <tr>

                    <td><input id="a4" class="form-control" type="text" name="ref_usadas4"  value="<?= $ref_usadas4 ?>"></td>
                    <td><input id="a4" class="form-control" type="text" name="ref_usadas5"  value="<?= $ref_usadas5 ?>"></td>
                    <td><input id="a4" class="form-control" type="text" name="ref_usadas6"  value="<?= $ref_usadas6 ?>"></td>
                </tr>

                <tr>

                    <td><input id="a4" class="form-control" type="text" name="ref_usadas7"  value="<?= $ref_usadas7 ?>"></td>
                    <td><input id="a4" class="form-control" type="text" name="ref_usadas8"  value="<?= $ref_usadas8 ?>"></td>
                    <td><input id="a4" class="form-control" type="text" name="ref_usadas9"  value="<?= $ref_usadas9 ?>"></td>
                </tr>



                <tr>

                    <td><input id="a4" class="form-control" type="text" name="ref_usadas10"  value="<?= $ref_usadas10 ?>"></td>

                    <td><input id="a4" class="form-control" type="text" name="ref_usadas11"  value="<?= $ref_usadas11 ?>"></td>

                    <td><input id="a4" class="form-control" type="text" name="ref_usadas12"  value="<?= $ref_usadas12 ?>"></td>
                </tr>
                <tr>

                    <td><input id="a4" class="form-control" type="text" name="ref_usadas13"  value="<?= $ref_usadas13 ?>"></td>

                    <td><input id="a4" class="form-control" type="text" name="ref_usadas14"  value="<?= $ref_usadas14 ?>"></td>

                    <td><input id="a4" class="form-control" type="text" name="ref_usadas15"  value="<?= $ref_usadas15 ?>"></td>
                </tr>
                <tr>

                    <td><input id="a4" class="form-control" type="text" name="ref_usadas16"  value="<?= $ref_usadas16 ?>"></td>
                    <td><input id="a4" class="form-control" type="text" name="ref_usadas17"  value="<?= $ref_usadas17 ?>"></td>

                    <td><input id="a4" class="form-control" type="text" name="ref_usadas18"  value="<?= $ref_usadas18 ?>"></td>
                </tr>
                <tr>
                    
                    <td><input id="a4" class="form-control" type="text" name="ref_usadas19"  value="<?= $ref_usadas19 ?>"></td>
                    <td><input id="a4" class="form-control" type="text" name="ref_usadas20"  value="<?= $ref_usadas20 ?>"></td>

                    <td><input id="a4" class="form-control" type="text" name="ref_usadas21"  value="<?= $ref_usadas21 ?>"></td>
                </tr>
                <tr>
                   
                    <td><input id="a4" class="form-control" type="text" name="ref_usadas22"  value="<?= $ref_usadas22 ?>"></td>
                
                    <td><input id="a4" class="form-control" type="text" name="ref_usadas23"  value="<?= $ref_usadas23 ?>"></td>
                
                    <td><input id="a4" class="form-control" type="text" name="ref_usadas24"  value="<?= $ref_usadas24 ?>"></td>
                </tr>
                <tr>
                   
                    <td><input id="a4" class="form-control" type="text" name="ref_usadas25"  value="<?= $ref_usadas25 ?>"></td>
                
                    <td><input id="a4" class="form-control" type="text" name="ref_usadas26"  value="<?= $ref_usadas26 ?>"></td>
                
                    <td><input id="a4" class="form-control" type="text" name="ref_usadas27"  value="<?= $ref_usadas27 ?>"></td>
                </tr>
                <tr>
                    
                    <td><input id="a4" class="form-control" type="text" name="ref_usadas28"  value="<?= $ref_usadas28 ?>"></td>
                
                    <td><input id="a4" class="form-control" type="text" name="ref_usadas29"  value="<?= $ref_usadas29 ?>"></td>
                
                    <td><input id="a4" class="form-control" type="text" name="ref_usadas30"  value="<?= $ref_usadas30 ?>"></td>
                </tr>







                <tr>
                    <td ROWSPAN=10>Refacciones Recomendadas </td>
                    <td><input id="a4" class="form-control" type="text" name="ref_recomen1"  value="<?= $ref_recomen1 ?>"></td>
                
                    <td><input id="a4" class="form-control" type="text" name="ref_recomen2"  value="<?= $ref_recomen2 ?>"></td>
                
                    <td><input id="a4" class="form-control" type="text" name="ref_recomen3"  value="<?= $ref_recomen3 ?>"></td>
                </tr>
                <tr>
                    
                    <td><input id="a4" class="form-control" type="text" name="ref_recomen4"  value="<?= $ref_recomen4 ?>"></td>
               
                    <td><input id="a4" class="form-control" type="text" name="ref_recomen5"  value="<?= $ref_recomen5 ?>"></td>
                
                    <td><input id="a4" class="form-control" type="text" name="ref_recomen6"  value="<?= $ref_recomen6 ?>"></td>
                </tr>
                <tr>
                    
                    <td><input id="a4" class="form-control" type="text" name="ref_recomen7"  value="<?= $ref_recomen7 ?>"></td>
               
                    <td><input id="a4" class="form-control" type="text" name="ref_recomen8"  value="<?= $ref_recomen8 ?>"></td>
               
                    <td><input id="a4" class="form-control" type="text" name="ref_recomen9"  value="<?= $ref_recomen9 ?>"></td>
                </tr>
                <tr>
                    
                    <td><input id="a4" class="form-control" type="text" name="ref_recomen10"  value="<?= $ref_recomen10 ?>"></td>
                
                    <td><input id="a4" class="form-control" type="text" name="ref_recomen11"  value="<?= $ref_recomen11 ?>"></td>
                
                    <td><input id="a4" class="form-control" type="text" name="ref_recomen12"  value="<?= $ref_recomen12 ?>"></td>
                </tr>

                <tr>
                    
                    <td><input id="a4" class="form-control" type="text" name="ref_recomen13"  value="<?= $ref_recomen13 ?>"></td>
               
                    <td><input id="a4" class="form-control" type="text" name="ref_recomen14"  value="<?= $ref_recomen14 ?>"></td>
                
                    <td><input id="a4" class="form-control" type="text" name="ref_recomen15"  value="<?= $ref_recomen15 ?>"></td>
                </tr>
                <tr>
                   
                    <td><input id="a4" class="form-control" type="text" name="ref_recomen16"  value="<?= $ref_recomen16 ?>"></td>
                
                    <td><input id="a4" class="form-control" type="text" name="ref_recomen17"  value="<?= $ref_recomen17 ?>"></td>
               
                    <td><input id="a4" class="form-control" type="text" name="ref_recomen18"  value="<?= $ref_recomen18 ?>"></td>
                </tr>
                <tr>
                    
                    <td><input id="a4" class="form-control" type="text" name="ref_recomen19"  value="<?= $ref_recomen19 ?>"></td>
                
                    <td><input id="a4" class="form-control" type="text" name="ref_recomen20"  value="<?= $ref_recomen20 ?>"></td>
               
                    <td><input id="a4" class="form-control" type="text" name="ref_recomen21"  value="<?= $ref_recomen21 ?>"></td>
                </tr>
                <tr>
                 
                    <td><input id="a4" class="form-control" type="text" name="ref_recomen22"  value="<?= $ref_recomen22 ?>"></td>
                
                    <td><input id="a4" class="form-control" type="text" name="ref_recomen23"  value="<?= $ref_recomen23 ?>"></td>
               
                    <td><input id="a4" class="form-control" type="text" name="ref_recomen24"  value="<?= $ref_recomen24 ?>"></td>
                </tr>
                <tr>
                    
                    <td><input id="a4" class="form-control" type="text" name="ref_recomen25"  value="<?= $ref_recomen25 ?>"></td>
               
                
                    <td><input id="a4" class="form-control" type="text" name="ref_recomen26"  value="<?= $ref_recomen26 ?>"></td>
                
                   <td><input id="a4" class="form-control" type="text" name="ref_recomen27"  value="<?= $ref_recomen27 ?>"></td>
                </tr>
                <tr>
                   
                    <td><input id="a4" class="form-control" type="text" name="ref_recomen28"  value="<?= $ref_recomen28 ?>"></td>
                
                    <td><input id="a4" class="form-control" type="text" name="ref_recomen29"  value="<?= $ref_recomen29 ?>"></td>
                
                    <td><input id="a4" class="form-control" type="text" name="ref_recomen30"  value="<?= $ref_recomen30 ?>"></td>
                </tr>






















                <tr>
                    <td>Recomendaciones</td>
                    <td colspan="3">
                        <textarea name="recomendaciones" class="form-control input-sm" style="resize:none;" rows="8" cols="80"><?= $recomendaciones ?></textarea>
                    </td>
                </tr>





                <tr>
                    <td>Próxima Fecha de Intervención sugerida Robuspack</td>
                    <td colspan="3">
                        <textarea name="proxima_inter" class="form-control input-sm" style="resize:none;" rows="2" cols="80"><?= $proxima_inter ?></textarea>
                    </td>
                </tr>



                <tr>
                    <td>
                        <input  class="btn btn-success" title="Da clic para guardar los datos" type="submit" value="Guardar" >
                        <a title="Da clic para regresar al menú" href="../../BitacoraMtto" class="btn btn-warning">Cancelar</a>
                    </td>
                </tr>



  <!--<tr>
      <td colspan="2">
          <input class="form-control btn btn-success"  type="submit" value="Guardar" >
      </td>
  </tr>-->
                </tbody>
        </div>
        </table>
        </div>
        </form>
        <?php ?>




