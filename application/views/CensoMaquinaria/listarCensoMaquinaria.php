
<html lang="es-mx">
    <head>
        <title>Robuspack</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php
        defined('BASEPATH') OR exit('No direct script access allowed');

        $result = $this->User_model->getAllSettings();
        $theme = $result->theme;
        ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $theme; ?>">
        <link rel="stylesheet" href="<?php echo base_url() . 'public/css/main.css' ?>">





        <!-- Pregunta al dar clic a eliminar-->
        <script type="text/javascript">
            function confirma() {
                if (confirm("¿Realmente desea eliminarlo?")) {

                } else {
                    return false
                }
            }
        </script>


        <!-- Para traerse el rol que esta registrado-->
        <?php
        //check user level
        $dataLevel = $this->userlevel->checkLevel($role);

        $site_title = $result->site_title;
        //check user level
        ?>



        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css">-->

    </head>

    <body>


        <div class="container" style="margin-top:1px;">
            <center>  <h1>Censo</h1>
                <h4>Visita con el cliente</h4>

            </center>

            <div class="form-group input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                <input type="text" id="myInput"  placeholder="Escribe para buscar..."  class="form-control" />

            </div>



            <!-- <div class="alert alert-info alert-info">
                 <button type="button" class="close" data-dismiss="alert">&times;</button>
                 <strong>Bienvenido</strong> Agrega, Modifica o Elimina sus Datos
             </div>-->


            <?php
            if ($dataLevel == 'is_admin') {
                echo '<div class="text-center">';
                echo '<td><a  class="btn btn-success" href="CensoMaquinaria/agregar") data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Seguimiento">Agregar Nuevo Registro</a></td>';
                echo '</div>';
            } else if ($dataLevel == 'is_editor') {
                echo '<div class="text-center">';
                echo '<td><a  class="btn btn-success" href="ClienteSeguimiento/agregar") data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Seguimiento">Agregar Nuevo Registro</a></td>';
                echo '</div>';
            } else if ($dataLevel == 'is_director') {
                
            } else {
                echo '<div class="text-center">';
                echo '<td><a  class="btn btn-success" href="ClienteSeguimiento/agregar") data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Seguimiento">Agregar Nuevo Registro</a></td>';
                echo '</div>';
            }
            ?>
            <br>
            <div class="text-center">


                <form method="post" action="<?php echo base_url(); ?>ExportarExcel/crearExcelCensoMaquinaria">

                    <button  class="btn btn-info" title="Da clic para exportar los datos a Excel" style="font-size:16px;color:white"><font color="white">Exportar</font> <i class="fa fa-file-excel-o"></i></button>
                </form>   
            </div> 


        </div>




        <div class="container" style="margin-top:1px;">


            <div class="table-responsive">
                <script>
                    $(document).ready(function() {
                        $("#mostrar").click(function() {
                            //$(".grupo").hide();
                            $(".empresa").hide();
                            $(".estado").hide();
                            $(".ciudad_municipio").hide();
                            $("#mostrar").hide();
                            $("#ocultar").show();
//                            // $(".td_empresa").hide();
                            $('.td_empresa').attr('colspan', '1');
                        });
                        $("#ocultar").click(function() {
                            //$('.grupo').show();
                            $('.empresa').show();
                            $('.estado').show();
                            $('.ciudad_municipio').show();
                            $(".td_empresa").attr('colspan', '4');
                            $("#ocultar").hide();
                            $("#mostrar").show();

                        });
                    });



                    $(document).ready(function() {
                        $("#mostrar_dueno").click(function() {
                            // $(".nombre_dueno").hide();
                            $(".celular_dueno").hide();
                            $(".correo_empresarial_dueno").hide();
                            $(".correo_personal_dueno").hide();
                            $('.td_dueno').attr('colspan', '1');
                            $("#mostrar_dueno").hide();
                            $("#ocultar_dueno").show();

                        });
                        $("#ocultar_dueno").click(function() {
                            // $('.nombre_dueno').show();
                            $('.celular_dueno').show();
                            $('.correo_empresarial_dueno').show();
                            $('.correo_personal_dueno').show();
                            $(".td_dueno").attr('colspan', '4');
                            $("#ocultar_dueno").hide();
                            $("#mostrar_dueno").show();


                        });
                    });



                    $(document).ready(function() {
                        $("#mostrar_ceo").click(function() {

                            $(".celular_ceo").hide();
                            $(".correo_empresarial_ceo").hide();
                            $(".correo_personal_ceo").hide();
                            $('.td_ceo').attr('colspan', '1');
                            $("#mostrar_ceo").hide();
                            $("#ocultar_ceo").show();

                        });
                        $("#ocultar_ceo").click(function() {

                            $('.celular_ceo').show();
                            $('.correo_empresarial_ceo').show();
                            $('.correo_personal_ceo').show();
                            $(".td_ceo").attr('colspan', '4');
                            $("#ocultar_ceo").hide();
                            $("#mostrar_ceo").show();


                        });
                    });


                    $(document).ready(function() {
                        $("#mostrar_gerente").click(function() {

                            $(".celular_gerente").hide();
                            $(".correo_empresarial_gerente").hide();
                            $(".correo_personal_gerente").hide();
                            $('.td_gerente').attr('colspan', '1');
                            $("#mostrar_gerente").hide();
                            $("#ocultar_gerente").show();

                        });
                        $("#ocultar_gerente").click(function() {

                            $('.celular_gerente').show();
                            $('.correo_empresarial_gerente').show();
                            $('.correo_personal_gerente').show();
                            $(".td_gerente").attr('colspan', '4');
                            $("#ocultar_gerente").hide();
                            $("#mostrar_gerente").show();


                        });
                    });



                    $(document).ready(function() {
                        $("#mostrar_produccion").click(function() {

                            $(".celular_produccion").hide();
                            $(".correo_empresarial_produccion").hide();
                            $(".correo_personal_produccion").hide();
                            $('.td_produccion').attr('colspan', '1');
                            $("#mostrar_produccion").hide();
                            $("#ocultar_produccion").show();

                        });
                        $("#ocultar_produccion").click(function() {

                            $('.celular_produccion').show();
                            $('.correo_empresarial_produccion').show();
                            $('.correo_personal_produccion').show();
                            $(".td_produccion").attr('colspan', '4');
                            $("#ocultar_produccion").hide();
                            $("#mostrar_produccion").show();


                        });
                    });



                    $(document).ready(function() {
                        $("#mostrar_produccion").click(function() {

                            $(".celular_produccion").hide();
                            $(".correo_empresarial_produccion").hide();
                            $(".correo_personal_produccion").hide();
                            $('.td_produccion').attr('colspan', '1');
                            $("#mostrar_produccion").hide();
                            $("#ocultar_produccion").show();

                        });
                        $("#ocultar_produccion").click(function() {

                            $('.celular_produccion').show();
                            $('.correo_empresarial_produccion').show();
                            $('.correo_personal_produccion').show();
                            $(".td_produccion").attr('colspan', '4');
                            $("#ocultar_produccion").hide();
                            $("#mostrar_produccion").show();


                        });
                    });


                    $(document).ready(function() {
                        $("#mostrar_mtto").click(function() {

                            $(".celular_mtto").hide();
                            $(".correo_empresarial_mmto").hide();
                            $(".correo_personal_mtto").hide();
                            $('.td_mtto').attr('colspan', '1');
                            $("#mostrar_mtto").hide();
                            $("#ocultar_mtto").show();

                        });
                        $("#ocultar_mtto").click(function() {

                            $('.celular_mtto').show();
                            $('.correo_empresarial_mmto').show();
                            $('.correo_personal_mtto').show();
                            $(".td_mtto").attr('colspan', '4');
                            $("#ocultar_mtto").hide();
                            $("#mostrar_mtto").show();


                        });
                    });


                    $(document).ready(function() {
                        $("#mostrar_compras").click(function() {

                            $(".celular_compras").hide();
                            $(".correo_empresarial_compras").hide();
                            $(".correo_personal_compras").hide();
                            $('.td_compras').attr('colspan', '1');
                            $("#mostrar_compras").hide();
                            $("#ocultar_compras").show();

                        });
                        $("#ocultar_compras").click(function() {

                            $('.celular_compras').show();
                            $('.correo_empresarial_compras').show();
                            $('.correo_personal_compras').show();
                            $(".td_compras").attr('colspan', '4');
                            $("#ocultar_compras").hide();
                            $("#mostrar_compras").show();


                        });
                    });



                    $(document).ready(function() {
                        $("#mostrar_ventas").click(function() {

                            $(".celular_ventas").hide();
                            $(".correo_empresarial_ventas").hide();
                            $(".correo_personal_ventas").hide();
                            $('.td_ventas').attr('colspan', '1');
                            $("#mostrar_ventas").hide();
                            $("#ocultar_ventas").show();

                        });
                        $("#ocultar_ventas").click(function() {

                            $('.celular_ventas').show();
                            $('.correo_empresarial_ventas').show();
                            $('.correo_personal_ventas').show();
                            $(".td_ventas").attr('colspan', '4');
                            $("#ocultar_ventas").hide();
                            $("#mostrar_ventas").show();


                        });
                    });



                    $(document).ready(function() {
                        $("#mostrar_otros").click(function() {

                            $(".celular_otros").hide();
                            $(".correo_empresarial_otros").hide();
                            $(".correo_personal_otros").hide();
                            $('.td_otros').attr('colspan', '1');
                            $("#mostrar_otros").hide();
                            $("#ocultar_otros").show();

                        });
                        $("#ocultar_otros").click(function() {

                            $('.celular_otros').show();
                            $('.correo_empresarial_otros').show();
                            $('.correo_personal_otros').show();
                            $(".td_otros").attr('colspan', '4');
                            $("#ocultar_otros").hide();
                            $("#mostrar_otros").show();


                        });
                    });





                    $(document).ready(function() {
                        $("#mostrar_info_maquina").click(function() {

                            // $(".info_maquinas_1").hide();
                            $(".info_maquina_2").hide();
                            $(".info_maquina_3").hide();
                            $(".info_maquina_4").hide();
                            $(".info_maquina_5").hide();
                            $(".info_maquina_6").hide();
                            $(".info_maquina_7").hide();


                            $('.td_info_maquina').attr('colspan', '1');
                            $("#mostrar_info_maquina").hide();
                            $("#ocultar_info_maquina").show();

                        });
                        $("#ocultar_info_maquina").click(function() {

                            //$('.info_maquinas_1').show();
                            $('.info_maquina_2').show();
                            $('.info_maquina_3').show();
                            $('.info_maquina_4').show();
                            $('.info_maquina_5').show();
                            $('.info_maquina_6').show();
                            $('.info_maquina_7').show();


                            $(".td_info_maquina").attr('colspan', '7');
                            $("#ocultar_info_maquina").hide();
                            $("#mostrar_info_maquina").show();


                        });
                    });




                    $(document).ready(function() {
                        $("#mostrar_generales").click(function() {

                            $(".asesor").hide();
                            $(".estatus_cliente").hide();
                            $(".tamano_cliente").hide();
                            $(".tipo_mercado").hide();
                            $(".volumen_produccion").hide();
                            $(".necesidad").hide();
                            $(".compromiso").hide();
                            $(".notas").hide();
                            $(".refacciones").hide();
                            $(".corrugadora").hide();
                            $('.td_generales').attr('colspan', '1');
                            $("#mostrar_generales").hide();
                            $("#ocultar_generales").show();

                        });
                        $("#ocultar_generales").click(function() {

                            $('.asesor').show();
                            $('.estatus_cliente').show();
                            $('.tamano_cliente').show();
                            $('.tipo_mercado').show();
                            $('.volumen_produccion').show();
                            $('.necesidad').show();
                            $('.compromiso').show();
                            $('.notas').show();
                            $('.refacciones').show();
                            $('.corrugadora').show();
                            $(".td_generales").attr('colspan', '11');
                            $("#ocultar_generales").hide();
                            $("#mostrar_generales").show();


                        });
                    });











                </script>


                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

                 <style type="text/css">

                            .fullscreen-modal .modal-dialog {
                                margin: 0;
                                margin-right: auto;
                                margin-left: auto;
                                width: 100%;
                            }
                            @media (min-width: 768px) {
                                .fullscreen-modal .modal-dialog {
                                    width: 750px;
                                }
                            }
                            @media (min-width: 992px) {
                                .fullscreen-modal .modal-dialog {
                                    width: 970px;
                                }
                            }
                            @media (min-width: 1200px) {
                                .fullscreen-modal .modal-dialog {
                                    width: 1170px;
                                }
                            }     

                            @media screen and (max-width: 320px) {
                                table {
                                    display: block;
                                    overflow-x: auto;
                                }
                            }


                        </style>


                <table  border="0" class="table table-bordered table-striped">
                    <MARQUEE SCROLLDELAY =200> </MARQUEE>


                    <thead >



                        <tr>

                              <?php
                            if ($dataLevel == 'is_admin') {
                                echo '<th class="header">Usuario</th>';
                            } else if ($dataLevel == 'is_editor') {
                                echo '<th class="header">Usuario</th>';
                            } else if ($dataLevel == 'is_Gerente_Ventas') {
                                
                            } else if ($dataLevel == 'is_director') {
                                echo '<th class="header">Usuario</th>';
                            } else {
                                
                            }
                            ?>
                      
                            <!--<td class="grupo">Grupo </td>-->
                            <td colspan="4" bgcolor="#1DDDFF" class="td_empresa">

                    <center>  Empresa  </center>
                               <!-- <button style="display: none;" type="button" id="mostrar" class="btn btn-default btn-xs"><i class="fa fa-window-close"></i></button>

                                <button type="button" id="ocultar" class="btn btn-default btn-xs"><i class="fa fa-check-square-o"></i></button>-->
                    </td>

                           <!-- <td colspan="1" class="td_dueno">

                                Dueño
                                <button  style="display: none;" type="button" id="mostrar_dueno" class="btn btn-default btn-xs"><i class="fa fa-window-close"></i></button>

                                <button type="button" id="ocultar_dueno" class="btn btn-default btn-xs"><i class="fa fa-check-square-o"></i></button>

                            </td>

                            <td colspan="1" class="td_ceo">


                                Ceo

                                <button  style="display: none;" type="button" id="mostrar_ceo" class="btn btn-default btn-xs"><i class="fa fa-window-close"></i></button>

                                <button type="button" id="ocultar_ceo" class="btn btn-default btn-xs"><i class="fa fa-check-square-o"></i></button>


                            </td>

                            <td colspan="1" class="td_gerente">

                                Gerente

                                <button  style="display: none;" type="button" id="mostrar_gerente" class="btn btn-default btn-xs"><i class="fa fa-window-close"></i></button>

                                <button type="button" id="ocultar_gerente" class="btn btn-default btn-xs"><i class="fa fa-check-square-o"></i></button>




                            </td>

                            <td colspan="1" class="td_produccion">

                                Produccion

                                <button  style="display: none;" type="button" id="mostrar_produccion" class="btn btn-default btn-xs"><i class="fa fa-window-close"></i></button>

                                <button type="button" id="ocultar_produccion" class="btn btn-default btn-xs"><i class="fa fa-check-square-o"></i></button>




                            </td>

                            <td colspan="1" class="td_mtto">

                                Mtto


                                <button  style="display: none;" type="button" id="mostrar_mtto" class="btn btn-default btn-xs"><i class="fa fa-window-close"></i></button>

                                <button type="button" id="ocultar_mtto" class="btn btn-default btn-xs"><i class="fa fa-check-square-o"></i></button>



                            </td>

                            <td colspan="1" class="td_compras">

                                Compras


                                <button  style="display: none;" type="button" id="mostrar_compras" class="btn btn-default btn-xs"><i class="fa fa-window-close"></i></button>

                                <button type="button" id="ocultar_compras" class="btn btn-default btn-xs"><i class="fa fa-check-square-o"></i></button>



                            </td>

                            <td colspan="1" class="td_ventas">

                                Ventas

                                <button  style="display: none;" type="button" id="mostrar_ventas" class="btn btn-default btn-xs"><i class="fa fa-window-close"></i></button>

                                <button type="button" id="ocultar_ventas" class="btn btn-default btn-xs"><i class="fa fa-check-square-o"></i></button>




                            </td>

                            <td colspan="1" class="td_otros">

                                Otros

                                <button  style="display: none;" type="button" id="mostrar_otros" class="btn btn-default btn-xs"><i class="fa fa-window-close"></i></button>

                                <button type="button" id="ocultar_otros" class="btn btn-default btn-xs"><i class="fa fa-check-square-o"></i></button>



                            </td>
                    -->

                    <td class="td_generales" bgcolor="#1DFF8B" colspan="1">
                    <center>Generales


                        <button  style="display: none;" type="button" id="mostrar_generales" class="btn btn-default btn-xs"><i class="fa fa-window-close"></i></button>

                        <button type="button" id="ocultar_generales" class="btn btn-default btn-xs"><i class="fa fa-check-square-o"></i></button>
                    </center>

                    </td>



                    <td class="td_info_maquina"colspan="1" bgcolor="#EE578E">
                    <center> Info Máquinas
                        <button  type="button" style="display: none;" id="mostrar_info_maquina" class="btn btn-default btn-xs"><i class="fa fa-window-close"></i></button>

                        <button type="button" id="ocultar_info_maquina" class="btn btn-default btn-xs"><i class="fa fa-check-square-o"></i></button>
                    </center>
                    </td>

                    <td class="accion" colspan="2" bgcolor="#FFC300">
                    <center>Acción</center>
                    </td>





                    </tr>
                    <tr>
                    <tr  >
                        
                        
                       <?php
                            if ($dataLevel == 'is_admin') {
                                echo '<th class="header">Usuario</th>';
                            } else if ($dataLevel == 'is_editor') {
                                echo '<th class="header">Usuario</th>';
                            } else if ($dataLevel == 'is_Gerente_Ventas') {
                                
                            } else if ($dataLevel == 'is_director') {
                                echo '<th class="header">Usuario</th>';
                            } else {
                                
                            }
                            ?>
                      
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <th class="grupo">Grupo</th>
                        <th class="empresa">Empresa</th>
                        <th class="estado">Estado</th>
                        <th class="ciudad_municipio">Ciudad municipio</th>

                            <!--<th class="nombre_dueno">nombre_dueno</th>
                            <th class="celular_dueno" style="display: none;">celular_dueno</th>
                            <th class="correo_empresarial_dueno" style="display: none;">correo_empresarial_dueno</th>
                            <th class="correo_personal_dueno" style="display: none;">correo_personal_dueno</th>

                            <th class="nombre_ceo">nombre_ceo</th>
                            <th class="celular_ceo"  style="display: none;">celular_ceo</th>
                            <th class="correo_empresarial_ceo"  style="display: none;">correo_empresarial_ceo</th>
                            <th class="correo_personal_ceo"  style="display: none;">correo_personal_ceo</th>

                            <th class="nombre_gerente">nombre_gerente</th>
                            <th class="celular_gerente"  style="display: none;">celular_gerente</th>
                            <th class="correo_empresarial_gerente"  style="display: none;">correo_empresarial_gerente</th>
                            <th class="correo_personal_gerente"  style="display: none;">correo_personal_gerente</th>

                            <th class="nombre_produccion">nombre_produccion</th>
                            <th class="celular_produccion"  style="display: none;">celular_produccion</th>
                            <th class="correo_empresarial_produccion" style="display: none;">correo_empresarial_produccion</th>
                            <th class="correo_personal_produccion"  style="display: none;">correo_personal_produccion</th>

                            <th class="nombre_mtto">nombre_mtto</th>
                            <th class="celular_mtto" style="display: none;">celular_mtto</th>

                            <th class="correo_empresarial_mmto" style="display: none;">correo_empresarial_mmto</th>
                            <th class="correo_personal_mtto" style="display: none;">correo_personal_mtto</th>

                            <th class="nombre_compras">nombre_compras</th>
                            <th class="celular_compras" style="display: none;">celular_compras</th>
                            <th class="correo_empresarial_compras" style="display: none;">correo_empresarial_compras</th>
                            <th class="correo_personal_compras" style="display: none;">correo_personal_compras</th>

                            <th class="nombre_ventas">nombre_ventas</th>
                            <th class="celular_ventas" style="display: none;">celular_ventas</th>
                            <th class="correo_empresarial_ventas" style="display: none;">correo_empresarial_ventas</th>
                            <th class="correo_personal_ventas" style="display: none;">correo_personal_ventas</th>

                            <th class="nombre_otros">nombre_otros</th>
                            <th class="celular_otros" style="display: none;">celular_otros</th>
                            <th class="correo_empresarial_otros" style="display: none;">correo_empresarial_otros</th>
                            <th class="correo_personal_otros" style="display: none;">correo_personal_otros</th>-->

                        <th class="tipo_de_cliente">Tipo de cliente</th>
                        <th class="asesor" style="display: none;">Asesor</th>
                        <th class="estatus_cliente" style="display: none;">Estatus cliente</th>
                        <th class="tamano_cliente" style="display: none;">Tamaño cliente</th>
                        <th class="tipo_mercado" style="display: none;">Tipo mercado</th>
                        <th class="volumen_produccion" style="display: none;">Volumen producción</th>
                        <th class="necesidad" style="display: none;">Necesidad</th>
                        <th class="compromiso" style="display: none;">Compromiso</th>
                        <th class="notas" style="display: none;">Notas</th>
                        <th class="refacciones" style="display: none;">Refacciones</th>
                        <th class="corrugadora" style="display: none;">Corrugadora</th>

                        <th class="info_maquina_1" >Info máquina 1</th>
                        <th class="info_maquina_2" style="display: none;">info máquina 2</th>
                        <th class="info_maquina_3" style="display: none;">info máquina 3</th>
                        <th class="info_maquina_4" style="display: none;">info máquina 4</th>
                        <th class="info_maquina_5" style="display: none;">info máquina 5</th>
                        <th class="info_maquina_6" style="display: none;">info máquina 6</th>
                        <th class="info_maquina_7" style="display: none;">info máquina 7</th>
                       
                        
                        
                        
                         <?php
                            if ($dataLevel == 'is_admin') {
                                echo ' <td class="eliminar">Eliminar</td>
                        <td class="modificar">Modificar</td>';
                            } else if ($dataLevel == 'is_editor') {
                                echo ' <td class="eliminar">Eliminar</td>
                        <td class="modificar">Modificar</td>';
                            } else {
                                echo '
                        <td colpan="2" class="modificar">Modificar</td>';
                            }
                            ?>
                      



                    </tr>
                    </thead>

                    <tbody id="myTable">

                        <?php
                        foreach ($censomaquinaria as $obj) {
                            echo '<tr>';
                           
                            if ($dataLevel == 'is_admin') {
                                echo '<td>' .
                                $obj->getFirst_name() .
                                '</td>'

                                ;
                            } else if ($dataLevel == 'is_editor') {
                                echo '<td>' .
                                $obj->getFirst_name() .
                                '</td>';
                            } else if ($dataLevel == 'is_Gerente_Ventas') {
                                
                            } else if ($dataLevel == 'is_director') {
                                echo '<td>' .
                                $obj->getFirst_name() .
                                '</td>';
                            } else {
                                
                            }
                            
                     //       echo  '<td class="grupo">' . $obj->getGrupo() . '</td>'
//                   . '<td class="empresa" style="display: none;">' . $obj->getEmpresa() . '</td>';-->
                                    
                                    
                                    
                        echo          '<td>'
                    . $obj->getGrupo() . '<b><font face="verdana" color="red">' . ' ' . $obj->getGrupo_temporal() . '</font></b>' .
                    '</td>';     
                                    
                                    
                        ?>




                       

                        <!--Inicio Modal modalNecesidad --> 

    <?php
    if (($obj->getEmpresa() == null)) {
        echo '<td title="Sin Empresa"><center><i style="font-size:12px;color:red" class="fa fa-times-circle" aria-hidden="true"></i></center></td>';
    } else if (($obj->getEmpresa() != null)) {
        ?>

                            <td>
                            <center> 
                                <a title="Da clic para ver los contactos" data-toggle="modal" data-target="#modalNecesidad<?php echo $obj->getId_censomaquinaria() ?>">
        <?php
        echo $obj->getEmpresa() . '<b><font face="verdana" color="red">' . ' ' . $obj->getEmpresa_temporal() . '</font></b>';
        ?>

                            </center>


                            <script>

                            </script>
                            <div class="modal bs-example-modal-lg fade modal fullscreen-modal fade" id="modalNecesidad<?php echo $obj->getId_censomaquinaria() ?>" tabindex="-1" role="dialog" aria-labelledby="modalNecesidad">
                                <div class="modal-dialog modal-xlg" role="document" >
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <center>        
                                                <a title="Da clic para regresar" style="color:#000000" href="<?php echo site_url(); ?>CensoMaquinaria">    
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </a></center>

                                            <h4 class="modal-title" id="modalNecesidad">Empresa :  <?php echo $obj->getEmpresa() ?> <br> Grupo :  <?php echo $obj->getGrupo() ?> </h4>
                                        </div>
                                        <div class="modal-body">
                                            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.18/r-2.2.2/datatables.min.css"/>
                                            <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.18/r-2.2.2/datatables.min.js"></script>
                                            <script>
                            function uno(src)
                            {
                                with (document)
                                {
                                    var cel = getElementById(src);
                                    with (cel)
                                    {
                                        style.backgroundColor = "yellow";
                                        style.cursor = 'hand';
                                    }
                                    if (src != 1)
                                    {
                                        getElementById('1').style.backgroundColor = "white";
                                    }
                                    fila('2');
                                    getElementById('x').value = src;
                                }
                            }
                            function dos(src)
                            {
                                with (document)
                                {
                                    var cel = getElementById(src);
                                    with (cel)
                                    {
                                        style.backgroundColor = "white";
                                        style.cursor = 'default';
                                    }
                                }
                            }
                            function fila(obj)
                            {
                                with (document)
                                {
                                    var celda = getElementById('x').value;
                                    if (celda != "")
                                    {
                                        var marcar = getElementById(celda);
                                        switch (obj)
                                        {
                                            case "1":
                                                marcar.style.backgroundColor = "yellow";
                                                break
                                            case "2":
                                                marcar.style.backgroundColor = "white";
                                                break
                                        }
                                    }
                                }
                            }
                            function ini()
                            {
                                with (document)
                                {
                                    getElementById('1').style.backgroundColor = "yellow";
                                }
                            }
                                            </script>






                                            <table border="1" class="table dataTables">

                                                <tr bgcolor="red">
                                                    <td bgcolor="#1DDDFF">Puesto</td>
                                                    <td bgcolor="#1DDDFF">Nombre</td>
                                                    <td bgcolor="#1DDDFF">Celular</td>

                                                    <td bgcolor="#1DDDFF">Correo empresarial </th>
                                                    <td bgcolor="#1DDDFF">Correo Personal </th>
                                                </tr>
                                                <tr id="1" onmouseover=uno('1'); onmouseout=dos('1');>
                                                    <td> Dueño </td>
                                                    <td> <?php echo $obj->getNombre_dueno() ?></td>
                                                    <td> <?php echo $obj->getCelular_dueno() ?></td>
                                                    <td> <?php echo $obj->getCorreo_empresarial_dueno() ?></td>
                                                    <td> <?php echo $obj->getCorreo_personal_dueno() ?></td>


                                                </tr>


                                                <tr id=2 onmouseover=uno('2'); onmouseout=dos('2');>
                                                    <td> Ceo </td>
                                                    <td> <?php echo $obj->getNombre_ceo() ?></td>
                                                    <td> <?php echo $obj->getCelular_ceo() ?></td>
                                                    <td> <?php echo $obj->getCorreo_empresarial_ceo() ?></td>
                                                    <td> <?php echo $obj->getCorreo_personal_ceo() ?></td>


                                                </tr>


                                                <tr id=3 onmouseover=uno('3'); onmouseout=dos('3');>
                                                    <td> Gerente </td>
                                                    <td> <?php echo $obj->getNombre_gerente() ?></td>
                                                    <td> <?php echo $obj->getCelular_gerente() ?></td>
                                                    <td> <?php echo $obj->getCorreo_empresarial_gerente() ?></td>
                                                    <td> <?php echo $obj->getCorreo_personal_gerente() ?></td>


                                                </tr>

                                                <tr id=4 onmouseover=uno('4'); onmouseout=dos('4');>
                                                    <td> Producción </td>
                                                    <td> <?php echo $obj->getNombre_produccion() ?></td>
                                                    <td> <?php echo $obj->getCelular_produccion() ?></td>
                                                    <td> <?php echo $obj->getCorreo_empresarial_produccion() ?></td>
                                                    <td> <?php echo $obj->getCorreo_personal_produccion() ?></td>


                                                </tr>


                                                <tr id=5 onmouseover=uno('5'); onmouseout=dos('5');>
                                                    <td> Mantenimiento </td>
                                                    <td> <?php echo $obj->getNombre_mtto() ?></td>
                                                    <td> <?php echo $obj->getCelular_mtto() ?></td>
                                                    <td> <?php echo $obj->getCelular_mtto() ?></td>
                                                    <td> <?php echo $obj->getCelular_mtto() ?></td>


                                                </tr>


                                                <tr id=6 onmouseover=uno('6'); onmouseout=dos('6');>
                                                    <td> Compras </td>
                                                    <td> <?php echo $obj->getNombre_compras() ?></td>
                                                    <td> <?php echo $obj->getCelular_compras() ?></td>
                                                    <td> <?php echo $obj->getCorreo_empresarial_compras() ?></td>
                                                    <td> <?php echo $obj->getCorreo_personal_compras() ?></td>


                                                </tr>


                                                <tr id=7 onmouseover=uno('7'); onmouseout=dos('7');>
                                                    <td> Ventas </td>
                                                    <td> <?php echo $obj->getNombre_ventas() ?></td>
                                                    <td> <?php echo $obj->getCelular_ventas() ?></td>
                                                    <td> <?php echo $obj->getCorreo_empresarial_ventas() ?></td>
                                                    <td> <?php echo $obj->getCorreo_personal_ventas() ?></td>


                                                </tr>

                                                <tr id=8 onmouseover=uno('8'); onmouseout=dos('8');>
                                                    <td> Otros </td>
                                                    <td> <?php echo $obj->getNombre_otros() ?></td>
                                                    <td> <?php echo $obj->getCelular_otros() ?></td>
                                                    <td> <?php echo $obj->getCorreo_empresarial_otros() ?></td>
                                                    <td> <?php echo $obj->getCorreo_personal_otros() ?></td>


                                                </tr>



                                            </table>





                                        </div>
                                        <div class="modal-footer">
                                            <center>           <a title="Da clic para regresar" style="color:#000000" href="<?php echo site_url(); ?>CensoMaquinaria">             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><font size="3">Cerrar</font></button>
                                                </a></center>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            </td>


        <?php
    }







    echo '<td class="estado" >' . $obj->getEstado() . '</td>'
    . '<td class="ciudad_municipio" >' . $obj->getCiudad_municipio() . '</td>'
    /* . '<td class="nombre_dueno">' . $obj->getNombre_dueno() . '</td>'
      . '<td class="celular_dueno" style="display: none;">' . $obj->getCelular_dueno() . '</td>'
      . '<td class="correo_empresarial_dueno" style="display: none;">' . $obj->getCorreo_empresarial_dueno() . '</td>'
      . '<td class="correo_personal_dueno" style="display: none;">' . $obj->getCorreo_personal_dueno() . '</td>'
      . '<td class="nombre_ceo" >' . $obj->getNombre_ceo() . '</td>'
      . '<td class="celular_ceo"  style="display: none;">' . $obj->getCelular_ceo() . '</td>'
      . '<td class="correo_empresarial_ceo"  style="display: none;">' . $obj->getCorreo_empresarial_ceo() . '</td>'
      . '<td class="correo_personal_ceo"  style="display: none;">' . $obj->getCorreo_personal_ceo() . '</td>'
      . '<td class="nombre_gerente">' . $obj->getNombre_gerente() . '</td>'
      . '<td class="celular_gerente"  style="display: none;">' . $obj->getCelular_gerente() . '</td>'
      . '<td class="correo_empresarial_gerente"  style="display: none;">' . $obj->getCorreo_empresarial_gerente() . '</td>'
      . '<td class="correo_personal_gerente"  style="display: none;">' . $obj->getCorreo_personal_gerente() . '</td>'
      . '<td class="nombre_produccion">' . $obj->getNombre_produccion() . '</td>'
      . '<td class="celular_produccion" style="display: none;">' . $obj->getCelular_produccion() . '</td>'
      . '<td class="correo_empresarial_produccion" style="display: none;">' . $obj->getCorreo_empresarial_produccion() . '</td>'
      . '<td class="correo_personal_produccion" style="display: none;">' . $obj->getCorreo_personal_produccion() . '</td>'
      . '<td class="nombre_mtto">' . $obj->getNombre_mtto() . '</td>'
      . '<td class="celular_mtto" style="display: none;">' . $obj->getCelular_mtto() . '</td>'
      . '<td class="correo_empresarial_mmto" style="display: none;">' . $obj->getCorreo_empresarial_mmto() . '</td>'
      . '<td class="correo_personal_mtto" style="display: none;">' . $obj->getCorreo_personal_mtto() . '</td>'
      . '<td class="nombre_compras">' . $obj->getNombre_compras() . '</td>'
      . '<td class="celular_compras" style="display: none;">' . $obj->getCelular_compras() . '</td>'
      . '<td class="correo_empresarial_compras" style="display: none;">' . $obj->getCorreo_empresarial_compras() . '</td>'
      . '<td class="correo_personal_compras" style="display: none;">' . $obj->getCorreo_personal_compras() . '</td>'
      . '<td class="nombre_ventas">' . $obj->getNombre_ventas() . '</td>'
      . '<td class="celular_ventas" style="display: none;">' . $obj->getCelular_ventas() . '</td>'
      . '<td class="correo_empresarial_ventas" style="display: none;">' . $obj->getCorreo_empresarial_ventas() . '</td>'
      . '<td class="correo_personal_ventas" style="display: none;">' . $obj->getCorreo_personal_ventas() . '</td>'
      . '<td class="nombre_otros">' . $obj->getNombre_otros() . '</td>'
      . '<td class="celular_otros" style="display: none;">' . $obj->getCelular_otros() . '</td>'
      . '<td class="correo_empresarial_otros" style="display: none;">' . $obj->getCorreo_empresarial_otros() . '</td>'
      . '<td class="correo_personal_otros" style="display: none;">' . $obj->getCorreo_personal_otros() . '</td>' */
    . '<td class="tipo_de_cliente">' . $obj->getTipo_de_cliente() . '</td>'
    . '<td class="asesor" style="display: none;">' . $obj->getAsesor() . '</td>'
    . '<td class="estatus_cliente" style="display: none;">' . $obj->getEstatus_cliente() . '</td>'
    . '<td class="tamano_cliente" style="display: none;">' . $obj->getTamano_cliente() . '</td>'
    . '<td class="tipo_mercado" style="display: none;">' . $obj->getTipo_mercado() . '</td>'
    . '<td class="volumen_produccion" style="display: none;">' . $obj->getVolumen_produccion() . '</td>'
    . '<td class="necesidad" style="display: none;">' . $obj->getNecesidad() . '</td>'
    . '<td class="compromiso" style="display: none;">' . $obj->getCompromiso() . '</td>'
    . '<td class="notas" style="display: none;">' . $obj->getNotas() . '</td>'
    . '<td class="refacciones" style="display: none;">' . $obj->getRefacciones() . '</td>'
    . '<td class="corrugadora" style="display: none;">' . $obj->getCorrugadora() . '</td>'
    . '<td class="info_maquina_1" title="' . $obj->getEmpresa() . '">' . $obj->getInfo_maquina_1() . '</td>'
    . '<td class="info_maquina_2" style="display: none;" title="' . $obj->getEmpresa() . '">' . $obj->getInfo_maquina_2() . '</td>'
    . '<td class="info_maquina_3" style="display: none;" title="' . $obj->getEmpresa() . '">' . $obj->getInfo_maquina_3() . '</td>'
    . '<td class="info_maquina_4" style="display: none;" title="' . $obj->getEmpresa() . '">' . $obj->getInfo_maquina_4() . '</td>'
    . '<td class="info_maquina_5" style="display: none;" title="' . $obj->getEmpresa() . '">' . $obj->getInfo_maquina_5() . '</td>'
    . '<td class="info_maquina_6" style="display: none;" title="' . $obj->getEmpresa() . '">' . $obj->getInfo_maquina_6() . '</td>'
    . '<td class="info_maquina_7" style="display: none;" title="' . $obj->getEmpresa() . '">' . $obj->getInfo_maquina_7() . '</td>'
    ;



    //compara si es administrador
    if ($dataLevel == 'is_admin') {
        echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'CensoMaquinaria/eliminar/' . $obj->getId_censomaquinaria() . '"><button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'CensoMaquinaria/actualizar/' . $obj->getId_censomaquinaria() . '"><button type="button" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-edit"></button></a></td>';
    } else if ($dataLevel == 'is_editor') {
        echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'CensoMaquinaria/eliminar/' . $obj->getId_censomaquinaria() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'CensoMaquinaria/actualizar/' . $obj->getId_censomaquinaria() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
    } else if ($dataLevel == 'is_Gerente_Ventas') {
        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'CensoMaquinaria/actualizar/' . $obj->getId_censomaquinaria() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
    } else if ($dataLevel == 'is_maquinaria') {
        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'CensoMaquinaria/actualizar/' . $obj->getId_censomaquinaria() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
    } else if ($dataLevel == 'is_director') {
        
    } else {
        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'CensoMaquinaria/actualizar/' . $obj->getId_censomaquinaria() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
    }
}
?>





                    </tr>
                    </tbody>
                </table>


            </div> 
        </div>

    </div>


</div>
</body>
</html>
