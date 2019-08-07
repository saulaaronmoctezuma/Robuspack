<!--
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */
-->

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
    <form action="<?= base_url('Bitacora/bitacoraModificar') ?>" method="post" align="center" onsubmit="return vali()">
        <h1>ActualizDSar datos Bitácora</h1>
        <MARQUEE SCROLLDELAY =200></MARQUEE>
        <div class="container" >
            <table class="table table-bordered table-striped" >
                <tbody>
                    <tr>
                        <input class="form-control"type="hidden" name="id_bitacora" value="<?= $id_bitacora ?>">
                    </tr>
                    <tr>
                <td>Grupo</td>
                <td> <select id="a3" class="form-control" name="grupo"   <?php echo form_dropdown('grupoCombo', $grupoCombo, $grupo, '#', 'id="grupoCombo"'); ?> </select></td>
                </tr>
                <td>Cliente</td>
                <td> <select id="a3" class="form-control" name="cliente"   <?php echo form_dropdown('clienteCombo', $clienteCombo, $cliente, '#', 'id="clienteCombo"'); ?> </select></td>
                </tr>
                    <tr>
                         <td>Descripción</td>
                       <td>
                           <textarea name="descripcion" class="form-control input-sm" style="resize:none;" rows="8" cols="80"><?= $descripcion ?></textarea>
                  </td>
                    </tr>
                    
                    
                    
                    
                    <input class="form-control" type="hidden" name="archivo1" value="<?= $archivo1 ?>">
                   <!-- <tr>
                        <td>Archivo 1</td>
                        <td><input id="a3" class="form-control" type="text" name="archivo1"  value="<?= $archivo1 ?>" ></td>
                    </tr>-->
                   
                     <!--<tr>
                         <td>Fecha Inserción</td>
                        <td><input id="a4" class="form-control" type="text" name="fecha_insercion" value="<?= $fecha_insercion ?>"></td>
                    </tr>
                    <tr>
                        <td>Fecha Modificación</td>
                        <td><input id="a5" class="form-control" type="text" name="fecha_modificar"  value="<?= $fecha_modificar ?>"></td>
                    </tr>-->
                     <center>

                         <TR><TD>
                <input class="btn btn-success" type="submit" title="Da clic para guardar los datos" value="Guardar" data-toggle="tooltip" data-placement="right" title="Da clic para guardar los datos de la venta">


                <a title="Da clic para regresar al menú" href="../" class="btn btn-danger"><b> </b>Cancelar</a>
                             </td>
                </TR>
            </center>
                </tbody>
        </div>
        </table>
</div>
</form>
<?php ?>
