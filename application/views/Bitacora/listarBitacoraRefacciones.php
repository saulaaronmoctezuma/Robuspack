
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
                    alert("El registro ha sido eliminado.")
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
  


        <!--<?php echo $this->benchmark->memory_usage(); ?>-->

    <head>
    <body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">
    <div class="container" style="margin-top:1px;">


        <div class="table-responsive">
            <center>  <h1>Bitácora</h1></center>

            <div class="alert alert-info alert-info">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Bienvenido</strong> Agrega, Modifica o Elimina sus Datos
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                <input type="text" id="buscandoIguales" placeholder="Escribe para buscar..."  class="form-control" />
            </div>
            
            <div class="text-center">
                <a  class="btn btn-success" href="<?= base_url('Bitacora/agregarRefacciones') ?>" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos de las Bitacoras">Agregar nuevo registro</a>
            </div>
            <BR>
            <table  border="0" class="table table-bordered table-striped">
                <MARQUEE SCROLLDELAY =200> </MARQUEE>


                <thead >
                    <tr >
                        <?php
                        if ($dataLevel == 'is_Gerente_Ventas') {
                            echo '<th class="header">Usuario</th>';
                        } else {
                            
                        }
                        ?>
                        <!--<th class>Id</th>-->
                        <th class="header" style="text-align: center">Grupo</th>
                        <th class="header" style="text-align: center">Cliente</th>
                        <th class="header" style="text-align: center;width:250px;">Descripción</th>

                        <th class="header" style="text-align: center">Archivo</th>
                         
                        

                        <?php
                        if ($dataLevel == 'is_admin') {
                            echo '<th class="header">Usuario</th>';
                            echo '<th class="header" style="text-align: center">Fecha De Inserción</th>';
                            echo '<th class="header" style="text-align: center">Fecha de Modificación</th>';
                            echo '<th class="header" colspan="3" style="text-align: center">Acción</th>';
                            echo '<th class="header" style="text-align: center">Observación</th>';
                        } else if ($dataLevel == 'is_editor') {

                            echo '<th class="header">Usuario</th>';
                            echo '<th class="header">Fecha De Inserción</th>';
                            echo '<th class="header">Fecha de Modificación</th>';
                            echo '<th class="header" style="text-align: center">Observación</th>';
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        } else if ($dataLevel == 'is_director') {

                            echo '<th class="header">Usuario</th>';
                            echo '<th class="header">Fecha De Inserción</th>';
                            echo '<th class="header">Fecha de Modificación</th>';
                        } else if ($dataLevel == 'is_maquinaria') {

                            echo '<th class="header" colspan="2" >Acción</th>';
                        } else if ($dataLevel == 'is_refacciones') {
                            echo '<th class="header" style="text-align: center">Observación</th>';

                            echo '<th class="header" colspan="2" style="text-align: center">Modificar</th>';
                        } else if ($dataLevel == 'is_Gerente_Ventas') {

                            echo '<th class="header">Fecha De Inserción</th>';
                            echo '<th class="header">Fecha de Modificación</th>';
                                echo '<th style="text-align: center">Retroalimentación</th>';
                            echo '<th class="header" style="text-align: center">Observación</th>';
                        } else {
                            
                        }
                        ?>





                    </tr>
                </thead>

                <tbody align="center">

                    <?php
                    foreach ($bitacora as $obj) {
                        echo '<tr><td>';
                        if ($dataLevel == 'is_Gerente_Ventas') {
                            echo $obj->getFirst_name() .
                            '</td>' .
                            '<td>'
                            ;
                        } else {
                            
                        }

                        echo //$obj->getId_bitacora() .
                        //'</td>'
                        //. '<td>'
                        //.
                        $obj->getGrupo() .
                        '</td>'
                        . '<td>'
                        . $obj->getCliente() .
                        '</td>'
                        . '<td>'
                        . $obj->getDescripcion() .
                        '</td>'

                                    

                        ;



                        if ($obj->getArchivo1() != null) {
                            echo '<td width="250px"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/bitacora/' . $obj->getArchivo1() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
                        } else {
                            echo '<td>Sin Archivo</td>';
                        }

                         if (($dataLevel == 'is_refacciones') &&   ($obj->getObservacion() != null)) {
                            echo '<td>'. $obj->getObservacion() .'</td>';
                        } else if ($dataLevel == 'is_refacciones' and $obj->getObservacion() == null){
                            echo '<td>Sin Observación</td>';
                        }
                        
                        
                        
                       
                        if ($dataLevel == 'is_admin') {
                            echo '<td>'
                            . $obj->getFirst_name() .
                            '</td>'
                            . '<td>'
                            . $obj->getFecha_insercion() .
                            '</td>'
                            . '<td>'
                            . $obj->getFecha_modificar() .
                            '</td>';
                        } else if ($dataLevel == 'is_editor') {
                            echo '<td>'
                            . $obj->getFirst_name() .
                            '</td>'
                            . '<td>'
                            . $obj->getFecha_insercion() .
                            '</td>'
                            . '<td>'
                            . $obj->getFecha_modificar() .
                            '</td>';
                        } else if ($dataLevel == 'is_Gerente_Ventas') {
                            echo '<td>'
                            . $obj->getFecha_insercion() .
                            '</td>'
                            . '<td>'
                            . $obj->getFecha_modificar() .
                            '</td>';
                            ;
                        } else if ($dataLevel == 'is_director') {
                            echo '<td>'
                            . $obj->getFirst_name() .
                            '</td>'
                            . '<td>'
                            . $obj->getFecha_insercion() .
                            '</td>'
                            . '<td>'
                            . $obj->getFecha_modificar() .
                            '</td>';
                            
                        } else {
                            
                        }

                              if (($dataLevel == 'is_editor') &&   ($obj->getObservacion() != null)) {
                            echo '<td>'. $obj->getObservacion() .'</td>';
                        } else if ($dataLevel == 'is_editor' and $obj->getObservacion() == null){
                            echo '<td>Sin Observación</td>';
                        }
                        
                         if (($dataLevel == 'is_Gerente_Ventas') &&   ($obj->getObservacion() != null)) {
                            echo '<td>'. $obj->getObservacion() .'</td>';
                        } else if ($dataLevel == 'is_Gerente_Ventas' and $obj->getObservacion() == null){
                            echo '<td>Sin Observación</td>';
                        }

                        


                        //compara si es administrador
                        if ($dataLevel == 'is_admin') {
                            echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'Bitacora/eliminar/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                            echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'Bitacora/obtener/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                            echo '<td><a title="Da clic para comentar el registro" href="' . base_url() . 'Bitacora/obtener1/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-comment"><span class="glyphicon glyphicon-comment"></button></a></td>';
                        
                            
                        } else if ($dataLevel == 'is_editor') {
                            
                        } else if ($dataLevel == 'is_Gerente_Ventas') {
                            echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'Bitacora/obtener1/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-comment"><span class="glyphicon glyphicon-comment"></button></a></td>';
                        } else if ($dataLevel == 'is_director') {
                            
                        } else {
                            echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'Bitacora/obtener/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                        }
                        
                        if (($dataLevel == 'is_admin') &&   ($obj->getObservacion() != null)) {
                            echo '<td>'. $obj->getObservacion() .'</td>';
                        } else if ($dataLevel == 'is_admin' and $obj->getObservacion() == null){
                            echo '<td>Sin Observación</td>';
                        }
                    }
                    ?>
                    </tr    >
                </tbody>
            </table>


        </div> 



    </body>
</html>
