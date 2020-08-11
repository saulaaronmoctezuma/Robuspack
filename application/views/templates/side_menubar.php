<aside class="main-sidebar position-fixed">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree" >

            <li id="dashboardMainMenu">
                <a href="<?php echo base_url('') ?>">
                    <i class="fa fa-dashboard"></i> <span>SCROBUSPACK</span>
                </a>
            </li>

            <li class="treeview" id="mainUserNav">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Usuarios</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li id="createUserNav"><a href="<?php echo base_url('Usuario') ?>"><i class="fa fa-circle-o"></i>Últimas Conexiones</a></li>

                    <li id="manageUserNav"><a href="<?php echo base_url('/main/users') ?>"><i class="fa fa-circle-o"></i>Listar Usuario</a></li>

                    <li id="manageUserNav"><a href="<?php echo base_url('/main/adduser') ?>"><i class="fa fa-circle-o"></i>Agregar Usuario</a></li>

                    <li id="manageUserNav"><a href="<?php echo base_url('/main/banuser') ?>"><i class="fa fa-circle-o"></i>Prohibir Usuario</a></li>

                    <li id="manageUserNav"><a href="<?php echo base_url('/main/changelevel') ?>"><i class="fa fa-circle-o"></i>Rol</a></li>

                </ul>
            </li>


            <li class="treeview" id="mainGroupNav">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Control SIC</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li id="addGroupNav"><a href="<?php echo base_url('ClienteRefacciones') ?>"><i class="fa fa-circle-o"></i> Control SIC</a></li>
                    <li id="manageGroupNav"><a href="<?php echo base_url('ToSic') ?>"><i class="fa fa-circle-o"></i> Total SIC</a></li>
                    <li id="manageGroupNav"><a href="<?php echo base_url('TotBit') ?>"><i class="fa fa-circle-o"></i> Total Registros Bitácota</a></li>
                    <li id="manageGroupNav"><a href="<?php echo base_url('Maquinaria') ?>"><i class="fa fa-circle-o"></i>Lista de Precios Cubiertas</a></li>
                    <li id="manageGroupNav"><a href="<?php echo base_url('') ?>"><i class="fa fa-circle-o"></i>Lista de Precios Cuchillas</a></li>
                    <li id="manageGroupNav"><a href="<?php echo base_url('MaximoMinimo') ?>"><i class="fa fa-circle-o"></i>Reporte Máximo Mínimo</a></li>
                    <li id="manageGroupNav"><a href="<?php echo base_url('MaxMin') ?>"><i class="fa fa-circle-o"></i>Reporte Rotación de Inventario</a></li>
                    <li id="manageGroupNav"><a href="<?php echo base_url('CliVen') ?>"><i class="fa fa-circle-o"></i>Clientes por Vendedor</a></li>
                    <li id="manageGroupNav"><a href="<?php echo base_url('MaqCli') ?>"><i class="fa fa-circle-o"></i>Máquinas por Clientes</a></li>
                    <li id="manageGroupNav"><a href="<?php echo base_url('MaqVen') ?>"><i class="fa fa-circle-o"></i>Máquinas por Vendedor</a></li>

                </ul>


            </li>







            <li class="treeview" id="mainGroupNav">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Control SIM</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li id="addGroupNav"><a href="<?php echo base_url('ClienteSeguimiento') ?>"><i class="fa fa-circle-o"></i> Control SIM</a></li>
                    <li id="manageGroupNav"><a href="<?php echo base_url('Bitacora') ?>"><i class="fa fa-circle-o"></i> Bitácora</a></li>

                </ul>


            </li>



            <li class="treeview" id="mainGroupNav">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Catálogos</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li id="addGroupNav"><a href="<?php echo base_url('CatalogoVenTec') ?>"><i class="fa fa-circle-o"></i> Vendedores y Técnicos</a></li>
                    <li id="manageGroupNav"><a href="<?php echo base_url('Cliente') ?>"><i class="fa fa-circle-o"></i> Clientes</a></li>
                    <li id="manageGroupNav"><a href="<?php echo base_url('Empresa') ?>"><i class="fa fa-circle-o"></i> Empresas No Validadas</a></li>
                    <li id="manageGroupNav"><a href="<?php echo base_url('verificacion') ?>"><i class="fa fa-circle-o"></i> Control de Maquinaria</a></li>
                    <li id="manageGroupNav"><a href="<?php echo base_url('RecoleccionDatos') ?>"><i class="fa fa-circle-o"></i> BD Validada</a></li>
                    <li id="manageGroupNav"><a href="<?php echo base_url('Fuventas') ?>"><i class="fa fa-circle-o"></i> FU V Refacciones</a></li>
                    <li id="manageGroupNav"><a href="<?php echo base_url('Fuvservicio') ?>"><i class="fa fa-circle-o"></i> FU V Servicio</a></li>
                    <li id="manageGroupNav"><a href="<?php echo base_url('Calendario') ?>"><i class="fa fa-circle-o"></i> Agenda</a></li>

                </ul>


            </li>

            <!-- <li id="brandNav">
                 <a href="<?php echo base_url('brands/') ?>">
                   <i class="glyphicon glyphicon-tags"></i> <span></span>
                 </a>
               </li>-->



            <li id="storeNav">
                <a href="<?php echo base_url('BitacoraMtto') ?>">
                    <i class="fa fa-files-o"></i> <span>Control Mtto</span>
                </a>
            </li>


            <li id="storeNav">
                <a href="<?php echo base_url('stores/') ?>">
                    <i class="fa fa-files-o"></i> <span>Almacenes</span>
                </a>
            </li>
            <!--<li id="attributeNav">
              <a href="<?php echo base_url('attributes/') ?>">
                <i class="fa fa-files-o"></i> <span>Atributos</span>
              </a>
            </li>-->
            <li class="treeview" id="mainProductNav">
                <a href="#">
                    <i class="fa fa-cube"></i>
                    <span>Refacciones</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li id="addProductNav"><a href="<?php echo base_url('products/create') ?>"><i class="fa fa-circle-o"></i> Agregar </a></li>
                    <li id="manageProductNav"><a href="<?php echo base_url('products/agregar') ?>"><i class="fa fa-circle-o"></i> Actualizar Inventario</a></li>
                    <li id="manageProductNav"><a href="<?php echo base_url('products') ?>"><i class="fa fa-circle-o"></i> Administrar</a></li>

                </ul>
            </li>
            <li class="treeview" id="mainOrdersNav">
                <a href="#">
                    <i class="fa fa-dollar"></i>
                    <span>Ordenes</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li id="addOrderNav"><a href="<?php echo base_url('orders/create') ?>"><i class="fa fa-circle-o"></i> Agregar </a></li>
                    <li id="manageOrdersNav"><a href="<?php echo base_url('orders') ?>"><i class="fa fa-circle-o"></i> Administrar</a></li>
                </ul>
            </li>
            
                <li id="storeNav">
                <a href="<?php echo base_url('Devolucion') ?>">
                    <i class="fa fa-files-o"></i> <span>Devolución</span>
                </a>
            </li>

            <!-- <li id="reportNav">
                <a href="<?php echo base_url('reports/') ?>">
                  <i class="glyphicon glyphicon-stats"></i> <span>Reportes</span>
                </a>
              </li>-->


      <!--    <li id="companyNav"><a href="<?php echo base_url('company/') ?>"><i class="fa fa-files-o"></i> <span>Empresa</span></a></li>-->


            <!-- <li class="header">Settings</li> -->

       <!-- <li><a href="<?php echo base_url('users/profile/') ?>"><i class="fa fa-user-o"></i> <span>Perfil</span></a></li>-->
        <!--  <li><a href="<?php echo base_url('users/setting/') ?>"><i class="fa fa-wrench"></i> <span>Configuración</span></a></li>-->


            <!-- user permission info -->
            <li><a href="<?php echo base_url('auth/logout') ?>"><i class="glyphicon glyphicon-log-out"></i> <span>Cerrar sesión</span></a></li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>