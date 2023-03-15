
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


<<<<<<< HEAD
       <?php
//check user level
$dataLevel = $this->userlevel->checkLevel($role);

$dataLevel_id = $this->userlevel->id($id);
$result = $this->User_model->getAllSettings();
$site_title = $result->site_title;
//check user level
?>
=======
        <!-- Para traerse el rol que esta registrado-->
        <?php
        //check user level
        $dataLevel = $this->userlevel->checkLevel($role);

        $site_title = $result->site_title;
        //check user level
        ?>

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606


        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css">-->

    </head>

    <body>


        <div class="container" style="margin-top:1px;">
            <center>  <h1>Control SIM </h1><h4>(Sistema Integral Máquinaria)</h4></center>

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
            } else if ($dataLevel == 'is_director') {
                
            } else {
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

<<<<<<< HEAD
                <table id="example"  border="0" class="table table-bordered table-striped">
=======
                <table  border="0" class="table table-bordered table-striped">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    <MARQUEE SCROLLDELAY =200> </MARQUEE>


                    <thead >
                        <tr >













                            <th class="header">Cliente</th>
                            <th class="header">Nivel</th>
                            <th class="header">Modelo Máquina</th>
                            <th class="header">Num Máquina  </th>
                            <th class="header">Valor Cotización  </th>
                            <th class="header">Último Visita  </th>

                            <th style="width:45px;">Necesidad</th>
                            <th class="header">Compromiso</th>
                            <th  style="width:45px;" class="header">Notas</th>

                            <th class="header">Cotización</th>
                            <th class="header">Pedido</th>
                            <th class="header">Contrato</th>
<<<<<<< HEAD
                            
                            <th class="header">Fecha prospeccion </th>
                            <th class="header">Llamadas del Cliente </th>
                            <th class="header"> Fecha contactó el_cliente</th>
                            <th class="header">5 Llamadas Hechas</th>
=======
                            <th class="header">Fecha prospeccion </th>
                            <th class="header">Llamadas Cliente </th>
                            <th class="header"> Fecha contacto cliente</th>
                            <th class="header"> Llamadas Hechas</th>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            <th class="header">Fecha Ultima LLamada </th>
                            <th class="header"> Numero de visitas</th>
                            <th class="header">¿Venta Cerrada? </th>
                            <th class="header">¿Es cliente asignado? </th>
                            <th class="header">¿Es cliente nuevo? </th>
<<<<<<< HEAD
=======
                            
                            
                            
                            
                            
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606


                            <?php
                            if ($dataLevel == 'is_admin') {
                                echo '<th class="header">Usuario</th>';
                            } else if ($dataLevel == 'is_editor') {
                                echo '<th class="header">Usuario</th>';
                            } else if ($dataLevel == 'is_Gerente_Ventas') {
<<<<<<< HEAD
                                echo '<th class="header">Usuario</th>';
=======
                                
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            } else if ($dataLevel == 'is_director') {
                                echo '<th class="header">Usuario</th>';
                            } else {
                                
                            }
                            ?>


                            <?php
                            if ($dataLevel == 'is_admin') {


<<<<<<< HEAD
                                echo '<th class="header" style="text-align:center;">Eliminar</th>';
                                 echo '<th class="header" colspan="1" style="text-align:center;">Modificar</th>';
                            } else if ($dataLevel == 'is_editor') {
                                  echo '<th class="header" style="text-align:center;">Eliminar</th>';
                                 echo '<th class="header" colspan="1" style="text-align:center;">Modificar</th>';
=======
                                echo '<th class="header" colspan="2" style="text-align:center;">Acción</th>';
                            } else if ($dataLevel == 'is_editor') {
                                echo '<th class="header" colspan="2" style="text-align:center;" >Acción</th>';
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                // echo '<th class="header">Fecha De Inserción</th>';
                                // echo '<th class="header">Fecha de Modificación</th>';
                            } else if ($dataLevel == 'is_maquinaria') {

                                echo '<th class="header" style="text-align:center;" colspan="1" >Modificar</th>';
                            } else if ($dataLevel == 'is_maquinaria_refacciones') {

                                echo '<th class="header" style="text-align:center;" colspan="2" >Acción</th>';
                            } else if ($dataLevel == 'is_refacciones') {


                                echo '<th class="header" style="text-align:center;" colspan="2" >Acción</th>';
                            } else if ($dataLevel == 'is_Gerente_Ventas') {

                                // echo '<th class="header">Fecha De Inserción</th>';
                                //   echo '<th class="header">Fecha de Modificación</th>';
                                echo '<th class="header" style="text-align:center;" colspan="1" >Modificar</th>';
                            } else if ($dataLevel == 'is_director') {

                                // echo '<th class="header">Fecha De Inserción</th>';
                                //  echo '<th class="header">Fecha de Modificación</th>';
                            } else {
                                
                            }
                            ?>

                        </tr>
                    </thead>

                    <tbody id="myTable">

                        <?php
                        foreach ($clienteseguimiento as $obj) {
                            echo '<tr>';







                            echo '<td>' .
                            $obj->getCliente() .
                            '</td>'
                            . '<td>'
                            . $obj->getNivel() .
                            '</td>' .
                            '<td>'
                            . $obj->getModelo_maquina() .
                            '</td>' .
                            '<td>'
                            . $obj->getNumero_maquina() .
                            '</td>' .
                            '<td>' .
                            $obj->getValor_cotizacion() .
                            '</td>'
                            .'<td>' .
                            $obj->getFecha_ultima_visita() .
                            '</td>'
                            ;




                            /*   if (($obj->getNecesidad() == null)) {
                              echo '<td><center><i class="fa fa-times-circle" aria-hidden="true"></i></center></td>';
                              } else if (($obj->getNecesidad() != null)) {
                              echo '<td title="'. $obj->getNecesidad() .
                              '"><center><i class="fa fa-align-justify" aria-hidden="true"></i></center></td>';
                              } */
                            ?>




                            <!--Inicio Modal modalNecesidad --> 

                            <?php
                            if (($obj->getNecesidad() == null)) {
                                echo '<td title="Sin Comentario"><center><i style="font-size:12px;color:red" class="fa fa-times-circle" aria-hidden="true"></i></center></td>';
                            } else if (($obj->getNecesidad() != null)) {
                                ?>

                            <td>
                            <center> <a title="Da clic para ver la necesidad" data-toggle="modal" data-target="#modalNecesidad<?php echo $obj->getId_clienteseguimiento() ?>"><i style="font-size:20px;color:#06A405" class="fa fa-comments-o    "></i></center>

                            <div class="modal fade" id="modalNecesidad<?php echo $obj->getId_clienteseguimiento() ?>" tabindex="-1" role="dialog" aria-labelledby="modalNecesidad">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <center>           <a title="Da clic para regresar" style="color:#000000" href="<?php echo site_url(); ?>BitacoraRefacciones">             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </a></center>

                                            <h4 class="modal-title" id="modalNecesidad">Necesidad</h4>
                                        </div>
                                        <div class="modal-body">

                                            <?php echo $obj->getNecesidad() ?>
                                        </div>
                                        <div class="modal-footer">
                                            <center>           <a title="Da clic para regresar" style="color:#000000" href="<?php echo site_url(); ?>ClienteSeguimiento">             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><font size="3">Cerrar</font></button>
                                                </a></center>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            </td>


                            <?php
                        }

                        //Fin Modal modalNecesidad
                        //Inicio Modal modalCompromiso  


                        if (($obj->getCompromiso() == null)) {
                            echo '<td title="Sin Comentario"><center><i style="font-size:12px;color:red" class="fa fa-times-circle" aria-hidden="true"></i></center></td>';
                        } else if (($obj->getCompromiso() != null)) {
                            ?>

                            <td>
                            <center> <a title="Da clic para ver la necesidad" data-toggle="modal" data-target="#modalCompromiso<?php echo $obj->getId_clienteseguimiento() ?>"><i style="font-size:20px;color:#06A405" class="fa fa-comments-o    "></i></center>

                            <div class="modal fade" id="modalCompromiso<?php echo $obj->getId_clienteseguimiento() ?>" tabindex="-1" role="dialog" aria-labelledby="modalNecesidad">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <center>           <a title="Da clic para regresar" style="color:#000000" href="<?php echo site_url(); ?>BitacoraRefacciones">             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </a></center>

                                            <h4 class="modal-title" id="modalCompromiso">Compromiso</h4>
                                        </div>
                                        <div class="modal-body">

                                            <?php echo $obj->getCompromiso() ?>
                                        </div>
                                        <div class="modal-footer">
                                            <center>           <a title="Da clic para regresar" style="color:#000000" href="<?php echo site_url(); ?>ClienteSeguimiento">             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><font size="3">Cerrar</font></button>
                                                </a></center>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            </td>


                            <?php
                        }

                        //Fin Modal modalCompromiso

                        /* if (($obj->getCompromiso() == null)) {
                          echo '<td><center><i class="fa fa-times-circle" aria-hidden="true"></i></center></td>';
                          } else if (($obj->getCompromiso() != null)) {
                          echo '<td title="' . $obj->getCompromiso() .
                          '"><center><i class="fa fa-align-justify" aria-hidden="true"></i></center></td>';
                          } */


                        /* if (($obj->getNotas() == null)) {
                          echo '<td><center><i class="fa fa-times-circle" aria-hidden="true"></i></center></td>';
                          } else if (($obj->getNotas() != null)) {
                          echo '<td title="' . $obj->getNotas() .
                          '"><center><i class="fa fa-align-justify" aria-hidden="true"></i></center></td>';
                          }
                         */
                        //Inicio Modal getNotas  


                        if (($obj->getNotas() == null)) {
                            echo '<td title="Sin Comentario"><center><i style="font-size:12px;color:red" class="fa fa-times-circle" aria-hidden="true"></i></center></td>';
                        } else if (($obj->getNotas() != null)) {
                            ?>

                            <td>
                            <center> <a title="Da clic para ver la necesidad" data-toggle="modal" data-target="#modalNotas<?php echo $obj->getId_clienteseguimiento() ?>"><i style="font-size:20px;color:#06A405" class="fa fa-comments-o    "></i></center>

                            <div class="modal fade" id="modalNotas<?php echo $obj->getId_clienteseguimiento() ?>" tabindex="-1" role="dialog" aria-labelledby="modalNecesidad">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <center>           <a title="Da clic para regresar" style="color:#000000" href="<?php echo site_url(); ?>BitacoraRefacciones">             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </a></center>

                                            <h4 class="modal-title" id="modalNotas">Notas</h4>
                                        </div>
                                        <div class="modal-body">

                                            <?php echo $obj->getNotas() ?>
                                        </div>
                                        <div class="modal-footer">
                                            <center>           <a title="Da clic para regresar" style="color:#000000" href="<?php echo site_url(); ?>ClienteSeguimiento">             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><font size="3">Cerrar</font></button>
                                                </a></center>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            </td>


                            <?php
                        }

                        //Fin Modal getNotas






                        if ($obj->getCotizacion() != null) {


                            echo '<td><center> <a  target=”_blank”  href="' . base_url() . 'assets/clienteseguimiento/' . $obj->getCotizacion() . '"><img width="42" height="42" src="https://scrobuspack.com/assets/images/archivo_agregado_correctamente.gif" /></a>
                               </a></center></td>';
                        } else {
                            echo '<td><center><img height="42" width="42" src="https://scrobuspack.com/assets/images/atencion.gif" /></center></td>';
                        }


                        if ($obj->getPedido() != null) {

                            echo '<td><center> <a height="42" width="42" target=”_blank”  href="' . base_url() . 'assets/clienteseguimiento/' . $obj->getPedido() . '"><img width="42" height="42" src="https://scrobuspack.com/assets/images/archivo_agregado_correctamente.gif"  /></a>
                               </a></center></td>';
                        } else {
                            echo '<td><center><img height="42" width="42" src="https://scrobuspack.com/assets/images/atencion.gif" /></center></td>';
                        }


                        if ($obj->getContrato() != null) {

                            echo '<td><center> <a  target=”_blank”  href="' . base_url() . 'assets/clienteseguimiento/' . $obj->getContrato() . '"><img width="42" height="42" src="https://scrobuspack.com/assets/images/archivo_agregado_correctamente.gif"  /></a>
                               </a></center></td>';
                        } else {
                            echo '<td><center><img height="42" width="42" src="https://scrobuspack.com/assets/images/atencion.gif" /></center></td>';
                        }

<<<<<<< HEAD
                           echo '<td>' .
=======

                        
                        
                        
                            echo '<td>' .
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            $obj->getFecha_prospeccion() .
                            '</td>'
                            . '<td>'
                            . $obj->getLlamadas_cliente() .
                            '</td>' .
                            '<td>'
                            . $obj->getFecha_contacto_cliente() .
                            '</td>' .
                            '<td>'
                            . $obj->getLlamdas_hechas() .
                            '</td>' .
                            '<td>' .
                            $obj->getFecha_ult_llamada() .
                            '</td>'
                            .'<td>' .
                            $obj->getNumero_visitas() .
                            '</td>'.
                            '<td>'
                            . $obj->getVentas_cerrada() .
                            '</td>' .
                            '<td>' .
                            $obj->getCliente_asignado() .
                            '</td>'
                            .'<td>' .
                            $obj->getCliente_nuevo() .
                            '</td>';

<<<<<<< HEAD

=======
                        
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606


                        if ($dataLevel == 'is_admin') {
                            echo '<td>' .
                            $obj->getFirst_name() .
                            '</td>'

                            ;
                        } else if ($dataLevel == 'is_editor') {
                            echo '<td>' .
                            $obj->getFirst_name() .
                            '</td>';
                        } else if ($dataLevel == 'is_Gerente_Ventas') {
<<<<<<< HEAD
                             echo '<td>' .
                            $obj->getFirst_name() .
                            '</td>';
=======
                            
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        } else if ($dataLevel == 'is_director') {
                            echo '<td>' .
                            $obj->getFirst_name() .
                            '</td>';
                        } else {
                            
                        }
<<<<<<< HEAD
=======
                        
                        
                        
                        
                        
                        
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606


                        //compara si es administrador
                        if ($dataLevel == 'is_admin') {
                            echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'ClienteSeguimiento/eliminar/' . $obj->getId_clienteseguimiento() . '"><button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                            echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'ClienteSeguimiento/actualizar/' . $obj->getId_clienteseguimiento() . '"><button type="button" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-edit"></button></a></td>';
                        } else if ($dataLevel == 'is_editor') {
                            echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'ClienteSeguimiento/eliminar/' . $obj->getId_clienteseguimiento() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                            echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'ClienteSeguimiento/actualizar/' . $obj->getId_clienteseguimiento() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                        } else if ($dataLevel == 'is_Gerente_Ventas') {
                            echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'ClienteSeguimiento/actualizar/' . $obj->getId_clienteseguimiento() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                        } else if ($dataLevel == 'is_maquinaria') {
                            echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'ClienteSeguimiento/actualizar/' . $obj->getId_clienteseguimiento() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                        } else if ($dataLevel == 'is_director') {
                            
                        } else {
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
