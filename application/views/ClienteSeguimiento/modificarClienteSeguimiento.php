<php>
    <html lang="es-mx">
    <title>Robuspack</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">

    <link rel="icon" href="<?= base_url('assets/images/icono.PNG') ?>">
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
    <form action="<?= base_url('ClienteSeguimiento/clienteSeguimientoModificar') ?>" method="post" align="center" onsubmit="return vali()">
        <h1>Actualizar datos </h1>
        <MARQUEE SCROLLDELAY =200></MARQUEE>
        <div class="container" >
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <td><input class="form-control"type="hidden" name="id_clienteseguimiento" value="<?= $id_clienteseguimiento ?>"></td>
                    </tr>
                    <!--<tr>
                        <td>Grupo</td>
                        <td><input id="a1" class="form-control" type="text" name="grupo" value="<?= $grupo ?>"></td>
                    </tr> 
                    <tr>
                        <td>Cliente</td>
                        <td><input id="a2" class="form-control" type="text" name="cliente" value="<?= $cliente ?>"></td>
                    </tr>-->
                    <tr>
                <td>Grupo</td>
                <td> <select id="a3" class="form-control" name="grupo"   <?php echo form_dropdown('grupoCombo', $grupoCombo, $grupo, '#', 'id="grupoCombo"'); ?> </select></td>
                </tr>
                <td>Cliente</td>
                <td> <select id="a3" class="form-control" name="cliente"   <?php echo form_dropdown('clienteCombo', $clienteCombo, $cliente, '#', 'id="clienteCombo"'); ?> </select></td>
                </tr>
                
               
                   <!-- <tr>
                        <td>Prioridad</td>
                        <td><input id="a3" class="form-control" type="text" name="prioridad"  value="<?= $prioridad ?>" ></td>
                    </tr>-->
                    <tr>
                    <td>Prioridad</td>
                    <td>
                         <SELECT name="prioridad" class="form-control input-sm"> 
                            <optgroup label="Selecciona una opción">
                                <option value="1 Urgente" <?php if ($prioridad == "1 Urgente") {echo "Selected"; } ?>>1 Urgente</option>
                                <option value="2 Muy Potencial" <?php if ($prioridad == "2 Muy Potencial") {echo "Selected"; } ?>>2 Muy Potencial</option>
                                <option value="3 Potencial" <?php if ($prioridad == "3 Potencial") {echo "Selected"; } ?>>3 Potencial</option>
                                <option value="4 Posible Cliente" <?php if ($prioridad == "4 Posible Cliente") {echo "Selected"; } ?>>4 Posible Cliente</option>
                                <option value="5 Preguntó Información" <?php if ($prioridad == "5 Preguntó Información") {echo "Selected"; } ?>>5 Preguntó Información</option>
                                <option value="6 Cliente no Potencial" <?php if ($prioridad == "6 Cliente no Potencial") {echo "Selected"; } ?>>6 Cliente no Potencial</option>
                            </optgroup>
                          </SELECT>
                    </td>
            </tr>
                   <!-- <tr>
                        <td>Estatus</td>
                        <td><input id="a4" class="form-control" type="text" name="estatus"  value="<?= $estatus ?>"></td>
                    </tr>-->
                    
                     <tr>
                    <td>Paqueteria</td>
                    <td>
                         <SELECT name="estatus" class="form-control input-sm"> 
                            <optgroup label="Selecciona una opción">
                                <option value="Sin Contactar" <?php if ($estatus == "Sin Contactar") {echo "Selected"; } ?>>Sin Contactar</option>
                                 <option value="Envió de Información" <?php if ($estatus == "Envió de Información") {echo "Selected"; } ?>>Envió de Información</option>
                                  <option value="Visita Programada" <?php if ($estatus == "Visita Programada") {echo "Selected"; } ?>>Visita Programada</option>
                                  <option value="Visita Realizada" <?php if ($estatus == "Visita Realizada") {echo "Selected"; } ?>>Visita Realizada</option>
                                  <option value="En cotización" <?php if ($estatus == "En cotización") {echo "Selected"; } ?>>En cotización</option>
                                  <option value="Muestreo" <?php if ($estatus == "Muestreo") {echo "Selected"; } ?>>Muestreo</option>
                                  <option value="Venta Cerrada" <?php if ($estatus == "Venta Cerrada") {echo "Selected"; } ?>>Venta Cerrada</option>
                                 
                            </optgroup>
                          </SELECT>
                    </td>
                     </tr>
                     <tr>
                         <td>Necesidad</td>
                        <td><input id="a4" class="form-control" type="text" name="necesidad" value="<?= $necesidad ?>"></td>
                    </tr>
                    <tr>
                        <td>Fecha Cotización</td>
                        <td><input id="a5" class="form-control" type="date" name="fecha_cotizacion"  value="<?= $fecha_cotizacion ?>"></td>
                    </tr>
                   <!--<tr>
                        <td>Archivo 1</td>
                        <td><input id="a5" class="form-control" type="text" name="archivo1"  value="<?= $archivo1 ?>"></td>
                    </tr>-->
                    
                    <tr>
                        <td>Fecha a Contactar</td>
                        <td><input id="a5" class="form-control" type="date" name="fecha_contactar"  value="<?= $fecha_contactar ?>"></td>
                    </tr>
                    <tr> 
                        <td>Compromiso</td>
                        <td><input id="a5" class="form-control" type="text" name="compromiso"  value="<?= $compromiso ?>"></td>
                    </tr>
                     <tr>
                        <td>Notas</td>
                        <td><input id="a5" class="form-control" type="text" name="notas"  value="<?= $notas ?>"></td>
                    </tr>
                   
                    <tr>
                    <td>
                        <input  class="btn btn-success" title="Da clic para guardar los datos" type="submit" value="Guardar" >
                       <a title="Da clic para regresar al menú" href="javascript:window.history.go(-1);"class="btn btn-danger">Cancelar</a>
                    </td>
                </tr>
                </tbody>
        </div>
        </table>
</div>
</form>
<?php ?>
