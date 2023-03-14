<!--
 * Desarrolladores : Saúl Aarón González Moctezuma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */
 arriba -->
<style>
    html, body {
      margin: 0;
      width: 100%;q
      height: 100%;
    }
    
  h1 {
  font-family:verdana;
  font-size:50px;
  color:red;
  text-shadow: 1px  0px 0px yellow,
               0px  1px 0px yellow,
              -1px  0px 0px yellow,
               0px -1px 0px yellow;
}


 p {
  font-family:verdana;
  font-size:35px;
  color:red;
  text-shadow: 1px  0px 0px white,
               0px  1px 0px white,
              -1px  0px 0px white,
               0px -1px 0px white;
}

h5 {
  font-family:verdana;
  font-size:15px;
  color:red;
  text-shadow: 1px  0px 0px white,
               0px  1px 0px white,
              -1px  0px 0px white,
               0px -1px 0px white;
}

h2 {
  font-family:verdana;
  font-size:10px;
  color:red;
  text-shadow: 1px  0px 0px white,
               0px  1px 0px white,
              -1px  0px 0px white,
               0px -1px 0px white;
}

a {
  font-family:verdana;
  font-size:10px;
  color:red;
  text-shadow: 1px  0px 0px white,
               0px  1px 0px white,
              -1px  0px 0px white,
               0px -1px 0px white;
}


@media only screen and (max-width: 767px) {

body {

background-image: url(images/background-photo-mobile-devices.jpg);

}

  </style>
  
  <script>
      
      function login(){
          sessionStorage.setItem('email', document.getElementById("email").value);
       //   sessionStorage.setItem('contraseña',document.getElementById("password").value);
          
       email = document.getElementById("email").value = sessionStorage.getItem("email");
       //password = document.getElementById("password").value = sessionStorage.getItem("password");
      }
      
  </script>
  
  
  
    <?php
     defined('BASEPATH') OR exit('No direct script access allowed');
     date_default_timezone_set('America/Mexico_City');
     $fecha_actual = date("m");
     
  if($fecha_actual=='01') {
           ?>
       <body data-vide-bg="<?php echo base_url(); ?>assets/login/feliz_2023.jpg">
           
         <?php 
          
        }else if(($fecha_actual=='02')){
            ?> 
            <body data-vide-bg="<?php echo base_url(); ?>assets/login/febrero2021.mp4">
            
      <?php 
          
        }else if(($fecha_actual=='03')){
            ?> 
            <body data-vide-bg="<?php echo base_url(); ?>assets/login/marzo2021.mp4">
            
      <?php 
          
        }else if(($fecha_actual=='04')){
            ?> 
            <body data-vide-bg="<?php echo base_url(); ?>assets/login/login_general.jpg">
            
      <?php 
          
        }else if(($fecha_actual=='05')){
            ?> 
            <body data-vide-bg="<?php echo base_url(); ?>assets/login/mayo_2022.mp4">
            
      <?php 
          
        }else if(($fecha_actual=='06')){
            ?> 
            <body data-vide-bg="<?php echo base_url(); ?>assets/login/junio2021.mp4">
            
      <?php 
          
        }else if(($fecha_actual=='07')){
            ?> 
            <body data-vide-bg="<?php echo base_url(); ?>assets/login/login_general.jpg">
            
      <?php 
          
        }else if(($fecha_actual=='08')){
            ?> 
            <body data-vide-bg="<?php echo base_url(); ?>assets/login/agosto2021.mp4">
            
      <?php 
          
        }else if(($fecha_actual=='09')){
            ?> 
            <body data-vide-bg="<?php echo base_url(); ?>assets/login/septiembre2021.mp4">
            
      <?php 
          
        }else if(($fecha_actual=='10')){
            ?> 
            <body data-vide-bg="<?php echo base_url(); ?>assets/login/Oct2019.mp4">
            
      <?php 
          
        }else if(($fecha_actual=='11')){
            ?> 
            <body data-vide-bg="<?php echo base_url(); ?>assets/login/noviembre2018.mp4">
            
      <?php 
          
        }else if(($fecha_actual=='12')){
            ?> 
            <body data-vide-bg="<?php echo base_url(); ?>assets/login/diciembre2021.mp4">
            
      <?php 
          
        }
        
        ?>

 <!--
Videos coronavirus.mp4,abril2019.mp4,abril2020.mp4,julio2019.mp4,septiembre2019.mp4 Oct2019.mp4, feliz2021.jpg, febrero2021_2, abril2022.jpg,  marzo2021.mp4
 -->
   
     <div class="col-md-4">
        <!--<img width="100%" height="100%" style="float:right;" class="profile-img img-responsive logo" src="<?php echo base_url(); ?>assets/login/quedateencasa.png" id="bgvid" playsinline autoplay muted loop>-->
    </div>
    <div class="col-md-4 "></div>
    <div class="col-md-4 ">
        <img width="100%" style="float:right;" class="profile-img img-responsive logo" src="<?php echo base_url(); ?>assets/images/scr_blanco.png" id="bgvid" playsinline autoplay muted loop>
    </div>
<!--<style>


video { 
    position: fixed;
    max-width:100%;
    
    top:60%;
    left:50%;
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
.stopfade { 
   opacity: .5;
}

#polina { 
  font-family: Agenda-Light, Agenda Light, Agenda, Arial Narrow, sans-serif;
  font-weight:100; 
  background: rgba(148, 37, 13,15);
  color: white;
  padding: 2rem;
  width: 33%;
  margin:2rem;
  float: right;
  font-size: 1.2rem;
}
h1 {
  font-size: 3rem;
  text-transform: uppercase;
  margin-top: 0;
  letter-spacing: .3rem;
}
#polina button { 
  display: block;
  width: 80%;
  padding: .4rem;
  border: none; 
  margin: 1rem auto; 
  font-size: 1.3rem;
  /*background: rgba(255,255,255,0.23);*/
  color: #fff;
  border-radius: 3px; 
  cursor: pointer;
  transition: .3s background;
}
#polina button:hover { 
   background: rgba(160,170,60,0.5);
}

a {
  display: inline-block;
  color: #fff;
  text-decoration: none;
  background:rgba(160,0,0,0.5);
  padding: .5rem;
  transition: .6s background; 
}
a:hover{
  background:rgba(160,0,0,0.9);
}

@media screen and (max-device-width: 800px) {
  html { background: url(https://thenewcode.com/assets/images/polina.jpg) #94250D no-repeat center center fixed; }
  #bgvid { display: none; }
}
 </style> -->

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
</script>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


  <!--  <video poster="<?php echo base_url(); ?>assets/login/septiembre2019.mp4" id="bgvid" playsinline autoplay muted loop>
    <source src="<?php echo base_url(); ?>assets/login/septiembre2019.mp4" type="video/webm">
    <source src="<?php echo base_url(); ?>assets/login/septiembre2019.mp4" type="video/mp4">
</video>-->






<div class="col-lg-4 ">
<!--<div class="col-lg-4 col-lg-4">-->
   
<center><h2 >
       
       <p><b>Bienvenido</p>
     <!--
    <font color="green">Bie</font><font color="white">nven</font><font color="red">ido</font>-->
    
    </h2>
    
    
       <h5>Ingresa los datos correspondientes</b></h5>

       <!--  <h5>  <font color="green">Ingresa</font><font color="white"> los datos</font><font color="red"> correspondientes</font></h5>-->
</center><br>
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
<h2>
    <input type="checkbox" onclick="mostrarContrasena()" title="Selecciona para mostrar el campo de contraseña en modo texto"> <font color="#FF0000">
    <b> Mostrar Contraseña</h2>

    <?php if ($recaptcha == 'yes') { ?>
        <div style="text-align:center;" class="form-group">
            <div style="display: inline-block;"><?php echo $this->recaptcha->render(); ?></div>
        </div>
        <?php
    }
    echo form_submit(array('value' => 'Ingresar','onClick' => 'login();', 'title' => 'Da clic para ingresar al sistema', 'class' => 'btn btn-lg btn-success btn-block'));
    ?>
<?php echo form_close(); ?>
    <br>

    <center>

        <a title="Da clic para recuperar tu contraseña" style="color:#000000" href="<?php echo site_url(); ?>main/forgot"> Cambiar tu contraseña </a></p></center>
    <br> 
<a href='https://scrobuspack.com/apk/3.apk'>Descargar Aplicación</a>
</div>
<!--abajo-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="<?php echo base_url();?>assets/js/jquery.vide.js"></script>

