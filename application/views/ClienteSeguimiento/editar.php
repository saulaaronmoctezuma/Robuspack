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
<<<<<<< HEAD
    <body>
  <div id="maquinaria">
            <form action="<?= base_url() ?>ClienteSeguimiento/updatedata" method="post" enctype="multipart/form-data">
                
=======

    <script type="text/javascript">
        function showContent() {
            element = document.getElementById("content");
            elementempresa = document.getElementById("contentempresa");
            check = document.getElementById("check");
            if (check.checked) {

                element.style.display = 'block';
                elementempresa.style.display = 'none';
                deseleccionarClienteCombo();
                document.getElementById('cliente_temporal').disabled = false;
                document.getElementById('cliente').disabled = true;
            }
            else {

                element.style.display = 'none';
                elementempresa.style.display = 'block';
                limpiarCajaTextoCliente();
                document.getElementById('cliente_temporal').disabled = true;
                document.getElementById('cliente').disabled = false;
            }
        }

        function limpiarCajaTextoCliente() {
            document.getElementById('').value = "";
        }

        function deseleccionarClienteCombo() {
            document.getElementById("cliente").selectedIndex = 0;

        }
    </script>
    <body>
        <div id="maquinaria">
            <form action="<?= base_url() ?>ClienteSeguimiento/updatedata" method="post" enctype="multipart/form-data">

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                <MARQUEE SCROLLDELAY =200></MARQUEE>
                <div class="container" ><h1>Actualizar datos</h1>
                    <table class="table table-bordered table-striped">
                        <tbody>


<<<<<<< HEAD
                        
                        <tr>

                            <td><b>Cliente</b></td>
                           <td colspan="3">  
                               
                               
                              <select id="a3" class="form-control" name="cliente"   <?php echo form_dropdown('clienteCombo', $clienteCombo, $data->cliente, '#', 'id="clienteCombo"'); ?> </select>
                           
                              <!--  <input id="cliente" class="form-control" type="text" name="cliente" value="<?= $data->cliente ?>">-->
                           
                           </td>
                        
                        
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
                                <option value="Cancelada" <?php if ($data->nivel == "Cancelada") {echo "Selected"; } ?>>Cancelada</option>
                                
                                  <option value="Vendida" <?php if ($data->nivel == "Vendida") {echo "Selected"; } ?>>Vendida</option>
                                
                                
                            </optgroup>
                           </SELECT>
                                          </td>
                        </tr>
                        
                   <tr>
                            <td><b>Modelo Máquina</b></td>
                          
                            <td colspan="3">
                          
                                <input id="modelo_maquina" class="form-control" type="text" name="modelo_maquina" value="<?= $data->modelo_maquina ?>">
                           
                            </td>
                           
                           
                           
                  </tr>
                  
                  <tr>
                      <td><b>Número Máquina</b></td>
                      
                      <td colspan="3">
                          
                          <input id="numero_maquina" class="form-control" type="text" name="numero_maquina" value="<?= $data->numero_maquina ?>">
                      </td>
                        
                  </tr>  
                  
                  
                  
                  
                   <tr>
                      <td><b>Valor de Cotización</b></td>
                      
                      <td colspan="3">
                          
                          <input id="valor_cotizacion" class="form-control" type="text" name="valor_cotizacion" value="<?= $data->valor_cotizacion ?>">
                      </td>
                        
                  </tr> 
                  
                  
                  
                  
                   <tr>
                      <td><b>Último día de visita</b></td>
                      
                      <td colspan="3">
                          
                          <input id="fecha_ultima_visita" class="form-control" type="date" name="fecha_ultima_visita" value="<?= $data->fecha_ultima_visita ?>">
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
=======

                            <tr>

                                <td><b>Cliente</b></td>
                                <td colspan="3">  

                                    <div class="form-group col-xs-12"  id="contentempresa" style="display: block;">

                                        <select id="cliente" class="form-control" name="cliente"   <?php echo form_dropdown('clienteCombo', $clienteCombo, $data->cliente, '#', 'id="clienteCombo"'); ?> </select>
                                    </div>



                                    <div class="form-group col-xs-10" id="content" style="display: none;">

                                        <input type="text" id="cliente_temporal" disabled="" class="form-control" name="cliente">
                                    </div>

                                    </div>




                                    <div class="row">

                                        <div class="form-group col-xs-4"> <input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent()" />
                                            <label><p style="color:blue;font-size:12px;">  &nbsp;Selecciona si no aparece el cliente</p></label>
                                        </div>
                                    </div>
                                </td>


                            </tr> 

                            <tr>
                                <td><b>Nivel</b></td>
                                <td colspan="3">
                                   <!-- <input id="a2" class="form-control" type="text" name="compromiso" value="<?= $data->compromiso ?>">-->
                                    <SELECT name="nivel" class="form-control" > 
                                        <optgroup label="Selecciona una opción">
                                            <option value="" <?php if ($data->nivel == "") {
            echo "Selected";
        } ?>>Selecciona una opción</option>

                                            <option value="1" <?php if ($data->nivel == "1") {
            echo "Selected";
        } ?>>1</option>
                                            <option value="2" <?php if ($data->nivel == "2") {
            echo "Selected";
        } ?>>2</option>
                                            <option value="3" <?php if ($data->nivel == "3") {
            echo "Selected";
        } ?>>3</option>
                                            <option value="4" <?php if ($data->nivel == "4") {
            echo "Selected";
        } ?>>4</option>
                                            <option value="NS" <?php if ($data->nivel == "NS") {
            echo "Selected";
        } ?>>NS</option>


                                        </optgroup>
                                    </SELECT>
                                </td>
                            </tr>

                            <tr>
                                <td><b>Modelo Máquina</b></td>

                                <td colspan="3">

                                    <input id="modelo_maquina" class="form-control" type="text" name="modelo_maquina" value="<?= $data->modelo_maquina ?>">

                                </td>



                            </tr>

                            <tr>
                                <td><b>Número Máquina</b></td>

                                <td colspan="3">

                                    <input id="numero_maquina" class="form-control" type="text" name="numero_maquina" value="<?= $data->numero_maquina ?>">
                                </td>

                            </tr>  




                            <tr>
                                <td><b>Valor de Cotización</b></td>

                                <td colspan="3">

                                    <input id="valor_cotizacion" class="form-control" type="text" name="valor_cotizacion" value="<?= $data->valor_cotizacion ?>">
                                </td>

                            </tr> 




                            <tr>
                                <td><b>Último día de visita</b></td>

                                <td colspan="3">

                                    <input id="fecha_ultima_visita" class="form-control" type="date" name="fecha_ultima_visita" value="<?= $data->fecha_ultima_visita ?>">
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
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                                <td><b>Fecha prospeccion</b></td>

                                <td colspan="3">

                                    <input id="fecha_prospeccion" class="form-control" type="date" name="fecha_prospeccion" value="<?= $data->fecha_prospeccion ?>">
                                </td>


                            </tr>


                            <tr>
                                <td><b>LLamada cliente</b></td>

                                <td colspan="3">

                                    <input id="llamadas_cliente" class="form-control" type="text" name="llamadas_cliente" value="<?= $data->llamadas_cliente ?>">
                                </td>

                            </tr> 




                            <tr>

<<<<<<< HEAD
                                <td><b>Fecha en que nos contacto el cliente</b></td>
=======
                                <td><b>Fecha contactó al cliente</b></td>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                                <td colspan="3">

                                    <input id="fecha_contacto_cliente" class="form-control" type="date" name="fecha_contacto_cliente" value="<?= $data->fecha_contacto_cliente ?>">
                                </td>


                            </tr>


                            <tr>
<<<<<<< HEAD
                                <td><b>5 LLamadas Hechas</b></td>
=======
                                <td><b>LLamadas Hechas</b></td>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                                <td colspan="3">

                                    <input id="llamdas_hechas" class="form-control" type="text" name="llamdas_hechas" value="<?= $data->llamdas_hechas ?>">
                                </td>

                            </tr> 

                            <tr>

                                <td><b>Fecha Ultima Llamada</b></td>

                                <td colspan="3">

                                    <input id="fecha_ult_llamada" class="form-control" type="date" name="fecha_ult_llamada" value="<?= $data->fecha_ult_llamada ?>">
                                </td>


                            </tr>

                            <tr>
                                <td><b>Numero de visitas</b></td>

                                <td colspan="3">

                                    <input id="numero_visitas" class="form-control" type="text" name="numero_visitas" value="<?= $data->numero_visitas ?>">
                                </td>

                            </tr> 


                            
                               <tr>
<<<<<<< HEAD
                                <td><b>¿La venta esta cerrada?</b></td>
=======
                                <td><b>Venta Cerrada</b></td>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                <td colspan="3">
                                    <SELECT name="ventas_cerrada" class="form-control" > 
                                        <optgroup label="Selecciona una opción">
                                            <option value="" <?php if ($data->ventas_cerrada == "") {
                                                                        echo "Selected";
                                                                    } ?>>Selecciona una opción</option> 

                                            <option value="Sí" <?php if ($data->ventas_cerrada == "Sí") {
                                                                      echo "Selected";
                                                                   } ?>>Sí</option>
                                            <option value="No" <?php if ($data->ventas_cerrada == "No") {
                                                                        echo "Selected";
                                                                    } ?>>No</option>


                                        </optgroup>
                                    </SELECT>
                                </td>
                            </tr>
                            
                            <tr>
<<<<<<< HEAD
                                <td><b>¿Es cliente asignado?</b></td>
=======
                                <td><b>Cliente Asignado</b></td>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                <td colspan="3">
                                    <SELECT name="cliente_asignado" class="form-control" > 
                                        <optgroup label="Selecciona una opción">
                                            <option value="" <?php if ($data->cliente_asignado == "") {
                                                                        echo "Selected";
                                                                    } ?>>Selecciona una opción</option> 

                                            <option value="Sí" <?php if ($data->cliente_asignado == "Sí") {
                                                                      echo "Selected";
                                                                   } ?>>Sí</option>
                                            <option value="No" <?php if ($data->cliente_asignado == "No") {
                                                                        echo "Selected";
                                                                    }  ?>>No</option>
                                            
 
                                        </optgroup>
                                    </SELECT>
                                </td>
                            </tr>
                            
                            
                            
                               <tr>
<<<<<<< HEAD
                                <td><b>¿Es cliente nuevo?</b></td>
=======
                                <td><b>Cliente Nuevo</b></td>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                <td colspan="3">
                                    <SELECT name="cliente_nuevo" class="form-control" > 
                                        <optgroup label="Selecciona una opción">
                                            <option value="" <?php if ($data->cliente_nuevo == "") {
                                                                        echo "Selected";
                                                                    } ?>>Selecciona una opción</option> 

                                            <option value="Sí" <?php if ($data->cliente_nuevo == "Sí") {
                                                                      echo "Selected";
                                                                   } ?>>Sí</option>
                                            <option value="No" <?php if ($data->cliente_nuevo == "No") {
                                                                        echo "Selected";
                                                                    } ?>>No</option>


                                        </optgroup>
                                    </SELECT>
                                </td>
                            </tr>



<<<<<<< HEAD
                       
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
=======
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
        <input type="hidden" name="id" value="<?= $data->id_clienteseguimiento ?>">
        <!-- ID -->
        <input type="hidden" name="id" value="<?= $data->id_clienteseguimiento ?>">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                   <!-- <input type="submit" name="submit" value="Enviar" class="btn btn-default">-->


<<<<<<< HEAD
                   
                </form>

            </div>
        </div>
        <!-- END KONTEN UTAMA -->

        <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    </body>

       
=======

    </form>

</div>
</div>
<!-- END KONTEN UTAMA -->

<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
</body>

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
