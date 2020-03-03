<!--
 * @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 25/06/2019 Hora 10:33 am
   
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
   <!-- Para traerse el rol que esta registrado-->
        <?php
        //check user level
        $dataLevel = $this->userlevel->checkLevel($role);

       
        //check user level
        ?>
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
            document.getElementById('cliente_input').value = "";
            document.getElementById('cliente_input').disabled = true;

        }

        function deseleccionarClienteCombo() {
            document.getElementById("cliente_combo").selectedIndex = 0;
            document.getElementById('cliente_input').disabled = false;

        }
        
        
        
           function mostrarContenido() {
            element = document.getElementById("div_input_grupo");
            elementempresa = document.getElementById("div_combo_grupo");
            check = document.getElementById("checkgrupo");
            if (check.checked) {

                element.style.display = 'block';
                elementempresa.style.display = 'none';
                deseleccionarClienteGrupo();

            }
            else {

                element.style.display = 'none';
                elementempresa.style.display = 'block';
                limpiarCajaTextoGrupo();
            }
        }

        function limpiarCajaTextoGrupo() {
            document.getElementById('grupo_input').value = "";
            document.getElementById('grupo_input').disabled = true;

        }

        function deseleccionarClienteGrupo() {
            document.getElementById("grupo_combo").selectedIndex = 0;
            document.getElementById('grupo_input').disabled = false;

        }
    </script>
    </head>
    <body>
       
           
                  <div id="maquinaria">
    <div class="container" >      
         <br>
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
           
            <strong>Bienvenido</strong> Agrega los datos de Bitácora
        </div>
        <h1>Agregar Datos</h1>
        <MARQUEE SCROLLDELAY =200></MARQUEE>
       <form action="<?= base_url() ?>BitacoraRefacciones/insertdata" method="post" enctype="multipart/form-data">


            <div class="form-group">
                <input type="hidden" class="form-control" id="id_maquinaria"  name="id_bitacora">
            </div>
            <div class="jumbotron">
               
              <!--  <div class="row">
                    <div class="form-group col-xs-6">
                        <label for="nombre">Grupo</label>
                        <input id="grupo" type="text" class="form-control input-sm"  name="grupo" placeholder="Ingresa el nombre del grupo" require>
                              <select required id="grupo"  class="form-control input-sm"  name="grupo"  <?php echo form_dropdown('grupoCombo', $grupoCombo, '#', 'id="grupoCombo"'); ?> </select>
                               
                        <!--      <textarea name="grupo" class="form-control input-sm"  rows="6" cols="80" style="resize:none;" placeholder="Ingresa una necesidad" require></textarea>
                   
                    </div>
                    
                            
                </div>
                    <br>-->


                   
                    
                      <div class="row">
                    
                    
                    
                    
                    
                   <div class="form-group col-xs-6" id="contentempresa" style="display: block;">
                    <label for="nombre">Cliente</label>
                    <select required id="cliente_combo" class="form-control input-sm"  name="cliente" <?php echo form_dropdown('clienteCombo', $clienteCombo, '#', 'id="clienteCombo"'); ?> </select>
                </div>
                    </div>
                    
                    
                <div class="row">
                     <div class="form-group col-xs-6" id="content" style="display: none;">
                        
                        <label for="nombre">Cliente</label>
                        <input id="cliente_input" disabled class="form-control input-sm"  name="cliente" placeholder="Ingresa el nombre del cliente" require>
                              
                         <!--<textarea name="cliente" class="form-control input-sm"  rows="6" cols="80" style="resize:none;" placeholder="Ingresa un compromiso" require></textarea>
                  -->
                         </div>

                   
                </div>

  
                            
                           <input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent()" />
                                <label><p style="color:blue;font-size:12px;">  &nbsp;Selecciona si no aparece el cliente</p></label>
                          
                    
                                  
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                   <div class="row">
                    
                    
                    
                    
                    
                   <div class="form-group col-xs-6" id="div_combo_grupo" style="display: block;">
                    <label for="nombre">Grupo</label>
                      <select required id="grupo_combo"  class="form-control input-sm"  name="grupo"  <?php echo form_dropdown('grupoCombo', $grupoCombo, '#', 'id="grupoCombo"'); ?> </select>
                          </div>
                    </div>
                    
                    
                <div class="row">
                     <div class="form-group col-xs-6" id="div_input_grupo" style="display: none;">
                        
                        <label for="nombre">Grupo</label>
                        <input id="grupo_input" disabled class="form-control input-sm"  name="grupo" placeholder="Ingresa el nombre del grupo" require>
                              
                         <!--<textarea name="cliente" class="form-control input-sm"  rows="6" cols="80" style="resize:none;" placeholder="Ingresa un compromiso" require></textarea>
                  -->
                         </div>

                   
                </div>

  
                            
                           <input type="checkbox" name="check" id="checkgrupo" value="1" onchange="javascript:mostrarContenido()" />
                                <label><p style="color:blue;font-size:12px;">  &nbsp;Selecciona si no aparece el grupo</p></label>
                          
                    
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                <div class="row">

                    <div class="form-group col-xs-6">
                        <label for="nombre">Descripcion</label>
                             <textarea name="descripcion" class="form-control input-sm"  rows="6" cols="80" style="resize:none;" placeholder="Ingresa una descripcion" require></textarea>
                   
                    </div>

   
                    </div>


                
                <div class="row">
                    <div class="form-group col-xs-6">
                        <label for="nombre">Archivo</label>
                        
                        <input id="a4" type="file" name="archivo1" class="form-control">
                    </div>
                    
                </div>
                
                 
                  <input id="a4" type="hidden" name="observacion" class="form-control">  
                
                 <!--<div class="row">

                    <div class="form-group col-xs-6">
                        <label for="nombre">Observacion</label>
                             <textarea name="observacion" class="form-control input-sm"  rows="6" cols="80" style="resize:none;" placeholder="Ingresa una nota" require></textarea>
                   
                    </div>

   
                    </div>
-->
                


                
              
            <center>
                <input class="btn btn-success" type="submit" value="Agregar" data-toggle="tooltip" data-placement="right" title="Da clic para guardar los datos">
                
                <a title="Da clic para regresar al menú" href="javascript:window.history.go(-1);"class="btn btn-danger">Cancelar</a></center>
    </div>
</form>
</div> 
                  
                       
                    </form>

                </div>
            </div>
            <!-- END KONTEN UTAMA -->

            <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
            
        </body>
    </html>
