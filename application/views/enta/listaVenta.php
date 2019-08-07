<html>
<head>
    	 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container">
    <h1>Venta</h1>
    <div class="alert alert-info alert-warning">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Bienvenido</strong> Agrega, modifica o elimina tus datos
    </div>
        <div class="container">
            <left> <h1>Buscar</h1> </left>
            <input type="text" id="search" placeholder="Escribe para buscar..."  class="form-control" />
        </div>
        <table class="table table-bordered table-striped" >
            <MARQUEE SCROLLDELAY =200>Bienvenido  </MARQUEE>
            <thead
       <tr>
                   <th>id_venta</th>
                    <th>grupo</th>
                    <th>cliente</th>
                    <th>referencia</th>
                    <th>cantidad_maxima</th>
                    <th>precio_unitario</th>
                    <th>periodo_surtimiento</th>
                    <th>cantidad_minima</th>
                    <th>paqueteria</th>
                    <th>tipo_entrega</th>
                    <th>dias_credito</th>
                    <th>pulgadas</th>
                    <th>maquina_cliente</th>
                    <th>capacitacion</th>
                    <th>capacitacion_fecha</th>
                    <th>piezas_juego</th>
                    <th>costo_juego</th>
                    <th>juego_mensuales</th>
                    <th>golpes_prom_comp</th>
                    <th>golpes_prom_rodicut</th>
                    <th>beneficio_golpes_prom</th>
                    <th>tiempo_rot_com</th>
                    <th>tiempo_rot_rodicut</th>
                    <th>beneficio_rot_prom</th>
                    <th>precio_golpe</th>
                    <th>ciudad_planta</th>
                    <th>observacion</th>
                    <th>contacto</th>
                    <th>tipo_maquina</th>
                    <th>troquel</th>
                    <th>uso_de_cfdi</th>
                    <th>metodo_pago</th>
                    <th>forma_pago</th>
                    <th>fecha_visita</th>
                    <th>fecha_seguimiento</th>
                    <th>golpes_maquina</th>
                    <th>Eliminar</th>
                    <th>Modificar</th>

                </tr>
            </thead>



            <?php
            foreach ($ventas as $obj) {
                echo '<tr><td>';
                echo $obj->getId_venta() .
                '</td>'
                . '<td>'
                . $obj->getGrupo() .
                '</td>'
                . '<td>'
                . $obj->getCliente() .
                '</td>'
                . '<td>'
                . $obj->getReferencia() .
                '</td>'
                . '<td>'
                . $obj->getCantidad_maxima() .
                '</td>'
                . '<td>'
                . $obj->getPrecio_unitario() .
                '</td>'
                . '<td>'
                . $obj->getPeriodo_surtimiento() .
                 '</td>'
                . '<td>'
                . $obj->getCantidad_minima() .
                 '</td>'
                . '<td>'
                . $obj->getPaqueteria() .
                  '</td>'
                . '<td>'
                . $obj->getTipo_entrega() .
                  '</td>'
                . '<td>'
                . $obj->getDias_credito() .
                  '</td>'
                . '<td>'
                . $obj->getPulgadas() .
                 '</td>'
                . '<td>'
                . $obj->getMaquina_cliente() .
                 '</td>'
                . '<td>'
                . $obj->getCapacitacion() .
                  '</td>'
                . '<td>'
                . $obj->getCapacitacion_fecha() .
                 '</td>'
                . '<td>'
                . $obj->getPiezas_juego() .
                '</td>'
                . '<td>'
                . $obj->getCosto_juego() .
                '</td>'
                . '<td>'
                . $obj->getJuego_mensuales() .
                 '</td>'
                . '<td>'
                . $obj->getGolpes_prom_comp() .
                   '</td>'
                . '<td>'
                . $obj->getGolpes_prom_rodicut() .
                        '</td>'
                . '<td>'
                . $obj->getBeneficio_golpes_prom() .
                        '</td>'
                . '<td>'
                . $obj->getTiempo_rot_com() .
                        '</td>'
                . '<td>'
                . $obj->getTiempo_rot_rodicut() .
                        '</td>'
                . '<td>'
                . $obj->getBeneficio_rot_prom() .
                        '</td>'
                . '<td>'
                . $obj->getPrecio_golpe() .
                        '</td>'
                . '<td>'
                . $obj->getCiudad_planta() .
                        '</td>'
                . '<td>'
                . $obj->getObservacion() .
                        '</td>'
                . '<td>'
                . $obj->getContacto() .
                        '</td>'
                . '<td>'
                . $obj->getTipo_maquina() .
                        '</td>'
                . '<td>'
                . $obj->getTroquel() .
                        '</td>'
                . '<td>'
                . $obj->getUso_de_cfdi() .
                        '</td>'
                . '<td>'
                . $obj->getMetodo_pago() .
                        '</td>'
                . '<td>'
                . $obj->getForma_pago() .
                        '</td>'
                . '<td>'
                . $obj->getFecha_visita() .
                        '</td>'
                . '<td>'
                . $obj->getFecha_seguimiento() .
                        '</td>'
                . '<td>'
                . $obj->getGolpes_maquina().
                '</td>';
                echo "<td><a href='" . base_url() . "Venta/delete/" . $obj->getId_venta() . "'>Elimina</a></td>";
                echo "<td><a href='" . base_url() . "Venta/obtener/" . $obj->getId_venta() . "'>Actualizar</a></td>";
            }
            ?>
        </table>
</div>
<div class="text-center">
    <a  class="btn btn-success" href="<?= base_url('Venta/ViewAdd') ?>" data-toggle="tooltip" data-placement="right" title="Da clic para guardas los datos de la venta">Agregar nuevo registro</a>
   <!-- <a class="btn btn-success" href="<?= base_url('ReporteExcel/articulo') ?>" data-toggle="tooltip" data-placement="right" title="Da clic para ver los datos del articulo en excel">Reporte En Excel</a>
    <a class="btn btn-success" href="<?= base_url('ReportePdf/articulo') ?>" data-toggle="tooltip" data-placement="right" title="Da clic para ver los datos del articulo en pdf">Reporte En Pdf</a>
-->
   </div>

</div>


</body>
</html>



