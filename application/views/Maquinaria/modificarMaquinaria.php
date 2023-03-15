<<<<<<< HEAD
  <!--
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */
-->    
=======
      
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$result = $this->User_model->getAllSettings();
$theme = $result->theme;
?>
<<<<<<< HEAD

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

=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $theme; ?>">
        <link rel="stylesheet" href="<?php echo base_url().'public/css/main.css' ?>">

     <link rel="icon" href="<?=base_url('assets/images/icono.PNG')?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<div id="maquinaria">
    <form action="<?= base_url('Maquinaria/maquinariaModificar') ?>" method="post" align="center" onsubmit="return vali()">
        <h1>Actualizar datos</h1>
        <MARQUEE SCROLLDELAY =200></MARQUEE>
        <div class="container" >
            <table class="table table-bordered table-striped">
                <tbody>
<<<<<<< HEAD
                   <!-- <tr>
                        <td>-->
                            <input class="form-control"type="hidden" name="id_maquinaria" value="<?= $id_maquinaria ?>">
                            
                           <!-- </td>
                    </tr>-->
=======
                    <tr>
                        <td><input class="form-control"type="hidden" name="id_maquinaria" value="<?= $id_maquinaria ?>"></td>
                    </tr>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    <tr>
                        <td>Código</td>
                        <td><input id="a1" class="form-control" type="text" name="referencia" value="<?= $referencia ?>"></td>
                    </tr>
                    <tr>
                        <td>Fecha</td>
                        <td><input id="a2" class="form-control" type="date" name="fecha" value="<?= $fecha ?>"></td>
                    </tr>
                    <tr>
                        <td>Fabricante</td>
                        <td><input id="a3" class="form-control" type="text" name="fabricante" value="<?= $fabricante ?>" ></td>
                    </tr>
                    <tr>
                        <td>Máquina</td>
                        <td><input id="a4" class="form-control" type="text" name="maquina" value="<?= $maquina ?>"></td>
                    </tr>
                  
<<<<<<< HEAD
                  <tr>
                        <td bgcolor="#F75A74"><FONT COLOR="white">Pc Exwork Eur</FONT></td>
                        <td><input id="a4" class="form-control" type="text" name="pcexwork" value="<?= $pcexwork ?>"></td>
                    </tr>
                     <tr>
                        <td bgcolor="#F75A74"><FONT COLOR="white">Pc Fob Eur</FONT></td>
                        <td><input id="a4" class="form-control" type="text" name="pcfob" value="<?= $pcfob ?>"></td>
                    </tr>
                     <tr>
                        <td bgcolor="#F75A74"><FONT COLOR="white">Pc Cif Eur</FONT></td>
                        <td><input id="a4" class="form-control" type="text" name="pccif" value="<?= $pccif ?>"></td>
                    </tr>
                     <tr>
                        <td bgcolor="#F75A74"><FONT COLOR="white">Pc Cip Eur</FONT></td>
                        <td><input id="a4" class="form-control" type="text" name="pccip" value="<?= $pccip ?>"></td>
                    </tr>
                  
                  
                     <tr>
                        <td>Precio 1 de la Máquina</td>
                        <td><input id="a4" class="form-control" onclick="fechaValidaActualizacionPrecio()" onkeyup="fechaValidaActualizacionPrecio()" type="text" name="precio1" value="<?= $precio1 ?>"></td>
=======
                     <tr>
                        <td>Precio 1 de la Máquina</td>
                        <td><input id="a4" class="form-control" type="text" name="precio1" value="<?= $precio1 ?>"></td>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    </tr>
                    
                     <tr>
                        <td>Precio 2 de la Máquina</td>
<<<<<<< HEAD
                        <td><input id="a4" class="form-control" onclick="fechaValidaActualizacionPrecio()" onkeyup="fechaValidaActualizacionPrecio()" type="text" name="precio2" value="<?= $precio2 ?>"></td>
=======
                        <td><input id="a4" class="form-control" type="text" name="precio2" value="<?= $precio2 ?>"></td>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    </tr>
                    
                     <tr>
                        <td>Precio 3 de la Máquina</td>
                        <td><input id="a4" class="form-control" type="text" name="precio3" value="<?= $precio3 ?>"></td>
                    </tr>
                    
                     <tr>
                        <td>Precio 4 de la Máquina</td>
<<<<<<< HEAD
                        <td><input id="a4" class="form-control" onclick="fechaValidaActualizacionPrecio()" onkeyup="fechaValidaActualizacionPrecio()" type="text" name="precio4" value="<?= $precio4 ?>"></td>
=======
                        <td><input id="a4" class="form-control" type="text" name="precio4" value="<?= $precio4 ?>"></td>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    </tr>
                    
                     <tr>
                        <td>Precio 5 de la Máquina</td>
<<<<<<< HEAD
                        <td><input id="a4" class="form-control" onclick="fechaValidaActualizacionPrecio()" onkeyup="fechaValidaActualizacionPrecio()" type="text" name="precio5" value="<?= $precio5 ?>"></td>
                    </tr>
                    
                    <tr>
                        <td>Fecha Actualización precio</td>
                        <td><input id="fecha_actualizacion_precio" class="form-control" type="date" name="fecha_actualizacion_precio" value="<?= $fecha_actualizacion_precio ?>"></td>
                    </tr>
                     
                    
                    <!--Aqui los 4 precios pc-->
=======
                        <td><input id="a4" class="form-control" type="text" name="precio5" value="<?= $precio5 ?>"></td>
                    </tr>
                     <tr>
                        <td>Pc Exwork</td>
                        <td><input id="a4" class="form-control" type="text" name="pcexwork" value="<?= $pcexwork ?>"></td>
                    </tr>
                     <tr>
                        <td>Pc Fob</td>
                        <td><input id="a4" class="form-control" type="text" name="pcfob" value="<?= $pcfob ?>"></td>
                    </tr>
                     <tr>
                        <td>Pc Cif</td>
                        <td><input id="a4" class="form-control" type="text" name="pccif" value="<?= $pccif ?>"></td>
                    </tr>
                     <tr>
                        <td>Pc Cip</td>
                        <td><input id="a4" class="form-control" type="text" name="pccip" value="<?= $pccip ?>"></td>
                    </tr>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    
                    <tr>
                        <td>Ancho</td>
                        <td><input id="a5" class="form-control" type="text" name="ancho"  value="<?= $ancho ?>"></td>
                    </tr>
                    <tr>
                        <td>Espesor</td>
                        <td><input id="a6" class="form-control" type="text" name="espesor"  value="<?= $espesor ?>"></td>
                    </tr>
                    <tr>
                        <td>Dia</td>
                        <td><input id="a7" class="form-control" type="text" name="diametro"  value="<?= $diametro ?>"></td>
                    </tr>
                    <tr>
                        <td>Cue</td>
                        <td><input id="a8" class="form-control" type="text" name="empresa_competencia_1"  value="<?= $empresa_competencia_1 ?>"></td>
                    </tr>
                    <tr>
                        <td>Dicar</td>
                        <td><input id="a9" class="form-control" type="text" name="empresa_competencia_2"  value="<?= $empresa_competencia_2 ?>"></td>
                    </tr>
                    <tr>
<<<<<<< HEAD
                        <td>Inventario</td>
                        <td><input id="a10" class="form-control" type="text" name="inventario" value="<?= $inventario ?>"></td>
                    </tr>
                    <tr>
=======
                        <td>Stock</td>
                        <td><input id="a10" class="form-control" type="text" name="inventario" value="<?= $inventario ?>"></td>
                    </tr>
                   <tr>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        <td>Piezas a recibir</td>
                        <td><input id="a10" class="form-control" type="text" name="piezas_recibir" value="<?= $piezas_recibir ?>"></td>
                    </tr>
                    
<<<<<<< HEAD
                    
                      <input id="fecha_corte_rotacion" class="form-control" type="hidden" name="fecha_corte_rotacion" value="<?= $fecha_corte_rotacion ?>">
=======
                     
                        <input id="fecha_corte_rotacion" class="form-control" type="hidden" name="fecha_corte_rotacion" value="<?= $fecha_corte_rotacion ?>">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                   
                    
                    
                    
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


