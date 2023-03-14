<html lang="es-mx">
    <head>

        <title>Robuspack</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <!--
    /*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación
 * Fecha: 11-04-2019 10:19 am"
    Fecha: 26-06-2019 10:40 am 
    Fecha: 26-06-2019 12:40 Pm
    Fecha: 27-06-2019 11:06 Pm 
 */-->

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
        $result = $this->User_model->getAllSettings();
        $site_title = $result->site_title;
        //check user level
        ?> 


        <?php
        defined('BASEPATH') OR exit('No direct script access allowed');

        $result = $this->User_model->getAllSettings();
        $theme = $result->theme;
        ?>
        <link rel="stylesheet" href="<?php echo $theme; ?>">
        <link rel="stylesheet" href="<?php echo base_url() . 'public/css/main.css' ?>">

        <link rel="icon" href="<?= base_url('assets/images/icono.PNG') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">















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






















    </head>












    <div class="container" style="margin-top:1px;">
        <center>  <h1>BD Validada</h1></center>

        <div class="alert alert-info alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Bienvenido</strong> Agrega, Modifica o Elimina sus Datos
        </div>
        <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
            <input type="text" id="buscandoIguales" placeholder="Escribe para buscar..."  class="form-control" />
        </div>

        <div class="text-center">
            <a  class="btn btn-success" href="<?= base_url('RecoleccionDatos/agregar') ?>" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos de los Clientes">Agregar Nuevo Registro</a>
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
<div class="divTableCell">Alethia</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroEmpresaAlethia as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_alethia ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';


                echo '
<div class="divTableRow">
<div class="divTableCell">Alethia Información Compartida</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroEmpresaAlethiaExistente   as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_alethia_existente ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';
           
            
            
            

            echo '
<div class="divTableRow">
<div class="divTableCell">Fernanda</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroEmpresaBerenice   as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_berenice ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';
           
            
            
                  echo '
<div class="divTableRow">
<div class="divTableCell">Nadia</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroEmpresaNadia   as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_nadia ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';
            
            
                echo '
<div class="divTableRow">
<div class="divTableCell">Berenice</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroEmpresaBerenice as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


              0


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>'   ;

            
                      
      echo '
<div class="divTableRow">
<div class="divTableCell">Aldo</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroEmpresaAldo   as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_aldo ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';

                    
      echo '
<div class="divTableRow">
<div class="divTableCell">Karen</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroEmpresaKaren   as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_karen ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';

            
               echo '
<div class="divTableRow">
<div class="divTableCell">Saúl</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroEmpresaSaul   as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_saul ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';

            echo '
<div class="divTableRow">
<div class="divTableCell">Oscar</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroEmpresaOscar as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_oscar ?>


                <?php
                echo '</center></div>';
            }
            echo '</div></div>
</div></div></div>
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
<div class="divTableCell">Alethia</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroEmpresaAlethia as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_alethia ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';


                echo '
<div class="divTableRow">
<div class="divTableCell">Alethia Información Compartida</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroEmpresaAlethiaExistente   as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_alethia_existente ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';
           
            
            
            

            echo '
<div class="divTableRow">
<div class="divTableCell">Fernanda</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroEmpresaBerenice   as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_berenice ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';
           
            
            
                  echo '
<div class="divTableRow">
<div class="divTableCell">Nadia</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroEmpresaNadia   as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_nadia ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';
            
            
                echo '
<div class="divTableRow">
<div class="divTableCell">Berenice</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroEmpresaBerenice as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


              0


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>'   ;

            
                      
      echo '
<div class="divTableRow">
<div class="divTableCell">Aldo</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroEmpresaAldo   as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_aldo ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';

                    
      echo '
<div class="divTableRow">
<div class="divTableCell">Karen</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroEmpresaKaren   as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_karen ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';

            
               echo '
<div class="divTableRow">
<div class="divTableCell">Saúl</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroEmpresaSaul   as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_saul ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
</div>';

            echo '
<div class="divTableRow">
<div class="divTableCell">Oscar</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroEmpresaOscar as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_oscar ?>


                <?php
                echo '</center></div>';
            }
            echo '</div></div>
</div></div></div>
        ';
            
            
            
            
            
            
           
         
            
            
        }
        ?>

 </div>


    <div class="container" style="margin-top:1px;">

<?php
            if ($dataLevel == 'is_admin') {
                echo '<center>
                  <a title="Da clic para exportar los datos en Excel" href="' . base_url() . 'ExportarExcel/crearExcelEmpresaRecoleccionDatos/">     <button  class="btn btn-info" title="Da clic para exportar los datos a Excel" style="font-size:15px;color:white"><font color="white">Exportar</font> <i class="fa fa-file-excel-o"></i></button>
                   </a></center>';
            } else if ($dataLevel == 'is_editor') {
                      echo '<center>
                  <a title="Da clic para exportar los datos en Excel" href="' . base_url() . 'ExportarExcel/crearExcelEmpresaRecoleccionDatos/">     <button  class="btn btn-info" title="Da clic para exportar los datos a Excel" style="font-size:15px;color:white"><font color="white">Exportar</font> <i class="fa fa-file-excel-o"></i></button>
                   </a></center>';  
            } else if ($dataLevel == 'is_director') {
                
            }
            ?>
        <div class="table-responsive">
            <table class="table table-bordered table-striped" >
        </div>
               
        <table border = "0" class = "table table-bordered table-striped" id="example">
            <MARQUEE SCROLLDELAY = 200> </MARQUEE>
            <thead>
                <tr >
            

                   







                  
                    
                      
                    <?php
                    if ($dataLevel == 'is_maquinaria') {
                       
                    }  if ($dataLevel == 'is_Gerente_Ventas') {
                       
                    }  else {
                       
                    }
                    ?>

                      
                      
                      
                      
                      
                      
                   
                    <th style="text-align: center">Nombre de la Empresa</th>
                    <th style="text-align: center">Estado</th>
                    <th style="text-align: center">Ciudad</th>
                    <th style="text-align: center">Domicilio</th>
                    <th style="text-align: center">Nombre del Contacto</th>
                    <th style="text-align: center">Cargo</th>
                    <th style="text-align: center">Email</th>
                    <th style="text-align: center">Teléfono</th>


                    <th style="text-align: center">Nombre del Contacto </th>
                    <th style="text-align: center">Cargo</th>
                    <th style="text-align: center">Email</th>
                    <th style="text-align: center">Teléfono</th>

                      <?php
                    if ($dataLevel == 'is_freelance') {
                           
                    }else {
                         echo '<th style="text-align: center">Identificador</th>';
                    }
                    ?>

                    
                    
                    
                      <?php
                    if ($dataLevel == 'is_admin') {
                        echo ' <th style="text-align: center">Vendedor</th>
                   
                      
                      ';
                    } else if ($dataLevel == 'is_editor') {
                        echo ' <th style="text-align: center">Vendedor</th>
                   
                     
                      ';
                    } else if ($dataLevel == 'is_logistica') {
                        echo ' <th style="text-align: center">Vendedor</th>
                    
                     
                      ';
                    }else if ($dataLevel == 'is_director') {
                        echo ' <th style="text-align: center">Vendedor</th>
                  
                     
                      ';
                    } else if ($dataLevel == 'is_maquinaria') {
                        echo ' 
                  
                     
                      ';
                    }else if ($dataLevel == 'is_maquinaria') {
                        echo ' 
                  
                     
                      ';
                    } else {
                        
                    }
                    ?>
            
            
                 <?php
                    if ($dataLevel == 'is_admin') {
                        echo  '<th class="header" style="text-align: center">Usuario</th>';
                    } else if ($dataLevel == 'is_editor') {
                        echo '<th class="header" style="text-align: center">Usuario</th>';
                    } 
                    
                    ?>

 <?php
                    if ($dataLevel == 'is_admin') {
                        echo '<th class="header" style="text-align: center">Eliminar</th>'
                        . '<th class="header" style="text-align: center">Modificar</th>';
                        
                    } else if ($dataLevel == 'is_editor') {
                        echo '<th class="header" style="text-align: center">Eliminar</th>'
                        . '<th class="header" style="text-align: center">Modificar</th>';
                    } else if ($dataLevel == 'is_credito') {
                        echo '<th class="header" style="text-align: center">Modificar</th>';
                    } else if ($dataLevel == 'is_logistica') {
                        echo '<th class="header" style="text-align: center">Modificar</th>';
                    } else if ($dataLevel == 'is_consultor') {
                        
                        
                        
                        echo '
                                     <th class="header" style="text-align: center">Modificar</th>';
                    }else if ($dataLevel == 'is_servicio_a_clientes') {
                        echo '<th class="header" style="text-align: center">Modificar</th>';
                    }else if ($dataLevel == 'is_refacciones') {
                        echo '<th class="header" style="text-align: center">Modificar</th>';
                    }else if ($dataLevel == 'is_maquinaria') {
                        echo '<th class="header" style="text-align: center">Modificar</th>';
                    }else if ($dataLevel == 'is_Gerente_Ventas') {
                        echo '<th class="header" style="text-align: center">Modificar</th>';
                    }else if ($dataLevel == 'is_freelance') {
                        echo '<th class="header" style="text-align: center">Modificar</th>';
                    }else {
                        
                    }
                    ?>


                </tr>
            </thead>
            <tbody align="center">


                <?php
                foreach ($recolecciondatos as $obj) {
                    echo '<tr>';



                   


                   



                   

                    
                    
                      

                    
                    
                    
                    
                    
                    
                       
                    


                    echo  '<td>' .
                    $obj->getNombre_empresa() .
                    '</td>'
                    . '<td>'
                    . $obj->getEstado() .
                    '</td>'
                    . '<td>'
                    . $obj->getCiudad() .
                    '</td>'
                    . '<td>'
                    . $obj->getDomicilio() .
                    '</td>'
                    . '<td>'
                    . $obj->getNombre() .
                    '</td>'
                    . '<td>'
                    . $obj->getCargo() .
                    '</td>'
                    . '<td>'
                    . $obj->getEmail() .
                    '</td>'
                    . '<td>'
                    . $obj->getTel() .
                    '</td>'
                    . '<td>'
                    . $obj->getNombre2() .
                    '</td>'
                    . '<td>'
                    . $obj->getCargo2() .
                    '</td>'
                    . '<td>'
                    . $obj->getEmail2() .
                    '</td>'
                    . '<td>'
                    . $obj->getTel2() .
                    '</td>'

                    ;
                    
                    
                    
                    
                    
                    
                    
                   
                        //compara si es administrador
                        if ($dataLevel == 'is_freelance') {
                            
                        } else {
                            echo '<td>' .
                            $obj->getIdentificador() .
                            '</td>';
                        }

                    
                     //compara si es administrador
                    if ($dataLevel == 'is_admin') {
                         echo '<td>'. $obj->getVendedor() .
                    '</td>'
                   
                     ;
                    } else if ($dataLevel == 'is_editor') {
                           echo '<td>'. $obj->getVendedor() .
                    '</td>'
                   
                     ;
                    } else if ($dataLevel == 'is_logistica') {
                           echo '<td>'. $obj->getVendedor() .
                    '</td>'
                  
                     ;
                    }
                      //compara si es administrador
                    if ($dataLevel == 'is_admin') {
                         echo '<td>';
                        echo $obj->getFirst_name() .
                        '</td>';
                    } else if ($dataLevel == 'is_editor') {
                         echo '<td>';
                        echo $obj->getFirst_name() .
                                
                        '</td>';
                    } 
                    
                    
                    
                     //compara si es administrador
                    if ($dataLevel == 'is_admin') {
                        echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'RecoleccionDatos/eliminar/' . $obj->getId_recolecion_datos() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'RecoleccionDatos/obtener/' . $obj->getId_recolecion_datos() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    } else if ($dataLevel == 'is_editor') {
                        echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'RecoleccionDatos/eliminar/' . $obj->getId_recolecion_datos() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'RecoleccionDatos/obtener/' . $obj->getId_recolecion_datos() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    } else if ($dataLevel == 'is_credito') {
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'RecoleccionDatos/obtener/' . $obj->getId_recolecion_datos() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    } else if ($dataLevel == 'is_logistica') {
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'RecoleccionDatos/obtener/' . $obj->getId_recolecion_datos() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    }else if ($dataLevel == 'is_consultor') {
                         echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'RecoleccionDatos/obtener/' . $obj->getId_recolecion_datos() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                        
                    }else if ($dataLevel == 'is_servicio_a_clientes') {
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'RecoleccionDatos/obtener/' . $obj->getId_recolecion_datos() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    }else if ($dataLevel == 'is_refacciones') {
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'RecoleccionDatos/obtener/' . $obj->getId_recolecion_datos() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    }else if ($dataLevel == 'is_maquinaria') {
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'RecoleccionDatos/obtener/' . $obj->getId_recolecion_datos() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    }else if ($dataLevel == 'is_Gerente_Ventas') {
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'RecoleccionDatos/obtener/' . $obj->getId_recolecion_datos() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    }else if ($dataLevel == 'is_freelance') {
                            echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'RecoleccionDatos/obtener/' . $obj->getId_recolecion_datos() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                        }     else {
                        
                    }


                
                
                }
                
                ?>
                </tr>
            </tbody>
        </table>


    </div> 
</div>

</div>
</body>
</html>
