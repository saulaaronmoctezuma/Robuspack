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
        <style>
  table{
    table-layout: fixed;
    width: 250px;
}

th, td {
    border: 1px solid blue;
    width: 100px;
    word-wrap: break-word;
}


</style>


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
table{
    table-layout: fixed;
    width: 250px;
}

th, td {
    border: 1px solid blue;
    width: 100px;
    word-wrap: break-word;
}
        </style>
    </head>


    <head>
    <div class="container" style="margin-top:1px;">

        <br>    
     
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <div class="table-responsive">
            <center>  <h1>Bitácora Refacciones</h1></center>

            <div class="alert alert-info alert-info">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Bienvenido</strong> Agrega, Modifica o Elimina sus Datos
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                <input type="text" id="buscandoIguales" placeholder="Escribe para buscar..."  class="form-control" />
            </div>

            <div class="text-center">
                <a  class="btn btn-success" href="<?= base_url('BitacoraRefacciones/agregar') ?>" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos de las Bitacoras">Agregar nuevo registro</a>
            </div>
            
               <?php
        if ($dataLevel == 'is_admin') {
            echo '
    <p><button class="hidediv ">Ocultar Registros</button>
<button class="showdiv">Mostrar Registros</button>
</p>    
   
     
     <div class="divdemo" style="display:none";>    
<div class="divTableBody">
<div class="divTableRow">
<div class="divTableCell" style="background-color:#17202A;"><strong><p style="color:#FFFFFF";>Usuario</p></strong></div>
<div class="divTableCell" style="background-color:#17202A;"><strong><p style="color:#FFFFFF";>Registros</p></strong></div>
</div>
<div class="divTableRow">
<div class="divTableCell">Aldo</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroBitacoraAldo as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_aldo ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';



//            echo '
//<div class="divTableRow">
//<div class="divTableCell">Martin</div>
//<div class="divTableCell"> ';
//
//            foreach ($totalRegistroBitacoraElvira as $fila) {
//
//                echo '<div class="grid_12" id="cuerpo"><center>';
//                /*
            


//                echo '</center></div>';
//            }
//            echo '</div>
//</div>';





            echo '
<div class="divTableRow">
<div class="divTableCell">Martín</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroBitacoraElvira as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_elvira ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';





        


            echo '</div></div>
        ';
        } else if ($dataLevel == 'is_editor') {
            
     echo '
    <p><button class="hidediv">Ocultar Registros</button>
<button class="showdiv">Mostrar Registros</button>
</p>    
   
     
     <div class="divdemo" style="display:none";>    
<div class="divTableBody">
<div class="divTableRow">
<div class="divTableCell" style="background-color:#17202A;"><strong><p style="color:#FFFFFF";>Usuario</p></strong></div>
<div class="divTableCell" style="background-color:#17202A;"><strong><p style="color:#FFFFFF";>Registros</p></strong></div>
</div>
<div class="divTableRow">
<div class="divTableCell">Aldo</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroBitacoraAldo as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_aldo ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';



//            echo '
//<div class="divTableRow">
//<div class="divTableCell">Martin</div>
//<div class="divTableCell"> ';
//
//            foreach ($totalRegistroBitacoraElvira as $fila) {
//
//                echo '<div class="grid_12" id="cuerpo"><center>';
//                /*
            


//                echo '</center></div>';
//            }
//            echo '</div>
//</div>';





            echo '
<div class="divTableRow">
<div class="divTableCell">Martín</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroBitacoraElvira as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_elvira ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';





        


            echo '</div></div>
        ';



           




        }
        ?>
        
        
            <BR>
            <table  border="2" class="table table-bordered table-striped" table="example" >
                <MARQUEE SCROLLDELAY =200> </MARQUEE>


                <thead >
                    <tr >
                        <?php
                        if ($dataLevel == 'is_Gerente_Ventas') {
                            echo '<th class="header">Usuario</th>';
                        } else {
                            
                        }
                        ?>
                        <!--<th class>Id</th>-->
                        <th>Grupo</th>
                        <th>Cliente</th>
                        <th >Descripción</th>

                        <th class="header" style="text-align: center">Archivo</th>
                         
                        

                        <?php
                        if ($dataLevel == 'is_admin') {
                              echo '<th class="header">Observación</th>';
                            echo '<th class="header">Usuario</th>';
                            echo '<th class="header">Fecha de Inserción</th>';
                            echo '<th class="header">Fecha de Modificación</th>';
                            echo '<th class="header" colspan="2" >Acción</th>';
                            
                           
                        } else if ($dataLevel == 'is_editor') {

                            echo '<th class="header">Usuario</th>';
                            echo '<th class="header">Fecha de Inserción</th>';
                            echo '<th class="header">Fecha de Modificación</th>';
                           
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        } else if ($dataLevel == 'is_director') {

                            echo '<th class="header">Usuario</th>';
                            echo '<th class="header">Fecha De Inserción</th>';
                            echo '<th class="header">Fecha de Modificación</th>';
                        } else if ($dataLevel == 'is_maquinaria') {

                            echo '<th class="header" >Acción</th>';
                        } else if ($dataLevel == 'is_refacciones') {
echo '<th class="header">Observación</th>';

                            echo '<th class="header" style="text-align: center">Acción</th>';
                        } else if ($dataLevel == 'is_Gerente_Ventas') {
 echo '<th class="header">Observación</th>';
                            echo '<th class="header">Fecha De Inserción</th>';
                            echo '<th class="header">Fecha de Modificación</th>';
                            echo '<th class="header" >Retroalimentación</th>';
                          
                        } else {
                            
                        }
                        ?>





                    </tr>
                </thead>

                <tbody align="center">

                    <?php
                    foreach ($bitacora as $obj) {
                        echo '<tr><td>';
                        if ($dataLevel == 'is_Gerente_Ventas') {
                            echo $obj->getFirst_name() .
                            '</td>' .
                            '<td>'
                            ;
                        } else {
                            
                        }

                        echo //$obj->getId_bitacora() .
                        //'</td>'
                        //. '<td>'
                        //.
                        $obj->getGrupo() .
                        '</td>'
                        . '<td>'
                        . $obj->getCliente() .
                        '</td>';
                        
                        
                                          if (($obj->getDescripcion() == null)) {
        echo '<td><center><i class="fa fa-times-circle" aria-hidden="true"></i></center></td>';
    } else if (($obj->getDescripcion() != null)) {
        echo '<td title="'. $obj->getDescripcion() .
        '"><center><i class="fa fa-align-justify" aria-hidden="true"></center></i></td>';
    }
            



                        if ($obj->getArchivo1() != null) {
                            echo '<td width="250px"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/bitacora_refacciones/' . $obj->getArchivo1() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
                        } else {
                            echo '<td><font color="red">Sin Archivo</td></font>';
                        }

                         if (($dataLevel == 'is_admin') &&   ($obj->getObservacion() != null)) {
                            echo '<td>'. $obj->getObservacion() .'</td>';
                        } else if ($dataLevel == 'is_admin' and $obj->getObservacion() == null){
                            echo '<td><font color="red">Sin Observación</font></td>';
                        }
                        
                         if (($dataLevel == 'is_Gerente_Ventas') &&   ($obj->getObservacion() != null)) {
                            echo '<td>'. $obj->getObservacion() .'</td>';
                        } else if ($dataLevel == 'is_Gerente_Ventas' and $obj->getObservacion() == null){
                            echo '<td><font color="red">Sin Observación</font></td>';
                        }
                        
                        
                         
                         if (($dataLevel == 'is_refacciones') &&   ($obj->getObservacion() != null)) {
                            echo '<td>'. $obj->getObservacion() .'</td>';
                        } else if ($dataLevel == 'is_refacciones' and $obj->getObservacion() == null){
                            echo '<td><font color="red">Sin Observación</font></td>';
                        }
                        
                        
                        
                       
                        if ($dataLevel == 'is_admin') {
                            echo '<td>'
                            . $obj->getFirst_name() .
                            '</td>'
                            . '<td>'
                            . $obj->getFecha_insercion() .
                            '</td>'
                            . '<td>'
                            . $obj->getFecha_modificar() .
                            '</td>';
                        } else if ($dataLevel == 'is_editor') {
                            echo '<td>'
                            . $obj->getFirst_name() .
                            '</td>'
                            . '<td>'
                            . $obj->getFecha_insercion() .
                            '</td>'
                            . '<td>'
                            . $obj->getFecha_modificar() .
                            '</td>';
                        } else if ($dataLevel == 'is_Gerente_Ventas') {
                            echo '<td>'
                            . $obj->getFecha_insercion() .
                            '</td>'
                            . '<td>'
                            . $obj->getFecha_modificar() .
                            '</td>';
                            ;
                        } else if ($dataLevel == 'is_director') {
                            echo '<td>'
                            . $obj->getFirst_name() .
                            '</td>'
                            . '<td>'
                            . $obj->getFecha_insercion() .
                            '</td>'
                            . '<td>'
                            . $obj->getFecha_modificar() .
                            '</td>';
                            
                        } else {
                            
                        }

                        



                        //compara si es administrador
                        if ($dataLevel == 'is_admin') {
                            echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'BitacoraRefacciones/eliminar/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                            echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'BitacoraRefacciones/actualizar/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-comment"></button></a></td>';
                        } else if ($dataLevel == 'is_editor') {
                            
                        } else if ($dataLevel == 'is_Gerente_Ventas') {
                            echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'BitacoraRefacciones/actualizar/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-comment"><span class="glyphicon glyphicon-comment"></button></a></td>';
                        } else if ($dataLevel == 'is_director') {
                            
                        } else {
                            echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'BitacoraRefacciones/actualizar/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                        }
                    }
                    ?>
                    </tr    >
                </tbody>
            </table>


        </div> 



    </body>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script>
 // Write on keyup event of keyword input element
 $(document).ready(function(){
 $("#buscandoIguales").keyup(function(){
 _this = this;
 // Show only matching TR, hide rest of them
 $.each($("#example tbody tr"), function() {
 if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
 $(this).hide();
 else
 $(this).show();
 });
 });
});
</script>
</html>
