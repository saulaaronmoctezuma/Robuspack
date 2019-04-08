<!--
 * @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 26/03/2019 Hora 10:15 pm
   Fecha : Ultimo Cambio 03/0/2019 Hora 10:36 pm
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
            <div class="container">
                <h3>Agregar Registro</h3><br>
                
                <div class="row">
                    <form action="<?= base_url() ?>verificacion/insertdata" method="post" enctype="multipart/form-data">
                  <!--
                  '. form_dropdown('cliente', $clienteCombo, '#', 'id="cliente"').'<br>
                  -->
                           <?php
                    if ($dataLevel == 'is_admin') {
                        echo '
                        <label>No máquina</label><br>
                        <input type="text" name="no_maqui"><br><br>
                       


                        <div class="row">
                        <div class="form-group col-xs-3">
                        <label>Modelo</label><br>
                        <input type="text" name="modelo"><br><br>
                        </div>
                        </div>
                        

                        <div class="row">
                        <div class="form-group col-xs-3">
                        <label>Empresa</label><br>
                        <select name="empresa" class="form-control " id="empresa" require>
                        <option  value="">Selecciona una opción</option>
                        <OPTION VALUE="Makbox">Makbox</OPTION>
                        <OPTION VALUE="Robuspack">Robuspack</OPTION>
                        </select><br>
                        </div>
                        </div>
                        
                        <label>Serie</label><br>
                        <input type="text" name="serie"><br><br>
                        
                        <label>Cliente</label><br>
                        <input type="text" name="cliente"><br><br>
                       
                        <label>No. Pedimento</label><br>
                        <input type="text" name="pedimento"><br><br>
                        
                         <label>Pedimento</label><br>
                         <input type="file" name="pedimentopdf"><br>
                            
                        <label>Foto</label><br>
                        <input type="file" name="fotopost"><br>
                        
                        <label>No. Factura</label><br>
                        <input type="text" name="num_factura"><br><br>
                        
                        <label>Factura</label><br>
                        <input type="file" name="fotopostpdf"><br>
                        
                        <label>Refacciones</label><br>
                        <input type="file" name="refacciones"><br>
                        ';
                    } else  if ($dataLevel == 'is_editor') {
                        echo '<label>No máquina</label><br>
                        <input type="text" name="no_maqui"><br><br>
                        
                        <label>Modelo</label><br>
                        <input type="text" name="modelo"><br><br>
                        
                         <div class="row">
                         <div class="form-group col-xs-3">
                         <label>Empresa</label><br>
                         <select name="empresa" class="form-control " id="empresa" require>
                         <option  value="">Selecciona una opción</option>
                         <OPTION VALUE="Makbox">Makbox</OPTION>
                         <OPTION VALUE="Robuspack">Robuspack</OPTION>
                         </select><br>
                         </div>
                         </div> 
                         
                        <label>Serie</label><br>
                        <input type="text" name="serie"><br><br>
                        
                        <label>Cliente</label><br>
                        <input type="text" name="cliente"><br><br>
                        
                        <label>No. Pedimento</label><br>
                        <input type="text" name="pedimento"><br><br>
                        
                         <label>Pedimento PDF</label><br>
                         <input type="file" name="pedimentopdf"><br>

                        <label>Foto de la placa</label><br>
                        <input type="file" name="fotopost"><br>
                        
                        <label>No. Factura</label><br>
                        <input type="text" name="num_factura"><br><br>

                        <label>Factura</label><br>
                        <input type="file" name="fotopostpdf"><br>
                        
                        <label>Refacciones</label><br>
                        <input type="file" name="refacciones"><br>

                    ';
                        
                        
                    }
                    else if ($dataLevel == 'is_logistica') {
                       echo '
                        <label>No máquina</label><br>
                        <input type="text" name="no_maqui"><br><br>
                        
                        <label>Modelo</label><br>
                        <input type="text" name="modelo"><br><br>
                        
                         <div class="row">
                         <div class="form-group col-xs-3">
                         <label>Empresa</label><br>
                         <select name="empresa" class="form-control " id="empresa" require>
                         <option  value="">Selecciona una opción</option>
                         <OPTION VALUE="Makbox">Makbox</OPTION>
                         <OPTION VALUE="Robuspack">Robuspack</OPTION>
                         </select><br>
                         </div>
                         </div>
             
                        <label>Serie</label><br>
                        <input type="text" name="serie"><br><br>
                        
                        <label>Cliente</label><br>
                        <input type="text" name="cliente"><br><br>
                        

                        <label>No. Pedimento</label><br>
                        <input type="text" name="pedimento"><br><br>
                        
                        <label>Pedimento</label><br>
                        <input type="file" name="pedimentopdf"><br>

                        
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
                        
                    }
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
                        
                        
                        
                        
                        
                        <input type="submit" name="submit" value="Agregar" class="btn btn-success">
                        <a title="Da clic para regresar" href="javascript:window.history.go(-1);"class="btn btn-danger">Cancelar</a>

                    </form>

                </div>
            </div>
            <!-- END KONTEN UTAMA -->

            <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
            <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
        </body>
    </html>
