      
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$result = $this->User_model->getAllSettings();
$theme = $result->theme;
?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $theme; ?>">
        <link rel="stylesheet" href="<?php echo base_url().'public/css/main.css' ?>">

     <link rel="icon" href="<?=base_url('assets/images/icono.PNG')?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<div id="maquinaria">
    <form action="<?= base_url('Maquinaria/maquinariaModificarRotacion') ?>" method="post" align="center" onsubmit="return vali()">
        <h1>Actualizar</h1>
        <MARQUEE SCROLLDELAY =200></MARQUEE>
        <div class="container" >
            <table class="table table-bordered table-striped">
                <tbody>
                    
                        <input class="form-control"type="hidden" name="id_maquinaria" value="<?= $id_maquinaria ?>">
                        
                    
                        
                         <tr>
                        <td>Código</td>
                        <td><input id="a1" class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="referencia" value="<?= $referencia ?>"></td>
                    </tr>
                       
                        <input id="a2" class="form-control" type="hidden" name="fecha" value="<?= $fecha ?>">
                       
                        <input id="a3" class="form-control" type="hidden" name="fabricante" value="<?= $fabricante ?>" >
                   
                       
                        <input id="a4" class="form-control" type="hidden" name="maquina" value="<?= $maquina ?>">
                    
                        
                        <input id="a4" class="form-control" type="hidden" name="precio1" value="<?= $precio1 ?>">
                    
                       
                        <input id="a4" class="form-control" type="hidden" name="precio2" value="<?= $precio2 ?>">
                    
                       
                        <input id="a4" class="form-control" type="hidden" name="precio3" value="<?= $precio3 ?>">
                    
                       
                        <input id="a4" class="form-control" type="hidden" name="precio4" value="<?= $precio4 ?>">
                    
                        
                        <input id="a4" class="form-control" type="hidden" name="precio5" value="<?= $precio5 ?>">
                    
                        
                        <input id="a4" class="form-control" type="hidden" name="pcexwork" value="<?= $pcexwork ?>">
                    
                        
                        <input id="a4" class="form-control" type="hidden" name="pcfob" value="<?= $pcfob ?>">
                   
                        
                        <input id="a4" class="form-control" type="hidden" name="pccif" value="<?= $pccif ?>">
                    
                        <input id="a4" class="form-control" type="hidden" name="pccip" value="<?= $pccip ?>">
                   
                        <input id="a5" class="form-control" type="hidden" name="ancho"  value="<?= $ancho ?>">
                    
                        <input id="a6" class="form-control" type="hidden" name="espesor"  value="<?= $espesor ?>">
                   
                        <input id="a7" class="form-control" type="hidden" name="diametro"  value="<?= $diametro ?>">
                   
                        <input id="a8" class="form-control" type="hidden" name="empresa_competencia_1"  value="<?= $empresa_competencia_1 ?>">
                   
                        <input id="a9" class="form-control" type="hidden" name="empresa_competencia_2"  value="<?= $empresa_competencia_2 ?>">
                    
                         <tr>
                        <td>Inventario</td>
                        <td><input id="a10" class="form-control" type="text" name="inventario" value="<?= $inventario ?>"></td>
                    </tr>
                   <tr>
                        <td>Piezas a recibir</td>
                        <td><input id="a10" class="form-control" type="text" name="piezas_recibir" value="<?= $piezas_recibir ?>"></td>
                    </tr>
                    
                        <input id="fecha_corte_rotacion" class="form-control" min="2019-01-01" type="hidden" name="fecha_corte_rotacion" value="<?= $fecha_corte_rotacion ?>">
                    
                    
                    
                    
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


