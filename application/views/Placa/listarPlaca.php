<html>
    <head>

    <div class="container">
        <h1>Control de </h1>

        <div class="alert alert-info alert-warning">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Bienvenido</strong> Agrega, Modifica o Elimina sus Datos
        </div>

        <left> <h1>Buscar</h1> </left>
        <input type="text" id="search" placeholder="Escribe para buscar..."  class="form-control" />
    </div>

    <table  border="1" class="table table-bordered table-striped">
        <MARQUEE SCROLLDELAY =200> </MARQUEE>
        <thead
            <tr>

                <th>No Maquina</th>
                <th>Modelo</th>
                <th>Serie</th>
                <th>Placa </th>
                <th>Factura</th>
                <th>Cliente </th>
                <th>Pedimento</th>
                
                <th>Eliminar</th>
                <th>Modificar</th>

            </tr>
        </thead>

        <?php
        foreach ($placa as $obj) {
            echo '<tr><td>';
            echo $obj->getNo_maquina() .
            '</td>'
            . '<td>'
            . $obj->getModelo() .
            '</td>'
            . '<td>'
            . $obj->getSerie() .
            '</td>'
            . '<td>'
            . $obj->getPlaca() .
            '</td>'
            . '<td>'
            . $obj->getFactura() .
            '</td>'
            . '<td>'
            . $obj->getCliente() .
            '</td>'
            . '<td>'
            . $obj->getPedimento() .
            '</td>'

            ;
            
           /* echo '<td width="250px"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/placa/' . $obj->getPlaca() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
echo '<td><img src="' . base_url() . 'assets/placa/' . $obj->getPlaca() . '" ></td>';
           */ 
            echo "<td><a href='" . base_url() . "Placa/eliminar/" . $obj->getId_placa() . "'>Elimina</a></td>";
            echo "<td><a href=" . base_url() . "Placa/obtener/" . $obj->getId_placa() . ">Actualizar</a></td>";
        }
        ?>
    </table>
</div>
<div class="text-center">
    <a  class="btn btn-success" href="<?= base_url('Placa/agregar') ?>" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Catálogo">Agregar nuevo registro</a>

</div>
</div>
</body>
</html>

