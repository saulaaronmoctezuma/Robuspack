<?php include('header.php'); ?>

<div class="container" style="margin-top:20px;">
<h1><?= $title;  ?></h1>
<div class="table-responsive">
    <table class="table table-hover tablesorter">
        <thead>
            <tr>
               
                
                <th class="header">id_venta</th>
                    <th class="header">grupo</th>
                    <th class="header">cliente</th>
                    <th class="header">referencia</th>
                    <th class="header">cantidad_maxima</th>
                    <th class="header">precio_unitario</th>
                    <th class="header">periodo_surtimiento</th>
                    <th class="header">cantidad_minima</th>
                    <th class="header">paqueteria</th>
                    <th class="header">tipo_entrega</th>
                    <th class="header">dias_credito</th>
                    <th class="header">pulgadas</th>
                    <th class="header">maquina_cliente</th>
                    <th class="header">capacitacion</th>
                    <th class="header">capacitacion_fecha</th>
                    <th class="header">piezas_juego</th>
                    <th class="header">costo_juego</th>
                    <th class="header">juego_mensuales</th>
                    <th class="header">golpes_prom_comp</th>
                    <th class="header">golpes_prom_rodicut</th>
                    <th class="header">beneficio_golpes_prom</th>
                    <th class="header">tiempo_rot_com</th>
                    <th class="header">tiempo_rot_rodicut</th>
                    <th class="header">beneficio_rot_prom</th>
                    <th class="header">precio_golpe</th>
                    <th class="header">ciudad_planta</th>
                    <th class="header">observacion</th>
                    <th class="header">contacto</th>
                    <th class="header">tipo_maquina</th>
                    <th class="header">troquel</th>
                    <th class="header">uso_de_cfdi</th>
                    <th class="header">metodo_pago</th>
                    <th class="header">forma_pago</th>
                    <th class="header">fecha_visita</th>
                    <th class="header">fecha_seguimiento</th>
                    <th class="header">golpes_maquina</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $ctr=0;
            foreach($listaClienteRefacciones as $row)
                {
                    $ctr++;
                    ?>
                    <tr>
                     <td><?php echo $ctr; ?></td>
                      
                        <td><?php echo $row->grupo; ?></td> 
                        <td><?php echo $row->cliente; ?></td> 
                        <td><?php echo $row->referencia; ?></td> 
                        <td><?php echo $row->cantidad_maxima; ?></td> 
                        <td><?php echo $row->precio_unitario; ?></td>   
                        <td><?php echo $row->periodo_surtimiento; ?></td>
                        <td><?php echo $row->cantidad_minima; ?></td>
                        <td><?php echo $row->paqueteria; ?></td> 
                        <td><?php echo $row->tipo_entrega; ?></td>   
                        <td><?php echo $row->dias_credito; ?></td>
                        <td><?php echo $row->pulgadas; ?></td> 
                        <td><?php echo $row->maquina_cliente; ?></td> 
                        <td><?php echo $row->capacitacion; ?></td>   
                        <td><?php echo $row->capacitacion_fecha; ?></td>
                        <td><?php echo $row->piezas_juego; ?></td> 
                        <td><?php echo $row->costo_juego; ?></td> 
                        <td><?php echo $row->juego_mensuales; ?></td>   
                        <td><?php echo $row->golpes_prom_comp; ?></td>
                        <td><?php echo $row->golpes_prom_rodicut; ?></td>
                        <td><?php echo $row->beneficio_golpes_prom; ?></td> 
                        <td><?php echo $row->tiempo_rot_com; ?></td>   
                        <td><?php echo $row->tiempo_rot_rodicut; ?></td>
                        <td><?php echo $row->beneficio_rot_prom; ?></td> 
                        <td><?php echo $row->precio_golpe; ?></td> 
                        <td><?php echo $row->ciudad_planta; ?></td>   
                        <td><?php echo $row->observacion; ?></td>
                        <td><?php echo $row->contacto; ?></td> 
                        <td><?php echo $row->tipo_maquina; ?></td> 
                        <td><?php echo $row->troquel; ?></td>   
                        <td><?php echo $row->uso_de_cfdi; ?></td>
                        <td><?php echo $row->metodo_pago; ?></td> 
                        <td><?php echo $row->forma_pago; ?></td> 
                        <td><?php echo $row->fecha_visita; ?></td>   
                        <td><?php echo $row->fecha_seguimiento; ?></td>
                        <td><?php echo $row->golpes_maquina; ?></td> 
                      
                        
                        
                    </tr>
                  
            <?php } ?>

        </tbody>
    </table>
  <div align="center">
    <form method="post" action="<?php echo base_url(); ?>ExcelClienteRefacciones/crearExcel">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
   </div>


  <!--   <a class="pull-right btn btn-primary btn-xs" href="<?php echo base_url()?>export/createxls"><i class="fa fa-file-excel-o"></i> Export Data</a> -->
</div> 
</div>
<?php include('footer.php'); ?>