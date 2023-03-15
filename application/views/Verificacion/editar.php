<!--
 * @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 26/03/2019 Hora 10:15 pm
Fecha : Ultimo Cambio 03/0/2019 Hora 10:36 pm
Fecha : Ultimo Cambio 29/07/2019 Hora 10:07 am
Fecha : Ultimo Cambio 30/07/2019 Hora 10:07 am
Fecha : Ultimo Cambio 30/07/2019 Hora 10:07 am
 * Sistema de Control Robuspack
 */-->
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Robuspack</title>

        <!-- Bootstrap -->

<<<<<<< HEAD
        <link rel="stylesheet" href="<?= base_url() ?>assets/font/glyphicons-halflings-regular.ttf">
=======
       <!--<link rel="stylesheet" href="<?= base_url() ?>assets/font/glyphicons-halflings-regular.ttf-->
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        <?php
        //check user level
        $dataLevel = $this->userlevel->checkLevel($role);


        //check user level
        ?>

        <style>
            body {

                margin-left: 200px;
            }

        </style>
    </head>
    <body>

        <div class="container">
            <h1>Actualizar Placa</h1>
<<<<<<< HEAD
           
            
            
            
=======




>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        </div>

        <!-- KONTEN UTAMA -->
        <div class="container">

            <div class="row">
                <form action="<?= base_url() ?>verificacion/updatedata" method="post" enctype="multipart/form-data">
                    <!--
                    '. form_dropdown('cliente', $clienteCombo,$data->cliente , '#', 'id="cliente"').'<br>
                    
                    -->
                    <?php
                    if ($dataLevel == 'is_admin') {
                        echo '
                    <label>No Máquina</label><br>
                    <input type="text" style="width: 270px; height: 35px" name="no_maqui" value="' . $data->no_maqui . '"><br><br>
                     
                    <label>Modelo</label><br>
                    <input type="text" style="width: 270px; height: 35px" name="modelo" value="' . $data->modelo . '"><br><br>
                              
                    <!--<label>Empresa</label><br>
                    <input type="text" style="width: 270px; height: 35px" name="empresa" value="' . $data->empresa . '"><br><br>-->';
                        ?>
                        <label>Empresa</label><br>
                        <SELECT name="empresa" class="form-control " style="width: 270px; height:45px"> 
                            <optgroup label="Selecciona una opción">
                                <option value="" <?php
                                if ($data->empresa == "") {
                                    echo "Selected";
                                }
                                ?>>Selecciona una opción</option>

                                <option value="ROBUSPACK S DE RL DE CV" <?php
                                if ($data->empresa == "ROBUSPACK S DE RL DE CV") {
                                    echo "Selected";
                                }
                                ?>>ROBUSPACK S DE RL DE CV</option>
                                <option value="MAKBOX S DE RL DE CV" <?php
                                if ($data->empresa == "MAKBOX S DE RL DE CV") {
                                    echo "Selected";
                                }
                                ?>>MAKBOX S DE RL DE CV</option>
<<<<<<< HEAD
                                
                                   <option value="CARTONPACK S DE RL DE CV" <?php
                                if ($data->empresa == "CARTONPACK S DE RL DE CV") {
                                    echo "Selected";
                                }
                                ?>>CARTONPACK S DE RL DE CV</option>
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </optgroup>
                        </SELECT><br>


                        <?php echo '
                        
                        
                    <label>Serie</label><br>
                    <input type="text" style="width: 270px; height: 35px"  style="width: 270px; height: 35px" name="serie" value="' . $data->serie . '"><br><br>';
                        ?>
<<<<<<< HEAD
                       <!--   <label>Cliente</label><br>
=======
                        <!--  <label>Cliente</label><br>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                      <select id="a3" class="form-control " style="width: 270px; height:45px" name="cliente"   <?php echo form_dropdown('clienteCombo', $clienteCombo, $data->cliente, '#', 'id="clienteCombo"'); ?> </select></td>
                        <BR>
                        -->



                        <label>Cliente</label><br>
                        <input type="text" style="width: 270px; height: 35px" name="cliente" value="<?= $data->cliente ?>"><br><br>


                        <!--<label>Cliente No Registrados</label><br>
                        <input type="text" style="width: 270px; height: 35px" name="cliente_temporal" value="' . $data->cliente_temporal . '"><br><br>
                        --> <?php
                        if ($data->cliente_temporal != null) {
                            echo '
                    <label>Cliente No Registrado</label><br>
                    <input type="text" style="width: 270px; height: 35px" name="cliente_temporal" value="' . $data->cliente_temporal . '"><br><br>
                                 ';
                        } else if ($data->cliente_temporal == null) {
                            
                        }
                        ?>


                        <?php
                        echo '
                    <label>No. Pedimento</label><br>
                    <input type="text" style="width: 270px; height: 35px" name="pedimento" value="' . $data->pedimento . '"><br><br>
                        
                    <label>Num. Factura</label><br>
                    <input type="text"  style="width: 270px; height: 35px"name="num_factura" value="' . $data->num_factura . '"><br><br>
                        
                    

                    



                        
                    <!--<input type="file" name="fotopost">';
<<<<<<< HEAD
                    }else if ($dataLevel == 'is_Gerente_Ventas') {
=======
                    } else if ($dataLevel == 'is_Gerente_Ventas') {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        echo '
                    <label>No Máquina</label><br>
                    <input type="text" style="width: 270px; height: 35px" name="no_maqui" value="' . $data->no_maqui . '"><br><br>
                     
                    <label>Modelo</label><br>
                    <input type="text" style="width: 270px; height: 35px" name="modelo" value="' . $data->modelo . '"><br><br>
                              
                    <!--<label>Empresa</label><br>
                    <input type="text" style="width: 270px; height: 35px" name="empresa" value="' . $data->empresa . '"><br><br>-->';
                        ?>
                        <label>Empresa</label><br>
                        <SELECT name="empresa" class="form-control " style="width: 270px; height:45px"> 
                            <optgroup label="Selecciona una opción">
                                <option value="" <?php
                                if ($data->empresa == "") {
                                    echo "Selected";
                                }
                                ?>>Selecciona una opción</option>

                                <option value="ROBUSPACK S DE RL DE CV" <?php
                                if ($data->empresa == "ROBUSPACK S DE RL DE CV") {
                                    echo "Selected";
                                }
                                ?>>ROBUSPACK S DE RL DE CV</option>
                                <option value="MAKBOX S DE RL DE CV" <?php
                                if ($data->empresa == "MAKBOX S DE RL DE CV") {
                                    echo "Selected";
                                }
                                ?>>MAKBOX S DE RL DE CV</option>

                            </optgroup>
                        </SELECT><br>


                        <?php echo '
                        
                        
                    <label>Serie</label><br>
                    <input type="text" style="width: 270px; height: 35px"  style="width: 270px; height: 35px" name="serie" value="' . $data->serie . '"><br><br>';
                        ?>
                        <!--  <label>Cliente</label><br>
                      <select id="a3" class="form-control " style="width: 270px; height:45px" name="cliente"   <?php echo form_dropdown('clienteCombo', $clienteCombo, $data->cliente, '#', 'id="clienteCombo"'); ?> </select></td>
                        <BR>
                        -->



                        <label>Cliente</label><br>
                        <input type="text" style="width: 270px; height: 35px" name="cliente" value="<?= $data->cliente ?>"><br><br>


                        <!--<label>Cliente No Registrados</label><br>
                        <input type="text" style="width: 270px; height: 35px" name="cliente_temporal" value="' . $data->cliente_temporal . '"><br><br>
                        --> <?php
                        if ($data->cliente_temporal != null) {
                            echo '
                    <label>Cliente No Registrado</label><br>
                    <input type="text" style="width: 270px; height: 35px" name="cliente_temporal" value="' . $data->cliente_temporal . '"><br><br>
                                 ';
                        } else if ($data->cliente_temporal == null) {
                            
                        }
                        ?>


                        <?php
                        echo '
                  
                    <input type="hidden" style="width: 270px; height: 35px" name="pedimento" value="' . $data->pedimento . '">
                        
                    <label>Num. Factura</label><br>
                    <input type="text"  style="width: 270px; height: 35px"name="num_factura" value="' . $data->num_factura . '"><br><br>
                        
<<<<<<< HEAD
                    <input type="hidden" name="contrato" value="' . $data->contrato . '">
=======
                    
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                    



                        
                    <!--<input type="file" name="fotopost">';
                    } else if ($dataLevel == 'is_editor') {
                        echo '
                    <label>No Máquina</label><br>
                    <input type="text" style="width: 270px; height: 35px" name="no_maqui" value="' . $data->no_maqui . '"><br><br>
                        
                     <label>Modelo</label><br>
                    <input type="text" style="width: 270px; height: 35px" name="modelo" value="' . $data->modelo . '"><br><br>
                        
                    <!--<label>Empresa</label><br>
                    <input type="text" style="width: 270px; height: 35px" name="empresa" value="' . $data->empresa . '"><br><br>-->';
                        ?>
                        <label>Empresa</label><br>
                        <SELECT name="empresa" class="form-control " style="width: 270px; height:45px"> 

                            <option value="" <?php
                            if ($data->empresa == "") {
                                echo "Selected";
                            }
                            ?>>Selecciona una opción</option>

                            <option value="ROBUSPACK S DE RL DE CV" <?php
                            if ($data->empresa == "ROBUSPACK S DE RL DE CV") {
                                echo "Selected";
                            }
                            ?>>ROBUSPACK S DE RL DE CV</option>
                            <option value="MAKBOX S DE RL DE CV" <?php
                            if ($data->empresa == "MAKBOX S DE RL DE CV") {
                                echo "Selected";
                            }
                            ?>>MAKBOX S DE RL DE CV</option>

<<<<<<< HEAD
                    
                     <option value="CARTONPACK S DE RL DE CV" <?php
                            if ($data->empresa == "CARTONPACK S DE RL DE CV") {
                                echo "Selected";
                            }
                            ?>>CARTONPACK S DE RL DE CV</option>

                    
=======

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        </SELECT><br>


                        <?php echo '
                        
                    <label>Serie</label><br>
                    <input type="text" style="width: 270px; height: 35px" name="serie" value="' . $data->serie . '"><br><br>
                   
                   ';
                        ?>
                        <label>Cliente</label><br>
                   <!--<select id="a3" class="form-control " style="width: 270px; height:45px" name="cliente"   <?php echo form_dropdown('clienteCombo', $clienteCombo, $data->cliente, '#', 'id="clienteCombo"'); ?> </select></td>
           <BR>>-->
                        <?php
                        echo '
                           
                 
                    <input type="text" style="width: 270px; height: 35px" name="cliente" value="' . $data->cliente . '"><br><br>
                        
                    <label>Cliente No Registrado</label><br>
                    <input type="text" style="width: 270px; height: 35px" name="cliente_temporal" value="' . $data->cliente_temporal . '"><br><br>
                    


                    <label>No. Pedimento</label><br>
                    <input type="text" style="width: 270px; height: 35px" name="pedimento" value="' . $data->pedimento . '"><br><br>
                        
                    <label>Num. Factura</label><br>
                    <input type="text" style="width: 270px; height: 35px" name="num_factura" value="' . $data->num_factura . '"><br><br>

                    <!--<input type="file" name="fotopost">';
                    } else if ($dataLevel == 'is_logistica') {
                        echo '
                    <label>No Máquina</label><br>
                    <input type="text" style="width: 270px; height: 35px"  name="no_maqui" value="' . $data->no_maqui . '"><br><br>
                        
                    <label>Modelo</label><br>
                    <input type="text" style="width: 270px; height: 35px"  name="modelo" value="' . $data->modelo . '"><br><br>
                     
                    <!--<label>Empresa</label><br>
                    <input type="text" style="width: 270px; height: 35px"  name="empresa" value="' . $data->empresa . '"><br><br>-->';
                        ?>
                        <label>Empresa</label><br>
                        <SELECT name="empresa" class="form-control " style="width: 270px; height:45px"> 

                            <option value="" <?php
                            if ($data->empresa == "") {
                                echo "Selected";
                            }
                            ?>>Selecciona una opción</option>

                            <option value="ROBUSPACK S DE RL DE CV" <?php
                            if ($data->empresa == "ROBUSPACK S DE RL DE CV") {
                                echo "Selected";
                            }
                            ?>>ROBUSPACK S DE RL DE CV</option>
                            <option value="MAKBOX S DE RL DE CV" <?php
                            if ($data->empresa == "MAKBOX S DE RL DE CV") {
                                echo "Selected";
                            }
                            ?>>MAKBOX S DE RL DE CV</option>

<<<<<<< HEAD
                                        <option value="CARTONPACK S DE RL DE CV" <?php
                            if ($data->empresa == "CARTONPACK S DE RL DE CV") {
                                echo "Selected";
                            }
                            ?>>CARTONPACK S DE RL DE CV</option>
                            
                            
                            
=======

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        </SELECT><br>


                        <?php
                        echo '
                    
                    <label>Serie</label><br>
                    <input type="text" style="width: 270px; height: 35px"  name="serie" value="' . $data->serie . '"><br><br>
                   
                   <label>Cliente</label><br>
                   <input type="text" style="width: 270px; height: 35px"  name="cliente" value="' . $data->cliente . '"><br><br>
                       
                   <label>Cliente No Registrado </label><br>
                   <input type="text" style="width: 270px; height: 35px"  name="cliente_temporal" value="' . $data->cliente_temporal . '"><br><br>
                    
                    
                    <label>No. Pedimento</label><br>
                    <input type="text" style="width: 270px; height: 35px"  name="pedimento" value="' . $data->pedimento . '"><br><br>
                       
                    <input type="hidden" name="num_factura" value="' . $data->num_factura . '">
<<<<<<< HEAD
                     <input type="hidden" name="contrato" value="' . $data->contrato . '">  
=======
                    <input type="hidden" name="contrato" value="' . $data->contrato . '">    
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    <!--<input type="file" name="fotopost">';
                    } else if ($dataLevel == 'is_credito') {
                        echo '
                    <label>No Máquina</label><br>
                    <input type="text"  readonly="readonly" style="background-color:#03E7F7;width: 270px; height: 35px"   name="no_maqui" value="' . $data->no_maqui . '"><br><br>
                     
                    <label>Modelo</label><br>
                    <input type="text" name="modelo" readonly="readonly" style="background-color:#03E7F7;width: 270px; height: 35px"  value="' . $data->modelo . '"><br><br>
                   
                    <label>Empresa</label><br>
                    <input type="text" name="empresa" readonly="readonly" style="background-color:#03E7F7;width: 270px; height: 35px"  value="' . $data->empresa . '"><br><br>
                   
                    <label>Serie</label><br>
                    <input type="text" name="serie" readonly="readonly" style="background-color:#03E7F7;width: 270px; height: 35px"  value="' . $data->serie . '"><br><br>
                   
                    ';
                        ?>
                        <label>Cliente</label><br>
                        <select id="a3" class="form-control " style="width: 270px; height:45px" name="cliente"   <?php echo form_dropdown('clienteCombo', $clienteCombo, $data->cliente, '#', 'id="clienteCombo"'); ?> </select></td>
                        <BR>
                        <?php
                        echo '


                    <label>Cliente No Registrado</label><br>
                    <input type="text" name="cliente_temporal"  " style="width: 270px; height: 35px"  value="' . $data->cliente_temporal . '"><br><br>
                    
                    <label>No. Pedimento</label><br>
                    <input type="text" name="pedimento" readonly="readonly" style="background-color:#03E7F7;width: 270px; height: 35px"  value="' . $data->pedimento . '"><br><br>
                    
                    <label>No. Factura</label><br>
                    <input type="text" style="width: 270px; height: 35px"  name="num_factura" value="' . $data->num_factura . '"><br><br>
<<<<<<< HEAD
 <input type="hidden" name="contrato" value="' . $data->contrato . '">  
                    <!--<input type="file" name="fotopost">';
                    } else if ($dataLevel == 'is_refacciones') {
                        echo '
                    <label>No Máquina</label><br>
=======
                        <input type="hidden" name="contrato" value="' . $data->contrato . '">
                    <!--<input type="file" name="fotopost">';
                    } else if ($dataLevel == 'is_refacciones') {
                        echo '
                    <label>Nos Máquina</label><br>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    <input type="text" name="no_maqui" readonly="readonly" style="background-color:#03E7F7;" value="' . $data->no_maqui . '"><br><br>
                    
                    <label>Modelo</label><br>
                    <input type="text" name="modelo" readonly="readonly" style="background-color:#03E7F7;" value="' . $data->modelo . '"><br><br>
                    

                     <label>Empresa</label><br>
                    <input type="text" name="empresa" readonly="readonly" style="background-color:#03E7F7;"  value="' . $data->empresa . '"><br><br>
                   

                    <label>Serie</label><br>
                    <input type="text" name="serie" readonly="readonly" style="background-color:#03E7F7;" value="' . $data->serie . '"><br><br>
                   
                    <label>Cliente</label><br>
                    <input type="text" name="cliente" readonly="readonly" style="background-color:#03E7F7;" value="' . $data->cliente . '"><br><br>
                    
<<<<<<< HEAD
                      <input type="hidden" name="cliente_temporal" value="' . $data->cliente_temporal . '">
=======
                    <input type="hidden" name="cliente_temporal" value="' . $data->cliente_temporal . '">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                    <label>No. Pedimento</label><br>
                    <input type="text" name="pedimento" readonly="readonly" style="background-color:#03E7F7;" value="' . $data->pedimento . '"><br><br>
                    
<<<<<<< HEAD
                    <input type="hidden" name="num_factura" value="' . $data->num_factura . '">
                   <input type="hidden" name="pedimentopdf" value="' . $data->pedimentopdf . '">
                  
                    <input type="hidden" name="fotopostpdf" value="' . $data->factura . '">
                         <input type="hidden" name="contrato" value="' . $data->contrato . '">  
                    <!--<input type="file" name="fotopost">';
                    
=======
                    <input type="hidden" name="pedimentopdf" value="' . $data->pedimentopdf . '">
                    <input type="hidden" name="fotopost"  value="' . $data->foto . '">
                    <input type="hidden" name="fotopostpdf" value="' . $data->factura . '">
                     <input type="hidden" name="num_factura" value="' . $data->num_factura . '">
                     <input type="hidden" name="contrato" value="' . $data->contrato . '">
                        
                    <!--<input type="file" name="fotopost">';
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    } else if ($dataLevel == 'is_jefe_mantenimiento') {
                        echo '
                    <label>No Máquina</label><br>
                    <input type="text" name="no_maqui" readonly="readonly" style="background-color:#03E7F7;width: 270px; height: 35px" value="' . $data->no_maqui . '"><br><br>
                    
                    <label>Modelo</label><br>
                    <input type="text" name="modelo" readonly="readonly" style="background-color:#03E7F7;width: 270px; height: 35px" value="' . $data->modelo . '"><br><br>
                    
                    <label>Empresa</label><br>
                    <input type="text" name="empresa" readonly="readonly" style="background-color:#03E7F7;width: 270px; height: 35px"  value="' . $data->empresa . '"><br><br>
                   
<<<<<<< HEAD
                    <!--<label>Serie</label><br>
                    <input type="text" name="serie" readonly="readonly" style="background-color:#03E7F7;width: 270px; height: 35px" value="' . $data->serie . '"><br><br>-->
=======
                    <label>Serie</label><br>
                    <input type="text" name="serie" readonly="readonly" style="background-color:#03E7F7;width: 270px; height: 35px" value="' . $data->serie . '"><br><br>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                   <input type="hidden" name="cliente_temporal" value="' . $data->cliente_temporal . '">
                    <label>Cliente</label><br>
                    <input type="text" name="cliente" readonly="readonly" style="background-color:#03E7F7;width: 270px; height: 35px" value="' . $data->cliente . '"><br><br>
                    
<<<<<<< HEAD
                  <!--  <label>No. Pedimento</label><br>
                    <input type="text" name="pedimento" readonly="readonly" style="background-color:#03E7F7;width: 270px; height: 35px" value="' . $data->pedimento . '"><br><br>
                    -->
                    
                    

                            
=======
                    <label>No. Pedimento</label><br>
                    <input type="text" name="pedimento" readonly="readonly" style="background-color:#03E7F7;width: 270px; height: 35px" value="' . $data->pedimento . '"><br><br>
                    
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    <input type="hidden" name="num_factura" value="' . $data->num_factura . '">
                   <input type="hidden" name="pedimentopdf" value="' . $data->pedimentopdf . '">
                  
                    <input type="hidden" name="fotopostpdf" value="' . $data->factura . '">
<<<<<<< HEAD
                             <input type="hidden" name="contrato" value="' . $data->contrato . '">  
                            <input type="hidden" name="refacciones" value="' . $data->refacciones . '">
                            
                    <!--<input type="file" name="fotopost">';
=======
                    <input type="hidden" name="contrato" value="' . $data->contrato . '">
                    <!--<input type="file" name="fotopost">-->';
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    } else if ($dataLevel == 'is_mantenimiento') {
                        echo '
                    <label>No Máquina</label><br>
                    <input type="text" name="no_maqui" readonly="readonly" style="background-color:#03E7F7;width: 270px; height: 35px" value="' . $data->no_maqui . '"><br><br>
                    
                    <label>Modelo</label><br>
                    <input type="text" name="modelo" readonly="readonly" style="background-color:#03E7F7;width: 270px; height: 35px" value="' . $data->modelo . '"><br><br>
                    
                    <label>Empresa</label><br>
                    <input type="text" name="empresa" readonly="readonly" style="background-color:#03E7F7;width: 270px; height: 35px"  value="' . $data->empresa . '"><br><br>
                   
                    <label>Serie</label><br>
                    <input type="text" name="serie" readonly="readonly" style="background-color:#03E7F7;width: 270px; height: 35px" value="' . $data->serie . '"><br><br>
                   <input type="hidden" name="cliente_temporal" value="' . $data->cliente_temporal . '">
                    <label>Cliente</label><br>
                    <input type="text" name="cliente" readonly="readonly" style="background-color:#03E7F7;width: 270px; height: 35px" value="' . $data->cliente . '"><br><br>
                    
                    <label>No. Pedimento</label><br>
                    <input type="text" name="pedimento" readonly="readonly" style="background-color:#03E7F7;width: 270px; height: 35px" value="' . $data->pedimento . '"><br><br>
                    
                    <input type="hidden" name="num_factura" value="' . $data->num_factura . '">
<<<<<<< HEAD
                         <input type="hidden" name="contrato" value="' . $data->contrato . '">  
=======
                   <input type="hidden" name="pedimentopdf" value="' . $data->pedimentopdf . '">
                   
                    <input type="hidden" name="fotopostpdf" value="' . $data->factura . '">
                    
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        
                    <!--<input type="file" name="fotopost">'


                        ;
                    } else {
                        
                    }
                    ?>
                    <!--<label>No Maquina</label><br>
                   <input type="text" name="no_maqui" value="<?= $data->no_maqui ?>"><br><br>
                    <label>Modelo</label><br>
                   <input type="text" name="modelo" value="<?= $data->modelo ?>"><br><br>
                   <label>serie</label><br>
                   <input type="text" name="serie" value="<?= $data->serie ?>"><br><br>
                  
                  <label>cliente</label><br>
                   <input type="text" name="cliente" value="<?= $data->cliente ?>"><br><br>
                   
                   <label>pedimento</label><br>
                   <input type="text" name="pedimento" value="<?= $data->pedimento ?>"><br><br>
                   <!--<input type="file" name="fotopost">-->

                    <!--Pedimento PDF-->
                    <?php
                    if (($data->pedimentopdf == null) && ($dataLevel == 'is_admin')) {
                        echo ' <label>Pedimento PDF</label><br>
                             <input type="file" name="pedimentopdf"><br>';
                    } else if (($data->pedimentopdf != null) && ($dataLevel == 'is_admin')) {
                        echo '<font color="red">Ya tienes un archivo cargado</font><br>
                        <label>Pedimento PDF</label><br>
                             <input type="file" name="pedimentopdf"><br>';
                    }
                    ?>



                    <?php
                    if (($data->pedimentopdf == null) && ($dataLevel == 'is_editor')) {
                        echo ' <label>Pedimento PDF</label><br>
                             <input type="file" name="pedimentopdf"><br>';
                    } else if (($data->pedimentopdf != null) && ($dataLevel == 'is_editor')) {
                        echo '<font color="red">Ya tienes un archivo cargado</font><br>
                        <label>Pedimento PDF</label><br>
                             <input type="file" name="pedimentopdf"><br>';
                    }
                    ?>



                    <?php
                    if (($data->pedimentopdf == null) && ($dataLevel == 'is_logistica')) {
                        echo ' <label>Pedimento PDF</label><br>
                             <input type="file" name="pedimentopdf"><br>';
                    } else if (($data->pedimentopdf != null) && ($dataLevel == 'is_logistica')) {
<<<<<<< HEAD
                      //  echo '<input class="form-control" type="hidden" name="pedimentopdf" value="' . $data->pedimentopdf . '">';
                      
                      echo '<font color="red">Ya tienes un archivo cargado</font><br>
=======
                        //echo '<input class="form-control" type="hidden" name="pedimentopdf" value="' . $data->pedimentopdf . '">';
                        echo '<font color="red">Ya tienes un archivo cargado</font><br>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        <label>Pedimento PDF</label><br>
                             <input type="file" name="pedimentopdf"><br>';
                    }
                    ?>






                    <!--Foto de la placa-->
                    <?php
                    if (($data->foto == null) && ($dataLevel == 'is_editor')) {
                        echo ' <label>Foto Placa</label><br>
                             <input type="file" name="fotopost"><br>';
                    } else if (($data->foto != null) && ($dataLevel == 'is_editor')) {
                        echo '<font color="red">Ya tienes un archivo cargado</font><br>
                        <label>Foto Placa</label><br>
                             <input type="file" name="fotopost"><br>';
                    }
                    ?>

                    <?php
                    if (($data->foto == null) && ($dataLevel == 'is_admin')) {
                        echo ' <label>Foto Placa</label><br>
                             <input type="file" name="fotopost"><br>';
                    } else if (($data->foto != null) && ($dataLevel == 'is_admin')) {
                        echo '<font color="red">Ya tienes un archivo cargado</font><br>
                        <label>Foto Placa</label><br>
                             <input type="file" name="fotopost"><br>';
                    }
                    ?>

                    <?php
                    if (($data->foto == null) && ($dataLevel == 'is_refacciones')) {
                        echo ' <label>Foto Placa</label><br>
                             <input type="file" name="fotopost"><br>';
                    } else if (($data->foto != null) && ($dataLevel == 'is_refacciones')) {
                        echo '<input class="form-control" type="hidden" name="old" value="' . $data->foto . '">';
                    }
                    ?>

<<<<<<< HEAD
=======

                    <?php
                    if (($data->foto == null) && ($dataLevel == 'is_Gerente_Ventas')) {
                        echo ' <label>Foto Placa</label><br>
                             <input type="file" name="fotopost"><br>';
                    } else if (($data->foto != null) && ($dataLevel == 'is_Gerente_Ventas')) {
                        echo '<input class="form-control" type="hidden" name="old" value="' . $data->foto . '">';
                    }
                    ?>

                    <?php
                    if ($dataLevel == 'is_Gerente_Ventas') {
                        echo '<input type="hidden" name="factura" value="' . $data->factura . '">';
                        echo '<input type="hidden" name="cliente_temporal" value="' . $data->cliente_temporal . '" >';
                        echo '<input type="hidden" name="pedimento" value="' . $data->pedimento . '" >';
                        echo '<input type="hidden" name="pedimentopdf" value="' . $data->pedimentopdf . '" >';
                        echo '<input type="hidden" name="refacciones" value="' . $data->refacciones . '" >';
                    }
                    ?>



>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    <?php
                    if (($data->foto == null) && ($dataLevel == 'is_mantenimiento')) {
                        echo ' <label>Foto Placa</label><br>
                             <input type="file" name="fotopost"><br>';
                    } else if (($data->foto != null) && ($dataLevel == 'is_mantenimiento')) {
                        echo '<input class="form-control" type="hidden" name="old" value="' . $data->foto . '">';
                    }
                    ?>

                    <?php
                    if (($data->foto == null) && ($dataLevel == 'is_jefe_mantenimiento')) {
                        echo ' <label>Foto Placa</label><br>
                             <input type="file" name="fotopost"><br>';
                    } else if (($data->foto != null) && ($dataLevel == 'is_jefe_mantenimiento')) {
                        echo '<input class="form-control" type="hidden" name="old" value="' . $data->foto . '">';
                    }
                    ?>

                    <?php
                    if (($data->foto == null) && ($dataLevel == 'is_logistica')) {
                        echo ' <label>Foto Placa</label><br>
                             <input type="file" name="fotopost"><br>';
                    } else if (($data->foto != null) && ($dataLevel == 'is_logistica')) {
<<<<<<< HEAD
                        
                       // echo '<input class="form-control" type="hidden" name="old" value="' . $data->foto . '">';
                       echo '<font color="red">Ya tienes un archivo cargado</font><br>
=======
                        // echo '<input class="form-control" type="hidden" name="old" value="' . $data->foto . '">';
                        echo '<font color="red">Ya tienes un archivo cargado</font><br>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        <label>Foto Placa</label><br>
                             <input type="file" name="fotopost"><br>';
                    }
                    ?>

<<<<<<< HEAD
 <?php
                    if (($data->foto == null) && ($dataLevel == 'is_Gerente_Ventas')) {
                        echo ' <label>Foto Placa</label><br>
                             <input type="file" name="fotopost"><br>';
                    } else if (($data->foto != null) && ($dataLevel == 'is_Gerente_Ventas')) {
                        echo '<input class="form-control" type="hidden" name="old" value="' . $data->foto . '">';
                    }
                    ?>
                    
                      <?php
                    if ($dataLevel == 'is_Gerente_Ventas') {
                        echo '<input type="hidden" name="factura" value="' . $data->factura . '">';
                         echo '<input type="hidden" name="cliente_temporal" value="' . $data->cliente_temporal . '" >';
                                   echo '<input type="hidden" name="pedimento" value="' . $data->pedimento . '" >';
                                      echo '<input type="hidden" name="pedimentopdf" value="' . $data->pedimentopdf . '" >';
                                       echo '<input type="hidden" name="refacciones" value="' . $data->refacciones . '" >';
                    } 
                    ?>
=======

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606



                    <!--Pdf de la factura-->

                    <?php
                    if (($data->factura == null) && ($dataLevel == 'is_editor')) {
                        echo ' <label>Factura</label>
                             <input type="file" name="fotopostpdf"><br>';
                    } else if (($data->factura != null) && ($dataLevel == 'is_editor')) {
                        echo '<font color="red">Ya tienes un archivo cargado</font><br>
                        <label>Factura</label><br>
                             <input type="file" name="fotopostpdf"><br>';
                    }
                    ?>

                    <?php
                    if (($data->factura == null) && ($dataLevel == 'is_credito')) {
                        echo ' <label>Factura</label><br>
                             <input type="file" name="fotopostpdf"><br>';
                    } else if (($data->factura != null) && ($dataLevel == 'is_credito')) {
                        //  echo '<input class="form-control" type="hidden" name="fatura" value="' . $data->factura . '">';
                        echo '<font color="red">Ya tienes un archivo cargado</font><br>
                        <label>Factura</label><br>
                             <input type="file" name="fotopostpdf"><br>';
                    }
                    ?>


                    <?php
                    if (($data->factura == null) && ($dataLevel == 'is_admin')) {
                        echo ' <label>Factura</label><br>
                             <input type="file" name="fotopostpdf"><br>';
                    } else if (($data->factura != null) && ($dataLevel == 'is_admin')) {
                        echo '<font color="red">Ya tienes un archivo cargado</font><br>
                            <label>Factura</label><br>
                             <input type="file" name="fotopostpdf"><br>';
                    }
                    ?>





                    <!--Refacciones PDF-->
                    <?php
                    if (($data->refacciones == null) && ($dataLevel == 'is_admin')) {
                        echo ' <label>Refacciones</label><br>
                             <input type="file" name="refacciones"><br><br>';
                    } else if (($data->refacciones != null) && ($dataLevel == 'is_admin')) {
                        echo '<font color="red">Ya tienes un archivo cargado</font><br>
                        <label>Refacciones</label><br>
                             <input type="file" name="refacciones"><br>';
                    }
                    ?>


                    <?php
                    if (($data->refacciones == null) && ($dataLevel == 'is_editor')) {
                        echo ' <label>Refacciones</label><br>
                             <input type="file" name="refacciones"><br><br>';
                    } else if (($data->refacciones != null) && ($dataLevel == 'is_editor')) {
                        echo '<font color="red">Ya tienes un archivo cargado</font><br>
                        <label>Refacciones</label><br>
                             <input type="file" name="refacciones"><br>';
                    }
                    ?>



                    <?php
                    if (($data->refacciones == null) && ($dataLevel == 'is_mantenimiento')) {
                        echo ' <label>Refacciones</label><br>
                             <input type="file" name="refacciones"><br><br>';
                    } else if (($data->refacciones != null) && ($dataLevel == 'is_mantenimiento')) {
<<<<<<< HEAD
                        echo '<input class="form-control" type="hidden" name="refacciones" value="' . $data->refacciones . '">';
=======
                        echo '<input class="form-control" type="hidden" name="fatura" value="' . $data->refacciones . '">';
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    }
                    ?>  



                    <?php
                    if (($data->refacciones == null) && ($dataLevel == 'is_refacciones')) {
                        echo ' <label>Refacciones</label><br>
                             <input type="file" name="refacciones"><br><br>';
                    } else if (($data->refacciones != null) && ($dataLevel == 'is_refacciones')) {
<<<<<<< HEAD
                        echo '<input class="form-control" type="hidden" name="refacciones" value="' . $data->refacciones . '">';
=======
                        echo '<input class="form-control" type="hidden" name="fatura" value="' . $data->refacciones . '">';
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    }
                    ?>      



                    <?php
                    if (($data->refacciones == null) && ($dataLevel == 'is_jefe_mantenimiento')) {
                        echo ' <label>Refacciones</label><br>
                             <input type="file" name="refacciones"><br><br>';
                    } else if (($data->refacciones != null) && ($dataLevel == 'is_jefe_mantenimiento')) {
<<<<<<< HEAD
                        echo '<input class="form-control" type="hidden" name="refacciones" value="' . $data->refacciones . '">';
=======
                        echo '<input class="form-control" type="hidden" name="fatura" value="' . $data->refacciones . '">';
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    }
                    ?>  
                    
                    
                    
<<<<<<< HEAD
                     <!--Contrato PDF-->
=======
                    
                    
                    <!--Contrato PDF-->
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    <?php
                    if (($data->contrato == null) && ($dataLevel == 'is_admin')) {
                        echo ' <label>Contrato</label><br>
                             <input type="file" name="contrato"><br><br>';
                    } else if (($data->contrato != null) && ($dataLevel == 'is_admin')) {
                        echo "<font color='red'><a  title='Da clic para descargar el archivo' href='../../assets/verificacion/$data->contrato' target=”_blank” rel=”nofollow”>Ya tienes un archivo cargado</font><br>
                        <label>Contrato</label><br>
                             <input type='file' name='contrato'><br>";
                    }
                    ?>
                    
                    
                    
                    
                    
                       <!--Contrato PDF-->
                    <?php
                    if (($data->contrato == null) && ($dataLevel == 'is_editor')) {
                        echo ' <label>Contrato</label><br>
                             <input type="file" name="contrato"><br><br>';
                    } else if (($data->contrato != null) && ($dataLevel == 'is_editor')) {
                        echo "<font color='red'><a  title='Da clic para descargar el archivo' href='../../assets/verificacion/$data->contrato' target=”_blank” rel=”nofollow”>Ya tienes un archivo cargado</font><br>
                        <label>Contrato</label><br>
                             <input type='file' name='contrato'><br>";
                    }
                    ?>

<<<<<<< HEAD
                    
                    
                    
                    
                    <?php
                    if  ($dataLevel == 'is_admin'){
                        ?>
                        <td><b>Comentario</b></td>
                                <td colspan="3">
                                   <textarea  style="width: 270px; " name="comentario" class="form-control input-sm" style="resize:none;" rows="7" cols="80"><?= $data->comentario ?></textarea>

                                </td>
                                <br>
                                
                                <td><b>Observación</b></td>
=======




                    <!-- <label>Comentario</label><br>
                     <input type="text" style="width: 270px; height: 35px" name="comentario" value=<?= $data->comentario ?>><br>-->

                    <?php
                    if ($dataLevel == 'is_admin') {
                        ?>
                        <td><b>Comentario</b></td>
                        <td colspan="3">
                            <textarea  style="width: 270px; " name="comentario" class="form-control input-sm"  rows="7" cols="80"><?= $data->comentario ?></textarea>

                        </td>
                        <br>

                        <td><b>Observación</b></td>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        <td colspan="3">
                            <textarea  style="width: 270px; " name="observacion" class="form-control input-sm"  rows="7" cols="80"><?= $data->observacion ?></textarea>

                        </td>
                        <br>
<<<<<<< HEAD
                                
                       <?php
                        
                    } else if ($dataLevel == 'is_editor') {
                          ?>
                        <td><b>Comentario</b></td>
                                <td colspan="3">
                                    <textarea  style="width: 270px; " name="comentario" class="form-control input-sm" style="resize:none;" rows="7" cols="80"><?= $data->comentario ?></textarea>

                                </td>
                                <br>          <td><b>Observación</b></td>
                        <td colspan="3">
                            <textarea  style="width: 270px; " name="observacion" class="form-control input-sm"  rows="7" cols="80"><?= $data->observacion ?></textarea>

                        </td>
                        <br>
                       <?php
                    }else if ($dataLevel == 'is_logistica') {
=======
                        <?php
                    } else if ($dataLevel == 'is_editor') {
                        ?>
                        <td><b>Comentario</b></td>
                        <td colspan="3">
                            <textarea  style="width: 28%; " name="comentario" class="form-control input-sm" style="resize:none;" rows="7" cols="80"><?= $data->comentario ?></textarea>

                        </td>
                        <br>

                        <td><b>Observación</b></td>
                        <td colspan="3">
                            <textarea  style="width:28%; " name="observacion" class="form-control input-sm"  rows="7" cols="80"><?= $data->observacion ?></textarea>

                        </td>
                        <br>
                            <?php
                        } else if ($dataLevel == 'is_logistica') {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            ?>
                        <td><b>Comentario</b></td>
                        <td colspan="3">
                            <textarea  name="comentario" readonly="readonly" style="width: 28%;background-color:#03E7F7;" class="form-control input-sm" style="resize:none;" rows="7" cols="80"><?= $data->comentario ?></textarea>

                        </td>
                        <br>

                        <td><b>Observación</b></td>
                        <td colspan="3">
                            <textarea  style="width: 28%; " name="observacion" class="form-control input-sm"  rows="7" cols="80"><?= $data->observacion ?></textarea>

                        </td>
                        <br>
    <?php
<<<<<<< HEAD
} else
                    {
                             ?>
                        <td><b>Comentario</b></td>
                                <td colspan="3">
                                    <textarea  name="comentario" readonly="readonly" style="width: 28%;background-color:#03E7F7;" class="form-control input-sm" style="resize:none;" rows="7" cols="80"><?= $data->comentario ?></textarea>

                                </td>
                                <br>
                                 <td><b>Observación</b></td>
                                  <td colspan="3">
                            <textarea  name="observacion" readonly="readonly" style="width: 28%;background-color:#03E7F7;" class="form-control input-sm" style="resize:none;" rows="7" cols="80"><?= $data->observacion ?></textarea>

                        </td>
                       <?php 
                    }
                    ?> 


                    <!-- file lama -->
                    <input type="hidden" name="id" value="<?= $data->id_verificacion ?>">
=======
} else {
    ?>
                        <td><b>Comentario</b></td>
                        <td colspan="3">
                            <textarea  name="comentario" readonly="readonly" style="width: 28%;background-color:#03E7F7;" class="form-control input-sm" style="resize:none;" rows="7" cols="80"><?= $data->comentario ?></textarea>

                        </td>
                        <br>
                         <td><b>Observación</b></td>
                        <td colspan="3">
                            <textarea  name="observacion" readonly="readonly" style="width: 28%;background-color:#03E7F7;" class="form-control input-sm" style="resize:none;" rows="7" cols="80"><?= $data->observacion ?></textarea>

                        </td>
                        <br>


    <?php
}
?> 






                    <!-- file lama -->
                    <input type="hidden" name="id" value="<?= $id ?>">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    <!-- ID -->
                    <input type="hidden" name="id" value="<?= $data->id_verificacion ?>">

                   <!-- <input type="submit" name="submit" value="Enviar" class="btn btn-default">-->


                    <input  class="btn btn-success" title="Da clic para guardar los datos" type="submit" value="Guardar" >
                    <a title="Da clic para regresar al menú" href="../../verificacion" class="btn btn-warning">Cancelar</a>

                </form>

            </div>
        </div>
        <!-- END KONTEN UTAMA -->

        <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    </body>
</html>
