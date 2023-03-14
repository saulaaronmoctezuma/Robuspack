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
        <link rel="icon" href="<?= base_url('assets/images/robuspack_icon.png') ?>">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $theme; ?>">
        <link rel="stylesheet" href="<?php echo base_url() . 'public/css/main.css' ?>">

        <!-- Pregunta al dar clic a eliminar-->
        <script type="text/javascript">
            function confirma() {
                if (confirm("¿ Realmente desea eliminarlo?")) {

                } else {
                    return false
                }
            }
        </script>


        <!--<script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script>
            $(document).ready(function() {
                $(".hidediv").click(function() {
                    $(".divdemo").hide("slow");
                });

                $(".showdiv").click(function() {
                });
                    $(".divdemo").show(2000);

            });

        </script>-->
        
         <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script>
            $(document).ready(function() {
                $(".hidediv").click(function() {
                    $(".divdemo").hide("slow");
                });

                $(".showdiv").click(function() {
                    $(".divdemo").show(2000);
                });

            });

        </script>
        <style>
            .divTable,divTableBody{

                background-color:#0780BA;
                color:#fff;
                padding:100px;
                font-size:25px;
            }
            /* DivTable.com */
            .divTable{
                display: table;
                width: 100%;
            }
            .divTableRow {
                display: table-row;
            }
            .divTableHeading {
                background-color: #EEE;
                display: table-header-group;
            }
            .divTableCell, .divTableHead {
                border: 1px solid #999999;
                display: table-cell;
                padding: 3px 10px;
            }
            .divTableHeading {
                background-color: #EEE;
                display: table-header-group;
                font-weight: bold;
            }
            .divTableFoot {
                background-color: #EEE;
                display: table-footer-group;
                font-weight: bold;
            }
            .divTableBody {
                display: table-row-group;
            }

        </style>



        <!-- Para traerse el rol que esta registrado-->
        <?php
        //check user level
        $dataLevel = $this->userlevel->checkLevel($role);
        $idSession = $this->session->userdata['id'];
        $site_title = $result->site_title;
        //check user level
        ?>




    <div class="container" style="margin-top:1px;">


        <div class="table-responsive">

            <center>  <h1>Bitácora</h1></center>

            <div class="alert alert-info alert-info">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Bienvenido</strong> Agrega, Modifica o Elimina sus Datos
            </div>
            <!--<div class="form-group input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                <input type="text" id="myInput" placeholder="Escribe para buscar..."  class="form-control" />
            </div>-->



            <div class="text-center">
                <form method="post" action="<?php echo base_url(); ?>BitacoraMtto/agregar">
                    <input type="submit" name="agregar"  title="Da clic para agregar un nuevo registro" class="btn btn-success" value="Agregar Nuevo Registro" />
                </form>
                <br>

                <!--<form method="post" action="<?php echo base_url(); ?>ExportarExcel/crearExcelRefacciones">

                    <button  class="btn btn-info" title="Da clic para exportar los datos a Excel" style="font-size:16px;color:white"><font color="white">Exportar</font> <i class="fa fa-file-excel-o"></i></button>
                </form>   -->


            </div>

        </div>











        <?php
        if ($dataLevel == 'is_admin') {
            echo '
    <p><button class="hidediv">Ocultar Registros</button>
<button class="showdiv">Mostrar Registros</button>
</p>    
   
     
     <div class="divdemo" style="display: none">
<div class="divTableBody">
<div class="divTableRow">
<div class="divTableCell" style="background-color:#17202A;"><strong><p style="color:#FFFFFF";>Usuario</p></strong></div>
<div class="divTableCell" style="background-color:#17202A;"><strong><p style="color:#FFFFFF";>Registros</p></strong></div>
</div>
<div class="divTableRow">
<div class="divTableCell">Alejandro</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroBitacoraMantenimientoAlejandro as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_alejandro ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';



            echo '
<div class="divTableRow">
<div class="divTableCell">Carlos</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroBitacoraMantenimientoCarlos as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_carlos ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';





            echo '
<div class="divTableRow">
<div class="divTableCell">Jorge</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroBitacoraMantenimientoJorge as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_jorge ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';




            echo '
<div class="divTableRow">
<div class="divTableCell">Miguel</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroBitacoraMantenimientoMiguel as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_miguel ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';



            echo '
<div class="divTableRow">
<div class="divTableCell">Isael</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroBitacoraMantenimientoPablo as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_pablo ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';


            echo '
<div class="divTableRow">
<div class="divTableCell">Rodrigo</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroBitacoraMantenimientoRodrigo as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_rodrigo ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';





            echo '
<div class="divTableRow">
<div class="divTableCell">Noé</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroBitacoraMantenimientoVeronica as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_veronica ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';



            echo '
<div class="divTableRow">
<div class="divTableCell">Vicente</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroBitacoraMantenimientoVicente as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_vicente ?>


                <?php
                echo '</center></div>';
            }
            echo '</div></div>
</div>';


            echo '</div></div>
        ';
        } else if ($dataLevel == 'is_editor') {
            echo '
    <p><button class="hidediv">Ocultar Registros</button>
<button class="showdiv">Mostrar Registros</button>
</p>    
   
     
     <div class="divdemo" style="display: none">
<div class="divTableBody">
<div class="divTableRow">
<div class="divTableCell" style="background-color:#17202A;"><strong><p style="color:#FFFFFF";>Usuario</p></strong></div>
<div class="divTableCell" style="background-color:#17202A;"><strong><p style="color:#FFFFFF";>Registros</p></strong></div>
</div>
<div class="divTableRow">
<div class="divTableCell">Alejandro</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroBitacoraMantenimientoAlejandro as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_alejandro ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';



            echo '
<div class="divTableRow">
<div class="divTableCell">Carlos</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroBitacoraMantenimientoCarlos as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_carlos ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';





            echo '
<div class="divTableRow">
<div class="divTableCell">Jorge</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroBitacoraMantenimientoJorge as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_jorge ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';




            echo '
<div class="divTableRow">
<div class="divTableCell">Miguel</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroBitacoraMantenimientoMiguel as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_miguel ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';



            echo '
<div class="divTableRow">
<div class="divTableCell">Pablo</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroBitacoraMantenimientoPablo as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_pablo ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';


            echo '
<div class="divTableRow">
<div class="divTableCell">Rodrigo</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroBitacoraMantenimientoRodrigo as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_rodrigo ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';





            echo '
<div class="divTableRow">
<div class="divTableCell">Verónica</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroBitacoraMantenimientoVeronica as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_veronica ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';



            echo '
<div class="divTableRow">
<div class="divTableCell">Vicente</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroBitacoraMantenimientoVicente as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_vicente ?>


                <?php
                echo '</center></div>';
            }
            echo '</div></div>
</div>';


            echo '</div></div>
        ';
        } else if ($dataLevel == 'is_jefe_mantenimiento') {
            echo '
    <p><button class="hidediv">Ocultar Registros</button>
<button class="showdiv">Mostrar Registros</button>
</p>    
   
     
     <div class="divdemo" style="display: none">
<div class="divTableBody">
<div class="divTableRow">
<div class="divTableCell" style="background-color:#17202A;"><strong><p style="color:#FFFFFF";>Usuario</p></strong></div>
<div class="divTableCell" style="background-color:#17202A;"><strong><p style="color:#FFFFFF";>Registros</p></strong></div>
</div>
<div class="divTableRow">
<div class="divTableCell">Alejandro</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroBitacoraMantenimientoAlejandro as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_alejandro ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';



            echo '
<div class="divTableRow">
<div class="divTableCell">Carlos</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroBitacoraMantenimientoCarlos as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_carlos ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';





            echo '
<div class="divTableRow">
<div class="divTableCell">Jorge</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroBitacoraMantenimientoJorge as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_jorge ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';




            echo '
<div class="divTableRow">
<div class="divTableCell">Miguel</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroBitacoraMantenimientoMiguel as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_miguel ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';



            echo '
<div class="divTableRow">
<div class="divTableCell">Isael</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroBitacoraMantenimientoPablo as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_pablo ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';


            echo '
<div class="divTableRow">
<div class="divTableCell">Rodrigo</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroBitacoraMantenimientoRodrigo as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_rodrigo ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';





            echo '
<div class="divTableRow">
<div class="divTableCell">Verónica</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroBitacoraMantenimientoVeronica as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_veronica ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';



            echo '
<div class="divTableRow">
<div class="divTableCell">Vicente</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroBitacoraMantenimientoVicente as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_vicente ?>


                <?php
                echo '</center></div>';
            }
            echo '</div></div>
</div>';


            echo '</div></div>
        ';
        }
        ?>
        <div class="container" style="margin-top:1px;">


            <div class="table-responsive">



                <table class="table table-hover table-bordered table-striped" id="example" >
                    <MARQUEE SCROLLDELAY =200> </MARQUEE>



                    <thead>
                        <tr>
                            <th style="text-align: center">Visualizar PDF</th>

                            <!--<th class="header" colspan="2" style="text-align: center" >Acción</th>-->
                            
                            
                            
                            
                            
                            <?php
                            if ($dataLevel == 'is_servicio_a_clientes') {
                               
                            }else if ($dataLevel == 'is_mantenimiento') {
                               echo '<th class="header" colspan="1" style="text-align: center" >Modificar</th>';

                            }else if ($dataLevel == 'is_jefe_mantenimiento') {
                               echo '<th class="header" colspan="1" style="text-align: center" >Modificar</th>';

                            }   else {
                                echo '<th class="header" colspan="1" style="text-align: center" >Eliminar</th>';
                                echo '<th class="header" colspan="1" style="text-align: center" >Modificar</th>';
                                 

                                
                             
                                
                            }
                            ?>
                            
                            
                            
                            
                            
                            <?php
                            if ($dataLevel == 'is_admin') {
                                echo '<th class="header">Usuario</th>';
                            } else if ($dataLevel == 'is_jefe_mantenimiento') {
                                echo '<th class="header">Usuario</th>';

                                
                            } else if ($dataLevel == 'is_mantenimiento') {
                                echo '<th class="header">Usuario</th>';

                                
                            }else if ($dataLevel == 'is_editor') {
                                echo '<th class="header">Usuario</th>';
                            }
                            
                             else if ($dataLevel == 'is_servicio_a_clientes') {
                                echo '<th class="header">Usuario</th>';
                            }else if ($dataLevel == 'is_refacciones') {
                                echo '<th class="header">Usuario</th>';
                            }else {
                                
                            }
                            ?>

                            <th style="text-align: center">Cliente</th>
                            <th style="text-align: center">Modelo</th>
                            <th style="text-align: center">Maquina</th>
                            <th style="text-align: center">Fecha</th>
                            <th style="text-align: center">Motivo de asistencia</th>
                            <th style="text-align: center">Tipo</th>
                            <th style="text-align: center">Mantenimiento</th>
                            <th style="text-align: center">Consecutivo</th>
                            <!--<th>Descripción de Actividades Efectuadas</th>-->
                            <th style="text-align: center">Refacciones Usadas </th>



                            <th style="text-align: center">Refacciones Recomendadas</th>

                            <th style="text-align: center">Capacitación</th>
                            <th style="text-align: center">Aceptación Capacitación</th>
                            <th style="text-align: center">Recomendaciones</th>
                            <th style="text-align: center">Próxima Fecha de Intervención</th>
                            <th style="text-align: center">Foto</th>


                        </tr>
                    </thead>
                    <tbody align="center" id="myTable">



                        <?php
                        foreach ($bitacora_mtto as $obj) {




                            echo '<tr>';

                            echo '<td> <br>    <a target="_blank" title="Descargar la ficha técnica en PDF" href="' . base_url() . 'Reporte/pdfBitacoraMantenimiento/' . $obj->getId_bitacora() . '"  ><center><i style="font-size:18px;color:red" class="fa fa-file-pdf-o"></i><br>
                           <FONT COLOR="black"> '. $obj->getId_bitacora() .'</font>
                            </center></a></td>
				
				';
                            //compara si es administrador
                            if ($dataLevel == 'is_admin') {
                                echo '<td ><a  title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'BitacoraMtto/eliminar/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                                echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'BitacoraMtto/actualizar/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                            } else if ($dataLevel == 'is_jefe_mantenimiento') {
                               //echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'BitacoraMtto/eliminar/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                                echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'BitacoraMtto/actualizar/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                            } else if ($dataLevel == 'is_mantenimiento') {
                                 if($obj->getIdUsuario()===$idSession){
                                echo '<td colspan="1"><a title="Da clic para modificar el registro" href="' . base_url() . 'BitacoraMtto/actualizar/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                            }else{ 
                                  echo '<td colspan="1" style="background-color:red" ><span title="No puede modificar, por que este registro no pertenece a su perfil" style="font-size:18px;color:white" class="glyphicon glyphicon-remove"></td>';   
                               
                                
                            }
                            } else if ($dataLevel == 'is_maquinaria_refacciones') {
                                echo '<td ><a title="Da clic para modificar el registro" href="' . base_url() . 'BitacoraMtto/actualizar/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                            } else if ($dataLevel == 'is_editor') {
                                echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'BitacoraMtto/eliminar/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                                echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'BitacoraMtto/actualizar/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                            }


                            if ($dataLevel == 'is_admin') {
                                echo '<td>'
                                . $obj->getFirst_name() .
                                '</td>';
                            } else if ($dataLevel == 'is_jefe_mantenimiento') {
                                echo '<td>'
                                . $obj->getFirst_name() .
                                '</td>';
                            } else if ($dataLevel == 'is_mantenimiento') {
                                 echo '<td>'
                                . $obj->getFirst_name() .
                                '</td>';
                            }else if ($dataLevel == 'is_servicio_a_clientes') {
                                echo '<td>'
                                . $obj->getFirst_name() .
                                '</td>';
                            } else if ($dataLevel == 'is_editor') {
                                echo '<td>'
                                . $obj->getFirst_name() .
                                '</td>';
                            }else if ($dataLevel == 'is_refacciones') {
                                echo '<td>'
                                . $obj->getFirst_name() .
                                '</td>';
                            };
                            echo '<td>' . $obj->getPlanta() .
                            '</td>'
                            . '<td>'
                            . $obj->getModelo() .
                            '</td>'
                            . '<td>'
                            . $obj->getMaquina() .
                            '</td>'
                            . '<td>'
                            . $obj->getFecha() .
                            '</td>'
                            . '<td>'
                            . $obj->getMotivo_asistencia() .
                            '</td>'
                            . '<td>'
                            . $obj->getTipo() .
                            '</td>'
                            . '<td>'
                            . $obj->getMantenimiento() .
                            '</td>'
                            . '<td>'
                            . $obj->getConsecutivo() .
                            '</td>';






                            // . '<td>'
                            //. $obj->getDes_acti() .
                            // '</td>'
                            echo '<td>'
                            . $obj->getRef_usadas1() . ' ' .
                            $obj->getRef_usadas2() . ' ' .
                            $obj->getRef_usadas3() . ' ' .
                            $obj->getRef_usadas4() . ' '
                            . $obj->getRef_usadas5() . ' '
                            . $obj->getRef_usadas6() . ' '
                            . $obj->getRef_usadas7() . ' '
                            . $obj->getRef_usadas8() . ' '
                            . $obj->getRef_usadas9() . ' '
                            . $obj->getRef_usadas10() . ' '
                            . $obj->getRef_usadas11() . ' '
                            . $obj->getRef_usadas12() . ' '
                            . $obj->getRef_usadas13() . ' '
                            . $obj->getRef_usadas14() . ' '
                            . $obj->getRef_usadas15() . ' '
                            . $obj->getRef_usadas16() . ' '
                            . $obj->getRef_usadas17() . ' '
                            . $obj->getRef_usadas18() . ' '
                            . $obj->getRef_usadas19() . ' '
                            . $obj->getRef_usadas20() . ' '
                            . $obj->getRef_usadas21() . ' '
                            . $obj->getRef_usadas23() . ' '
                            . $obj->getRef_usadas24() . ' '
                            . $obj->getRef_usadas25() . ' '
                            . $obj->getRef_usadas26() . ' '
                            . $obj->getRef_usadas27() . ' '
                            . $obj->getRef_usadas28() . ' '
                            . $obj->getRef_usadas29() . ' '
                            . $obj->getRef_usadas30() .
                            '</td>'
                            . '<td>'
                            . $obj->getRef_recomen1() . ' '
                            . $obj->getRef_recomen2() . ' '
                            . $obj->getRef_recomen3() . ' '
                            . $obj->getRef_recomen4() . ' '
                            . $obj->getRef_recomen5() . ' '
                            . $obj->getRef_recomen6() . ' '
                            . $obj->getRef_recomen7() . ' '
                            . $obj->getRef_recomen8() . ' '
                            . $obj->getRef_recomen9() . ' '
                            . $obj->getRef_recomen10() . ' '
                            . $obj->getRef_recomen11() . ' '
                            . $obj->getRef_recomen12() . ' '
                            . $obj->getRef_recomen13() . ' '
                            . $obj->getRef_recomen14() . ' '
                            . $obj->getRef_recomen15() . ' '
                            . $obj->getRef_recomen16() . ' '
                            . $obj->getRef_recomen18() . ' '
                            . $obj->getRef_recomen19() . ' '
                            . $obj->getRef_recomen20() . ' '
                            . $obj->getRef_recomen21() . ' '
                            . $obj->getRef_recomen22() . ' '
                            . $obj->getRef_recomen23() . ' '
                            . $obj->getRef_recomen24() . ' '
                            . $obj->getRef_recomen25() . ' '
                            . $obj->getRef_recomen26() . ' '
                            . $obj->getRef_recomen27() . ' '
                            . $obj->getRef_recomen28() . ' '
                            . $obj->getRef_recomen29() . ' '
                            . $obj->getRef_recomen30() .
                            '</td>'
                            . '<td>'
                            . nl2br($obj->getCapacitacion()) .
                            '</td>'
                            . '<td>'
                            . nl2br($obj->getAceptacion_capacitacion()) .
                            '</td>';
                            
                            
/*                            . '<td>'
                            . nl2br($obj->getRecomendaciones()) .
                            '</td>'
                            . '<td>'
                            . $obj->getProxima_inter() .
                            '</td>'
                            
                            ;*/
                            
                            
                            
                           if (($obj->getRecomendaciones() == null)) {
            echo '<td title="Sin recomendaciones"><center><i style="font-size:12px;color:red" class="fa fa-times-circle" aria-hidden="true"></i></center></td>';
    } else if (($obj->getRecomendaciones() != null)) {
      ?>
         
            <td>
            <center> <a title="Da clic para ver las recomendaciones" data-toggle="modal" data-target="#myModalRecomendaciones<?php echo $obj->getId_bitacora() ?>"><i style="font-size:20px;color:#06A405" class="fa fa-comments-o    "></i></center>

     <div class="modal fade" id="myModalRecomendaciones<?php echo $obj->getId_bitacora() ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabelMtto">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
    <center>           <a title="Da clic para regresar" style="color:#000000" href="<?php echo site_url(); ?>BitacoraMtto">             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</a></center>
            
            <h4 class="modal-title" id="myModalLabelMtto">Recomendaciones</h4>
          </div>
          <div class="modal-body">
           
            <?php echo $obj->getRecomendaciones() ?>
          </div>
          <div class="modal-footer">
              <center>           <a title="Da clic para regresar" style="color:#000000" href="<?php echo site_url(); ?>BitacoraMtto">             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><font size="3">Cerrar</font></button>
</a></center>
          </div>
        </div>
      </div>
    </div>
    
    
    </td>
           
         
                    <?php
                    
                    }
                      
                       
                    
                    
                    
                     
                          
                            
                            
           
            
                 if (($obj->getProxima_inter() == null)) {
            echo '<td title="No tiene agregado la Próxima Fecha de Intervención"><center><i style="font-size:12px;color:red" class="fa fa-times-circle" aria-hidden="true"></i></center></td>';
    } else if (($obj->getProxima_inter() != null)) {
      ?>
         
            <td>
            <center> <a title="Da clic para ver las recomendaciones" data-toggle="modal" data-target="#myModalC1Proxima_inter<?php echo $obj->getId_bitacora() ?>"><i style="font-size:20px;color:#06A405" class="fa fa-comments-o    "></i></center>

     <div class="modal fade" id="myModalC1Proxima_inter<?php echo $obj->getId_bitacora() ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabelMtto">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
    <center>           <a title="Da clic para regresar" style="color:#000000" href="<?php echo site_url(); ?>BitacoraMtto">             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</a></center>
            
            <h4 class="modal-title" id="myModalLabelMtto">Próxima Fecha de Intervención</h4>
          </div>
          <div class="modal-body">
           
            <?php echo $obj->getProxima_inter() ?>
          </div>
          <div class="modal-footer">
              <center>           <a title="Da clic para regresar" style="color:#000000" href="<?php echo site_url(); ?>BitacoraMtto">             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><font size="3">Cerrar</font></button>
</a></center>
          </div>
        </div>
      </div>
    </div>
    
    
    </td>
           
         
                    <?php
                    
                    }
                           
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            if (($obj->getFoto() == null)) {
        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
    } else if (($obj->getFoto() != null)) {
        echo '<td style="text-align: center;color:#FF0000"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/bitacora_mtto/' . $obj->getFoto() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-download-alt	
"></button></a></td>';
    }
                        }
                        ?>



                </table>


        </body>
        </html>

            </div> 
        </div>



        <br>





