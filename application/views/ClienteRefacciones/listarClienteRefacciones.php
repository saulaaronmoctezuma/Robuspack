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



    </head>
    <style>
/* para 980px o menos */
	@media screen and (max-width:980px) {
		div#ocultar {
	display:none;
        width: 100%;
  }
  div#agregar {
	width: 30%;
  }div#exportar {
	width: 30%;
  }
  
	}
        </style>
        
    <div class="container" style="margin-top:1px;">

        <center>  <h1>Control SIC</h1></center>

        <div class="alert alert-info alert-info" id="ocultar">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Bienvenido</strong> Agrega, Modifica o Elimina sus Datos
        </div>
        <div class="row">
            <div class="form-group col-xs-4" id="buscar">
        <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
            <input type="text" id="myInput" placeholder="Escribe para buscar..."  class="form-control btn-xs" style="width : 80%;" />
        </div>
 </div>
            <div class="form-group col-xs-4" id="agregar">
        
                <form method="post" action="<?php echo base_url(); ?>ClienteRefacciones/agregar">
                    <input type="submit" name="agregar"  title="Da clic para agregar un nuevo registro" style="width : 80%;"  class="btn btn-success" value="Nuevo Registro" />
                </form>
                 </div> 
            <div class="form-group col-xs-4" id="exportar">
                <form method="post" action="<?php echo base_url(); ?>ExportarExcel/crearExcelRefacciones">

                    <button  class="btn btn-info" title="Da clic para exportar los datos a Excel" style="width : 80%;font-size:16px;color:white"><font color="white">Exportar</font> <i class="fa fa-file-excel-o"></i></button>
                </form>   
 </div>

           
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
<div class="divTableCell" style="background-color:#17202A;"><strong><p style="color:#FFFFFF";>NO Troquela</p></strong></div>
<div class="divTableCell" style="background-color:#17202A;"><strong><p style="color:#FFFFFF";>Consiganación</p></strong></div>
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
<div class="divTableCell" style="background-color:#17202A;"><strong><p style="color:#FFFFFF";>NO Troquela</p></strong></div>
<div class="divTableCell" style="background-color:#17202A;"><strong><p style="color:#FFFFFF";>Consiganación</p></strong></div>
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
                echo '<table class=" table table-hover table-bordered table-striped" id="sic" >';
            }
            ?>

            <MARQUEE SCROLLDELAY =200> </MARQUEE>








            <thead>
                <tr >


                    <?php
                    if ($dataLevel == 'is_admin') {
                        echo '<th class="header" colspan="3" style="text-align: center">Modificar</th>';
                    } else if ($dataLevel == 'is_Gerente_Ventas') {
                        echo '<th class="header" colspan="2" style="text-align: center">Modificar</th>';
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
                        echo '<th class="header" width="50" height="16">Fecha_Última_Factura</th>';
                        echo '<th class="header" width="50" height="16">Consumo Real</th>';
                        echo '<th class="header" width="50" height="16">Archivo</th>';
                    } else if ($dataLevel == 'is_servicio_a_clientes') {
                        echo '<th class="header" width="50" height="16">Fecha_Última&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Factura</th>';
                        echo '<th class="header" width="50" height="16">Consumo Real</th>';
                         echo '<th class="header" width="50" height="16">Archivo</th>';
                    } else if ($dataLevel == 'is_editor') {
                        echo '<th class="header" width="50" height="16">Fecha_Última Factura</th>';
                        echo '<th class="header" width="50" height="16">Consumo Real</th>';
                    } else {
                        
                    }
                    ?>


                    <th class="header" style="text-align: center">Grupo</th>
                    <th class="header" style="text-align: center">Cliente</th>
                    <th class="header" style="text-align: center">Código</th>
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
                        echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'ClienteRefacciones/eliminar/' . $obj->getId_venta() . '"><button type="button" class="btn btn-danger w"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'ClienteRefacciones/actualizar/' . $obj->getId_venta() . '"><button type="button" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-file"></button></a></td>';
                             echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'ClienteRefacciones/obtener/' . $obj->getId_venta() . '"><button type="button" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-edit"></button></a></td>';
                   
                        } else if ($dataLevel == 'is_editor') {
                        echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'ClienteRefacciones/eliminar/' . $obj->getId_venta() . '"><button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'ClienteRefacciones/obtener/' . $obj->getId_venta() . '"><button type="button" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    } else if ($dataLevel == 'is_Gerente_Ventas') {
  echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'ClienteRefacciones/eliminar/' . $obj->getId_venta() . '"><button type="button" class="btn btn-danger btn-xs "><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                       echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'ClienteRefacciones/obtener/' . $obj->getId_venta() . '"><button type="button" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-edit"></button></a></td>';
                   
                    } else if ($dataLevel == 'is_refacciones') {
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'ClienteRefacciones/obtener/' . $obj->getId_venta() . '"><button type="button" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    } else if ($dataLevel == 'is_maquinaria_refacciones') {
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'ClienteRefacciones/obtener/' . $obj->getId_venta() . '"><button type="button" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    } else if ($dataLevel == 'is_servicio_a_clientes') {
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'ClienteRefacciones/actualizar/' . $obj->getId_venta() . '"><button type="button" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    }




                    if ($dataLevel == 'is_admin') {
                        echo '</td><td>';
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

