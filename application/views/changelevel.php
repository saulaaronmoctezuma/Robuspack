<<<<<<< HEAD
<!--
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */
-->
<div class="col-lg-4 col-lg-offset-4">
    <h2>Cambiar nivel</h2>
    <h5>Hola <span><?php echo $first_name; ?></span>, <br>Por favor elige el nivel del usuario.</h5>     
    <?php $fattr = array('class' => 'form-signin');
         echo form_open(site_url().'main/changelevel/', $fattr); ?>
    
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
                 '1'   => 'Administrador',
                  '2'   => 'Gerente Operaciones',
                  '3'   => 'Consultor',
                  '4'   => 'Refacciones',
                  '5'   => 'Maquinaria',
                  '6'   => 'Mediciones',
                  '7'   => 'Credito',
                  '8'   => 'Gerente Ventas',
                  '9'   => 'Director',
                  '10'   => 'Maquinaria Y Refacciones',
                  '11'  => 'Mantenimiento',
                  '12'   => 'Jefe de Mantenimiento',
                  '13' => 'Logística',
                  '14' => 'Servicio a Clientes',
                  '15' => 'Freelance',
                  '16' => 'Almacen'
                );
        $dd_name = "level";
        echo form_dropdown($dd_name, $dd_list, set_value($dd_name),'class = "form-control" id="level"');
    ?>
    </div>
    <?php echo form_submit(array('value'=>'Guardar', 'class'=>'btn btn-lg btn-success btn-block')); ?>
    <a href="<?php echo site_url().'main/users/';?>"><button type="button" class="btn btn-danger btn-lg btn-block">Cancelar</button></a>
=======
<div class="col-lg-4 col-lg-offset-4">
    <h2>Cambiar nivel</h2>
    <h5>Hola <span><?php echo $first_name; ?></span>, <br>Por favor eleige el nivel del usuario.</h5>     
    <?php $fattr = array('class' => 'form-signin');
    echo form_open(site_url() . 'main/changelevel/', $fattr);
    ?>

    <div class="form-group">
        <select class="form-control" name="email" id="email">
            <?php
            foreach ($groups as $row) {
                echo '<option value="' . $row->email . '">' . $row->email . '</option>';
            }
            ?>
        </select>
    </div>

    <div class="form-group">
        <?php
        $dd_list = array(
            '1' => 'Administrador',
            '2' => 'Gerente Operaciones',
            '3' => 'Consultor',
            '4' => 'Refacciones',
            '5' => 'Maquinaria',
            '6' => 'Mediciones',
            '7' => 'Credito',
            '8' => 'Gerente Ventas',
            '9' => 'Director',
            '10' => 'Maquinaria Y Refacciones',
            '11' => 'Mantenimiento',
            '12' => 'Jefe de Mantenimiento',
            '13' => 'Logística',
            '14' => 'Servicio a Clientes',
            '15' => 'Freelance',
            '16' => 'Almacen'
        );
        $dd_name = "level";
        echo form_dropdown($dd_name, $dd_list, set_value($dd_name), 'class = "form-control" id="level"');
        ?>
    </div>
    <?php echo form_submit(array('value' => 'Guardar', 'class' => 'btn btn-lg btn-primary btn-block')); ?>
    <a href="<?php echo site_url() . 'main/users/'; ?>"><button type="button" class="btn btn-default btn-lg btn-block">Cancelar</button></a>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
    <?php echo form_close(); ?>
</div>