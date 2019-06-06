
<style>
   
    video { 
        position: fixed;
        top: 50%;
        left: 50%;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: -100;
        transform: translateX(-50%) translateY(-50%);
        background: url('//demosthenes.info/assets/images/polina.jpg') no-repeat;
        background-size: cover;
        transition: 1s opacity;
    }
   
</style> 

<script>
    function mostrarContrasena() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

</script>
<br>
<br>
<br>
<br>

<font color="red"><h1>LOCALHOST PRUEBAS</h1></font>

<video poster="<?php echo base_url(); ?>assets/login/junio.jpg" id="bgvid" playsinline autoplay muted loop>
    <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
    <source src="<?php echo base_url(); ?>assets/login/junio.jpg" type="video/webm">
    <source src="<?php echo base_url(); ?>assets/login/junio.jpg" type="video/mp4">
</video>






<div class="col-lg-4 col-lg-offset-4">
<!--<div class="col-lg-4 col-lg-4">-->
   
    <center><h2 ><p style="color:#2ECC71">Bienvenido</p></h2>
        <h5 style="color:#2ECC71">Ingresa los datos correspondientes</h5></center><br>
    <?php $fattr = array('class' => 'form-signin');
    echo form_open(site_url() . 'main/login/', $fattr);
    ?>


    <div class="form-group has-feedback">



        <div class="form-group">

            <?php
            echo form_input(array(
                'name' => 'email',
                'id' => 'email',
                'placeholder' => 'Correo electrónico',
                'class' => 'form-control',
                'title' => 'Introduce tu Correo Electrónico',
                'value' => set_value('email')));
            ?>

<?php echo form_error('email') ?>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>




    </div>




    <div class="form-group has-feedback">
        <div class="form-group">
            <?php
            echo form_password(array(
                'name' => 'password',
                'id' => 'password',
                'placeholder' => 'Contraseña',
                'class' => 'form-control',
                'title' => 'Introduce tu Contraseña',
                'value' => set_value('password')));
            ?>
<?php echo form_error('password') ?>
        </div>



        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>

    <input type="checkbox" onclick="mostrarContrasena()" title="Selecciona para mostrar el campo de contraseña en modo texto"> <font color="white">
    Mostrar Contraseña</font>

    <?php if ($recaptcha == 'yes') { ?>
        <div style="text-align:center;" class="form-group">
            <div style="display: inline-block;"><?php echo $this->recaptcha->render(); ?></div>
        </div>
        <?php
    }
    echo form_submit(array('value' => 'Ingresar', 'title' => 'Da clic para ingresar al sistema', 'class' => 'btn btn-lg btn-success btn-block'));
    ?>
<?php echo form_close(); ?>
    <br>

    <center>

        <a title="Da clic para recuperar tu contraseña" style="color:#ffffff" href="<?php echo site_url(); ?>main/forgot"> ¿Olvidaste tu contraseña? </a></p></center>
    <br> 

</div>
