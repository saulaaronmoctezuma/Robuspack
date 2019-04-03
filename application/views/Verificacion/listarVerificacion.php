<!--
 * @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 16/11/2018 Hora 2:34 pm
 * Sistema de Control Robuspack
 */-->
<html lang="es-mx">
    <head>
        <title>Robuspack</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php
        defined('BASEPATH') OR exit('No direct script access allowed');

        $result = $this->User_model->getAllSettings();
        $theme = $result->theme;
        ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $theme; ?>">
        <link rel="stylesheet" href="<?php echo base_url() . 'public/css/main.css' ?>">

        <!-- Pregunta al dar clic a eliminar-->
        <script type="text/javascript">
            function confirma() {
                if (confirm("¿Realmente desea eliminarlo?")) {

                } else {
                    return false
                }
            }
        </script>


        <!-- Para traerse el rol que esta registrado-->
        <?php
        //check user level
        $dataLevel = $this->userlevel->checkLevel($role);

        $site_title = $result->site_title;
        //check user level
        ?>
    <head>

    <div class="container">
        <h1></h1>

        <div class="alert alert-info alert-warning">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Bienvenido</strong> Agrega, Modifica o Elimina sus Datos
        </div>

        <left> <h1>Buscar</h1> </left>
        <input type="text" id="search" placeholder="Escribe para buscar..."  class="form-control" />
    </div>
    <div class="container" style="margin-top:1px;">
        <table  border="1" class="table table-bordered table-striped">
            <MARQUEE SCROLLDELAY =200> </MARQUEE>
            <thead
                <tr>

                    <th>No Maquina</th>
                    <th>Modelo</th>
                    <th>Serie</th>

                    <th>Cliente </th>
                    <th>Pedimento</th>
                    <th>Placa </th>







                    <?php
                    if ($dataLevel == 'is_admin') {
                        echo '<th>Factura</th>';
                    } else if ($dataLevel == 'is_editor') {
                        echo '<th>Factura</th>';
                    } else if ($dataLevel == 'is_logistica') {
                        echo '<th>Factura</th>';
                    } else if ($dataLevel == 'is_credito') {
                        echo '<th>Factura</th>';
                    } else if ($dataLevel == 'is_refacciones') {
                        
                    } else if ($dataLevel == 'is_editor') {
                        echo '<th>Factura</th>';
                    } else {
                        
                    }
                    ?>














                    <?php
                    if ($dataLevel == 'is_admin') {
                        echo '<th class="header" colspan="1" style="text-align: center">Eliminar</th><th class="header" colspan="1" align="center" >Modificar</th>';
                    } else if ($dataLevel == 'is_editor') {
                        echo '<th class="header" colspan="1" style="text-align: center">Eliminar</th><th class="header" colspan="1" align="center" >Modificar</th>';
                    } else if ($dataLevel == 'is_logistica') {
                        echo '<th class="header" colspan="2" align="center" >Modificar</th>';
                    } else if ($dataLevel == 'is_credito') {
                        echo '<th class="header" colspan="2" align="center" >Modificar</th>';
                    } else if ($dataLevel == 'is_refacciones') {
                        echo '<th class="header" colspan="1" align="center" >Modificar</th>';
                    } else if ($dataLevel == 'is_editor') {
                        echo '<th class="header" colspan="2" style="text-align: center">Eliminar</th><th class="header" colspan="2" align="center" >Modificar</th>';
                    } else {
                        
                    }
                    ?>



                </tr>
            </thead>

            <?php
            foreach ($placa as $obj) {
                echo '<tr><td>';
                echo $obj->getNo_maqui() .
                '</td>'
                . '<td>'
                . $obj->getModelo() .
                '</td>'
                . '<td>'
                . $obj->getSerie() .
                '</td>'
                . '<td>'
                . $obj->getCliente() .
                '</td>'
                . '<td>'
                . $obj->getPedimento() .
                '</td>'
                ;

                if ($obj->getPlaca() != null) {
                    echo '<td><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getPlaca() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
                } else {
                    echo '<td>Sin Archivo</td>';
                }





                if (($obj->getFactura() == null) && ($dataLevel == 'is_editor')) {
                    echo '<td>Sin Archivo</td>';
                } else if (($obj->getFactura() != null) && ($dataLevel == 'is_editor')) {
                    echo '<td><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getFactura() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
                }

                if (($obj->getFactura() == null) && ($dataLevel == 'is_admin')) {
                    echo '<td>Sin Archivo</td>';
                } else if (($obj->getFactura() != null) && ($dataLevel == 'is_admin')) {
                    echo '<td><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getFactura() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
                }

                if (($obj->getFactura() == null) && ($dataLevel == 'is_logistica')) {
                    echo '<td>Sin Archivo</td>';
                } else if (($obj->getFactura() != null) && ($dataLevel == 'is_logistica')) {
                    echo '<td><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getFactura() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
                }

                if (($obj->getFactura() == null) && ($dataLevel == 'is_credito')) {
                    echo '<td>Sin Archivo</td>';
                } else if (($obj->getFactura() != null) && ($dataLevel == 'is_credito')) {
                    echo '<td><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getFactura() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
                }








                ;




                /* echo '<td width="250px"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/placa/' . $obj->getPlaca() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
                  echo '<td><img src="' . base_url() . 'assets/placa/' . $obj->getPlaca() . '" ></td>';
                 */


                if ($dataLevel == 'is_admin') {
                    echo '<td style="text-align: center;"><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'verificacion/eliminar/' . $obj->getId() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                    echo '<td style="text-align: center;"><a title="Da clic para modificar el registro" href="' . base_url() . 'verificacion/actualizar/' . $obj->getId() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                } else if ($dataLevel == 'is_editor') {
                    echo '<td style="text-align: center;"><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'verificacion/eliminar/' . $obj->getId() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                    echo '<td style="text-align: center;"><a title="Da clic para modificar el registro" href="' . base_url() . 'verificacion/actualizar/' . $obj->getId() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                } else if ($dataLevel == 'is_refacciones') {
                    echo '<td style="text-align: center;"><a title="Da clic para modificar el registro" href="' . base_url() . 'verificacion/actualizar/' . $obj->getId() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                } else if ($dataLevel == 'is_logistica') {
                    echo '<td style="text-align: center;"><a title="Da clic para modificar el registro" href="' . base_url() . 'verificacion/actualizar/' . $obj->getId() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                } else if ($dataLevel == 'is_credito') {
                    echo '<td style="text-align: center;"><a title="Da clic para modificar el registro" href="' . base_url() . 'verificacion/actualizar/' . $obj->getId() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                }

                //echo "<td><a href='" . base_url() . "verificacion/eliminar/" . $obj->getId() . "'>Elimina</a></td>";
                //echo "<td><a href=" . base_url() . "verificacion/actualizar/" . $obj->getId() . ">Actualizar</a></td>";
            }
            ?>
        </table>
    </div>





    <?php
    if ($dataLevel == 'is_admin') {

        echo '<div class="text-center">
        <a class="btn btn-success" href="' . base_url('verificacion/agregar') . '" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Catálogo">Agregar nuevo registro</a>

    </div>';
    } else if ($dataLevel == 'is_editor') {

        echo '<div class="text-center">
        <a  class="btn btn-success" href="' . base_url('verificacion/agregar') . '" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Catálogo">Agregar nuevo registro</a>

    </div>';
    } else if ($dataLevel == 'is_logistica') {

        echo '<div class="text-center">
        <a  class="btn btn-success" href="' . base_url('verificacion/agregar') . '" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Catálogo">Agregar nuevo registro</a>

    </div>';
    } else if ($dataLevel == 'is_credito') {
        
    } else if ($dataLevel == 'is_refacciones') {
        
    } else {
        
    }
    ?>


    <!-- <div class="text-center">
         <a  class="btn btn-success" href="<?= base_url('verificacion/agregar') ?>" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Catálogo">Agregar nuevo registro</a>
 
     </div>-->
</div>
</body>
</html>

