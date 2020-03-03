<!--
 /**

 * class @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 11/10/2019 Hora 10:20 am
 */-->

-->

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
        <style>

        </style>

        <!-- Para traerse el rol que esta registrado-->
        <?php
        //check user level
        $dataLevel = $this->userlevel->checkLevel($role);


        //id del usuario
        $dataLevel_id = $this->userlevel->id($id);


        $site_title = $result->site_title;
        //check user level
        ?>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


        <!--<body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">-->
    <div class="container">
        <center>  <h1> Fu Compras</h1></center>

        <!--        <div class="alert alert-info alert-warning">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Bienvenido</strong> Agrega, Modifica o Elimina sus Datos
                </div>-->






        <?php
        if ($dataLevel == 'is_editor') {
            
        } else if ($dataLevel == 'is_admin') {
            echo '<left> <h1>Buscar</h1> </left>
        <input type="text" id="buscandoIguales" placeholder="Escribe para buscar..."  class="form-control" />
        ';
        } else if ($dataLevel == 'is_logistica') {
            
        } else if ($dataLevel == 'is_refacciones') {
            
        } else {
            
        }
        ?>












    </div>


    <?php
    if ($dataLevel == 'is_admin') {

        echo '<div class="text-center">
        <a class="btn btn-success" href="' . base_url('Fucompras/agregar') . '" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos">Agregar Nuevo Registro</a>

    </div>';
    } else if (($dataLevel == 'is_editor') && ($dataLevel_id == 4)) {
        echo '<div class="text-center">
        <a class="btn btn-success" href="' . base_url('Fucompras/agregar') . '" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos">Agregar Nuevo Registro</a>

    </div>';
    } else if ($dataLevel == 'is_logistica') {
        
    } else if ($dataLevel == 'is_credito') {
        
    } else if ($dataLevel == 'is_servicio_a_clientes') {
        
    } else {
        
    }
    ?>
    <br>
    <div class="row">
        <div class="text-center">


            <?php
            if ($dataLevel == 'is_admin') {
                /*   echo '
                  <center>  <a title="Da clic para exportar los datos en Excel" href="' . base_url() . 'ExportarExcel/crearExcelFuventas/">     <button  class="btn btn-info" title="Da clic para exportar los datos a Excel" style="font-size:15px;color:white"><font color="white">Exportar</font> <i class="fa fa-file-excel-o"></i></button>
                  </a></center>'; */
            } else if ($dataLevel == 'is_servicio_a_clientes') {
                /*  echo '
                  <center>  <a title="Da clic para exportar los datos en Excel" href="' . base_url() . 'ExportarExcel/crearExcelFuventas/">     <button  class="btn btn-info" title="Da clic para exportar los datos a Excel" style="font-size:15px;color:white"><font color="white">Exportar</font> <i class="fa fa-file-excel-o"></i></button>
                  </a></center>'; */
            }
            ?>


            <form method="post" action="<?php echo base_url(); ?>ExportarExcel/crearExcelFucompras">

                <button  class="btn btn-info" title="Da clic para exportar los datos a Excel" style="font-size:16px;thor:white"><font thor="white">Exportar</font> <i class="fa fa-file-excel-o"></i></button>
            </form> 


        </div>
    </div>

    <div class="container" style="margin-top:1px;" >

<?php
/* echo $this->session->flashdata('msg');*/
?>
        <div class="table-responsive">










            <table id="example2"  border="1" class="tablas table-bordered table-striped">
                <MARQUEE SCROLLDELAY =200> </MARQUEE>
                <thead>
                    <tr>

                        <?php
                        if ($dataLevel == 'is_admin') {
                            echo '<th  style="text-align: center" scope="th">Eliminar</th>
                                  <th  style="text-align: center" scope="th">Modificar</th>';
                        } else if (($dataLevel == 'is_editor') && ($dataLevel_id == 4)) {
                            echo '<th  style="text-align: center" scope="th">Eliminar</th>
                                  <th  style="text-align: center" scope="th">Modificar</th>';
                        } else if ($dataLevel == 'is_logistica') {
                            echo '<th  style="text-align: center" scope="th">Modificar</th>';
                        } else if ($dataLevel == 'is_credito') {
                            
                        } else if ($dataLevel == 'is_servicio_a_clientes') {
                            
                        } else {
                            
                        }
                        ?>

                        <th style="text-align: center" class="static" scope="col" width="5" heigth="5">Ref</th>
                        <th  style="text-align: center" class="first-col" scope="col">Estatus</th>
                        <th  style="text-align: center" scope="th">Compañia Importadora</th>
                        <th  style="text-align: center" scope="th">Cliente Proveedor</th>
                        <th  style="text-align: center" scope="th">Awb</th>
                        <th  style="text-align: center" scope="th">Courier </th>
                        <th  style="text-align: center" scope="th">Clave</th>
                        <th  style="text-align: center" scope="th">Tipo de producto </th>
                        <th  style="text-align: center" scope="th">Descripción </th>
                        <th  style="text-align: center" scope="th">Factura </th>
                        <th  style="text-align: center" scope="th">Imn </th>
                        <th  style="text-align: center" scope="th">OC </th>
                        <th  style="text-align: center" scope="th">Qty </th>

                        <th  style="text-align: center"scope="th">PU USD </th>
                        <th  style="text-align: center"scope="th">Total USD </th>
                        <th  style="text-align: center" scope="th">Tipo de embarque </th>
                        <th  style="text-align: center" scope="th">Tc Pedimento </th>
                        <th  style="text-align: center" scope="th">Importación por partida pz mxn</th>
                        <th  style="text-align: center" scope="th">Importación por partida pz usd</th>
                        <th  style="text-align: center"scope="th">Impx unidad</th>
                        <th  style="text-align: center" scope="th">Costo total compra usd lab qro</th>
                        <th  style="text-align: center" scope="th">Costo unitario compra usd lab qro</th>
                        <th  style="text-align: center" scope="th">Com</th>
                        <th  style="text-align: center" scope="th">Cm</th>
                        <th  style="text-align: center" scope="th">Cm c</th>
                        <th  style="text-align: center" scope="th">Ent</th>
                        <th  style="text-align: center" scope="th">Pedimento</th>
                        <th  style="text-align: center" scope="th">Fecha pedimento</th>
                        <th  style="text-align: center" scope="th">Valor aduana</th>
                        <th  style="text-align: center" scope="th">Arancel igi</th>
                        <th  style="text-align: center" scope="th">Arancel</th>
                        <th  style="text-align: center" scope="th">Dta</th>
                        <th  style="text-align: center" scope="th">Iva del pedimento</th>
                        <th  style="text-align: center" scope="th">Costo del flete mxn</th>
                        <th  style="text-align: center" scope="th">Honorarios courier</th>
                        <th  style="text-align: center" scope="th">Costo del flete usd</th>
                        <th  style="text-align: center" scope="th">Pv extra bajo ref x pz</th>
                        <th  style="text-align: center" scope="th">Utilidad refx pz</th>
                        <th  style="text-align: center" scope="th">Utilidad</th>
                        <th  style="text-align: center" scope="th">Observaciones </th>
                        <th  style="text-align: center" scope="th">Fecha pi </th>
                        <th  style="text-align: center" scope="th">Código arancelario </th>
                        <th  style="text-align: center" scope="th">Factura proveedor </th>
                        <th  style="text-align: center" scope="th">Pedimento pdf </th>
                        <th  style="text-align: center" scope="th">Honorarios importacion </th>














                    </tr>
                </thead>

                <?php
                foreach ($fucompras as $obj) {
                    echo '<tr>';
//compara si es administrador
                    if ($dataLevel == 'is_admin') {
                        echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'Fucompras/eliminar/' . $obj->getId_fucompras() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'Fucompras/actualizar/' . $obj->getId_fucompras() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    } else if (($dataLevel == 'is_editor') && ($dataLevel_id == 4)) {
                        echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'Fucompras/eliminar/' . $obj->getId_fucompras() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'Fucompras/actualizar/' . $obj->getId_fucompras() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    } else if ($dataLevel == 'is_credito') {
                        
                    } else if ($dataLevel == 'is_logistica') {
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'Fucompras/actualizar/' . $obj->getId_fucompras() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    } else if ($dataLevel == 'is_servicio_a_clientes') {
                        
                    } else if ($dataLevel == 'is_director') {
                        
                    } else {
                        
                    }

                    echo '<td class="static" scope="th">';
                    echo $obj->getRef() .
                    '</td>';


                    if ($obj->getEstatus() == "ENVIADO") {
                        echo '<td bgcolor="yellow"><font color="black">'
                        . $obj->getEstatus() .
                        '</font></td>';
                    } elseif ($obj->getEstatus() == "LIBRE") {
                        echo '<td>'
                        . $obj->getEstatus() .
                        '</td>';
                    } else if ($obj->getEstatus() == "PENDIENTE") {
                        echo '<td bgcolor="red"><font color="white">'
                        . $obj->getEstatus() .
                        '</font></td>';
                    } else if ($obj->getEstatus() == "RECIBIDO") {
                        echo '<td bgcolor="green"><font color="white">'
                        . $obj->getEstatus() .
                        '</font></td>';
                    } else if ($obj->getEstatus() == "SE ENVIO DIRECTAMENTE AL CLIENTE") {
                        echo '<td>'
                        . $obj->getEstatus() .
                        '</font></td>';
                    } else {
                        echo '<td>'
                        . $obj->getEstatus() .
                        '</font></td>';
                    }



                    echo

                    '<td>'
                    . $obj->getCompania_importadora() .
                    '</td>'
                    . '<td>'
                    . $obj->getCliente_proveedor() .
                    '</td>'
                    . '<td>'
                    . $obj->getAwb() .
                    '</td>' .
                    '<td>'
                    . $obj->getCourier() .
                    '</td>'
                    . '<td>'
                    . $obj->getClave() .
                    '</td>';



                    /* . '<td>'
                      . $obj->getFactura() .
                      '</td>' */

                    /* if ($obj->getFacturapdf() != null) {
                      echo '<td><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/fuventas/' . $obj->getFacturapdf() . '" target=”_blank” rel=”nofollow”><font color="red">' . $obj->getFactura() . '</font></a></td>';
                      } else {
                      echo '<td>'
                      . $obj->getFactura() .
                      '</td>';
                      } */

                    echo
                    '<td>'
                    . $obj->getTipo_de_prod() .
                    '</td>'
                    . '<td>'
                    . $obj->getDescripcion() .
                    '</td>' .
                    '<td>'
                    . $obj->getFactura() .
                    '</td>';


                    /* if ($obj->getPu_usd() != null) {
                      echo '<td>$'
                      . $obj->getPu_usd() .
                      '</td>';
                      } else {
                      echo '<td>'
                      . $obj->getPu_usd() .
                      '</td>';
                      } */




                    /* if ($obj->getSubtotal() != null) {
                      echo '<td>$'
                      . $obj->getSubtotal() .
                      '</td>';
                      } else {
                      echo '<td>'
                      . $obj->getSubtotal() .
                      '</td>';
                      } */




                    /* if ($obj->getIva() != null) {
                      echo '<td>$'
                      . $obj->getIva() .
                      '</td>';
                      } else {
                      echo '<td>'
                      . $obj->getIva() .
                      '</td>';
                      }
                     */


                    /*  if ($obj->getTotal_usd() != null) {
                      echo '<td>$'
                      . $obj->getTotal_usd() .
                      '</td>';
                      } else {
                      echo '<td>'
                      . $obj->getTotal_usd() .
                      '</td>';
                      } */



                    echo
                    '<td>'
                    . $obj->getImn() .
                    '</td>' .
                    '<td>'
                    . $obj->getOcv() .
                    '</td>'
                    . '<td>'
                    . $obj->getQty() .
                    '</td>'

                    ;




                    if ($obj->getPu_usd() != null) {
                        echo '<td>$'
                        . $obj->getPu_usd() .
                        '</td>';
                    } else {
                        echo '<td>'
                        . $obj->getPu_usd() .
                        '</td>';
                    }


                    if ($obj->getTotal_usd() != null) {
                        echo '<td>$'
                        . $obj->getTotal_usd() .
                        '</td>';
                    } else {
                        echo '<td>'
                        . $obj->getTotal_usd() .
                        '</td>';
                    }



                    echo
                    '<td>'
                    . $obj->getTipo_de_embarque() .
                    '</td>';

                    if ($obj->getTc_pedimento() != null) {
                        echo '<td>$'
                        . $obj->getTc_pedimento() .
                        '</td>';
                    } else {
                        echo '<td>'
                        . $obj->getTc_pedimento() .
                        '</td>';
                    }

                    /* /hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh* */

                    if ($obj->getImportacion_por_partida_pz_mxn() != null) {
                        echo '<td>$'
                        . $obj->getImportacion_por_partida_pz_mxn() .
                        '</td>';
                    } else {
                        echo '<td>'
                        . $obj->getImportacion_por_partida_pz_mxn() .
                        '</td>';
                    }


                    if ($obj->getImportacion_por_partida_pz_usd() != null) {
                        echo '<td>$'
                        . $obj->getImportacion_por_partida_pz_usd() .
                        '</td>';
                    } else {
                        echo '<td>'
                        . $obj->getImportacion_por_partida_pz_usd() .
                        '</td>';
                    }

                    if ($obj->getImpx_unidad() != null) {
                        echo '<td>$'
                        . $obj->getImpx_unidad() .
                        '</td>';
                    } else {
                        echo '<td>'
                        . $obj->getImpx_unidad() .
                        '</td>';
                    }

                    if ($obj->getCosto_total_compra_usd_lab_qro() != null) {
                        echo '<td>$'
                        . $obj->getCosto_total_compra_usd_lab_qro() .
                        '</td>';
                    } else {
                        echo '<td>'
                        . $obj->getCosto_total_compra_usd_lab_qro() .
                        '</td>';
                    }


                    if ($obj->getCosto_unitario_compra_usd_lab_qro() != null) {
                        echo '<td>$'
                        . $obj->getCosto_unitario_compra_usd_lab_qro() .
                        '</td>';
                    } else {
                        echo '<td>'
                        . $obj->getCosto_unitario_compra_usd_lab_qro() .
                        '</td>';
                    }

                    if ($obj->getCom() != null) {
                        echo '<td>'
                        . $obj->getCom() .
                        '%</td>';
                    } else {
                        echo '<td>'
                        . $obj->getCom() .
                        '</td>';
                    }

                    if ($obj->getCm() == null) {
                        echo '<td>'
                        . $obj->getCm() .
                        '</td>';
                    } else {
                        echo '<td>'
                        . $obj->getCm() .
                        '$</td>';
                    }




































                    if ($obj->getCm_c() != null) {
                        echo '<td>$'
                        . $obj->getCm_c() .
                        '</td>';
                    } else {
                        echo '<td>'
                        . $obj->getCm_c() .
                        '</td>';
                    }







                    echo '<td>'
                    . $obj->getEnt() .
                    '</td>'
                    . '<td>'
                    . $obj->getPedimento() .
                    '</td>'
                    . '<td>'
                    . $obj->getFecha_pedimento() .
                    '</td>';


                    if ($obj->getValor_aduana() != null) {
                        echo '<td>$'
                        . $obj->getValor_aduana() .
                        '</td>';
                    } else {
                        echo '<td>'
                        . $obj->getValor_aduana() .
                        '</td>';
                    }


                    if ($obj->getArancel_igi() != null) {
                        echo '<td>'
                        . $obj->getArancel_igi() .
                        '%</td>';
                    } else {
                        echo '<td>'
                        . $obj->getArancel_igi() .
                        '</td>';
                    }

                    
                    /*dcsssssssssssss*/
                    
                    
                     if ($obj->getArancel() != null) {
                        echo '<td>$'
                        . $obj->getArancel() .
                        '</td>';
                    } else {
                        echo '<td>'
                        . $obj->getArancel() .
                        '</td>';
                    }
                    
                    
                     if ($obj->getDta() != null) {
                        echo '<td>$'
                        . $obj->getDta() .
                        '</td>';
                    } else {
                        echo '<td>'
                        . $obj->getDta() .
                        '</td>';
                    }

                     if ($obj->getIva_del_pedimento() != null) {
                        echo '<td>$'
                        . $obj->getIva_del_pedimento() .
                        '</td>';
                    } else {
                        echo '<td>'
                        . $obj->getIva_del_pedimento() .
                        '</td>';
                    }

                    
                     if ($obj->getCosto_del_flete_mxn() != null) {
                        echo '<td>$'
                        . $obj->getCosto_del_flete_mxn() .
                        '</td>';
                    } else {
                        echo '<td>'
                        . $obj->getCosto_del_flete_mxn() .
                        '</td>';
                    }

                    
                     if ($obj->getHonorarios_courier() != null) {
                        echo '<td>$'
                        . $obj->getHonorarios_courier() .
                        '</td>';
                    } else {
                        echo '<td>'
                        . $obj->getHonorarios_courier() .
                        '</td>';
                    }

                    
                     if ($obj->getCosto_del_flete_usd() != null) {
                        echo '<td>$'
                        . $obj->getCosto_del_flete_usd() .
                        '</td>';
                    } else {
                        echo '<td>'
                        . $obj->getCosto_del_flete_usd() .
                        '</td>';
                    }

                     if ($obj->getPv_extra_bajo_ref_x_pz() != null) {
                        echo '<td>$'
                        . $obj->getPv_extra_bajo_ref_x_pz() .
                        '</td>';
                    } else {
                        echo '<td>'
                        . $obj->getPv_extra_bajo_ref_x_pz() .
                        '</td>';
                    }

                    
                     if ($obj->getUtilidad_refx_pz() != null) {
                        echo '<td>$'
                        . $obj->getUtilidad_refx_pz() .
                        '</td>';
                    } else {
                        echo '<td>'
                        . $obj->getUtilidad_refx_pz() .
                        '</td>';
                    }

                    
                     if ($obj->getUtilidad() != null) {
                        echo '<td>'
                        . $obj->getUtilidad() .
                        '%</td>';
                    } else {
                        echo '<td>'
                        . $obj->getUtilidad() .
                        '</td>';
                    }

                    


                    echo
                     '<td>'
                    . $obj->getObservaciones() .
                    '</td>'
                    . '<td>'
                    . $obj->getFecha_pi() .
                    '</td>'
                    . '<td>'
                    . $obj->getCodigo_arancelario() .
                    '</td>';
                    /*
                      . '<td>'
                      . $obj->getFactura_proveedor() .
                      '</td>'
                      . '<td>'
                      . $obj->getPedimentopdf() .
                      '</td>'
                      . '<td>'
                      . $obj->getHonorarios_importacion() .
                      '</td>'
                      ; */

                    //getFactura_proveedor

                    if (($obj->getFactura_proveedor() == null)) {
                        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
                    } else if (($obj->getFactura_proveedor() != null)) {
                        echo '<td style="text-align: center;color:#FF0000"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/fucompras/' . $obj->getFactura_proveedor() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
                    }

                    //getPedimentopdf

                    if (($obj->getPedimentopdf() == null)) {
                        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
                    } else if (($obj->getPedimentopdf() != null)) {
                        echo '<td style="text-align: center;color:#FF0000"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/fucompras/' . $obj->getPedimentopdf() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
                    }


                    //getHonorarios_importacion

                    if (($obj->getHonorarios_importacion() == null)) {
                        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
                    } else if (($obj->getHonorarios_importacion() != null)) {
                        echo '<td style="text-align: center;color:#FF0000"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/fucompras/' . $obj->getHonorarios_importacion() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
                    }
                }
                ?>





                <tfoot>














                </tfoot>
            </table>
        </div>








        <!-- <div class="text-center">
             <a  class="btn btn-success" href="<?= base_url('verificacion/agregar') ?>" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Catálogo">Agregar nuevo registro</a>
     
         </div>-->
    </div>
</body>
</html>

