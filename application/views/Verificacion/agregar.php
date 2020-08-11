<!--
 * @author  Saul González & Karen González
* Fecha : Ultimo Cambio 26/03/2019 Hora 10:15 pm
 * Fecha : Ultimo Cambio 03/04/2019 Hora 10:36 pm
 * * Fecha : Ultimo Cambio 20/07/2019 Hora 5:47 pm  
Fecha : Ultimo Cambio 30/07/2019 Hora 10:07 am
   
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


        <!-- Para traerse el rol que esta registrado-->
        <?php
        //check user level
        $dataLevel = $this->userlevel->checkLevel($role);


        //check user level
        ?>



    </script>


    <script type="text/javascript">
        function showContent() {
            element = document.getElementById("content");
            elementempresa = document.getElementById("contentempresa");
            check = document.getElementById("check");
            if (check.checked) {

                element.style.display = 'block';
                elementempresa.style.display = 'none';
                deseleccionarClienteCombo();

            }
            else {

                element.style.display = 'none';
                elementempresa.style.display = 'block';
                limpiarCajaTextoCliente();
            }
        }

        function limpiarCajaTextoCliente() {
            document.getElementById('cliente_temporal').value = "";
        }

        function deseleccionarClienteCombo() {
            document.getElementById("cliente").selectedIndex = 0;

        }
    </script>




</head>




<body>


    <div id="maquinaria"> <BR>
        <div class="container" >      
            <div class="alert alert-info alert-dismissable">

                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Agregar</strong> Ingresa los datos según corresponda
            </div>
            <!--<h1>Agregar Datos</h1>-->
            <MARQUEE SCROLLDELAY =200></MARQUEE>
            <form name="formulario" id="formal" role="form"  action="<?= base_url() ?>verificacion/insertdata" method="post" enctype="multipart/form-data">


                <div class="form-group">
                    <input type="hidden" class="form-control" id="id_maquinaria"  name="id_clienteseguimiento">
                </div>
                <div class="jumbotron">
                    <div class="row">

                        <?php
                        if ($dataLevel == 'is_admin') {
                            echo '
                            
                         <div class="row">
                        <div class="form-group col-xs-4">
                        <label>No máquina</label><br>
                        <input class="form-control input-sm"  type="text" name="no_maqui"><br>
                        </div>
                        
                        <div class="form-group col-xs-4">
                        <label>Modelo</label><br>
                        <input type="text" class="form-control input-sm"   name="modelo"><br>
                        </div>
                       
                        <div class="form-group col-xs-4">
                        <label>Empresa</label><br>
                        <select  name="empresa" class="form-control input-sm"  id="empresa" require>
                        <option  value="">Selecciona una opción</option>
                        <OPTION VALUE="MAKBOX S DE RL DE CV">MAKBOX S DE RL DE CV</OPTION>
                        <OPTION VALUE="ROBUSPACK S DE RL DE CV">ROBUSPACK S DE RL DE CV</OPTION>
                        </select><br>
                        </div>
                        </div>
                        
                     <div class="row">
                        <div class="form-group col-xs-4">
                         <label>Serie</label><br>
                        <input type="text" class="form-control input-sm" name="serie"><br>
                            </div>
                        
                        ';
                            ?>

                            <div class="form-group col-xs-4" id="contentempresa" style="display: block;">
                                <label for="nombre">Cliente</label>
                                <select required id="cliente" onChange="habilitar(this.form)" class="form-control input-sm"  name="cliente" <?php echo form_dropdown('clienteCombo', $clienteCombo, '#', 'id="clienteCombo"'); ?> </select>

                            </div>






                            <div class="form-group col-xs-4" id="content" style="display: none;">
                                <label for="nombre">Cliente</label>
                                <input type="text" id="cliente_temporal" class="form-control input-sm" name="cliente_temporal"><br>
                            </div>


                            <div class="form-group col-xs-4">
                                <label>No. Pedimento</label><br>
                                <input type="text" class="form-control input-sm" name="pedimento"><br>
                            </div>




                        </div>




                        <div class="row">
                            <div class="form-group col-xs-4 "></div>
                            <div class="form-group col-xs-4"> <input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent()" />
                                <label><p style="color:blue;font-size:12px;">  &nbsp;Selecciona si no aparece el cliente</p></label>
                            </div>
                        </div>
                        <?php
                        echo '
                        <!--<label>Cliente</label><br>
                        <input type="text" class="form-control input-sm" name="cliente"><br><br>-->
                       
                         <div class="row">
                        
                           
                        <div class="form-group col-xs-4">
                         <label>Pedimento</label><br>
                         <input type="file" name="pedimentopdf"><br>
                               </div>
                            

                         <div class="form-group col-xs-4">
                        <label>Foto</label><br>
                        <input type="file" name="fotopost"><br>
                         </div>
                          <div class="form-group col-xs-4">
                        <label>No. Factura</label><br>
                        <input class="form-control input-sm" type="text" name="num_factura"><br>
                         </div>
</div>

                    <div class="row">
                   
                          
                              <div class="form-group col-xs-4">
                        <label>Factura</label>
                        <input type="file" name="fotopostpdf">
                        </div>
                         <div class="form-group col-xs-4">
                        <label>Refacciones</label><br>
                        <input type="file" name="refacciones"><br>
                        </div>
                        
                        ';
                        ?>
                     </div>
                <div class="row">
                          <div class="form-group col-xs-4">
                        <label for="nombre">Comentario</label>
                             <textarea name="comentario" class="form-control input-sm"  rows="6" cols="80" placeholder="Ingresa un comentario" require></textarea>
                   
                    </div>
                    
                     <div class="form-group col-xs-4">
                        <label for="nombre">Observación</label>
                             <textarea name="observacion" class="form-control input-sm"  rows="6" cols="80" placeholder="Ingresa un obsrvación" require></textarea>
                   
                    </div>
                    </div>
                    <?php
                    
                    } else if ($dataLevel == 'is_Gerente_Ventas') {
                            echo '
                            
                         <div class="row">
                        <div class="form-group col-xs-4">
                        <label>No máquina</label><br>
                        <input class="form-control input-sm"  type="text" name="no_maqui"><br>
                        </div>
                        
                        <div class="form-group col-xs-4">
                        <label>Modelo</label><br>
                        <input type="text" class="form-control input-sm"   name="modelo"><br>
                        </div>
                       
                        <div class="form-group col-xs-4">
                        <label>Empresa</label><br>
                        <select  name="empresa" class="form-control input-sm"  id="empresa" require>
                        <option  value="">Selecciona una opción</option>
                        <OPTION VALUE="MAKBOX S DE RL DE CV">MAKBOX S DE RL DE CV</OPTION>
                        <OPTION VALUE="ROBUSPACK S DE RL DE CV">ROBUSPACK S DE RL DE CV</OPTION>
                        </select><br>
                        </div>
                        </div>
                        
                     <div class="row">
                        <div class="form-group col-xs-4">
                         <label>Serie</label><br>
                        <input type="text" class="form-control input-sm" name="serie"><br>
                            </div>
                        
                        ';
                            ?>

                            <div class="form-group col-xs-4" id="contentempresa" style="display: block;">
                                <label for="nombre">Cliente</label>
                                <select required id="cliente" onChange="habilitar(this.form)" class="form-control input-sm"  name="cliente" <?php echo form_dropdown('clienteCombo', $clienteCombo, '#', 'id="clienteCombo"'); ?> </select>

                            </div>






                            <div class="form-group col-xs-4" id="content" style="display: none;">
                                <label for="nombre">Cliente</label>
                                <input type="text" id="cliente_temporal" class="form-control input-sm" name="cliente_temporal"><br>
                            </div>


                            
                                <input type="hidden" class="form-control input-sm" name="pedimento"><br>
                            


<div class="form-group col-xs-4">
                        <label>Factura</label>
                        <input type="file" name="fotopostpdf">
                        </div>
                       
                        </div>




                     
                            <div class="form-group col-xs-4 "></div>
                            <div class="form-group col-xs-4"> <input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent()" />
                                <label><p style="color:blue;font-size:12px;">  &nbsp;Selecciona si no aparece el cliente</p></label>
                            </div>
                        </div>
                
                
                
                
               
                        <input type="hidden" name="refacciones"><br>
                       <input type="hidden" class="form-control input-sm" name="comentario">

                        <?php
                        echo '
                        <!--<label>Cliente</label><br>
                        <input type="text" class="form-control input-sm" name="cliente"><br><br>-->
                       
                         <div class="row">
                        
                           
                       
                         <input type="hidden" name="pedimentopdf">
                        
                            

                     
                        <input type="hidden" name="foto"><br>
                         
                          <div class="form-group col-xs-4">
                        <label>No. Factura</label><br>
                        <input class="form-control input-sm" type="text" name="num_factura"><br>
                         </div>
</div>

               
                        ';
                    }else if ($dataLevel == 'is_editor') {
                        echo '
                            
                          <div class="row">
                        <div class="form-group col-xs-4">
                        <label>No máquina</label><br>
                        <input class="form-control input-sm"  type="text" name="no_maqui"><br>
                        </div>
                        
                        <div class="form-group col-xs-4">
                        <label>Modelo</label><br>
                        <input type="text" class="form-control input-sm"   name="modelo"><br>
                        </div>
                       
                        <div class="form-group col-xs-4">
                        <label>Empresa</label><br>
                        <select  name="empresa" class="form-control input-sm"  id="empresa" require>
                        <option  value="">Selecciona una opción</option>
                        <OPTION VALUE="MAKBOX S DE RL DE CV">MAKBOX S DE RL DE CV</OPTION>
                        <OPTION VALUE="ROBUSPACK S DE RL DE CV">ROBUSPACK S DE RL DE CV</OPTION>
                        </select><br>
                        </div>
                        </div>
                        
                     <div class="row">
                        <div class="form-group col-xs-4">
                         <label>Serie</label><br>
                        <input type="text" class="form-control input-sm" name="serie"><br>
                            </div>
                        
                        ';
                        ?>

                        <div class="form-group col-xs-4" id="contentempresa" style="display: block;">
                            <label for="nombre">Cliente</label>
                            <select required id="cliente" onChange="habilitar(this.form)" class="form-control input-sm"  name="cliente" <?php echo form_dropdown('clienteCombo', $clienteCombo, '#', 'id="clienteCombo"'); ?> </select>

                        </div>






                        <div class="form-group col-xs-4" id="content" style="display: none;">
                            <label for="nombre">Cliente</label>
                            <input id="cliente_temporal" type="text" class="form-control input-sm" name="cliente_temporal"><br>
                        </div>


                        <div class="form-group col-xs-4">
                            <label>No. Pedimento</label><br>
                            <input type="text" class="form-control input-sm" name="pedimento"><br>
                        </div>




                    </div>




                    <div class="row">
                        <div class="form-group col-xs-4"></div>
                        <div class="form-group col-xs-4"> <input type="checkbox" name="check" id="check" value="1" onchange="javascript
                                :showContent()" />
                            <label><p style="color:blue;font-size:12px;">  &nbsp;Selecciona si no aparece el cliente</p></label>
                        </div>
                    </div>
                    <?php
                    echo '
                        <!--<label>Cliente</label><br>
                        <input type="text" class="form-control input-sm" name="cliente"><br><br>-->
                       
                         <div class="row">
                        
                           
                        <div class="form-group col-xs-4">
                         <label>Pedimento</label><br>
                         <input type="file" name="pedimentopdf"><br>
                               </div>
                            

                         <div class="form-group col-xs-4">
                        <label>Foto</label><br>
                        <input type="file" name="fotopost"><br>
                         </div>
                          <div class="form-group col-xs-4">
                        <label>No. Factura</label><br>
                        <input class="form-control input-sm" type="text" name="num_factura"><br>
                         </div>
</div>

                    <div class="row">
                   
                          
                              <div class="form-group col-xs-4">
                        <label>Factura</label>
                        <input type="file" name="fotopostpdf">
                        </div>
                         <div class="form-group col-xs-4">
                        <label>Refacciones</label><br>
                        <input type="file" name="refacciones"><br>
                        
                        </div>
                        ';
                    ?>
                     <div class="form-group col-xs-4">
                        <label for="nombre">Comentario</label>
                             <textarea name="comentario" class="form-control input-sm"  rows="6" cols="80" style="resize:none;" placeholder="Ingresa un comentario" require></textarea>
                   
                    </div>
                  
                    
                      <div class="form-group col-xs-4">
                        <label for="nombre">Observación</label>
                             <textarea name="observacion" class="form-control input-sm"  rows="6" cols="80" placeholder="Ingresa un obsrvación" require></textarea>
                   
                    </div>
                    </div>
                    
                    <?php
                } else if ($dataLevel == 'is_logistica') {
                    echo '
                         
                        <div class="row">
                        <div class="form-group col-xs-4">
                        <label>No máquina</label><br>
                        <input class="form-control input-sm"  type="text" name="no_maqui"><br>
                        </div>
                        
                        <div class="form-group col-xs-4">
                        <label>Modelo</label><br>
                        <input type="text" class="form-control input-sm"   name="modelo"><br>
                        </div>
                       
                        <div class="form-group col-xs-4">
                        <label>Empresa</label><br>
                        <select  name="empresa" class="form-control input-sm"  id="empresa" require>
                        <option  value="">Selecciona una opción</option>
                        <OPTION VALUE="MAKBOX S DE RL DE CV">MAKBOX S DE RL DE CV</OPTION>
                        <OPTION VALUE="ROBUSPACK S DE RL DE CV">ROBUSPACK S DE RL DE CV</OPTION>
                        </select><br>
                        </div>
                        </div>
                        
                     <div class="row">
                        <div class="form-group col-xs-4">
                         <label>Serie</label><br>
                        <input type="text" class="form-control input-sm" name="serie"><br>
                            </div>
                        
                        ';
                            ?>

                            <div class="form-group col-xs-4" id="contentempresa" style="display: block;">
                                <label for="nombre">Cliente</label>
                                <select required id="cliente" onChange="habilitar(this.form)" class="form-control input-sm"  name="cliente" <?php echo form_dropdown('clienteCombo', $clienteCombo, '#', 'id="clienteCombo"'); ?> </select>

                            </div>






                            <div class="form-group col-xs-4" id="content" style="display: none;">
                                <label for="nombre">Cliente</label>
                                <input type="text" id="cliente_temporal" class="form-control input-sm" name="cliente_temporal"><br>
                            </div>


                            <div class="form-group col-xs-4">
                                <label>No. Pedimento</label><br>
                                <input type="text" class="form-control input-sm" name="pedimento"><br>
                            </div>




                        </div>




                        <div class="row">
                            <div class="form-group col-xs-4 "></div>
                            <div class="form-group col-xs-4"> <input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent()" />
                                <label><p style="color:blue;font-size:12px;">  &nbsp;Selecciona si no aparece el cliente</p></label>
                            </div>
                        </div>
                        
                         <input type="hidden" class="form-control input-sm" name="comentario">
                        <?php
                        echo '
                        <!--<label>Cliente</label><br>
                        <input type="text" class="form-control input-sm" name="cliente"><br><br>-->
                       
                         <div class="row">
                        
                           
                        <div class="form-group col-xs-4">
                         <label>Pedimento</label><br>
                         <input type="file" name="pedimentopdf"><br>
                               </div>
                            

                         <div class="form-group col-xs-4">
                        <label>Foto</label><br>
                        <input type="file" name="fotopost"><br>
                         </div>
                        <input type="hidden" name="num_factura">
                        <input type="hidden" name="factura">
                        <input type="hidden" name="refacciones">
                        ';
                        ?>
                         
                        <div class="form-group col-xs-4">
                        <label for="nombre">Observación</label>
                             <textarea name="observacion" class="form-control input-sm"  rows="6" cols="80" placeholder="Ingresa un obsrvación" require></textarea>
                   
                    </div>
                         </div>
                         <?php
                } else if ($dataLevel == 'is_credito') {
                    echo '
                        <label>Factura</label><br>
                        <input type="file" name="fotopostpdf"><br>';
                    
                    ?>
                             <input type="hidden" class="form-control input-sm" name="comentario">
                         <?php
                } else if ($dataLevel == 'is_refacciones') {
                    echo '
                        <label>Foto</label><br>
                        <input type="file" name="fotopost"><br>
                        
';
                } else {
                    
                }
                ?>





                <center><input class="btn btn-success" type="submit" value="Agregar" data-toggle="tooltip" data-placement="right" title="Da clic para guardar los datos">

                    <a title="Da clic para regresar al menú" href="javascript:window.history.go(-1);"class="btn btn-danger">Cancelar</a>
                </center>
            </form>

        </div>
    </div>
    <!-- END KONTEN UTAMA -->

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>

</body>
</html>
