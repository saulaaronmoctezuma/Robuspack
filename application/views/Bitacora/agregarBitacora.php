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

<<<<<<< HEAD
        <link rel="stylesheet" href="<?= base_url() ?>assets/font/glyphicons-halflings-regular.ttf">
   <!-- Para traerse el rol que esta registrado-->
=======
   <!--     <link rel="stylesheet" href="<?= base_url() ?>assets/font/glyphicons-halflings-regular.ttf">
    Para traerse el rol que esta registrado-->
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        <?php
        //check user level
        $dataLevel = $this->userlevel->checkLevel($role);

       
        //check user level
        ?>
    </head>
    <body>
       
           
                  <div id="maquinaria">
    <div class="container" >      
        <br>
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Bienvenido</strong> Agrega los datos segun corresponda
        </div>
        <h1>Agregar Datos</h1>
        <MARQUEE SCROLLDELAY =200></MARQUEE>
       <form action="<?= base_url() ?>Bitacora/insertdata" method="post" enctype="multipart/form-data">


            <div class="form-group">
                <input type="hidden" class="form-control" id="id_maquinaria"  name="id_bitacora">
            </div>
            <div class="jumbotron">
                <div class="row">
                    
                    
                    
                    
                    
                    <!--<div class="form-group col-xs-4">
                    <label for="nombre">Cliente</label>
                    <select required id="cliente" class="form-control input-sm"  name="cliente" <?php echo form_dropdown('clienteCombo', $clienteCombo, '#', 'id="clienteCombo"'); ?> </select>
                </div>
                    
                    
                    
                    
                     
                    
                </div>-->
                <div class="row">
                    <div class="form-group col-xs-4">
                        <label for="nombre">Grupo</label>
                        
                              <input id="grupo" type="text" class="form-control input-sm"  name="grupo" placeholder="Ingresa el nombre del grupo" require>
                              
                             <!-- <textarea name="grupo" class="form-control input-sm"  rows="6" cols="80" style="resize:none;" placeholder="Ingresa una necesidad" require></textarea>-->
                   
                    </div>
                    

                </div>


                <div class="row">
                    <div class="form-group col-xs-6">
                        <label for="nombre">Cliente</label>
                         <textarea name="cliente" class="form-control input-sm"  rows="6" cols="80" style="resize:none;" placeholder="Ingresa un compromiso" require></textarea>
                   </div>

                   
                </div>



                <div class="row">

                    <div class="form-group col-xs-6">
<<<<<<< HEAD
                        <label for="nombre">Descripcion</label>
=======
                        <label for="nombre">Descripción</label>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                             <textarea name="descripcion" class="form-control input-sm"  rows="6" cols="80" style="resize:none;" placeholder="Ingresa una nota" require></textarea>
                   
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
<<<<<<< HEAD
                <input class="btn btn-success" type="submit" id="botonOrden" value="Agregar" data-toggle="tooltip" data-placement="right" title="Da clic para guardar los datos">
=======
                <input class="btn btn-success" type="submit" value="Agregar" data-toggle="tooltip" data-placement="right" title="Da clic para guardar los datos">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                
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
