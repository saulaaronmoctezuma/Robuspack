<html lang="es-mx">
    <head>

        <title>Robuspack</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
  <!--
    /*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación
 * Fecha: 11-04-2019 10:19 am"
 */-->

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
        $result = $this->User_model->getAllSettings();
        $site_title = $result->site_title;
        //check user level
        ?> 


        <?php
        defined('BASEPATH') OR exit('No direct script access allowed');

        $result = $this->User_model->getAllSettings();
        $theme = $result->theme;
        ?>
        <link rel="stylesheet" href="<?php echo $theme; ?>">
        <link rel="stylesheet" href="<?php echo base_url() . 'public/css/main.css' ?>">

        <link rel="icon" href="<?= base_url('assets/images/icono.PNG') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <div class="container" style="margin-top:1px;">
        <center>  <h1> Registro de Clientes</h1></center>

        <div class="alert alert-info alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Bienvenido</strong> Agrega, Modifica o Elimina sus Datos
        </div>
        <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
            <input type="text" id="buscandoIguales" placeholder="Escribe para buscar..."  class="form-control" />
        </div>

        <div class="text-center">
            <a  class="btn btn-success" href="<?= base_url('RecoleccionDatos/agregar') ?>" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos de los Clientes">Agregar Nuevo Registro</a>
        </div>

    </div>


    <div class="container" style="margin-top:1px;">


        <div class="table-responsive">
            <table class="table table-bordered table-striped"  >

        </div>

        <table  border="0" class="table table-bordered table-striped">
            <MARQUEE SCROLLDELAY =200> </MARQUEE>
            <thead>
                <tr >


                    <?php
                    if ($dataLevel == 'is_admin') {
                        echo '<th class="header" style="text-align: center">Eliminar</th>'
                        . '<th class="header" style="text-align: center">Modificar</th>'
                        . '<th class="header" style="text-align: center">Usuario</th>';
                    } else if ($dataLevel == 'is_editor') {
                        echo '<th class="header" style="text-align: center">Eliminar</th>'
                        . '<th class="header" style="text-align: center">Modificar</th>'
                        . '<th class="header" style="text-align: center">Usuario</th>';
                    } else if ($dataLevel == 'is_credito') {
                        echo '<th class="header" style="text-align: center">Modificar</th>';
                    } else if ($dataLevel == 'is_logistica') {
                        echo '<th class="header" style="text-align: center">Modificar</th>';
                    } else {
                        
                    }
                    ?>











                    <th style="text-align: center">Identificador</th>
                    <th style="text-align: center">Nombre de la Empresa</th>
                    <th style="text-align: center">Estado</th>
                    <th style="text-align: center">Ciudad</th>
                    <th style="text-align: center">Domicilio</th>
                    <th style="text-align: center">Nombre del Contacto</th>
                    <th style="text-align: center">Cargo</th>
                    <th style="text-align: center">Email</th>
                    <th style="text-align: center">Teléfono</th>


                    <th style="text-align: center">Nombre del Contacto </th>
                    <th style="text-align: center">Cargo</th>
                    <th style="text-align: center">Email</th>
                    <th style="text-align: center">Teléfono</th>





                </tr>
            </thead>
            <tbody align="center">


                <?php
                foreach ($recolecciondatos as $obj) {
                    echo '<tr>';



                    //compara si es administrador
                    if ($dataLevel == 'is_admin') {
                        echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'RecoleccionDatos/eliminar/' . $obj->getId_recolecion_datos() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'RecoleccionDatos/obtener/' . $obj->getId_recolecion_datos() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    } else if ($dataLevel == 'is_editor') {
                        echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'RecoleccionDatos/eliminar/' . $obj->getId_recolecion_datos() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'RecoleccionDatos/obtener/' . $obj->getId_recolecion_datos() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    } else if ($dataLevel == 'is_credito') {
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'RecoleccionDatos/obtener/' . $obj->getId_recolecion_datos() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    } else if ($dataLevel == 'is_logistica') {
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'RecoleccionDatos/obtener/' . $obj->getId_recolecion_datos() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    } else {
                        
                    }




                    echo '<td>';



                    //compara si es administrador
                    if ($dataLevel == 'is_admin') {
                        echo $obj->getFirst_name() .
                        '</td><td>';
                    } else if ($dataLevel == 'is_editor') {
                        echo $obj->getFirst_name() .
                        '</td><td>';
                    } else if ($dataLevel == 'is_credito') {
                        
                    } else {
                        
                    }




                    echo $obj->getIdentificador() .
                    '</td>'
                    . '<td>' .
                    $obj->getNombre_empresa() .
                    '</td>'
                    . '<td>'
                    . $obj->getEstado() .
                    '</td>'
                    . '<td>'
                    . $obj->getCiudad() .
                    '</td>'
                    . '<td>'
                    . $obj->getDomicilio() .
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
                    . $obj->getTel() .
                    '</td>'
                    . '<td>'
                    . $obj->getNombre2() .
                    '</td>'
                    . '<td>'
                    . $obj->getCargo2() .
                    '</td>'
                    . '<td>'
                    . $obj->getEmail2() .
                    '</td>'
                    . '<td>'
                    . $obj->getTel2() .
                    '</td>'

                    ;
                }
                ?>
                </tr>
            </tbody>
        </table>


    </div> 
</div>

</div>
</body>
</html>
