<style type="text/css">
    

body {

/* Ubicación de la imagen */

background-image: url(<?php echo base_url(); ?>assets/images/fondo_src.png);

/* Para dejar la imagen de fondo centrada, vertical y

horizontalmente */

background-position: center center;

/* Para que la imagen de fondo no se repita */

background-repeat: no-repeat;

/* La imagen se fija en la ventana de visualización para que la altura de la imagen no supere a la del contenido */

background-attachment: fixed;

/* La imagen de fondo se reescala automáticamente con el cambio del ancho de ventana del navegador */

background-size: cover;

/* Se muestra un color de fondo mientras se está cargando la imagen

de fondo o si hay problemas para cargarla */

background-color: #FF3C12;

}
</style>
<br>
<br>
<br>
<br>

<div class="col-lg-4 col-lg-offset-4">
    <center> <h2 style="color:#ffffff">Se te olvidó tu contraseña</h2>
    <br>
    <p style="color:#ffffff">Ingrese su dirección de correo electrónico y le enviaremos instrucciones sobre cómo restablecer su contraseña</p><br>
    <?php $fattr = array('class' => 'form-signin');
         echo form_open(site_url().'main/forgot/', $fattr); ?>
    <div class="form-group">
      <?php echo form_input(array(
          'name'=>'email', 
          'id'=> 'email', 
          'placeholder'=>'Ingresa tu correo electrónico', 
          'class'=>'form-control', 
          'value'=> set_value('email'))); ?>
      <?php echo form_error('email') ?>
    </div>
    
    <?php echo form_submit(array('value'=>'Enviar','title'=>'Da clic para recuperar tu contraseña', 'class'=>'btn btn-success')); ?>
    <?php echo form_close(); ?>   
    <br>
     <p> <!--<a style="color:#ffffff" href="<?php echo site_url();?>main/login">Regresar</a></p></center>-->
        <input class="btn btn-primary" title="Da clic para regresar al login"  style="color:#ffffff" type="button" onclick="history.back()" name="Regresar" value="Regresar">
    </center>
</div>