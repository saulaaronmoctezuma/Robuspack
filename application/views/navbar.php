<<<<<<< HEAD



<!--

<div style="text-align: center;"><a style= "@media screen and (max-width: 980px) display: none; left: 0px; height: 200px; width: 70px; position: fixed; top: 0px;"><img src="https://scrobuspack.com/assets/login/adorno.gif" _fcksavedurl="" alt="" /></a></div>



=======
    <!--
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */
-->

<?php
//check user level
$dataLevel = $this->userlevel->checkLevel($role);

$dataLevel_id = $this->userlevel->id($id);
$result = $this->User_model->getAllSettings();
$site_title = $result->site_title;
//check user level
?>

<<<<<<< HEAD
<!--Para Buscar

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.2.1/jquery.quicksearch.js"></script>
=======
<!--Para Buscar-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.2.1/jquery.quicksearch.js"></script>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
<script>
    $(function () {
        $('#buscandoIguales').quicksearch('table tbody tr');
    });
<<<<<<< HEAD
</script> -->


 <style>
        input:focus {
  background: rgb(148, 254, 180);
}   
          select:focus {
  background: rgb(148, 254, 180);
}    
textarea:focus {
  background: rgb(148, 254, 180);
}    
        
        
   </style>
   

   

    
=======
</script> 
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
<style>
    .circular--square {
        border-top-left-radius: 50% 50%;
        border-top-right-radius: 50% 50%;
        border-bottom-right-radius: 50% 50%;
        border-bottom-left-radius: 50% 50%;
        min-width: 30px;
        margin-top: 9px;
<<<<<<< HEAD
        margin-left:70px;
=======
        margin-left:40px;
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
    }



<<<<<<< HEAD
    @media (max-width:1200px) {
        img#foto {
            display: none;
        }
    }

    .scr {
         margin-top: 5px;
      
=======
    @media (max-width:250px) {
        img#foto {
            display: none;
        }
    /*}*/

    .scr {
        margin-top: 5px;

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        width: 130px;
        height: 49px;
    }
    @media (max-width:120px) {
        img#scr {
            display: none;
        }
    }

<<<<<<< HEAD
</style>


   <script type="text/javascript">
=======
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


</style>

     <script type="text/javascript">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

        $(document).ready(function() {
            // Variable global que nos dirá si hemos dado un click al botón
            var clicando = false;

// Evento de click del primer botón
            $("#btn-dobleclick").click(function() {
                // Mostramos el Alert
<<<<<<< HEAD
                alert("Ya se envio el formulario");
=======
                alert("Handler for dobleclick.click() called.");
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            });

// Evento del segundo boton
            $("#btn-unSoloClick").click(function() {
                // Si ha sido clicado
                if (clicando) {
                    // Mostramos que ya se ha clicado, y no puede clicarse de nuevo
                    //  alert( "Que ya he realizado un click." );
                    // Si no ha sido clicado
                } else {
                    // Le decimos que ha sido clicado
                    clicando = true;
                    // Mostramos el mensaje de que ha sido clicado
                    //alert("Guardando Informacion");
                }
            });
<<<<<<< HEAD
            
            // Evento del segundo boton
            $("#add_row").click(function() {
=======
      // Evento del segundo boton
            $("#botonOrden").click(function() {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                // Si ha sido clicado
                if (clicando) {
                    // Mostramos que ya se ha clicado, y no puede clicarse de nuevo
                    //  alert( "Que ya he realizado un click." );
                    // Si no ha sido clicado
                } else {
                    // Le decimos que ha sido clicado
                    clicando = true;
                    // Mostramos el mensaje de que ha sido clicado
                    //alert("Guardando Informacion");
                }
            });
<<<<<<< HEAD
            
            
            
        // Evento del segundo boton
            $(".botonOrden").click(function() {
                // Si ha sido clicado
                if (clicando) {
                    // Mostramos que ya se ha clicado, y no puede clicarse de nuevo
                alert( "Ya se envio la información" );
                    // Si no ha sido clicado
                } else {
                    // Le decimos que ha sido clicado
                    clicando = true;
                    // Mostramos el mensaje de que ha sido clicado
                alert("Guardando Informacion");
                }
            });
            
            
            
            
            
            

        });
        
        
        

     


    </script>


<nav class="navbar navbar-inverse navbar-fixed-top">
=======
       });
        
    </script>

           
           
           
           
           
           
    <nav class="navbar navbar-inverse navbar-fixed-top">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
    <div class="container">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
<<<<<<< HEAD
             <a href="<?php echo site_url(); ?>main/">   <img class="scr" id="scr" src="<?php echo base_url(); ?>assets/images/scr_01.png" border="none" />
</a>
 <!--  <img src="http://anfec.org.mx/wp-content/uploads/2018/05/rrp.png" border="0" width="80" height="60">-->
 <!--<a class="navbar-brand" href="<?php echo site_url(); ?>main/"><?php echo $site_title; ?></a>-->
=======
                <a href="<?php echo site_url(); ?>main/">   <img  width="130px" height="55" class="scr" id="scr" src="<?php echo base_url(); ?>assets/images/scr_01.png" border="none" />
                </a>
                 <!--  <img src="http://anfec.org.mx/wp-content/uploads/2018/05/rrp.png" border="0" width="80" height="60">-->
                 <!--<a class="navbar-brand" href="<?php echo site_url(); ?>main/"><?php echo $site_title; ?></a>-->
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <!-- <li><a href="<?php echo site_url(); ?>main/"><i class="glyphicon glyphicon-home" aria-hidden="true"></i> Inicio</a></li>-->

                    <?php
                    if ($dataLevel == 'is_admin') { //Menú para Karen & Saúl
                        //echo '<script language="javascript">alert("Estamos Actualizando el sic");</script>'; 
<<<<<<< HEAD

                        echo'
                            <li class="dropdown">
=======
                        echo'
                            <li class="dropdown" TITLE="Usuarios">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> Usuarios <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                             <li><a href="' . site_url() . 'Usuario">Últimas Conexiones</a></li>
                                <li><a href="' . site_url() . 'main/users">Listar de Usuario</a></li>
                                <li><a href="' . site_url() . 'main/adduser">Agregar Usuario</a></li>
<<<<<<< HEAD
                                  <li><a href="' . site_url() . 'main/banuser">Prohibir usuario</a></li>
                                <li><a href="' . site_url() . 'main/changelevel">Rol</a></li> 
                              </ul>
                            </li>
                           
=======
                              <li><a href="' . site_url() . 'main/banuser">Prohibir usuario</a></li>
                                <li><a href="' . site_url() . 'main/changelevel">Rol</a></li> 
                              </ul>
                            </li>
                                
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                           
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-tasks" aria-hidden="true"></i> Control SIC <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="' . site_url() . 'ClienteRefacciones">Control SIC</a></li>
                                 <li><a href="' . site_url() . 'TotSic">Total SIC</a></li>
                                <li><a href="' . site_url() . 'BitacoraRefacciones">Bitácora</a></li>
<<<<<<< HEAD
                             
                                <li><a href="' . site_url() . 'Maquinaria">Lista de Precios Cubiertas</a></li>
                            <!--<li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                <li><a href="' . site_url() . 'MaximoMinimo">Reporte Máximo Mínimo</a></li>
                                 <li><a href="' . site_url() . 'MaxMin">Reporte Rotación de Inventario</a></li>
                                <li><a href="' . site_url() . 'ReporteMaximoMinimo">Prueba 2 Rotación de Inventario</a></li>-->
=======
                                 <li><a href="' . site_url() . 'TotBit">Total Registros Bitácora</a></li>
                                <li><a href="' . site_url() . 'Maquinaria">Lista de Precios Cubiertas</a></li>
                                <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                <li><a href="' . site_url() . 'MaximoMinimo">Reporte Máximo Mínimo</a></li>
                                    <li><a href="' . site_url() . 'MaximoMinimo2">Reporte Máximo Mínimo 2</a></li>
                                 <li><a href="' . site_url() . 'MaxMin">Reporte Rotación de Inventario</a></li>
                               <li><a href="' . site_url() . 'ReporteMaximoMinimo">Reporte Rotación de Inventario 2</a></li>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                  <li><a href="' . site_url() . 'CliVen">Clientes por Vendedor</a></li>
                                <li><a href="' . site_url() . 'MaqCli">Máquinas por Clientes</a></li>
                                <li><a href="' . site_url() . 'MaqVen">Máquinas por Vendedor</a></li>
                                
                                 
                              </ul>
                            </li>
                            
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Control SIM  <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . 'ClienteSeguimiento">Control SIM</a></li>
                                    <li><a href="' . site_url() . 'Bitacora">Bitácora</a></li>
<<<<<<< HEAD
                                    <li><a href="' . site_url() . 'CensoMaquinaria">Censo Maquinaria Clientes</a></li>
                                     <!-- <li><a href="' . site_url() . 'CensoMaquinaria/listaProspectos">Censo Maquinaria Prospectos</a></li>-->
                                    <li><a href="' . site_url() . 'ReporteFlexo">Reporte Flexo</a></li>
                              </ul>
                            </li>
                            
=======
                                         <li><a href="' . site_url() . 'CensoMaquinaria">Censo Maquinaria</a></li>
                              </ul>
                            </li>
                            


                            
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            

                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-wrench" aria-hidden="true"></i> Control Mtto <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="' . site_url() . 'BitacoraMtto">Bitácora</a></li>
                                
                              </ul>
                            </li>


<<<<<<< HEAD

                              <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Catálogos<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="' . site_url() . 'Calendario">Agenda</a></li>
                                 <!--<li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>-->
                                <li><a href="' . site_url() . 'Cliente">Cliente Makbox</a></li>
                                   <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                   
                             <li><a href="' . site_url() . 'Fucompras">FU Compras</a></li>
                                     <li><a href="' . site_url() . 'Fuvservicio">FU V Servicio</a></li>
                                       <li><a href="' . site_url() . 'Fuventas">FU V Refacciones</a></li>
                                   
                                   <li><a href="' . site_url() . 'Products">Con Inv Refacciones</a></li>
                                   <li><a href="' . site_url() . 'cubierta">Con Inv Cubiertas</a></li>
                                      <li><a href="' . site_url() . 'orders">Salidas</a></li>  
                                     <!-- <li><a href="' . site_url() . 'products/agregar">Actualizar Inventario</a></li> -->
                                      
                                      <li><a href="' . site_url() . 'inventory">Actualizar Inventario</a></li>
                                    <!--  <li><a href="' . site_url() . 'stores/">Almacen</a></li>-->
                                      <li><a href="' . site_url() . 'ClientesRefa/">Clientes Refacciones</a></li>
                                    
                                     
                                     
                                     
                                   
                                      
                                   
                                      
                                       <li><a href="' . site_url() . 'CatalogoVenTec">Vendedores y Técnicos</a></li>
                                      
                                      
                                      
                              </ul>
                            </li>
                           
=======
    <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Catálogos<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . 'CatalogoVenTec">Vendedores y Técnicos</a></li>
                                   <li><a href="' . site_url() . 'Cliente">Cliente Makbox</a></li>
                                    <li><a href="' . site_url() . 'Empresa">Empresas No Validadas</a></li>
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                      <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>
                                     <li><a href="' . site_url() . 'Fuventas">FU V Refacciones</a></li>
                                      <li><a href="' . site_url() . 'Fuvservicio">FU V Servicio</a></li>
                                       <li><a href="' . site_url() . 'Fucompras">FU Compras</a></li>
                                      <li><a href="' . site_url() . 'Calendario">Agenda</a></li>
                                      <li><a href="' . site_url() . 'Products">Con Inv Refacciones</a></li>
                                          
                                      <li><a href="' . site_url() . 'Cubierta">Con Inv Cubiertas</a></li> 
                                      <li><a href="' . site_url() . 'Orders">Salidas</a></li>  
                                      <!--<li><a href="' . site_url() . 'products/agregar">Actualizar Inventario</a></li> 
                                      --><li><a href="' . site_url() . 'inventory">Actualizar Inventario v2</a></li> 
                                      
                                       <li><a href="' . site_url() . 'stores/">Almacen</a></li>
                                           <li><a href="' . site_url() . 'ClientesRefa/">Clientes Refacciones</a></li>
                                    
                                     
                                   
                              </ul>
                            </li>

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            
                            
                         
                            ';
                    }

                    /* <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i> Perfil <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                      <li><a href="'.site_url().'main/changeuser">Editar Perfil</a></li>
                      </ul>
                      </li> */

<<<<<<< HEAD
























 

                    if ($dataLevel == 'is_freelance') {
                        echo'
                             <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> Usuarios <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                             <li><a href="' . site_url() . '">Últimas Conexiones</a></li>
                                
=======
                    if (($dataLevel == 'is_refacciones')) { //Menú para el usuario 
                        echo'
                           <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> Usuarios <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                             <li><a href="' . site_url() . 'Usuario">Últimas Conexiones</a></li>
                                <li><a href="' . site_url() . 'main/users">Listar de Usuario</a></li>
                                <li><a href="' . site_url() . 'main/adduser">Agregar Usuario</a></li>
                              <li><a href="' . site_url() . 'main/banuser">Prohibir usuario</a></li>
                                <li><a href="' . site_url() . 'main/changelevel">Rol</a></li> 
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                              </ul>
                            </li>
                           
                           
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-tasks" aria-hidden="true"></i> Control SIC <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="' . site_url() . 'ClienteRefacciones">Control SIC</a></li>
                                 <li><a href="' . site_url() . 'TotSic">Total SIC</a></li>
                                <li><a href="' . site_url() . 'BitacoraRefacciones">Bitácora</a></li>
                                 <li><a href="' . site_url() . 'TotBit">Total Registros Bitácora</a></li>
                                <li><a href="' . site_url() . 'Maquinaria">Lista de Precios Cubiertas</a></li>
                                <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                <li><a href="' . site_url() . 'MaximoMinimo">Reporte Máximo Mínimo</a></li>
                                 <li><a href="' . site_url() . 'ReporteMaximoMinimo">Reporte Rotación de Inventario</a></li>
                               
                                  <li><a href="' . site_url() . 'CliVen">Clientes por Vendedor</a></li>
                                <li><a href="' . site_url() . 'MaqCli">Máquinas por Clientes</a></li>
                                <li><a href="' . site_url() . 'MaqVen">Máquinas por Vendedor</a></li>
                                
                                 
                              </ul>
                            </li>
                            
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Control SIM  <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . 'ClienteSeguimiento">Control SIM</a></li>
                                    <li><a href="' . site_url() . 'Bitacora">Bitácora</a></li>
<<<<<<< HEAD
=======
                                        <li><a href="' . site_url() . 'CensoMaquinaria">Censo Maquinaria</a></li>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                              </ul>
                            </li>
                            
                            

                            <li class="dropdown">
<<<<<<< HEAD
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-wrench" aria-hidden="true"></i> Control Mtto <span clis_ass="caret"></span></a>
=======
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-wrench" aria-hidden="true"></i> Control Mtto <span class="caret"></span></a>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                              <ul class="dropdown-menu">
                                <li><a href="' . site_url() . 'BitacoraMtto">Bitácora</a></li>
                                
                              </ul>
                            </li>



                              <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Catálogos<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . 'CatalogoVenTec">Vendedores y Técnicos</a></li>
<<<<<<< HEAD
                                   <li><a href="' . site_url() . 'Cliente">Clientes Makbox</a></li>
                                  
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                      <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>
                                         <li><a href="' . site_url() . 'Fuventas">FU V Refacciones</a></li>
                                      <li><a href="' . site_url() . 'Fuvservicio">FU V Servicio</a></li>
                                          <li><a href="' . site_url() . 'Fucompras">FU Compras</a></li>
                                              <li><a href="' . site_url() . 'Calendario">Agenda</a></li>
                              </ul>
                            </li>
                           

                            
                            
                         
=======
                                   <li><a href="' . site_url() . 'Cliente">Clientes</a></li>
                                    <li><a href="' . site_url() . 'Empresa">Empresas</a></li>
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                      <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>
                                          <li><a href="' . site_url() . '">FU Ventas</a></li>
                              </ul>
                            </li>
                           
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            ';
                    }


<<<<<<< HEAD
















                    if ($dataLevel == 'is_refacciones') { //Menú para el usuario 
=======
                    if ($dataLevel == 'is_refacciodnes') { //Menú para el usuario 
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        echo'
                           <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> Usuarios <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                             <li><a href="' . site_url() . 'Usuario">Últimas Conexiones</a></li>
                                
                              </ul>
                            </li>
                           
                           
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-tasks" aria-hidden="true"></i> Control SIC <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="' . site_url() . 'ClienteRefacciones">Control SIC</a></li>
                                 <li><a href="' . site_url() . 'TotSic">Total SIC</a></li>
                                <li><a href="' . site_url() . 'BitacoraRefacciones">Bitácora</a></li>
                                <li><a href="' . site_url() . 'MaximoMinimo">Reporte Máximo Mínimo</a></li>
                                 <li><a href="' . site_url() . 'ReporteMaximoMinimo">Reporte Rotación de Inventario</a></li>
                               
                                 <li><a href="' . site_url() . 'TotBit">Total Registros Bitácora</a></li>
                                <li><a href="' . site_url() . 'Maquinaria">Lista de Precios Cubiertas</a></li>
                                <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                  <li><a href="' . site_url() . 'CliVen">Clientes por Vendedor</a></li>
                                <li><a href="' . site_url() . 'MaqCli">Máquinas por Clientes</a></li>
                                <li><a href="' . site_url() . '">Máquinas por Vendedor</a></li>
                                
                                 
                              </ul>
                            </li>
                            
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Control SIM  <span class="caret"></span></a>
                              <ul class="dropdown-menu">
<<<<<<< HEAD
                                    <li><a href="' . site_url() . 'ClienteSeguimiento">Control SIM</a></li>
                                    <li><a href="' . site_url() . '">Bitácora</a></li>
                                    <li><a href="' . site_url() . 'CensoMaquinaria">Censo Maquinaria</a></li>
=======
                                    <li><a href="' . site_url() . '">Control SIM</a></li>
                                    <li><a href="' . site_url() . '">Bitácora</a></li>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                              </ul>
                            </li>
                            
                            

                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-wrench" aria-hidden="true"></i> Control Mtto <span class="caret"></span></a>
                              <ul class="dropdown-menu">
<<<<<<< HEAD
                                <li><a href="' . site_url() . 'BitacoraMtto">Bitácora</a></li>
=======
                                <li><a href="' . site_url() . '">Bitácora</a></li>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                
                              </ul>
                            </li>



                              <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Catálogos<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . '">Vendedores y Técnicos</a></li>
                                   <li><a href="' . site_url() . '">Clientes</a></li>
<<<<<<< HEAD
                                   
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                      <li><a href="' . site_url() . '">BD Validada</a></li>
                                      <li><a href="' . site_url() . 'Calendario">Agenda</a></li>
                                           <li><a href="' . site_url() . 'Fuventas">FU V Refacciones</a></li>
                                            <li><a href="' . site_url() . 'Products">Refacciones</a></li>  
                                      <li><a href="' . site_url() . 'cubierta">Cubiertas</a></li>  
                                      <!--<li><a href="' . site_url() . 'products/agregar">Actualizar Inventario</a></li> -->
=======
                                    <li><a href="' . site_url() . '">Empresas</a></li>
                                     
                                      <li><a href="' . site_url() . '">Control de Maquinaria</a></li>
                                      <li><a href="' . site_url() . '">BD Validada</a></li>
                                          <li><a href="' . site_url() . '">FU Ventas</a></li>
                                                     <li><a href="' . site_url() . 'Products">Productos</a></li>  
                                      <li><a href="' . site_url() . 'Orders">Ordenes</a></li>  
                                      <li><a href="' . site_url() . 'products/agregar">Actualizar Inventario</a></li> 
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                      <li><a href="' . site_url() . 'stores/">Almacen</a></li>
                              </ul>
                            </li>
                           

                            ';
                    }

<<<<<<< HEAD
                    
                    
                    
                    
=======


>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    if ($dataLevel == 'is_editor') {
                        echo'
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> Usuarios <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                             <li><a href="' . site_url() . 'Usuario">Últimas Conexiones</a></li>
                                
                              </ul>
                            </li>
                           
                           
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-tasks" aria-hidden="true"></i> Control SIC <span class="caret"></span></a>
                              <ul class="dropdown-menu">
<<<<<<< HEAD
                              
                               <li><a href="' . site_url() . 'BitacoraRefacciones">Bitácora</a></li>
                                 <li><a href="' . site_url() . 'ClienteRefacciones">Control SIC</a></li>
                               
                               
                                
                                <li><a href="' . site_url() . 'Maquinaria">Lista de Precios Cubiertas</a></li>
                                <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                <li><a href="' . site_url() . 'MaximoMinimo">Reporte Máximo Mínimo</a></li>
                                 <li><a href="' . site_url() . 'MaxMin">Reporte Rotación de Inventario</a></li>
=======
                                 <li><a href="' . site_url() . 'ClienteRefacciones">Control SIC</a></li>
                                 <li><a href="' . site_url() . 'TotSic">Total SIC</a></li>
                                <li><a href="' . site_url() . 'BitacoraRefacciones">Bitácora</a></li>
                                 <li><a href="' . site_url() . 'TotBit">Total Registros Bitácora</a></li>
                                <li><a href="' . site_url() . 'Maquinaria">Lista de Precios Cubiertas</a></li>
                                <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                <li><a href="' . site_url() . 'MaximoMinimo">Reporte Máximo Mínimo</a></li>
                                 <li><a href="' . site_url() . 'ReporteMaximoMinimo">Reporte Rotación de Inventario</a></li>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                               
                                  <li><a href="' . site_url() . 'CliVen">Clientes por Vendedor</a></li>
                                <li><a href="' . site_url() . 'MaqCli">Máquinas por Clientes</a></li>
                                <li><a href="' . site_url() . 'MaqVen">Máquinas por Vendedor</a></li>
                                
                                 
                              </ul>
                            </li>
                            
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Control SIM  <span class="caret"></span></a>
                              <ul class="dropdown-menu">
<<<<<<< HEAD
                                    
                                    <li><a href="' . site_url() . 'Bitacora">Bitácora</a></li>
                                    <li><a href="' . site_url() . 'ClienteSeguimiento">Control SIM</a></li>
                                    <li><a href="' . site_url() . 'CensoMaquinaria">Censo Maquinaria</a></li>
                                     <li><a href="' . site_url() . 'ReporteFlexo">Reporte Flexo</a></li>
=======
                                    <li><a href="' . site_url() . 'ClienteSeguimiento">Control SIM</a></li>
                                    <li><a href="' . site_url() . 'Bitacora">Bitácora</a></li>
                                        <li><a href="' . site_url() . 'CensoMaquinaria">Censo Maquinaria</a></li>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                              </ul>
                            </li>
                            
                            

                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-wrench" aria-hidden="true"></i> Control Mtto <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="' . site_url() . 'BitacoraMtto">Bitácora</a></li>
                                
                              </ul>
                            </li>



                              <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Catálogos<span class="caret"></span></a>
                              <ul class="dropdown-menu">
<<<<<<< HEAD
                                 <li><a href="' . site_url() . 'Calendario">Agenda</a></li>
                                     <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>
                                   
                                   <li><a href="' . site_url() . 'Cliente">Clientes Makbox</a></li>
                                   
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                  
                                       <li><a href="' . site_url() . 'Fuventas">FU V Refacciones</a></li>
                                      <li><a href="' . site_url() . 'Fuvservicio">FU V Servicio</a></li>
                                       <li><a href="' . site_url() . 'CatalogoVenTec">Vendedores y Técnicos</a></li>
                                       <li><a href="' . site_url() . 'cubierta">Con Inv Cubierta</a></li>  
                                        <li><a href="' . site_url() . 'Products">Con Inv Refacciones</a></li>  
                                      <li><a href="' . site_url() . 'orders">Salidas</a></li>  
                                     <!-- <li><a href="' . site_url() . 'products/agregar">Actualizar Inventario</a></li> -->
                                      
                                      <li><a href="' . site_url() . 'inventory">Actualizar Inventario</a></li> 
                                      <li><a href="' . site_url() . 'stores/">Almacen</a></li>
                                         <li><a href="' . site_url() . 'ClientesRefa/">Clientes Refacciones</a></li>
                                     
=======
                                    <li><a href="' . site_url() . 'CatalogoVenTec">Vendedores y Técnicos</a></li>
                                   <li><a href="' . site_url() . 'Cliente">Clientes</a></li>
                                    <li><a href="' . site_url() . 'Empresa">Empresas</a></li>
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                      <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>
                                         <li><a href="' . site_url() . 'Fuventas">FU V Refacciones</a></li>
                                      <li><a href="' . site_url() . 'Fuvservicio">FU V Servicio</a></li>
                                          <li><a href="' . site_url() . 'Fucompras">FU Compras</a></li>
                                              <li><a href="' . site_url() . 'Calendario">Agenda</a></li>
                                                   <li><a href="' . site_url() . 'Products">Productos</a></li>  
                                      <li><a href="' . site_url() . 'Orders">Ordenes</a></li>  
                                      <li><a href="' . site_url() . 'products/agregar">Actualizar Inventario</a></li> 
                                      <li><a href="' . site_url() . 'stores/">Almacen</a></li>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                              </ul>
                            </li>
                           

                            
                            
                         
                            ';
                    }

<<<<<<< HEAD
                    
                    
                    
                    
                    

=======





                    
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    if ($dataLevel == 'is_almacen') {
                        echo'
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> Usuarios <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                             <li><a href="' . site_url() . 'Usuario">Últimas Conexiones</a></li>
                                
                              </ul>
                            </li>
                           
                           
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-tasks" aria-hidden="true"></i> Control SIC <span class="caret"></span></a>
                              <ul class="dropdown-menu">
<<<<<<< HEAD
                              
                               <li><a href="' . site_url() . 'BitacoraRefacciones">Bitácora</a></li>
                                 <li><a href="' . site_url() . 'ClienteRefacciones">Control SIC</a></li>
                               
                               
                                
                                <li><a href="' . site_url() . 'Maquinaria">Lista de Precios Cubiertas</a></li>
                                <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                <li><a href="' . site_url() . 'MaximoMinimo">Reporte Máximo Mínimo</a></li>
                                 <li><a href="' . site_url() . 'MaxMin">Reporte Rotación de Inventario</a></li>
=======
                                 <li><a href="' . site_url() . 'ClienteRefacciones">Control SIC</a></li>
                                 <li><a href="' . site_url() . 'TotSic">Total SIC</a></li>
                                <li><a href="' . site_url() . 'BitacoraRefacciones">Bitácora</a></li>
                                 <li><a href="' . site_url() . 'TotBit">Total Registros Bitácora</a></li>
                                <li><a href="' . site_url() . 'Maquinaria">Lista de Precios Cubiertas</a></li>
                                <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                <li><a href="' . site_url() . 'MaximoMinimo">Reporte Máximo Mínimo</a></li>
                                 <li><a href="' . site_url() . 'ReporteMaximoMinimo">Reporte Rotación de Inventario</a></li>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                               
                                  <li><a href="' . site_url() . 'CliVen">Clientes por Vendedor</a></li>
                                <li><a href="' . site_url() . 'MaqCli">Máquinas por Clientes</a></li>
                                <li><a href="' . site_url() . 'MaqVen">Máquinas por Vendedor</a></li>
                                
                                 
                              </ul>
                            </li>
                            
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Control SIM  <span class="caret"></span></a>
                              <ul class="dropdown-menu">
<<<<<<< HEAD
                                    
                                    <li><a href="' . site_url() . 'Bitacora">Bitácora</a></li>
                                    <li><a href="' . site_url() . 'ClienteSeguimiento">Control SIM</a></li>
=======
                                    <li><a href="' . site_url() . 'ClienteSeguimiento">Control SIM</a></li>
                                    <li><a href="' . site_url() . 'Bitacora">Bitácora</a></li>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                              </ul>
                            </li>
                            
                            

                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-wrench" aria-hidden="true"></i> Control Mtto <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="' . site_url() . 'BitacoraMtto">Bitácora</a></li>
                                
                              </ul>
                            </li>



                              <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Catálogos<span class="caret"></span></a>
                              <ul class="dropdown-menu">
<<<<<<< HEAD
                                 <li><a href="' . site_url() . 'Calendario">Agenda</a></li>
                                     <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>
                                   
                                   <li><a href="' . site_url() . 'Cliente">Clientes Makbox</a></li>
                                   
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                  
                                       <li><a href="' . site_url() . 'Fuventas">FU V Refacciones</a></li>
                                      <li><a href="' . site_url() . 'Fuvservicio">FU V Servicio</a></li>
                                       <li><a href="' . site_url() . 'CatalogoVenTec">Vendedores y Técnicos</a></li>
                                        <li><a href="' . site_url() . 'Products">Refacciones</a></li>  
                                      <li><a href="' . site_url() . 'orders">Salidas</a></li>  
                                      
                                      
                                      <!--<li><a href="' . site_url() . 'products/agregar">Actualizar Inventario</a></li>-->
                                      
                                        <li><a href="' . site_url() . 'inventory/create">Actualizar Inventario</a></li>
                                      
                                      
                                      
                                 <!--     <li><a href="' . site_url() . 'stores/">Almacen</a></li>-->
                                         <li><a href="' . site_url() . 'ClientesRefa/">Clientes Refacciones</a></li>
                                     
=======
                                    <li><a href="' . site_url() . 'CatalogoVenTec">Vendedores y Técnicos</a></li>
                                   <li><a href="' . site_url() . 'Cliente">Clientes</a></li>
                                    <li><a href="' . site_url() . 'Empresa">Empresas</a></li>
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                      <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>
                                         <li><a href="' . site_url() . 'Fuventas">FU V Refacciones</a></li>
                                      <li><a href="' . site_url() . 'Fuvservicio">FU V Servicio</a></li>
                                          <li><a href="' . site_url() . 'Fucompras">FU Compras</a></li>
                                              <li><a href="' . site_url() . 'Calendario">Agenda</a></li>
                                                   <li><a href="' . site_url() . 'Products">Productos</a></li>  
                                      <li><a href="' . site_url() . 'Orders">Ordenes</a></li>  
                                      <li><a href="' . site_url() . 'products/agregar">Actualizar Inventario</a></li> 
                                      <li><a href="' . site_url() . '/stores">Almacen</a></li>
                              </ul>
                            </li>
                           

                            
                            
                         
                            ';
                    }

                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    

                    if ($dataLevel == 'is_freelance') {
                        echo'
                           
                           
                           
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-tasks" aria-hidden="true"></i> Control SIC <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="' . site_url() . 'ClienteRefacciones">Control SIC</a></li>
                                 <li><a href="' . site_url() . 'TotSic">Total SIC</a></li>
                                <li><a href="' . site_url() . 'BitacoraRefacciones">Bitácora</a></li>
                                 <li><a href="' . site_url() . 'TotBit">Total Registros Bitácora</a></li>
                                <li><a href="' . site_url() . 'Maquinaria">Lista de Precios Cubiertas</a></li>
                                <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                <li><a href="' . site_url() . 'MaximoMinimo">Reporte Máximo Mínimo</a></li>
                                 <li><a href="' . site_url() . 'ReporteMaximoMinimo">Reporte Rotación de Inventario</a></li>
                               
                                  <li><a href="' . site_url() . 'CliVen">Clientes por Vendedor</a></li>
                                <li><a href="' . site_url() . 'MaqCli">Máquinas por Clientes</a></li>
                                <li><a href="' . site_url() . 'MaqVen">Máquinas por Vendedor</a></li>
                                
                                 
                              </ul>
                            </li>
                            
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Control SIM  <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . 'ClienteSeguimiento">Control SIM</a></li>
                                    <li><a href="' . site_url() . 'Bitacora">Bitácora</a></li>
                              </ul>
                            </li>
                            
                            

                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-wrench" aria-hidden="true"></i> Control Mtto <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="' . site_url() . 'BitacoraMtto">Bitácora</a></li>
                                
                              </ul>
                            </li>



                              <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Catálogos<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . 'CatalogoVenTec">Vendedores y Técnicos</a></li>
                                   <li><a href="' . site_url() . 'Cliente">Clientes</a></li>
                                    <li><a href="' . site_url() . 'Empresa">Empresas</a></li>
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                      <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>
                                         <li><a href="' . site_url() . 'Fuventas">FU V Refacciones</a></li>
                                      <li><a href="' . site_url() . 'Fuvservicio">FU V Servicio</a></li>
                                          <li><a href="' . site_url() . 'Fucompras">FU Compras</a></li>
                                              <li><a href="' . site_url() . 'Calendario">Agenda</a></li>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                              </ul>
                            </li>
                           

                            
                            
                         
                            ';
                    }


<<<<<<< HEAD




=======
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606







                    if ($dataLevel == 'is_servicio_a_clientes') { //Menú para el usuario de Oscar
                        echo'
                           <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> Usuarios <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                             <li><a href="' . site_url() . 'Usuario">Últimas Conexiones</a></li>
                                
                              </ul>
                            </li>
                           
                           
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-tasks" aria-hidden="true"></i> Control SIC <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="' . site_url() . 'ClienteRefacciones">Control SIC</a></li>
                                 <li><a href="' . site_url() . 'TotSic">Total SIC</a></li>
                                <li><a href="' . site_url() . 'BitacoraRefacciones">Bitácora</a></li>
                                 <li><a href="' . site_url() . 'TotBit">Total Registros Bitácora</a></li>
                                <li><a href="' . site_url() . 'Maquinaria">Lista de Precios Cubiertas</a></li>
                                <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                <li><a href="' . site_url() . 'MaximoMinimo">Reporte Máximo Mínimo</a></li>
                                 <li><a href="' . site_url() . 'ReporteMaximoMinimo">Reporte Rotación de Inventario</a></li>
                               
                                  <li><a href="' . site_url() . 'CliVen">Clientes por Vendedor</a></li>
                                <li><a href="' . site_url() . 'MaqCli">Máquinas por Clientes</a></li>
                                <li><a href="' . site_url() . 'MaqVen">Máquinas por Vendedor</a></li>
                                
                                 
                              </ul>
                            </li>
                            
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Control SIM  <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . 'ClienteSeguimiento">Control SIM</a></li>
                                    <li><a href="' . site_url() . 'Bitacora">Bitácora</a></li>
                              </ul>
                            </li>
                            
                            

                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-wrench" aria-hidden="true"></i> Control Mtto <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="' . site_url() . 'BitacoraMtto">Bitácora</a></li>
                                
                              </ul>
                            </li>



                              <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Catálogos<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . 'CatalogoVenTec">Vendedores y Técnicos</a></li>
<<<<<<< HEAD
                                   <li><a href="' . site_url() . 'Cliente">Clientes Makbox</a></li>
                                  
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                      <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>
                                       <li><a href="' . site_url() . 'Fuventas">FU V Refacciones</a></li>
                                      <li><a href="' . site_url() . 'Fuvservicio">FU V Servicio</a></li>
                                       <li><a href="' . site_url() . 'Products">Con Inv Refacciones</a></li> 
                                       <li><a href="' . site_url() . 'cubierta">Con Inv Cubierta</a></li> 
                                      <li><a href="' . site_url() . 'orders">Salidas</a></li>  
                                      
                                      <!--<li><a href="' . site_url() . 'stores/">Almacen</a></li>
                                       <li><a href="' . site_url() . 'products/agregar">Actualizar Inventario</a></li> -->
                                      
                                      <li><a href="' . site_url() . 'inventory">Entradas a Inventario</a></li>
                                      <li><a href="' . site_url() . 'ClientesRefa/">Clientes Refacciones</a></li>
=======
                                   <li><a href="' . site_url() . 'Cliente">Clientes</a></li>
                                    <li><a href="' . site_url() . 'Empresa">Empresas</a></li>
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                      <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>
                                           <li><a href="' . site_url() . 'Fuventas">FU V Refacciones</a></li>
                                      <li><a href="' . site_url() . 'Fuvservicio">FU V Servicio</a></li>
                                          <li><a href="' . site_url() . 'Products">Productos</a></li>  
                                      <li><a href="' . site_url() . 'Orders">Ordenes</a></li>  
                                      <li><a href="' . site_url() . 'products/agregar">Actualizar Inventario</a></li> 
                                      <li><a href="' . site_url() . 'stores/">Almacen</a></li>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                              </ul>
                            </li>

                            ';
                    }





















                    if ($dataLevel == 'is_Gerente_Ventas') { //Menú
<<<<<<< HEAD
=======
                        
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        echo'
                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> Usuarios <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                             <li><a href="' . site_url() . 'Usuario">Últimas Conexiones</a></li>
                                
                              </ul>
                            </li>
                           
                           
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-tasks" aria-hidden="true"></i> Control SIC <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="' . site_url() . 'ClienteRefacciones">Control SIC</a></li>
                                 <li><a href="' . site_url() . 'TotSic">Total SIC</a></li>
                                <li><a href="' . site_url() . 'BitacoraRefacciones">Bitácora</a></li>
                                 <li><a href="' . site_url() . 'TotBit">Total Registros Bitácora</a></li>
                                <li><a href="' . site_url() . 'Maquinaria">Lista de Precios Cubiertas</a></li>
                                <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                <li><a href="' . site_url() . 'MaximoMinimo">Reporte Máximo Mínimo</a></li>
                                 <li><a href="' . site_url() . 'ReporteMaximoMinimo">Reporte Rotación de Inventario</a></li>
                               
                                  <li><a href="' . site_url() . 'CliVen">Clientes por Vendedor</a></li>
                                <li><a href="' . site_url() . 'MaqCli">Máquinas por Clientes</a></li>
                                <li><a href="' . site_url() . 'MaqVen">Máquinas por Vendedor</a></li>
                                
                                 
                              </ul>
                            </li>
                            
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Control SIM  <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . 'ClienteSeguimiento">Control SIM</a></li>
<<<<<<< HEAD
                                    <li><a href="' . site_url() . 'Bitacora">Bitácora</a></li>
                                    <li><a href="' . site_url() . 'CensoMaquinaria">Censo Maquinaria</a></li>
                                    <li><a href="' . site_url() . 'ReporteFlexo">Reporte Flexo</a></li>
=======
                                    <li><a href="' . site_url() . '">Bitácora</a></li>
                                        <li><a href="' . site_url() . 'CensoMaquinaria">Censo Maquinaria</a></li>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                              </ul>
                            </li>
                            
                            

                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-wrench" aria-hidden="true"></i> Control Mtto <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="' . site_url() . 'BitacoraMtto">Bitácora</a></li>
                                
                              </ul>
                            </li>



                              <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Catálogos<span class="caret"></span></a>
                              <ul class="dropdown-menu">
<<<<<<< HEAD
                               <li><a href="' . site_url() . 'Calendario">Agenda</a></li>
                                     <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>
                                   
                                   <li><a href="' . site_url() . 'Cliente">Clientes Makbox</a></li>
                                   
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                  
                                       <li><a href="' . site_url() . 'Fuventas">FU V Refacciones</a></li>
                                      <li><a href="' . site_url() . 'Fuvservicio">FU V Servicio</a></li>
                                       <li><a href="' . site_url() . 'CatalogoVenTec">Vendedores y Técnicos</a></li>
                                        <li><a href="' . site_url() . 'Products">Con Inv Refacciones</a></li> 
                                        <li><a href="' . site_url() . 'cubierta">Con Inv Cubierta</a></li> 
                                        
                                      <li><a href="' . site_url() . 'orders">Salidas</a></li>  
                                      <li><a href="' . site_url() . 'products/agregar">Actualizar Inventario</a></li> 
                                  <!--    <li><a href="' . site_url() . 'stores/">Almacen</a></li>-->
=======
                                    <li><a href="' . site_url() . 'CatalogoVenTec">Vendedores y Técnicos</a></li>
                                   <li><a href="' . site_url() . 'Cliente">Clientes</a></li>
                                    <li><a href="' . site_url() . 'Empresa">Empresas</a></li>
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                      <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>
                                              <li><a href="' . site_url() . 'Fuventas">FU V Refacciones</a></li>
                                      <li><a href="' . site_url() . 'Fuvservicio">FU V Servicio</a></li>
                                           <li><a href="' . site_url() . 'Calendario">Agenda</a></li>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                              </ul>
                            </li>
                           
                            ';
                    }




                    if ($dataLevel == 'is_mediciones') { //Menú para el 
                        echo'
                           <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-wrench" aria-hidden="true"></i> Mediciones <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="' . site_url() . 'Cliente">Gestión Cliente</a></li>
                                <li><a href="' . site_url() . '">Registro Bitácora</a></li>   
                              </ul>
                            </li>
                            ';
                    }


                    if ($dataLevel == 'is_director') { //Menú para el usuario
                        echo'
                        
                          
                           
                           
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-tasks" aria-hidden="true"></i> Control SIC <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="' . site_url() . 'ClienteRefacciones">Control SIC</a></li>
                                 <li><a href="' . site_url() . 'TotSic">Total SIC</a></li>
                                <li><a href="' . site_url() . 'BitacoraRefacciones">Bitácora</a></li>
                                 <li><a href="' . site_url() . 'TotBit">Total Registros Bitácora</a></li>
                                <li><a href="' . site_url() . 'Maquinaria">Lista de Precios Cubiertas</a></li>
                                <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                <li><a href="' . site_url() . 'MaximoMinimo">Reporte Máximo Mínimo</a></li>
                                 <li><a href="' . site_url() . 'ReporteMaximoMinimo">Reporte Rotación de Inventario</a></li>
                               
                                  <li><a href="' . site_url() . 'CliVen">Clientes por Vendedor</a></li>
                                <li><a href="' . site_url() . 'MaqCli">Máquinas por Clientes</a></li>
                                <li><a href="' . site_url() . 'MaqVen">Máquinas por Vendedor</a></li>
                                
                                 
                              </ul>
                            </li>
                            
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Control SIM  <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . 'ClienteSeguimiento">Control SIM</a></li>
                                    <li><a href="' . site_url() . 'Bitacora">Bitácora</a></li>
                              </ul>
                            </li>
                            
                            

                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-wrench" aria-hidden="true"></i> Control Mtto <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="' . site_url() . 'BitacoraMtto">Bitácora</a></li>
                                
                              </ul>
                            </li>



                              <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Catálogos<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . 'CatalogoVenTec">Vendedores y Técnicos</a></li>
<<<<<<< HEAD
                                   <li><a href="' . site_url() . 'Cliente">Clientes Makbox</a></li>
                                   
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                      <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>
=======
                                   <li><a href="' . site_url() . 'Cliente">Clientes</a></li>
                                    <li><a href="' . site_url() . 'Empresa">Empresas</a></li>
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                      <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>
                                          <li><a href="' . site_url() . 'Fuventas">FU Ventas</a></li>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                              </ul>
                            </li>
                            
                            ';
                    }

                    if ($dataLevel == 'is_maquinaria') { //Menú para 
                        echo'
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> Usuarios <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                             <li><a href="' . site_url() . 'Usuario">Últimas Conexiones</a></li>
                                
                              </ul>
                            </li>
                           
                           
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-tasks" aria-hidden="true"></i> Control SIC <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="' . site_url() . 'ClienteRefacciones">Control SIC</a></li>
                                 <li><a href="' . site_url() . 'TotSic">Total SIC</a></li>
<<<<<<< HEAD
                                <li><a href="' . site_url() . 'BitacoraRefacciones">Bitácora</a></li>
                                 <li><a href="' . site_url() . 'TotBit">Total Registros Bitácora</a></li>
                                <li><a href="' . site_url() . 'Maquinaria">Lista de Precios Cubiertas</a></li>
=======
                                <li><a href="' . site_url() . '">Bitácora</a></li>
                                 <li><a href="' . site_url() . 'TotBit">Total Registros Bitácora</a></li>
                                <li><a href="' . site_url() . '">Lista de Precios Cubiertas</a></li>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                <li><a href="' . site_url() . 'MaximoMinimo">Reporte Máximo Mínimo</a></li>
                                 <li><a href="' . site_url() . 'ReporteMaximoMinimo">Reporte Rotación de Inventario</a></li>
                               
                                  <li><a href="' . site_url() . 'CliVen">Clientes por Vendedor</a></li>
                                <li><a href="' . site_url() . 'MaqCli">Máquinas por Clientes</a></li>
                                <li><a href="' . site_url() . 'MaqVen">Máquinas por Vendedor</a></li>
                                
                                 
                              </ul>
                            </li>
                            
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Control SIM  <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . 'ClienteSeguimiento">Control SIM</a></li>
                                    <li><a href="' . site_url() . 'Bitacora">Bitácora</a></li>
<<<<<<< HEAD
                                    <li><a href="' . site_url() . 'CensoMaquinaria">Censo Maquinaria</a></li>
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                              </ul>
                            </li>
                            
                            

                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-wrench" aria-hidden="true"></i> Control Mtto <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="' . site_url() . 'BitacoraMtto">Bitácora</a></li>
<<<<<<< HEAD
=======
                                    <li><a href="' . site_url() . 'CensoMaquinaria">Censo Maquinaria</a></li>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                
                              </ul>
                            </li>



                              <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Catálogos<span class="caret"></span></a>
                              <ul class="dropdown-menu">
<<<<<<< HEAD
                                    <li><a href="' . site_url() . 'Calendario">Agenda</a></li>
                                    <li><a href="' . site_url() . 'CatalogoVenTec">Vendedores y Técnicos</a></li>
                                   <li><a href="' . site_url() . 'Cliente">Clientes Makbox</a></li>
                                    
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                      <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>
                                       <li><a href="' . site_url() . 'Products">Refacciones</a></li>  
                                      <li><a href="' . site_url() . 'orders">Salidas</a></li>  
                                      <li><a href="' . site_url() . 'products/agregar">Actualizar Inventario</a></li> 
                                      <!--<li><a href="' . site_url() . 'stores/">Almacen</a></li>-->
=======
                                    <li><a href="' . site_url() . 'CatalogoVenTec">Vendedores y Técnicos</a></li>
                                   <li><a href="' . site_url() . 'Cliente">Clientes</a></li>
                                    <li><a href="' . site_url() . 'Empresa">Empresas</a></li>
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                      <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>
                                          <li><a href="' . site_url() . '">FU Ventas</a></li>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                              </ul>
                            </li>
                           
                              
                        
                            ';
                    }


                    if ($dataLevel == 'is_maquinaria_refacciones') { //
                        echo'
                           
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-wrench" aria-hidden="true"></i> Control SIC Refacciones <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="' . site_url() . 'ClienteRefacciones">Control SIC</a></li>
                                
                                    
                                    <li><a href="' . site_url() . 'Maquinaria">Lista de Precios Cubiertas</a></li>
                                    <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                    <li><a href="' . site_url() . '">Reporte Máximo Mínimo</a></li>
                                     <li><a href="' . site_url() . '">Bitácora</a></li>
                              </ul>
                            </li>
                            
                             <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Control SIM Maquinaria <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . 'ClienteSeguimiento">Control SIM</a></li>
                                    <li><a href="' . site_url() . 'Bitacora">Bitácora</a></li>
<<<<<<< HEAD
                                    <li><a href="' . site_url() . 'CensoMaquinaria">Censo Maquinaria</a></li>
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                              </ul>
                            </li>
                            
                            
                              <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Catálogos<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . '">Vendedores y Técnicos</a></li>
                                   <li><a href="' . site_url() . '">Clientes</a></li>
<<<<<<< HEAD
                                  
=======
                                    <li><a href="' . site_url() . '">Empresas</a></li>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                     <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                              </ul>
                            </li>

                            ';
                    }


                    if ($dataLevel == 'is_credito') { //Menú para el usuario 
                        echo'
                        
                           <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> Usuarios <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                             <li><a href="' . site_url() . 'Usuario">Últimas Conexiones</a></li>
                                
                              </ul>
                            </li>
                           
                           
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-tasks" aria-hidden="true"></i> Control SIC <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="' . site_url() . 'ClienteRefacciones">Control SIC</a></li>
                                 <li><a href="' . site_url() . 'TotSic">Total SIC</a></li>
<<<<<<< HEAD
                                <li><a href="' . site_url() . 'BitacoraRefacciones">Bitácora</a></li>
=======
                                <li><a href="' . site_url() . '">Bitácora</a></li>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                 <li><a href="' . site_url() . 'TotBit">Total Registros Bitácora</a></li>
                                <li><a href="' . site_url() . 'Maquinaria">Lista de Precios Cubiertas</a></li>
                                <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                <li><a href="' . site_url() . 'MaximoMinimo">Reporte Máximo Mínimo</a></li>
                                 <li><a href="' . site_url() . 'ReporteMaximoMinimo">Reporte Rotación de Inventario</a></li>
                               
                                  <li><a href="' . site_url() . 'CliVen">Clientes por Vendedor</a></li>
                                <li><a href="' . site_url() . 'MaqCli">Máquinas por Clientes</a></li>
                                <li><a href="' . site_url() . 'MaqVen">Máquinas por Vendedor</a></li>
                                
                                 
                              </ul>
                            </li>
                            
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Control SIM  <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . 'ClienteSeguimiento">Control SIM</a></li>
                                    <li><a href="' . site_url() . 'Bitacora">Bitácora</a></li>
                              </ul>
                            </li>
                            
                            

                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-wrench" aria-hidden="true"></i> Control Mtto <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="' . site_url() . 'BitacoraMtto">Bitácora</a></li>
                                
                              </ul>
                            </li>



                              <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Catálogos<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . 'CatalogoVenTec">Vendedores y Técnicos</a></li>
<<<<<<< HEAD
                                   <li><a href="' . site_url() . 'Cliente">Clientes Makbox</a></li>
                                   
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                      <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</li>
                                        <li><a href="' . site_url() . 'Fuventas">FU V Refacciones</a></li>
=======
                                   <li><a href="' . site_url() . 'Cliente">Clientes</a></li>
                                    <li><a href="' . site_url() . 'Empresa">Empresas</a></li>
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                      <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>
                                       <li><a href="' . site_url() . 'Fuventas">FU V Refacciones</a></li>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                      <li><a href="' . site_url() . 'Fuvservicio">FU V Servicio</a></li>
                              </ul>
                            </li>
                        
                        
                          
                            ';
                    }





                    if ($dataLevel == 'is_logistica') { //NavBar para Logistica
                        echo'

                              
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> Usuarios <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                             <li><a href="' . site_url() . 'Usuario">Últimas Conexiones</a></li>
                                
                              </ul>
                            </li>
                           
                           
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-tasks" aria-hidden="true"></i> Control SIC <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="' . site_url() . 'ClienteRefacciones">Control SIC</a></li>
                                 <li><a href="' . site_url() . 'TotSic">Total SIC</a></li>
                                <li><a href="' . site_url() . 'BitacoraRefacciones">Bitácora</a></li>
                                 <li><a href="' . site_url() . 'TotBit">Total Registros Bitácora</a></li>
                                <li><a href="' . site_url() . 'Maquinaria">Lista de Precios Cubiertas</a></li>
                                <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                <li><a href="' . site_url() . 'MaximoMinimo">Reporte Máximo Mínimo</a></li>
                                 <li><a href="' . site_url() . 'ReporteMaximoMinimo">Reporte Rotación de Inventario</a></li>
                               
                                  <li><a href="' . site_url() . 'CliVen">Clientes por Vendedor</a></li>
                                <li><a href="' . site_url() . 'MaqCli">Máquinas por Clientes</a></li>
                                <li><a href="' . site_url() . 'MaqVen">Máquinas por Vendedor</a></li>
                                
                                 
                              </ul>
                            </li>
                            
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Control SIM  <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . 'ClienteSeguimiento">Control SIM</a></li>
                                    <li><a href="' . site_url() . 'Bitacora">Bitácora</a></li>
                              </ul>
                            </li>
                            
                            

                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-wrench" aria-hidden="true"></i> Control Mtto <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="' . site_url() . 'BitacoraMtto">Bitácora</a></li>
                                
                              </ul>
                            </li>



                              <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Catálogos<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . 'CatalogoVenTec">Vendedores y Técnicos</a></li>
<<<<<<< HEAD
                                   <li><a href="' . site_url() . 'Cliente">Clientes Makbox</a></li>
                                   
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                      <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>
                                       <li><a href="' . site_url() . 'Fuventas">FU V Refacciones</a></li>
                                      <li><a href="' . site_url() . 'Fuvservicio">FU V Servicio</a></li>
                                      <li><a href="' . site_url() . 'Calendario">Agenda</a></li>
=======
                                   <li><a href="' . site_url() . 'Cliente">Clientes</a></li>
                                    <li><a href="' . site_url() . 'Empresa">Empresas</a></li>
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                      <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>
                                          <li><a href="' . site_url() . 'Fuventas">FU V Refacciones</a></li>
                                      <li><a href="' . site_url() . 'Fuvservicio">FU V Servicio</a></li>
                                          <li><a href="' . site_url() . 'Fucompras">FU Compras</a></li>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                              </ul>
                            </li>


                                ';
                    }








                    if ($dataLevel == 'is_mantenimiento') { //NavBar para Mantenimiento
                        echo'
                           
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> Usuarios <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                             <li><a href="' . site_url() . 'Usuario">Últimas Conexiones</a></li>
                                
                              </ul>
                            </li>
                           
                           
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-tasks" aria-hidden="true"></i> Control SIC <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="' . site_url() . 'ClienteRefacciones">Control SIC</a></li>
                                 <li><a href="' . site_url() . 'TotSic">Total SIC</a></li>
                                <li><a href="' . site_url() . 'BitacoraRefacciones">Bitácora</a></li>
                                 <li><a href="' . site_url() . 'TotBit">Total Registros Bitácora</a></li>
                                <li><a href="' . site_url() . 'Maquinaria">Lista de Precios Cubiertas</a></li>
                                <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                <li><a href="' . site_url() . 'MaximoMinimo">Reporte Máximo Mínimo</a></li>
                                 <li><a href="' . site_url() . 'ReporteMaximoMinimo">Reporte Rotación de Inventario</a></li>
                               
                                  <li><a href="' . site_url() . 'CliVen">Clientes por Vendedor</a></li>
                                <li><a href="' . site_url() . 'MaqCli">Máquinas por Clientes</a></li>
                                <li><a href="' . site_url() . 'MaqVen">Máquinas por Vendedor</a></li>
                                
                                 
                              </ul>
                            </li>
                            
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Control SIM  <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . 'ClienteSeguimiento">Control SIM</a></li>
                                    <li><a href="' . site_url() . 'Bitacora">Bitácora</a></li>
                              </ul>
                            </li>
                            
                            

                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-wrench" aria-hidden="true"></i> Control Mtto <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="' . site_url() . 'BitacoraMtto">Bitácora</a></li>
                                
                              </ul>
                            </li>



                              <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Catálogos<span class="caret"></span></a>
                              <ul class="dropdown-menu">
<<<<<<< HEAD
                                     <li><a href="' . site_url() . 'Calendario">Agenda</a></li>
                                     <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>
                                   
                                   <li><a href="' . site_url() . 'Cliente">Clientes Makbox</a></li>
                                   
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                  
                                       <li><a href="' . site_url() . 'Fuventas">FU V Refacciones</a></li>
                                      <li><a href="' . site_url() . 'Fuvservicio">FU V Servicio</a></li>
                                       <li><a href="' . site_url() . 'CatalogoVenTec">Vendedores y Técnicos</a></li>
                                        <li><a href="' . site_url() . 'Products">Refacciones</a></li>  
                                      <li><a href="' . site_url() . 'orders">Salidas</a></li>  
                                      <li><a href="' . site_url() . 'products/agregar">Actualizar Inventario</a></li> 
                                  <!--    <li><a href="' . site_url() . 'stores/">Almacen</a></li> -->
=======
                                    <li><a href="' . site_url() . 'CatalogoVenTec">Vendedores y Técnicos</a></li>
                                   <li><a href="' . site_url() . 'Cliente">Clientes</a></li>
                                    <li><a href="' . site_url() . 'Empresa">Empresas</a></li>
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                      <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>
                                          <li><a href="' . site_url() . '">FU Ventas</a></li>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                              </ul>
                            </li>

                           

                            ';
                    }

                    if ($dataLevel == 'is_jefe_mantenimiento') { //NavBar para Mantenimiento
                        echo'
                           
                             <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> Usuarios <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                             <li><a href="' . site_url() . 'Usuario">Últimas Conexiones</a></li>
                                
                              </ul>
                            </li>
                           
                           
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-tasks" aria-hidden="true"></i> Control SIC <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="' . site_url() . 'ClienteRefacciones">Control SIC</a></li>
                                 <li><a href="' . site_url() . 'TotSic">Total SIC</a></li>
                                <li><a href="' . site_url() . 'BitacoraRefacciones">Bitácora</a></li>
                                 <li><a href="' . site_url() . 'TotBit">Total Registros Bitácora</a></li>
                                <li><a href="' . site_url() . 'Maquinaria">Lista de Precios Cubiertas</a></li>
                                <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                <li><a href="' . site_url() . 'MaximoMinimo">Reporte Máximo Mínimo</a></li>
                                 <li><a href="' . site_url() . 'ReporteMaximoMinimo">Reporte Rotación de Inventario</a></li>
                               
                                  <li><a href="' . site_url() . 'CliVen">Clientes por Vendedor</a></li>
                                <li><a href="' . site_url() . 'MaqCli">Máquinas por Clientes</a></li>
                                <li><a href="' . site_url() . 'MaqVen">Máquinas por Vendedor</a></li>
                                
                                 
                              </ul>
                            </li>
                            
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Control SIM  <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . 'ClienteSeguimiento">Control SIM</a></li>
                                    <li><a href="' . site_url() . 'Bitacora">Bitácora</a></li>
<<<<<<< HEAD
                                    <li><a href="' . site_url() . 'CensoMaquinaria">Censo Maquinaria</a></li>
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                              </ul>
                            </li>
                            
                            

                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-wrench" aria-hidden="true"></i> Control Mtto <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="' . site_url() . 'BitacoraMtto">Bitácora</a></li>
                                
                              </ul>
                            </li>



                              <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Catálogos<span class="caret"></span></a>
                              <ul class="dropdown-menu">
<<<<<<< HEAD
                                    <li><a href="' . site_url() . 'Calendario">Agenda</a></li>
                                     <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>
                                   
                                   <li><a href="' . site_url() . 'Cliente">Clientes Makbox</a></li>
                                   
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                  
                                       <li><a href="' . site_url() . 'Fuventas">FU V Refacciones</a></li>
                                      <li><a href="' . site_url() . 'Fuvservicio">FU V Servicio</a></li>
                                       <li><a href="' . site_url() . 'CatalogoVenTec">Vendedores y Técnicos</a></li>
                                        <li><a href="' . site_url() . 'Products">Productos</a></li>  
                                      <li><a href="' . site_url() . 'orders">Salidas</a></li>  
                                      <li><a href="' . site_url() . 'products/agregar">Actualizar Inventario</a></li> 
                                     <!-- <li><a href="' . site_url() . 'stores/">Almacen</a></li>-->
=======
                                    <li><a href="' . site_url() . 'CatalogoVenTec">Vendedores y Técnicos</a></li>
                                   <li><a href="' . site_url() . 'Cliente">Clientes</a></li>
                                    <li><a href="' . site_url() . 'Empresa">Empresas</a></li>
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                      <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>
                                          <li><a href="' . site_url() . '">FU Ventas</a></li>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                              </ul>
                            </li>


                            ';
                    }























                    if ($dataLevel == 'is_consultor') { // Menú
<<<<<<< HEAD
                        
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        echo'
                           
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> Usuarios <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                             <li><a href="' . site_url() . 'Usuario">Últimas Conexiones</a></li>
                                
                              </ul>
                            </li>
                           
                           
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-tasks" aria-hidden="true"></i> Control SIC <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="' . site_url() . 'ClienteRefacciones">Control SIC</a></li>
                                 <li><a href="' . site_url() . 'TotSic">Total SIC</a></li>
                                <li><a href="' . site_url() . 'BitacoraRefacciones">Bitácora</a></li>
                                 <li><a href="' . site_url() . 'TotBit">Total Registros Bitácora</a></li>
                                <li><a href="' . site_url() . 'Maquinaria">Lista de Precios Cubiertas</a></li>
                                <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                <li><a href="' . site_url() . 'MaximoMinimo">Reporte Máximo Mínimo</a></li>
                                 <li><a href="' . site_url() . 'ReporteMaximoMinimo">Reporte Rotación de Inventario</a></li>
                               
                                  <li><a href="' . site_url() . 'CliVen">Clientes por Vendedor</a></li>
                                <li><a href="' . site_url() . 'MaqCli">Máquinas por Clientes</a></li>
                                <li><a href="' . site_url() . 'MaqVen">Máquinas por Vendedor</a></li>
                                
                                 
                              </ul>
                            </li>
                            
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Control SIM  <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . 'ClienteSeguimiento">Control SIM</a></li>
                                    <li><a href="' . site_url() . 'Bitacora">Bitácora</a></li>
                              </ul>
                            </li>
                            
                            

                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-wrench" aria-hidden="true"></i> Control Mtto <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="' . site_url() . 'BitacoraMtto">Bitácora</a></li>
                                
                              </ul>
                            </li>



                              <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Catálogos<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . 'CatalogoVenTec">Vendedores y Técnicos</a></li>
<<<<<<< HEAD
                                   <li><a href="' . site_url() . 'Cliente">Clientes Makbox</a></li>
=======
                                   <li><a href="' . site_url() . 'Cliente">Clientes</a></li>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                    <li><a href="' . site_url() . 'Empresa">Empresas</a></li>
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                      <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>
<<<<<<< HEAD
=======
                                      <li><a href="' . site_url() . 'Fuventas">FU Ventas</a></li>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                              </ul>
                            </li>
                            </li>

                            ';
                    }
                    ?>

                    <?php
                    if ($dataLevel_id == 1) {
                        ?>
<<<<<<< HEAD
                        <a href="<?php echo site_url(); ?>main/profile/">   <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/prueba.png" height="45px"  width="45px" border="none" /> </a> 
                      
                        </a>  <?php
                    } else if ($dataLevel_id == 2) {
                         ?>
                        <a href="<?php echo site_url(); ?>main/profile/">    <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/karen.jpg" height="45px"  width="45px" border="none" /> </a> 
                        <?php
                    } else if ($dataLevel_id == 3) {
                         ?>
                        <a href="<?php echo site_url(); ?>main/profile/">    <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/rocio.jpg" height="45px"  width="45px" border="none" /> </a> 
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
                        <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/Paty.jpeg" height="45px"  width="45px" border="none" /></a>
                        <?php
                    } else if ($dataLevel_id == 16) {
                        
                    } else if ($dataLevel_id == 17) {
                         ?>
                          <a href="<?php echo site_url(); ?>main/profile/">  
                        <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/prueba.png" height="45px"  width="45px" border="none" /></a>
                        <?php
                    } else if ($dataLevel_id ==18) {
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
                    } else if ($dataLevel_id == 22){
                        ?>
                          <a href="<?php echo site_url(); ?>main/profile/">  
                        <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/rodrigosantos.jpg" height="45px"  width="45px" border="none" /></a>
                        <?php
                    } else if ($dataLevel_id == 23) {
                        ?>
=======
                        <a href="<?php echo site_url(); ?>main/profile/">   <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/admin.png" height="45px"  width="45px" border="none" /> </a> 

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
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/jorge.jpg" height="45px"  width="45px" border="none" /></a>
                        <?php
                    } else if ($dataLevel_id == 24) {
                        ?>
<<<<<<< HEAD
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
                    }
                    else if ($dataLevel_id == 30) {
                        ?>
                          <a href="<?php echo site_url(); ?>main/profile/">  
                        <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/sin_foto.jpg" height="45px"  width="45px" border="none" /></a>
=======
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
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        <?php
                    } else if ($dataLevel_id == 31) {
                        ?>  
                        <a href="<?php echo site_url(); ?>main/profile/">  
<<<<<<< HEAD
                        <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/nadia.jpeg" height="45px"  width="45px" border="none" /></a>
=======
                            <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/nadia.jpeg" height="45px"  width="45px" border="none" /></a>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        <?php
                    } else if ($dataLevel_id == 32) {
                        ?> 
                        <a href="<?php echo site_url(); ?>main/profile/">  
<<<<<<< HEAD
                        <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/benajamin.png" height="45px"  width="45px" border="none" /></a>
=======
                            <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/martin.png" height="45px"  width="45px" border="none" /></a>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        <?php
                    } else if ($dataLevel_id == 33) {
                        ?>  
                        <a href="<?php echo site_url(); ?>main/profile/">  
<<<<<<< HEAD
                        <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/martin.png" height="45px"  width="45px" border="none" /></a>
                        <?php
                    }else if ($dataLevel_id == 35) {
                        ?>  
                        <a href="<?php echo site_url(); ?>main/profile/">  
                        <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/silo.jpeg" height="45px"  width="45px" border="none" /></a>
                        <?php
                    }else if ($dataLevel_id == 39) {
                         ?>
                          <a href="<?php echo site_url(); ?>main/profile/">  
                        <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/icono_mujer.png" height="45px"  width="45px" border="none" /></a>
                        <?php
                    }else if ($dataLevel_id == 40) {
                         ?>
                          <a href="<?php echo site_url(); ?>main/profile/">  
                        <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/junior.jpg" height="45px"  width="45px" border="none" /></a>
                        <?php
                    }  else {
=======
                            <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/silo.jpeg" height="45px"  width="45px" border="none" /></a>
                        <?php
                    }else if ($dataLevel_id == 36) {
    ?>
                        <a href="<?php echo site_url(); ?>main/profile/">  
                            <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/sin_foto.png" height="45px"  width="45px" border="none" /></a>
    <?php
} else {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        
                    }
                    ?>

















<<<<<<< HEAD


=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                </ul>


                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                           <!-- <i class="fa fa-user-circle" aria-hidden="true"></i>-->
<<<<<<< HEAD
                            <?php echo $first_name; ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url(); ?>main/profile"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> <?php echo $email; ?></a></li>

=======
<?php echo $first_name; ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url(); ?>main/profile"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> <?php echo $email; ?></a></li>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
    <li><a data-toggle="modal" data-target="#myModal"><i class="fa fa-question-circle" aria-hidden="true"></i> Acerca de</a></li>




<<<<<<< HEAD
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
=======

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
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                                                <!--<li><a href="<?php echo site_url(); ?>main/changeuser">Editar Perfil</a></li>-->



                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url() . 'main/logout' ?>"><i class="fa fa-fw fa-power-off"></i>  Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </div>
</nav>
<<<<<<< HEAD
<br><br>
=======
<br><br>    

   <script type="text/javascript">

        $(document).ready(function() {
            // Variable global que nos dirá si hemos dado un click al botón
            var clicando = false;

// Evento de click del primer botón
            $("#btn-dobleclick").click(function() {
                // Mostramos el Alert
                alert("Handler for dobleclick.click() called.");
            });

// Evento del segundo boton
            $("#btn-unSoloClick").click(function() {
                // Si ha sido clicado
                if (clicando) {
                    // Mostramos que ya se ha clicado, y no puede clicarse de nuevo
                    //  alert( "Que ya he realizado un click." );
                    // Si no ha sido clicado
                } else {
                    // Le decimos que ha sido clicado
                    clicando = true;
                    // Mostramos el mensaje de que ha sido clicado
                    //alert("Guardando Informacion");
                }
            });

        
        
        
         $("#botonOrden").click(function() {
                // Si ha sido clicado
                if (clicando) {
                    // Mostramos que ya se ha clicado, y no puede clicarse de nuevo
                    //  alert( "Que ya he realizado un click." );
                    // Si no ha sido clicado
                } else {
                    // Le decimos que ha sido clicado
                    clicando = true;
                    // Mostramos el mensaje de que ha sido clicado
                   // alert("Guardando Informacion");
                }
            });

        });


    </script>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
