<html lang="es-mx">

    <head>
        <title>Robuspack</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
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
                    alert("El registro ha sido eliminado.")
                } else {
                    return false
                }
            }
        </script>

        <link rel="icon" href="<?= base_url('assets/images/robuspack_icon.png') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Para traerse el rol que esta registrado-->
        <?php
        //check user level
        $dataLevel = $this->userlevel->checkLevel($role);

        $site_title = $result->site_title;
        //check user level
        ?>

        
    </head>
    <div class="container" style="margin-top:1px;">
        <div class="table-responsive">

            <center>  <h1> Reporte Rotación de Inventario 2a</h1></center>



        </div>


        <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
            <input type="text" id="buscandoIguales" placeholder="Escribe para buscar..."  class="form-control" />
        </div>

        <div class="text-center">
            <form method="post" action="<?php echo base_url(); ?>ExportarExcel/crearExcelRotacionInventarioR">
                <input type="submit" title="Da clic para exportar los datos a Excel" name="export" class="btn btn-success" value="Exportar a excel" />
            </form>
        </div>
    </div>
    <div class="container" style="margin-top:1px;">


        <div class="table-responsive">

            <table  border="1" class="table table-bordered table-striped">
                <MARQUEE SCROLLDELAY =200> </MARQUEE>
                <thead>
                    <tr>



                        <th class="header" style="text-align: center">Código</th>
                        <th class="header" style="text-align: center;" bgcolor="yellow">
                            <a href="http://localhost/master/Maquinaria/actualiza/1" ><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i>
                                <font color="blue">     Fecha_Corte de Rotación</font>
                            </a></th>

                        <th class="header" style="text-align: center">Pedido_Inteligente</th>

                        <th class="header" style="text-align: center">Total Req. Mensual con Oc y Cons</th>
                        <th class="header" style="text-align: center">Total Req. Trimestral con Oc y Consignación</th>
                        <th class="header" style="text-align: center" bgcolor="yellow">Inventario</th>
                        <th class="header" style="text-align: center" bgcolor="yellow"  >Piezas a recibir</th>
                        <th class="header" style="text-align: center">Piezas requeridas con oc consig mensual</th>
                        <th class="header" style="text-align: center">Piezas requeridas con oc consig trimestral</th>
                        <th class="header" style="text-align: center">Meses Cubiertos</th>
                        <th class="header" style="text-align: center">Fecha_Cubierta</th>
                        <th class="header" style="text-align: center">total_mensual_sin_oc</th>
                        <th class="header" style="text-align: center">Informativo Prospectacion Mercado</th>
                        <th class="header" style="text-align: center">Pc_Fob</th>

                        <?php
                        if ($dataLevel == 'is_admin') {
                            
                        } else if ($dataLevel == 'is_editor') {
                            
                        } else {
                            
                        }
                        ?>
                    </tr>
                </thead>

                <tbody align="center">

                    <?php
                    foreach ($maximominimo as $obj) {
                        echo '<tr><td>  <a href=http://localhost/master/Maquinaria/rotacion/'.$obj->getId_maquinaria().'><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i> ';
                        echo $obj->getCodigo() .
                        '</a></td>'
                        . '<td >'
                        . $obj->getFecha_corte_rotacion() .
                        '</td>'
                        . '<td>'
                        . $obj->getPedido_inteligente() .
                        '</td>'
                        . '<td>'
                        . $obj->getSuma_total_requerido_mensual_con_oc_consignacion() .
                        '</td>'
                        . '<td>'
                        . $obj->getSuma_total_requerido_trimestral_con_oc_y_consignacion() .
                        '</td>'
                        . '<td>'
                        . $obj->getInventario() .
                        '</td>'
                        . '<td>'
                        . $obj->getPiezas_a_recibir() .
                        '</td>'
                                . '<td>'
                        . $obj->getPiezas_requeridas_con_oc_consig_mensual() .
                        '</td>'
                        . '<td>'
                        . $obj->getPiezas_requeridas_con_oc_consig_trimestral() .
                        '</td>'
                        . '<td>'
                        . $obj->getMeses_cubiertos() .
                        '</td>'
                        . '<td>'
                        . $obj->getFecha_cubierta() .
                        '</td>'
                        . '<td>'
                        . $obj->getTotal_mensual_sin_oc() .
                        '</td>'
                        . '<td>'
                        . $obj->getInformativo_prospectacion_mercado() .
                        '</td>'
                        . '<td>'
                        . $obj->getPc_fob() .
                        '</td>'


                        ;

                        if ($dataLevel == 'is_admin') {
                            
                        } else if ($dataLevel == 'is_editor') {
                            
                        } else {
                            
                        }
                    }
                    ?>

                    </tr>

               <tr  bgcolor="yellow">
                    <td colspan="3" bgcolor="#DADADA"></td> 


                   




                    <td bgcolor="#DADADA">
                    <?php
                    foreach ($totalRequeridoMensualOcyCons as $fila) {
                    ?>
                            <div>
                                Total:<div><?= $fila->total_requerido_mensual_con_or_cons ?></div>
                            </div>
                    <?php
                    }
                    ?>
                    </td>


                    <td bgcolor="#DADADA">
                    <?php
                    foreach ($totalRequeridoTrimestrualOcyCons as $fila) {
                    ?>
                            <div>
                                Total:<div><?= $fila->total_requerido_trimestral_con_or_cons ?></div>
                            </div>
                    <?php
                     }
                    ?>
                    </td>

                    <td bgcolor="#DADADA">
                    <?php
                     foreach ($totalInventario as $fila) {
                    ?>
                            <div>
                                Total:<div><?= $fila->inventario ?></div>
                            </div>
                    <?php
                     }
                    ?>
                    </td>


                    <td bgcolor="#DADADA">
                    <?php
                     foreach ($totalPiezasRecibir as $fila) {
                    ?>
                            <div>
                                Total:<div><?= $fila->piezas_a_recibir ?></div>
                            </div>
                    <?php
                    }
                    ?>
                    </td>



                    <td bgcolor="#DADADA">
                    <?php
                     foreach ($totalDisponibilidadTotal as $fila) {
                    ?>
                            <div>
                                Total:<div><?= $fila->disponibilidad_total ?></div>
                            </div>
                    <?php
                    }
                    ?>
                    </td>


                    <td bgcolor="#DADADA">
                    <?php
                     foreach ($totalPiezasSolicitar as $fila) {
                    ?>
                            <div>
                                Total:<div><?= $fila->piezas_a_solicitar ?></div>
                            </div>
                    <?php
                    }
                    ?>
                    </td>
                    
                    
                     <td bgcolor="#DADADA" colspan="2"></td> 
                    
                    
                     <td bgcolor="#DADADA">
                    <?php
                    foreach ($totalRequeridoMensual as $fila) {
                    ?>
                            <div>
                                Total:<div><?= $fila->total_requerido_mensual ?></div>
                            </div>
                    <?php
                    }
                    ?>
                    </td>



                    <td bgcolor="#DADADA">
                    <?php
                     foreach ($totalRequeridoTrimestrual as $fila) {
                    ?>
                            <div>
                                Total:<div><?= $fila->total_requerido_trimestral ?></div>
                            </div>
                    <?php
                    }
                    ?>
                    </td>

                     <td bgcolor="#DADADA" colspan="1"></td> 


                </tr>
                </tbody>
            </table>



        </div>
    </body>



</html>
