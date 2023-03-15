<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>robuspack</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>">
    </head>
    <body>
        <div class="container">
            <center>   <h1>Cliente Seguimiento</h1><br></center>
            <div class="col-sm-8 col-md-offset-2">

                <form class="form-horizontal" id="submit">


                    <div class="form-group">
                        <label>Grupo</label>
                        <select required  class="form-control"  name="title" <?php echo form_dropdown('grupoCombo', $grupoCombo, '#', 'id="grupoCombo"'); ?> </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Cliente</label>
                        <select required  class="form-control"  name="cliente" <?php echo form_dropdown('clienteCombo', $clienteCombo, '#', 'id="clienteCombo"'); ?> </select>
                    </div>


                    <div class="form-group">
                        <label>Prioridad</label>
                        <select name="prioridad" class="form-control" required>
                            <option  value="">Selecciona una opción</option>
                            <OPTION VALUE="1 Urgente">1 Urgente</OPTION>
                            <OPTION VALUE="2 Muy Potencial">2 Muy Potencial</OPTION>
                            <OPTION VALUE="3 Potencial">3 Potencial</OPTION>
                            <OPTION VALUE="4 Posible Cliente">4 Posible Cliente</OPTION>
                            <OPTION VALUE="5 Preguntó Información">5 Preguntó Información</OPTION>
                            <option VALUE="6 Cliente n</optgroup>o Potencial">6 Cliente no Potencial</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <label>Estatus</label>



                        <select name="estatus" class="form-control" required>

                            <option  value="">Selecciona una opción</option>

                            <OPTION VALUE="Sin Contactar">Sin Contactar</OPTION>
                            <OPTION VALUE="Envió de Información">Envió de Información</OPTION>
                            <OPTION VALUE="Visita Programada">Visita Programada</OPTION>
                            <OPTION VALUE="Visita Realizada">Visita Realizada</OPTION>
                            <OPTION VALUE="En cotización">En cotización</OPTION>
                            <OPTION VALUE="Muestreo">Muestreo</OPTION>
                            <OPTION VALUE="Venta Cerrada">Venta Cerrada</OPTION>

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Necesidad </label>
                         <textarea id="froala-editor" name="necesidad" class="form-control input-sm"  style="resize:none;" rows="4" cols="80" placeholder="Ingresa una necesidad" required></textarea>

                    </div>
                    <div class="form-group">
                        <label >Fecha de Cotización </label>
                        <input  type="date" class="form-control"  name="fecha_cotizacion"  required>
                    </div>
                    <div class="form-group">
                        <label>Archivo <label style="color:#FF0000">SOLO ADMITE ARCHIVOS RAR, ZIP,DOCX, XLSX Y PDF</label> </label>
                        <input type="file" name="file">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Fecha a Contactar </label>
                        <input id="a4" type="date" class="form-control"  name="fecha_contactar" required >
                    </div>
                    <div class="form-group">
                        <label for="nombre">Compromiso</label>
                        <textarea id="froala-editor" name="compromiso" class="form-control input-sm" style="resize:none;"  rows="8" cols="80" placeholder="Ingresa el compromiso" required></textarea>

                    </div>




                    <div class="form-group">
                        <label for="nombre">Notas</label>
                        <textarea id="froala-editor" name="notas" class="form-control input-sm" style="resize:none;"  rows="8" cols="80" placeholder="Ingresa notas" required></textarea>

                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" id="btn_upload" type="submit">Guardar</button>
                        <a title="Da clic para regresar al menú" href="javascript:window.history.go(-1);"class="btn btn-danger">Cancelar</a>
                    </div>
                </form>	
            </div>
        </div>
        <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.2.1.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
        <script type="text/javascript">
                            $(document).ready(function () {

                                $('#submit').submit(function (e) {
                                    e.preventDefault();
                                    $.ajax({
                                        url: '<?php echo base_url(); ?>index.php/ClienteSeguimiento/do_upload',
                                        type: "post",
                                        data: new FormData(this), //this is formData
                                        processData: false,
                                        contentType: false,
                                        cache: false,
                                        async: false,
                                        success: function (data) {
                                            // alert("Upload Image Successful.");
                                           
                                            location.href =" http://localhost/master/ClienteSeguimiento";
                                        }
                                    });
                                });


                            });

        </script>
    </body>
</html>