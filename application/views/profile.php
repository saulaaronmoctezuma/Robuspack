<?php
    $default = "path/to/defava.png"; // Set a Default Avatar
    $emailavatar = md5(strtolower(trim($email)));
    $gravurl = "";
    $imageProfile = '<img src="http://www.gravatar.com/avatar/'.$emailavatar.'?d='.$default.'&s=140&r=g&d=mm" class="img-circle" alt="">';
    $dataLevel_id = $this->userlevel->id($id);
?>
<<<<<<< HEAD



=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
<style>
 .perfil {
        border-tius: 50% 50%;
        border-bottom-left-radius: 50% 50%;op-left-radius: 50% 50%;
        border-top-right-radius: 50% 50%;
        border-bottom-right-radius: 50% 50%;
        border-bottom-left-radius: 50% 50%;
       
-webkit-border-radius:50%;

-webkit-box-shadow: 0px 0px 15px 15px #ec1e30;
transform: rotate(360deg);
-webkit-transform: rotate(360deg);
    }

    
    .imagen:hover{
border-radius:50%;
-webkit-border-radius:50%;
box-shadow: 0px 0px 15px 15px #ec731e;
-webkit-box-shadow: 0px 0px 15px 15px #ec731e;
transform: rotate(360deg);
-webkit-transform: rotate(360deg);
}
</style>
<<<<<<< HEAD



=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
<div class="col-md-8 col-lg-offset-2">
    <br><br>
                        
<div class="container well col-xs-12">
    
	<div class="row">
             <div class="form-group col-xs-4">
            
             <?php
                    if ($dataLevel_id == 1) {
                        ?>
<<<<<<< HEAD
                <center><img src="<?php echo base_url(); ?>assets/images/admin.jpg" height="150px" class="perfil" width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 2) {
                         ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/karen.jpg" height="150px" class="perfil"  width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 3) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/rocio.jpg" height="150px" class="perfil" width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 4) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/rodrigoislas.jpg" height="150px" class="perfil"  width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 5) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/cesar.png" height="150px" class="perfil" width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 6) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/carloshernandez.jpg" height="150px" class="perfil"  width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 7) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/aldo.jpg" height="150px" class="perfil"  width="150px" border="none" /></center>
=======
                <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/saul.jpg" height="150px" class="perfil"  width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 2) {
                         ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/karen.jpg" height="150px"  width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 3) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/rocio.jpg" height="150px" class="perfil"   width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 4) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/rodrigoislas.jpg" height="150px"  width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 5) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/cesar.png" height="150px"  width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 6) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/carloshernandez.jpg" height="150px"  width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 7) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/aldo.jpg" height="150px"  width="150px" border="none" /></center>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        <?php
                    } else if ($dataLevel_id == 8) {
                        
                    } else if ($dataLevel_id == 9) {
                        
                    } else if ($dataLevel_id == 10) {
                        
                    } else if ($dataLevel_id == 11) {
                        ?>
<<<<<<< HEAD
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/benjamin.png" height="150px" class="perfil"  width="150px" border="none" /></center>
=======
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/benjamin.png" height="150px"  width="150px" border="none" /></center>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        <?php
                    } else if ($dataLevel_id == 12) {
                        
                    } else if ($dataLevel_id == 13) {
                        ?>
<<<<<<< HEAD
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/gerardo.png" height="150px" class="perfil" width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 14) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/marisol.png" height="150px" class="perfil" width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 15) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/Paty.jpeg" height="150px" class="perfil"  width="150px" border="none" /></center>
=======
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/gerardo.png" height="150px"  width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 14) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/marisol.png" height="150px"  width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 15) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/alethia.png" height="150px"  width="150px" border="none" /></center>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        <?php
                    } else if ($dataLevel_id == 16) {
                        
                    } else if ($dataLevel_id == 17) {
                        ?>
<<<<<<< HEAD
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/prueba.png" height="150px" class="perfil"  width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id ==18) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/berenice.png" height="150px" class="perfil"  width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 19) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/sergio.jpg" height="150px"  width="150px" class="perfil" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 20) {
                        ?> 
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/edson.jpeg" height="150px"  width="150px" class="perfil" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 21) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/veronica.png" height="150px"  width="150px" class="perfil" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 22){
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/rodrigosantos.jpg" height="150px"  width="150px" class="perfil" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 23) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/jorge.jpg" height="150px"  width="150px" class="perfil" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 24) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/alejandro.png" height="150px"  width="150px" class="perfil" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 25) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/pablo.jpg" height="150px"  width="150px" class="perfil" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 26) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/miguel.jpg" height="150px"  width="150px" class="perfil" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 27) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/vicente.jpg" height="150px"  width="150px" class="perfil" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 28) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/sin_foto.png" height="150px"  width="150px" border="none" class="perfil" /></center>
                        <?php
                    } else if ($dataLevel_id == 29) {
                         ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/fernanda.jpg" height="150px"  width="150px" border="none" class="perfil" /></center>
=======
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/sin_foto.png" height="150px"  width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id ==18) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/berenice.png" height="150px"  width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 19) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/sergio.jpg" height="150px"  width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 20) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/edson.jpeg" height="150px"  width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 21) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/veronica.png" height="150px"  width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 22){
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/rodrigosantos.jpg" height="150px"  width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 23) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/jorge.jpg" height="150px"  width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 24) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/alejandro.png" height="150px"  width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 25) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/pablo.jpg" height="150px"  width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 26) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/miguel.jpg" height="150px"  width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 27) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/vicente.jpg" height="150px"  width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 28) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/sin_foto.png" height="150px"  width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 29) {
                         ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/fernanda.jpg" height="150px"  width="150px" border="none" /></center>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        <?php
                    }
                    else if ($dataLevel_id == 30) {
                        ?>
<<<<<<< HEAD
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/sin_foto.png" height="150px"  width="150px" border="none" class="perfil" /></center>
                        <?php
                    } else if ($dataLevel_id == 31) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/nadia.jpeg" height="150px"  width="150px" border="none" class="perfil" /></center>
                        <?php
                    } else if ($dataLevel_id == 32) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/benjamin.png" height="150px"  width="150px" border="none" class="perfil" /></center>
                        <?php
                    } else if ($dataLevel_id == 33) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/martin.png" height="150px"  width="150px" border="none" class="perfil" /></center>
                        <?php
                    }else if ($dataLevel_id == 35) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/silo.jpeg" height="150px"  width="150px" border="none" class="perfil" /></center>
                        <?php
                    } else if ($dataLevel_id == 39) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/icono_mujer.png" height="150px" class="perfil"  width="150px" border="none" /></center>
                        <?php
                    }else if ($dataLevel_id == 39) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/junior.jpg" height="150px" class="perfil"  width="150px" border="none" /></center>
                        <?php
                    }   else {
                        
                        
                        
=======
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/sin_foto.png" height="150px"  width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 31) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/nadia.jpeg" height="150px"  width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 32) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/martin.png" height="150px" class="perfil"   width="150px" border="none" /></center>
                        <?php
                    } else if ($dataLevel_id == 33) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/silo.jpeg" height="150px"  class="perfil"  width="150px" border="none" /></center>
                        <?php
                    }else if ($dataLevel_id == 36) {
                        ?>
                        <center><img src="<?php echo base_url(); ?>assets/fotos_perfil/sin_foto.png" height="150px"  width="150px" border="none" /></center>
                        <?php
                    }  else {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        
                    }
                    ?>

            </div>
      
         <div class="form-group col-xs-8">
            <h4><i class="fa fa-user-circle" aria-hidden="true"></i> <?php echo $first_name ." ". $last_name; ?></h4>
            <h5><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo $email; ?></h5>
            <h5><i class="fa fa-sign-in" aria-hidden="true"></i> <?php echo $last_login; ?></h5>
           
        </div>
       <!-- <div class="col-md-2">
            <div class="btn-group">
                <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">
                    Editar 
                    <span class="icon-cog icon-white"></span><span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo site_url();?>main/changeuser"><span class="icon-wrench"></span> Editar</a></li>
                </ul>
            </div>
        </div>-->
</div>
</div>
</div>

