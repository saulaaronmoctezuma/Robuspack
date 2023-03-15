<<<<<<< HEAD
<!--
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */
-->
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
<style type="text/css">
    

body {

/* Ubicación de la imagen */

background-image: url(<?php echo base_url(); ?>assets/images/red.jpg);

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
<div class="col-lg-4 col-lg-offset-4">
    <h2 style="color:#000000">Restablecer su Contraseña</h2>
    <h5 style="color:#000000">Hola <span style="color:#ffffff"><?php echo $firstName ; ?></span>, <br> Por favor introduzca su nueva contraseña para restablecerla.</h5>     
<?php 
    $fattr = array('class' => 'form-signin');
    echo form_open(site_url().'main/reset_password/token/'.$token, $fattr); ?>
    <div class="form-group">
      <?php echo form_password(array('name'=>'password', 'id'=> 'password', 'placeholder'=>'Contraseña', 'class'=>'form-control', 'value' => set_value('password'))); ?>
      <?php echo form_error('password') ?>
    </div>
    <div class="form-group">
      <?php echo form_password(array('name'=>'passconf', 'id'=> 'passconf', 'placeholder'=>'Confirma tu Contraseña', 'class'=>'form-control', 'value'=> set_value('passconf'))); ?>
      <?php echo form_error('passconf') ?>
    </div>
    <?php echo form_submit(array('value'=>'Cambiar tu Contraseña', 'class'=>'btn btn-lg btn-warning btn-block')); ?>
    <?php echo form_close(); ?>
</div>