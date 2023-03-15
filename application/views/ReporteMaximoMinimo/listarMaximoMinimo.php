<<<<<<< HEAD
<!--
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */
-->

=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
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
<<<<<<< HEAD
            <input type="text" id="myInput" placeholder="Escribe para buscar..."  class="form-control" />
        </div>

        <!--<div class="text-center">
            <form method="post" action="<?php echo base_url(); ?>ExportarExcel/crearExcelRotacionInventario">
                <input type="submit" title="Da clic para exportar los datos a Excel" name="export" class="btn btn-success" value="Exportar a excel" />
            </form>-->
=======
            <input type="text" id="buscandoIguales" placeholder="Escribe para buscar..."  class="form-control" />
        </div>

        <div class="text-center">
            <form method="post" action="<?php echo base_url(); ?>ExportarExcel/crearExcelRotacionInventario">
                <input type="submit" title="Da clic para exportar los datos a Excel" name="export" class="btn btn-success" value="Exportar a excel" />
            </form>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        </div>
    </div>
 <div class="container" style="margin-top:1px;">


        <div class="table-responsive">

        <table  border="1" class="table table-bordered table-striped">
            <MARQUEE SCROLLDELAY =200> </MARQUEE>
            <thead>
                <tr>


<<<<<<< HEAD

                    <th class="header" style="text-align: center">Código</th>
                    <th class="header" style="text-align: center">Fecha_Corte de Rotación</th>
                    <th class="header" style="text-align: center">Fecha_Último Consumo</th>
                    <th class="header" style="text-align: center">Fecha_Requiere Piezas</th>
                    <th class="header" style="text-align: center">Pedido Inteligente</th>
=======
                    <th class="header" style="text-align: center">Código</th>
                    <th class="header" style="text-align: center"> <a href="http://localhost/master/Maquinaria/actualiza/1">Fecha_Corte de Rotación</th>
                    <th class="header" style="text-align: center">Fecha_Último Consumo</th>
                    <th class="header" style="text-align: center">Fecha_Requiere Piezas</th>
                    <th class="header" style="text-align: center">Pedido_Inteligente</th>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    <th class="header" style="text-align: center">Total Req. Mensual</th>
                    <th class="header" style="text-align: center">Total Req. Trimestral</th>
                    <th class="header" style="text-align: center">Total Req. Mensual con Oc y Cons</th>
                    <th class="header" style="text-align: center">Total Req. Trimestral con Oc y Consignación</th>
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

<<<<<<< HEAD
            <tbody align="center" id="myTable">
=======
            <tbody align="center">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                <?php
                foreach ($maximominimo as $obj) {
                    echo '<tr><td>';
                    echo $obj->getCodigo() .
                    '</td>'
                    . '<td>'
                    . $obj->getFecha_corte_rotacion() .
                    '</td>'
                    . '<td>'
                    . $obj->getFecha_ultimo_consumo() .
                    '</td>'
                    . '<td>'
                    . $obj->getFecha_requiere_piezas() .
                    '</td>'
                    . '<td>'
                    . $obj->getPedido_inteligente() .
                    '</td>'
                    . '<td>'
                    . $obj->getSuma_total_requerido_mensual() .
                    '</td>'
                    . '<td>'
                    . $obj->getSuma_total_requerido_trimestral() .
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
<<<<<<< HEAD
<!--
=======

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                <tr>
                    <td colspan="5"></td> 


                    <td>
                        <?php
<<<<<<< HEAD
                        #foreach ($totalRequeridoMensual as $fila) {
=======
                        foreach ($totalRequeridoMensual as $fila) {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            ?>
                            <div>
                                Total:<div><?= $fila->total_requerido_mensual ?></div>
                            </div>
                            <?php
<<<<<<< HEAD
                        #}
=======
                        }
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        ?>
                    </td>



                    <td>
                        <?php
<<<<<<< HEAD
                        #foreach ($totalRequeridoTrimestrual as $fila) {
=======
                        foreach ($totalRequeridoTrimestrual as $fila) {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            ?>
                            <div>
                                Total:<div><?= $fila->total_requerido_trimestral ?></div>
                            </div>
                            <?php
<<<<<<< HEAD
                        #}
=======
                        }
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        ?>
                    </td>




                    <td>
                        <?php
<<<<<<< HEAD
                        #foreach ($totalRequeridoMensualOcyCons as $fila) {
=======
                        foreach ($totalRequeridoMensualOcyCons as $fila) {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            ?>
                            <div>
                                Total:<div><?= $fila->total_requerido_mensual_con_or_cons ?></div>
                            </div>
                            <?php
<<<<<<< HEAD
                        #}
=======
                        }
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        ?>
                    </td>


                    <td>
                        <?php
<<<<<<< HEAD
                        #foreach ($totalRequeridoTrimestrualOcyCons as $fila) {
=======
                        foreach ($totalRequeridoTrimestrualOcyCons as $fila) {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            ?>
                            <div>
                                Total:<div><?= $fila->total_requerido_trimestral_con_or_cons ?></div>
                            </div>
                            <?php
<<<<<<< HEAD
                        #}
=======
                        }
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        ?>
                    </td>

                    <td>
                        <?php
<<<<<<< HEAD
                        #foreach ($totalInventario as $fila) {
=======
                        foreach ($totalInventario as $fila) {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            ?>
                            <div>
                                Total:<div><?= $fila->inventario ?></div>
                            </div>
                            <?php
<<<<<<< HEAD
                        #}
=======
                        }
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        ?>
                    </td>


                    <td>
                        <?php
<<<<<<< HEAD
                        #foreach ($totalPiezasRecibir as $fila) {
=======
                        foreach ($totalPiezasRecibir as $fila) {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            ?>
                            <div>
                                Total:<div><?= $fila->piezas_a_recibir ?></div>
                            </div>
                            <?php
<<<<<<< HEAD
                        #}
=======
                        }
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        ?>
                    </td>



                    <td>
                        <?php
<<<<<<< HEAD
                       # foreach ($totalDisponibilidadTotal as $fila) {
=======
                        foreach ($totalDisponibilidadTotal as $fila) {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            ?>
                            <div>
                                Total:<div><?= $fila->disponibilidad_total ?></div>
                            </div>
                            <?php
<<<<<<< HEAD
                        #}
=======
                        }
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        ?>
                    </td>


                    <td>
                        <?php
<<<<<<< HEAD
                        #foreach ($totalPiezasSolicitar as $fila) {
=======
                        foreach ($totalPiezasSolicitar as $fila) {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            ?>
                            <div>
                                Total:<div><?= $fila->piezas_a_solicitar ?></div>
                            </div>
                            <?php
<<<<<<< HEAD
                        #}
=======
                        }
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        ?>
                    </td>


                    <td colspan="3"></td> 


<<<<<<< HEAD
                </tr>-->
=======
                </tr>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            </tbody>
        </table>



</div>
    </body>



</html>
