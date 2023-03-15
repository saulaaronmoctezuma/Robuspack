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
<<<<<<< HEAD
                  
=======

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                } else {
                    return false
                }
            }
        </script>

<<<<<<< HEAD

=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        <!-- Para traerse el rol que esta registrado-->
        <?php
        //check user level
        $dataLevel = $this->userlevel->checkLevel($role);

        $site_title = $result->site_title;
        //check user level
        ?>
<<<<<<< HEAD


<div class="container" style="margin-top:2px;">
    <div class="container">
        <h1><center>Catálogo de Vendedores y Técnicos</center></h1>

        <div class="alert alert-info alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Bienvenido</strong> Agrega, Modifica o Elimina sus Datos
        </div>

        <left> <h1>Buscar</h1> </left>
        <input type="text" id="myInput" placeholder="Escribe para buscar..."  class="form-control" />
    </div>
    <br>
    
    
     <center>
            <div class="row">
                <div class="form-group c">
                    <a  class="btn btn-success" href="<?= base_url('CatalogoVenTec/agregar') ?>" data-toggle="tooltip" data-placement="right" title="Dar clic para agregar un nuevo registro">Agregar Nuevo Registro</a>

                </div>

               <div class="form-group">
                    <form method="post" action="<?php echo base_url(); ?>Reporte/pdfVendedores/1" target=”_blank”>

                        <button  class="btn btn-info" title="Da clic para exportar los datos a PDF" style="font-size:15px;color:red"><font color="white">Exportar  </font> <i class="fa fa-file-pdf-o"></i></button>
=======
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>
            
            table{
    table-layout: fixed;
    width: 250px;
}

th, td {
    border: 1px solid blue;
    width: 100px;
    word-wrap: break-word;
}
            
        </style>
    <div class="container" style="margin-top:2px;">
        <div class="container">
            <h1>Catálogo de Vendedores y Técnicos</h1>

            <div class="alert alert-info alert-warning">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Bienvenido</strong> Agrega, Modifica o Elimina sus Datos
            </div>



            <left> <h1>Buscar</h1> </left>
            <input type="text" id="buscandoIguales" placeholder="Escribe para buscar..."  class="form-control" />
        </div>
        <br>
        <center>
            <div class="row">
                <div class="form-group col-xs-3">
                    <a  class="btn btn-success" href="<?= base_url('CatalogoVenTec/agregar') ?>" data-toggle="tooltip" data-placement="right" title="Dar clic para agregar un nuevo registro">Agregar nuevo registro</a>

                </div>

                <div class="form-group col-xs-3">
                    <form method="post" action="<?php echo base_url(); ?>Reporte/pdfVendedores/1" target=”_blank”>

                        <button  class="btn btn-info" title="Da clic para exportar los datos a PDF" style="font-size:18px;color:red"><font color="white">Exportar  </font> <i class="fa fa-file-pdf-o"></i></button>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    </form>
                </div>
            </div>
        </center>
<<<<<<< HEAD
        
        

    <table  border="0" class="table table-bordered table-striped">
        <MARQUEE SCROLLDELAY =200> </MARQUEE>
        <thead
            <tr>
                <th>Núm del <BR> Trabajador</th>
                <th>Nombre</th>
                <th>Rol</th>
                <th>Área</th>
                <th>% Comisión </th>
                <th>Correo Electrónico</th>

               <th class="header" colspan="2" style="text-align: center;">Acción</th>

            </tr>
        </thead>
   <tbody id="myTable">
        <?php
        foreach ($catalogoventec as $obj) {
            echo '<tr><td style="text-align: center;">';
            echo $obj->getId_catalogo() .
            '</td>'
            . '<td style="text-align: center;">'
            . $obj->getNombre() .
            '</td>'
            . '<td style="text-align: center;">'
            . $obj->getRol() .
            '</td>'
            . '<td style="text-align: center;">'
            . $obj->getArea() .
            '</td>'
            . '<td style="text-align: center;">'
            . $obj->getComision() .
            '</td>'
            . '<td >'
            . $obj->getCorreo() .
            '</td>'
            ;

            
            
                //compara si es administrador
                        //if ($dataLevel == 'is_admin' ) {
                            echo '<td style="text-align: center;"><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'CatalogoVenTec/eliminar/' . $obj->getId_catalogo() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                            echo '<td style="text-align: center;"><a title="Da clic para modificar el registro" href="' . base_url() . 'CatalogoVenTec/obtener/' . $obj->getId_catalogo() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                      /*else if ($dataLevel == 'is_editor') {
                            
                      
                        else if ($dataLevel == 'is_editor') {
                                echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'Bitacora/obtener/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                        
                        }
                        
                        else {
                        }*/
            
            
            
            
        }
        ?>
    </table>
<!--
<div class="text-center">
    <a  class="btn btn-success" href="<?= base_url('CatalogoVenTec/agregar') ?>" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Catálogo">Agregar nuevo registro</a>

</div>-->



    </div>
    
=======

        <table  border="0" class="table table-bordered table-striped">
            <MARQUEE SCROLLDELAY =200> </MARQUEE>
            <thead
                <tr>
                    <th>Núm del Trabajador</th>
                    <th>Nombre</th>
                    <th>Rol</th>
                    <th>Área</th>
                    <th>% Comisión </th>
                    <th>Correo Electrónico</th>

                    <th class="header" colspan="2" style="text-align: center;">Acción</th>

                </tr>
            </thead>

            <?php
            foreach ($catalogoventec as $obj) {
                echo '<tr><td style="text-align: center;">';
                echo $obj->getId_catalogo() .
                '</td>'
                . '<td style="text-align: center;">'
                . $obj->getNombre() .
                '</td>'
                . '<td style="text-align: center;">'
                . $obj->getRol() .
                '</td>'
                . '<td style="text-align: center;">'
                . $obj->getArea() .
                '</td>'
                . '<td style="text-align: center;">'
                . $obj->getComision() .
                '</td>'
                . '<td >'
                . $obj->getCorreo() .
                '</td>'
                ;



                //compara si es administrador
                //if ($dataLevel == 'is_admin' ) {
                echo '<td style="text-align: center;"><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'CatalogoVenTec/eliminar/' . $obj->getId_catalogo() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                echo '<td style="text-align: center;"><a title="Da clic para modificar el registro" href="' . base_url() . 'CatalogoVenTec/obtener/' . $obj->getId_catalogo() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                /* else if ($dataLevel == 'is_editor') {


                  else if ($dataLevel == 'is_editor') {
                  echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'Bitacora/obtener/' . $obj->getId_bitacora() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';

                  }

                  else {
                  } */
            }
            ?>
        </table>


    </div>

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
</body>
</html>

