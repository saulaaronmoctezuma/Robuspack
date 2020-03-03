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

        <center>  <h1>Total de Registros Bitácora</h1></center>

  <div class="alert alert-info alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>SCR</strong>
        </div>

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

                        <th style="text-align: center">Bitácora</th>
                        <th style="text-align: center">Total</th>





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
                            foreach ($totalRegistroBitacoraCarlos as $fila) {
                                ?>
                                <div class="grid_12" id="cuerpo">
                                    <?= $fila->total_registros_carlos?>
                                </div>
                                <?php
                            }
                            ?></td></tr>


                    <tr>
                        <td>Aldo</td>
                        <td>
                            <?php
                            foreach ($totalRegistroBitacoraAldo as $fila) {
                                ?>
                                <div class="grid_12" id="cuerpo">
                                    <?= $fila->total_registros_aldo ?>
                                </div>
                                <?php
                            }
                            ?></td></tr>



                    <tr>
                        <td>Martín</td>
                        <td>
                            <?php
                            foreach ($totalRegistroBitacoraElvira as $fila) {
                                ?>
                                <div class="grid_12" id="cuerpo">
                                    <?= $fila->total_registros_elvira ?>
                                </div>
                                <?php
                            }
                            ?></td></tr>




                    <tr>
                        <td>Orlene</td>
                        <td>
                            <?php
                            foreach ($totalRegistroBitacoraOrlene as $fila) {
                                ?>
                                <div class="grid_12" id="cuerpo">
                                    <?= $fila->total_registros_orlene ?>
                                </div>
                                <?php
                            }
                            ?></td></tr>


                </tbody>
            </table>




            </body>
        </div>
</html>
