<!--
 * @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 25/06/2019 Hora 10:33 am
   Fecha : Ultimo Cambio 26/06/2019 Hora 12:36 am
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
        <!-- Para traerse el rol que esta registrado-->
        <?php
        //check user level
        $dataLevel = $this->userlevel->checkLevel($role);


        //check user level
        ?>
    </head>
    <body>

        <!--<div class="container">
          <h1>Agregar placa nuevo</h1>
          <hr>
        </div>-->

        <!-- KONTEN UTAMA -->


        <!--
        '. form_dropdown('cliente', $clienteCombo, '#', 'id="cliente"').'<br>
        
           <label>Cliente</label><br>
              <input form-control  style="width: 270px; height: 35px" type="text" name="cliente"><br><br>
             


              <div class="row">
              <div class="form-group col-xs-3">
              <label>Necesidad</label><br>
              
               <textarea name="necesidad" class="form-control input-sm"  rows="6" cols="80" style="resize:none;" placeholder="Ingresa un compromiso" require></textarea>
              
              </div>
              </div>
              

              <div class="row">
              <div class="form-group col-xs-3">
              <label> Compromiso</label><br>
              <textarea name="compromiso" class="form-control input-sm"  rows="6" cols="80" style="resize:none;" placeholder="Ingresa un compromiso" require></textarea>
               <br>
              </div>
              </div>
              


              <div class="row">
              <div class="form-group col-xs-3">
              <label> Notas</label><br>
              <textarea name="notas" class="form-control input-sm"  rows="6" cols="80" style="resize:none;" placeholder="Ingresa un notas" require></textarea>
               <br>
              </div>
              </div>
              
              
             
              
               <label>Cotización</label><br>
               <input type="file" name="cotizacion"><br>
                  
              <label>Pedido</label><br>
              <input type="file" name="pedido"><br>
              
              
              <label>Contrato</label><br>
              <input type="file" name="contrato"><br>
        -->
        
        
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

        
        <div id="maquinaria">
            <div class="container" >      
                <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Bienvenido</strong> Agrega los datos segun corresponda
                </div>
                <h1>Agregar Datos</h1>
                <MARQUEE SCROLLDELAY =200></MARQUEE>
                <form action="<?= base_url() ?>ClienteSeguimiento/insertdata" method="post" enctype="multipart/form-data">


                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id_maquinaria"  name="id_clienteseguimiento">
                    </div>
                    <div class="jumbotron">
                        <div class="row">





                            <div class="form-group col-xs-6"  id="contentempresa" style="display: block;">
                                <label for="nombre">Cliente</label>
                                <select required id="cliente" class="form-control input-sm"  
                                        name="cliente" <?php echo form_dropdown('clienteCombo', $clienteCombo, '#', 'id="clienteCombo"'); ?> </select>
                            </div>
                            
                            
                            <div class="form-group col-xs-6" id="content" style="display: none;">
                                <label for="nombre">Cliente</label>
                                <input type="text" id="cliente_temporal" disabled="" class="form-control input-sm" name="cliente">
                            </div>
                            
                            
                                <div class="form-group col-xs-6">
                                <label>Nivel</label>


                                <select name="nivel" class="form-control input-sm">
                                    <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="1">1</OPTION>
                                    <OPTION VALUE="2">2</OPTION>
                                    <OPTION VALUE="3">3</OPTION>
                                    <OPTION VALUE="4">4</OPTION>
                                    <OPTION VALUE="NS">NS</OPTION>
                                </select>

                            </div>
                            
                             </div>
                        
                        <div class="row">
                            <div class="form-group col-xs-6"> <input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent()" />
                                <label><p style="color:blue;font-size:12px;">  &nbsp;Selecciona si no aparece el cliente</p></label>
                            </div>

                        </div>
                        
                        
                        
                      
                        
                      

                        <div class="row">
                           
                            <div class="form-group col-xs-6">
                                <label for="nombre"> Modelo de Máquina </label>
                                <input id="modelo_maquina" type="text" class="form-control"  name="modelo_maquina" placeholder="Ingresa el modelo de la máquina">
                            </div>
                            
                              <div class="form-group col-xs-6">
                                <label for="nombre">Número de Máquina </label>
                                <input id="numero_maquina" type="text" class="form-control"  name="numero_maquina" placeholder="Ingresa el número de la máquina">
                            </div>
                            
                            
                           
                            
                            

                        </div>


                        
                        
                        <br>
                       
                        
                        


                        <div class="row">
                            
                            
                              <div class="form-group col-xs-6">
                                <label for="nombre">Valor Cotización </label>
                                <input id="valor_cotizacion" type="text" class="form-control"  name="valor_cotizacion" placeholder="Ingresa el valor de la cotización">
                            </div>
                            
                             <div class="form-group col-xs-6">
                                <label for="nombre">Último día de visita </label>
                                <input id="fecha_dia_visita" type="date" class="form-control"  name="fecha_ultima_visita" placeholder="Ingresa el valor de la fecha_ultima_visita">
                            </div>
                            
                            
                           
                            
                             


                        </div>
                        
                        
                        
                        




                        <div class="row">
                            
                            
                             <div class="form-group col-xs-6">
                                <label for="nombre">Necesidad</label>
                                <textarea name="necesidad" class="form-control input-sm"  rows="6" cols="80" style="resize:none;" placeholder="Ingresa una necesidad" require></textarea>

                            </div>
                            
                            <div class="form-group col-xs-6">
                                <label for="nombre">Compromiso</label>
                                <textarea name="compromiso" class="form-control input-sm"  rows="6" cols="80" style="resize:none;" placeholder="Ingresa un compromiso" require></textarea>
                            </div>


                            


                        </div>
                        
                        
                        
                            
                              <br>
                        <div class="row">
                            
                            
                            <div class="form-group col-xs-6">
                                <label for="nombre">Notas</label>
                                <textarea name="notas" class="form-control input-sm"  rows="6" cols="80" style="resize:none;" placeholder="Ingresa una nota" require></textarea>

                            </div>
                            
                            <div class="form-group col-xs-6">
                                <label for="nombre">Fecha Prospección </label>
                                <input id="fecha_prospeccion" type="date" class="form-control"  name="fecha_prospeccion">
                            </div>
                           

                        </div>
                              
                              
                         
                              
                              
                                     <br>
                        <div class="row">
                            
                            
                             
                             <div class="form-group col-xs-6">
                                <label for="nombre">Llamada Cliente </label>
                                <input id="llamada cliente" type="text" class="form-control"  name="llamadas_cliente">
                            </div>
                            
                            
                            <div class="form-group col-xs-6">
                                <label for="nombre">Fecha Contacto Cliente </label>
                                <input id="fecha_prospeccion" type="date" class="form-control"  name="fecha_contacto_cliente">
                            </div>
                            
                            


                        </div>
                                     
                                     <br>
                                                
                                                
                                                
                        <div class="row">
                            
                            <div class="form-group col-xs-6">
                                <label for="nombre">Llamadas Hechas</label>
                                <input id="llamdas_hechas" type="text" class="form-control"  name="llamdas_hechas" placeholder="Ingresa el número de llamadas hechas">
                            </div>
                            
                            
                            <div class="form-group col-xs-6">
                                <label for="nombre">Fecha Ultima Llamada </label>
                                <input id="fecha_ult_llamada" type="date" class="form-control"  name="fecha_ult_llamada">
                            </div>
                            
                           

                        </div>
                                            
                                  
                                     <br>       
                                            
                                                                       <div class="row">
                           <div class="form-group col-xs-6">
                                <label for="nombre">Número de Visita </label>
                                <input id="numero_visitas" type="text" class="form-control"  name="numero_visitas" placeholder="">
                            </div>
                                                                           
                                                                               <div class="form-group col-xs-6">
                                <label for="nombre">Venta Cerrada </label>
                                
                                
                                
                                <select name="ventas_cerrada" class="form-control input-sm">
                                    <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="Sí">Sí</OPTION>
                                    <OPTION VALUE="No">No</OPTION>
                                </select>
                                
                            </div>

                        </div>
                                            
                                     <br>
                                            
                                            
                                                                       <div class="row">
                            <div class="form-group col-xs-6">
                                <label for="nombre">¿Cliente Asignado? </label>
                                
                                <select name="cliente_asignado" class="form-control input-sm">
                                    <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="Sí">Sí</OPTION>
                                    <OPTION VALUE="No">No</OPTION>
                                </select>
                            </div>
                                                                           
                                                                           
                                                                           <div class="form-group col-xs-6">
                                <label for="nombre">¿Cliente Nuevo ?</label>
                                
                                
                                <select name="cliente_nuevo" class="form-control input-sm">
                                    <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="Sí">Sí</OPTION>
                                    <OPTION VALUE="No">No</OPTION>
                                </select>
                            </div>

                        </div>
                                          
                                     <br>
                              
                              
                             
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label for="nombre">Cotización</label>

                                <input id="a4" type="file" name="cotizacion" class="form-control">
                            </div>
                            
                             <div class="form-group col-xs-6">
                                <label for="nombre">Pedido</label>

                                <input id="a4" type="file" name="pedido" class="form-control">
                            </div>

                        </div>

                           <br>

                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label for="nombre">Contrato</label>

                                <input id="a4" type="file" name="contrato" class="form-control">
                            </div>

                        </div>






                        <center>
                            <input class="btn btn-success" type="submit" value="Agregar" data-toggle="tooltip" data-placement="right" title="Da clic para guardar los datos">

                            <a title="Da clic para regresar al menú" href="javascript:window.history.go(-1);"class="btn btn-danger">Cancelar</a></center>
                    </div>
                </form>
            </div> 

            <?php
            /* if ($dataLevel == 'is_admin') {
              echo '
              <label>Cliente</label><br>
              <input form-control  style="width: 270px; height: 35px" type="text" name="cliente"><br><br>



              <div class="row">
              <div class="form-group col-xs-3">
              <label>Necesidad</label><br>

              <textarea name="necesidad" class="form-control input-sm"  rows="6" cols="80" style="resize:none;" placeholder="Ingresa un compromiso" require></textarea>

              </div>
              </div>


              <div class="row">
              <div class="form-group col-xs-3">
              <label> Compromiso</label><br>
              <textarea name="compromiso" class="form-control input-sm"  rows="6" cols="80" style="resize:none;" placeholder="Ingresa un compromiso" require></textarea>
              <br>
              </div>
              </div>



              <div class="row">
              <div class="form-group col-xs-3">
              <label> Notas</label><br>
              <textarea name="notas" class="form-control input-sm"  rows="6" cols="80" style="resize:none;" placeholder="Ingresa un notas" require></textarea>
              <br>
              </div>
              </div>




              <label>Cotización</label><br>
              <input type="file" name="cotizacion"><br>

              <label>Pedido</label><br>
              <input type="file" name="pedido"><br>


              <label>Contrato</label><br>
              <input type="file" name="contrato"><br>


              ';
              } else  if ($dataLevel == 'is_editor') {
              echo ' <label>Cliente</label><br>
              <input form-control  style="width: 270px; height: 35px" type="text" name="cliente"><br><br>



              <div class="row">
              <div class="form-group col-xs-3">
              <label>Necesidad</label><br>

              <textarea name="necesidad" class="form-control input-sm"  rows="6" cols="80" style="resize:none;" placeholder="Ingresa un compromiso" require></textarea>

              </div>
              </div>


              <div class="row">
              <div class="form-group col-xs-3">
              <label> Compromiso</label><br>
              <textarea name="compromiso" class="form-control input-sm"  rows="6" cols="80" style="resize:none;" placeholder="Ingresa un compromiso" require></textarea>
              <br>
              </div>
              </div>



              <div class="row">
              <div class="form-group col-xs-3">
              <label> Notas</label><br>
              <textarea name="notas" class="form-control input-sm"  rows="6" cols="80" style="resize:none;" placeholder="Ingresa un notas" require></textarea>
              <br>
              </div>
              </div>




              <label>Cotización</label><br>
              <input type="file" name="cotizacion"><br>

              <label>Pedido</label><br>
              <input type="file" name="pedido"><br>


              <label>Contrato</label><br>
              <input type="file" name="contrato"><br>

              ';


              }
              else if ($dataLevel == 'is_logistica') {
              echo '
              <label>No máquina</label><br>
              <input style="width: 270px; height: 35px"  type="text" name="no_maqui"><br><br>

              <label>Modelo</label><br>
              <input  style="width: 270px; height: 35px"  type="text" name="modelo"><br><br>

              <div class="row">
              <div class="form-group col-xs-3">
              <label>Empresa</label><br>
              <select name="empresa" class="form-control " id="empresa" require>
              <option  value="">Selecciona una opción</option>
              <OPTION VALUE="MAKBOX S DE RL DE CV">MAKBOX S DE RL DE CV</OPTION>
              <OPTION VALUE="ROBUSPACK S DE RL DE CV">ROBUSPACK S DE RL DE CV</OPTION>
              </select><br>
              </div>
              </div>

              <label>Serie</label><br>
              <input style="width: 270px; height: 35px"  type="text" name="serie"><br><br>

              <label>Cliente</label><br>
              <input style="width: 270px; height: 35px"  type="text" name="cliente"><br><br>


              <label>No. Pedimento</label><br>
              <input style="width: 270px; height: 35px"  type="text" name="pedimento"><br><br>

              <label>Pedimento</label><br>
              <input style="width: 270px; height: 35px"  type="file" name="pedimentopdf"><br>


              <label>Foto</label><br>
              <input type="file" name="fotopost"><br>

              <input type="hidden" name="num_factura">

              ';
              } else if ($dataLevel == 'is_credito') {
              echo '
              <label>Factura</label><br>
              <input type="file" name="fotopostpdf"><br>';

              } else if ($dataLevel == 'is_refacciones') {
              echo '
              <label>Foto</label><br>
              <input type="file" name="fotopost"><br>

              ';
              } else {

              } */
            ?>


            <!--<label>No máquina</label><br>
            <input type="text" name="no_maqui"><br><br>
            <label>Modelo</label><br>
            <input type="text" name="modelo"><br><br>

            <label>Serie</label><br>
            <input type="text" name="serie"><br><br>
            <label>Cliente</label><br>
            <input type="text" name="cliente"><br><br>
            <label>Pedimento</label><br>
            <input type="text" name="pedimento"><br><br>

            <label>Foto</label><br>
            <input type="file" name="fotopost"><br>

            <label>Factura</label><br>
            <input type="file" name="fotopostpdf"><br>-->





<!-- <input type="submit" name="submit" value="Agregar" class="btn btn-success">
<a title="Da clic para regresar" href="javascript:window.history.go(-1);"class="btn btn-danger">Cancelar</a>-->

        </form>

    </div>
</div>
<!-- END KONTEN UTAMA -->

<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>

</body>
</html>
