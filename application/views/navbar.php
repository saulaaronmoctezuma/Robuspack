


<!--

<div style="text-align: center;"><a style= "@media screen and (max-width: 980px) display: none; left: 0px; height: 200px; width: 70px; position: fixed; top: 0px;"><img src="https://scrobuspack.com/assets/login/adorno.gif" _fcksavedurl="" alt="" /></a></div>



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

<!--Para Buscar

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.2.1/jquery.quicksearch.js"></script>
<script>
    $(function () {
        $('#buscandoIguales').quicksearch('table tbody tr');
    });
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
   

   

    
<style>
    .circular--square {
        border-top-left-radius: 50% 50%;
        border-top-right-radius: 50% 50%;
        border-bottom-right-radius: 50% 50%;
        border-bottom-left-radius: 50% 50%;
        min-width: 30px;
        margin-top: 9px;
        margin-left:70px;
    }



    @media (max-width:1200px) {
        img#foto {
            display: none;
        }
    }

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

</style>


   <script type="text/javascript">

        $(document).ready(function() {
            // Variable global que nos dirá si hemos dado un click al botón
            var clicando = false;

// Evento de click del primer botón
            $("#btn-dobleclick").click(function() {
                // Mostramos el Alert
                alert("Ya se envio el formulario");
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
            
            // Evento del segundo boton
            $("#add_row").click(function() {
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
             <a href="<?php echo site_url(); ?>main/">   <img class="scr" id="scr" src="<?php echo base_url(); ?>assets/images/scr_01.png" border="none" />
</a>
 <!--  <img src="http://anfec.org.mx/wp-content/uploads/2018/05/rrp.png" border="0" width="80" height="60">-->
 <!--<a class="navbar-brand" href="<?php echo site_url(); ?>main/"><?php echo $site_title; ?></a>-->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <!-- <li><a href="<?php echo site_url(); ?>main/"><i class="glyphicon glyphicon-home" aria-hidden="true"></i> Inicio</a></li>-->

                    <?php
                    if ($dataLevel == 'is_admin') { //Menú para Karen & Saúl
                        //echo '<script language="javascript">alert("Estamos Actualizando el sic");</script>'; 

                        echo'
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> Usuarios <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                             <li><a href="' . site_url() . 'Usuario">Últimas Conexiones</a></li>
                                <li><a href="' . site_url() . 'main/users">Listar de Usuario</a></li>
                                <li><a href="' . site_url() . 'main/adduser">Agregar Usuario</a></li>
                                  <li><a href="' . site_url() . 'main/banuser">Prohibir usuario</a></li>
                                <li><a href="' . site_url() . 'main/changelevel">Rol</a></li> 
                              </ul>
                            </li>
                           
                           
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-tasks" aria-hidden="true"></i> Control SIC <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="' . site_url() . 'ClienteRefacciones">Control SIC</a></li>
                                 <li><a href="' . site_url() . 'TotSic">Total SIC</a></li>
                                <li><a href="' . site_url() . 'BitacoraRefacciones">Bitácora</a></li>
                             
                                <li><a href="' . site_url() . 'Maquinaria">Lista de Precios Cubiertas</a></li>
                            <!--<li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                <li><a href="' . site_url() . 'MaximoMinimo">Reporte Máximo Mínimo</a></li>
                                 <li><a href="' . site_url() . 'MaxMin">Reporte Rotación de Inventario</a></li>
                                <li><a href="' . site_url() . 'ReporteMaximoMinimo">Prueba 2 Rotación de Inventario</a></li>-->
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
                                    <li><a href="' . site_url() . 'CensoMaquinaria">Censo Maquinaria Clientes</a></li>
                                     <!-- <li><a href="' . site_url() . 'CensoMaquinaria/listaProspectos">Censo Maquinaria Prospectos</a></li>-->
                                    <li><a href="' . site_url() . 'ReporteFlexo">Reporte Flexo</a></li>
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
                           
                            
                            
                         
                            ';
                    }

                    /* <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i> Perfil <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                      <li><a href="'.site_url().'main/changeuser">Editar Perfil</a></li>
                      </ul>
                      </li> */

























 

                    if ($dataLevel == 'is_freelance') {
                        echo'
                             <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> Usuarios <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                             <li><a href="' . site_url() . '">Últimas Conexiones</a></li>
                                
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
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-wrench" aria-hidden="true"></i> Control Mtto <span clis_ass="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="' . site_url() . 'BitacoraMtto">Bitácora</a></li>
                                
                              </ul>
                            </li>



                              <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Catálogos<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . 'CatalogoVenTec">Vendedores y Técnicos</a></li>
                                   <li><a href="' . site_url() . 'Cliente">Clientes Makbox</a></li>
                                  
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                      <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>
                                         <li><a href="' . site_url() . 'Fuventas">FU V Refacciones</a></li>
                                      <li><a href="' . site_url() . 'Fuvservicio">FU V Servicio</a></li>
                                          <li><a href="' . site_url() . 'Fucompras">FU Compras</a></li>
                                              <li><a href="' . site_url() . 'Calendario">Agenda</a></li>
                              </ul>
                            </li>
                           

                            
                            
                         
                            ';
                    }


















                    if ($dataLevel == 'is_refacciones') { //Menú para el usuario 
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
                                    <li><a href="' . site_url() . 'ClienteSeguimiento">Control SIM</a></li>
                                    <li><a href="' . site_url() . '">Bitácora</a></li>
                                    <li><a href="' . site_url() . 'CensoMaquinaria">Censo Maquinaria</a></li>
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
                                    <li><a href="' . site_url() . '">Vendedores y Técnicos</a></li>
                                   <li><a href="' . site_url() . '">Clientes</a></li>
                                   
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                      <li><a href="' . site_url() . '">BD Validada</a></li>
                                      <li><a href="' . site_url() . 'Calendario">Agenda</a></li>
                                           <li><a href="' . site_url() . 'Fuventas">FU V Refacciones</a></li>
                                            <li><a href="' . site_url() . 'Products">Refacciones</a></li>  
                                      <li><a href="' . site_url() . 'cubierta">Cubiertas</a></li>  
                                      <!--<li><a href="' . site_url() . 'products/agregar">Actualizar Inventario</a></li> -->
                                      <li><a href="' . site_url() . 'stores/">Almacen</a></li>
                              </ul>
                            </li>
                           

                            ';
                    }

                    
                    
                    
                    
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
                              
                               <li><a href="' . site_url() . 'BitacoraRefacciones">Bitácora</a></li>
                                 <li><a href="' . site_url() . 'ClienteRefacciones">Control SIC</a></li>
                               
                               
                                
                                <li><a href="' . site_url() . 'Maquinaria">Lista de Precios Cubiertas</a></li>
                                <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                <li><a href="' . site_url() . 'MaximoMinimo">Reporte Máximo Mínimo</a></li>
                                 <li><a href="' . site_url() . 'MaxMin">Reporte Rotación de Inventario</a></li>
                               
                                  <li><a href="' . site_url() . 'CliVen">Clientes por Vendedor</a></li>
                                <li><a href="' . site_url() . 'MaqCli">Máquinas por Clientes</a></li>
                                <li><a href="' . site_url() . 'MaqVen">Máquinas por Vendedor</a></li>
                                
                                 
                              </ul>
                            </li>
                            
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Control SIM  <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    
                                    <li><a href="' . site_url() . 'Bitacora">Bitácora</a></li>
                                    <li><a href="' . site_url() . 'ClienteSeguimiento">Control SIM</a></li>
                                    <li><a href="' . site_url() . 'CensoMaquinaria">Censo Maquinaria</a></li>
                                     <li><a href="' . site_url() . 'ReporteFlexo">Reporte Flexo</a></li>
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
                                     
                              </ul>
                            </li>
                           

                            
                            
                         
                            ';
                    }

                    
                    
                    
                    
                    

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
                              
                               <li><a href="' . site_url() . 'BitacoraRefacciones">Bitácora</a></li>
                                 <li><a href="' . site_url() . 'ClienteRefacciones">Control SIC</a></li>
                               
                               
                                
                                <li><a href="' . site_url() . 'Maquinaria">Lista de Precios Cubiertas</a></li>
                                <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                <li><a href="' . site_url() . 'MaximoMinimo">Reporte Máximo Mínimo</a></li>
                                 <li><a href="' . site_url() . 'MaxMin">Reporte Rotación de Inventario</a></li>
                               
                                  <li><a href="' . site_url() . 'CliVen">Clientes por Vendedor</a></li>
                                <li><a href="' . site_url() . 'MaqCli">Máquinas por Clientes</a></li>
                                <li><a href="' . site_url() . 'MaqVen">Máquinas por Vendedor</a></li>
                                
                                 
                              </ul>
                            </li>
                            
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Control SIM  <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    
                                    <li><a href="' . site_url() . 'Bitacora">Bitácora</a></li>
                                    <li><a href="' . site_url() . 'ClienteSeguimiento">Control SIM</a></li>
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
                                     
                              </ul>
                            </li>
                           

                            
                            
                         
                            ';
                    }













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
                              </ul>
                            </li>

                            ';
                    }





















                    if ($dataLevel == 'is_Gerente_Ventas') { //Menú
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
                                    <li><a href="' . site_url() . 'CensoMaquinaria">Censo Maquinaria</a></li>
                                    <li><a href="' . site_url() . 'ReporteFlexo">Reporte Flexo</a></li>
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
                                   <li><a href="' . site_url() . 'Cliente">Clientes Makbox</a></li>
                                   
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                      <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>
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
                                    <li><a href="' . site_url() . 'CensoMaquinaria">Censo Maquinaria</a></li>
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
                                    <li><a href="' . site_url() . 'Calendario">Agenda</a></li>
                                    <li><a href="' . site_url() . 'CatalogoVenTec">Vendedores y Técnicos</a></li>
                                   <li><a href="' . site_url() . 'Cliente">Clientes Makbox</a></li>
                                    
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                      <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>
                                       <li><a href="' . site_url() . 'Products">Refacciones</a></li>  
                                      <li><a href="' . site_url() . 'orders">Salidas</a></li>  
                                      <li><a href="' . site_url() . 'products/agregar">Actualizar Inventario</a></li> 
                                      <!--<li><a href="' . site_url() . 'stores/">Almacen</a></li>-->
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
                                    <li><a href="' . site_url() . 'CensoMaquinaria">Censo Maquinaria</a></li>
                              </ul>
                            </li>
                            
                            
                              <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Catálogos<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . '">Vendedores y Técnicos</a></li>
                                   <li><a href="' . site_url() . '">Clientes</a></li>
                                  
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
                                   <li><a href="' . site_url() . 'Cliente">Clientes Makbox</a></li>
                                   
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                      <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</li>
                                        <li><a href="' . site_url() . 'Fuventas">FU V Refacciones</a></li>
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
                                   <li><a href="' . site_url() . 'Cliente">Clientes Makbox</a></li>
                                   
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                      <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>
                                       <li><a href="' . site_url() . 'Fuventas">FU V Refacciones</a></li>
                                      <li><a href="' . site_url() . 'Fuvservicio">FU V Servicio</a></li>
                                      <li><a href="' . site_url() . 'Calendario">Agenda</a></li>
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
                                    <li><a href="' . site_url() . 'CensoMaquinaria">Censo Maquinaria</a></li>
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
                              </ul>
                            </li>


                            ';
                    }























                    if ($dataLevel == 'is_consultor') { // Menú
                        
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
                                   <li><a href="' . site_url() . 'Cliente">Clientes Makbox</a></li>
                                    <li><a href="' . site_url() . 'Empresa">Empresas</a></li>
                                     
                                      <li><a href="' . site_url() . 'verificacion">Control de Maquinaria</a></li>
                                      <li><a href="' . site_url() . 'RecoleccionDatos">BD Validada</a></li>
                              </ul>
                            </li>
                            </li>

                            ';
                    }
                    ?>

                    <?php
                    if ($dataLevel_id == 1) {
                        ?>
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
                    }
                    else if ($dataLevel_id == 30) {
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
                        <img class="circular--square" id="foto" src="<?php echo base_url(); ?>assets/fotos_perfil/benajamin.png" height="45px"  width="45px" border="none" /></a>
                        <?php
                    } else if ($dataLevel_id == 33) {
                        ?>  
                        <a href="<?php echo site_url(); ?>main/profile/">  
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
                        
                    }
                    ?>



















                </ul>


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
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </div>
</nav>
<br><br>