<!--
/**

 * class @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 11/10/2019 Hora 10:20 am
 */-->
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Robuspack</title>

        <!-- Bootstrap -->

       
        <?php
        //check user level
        $dataLevel = $this->userlevel->checkLevel($role);


        //check user level
        ?>
    </head>
    
    
        <script language=javascript type=text/javascript>
         
                  function stopRKey(evt) {
                var evt = (evt) ? evt : ((event) ? event : null);
                var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
                if ((evt.keyCode === 13) && (node.type == "text")) {
                    return false;
                }
            }
            document.onkeypress = stopRKey;

            function calcularTotalUSD() {
                m1 = document.getElementById("pu_usd").value;
                m2 = document.getElementById("qty").value;
                r = m1 * m2;
                document.getElementById("total_usd").value = r;



                if (document.getElementById("total_usd").value === "Infinity") {
                    document.getElementById("total_usd").value = " ";
                }
                if (document.getElementById("total_usd").value === "NaN") {
                    document.getElementById("total_usd").value = " ";
                }
            }
            
            
            
            
            
            
             function calcularImportacionPartidaPzMxn() {
                m1 = document.getElementById("arancel_igi").value;
                m2 = document.getElementById("valor_aduana").value;
                m3 = 0.008;
                m4 = document.getElementById("costo_del_flete_usd").value;
                m5 = document.getElementById("tc_pedimento").value;
                m6 = document.getElementById("honorarios_courier").value;
                
                
                r = ((m1*m2)+(m2*m3)+(m4*m5)+(parseFloat(m6))).toFixed(2);
                document.getElementById("importacion_por_partida_pz_mxn").value = r;



                if (document.getElementById("importacion_por_partida_pz_mxn").value === "Infinity") {
                    document.getElementById("importacion_por_partida_pz_mxn").value = " ";
                }
                if (document.getElementById("importacion_por_partida_pz_mxn").value === "NaN") {
                    document.getElementById("importacion_por_partida_pz_mxn").value = " ";
                }
            }


            function calcularImportacionPorPartidaUSD() {
                m1 = document.getElementById("arancel_igi").value;
                m2 = document.getElementById("valor_aduana").value;
                m3 = 0.008;
                m4 = document.getElementById("costo_del_flete_usd").value;
                m5 = document.getElementById("tc_pedimento").value;
                m6 = document.getElementById("honorarios_courier").value;
                
                
                r = ((((m1*m2)+(m2*m3)+(m4*m5)+(parseFloat(m6))).toFixed(2))/m5).toFixed(2);
              



                document.getElementById("importacion_por_partida_pz_usd").value = r;



                if (document.getElementById("importacion_por_partida_pz_usd").value === "Infinity") {
                    document.getElementById("importacion_por_partida_pz_usd").value = " ";
                }
                if (document.getElementById("importacion_por_partida_pz_usd").value === "NaN") {
                    document.getElementById("importacion_por_partida_pz_usd").value = " ";
                }
            }



            function calcularImpx_unidad() {
                m1 = document.getElementById("arancel_igi").value;
                m2 = document.getElementById("valor_aduana").value;
                m3 = 0.008;
                m4 = document.getElementById("costo_del_flete_usd").value;
                m5 = document.getElementById("tc_pedimento").value;
                m6 = document.getElementById("honorarios_courier").value;
                m7 = document.getElementById("qty").value;
              
                
                r = (((((((m1*m2)+(m2*m3)+(m4*m5)+(parseFloat(m6))).toFixed(2))/m5).toFixed(2))/(m7)).toFixed(2));
                
                

                document.getElementById("impx_unidad").value = r;




                if (document.getElementById("impx_unidad").value === "Infinity") {
                    document.getElementById("impx_unidad").value = " ";
                }
                if (document.getElementById("impx_unidad").value === "NaN") {
                    document.getElementById("impx_unidad").value = " ";
                }
            }



              function calcularCosto_total_compra_usd_lab_qro() {
                m1 = document.getElementById("arancel_igi").value;
                m2 = document.getElementById("valor_aduana").value;
                m3 = 0.008;
                m4 = document.getElementById("costo_del_flete_usd").value;
                m5 = document.getElementById("tc_pedimento").value;
                m6 = document.getElementById("honorarios_courier").value;
                m7 = document.getElementById("pu_usd").value;
                m8 = document.getElementById("qty").value;
                
               
                r = ((parseFloat(((((m1*m2)+(m2*m3)+(m4*m5)+(parseFloat(m6))).toFixed(2))/m5).toFixed(2))+parseFloat(m7*m8)).toFixed(2));
              
               // r = m1 + m2;
                  
                document.getElementById("costo_total_compra_usd_lab_qro").value = r;
        
                if (document.getElementById("costo_total_compra_usd_lab_qro").value === "Infinity") {
                    document.getElementById("costo_total_compra_usd_lab_qro").value = " ";
                }
                if (document.getElementById("costo_total_compra_usd_lab_qro").value === "NaN") {
                    document.getElementById("costo_total_compra_usd_lab_qro").value = " ";
                }
            }

             function calcularCosto_unitario_compra_usd_lab_qro() {
                m1 = document.getElementById("arancel_igi").value;
                m2 = document.getElementById("valor_aduana").value;
                m3 = 0.008;
                m4 = document.getElementById("costo_del_flete_usd").value;
                m5 = document.getElementById("tc_pedimento").value;
                m6 = document.getElementById("honorarios_courier").value;
                m7 = document.getElementById("pu_usd").value;
                m8 = document.getElementById("qty").value;
                
               
                r = (((parseFloat(((((m1*m2)+(m2*m3)+(m4*m5)+(parseFloat(m6))).toFixed(2))/m5).toFixed(2))+parseFloat(m7*m8)).toFixed(2))/(m8)).toFixed(2);
               
                document.getElementById("costo_unitario_compra_usd_lab_qro").value = r;




                if (document.getElementById("costo_unitario_compra_usd_lab_qro").value === "Infinity") {
                    document.getElementById("costo_unitario_compra_usd_lab_qro").value = " ";
                }
                if (document.getElementById("costo_unitario_compra_usd_lab_qro").value === "NaN") {
                    document.getElementById("costo_unitario_compra_usd_lab_qro").value = " ";
                }
            }
            
            
            
            
            
             function calcularCm() {
                m1 = document.getElementById("pv_extra_bajo_ref_x_pz").value;
                m2 = document.getElementById("com").value;
                
               // r = m1 + m2;
                  var r = ((parseFloat(m1) * parseFloat(m2))/100).toFixed(2);
               
                document.getElementById("cm").value = r;




                if (document.getElementById("cm").value === "Infinity") {
                    document.getElementById("cm").value = " ";
                }
                if (document.getElementById("cm").value === "NaN") {
                    document.getElementById("cm").value = " ";
                }
            }
            
            
            
           function calcularCm_c() {
            
                m1 = document.getElementById("arancel_igi").value;
                m2 = document.getElementById("valor_aduana").value;
                m3 = 0.008;
                m4 = document.getElementById("costo_del_flete_usd").value;
                m5 = document.getElementById("tc_pedimento").value;
                m6 = document.getElementById("honorarios_courier").value;
                m7 = document.getElementById("pu_usd").value;
                m8 = document.getElementById("qty").value;
                m9 = document.getElementById("com").value;
               m10 = document.getElementById("pv_extra_bajo_ref_x_pz").value;
               
                r = (parseFloat((((parseFloat(((((m1*m2)+(m2*m3)+(m4*m5)+(parseFloat(m6))).toFixed(2))/m5).toFixed(2))+parseFloat(m7*m8)).toFixed(2))/(m8)).toFixed(2))+((parseFloat(m9) * parseFloat(m10))/100)).toFixed(2);
                    // r = m1 + m2;
                  
                   
                    document.getElementById("cm_c").value = r;
                    if (document.getElementById("cm_c").value === "Infinity") {
                    document.getElementById("cm_c").value = " ";
                    }
                    if (document.getElementById("cm_c").value === "NaN") {
                    document.getElementById("cm_c").value = " ";
                    }
                    }
            
            
            
             function calcularUtilidadRefxPz() {
                m1 = document.getElementById("arancel_igi").value;
                m2 = document.getElementById("valor_aduana").value;
                m3 = 0.008;
                m4 = document.getElementById("costo_del_flete_usd").value;
                m5 = document.getElementById("tc_pedimento").value;
                m6 = document.getElementById("honorarios_courier").value;
                m7 = document.getElementById("pu_usd").value;
                m8 = document.getElementById("qty").value;
                m9 = document.getElementById("com").value;
                m10 = document.getElementById("pv_extra_bajo_ref_x_pz").value;
               
                
                r=(parseFloat(m10)-(parseFloat((((parseFloat(((((m1*m2)+(m2*m3)+(m4*m5)+(parseFloat(m6))).toFixed(2))/m5).toFixed(2))+parseFloat(m7*m8)).toFixed(2))/(m8)).toFixed(2))+((parseFloat(m9) * parseFloat(m10))/100)).toFixed(2)).toFixed(2);
                 
                  
                  
                   
                    
                    document.getElementById("utilidad_refx_pz").value = r;
                    if (document.getElementById("utilidad_refx_pz").value === "Infinity") {
                    document.getElementById("utilidad_refx_pz").value = " ";
                    }
                    if (document.getElementById("utilidad_refx_pz").value === "NaN") {
                    document.getElementById("utilidad_refx_pz").value = " ";
                    }
                    }
                    
                    
                      function calcularUtilidad() {
            
                m1 = document.getElementById("arancel_igi").value;
                m2 = document.getElementById("valor_aduana").value;
                m3 = 0.008;
                m4 = document.getElementById("costo_del_flete_usd").value;
                m5 = document.getElementById("tc_pedimento").value;
                m6 = document.getElementById("honorarios_courier").value;
                m7 = document.getElementById("pu_usd").value;
                m8 = document.getElementById("qty").value;
                m9 = document.getElementById("com").value;
                m10 = document.getElementById("pv_extra_bajo_ref_x_pz").value;
                
              r = Math.ceil((1-(((parseFloat((((parseFloat(((((m1*m2)+(m2*m3)+(m4*m5)+(parseFloat(m6))).toFixed(2))/m5).toFixed(2))+parseFloat(m7*m8)).toFixed(2))/(m8)).toFixed(2))+((parseFloat(m9) * parseFloat(m10))/100)).toFixed(2))/m10))*100);
                  
                    document.getElementById("utilidad").value = r;
                    if (document.getElementById("utilidad").value === "Infinity") {
                    document.getElementById("utilidad").value = " ";
                    }
                    if (document.getElementById("utilidad").value === "NaN") {
                    document.getElementById("utilidad").value = " ";
                    }
                    }
            
                        
                              
             function calcularArancel() {
                m1 = document.getElementById("arancel_igi").value;
                m2 = document.getElementById("valor_aduana").value;
                
               // r = m1 + m2;
                  var r = (parseFloat(m1) * parseFloat(m2)).toFixed(2);
               
                document.getElementById("arancel").value = r;




                if (document.getElementById("arancel").value === "Infinity") {
                    document.getElementById("arancel").value = " ";
                }
                if (document.getElementById("arancel").value === "NaN") {
                    document.getElementById("arancel").value = " ";
                }
            }
            
            
              function calcularDta() {
                m1 = document.getElementById("valor_aduana").value;
               
                
               // r = m1 + m2;
                  var r = (m1 * 0.008).toFixed(2);
               
                document.getElementById("dta").value = r;




                if (document.getElementById("dta").value === "Infinity") {
                    document.getElementById("dta").value = " ";
                }
                if (document.getElementById("dta").value === "NaN") {
                    document.getElementById("dta").value = " ";
                }
            }
            
            
            
             function calcularIvaPedimento() {
                m1 = document.getElementById("valor_aduana").value;
                m2 = document.getElementById("arancel_igi").value;
                
               // r = m1 + m2;
                var r = ((parseFloat(m1)+(parseFloat(m1)*parseFloat(m2))  + (parseFloat(m1)*0.008))*.16).toFixed(2);
               
                document.getElementById("iva_del_pedimento").value = r;




                if (document.getElementById("iva_del_pedimento").value === "Infinity") {
                    document.getElementById("iva_del_pedimento").value = " ";
                }
                if (document.getElementById("iva_del_pedimento").value === "NaN") {
                    document.getElementById("iva_del_pedimento").value = " ";
                }
            }
            
              function calcularCostoFlete() {
                m1 = document.getElementById("costo_del_flete_usd").value;
                m2 = document.getElementById("tc_pedimento").value;
                
               // r = m1 + m2;
                  var r = (parseFloat(m1) * parseFloat(m2)).toFixed(2);
               
                document.getElementById("costo_del_flete_mxn").value = r;




                if (document.getElementById("costo_del_flete_mxn").value === "Infinity") {
                    document.getElementById("costo_del_flete_mxn").value = " ";
                }
                if (document.getElementById("costo_del_flete_mxn").value === "NaN") {
                    document.getElementById("costo_del_flete_mxn").value = " ";
                }
            }
            
            
function filterFloat(evt,input){
    // Backspace = 8, Enter = 13, ‘0′ = 48, ‘9′ = 57, ‘.’ = 46, ‘-’ = 43
    var key = window.Event ? evt.which : evt.keyCode;    
    var chark = String.fromCharCode(key);
    var tempValue = input.value+chark;
    if(key >= 48 && key <= 57){
        if(filter(tempValue)=== false){
            return false;
        }else{       
            return true;
        }
    }else{
          if(key == 8 || key == 13 || key == 0) {     
              return true;              
          }else if(key == 46){
                if(filter(tempValue)=== false){
                    return false;
                }else{       
                    return true;
                }
          }else{
              return false;
          }
    }
}
function filter(__val__){
    var preg = /^([0-9]+\.?[0-9]{0,2})$/; 
    if(preg.test(__val__) === true){
        return true;
    }else{
       return false;
    }
    
}

        
   

        
        </script> 

    <body>
        <div id="maquinaria">
            <form action="<?= base_url() ?>Fucompras/updatedata" method="post" enctype="multipart/form-data">

                <MARQUEE SCROLLDELAY =200></MARQUEE>
                <div class="container" ><h1>Actualizar datos</h1>
                    <table class="table table-bordered table-striped">
                        <tbody>



<!-- <tr>

    <td><b>Cliente</b></td>
   <td colspan="3">  <select id="a3" class="form-control" name="cliente"   <?php echo form_dropdown('clienteCombo', $clienteCombo, $data->cliente, '#', 'id="clienteCombo"'); ?> </select></td>


</tr> -->
<<<<<<< HEAD

=======
 <input id="cantidad_registros" class="form-control" type="hidden" name="cantidad_registros" value="<?= $data->cantidad_registros ?>">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            <tr>
                                <td><b>Ref</b></td>
                                <td>
<<<<<<< HEAD
                                    <input id="ref" class="form-control" type="text" name="ref" value="<?= $data->ref ?>">
=======
                                    <input maxlength="8" id="ref" class="form-control" type="text" name="ref" value="<?= $data->ref ?>">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                               </td>
                            </tr>


                           <!-- <tr>
                                <td><b>Estatus</b></td>
                                <td >
<<<<<<< HEAD
=======
                           
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                    <input id="estatus" class="form-control" type="text" name="estatus" value="<?= $data->estatus ?>">
                              </td>
                            </tr>-->
                             <tr>
                         <td><b>Estatus</b></td>
                        <td> <SELECT name="estatus" class="form-control " > 
                            
                                 <option value="" <?php if ($data->estatus == "") {echo "Selected"; } ?>>Selecciona una opción</option>
                                
                                <option value="ENVIADO" <?php if ($data->estatus == "ENVIADO") {echo "Selected"; } ?>>ENVIADO</option>
                                <option value="LIBRE" <?php if ($data->estatus == "LIBRE") {  echo "Selected";} ?>>LIBRE</option>
                                <option value="PENDIENTE" <?php if ($data->estatus == "PENDIENTE") {echo "Selected"; } ?>>PENDIENTE</option>
                                <option value="RECIBIDO" <?php if ($data->estatus == "RECIBIDO") {  echo "Selected";} ?>>RECIBIDO</option>
                                <option value="SE ENVIO DIRECTAMENTE AL CLIENTE" <?php if ($data->estatus == "SE ENVIO DIRECTAMENTE AL CLIENTE") {echo "Selected"; } ?>>SE ENVIO DIRECTAMENTE AL CLIENTE</option>
                              
                          
                           </SELECT></td>
                    </tr>


                            <tr>
                                <td><b>Compania importadora</b></td>
                                <td >
                                  <!-- <input id="compania_importadora" class="form-control" type="text" name="compania_importadora" value="<?= $data->compania_importadora ?>">-->
                                     <SELECT name="compania_importadora" class="form-control " > 
                            
                                 <option value="" <?php if ($data->compania_importadora == "") {echo "Selected"; } ?>>Selecciona una opción</option>
                                
                                <option value="ROBUSPACK" <?php if ($data->compania_importadora == "ROBUSPACK") {echo "Selected"; } ?>>ROBUSPACK</option>
                                <option value="MAKBOK" <?php if ($data->compania_importadora == "MAKBOX") {  echo "Selected";} ?>>MAKBOX</option>
                               
                          
                           </SELECT>
                                  
                                </td>
                            </tr>

                            
                            <tr>
                                <td><b>Cliente proveedor</b></td>
                                <td >
                                   <input id="cliente_proveedor" class="form-control" type="text" name="cliente_proveedor" value="<?= $data->cliente_proveedor ?>">
                                  
                                </td>
                            </tr>

                           <tr>
                                <td><b>Awb</b></td>
                                <td >
                                   <input id="awb" class="form-control" type="text" name="awb" value="<?= $data->awb ?>">
                                  
                                </td>
                            </tr>
                            
                            
                             <!-- 
                              <tr>
                         <td><b>awb</b></td>
                        <td> <SELECT name="tipo_de_prod" class="form-control " > 
                            
                                 <option value="" <?php if ($data->tipo_de_prod == "") {echo "Selected"; } ?>>Selecciona una opción</option>
                                
                                <option value="REFACCION" <?php if ($data->tipo_de_prod == "REFACCION") {echo "Selected"; } ?>>REFACCION</option>
                                <option value="CUBIERTA" <?php if ($data->tipo_de_prod == "CUBIERTA") {  echo "Selected";} ?>>CUBIERTA</option>
                               
                          
                           </SELECT></td>
                    </tr>
                            -->
                              <tr>
                                <td><b>Courier</b></td>
                                <td >
                                   <input id="rfc" class="form-control" type="text" name="courier" value="<?= $data->courier ?>">
                                  
                                </td>
                            </tr>
                            
                            <tr>
                                <td><b>Clave</b></td>
                                <td >
                                   <input id="clave" class="form-control" type="text" name="clave" value="<?= $data->clave ?>">
                                  
                                </td>
                            </tr>
                            
                             
                   
                            
                           
                            
                            
                             <tr>
                                <td><b>Tipo de prod</b></td>
                                <td >
                                   <input id="tipo_de_prod" class="form-control" type="text" name="tipo_de_prod" value="<?= $data->tipo_de_prod ?>">
                                  
                                </td>
                            </tr>
                            
                            
                             <tr>
                                <td><b>Descripción</b></td>
                                <td >
                                   <input id="descripcion" class="form-control" type="text" name="descripcion" value="<?= $data->descripcion ?>">
                                  
                                </td>
                            </tr>
                            
                            
                            <tr>
                                <td><b>Factura</b></td>
                                <td >
                                   <input id="factura" class="form-control" type="text" name="factura" value="<?= $data->factura ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>Imn</b></td>
                                <td >
                                   <input id="imn" class="form-control" type="text" name="imn" value="<?= $data->imn ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>OC</b></td>
                                <td >
                                   <input id="ocv" class="form-control" type="text" name="ocv" value="<?= $data->ocv ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>Qty</b></td>
                                <td >
<<<<<<< HEAD
                                   <input id="qty" min="0" onchange="calcularTotalUSD();calcularImpx_unidad();calcularCosto_unitario_compra_usd_lab_qro();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" onkeyup="calcularTotalUSD();calcularImpx_unidad();calcularCosto_unitario_compra_usd_lab_qro();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" class="form-control" type="text" name="qty" value="<?= $data->qty ?>">
=======
                                   <input id="qty" min="0" onchange="calcularTotalUSD();calcularImpx_unidad();calcularCosto_unitario_compra_usd_lab_qro();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" onkeyup="calcularTotalUSD();calcularImpx_unidad();calcularCosto_unitario_compra_usd_lab_qro();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" class="form-control" type="number" name="qty" value="<?= $data->qty ?>">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>Pu usd</b></td>
                                <td >
<<<<<<< HEAD
                                    <input id="pu_usd" min="0" onchange="calcularTotalUSD();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();calcularCm_c()"  onkeyup="calcularTotalUSD();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" class="form-control" type="number" name="pu_usd" value="<?= $data->pu_usd ?>">
                                  
=======
                                  <div class="input-group">
                                    <div class="input-group-addon"> $</div>
                                      <input  id="pu_usd" min="0" onchange="calcularTotalUSD();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();calcularCm_c()"  onkeyup="calcularTotalUSD();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" class="form-control" type="TEXT" onkeypress="return filterFloat(event,this);" name="pu_usd" value="<?= $data->pu_usd ?>">
                                  </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                </td>
                            </tr>
                            
                              <tr>
                                <td><b>Total USD</b></td>
                                <td >
<<<<<<< HEAD
                                   <input readonly="readonly" min="0" title="Pu USD * Qty" style="background-color:#03E7F7;" onkeyup="calcularCosto_total_compra_usd_lab_qro();" id="total_usd" class="form-control" type="text" name="total_usd" value="<?= $data->total_usd ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>Tipo de embarque</b></td>
                                <td >
                                   <input id="tipo_de_embarque" class="form-control" type="text" name="tipo_de_embarque" value="<?= $data->tipo_de_embarque ?>">
=======
                                   <div class="input-group">
                                    <div class="input-group-addon"> $</div>
                                      <input readonly="readonly" min="0" title="Pu USD * Qty" style="background-color:#03E7F7;" onkeyup="calcularCosto_total_compra_usd_lab_qro();" id="total_usd" class="form-control" type="text" name="total_usd" value="<?= $data->total_usd ?>">
                                    </div>
                                </td>
                            </tr>
                            
                            
                            
                            
                               
                              
                             <tr>
                                <td><b>Tipo de embarque</b></td>
                                <td >
                                    
                                    <SELECT name="tipo_de_embarque" class="form-control " > 
                            
                                 <option value="" <?php if ($data->tipo_de_embarque == "") {echo "Selected"; } ?>>Selecciona una opción</option>
                                
                                <option value="AEREO" <?php if ($data->tipo_de_embarque == "AEREO") {echo "Selected"; } ?>>AEREO</option>
                                <option value="LOCAL" <?php if ($data->tipo_de_embarque == "LOCAL") {  echo "Selected";} ?>>LOCAL</option>
                                <option value="MARITIMO" <?php if ($data->tipo_de_embarque == "MARITIMO") {echo "Selected"; } ?>>MARITIMO</option>
                                <option value="TERRESTRE" <?php if ($data->tipo_de_embarque == "TERRESTRE") {  echo "Selected";} ?>>TERRESTRE</option>
                               
                          
                           </SELECT>
                                  <!-- <input id="tipo_de_embarque" class="form-control" type="text" name="tipo_de_embarque" value="<?= $data->tipo_de_embarque ?>">-->
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>Tc pedimento</b></td>
                                <td>
<<<<<<< HEAD
                                   <input id="tc_pedimento" min="0" onchange="calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCostoFlete();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();calcularImportacionPartidaPzMxn();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();" onkeyup="calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCostoFlete();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();calcularImportacionPartidaPzMxn();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();" class="form-control" type="text" name="tc_pedimento" value="<?= $data->tc_pedimento ?>">
                                  
=======
                                  <div class="input-group">
                                    <div class="input-group-addon"> $</div>
                                    <input onkeypress="return filterFloat(event,this);" id="tc_pedimento" min="0" onchange="calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCostoFlete();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();calcularImportacionPartidaPzMxn();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();" onkeyup="calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCostoFlete();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();calcularImportacionPartidaPzMxn();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();" class="form-control" type="text" name="tc_pedimento" value="<?= $data->tc_pedimento ?>">
                                 </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>Importación por partida pz mxn</b></td>
                                <td >
<<<<<<< HEAD
                                   <input min="0" title="Arancel + Dta + Costo del Flete Mx + Honorarios Courier" id="importacion_por_partida_pz_mxn" readonly="readonly" style="background-color:#03E7F7;" onchange="calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" onkeyup="calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" class="form-control" type="text" name="importacion_por_partida_pz_mxn" value="<?= $data->importacion_por_partida_pz_mxn ?>">
                                  
=======
                                   <div class="input-group">
                                    <div class="input-group-addon"> $</div>
                                  <input min="0" title="Arancel + Dta + Costo del Flete Mx + Honorarios Courier" id="importacion_por_partida_pz_mxn" readonly="readonly" style="background-color:#03E7F7;" onchange="calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" onkeyup="calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" class="form-control" type="text" name="importacion_por_partida_pz_mxn" value="<?= $data->importacion_por_partida_pz_mxn ?>">
                                  </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                </td>
                            </tr>
                            
                            
                            

                              <tr>
                                <td><b>Importación por partida pz usd</b></td>
                                <td >
<<<<<<< HEAD
                                   <input readonly="readonly" min="0" title="Importación por partida pz mx / Tc Pedimento"  style="background-color:#03E7F7;" onkeyup="calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();"  id="importacion_por_partida_pz_usd" class="form-control" type="text" name="importacion_por_partida_pz_usd" value="<?= $data->importacion_por_partida_pz_usd ?>">
                                  
=======
                                 <div class="input-group">
                                    <div class="input-group-addon"> $</div>
                                   <input readonly="readonly" min="0" title="Importación por partida pz mx / Tc Pedimento"  style="background-color:#03E7F7;" onkeyup="calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();"  id="importacion_por_partida_pz_usd" class="form-control" type="text" name="importacion_por_partida_pz_usd" value="<?= $data->importacion_por_partida_pz_usd ?>">
                                  </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>Impx unidad</b></td>
                                <td >
<<<<<<< HEAD
                                   <input id="impx_unidad" title="Importación Por Partida Pz USD / Qty" style="background-color:#03E7F7;" readonly="readonly" class="form-control" type="text" name="impx_unidad" value="<?= $data->impx_unidad ?>">
                                  
=======
                                  <div class="input-group">
                                    <div class="input-group-addon"> $</div>
                                  <input id="impx_unidad" title="Importación Por Partida Pz USD / Qty" style="background-color:#03E7F7;" readonly="readonly" class="form-control" type="text" name="impx_unidad" value="<?= $data->impx_unidad ?>">
                                    </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>Costo total compra usd lab qro</b></td>
                                <td >
<<<<<<< HEAD
                                   <input id="costo_total_compra_usd_lab_qro"  readonly="readonly" min="0" title="Importación Por Partida Pz Usd + Total USD" style="background-color:#03E7F7;" onkeyup="calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();" class="form-control" type="text" name="costo_total_compra_usd_lab_qro" value="<?= $data->costo_total_compra_usd_lab_qro ?>">
                                  
=======
                                   <div class="input-group">
                                    <div class="input-group-addon"> $</div>
                                  <input id="costo_total_compra_usd_lab_qro"  readonly="readonly" min="0" title="Importación Por Partida Pz Usd + Total USD" style="background-color:#03E7F7;" onkeyup="calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();" class="form-control" type="text" name="costo_total_compra_usd_lab_qro" value="<?= $data->costo_total_compra_usd_lab_qro ?>">
                                    </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>Costo unitario compra usd lab qro</b></td>
                                <td >
<<<<<<< HEAD
                                   <input id="costo_unitario_compra_usd_lab_qro" title="Costo Total Compra Usd Lab Qro / Qty" style="background-color:#03E7F7;" readonly="readonly" class="form-control" type="text" name="costo_unitario_compra_usd_lab_qro" value="<?= $data->costo_unitario_compra_usd_lab_qro ?>">
                                  
=======
                                  <div class="input-group">
                                    <div class="input-group-addon"> $</div>
                                  <input id="costo_unitario_compra_usd_lab_qro" title="Costo Total Compra Usd Lab Qro / Qty" style="background-color:#03E7F7;" readonly="readonly" class="form-control" type="text" name="costo_unitario_compra_usd_lab_qro" value="<?= $data->costo_unitario_compra_usd_lab_qro ?>">
                                    </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                </td>
                            </tr>
                            
                            
                            

                            
                              <tr>
                                <td><b>Com</b></td>
                                <td >
<<<<<<< HEAD
                                   <input id="com" min="0" onkeyup="calcularCm();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" onchange="calcularCm();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" class="form-control" type="text" name="com" value="<?= $data->com ?>">
                                  
=======
                                  <div class="input-group">
                                        <input id="com" onkeypress="return filterFloat(event,this);" type="text" min="0" onkeyup="calcularCm();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" onchange="calcularCm();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" class="form-control input-sm" name="com">
                                  <span class="input-group-addon">
                                      %
                                  </span> </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>Cm</b></td>
                                <td >
<<<<<<< HEAD
                                   <input title="Pv extra bajo ref x pz + Com" onkeyup="calcularCm_c();" readonly="readonly" min="0" style="background-color:#03E7F7;" id="cm" class="form-control" type="text" name="cm" value="<?= $data->cm ?>">
                                  
=======
                                  <div class="input-group">
                                    <div class="input-group-addon"> $</div>
                                    <input title="Pv extra bajo ref x pz + Com" onkeyup="calcularCm_c();" readonly="readonly" min="0" style="background-color:#03E7F7;" id="cm" class="form-control" type="text" name="cm" value="<?= $data->cm ?>">
                                   </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>Cm c</b></td>
                                <td >
<<<<<<< HEAD
                                   <input id="cm_c" readonly="readonly" min="0" title="Costo Unitario Compra Usd Lab Qro + Cm" style="background-color:#03E7F7;"  class="form-control" type="text" name="cm_c" value="<?= $data->cm_c ?>">
                                  
=======
                                 <div class="input-group">
                                    <div class="input-group-addon"> $</div>
                                   <input id="cm_c" readonly="readonly" min="0" title="Costo Unitario Compra Usd Lab Qro + Cm" style="background-color:#03E7F7;"  class="form-control" type="text" name="cm_c" value="<?= $data->cm_c ?>">
                                    </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>Ent</b></td>
                                <td >
                                   <input id="ent" class="form-control" type="text" name="ent" value="<?= $data->ent ?>">
                                  
                                </td>
                            </tr>
                            
                            
                            
  <tr>
                                <td><b>Pedimento</b></td>
                                <td >
                                   <input id="pedimento" class="form-control" type="text" name="pedimento" value="<?= $data->pedimento ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>Fecha pedimento</b></td>
                                <td >
                                   <input id="fecha_pedimento" class="form-control" type="text" name="fecha_pedimento" value="<?= $data->fecha_pedimento ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>Valor aduana</b></td>
                                <td >
<<<<<<< HEAD
                                   <input id="valor_aduana"  onchange="calcularArancel();calcularDta();calcularIvaPedimento();calcularImportacionPartidaPzMxn();calcularImportacionPorPartidaUSD();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" onkeyup="calcularArancel();calcularDta();calcularIvaPedimento();calcularImportacionPartidaPzMxn();calcularImportacionPorPartidaUSD();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" class="form-control" type="text" name="valor_aduana" value="<?= $data->valor_aduana ?>">
                                  
=======
                                   <div class="input-group">
                                    <div class="input-group-addon"> $</div>
                                  <input  onkeypress="return filterFloat(event,this);" id="valor_aduana"  onchange="calcularArancel();calcularDta();calcularIvaPedimento();calcularImportacionPartidaPzMxn();calcularImportacionPorPartidaUSD();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" onkeyup="calcularArancel();calcularDta();calcularIvaPedimento();calcularImportacionPartidaPzMxn();calcularImportacionPorPartidaUSD();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" class="form-control" type="text" name="valor_aduana" value="<?= $data->valor_aduana ?>">
                                    </div>
                                </td>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>Arancel igi</b></td>
                                <td >
<<<<<<< HEAD
                                   <input onkeyup="calcularArancel();calcularIvaPedimento();calcularImportacionPartidaPzMxn();calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" onchange="calcularArancel();calcularIvaPedimento();calcularImportacionPartidaPzMxn();calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" id="arancel_igi" class="form-control" type="text" name="arancel_igi" value="<?= $data->arancel_igi ?>">
                                  
=======
                                  <div class="input-group">
                                  <input onkeypress="return filterFloat(event,this);" onkeyup="calcularArancel();calcularIvaPedimento();calcularImportacionPartidaPzMxn();calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" onchange="calcularArancel();calcularIvaPedimento();calcularImportacionPartidaPzMxn();calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" id="arancel_igi" class="form-control" type="text" name="arancel_igi" value="<?= $data->arancel_igi ?>">
                                   <span class="input-group-addon">
                                      %
                                  </span> 
                                  </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                </td>
                            </tr>
                            
                            
                            
  <tr>
                                <td><b>Arancel</b></td>
                                <td >
<<<<<<< HEAD
                                   <input id="a
                                          rancel"  title="Arancel Igi * Valor Aduana" readonly="readonly" min="0" style="background-color:#03E7F7;" onchange="calcularIvaPedimento();" onkeyup="calcularIvaPedimento();" class="form-control" type="text" name="arancel" value="<?= $data->arancel ?>">
                                  
=======
                                  <div class="input-group">
                                    <div class="input-group-addon"> $</div>
                                  <input id="arancel"  title="Arancel Igi * Valor Aduana" readonly="readonly" min="0" style="background-color:#03E7F7;" onchange="calcularIvaPedimento();" onkeyup="calcularIvaPedimento();" class="form-control" type="text" name="arancel" value="<?= $data->arancel ?>">
                                    </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>Dta</b></td>
                                <td >
<<<<<<< HEAD
                                   <input id="dta" readonly="readonly" title="Valor Aduana * 0.008 " min="0" style="background-color:#03E7F7;" id="dta" type="text" onchange="calcularIvaPedimento();;" onkeyup="calcularIvaPedimento();" class="form-control" type="text" name="dta" value="<?= $data->dta ?>">
                                  
=======
                                  <div class="input-group">
                                    <div class="input-group-addon"> $</div>
                                   <input id="dta" readonly="readonly" title="Valor Aduana * 0.008 " min="0" style="background-color:#03E7F7;" id="dta" type="text" onchange="calcularIvaPedimento();;" onkeyup="calcularIvaPedimento();" class="form-control" type="text" name="dta" value="<?= $data->dta ?>">
                                   </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>Iva del pedimento</b></td>
                                <td >
<<<<<<< HEAD
                                   <input readonly="readonly" title="((Valor Aduana + Arancel + Dta) * (0.008) )" min="0" style="background-color:#03E7F7;" id="iva_del_pedimento" id="iva_del_pedimento" class="form-control" type="text" name="iva_del_pedimento" value="<?= $data->iva_del_pedimento ?>">
                                  
=======
                                 <div class="input-group">
                                    <div class="input-group-addon"> $</div>
                                    <input readonly="readonly" title="((Valor Aduana + Arancel + Dta) * (0.008) )" min="0" style="background-color:#03E7F7;" id="iva_del_pedimento" id="iva_del_pedimento" class="form-control" type="text" name="iva_del_pedimento" value="<?= $data->iva_del_pedimento ?>">
                                  </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>Costo del flete mxn</b></td>
                                <td >
<<<<<<< HEAD
                                   <input readonly="readonly" title="Costo del Flete Usd * Tc Pedimento" min="0" style="background-color:#03E7F7;" id="costo_del_flete_mxn" class="form-control" type="text" name="costo_del_flete_mxn" value="<?= $data->costo_del_flete_mxn ?>">
                                  
=======
                                 <div class="input-group">
                                    <div class="input-group-addon"> $</div>
                                   <input readonly="readonly" title="Costo del Flete Usd * Tc Pedimento" min="0" style="background-color:#03E7F7;" id="costo_del_flete_mxn" class="form-control" type="text" name="costo_del_flete_mxn" value="<?= $data->costo_del_flete_mxn ?>">
                                  </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                </td>
                            </tr>
                            
                            
                            
  <tr>
                                <td><b>Honorarios courier</b></td>
                                <td >
<<<<<<< HEAD
                                   <input id="honorarios_courier"  onkeyup="calcularImportacionPartidaPzMxn();calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" onchange="calcularImportacionPartidaPzMxn();calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" class="form-control" type="text" name="honorarios_courier" value="<?= $data->honorarios_courier ?>">
                                  
=======
                                  <div class="input-group">
                                    <div class="input-group-addon"> $</div>
                                   <input onkeypress="return filterFloat(event,this);" id="honorarios_courier"  onkeyup="calcularImportacionPartidaPzMxn();calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" onchange="calcularImportacionPartidaPzMxn();calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" class="form-control" type="text" name="honorarios_courier" value="<?= $data->honorarios_courier ?>">
                                  </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>Costo del flete usd</b></td>
                                <td >
<<<<<<< HEAD
                                   <input id="costo_del_flete_usd" onkeyup="calcularCostoFlete();calcularImportacionPartidaPzMxn();calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" onchange="calcularCostoFlete();calcularImportacionPartidaPzMxn();calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" class="form-control" type="text" name="costo_del_flete_usd" value="<?= $data->costo_del_flete_usd ?>">
                                  
=======
                                  <div class="input-group">
                                    <div class="input-group-addon"> $</div>
                                    <input onkeypress="return filterFloat(event,this);" id="costo_del_flete_usd" onkeyup="calcularCostoFlete();calcularImportacionPartidaPzMxn();calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" onchange="calcularCostoFlete();calcularImportacionPartidaPzMxn();calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" class="form-control" type="text" name="costo_del_flete_usd" value="<?= $data->costo_del_flete_usd ?>">
                                 </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>Pv extra bajo ref x pz</b></td>
                                <td >
<<<<<<< HEAD
                                   <input id="pv_extra_bajo_ref_x_pz" onchange="calcularCm();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" onkeyup="calcularCm();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" class="form-control" type="text" name="pv_extra_bajo_ref_x_pz" value="<?= $data->pv_extra_bajo_ref_x_pz ?>">
                                  
=======
                                  <div class="input-group">
                                    <div class="input-group-addon"> $</div>
                                 <input onkeypress="return filterFloat(event,this);" id="pv_extra_bajo_ref_x_pz" onchange="calcularCm();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" onkeyup="calcularCm();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" class="form-control" type="text" name="pv_extra_bajo_ref_x_pz" value="<?= $data->pv_extra_bajo_ref_x_pz ?>">
                                   </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>Utilidad refx pz </b></td>
                                <td >
<<<<<<< HEAD
                                   <input readonly="readonly" title="Pv Extra Bajo Ref x Pz  - Cm c" id="utilidad_refx_pz" style="background-color:#03E7F7;" class="form-control" type="text" name="utilidad_refx_pz" value="<?= $data->utilidad_refx_pz?>">
                                  
=======
                                  <div class="input-group">
                                    <div class="input-group-addon"> $</div>
                                 <input readonly="readonly" title="Pv Extra Bajo Ref x Pz  - Cm c" id="utilidad_refx_pz" style="background-color:#03E7F7;" class="form-control" type="text" name="utilidad_refx_pz" value="<?= $data->utilidad_refx_pz?>">
                                    </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                </td>
                            </tr>
                            
                            
                            
  <tr>
                                <td><b>Utilidad</b></td>
                                <td >
<<<<<<< HEAD
                                   <input id="utilidad" readonly="readonly" title="1 - (Cm c / Pv Extra Bajo Ref X Pz)" min="0" style="background-color:#03E7F7;" class="form-control" type="text" name="utilidad" value="<?= $data->utilidad ?>">
                                  
=======
                                   <div class="input-group">
                                   <input id="utilidad" readonly="readonly" title="1 - (Cm c / Pv Extra Bajo Ref X Pz)" min="0" style="background-color:#03E7F7;" class="form-control" type="text" name="utilidad" value="<?= $data->utilidad ?>">
                                   <span class="input-group-addon">
                                      %
                                  </span> </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>Observaciones</b></td>
                                <td >
                                   <input id="observaciones" class="form-control" type="text" name="observaciones" value="<?= $data->observaciones ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>Fecha pi</b></td>
                                <td >
                                   <input id="fecha_pi" class="form-control" type="date" name="fecha_pi" value="<?= $data->fecha_pi ?>">
                                  
                                </td>
                            </tr>
                            
                             <tr>
                                <td><b>Código arancelario</b></td>
                                <td >
                                   <input id="codigo_arancelario" class="form-control" type="text" name="codigo_arancelario" value="<?= $data->codigo_arancelario ?>">
                                  
                                </td>
                            </tr>
                            
                           
                            
                             <?php
                            if (($data->factura_proveedor == null)) {
                                echo '    <tr>
                            <td><b>Factura <i style="font-size:18px;color:red" class="fa fa-file-pdf-o"></i></b></td>
                            <td><font color="red">No tienes ningún archivo cargado</font>
                            <input  id="archivo"  class="form-control" type="file"  name="factura_proveedor"></td>
                        </tr>';
                            } else if (($data->factura_proveedor != null)) {
                                echo '
                            <tr>
                            <td ><b>Factura <i style="font-size:18px;color:red" class="fa fa-file-pdf-o"></i></b></td>
                            <td>
                           <a  title="Da clic para visualizar el archivo" href="' . base_url() . 'assets/fucompras/' . $data->factura_proveedor . '" target=”_blank” rel=”nofollow”> <font color="green">Ya tienes un archivo cargado</font></a><br>
                           <br><input  id="archivo"  class="form-control" type="file"  name="factura_proveedor">
                           </td>
                        </tr>';
                            }
                            ?>
                            
                            
                            
                              
                             <?php
                            if (($data->pedimentopdf == null)) {
                                echo '    <tr>
                            <td><b>Pedimento <i style="font-size:18px;color:red" class="fa fa-file-pdf-o"></i></b></td>
                            <td><font color="red">No tienes ningún archivo cargado</font>
                            <input  id="archivo"  class="form-control" type="file"  name="pedimentopdf"></td>
                        </tr>';
                            } else if (($data->pedimentopdf != null)) {
                                echo '
                            <tr>
                            <td ><b>Pedimento <i style="font-size:18px;color:red" class="fa fa-file-pdf-o"></i></b></td>
                            <td>
                           <a  title="Da clic para visualizar el archivo" href="' . base_url() . 'assets/fucompras/' . $data->pedimentopdf . '" target=”_blank” rel=”nofollow”> <font color="green">Ya tienes un archivo cargado</font></a><br>
                           <br><input  id="archivo"  class="form-control" type="file"  name="pedimentopdf">
                           </td>
                        </tr>';
                            }
                            ?>
                            
                            
                            
                              
                             <?php
                            if (($data->honorarios_importacion == null)) {
                                echo '    <tr>
                            <td><b>Honorarios <i style="font-size:18px;color:red" class="fa fa-file-pdf-o"></i></b></td>
                            <td><font color="red">No tienes ningún archivo cargado</font>
                            <input  id="archivo"  class="form-control" type="file"  name="honorarios_importacion"></td>
                        </tr>';
                            } else if (($data->honorarios_importacion != null)) {
                                echo '
                            <tr>
                            <td ><b>Honorarios <i style="font-size:18px;color:red" class="fa fa-file-pdf-o"></i></b></td>
                            <td>
                           <a  title="Da clic para visualizar el archivo" href="' . base_url() . 'assets/fucompras/' . $data->honorarios_importacion . '" target=”_blank” rel=”nofollow”> <font color="green">Ya tienes un archivo cargado</font></a><br>
                           <br><input  id="archivo"  class="form-control" type="file"  name="honorarios_importacion">
                           </td>
                        </tr>';
                            }
                            ?>
                            

                            
                            
                            
                            

                            
                            <!--<input type="file" class="form-control input-sm" name="facturapdf"><br>-->
                            
                            
                            
                            
                            
                              
                   
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                                <td colspan="2">    <center> <input  class="btn btn-success" title="Da clic para guardar los datos" type="submit" value="Guardar" >
                            <a title="Da clic para regresar al menú" href="../../Fucompras" class="btn btn-warning">Cancelar</a></center>
                        </td>
                        </tr>



  <!--<tr>
      <td colspan="2">
          <input class="form-control btn btn-success"  type="submit" value="Guardar" >
      </td>
  </tr>-->
                        </tbody>


                    </table>
                </div>

                <!-- file lama -->
                <input type="hidden" name="id" value="<?= $data->id_fucompras ?>">
                <!-- ID -->
                <input type="hidden" name="id" value="<?= $data->id_fucompras ?>">

                   <!-- <input type="submit" name="submit" value="Enviar" class="btn btn-default">-->



            </form>

        </div>
    </div>
    <!-- END KONTEN UTAMA -->

  <!--  <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>-->
</body>
