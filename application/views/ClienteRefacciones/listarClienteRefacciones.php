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

        $site_title = $result->site_title;
        //check user level
        ?>

 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script>
            $(document).ready(function() {
                $(".hidediv").click(function() {
                    $(".divdemo").hide("slow");
                });

                $(".showdiv").click(function() {
                    $(".divdemo").show(2000);
                });

            });

        </script>
        <style>
            .divTable,divTableBody{

                background-color:#0780BA;
                color:#fff;
                padding:100px;
                font-size:25px;
            }
            /* DivTable.com */
            .divTable{
                display: table;
                width: 100%;
            }
            .divTableRow {
                display: table-row;
            }
            .divTableHeading {
                background-color: #EEE;
                display: table-header-group;
            }
            .divTableCell, .divTableHead {
                border: 1px solid #999999;
                display: table-cell;
                padding: 3px 10px;
            }
            .divTableHeading {
                background-color: #EEE;
                display: table-header-group;
                font-weight: bold;
            }
            .divTableFoot {
                background-color: #EEE;
                display: table-footer-group;
                font-weight: bold;
            }
            .divTableBody {
                display: table-row-group;
            }

}
        </style>


    </head>


    <div class="container" style="margin-top:1px;">

        <center>  <h1>Control SIC</h1></center>

        <div class="alert alert-info alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Bienvenido</strong> Agrega, Modifica o Elimina sus Datos
        </div>
        <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
            <input type="text" id="myInput" placeholder="Escribe para buscar..."  class="form-control" />
        </div>


        <div class="row">
            <div class="text-center">
                <form method="post" action="<?php echo base_url(); ?>ClienteRefacciones/agregar">
                    <input type="submit" name="agregar"  title="Da clic para agregar un nuevo registro" class="btn btn-success" value="Agregar Nuevo Registro" />
                </form>
                <br>

                <form method="post" action="<?php echo base_url(); ?>ExportarExcel/crearExcelRefacciones">

                    <button  class="btn btn-info" title="Da clic para exportar los datos a Excel" style="font-size:16px;color:white"><font color="white">Exportar</font> <i class="fa fa-file-excel-o"></i></button>
                </form>   


            </div><BR>
        </div>
    </div>

    <script language="javascript" type="text/javascript">
        var table6_Props = {
            paging: true,
            paging_length: 3,
            rows_counter: true,
            rows_counter_text: "Rows:",
            btn_reset: true,
            loader: true,
            loader_text: "Filtering data..."
        };
        var tf6 = setFilterGrid("table6", table6_Props);
    </script> 











    <div class="container" style="margin-top:1px;">








<?php
        if ($dataLevel == 'is_admin') {
            echo '
    <p><button class="hidediv">Ocultar Registros</button>
<button class="showdiv">Mostrar Registros</button>
</p>    
   
     
     <div class="divdemo" style="display:none";>    
<div class="divTableBody">
<div class="divTableRow">
<div class="divTableCell" style="background-color:#17202A;"><strong><p style="color:#FFFFFF";>Vendedor</p></strong></div>
<div class="divTableCell" style="background-color:#17202A;"><strong><p style="color:#FFFFFF";>Registros</p></strong></div>
<div class="divTableCell" style="background-color:#17202A;"><strong><p style="color:#FFFFFF";>No Troquela</p></strong></div>
<div class="divTableCell" style="background-color:#17202A;"><strong><p style="color:#FFFFFF";>Consignación</p></strong></div>
<div class="divTableCell" style="background-color:#17202A;"><strong><p style="color:#FFFFFF";>OC</p></strong></div>
<div class="divTableCell" style="background-color:#17202A;"><strong><p style="color:#FFFFFF";>Sin Pedido</p></strong></div>
</div>
<div class="divTableRow">
<div class="divTableCell">Rodrigo</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroSicCarlos as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_carlos ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                <div class="divTableCell"> ';

            foreach ($totalRegistroSicNoTroquelaCarlos as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_carlos ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                
<div class="divTableCell"> ';

            foreach ($totalRegistroSicConfirmacionCarlos as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_carlos ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                
<div class="divTableCell"> ';

            foreach ($totalRegistroSicOrdenCarlos as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_carlos ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                
<div class="divTableCell"> ';

            foreach ($totalRegistroSicSinPedidoCarlos as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_carlos ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                
            
</div>';



            





        

echo '
        
<div class="divTableRow">
<div class="divTableCell">Aldo</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroSicAldo as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_aldo ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                <div class="divTableCell"> ';

            foreach ($totalRegistroSicNoTroquelaAldo as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_aldo ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                
<div class="divTableCell"> ';

            foreach ($totalRegistroSicConfirmacionAldo as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_aldo ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                
<div class="divTableCell"> ';

            foreach ($totalRegistroSicOrdenAldo as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_aldo ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                
<div class="divTableCell"> ';

            foreach ($totalRegistroSicSinPedidoAldo as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_aldo ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                
            
</div>';




        


        

echo '
        
<div class="divTableRow">
<div class="divTableCell">Martín</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroSicElvira as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_elvira ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                <div class="divTableCell"> ';

            foreach ($totalRegistroSicNoTroquelaElvira as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_elvira ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                
<div class="divTableCell"> ';

            foreach ($totalRegistroSicConfirmacionElvira as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_elvira ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                
<div class="divTableCell"> ';

            foreach ($totalRegistroSicOrdenElvira as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_elvira ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                
<div class="divTableCell"> ';

            foreach ($totalRegistroSicSinPedidoElvira as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_elvira ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                     
</div>';
                  echo '</div></div>
        ';  
        } else if ($dataLevel == 'is_editor') {
         echo '
    <p><button class="hidediv">Ocultar Registros</button>
<button class="showdiv">Mostrar Registros</button>
</p>    
   
     
     <div class="divdemo" style="display:none";>    
<div class="divTableBody">
<div class="divTableRow">
<div class="divTableCell" style="background-color:#17202A;"><strong><p style="color:#FFFFFF";>Vendedor</p></strong></div>
<div class="divTableCell" style="background-color:#17202A;"><strong><p style="color:#FFFFFF";>Registros</p></strong></div>
<div class="divTableCell" style="background-color:#17202A;"><strong><p style="color:#FFFFFF";>No Troquela</p></strong></div>
<div class="divTableCell" style="background-color:#17202A;"><strong><p style="color:#FFFFFF";>Consignación</p></strong></div>
<div class="divTableCell" style="background-color:#17202A;"><strong><p style="color:#FFFFFF";>OC</p></strong></div>
<div class="divTableCell" style="background-color:#17202A;"><strong><p style="color:#FFFFFF";>Sin Pedido</p></strong></div>
</div>
<div class="divTableRow">
<div class="divTableCell">Rodrigo</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroSicCarlos as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_carlos ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                <div class="divTableCell"> ';

            foreach ($totalRegistroSicNoTroquelaCarlos as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_carlos ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                
<div class="divTableCell"> ';

            foreach ($totalRegistroSicConfirmacionCarlos as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_carlos ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                
<div class="divTableCell"> ';

            foreach ($totalRegistroSicOrdenCarlos as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_carlos ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                
<div class="divTableCell"> ';

            foreach ($totalRegistroSicSinPedidoCarlos as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_carlos ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                
            
</div>';



            





        

echo '
        
<div class="divTableRow">
<div class="divTableCell">Aldo</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroSicAldo as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_aldo ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                <div class="divTableCell"> ';

            foreach ($totalRegistroSicNoTroquelaAldo as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_aldo ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                
<div class="divTableCell"> ';

            foreach ($totalRegistroSicConfirmacionAldo as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_aldo ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                
<div class="divTableCell"> ';

            foreach ($totalRegistroSicOrdenAldo as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_aldo ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                
<div class="divTableCell"> ';

            foreach ($totalRegistroSicSinPedidoAldo as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_aldo ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                
            
</div>';




        


        

echo '
        
<div class="divTableRow">
<div class="divTableCell">Martín</div>
<div class="divTableCell"> ';

            foreach ($totalRegistroSicElvira as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_elvira ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                <div class="divTableCell"> ';

            foreach ($totalRegistroSicNoTroquelaElvira as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_elvira ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                
<div class="divTableCell"> ';

            foreach ($totalRegistroSicConfirmacionElvira as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_elvira ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                
<div class="divTableCell"> ';

            foreach ($totalRegistroSicOrdenElvira as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_elvira ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                
<div class="divTableCell"> ';

            foreach ($totalRegistroSicSinPedidoElvira as $fila) {

                echo '<div class="grid_12" id="cuerpo"><center>';
                ?>


                <?= $fila->total_registros_elvira ?>


                <?php
                echo '</center></div>';
            }
            echo '</div>
                     
</div>';
                  echo '</div></div>
        ';  
        }
        ?>

























        <div class="table-responsive">





            <?php
            if ($dataLevel == 'is_servicio_a_clientes') {
                echo '<table class=" table table-hover table-bordered table-striped" >';
            }
            else if ($dataLevel == 'is_refacciones') {
                echo '<table class=" table table-hover table-bordered table-striped" >';
            }else {
                echo '<table class=" table table-hover table-bordered table-striped" id="example" >';
            }
            ?>

            <MARQUEE SCROLLDELAY =200> </MARQUEE>








            <thead>
                <tr >


                    <?php
                    if ($dataLevel == 'is_admin') {
                        echo '<th class="header" colspan="2" style="text-align: center">Modificar</th>';
                        
                    } else if ($dataLevel == 'is_Gerente_Ventas') {
                        echo '<th class="header" colspan="1" style="text-align: center">Eliminar</th>';
                        echo '<th class="header" colspan="1" style="text-align: center">Modificar</th>';
                        echo '<th class="header" colspan="1" style="text-align: center">Eliminar</th>';
                    } else if ($dataLevel == 'is_refacciones') {
                        echo '<th class="header" colspan="1" align="center" >Modificar</th>';
                    } else if ($dataLevel == 'is_maquinaria_refacciones') {
                        echo '<th class="header" colspan="1" >Acción</th>';
                    } else if ($dataLevel == 'is_editor') {
                        echo '<th class="header" style="text-align: center"  colspan="2" >Acción</th>';
                    } else if ($dataLevel == 'is_servicio_a_clientes') {
                        echo '<th class="header" align="center" >Modificar</th>';
                    }
                    ?>




                    <?php
                    if ($dataLevel == 'is_admin') {
                        echo '<th class="header">Usuario</th>';
                    } else if ($dataLevel == 'is_Gerente_Ventas') {

                        echo '<th class="header">Usuario</th>';
                        ;
                    }else if ($dataLevel == 'is_editor') {
                         echo '<th class="header">Usuario</th>';
                    }
                    
                    else if ($dataLevel == 'is_servicio_a_clientes') {
                         echo '<th class="header">Usuario</th>';
                    } else {
                        
                    }
                    ?>


                    <?php
                    if ($dataLevel == 'is_admin') {
                        
                        echo '<th class="header" width="50" height="16">Fecha Última Factura</th>';
                        echo '<th class="header" width="50" height="16">Consumo Real</th>';
                        echo '<th class="header" width="50" height="16">Archivo</th>';
                    } else if ($dataLevel == 'is_servicio_a_clientes') {
                        echo '<th class="header" width="50" height="16">Fecha_Última&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Factura</th>';
                        echo '<th class="header" width="50" height="16">Consumo Real</th>';
                         echo '<th class="header" width="50" height="16">Archivo</th>';
                    } else if ($dataLevel == 'is_editor') {
                        echo '<th class="header" width="50" height="16">Fecha_Última Factura</th>';
                        echo '<th class="header" width="50" height="16">Consumo Real</th>';
                    } else if ($dataLevel == 'is_Gerente_Ventas') {
                        echo '<th class="header" width="50" height="16">Fecha_Última Factura</th>';
                        echo '<th class="header" width="50" height="16">Consumo Real</th>';
                    } else {
                        
                    }
                    ?>


                    <th class="header" style="text-align: center">Grupo</th>
                    <th class="header" style="text-align: center">Cliente</th>
                         <th class="header" style="text-align: center">Consumibles</th>
                    <th class="header" style="text-align: center">Código</th>
                    
                
                    
                    
                    
                    
                    
                    
                     <!--<th class="header" style="text-align: center">Código cuchilla</th>
                    <th class="header" style="text-align: center">Cantidad cuchilla</th>
                    <th class="header" style="text-align: center">Precio cuchilla </th>
                    <th class="header" style="text-align: center">Código cubierta </th>
                    <th class="header" style="text-align: center">Cantidad cubierta</th>
                    <th class="header" style="text-align: center">Precio cubierta</th>
                    <th class="header" style="text-align: center">Código llanta</th>
                    <th class="header" style="text-align: center">Cantidad llanta</th>
                    <th class="header" style="text-align: center">Precio llanta</th>
                    <th class="header" style="text-align: center">Código rasqueta</th>
                    <th class="header" style="text-align: center">Cantidad rasqueta</th>
                    <th class="header" style="text-align: center">Precio rasqueta</th>
                    <th class="header" style="text-align: center">Código inserto </th>
                    <th class="header" style="text-align: center">Cantidad inserto</th>
                    <th class="header" style="text-align: center">Precio inserto </th>  -->
                    <th class="header" style="text-align: center">Cantidad máxima</th>
                    <th class="header" style="text-align: center">Precio unitario</th>
                    <th class="header" style="text-align: center">Vida Util Dias</th>
                    <th class="header">Periodo surtimiento</th>
                    <th class="header">Periodo surtimiento Vida Util</th>
                    <th class="header">Cantidad mínima</th>
                    <th class="header">Paquetería</th>
                    <th class="header">Tipo entrega</th>
                    <th class="header">Dias crédito</th>
                    <th class="header">Pulgadas</th>
                    <th class="header">Diametro de Rodillo en Milimetros</th>
                    <th class="header">Máquina cliente</th>
                    <th class="header">Capacitación</th>
                    <th class="header">Capacitación fecha</th>
                    <th class="header">Piezas juego</th>
                    <th class="header">Costo juego</th>
                    <th class="header">Juego mensuales</th>
                    <th class="header">Golpes prom comp</th>
                    <th class="header">Golpes prom rodicut</th>
                    <th class="header">Beneficio golpes prom</th>
                    <th class="header">Tiempo rot com</th>
                    <th class="header">Tiempo rot rodicut</th>
                    <th class="header">Beneficio rot prom</th>
                    <th class="header">Precio golpe</th>
                    <th class="header">Ciudad planta</th>
                    <th class="header" style="table-layout: auto;">Observación</th>
                    <th class="header">Marca de la máquina</th>
                    <th class="header">Modelo de la máquina</th>
                    <th class="header">Tipo máquina</th>
                    <th class="header">Formato</th>
                    <th class="header">Ancho</th>
                    <th class="header">Troquel</th>
                    <th class="header">Uso de cfdi</th>
                    <th class="header">Método pago</th>
                    <th class="header">Fecha visita</th>
                    <th class="header">Fecha seguimiento</th>
                    <th class="header">Golpes máquina por día</th>
                    <th class="header">Confirmación de Orden de Compra</th>






                </tr>
            </thead>
            <tbody align="center" id="myTable">


                <?php
                foreach ($ventas as $obj) {






                    echo '<tr>  ';


                    //compara si es administrador
                    if ($dataLevel == 'is_admin') {
                        echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'ClienteRefacciones/eliminar/' . $obj->getId_venta() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'ClienteRefacciones/actualizar/' . $obj->getId_venta() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-file"></button></a></td>';
                             echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'ClienteRefacciones/obtener/' . $obj->getId_venta() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                   
                        } else if ($dataLevel == 'is_editor') {
                        echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'ClienteRefacciones/eliminar/' . $obj->getId_venta() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'ClienteRefacciones/obtener/' . $obj->getId_venta() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    } else if ($dataLevel == 'is_Gerente_Ventas') {
  echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'ClienteRefacciones/eliminar/' . $obj->getId_venta() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                       echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'ClienteRefacciones/obtener/' . $obj->getId_venta() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                   
                    } else if ($dataLevel == 'is_refacciones') {
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'ClienteRefacciones/obtener/' . $obj->getId_venta() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    } else if ($dataLevel == 'is_maquinaria_refacciones') {
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'ClienteRefacciones/obtener/' . $obj->getId_venta() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    } else if ($dataLevel == 'is_servicio_a_clientes') {
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'ClienteRefacciones/actualizar/' . $obj->getId_venta() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    }




                    if ($dataLevel == 'is_admin') {
                        echo '<td>';
                        echo $obj->getFirst_name() .
                        '</td>'

                        ;
                    } else if ($dataLevel == 'is_Gerente_Ventas') {
                        echo '</td><td>';
                        echo $obj->getFirst_name() .
                        '</td>'

                        ;
                    } else if ($dataLevel == 'is_servicio_a_clientes') {
                        echo '</td><td>';
                        echo $obj->getFirst_name() .
                        '</td>'

                        ;
                    }
                    else if ($dataLevel == 'is_editor') {
                        echo '</td><td>';
                        echo $obj->getFirst_name() .
                        '</td>'

                        ;
                    }else {
                        
                    }



                    if ($dataLevel == 'is_admin') {
                        echo '<td>';
                        echo $obj->getFecha_ultima_factura() .
                        '</td>';
                        echo '<td>';
                        echo $obj->getConsumo_real() .
                        '</td>';
                    } else if ($dataLevel == 'is_servicio_a_clientes') {
                        echo '<td>';
                        echo $obj->getFecha_ultima_factura() .
                        '</td>';
                        echo '<td>';
                        echo $obj->getConsumo_real() .
                        '</td>';
                    } else if ($dataLevel == 'is_Gerente_Ventas') {
                        echo '<td>';
                        echo $obj->getFecha_ultima_factura() .
                        '</td>';
                        echo '<td>';
                        echo $obj->getConsumo_real() .
                        '</td>';
                    } else if ($dataLevel == 'is_editor') {
                        echo '<td>';
                        echo $obj->getFecha_ultima_factura() .
                        '</td>';
                        ;
                        echo '<td>';
                        echo $obj->getConsumo_real() .
                        '</td>';
                    }

                    
                    //archivo subido en SIC
                    if (($obj->getArchivo() == null) && ($dataLevel == 'is_admin')) {
                        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
                    } else if (($obj->getArchivo() != null)&& ($dataLevel == 'is_admin')) {
                        echo '<td style="text-align: center;color:#FF0000"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/ClienteRefacciones/' . $obj->getArchivo() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
                    }
                    
                    
                     if (($obj->getArchivo() == null) && ($dataLevel == 'is_servicio_a_clientes')) {
                        echo '<td style="text-align: center;color:#FF0000">Sin Archivo</td>';
                    } else if (($obj->getArchivo() != null)&& ($dataLevel == 'is_servicio_a_clientes')) {
                        echo '<td style="text-align: center;color:#FF0000"><a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/ClienteRefacciones/' . $obj->getArchivo() . '" target=”_blank” rel=”nofollow”> <button type="button" class="btn btn-sucess"><span class="glyphicon glyphicon-save"></button></a></td>';
                    }
                    

                    echo '<td>';

                    echo $obj->getGrupo() .
                    '</td>'
                    . '<td>'
                    . $obj->getCliente() .
                    '</td>' 
                   /* . '<td>'
                    . $obj->getReferencia() .
                    '</td>'
                    
                    
                    
                    
                                
            /*
     . '<td>'     . $obj->getCodigo_cuchilla() .     '</td>'
. '<td>'     . $obj->getCantidad_cuchilla() .     '</td>'
. '<td>'     . $obj->getPrecio_cuchilla() .     '</td>'
. '<td>'     . $obj->getCodigo_cubierta() .     '</td>'
. '<td>'     . $obj->getCantidad_cubierta() .     '</td>'
. '<td>'     . $obj->getPrecio_cubierta() .     '</td>'
. '<td>'     . $obj->getCodigo_llanta() .     '</td>'
. '<td>'     . $obj->getCantidad_llanta() .     '</td>'
. '<td>'     . $obj->getPrecio_llanta() .     '</td>'
. '<td>'     . $obj->getCodigo_rasqueta() .     '</td>'
. '<td>'     . $obj->getCantidad_rasqueta() .     '</td>'
. '<td>'     . $obj->getPrecio_rasqueta() .     '</td>'
. '<td>'     . $obj->getCodigo_inserto() .     '</td>'
. '<td>'     . $obj->getCantidad_inserto() .     '</td>'
. '<td>'     . $obj->getPrecio_inserto() .     '</td>'
       
        */    
            ?>
            
            <?php
    if (($obj->getCodigo_cuchilla() == null)&&($obj->getCodigo_cubierta() == null)&&($obj->getCodigo_llanta() == null)&&($obj->getCodigo_rasqueta() == null)&&($obj->getCodigo_inserto() == null)) {
        echo '<td title="Sin datos"sin datos><center><i style="font-size:12px;color:red" class="fa fa-times-circle" aria-hidden="true"></i></center></td>';
    } else  {
        ?>

                    <td>
                    <center> 
                        <a title="Da clic para ver los contactos" data-toggle="modal" data-target="#modalNecesidad<?php echo $obj->getId_venta() ?>">
                            <i style="font-size:16px;color:green" class="fa fa-check-circle" aria-hidden="true"></i>
                            
                        </a>
                    </center>


                    <script>

                    </script>
                    <div class="modal bs-example-modal-lg fade modal fullscreen-modal fade" id="modalNecesidad<?php echo $obj->getId_venta() ?>" tabindex="-1" role="dialog" aria-labelledby="modalNecesidad">
                        <div class="modal-dialog modal-xlg" role="document" >
                            <div class="modal-content">
                                <div class="modal-header">
                                    <center>        
                                        <a title="Da clic para regresar" style="color:#000000" href="<?php echo site_url(); ?>CensoMaquinaria">    
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </a></center>

                                    <h4 class="modal-title" id="modalNecesidad">Empresa :  <?php echo $obj->getCliente() ?> <br>

                                    </h4>
                                </div>
                                <div class="modal-body">
                                   <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.18/r-2.2.2/datatables.min.css"/>
                                    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.18/r-2.2.2/datatables.min.js"></script>-->
                                    <script>
                        function uno(src)
                        {
                            with (document)
                            {
                                var cel = getElementById(src);
                                with (cel)
                                {
                                    style.backgroundColor = "yellow";
                                    style.cursor = 'hand';
                                }
                                if (src != 1)
                                {
                                    getElementById('1').style.backgroundColor = "white";
                                }
                                fila('2');
                                getElementById('x').value = src;
                            }
                        }
                        function dos(src)
                        {
                            with (document)
                            {
                                var cel = getElementById(src);
                                with (cel)
                                {
                                    style.backgroundColor = "white";
                                    style.cursor = 'default';
                                }
                            }
                        }
                        function fila(obj)
                        {
                            with (document)
                            {
                                var celda = getElementById('x').value;
                                if (celda != "")
                                {
                                    var marcar = getElementById(celda);
                                    switch (obj)
                                    {
                                        case "1":
                                            marcar.style.backgroundColor = "yellow";
                                            break
                                        case "2":
                                            marcar.style.backgroundColor = "white";
                                            break
                                    }
                                }
                            }
                        }
                        function ini()
                        {
                            with (document)
                            {
                                getElementById('1').style.backgroundColor = "yellow";
                            }
                        }
                                    </script>






                                    <table border="1" class="table dataTables">

                                        <tr bgcolor="red">
                                            <td bgcolor="#1DDDFF">Producto</td>
                                            <td bgcolor="#1DDDFF">Codigo</td>
                                            <td bgcolor="#1DDDFF">Cantidad por mes</td>

                                            <td bgcolor="#1DDDFF">Precio Unitario </th>

                                        </tr>


                                        <tr id="1" onmouseover=uno('1'); onmouseout=dos('1');>
                                            <td> Cuchilla </td>
                                            <td><?php echo $obj->getCodigo_cuchilla() ?></td>
                                            <td><?php echo $obj->getCantidad_cuchilla() ?></td>
                                            <td><?php echo $obj->getPrecio_cuchilla() ?></td>

                                        </tr>


                                        <?php
                                        if ($obj->getCodigo_cuchilla_2() == null) {

                                        } else {
                                            ?>
                                        <tr id="2" onmouseover=uno('2'); onmouseout=dos('2');>
                                            <td>  </td>
                                            <td> <?php echo $obj->getCodigo_cuchilla_2() ?></td>
                                            <td> <?php echo $obj->getCantidad_cuchilla_2() ?></td>
                                            <td> <?php echo $obj->getPrecio_cuchilla_2() ?></td>

                                        </tr>
                                            <?php
                                        }
                                        ?>
                                        
                                        
                                        
                                      
                                             <?php
                                        if ($obj->getCodigo_cuchilla_3() == null) {

                                        } else {
                                            ?>
                                       <tr id="3" onmouseover=uno('3'); onmouseout=dos('3');>
                                            <td>  </td>
                                            <td> <?php echo $obj->getCodigo_cuchilla_3() ?></td>
                                            <td> <?php echo $obj->getCantidad_cuchilla_3() ?></td>
                                            <td> <?php echo $obj->getPrecio_cuchilla_3() ?></td>

                                        </tr>
                                            <?php
                                        }
                                        ?>
                                        
                                        
                                        
                                            <?php
                                        if ($obj->getCodigo_cuchilla_4() == null) {

                                        } else {
                                            ?>
                                      <tr id="4" onmouseover=uno('4'); onmouseout=dos('4');>
                                            <td>  </td>
                                            <td> <?php echo $obj->getCodigo_cuchilla_4() ?></td>
                                            <td> <?php echo $obj->getCantidad_cuchilla_4() ?></td>
                                            <td> <?php echo $obj->getPrecio_cuchilla_4() ?></td>

                                        </tr>
                                            <?php
                                        }
                                        ?>
                                        
                                        
                                            <?php
                                        if ($obj->getCodigo_cuchilla_5() == null) {

                                        } else {
                                            ?>
                                      <tr id="5" onmouseover=uno('5'); onmouseout=dos('5');>
                                            <td>  </td>
                                            <td> <?php echo $obj->getCodigo_cuchilla_5() ?></td>
                                            <td> <?php echo $obj->getCantidad_cuchilla_5() ?></td>
                                            <td> <?php echo $obj->getPrecio_cuchilla_5() ?></td>

                                        </tr>
                                            <?php
                                        }
                                        ?>
                                        
                                        
                                            <?php
                                        if ($obj->getCodigo_cuchilla_6() == null) {

                                        } else {
                                            ?>
                                       <tr id="6" onmouseover=uno('6'); onmouseout=dos('6');>
                                            <td>  </td>
                                            <td> <?php echo $obj->getCodigo_cuchilla_6() ?></td>
                                            <td> <?php echo $obj->getCantidad_cuchilla_6() ?></td>
                                            <td> <?php echo $obj->getPrecio_cuchilla_6() ?></td>

                                        </tr>
                                            <?php
                                        }
                                        ?>
                                        
                                            <?php
                                        if ($obj->getCodigo_cuchilla_7() == null) {

                                        } else {
                                            ?>
                                      
                                        <tr id="7" onmouseover=uno('7'); onmouseout=dos('7');>
                                            <td>  </td>
                                            <td> <?php echo $obj->getCodigo_cuchilla_7() ?></td>
                                            <td> <?php echo $obj->getCantidad_cuchilla_7() ?></td>
                                            <td> <?php echo $obj->getPrecio_cuchilla_7() ?></td>

                                        </tr>

                                            <?php
                                        }
                                        ?>
                                        
                                        
                                            <?php
                                        if ($obj->getCodigo_cuchilla_8() == null) {

                                        } else {
                                            ?>
                                         

                                       

                                        <tr id="8" onmouseover=uno('8'); onmouseout=dos('8');>
                                            <td>  </td>
                                            <td> <?php echo $obj->getCodigo_cuchilla_8() ?></td>
                                            <td> <?php echo $obj->getCantidad_cuchilla_8() ?></td>
                                            <td> <?php echo $obj->getPrecio_cuchilla_8() ?></td>

                                        </tr>
                                            <?php
                                        }
                                        ?>
                                       
                                        
                                            <?php
                                        if ($obj->getCodigo_cuchilla_9() == null) {

                                        } else {
                                            ?>
                                      
                                       

                                        <tr id="9" onmouseover=uno('9'); onmouseout=dos('9');>
                                            <td>  </td>
                                            <td> <?php echo $obj->getCodigo_cuchilla_9() ?></td>
                                            <td> <?php echo $obj->getCantidad_cuchilla_9() ?></td>
                                            <td> <?php echo $obj->getPrecio_cuchilla_9() ?></td>

                                        </tr>

                                            <?php
                                        }
                                        ?>
                                        
                                        
                                            <?php
                                        if ($obj->getCodigo_cuchilla_10() == null) {

                                        } else {
                                            ?>
                                       <tr id="10" onmouseover=uno('10'); onmouseout=dos('10');>
                                            <td>  </td>
                                            <td> <?php echo $obj->getCodigo_cuchilla_10() ?></td>
                                            <td> <?php echo $obj->getCantidad_cuchilla_10() ?></td>
                                            <td> <?php echo $obj->getPrecio_cuchilla_10() ?></td>

                                        </tr>

                                            <?php
                                        }
                                        ?>
                                        
                                        
                                            <?php
                                        if ($obj->getCodigo_cuchilla_11() == null) {

                                        } else {
                                            ?>
                                       
                                        <tr id="11" onmouseover=uno('11'); onmouseout=dos('11');>
                                            <td>  </td>
                                            <td> <?php echo $obj->getCodigo_cuchilla_11() ?></td>
                                            <td> <?php echo $obj->getCantidad_cuchilla_11() ?></td>
                                            <td> <?php echo $obj->getPrecio_cuchilla_11() ?></td>

                                        </tr>
                                            <?php
                                        }
                                        ?>
                                       
                                       
                                       
                                       
                                       
                                       
                                       
                                       
                                       

                                       


                                        

                                      


                                        <tr id="12" onmouseover=uno('12'); onmouseout=dos('12');>
                                            <td> Cubierta </td>
                                            <td> <?php echo $obj->getCodigo_cubierta() ?></td>
                                            <td> <?php echo $obj->getCantidad_cubierta() ?></td>
                                            <td> <?php echo $obj->getPrecio_cubierta() ?></td>

                                        </tr>

                                        <tr id="13" onmouseover=uno('13'); onmouseout=dos('13');>
                                            <td> LLanta </td>
                                            <td> <?php echo $obj->getCodigo_llanta() ?></td>
                                            <td> <?php echo $obj->getCantidad_llanta() ?></td>
                                            <td> <?php echo $obj->getPrecio_llanta() ?></td>

                                        </tr>

                                        <tr id="14" onmouseover=uno('14'); onmouseout=dos('14');>
                                            <td> Rasqueta </td>
                                            <td> <?php echo $obj->getCodigo_rasqueta() ?></td>
                                            <td> <?php echo $obj->getCantidad_rasqueta() ?></td>
                                            <td> <?php echo $obj->getPrecio_rasqueta() ?></td>

                                        </tr>

                                        <tr id="15" onmouseover=uno('15'); onmouseout=dos('15');>
                                            <td> Inserto </td>
                                            <td> <?php echo $obj->getCodigo_inserto() ?></td>
                                            <td> <?php echo $obj->getCantidad_inserto() ?></td>
                                            <td> <?php echo $obj->getPrecio_inserto() ?></td>

                                        </tr>
                                        
                                        
                                               <?php
                                        if ($obj->getCodigo_inserto_2() == null) {

                                        } else {
                                            ?>
                                       
                                               <tr id="16" onmouseover=uno('16'); onmouseout=dos('16');>
                                            <td>  </td>
                                            <td> <?php echo $obj->getCodigo_inserto_2() ?></td>
                                            <td> <?php echo $obj->getCantidad_inserto_2() ?></td>
                                            <td> <?php echo $obj->getPrecio_inserto_2() ?></td>

                                        </tr>
                                        
                                            <?php
                                        }
                                        ?>
                                       
                                       

                                     
                                             <?php
                                        if ($obj->getCodigo_inserto_3() == null) {

                                        } else {
                                            ?>
                                        <tr id="17" onmouseover=uno('17'); onmouseout=dos('17');>
                                            <td>  </td>
                                            <td> <?php echo $obj->getCodigo_inserto_3() ?></td>
                                            <td> <?php echo $obj->getCantidad_inserto_3() ?></td>
                                            <td> <?php echo $obj->getPrecio_inserto_3() ?></td>

                                        </tr> 
                                        
                                            <?php
                                        }
                                        ?>
                                       

                                      
                                           
                                            <?php
                                        if ($obj->getCodigo_inserto_4() == null) {

                                        } else {
                                            ?>
                                       
                                        <tr id="18" onmouseover=uno('18'); onmouseout=dos('18');>
                                            <td>  </td>
                                            <td> <?php echo $obj->getCodigo_inserto_4() ?></td>
                                            <td> <?php echo $obj->getCantidad_inserto_4() ?></td>
                                            <td> <?php echo $obj->getPrecio_inserto_4() ?></td>

                                        </tr>  
                                            <?php
                                        }
                                        ?>
                                       
                                      





                                    </table>





                                </div>
                                <div class="modal-footer">
                                    <center>           <a title="Da clic para regresar" style="color:#000000" href="<?php echo site_url(); ?>CensoMaquinaria">             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><font size="3">Cerrar</font></button>
                                        </a></center>
                                </div>
                            </div>
                        </div>
                    </div>


                    </td>


        <?php
    }

            
            
                    
    echo  '<td>'
                      . $obj->getReferencia() .
                      '</td>'
                    
                    
                    . '<td>'
                    . $obj->getCantidad_maxima() .
                    '</td>'
                    . '<td>'
                    . $obj->getPrecio_unitario() .
                    '</td>'
                    . '<td>'
                    . $obj->getVida_util_dias() .
                    '</td>'
                    . '<td>'
                    . $obj->getPeriodo_surtimiento() .
                    '</td>'
                    . '<td>'
                    . $obj->getPeriodo_surtimiento_vida_util() .
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
                    . $obj->getDiametro_rod_ml() .
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
                    . $obj->getMarca_maquina() .
                    '</td>'
                    . '<td>'
                    . $obj->getContacto() .
                    '</td>'
                    . '<td>'
                    . $obj->getTipo_maquina() .
                    '</td>'
                    . '<td>'
                    . $obj->getFormato() .
                    '</td>'
                    . '<td>'
                    . $obj->getAncho() .
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
                    . $obj->getFecha_visita() .
                    '</td>'
                    . '<td>'
                    . $obj->getFecha_seguimiento() .
                    '</td>'
                    . '<td>'
                    . $obj->getGolpes_maquina() .
                    '</td>'
                    . '<td>'
                    . $obj->getConfirmacion_orden_compra() .
                    '</td>'




                    ;





                    /*
                      if($obj->getFirst_name() == 'César Alberto') {Sí			2019-06-01	2019-06-06	0
                      Saúl Aarón "Prueba"	0000-00-00		Acer	Acer Hidalgo	r54213	0	0		Semanal		0	Tres guerras	Domicilio prepagado	Ninguno	0	0.00	24	0	0000-00-00	0	0	0	0	0	0	0	0	0	0.00	36	anncho	WARD V	Transline NT/ RS	RDC	616		Sí
                      echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'ClienteRefacciones/obtener/' . $obj->getId_venta() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                      } else {
                      echo '<td>No puede Modificar</td>';
                      }

                     */
                }
                ?>
                </tr >
            </tbody>
            </table>


        </div> 
    </div>



    <br>


</body>
</html>

