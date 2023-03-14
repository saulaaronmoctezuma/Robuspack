

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
        <h1>Agregar un Observación</h1>
        <MARQUEE SCROLLDELAY =200></MARQUEE>
        <div class="container" >
            <table class="table table-bordered table-striped" >
                <tbody>
                    <tr>
                        <input class="form-control"type="hidden" name="id_bitacora" value="<?= $id_bitacora ?>">
                    </tr>
                    <tr>
                <td>Grupo</td>
                <td><input id="a2" readonly style="background-color:#03E7F7;" class="form-control" type="text" name="grupo" value="<?= $grupo ?>"></td></tr>
                <td>Cliente</td>
               <td><input id="a2" readonly style="background-color:#03E7F7;" class="form-control" type="text" name="cliente" value="<?= $cliente ?>"></td></tr>
                    <tr>
                        <td><br><br><br>Descripción</td>
                        <td>
                            <textarea readonly style="background-color:#03E7F7;" style="resize:none;" name="descripcion" class="form-control input-sm"  rows="8" cols="80"><?= $descripcion ?></textarea>
                  </td>
                    </tr>
                  
                  
                  
                  
                  
                  
                  
                    
                     <tr>
                        <input class="form-control" type="hidden" name="archivo1" value="<?= $archivo1 ?>">
                    </tr>
                  
                  
                  
                  
                  
                    
                    <tr>
                        <td><br><br><br>Observación</td>
                       
                       <td>
                           <textarea name="observacion" style="resize:none;" class="form-control input-sm"  rows="8" cols="80" placeholder="Ingrese una observación"><?= $observacion ?></textarea>
                  </td></tr>
                    <center>

                         <tr><td>
                <input class="btn btn-success" type="submit" title="Da clic para guardar los datos" value="Guardar" data-toggle="tooltip" data-placement="right" title="Da clic para guardar los datos de la venta">


                <a title="Da clic para regresar al menú" href="../" class="btn btn-danger">Cancelar</a>
                             </td>
                </TR>
           </center>
                </tbody>
        </div>
        </table>
</div>
</form>
<?php ?>
