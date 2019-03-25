<html>
    <head>

    <div class="container">
        <h1>Cotizador</h1>

        <div class="alert alert-info alert-warning">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Bienvenido</strong> Agrega, Modifica o Elimina sus Datos
        </div>

        <left> <h1>Buscar</h1> </left>
        <input type="text" id="search" placeholder="Escribe para buscar..."  class="form-control" />
    </div>

    <table  border="0" class="table table-bordered table-striped">
        <MARQUEE SCROLLDELAY =200> </MARQUEE>
        <thead
            <tr>
                <th>Id</th>
                <th>Cliente</th>
                <th>Dirección Fiscal</th>
                <th>Contacto</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>No de O. Refacc</th>
                <th>No de Cotización</th>
                <th>Fecha de Solicitud</th>
                <th>Item No</th>
                <th>Descripción en Español</th>
                <th>Descripción en Inglés</th>
                <th>Observaciones</th>
                <th>Código Refacción</th>
                <th>Modelo de Máquina</th>
                <th>QTY</th>
                <th>Precio Unitario</th>
                <th>Precio Total</th>
                <th>Moneda</th>
                <th>Eliminar</th>
                <th>Modificar</th>

            </tr>
        </thead>

        <?php
        
        
        
        
        foreach ($cotizador as $obj) {
            echo '<tr><td>';
            echo $obj->getId_cotizador() .
            '</td>'
            . '<td>'
            . $obj->getCliente() .
            '</td>'
            . '<td>'
            . $obj->getDir_fiscal() .
            '</td>'
            . '<td>'
            . $obj->getContacto() .
            '</td>'
            . '<td>'
            . $obj->getTel() .
            '</td>'
            . '<td>'
            . $obj->getEmail() .
            '</td>'
            . '<td>'
            . $obj->getNo_refacc() .
            '</td>'
            . '<td>'
            . $obj->getNo_cotizacion() .
            '</td>'
            . '<td>'
            . $obj->getFech_solicitud() .
            '</td>'
            . '<td>'
            . $obj->getNo_item() .
            '</td>'
            . '<td>'
            . $obj->getDescri_esp() .
            '</td>'
            . '<td>'
            . $obj->getDescri_ingles() .
            '</td>'
            . '<td>'
            . $obj->getObservaciones() .
            '</td>'
            . '<td>'
            . $obj->getCod_refacc() .
            '</td>'
            . '<td>'
            . $obj->getModelo_maq() .
            '</td>'
            . '<td>'
            . $obj->getQty() .
            '</td>'
            . '<td>'
            . $obj->getPre_uni() .
            '</td>'
            . '<td>'
            . $obj->getPre_total() .
            '</td>'
            . '<td>'
            . $obj->getMoneda() .
            '</td>'
            ;

            echo "<td><a href='" . base_url() . "Cotizador/eliminar/" . $obj->getId_cotizador() . "'>Elimina</a></td>";
            echo "<td><a href=" . base_url() . "Cotizador/obtener/" . $obj->getId_cotizador() . ">Actualizar</a></td>";
        }
        ?>
    </table>
</div>
<div class="text-center"><a  class="btn btn-success" href="<?= base_url('Cotizador/agregar') ?>" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos del Cotizador">Agregar nuevo registro</a></div>
</div>
</body>
</html>

