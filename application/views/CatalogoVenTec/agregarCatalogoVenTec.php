<!--
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */
-->
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
    <!-- Para traerse el rol que esta registrado-->
    <?php
    //check user level
    $dataLevel = $this->userlevel->checkLevel($role);

    $site_title = $result->site_title;
    //check user level
    ?>      



<div id="catalogo">
    <div class="container" >      
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Bienvenido</strong> Agrega los datos segun corresponda
        </div>
        <div class="col-sm-6 col-md-offset-2">
        <h1> Catálogo de Vendedores y Técnicos </h1>
        <MARQUEE SCROLLDELAY =200></MARQUEE>
        <form name="formulario" id="formal" role="form" action="<?= base_url('CatalogoVenTec/formularioAgregar') ?>" method="POST" onsubmit="return valida()">



            <div class="form-group">
                <input type="hidden" class="form-control" id="id_catalogo"  name="id_catalogo">
            </div>


            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input id="a1" type="text" class="form-control"  name="nombre" placeholder="Introduce el Nombre" required>
            </div>



            <div class="form-group">
                <label>Rol</label>
                <select name="rol" class="form-control input-sm" required>
                    <option  value="">Selecciona una opción</option>
                    <OPTION VALUE="Vendedor">Vendedor</OPTION>
                    <OPTION VALUE="Técnico">Técnico</OPTION>
                </select>
            </div>



            <div class="form-group">
                <label>Área</label>
                <select name="area" class="form-control input-sm" required>
                    <option  value="">Selecciona una opción</option>
                    <OPTION VALUE="Maquinaria">Maquinaria</OPTION>
                    <OPTION VALUE="Refacciones">Refacciones</OPTION>
                    <OPTION VALUE="Soporte">Soporte</OPTION>
                </select>
            </div>

            
            
            <div class="form-group">
                <label>Comisión</label>
                <select name="comision" class="form-control input-sm" required>
                    <option  value="">Selecciona una opción</option>
                    <OPTION VALUE="1%">1%</OPTION>
                    <OPTION VALUE="2%">2%</OPTION>
                    <OPTION VALUE="2.5%">2.5%</OPTION>
                    <OPTION VALUE="3%">3%</OPTION>
                    <OPTION VALUE="4%">4%</OPTION>
                    <OPTION VALUE="5%">5%</OPTION>
                    
                </select>
            </div>
          



            <div class="form-group">
                <label for="nombre">Correo Electrónico</label>
                <input id="a4" type="email" class="form-control"  name="correo" placeholder="Introduce el Correo" required>
            </div>

    <br>
    <center>
        
        
         <div class="form-group">
                                <input class="btn btn-success" type="submit" value="Guardar" data-toggle="tooltip" data-placement="right" id="botonOrden" title="Da Clic para Guardar los Datos del Catálogo">
   
                        <a title="Da clic para regresar al menú" href="javascript:window.history.go(-1);"class="btn btn-danger">Cancelar</a>
                    </div>
        
        
    </center>     </div>
            </div>

        </form>
    </div> 
</body>
</html>

