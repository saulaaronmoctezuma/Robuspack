
<div class="col-lg-4 col-lg-offset-4">
    <h2>Hola <?php echo $first_name; ?>,</h2>
    <h5>Ingrese la información correspodiente</h5>     
    <?php
    $fattr = array('class' => 'form-signin');
    echo form_open('/main/adduser', $fattr);
    ?>
    <div class="form-group">
        <?php echo form_input(array('name' => 'firstname', 'id' => 'firstname', 'placeholder' => 'Nombre(s)', 'class' => 'form-control', 'value' => set_value('firstname'))); ?>
        <?php echo form_error('firstname'); ?>
    </div>
    <div class="form-group">
        <?php echo form_input(array('name' => 'lastname', 'id' => 'lastname', 'placeholder' => 'Apellido(s)', 'class' => 'form-control', 'value' => set_value('lastname'))); ?>
        <?php echo form_error('lastname'); ?>
    </div>
    <div class="form-group">
        <?php echo form_input(array('name' => 'email', 'id' => 'email', 'placeholder' => 'Correo electrónico', 'class' => 'form-control', 'value' => set_value('email'))); ?>
        <?php echo form_error('email'); ?>
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
            '13' => 'Logística'
        );
        $dd_name = "role";
        echo form_dropdown($dd_name, $dd_list, set_value($dd_name), 'class = "form-control" id="role"');
        ?>
    </div>
    <div class="form-group">
        <?php echo form_password(array('name' => 'password', 'id' => 'password', 'placeholder' => 'Contraseña', 'class' => 'form-control', 'value' => set_value('password'))); ?>
        <?php echo form_error('password') ?>
    </div>
    <div class="form-group">
        <?php echo form_password(array('name' => 'passconf', 'id' => 'passconf', 'placeholder' => 'Confirmar Contraseña', 'class' => 'form-control', 'value' => set_value('passconf'))); ?>
        <?php echo form_error('passconf') ?>
    </div>
    <?php echo form_submit(array('value' => 'Agregar', 'class' => 'btn btn-lg btn-primary btn-block')); ?>
    <?php echo form_close(); ?>
</div>