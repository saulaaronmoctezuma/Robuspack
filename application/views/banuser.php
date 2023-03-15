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
<div class="col-lg-4 col-lg-offset-4">
    <h2>Control de permisos de usuarios</h2>
    <h5>Hola <span><?php echo $first_name; ?></span>, <br>Por favor eleige el correo del usuario.</h5>     
    <?php $fattr = array('class' => 'form-signin');
         echo form_open(site_url().'main/banuser/', $fattr); ?>
    
    <div class="form-group">
        <select class="form-control" name="email" id="email">
            <?php
            foreach($groups as $row)
            { 
              echo '<option value="'.$row->email.'">'.$row->email.'</option>';
            }
            ?>
            </select>
    </div>

    <div class="form-group">
    <?php
        $dd_list = array(
                  'unban'   => 'Aceptar',
                  'ban'   => 'Rechazar',
                );
        $dd_name = "banuser";
        echo form_dropdown($dd_name, $dd_list, set_value($dd_name),'class = "form-control" id="banuser"');
    ?>
    </div>
<<<<<<< HEAD
    <?php echo form_submit(array('value'=>'Guardar', 'class'=>'btn btn-lg btn-success btn-block')); ?>
    <a href="<?php echo site_url().'main/users/';?>"><button type="button" class="btn btn-danger btn-lg btn-block">Cancelar</button></a>
=======
    <?php echo form_submit(array('value'=>'Guardar', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
    <a href="<?php echo site_url().'main/users/';?>"><button type="button" class="btn btn-default btn-lg btn-block">Cancelar</button></a>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
    <?php echo form_close(); ?>
</div>