<!--
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */
-->

<!DOCTYPE html>
<html lang="es-mx">
    <head>

        <title>Robuspack</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">

        <link rel="icon" href="<?= base_url('assets/images/icono.PNG') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
        defined('BASEPATH') OR exit('No direct script access allowed');

        $result = $this->User_model->getAllSettings();
        $theme = $result->theme;
        ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $theme; ?>">
        <link rel="stylesheet" href="<?php echo base_url() . 'public/css/main.css' ?>">

      
    </head>
    <body>
        <div class="container">
            <div class="col-sm-8 col-md-offset-6>">
               

                <form class="form-horizontal" id="submit" role="form" action="<?= base_url('Bitacora/bitacoraAgregar') ?>" method="POST">
                    <center> <h2>Bitácora</h2></center>
                    <div class="form-group">
                        <label>Grupo </label>
                
                        <input type="text" name="title" class="form-control" placeholder="Ingresa el nombre del grupo" required>
                    </div>
                    <br>
                    
                 
                    <div class="form-group">
                        <label>Cliente </label>
                        <input type="text" name="cliente" class="form-control" placeholder="Ingresa el nombre del  cliente" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Descripción</label>
                          <textarea id="froala-editor" name="descripcion" class="form-control input-sm" style="resize:none;"  rows="8" cols="80" placeholder="Ingresa una descripción" required></textarea>
                   </div>
                   
                    <div class="form-group">
                        <label>Archivo <label style="color:#FF0000">SOLO ADMITE ARCHIVOS RAR, ZIP,DOCX, XLSX Y PDF</label> </label>
                        <input type="file" name="file">
                    </div>
                    
                    
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="observacion"  name="observacion">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" id="btn_upload" type="submit">Guardar</button>

                        <a title="Da clic para regresar al menú" href="javascript:window.history.go(-1);"class="btn btn-danger">Cancelar</a>
                    </div>
                </form>	
            </div>
        </div>
        <script src="<?php echo base_url() . 'assets/js/jquery-3.2.1.js' ?>"></script>


        <script type="text/javascript">
                                                    $(document).ready(function () {

                                                        $('#submit').submit(function (e) {
                                                            e.preventDefault();
                                                            $.ajax({
                                                                url: '<?php echo base_url(); ?>index.php/bitacora/do_upload',
                                                                type: "post",
                                                                data: new FormData(this), //this is formData
                                                                processData: false,
                                                                contentType: false,
                                                                cache: false,
                                                                async: false,
                                                                success: function (data) {

                                                                      location.href ="https://scrobuspack.com/Bitacora";
                                                                }

                                                            });
                                                        });


                                                    });

        </script>
    </body>
</html>