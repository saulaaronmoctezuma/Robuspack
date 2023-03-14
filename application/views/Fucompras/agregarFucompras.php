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


        <!-- Para traerse el rol que esta registrado-->
        <?php
        //check user level
        $dataLevel = $this->userlevel->checkLevel($role);


        //check user level
        ?>


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


    </head>
    <body>
    </head>




    <div id="maquinaria"> <BR>
        <div class="container" >      
            <div class="alert alert-info alert-dismissable">

                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Agregar</strong> Ingresa los datos según corresponda
            </div>
            <!--<h1>Agregar Datos</h1>-->
            <MARQUEE SCROLLDELAY =200></MARQUEE>
            <form name="formulario" id="formal" role="form"  action="<?= base_url() ?>Fucompras/insertdata" method="post" enctype="multipart/form-data">


                <div class="form-group">
                    <input type="hidden" class="form-control" id="id_compras"  name="id_compras">
                </div>
                <div class="jumbotron">
                    <div class="row">



                        <div class="row">
                            <div class="form-group col-xs-4">
                                <label>Ref</label><br>
                                <input class="form-control input-sm"  type="text" name="ref"><br>
                            </div>

                            <div class="form-group col-xs-4">
                                <label>Estatus</label><br>
                               <!-- <input type="text" class="form-control input-sm"   name="estatus">-->
                                <select name="estatus"  class="form-control input-sm" require>
                                                                   <option  value="" >Selecciona una opción</option>
                                                                   <OPTION VALUE="ENVIADO" >ENVIADO</OPTION>
                                                                   <OPTION VALUE="LIBRE">LIBRE</OPTION>
                                                                    <OPTION VALUE="PENDIENTE">PENDIENTE</OPTION>
                                                                   <OPTION VALUE="RECIBIDO">RECIBIDO</OPTION>
                                                                    <OPTION VALUE="SE ENVIO DIRECTAMENTE AL CLIENTE">SE ENVIO DIRECTAMENTE AL CLIENTE</OPTION>
                                                                   
                                                               </select>
                            </div>

                            <!-- <div class="form-group col-xs-3">
                  <label for="nombre">Cliente</label>
                  <select required id="cliente" class="form-control input-sm"  name="planta" <?php echo form_dropdown('clienteCombo', $clienteCombo, '#', 'id="clienteCombo"'); ?> </select>
              </div>-->


                            <div class="form-group col-xs-4">
                                <label>Compañía Importadora</label><br>

                                <!--<input type="text" class="form-control input-sm" name="compania_importadora"><br>-->
                                <select name="compania_importadora"  class="form-control input-sm" require>
                                                                   <option  value="" >Selecciona una opción</option>
                                                                   <OPTION VALUE="ROBUSPACK">ROBUSPACK</OPTION>
                                                                   <OPTION VALUE="MAKBOK">MAKBOK</OPTION>
                                                               </select>
                            </div>
                        </div>

                        <div class="row">

                            <div class="form-group col-xs-4">
                                <label>Cliente Proveedor</label><br>
                                <input type="text" class="form-control input-sm" name="cliente_proveedor"><br>
                            </div>


                            <div class="form-group col-xs-4">
                                <label>Awb</label><br>
                                <input type="text" class="form-control input-sm" name="awb"> 
                                <!-- 
                                                               <select name="tipo_de_prod"  class="form-control input-sm" require>
                                                                   <option  value="" >Selecciona una opción</option>
                                                                   <OPTION VALUE="REFACCION">REFACCION</OPTION>
                                                                   <OPTION VALUE="CUBIERTA">CUBIERTA</OPTION>
                                                               </select>-->
                            </div> 



                            <div class="form-group col-xs-4">
                                <label>Courier</label><br>
                                <input type="text" class="form-control input-sm" name="courier">
                            </div> 

                        </div>







                        <div class="row">

                            <div class="form-group col-xs-4">
                                <label>Clave</label><br>
                                <input type="text" class="form-control input-sm" name="clave">
                            </div>

                            <!--<div class="form-group col-xs-4">
                                 <label for="nombre">Factura <i style="font-size:18px;color:red" class="fa fa-file-pdf-o"></i></label>
 
                                 <input id="a4" type="file" name="facturapdf" class="form-control">
                             </div>-->

                            <div class="form-group col-xs-4">
                                <label>Tipo de prod</label><br>
                                <input type="text" class="form-control input-sm" name="tipo_de_prod">
                            </div> 



                            <div class="form-group col-xs-4">
                                <label>Descripción</label><br>
                                <input type="text" class="form-control input-sm" name="descripcion">
                            </div> 

                        </div>



                        <br>    
                        <div class="row">



                            <div class="form-group col-xs-4">
                                <label>Factura</label><br>
                                <input type="text" class="form-control input-sm" name="factura">
                            </div>


                            <div class="form-group col-xs-4">
                                <label>IMN</label><br>
                                <!--<input id="cantidad" onkeyup="calcularSubtotal();
                                            calcularIva();
                                            calcularTotal();" min="0" type="number" class="form-control input-sm" name="cantidad">
                                -->
                                <input type="text" class="form-control input-sm" name="imn">

                            </div> 
                            <div class="form-group col-xs-4">
                                <label>OC</label><br>
                                <input type="text" class="form-control input-sm" name="ocv">

       <!--<input id="pu_usd" onkeyup="calcularSubtotal();
                   calcularIva();
                   calcularTotal();" min="0" type="number" class="form-control input-sm" name="pu_usd">
                                -->
                            </div> 



                        </div><br>



                        <div class="row">




                            <div class="form-group col-xs-4">
                                <label>Qty</label><br>
                                <input id="qty"  type="number" min="0" onchange="calcularTotalUSD();calcularImpx_unidad();calcularCosto_unitario_compra_usd_lab_qro();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" onkeyup="calcularTotalUSD();calcularImpx_unidad();calcularCosto_unitario_compra_usd_lab_qro();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" class="form-control input-sm" name="qty">
                            </div>


                            <div class="form-group col-xs-4">
                                <label>Pu usd</label><br>
                                <input id="pu_usd" type="text" min="0" onchange="calcularTotalUSD();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();calcularCm_c()"  onkeyup="calcularTotalUSD();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" class="form-control input-sm" name="pu_usd">
                            </div> 


                            <div class="form-group col-xs-4">
                                <label>Total usd</label><br>
                                <input readonly="readonly" min="0" title="Pu USD * Qty" style="background-color:#03E7F7;" id="total_usd" type="text" onkeyup="calcularCosto_total_compra_usd_lab_qro();" class="form-control input-sm" name="total_usd">
                            </div> 


                        </div><br> 




                        <div class="row">


                            <div class="form-group col-xs-4">
                                <label>Tipo de embarque</label><br>
                                <input id="tipo_de_embarque" 
                                       type="text" data-date=""  class="form-control input-sm" name="tipo_de_embarque">
                                <!-- cambiar -->
                            </div>


                            <div class="form-group col-xs-4">
                                <label>Tc pedimento</label><br>
                                <input id="tc_pedimento" type="text" min="0" onchange="calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCostoFlete();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();calcularImportacionPartidaPzMxn();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();" onkeyup="calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCostoFlete();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();calcularImportacionPartidaPzMxn();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();" class="form-control input-sm" name="tc_pedimento">
                            </div> 


                            <div class="form-group col-xs-4">
                                <label>Importación por partida pz mxn</label><br>
                                <input type="text" min="0" title="Arancel + Dta + Costo del Flete Mx + Honorarios Courier" id="importacion_por_partida_pz_mxn" readonly="readonly" style="background-color:#03E7F7;" onchange="calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" onkeyup="calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" class="form-control input-sm"  name="importacion_por_partida_pz_mxn">
                            </div> 




                        </div><br> 





                        <div class="row">


                            <div class="form-group col-xs-4">
                                <label>Importación por partida pz usd</label><br>
                                <input readonly="readonly" min="0" title="Importación por partida pz mx / Tc Pedimento"  style="background-color:#03E7F7;" type="text" id="importacion_por_partida_pz_usd" onkeyup="calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();" class="form-control input-sm" name="importacion_por_partida_pz_usd">
                            </div> 


                            <div class="form-group col-xs-4">
                                <label>Impx unidad</label><br>
                                <input id="impx_unidad" title="Importación Por Partida Pz USD / Qty" style="background-color:#03E7F7;" readonly="readonly" type="text" class="form-control input-sm" name="impx_unidad">
                            </div> 

                            <div class="form-group col-xs-4">
                                <label>Costo total compra usd lab Qro</label><br>
                                <input readonly="readonly" min="0" title="Importación Por Partida Pz Usd + Total USD" style="background-color:#03E7F7;" id="costo_total_compra_usd_lab_qro" onkeyup="calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();" type="text" class="form-control input-sm" name="costo_total_compra_usd_lab_qro">
                            </div> 



                        </div><br> 


                        <div class="row">


                            <div class="form-group col-xs-4">
                                <label>Costo unitario compra usd lab qro</label><br>
                                <input id="costo_unitario_compra_usd_lab_qro" title="Costo Total Compra Usd Lab Qro / Qty" style="background-color:#03E7F7;" readonly="readonly" type="text" class="form-control input-sm" name="costo_unitario_compra_usd_lab_qro">
                            </div> 
                            <!--<div class="form-group col-xs-4">
                                <label>Status de Pago</label><br>
                                <input type="text" class="form-control input-sm" name="status_de_pago">
                            </div>-->


                            <div class="form-group col-xs-4">


                                <!--<select name="status_de_pago"  class="form-control input-sm" require>
                                    <option  value="" >Selecciona una opción</option>
                                    <OPTION VALUE="Pagado">Pagado</OPTION>
                                    <OPTION VALUE="Vencido">Vencido</OPTION>
                                </select>-->
                                <label>Com</label><br>
                                <input id="com" type="text" min="0" onkeyup="calcularCm();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" onchange="calcularCm();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" class="form-control input-sm" name="com">
                            </div> 


                            <div class="form-group col-xs-4">
                                <label>Cm</label><br>
                                <input title="Pv extra bajo ref x pz + Com" readonly="readonly" min="0" style="background-color:#03E7F7;" id="cm" type="text" onkeyup="calcularCm_c();" class="form-control input-sm" name="cm">
                            </div> 




                        </div>
                        <br> 


                        <div class="row">



                            <div class="form-group col-xs-4">
                                <label>Cm c</label><br>
                                <input readonly="readonly" min="0" title="Costo Unitario Compra Usd Lab Qro + Cm" style="background-color:#03E7F7;"  id="cm_c" type="text" class="form-control input-sm" name="cm_c">
                            </div> 

                            <div class="form-group col-xs-4">
                                <label>Ent</label><br>
                                <input type="text" class="form-control input-sm" name="ent">
                            </div>


                            <div class="form-group col-xs-4">
                                <label>Pedimento</label><br>

                                <input type="text" class="form-control input-sm" name="pedimento">
                                 <!-- <select name="vendedor"  class="form-control input-sm" require>
                                    <option  value="" >Selecciona una opción</option>
                                    <OPTION VALUE="Aldo Guillén">Aldo Guillén</OPTION>
                                    <OPTION VALUE="Casa Robuspack">Casa Robuspack</OPTION>
                                    <OPTION VALUE="Cesar Cantú">Cesar Cantú</OPTION>
                                    <OPTION VALUE="Gerardo Lopéz">Gerardo Lopéz</OPTION>
                                    <OPTION VALUE="Martín Sena">Martín Sena</OPTION>
                                    <OPTION VALUE="Sergio Peñafiel Soto">Sergio Peñafiel Soto</OPTION>-->


                                </select>
                            </div> 




                        </div><br>


                        <div class="row">


                            <div class="form-group col-xs-4">
                                <label>Fecha pedimento</label><br>
                                <input type="text"   min="2000-01-01" max="2030-12-31" class="form-control input-sm" name="fecha_pedimento">
                            </div> 


                            <div class="form-group col-xs-4">
                                <label>Valor aduana</label><br>
                                <input id="valor_aduana" onchange="calcularArancel();calcularDta();calcularIvaPedimento();calcularImportacionPartidaPzMxn();calcularImportacionPorPartidaUSD();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" onkeyup="calcularArancel();calcularDta();calcularIvaPedimento();calcularImportacionPartidaPzMxn();calcularImportacionPorPartidaUSD();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" type="text" min="0" class="form-control input-sm" name="valor_aduana">
                            </div> 


                            <div class="form-group col-xs-4">
                                <label>Arancel igi</label><br>
                                <input id="arancel_igi" onkeyup="calcularArancel();calcularIvaPedimento();calcularImportacionPartidaPzMxn();calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" onchange="calcularArancel();calcularIvaPedimento();calcularImportacionPartidaPzMxn();calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" min="0"  type="text" class="form-control input-sm" name="arancel_igi">
                            </div> 
                        </div>

                        <br>

                        <div class="row">


                            <div class="form-group col-xs-4">
                                <label>Arancel</label><br>
                                <input title="Arancel Igi * Valor Aduana" readonly="readonly" min="0" style="background-color:#03E7F7;" id="arancel" type="text" onchange="calcularIvaPedimento();" onkeyup="calcularIvaPedimento();" class="form-control input-sm" name="arancel">
                            </div> 


                            <div class="form-group col-xs-4">
                                <label>Dta</label><br>
                                <input readonly="readonly" title="Valor Aduana * 0.008 " min="0" style="background-color:#03E7F7;" id="dta" type="text" onchange="calcularIvaPedimento();;" onkeyup="calcularIvaPedimento();" class="form-control input-sm" name="dta">

                            </div>

                            <div class="form-group col-xs-4">
                                <label>Iva del pedimento </label><br>
                                <input readonly="readonly" title="((Valor Aduana + Arancel + Dta) * (0.008) )" min="0" style="background-color:#03E7F7;" id="iva_del_pedimento" type="text" class="form-control input-sm" name="iva_del_pedimento">
                            </div> 


                        </div>



                        <br>

                        <div class="row">


                            <div class="form-group col-xs-4">
                                <label>Costo del flete mxn</label><br>
                                <input id="costo_del_flete_mxn" readonly="readonly" title="Costo del Flete Usd * Tc Pedimento" min="0" style="background-color:#03E7F7;" type="text" class="form-control input-sm" name="costo_del_flete_mxn">
                            </div> 
                            <div class="form-group col-xs-4">
                                <label>Honorarios courier</label><br>
                                <input id="honorarios_courier"  type="text" onkeyup="calcularImportacionPartidaPzMxn();calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" onchange="calcularImportacionPartidaPzMxn();calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" class="form-control input-sm" name="honorarios_courier">
                            </div> 


                            <div class="form-group col-xs-4">
                                <label>Costo del flete usd </label><br>
                                <input type="text" min="0" id="costo_del_flete_usd" onkeyup="calcularCostoFlete();calcularImportacionPartidaPzMxn();calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" onchange="calcularCostoFlete();calcularImportacionPartidaPzMxn();calcularImportacionPorPartidaUSD();calcularImpx_unidad();calcularCosto_total_compra_usd_lab_qro();calcularCosto_unitario_compra_usd_lab_qro();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" class="form-control input-sm" name="costo_del_flete_usd">
                            </div> 



                        </div>









                        <br>

                        <div class="row">
                          

                            <div class="form-group col-xs-4">
                                <label>Pv extra bajo ref x pz</label><br>
                                <input type="text" min="0" id="pv_extra_bajo_ref_x_pz" onchange="calcularCm();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" onkeyup="calcularCm();calcularCm_c();calcularUtilidadRefxPz();calcularUtilidad();" class="form-control input-sm" name="pv_extra_bajo_ref_x_pz">
                            </div> 


                            <div class="form-group col-xs-4">
                                <label>Utilidad refx pz</label><br>
                                <input readonly="readonly" title="Pv Extra Bajo Ref x Pz  - Cm c" id="utilidad_refx_pz" min="0" style="background-color:#03E7F7;" type="text" class="form-control input-sm" name="utilidad_refx_pz">
                            </div> 

                            <div class="form-group col-xs-4">
                                <label>Utilidad</label><br>
                                <input readonly="readonly" id="utilidad" title="1 - (Cm c {-/ Pv Extra Bajo Ref X Pz)" min="0" style="background-color:#03E7F7;" type="text" class="form-control input-sm" name="utilidad">
                            </div> 

                        </div>








                        <br>

                        <div class="row">

                          
                            <div class="form-group col-xs-4">
                                <label>Observaciones</label><br>
                                <input type="text" class="form-control input-sm" name="observaciones">
                            </div> 


                            <div class="form-group col-xs-4">
                                <label>Fecha_pi </label><br>
                                <input type="date" class="form-control input-sm" name="fecha_pi">
                            </div> 
                            
                            <div class="form-group col-xs-4">
                                <label>Código arancelario</label><br>
                                <input type="text" class="form-control input-sm" name="codigo_arancelario">
                            </div> 

                            
                        </div>
                        <br>
                        <div class="row">
                           <div class="form-group col-xs-4">
                                <label for="nombre">Factura Proveedor<!--<i style="font-size:18px;color:red" class="fa fa-file-pdf-o"></i>--></label>

                                <input id="a4" type="file" name="factura_proveedor" class="form-control">
                            </div>
                            
                            <div class="form-group col-xs-4">
                                <label for="nombre">Pedimento PDF<!--<i style="font-size:18px;color:red" class="fa fa-file-pdf-o"></i>--></label>

                                <input id="a4" type="file" name="pedimentopdf" class="form-control">
                            </div>
                            
                            <div class="form-group col-xs-4">
                                <label for="nombre">Honorarios impotación<!--<i style="font-size:18px;color:red" class="fa fa-file-pdf-o"></i>--></label>

                                <input id="a4" type="file" name="honorarios_importacion" class="form-control">
                            </div>

                        </div>
                        <center><input class="btn btn-success" id="botonOrden" type="submit" value="Agregar" data-toggle="tooltip" data-placement="right" title="Da clic para guardar los datos">

                            <a title="Da clic para regresar al menú" href="javascript:window.history.go(-1);"class="btn btn-danger">Cancelar</a>
                        </center>
                        </form>

                    </div>
                </div>
                <!-- END KONTEN UTAMA -->

                <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>

                </body>
                </html>
