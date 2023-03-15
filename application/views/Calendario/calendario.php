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
<<<<<<< HEAD
                       <!-- <div class="form-group">
                            <label class="col-md-4 control-label" for="title">Titulo</label>
                            <div class="col-md-4">-->
                                <input id="title" name="title" type="hidden" class="form-control input-md" />
                           <!--  </div>
                        </div>        -->                    
=======
                        <!-- <div class="form-group">
                             <label class="col-md-4 control-label" for="title">Titulo</label>
                             <div class="col-md-4">-->
                        <input id="title" name="title" type="hidden" class="form-control input-md" />
                        <!--  </div>
                     </div>        -->                    
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="description">Descripción</label>
                            <div class="col-md-4">
                                <textarea rows="6" cols="80" class="form-control" id="description" name="description"></textarea>
                            </div>
                        </div>
                        <script type="text/javascript">

<<<<<<< HEAD
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
=======
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
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
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
<<<<<<< HEAD
                                    <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" required onchange="GuardarNombre();">
                                        <option value="" selected>Selecciona</option> 
                                        <option value="#FFE71E">Prueba</option> 
                                        <option value="#80E52C">Rodrigo Islas</option>
                                        <option value="#5DFF1E">Aldo</option> 
                                        <option value="#2CE1E5">Edson</option> 
                                        <option value="#C6EC18">Elmer Leal</option>
                                        <option value="#E52C50">Alejandro Martínez</option>
                                        <option value="#5C2CE5">Fernando Mejía</option>
                                        <option value="#9E92A5">Gustavo López</option>
                                        <option value="#B441CF">Verónica Hernández</option>
                                        <option value="#EC1818">Saúl Martínez</option>
                                        <option value="#27CAE9">Humberto Ramírez</option> 
                                        <option value="#EC1818">Miguel Carrasco</option>

                                    </select></div>             

                                <?php
=======
                                            
                            <input value='B441CF' type="text" readonly="">
                                <?
                                
                                
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            } else if ($id_del_usuario == 2) {
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();" >
                                        <option value="">Selecciona</option> 
<<<<<<< HEAD
                                     <option value="#80E52C">Rodrigo Islas</option>
                                        <option value="#5DFF1E">Aldo</option> 
                                        <option value="#2CE1E5">Edson</option> 
                                        <option value="#C6EC18">Elmer Leal</option>
                                        <option value="#E52C50">Alejandro Martínez</option>
                                        <option value="#5C2CE5">Fernando Mejía</option>
                                        <option value="#9E92A5">Gustavo López</option>
                                        <option value="#B441CF">Verónica Hernández</option>
                                        <option value="#EC1818">Saúl Martínez</option>
                                        <option value="#27CAE9">Humberto Ramírez</option> 
                                        <option value="#EC1818">Miguel Carrasco</option>
                                    </select>
                                </div>             
                                <?php
                            }else if ($id_del_usuario == 3) {
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();" >
                                       <option value="#80E52C">Rodrigo Islas</option>
                                        <option value="#5DFF1E">Aldo</option> 
                                        <option value="#2CE1E5">Edson</option> 
                                        <option value="#C6EC18">Elmer Leal</option>
                                        <option value="#E52C50">Alejandro Martínez</option>
                                        <option value="#5C2CE5">Fernando Mejía</option>
                                        <option value="#9E92A5">Gustavo López</option>
                                        <option value="#B441CF">Verónica Hernández</option>
                                        <option value="#EC1818">Saúl Martínez</option>
                                        <option value="#27CAE9">Humberto Ramírez</option> 
                                        <option value="#EC1818">Miguel Carrasco</option>
                                    </select>
                                </div>             
                                <?php
                            }   else if ($id_del_usuario == 4) {
=======
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
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();">
                                        <option value="">Selecciona</option> 
<<<<<<< HEAD
                                        <option value="#80E52C">Rodrigo Islas</option> 
                                    </select>
                                </div>       
                            
                            
=======
                                        <option value="#80E52C">Rodrigo</option> 
                                    </select>
                                </div>       


>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
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
<<<<<<< HEAD
=======
                            } else if ($id_del_usuario == 20) {
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();">
                                        <option value="">Selecciona</option> 
                                        <option value="#2CE1E5">Edson</option> 
                                    </select>
                                </div>             
                                <?php
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            } else if ($id_del_usuario == 12) {
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();">
<<<<<<< HEAD
                                      <option value="#80E52C">Rodrigo Islas</option>
                                        <option value="#5DFF1E">Aldo</option> 
                                        <option value="#2CE1E5">Edson</option> 
                                        <option value="#C6EC18">Elmer Leal</option>
                                        <option value="#E52C50">Alejandro Martínez</option>
                                        <option value="#5C2CE5">Fernando Mejía</option>
                                        <option value="#9E92A5">Gustavo López</option>
                                        <option value="#B441CF">Verónica Hernández</option>
                                        <option value="#EC1818">Saúl Martínez</option>
                                        <option value="#27CAE9">Humberto Ramírez</option> 
                                       
                                        <option value="#80E52C">Rodrigo Islas</option>
                                        <option value="#2C95E5">Carlos Hernández</option> 
                                    </select>
                                </div>             
                                <?php
                            }else if ($id_del_usuario == 20) {
=======
                                        <option value="">Selecciona</option> 
                                        <option value="#029E7F">Alejandra</option>
                                        <option value="#B6DA13">Álvaro</option>
                                        <option value="#5DFF1E">Aldo</option>
                                        <option value="#33FFD8">Reyna</option> 
                                    </select>
                                </div>             
                                <?php
                            } else if ($id_del_usuario == 22) {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();">
                                        <option value="">Selecciona</option> 
<<<<<<< HEAD
                                        <option value="#80E52C">Rodrigo Islas</option>
                                        <option value="#5DFF1E">Aldo</option> 
                                        <option value="#2CE1E5">Edson</option> 
                                        <option value="#C6EC18">Elmer Leal</option>
                                        <option value="#E52C50">Alejandro Martínez</option>
                                        <option value="#5C2CE5">Fernando Mejía</option>
                                        <option value="#9E92A5">Gustavo López</option>
                                        <option value="#B441CF">Verónica Hernández</option>
                                        <option value="#EC1818">Saúl Martínez</option>
                                        <option value="#27CAE9">Humberto Ramírez</option> 
                                        <option value="#EC1818">Miguel Carrasco</option>
                                    </select>
                                </div>             
                                <?php
                            }else if ($id_del_usuario == 55) {
=======
                                        <option value="#2C95E5">Rodrigo</option> 
                                    </select>
                                </div>             
                                <?php
                            } else if ($id_del_usuario == 23) {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();">
                                        <option value="">Selecciona</option> 
<<<<<<< HEAD
                                        <option value="#80E52C">Rodrigo Islas</option>
                                        <option value="#5DFF1E">Aldo</option> 
                                        <option value="#2CE1E5">Edson</option> 
                                        <option value="#C6EC18">Elmer Leal</option>
                                        <option value="#E52C50">Alejandro Martínez</option>
                                        <option value="#5C2CE5">Fernando Mejía</option>
                                        <option value="#9E92A5">Gustavo López</option>
                                        <option value="#B441CF">Verónica Hernández</option>
                                        <option value="#EC1818">Saúl Martínez</option>
                                        <option value="#27CAE9">Humberto Ramírez</option> 
                                        <option value="#EC1818">Miguel Carrasco</option>
                                    </select>
                                </div>             
                                <?php
                            } else if ($id_del_usuario == 6) {//6 
=======
                                        <option value="#5C2CE5">Jorge</option> 
                                    </select>
                                </div>             
                                <?php
                            } else if ($id_del_usuario == 24) {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();">
                                        <option value="">Selecciona</option> 
<<<<<<< HEAD
                                        <option value="#2C95E5">Carlos Hernández</option> 
                                    </select>
                                </div>             
                                <?php
                            } else if ($id_del_usuario == 49) {//23
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();">
                                        <option value="">Selecciona</option> 
                                        <option value="#5C2CE5">Fernando Mejía </option> 
                                    </select>
                                </div>             
                                <?php
                            } else if ($id_del_usuario == 48) {//24
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();">
                                        <option value="">Selecciona</option> 
                                        <option value="#E52C50">Alejandro Martínez</option> 
                                    </select>
                                </div>             
                                <?php
                            } else if ($id_del_usuario == 26) {//26
=======
                                        <option value="#E52C50">Alejandro</option> 
                                    </select>
                                </div>             
                                <?php
                            } else if ($id_del_usuario == 26) {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();">
                                        <option value="">Selecciona</option> 
                                        <option value="#74AEB6">Miguel</option> 
                                    </select>
                                </div>             
                                <?php
<<<<<<< HEAD
                            } else if ($id_del_usuario == 64) {//36
=======
                            } else if ($id_del_usuario == 36) {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();">
                                        <option value="">Selecciona</option> 
<<<<<<< HEAD
                                        <option value="#C6EC18">Orlando Bello</option> 
                                    </select>
                                </div>             
                                <?php
                            } else if ($id_del_usuario == 54) {//37
=======
                                        <option value="#C6EC18">Jorge</option> 
                                    </select>
                                </div>             
                                <?php
                            } else if ($id_del_usuario == 37) {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();">
                                        <option value="">Selecciona</option> 
<<<<<<< HEAD
                                        <option value="#9E92A5">Gustavo López</option> 
                                    </select>
                                </div>             
                                <?php
                            } else if ($id_del_usuario == 21) {//38
=======
                                        <option value="#9E92A5">Isael</option> 
                                    </select>
                                </div>             
                                <?php
                            } else if ($id_del_usuario == 38) {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();">
                                        <option value="">Selecciona</option> 
<<<<<<< HEAD
                                        <option value="#B441CF">Verónica Hernández</option> 
                                    </select>
                                </div>             
                                <?php
                            }else if ($id_del_usuario == 67) {
=======
                                        <option value="#B441CF">Noe</option> 
                                    </select>
                                </div>             
                                <?php
                            } else if ($id_del_usuario == 41) {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();">
                                        <option value="">Selecciona</option> 
<<<<<<< HEAD
                                        <option value="#33FFD8 ">Alejandra Reyes</option> 
                                    </select>
                                </div>             
                                <?php
                            } else if ($id_del_usuario == 44) {
=======
                                        <option value="#33FFD8 ">Reyna</option> 
                                    </select>
                                </div>             
                                <?php
                            } else if ($id_del_usuario == 42) {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();">
                                        <option value="">Selecciona</option> 
<<<<<<< HEAD
                                        <option value="#B6DA13">Ignacio Hernández</option> 
                                    </select>
                                </div>             
                                <?php
                            } else if ($id_del_usuario == 63) {
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();">
                                        <option value="">Selecciona</option> 
                                        <option value="#E78828">Jose Bazán</option> 
                                    </select>
                                </div>             
                                <?php
                            }else if ($id_del_usuario == 29) {
                                ?>
                                <div class="col-md-4">
                                    <select name="color" id="color"  class="form-control" onchange="GuardarNombre();">
                                        <option value="">Selecciona</option> 
                                       <option value="#2CE1E5">Edson</option>
                                        <option value="#B441CF">Ignacio</option>
                                         <option value="#9E92A5">Alejandra</option>
                                    </select>
                                </div>             
                                <?php
                            }  else {
=======
                                        <option value="#B6DA13">Álvaro</option> 
                                    </select>
                                </div>             
                                <?php
                            } else {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
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



<<<<<<< HEAD

=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
