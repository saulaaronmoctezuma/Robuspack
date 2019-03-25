<!--
 * @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 16/11/2018 Hora 2:34 pm
 * Sistema de Control Robuspack
 */-->
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
                if (confirm("¿ Realmente desea eliminarlo?")) {

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



    </head>


    <div class="container" style="margin-top:1px;">

        <center>  <h1>Bitácora</h1></center>

        <div class="alert alert-info alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Bienvenido</strong> Agrega, Modifica o Elimina sus Datos
        </div>
        <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
            <input type="text" id="buscandoIguales" placeholder="Escribe para buscar..."  class="form-control" />
        </div>


        <div class="row">
            <div class="text-center">
                <form method="post" action="<?php echo base_url(); ?>BitacoraMtto/agregar">
                    <input type="submit" name="agregar"  title="Da clic para agregar un nuevo registro" class="btn btn-success" value="Agregar Nuevo Registro" />
                </form>
                <br>

                <!--<form method="post" action="<?php echo base_url(); ?>ExportarExcel/crearExcelRefacciones">

                    <button  class="btn btn-info" title="Da clic para exportar los datos a Excel" style="font-size:16px;color:white"><font color="white">Exportar</font> <i class="fa fa-file-excel-o"></i></button>
                </form>   -->


            </div><BR>
        </div>
    </div>


    <div class="container" style="margin-top:1px;">


        <div class="table-responsive">



            <table class="table table-hover table-bordered table-striped">
                <MARQUEE SCROLLDELAY =200> </MARQUEE>


                <thead>
                    <tr  >
                        <th style="text-align: center">Imprimir PDF</th>

                        <th class="header" colspan="2" style="text-align: center" >Acción</th>
                        <?php
                        if ($dataLevel == 'is_admin') {
                            echo '<th class="header">Usuario</th>';
                        } else if ($dataLevel == 'is_jefe_mantenimiento') {
                            echo '<th class="header">Usuario</th>';
                            
                            ;
                        } else if ($dataLevel == 'is_editor') {
                            echo '<th class="header">Usuario</th>';
                            
                        } else {
                            
                        }
                        ?>

                        <th style="text-align: center">Cliente</th>
                        <th style="text-align: center">Modelo</th>
                        <th style="text-align: center">Maquina</th>
                        <th style="text-align: center">Fecha</th>
                        <th style="text-align: center">OC</th>
                        <th style="text-align: center">Tipo</th>
                        <th style="text-align: center">Mantenimiento</th>

<!--<th>Descripción de Actividades Efectuadas</th>-->
                        <th style="text-align: center">Refacciones Usadas </th>



                        <th style="text-align: center">Refacciones Recomendadas</th>


                        <th style="text-align: center">Recomendaciones</th>
                        <th style="text-align: center">Próxima Fecha de Intervención</th>



                    </tr>
                </thead>



                <?php
                foreach ($bitacora_mtto as $obj) {




                    echo '<tr>';

                    echo '<td>     <a target="_blank" title="Descargar la ficha técnica en PDF" href="' . base_url() . 'Reporte/pdfBitacoraMantenimiento/' . $obj->getId_bitacora() . '"  ><center><i style="font-size:18px;color:red" class="fa fa-file-pdf-o"></i></center></a></td>
				
				';
                    //compara si es administrador
                    if ($dataLevel == 'is_admin') {
                        echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'BitacoraMtto/eliminar/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'BitacoraMtto/obtener/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    } else if ($dataLevel == 'is_jefe_mantenimiento') {
                        echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'BitacoraMtto/eliminar/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'BitacoraMtto/obtener/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    } else if ($dataLevel == 'is_mantenimiento') {
                        echo '<td colspan="2"><a title="Da clic para modificar el registro" href="' . base_url() . 'BitacoraMtto/obtener/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    } else if ($dataLevel == 'is_maquinaria_refacciones') {
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'BitacoraMtto/obtener/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    }else if ($dataLevel == 'is_editor') {
                        echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'BitacoraMtto/eliminar/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'BitacoraMtto/obtener/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    }
                    
                    
                    if ($dataLevel == 'is_admin') {
                        echo '<td>'
                        . $obj->getFirst_name() .
                        '</td>';
                    } else if ($dataLevel == 'is_jefe_mantenimiento') {
                        echo '<td>'
                        . $obj->getFirst_name() .
                        '</td>';
                    } else if ($dataLevel == 'is_mantenimiento') {
                        
                    } else if ($dataLevel == 'is_editor') {
                        echo '<td>'
                        . $obj->getFirst_name() .
                        '</td>';
                    };
                    echo '<td>' . $obj->getPlanta() .
                    '</td>'
                    . '<td>'
                    . $obj->getModelo() .
                    '</td>'
                    . '<td>'
                    . $obj->getMaquina() .
                    '</td>'
                    . '<td>'
                    . $obj->getFecha() .
                    '</td>'
                    . '<td>'
                    . $obj->getOc() .
                    '</td>'
                    . '<td>'
                    . $obj->getTipo() .
                    '</td>'
                    . '<td>'
                    . $obj->getMantenimiento() .
                    '</td>';



                    


                    // . '<td>'
                    //. $obj->getDes_acti() .
                    // '</td>'
                    echo '<td>'
                    . $obj->getRef_usadas1() . ' ' .
                    $obj->getRef_usadas2() . ' ' .
                    $obj->getRef_usadas3() . ' ' .
                    $obj->getRef_usadas4() . ' '
                    . $obj->getRef_usadas5() . ' '
                    . $obj->getRef_usadas6() . ' '
                    . $obj->getRef_usadas7() . ' '
                    . $obj->getRef_usadas8() . ' '
                    . $obj->getRef_usadas9() . ' '
                    . $obj->getRef_usadas10() . ' '
                    . $obj->getRef_usadas11() . ' '
                    . $obj->getRef_usadas12() . ' '
                    . $obj->getRef_usadas13() . ' '
                    . $obj->getRef_usadas14() . ' '
                    . $obj->getRef_usadas15() . ' '
                    . $obj->getRef_usadas16() . ' '
                    . $obj->getRef_usadas17() . ' '
                    . $obj->getRef_usadas18() . ' '
                    . $obj->getRef_usadas19() . ' '
                    . $obj->getRef_usadas20() . ' '
                    . $obj->getRef_usadas21() . ' '
                    . $obj->getRef_usadas23() . ' '
                    . $obj->getRef_usadas24() . ' '
                    . $obj->getRef_usadas25() . ' '
                    . $obj->getRef_usadas26() . ' '
                    . $obj->getRef_usadas27() . ' '
                    . $obj->getRef_usadas28() . ' '
                    . $obj->getRef_usadas29() . ' '
                    . $obj->getRef_usadas30() .
                    '</td>'
                    . '<td>'
                    . $obj->getRef_recomen1() . ' '
                    . $obj->getRef_recomen2() . ' '
                    . $obj->getRef_recomen3() . ' '
                    . $obj->getRef_recomen4() . ' '
                    . $obj->getRef_recomen5() . ' '
                    . $obj->getRef_recomen6() . ' '
                    . $obj->getRef_recomen7() . ' '
                    . $obj->getRef_recomen8() . ' '
                    . $obj->getRef_recomen9() . ' '
                    . $obj->getRef_recomen10() . ' '
                    . $obj->getRef_recomen11() . ' '
                    . $obj->getRef_recomen12() . ' '
                    . $obj->getRef_recomen13() . ' '
                    . $obj->getRef_recomen14() . ' '
                    . $obj->getRef_recomen15() . ' '
                    . $obj->getRef_recomen16() . ' '
                    . $obj->getRef_recomen18() . ' '
                    . $obj->getRef_recomen19() . ' '
                    . $obj->getRef_recomen20() . ' '
                    . $obj->getRef_recomen21() . ' '
                    . $obj->getRef_recomen22() . ' '
                    . $obj->getRef_recomen23() . ' '
                    . $obj->getRef_recomen24() . ' '
                    . $obj->getRef_recomen25() . ' '
                    . $obj->getRef_recomen26() . ' '
                    . $obj->getRef_recomen27() . ' '
                    . $obj->getRef_recomen28() . ' '
                    . $obj->getRef_recomen29() . ' '
                    . $obj->getRef_recomen30() .
                    '</td>'
                    . '<td>'
                    . $obj->getRecomendaciones() .
                    '</td>'
                    . '<td>'
                    . $obj->getProxima_inter() .
                    '</td>'
                    ;
                }
                ?>
            </table>
        </div>

    </div>
</body>
</html>

