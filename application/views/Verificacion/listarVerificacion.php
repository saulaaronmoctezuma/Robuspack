<!--
 * @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 26/03/2019 Hora 10:15 pm
    Fecha : Ultimo Cambio 03/0/2019 Hora 10:36 pm
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
        <!--<body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">-->
    <div class="container">
        <h1></h1>

        <div class="alert alert-info alert-warning">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Bienvenido</strong> Agrega, Modifica o Elimina sus Datos
        </div>

        <left> <h1>Buscar</h1> </left>
        <input type="text" id="buscandoIguales" placeholder="Escribe para buscar..."  class="form-control" />
    </div>
    <br> 
    
    <?php
if ($dataLevel == 'is_admin') {

    echo '<div class="text-center">
        <a class="btn btn-success" href="' . base_url('verificacion/agregar') . '" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Catálogo">Agregar Nuevo Registro</a>

    </div>';
} else if ($dataLevel == 'is_editor') {

    echo '<div class="text-center">
        <a  class="btn btn-success" href="' . base_url('verificacion/agregar') . '" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Catálogo">Agregar Nuevo Registro</a>

    </div>';
} else if ($dataLevel == 'is_logistica') {

    echo '<div class="text-center">
        <a  class="btn btn-success" href="' . base_url('verificacion/agregar') . '" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Catálogo">Agregar Nuevo Registro</a>

    </div>';
} else if ($dataLevel == 'is_credito') {
    
} else if ($dataLevel == 'is_refacciones') {
    
} else {
    
}
?>
    <div class="container" style="margin-top:1px;">
        <td>Total de Registros:</td>
                        <td>
                            <?php
                            foreach ($totalRegistroPlacas as $fila) {
                                ?>

                        <b><?= $fila->total_registros_placas ?></b>

                                <?php
                            }
                            ?>
                        </td>
                        
                    
                        
                        
                        
        <table  border="1" class="table table-bordered table-striped">
            <MARQUEE SCROLLDELAY =200> </MARQUEE>
            <thead
                <tr>

                    <th style="text-align: center">No Máquina</th>
                    <th  style="text-align: center">Modelo</th>
                    <th  style="text-align: center">Empresa</th>
                    <th  style="text-align: center">Serie</th>
                    <th  style="text-align: center">Cliente </th>

                



                    <?php
                    if ($dataLevel == 'is_admin') {
                        echo '<th>No Pedimento</th>';
                    } else if ($dataLevel == 'is_editor') {
                        echo '<th>No Pedimento</th>';
                    } else if ($dataLevel == 'is_logistica') {
                        echo '<th>No Pedimento</th>';
                    } else if ($dataLevel == 'is_credito') {
                        echo '<th  style="text-align: center">No Pedimento</th>';
                    } else if ($dataLevel == 'is_refacciones') {
                        
                    } else {
                        
                    }
                    ?>
                    
                    
                    
                        <?php
                    if ($dataLevel == 'is_admin') {
                        echo ' <th>Pedimento PDF</th>';
                    } else if ($dataLevel == 'is_editor') {
                        echo ' <th>Pedimento PDF</th>';
                    } else if ($dataLevel == 'is_logistica') {
                        echo ' <th>Pedimento PDF</th>';
                    } else if ($dataLevel == 'is_credito') {
                        echo ' <th  style="text-align: center">Pedimento PDF</th>';
                    } else if ($dataLevel == 'is_refacciones') {
                        
                    } else {
                        
                    }
                    ?>
                    
                    
                    
                    
                    
                    

                    <th>Placa </th>


                    <?php
                    if ($dataLevel == 'is_admin') {
                        echo ' <th>No Factura</th><th>Factura</th><th>Refacciones</th>';
                    } else if ($dataLevel == 'is_editor') {
                        echo ' <th>No Factura</th><th>Factura</th><th>Refacciones</th>';
                    } else if ($dataLevel == 'is_logistica') {
                        echo ' <th>No Factura</th><th>Factura</th>';
                    } else if ($dataLevel == 'is_credito') {
                        echo ' <th>No Factura</th><th>Factura</th>';
                    } else if ($dataLevel == 'is_mantenimiento') {
                        echo '<th>Refacciones</th>';
                    } else if ($dataLevel == 'is_refacciones') {
                        echo '<th>Refacciones</th>';
                    } else if ($dataLevel == 'is_jefe_mantenimiento') {
                        echo '<th>Refacciones</th>';
                    } else {
                        
                    }
                    ?>


                    <?php
                    if ($dataLevel == 'is_admin') {
                        echo '<th class="header" colspan="1" style="text-align: center">Eliminar</th><th class="header" colspan="1" align="center" >Modificar</th>';
                    } else if ($dataLevel == 'is_editor') {
                        echo '<th class="header" colspan="1" style="text-align: center">Eliminar</th><th class="header" colspan="1" align="center" >Modificar</th>';
                    } else if ($dataLevel == 'is_logistica') {
                        echo '<th class="header" colspan="2" align="center" >Accion</th>';
                    } else if ($dataLevel == 'is_credito') {
                        echo '<th class="header" colspan="2" align="center" >Modificar</th>';
                    } else if ($dataLevel == 'is_refacciones') {
                        echo '<th class="header" colspan="1" align="center" >Modificar</th>';
                    } else if ($dataLevel == 'is_jefe_mantenimiento') {
                        echo '<th class="header" colspan="1" align="center" >Modificar</th>';
                    } else if ($dataLevel == 'is_mantenimiento') {
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
                . $obj->getEmpresa() .
                '</td>'
                . '<td>'
                . $obj->getSerie() .
                '</td>'
                . '<td>'
                . $obj->getCliente() .
                '</td>';

             


                //Numero de Pedimento

                if ($dataLevel == 'is_admin') {
                    echo
                    '<td>'
                    . $obj->getPedimento() .
                    '</td>'
                    ;
                } else if ($dataLevel == 'is_editor') {
                    echo
                    '<td>'
                    . $obj->getPedimento() .
                    '</td>'
                    ;
                } else if ($dataLevel == 'is_logistica') {
                    echo
                    '<td>'
                    . $obj->getPedimento() .
                    '</td>'
                    ;
                } else if ($dataLevel == 'is_credito') {
                    echo
                    '<td>'
                    . $obj->getPedimento() .
                    '</td>'
                    ;
                } else if ($dataLevel == 'is_refacciones') {
                    
                } else if ($dataLevel == 'is_editor') {
                   
                } else {
                    
                }

                
                
                
                   //Pedimento PDF

                if (($obj->getPedimentoodf() == null) && ($dataLevel == 'is_admin')) {
                    echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
                } else if (($obj->getPedimentoodf() != null) && ($dataLevel == 'is_admin')) {
                    echo '<td style="text-align: center;color:#FF0000"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getPedimentoodf() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
                }

                if (($obj->getPedimentoodf() == null) && ($dataLevel == 'is_editor')) {
                    echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
                } else if (($obj->getPedimentoodf() != null) && ($dataLevel == 'is_editor')) {
                    echo '<td style="text-align: center;color:#FF0000"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getPedimentoodf() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
                }

                if (($obj->getPedimentoodf() == null) && ($dataLevel == 'is_logistica')) {
                    echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
                } else if (($obj->getPedimentoodf() != null) && ($dataLevel == 'is_logistica')) {
                    echo '<td style="text-align: center;color:#FF0000"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getPedimentoodf() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
                }

                if (($obj->getPedimentoodf() == null) && ($dataLevel == 'is_credito')) {
                    echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
                } else if (($obj->getPedimentoodf() != null) && ($dataLevel == 'is_credito')) {
                    echo '<td style="text-align: center;color:#FF0000"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getPedimentoodf() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
                }
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                if ($obj->getPlaca() != null) {
                    echo '<td style="text-align: center;"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getPlaca() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
                } else {
                    echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
                }




                //numero de factura
                if ($dataLevel == 'is_admin') {
                    echo '<td>'
                    . $obj->getNum_factura() .
                    '</td>'
                    ;
                } else if ($dataLevel == 'is_editor') {
                    echo '<td>'
                    . $obj->getNum_factura() .
                    '</td>'
                    ;
                } else if ($dataLevel == 'is_refacciones') {
                    
                } else if ($dataLevel == 'is_logistica') {
                    echo '<td>'
                    . $obj->getNum_factura() .
                    '</td>'
                    ;
                } else if ($dataLevel == 'is_credito') {
                    echo '<td>'
                    . $obj->getNum_factura() .
                    '</td>'
                    ;
                } else if ($dataLevel == 'is_mantenimiento') {
                    
                } else if ($dataLevel == 'is_jefe_mantenimiento') {
                    
                }




                //factura
                if (($obj->getFactura() == null) && ($dataLevel == 'is_editor')) {
                    echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
                } else if (($obj->getFactura() != null) && ($dataLevel == 'is_editor')) {
                    echo '<td style="text-align: center;"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getFactura() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
                }

                if (($obj->getFactura() == null) && ($dataLevel == 'is_admin')) {
                    echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
                } else if (($obj->getFactura() != null) && ($dataLevel == 'is_admin')) {
                    echo '<td style="text-align: center;"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getFactura() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
                }

                if (($obj->getFactura() == null) && ($dataLevel == 'is_logistica')) {
                    echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
                } else if (($obj->getFactura() != null) && ($dataLevel == 'is_logistica')) {
                    echo '<td style="text-align: center;"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getFactura() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
                }

                if (($obj->getFactura() == null) && ($dataLevel == 'is_credito')) {
                    echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
                } else if (($obj->getFactura() != null) && ($dataLevel == 'is_credito')) {
                    echo '<td style="text-align: center;"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getFactura() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
                }




                //pdf de refacciones
                if (($obj->getRefacciones() == null) && ($dataLevel == 'is_admin')) {
                    echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
                } else if (($obj->getRefacciones() != null) && ($dataLevel == 'is_admin')) {
                    echo '<td style="text-align: center;"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getRefacciones() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
                }

                if (($obj->getRefacciones() == null) && ($dataLevel == 'is_editor')) {
                    echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
                } else if (($obj->getRefacciones() != null) && ($dataLevel == 'is_editor')) {
                    echo '<td style="text-align: center;"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getRefacciones() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
                }

                if (($obj->getRefacciones() == null) && ($dataLevel == 'is_mantenimiento')) {
                    echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
                } else if (($obj->getRefacciones() != null) && ($dataLevel == 'is_mantenimiento')) {
                    echo '<td style="text-align: center;"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getRefacciones() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
                }


                if (($obj->getRefacciones() == null) && ($dataLevel == 'is_refacciones')) {
                    echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
                } else if (($obj->getRefacciones() != null) && ($dataLevel == 'is_refacciones')) {
                    echo '<td style="text-align: center;"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getRefacciones() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
                }


                if (($obj->getRefacciones() == null) && ($dataLevel == 'is_jefe_mantenimiento')) {
                    echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
                } else if (($obj->getRefacciones() != null) && ($dataLevel == 'is_jefe_mantenimiento')) {
                    echo '<td style="text-align: center;"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getRefacciones() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
                }




                ;


                //Permisos para agregar y modificar
                if ($dataLevel == 'is_admin') {
                    echo '<td style="text-align: center;"><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'verificacion/eliminar/' . $obj->getId() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                    echo '<td style="text-align: center;"><a title="Da clic para modificar el registro" href="' . base_url() . 'verificacion/actualizar/' . $obj->getId() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                } else if ($dataLevel == 'is_editor') {
                    echo '<td style="text-align: center;"><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'verificacion/eliminar/' . $obj->getId() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                    echo '<td style="text-align: center;"><a title="Da clic para modificar el registro" href="' . base_url() . 'verificacion/actualizar/' . $obj->getId() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                } else if ($dataLevel == 'is_refacciones') {
                    echo '<td style="text-align: center;"><a title="Da clic para modificar el registro" href="' . base_url() . 'verificacion/actualizar/' . $obj->getId() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                } else if ($dataLevel == 'is_logistica') {
                      echo '<td style="text-align: center;"><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'verificacion/eliminar/' . $obj->getId() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                    echo '<td style="text-align: center;"><a title="Da clic para modificar el registro" href="' . base_url() . 'verificacion/actualizar/' . $obj->getId() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
               
                    
                } else if ($dataLevel == 'is_credito') {
                    echo '<td style="text-align: center;"><a title="Da clic para modificar el registro" href="' . base_url() . 'verificacion/actualizar/' . $obj->getId() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                } else if ($dataLevel == 'is_mantenimiento') {
                    echo '<td style="text-align: center;"><a title="Da clic para modificar el registro" href="' . base_url() . 'verificacion/actualizar/' . $obj->getId() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                } else if ($dataLevel == 'is_jefe_mantenimiento') {
                    echo '<td style="text-align: center;"><a title="Da clic para modificar el registro" href="' . base_url() . 'verificacion/actualizar/' . $obj->getId() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                }
            }
            ?>
        </table>
    </div>








    <!-- <div class="text-center">
         <a  class="btn btn-success" href="<?= base_url('verificacion/agregar') ?>" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Catálogo">Agregar nuevo registro</a>
 
     </div>-->
</div>
</body>
</html>

