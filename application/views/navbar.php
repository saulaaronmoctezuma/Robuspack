<?php
//check user level
$dataLevel = $this->userlevel->checkLevel($role);
$result = $this->User_model->getAllSettings();
$site_title = $result->site_title;
//check user level
?>

<!--Para Buscar-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.2.1/jquery.quicksearch.js"></script>
<script>
    $(function() {
        $('#buscandoIguales').quicksearch('table tbody tr');
    });
</script> 

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

<!--<img src="https://robuspack.com/img/logoROBUSPACK.png" border="0" width="60" height="40">-->
                <a class="navbar-brand" href="<?php echo site_url(); ?>main/"><?php echo $site_title; ?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo site_url(); ?>main/"><i class="glyphicon glyphicon-home" aria-hidden="true"></i> Inicio</a></li>
                    <?php
                    if ($dataLevel == 'is_admin') { //Menú para Karen & Saúl
                        echo'
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> Usuarios <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                             
                                <li><a href="' . site_url() . 'main/users">Listar de Usuario</a></li>
                                <li><a href="' . site_url() . 'main/adduser">Agregar Usuario</a></li>
                              <li><a href="' . site_url() . 'main/banuser">Prohibir usuario</a></li>
                               
                                <li><a href="' . site_url() . 'main/changelevel">Rol</a></li> 
                              </ul>
                            </li>
                           <li><a href="' . site_url() . 'main/settings"><i class="glyphicon glyphicon-cog" aria-hidden="true"></i> Configuración</a></li>
                           
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-tasks" aria-hidden="true"></i> Refacciones <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="' . site_url() . 'ClienteRefacciones">Control SIC</a></li>
                                <li><a href="' . site_url() . 'Maquinaria">Lista de Precios Cubiertas</a></li>
                                <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                <li><a href="' . site_url() . 'MaximoMinimo">Reporte Máximo Mínimo</a></li>
                                 <li><a href="' . site_url() . 'ReporteMaximoMinimo">Reporte Rotación de Inventario</a></li>
                                <li><a href="' . site_url() . 'Bitacora/refacciones">Bitácora</a></li>
                                    <li role="separator" class="divider"></li>
                                <li><a href="' . site_url() . 'CliVen">Clientes por vendedor</a></li>
                                <li><a href="' . site_url() . 'MaqCli">Máquinas por Clientes</a></li>
                                <li><a href="' . site_url() . 'MaqVen">Máquinas por Vendedor</a></li>
                                 <li><a href="' . site_url() . 'TotBit">Total Registros Bitácora</a></li>
                                 <li><a href="' . site_url() . 'TotSic">Total Sic</a></li>
                                  
                              </ul>
                            </li>
                            
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Maquinaria <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . 'ClienteSeguimiento">Control SIC</a></li>
                                    <li><a href="' . site_url() . 'Bitacora">Bitácora</a></li>
                              </ul>
                            </li>
                            
                            
                              <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Catálogos<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . 'CatalogoVenTec">Vendedores y Técnicos</a></li>
                                   <li><a href="' . site_url() . 'Cliente">Clientes</a></li>
                                    <li><a href="' . site_url() . 'Empresa">Empresas</a></li>
                                         <li><a href="' . site_url() . 'BitacoraMtto">Bitácora Mantenimiento</a></li>
                                               <li><a href="' . site_url() . 'verificacion">Placas de Maquinaria</a></li>
                                                   <li><a href="' . site_url() . 'RecoleccionDatos">Registro de Empresa</a></li>
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

                    if ($dataLevel == 'is_refacciones') { //Menú para el usuario de refacciones Charly y Elvira
                        echo'
                           
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-wrench" aria-hidden="true"></i> Control SIC Refacciones <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="' . site_url() . 'ClienteRefacciones">Control SIC</a></li>
                                
                                    
                                    <li><a href="' . site_url() . 'Maquinaria">Lista de Precios Cubiertas</a></li>
                                    <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                    <li><a href="' . site_url() . '">Reporte Máximo Mínimo</a></li>
                                    <li><a href="' . site_url() . 'Bitacora/refacciones">Bitácora</a></li>
                              </ul>
                            </li>
                            
                             <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Control SIC Maquinaria <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . '">Control SIC</a></li>
                                    <li><a href="' . site_url() . '">Bitácora</a></li>
                              </ul>
                            </li>
                            
                            
                              <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Catálogos<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . '">Vendedores y Técnicos</a></li>
                                    <li><a href="' . site_url() . '">Clientes</a></li>
                                    <li><a href="' . site_url() . '">Empresas</a></li>
                                        
                              </ul>
                            </li>

                            ';
                    }



                    if ($dataLevel == 'is_editor') { //Menú Lic. Rocio
                        echo'
                           
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-tasks" aria-hidden="true"></i> Control SIC Refacciones <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="' . site_url() . 'ClienteRefacciones">Control SIC</a></li>
                                <li><a href="' . site_url() . 'Maquinaria">Lista de Precios Cubiertas</a></li>
                                <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                <li><a href="' . site_url() . 'MaximoMinimo">Reporte Máximo Mínimo</a></li>
                                <li><a href="' . site_url() . 'ReporteMaximoMinimo">Reporte Rotación de Inventario</a></li>
                                <li><a href="' . site_url() . 'Bitacora/refacciones">Bitácora</a></li>
                                  
                              </ul>
                            </li>
                            
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Control SIC Maquinaria <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . 'ClienteSeguimiento">Control SIC</a></li>
                                    <li><a href="' . site_url() . 'Bitacora">Bitácora</a></li>
                              </ul>
                            </li>
                            
                            
                              <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Catálogos<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                   <li><a href="' . site_url() . 'CatalogoVenTec">Vendedores y Técnicos</a></li>
                                   <li><a href="' . site_url() . 'Cliente">Clientes</a></li>
                                   <li><a href="' . site_url() . 'Empresa">Empresas</a></li>
                                   <li><a href="' . site_url() . 'verificacion">Catálogo de Placas de Maquinaria</a></li>
                              </ul>
                            </li>
                            ';
                    }


                    if ($dataLevel == 'is_Gerente_Ventas') { //Menú Cesar Cantú
                        echo'
                           <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-tasks" aria-hidden="true"></i> Control SIC Refacciones <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="' . site_url() . 'ClienteRefacciones">Control SIC</a></li>
                                 <li><a href="' . site_url() . 'Maquinaria">Lista de Precios Cubiertas</a></li>
                                 <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                 <li><a href="' . site_url() . '">Reporte Máximo Mínimo</a></li>
                                 <li><a href="' . site_url() . 'ReporteMaximoMinimo">Reporte Rotación de Inventario</a></li>
                                 <li><a href="' . site_url() . 'Bitacora/refacciones">Bitácora</a></li>
                                  
                              </ul>
                            </li>
                            
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Control SIM Maquinaria <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . '">Control SIM</a></li>
                                    <li><a href="' . site_url() . '">Bitácora</a></li>
                              </ul>
                            </li>
                            
                            
                              <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Catálogos<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . '">Vendedores y Técnicos</a></li>
                                   <li><a href="' . site_url() . '">Clientes</a></li>
                                    <li><a href="' . site_url() . '">Empresas</a></li>
                              </ul>
                            </li>
                            ';
                    }




                    if ($dataLevel == 'is_mediciones') { //Menú para el usuario de mediciones 
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

                    if ($dataLevel == 'is_maquinaria') { //Menú para el usuario de maquinaria Gerardo, Benjamin
                        echo'
                           
                           <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-tasks" aria-hidden="true"></i> Registro <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                            

                              
                                <li><a href="' . site_url() . 'ClienteSeguimiento">Cliente Seguimiento</a></li>
                               <li><a href="' . site_url() . 'Bitacora">Bitácora</a></li>
                              
                              </ul>
                            </li>
                            ';
                    }

                    if ($dataLevel == 'is_consultor') { // Menú
                        echo'
                           
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-wrench" aria-hidden="true"></i> Control SIC Refacciones <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="' . site_url() . '">Control SIC</a></li>
                                
                                    
                                    <li><a href="' . site_url() . '">Lista de Precios Cubiertas</a></li>
                                    <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                    <li><a href="' . site_url() . '">Reporte Máximo Mínimo</a></li>
                                     <li><a href="' . site_url() . '">Bitácora</a></li>
                              </ul>
                            </li>
                            
                             <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Control SIM Maquinaria <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . '">Control SIC</a></li>
                                    <li><a href="' . site_url() . '">Bitácora</a></li>
                              </ul>
                            </li>
                            
                            
                              <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Catálogos<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . '">Vendedores y Técnicos</a></li>
                                   <li><a href="' . site_url() . '">Clientes</a></li>
                                    <li><a href="' . site_url() . 'Empresa">Empresas</a></li>
                                    <li><a href="' . site_url() . 'RecoleccionDatos">Registro de Empresas</a></li>
                              </ul>
                            </li>

                            ';
                            
                            
                            
                            
                    }
                    
                    if ($dataLevel == 'is_credito') { //Menú para el usuario de credito Marisol
                        echo'
                           <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-tasks" aria-hidden="true"></i> Cliente <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="' . site_url() . 'Cliente">Gestión Cliente</a></li>
                              </ul>
                            </li>
                            


                    <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-wrench" aria-hidden="true"></i> Control SIC Refacciones <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="' . site_url() . 'ClienteRefacciones">Control SIC</a></li>
                                
                                    
                                    <li><a href="' . site_url() . 'Maquinaria">Lista de Precios Cubiertas</a></li>
                                    <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                    <li><a href="' . site_url() . '">Reporte Máximo Mínimo</a></li>
                                 <li><a href="' . site_url() . 'ReporteMaximoMinimo">Reporte Rotación de Inventario</a></li>
                                     <li><a href="' . site_url() . 'Bitacora/refacciones">Bitácora</a></li>
                              </ul>
                            </li>
                            ';
                    }

                    
                    
                      if ($dataLevel == 'is_servicio_a_clientes') { //Menú para el usuario de Oscar
                        echo'
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-wrench" aria-hidden="true"></i> Control SIC Refacciones <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="' . site_url() . 'ClienteRefacciones">Control SIC</a></li>
                                
                                    
                                    <li><a href="' . site_url() . '">Lista de Precios Cubiertas</a></li>
                                    <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                    <li><a href="' . site_url() . '">Reporte Máximo Mínimo</a></li>
                                     <li><a href="' . site_url() . '">Bitácora</a></li>
                              </ul>
                            </li>
                            
                             <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Control SIM Maquinaria <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . '">Control SIC</a></li>
                                    <li><a href="' . site_url() . '">Bitácora</a></li>
                              </ul>
                            </li>
                            
                            
                              <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Catálogos<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . '">Vendedores y Técnicos</a></li>
                                   <li><a href="' . site_url() . 'Cliente">Clientes</a></li>
                                    <li><a href="' . site_url() . 'Empresa">Empresas</a></li>
                                    <li><a href="' . site_url() . 'RecoleccionDatos">Registro de Empresas</a></li>
                              </ul>
                            </li>

                            ';
                    }


                    if ($dataLevel == 'is_director') { //Menú para el usuario de Sergio Peñafiel
                        echo'
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-wrench" aria-hidden="true"></i> Control SIC Refacciones <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="' . site_url() . 'ClienteRefacciones">Control SIC</a></li>
                                
                                    
                                    <li><a href="' . site_url() . 'Maquinaria">Lista de Precios Cubiertas</a></li>
                                    <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                    <li><a href="' . site_url() . '">Reporte Máximo Mínimo</a></li>
                                 <li><a href="' . site_url() . 'ReporteMaximoMinimo">Reporte Rotación de Inventario</a></li>
                                     <li><a href="' . site_url() . 'Bitacora/refacciones">Bitácora</a></li>
                              </ul>
                            </li>
                        
                         
                            
                            
                            
                            
                              <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Control SIM Maquinaria <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . 'ClienteSeguimiento">Control SIM</a></li>
                                    <li><a href="' . site_url() . 'Bitacora">Bitácora</a></li>
                              </ul>
                            </li>
                            
                            
                              <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Catálogos<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . '">Vendedores y Técnicos</a></li>
                                   <li><a href="' . site_url() . '">Clientes</a></li>
                                    <li><a href="' . site_url() . '">Empresas</a></li>
                              </ul>
                            </li>
                            ';
                    }


                    if ($dataLevel == 'is_mantenimiento') { //NavBar para Mantenimiento
                        echo'

                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-wrench" aria-hidden="true"></i> Mantenimiento <span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . 'BitacoraMtto">Bitácora</a></li>



                                  </ul>
                                </li>
                                




                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-tasks" aria-hidden="true"></i> Control SIC <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="' . site_url() . '">Control SIC</a></li>
                                <li><a href="' . site_url() . '">Lista de Precios Cubiertas</a></li>
                                <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                <li><a href="' . site_url() . '">Reporte Máximo Mínimo</a></li>
                                 <li><a href="' . site_url() . '">Reporte Rotación de Inventario</a></li>
                                <li><a href="' . site_url() . '">Bitácora</a></li>
                                  
                              </ul>
                            </li>
                            
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Control SIM Maquinaria <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . '">Control SIM</a></li>
                                    <li><a href="' . site_url() . '">Bitácora</a></li>
                              </ul>
                            </li>
                            
                            
                              <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Catálogos<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . '">Vendedores y Técnicos</a></li>
                                   <li><a href="' . site_url() . '">Clientes</a></li>
                                    <li><a href="' . site_url() . '">Empresas</a></li>
                              </ul>
                            </li>




                                ';
                    }

                    if ($dataLevel == 'is_jefe_mantenimiento') { //NavBar para Mantenimiento
                        echo'

                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-wrench" aria-hidden="true"></i> Mantenimiento <span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . 'BitacoraMtto">Bitácora</a></li>



                                  </ul>
                                </li>




                                ';
                    }


                    if ($dataLevel == 'is_logistica') { //NavBar para Mantenimiento
                        echo'

                              
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-tasks" aria-hidden="true"></i> Refacciones <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="' . site_url() . '">Control SIC</a></li>
                                <li><a href="' . site_url() . '">Lista de Precios Cubiertas</a></li>
                                <li><a href="' . site_url() . '">Lista de Precios Cuchillas</a></li>
                                <li><a href="' . site_url() . '">Reporte Máximo Mínimo</a></li>
                                 <li><a href="' . site_url() . '">Reporte Rotación de Inventario</a></li>
                                <li><a href="' . site_url() . '">Bitácora</a></li>
                                    <li role="separator" class="divider"></li>
                                <li><a href="' . site_url() . '">Clientes por vendedor</a></li>
                                <li><a href="' . site_url() . '">Máquinas por Clientes</a></li>
                                <li><a href="' . site_url() . '">Máquinas por Vendedor</a></li>
                                 <li><a href="' . site_url() . '">Total Registros Bitácora</a></li>
                                 <li><a href="' . site_url() . '">Total Sic</a></li>
                                  
                              </ul>
                            </li>
                            
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Maquinaria <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . '">Control SIC</a></li>
                                    <li><a href="' . site_url() . '">Bitácora</a></li>
                              </ul>
                            </li>
                            
                            
                              <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Catálogos<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . '">Vendedores y Técnicos</a></li>
                                   <li><a href="' . site_url() . '">Clientes</a></li>
                                    <li><a href="' . site_url() . '">Empresas</a></li>
                                      
                                               <li><a href="' . site_url() . 'verificacion">Catálogo de Placas de Maquinaria</a></li>
                              </ul>
                            </li>


                                ';
                    }


                    if ($dataLevel == 'is_maquinaria_refacciones') { //NavBar para Gerardo
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
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> Control SIC Maquinaria <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . 'ClienteSeguimiento">Control SIC</a></li>
                                    <li><a href="' . site_url() . 'Bitacora">Bitácora</a></li>
                              </ul>
                            </li>
                            
                            
                              <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Catálogos<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                    <li><a href="' . site_url() . '">Vendedores y Técnicos</a></li>
                                   <li><a href="' . site_url() . '">Clientes</a></li>
                                    <li><a href="' . site_url() . '">Empresas</a></li>
                              </ul>
                            </li>

                            ';
                    }
                    ?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> <?php echo $first_name; ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url(); ?>main/profile"><?php echo $email; ?></a></li>




<!--Si quieren que cambiar perfil aparezca en todos los usuario se quita esta condifcion y se pone  <li><a href="<?php echo site_url(); ?>main/changeuser">Editar Perfil</a></li>  -->
                            <?php
                            if ($dataLevel == 'is_admin') {
                                echo ' <li><a href="main/changeuser">Editar Perfil</a></li>';
                                echo ' <li><a href="' . site_url() . 'Usuario">Últimas Conexiones</a></li>';
                            } else if ($dataLevel == 'is_editor') {
                                echo ' <li><a href="' . site_url() . 'Usuario">Últimas Conexiones</a></li>';
                            } else if ($dataLevel == 'is_Gerente_Ventas') {
                                echo ' <li><a href="' . site_url() . 'Usuario">Últimas Conexiones</a></li>';
                            } else if ($dataLevel == 'is_director') {
                                echo ' <li><a href="' . site_url() . 'Usuario">Últimas Conexiones</a></li>';
                            }else if ($dataLevel == 'is_jefe_mantenimiento') {
                                echo ' <li><a href="' . site_url() . 'Usuario">Últimas Conexiones</a></li>';
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


<!--<a href="#abajo" class="to-abajo">Ir a la parte de abajo</a