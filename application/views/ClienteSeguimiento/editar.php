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

        <link rel="stylesheet" href="<?= base_url() ?>assets/font/glyphicons-halflings-regular.ttf">
        <?php
        //check user level
        $dataLevel = $this->userlevel->checkLevel($role);


        //check user level
        ?>
    </head>
    <body>
  <div id="maquinaria">
            <form action="<?= base_url() ?>ClienteSeguimiento/updatedata" method="post" enctype="multipart/form-data">
                
                <MARQUEE SCROLLDELAY =200></MARQUEE>
                <div class="container" ><h1>Actualizar datos</h1>
                    <table class="table table-bordered table-striped">
                        <tbody>


                        
                        <tr>

                            <td><b>Cliente</b></td>
                           <td colspan="3">  <select id="a3" class="form-control" name="cliente"   <?php echo form_dropdown('clienteCombo', $clienteCombo, $data->cliente, '#', 'id="clienteCombo"'); ?> </select></td>
                        
                        
                        </tr> 
                        
                          <tr>
                            <td><b>Nivel</b></td>
                                          <td colspan="3">
                                             <!-- <input id="a2" class="form-control" type="text" name="compromiso" value="<?= $data->compromiso ?>">-->
                                        <SELECT name="nivel" class="form-control" > 
                            <optgroup label="Selecciona una opción">
                                 <option value="" <?php if ($data->nivel == "") {echo "Selected"; } ?>>Selecciona una opción</option>
                                
                                <option value="1" <?php if ($data->nivel == "1") {echo "Selected"; } ?>>1</option>
                                <option value="2" <?php if ($data->nivel == "2"){  echo "Selected";} ?>>2</option>
                                 <option value="3" <?php if ($data->nivel == "3") {echo "Selected"; } ?>>3</option>
                                <option value="4" <?php if ($data->nivel == "4"){  echo "Selected";} ?>>4</option>
                                 <option value="NS" <?php if ($data->nivel == "NS") {echo "Selected"; } ?>>NS</option>
                                
                                
                            </optgroup>
                           </SELECT>
                                          </td>
                        </tr>
                        <tr>
                            <td><b>Necesidad</b></td>
                                       <td colspan="3">
                                          <!-- <input id="a2" class="form-control" type="text" name="necesidad" value="<?= $data->necesidad ?>">-->
                                        <textarea name="necesidad" class="form-control input-sm" style="resize:none;" rows="7" cols="80"><?= $data->necesidad ?></textarea>
                                       </td>
                        </tr>
                        <tr>
                            <td><b>Compromiso</b></td>
                                          <td colspan="3">
                                             <!-- <input id="a2" class="form-control" type="text" name="compromiso" value="<?= $data->compromiso ?>">-->
                                          <textarea name="compromiso" class="form-control input-sm" style="resize:none;" rows="7" cols="80"><?= $data->compromiso ?></textarea>
                                          
                                          </td>
                        </tr>
                        <tr>
                            <td><b>Notas</b></td>
                                            <td colspan="3">
                                               <!-- <input id="a2" class="form-control" type="text" name="notas" value="<?= $data->notas ?>">-->
                                              <textarea name="notas" class="form-control input-sm" style="resize:none;" rows="7" cols="80"><?= $data->notas ?></textarea>
                                            </td>
                        </tr>


                       
                        <tr>
                            <td><b>Cotización</b><td>
                                 <?php
                    if (($data->cotizacion == null) && ($dataLevel == 'is_admin')) {
                        echo '<font color="red">No tienes ningún archivo cargado</font><br><br>'
                        . '<input type="file" name="cotizacion"><br>';
                    } else if (($data->cotizacion != null) && ($dataLevel == 'is_admin')) {
                        echo '<font color="#0B610B"><b>Ya tienes un archivo cargado</b></font><br>
                       <br>
                             <input type="file" name="cotizacion"><br>';
                    }
                    ?>

                              <?php
                    if (($data->cotizacion == null) && ($dataLevel == 'is_editor')) {
                        echo '<font color="red">No tienes ningún archivo cargado</font><br><br>'
                        . '<input type="file" name="cotizacion"><br>';
                    } else if (($data->cotizacion != null) && ($dataLevel == 'is_editor')) {
                        echo '<font color="#0B610B">Ya tienes un archivo cargado</font><br>
                       <br>
                             <input type="file" name="cotizacion"><br>';
                    }
                    ?>      
                                
                                
                                
                                          <?php
                    if (($data->cotizacion == null) && ($dataLevel == 'is_maquinaria')) {
                        echo '<font color="red">No tienes ningún archivo cargado</font><br><br>'
                        . '<input type="file" name="cotizacion"><br>';
                    } else if (($data->cotizacion != null) && ($dataLevel == 'is_maquinaria')) {
                        echo '<font color="#0B610B"><b>Ya tienes un archivo cargado</b></font><br>
                       <br>
                             <input type="file" name="cotizacion"><br>';
                    }
                    ?>

                                       <?php
                    if (($data->cotizacion == null) && ($dataLevel == 'is_director')) {
                        echo '<font color="red">No tienes ningún archivo cargado</font><br><br>'
                        . '<input type="file" name="cotizacion">';
                    } else if (($data->cotizacion != null) && ($dataLevel == 'is_director')) {
                        echo '<font color="#0B610B"><b>Ya tienes un archivo cargado</b></font>
                       <br>
                             <input type="file" name="cotizacion">';
                    }
                    ?>

                                
                                               <?php
                    if (($data->cotizacion == null) && ($dataLevel == 'is_Gerente_Ventas')) {
                        echo '<font color="red">No tienes ningún archivo cargado</font><br><br>'
                        . '<input type="file" name="cotizacion">';
                    } else if (($data->cotizacion != null) && ($dataLevel == 'is_Gerente_Ventas')) {
                        echo '<font color="#0B610B"><b>Ya tienes un archivo cargado</b></font>
                       <br>
                             <input type="file" name="cotizacion">';
                    }
                    ?>


                        </tr>
                        <tr>
                            <td><b>Pedido</b><td>
                             <?php
                    if (($data->pedido == null) && ($dataLevel == 'is_admin')) {
                        echo '<font color="red">No tienes ningún archivo cargado</font><br><br>
                             <input type="file" name="pedido"><br>';
                    } else if (($data->pedido != null) && ($dataLevel == 'is_admin')) {
                        echo '<font color="#0B610B"><b>Ya tienes un archivo cargado</b></font><br>
                        <br>
                             <input type="file" name="pedido"><br>';
                    }
                    ?>
                                
                                     
                                
                                     <?php
                    if (($data->pedido == null) && ($dataLevel == 'is_editor')) {
                        echo '<font color="red">No tienes ningún archivo cargado</font><br><br>
                             <input type="file" name="pedido"><br>';
                    } else if (($data->pedido != null) && ($dataLevel == 'is_editor')) {
                        echo '<font color="#0B610B"><b>Ya tienes un archivo cargado</b></font><br>
                        <br>
                             <input type="file" name="pedido"><br>';
                    }
                    ?>
                                
                                     <?php
                    if (($data->pedido == null) && ($dataLevel == 'is_director')) {
                        echo '<font color="red">No tienes ningún archivo cargado</font><br><br>
                             <input type="file" name="pedido"><br>';
                    } else if (($data->pedido != null) && ($dataLevel == 'is_director')) {
                        echo '<font color="#0B610B"><b>Ya tienes un archivo cargado</b></font><br>
                        <br>
                             <input type="file" name="pedido"><br>';
                    }
                    ?>
                       
                                
                                      <?php
                    if (($data->pedido == null) && ($dataLevel == 'is_Gerente_Ventas')) {
                        echo '<font color="red">No tienes ningún archivo cargado</font><br><br>
                             <input type="file" name="pedido"><br>';
                    } else if (($data->pedido != null) && ($dataLevel == 'is_Gerente_Ventas')) {
                        echo '<font color="#0B610B"><b>Ya tienes un archivo cargado</b></font><br>
                        <br>
                             <input type="file" name="pedido"><br>';
                    }
                    ?>
                                
                                
                                          <?php
                    if (($data->pedido == null) && ($dataLevel == 'is_maquinaria')) {
                        echo '<font color="red">No tienes ningún archivo cargado</font><br><br>
                             <input type="file" name="pedido"><br>';
                    } else if (($data->pedido != null) && ($dataLevel == 'is_maquinaria')) {
                        echo '<font color="#0B610B"><b>Ya tienes un archivo cargado</b></font><br>
                        <br>
                             <input type="file" name="pedido"><br>';
                    }
                    ?>
                        </tr>
                        
                        
                        <tr><td><b>Contrato</b></td>
                            <td>
                                
                               <?php
                    if (($data->contrato == null) && ($dataLevel == 'is_admin')) {
                        echo '<font color="red">No tienes un archivo cargado</font><br>
                        <br>
                             <input type="file" name="contrato"><br>';
                    } else if (($data->contrato != null) && ($dataLevel == 'is_admin')) {
                        echo '<font color="#0B610B"><b>Ya tienes un archivo cargado</b></font><br><br>
                       
                             <input type="file" name="contrato"><br>';
                    }
                    ?>  
                                
                                            <?php
                    if (($data->contrato == null) && ($dataLevel == 'is_editor')) {
                        echo '<font color="red">No tienes un archivo cargado</font><br>
                        <br>
                             <input type="file" name="contrato"><br>';
                    } else if (($data->contrato != null) && ($dataLevel == 'is_editor')) {
                        echo '<font color="#0B610B"><b>Ya tienes un archivo cargado</b></font><br><br>
                       
                             <input type="file" name="contrato"><br>';
                    }
                    ?> 
                                                        <?php
                    if (($data->contrato == null) && ($dataLevel == 'is_maquinaria')) {
                        echo '<font color="red">No tienes un archivo cargado</font><br>
                        <br>
                             <input type="file" name="contrato"><br>';
                    } else if (($data->contrato != null) && ($dataLevel == 'is_maquinaria')) {
                        echo '<font color="#0B610B"><b>Ya tienes un archivo cargado</b></font><br><br>
                       
                             <input type="file" name="contrato"><br>';
                    }
                    ?>   
                                
                                                                 <?php
                    if (($data->contrato == null) && ($dataLevel == 'is_director')) {
                        echo '<font color="red">No tienes un archivo cargado</font><br>
                        <br>
                             <input type="file" name="contrato"><br>';
                    } else if (($data->contrato != null) && ($dataLevel == 'is_director')) {
                        echo '<font color="#0B610B"><b>Ya tienes un archivo </b></font><br><br>
                       
                             <input type="file" name="contrato"><br>';
                    }
                    ?>   
                                                                      <?php
                    if (($data->contrato == null) && ($dataLevel == 'is_Gerente_Ventas')) {
                        echo '<font color="red">No tienes un archivo cargado</font><br>
                        <br>
                             <input type="file" name="contrato"><br>';
                    } else if (($data->contrato != null) && ($dataLevel == 'is_Gerente_Ventas')) {
                        echo '<font color="#0B610B"><b>Ya tienes un archivo </b></font><br><br>
                       
                             <input type="file" name="contrato"><br>';
                    }
                    ?>        
                                
                            </td>
                        <tr>
                            
                      <td colspan="2">    <center> <input  class="btn btn-success" title="Da clic para guardar los datos" type="submit" value="Guardar" >
                                <a title="Da clic para regresar al menú" href="../../ClienteSeguimiento" class="btn btn-warning">Cancelar</a></center>
</td>
                        </tr>
                        </tr>
                        


                </tbody>
        </div>
                
        </table>
        </div>
       
        <!-- file lama -->
                    <input type="hidden" name="id" value="<?= $data->id_clienteseguimiento?>">
                    <!-- ID -->
                    <input type="hidden" name="id" value="<?= $data->id_clienteseguimiento ?>">

                   <!-- <input type="submit" name="submit" value="Enviar" class="btn btn-default">-->


                   
                </form>

            </div>
        </div>
        <!-- END KONTEN UTAMA -->

        <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    </body>

       