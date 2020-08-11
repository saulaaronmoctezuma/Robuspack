<style>
    .circular--square {
        border-top-left-radius: 50% 50%;
        border-top-right-radius: 50% 50%;
        border-bottom-right-radius: 50% 50%;
        border-bottom-left-radius: 50% 50%;
        min-width: 30px;
        margin-top: 9px;
        margin-left:40px;
    }



    @media (max-width:250px) {
        img#foto {
            display: none;
        }
    /*}*/

    .scr {
        margin-top: 5px;

        width: 130px;
        height: 49px;
    }
    @media (max-width:120px) {
        img#scr {
            display: none;
        }
    }

    .nav-side-menu {
        overflow: auto;
        font-family: verdana;
        font-size: 12px;
        font-weight: 200;
        background-color: #2e353d;
        position: fixed;
        top: 0px;
        width: 300px;
        height: 100%;
        color: #e1ffff;
    }
    .nav-side-menu .brand {
        background-color: #23282e;
        line-height: 50px;
        display: block;
        text-align: center;
        font-size: 14px;
    }
    .nav-side-menu .toggle-btn {
        display: none;
    }
    .nav-side-menu ul,
    .nav-side-menu li {
        list-style: none;
        padding: 0px;
        margin: 0px;
        line-height: 35px;
        cursor: pointer;
        /*    
          .collapsed{
             .arrow:before{
                       font-family: FontAwesome;
                       content: "\f053";
                       display: inline-block;
                       padding-left:10px;
                       padding-right: 10px;
                       vertical-align: middle;
                       float:right;
                  }
           }
        */
    }
    .nav-side-menu ul :not(collapsed) .arrow:before,
    .nav-side-menu li :not(collapsed) .arrow:before {
        font-family: FontAwesome;
        content: "\f078";
        display: inline-block;
        padding-left: 10px;
        padding-right: 10px;
        vertical-align: middle;
        float: right;
    }
    .nav-side-menu ul .active,
    .nav-side-menu li .active {
        border-left: 3px solid #d19b3d;
        background-color: #4f5b69;
    }
    .nav-side-menu ul .sub-menu li.active,
    .nav-side-menu li .sub-menu li.active {
        color: #d19b3d;
    }
    .nav-side-menu ul .sub-menu li.active a,
    .nav-side-menu li .sub-menu li.active a {
        color: #d19b3d;
    }
    .nav-side-menu ul .sub-menu li,
    .nav-side-menu li .sub-menu li {
        background-color: #181c20;
        border: none;
        line-height: 28px;
        border-bottom: 1px solid #23282e;
        margin-left: 0px;
    }
    .nav-side-menu ul .sub-menu li:hover,
    .nav-side-menu li .sub-menu li:hover {
        background-color: #020203;
    }
    .nav-side-menu ul .sub-menu li:before,
    .nav-side-menu li .sub-menu li:before {
        font-family: FontAwesome;
        content: "\f105";
        display: inline-block;
        padding-left: 10px;
        padding-right: 10px;
        vertical-align: middle;
    }
    .nav-side-menu li {
        padding-left: 0px;
        border-left: 3px solid #2e353d;
        border-bottom: 1px solid #23282e;
    }
    .nav-side-menu li a {
        text-decoration: none;
        color: #e1ffff;
    }
    .nav-side-menu li a i {
        padding-left: 10px;
        width: 20px;
        padding-right: 20px;
    }
    .nav-side-menu li:hover {
        border-left: 3px solid #d19b3d;
        background-color: #4f5b69;
        -webkit-transition: all 1s ease;
        -moz-transition: all 1s ease;
        -o-transition: all 1s ease;
        -ms-transition: all 1s ease;
        transition: all 1s ease;
    }
    @media (max-width: 767px) {
        .nav-side-menu {
            position: relative;
            width: 100%;
            margin-bottom: 10px;
        }
        .nav-side-menu .toggle-btn {
            display: block;
            cursor: pointer;
            position: absolute;
            right: 10px;
            top: 10px;
            z-index: 10 !important;
            padding: 3px;
            background-color: #ffffff;
            color: #000;
            width: 40px;
            text-align: center;
        }
        .brand {
            text-align: left !important;
            font-size: 22px;
            padding-left: 20px;
            line-height: 50px !important;
        }
    }
    @media (min-width: 767px) {
        .nav-side-menu .menu-list .menu-content {
            display: block;
        }
    }
    body {
        margin: 0px;
        padding: 0px;
    }

nav.navbar {
    background-color: #5114cc;
}
</style>

<?php
//check user level
$dataLevel = $this->userlevel->checkLevel($role);

$dataLevel_id = $this->userlevel->id($id);
$result = $this->User_model->getAllSettings();
$site_title = $result->site_title;
//check user level
?>
<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SCR</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SCROBUSPACK</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-inverse navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
  <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url(); ?>main/profile"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> <?php echo $email; ?></a></li>
    <li><a data-toggle="modal" data-target="#myModal"><i class="fa fa-question-circle" aria-hidden="true"></i> Acerca de</a></li>





                    <!--<li><a href="<?php echo site_url(); ?>main/changeuser">Editar Perfil</a></li>  -->
<?php
if ($dataLevel == 'is_admin') {
    // echo '<script language="javascript">alert("Estamos actualizando el SIC");</script>'; 
    echo '<li><a href="' . site_url() . 'main/changeuser"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i> Editar Perfil</a></li>';

    // echo ' <li><a href="' . site_url() . 'Usuario">Últimas Conexiones</a></li>';
    echo '<li><a href="' . site_url() . 'main/settings"><i class="glyphicon glyphicon-cog" aria-hidden="true"></i> Configuración</a></li>';
} else if ($dataLevel == 'is_editor') {
    //  echo ' <li><a href="' . site_url() . 'Usuario">Últimas Conexiones</a></li>';
} else if ($dataLevel == 'is_Gerente_Ventas') {
    //  echo ' <li><a href="' . site_url() . 'Usuario">Últimas Conexiones</a></li>';
} else if ($dataLevel == 'is_director') {
    //  echo ' <li><a href="' . site_url() . 'Usuario">Últimas Conexiones</a></li>';
} else if ($dataLevel == 'is_jefe_mantenimiento') {
    //echo ' <li><a href="' . site_url() . 'Usuario">Últimas Conexiones</a></li>';
}
?>

                                                <!--<li><a href="<?php echo site_url(); ?>main/changeuser">Editar Perfil</a></li>-->



                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url() . 'main/logout' ?>"><i class="fa fa-fw fa-power-off"></i>  Cerrar Sesión</a></li>
                        </ul>
      
      

                    <?php
                    if ($dataLevel_id == 1) {
                        ?>
                        <a href="<?php echo site_url(); ?>main/profile/">   <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/saul.jpg" height="45px"  width="45px" border="none" /> </a> 

                        </a>  <?php
                } else if ($dataLevel_id == 2) {
                    ?>
                        <a href="<?php echo site_url(); ?>main/profile/">    <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/karen.jpg" height="45px"  width="45px" border="none" /> </a> 
                        <?php
                    } else if ($dataLevel_id == 3) {
                        ?>
                        <a href="<?php echo site_url(); ?>main/profile/">    <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/rocio.png" height="45px"  width="45px" border="none" /> </a> 
                        <?php
                    } else if ($dataLevel_id == 4) {
                        ?>
                        <a href="<?php echo site_url(); ?>main/profile/">   <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/rodrigoislas.jpg" height="45px"  width="45px" border="none" /> </a> 
                        <?php
                    } else if ($dataLevel_id == 5) {
                        ?>
                        <a href="<?php echo site_url(); ?>main/profile/">  
                            <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/cesar.png" height="45px"  width="45px" border="none" /> </a> 
    <?php
} else if ($dataLevel_id == 6) {
    ?>
                        <a href="<?php echo site_url(); ?>main/profile/">  
                            <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/carloshernandez.jpg" height="45px"  width="45px" border="none" /></a>
    <?php
} else if ($dataLevel_id == 7) {
    ?>
                        <a href="<?php echo site_url(); ?>main/profile/">  
                            <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/aldo.jpg" height="45px"  width="45px" border="none" /></a>
    <?php
} else if ($dataLevel_id == 8) {
    
} else if ($dataLevel_id == 9) {
    
} else if ($dataLevel_id == 10) {
    
} else if ($dataLevel_id == 11) {
    ?>
                        <a href="<?php echo site_url(); ?>main/profile/">  
                            <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/benjamin.png" height="45px"  width="45px" border="none" /></a>
    <?php
} else if ($dataLevel_id == 12) {
    
} else if ($dataLevel_id == 13) {
    ?>
                        <a href="<?php echo site_url(); ?>main/profile/">  
                            <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/gerardo.png" height="45px"  width="45px" border="none" /></a>
    <?php
} else if ($dataLevel_id == 14) {
    ?>
                        <a href="<?php echo site_url(); ?>main/profile/">  
                            <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/marisol.png" height="45px"  width="45px" border="none" /></a>
    <?php
} else if ($dataLevel_id == 15) {
    ?>
                        <a href="<?php echo site_url(); ?>main/profile/">  
                            <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/alethia.png" height="45px"  width="45px" border="none" /></a>
    <?php
} else if ($dataLevel_id == 16) {
    
} else if ($dataLevel_id == 17) {
    ?>
                        <a href="<?php echo site_url(); ?>main/profile/">  
                            <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/sin_foto.png" height="45px"  width="45px" border="none" /></a>
    <?php
} else if ($dataLevel_id == 18) {
    ?>
                        <a href="<?php echo site_url(); ?>main/profile/">  
                            <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/berenice.png" height="45px"  width="45px" border="none" /></a>
    <?php
} else if ($dataLevel_id == 19) {
    ?>
                        <a href="<?php echo site_url(); ?>main/profile/">  
                            <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/sergio.jpg" height="45px"  width="45px" border="none" /></a>
    <?php
} else if ($dataLevel_id == 20) {
    ?>
                        <a href="<?php echo site_url(); ?>main/profile/">  
                            <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/edson.jpeg" height="45px"  width="45px" border="none" /></a>
    <?php
} else if ($dataLevel_id == 21) {
    ?>
                        <a href="<?php echo site_url(); ?>main/profile/">  
                            <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/veronica.png" height="45px"  width="45px" border="none" /></a>
    <?php
} else if ($dataLevel_id == 22) {
    ?>
                        <a href="<?php echo site_url(); ?>main/profile/">  
                            <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/rodrigosantos.jpg" height="45px"  width="45px" border="none" /></a>
        <?php
    } else if ($dataLevel_id == 23) {
        ?>
                        <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/jorge.jpg" height="45px"  width="45px" border="none" /></a>
                        <?php
                    } else if ($dataLevel_id == 24) {
                        ?>
                        <a href="<?php echo site_url(); ?>main/profile/">  
                            <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/alejandro.png" height="45px"  width="45px" border="none" /></a>
                                <?php
                            } else if ($dataLevel_id == 25) {

                        } else if ($dataLevel_id == 26) {
                            ?>
                        <a href="<?php echo site_url(); ?>main/profile/">  
                            <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/miguel.jpg" height="45px"  width="45px" border="none" /></a>
                            <?php
                        } else if ($dataLevel_id == 27) {
                            ?>
                        <a href="<?php echo site_url(); ?>main/profile/">  
                            <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/vicente.jpg" height="45px"  width="45px" border="none" /></a>
                                <?php
                            } else if ($dataLevel_id == 28) {
                                ?>
                                <a href="<?php echo site_url(); ?>main/profile/">  
                            <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/sin_foto.jpg" height="45px"  width="45px" border="none" /></a>
                            <?php
                        } else if ($dataLevel_id == 29) {
                            ?>
                        <a href="<?php echo site_url(); ?>main/profile/">  
                            <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/fernanda.jpg" height="45px"  width="45px" border="none" /></a>
                        <?php
                    } else if ($dataLevel_id == 30) {
                        ?>
                        <a href="<?php echo site_url(); ?>main/profile/">  
                            <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/sin_foto.jpg" height="45px"  width="45px" border="none" /></a>
                        <?php
                    } else if ($dataLevel_id == 31) {
                        ?>  
                        <a href="<?php echo site_url(); ?>main/profile/">  
                            <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/nadia.jpeg" height="45px"  width="45px" border="none" /></a>
                        <?php
                    } else if ($dataLevel_id == 32) {
                        ?> 
                        <a href="<?php echo site_url(); ?>main/profile/">  
                            <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/martin.png" height="45px"  width="45px" border="none" /></a>
                        <?php
                    } else if ($dataLevel_id == 33) {
                        ?>  
                        <a href="<?php echo site_url(); ?>main/profile/">  
                            <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/silo.jpeg" height="45px"  width="45px" border="none" /></a>
                        <?php
                    }else if ($dataLevel_id == 36) {
    ?>
                        <a href="<?php echo site_url(); ?>main/profile/">  
                            <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/sin_foto.png" height="45px"  width="45px" border="none" /></a>
    <?php
} else {
                        
                    }
                    ?>
    
     <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                           <!-- <i class="fa fa-user-circle" aria-hidden="true"></i>-->
<?php echo $first_name; ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url(); ?>main/profile"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> <?php echo $email; ?></a></li>
    <li><a data-toggle="modal" data-target="#myModal"><i class="fa fa-question-circle" aria-hidden="true"></i> Acerca de</a></li>





                    <!--<li><a href="<?php echo site_url(); ?>main/changeuser">Editar Perfil</a></li>  -->
<?php
if ($dataLevel == 'is_admin') {
    // echo '<script language="javascript">alert("Estamos actualizando el SIC");</script>'; 
    echo '<li><a href="' . site_url() . 'main/changeuser"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i> Editar Perfil</a></li>';

    // echo ' <li><a href="' . site_url() . 'Usuario">Últimas Conexiones</a></li>';
    echo '<li><a href="' . site_url() . 'main/settings"><i class="glyphicon glyphicon-cog" aria-hidden="true"></i> Configuración</a></li>';
} else if ($dataLevel == 'is_editor') {
    //  echo ' <li><a href="' . site_url() . 'Usuario">Últimas Conexiones</a></li>';
} else if ($dataLevel == 'is_Gerente_Ventas') {
    //  echo ' <li><a href="' . site_url() . 'Usuario">Últimas Conexiones</a></li>';
} else if ($dataLevel == 'is_director') {
    //  echo ' <li><a href="' . site_url() . 'Usuario">Últimas Conexiones</a></li>';
} else if ($dataLevel == 'is_jefe_mantenimiento') {
    //echo ' <li><a href="' . site_url() . 'Usuario">Últimas Conexiones</a></li>';
}
?>

                                                <!--<li><a href="<?php echo site_url(); ?>main/changeuser">Editar Perfil</a></li>-->



                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url() . 'main/logout' ?>"><i class="fa fa-fw fa-power-off"></i>  Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>   
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  