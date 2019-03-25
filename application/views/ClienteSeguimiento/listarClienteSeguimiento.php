
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



        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css">-->

    </head>

    <body>
        
        
        <div class="container" style="margin-top:1px;">
            <center>  <h1>Control SIC</h1></center>





                <div class="alert alert-info alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Bienvenido</strong> Agrega, Modifica o Elimina sus Datos
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                    <input type="text" id="buscandoIguales" placeholder="Escribe para buscar..."  class="form-control" />
                </div>
                
                 <?php
        if ($dataLevel == 'is_admin') {
            echo '<div class="text-center">';
            echo '<td><a  class="btn btn-success" href="ClienteSeguimiento/agregar") data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Seguimiento">Agregar Nuevo Registro</a></td>';
            echo '</div>';
        } else if ($dataLevel == 'is_editor') {
            
        }  else if ($dataLevel == 'is_director') {
            
        }
        
        else {
            echo '<div class="text-center">';
            echo '<td><a  class="btn btn-success" href="ClienteSeguimiento/agregar") data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Seguimiento">Agregar Nuevo Registro</a></td>';
            echo '</div>';
        }
        ?>
                <br>
         <div class="text-center">
       
             
                 <form method="post" action="<?php echo base_url(); ?>ExportarExcel/crearExcelClienteSeguimiento">

                        <button  class="btn btn-info" title="Da clic para exportar los datos a Excel" style="font-size:16px;color:white"><font color="white">Exportar</font> <i class="fa fa-file-excel-o"></i></button>
                    </form>   
         </div> 
            
            
        </div>
        
        
        
        
        <div class="container" style="margin-top:1px;">


            <div class="table-responsive">
               
                <table  border="0" class="table table-bordered table-striped">
                    <MARQUEE SCROLLDELAY =200> </MARQUEE>


                    <thead >
                        <tr >
                            

                            <?php
                            if ($dataLevel == 'is_admin') {
                                echo '<th class="header">Usuario</th>';
                            } else if ($dataLevel == 'is_editor') {
                                echo '<th class="header">Usuario</th>';
                            } else if ($dataLevel == 'is_Gerente_Ventas') {
                                echo '<th class="header">Usuario</th>';
                            } 
                            else if ($dataLevel == 'is_director') {
                                echo '<th class="header">Usuario</th>';
                            } 
                            else {
                                
                            }
                            ?>

                            <th class="header">Grupo</th>
                            <th class="header">Cliente</th>
                            <th class="header">Prioridad</th>
                            <th class="header">Estatus</th>
                            <th class="header">Necesidad</th>
                            <th class="header">Fecha de Cotización</th>
                            <th class="header">Archivo</th>

                            <th class="header">Fecha a Contactar</th>
                            <th class="header">Compromiso</th>
                            <th class="header">Notas</th>




                            <?php
                            if ($dataLevel == 'is_admin') {
                               
                                echo '<th class="header">Fecha De Inserción</th>';
                                echo '<th class="header">Fecha de Modificación</th>';
                                echo '<th class="header" colspan="2" >Acción</th>';
                            } else if ($dataLevel == 'is_editor') {

                                echo '<th class="header">Fecha De Inserción</th>';
                                echo '<th class="header">Fecha de Modificación</th>';
                            } else if ($dataLevel == 'is_maquinaria') {

                                echo '<th class="header" colspan="2" >Acción</th>';
                            }else if ($dataLevel == 'is_maquinaria_refacciones') {

                                echo '<th class="header" colspan="2" >Acción</th>';
                            }  else if ($dataLevel == 'is_refacciones') {


                                echo '<th class="header" colspan="2" >Acción</th>';
                            } else if ($dataLevel == 'is_Gerente_Ventas') {
                          
                            echo '<th class="header">Fecha De Inserción</th>';
                                echo '<th class="header">Fecha de Modificación</th>';
                            
                        } else if ($dataLevel == 'is_director') {
                          
                            echo '<th class="header">Fecha De Inserción</th>';
                                echo '<th class="header">Fecha de Modificación</th>';
                            
                        } 
                            else {
                                
                            }
                            ?>


                        </tr>
                    </thead>



                    <?php
                    foreach ($clienteseguimiento as $obj) {
                        echo '<tr><td>';
                        
                        if ($dataLevel == 'is_admin') {
                            echo 
                             $obj->getFirst_name() .
                            '</td>'. '<td>'

                            ;
                        } else if ($dataLevel == 'is_editor') {
                            echo $obj->getFirst_name() .
                            '</td>'.
                                   '<td>'
                            ;
                        }else if ($dataLevel == 'is_Gerente_Ventas') {
                            echo $obj->getFirst_name() .
                            '</td>'.
                                   '<td>'
                            ;
                        }else if ($dataLevel == 'is_director') {
                            echo $obj->getFirst_name() .
                            '</td>'.
                                   '<td>'
                            ;
                        } else {
                            
                        }


                        
                        echo 
                         $obj->getGrupo() .
                        '</td>'
                        . '<td>'
                        . $obj->getCliente() .
                        '</td>'
                        . '<td>'
                        . $obj->getPrioridad() .
                        '</td>'
                        . '<td>'
                        . $obj->getEstatus() .
                        '</td>'
                        . '<td>'
                        . $obj->getNecesidad() .
                        '</td>'
                        . '<td>'
                        . $obj->getFecha_cotizacion() .
                        '</td>';
                        
                          if($obj->getArchivo1() != null) {
                                echo '<td width="250px"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/bitacora/' . $obj->getArchivo1() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
                            } else {
                                echo '<td>Sin Archivo</td>';
                            }
                            
                        echo '<td>'
                        . $obj->getFecha_contactar() .
                        '</td>'
                        . '<td>'
                        . $obj->getCompromiso() .
                        '</td>'
                        . '<td>'
                        . $obj->getNotas() .
                        '</td>'

                        ;



                        if ($dataLevel == 'is_admin') {
                            echo'<td>'
                            . $obj->getFecha_insercion() .
                            '</td>'
                            . '<td>'
                            . $obj->getFecha_modificacion() .
                            '</td>';
                        } else if ($dataLevel == 'is_editor') {
                            echo
                            '<td>'
                            . $obj->getFecha_insercion() .
                            '</td>'
                            . '<td>'
                            . $obj->getFecha_modificacion() .
                            '</td>';
                        }else if ($dataLevel == 'is_Gerente_Ventas') {
                            echo'<td>'
                            . $obj->getFecha_insercion() .
                            '</td>'
                            . '<td>'
                            . $obj->getFecha_modificacion() .
                            '</td>';
                         
                        }else if ($dataLevel == 'is_director') {
                            echo'<td>'
                            . $obj->getFecha_insercion() .
                            '</td>'
                            . '<td>'
                            . $obj->getFecha_modificacion() .
                            '</td>';
                         
                        }
                        else {
                            
                        }



                        //compara si es administrador
                        if ($dataLevel == 'is_admin') {
                            echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'ClienteSeguimiento/eliminar/' . $obj->getId_clienteseguimiento() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                            echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'ClienteSeguimiento/obtener/' . $obj->getId_clienteseguimiento() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                        } else if ($dataLevel == 'is_editor') {
                            
                        }else if ($dataLevel == 'is_Gerente_Ventas') {
                            
                        }else if ($dataLevel == 'is_director') {
                            
                        }
                        
                        else {
                            echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'ClienteSeguimiento/obtener/' . $obj->getId_clienteseguimiento() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                        }

                        //echo "<td><a href='" . base_url() . "ClienteSeguimiento/eliminar/" . $obj->getId_clienteseguimiento() . "'>Elimina</a></td>";
                        //  echo "<td><a href=" . base_url() . "ClienteSeguimiento/obtener/" . $obj->getId_clienteseguimiento() . ">Actualizar</a></td>";
                    }
                    ?>
                    </tr>
                    </tbody>
                </table>


            </div> 
        </div>
       
    </div>


    </div>
</body>
</html>
