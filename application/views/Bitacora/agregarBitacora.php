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

<div id="maquinaria">
    <div class="container" >      
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Bienvenido</strong> Agrega los datos segun corresponda
        </div>
        <h1>Gestión de Bitácora</h1>
        <MARQUEE SCROLLDELAY =200></MARQUEE>
        <form name="formulario" id="formal" role="form" action="<?= base_url('Bitacora/formularioAgregar') ?>" method="POST" >



            <div class="form-group">
                <input type="hidden" class="form-control" id="id_bitacora"  name="id_bitacora">
            </div>
            <div class="form-group">
                <label for="nombre">Grupo </label>
                <input id="a1" type="text" class="form-control"  name="grupo" >
            </div>
            <div class="form-group">
                <label for="nombre">Cliente </label>
                <input id="a1" type="text" class="form-control"  name="cliente" >
            </div>

            <div class="form-group">
                <label for="nombre">Descripción</label>

<!--  <input id="a6" type="text" class="form-control input-sm"  name="observacion" placeholder="Ingresa ">-->

                <textarea name="descripcion" class="form-control input-sm"  rows="5" cols="80" placeholder="Ingresa una descripción" required></textarea>



            </div>


            <div class="form-group">
                <label for="nombre">Archivo </label>
                <input id="a3" type="text" class="form-control"  name="archivo1" >
            </div>



<!--<input type="button" value="Guardar CON BOTON" class="btn btn-success" onclick="this.form.action='<?php echo base_url('bitacora/formularioAgregar'); ?>';this.form.submit();" />
            -->
            <input class="btn btn-success" type="submit" value="Agregar" data-toggle="tooltip" data-placement="right">
            </div>
        </form>




        <div class="container">
            <div class="row">

                <div class="col-md-4 col-md-offset-4">
                    <h4>Subir varios archivos</h4>
                    <form id="form_subidas" action="<?php echo base_url('Bitacora/subir'); ?>" method="POST" class="form-horizontal">
                        <input type="file" name="archivo[]" multiple>
                        <input class="btn btn-success" type="submit" value="Subir">
                    </form>
                </div>

            </div>
        </div>


        </body>
        </html>



