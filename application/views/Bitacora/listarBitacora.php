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

        <!-- Para traerse el rol que esta registrado-->
        <?php
        //check user level
        $dataLevel = $this->userlevel->checkLevel($role);

        $site_title = $result->site_title;
        //check user level
        ?>

    </head>


    <head>
    <div class="container" style="margin-top:1px;">


        <div class="table-responsive">
            <center>  <h1>Bitácora Maquinaria</h1></center>

            <div class="alert alert-info alert-info">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Bienvenido</strong> Agrega, Modifica o Elimina sus Datos
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                <input type="text" id="buscandoIguales" placeholder="Escribe para buscar..."  class="form-control" />
            </div>

            <div class="text-center">
                <a  class="btn btn-success" href="<?= base_url('Bitacora/agregar') ?>" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos de las Bitacoras">Agregar nuevo registro</a>
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
<div class="divTableCell">Gerardo</div>
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


';

         
            echo '
';





        


            echo '</div></div>
        ';
        } else if ($dataLevel == 'is_editor') {
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
<div class="divTableCell">Gerardo</div>
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


';

         
            echo '
';



            echo '</div></div>
        ';
           




        }
        ?>
        
            <BR>
            <table  border="0" class="table table-bordered table-striped">
                <MARQUEE SCROLLDELAY =200> </MARQUEE>


                <thead >
                    <tr >
                        
                        <!--<th class>Id</th>-->
                        <th class="header" style="text-align: center">Grupo</th>
                        <th class="header" style="text-align: center">Cliente</th>
                        <th class="header" style="text-align: center;width:250px;">Descripción</th>

                        <th class="header" style="text-align: center">Archivo</th>
                         
                        

                        <?php
                        if ($dataLevel == 'is_admin') {
                           
                            echo '<th class="header">Usuario</th>';
                            echo '<th class="header">Fecha de Inserción</th>';
                            echo '<th class="header">Fecha de Modificación</th>';
                            echo '<th class="header" colspan="2" style="text-align: center">Acción</th>';
                            
                           
                        } else if ($dataLevel == 'is_editor') {

                            echo '<th class="header">Usuario</th>';
                            echo '<th class="header">Fecha de Inserción</th>';
                            echo '<th class="header">Fecha de Modificación</th>';
                           
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        } else if ($dataLevel == 'is_director') {

                            echo '<th class="header">Usuario</th>';
                            echo '<th class="header">Fecha De Inserción</th>';
                            echo '<th class="header">Fecha de Modificación</th>';
                        } else if ($dataLevel == 'is_maquinaria') {

                            echo '<th class="header" colspan="2" >Acción</th>';
                        }  else {
                            
                        }
                        ?>





                    </tr>
                </thead>

                <tbody align="center">

                    <?php
                    foreach ($bitacora as $obj) {
                        echo '<tr><td>';
                       

                        echo //$obj->getId_bitacora() .
                        //'</td>'
                        //. '<td>'
                        //.
                        $obj->getGrupo() .
                        '</td>'
                        . '<td>'
                        . $obj->getCliente() .
                        '</td>'
                        . '<td>'
                        . $obj->getDescripcion() .
                        '</td>'

                                    

                        ;



                        if ($obj->getArchivo1() != null) {
                            echo '<td width="250px"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/bitacora/' . $obj->getArchivo1() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
                        } else {
                            echo '<td><font color="red">Sin Archivo</font></td>';
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
                            echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'Bitacora/eliminar/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                            echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'Bitacora/actualizar/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-comment"></button></a></td>';
                        } else if ($dataLevel == 'is_editor') {
                            
                        } else if ($dataLevel == 'is_director') {
                            
                        } else {
                            echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'Bitacora/actualizar/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                        }
                    }
                    ?>
                    </tr    >
                </tbody>
            </table>


        </div> 



    </body>
</html>
