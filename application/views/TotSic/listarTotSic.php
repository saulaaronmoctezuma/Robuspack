<<<<<<< HEAD
<html lang="es-mx">
    <!-- Para traerse el rol que esta registrado-->

    <head>
        <title>Robuspack</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
=======
<!doctype html>

<html>
 <title>Robuspack</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        <meta charset="utf-8">
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

    <div class="container" style="margin-top:1px;">
=======
  <body>
        <div class="container" style="margin-top:1px;">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

        <center>  <h1>Total de Registros SIC</h1></center>



        <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
<<<<<<< HEAD
            <input type="text" id="myInput" placeholder="Escribe para buscar..."  class="form-control" />
=======
            <input type="text" id="buscandoIguales" placeholder="Escribe para buscar..."  class="form-control" />
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        </div>

        <!--<div class="text-center">
            <form method="post" action="<?php echo base_url(); ?>ExportarExcel/crearExcelMaximoMinimo">
                <input type="submit" title="Da clic para exportar los datos a Excel" name="export" class="btn btn-success" value="Exportar a excel" />
            </form>
        </div>-->
    </div>
<<<<<<< HEAD



=======
      
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
    <div class="container" style="margin-top:1px;">


        <div class="table-responsive">
<<<<<<< HEAD






            <table  border="1" class="table table-bordered table-striped">
                <MARQUEE SCROLLDELAY =200> </MARQUEE>
                <thead>
                    <tr>

                        <th style="text-align: center">Vendedor</th>
=======
   

<table class="table-bordered table pull-right" id="mytable" cellspacing="0" style="width: 100%;">
 <thead>
 <tr role="row">
  <th style="text-align: center">Vendedor</th>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        <th style="text-align: center">Total Registros</th>
                        <th style="text-align: center">No Troquela</th>
                        <th style="text-align: center">Consignación</th>
                        <th style="text-align: center">Orden de Compra</th>
                        <th style="text-align: center">Sin Pedido</th>
<<<<<<< HEAD



                        <?php
                        if ($dataLevel == 'is_admin') {
                            
                        } else if ($dataLevel == 'is_editor') {
                            
                        } else {
                            
                        }
                        ?>
                    </tr>
                </thead>

                <tbody align="center" id="myTable">





                    </tr>
                    <tr>
=======
 </tr>
 </thead>
 <tbody>
<tr>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        <td>Carlos</td>
                        <td>
                            <?php
                            foreach ($totalRegistroSicCarlos as $fila) {
                                ?>

                                <?= $fila->total_registros_carlos ?>

                                <?php
                            }
                            ?>
                        </td>

                        <td>
                            <?php
                            foreach ($totalRegistroSicNoTroquelaCarlos as $fila) {
                                ?>

                                <?= $fila->total_registros_carlos ?>

                                <?php
                            }
                            ?>
                        </td>
                        
                        
                         <td>
                            <?php
                            foreach ($totalRegistroSicConfirmacionCarlos as $fila) {
                                ?>

                                <?= $fila->total_registros_carlos ?>

                                <?php
                            }
                            ?>
                        </td>
                        
                         <td>
                            <?php
                            foreach ($totalRegistroSicOrdenCarlos as $fila) {
                                ?>

                                <?= $fila->total_registros_carlos ?>

                                <?php
                            }
                            ?>
                        </td>
                        
                        
                        
                          <td>
                            <?php
                            foreach ($totalRegistroSicSinPedidoCarlos as $fila) {
                                ?>

                                <?= $fila->total_registros_carlos ?>

                                <?php
                            }
                            ?>
                        </td>


                    </tr>


                    <tr>
                        <td>Aldo</td>
                        <td>
                            <?php
                            foreach ($totalRegistroSicAldo as $fila) {
                                ?>

                                <?= $fila->total_registros_aldo ?>

                                <?php
                            }
                            ?>
                        
                        </td>

                        
                        
                        
                        <td>
                            <?php
                            foreach ($totalRegistroSicNoTroquelaAldo as $fila) {
                                ?>

                                <?= $fila->total_registros_aldo ?>

                                <?php
                            }
                            ?>
                        </td>
                        
                        
                        
                         <td>
                            <?php
                            foreach ($totalRegistroSicConfirmacionAldo as $fila) {
                                ?>

                                <?= $fila->total_registros_aldo ?>

                                <?php
                            }
                            ?>
                        
                        </td>
                        
                        
                        
                        
                        <td>
                            <?php
                            foreach ($totalRegistroSicOrdenAldo as $fila) {
                                ?>

                                <?= $fila->total_registros_aldo ?>

                                <?php
                            }
                            ?>
                        </td>
                        
                        
                        
                        
                         <td>
                            <?php
                            foreach ($totalRegistroSicSinPedidoAldo as $fila) {
                                ?>

                                <?= $fila->total_registros_aldo ?>

                                <?php
                            }
                            ?>
                        
                        </td>


                    </tr>



                    <tr>
                        <td>Martín</td>
                        <td>
                            <?php
                            foreach ($totalRegistroSicElvira as $fila) {
                                ?>

                                <?= $fila->total_registros_elvira ?>

                                <?php
                            }
                            ?>
                        
                        </td>

                        
                        
                        
                        <td>
                            <?php
                            foreach ($totalRegistroSicNoTroquelaElvira as $fila) {
                                ?>

                                <?= $fila->total_registros_elvira ?>

                                <?php
                            }
                            ?>
                        </td>
                        
                        
                          <td>
                            <?php
                            foreach ($totalRegistroSicConfirmacionElvira as $fila) {
                                ?>

                                <?= $fila->total_registros_elvira ?>

                                <?php
                            }
                            ?>
                        
                        </td>

                        
                        
                        
                        <td>
                            <?php
                            foreach ($totalRegistroSicOrdenElvira as $fila) {
                                ?>

                                <?= $fila->total_registros_elvira ?>

                                <?php
                            }
                            ?>
                        </td>

                         <td>
                            <?php
                            foreach ($totalRegistroSicSinPedidoElvira as $fila) {
                                ?>

                                <?= $fila->total_registros_elvira ?>

                                <?php
                            }
                            ?>
                        </td>



                    </tr>




                    <tr>
                        <td>Jaime</td>
                        <td>
                            <?php
                            foreach ($totalRegistroSicJaime as $fila) {
                                ?>

                                <?= $fila->total_registros_jaime ?>

                                <?php
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            foreach ($totalRegistroSicNoTroquelaJaime as $fila) {
                                ?>

                                <?= $fila->total_registros_jaime ?>

                                <?php
                            }
                            ?>
                        </td>
                        
                        
                        
                        
                         <td>
                            <?php
                            foreach ($totalRegistroSicConfirmacionJaime as $fila) {
                                ?>

                                <?= $fila->total_registros_jaime ?>

                                <?php
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            foreach ($totalRegistroSicOrdenJaime as $fila) {
                                ?>

                                <?= $fila->total_registros_jaime ?>

                                <?php
                            }
                            ?>
                        </td>
                        
                        
                        
                           <td>
                            <?php
                            foreach ($totalRegistroSicSinPedidoJaime as $fila) {
                                ?>

                                <?= $fila->total_registros_jaime ?>

                                <?php
                            }
                            ?>
                        </td>
                    </tr>


                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                     <tr>
                         <td bgcolor="#6F6F6F" ><b><p style="color:white;">Total</p></b> </td>
                        <td bgcolor="#6F6F6F" >
                            <?php
                            foreach ($totalRegistroSic as $fila) {
                                ?>

                            <b> <p style="color:white;"> <?= $fila->total_registros_sic ?> </p>
                            </b>

                                <?php
                            }
                            ?>
                        </td>
                        <td  bgcolor="#6F6F6F">
                            <?php
                            foreach ($totalRegistroSicNoTroquela as $fila) {
                                ?>

                             <b>   <p style="color:white;"> <?= $fila->total_registros_no_troquela ?></p> </b>

                                <?php
                            }
                            ?>
                        </td>
                        
                        
                        
                        
                         <td  bgcolor="#6F6F6F">
                            <?php
                            foreach ($totalRegistroSicSConsignacion as $fila) {
                                ?>

                            <b>   <p style="color:white;">  <?= $fila->total_consignacion ?> </p></b>

                                <?php
                            }
                            ?>
                        </td>
                        <td  bgcolor="#6F6F6F">
                            <?php
                            foreach ($totalRegistroSicOrdenCompra as $fila) {
                                ?>

                             <b>  <p style="color:white;">  <?= $fila->total_registros_orden_compra ?></p> </b>

                                <?php
                            }
                            ?>
                        </td>
                        
                        
                        
                           <td  bgcolor="#6F6F6F">
                            <?php
                            foreach ($totalRegistroSicSinPedido as $fila) {
                                ?>

                               <b>    <p style="color:white;"> <?= $fila->total_registros_sin_pedido ?> </p></b>

                                <?php
                            }
                            ?>
                        </td>
                    </tr>
<<<<<<< HEAD

                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    

                </tbody>
            </table>




            </body>
        </div>
=======
 </tbody>
</table>
        </div></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script>
 // Write on keyup event of keyword input element
 $(document).ready(function(){
 $("#buscandoIguales").keyup(function(){
 _this = this;
 // Show only matching TR, hide rest of them
 $.each($("#mytable tbody tr"), function() {
 if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
 $(this).hide();
 else
 $(this).show();
 });
 });
});
</script>
  </body>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
</html>
