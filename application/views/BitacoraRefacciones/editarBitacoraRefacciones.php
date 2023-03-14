<!--
 * @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 25/26/2019 Hora 10:32 am
Fecha : Ultimo Cambio 26/26/2019 Hora 12:36 Pm
 * Sistema de Control Robuspack
 */-->
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Robuspack</title>

        <!-- Bootstrap -->

        <!--<link rel="stylesheet" href="<?= base_url() ?>assets/font/glyphicons-halflings-regular.ttf-->
        <?php
        //check user level
        $dataLevel = $this->userlevel->checkLevel($role);


        //check user level
        ?>
    </head>
    <body>
        <div id="maquinaria">
            <form action="<?= base_url() ?>BitacoraRefacciones/updatedata" method="post" enctype="multipart/form-data">

                <MARQUEE SCROLLDELAY =200></MARQUEE>
                <div class="container" ><center><h1>Actualizar datos</center></h1>
                    <table class="table table-bordered table-striped">
                        <tbody>



<!-- <tr>

    <td><b>Cliente</b></td>
   <td colspan="3">  <select id="a3" class="form-control" name="cliente"   <?php echo form_dropdown('clienteCombo', $clienteCombo, $data->cliente, '#', 'id="clienteCombo"'); ?> </select></td>


</tr> -->
                            <?php
                            if ($dataLevel == 'is_admin') {
                                ?>
                                <tr>
                                    <td><b>Grupo</b></td>
                                    <td colspan="3">
                                        <input id="a2" class="form-control" type="text" name="grupo" value="<?= $data->grupo ?>">
                                    <!-- <textarea name="necesidad" class="form-control input-sm" style="resize:none;" rows="7" cols="80"><?= $data->necesidad ?></textarea>-->
                                    </td>
                                </tr>


                                <tr>
                                    <td><b>Cliente</b></td>
                                    <td colspan="3">
                                        <input id="a2" class="form-control" type="text" name="cliente" value="<?= $data->cliente ?>">
                                    <!-- <textarea name="necesidad" class="form-control input-sm" style="resize:none;" rows="7" cols="80"><?= $data->necesidad ?></textarea>-->
                                    </td>
                                </tr>


                                <tr>
                                    <td><b>Descripcion</b></td>
                                    <td colspan="3">
                                       <!-- <input id="a2" class="form-control" type="text" name="compromiso" value="<?= $data->compromiso ?>">-->
                                        <textarea name="descripcion" class="form-control input-sm" style="resize:none;" rows="7" cols="80"><?= $data->descripcion ?></textarea>

                                    </td>
                                </tr>
                                <?php
                            } else if ($dataLevel == 'is_refacciones') {
                                ?>
                                <tr>
                                    <td><b>Grupo</b></td>
                                    <td colspan="3">
                                        <input id="a2" class="form-control" type="text" name="grupo" value="<?= $data->grupo ?>">
                                    <!-- <textarea name="necesidad" class="form-control input-sm" style="resize:none;" rows="7" cols="80"><?= $data->necesidad ?></textarea>-->
                                    </td>
                                </tr>


                                <tr>
                                    <td><b>Cliente</b></td>
                                    <td colspan="3">
                                        <input id="a2" class="form-control" type="text" name="cliente" value="<?= $data->cliente ?>">
                                    <!-- <textarea name="necesidad" class="form-control input-sm" style="resize:none;" rows="7" cols="80"><?= $data->necesidad ?></textarea>-->
                                    </td>
                                </tr>


                                <tr>
                                    <td><b>Descripción</b></td>
                                    <td colspan="3">
                                       <!-- <input id="a2" class="form-control" type="text" name="compromiso" value="<?= $data->compromiso ?>">-->
                                        <textarea name="descripcion" class="form-control input-sm" style="resize:none;" rows="7" cols="80"><?= $data->descripcion ?></textarea>

                                    </td>
                                </tr>
                                
                                
                                <input id="a2"  type="hidden" name="observacion" value="<?= $data->observacion ?>">
                                <?php
                            } else if ($dataLevel == 'is_freelance') {
                                ?>
                                <tr>
                                    <td><b>Grupo</b></td>
                                    <td colspan="3">
                                        <input id="a2" class="form-control" type="text" name="grupo" value="<?= $data->grupo ?>">
                                    <!-- <textarea name="necesidad" class="form-control input-sm" style="resize:none;" rows="7" cols="80"><?= $data->necesidad ?></textarea>-->
                                    </td>
                                </tr>


                                <tr>
                                    <td><b>Cliente</b></td>
                                    <td colspan="3">
                                        <input id="a2" class="form-control" type="text" name="cliente" value="<?= $data->cliente ?>">
                                    <!-- <textarea name="necesidad" class="form-control input-sm" style="resize:none;" rows="7" cols="80"><?= $data->necesidad ?></textarea>-->
                                    </td>
                                </tr>


                                <tr>
                                    <td><b>Descripción</b></td>
                                    <td colspan="3">
                                       <!-- <input id="a2" class="form-control" type="text" name="compromiso" value="<?= $data->compromiso ?>">-->
                                        <textarea name="descripcion" class="form-control input-sm" style="resize:none;" rows="7" cols="80"><?= $data->descripcion ?></textarea>

                                    </td>
                                </tr>
                                
                                 <input id="a2"  type="hidden" name="observacion" value="<?= $data->observacion ?>">
                             
                                <?php
                            } else if ($dataLevel == 'is_editor') {
                                ?>
                          <tr>
                                    <td>Grupo</td>
                                    <td><input id="a2" readonly style="background-color:#03E7F7;" class="form-control" type="text" name="grupo" value="<?= $data->grupo ?>"></td></tr>
                            <td>Cliente</td>
                            <td><input id="a2" readonly style="background-color:#03E7F7;" class="form-control" type="text" name="cliente" value="<?= $data->cliente ?>"></td></tr>
                            <tr>
                                <td><br><br><br>Descripción</td>
                                <td>
                                    <textarea readonly style="background-color:#03E7F7;" style="resize:none;" name="descripcion" class="form-control input-sm"  rows="8" cols="80"><?= $data->descripcion ?></textarea>
                                </td>
                            </tr>


                            <tr>
                                <td><br><br><br>Observación</td>

                                <td>
                                    <textarea name="observacion" style="resize:none;" class="form-control input-sm"  rows="8" cols="80" placeholder="Ingrese una observación"><?= $data->observacion ?></textarea>
                                </td></tr>
                            <center>

                                <TR><TD>
                                <?php
                            } else if ($dataLevel == 'is_Gerente_Ventas') {
                                ?>



                                <tr>
                                    <td>Grupo</td>
                                    <td><input id="a2" readonly style="background-color:#03E7F7;" class="form-control" type="text" name="grupo" value="<?= $data->grupo ?>"></td></tr>
                            <td>Cliente</td>
                            <td><input id="a2" readonly style="background-color:#03E7F7;" class="form-control" type="text" name="cliente" value="<?= $data->cliente ?>"></td></tr>
                            <tr>
                                <td><br><br><br>Descripción</td>
                                <td>
                                    <textarea readonly style="background-color:#03E7F7;" style="resize:none;" name="descripcion" class="form-control input-sm"  rows="8" cols="80"><?= $data->descripcion ?></textarea>
                                </td>
                            </tr>


                            <tr>
                                <td><br><br><br>Observación</td>

                                <td>
                                    <textarea name="observacion" style="resize:none;" class="form-control input-sm"  rows="8" cols="80" placeholder="Ingrese una observación"><?= $data->observacion ?></textarea>
                                </td></tr>
                            <center>

                                <TR><TD>



                                        <?php
                                    }
                                    ?>







                            <tr>

                                <?php
                                if (($data->archivo1 == null) && ($dataLevel == 'is_admin')) {
                                    echo '<td><b>Archivo </b></td><td><font color="red">No tienes ningún archivo cargado</font><br><br>'
                                    . '<input type="file" name="archivo1"><br>';
                                } else if (($data->archivo1 != null) && ($dataLevel == 'is_admin')) {
                               
                              echo '<tr>
                                <td>Archivo </td><td><font color="#0B610B"><b>
   
     <a  title="Da clic para visualizar el archivo" href="' . base_url() . 'assets/bitacora_refacciones/' . $data->archivo1 . '" target=”_blank” rel=”nofollow”> Da clic para visualizar el archivo</a><br>
                           </font><br>
</b>
                                </font><br>
                       <br>
                             <input type="hidden" name="archivo1"><br>
                             
                                </td>
                                </tr>';
                                }
                                ?>


                                <?php
                                if (($data->archivo1 == null) && ($dataLevel == 'is_refacciones')) {
                                    echo '<td><b> <label>Archivo</label> </b></td><td><font color="red">No tienes ningún archivo cargado</font><br><br>'
                                    . '<input type="file" name="archivo1"><br>';
                                } else if (($data->archivo1 != null) && ($dataLevel == 'is_refacciones')) {
                               
                              echo '<tr>
                                <td><label>Archivo</label>  </td><td><font color="#0B610B"><b>
   
     <a  title="Da clic para visualizar el archivo" href="' . base_url() . 'assets/bitacora_refacciones/' . $data->archivo1 . '" target=”_blank” rel=”nofollow”> Da clic para visualizar el archivo</a><br>
                           </font><br>
</b>
                                </font><br>
                       <br> <font color="red">Cambiar tu archivo</font>
                             <input type="file" name="archivo1"><br>
                             
                                </td>
                                </tr>';
                                }
                                ?>

                                
                                
                                <?php
                                if (($data->archivo1 == null) && ($dataLevel == 'is_freelance')) {
                                    echo '<td><b> <label>Archivo</label> </b></td><td><font color="red">No tienes ningún archivo cargado</font><br><br>'
                                    . '<input type="file" name="archivo1"><br>';
                                } else if (($data->archivo1 != null) && ($dataLevel == 'is_freelance')) {
                               
                              echo '<tr>
                                <td><label>Archivo</label>  </td><td><font color="#0B610B"><b>
   
     <a  title="Da clic para visualizar el archivo" href="' . base_url() . 'assets/bitacora_refacciones/' . $data->archivo1 . '" target=”_blank” rel=”nofollow”> Da clic para visualizar el archivo</a><br>
                           </font><br>
</b>
                                </font><br>
                       <br> <font color="red">Cambiar tu archivo</font>
                             <input type="file" name="archivo1"><br>
                             
                                </td>
                                </tr>';
                                }
                                ?>






                            <?php
                            if (($data->archivo1 == null) && ($dataLevel == 'is_Gerente_Ventas')) {
                                echo '
                            <tr>
                                <td>Archivo</td><td>
                                <font color="red">No tienes ningún archivo cargado</font><br><br>'
                                . '<input type="hidden" name="archivo1"><br>';
                            } else if (($data->archivo1 != null) && ($dataLevel == 'is_Gerente_Ventas')) {
                                echo '<tr>
                                <td>Archivo </td><td><font color="#0B610B"><b>
   
     <a  title="Da clic para visualizar el archivo" href="' . base_url() . 'assets/bitacora_refacciones/' . $data->archivo1 . '" target=”_blank” rel=”nofollow”> Da clic para visualizar el archivo</a><br>
                           </font><br>
</b>
                                </font><br>
                       <br>
                            
                             <input type=hidden name="archivo1"><br>
                             
                                </td>
                                </tr>';
                            }
                            ?>















                            <tr>

                                <td colspan="2">    <center> <input  class="btn btn-success" title="Da clic para guardar los datos" type="submit" value="Guardar" >
                                <a title="Da clic para regresar al menú" href="../../BitacoraRefacciones" class="btn btn-warning">Cancelar</a></center>
                            </td>
                            </tr>



  <!--<tr>
          <input class="form-control btn btn-success"  type="submit" value="Guardar" >
      </td>
  </tr>-->
                            </tbody>


                    </table>
                </div>

                <!-- file lama -->
                <input type="hidden" name="id" value="<?= $data->id_bitacora ?>">
                <!-- ID -->
                <input type="hidden" name="id" value="<?= $data->id_bitacora ?>">

                   <!-- <input type="submit" name="submit" value="Enviar" class="btn btn-default">-->



            </form>

        </div>
    </div>
    <!-- END KONTEN UTAMA -->

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
</body>




