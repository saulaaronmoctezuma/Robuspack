
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
            <center>  <h1>Control SIM</h1></center>

            <div class="form-group input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                    <input type="text" id="myInput"  placeholder="Escribe para buscar..."  class="form-control" />
                     
                </div>



                <div class="alert alert-info alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Bienvenido</strong> Agrega, Modifica o Elimina sus Datos
                </div>
               
                
                 <?php
        if ($dataLevel == 'is_admin') {
            echo '<div class="text-center">';
            echo '<td><a  class="btn btn-success" href="ClienteSeguimiento/agregar") data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Seguimiento">Agregar Nuevo Registro</a></td>';
            echo '</div>';
        } else if ($dataLevel == 'is_editor') {
             echo '<div class="text-center">';
            echo '<td><a  class="btn btn-success" href="ClienteSeguimiento/agregar") data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Seguimiento">Agregar Nuevo Registro</a></td>';
            echo '</div>';
        }  else if ($dataLevel == 'is_director') {
            
        }
        
        else {
            echo '<div class="text-center">';
            echo '<td><a  class="btn btn-success" href="ClienteSeguimiento/agregar") data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Seguimiento">Agregar Nuevo Registro</a></td>';
            echo '</div>';
        }
        ?>
                <br>
       <!--  <div class="text-center">
       
             
                 <form method="post" action="<?php echo base_url(); ?>ExportarExcel/crearExcelClienteSeguimiento">

                        <button  class="btn btn-info" title="Da clic para exportar los datos a Excel" style="font-size:16px;color:white"><font color="white">Exportar</font> <i class="fa fa-file-excel-o"></i></button>
                    </form>   
         </div> -->
            
            
        </div>
        
        
        
        
        <div class="container" style="margin-top:1px;">


            <div class="table-responsive">
               
                <table  border="0" class="table table-bordered table-striped">
                    <MARQUEE SCROLLDELAY =200> </MARQUEE>


                    <thead >
                        <tr >
                            
                           
                            
                            
                            
                            
                            
                            
                            
                            
                         

                           
                            <th class="header">Cliente</th>
                            <th class="header">Nivel</th>
                            <th style="width:45px;">Necesidad</th>
                            <th class="header">Compromiso</th>
                            <th  style="width:45px;" class="header">Notas</th>

                            <th class="header">Cotización</th>
                            <th class="header">Pedido</th>
                            <th class="header">Contrato</th>


                               <?php
                            if ($dataLevel == 'is_admin') {
                                echo '<th class="header">Usuario</th>';
                            } else if ($dataLevel == 'is_editor') {
                                echo '<th class="header">Usuario</th>';
                            } else if ($dataLevel == 'is_Gerente_Ventas') {
                                
                            } 
                            else if ($dataLevel == 'is_director') {
                                echo '<th class="header">Usuario</th>';
                            } 
                            else {
                                
                            }
                            ?>

                           
                              <?php
                            if ($dataLevel == 'is_admin') {
                               
                               
                                echo '<th class="header" colspan="2" style="text-align:center;">Acción</th>';
                            } else if ($dataLevel == 'is_editor') {
                                echo '<th class="header" colspan="2" style="text-align:center;" >Acción</th>';
                               // echo '<th class="header">Fecha De Inserción</th>';
                               // echo '<th class="header">Fecha de Modificación</th>';
                            } else if ($dataLevel == 'is_maquinaria') {

                                echo '<th class="header" style="text-align:center;" colspan="1" >Modificar</th>';
                            }else if ($dataLevel == 'is_maquinaria_refacciones') {

                                echo '<th class="header" style="text-align:center;" colspan="2" >Acción</th>';
                            }  else if ($dataLevel == 'is_refacciones') {


                                echo '<th class="header" style="text-align:center;" colspan="2" >Acción</th>';
                            } else if ($dataLevel == 'is_Gerente_Ventas') {
                          
                           // echo '<th class="header">Fecha De Inserción</th>';
                             //   echo '<th class="header">Fecha de Modificación</th>';
                                  echo '<th class="header" style="text-align:center;" colspan="1" >Modificar</th>';
                       
                        } else if ($dataLevel == 'is_director') {
                          
                           // echo '<th class="header">Fecha De Inserción</th>';
                              //  echo '<th class="header">Fecha de Modificación</th>';
                        } 
                            else {
                                
                            }
                            ?>

                        </tr>
                    </thead>

<tbody id="myTable">

                    <?php
                    foreach ($clienteseguimiento as $obj) {
                        echo '<tr>';
                        
                     
                        
                      


                        
                        echo '<td>'.
                         $obj->getCliente() .
                        '</td>'
                         . '<td>'
                        . $obj->getNivel() .
                        '</td>';
                        
                        
                        
                        
               if (($obj->getNecesidad() == null)) {
        echo '<td><center><i class="fa fa-times-circle" aria-hidden="true"></i></center></td>';
    } else if (($obj->getNecesidad() != null)) {
        echo '<td title="'. $obj->getNecesidad() .
        '"><center><i class="fa fa-align-justify" aria-hidden="true"></i></center></td>';
    }
    
    
               if (($obj->getCompromiso() == null)) {
        echo '<td><center><i class="fa fa-times-circle" aria-hidden="true"></i></center></td>';
    } else if (($obj->getCompromiso() != null)) {
        echo '<td title="'. $obj->getCompromiso() .
        '"><center><i class="fa fa-align-justify" aria-hidden="true"></i></center></td>';
    }
    
    
               if (($obj->getNotas() == null)) {
        echo '<td><center><i class="fa fa-times-circle" aria-hidden="true"></i></center></td>';
    } else if (($obj->getNotas() != null)) {
        echo '<td title="'. $obj->getNotas() .
        '"><center><i class="fa fa-align-justify" aria-hidden="true"></i></center></td>';
    }
    
                               
                      
                        
                          if($obj->getCotizacion() != null) {
                              
                              
                              echo '<td><center> <a  target=”_blank”  href="' . base_url() . 'assets/clienteseguimiento/' . $obj->getCotizacion() . '"><img width="42" height="42" src="http://englishworldwide.edu.co/assets/img/check.gif" alt="Los Tejos" /></a>
                               </a></center></td>';
                            } else {
                                echo '<td><center><img height="42" width="42" src="http://rubiotarifa.es/imagenes/atencion.gif" /></center></td>';
                            }
                            
                            
                              if($obj->getPedido() != null) {
                                  
                                  echo '<td><center> <a height="42" width="42" target=”_blank”  href="' . base_url() . 'assets/clienteseguimiento/' . $obj->getPedido() . '"><img width="42" height="42" src="http://englishworldwide.edu.co/assets/img/check.gif" alt="Los Tejos" /></a>
                               </a></center></td>';
                                  
                                  
                           } else {
                                echo '<td><center><img height="42" width="42" src="http://rubiotarifa.es/imagenes/atencion.gif" /></center></td>';
                            }
                            
                            
                              if($obj->getContrato() != null) {
                                  
                                   echo '<td><center> <a  target=”_blank”  href="' . base_url() . 'assets/clienteseguimiento/' . $obj->getContrato() . '"><img width="42" height="42" src="http://englishworldwide.edu.co/assets/img/check.gif" alt="Los Tejos" /></a>
                               </a></center></td>';
                                  
                                  
                            } else {
                                echo '<td><center><img height="42" width="42" src="http://rubiotarifa.es/imagenes/atencion.gif" /></center></td>';
                           }
                            
                       

                             
                          echo '<td>';
                        if ($dataLevel == 'is_admin') {
                            echo 
                             $obj->getFirst_name() .
                            '</td>'

                            ;
                        } else if ($dataLevel == 'is_editor') {
                            echo $obj->getFirst_name() .
                            '</td>'
                            ;
                        }else if ($dataLevel == 'is_Gerente_Ventas') {
                           
                        }else if ($dataLevel == 'is_director') {
                            echo $obj->getFirst_name() .
                            '</td>'
                            ;
                        } else {
                            
                        }
                        
                           
                        //compara si es administrador
                        if ($dataLevel == 'is_admin') {
                            echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'ClienteSeguimiento/eliminar/' . $obj->getId_clienteseguimiento() . '"><button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                            echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'ClienteSeguimiento/actualizar/' . $obj->getId_clienteseguimiento() . '"><button type="button" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-edit"></button></a></td>';
                        } else if ($dataLevel == 'is_editor') {
                                 echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'ClienteSeguimiento/eliminar/' . $obj->getId_clienteseguimiento() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                            echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'ClienteSeguimiento/actualizar/' . $obj->getId_clienteseguimiento() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                       
                        }else if ($dataLevel == 'is_Gerente_Ventas') {
                                echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'ClienteSeguimiento/actualizar/' . $obj->getId_clienteseguimiento() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                        
                        }else if ($dataLevel == 'is_maquinaria') {
                                echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'ClienteSeguimiento/actualizar/' . $obj->getId_clienteseguimiento() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                        
                        }else if ($dataLevel == 'is_director') {
                            
                        }
                        
                        else {
                            echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'ClienteSeguimiento/actualizar/' . $obj->getId_clienteseguimiento() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
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
