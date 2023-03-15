<!--
/**

 * class @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 00/00/0000 Hora 00:00 am/pm
 * Sistema de Control Robuspack
 */
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

        $site_title = $result->site_title;
        //check user level
        ?>
    

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

   
    <!--<body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">-->
    <div class="container">
        <center>  <h1> Fu V Servicio</h1></center>
       
<!--        <div class="alert alert-info alert-warning">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Bienvenido</strong> Agrega, Modifica o Elimina sus Datos
        </div>-->






        <?php
        if ($dataLevel == 'is_editor') {
            
        } else if ($dataLevel == 'is_admin') {
               echo '<left> <h1>Buscar</h1> </left>
<<<<<<< HEAD
        <input type="text" id="myInput" placeholder="Escribe para buscar..."  class="form-control" />
=======
        <input type="text" id="buscandoIguales" placeholder="Escribe para buscar..."  class="form-control" />
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        ';
        } else if ($dataLevel == 'is_logistica') {
            
        } else if ($dataLevel == 'is_refacciones') {
            
        } else {
         
        }
        ?>












    </div>
    <br> 

    <?php
    if ($dataLevel == 'is_admin') {

        echo '<div class="text-center">
        <a class="btn btn-success" href="' . base_url('Fuvservicio/agregar') . '" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Catálogo">Agregar Nuevo Registro</a>

    </div>';
    } else if ($dataLevel == 'is_editor') {

    } else if ($dataLevel == 'is_logistica') {

    } else if ($dataLevel == 'is_credito') {
        
    } else if ($dataLevel == 'is_servicio_a_clientes') {
        echo '<div class="text-center">
        <a  class="btn btn-success" href="' . base_url('Fuvservicio/agregar') . '" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Catálogo">Agregar Nuevo Registro</a>

    </div>';
    } else {
        
    }
    ?>
    
     <div class="row">
        <div class="text-center">


            <?php
            if ($dataLevel == 'is_admin') {
                /*echo '
                <center>  <a title="Da clic para exportar los datos en Excel" href="' . base_url() . 'ExportarExcel/crearExcelFuvservicio/">     <button  class="btn btn-info" title="Da clic para exportar los datos a Excel" style="font-size:15px;color:white"><font color="white">Exportar</font> <i class="fa fa-file-excel-o"></i></button>
                   </a></center>';*/
            } else if ($dataLevel == 'is_servicio_a_clientes') {
               /* echo '
                <center>  <a title="Da clic para exportar los datos en Excel" href="' . base_url() . 'ExportarExcel/crearExcelFuvservicio/">     <button  class="btn btn-info" title="Da clic para exportar los datos a Excel" style="font-size:15px;color:white"><font color="white">Exportar</font> <i class="fa fa-file-excel-o"></i></button>
                   </a></center>';*/
            }
            ?>
            <br>

            <form method="post" action="<?php echo base_url(); ?>ExportarExcel/crearExcelFuvservicio">

                <button  class="btn btn-info" title="Da clic para exportar los datos a Excel" style="font-size:16px;thor:white"><font thor="white">Exportar</font> <i class="fa fa-file-excel-o"></i></button>
            </form>  


        </div>
    </div>
    <div class="container" style="margin-top:1px;" >


        <div class="table-responsive">









            <table id="example"  border="1" class="tablas table-bordered table-striped">
                <MARQUEE SCROLLDELAY =200> </MARQUEE>
                <thead>
                    <tr>
                        
                        <?php
                        if ($dataLevel == 'is_admin') {
                            echo '<th  style="text-align: center" scope="th">Eliminar</th>
                                  <th  style="text-align: center" scope="th">Modificar</th>';
                        } else if ($dataLevel == 'is_editor') {
                            } else if ($dataLevel == 'is_logistica') {
                            
                        } else if ($dataLevel == 'is_credito') {
                                 
                        } else if ($dataLevel == 'is_servicio_a_clientes') {
                                echo '<th  style="text-align: center" scope="th">Eliminar</th>
                                  <th  style="text-align: center" scope="th">Modificar</th>';
                        } else {
                            
                        }
                        ?>

                        <th style="text-align: center" class="static" scope="col" width="5" heigth="5">Ref</th>
                        <th  style="text-align: center" class="first-col" scope="col">Cliente</th>
                        <th  style="text-align: center" scope="th">Dirección</th>
<<<<<<< HEAD
=======
                        <th  style="text-align: center" scope="th">Referencia</th>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        <th  style="text-align: center" scope="th">Código</th>
                        <th  style="text-align: center" scope="th">Tipo de Producto </th>
                        <th  style="text-align: center" scope="th">Descripcion del Producto </th>
                        <th  style="text-align: center" scope="th">Factura</th>
                       <!-- <th  style="text-align: center" scope="th">Remisión </th>
                        <th  style="text-align: center" scope="th">Fecha de remisión </th>-->
                        <th  style="text-align: center" scope="th">Orden de compra </th>
                        <th  style="text-align: center" scope="th">Cantidad </th>
                        <th  style="text-align: center" scope="th">Pu USD </th>
                        <th  style="text-align: center" scope="th">Subtotal </th>
                        <th  style="text-align: center"scope="th">IVA </th>
                        <th  style="text-align: center"scope="th">Total USD </th>
                        <th  style="text-align: center"scope="th">Fecha </th>
                      <!--  <th  style="text-align: center" scope="th">Pedimento </th>
                        <th  style="text-align: center" scope="th">Fecha de pedimento </th>-->
                        <th  style="text-align: center" scope="th">Dias de credito </th>
                        <th  style="text-align: center" scope="th">Fecha de vencimiento </th>
                        <th  style="text-align: center"scope="th">Fecha de pago</th>
                        <th  style="text-align: center" scope="th">Status de pago </th>
                        <th  style="text-align: center" scope="th">Refacturación </th>
                        <th  style="text-align: center" scope="th">Nueva </th>
                        <th  style="text-align: center" scope="th">Observación </th>
                        <th  style="text-align: center" scope="th">Vendedor </th>
                        <th  style="text-align: center" scope="th">Fecha de cobro de comisiones </th>

                        














                    </tr>
                </thead>
<<<<<<< HEAD
   <tbody id="myTable">
=======

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                <?php
                foreach ($Fuvservicio as $obj) {
                    echo '<tr>';
//compara si es administrador
                    if ($dataLevel == 'is_admin') {
                        echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'Fuvservicio/eliminar/' . $obj->getId_fuvservicio() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'Fuvservicio/actualizar/' . $obj->getId_fuvservicio() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    } else if ($dataLevel == 'is_editor') {
                    } else if ($dataLevel == 'is_credito') {
                   } else if ($dataLevel == 'is_logistica') {
                        
                    } else if ($dataLevel == 'is_servicio_a_clientes') {
                        echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'Fuvservicio/eliminar/' . $obj->getId_fuvservicio() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'Fuvservicio/actualizar/' . $obj->getId_fuvservicio() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    } else if ($dataLevel == 'is_director') {
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'Fuvservicio/actualizar/' . $obj->getId_fuvservicio() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    } else {
                        
                    }

                    echo '<td class="static" scope="th">';
                    echo $obj->getRef() .
                    '</td>'
                    . '<td class="first-th" scope="th">'
                    . $obj->getCliente() .
                    '</td>'
                    . '<td>'
                    . $obj->getDireccion() .
                    '</td>'
<<<<<<< HEAD
=======
                     . '<td>'
                    . $obj->getReferencia() .
                    '</td>'     
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    . '<td>'
                    . $obj->getCodigo() .
                    '</td>' .
                    '<td>'
                    . $obj->getTipo_de_prod() .
                    '</td>'
                    . '<td>'
                    . $obj->getRfc() .
                    '</td>';
                    
                     if ($obj->getFacturapdf() != null) {
                            echo '<td><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/fuvservicio/' . $obj->getFacturapdf() . '" target=”_blank” rel=”nofollow”><font color="red">'.$obj->getFactura().'</font></a></td>';
                        } else {
                            echo '<td>'
                    . $obj->getFactura() .
                    '</td>';
                        } 
                            
                 
                    
                    echo '<td>'
                    . $obj->getOrden_compra() .
                    '</td>' .
                    '<td>'
                    . $obj->getCantidad() .
                    '</td>';
                    
                    
                    if ($obj->getPu_usd() != null) {
                          echo '<td>$'
                    . $obj->getPu_usd() .
<<<<<<< HEAD
                    '</td>';} else {
=======
                    '</td>';} 
                    else {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            echo '<td>'
                    . $obj->getPu_usd() .
                    '</td>';
                        } 
                        
                        
                        
                        
                        if ($obj->getSubtotal() != null) {
                         echo '<td>$'
                    . $obj->getSubtotal() .
                    '</td>';} else {
                            echo '<td>'
                    . $obj->getSubtotal() .
                    '</td>';
                        } 
                        
                        
                        
                        
                        if ($obj->getIva() != null) {
                          echo '<td>$'
                    . $obj->getIva() .
                    '</td>';} else {
                            echo '<td>'
                    . $obj->getIva() .
                    '</td>';
                        } 
                        
                        
                        
                        if ($obj->getTotal_usd() != null) {
                         echo '<td>$'
                    . $obj->getTotal_usd() .
                    '</td>';} else {
                            echo '<td>'
                    . $obj->getTotal_usd() .
                    '</td>';
                        } 
                        
                    
                    echo
                     '<td>'
                    . $obj->getFecha() .
                    '</td>' .
                   
                    '<td>'
                    . $obj->getDias_de_credito() .
                    '</td>'
                    . '<td>'
                    . $obj->getFecha_vencimiento() .
                    '</td>' .
                    '<td>'
                    . $obj->getFecha_de_pago() .
                    '</td>';
                    
                    
                      if ($obj->getStatus_de_pago() == "Pagado") {
                        echo '<td bgcolor="blue"><font color="white">'
                        . $obj->getStatus_de_pago() .
                        '</font></td>';
                    } elseif ($obj->getStatus_de_pago() == "PAGADO") {
                        echo '<td bgcolor="blue"><font color="white">'
                        . $obj->getStatus_de_pago() .
                        '</font></td>';
                    } else if ($obj->getStatus_de_pago() == "Vencido") {
                        echo '<td bgcolor="red"><font color="white">'
                        . $obj->getStatus_de_pago() .
                        '</font></td>';
                    } else if ($obj->getStatus_de_pago() == "VENCIDO") {
                        echo '<td bgcolor="red"><font color="white">'
                        . $obj->getStatus_de_pago() .
                        '</font></td>';
                    } else {
                        echo '<td>'
                        . $obj->getStatus_de_pago() .
                        '</td>';
                    }

                    
                    
                    echo
                    
                     '<td>'
                    . $obj->getRefacturacion() .
                    '</td>'
                    . '<td>'
                    . $obj->getNueva() .
                    '</td>'
                    . '<td>'
                    . $obj->getObservaciones() .
                    '</td>'
                    . '<td>'
                    . $obj->getVendedor() .
                    '</td>'
                    . '<td>'
                    . $obj->getFecha_de_cobro_de_comisiones() .
                    '</td>'
                    ;

                    
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

