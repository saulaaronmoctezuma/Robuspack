<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Robuspack</title>
        <meta charset='utf-8' />
      <!--  <link href="<?php echo base_url(); ?>assets/calendario/css/bootstrap.min.css" rel="stylesheet">-->
        <link href='<?php echo base_url(); ?>assets/calendario/css/fullcalendar.css' rel='stylesheet' />
        <link href="<?php echo base_url(); ?>assets/calendario/css/bootstrapValidator.min.css" rel="stylesheet" />        
        <link href="<?php echo base_url(); ?>assets/calendario/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
        <!-- Custom css  -->
        <link href="<?php echo base_url(); ?>assets/calendario/css/custom.css" rel="stylesheet" />

        <script src='<?php echo base_url(); ?>assets/calendario/js/moment.min.js'></script>
        <script src="<?php echo base_url(); ?>assets/calendario/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/calendario/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/calendario/js/bootstrapValidator.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/calendario/js/fullcalendar.min.js"></script>
        <script src='<?php echo base_url(); ?>assets/calendario/js/bootstrap-colorpicker.min.js'></script>


        <script src='<?php echo base_url(); ?>assets/calendario/js/main.js'></script>

    </head>
    <body><center>
        <form method="post" action="<?php echo base_url(); ?>ExportarExcel/crearExcelCalendario">

            <button  class="btn btn-info" title="Da clic para exportar los datos a Excel" style="font-size:16px;thor:white"><font thor="white">Exportar</font> <i class="fa fa-file-excel-o"></i></button>
        </form> </center>
    <div class="container">
        <!-- Notification -->
        <div class="alert"></div>
        <div class="row clearfix">
            <div class="col-md-12 column">
                <div id='calendar'></div>
            </div>
        </div>
    </div>
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <div class="error"></div>
                    <form class="form-horizontal" id="crud-form">
                        <input type="hidden" id="start">
                        <input type="hidden" id="end">
                        <!-- <div class="form-group">
                             <label class="col-md-4 control-label" for="title">Titulo</label>
                             <div class="col-md-4">-->
                        <input id="title" name="title" type="hidden" class="form-control input-md" />
                        <!--  </div>
                     </div>        -->                    
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="description">Descripción</label>
                            <div class="col-md-4">
                                <textarea rows="6" cols="80" class="form-control" id="description" name="description"></textarea>
                            </div>
                        </div>
                        <script type="text/javascript">

                            function GuardarNombre()
                            {
                                /* Para obtener el valor */
                                var cod = document.getElementById("color").value;
//alert(cod);

                                /* Para obtener el texto */
                                var combo = document.getElementById("color");
                                var selected = combo.options[combo.selectedIndex].text;


                                document.getElementById("title").value = selected;
//alert(selected);
                            }
                        </script>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="color">Nombre</label>
                            <!--<div class="col-md-4">
                                <input id="color" name="color" type="text" class="form-control input-md" />
                                <span class="help-block">Elige Color</span>
                            </div>-->
                            <!-- Para traerse el rol que esta registrado-->
                            <?php
//check user level
                            $dataLevel = $this->userlevel->checkLevel($role);
                            $id_del_usuario = $this->userlevel->id($id);

//check user level
                            ?>

                            <?php
//compara si es administrador
                            if ($id_del_usuario == 1) {
                                ?>
                                            
                            <input value='B441CF' type="text" readonly="">
                                <?
                                
                                
                            } else if ($id_del_usuario == 2) {
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();" >
                                        <option value="">Selecciona</option> 
                                        <option value="#80E52C">Rodrigo Islas</option>
                                        <option value="#26f522">Aldo</option> 
                                        <option value="#2CE1E5">Edson</option> 
                                        <option value="#2C95E5">Rodrigo Santos</option>
                                        <option value="#5C2CE5">Jorge Zarazua</option>
                                        <option value="#E52C50">Alejandro</option>
                                        <option value="#74AEB6">Miguel</option>
                                        <option value="#C6EC18">Jorge</option>
                                        <option value="#9E92A5">Isael</option>
                                        <option value="#B441CF">Noe</option> 
                                    </select>
                                </div>             
                                <?php
                            } else if ($id_del_usuario == 4) {
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();">
                                        <option value="">Selecciona</option> 
                                        <option value="#80E52C">Rodrigo</option> 
                                    </select>
                                </div>       


                                <?php
                            } else if ($id_del_usuario == 7) {
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();">
                                        <option value="">Selecciona</option> 
                                        <option value="#5DFF1E" >Aldo</option> 
                                    </select>
                                </div>             
                                <?php
                            } else if ($id_del_usuario == 20) {
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();">
                                        <option value="">Selecciona</option> 
                                        <option value="#2CE1E5">Edson</option> 
                                    </select>
                                </div>             
                                <?php
                            } else if ($id_del_usuario == 12) {
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();">
                                        <option value="">Selecciona</option> 
                                        <option value="#029E7F">Alejandra</option>
                                        <option value="#B6DA13">Álvaro</option>
                                        <option value="#5DFF1E">Aldo</option>
                                        <option value="#33FFD8">Reyna</option> 
                                    </select>
                                </div>             
                                <?php
                            } else if ($id_del_usuario == 22) {
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();">
                                        <option value="">Selecciona</option> 
                                        <option value="#2C95E5">Rodrigo</option> 
                                    </select>
                                </div>             
                                <?php
                            } else if ($id_del_usuario == 23) {
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();">
                                        <option value="">Selecciona</option> 
                                        <option value="#5C2CE5">Jorge</option> 
                                    </select>
                                </div>             
                                <?php
                            } else if ($id_del_usuario == 24) {
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();">
                                        <option value="">Selecciona</option> 
                                        <option value="#E52C50">Alejandro</option> 
                                    </select>
                                </div>             
                                <?php
                            } else if ($id_del_usuario == 26) {
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();">
                                        <option value="">Selecciona</option> 
                                        <option value="#74AEB6">Miguel</option> 
                                    </select>
                                </div>             
                                <?php
                            } else if ($id_del_usuario == 36) {
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();">
                                        <option value="">Selecciona</option> 
                                        <option value="#C6EC18">Jorge</option> 
                                    </select>
                                </div>             
                                <?php
                            } else if ($id_del_usuario == 37) {
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();">
                                        <option value="">Selecciona</option> 
                                        <option value="#9E92A5">Isael</option> 
                                    </select>
                                </div>             
                                <?php
                            } else if ($id_del_usuario == 38) {
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();">
                                        <option value="">Selecciona</option> 
                                        <option value="#B441CF">Noe</option> 
                                    </select>
                                </div>             
                                <?php
                            } else if ($id_del_usuario == 41) {
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();">
                                        <option value="">Selecciona</option> 
                                        <option value="#33FFD8 ">Reyna</option> 
                                    </select>
                                </div>             
                                <?php
                            } else if ($id_del_usuario == 42) {
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();">
                                        <option value="">Selecciona</option> 
                                        <option value="#B6DA13">Álvaro</option> 
                                    </select>
                                </div>             
                                <?php
                            } else {
                                ?>

                                <?php
                            }
                            ?>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



