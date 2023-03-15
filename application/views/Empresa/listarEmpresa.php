<<<<<<< HEAD
<!--
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */
-->
=======

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
<html lang="es-mx">
    <head>
        <title>Robuspack</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
 <link rel="icon" href="<?= base_url('assets/images/robuspack_icon.PNG') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php
        defined('BASEPATH') OR exit('No direct script access allowed');

        $result = $this->User_model->getAllSettings();
        $theme = $result->theme;
        ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $theme; ?>">
        <link rel="stylesheet" href="<?php echo base_url() . 'public/css/main.css' ?>">


        <script type="text/javascript">
            function confirma() {
                if (confirm("¿Realmente desea eliminarlo?")) {
                 
                } else {
                    return false
                }
            }
        </script>

        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css">-->

    </head>
    <div class="container" style="margin-top:10px;">
<<<<<<< HEAD
       <center> <h1>Gestión de Empresa</h1></center>
=======
        <h1>Gestión de Empresa</h1>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

            <div class="alert alert-info alert-info">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Empresa</strong> Agrega, Modifica o Elimina Los Datos
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                <input type="text" id="buscandoIguales" placeholder="Escribe para buscar..."  class="form-control" />
            </div>
           <div><center>
                <form method="post" action="<?php echo base_url(); ?>Empresa/agregar">
                    
                    <input type="submit" name="agregar"  title="Da clic para agregar un nuevo registro" class="btn btn-success" value="Agregar Nuevo Registro" />
                </form>
                    
                    <br>
           
                    
                          <form method="post" action="<?php echo base_url(); ?>ExportarExcel/crearExcelEmpresa">

<<<<<<< HEAD
                        <button  class="btn btn-info" title="Da clic para exportar los datos a Excel" style="font-size:15px;color:white"><font color="white">Exportar</font> <i class="fa fa-file-excel-o"></i></button>
=======
                        <button  class="btn btn-info" title="Da clic para exportar los datos a Excel" style="font-size:16px;color:white"><font color="white">Exportar</font> <i class="fa fa-file-excel-o"></i></button>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    </form>  
        
                </center>
            </div>
        
        
    </div>
    <div class="container" style="margin-top:10px;">

    
       
        <div class="table-responsive">


         
           
            
            

            <table  border="0" class="table table-bordered table-striped">
                <MARQUEE SCROLLDELAY =200> </MARQUEE>
                <thead
                    <tr>
                       <!-- <th>Id</th>-->
                        <th style="text-align: center">Estado</th>
                        <th style="text-align: center">Ciudad</th>
                        <th style="text-align: center">Nombre de la Empresa</th>
                        <th style="text-align: center">Estatus</th>
                        <th style="text-align: center">Vendedor</th>
                        <th style="text-align: center">Nombre</th>
                        <th style="text-align: center">Cargo</th>
                        <th style="text-align: center">Email</th>
                        <th style="text-align: center">Email 2</th>
                        <th style="text-align: center">Email 3</th>
                        <th style="text-align: center">Página Web</th>

                        <th style="text-align: center">Marketing</th>
                        <th style="text-align: center">Teléfono 1</th>
                        <th style="text-align: center">Teléfono 2</th>
                        <th style="text-align: center">Teléfono 3</th>
                        <th style="text-align: center">Dirección</th>
                        <th style="text-align: center">Domicilio Secundario</th>
                        <th style="text-align: center">Código Postal</th>
                        <th style="text-align: center">Integrados</th>
                        <th style="text-align: center">Corrugadora</th>
                        <th style="text-align: center">Sheet Plant Size</th>

                        <th style="text-align: center">Single Face</th>
                        <th style="text-align: center">Comercializadora</th>
                        <th style="text-align: center">Litografía</th>
                        <th style="text-align: center">Flexos Actuales</th>
                        <th style="text-align: center">Volúmen en Pesos</th>
                        <!--<th>Comentarios</th>-->

                        <th style="text-align: center" class="header" colspan="2" >Acción</th>

                    </tr>
                </thead>



                <?php
                foreach ($empresa as $obj) {
                    echo '<tr><td>';
                    echo //$obj->getId_empresa() .
                    //'</td>'
                    //. '<td>'
                    //. $obj->getEstado() .      
                    $obj->getEstado() .
                    '</td>'
                    . '<td>'
                    . $obj->getCiudad() .
                    '</td>'
                    . '<td>'
                    . $obj->getNombre_empresa() .
                    '</td>'
                    . '<td>'
                    . $obj->getEstatus() .
                    '</td>'
                    . '<td>'
                    . $obj->getVendedor() .
                    '</td>'
                    . '<td>'
                    . $obj->getNombre() .
                    '</td>'
                    . '<td>'
                    . $obj->getCargo() .
                    '</td>'
                    . '<td>'
                    . $obj->getEmail() .
                    '</td>'
                    . '<td>'
                    . $obj->getEmail2() .
                    '</td>'
                    . '<td>'
                    . $obj->getEmail3() .
                    '</td>'
                    . '<td>'
                    . $obj->getPag_web() .
                    '</td>'
                    . '<td>'
                    . $obj->getMarketing() .
                    '</td>'
                    . '<td>'
                    . $obj->getTel1() .
                    '</td>'
                    . '<td>'
                    . $obj->getTel2() .
                    '</td>'
                    . '<td>'
                    . $obj->getTel3() .
                    '</td>'
                    . '<td>'
                    . $obj->getDireccion() .
                    '</td>'
                    . '<td>'
                    . $obj->getDom_secundario() .
                    '</td>'
                    . '<td>'
                    . $obj->getCp() .
                    '</td>'
                    . '<td>'
                    . $obj->getIntegrados() .
                    '</td>'
                    . '<td>'
                    . $obj->getCorrugadora() .
                    '</td>'
                    . '<td>'
                    . $obj->getSheet() .
                    '</td>'
                    . '<td>'
                    . $obj->getSingle() .
                    '</td>'
                    . '<td>'
                    . $obj->getComercializadora() .
                    '</td>'
                    . '<td>'
                    . $obj->getLitografia() .
                    '</td>'
                    . '<td>'
                    . $obj->getFlexos() .
                    '</td>'
                    . '<td>'
                    . $obj->getVolumen() .
                    '</td>'
                  

                    ;




                    echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'Empresa/eliminar/' . $obj->getId_empresa() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                    echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'Empresa/obtener/' . $obj->getId_empresa() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';

                   
                }
                ?>
            </table>
        </div>
     
        <br>
       
    </div>
</body>
</html>
