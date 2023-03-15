<html lang="es-mx">
    <!-- Para traerse el rol que esta registrado-->

    <head>
        <title>Robuspack</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <?php
        defined('BASEPATH') OR exit('No direct script access allowed');

        $result = $this->User_model->getAllSettings();
        $theme = $result->theme;
        ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $theme; ?>">
        <link rel="stylesheet" href="<?php echo base_url() . 'public/css/main.css' ?>">

<<<<<<< HEAD

=======
        <style>
            .sinbordefondo {
                background-color: #eee;
                border: 0;
            }
        </style>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

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

        <link rel="icon" href="<?= base_url('assets/images/robuspack_icon.png') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Para traerse el rol que esta registrado-->
        <?php
        //check user level
        $dataLevel = $this->userlevel->checkLevel($role);

        $site_title = $result->site_title;
        //check user level
        ?>

<<<<<<< HEAD

    </head>

=======
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


document.getElementById("IDdeTabla").rows[i].cells[j].innerText  
    <script>
        
          
            $(document).ready(function() {
                  
                  
               var total=0;
 
//selector &gt;&gt;  $("#GridView1 tr").find('td:eq(1)')
//De esta manera utilizando eq seleccionamos la segunda fila, ya que la primera es 0
$("#miTabla tr").find('td:eq(1)').each(function () {
 
 //obtenemos el valor de la celda
  valor = $(this).html();
 
 //sumamos, recordar parsear, si no se concatenara.
 total += parseInt(valor)
})
 
//mostramos el total
alert(total);
                    
                
                
                
                
                
                
                
                
                
               
              
                
                
                




    </script>
    </head><br><br><br><br><br>
<table id="miTabla">
    <tr>
        <td>pato</td>
        <td>12</td>
    </tr>
    <tr>
        <td>pato</td>
        <td>1</td>
    </tr>
    <tr>
        <td>pato</td>
        <td>15</td>
    </tr>
    <tr>
        <td>pato</td>
        <td>16</td>
    </tr>
<table>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
    <div class="container" style="margin-top:1px;">

        <center>  <h1>Reporte Máximo Minimo</h1></center>



        <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
            <input type="text" id="buscandoIguales" placeholder="Escribe para buscar..."  class="form-control" />
        </div>

        <div class="text-center">
<<<<<<< HEAD
            <form method="post" action="<?php echo base_url(); ?>ExportarExcel/crearExcelMaximoMinimo2">
=======
            <form method="post" action="<?php echo base_url(); ?>ExportarExcel/crearExcelMaximoMinimoR">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                <input type="submit" title="Da clic para exportar los datos a Excel" name="export" class="btn btn-success" value="Exportar a excel" />
            </form>
        </div>
    </div>

<<<<<<< HEAD


=======
   
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
    <div class="container" style="margin-top:1px;">


        <div class="table-responsive">






<<<<<<< HEAD
            <table id="example"  border="1" class="table table-bordered table-striped">
=======
            <table id="example1"  border="1" class="table table-bordered table-striped">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                <MARQUEE SCROLLDELAY =200> </MARQUEE>
                <thead>
                    <tr>

                        <th style="text-align: center">Usuario</th>
                        <th style="text-align: center">Descripcion</th>
                        <th style="text-align: center">Código</th>
                        <th style="text-align: center">Fecha Corte Rotación </th>
                        <th style="text-align: center">Grupo</th>
                        <th style="text-align: center">Cliente</th>
                        <th style="text-align: center">Cantidad Maxima</th>
                        <th style="text-align: center">Fecha Último Consumo&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th style="text-align: center">Periodo Surtimiento</th>
                        <th style="text-align: center">Fecha Requiere Piezas</th>
                        <th style="text-align: center">Pedido Inteligente</th>
                       <!-- <th style="text-align: center">Total Requerdo Mensual</th>
                        <th style="text-align: center">Total Requerido Trimestral</th>-->
                        <th style="text-align: center">Total Requerido Mensual con Oc y Consignacion</th>
                        <th style="text-align: center">Total Requerido Trimestral con Oc y Consignacion</th>
                        <th style="text-align: center">Inventario</th>
                        <th style="text-align: center">Piezas a recibir</th>
                        <th style="text-align: center">Disponibilidad Total</th>
                        <!--<th style="text-align: center">Piezas a solicitar</th>-->
                        <th style="text-align: center">Meses Cubiertos</th>
                        <th style="text-align: center">Fecha Cubierta</th>
<<<<<<< HEAD
                         <th style="text-align: center">Total Mensual sin OC</th>
                          <th style="text-align: center">Prospectación Mercado Mensual</th>
=======
                        <th style="text-align: center">Total Mensual sin OC</th>
                        <th style="text-align: center">Prospectación Mercado Mensual</th>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606




                        <?php
                        if ($dataLevel == 'is_admin') {
                            
                        } else if ($dataLevel == 'is_editor') {
                            
                        } else {
                            
                        }
                        ?>
                    </tr>
                </thead>

                <tbody align="center"  class="buscar">

                    <?php
                    foreach ($maximominimo as $obj) {
<<<<<<< HEAD
                        echo '<tr><td>';
=======
                        echo '<tr class="suma"><td>';
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        echo $obj->getVendedor() .
                        '</td>'
                        . '<td>' .
                        $obj->getDescripcion() .
                        '</td>'
<<<<<<< HEAD
                        . '<td bgcolor="#00FF00">' .
=======
                        . '<td bgcolor="#00FF00" id="codigo">' .
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        $obj->getCodigo() .
                        '</td>'
                        . '<td width="50" height="16">'
                        . $obj->getFecha_corte_rotacion() .
                        '</td>'
                        . '<td>'
                        . $obj->getGrupo() .
                        '</td>'
                        . '<td>'
                        . $obj->getCliente() .
                        '</td>'
<<<<<<< HEAD
                        . '<td>'
                        . $obj->getCantidad_maxima() .
                        '</td>'
=======
                        . '<td id="cantidad_maxima">'
                        . $obj->getCantidad_maxima()
                        . ' </td>'
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        . '<td>'
                        . $obj->getFecha_ultimo_consumo() .
                        '</td>'
                        . '<td>'
                        . $obj->getPeriodo_surtimiento() .
                        '</td>'
                        . '<td>'
                        . $obj->getFecha_requiere_piezas() .
                        '</td>'
                        . '<td >'
                        . $obj->getPedido_inteligente() .
                        '</td>'
<<<<<<< HEAD
                        /*. '<td class="count-me1">'
                        . $obj->getSuma_total_requerido_mensual() .
                        '</td>'
                        . '<td>'
                        . $obj->getSuma_total_requerido_trimestral() .
                        '</td>'*/
=======
                        /* . '<td class="count-me1">'
                          . $obj->getSuma_total_requerido_mensual() .
                          '</td>'
                          . '<td>'
                          . $obj->getSuma_total_requerido_trimestral() .
                          '</td>' */
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        . '<td>'
                        . $obj->getSuma_total_requerido_mensual_con_oc_y_consignacion() .
                        '</td>'
                        . '<td>'
                        . $obj->getSuma_total_requerido_trimestral_con_oc_y_consignacion() .
                        '</td>'
                        . '<td >'
                        . $obj->getInventario() .
                        '</td>'
                        . '<td>'
                        . $obj->getPiezas_a_recibir() .
                        '</td>'
                        . '<td>'
                        . $obj->getDisponibilidad_total() .
                        '</td>'
<<<<<<< HEAD
                        /*. '<td bgcolor="yellow">'
                        . $obj->getPiezas_a_solicitar() .
                        '</td>'*/
=======
                        /* . '<td bgcolor="yellow">'
                          . $obj->getPiezas_a_solicitar() .
                          '</td>' */
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        . '<td>'
                        . $obj->getMeses_cubiertos() .
                        '</td>'
                        . '<td>'
                        . $obj->getFecha_cubierta() .
                        '</td>'
                        . '<td>'
                        . $obj->getTotal_mensual_sin_oc() .
                        '</td>'
                        . '<td>'
                        . $obj->getInformativo_prospectacion_mercado() .
                        '</td>'



                        ;

<<<<<<< HEAD
=======
                        ;

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        if ($dataLevel == 'is_admin') {
                            
                        } else if ($dataLevel == 'is_editor') {
                            
                        } else {
                            
                        }
                    }
                    ?>



                    </tr>
<<<<<<< HEAD
                    
                    <?php
                    
                     if ($dataLevel == 'is_admin') {
                           echo '<tr>
                        <td></td>
                        <td></td>
                        <td>';
                            
                            foreach ($totalRegistroCodigo as $fila) {
                               
                            echo   ' <div class="grid_12" id="cuerpo">
                                    Total:<div class="grid_1">'. $fila->codigo.'</div>
                                </div>';
                               
                            }
                           
                        echo '</td>
                        <td colspan="18"></td>
                       
                    </tr>  ';
                        } else if ($dataLevel == 'is_editor') {
                            
                        } else {
                            
                        }
                  

     /*if ($this->db->simple_query('YOUR QUERY'))
{
        echo "Success!";
}
else
{
        echo "Query failed!";
}
*/
                    ?>

                    
                    
                    

                </tbody>
            </table>
            
             <script language="javascript" type="text/javascript">
            var tds = document.getElementById('countit').getElementsByTagName('td');
            var sum = 0;
            for(var i = 0; i < tds.length; i ++) {
                if(tds[i].className == 'count-me1') {
                    sum += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
                }
            }
            document.getElementById('countit').innerHTML += '<div>' + sum + '</div><div>total<div>';
        </script>
=======
                <tfoot>
                    <tr class="total">
                        <td >su total:</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr></tfoot>  
                <?php
                if ($dataLevel == 'is_admin') {
                    echo '<tr>
                        <td></td>
                        <td></td>
                        <td>';

                    foreach ($totalRegistroCodigo as $fila) {

                        echo ' <div class="grid_12" id="cuerpo">
                                    Total:<div class="grid_1">' . $fila->codigo . '</div>
                                </div>';
                    }

                    echo '</td>
                        <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       
                       
                       
                       
                       
                       
                    </tr>  ';
                } else if ($dataLevel == 'is_editor') {
                    
                } else {
                    
                }


                /* if ($this->db->simple_query('YOUR QUERY'))
                  {
                  echo "Success!";
                  }
                  else
                  {
                  echo "Query failed!";
                  }
                 */
                ?>





                </tbody>
            </table>

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606




            </body>
        </div>
        <html>
<<<<<<< HEAD
   
</html>
=======

        </html>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
