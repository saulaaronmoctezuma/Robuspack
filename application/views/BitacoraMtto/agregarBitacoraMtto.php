<!--
 * @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 16/11/2018 Hora 2:34 pm
 * Sistema de Control Robuspack
 */-->

<html lang="es-mx">
    <title>Robuspack</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">

    <link rel="icon" href="<?= base_url('assets/images/robuspack_icon.png') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $header ?>
    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    $result = $this->User_model->getAllSettings();
    $theme = $result->theme;
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $theme; ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'public/css/main.css' ?>">


    <div id="maquinaria">
        <div class="container" >      
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Bienvenido</strong> Agrega los datos segun corresponda
            </div>
            <center><h1>Gestión de Bitácora</h1></center>
            <MARQUEE SCROLLDELAY =200></MARQUEE>
            <form name="formulario" id="formal" role="form" action="<?= base_url('BitacoraMtto/formularioAgregar') ?>" method="POST" onsubmit="return valida()">



                <div class="form-group">
                    <input type="hidden" class="form-control" id="id_bitacora"  name="id_bitacora">
                </div>

                <div class="row">

                    <div class="form-group col-xs-3">
                        <label for="nombre">Cliente</label>
                        <select required id="cliente" class="form-control input-sm"  name="planta" <?php echo form_dropdown('clienteCombo', $clienteCombo, '#', 'id="clienteCombo"'); ?> </select>
                    </div>


                    <div class="form-group col-xs-3">
                        <div class="form-group">
                            <label for="maquina">Modelo </label>
                            <input id="a2" type="text" class="form-control input-sm"  name="modelo" >
                        </div>
                    </div>

                    <div class="form-group col-xs-3">
                        <div class="form-group">
                            <label for="maquina">Máquina </label>
                            <input id="a2" type="text" class="form-control input-sm"  name="maquina" >
                        </div>
                    </div>

                    <div class="form-group col-xs-3">
                        <div class="form-group">
                            <label for="fecha">Fecha </label>
                            <input id="a3" type="text" class="form-control input-sm"  name="fecha" >
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-xs-4">
                        <div class="form-group">
                            <label for="oc">Orden de Compra </label>
                            <input id="a4" type="text" class="form-control input-sm"  name="oc" >
                        </div> </div> 

                    <div class="form-group col-xs-4">
                        <div class="form-group">
                            <label>Tipo</label>

                            <select name="tipo" id="tipo" class="form-control input-sm" require>
                                <option  value="">Selecciona una opción</option>
                                <OPTION VALUE="Intalación/Garantía">Intalación/Garantía</OPTION>
                                <OPTION VALUE="Servicio">Servicio</OPTION>
                            </select>
                        </div> 
                    </div> 

                    <div class="form-group col-xs-4">
                        <div class="form-group">
                            <label>Mantenimiento</label>

                            <select name="mantenimiento" id="mantenimiento" class="form-control input-sm" require>
                                <option  value="">Selecciona una opción</option>
                                <OPTION VALUE="Correctivo">Correctivo</OPTION>
                                <OPTION VALUE="Preventivo">Preventivo</OPTION>
                                <OPTION VALUE="Predictivo">Predictivo</OPTION>
                            </select>
                        </div> 
                    </div>  </div> 

                <br>
                <input id="a3" type="hidden" class="form-control input-sm"  name="reporto" >




                <div class="form-group">
                    <label>Descripción de Actividades Efectuadas </label>

                    <textarea name="des_acti" class="form-control input-sm"  rows="6" cols="60" style="resize:none;" placeholder="Ingresa una descripción" require></textarea>
                </div>
                <br>


                <label for="ref_recomen">Refacciones Recomendadas </label>

                <div class="row">
                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm" name="ref_usadas1" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm" name="ref_usadas9" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm" name="ref_usadas17" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm" name="ref_usadas25" >
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm" name="ref_usadas2" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm" name="ref_usadas10" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm" name="ref_usadas18" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm" name="ref_usadas26" >
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas3" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas11" >
                    </div>



                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm" name="ref_usadas19" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm" name="ref_usadas27" >
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas4" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas12" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas20" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm" name="ref_usadas28" >
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas5" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas13" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas21" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm" name="ref_usadas29" >
                    </div>
                </div>

                <div class="row">

                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas6" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas14" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas22" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm" name="ref_usadas30" >
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm" name="ref_usadas7" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas15" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas23" >
                    </div>

                </div>

                <div class="row">
                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas8" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm" name="ref_usadas16" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a1" type="text" class="form-control input-sm" name="ref_usadas24" >
                    </div>

                </div>




                <br>
                <label for="ref_recomen">Refacciones Recomendadas </label>

                <div class="row">

                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen1" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen9" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen17" >
                    </div>

                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen25" >
                    </div>
                </div> 



                <div class="row">

                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen2" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen10" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen18" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen26" >
                    </div>

                </div> 

                <div class="row">

                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen3" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen11" >
                    </div>


                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen19" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen27" >
                    </div>

                </div>

                <div class="row">  
                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen4" >
                    </div>

                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen12" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen20" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen28" >
                    </div>

                </div>


                <div class="row">     
                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen5" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen13" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen21" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen29" >
                    </div>
                </div>


                <div class="row">


                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen6" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen14" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen22" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen30" >
                    </div>
                </div>



                <div class="row">

                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen7" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen15" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen23" >
                    </div>

                </div>

                <div class="row">

                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen8" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen16" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen24" >
                    </div>
                </div>











                <div class="form-group">
                    <br>
                    <label>Recomendaciones</label>

                    <textarea name="recomendaciones" class="form-control input-sm"  rows="6" cols="60" style="resize:none;" placeholder="Ingresa una descripción" require></textarea>
                </div>



                <div class="form-group">
                    <br>
                    <label for="proxima_inter">Proxima Fecha de Intervención sugerida Robuspack </label>
                    <input id="a4" type="text" class="form-control input-sm"  name="proxima_inter" >
                </div>
                <br><br>
                <center>

                <input class="btn btn-success" type="submit" value="Agregar" data-toggle="tooltip" data-placement="right">
                <a title="Da clic para regresar" href="javascript:window.history.go(-1);"class="btn btn-danger">Cancelar</a>
                </center>

        </div>
    </form>
</div> 
</body>
</html>


