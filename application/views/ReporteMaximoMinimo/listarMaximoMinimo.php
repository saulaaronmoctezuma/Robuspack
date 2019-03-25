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

            <center>  <h1> Reporte Rotación de Inventario</h1></center>



        </div>


        <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
            <input type="text" id="buscandoIguales" placeholder="Escribe para buscar..."  class="form-control" />
        </div>

        <div class="text-center">
            <form method="post" action="<?php echo base_url(); ?>ExportarExcel/crearExcelRotacionInventario">
                <input type="submit" title="Da clic para exportar los datos a Excel" name="export" class="btn btn-success" value="Exportar a excel" />
            </form>
        </div>

        <table  border="1" class="table table-bordered table-striped">
            <MARQUEE SCROLLDELAY =200> </MARQUEE>
            <thead>
                <tr>



                    <th class="header" style="text-align: center">Código</th>
                    <th class="header" style="text-align: center">Fecha Corte de Rotación</th>
                    <th class="header" style="text-align: center">Total Req. Mensual</th>
                    <th class="header" style="text-align: center">Total Req. Trimestral</th>
                    <th class="header" style="text-align: center">Total Req. Mensual con Oc y Cons</th>
                    <th class="header" style="text-align: center">Total Req. Trimestral con Oc y Cons</th>
                    <th class="header" style="text-align: center">Inventario</th>
                    <th class="header" style="text-align: center">Piezas a recibir</th>
                    <th class="header" style="text-align: center">Disponibilidad Total</th>
                    <th class="header" style="text-align: center">Piezas a solicitar</th>
                    <th class="header" style="text-align: center">Meses Cubiertos</th>
                    <th class="header" style="text-align: center">Fecha_Cubierta</th>
                    <th class="header" style="text-align: center">Pc Fob</th>


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
                    echo '<tr><td>';
                    echo $obj->getCodigo() .
                    '</td>'
                    . '<td>'
                    . $obj->getFecha_corte_rotacion() .
                    '</td>'
                    . '<td>'
                    . $obj->getTotal_requerido_mensual() .
                    '</td>'
                    . '<td>'
                    . $obj->getTotal_requerido_trimestral() .
                    '</td>'
                    . '<td>'
                    . $obj->getTotal_requerido_mensual_con_or_cons() .
                    '</td>'
                    . '<td>'
                    . $obj->getTotal_requerido_trimestral_con_or_cons() .
                    '</td>'
                    . '<td>'
                    . $obj->getInventario() .
                    '</td>'
                    . '<td>'
                    . $obj->getPiezas_a_recibir() .
                    '</td>'
                    . '<td>'
                    . $obj->getDisponibilidad_total() .
                    '</td>'
                    . '<td>'
                    . $obj->getPiezas_a_solicitar() .
                    '</td>'
                    . '<td>'
                    . $obj->getMeses_cubiertos() .
                    '</td>'
                    . '<td>'
                    . $obj->getFecha_cubierta() .
                    '</td>'
                    . '<td>'
                    . $obj->getPcfob() .
                    '</td>'


                    ;

                    if ($dataLevel == 'is_admin') {
                        
                    } else if ($dataLevel == 'is_editor') {
                        
                    } else {
                        
                    }
                }
                ?>

                </tr>

                <tr>
                    <td colspan="2"></td> 


                    <td>
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



                    <td>
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




                    <td>
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


                    <td>
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

                    <td>
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


                    <td>
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



                    <td>
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


                    <td>
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


                    <td colspan="3"></td> 


                </tr>
            </tbody>
        </table>




    </body>
</div>
</html>
