<!--
 * @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 26/03/2019 Hora 10:15 pm
Fecha : Ultimo Cambio 03/0/2019 Hora 10:36 pm
Fecha : Ultimo Cambio 29/07/2019 Hora 10:07 am
Fecha : Ultimo Cambio 30/07/2019 Hora 10:07 am
Fecha : Ultimo Cambio 30/07/2019 Hora 10:07 am
 * Sistema de Control Robuspack
 */-->
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Robuspack</title>

        <!-- Bootstrap -->

        <!--<link rel="stylesheet" href="<?= base_url() ?>assets/font/glyphicons-halflings-regular.ttf-->
        <?php
        //check user level
        $dataLevel = $this->userlevel->checkLevel($role);


        //check user level
        ?>

        <!--<style>
            body {

                margin-left: 200px;
            }

        </style>-->
    </head>
    <body>

        <div class="container">
            <h1>Actualizar Placa</h1>




        </div>

        <!-- KONTEN UTAMA -->
        <div class="container">

            <div class="row">
                <form action="<?= base_url() ?>BitacoraMtto/updatedata" method="post" enctype="multipart/form-data">
             
                <div class="row">
                    <div class="form-group col-xs-3">
                        <label for="nombre">Cliente</label>
                          <select id="a3" class="form-control input-sm" name="planta"   <?php echo form_dropdown('clienteCombo', $clienteCombo, $data->planta, '#', 'id="clienteCombo"'); ?> </select>
                   </div>


                    <div class="form-group col-xs-3">
                        <div class="form-group">
                            <label for="maquina">Modelo </label>
                            <input id="a2" type="text" class="form-control input-sm"  name="modelo" value="<?= $data->modelo ?>" >
                        </div>
                    </div>

                    <div class="form-group col-xs-3">
                        <div class="form-group">
                            <label for="maquina"># Máquina </label>
                            <input id="a2" class="form-control input-sm" type="text" name="maquina" value="<?= $data->maquina ?>">
                        </div>
                    </div>

                    <div class="form-group col-xs-3">
                        <div class="form-group">
                            <label for="fecha">Fecha </label>
                            <input id="a3" type="text" class="form-control input-sm"  name="fecha" value="<?= $data->fecha ?>" >
                        </div>
                    </div>
                </div>
                
                
                
                <div class="row">
                <div class="form-group col-xs-12 ">

                    <label>Motivo de la asistencia por parte del Técnico</label>
                    <textarea name="motivo_asistencia" class="form-control input-sm"  rows="6" cols="60" style="resize:none;" placeholder="Ingresa el motivo de asistencia" required><?= $data->motivo_asistencia ?></textarea>
                </div>
            </div>

            <br>
            <div class="row">


                <div class="form-group col-xs-4">
                    <div class="form-group">
                        <label>Tipo de servicio</label>

                        <SELECT name="tipo" id="tipo" class="form-control input-sm"> 
                                <optgroup label="Selecciona una opción">

                                    <option value="Instalación" <?php
                                    if ($data->tipo == "Instalación") {
                                        echo "Selected";
                                    }
                                    ?>>Instalación</option>
                                    <option value="Garantía" <?php
                                    if ($data->tipo == "Garantía") {
                                        echo "Selected";
                                    }
                                    ?>>Garantía</option>

                                    <option value="Servicio" <?php
                                    if ($data->tipo == "Servicio") {
                                        echo "Selected";
                                    }
                                    ?>>Servicio</option>
                                </optgroup>
                            </SELECT>
                        
                    </div> 
                </div> 

                <div class="form-group col-xs-4">
                    <div class="form-group">
                        <label>Mantenimiento</label>

                        <SELECT name="mantenimiento" id="mantenimiento" class="form-control input-sm"> 
                                <optgroup label="Selecciona una opción">

                                    <option value="Correctivo" <?php
                                    if ($data->mantenimiento == "Correctivo") {
                                        echo "Selected";
                                    }
                                    ?>>Correctivo</option>
                                    <option value="Preventivo" <?php
                                    if ($data->mantenimiento == "Preventivo") {
                                        echo "Selected";
                                    }
                                    ?>>Preventivo</option>


                                    <option value="Predictivo" <?php
                                    if ($data->mantenimiento == "Predictivo") {
                                        echo "Selected";
                                    }
                                    ?>>Predictivo</option>

                                </optgroup>
                            </SELECT>
                    </div> 
                </div>  

                <div class="form-group col-xs-4">
                    <label>Consecutivo</label>

                    <input id="consecutivo" type="text" class="form-control input-sm"  name="consecutivo" value="<?= $data->consecutivo ?>" ><br>

                </div>
            </div> 

                
                
            
            
            
            
            
            
            
            
            
            
            <label for="nombre">Descripción de Actividades Efectuadas</label>

            <div class="row">

                <div class="form-group col-xs-6">
                    <textarea name="des_acti1" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 1" require><?= $data->des_acti1 ?></textarea>
                </div>

                <div class="form-group col-xs-6">

                    <textarea name="des_acti9" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 9" require><?= $data->des_acti9 ?></textarea>
                </div>
            </div>


            <div class="row">
                <div class="form-group col-xs-6">
                    <textarea name="des_acti2" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 2" require><?= $data->des_acti2 ?></textarea>
                </div>

                <div class="form-group col-xs-6">

                    <textarea name="des_acti10" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 10" require><?= $data->des_acti10 ?></textarea>
                </div>
            </div>

            <div class="row">

                <div class="form-group col-xs-6">
                    <textarea name="des_acti3" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 3" require><?= $data->des_acti3 ?></textarea>
                </div>

                <div class="form-group col-xs-6">

                    <textarea name="des_acti11" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 11" require><?= $data->des_acti11 ?></textarea>
                </div>
            </div>


            <div class="row">
                <div class="form-group col-xs-6">
                    <textarea name="des_acti4" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 4" require><?= $data->des_acti4 ?></textarea>
                </div>

                <div class="form-group col-xs-6">

                    <textarea name="des_acti12" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 12" require><?= $data->des_acti12 ?></textarea>
                </div>
            </div>

            <div class="row">

                <div class="form-group col-xs-6">
                    <textarea name="des_acti5" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 5" require><?= $data->des_acti5 ?></textarea>
                </div>

                <div class="form-group col-xs-6">

                    <textarea name="des_acti13" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 13" require><?= $data->des_acti13 ?></textarea>
                </div>
            </div>


            <div class="row">
                <div class="form-group col-xs-6">
                    <textarea name="des_acti6" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 6" require><?= $data->des_acti6 ?></textarea>
                </div>

                <div class="form-group col-xs-6">

                    <textarea name="des_acti14" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 14" require><?= $data->des_acti14 ?></textarea>
                </div>
            </div>
            <div class="row">

                <div class="form-group col-xs-6">
                    <textarea name="des_acti7" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 7"  require><?= $data->des_acti7 ?></textarea>
                </div>

                <div class="form-group col-xs-6">

                    <textarea name="des_acti15" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 15" require><?= $data->des_acti15 ?></textarea>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-6">
                    <textarea name="des_acti8" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 8" require><?= $data->des_acti8 ?></textarea>
                </div>
            </div>










            <label for="ref_recomen">Refacciones Usadas </label>

            <div class="row">
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas1" value="<?= $data->ref_usadas1 ?>" placeholder="1">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas9" value="<?= $data->ref_usadas9 ?>" placeholder="9" >
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas17" value="<?= $data->ref_usadas17 ?>" placeholder="17"  >
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas25" value="<?= $data->ref_usadas25 ?>" placeholder="25">
                </div>
            </div>


            <div class="row">
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas2" value="<?= $data->ref_usadas2 ?>" placeholder="2">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas10" value="<?= $data->ref_usadas10 ?> "placeholder="10">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas18" value="<?= $data->ref_usadas18 ?>" placeholder="18">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas26" value="<?=$data->ref_usadas26 ?>" placeholder="26">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas3" value="<?= $data->ref_usadas3 ?>" placeholder="3">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas11" value="<?= $data->ref_usadas11 ?>" placeholder="11">
                </div>



                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas19" value="<?= $data->ref_usadas19 ?>" placeholder="19">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas27" value="<?= $data->ref_usadas27 ?>" placeholder="27">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas4" value="<?= $data->ref_usadas4 ?>" placeholder="4">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas12" value="<?= $data->ref_usadas12 ?>" placeholder="12" >
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas20" value="<?= $data->ref_usadas20 ?>" placeholder="20">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas28" value="<?= $data->ref_usadas28 ?>" placeholder="28" >
                </div>
            </div>
            <div class="row">
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas5" value="<?= $data->ref_usadas5 ?>" placeholder="5" >
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas13" value="<?= $data->ref_usadas13 ?>" placeholder="13" >
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas21" value="<?= $data->ref_usadas21 ?>" placeholder="21" >
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas29" value="<?= $data->ref_usadas29 ?>" placeholder="29" >
                </div>
            </div>

            <div class="row">

                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas6" value="<?= $data->ref_usadas6 ?>" placeholder="6" >
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas14" value="<?= $data->ref_usadas14 ?>" placeholder="14" >
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas22" value="<?= $data->ref_usadas22 ?>" placeholder="22" >
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas30" value="<?= $data->ref_usadas30 ?>"placeholder="30" >
                </div>
            </div>
            <div class="row">
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas7"  value="<?= $data->ref_usadas7 ?>" placeholder="7">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas15" value="<?= $data->ref_usadas15 ?>" placeholder="15">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas23" value="<?= $data->ref_usadas23 ?>" placeholder="23">
                </div>

            </div>

            <div class="row">
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas8" value="<?= $data->ref_usadas8 ?>" placeholder="8">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas16" value="<?= $data->ref_usadas16 ?>" placeholder="16" >
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas24" placeholder="24" value="<?= $data->ref_usadas24 ?>" >
                </div>

            </div>




            <br>
            <label for="ref_recomen">Refacciones Recomendadas </label>

            <div class="row">

                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen1" placeholder="1" value="<?= $data->ref_recomen1 ?>" >
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen9" placeholder="9" value="<?= $data->ref_recomen9 ?>" >
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen17"  placeholder="17" value="<?= $data->ref_recomen17 ?>">
                </div>

                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen25" placeholder="25"  value="<?= $data->ref_recomen25 ?>">
                </div>
            </div> 



            <div class="row">

                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen2" placeholder="2" value="<?= $data->ref_recomen2 ?>">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen10" placeholder="10" value="<?= $data->ref_recomen10 ?>">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen18"  placeholder="18" value="<?= $data->ref_recomen18 ?>">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen26" placeholder="26" value="<?= $data->ref_recomen26 ?>">
                </div>

            </div> 

            <div class="row">

                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen3" placeholder="3" value="<?= $data->ref_recomen3 ?>">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen11" placeholder="11" value="<?= $data->ref_recomen11 ?>">
                </div>


                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen19" placeholder="19" value="<?= $data->ref_recomen19 ?>">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen27" placeholder="27" value="<?= $data->ref_recomen27 ?>">
                </div>

            </div>

            <div class="row">  
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen4" placeholder="4" value="<?= $data->ref_recomen4 ?>">
                </div>

                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen12" placeholder="12" value="<?= $data->ref_recomen12 ?>">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen20" placeholder="20" value="<?= $data->ref_recomen20 ?>">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen28" placeholder="28" value="<?= $data->ref_recomen28 ?>">
                </div>

            </div>


            <div class="row">     
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen5" placeholder="5" value="<?= $data->ref_recomen5 ?>">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen13" placeholder="13" value="<?= $data->ref_recomen13 ?>">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen21" placeholder="21" value="<?= $data->ref_recomen21 ?>">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen29" placeholder="29" value="<?= $data->ref_recomen29 ?>">
                </div>
            </div>


            <div class="row">


                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen6" placeholder="6" value="<?= $data->ref_recomen6 ?>">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen14" placeholder="14" value="<?= $data->ref_recomen14 ?>">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen22" placeholder="22" value="<?= $data->ref_recomen22 ?>">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen30" placeholder="30" value="<?= $data->ref_recomen30 ?>">
                </div>
            </div>



            <div class="row">

                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen7" placeholder="7" value="<?= $data->ref_recomen7 ?>">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen15" placeholder="15" value="<?= $data->ref_recomen15 ?>">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen23" placeholder="23" value="<?= $data->ref_recomen23 ?>">
                </div>

            </div>

            <div class="row">

                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen8" placeholder="8" value="<?= $data->ref_recomen8 ?>">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen16" placeholder="16" value="<?= $data->ref_recomen16 ?>">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen24" placeholder="24" value="<?= $data->ref_recomen24 ?>">
                </div>
            </div>
            <br>

            
            
            
            
            
            
               <?php
            if ($data->capacitacion != null) {
                ?>
                     <div class="row">
                <div class="form-group col-xs-12">

                    <label id="lbl_capacitacion">Capacitación</label>
                    <input id="capacitacion" type="text" class="form-control input-sm"  name="capacitacion" value="<?= $data->capacitacion ?>" placeholder="Capacitación" required>
                </div>
            </div>

            <br>
<?php
            } else {
                echo '';
            }
            ?>



            <?php
            if ($data->aceptacion_capacitacion != null) {
                ?> 
                <div class="row">
                <div class="form-group col-xs-12">

                    <label id="lbl_aceptacion_capacitacion">Aceptacion de la capacitación</label>
                    <input require id="aceptacion_capacitacion" type="text" class="form-control input-sm" value="<?= $data->aceptacion_capacitacion ?>"  name="aceptacion_capacitacion" placeholder="Ingresa nombre completo y puesto del trabajo">
                </div>
            </div>
  <?php
            } else {
                echo '';
            }
            ?>

            
            
            
            
            
            
            
            
            
            
           
            <!--aqui va la capacion-->
            
            
            <br>

            <!--aqui va la capacion-->
            <div class="row">
                <div class="form-group col-xs-12 ">

                    <label>Observaciones del Técnico</label>
                    <textarea name="recomendaciones" class="form-control input-sm"  rows="6" cols="60" style="resize:none;" placeholder="Ingresa una(s) observacion(es)" require><?=$data->recomendaciones  ?></textarea>
                </div>
            </div>

            
            
            <div class="form-group">
                <br>
                <label for="proxima_inter">Proxima Fecha de Intervención sugerida Robuspack </label>
                <input id="a4" type="text" class="form-control input-sm"  name="proxima_inter" value="<?= $data->proxima_inter ?>"  >
            </div>
            
              <div class="form-group">
                <br>
                <label for="foto">Foto </label>
              <!--  <input id="a4" type="file" class="form-control input-sm"  name="foto" >-->
                 <?php
                                    if (($data->foto == null)) {
                                        echo '<font color="red">No tienes ningún archivo cargado</font><br><br>'
                                        . '<input type="file" class="form-control input-sm" name="foto"><br>';
                                    } else if (($data->foto != null)) {
                                        echo '    
             <a  title="Da clic para visualizar el archivo" href="' . base_url() . 'assets/bitacora_mtto/' . $data->foto . '" target=”_blank” rel=”nofollow”><br> Ya tienes un archivo cargado</a><br>
                           </font><br><input  id="foto"  class="form-control" type="file"  name="foto">
                           ';
                                    }
                                    ?>
            </div>
            
            
            
            
            
        
            
            
            
            
            
            
            
            
            
            
            
                

            </div>
                       
                    


          


  <!--<tr>
      <td colspan="2">
          <input class="form-control btn btn-success"  type="submit" value="Guardar" >
      </td>
  </tr>-->
             


                    <!-- file lama -->
                    <input type="hidden" name="id" value="<?= $data->id_bitacora ?>">
                    <!-- ID -->
                    <input type="hidden" name="id" value="<?= $data->id_bitacora ?>">

                   <!-- <input type="submit" name="submit" value="Enviar" class="btn btn-default">-->


                    <input  class="btn btn-success" title="Da clic para guardar los datos" type="submit" value="Guardar" >
                    <a title="Da clic para regresar al menú" href="../../BitacoraMtto" class="btn btn-warning">Cancelar</a>

                </form>

            </div>
        </div>
        <!-- END KONTEN UTAMA -->

        <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    </body>
</html>
