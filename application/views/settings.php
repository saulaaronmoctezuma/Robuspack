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
<html lang="es-mx"
<div class="container">
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <h2>Configuración</h2>
        <h5>Hola <span><?php echo $first_name; ?></span>.</h5>
        <hr>
        <?php
        $fattr = array('class' => 'form-signin');
        echo form_open(site_url().'main/settings/', $fattr); 
        
        function tz_list() {
            $zones_array = array();
            $timestamp = time();
            foreach(timezone_identifiers_list() as $key => $zone) {
              date_default_timezone_set($zone);
              $zones_array[$key]['zone'] = $zone;
            }
            return $zones_array;
        }
        ?>
        
        <?php echo '<input type="hidden" name="id" value="'.$id.'">'; ?>
        <div class="form-group">
        <span>Usuario</span>
          <?php echo form_input(array('name'=>'site_title', 'id'=> 'site_title', 'placeholder'=>'Usuario', 'class'=>'form-control', 'value' => set_value('site_title', $site_title))); ?>
          <?php echo form_error('site_title');?>
        </div>
        
        <div class="form-group">
        <span>Zona horaria</span>
        <select name="timezone" id="timezone" class="form-control">
            <option value="<?php echo $timezonevalue; ?>"><?php echo $timezone; ?></option>
          <?php foreach(tz_list() as $t) { ?>
            <option value="<?php echo $t['zone']; ?>"> <?php echo $t['zone']; ?></option>
          <?php } ?>
        </select>
        </div>
        
        <div class="form-group">
        <span>Capcha</span>
        <select name="recaptcha" id="recaptcha" class="form-control">
            <option value="no">No</option>
            <option value="yes">Si</option>
        </select>
        </div>
        
       <div class="form-group">
        <select name="theme" id="theme" class="form-control">
            <option value="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css">Cosmo</option>
            <option value="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/darkly/bootstrap.min.css">Darkly</option>
            <option value="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css">Flatly</option>
            <option value="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/journal/bootstrap.min.css">Journal</option>
            <option value="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css">Lumen</option>
            <option value="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/slate/bootstrap.min.css">Slate</option>
            <option value="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/superhero/bootstrap.min.css">Superhero</option>
            <option value="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/yeti/bootstrap.min.css">Yeti</option>
            <option value="https://bootswatch.com/4/simplex/bootstrap.min.css">Simplex</option>
           
        </select>
        </div>
        <?php echo form_submit(array('value'=>'Guardar', 'name'=>'submit', 'class'=>'btn btn-primary btn-block')); ?>
        <?php echo form_close(); ?>
    </div>
</div>
</div>
</html>