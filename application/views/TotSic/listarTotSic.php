<html lang="es-mx">
    <!-- Para traerse el rol que esta registrado-->

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

        <center>  <h1>Total de Registros SIC</h1></center>



        <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
            <input type="text" id="buscandoIguales" placeholder="Escribe para buscar..."  class="form-control" />
        </div>

        <!--<div class="text-center">
            <form method="post" action="<?php echo base_url(); ?>ExportarExcel/crearExcelMaximoMinimo">
                <input type="submit" title="Da clic para exportar los datos a Excel" name="export" class="btn btn-success" value="Exportar a excel" />
            </form>
        </div>-->
    </div>



    <div class="container" style="margin-top:1px;">


        <div class="table-responsive">






            <table  border="1" class="table table-bordered table-striped">
                <MARQUEE SCROLLDELAY =200> </MARQUEE>
                <thead>
                    <tr>

                        <th style="text-align: center">Vendedor</th>
                        <th style="text-align: center">Total Registros</th>
                        <th style="text-align: center">No Troquela</th>
                        <th style="text-align: center">Consignación</th>
                        <th style="text-align: center">Orden de Compra</th>
                        <th style="text-align: center">Sin Pedido</th>



                        <?php
                        if ($dataLevel == 'is_admin') {
                            
                        } else if ($dataLevel == 'is_editor') {
                            
                        } else {
                            
                        }
                        ?>
                    </tr>
                </thead>

                <tbody align="center">





                    </tr>
                    <tr>
                        <td>Carlos</td>
                        <td>
                            <?php
                            foreach ($totalRegistroSicCarlos as $fila) {
                                ?>

                                <?= $fila->total_registros_carlos ?>

                                <?php
                            }
                            ?>
                        </td>

                        <td>
                            <?php
                            foreach ($totalRegistroSicNoTroquelaCarlos as $fila) {
                                ?>

                                <?= $fila->total_registros_carlos ?>

                                <?php
                            }
                            ?>
                        </td>
                        
                        
                         <td>
                            <?php
                            foreach ($totalRegistroSicConfirmacionCarlos as $fila) {
                                ?>

                                <?= $fila->total_registros_carlos ?>

                                <?php
                            }
                            ?>
                        </td>
                        
                         <td>
                            <?php
                            foreach ($totalRegistroSicOrdenCarlos as $fila) {
                                ?>

                                <?= $fila->total_registros_carlos ?>

                                <?php
                            }
                            ?>
                        </td>
                        
                        
                        
                          <td>
                            <?php
                            foreach ($totalRegistroSicSinPedidoCarlos as $fila) {
                                ?>

                                <?= $fila->total_registros_carlos ?>

                                <?php
                            }
                            ?>
                        </td>


                    </tr>


                    <tr>
                        <td>Aldo</td>
                        <td>
                            <?php
                            foreach ($totalRegistroSicAldo as $fila) {
                                ?>

                                <?= $fila->total_registros_aldo ?>

                                <?php
                            }
                            ?>
                        
                        </td>

                        
                        
                        
                        <td>
                            <?php
                            foreach ($totalRegistroSicNoTroquelaAldo as $fila) {
                                ?>

                                <?= $fila->total_registros_aldo ?>

                                <?php
                            }
                            ?>
                        </td>
                        
                        
                        
                         <td>
                            <?php
                            foreach ($totalRegistroSicConfirmacionAldo as $fila) {
                                ?>

                                <?= $fila->total_registros_aldo ?>

                                <?php
                            }
                            ?>
                        
                        </td>
                        
                        
                        
                        
                        <td>
                            <?php
                            foreach ($totalRegistroSicOrdenAldo as $fila) {
                                ?>

                                <?= $fila->total_registros_aldo ?>

                                <?php
                            }
                            ?>
                        </td>
                        
                        
                        
                        
                         <td>
                            <?php
                            foreach ($totalRegistroSicSinPedidoAldo as $fila) {
                                ?>

                                <?= $fila->total_registros_aldo ?>

                                <?php
                            }
                            ?>
                        
                        </td>


                    </tr>



                    <tr>
                        <td>Elvira</td>
                        <td>
                            <?php
                            foreach ($totalRegistroSicElvira as $fila) {
                                ?>

                                <?= $fila->total_registros_elvira ?>

                                <?php
                            }
                            ?>
                        
                        </td>

                        
                        
                        
                        <td>
                            <?php
                            foreach ($totalRegistroSicNoTroquelaElvira as $fila) {
                                ?>

                                <?= $fila->total_registros_elvira ?>

                                <?php
                            }
                            ?>
                        </td>
                        
                        
                          <td>
                            <?php
                            foreach ($totalRegistroSicConfirmacionElvira as $fila) {
                                ?>

                                <?= $fila->total_registros_elvira ?>

                                <?php
                            }
                            ?>
                        
                        </td>

                        
                        
                        
                        <td>
                            <?php
                            foreach ($totalRegistroSicOrdenElvira as $fila) {
                                ?>

                                <?= $fila->total_registros_elvira ?>

                                <?php
                            }
                            ?>
                        </td>

                         <td>
                            <?php
                            foreach ($totalRegistroSicSinPedidoElvira as $fila) {
                                ?>

                                <?= $fila->total_registros_elvira ?>

                                <?php
                            }
                            ?>
                        </td>



                    </tr>




                    <tr>
                        <td>Orlene</td>
                        <td>
                            <?php
                            foreach ($totalRegistroSicOrlene as $fila) {
                                ?>

                                <?= $fila->total_registros_orlene ?>

                                <?php
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            foreach ($totalRegistroSicNoTroquelaOrlene as $fila) {
                                ?>

                                <?= $fila->total_registros_orlene ?>

                                <?php
                            }
                            ?>
                        </td>
                        
                        
                        
                        
                         <td>
                            <?php
                            foreach ($totalRegistroSicConfirmacionOrlene as $fila) {
                                ?>

                                <?= $fila->total_registros_orlene ?>

                                <?php
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            foreach ($totalRegistroSicOrdenOrlene as $fila) {
                                ?>

                                <?= $fila->total_registros_orlene ?>

                                <?php
                            }
                            ?>
                        </td>
                        
                        
                        
                           <td>
                            <?php
                            foreach ($totalRegistroSicSinPedidoOrlene as $fila) {
                                ?>

                                <?= $fila->total_registros_orlene ?>

                                <?php
                            }
                            ?>
                        </td>
                    </tr>


                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                     <tr>
                         <td bgcolor="#A8A8A8" ><b>Total</b> </td>
                        <td bgcolor="#A8A8A8" >
                            <?php
                            foreach ($totalRegistroSic as $fila) {
                                ?>

                            <b>  <?= $fila->total_registros_sic ?> </b>

                                <?php
                            }
                            ?>
                        </td>
                        <td  bgcolor="#A8A8A8">
                            <?php
                            foreach ($totalRegistroSicNoTroquela as $fila) {
                                ?>

                             <b>    <?= $fila->total_registros_no_troquela ?> </b>

                                <?php
                            }
                            ?>
                        </td>
                        
                        
                        
                        
                         <td  bgcolor="#A8A8A8">
                            <?php
                            foreach ($totalRegistroSicSConsignacion as $fila) {
                                ?>

                            <b>     <?= $fila->total_consignacion ?> </b>

                                <?php
                            }
                            ?>
                        </td>
                        <td  bgcolor="#A8A8A8">
                            <?php
                            foreach ($totalRegistroSicOrdenCompra as $fila) {
                                ?>

                             <b>    <?= $fila->total_registros_orden_compra ?> </b>

                                <?php
                            }
                            ?>
                        </td>
                        
                        
                        
                           <td  bgcolor="#A8A8A8">
                            <?php
                            foreach ($totalRegistroSicSinPedido as $fila) {
                                ?>

                            <b>     <?= $fila->total_registros_sin_pedido ?> </b>

                                <?php
                            }
                            ?>
                        </td>
                    </tr>

                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    

                </tbody>
            </table>




            </body>
        </div>
</html>
