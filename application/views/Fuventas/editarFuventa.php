<!--
/**

 * class @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 02/09/2019 Hora 11:14 am
 *  Fecha : Ultimo Cambio 12/09/2019 Hora 9:00 am
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
                if ((evt.keyCode == 13) && (node.type == "text")) {
                    return false;
                }
            }
            document.onkeypress = stopRKey;
       
            function calcularSubtotal() {
                m1 = document.getElementById("cantidad").value;
                m2 = document.getElementById("pu_usd").value;
                m3 = document.getElementById("descuento").value;
                sub = (m1 * m2) ;
                des = ((m3*sub)/(100));
                r = (sub - des).toFixed(2) ;
                document.getElementById("subtotal").value = r;



                if (document.getElementById("subtotal").value === "Infinity") {
                    document.getElementById("subtotal").value = " ";
                }
                if (document.getElementById("subtotal").value === "NaN") {
                    document.getElementById("subtotal").value = " ";
                }
            }
            
             function descuento() {
                m1 = document.getElementById("cantidad").value;
                m2 = document.getElementById("pu_usd").value;
                m3 = document.getElementById("descuento").value;
                sub = (m1 * m2) ;
                r = ((m3*sub)/(100));
               
                document.getElementById("descuento_cantidad").value = r;



                if (document.getElementById("descuento_cantidad").value === "Infinity") {
                    document.getElementById("descuento_cantidad").value = " ";
                }
                if (document.getElementById("descuento_cantidad").value === "NaN") {
                    document.getElementById("descuento_cantidad").value = " ";
                }
            }
           

            function calcularIva() {
                 m1 = document.getElementById("cantidad").value;
                m2 = document.getElementById("pu_usd").value;
                m3 = document.getElementById("descuento").value;
                sub = (m1 * m2) ;
                des = ((m3*sub)/(100));
                subtotal = sub - des ;
                iva = 0.16;
                r = (subtotal * iva).toFixed(2);



                document.getElementById("iva").value = r;



                if (document.getElementById("iva").value === "Infinity") {
                    document.getElementById("iva").value = " ";
                }
                if (document.getElementById("iva").value === "NaN") {
                    document.getElementById("iva").value = " ";
                }
            }



            function calcularTotal() {
                m1 = document.getElementById("cantidad").value;
                m2 = document.getElementById("pu_usd").value;
                m3 = document.getElementById("descuento").value;
                sub = (m1 * m2) ;
                des = ((m3*sub)/(100));
                
                
                
                
                subtotal = sub - des ;
                iva = 0.16;
                r2 = ((subtotal )+(subtotal * iva)).toFixed(2);

                document.getElementById("total").value = r2;




                if (document.getElementById("total").value === "Infinity") {
                    document.getElementById("total").value = " ";
                }
                if (document.getElementById("total").value === "NaN") {
                    document.getElementById("total").value = " ";
                }
            }





     
            function calcularFechaVencimiento() {
                num = document.getElementById("dias_de_credito").value;
                f = document.getElementById("fecha").value;
                

                // pasaremos la fecha a formato mm/dd/yyyy 
               f = f.split('/');
                f = f[1] + '/' + f[0] + '/' + f[2];
                // 
                hoy = new Date(f);
                hoy.setTime(hoy.getTime() + num * 24 * 60 * 60 * 1000);
                mes = hoy.getMonth() + 1;
                if (mes < 9)
                    mes = '0' + mes;
                fecha = hoy.getDate() + '/' + mes + '/' + hoy.getFullYear();
                //frm.total.value=fecha; 
                document.getElementById("fecha_vencimiento").value = fecha;



                if (document.getElementById("fecha_vencimiento").value === "NaN/NaN/NaN") {
                    document.getElementById("fecha_vencimiento").value = "El formato de la fecha es incorrecto";
                    document.getElementById("fecha_vencimiento").style.backgroundColor = "red";
                    document.getElementById("fecha_vencimiento").style.color = "white";

                }
                else
                {
                    document.getElementById("fecha_vencimiento").style.backgroundColor = "#03E7F7";
                    document.getElementById("fecha_vencimiento").style.color = "black";
                }


            }
        </script> 

    <body>
        <div id="maquinaria">
            <form action="<?= base_url() ?>Fuventas/updatedata" method="post" enctype="multipart/form-data">

                <MARQUEE SCROLLDELAY =200></MARQUEE>
                <div class="container" ><h1>Actualizar datos</h1>
                    <table class="table table-bordered table-striped">
                        <tbody>



<!-- <tr>

    <td><b>Cliente</b></td>
   <td colspan="3">  <select id="a3" class="form-control" name="cliente"   <?php echo form_dropdown('clienteCombo', $clienteCombo, $data->cliente, '#', 'id="clienteCombo"'); ?> </select></td>


</tr> -->
<input id="cantidad_registros" class="form-control" type="hidden" name="cantidad_registros" value="<?= $data->cantidad_registros ?>">


                            <tr>
                                <td><b>Ref</b></td>
                                <td>
                                    <input id="ref" class="form-control" type="text" name="ref" value="<?= $data->ref ?>">
                               </td>
                            </tr>


                            <tr>
                                <td><b>Cliente</b></td>
                                <td >
                                    <input id="cliente" class="form-control" type="text" name="cliente" value="<?= $data->cliente ?>">
                              </td>
                            </tr>


                            <tr>
                                <td><b>Dirección</b></td>
                                <td >
                                   <input id="direccion" class="form-control" type="text" name="direccion" value="<?= $data->direccion ?>">
                                  
                                </td>
                            </tr>

                            
                            <tr>
                                <td><b>Código</b></td>
                                <td >
                                   <input id="codigo" class="form-control" type="text" name="codigo" value="<?= $data->codigo ?>">
                                  
                                </td>
                            </tr>

                           <!--  <tr>
                                <td><b>Tipo de produccion</b></td>
                                <td >
                                   <input id="tipo_de_prod" class="form-control" type="text" name="tipo_de_prod" value="<?= $data->tipo_de_prod ?>">
                                  
                                </td>
                            </tr>-->
                            
                            
                            
                              <tr>
                         <td><b>Tipo de Producto</b></td>
                        <td> <SELECT name="tipo_de_prod" class="form-control " > 
                            
                                 <option value="" <?php if ($data->tipo_de_prod == "") {echo "Selected"; } ?>>Selecciona una opción</option>
                                
                                <option value="REFACCION" <?php if ($data->tipo_de_prod == "REFACCION") {echo "Selected"; } ?>>REFACCION</option>
                                <option value="CUBIERTA" <?php if ($data->tipo_de_prod == "CUBIERTA") {  echo "Selected";} ?>>CUBIERTA</option>
                               
                          
                           </SELECT></td>
                    </tr>
                            
                              <tr>
                                <td><b>Descripción del Producto</b></td>
                                <td >
                                   <input id="rfc" class="form-control" type="text" name="rfc" value="<?= $data->rfc ?>">
                                  
                                </td>
                            </tr>
                            
                            <tr>
                                <td><b>Factura</b></td>
                                <td >
                                   <input id="factura" class="form-control" type="text" name="factura" value="<?= $data->factura ?>">
                                  
                                </td>
                            </tr>
                            
                                  <?php
                    if (($data->facturapdf == null)) {
                        echo '    <tr>
                            <td><b>Factura <i style="font-size:18px;color:red" class="fa fa-file-pdf-o"></i></b></td>
                            <td><font color="red">No tienes ningún archivo cargado</font>
                            <input  id="archivo"  class="form-control" type="file"  name="facturapdf"></td>
                        </tr>';
                    } else if (($data->facturapdf != null)) {
                        echo '
                            <tr>
                            <td ><b>Factura <i style="font-size:18px;color:red" class="fa fa-file-pdf-o"></i></b></td>
                            <td>
                           <a  title="Da clic para visualizar el archivo" href="' . base_url() . 'assets/fuventas/' . $data->facturapdf . '" target=”_blank” rel=”nofollow”> <font color="green">Ya tienes un archivo cargado</font></a><br>
                           <br><input  id="archivo"  class="form-control" type="file"  name="facturapdf">
                           </td>
                        </tr>';
                    }
                    ?>
                            
                            
                            
                            
                             <tr>
                                <td><b>Remisión</b></td>
                                <td >
                                   <input id="remision" class="form-control" type="text" name="remision" value="<?= $data->remision ?>">
                                  
                                </td>
                            </tr>
                            
                            
                             <tr>
                                <td><b>Fecha de remisión</b></td>
                                <td >
                                   <input id="fecha_de_remision" class="form-control" type="date" name="fecha_de_remision" value="<?= $data->fecha_de_remision ?>">
                                  
                                </td>
                            </tr>
                            
                            
                             <tr>
                                <td><b>Orden de Compra</b></td>
                                <td >
                                   <input id="orden_de_compra" class="form-control" type="text" name="orden_compra" value="<?= $data->orden_compra ?>">
                                  
                                </td>
                            </tr>
                            
                            
                            
                             <tr>
                                <td><b>Cantidad</b></td>
                                <td>
                                    <input id="cantidad" onkeyup="calcularSubtotal();calcularIva();calcularTotal();"
                                    onchange="calcularSubtotal();calcularIva();calcularTotal();descuento();" min="0" class="form-control" type="number" name="cantidad" value="<?= $data->cantidad ?>">
                                  
                                </td>
                            </tr>
                            
                                  <tr>
                                <td><b>Pu USD</b></td>
                                <td >
                                   <input id="pu_usd" onkeyup="calcularSubtotal();calcularIva();calcularTotal();" onchange="calcularSubtotal();calcularIva();calcularTotal();descuento();" class="form-control" min="0"  type="text" name="pu_usd" value="<?= $data->pu_usd ?>">
                                  
                                </td>
                            </tr>
                            
                            
                            
                              <tr>
                         <td><b>Tipo de precio</b></td>
                        <td> <SELECT name="tipo_de_precio" class="form-control " > 
                            
                                 <option value="" <?php if ($data->tipo_de_precio == "") {echo "Selected"; } ?>>Selecciona una opción</option>
                                
                                <option value="Lista de precios" <?php if ($data->tipo_de_precio == "Lista de precios") {echo "Selected"; } ?>>Lista de precios</option>
                                <option value="Precio por promoción" <?php if ($data->tipo_de_precio == "Precio por promoción") {  echo "Selected";} ?>>Precio por promoción</option>
                               
                          
                           </SELECT></td>
                    </tr>
                            
                            <tr>
                                <td><b>Descuento</b></td>
                                <td >
                                   <input id="descuento" onkeyup="calcularSubtotal();calcularIva();calcularTotal();;if(parseInt(this.value)>100){ this.value =100; return false; }"
                                    onchange="calcularSubtotal();calcularIva();calcularTotal();descuento();" class="form-control" max="100"  oninput="if(parseInt(this.value)>100){ this.value =100; return false; }"  min="0" type="text" name="descuento" value="<?= $data->descuento ?>">
                                  
                                </td>
                            </tr>
                            
                            
                             <tr>
                                <td><b>Subtotal</b></td>
                                <td >
                                   <input id="subtotal" title="Cantidad * PU USD" style="background-color:#03E7F7;" class="form-control" type="text" name="subtotal" value="<?= $data->subtotal ?>">
                                  
                                </td>
                            </tr>
                            
                            
                            
                             <tr>
                                <td><b>IVA</b></td>
                                <td >
                                   <input title="PU USD * 16%"  readonly style="background-color:#03E7F7;"  id="iva" class="form-control" type="text" name="iva" value="<?= $data->iva ?>">
                                  
                                </td>
                            </tr>
                            
                            
                            
                             <tr>
                                <td><b>Total USD</b></td>
                                <td >
                                   <input title="Subtotal  + IVA" readonly style="background-color:#03E7F7;" id="total" class="form-control" type="text" name="total_usd" value="<?= $data->total_usd ?>">
                                  
                                </td>
                            </tr>
                            
                            
                             <tr>
                                <td><b>Fecha Elaboración Factura(dd/mm/aaaa):</b></td>
                                <td >
                                    <input id="fecha" title="Ingresa la fecha en el formato indicado"  min="00/00/0000" placeholder="dd/mm/aaaa" onkeyup="calcularFechaVencimiento();"  class="form-control" type="text" name="fecha" value="<?= $data->fecha ?>">
                                  
                                </td>
                            </tr>
                            
                            
                            
                             <tr>
                                <td><b>Pedimento</b></td>
                                <td >
                                   <input id="pedimento" class="form-control" type="text" name="pedimento" value="<?= $data->pedimento	 ?>">
                                  
                                </td>
                            </tr>
                            
                            
                            
                             <tr>
                                <td><b>Fecha Pedimento</b></td>
                                <td >
                                   <input id="fecha_pedimento" class="form-control" type="date" name="fecha_pedimento" value="<?= $data->fecha_pedimento ?>">
                                  
                                </td>
                            </tr>
                            
                            
                            
                             <tr>
                                <td><b>Días de crédito</b></td>
                                <td >
                                   <input id="dias_de_credito" class="form-control" onkeyup="calcularFechaVencimiento();" min="0"  type="number"  name="dias_de_credito" value="<?= $data->dias_de_credito ?>">
                                  
                                </td>
                            </tr>
                            
                            
                            
                             <tr>
                                <td><b>Fecha de Vencimiento</b></td>
                                <td>
                                   <input id="fecha_vencimiento" title="Fecha de Elaboración de factura + Días de crédito" readonly style="background-color:#03E7F7;" class="form-control" type="text" name="fecha_vencimiento" value="<?= $data->fecha_vencimiento ?>">
                                  
                                </td>
                            </tr>
                            
                            
                            
                             <tr>
                                <td><b>Fecha de pago</b></td>
                                <td >
                                   <input id="fecha_de_pago" class="form-control" type="date" name="fecha_de_pago" value="<?= $data->fecha_de_pago ?>">
                                  
                                </td>
                            </tr>
                            
                            
                             <tr>
                                <td><b>Status de pago</b></td>
                                <td >
                                   <input id="status_de_pago" class="form-control" type="text" name="status_de_pago" value="<?= $data->status_de_pago ?>">
                                  
                                </td>
                            </tr>
                            
                            
                              <tr>
                                <td><b>Refacturación</b></td>
                                <td >
                                   <input id="refacturaccion" class="form-control" type="text" name="refacturacion" value="<?= $data->refacturacion ?>">
                                  
                                </td>
                            </tr>
                            
                            
                              <tr>
                                <td><b>Nueva</b></td>
                                <td >
                                   <input id="nueva" class="form-control" type="text" name="nueva" value="<?= $data->nueva ?>">
                                  
                                </td>
                            </tr>
                            
                            
                               <tr>
                                <td><b>Observaciones</b></td>
                                <td >
                                  <input id="observaciones" class="form-control" type="text" name="observaciones" value="<?= $data->observaciones ?>">
                                  
                                </td>
                            </tr>
                            
                            
                              <tr>
                                <td><b>Vendedor</b></td>
                                <td >
                                   <input id="vendedor" class="form-control" type="text" name="vendedor" value="<?= $data->vendedor ?>">
                                  
                                </td>
                            </tr>
                            
                            
                              <tr>
                                <td><b>Fecha de cobro de comisiones</b></td>
                                <td >
                                   <input id="fecha_de_cobro_de_comisiones" class="form-control" type="date" name="fecha_de_cobro_de_comisiones" value="<?= $data->fecha_de_cobro_de_comisiones ?>">
                                  
                                </td>
                            </tr>

                            
                            <!--<input type="file" class="form-control input-sm" name="facturapdf"><br>-->
                            
                            
                            
                            
                            
                              
                   
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                                <td colspan="2">    <center> <input  class="btn btn-success" title="Da clic para guardar los datos" type="submit" value="Guardar" >
                            <a title="Da clic para regresar al menú" href="../../Fuventas" class="btn btn-warning">Cancelar</a></center>
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
                <input type="hidden" name="id" value="<?= $data->id_fuventas ?>">
                <!-- ID -->
                <input type="hidden" name="id" value="<?= $data->id_fuventas ?>">

                   <!-- <input type="submit" name="submit" value="Enviar" class="btn btn-default">-->



            </form>

        </div>
    </div>
    <!-- END KONTEN UTAMA -->

  <!--  <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>-->
</body>
