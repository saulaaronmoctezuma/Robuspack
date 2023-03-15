<!--
 * @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 26/03/2019 Hora 10:15 pm
    Fecha : Ultimo Cambio 03/05/2019 Hora 10:36 pm
    Fecha : Ultimo Cambio 06/06/2019 Hora 12:06- pm
        Fecha : Ultimo Cambio 29/07/2019 Hora 10:07 am
 * Sistema de Control Robuspack
 */
-->

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
<<<<<<< HEAD
            
            
            
                function disableIE() {
    if (document.all) {
        return false;
    }
}
function disableNS(e) {
    if (document.layers || (document.getElementById && !document.all)) {
        if (e.which==2 || e.which==3) {
            return false;
        }
    }
}
if (document.layers) {
    document.captureEvents(Event.MOUSEDOWN);
    document.onmousedown = disableNS;
} 
else {
    document.onmouseup = disableNS;
    document.oncontextmenu = disableIE;
}
document.oncontextmenu=new Function("return false");
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        </script>


        <!-- Para traerse el rol que esta registrado-->
        <?php
        //check user level
        $dataLevel = $this->userlevel->checkLevel($role);
<<<<<<< HEAD
         $id_usuario = $this->userlevel->id($id);
=======
        $id_usuario = $this->userlevel->id($id);

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        $site_title = $result->site_title;
        //check user level
        ?>
    <BR>
<<<<<<< HEAD
    <body ondragstart1="return false" onselectstart1="return false" oncontextmenu1="return false">
        
    <div class="container">
        <center>  <h1> Control de Maquinaria</h1></center>
        <BR>
        <div class="alert alert-info alert-warning">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Bienvenido1</strong> Agrega, Modifica o Elimina sus Datos
        </div>






        <?php
        if ($dataLevel == 'is_editor') {
           /*   echo '<left> <h1>Buscar</h1> </left>
        <input type="text" id="buscandoIguales" placeholder="Escribe para buscar..."  class="form-control" />
        ';*/
        } else if ($dataLevel == 'is_admin') {
            
        } else if ($dataLevel == 'is_credito') {
            echo ' <input type="text" id="buscandoIguales" placeholder="Escribe para buscar..."  class="form-control" />';
        } else if ($dataLevel == 'is_refacciones') {
            
        }else if ($dataLevel == 'is_jefe_mantenimiento') {
            
        } else {
            /*echo '<left> <h1>Buscar</h1> </left>
        <input type="text" id="buscandoIguales" placeholder="Escribe para buscar..."  class="form-control" />
        ';*/
        }
        ?>












    </div>
    <br> 

<?php
if ($dataLevel == 'is_admin') {

    echo '<div class="text-center">
        <a class="btn btn-success" href="' . base_url('verificacion/agregar') . '" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Catálogo">Agregar Nuevo Registro</a>

    </div>';
} else if ($dataLevel == 'is_editor') {

    echo '<div class="text-center">
        <a  class="btn btn-success" href="' . base_url('verificacion/agregar') . '" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Catálogo">Agregar Nuevo Registro</a>

    </div>';
} else if ($dataLevel == 'is_logistica') {

    echo '<div class="text-center">
        <a  class="btn btn-success" href="' . base_url('verificacion/agregar') . '" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Catálogo">Agregar Nuevo Registro</a>

    </div>';
}else if ($dataLevel == 'is_Gerente_Ventas') {

    echo '<div class="text-center">
        <a  class="btn btn-success" href="' . base_url('verificacion/agregar') . '" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Catálogo">Agregar Nuevo Registro</a>

    </div>';
} else if ($dataLevel == 'is_credito') {
    
} else if ($dataLevel == 'is_refacciones') {
    
} else {
    
}
?>
    <div class="container" style="margin-top:1px;" >


        <div class="table-responsive">
            <table class="table table-bordered table-striped"  >

        </div>

        Total de Registros:

<?php
foreach ($totalRegistroPlacas as $fila) {
    ?>

            <b><?= $fila->total_registros_placas ?></b>

            <?php
        }
        ?>


              <?php
                     if ($dataLevel == 'is_editor') {
        ?>
        < <div class="text-center form-group col-xs-2">


                <form method="post" action="<?php echo base_url(); ?>ExportarExcel/crearExcelControlMaquinaria">

                    <button  class="btn btn-info" title="Da clic para exportar los datos a Excel" style="font-size:16px;color:white"><font color="white">Exportar</font> <i class="fa fa-file-excel-o"></i></button>
                </form>   
            </div> 
       <?php
    } else if ($dataLevel == 'is_admin') {
       ?>
        <div class="text-center form-group col-xs-2">


                <form method="post" action="<?php echo base_url(); ?>ExportarExcel/crearExcelControlMaquinaria">

                    <button  class="btn btn-info" title="Da clic para exportar los datos a Excel" style="font-size:16px;color:white"><font color="white">Exportar</font> <i class="fa fa-file-excel-o"></i></button>
                </form>   
            </div> 
       <?php
    } 
    ?>
 

        <table id="example"  border="1" class="table table-bordered table-striped">
            <MARQUEE SCROLLDELAY =200> </MARQUEE>
            <thead>
                <tr>

                    <th style="text-align: center">No Máquina</th>
                    <th  style="text-align: center">Modelo</th>
                    <th  style="text-align: center">Empresa</th>
                    
                    
                    <?php
                     if ($dataLevel == 'is_jefe_mantenimiento') {
        
    } else {
       ?>
        <th  style="text-align: center">Serie</th>
       <?php
    } 
    ?>
                   
                    <th  style="text-align: center">Cliente </th>
=======
    <!--<body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">-->
    <div class="container">


        <?php
        if ($dataLevel == 'is_admin') {

            echo '<div class="text-center">
        <a class="btn btn-success" href="' . base_url('verificacion/agregar') . '" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Catálogo">Agregar Nuevo Registro</a>

    </div>';
        } else if ($dataLevel == 'is_editor') {

            echo '<div class="text-center">
        <a  class="btn btn-success" href="' . base_url('verificacion/agregar') . '" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Catálogo">Agregar Nuevo Registro</a>

    </div>';
        } else if ($dataLevel == 'is_logistica') {

            echo '<div class="text-center">
        <a  class="btn btn-success" href="' . base_url('verificacion/agregar') . '" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Catálogo">Agregar Nuevo Registro</a>

    </div>';
        } else if ($dataLevel == 'is_Gerente_Ventas') {

            echo '<div class="text-center">
        <a  class="btn btn-success" href="' . base_url('verificacion/agregar') . '" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Catálogo">Agregar Nuevo Registro</a>

    </div>';
        } else if ($dataLevel == 'is_credito') {
            
        } else if ($dataLevel == 'is_refacciones') {
            
        } else {
            
        }
        ?>
        <div class="container" style="margin-top:1px;" >


            <div class="table-responsive">
                <table class="table table-bordered table-striped"  >

            </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606





<<<<<<< HEAD
<?php
if (($dataLevel == 'is_admin')&&($id_usuario == 1)) {
    echo '<th>No Pedimento</th>';
} else if (($dataLevel == 'is_editor')&&($id_usuario == 3)) {
    echo '<th>No Pedimento</th>';
} else if ($dataLevel == 'is_logistica') {
    echo '<th>No Pedimento</th>';
} else if ($dataLevel == 'is_credito1') {
    echo '<th  style="text-align: center">No Pedimento</th>';
} else if ($dataLevel == 'is_servicio_a_clientes') {
    echo '<th  style="text-align: center">No Pedimento</th>';
} else {
    
}
?>
<th  style="text-align: center">Observación </th>
<th  style="text-align: center">Comentario </th>


                    <?php
                    if ($dataLevel == 'is_admin') {
                        echo ' <th>Pedimento PDF</th>';
                    } else if (($dataLevel == 'is_editor')&&($id_usuario == 3)) {
                        echo ' <th>Pedimento PDF</th>';
                    } else if ($dataLevel == 'is_logistica') {
                        echo ' <th>Pedimento PDF</th>';
                    } else if ($dataLevel == 'is_credito1') {
                        echo ' <th  style="text-align: center">Pedimento PDF</th>';
                    } else if ($dataLevel == 'is_refacciones') {
                        
                    } else {
                        
                    }
                    ?>
=======
            <?php
            if ($dataLevel == 'is_editor') {
                
            } else if ($dataLevel == 'is_admin') {
                echo '<left> <h1>Buscar</h1> </left>
        <input type="text" id="buscandoIguales" placeholder="Escribe para buscar..."  class="form-control" />
        ';
            } else if ($dataLevel == 'is_logistica') {
                
            } else if ($dataLevel == 'is_refacciones') {
                
            } else {
                
            }
            ?>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606







<<<<<<< HEAD
   
        
        
        
                    <?php
                     if (($dataLevel == 'is_servicio_a_clientes')&&($id_usuario == 58)) {
                          ?>
                              
                            <th  style="text-align: center">Placa</th>
                        <?php
                        
                    } else {
                        ?>
                              
                            <th  style="text-align: center">Placa</th>
                        <?php
                    }
                    ?>
        
      

<?php
if ($dataLevel == 'is_admin') {
    echo ' <th>No Factura</th><th>Factura</th><th>Refacciones</th><th>Contrato</th>';
} else if ($dataLevel == 'is_editor1') {
    echo ' ';
} else if (($dataLevel == 'is_editor')&&($id_usuario == 3)) {
    echo ' <th>No Factura</th><th>Factura</th><th>Refacciones</th> <th>Contrato</th>';
} 


if ($dataLevel == 'is_logistica') {
    echo ' <th>No Factura</th><th>Factura</th>';
} else if ($dataLevel == 'is_credito') {
    echo ' <th>No Factura</th><th>Factura</th>';
} else if ($dataLevel == 'is_mantenimiento') {
    echo '<th>Refacciones</th>';
} else if ($dataLevel == 'is_refacciones') {
    echo '<th>Refacciones</th>';
} else if ($dataLevel == 'is_jefe_mantenimiento') {
   // echo '<th>Refacciones</th><!--<th>Contrato</th>-->';
} else if (($dataLevel == 'is_servicio_a_clientes')&&($id_usuario == 18)) {
    echo '<th>No Factura</th><th>Factura</th><th>Refacciones</th>';
}else if (($dataLevel == 'is_servicio_a_clientes')&&($id_usuario == 58)) {
 
    echo '<th>No Factura</th>';
}else if (($dataLevel == 'is_servicio_a_clientes')) {
 
      echo '<th>No Factura</th>';
}
else if ($dataLevel == 'is_Gerente_Ventas') {
     echo ' <th>No Factura</th><th>Factura</th>';
}  else {
    
}
?>



                    <?php
                    if ($dataLevel == 'is_admin') {
                        echo '<th class="header" colspan="1" style="text-align: center">Eliminar</th><th class="header" colspan="1" align="center" >Modificar</th>';
                    } else if ($dataLevel == 'is_editor') {
                        echo '<th class="header" colspan="1" style="text-align: center">Eliminar</th><th class="header" colspan="1" align="center" >Modificar</th>';
                    } else if ($dataLevel == 'is_logistica') {
                        echo '<th class="header" colspan="1" style="text-align: center">Eliminar</th><th class="header" colspan="1" align="center" >Modificar</th>';
                    } else if ($dataLevel == 'is_credito') {
                        echo '<th class="header" colspan="2" align="center" >Modificar</th>';
                    } else if ($dataLevel == 'is_refacciones') {
                        echo '<th class="header" colspan="1" align="center" >Modificar</th>';
                    } else if ($dataLevel == 'is_jefe_mantenimiento') {
                     //   echo '<th class="header" colspan="1" align="center" >Modificar</th>';
                    } else if ($dataLevel == 'is_mantenimiento') {
                        echo '<th class="header" colspan="1" align="center" >Modificar</th>';
                    } else if ($dataLevel == 'is_editor') {
                        echo '<th class="header" colspan="2" style="text-align: center">Eliminar</th><th class="header" colspan="2" align="center" >Modificar</th>';
                    }else if ($dataLevel == 'is_Gerente_Ventas') {
                        echo '<th class="header" colspan="1" align="center" >Modificar</th>';
                    } else {
                        
                    }
                    ?>


                </tr>
            </thead>

<?php
foreach ($placa as $obj) {
    echo '<tr>';


    echo '<td>';
    echo $obj->getNo_maqui() .
    '</td>'
    . '<td>'
    . $obj->getModelo() .
    '</td>'
    . '<td>'
    . $obj->getEmpresa() .
    '</td>';
    
    if ($dataLevel == 'is_jefe_mantenimiento') {
        
    } else {
        echo
        '<td>'
    . $obj->getSerie() .
    '</td>';
    } 
    
    echo '<td>'
    . $obj->getCliente() . '<b><font face="verdana" color="red">' . ' ' . $obj->getCliente_temporal() . '</font></b>' .
    '</td>';
=======





        </div>
        <br> 


        <div class="container" style="margin-top:1px;" >


            <div class="table-responsive">
                <table class="table table-bordered table-striped"  >

            </div>

            Total de Registros:

            <?php
            foreach ($totalRegistroPlacas as $fila) {
                ?>

                <b><?= $fila->total_registros_placas ?></b>

                <?php
            }
            ?>





            <table id="mydatatable"  border="1" class="table table-bordered table-striped">
                <MARQUEE SCROLLDELAY =200> </MARQUEE>
                <thead>
                    <tr>
                        <?php
                        if ($dataLevel == 'is_Gerente_Ventas') {
                            
                        } else {
                            echo '   ';
                        }
                        ?>


                        <th style="text-align: center">No Máquina</th>
                        <th  style="text-align: center">Modelo</th>
                        <th  style="text-align: center">Empresa</th>
                        <th  style="text-align: center">Serie</th>
                        <th  style="text-align: center">Cliente </th>





                        <?php
                        if (($dataLevel == 'is_admin')) {
                            echo '<th>No Pedimento</th>';
                        } else if (($dataLevel == 'is_editor') && (($id_usuario == 3))) {
                            echo '<th>No Pedimento</th>';
                        } else if ($dataLevel == 'is_logistica') {
                            echo '<th>No Pedimento</th>';
                        } else if ($dataLevel == 'is_credito') {
                            echo '<th  style="text-align: center">No Pedimento</th>';
                        } else if ($dataLevel == 'is_refacciones') {
                            
                        } else {
                            
                        }
                        ?>

                        <th  style="text-align: center">Observación </th>
                        <th  style="text-align: center">Comentario </th>

                        <?php
                        if ($dataLevel == 'is_admin') {
                            echo ' <th>Pedimento PDF</th>';
                        } else if (($dataLevel == 'is_editor') && ($id_usuario == 3)) {
                            echo ' <th>Pedimento PDF</th>';
                        } else if ($dataLevel == 'is_logistica') {
                            echo ' <th>Pedimento PDF</th>';
                        } else if ($dataLevel == 'is_credito') {
                            echo ' <th  style="text-align: center">Pedimento PDF</th>';
                        } else if ($dataLevel == 'is_refacciones') {
                            
                        } else {
                            
                        }
                        ?>







                        <th>Placa </th>


                        <?php
                        if ($dataLevel == 'is_admin') {
                            echo ' <th>No Factura</th><th>Factura</th><th>Refacciones</th><th>Contrato</th>';
                        } else if ($dataLevel == 'is_editor') {
                            echo ' <th>No Factura</th><th>Factura</th><th>Refacciones</th><th>Contrato</th>';
                        } else if ($dataLevel == 'is_logistica') {
                            echo ' <th>No Factura</th><th>Factura</th>';
                        } else if ($dataLevel == 'is_credito') {
                            echo ' <th>No Factura</th><th>Factura</th>';
                        } else if ($dataLevel == 'is_mantenimiento') {
                            echo '<th>Refacciones</th>';
                        } else if ($dataLevel == 'is_refacciones') {
                            echo '<th>Refacciones</th>';
                        } else if ($dataLevel == 'is_jefe_mantenimiento') {
                            echo '<th>Refacciones</th><th>Contrato</th>';
                        } else if ($dataLevel == 'is_Gerente_Ventas') {
                            echo ' <th>No Factura</th><th>Factura</th>';
                        } else {
                            
                        }
                        ?>




                        <?php
                        if ($dataLevel == 'is_admin') {
                            echo '<th class="header" colspan="1" style="text-align: center">Eliminar</th><th class="header" colspan="1" align="center" >Modificar</th>';
                        } else if ($dataLevel == 'is_editor') {
                            echo '<th class="header" colspan="1" style="text-align: center">Eliminar</th><th class="header" colspan="1" align="center" >Modificar</th>';
                        } else if ($dataLevel == 'is_logistica') {
                            echo '<th class="header" colspan="1" style="text-align: center">Eliminar</th><th class="header" colspan="1" align="center" >Modificar</th>';
                        } else if ($dataLevel == 'is_credito') {
                            echo '<th class="header" colspan="2" align="center" >Modificar</th>';
                        } else if ($dataLevel == 'is_refacciones') {
                            echo '<th class="header" colspan="1" align="center" >Modificar</th>';
                        } else if ($dataLevel == 'is_jefe_mantenimiento') {
                            echo '<th class="header" colspan="1" align="center" >Modificar</th>';
                        } else if ($dataLevel == 'is_mantenimiento') {
                            echo '<th class="header" colspan="1" align="center" >Modificar</th>';
                        } else if ($dataLevel == 'is_editor') {
                            echo '<th class="header" colspan="2" style="text-align: center">Eliminar</th><th class="header" colspan="2" align="center" >Modificar</th>';
                        } else if ($dataLevel == 'is_Gerente_Ventas') {
                            echo '<th class="header" colspan="1" align="center" >Modificar</th>';
                        } else {
                            
                        }
                        ?>



                    </tr>
                </thead>

                <?php
                foreach ($placa as $obj) {
                    echo '<tr>';


                    if ($dataLevel == 'is_Gerente_Ventas') {
                        
                    } else {


                        ;
                    }
                    echo '<td>';
                    echo $obj->getNo_maqui() .
                    '</td>';
                    echo '<td>'
                    . $obj->getModelo() .
                    '</td>'
                    . '<td>'
                    . $obj->getEmpresa() .
                    '</td>'
                    . '<td>'
                    . $obj->getSerie() .
                    '</td>'
                    . '<td>'
                    . $obj->getCliente() . '<b><font face="verdana" color="red">' . ' ' . $obj->getCliente_temporal() . '</font></b>' .
                    '</td>';
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606




<<<<<<< HEAD
    //Numero de Pedimento

   /* if ($dataLevel == 'is_admin') {
        echo
        '<td>'
        . $obj->getPedimento() .
        '</td>'
        ;
    } else if ($dataLevel == 'is_editor') {
        echo
        '<td>'
        . $obj->getPedimento() .
        '</td>'
        ;
    } else if ($dataLevel == 'is_logistica') {
        echo
        '<td>'
        . $obj->getPedimento() .
        '</td>'
        ;
    } else if ($dataLevel == 'is_credito') {
        echo
        '<td>'
        . $obj->getPedimento() .
        '</td>'
        ;
    } else if ($dataLevel == 'is_servicio_a_clientes') {
        echo
        '<td>'
        . $obj->getPedimento() .
        '</td>'
        ;
    } else if ($dataLevel == 'is_editor') {
        
    } else {
        
    }
*/





 
    if (($obj->getPedimento() == "CANCELADA") && ($dataLevel == 'is_admin')) {
                        echo '<td bgcolor="red"><font color="white">'
                        . $obj->getPedimento() .
                        '</font></td>';
                    }else if (($obj->getPedimento() == "cancelada") && ($dataLevel == 'is_admin')) {
                        echo '<td bgcolor="red"><font color="white">'
                        . $obj->getPedimento() .
                        '</font></td>';
                    }else if (($obj->getPedimento() == "Cancelada") && ($dataLevel == 'is_admin')) {
                        echo '<td bgcolor="red"><font color="white">'
                        . $obj->getPedimento() .
                        '</font></td>';
                    }else if (($obj->getPedimento() == "NACIONAL") && ($dataLevel == 'is_admin')) {
                        echo '<td bgcolor="#34E53C"><font color="white">'
                        . $obj->getPedimento() .
                        '</font></td>';
                    }
                    elseif (($obj->getPedimento() != "NACIONAL") &&($obj->getPedimento() != "CANCELADA") && ($obj->getPedimento() != "cancelada") && ($dataLevel == 'is_admin') && ($obj->getPedimento() != "Cancelada")) {
=======
                    //Numero de Pedimento

                    /*  if ($dataLevel == 'is_admin') {
                      echo
                      '<td>'
                      . $obj->getPedimento() .
                      '</td>'
                      ;
                      } else if ($dataLevel == 'is_editor') {
                      echo
                      '<td>'
                      . $obj->getPedimento() .
                      '</td>'
                      ;
                      } else if ($dataLevel == 'is_logistica') {
                      echo
                      '<td>'
                      . $obj->getPedimento() .
                      '</td>'
                      ;
                      } else if ($dataLevel == 'is_credito') {
                      echo
                      '<td>'
                      . $obj->getPedimento() .
                      '</td>'
                      ;
                      } else if ($dataLevel == 'is_refacciones') {

                      } else if ($dataLevel == 'is_editor') {

                      } else {

                      }

                     */

                    if (($obj->getPedimento() == "CANCELADA") && ($dataLevel == 'is_admin') && ($id_usuario == 1)) {
                        echo '<td bgcolor="red"><font color="white">'
                        . $obj->getPedimento() .
                        '</font></td>';
                    } else if (($obj->getPedimento() == "cancelada") && ($dataLevel == 'is_admin') && ($id_usuario == 1)) {
                        echo '<td bgcolor="red"><font color="white">'
                        . $obj->getPedimento() .
                        '</font></td>';
                    } else if (($obj->getPedimento() == "Cancelada") && ($dataLevel == 'is_admin') && ($id_usuario == 1)) {
                        echo '<td bgcolor="red"><font color="white">'
                        . $obj->getPedimento() .
                        '</font></td>';
                    } else if (($obj->getPedimento() == "NACIONAL") && ($dataLevel == 'is_admin') && ($id_usuario == 1)) {
                        echo '<td bgcolor="#34E53C"><font color="black">'
                        . $obj->getPedimento() .
                        '</font></td>';
                    } elseif (($obj->getPedimento() != "NACIONAL") && ($obj->getPedimento() != "CANCELADA") && ($obj->getPedimento() != "cancelada") && ($id_usuario == 1) && ($dataLevel == 'is_admin') && ($obj->getPedimento() != "Cancelada")) {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        echo '<td>'
                        . $obj->getPedimento() .
                        '</td>';
                    }
<<<<<<< HEAD
                    
                    

                                 
                    
                    
                    
=======







>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    if (($obj->getPedimento() == "CANCELADA") && ($dataLevel == 'is_logistica')) {
                        echo '<td bgcolor="red"><font color="white">'
                        . $obj->getPedimento() .
                        '</font></td>';
<<<<<<< HEAD
                    }else if (($obj->getPedimento() == "cancelada") && ($dataLevel == 'is_logistica')) {
                        echo '<td bgcolor="red"><font color="white">'
                        . $obj->getPedimento() .
                        '</font></td>';
                    }else if (($obj->getPedimento() == "Cancelada") && ($dataLevel == 'is_logistica')) {
                        echo '<td bgcolor="red"><font color="white">'
                        . $obj->getPedimento() .
                        '</font></td>';
                    }else if (($obj->getPedimento() == "NACIONAL") && ($dataLevel == 'is_logistica')) {
                        echo '<td bgcolor="#34E53C"><font color="white">'
                        . $obj->getPedimento() .
                        '</font></td>';
                    }
                    elseif (($obj->getPedimento() != "NACIONAL") &&($obj->getPedimento() != "CANCELADA") && ($obj->getPedimento() != "cancelada") && ($dataLevel == 'is_logistica') && ($obj->getPedimento() != "Cancelada")) {
=======
                    } else if (($obj->getPedimento() == "cancelada") && ($dataLevel == 'is_logistica')) {
                        echo '<td bgcolor="red"><font color="white">'
                        . $obj->getPedimento() .
                        '</font></td>';
                    } else if (($obj->getPedimento() == "Cancelada") && ($dataLevel == 'is_logistica')) {
                        echo '<td bgcolor="red"><font color="white">'
                        . $obj->getPedimento() .
                        '</font></td>';
                    } else if (($obj->getPedimento() == "NACIONAL") && ($dataLevel == 'is_logistica')) {
                        echo '<td bgcolor="#34E53C"><font color="white">'
                        . $obj->getPedimento() .
                        '</font></td>';
                    } elseif (($obj->getPedimento() != "NACIONAL") && ($obj->getPedimento() != "CANCELADA") && ($obj->getPedimento() != "cancelada") && ($dataLevel == 'is_logistica') && ($obj->getPedimento() != "Cancelada")) {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        echo '<td>'
                        . $obj->getPedimento() .
                        '</td>';
                    }
<<<<<<< HEAD
                    
          
 if (($dataLevel == 'is_editor')&&($id_usuario == 3)) {
        echo
        '<td>'
        . $obj->getPedimento() .
        '</td>'
        ;
    } else if ($dataLevel == 'is_servicio_a_clientes') {
        echo
        '<td>'
        . $obj->getPedimento() .
        '</td>'
        ;
    } else if ($dataLevel == 'is_refacciones') {
        
    }  else {
        
    }
    
=======





                    if (($dataLevel == 'is_editor') && ($id_usuario == 3)) {
                        echo
                        '<td>'
                        . $obj->getPedimento() .
                        '</td>'
                        ;
                    } else if ($dataLevel == 'is_credito1') {
                        echo
                        '<td>'
                        . $obj->getPedimento() .
                        '</td>'
                        ;
                    } else if ($dataLevel == 'is_refacciones') {
                        
                    } else {
                        
                    }
                    ?>


                    <?php
                    if (($obj->getObservacion() == null)) {
                        echo '<td title="Sin Comentario"><center><i style="font-size:12px;color:red" class="fa fa-times-circle" aria-hidden="true"></i></center></td>';
                    } else if (($obj->getObservacion() != null)) {
                        ?>

                        <td>
                        <center> <a title="Da clic para ver la observación" data-toggle="modal" data-target="#myModalComentario<?php echo $obj->getId() ?>"><i style="font-size:20px;color:#06A405" class="fa fa-comments"></i></center>

                        <div class="modal fade" id="myModalComentario<?php echo $obj->getId() ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabelComentario">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <center>           <a title="Da clic para regresar" style="color:#000000" href="<?php echo site_url(); ?>verificacion">             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </a></center>

                                        <h4 class="modal-title" id="myModalLabelComentario">Observación</h4>
                                    </div>
                                    <div class="modal-body">

        <?php echo $obj->getObservacion() ?>
                                    </div>
                                    <div class="modal-footer">
                                        <center>           <a title="Da clic para regresar" style="color:#000000" href="<?php echo site_url(); ?>verificacion">             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><font size="3">Cerrar</font></button>
                                            </a></center>
                                    </div>
                                </div>
                            </div>
                        </div>


                        </td>
        <?php
    }
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606






<<<<<<< HEAD















          /*  if (($obj->getComentario() == null)) {
        echo '<td title="Sin Comentario"><center><i class="fa fa-times-circle" aria-hidden="true"></i></center></td>';
    } else if (($obj->getComentario() != null)) {
        echo '<td title="'. $obj->getComentario() .
        '"><center><i class="fa fa-align-justify" aria-hidden="true"></i></center>'
                . '</td>';
    }*/
    
    
    ?>
            
            
            <?php
            
            
                 if (($obj->getObservacion() == null)) {
            echo '<td title="Sin Observación"><center><i style="font-size:12px;color:red" class="fa fa-times-circle" aria-hidden="true"></i></center></td>';
    } else if (($obj->getObservacion() != null)) {
      ?>
         
            <td>
            <center> <a title="Da clic para ver la observación" data-toggle="modal" data-target="#myModalComentario<?php echo $obj->getId() ?>"><i style="font-size:20px;color:#06A405" class="fa fa-comments"></i></center>

     <div class="modal fade" id="myModalComentario<?php echo $obj->getId() ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabelComentario">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
    <center>           <a title="Da clic para regresar" style="color:#000000" href="<?php echo site_url(); ?>verificacion">             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</a></center>
            
            <h4 class="modal-title" id="myModalLabelComentario">Observación</h4>
          </div>
          <div class="modal-body">
           
            <?php echo $obj->getObservacion() ?>
          </div>
          <div class="modal-footer">
              <center>           <a title="Da clic para regresar" style="color:#000000" href="<?php echo site_url(); ?>verificacion">             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><font size="3">Cerrar</font></button>
</a></center>
          </div>
        </div>
      </div>
    </div>
    
    
    </td>
            <?php
    }
        
            
            
            
            
            
                 if (($obj->getComentario() == null)) {
            echo '<td title="Sin Comentario"><center><i style="font-size:12px;color:red" class="fa fa-times-circle" aria-hidden="true"></i></center></td>';
    } else if (($obj->getComentario() != null)) {
      ?>
         
            <td>
            <center> <a title="Da clic para ver el comentario" data-toggle="modal" data-target="#myModalC1<?php echo $obj->getId() ?>"><i style="font-size:20px;color:#06A405" class="fa fa-comments"></i></center>

     <div class="modal fade" id="myModalC1<?php echo $obj->getId() ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabelC">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
    <center>           <a title="Da clic para regresar" style="color:#000000" href="<?php echo site_url(); ?>verificacion">             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</a></center>
            
            <h4 class="modal-title" id="myModalLabelC">Comentario</h4>
          </div>
          <div class="modal-body">
           
            <?php echo $obj->getComentario() ?>
          </div>
          <div class="modal-footer">
              <center>           <a title="Da clic para regresar" style="color:#000000" href="<?php echo site_url(); ?>verificacion">             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><font size="3">Cerrar</font></button>
</a></center>
          </div>
        </div>
      </div>
    </div>
    
    
    </td>
            <?php
    }
            
            
    
=======
    if (($obj->getComentario() == null)) {
        echo '<td title="Sin Comentario"><center><i style="font-size:12px;color:red" class="fa fa-times-circle" aria-hidden="true"></i></center></td>';
    } else if (($obj->getComentario() != null)) {
        ?>

                        <td>
                        <center> <a title="Da clic para ver el comentario" data-toggle="modal" data-target="#myModalC1<?php echo $obj->getId() ?>"><i style="font-size:20px;color:#06A405" class="fa fa-comments"></i></center>

                        <div class="modal fade" id="myModalC1<?php echo $obj->getId() ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabelC">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <center>           <a title="Da clic para regresar" style="color:#000000" href="<?php echo site_url(); ?>verificacion">             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </a></center>

                                        <h4 class="modal-title" id="myModalLabelC">Comentario</h4>
                                    </div>
                                    <div class="modal-body">

        <?php echo $obj->getComentario() ?>
                                    </div>
                                    <div class="modal-footer">
                                        <center>           <a title="Da clic para regresar" style="color:#000000" href="<?php echo site_url(); ?>verificacion">             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><font size="3">Cerrar</font></button>
                                            </a></center>
                                    </div>
                                </div>
                            </div>
                        </div>


                        </td>
        <?php
    }









>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

    //Pedimento PDF

    if (($obj->getPedimentoodf() == null) && ($dataLevel == 'is_admin')) {
        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
    } else if (($obj->getPedimentoodf() != null) && ($dataLevel == 'is_admin')) {
        echo '<td style="text-align: center;color:#FF0000"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getPedimentoodf() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
    }

<<<<<<< HEAD
    if (($obj->getPedimentoodf() == null) && ($dataLevel == 'is_editor')&&($id_usuario == 3)) {
        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
    } else if (($obj->getPedimentoodf() != null) && ($dataLevel == 'is_editor')&&($id_usuario == 3)) {
=======
    if (($obj->getPedimentoodf() == null) && ($dataLevel == 'is_editor') && ($id_usuario == 3)) {
        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
    } else if (($obj->getPedimentoodf() != null) && ($dataLevel == 'is_editor') && ($id_usuario == 3)) {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        echo '<td style="text-align: center;color:#FF0000"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getPedimentoodf() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
    }

    if (($obj->getPedimentoodf() == null) && ($dataLevel == 'is_logistica')) {
        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
    } else if (($obj->getPedimentoodf() != null) && ($dataLevel == 'is_logistica')) {
        echo '<td style="text-align: center;color:#FF0000"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getPedimentoodf() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
    }

    if (($obj->getPedimentoodf() == null) && ($dataLevel == 'is_credito1')) {
        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
    } else if (($obj->getPedimentoodf() != null) && ($dataLevel == 'is_credito1')) {
        echo '<td style="text-align: center;color:#FF0000"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getPedimentoodf() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
    }














<<<<<<< HEAD
                     if (($dataLevel == 'is_servicio_a_clientes')&&($id_usuario == 58)) {
                                   if ($obj->getPlaca() != null) {
        echo '<td style="text-align: center;"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getPlaca() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
    } else {
        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
    }  
                        
                    } else {
                       if ($obj->getPlaca() != null) {
=======









    if ($obj->getPlaca() != null) {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        echo '<td style="text-align: center;"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getPlaca() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
    } else {
        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
    }

<<<<<<< HEAD
                    }
                    	
                    
                    






            
     
    
   


   
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606



    //numero de factura
    if ($dataLevel == 'is_admin') {
        echo '<td>'
        . $obj->getNum_factura() .
        '</td>'
        ;
    } else if ($dataLevel == 'is_editor') {
        echo '<td>'
        . $obj->getNum_factura() .
        '</td>'
        ;
<<<<<<< HEAD
    } else if ($dataLevel == 'is_servicio_a_clientes') {
        echo '<td>'
        . $obj->getNum_factura() .
        '</td>'
        ;
=======
    } else if ($dataLevel == 'is_refacciones') {
        
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
    } else if ($dataLevel == 'is_logistica') {
        echo '<td>'
        . $obj->getNum_factura() .
        '</td>'
        ;
    } else if ($dataLevel == 'is_credito') {
        echo '<td>'
        . $obj->getNum_factura() .
        '</td>'
        ;
<<<<<<< HEAD
    } else if ($dataLevel == 'is_mantenimiento') {
        
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
    } else if ($dataLevel == 'is_Gerente_Ventas') {
        echo '<td>'
        . $obj->getNum_factura() .
        '</td>'
        ;
<<<<<<< HEAD
    }else if ($dataLevel == 'is_jefe_mantenimiento') {
=======
    } else if ($dataLevel == 'is_mantenimiento') {
        
    } else if ($dataLevel == 'is_jefe_mantenimiento') {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        
    }




    //factura
    if (($obj->getFactura() == null) && ($dataLevel == 'is_editor')) {
        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
    } else if (($obj->getFactura() != null) && ($dataLevel == 'is_editor')) {
        echo '<td style="text-align: center;"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getFactura() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
    }

    if (($obj->getFactura() == null) && ($dataLevel == 'is_admin')) {
        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
    } else if (($obj->getFactura() != null) && ($dataLevel == 'is_admin')) {
        echo '<td style="text-align: center;"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getFactura() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
    }

    if (($obj->getFactura() == null) && ($dataLevel == 'is_logistica')) {
        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
    } else if (($obj->getFactura() != null) && ($dataLevel == 'is_logistica')) {
        echo '<td style="text-align: center;"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getFactura() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
    }

    if (($obj->getFactura() == null) && ($dataLevel == 'is_credito')) {
        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
    } else if (($obj->getFactura() != null) && ($dataLevel == 'is_credito')) {
        echo '<td style="text-align: center;"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getFactura() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
    }

<<<<<<< HEAD
/*
if (($obj->getFactura() == null) && ($dataLevel == 'is_servicio_a_clientes')) {
        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
    } else if (($obj->getFactura() != null) && ($dataLevel == 'is_servicio_a_clientes')) {
        echo '<td style="text-align: center;"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getFactura() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
    }*/
    
    
    if (($obj->getFactura() == null) && ($dataLevel == 'is_servicio_a_clientes')&&($id_usuario == 58)) {
     
    } else if (($obj->getFactura() != null) && ($dataLevel == 'is_servicio_a_clientes')&&($id_usuario == 58)) {
     
    }
    
    
     if (($obj->getFactura() == null) && ($dataLevel == 'is_servicio_a_clientes')&&($id_usuario == 18)) {
        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
    } else if (($obj->getFactura() != null) && ($dataLevel == 'is_servicio_a_clientes')&&($id_usuario == 18)) {
        echo '<td style="text-align: center;"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getFactura() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
    }
    
    
    
    
 if (($obj->getFactura() == null) && ($dataLevel == 'is_Gerente_Ventas')) {
=======
    if (($obj->getFactura() == null) && ($dataLevel == 'is_Gerente_Ventas')) {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
    } else if (($obj->getFactura() != null) && ($dataLevel == 'is_Gerente_Ventas')) {
        echo '<td style="text-align: center;"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getFactura() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
    }


<<<<<<< HEAD
=======


>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
    //pdf de refacciones
    if (($obj->getRefacciones() == null) && ($dataLevel == 'is_admin')) {
        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
    } else if (($obj->getRefacciones() != null) && ($dataLevel == 'is_admin')) {
        echo '<td style="text-align: center;"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getRefacciones() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
    }

    if (($obj->getRefacciones() == null) && ($dataLevel == 'is_editor')) {
        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
    } else if (($obj->getRefacciones() != null) && ($dataLevel == 'is_editor')) {
        echo '<td style="text-align: center;"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getRefacciones() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
    }

    if (($obj->getRefacciones() == null) && ($dataLevel == 'is_mantenimiento')) {
        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
    } else if (($obj->getRefacciones() != null) && ($dataLevel == 'is_mantenimiento')) {
        echo '<td style="text-align: center;"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getRefacciones() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
    }


    if (($obj->getRefacciones() == null) && ($dataLevel == 'is_refacciones')) {
        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
    } else if (($obj->getRefacciones() != null) && ($dataLevel == 'is_refacciones')) {
        echo '<td style="text-align: center;"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getRefacciones() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
    }


<<<<<<< HEAD
    /*if (($obj->getRefacciones() == null) && ($dataLevel == 'is_jefe_mantenimiento')) {
        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
    } else if (($obj->getRefacciones() != null) && ($dataLevel == 'is_jefe_mantenimiento')) {
        echo '<td style="text-align: center;"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getRefacciones() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
    }*/
    
    
  /*  if (($obj->getRefacciones() == null) && ($dataLevel == 'is_servicio_a_clientes')) {
        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
    } else if (($obj->getRefacciones() != null) && ($dataLevel == 'is_servicio_a_clientes')) {
        echo '<td style="text-align: center;"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getRefacciones() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
    }
    */
    
    
        if (($obj->getRefacciones() == null) && ($dataLevel == 'is_servicio_a_clientes')&&($id_usuario == 18)) {
        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
    } else if (($obj->getRefacciones() != null) && ($dataLevel == 'is_servicio_a_clientes')&&($id_usuario == 18)) {
        echo '<td style="text-align: center;"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getRefacciones() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
    }
    
     if (($obj->getRefacciones() == null) && ($dataLevel == 'is_servicio_a_clientes')&&($id_usuario == 58)) {
   
    } else if (($obj->getRefacciones() != null) && ($dataLevel == 'is_servicio_a_clientes')&&($id_usuario == 58)) {
      
    }
    
    
    
    
=======
    if (($obj->getRefacciones() == null) && ($dataLevel == 'is_jefe_mantenimiento')) {
        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
    } else if (($obj->getRefacciones() != null) && ($dataLevel == 'is_jefe_mantenimiento')) {
        echo '<td style="text-align: center;"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getRefacciones() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
    }


>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
    //CONTRATO PDF

    if (($obj->getContrato() == null) && ($dataLevel == 'is_admin')) {
        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
    } else if (($obj->getContrato() != null) && ($dataLevel == 'is_admin')) {
        echo '<td style="text-align: center;color:#FF0000"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getContrato() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
    }



<<<<<<< HEAD
    if (($obj->getContrato() == null) && ($dataLevel == 'is_editor')&&($id_usuario == 3)) {
        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
    } else if (($obj->getContrato() != null) && ($dataLevel == 'is_editor')&&($id_usuario == 3)) {
        echo '<td style="text-align: center;color:#FF0000"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getContrato() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
    }

    if (($obj->getContrato() == null) && ($dataLevel == 'is_jefe_mantenimiento1')) {
        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
    } else if (($obj->getContrato() != null) && ($dataLevel == 'is_jefe_mantenimiento1')) {
        echo '<td style="text-align: center;color:#FF0000"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getContrato() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
    }

    
      
    
    
    
    

    //Permisos para agregar y modificar
    if ($dataLevel == 'is_admin') {
        echo '<td style="text-align: center;"><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'verificacion/eliminar/' . $obj->getId() . '"><button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
        echo '<td style="text-align: center;"><a title="Da clic para modificar el registro" href="' . base_url() . 'verificacion/actualizar/' . $obj->getId() . '"><button type="button" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-edit"></button></a></td>';
=======
    if (($obj->getContrato() == null) && ($dataLevel == 'is_editor')) {
        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
    } else if (($obj->getContrato() != null) && ($dataLevel == 'is_editor')) {
        echo '<td style="text-align: center;color:#FF0000"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getContrato() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
    }

    if (($obj->getContrato() == null) && ($dataLevel == 'is_jefe_mantenimiento')) {
        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
    } else if (($obj->getContrato() != null) && ($dataLevel == 'is_jefe_mantenimiento')) {
        echo '<td style="text-align: center;color:#FF0000"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/verificacion/' . $obj->getContrato() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
    }




    //Permisos para agregar y modificar
    if ($dataLevel == 'is_admin') {
        echo '<td style="text-align: center;"><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'verificacion/eliminar/' . $obj->getId() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
        echo '<td style="text-align: center;"><a title="Da clic para modificar el registro" href="' . base_url() . 'verificacion/actualizar/' . $obj->getId() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
    } else if ($dataLevel == 'is_editor') {
        echo '<td style="text-align: center;"><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'verificacion/eliminar/' . $obj->getId() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
        echo '<td style="text-align: center;"><a title="Da clic para modificar el registro" href="' . base_url() . 'verificacion/actualizar/' . $obj->getId() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
    } else if ($dataLevel == 'is_refacciones') {
        echo '<td style="text-align: center;"><a title="Da clic para modificar el registro" href="' . base_url() . 'verificacion/actualizar/' . $obj->getId() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
    } else if ($dataLevel == 'is_logistica') {
        echo '<td style="text-align: center;"><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'verificacion/eliminar/' . $obj->getId() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
        echo '<td style="text-align: center;"><a title="Da clic para modificar el registro" href="' . base_url() . 'verificacion/actualizar/' . $obj->getId() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
    } else if ($dataLevel == 'is_credito') {
        echo '<td style="text-align: center;"><a title="Da clic para modificar el registro" href="' . base_url() . 'verificacion/actualizar/' . $obj->getId() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
    } else if ($dataLevel == 'is_mantenimiento') {
        echo '<td style="text-align: center;"><a title="Da clic para modificar el registro" href="' . base_url() . 'verificacion/actualizar/' . $obj->getId() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
    } else if ($dataLevel == 'is_jefe_mantenimiento') {
<<<<<<< HEAD
        //echo '<td style="text-align: center;"><a title="Da clic para modificar el registro" href="' . base_url() . 'verificacion/actualizar/' . $obj->getId() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
    }else if ($dataLevel == 'is_Gerente_Ventas') {
=======
        echo '<td style="text-align: center;"><a title="Da clic para modificar el registro" href="' . base_url() . 'verificacion/actualizar/' . $obj->getId() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
    } else if ($dataLevel == 'is_Gerente_Ventas') {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        echo '<td style="text-align: center;"><a title="Da clic para modificar el registro" href="' . base_url() . 'verificacion/actualizar/' . $obj->getId() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
    }

    ;
}
?>


<<<<<<< HEAD
            <tfoot>
               <tr>
          <th style="text-align: center">No Máquina</th>
                    <th  style="text-align: center">Modelo</th>
                    <th  style="text-align: center">Empresa</th>
                    
                    
                    <?php
                     if ($dataLevel == 'is_jefe_mantenimiento') {
        
    } else {
       ?>
        <th  style="text-align: center">Serie</th>
       <?php
    } 
    ?>
                   
                    <th  style="text-align: center">Cliente </th>
=======
                <tfoot>
                    <tr>
                <?php
                if ($dataLevel == 'is_Gerente_Ventas') {
                    
                } else {
                    echo '   ';
                }
                ?>


                        <th style="text-align: center">No Máquina</th>
                        <th  style="text-align: center">Modelo</th>
                        <th  style="text-align: center">Empresa</th>
                        <th  style="text-align: center">Serie</th>
                        <th  style="text-align: center">Cliente </th>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606





<?php
<<<<<<< HEAD
if (($dataLevel == 'is_admin')&&($id_usuario == 1)) {
    echo '<th>No Pedimento</th>';
} else if (($dataLevel == 'is_editor')&&($id_usuario == 3)) {
    echo '<th>No Pedimento</th>';
} else if ($dataLevel == 'is_logistica') {
    echo '<th>No Pedimento</th>';
} else if ($dataLevel == 'is_credito1') {
    echo '<th  style="text-align: center">No Pedimento</th>';
} else if ($dataLevel == 'is_servicio_a_clientes') {
    echo '<th  style="text-align: center">No Pedimento</th>';
=======
if (($dataLevel == 'is_admin')) {
    echo '<th>No Pedimento</th>';
} else if (($dataLevel == 'is_editor') && (($id_usuario == 3))) {
    echo '<th>No Pedimento</th>';
} else if ($dataLevel == 'is_logistica') {
    echo '<th>No Pedimento</th>';
} else if ($dataLevel == 'is_credito') {
    echo '<th  style="text-align: center">No Pedimento</th>';
} else if ($dataLevel == 'is_refacciones') {
    
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
} else {
    
}
?>
<<<<<<< HEAD
<th  style="text-align: center">Observación </th>
<th  style="text-align: center">Comentario </th>


                    <?php
                    if ($dataLevel == 'is_admin') {
                        echo ' <th>Pedimento PDF</th>';
                    } else if (($dataLevel == 'is_editor')&&($id_usuario == 3)) {
                        echo ' <th>Pedimento PDF</th>';
                    } else if ($dataLevel == 'is_logistica') {
                        echo ' <th>Pedimento PDF</th>';
                    } else if ($dataLevel == 'is_credito1') {
                        echo ' <th  style="text-align: center">Pedimento PDF</th>';
                    } else if ($dataLevel == 'is_refacciones') {
                        
                    } else {
                        
                    }
                    ?>







   
        
        
        
                    <?php
                     if (($dataLevel == 'is_servicio_a_clientes')&&($id_usuario == 58)) {
                        
                        
                    } else {
                        ?>
                              
                            <th  style="text-align: center">Placa</th>
                        <?php
                    }
                    ?>
        
      
=======

                        <th  style="text-align: center">Observación </th>
                        <th  style="text-align: center">Comentario </th>

                        <?php
                        if ($dataLevel == 'is_admin') {
                            echo ' <th>Pedimento PDF</th>';
                        } else if (($dataLevel == 'is_editor') && ($id_usuario == 3)) {
                            echo ' <th>Pedimento PDF</th>';
                        } else if ($dataLevel == 'is_logistica') {
                            echo ' <th>Pedimento PDF</th>';
                        } else if ($dataLevel == 'is_credito') {
                            echo ' <th  style="text-align: center">Pedimento PDF</th>';
                        } else if ($dataLevel == 'is_refacciones') {
                            
                        } else {
                            
                        }
                        ?>







                        <th>Placa </th>

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

<?php
if ($dataLevel == 'is_admin') {
    echo ' <th>No Factura</th><th>Factura</th><th>Refacciones</th><th>Contrato</th>';
<<<<<<< HEAD
} else if ($dataLevel == 'is_editor1') {
    echo ' ';
} else if (($dataLevel == 'is_editor')&&($id_usuario == 3)) {
    echo ' <th>No Factura</th><th>Factura</th><th>Refacciones</th> <th>Contrato</th>';
} 


if ($dataLevel == 'is_logistica') {
=======
} else if ($dataLevel == 'is_editor') {
    echo ' <th>No Factura</th><th>Factura</th><th>Refacciones</th><th>Contrato</th>';
} else if ($dataLevel == 'is_logistica') {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
    echo ' <th>No Factura</th><th>Factura</th>';
} else if ($dataLevel == 'is_credito') {
    echo ' <th>No Factura</th><th>Factura</th>';
} else if ($dataLevel == 'is_mantenimiento') {
    echo '<th>Refacciones</th>';
} else if ($dataLevel == 'is_refacciones') {
    echo '<th>Refacciones</th>';
} else if ($dataLevel == 'is_jefe_mantenimiento') {
<<<<<<< HEAD
  //  echo '<th>Refacciones</th><!--<th>Contrato</th>-->';
} else if (($dataLevel == 'is_servicio_a_clientes')&&($id_usuario == 18)) {
    echo '<th>No Factura</th><th>Factura</th><th>Refacciones</th>';
}else if (($dataLevel == 'is_servicio_a_clientes')&&($id_usuario == 58)) {
 
    echo '<th>No Factura</th>';
}else if (($dataLevel == 'is_servicio_a_clientes')) {
 
    echo '<th>No Factura</th>';
}
else if ($dataLevel == 'is_Gerente_Ventas') {
     echo ' <th>No Factura</th><th>Factura</th>';
}  else {
=======
    echo '<th>Refacciones</th><th>Contrato</th>';
} else if ($dataLevel == 'is_Gerente_Ventas') {
    echo ' <th>No Factura</th><th>Factura</th>';
} else {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
    
}
?>



<<<<<<< HEAD
                    <?php
                    if ($dataLevel == 'is_admin') {
                        echo '<th class="header" colspan="1" style="text-align: center">Eliminar</th><th class="header" colspan="1" align="center" >Modificar</th>';
                    } else if ($dataLevel == 'is_editor') {
                        echo '<th class="header" colspan="1" style="text-align: center">Eliminar</th><th class="header" colspan="1" align="center" >Modificar</th>';
                    } else if ($dataLevel == 'is_logistica') {
                        echo '<th class="header" colspan="1" style="text-align: center">Eliminar</th><th class="header" colspan="1" align="center" >Modificar</th>';
                    } else if ($dataLevel == 'is_credito') {
                        echo '<th class="header" colspan="2" align="center" >Modificar</th>';
                    } else if ($dataLevel == 'is_refacciones') {
                        echo '<th class="header" colspan="1" align="center" >Modificar</th>';
                    } else if ($dataLevel == 'is_jefe_mantenimiento') {
                       // echo '<th class="header" colspan="1" align="center" >Modificar</th>';
                    } else if ($dataLevel == 'is_mantenimiento') {
                        echo '<th class="header" colspan="1" align="center" >Modificar</th>';
                    } else if ($dataLevel == 'is_editor') {
                        echo '<th class="header" colspan="2" style="text-align: center">Eliminar</th><th class="header" colspan="2" align="center" >Modificar</th>';
                    }else if ($dataLevel == 'is_Gerente_Ventas') {
                        echo '<th class="header" colspan="1" align="center" >Modificar</th>';
                    } else {
                        
                    }
                    ?>

                </tr>
            </tfoot>
        </table>
    </div>
=======

                        <?php
                        if ($dataLevel == 'is_admin') {
                            echo '<th class="header" colspan="1" style="text-align: center">Eliminar</th><th class="header" colspan="1" align="center" >Modificar</th>';
                        } else if ($dataLevel == 'is_editor') {
                            echo '<th class="header" colspan="1" style="text-align: center">Eliminar</th><th class="header" colspan="1" align="center" >Modificar</th>';
                        } else if ($dataLevel == 'is_logistica') {
                            echo '<th class="header" colspan="1" style="text-align: center">Eliminar</th><th class="header" colspan="1" align="center" >Modificar</th>';
                        } else if ($dataLevel == 'is_credito') {
                            echo '<th class="header" colspan="2" align="center" >Modificar</th>';
                        } else if ($dataLevel == 'is_refacciones') {
                            echo '<th class="header" colspan="1" align="center" >Modificar</th>';
                        } else if ($dataLevel == 'is_jefe_mantenimiento') {
                            echo '<th class="header" colspan="1" align="center" >Modificar</th>';
                        } else if ($dataLevel == 'is_mantenimiento') {
                            echo '<th class="header" colspan="1" align="center" >Modificar</th>';
                        } else if ($dataLevel == 'is_editor') {
                            echo '<th class="header" colspan="2" style="text-align: center">Eliminar</th><th class="header" colspan="2" align="center" >Modificar</th>';
                        } else if ($dataLevel == 'is_Gerente_Ventas') {
                            echo '<th class="header" colspan="1" align="center" >Modificar</th>';
                        } else {
                            
                        }
                        ?>



                    </tr>
                </tfoot>
            </table>
        </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606








<<<<<<< HEAD
    <!-- <div class="text-center">
         <a  class="btn btn-success" href="<?= base_url('verificacion/agregar') ?>" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Catálogo">Agregar nuevo registro</a>
 
     </div>-->
</div>
</body>
</html>

=======
        <!-- <div class="text-center">
             <a  class="btn btn-success" href="<?= base_url('verificacion/agregar') ?>" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Catálogo">Agregar nuevo registro</a>
     
         </div>-->
    </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
