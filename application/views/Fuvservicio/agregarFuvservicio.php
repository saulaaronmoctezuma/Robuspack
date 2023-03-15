<!--


 * class @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 00/00/0000 Hora 00:00 am/pm
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

            function calcularSubtotal() {
                m1 = document.getElementById("cantidad").value;
                m2 = document.getElementById("pu_usd").value;
                r = m1 * m2;
                document.getElementById("subtotal").value = r;



                if (document.getElementById("subtotal").value === "Infinity") {
                    document.getElementById("subtotal").value = " ";
                }
                if (document.getElementById("subtotal").value === "NaN") {
                    document.getElementById("subtotal").value = " ";
                }
            }

            function calcularIva() {
                m1 = document.getElementById("cantidad").value;
                m2 = document.getElementById("pu_usd").value;
                iva = 0.16;
                r = m1 * m2 * iva;



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
                iva = 0.16;
                r = m1 * m2;
                r1 = m1 * m2 * iva;
                r2 = r + r1;

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
                    document.getElementById("fecha_vencimiento").value = "";
                    document.getElementById("fecha_vencimiento").placeholder = "El formato de la fecha es incorrecto";
                    document.getElementById("fecha_vencimiento").style.backgroundColor = "red";
                    document.getElementById("fecha_vencimiento").style.color = "white";

                }
                else
                {
                    document.getElementById("fecha_vencimiento").style.backgroundColor = "#03E7F7";
                    document.getElementById("fecha_vencimiento").style.color = "black";
                }


            }

            function esfechavalida() {
                var fecha = document.getElementById("fecha").value;

                // La longitud de la fecha debe tener exactamente 10 caracteres
                if (fecha.length !== 10)
                    error = true;

                // Primero verifica el patron
                if (!/^\d{1,2}\/\d{1,2}\/\d{4}$/.test(fecha))
                    error = true;

                // Mediante el delimitador "/" separa dia, mes y año
                var fecha = fecha.split("/");
                var day = parseInt(fecha[0]);
                var month = parseInt(fecha[1]);
                var year = parseInt(fecha[2]);

                // Verifica que dia, mes, año, solo sean numeros
                error = (isNaN(day) || isNaN(month) || isNaN(year));

                // Lista de dias en los meses, por defecto no es año bisiesto
                var ListofDays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
                if (month === 1 || month > 2)
                    if (day > ListofDays[month - 1] || day < 0 || ListofDays[month - 1] === undefined)
                        error = true;

                // Detecta si es año bisiesto y asigna a febrero 29 dias
                if (month === 2) {
                    var lyear = ((!(year % 4) && year % 100) || !(year % 400));
                    if (lyear === false && day >= 29)
                        error = true;
                    if (lyear === true && day > 29)
                        error = true;
                }

                if (error === true) {
                    alert("Fecha Inválida: * La Fecha debe tener el formato: dd/mm/aaaa.\n");
                    return false;
                }
                else
                    return true;
            }


            //--></script>


    </head>
    <body>
    </head>




    <div id="maquinaria"> <BR>
        <div class="container" >      
            <div class="alert alert-info alert-dismissable">

                <button type="button" class="close" data-dismiss="alert">&times;</button>
<<<<<<< HEAD
                <strong>Agregar</strong> Ingresa los datos según corresponda
=======
                <center>    <strong>Fu V Servicio</strong></center>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            </div>
            <!--<h1>Agregar Datos</h1>-->
            <MARQUEE SCROLLDELAY =200></MARQUEE>
            <form name="formulario" id="formal" role="form"  action="<?= base_url() ?>Fuvservicio/insertdata" method="post" enctype="multipart/form-data">


                <div class="form-group">
                    <input type="hidden" class="form-control" id="id_fuvservicio"  name="id_fuvservicio">
                </div>
                <div class="jumbotron">
                    <div class="row">



                        <div class="row">
                            <div class="form-group col-xs-4">
                                <label>Ref</label><br>
                                <input class="form-control input-sm"  type="text" name="ref"><br>
                            </div>
<<<<<<< HEAD

                            <div class="form-group col-xs-4">
                                <label>Cliente</label><br>
                                <input type="text" class="form-control input-sm"   name="cliente"><br>
                            </div>

=======
                            <!--
                                                        <div class="form-group col-xs-4">
                                                            <label>Cliente</label><br>
                                                            <input type="text" class="form-control input-sm"   name="cliente"><br>
                                                        </div>-->
                            <div class="form-group col-xs-4">
                                <label for="nombre">Cliente</label>
                                <select required id="cliente" class="form-control input-sm"  name="cliente" <?php echo form_dropdown('clienteCombo', $clienteCombo, '#', 'id="clienteCombo"'); ?> </select>
                            </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            <div class="form-group col-xs-4">
                                <label>Dirección</label><br>

                                <input type="text" class="form-control input-sm" name="direccion"><br>
                            </div>
<<<<<<< HEAD
                        </div>

                        <div class="row">

                            <div class="form-group col-xs-4">
=======


                            <div class="form-group col-xs-4">
                                <label>Referencia</label><br>

                                <input type="text" class="form-control input-sm" name="referencia"><br>
                            </div>
                            
                             <div class="form-group col-xs-4">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                <label>Código</label><br>
                                <input type="text" class="form-control input-sm" name="codigo"><br>
                            </div>


                            <div class="form-group col-xs-4">
                                <label>Tipo de Producto</label><br>
                              <!--  <input type="text" class="form-control input-sm" name="tipo_de_prod"> -->

                                <select name="tipo_de_prod"  class="form-control input-sm" require>
                                    <option  value="" >Selecciona una opción</option>
                                    <OPTION VALUE="REFACCION">REFACCION</OPTION>
                                    <OPTION VALUE="CUBIERTA">CUBIERTA</OPTION>
                                </select>
                            </div> 
<<<<<<< HEAD
=======
                        </div>

                        <div class="row">

                           
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606



                            <div class="form-group col-xs-4">
                                <label>Descripción del Producto</label><br>
                                <input type="text" class="form-control input-sm" name="rfc">
                            </div> 
<<<<<<< HEAD

=======
                            
                            
                               <div class="form-group col-xs-4">
                                <label>Factura</label><br>
                                <input type="text" class="form-control input-sm" name="factura">
                            </div>

                            <div class="form-group col-xs-4">
                                <label for="nombre">Factura <i style="font-size:18px;color:red" class="fa fa-file-pdf-o"></i></label>

                                <input id="a4" type="file" name="facturapdf" class="form-control">
                            </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        </div>







                        <div class="row">

<<<<<<< HEAD
                            <div class="form-group col-xs-4">
                                <label>Factura</label><br>
                                <input type="text" class="form-control input-sm" name="factura">
                            </div>

                            <div class="form-group col-xs-4">
                                <label for="nombre">Factura <i style="font-size:18px;color:red" class="fa fa-file-pdf-o"></i></label>

                                <input id="a4" type="file" name="facturapdf" class="form-control">
                            </div>
=======
                         
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606



                            <div class="form-group col-xs-4">
                                <label>OC</label><br>
                                <input type="text" class="form-control input-sm" name="orden_compra">
                            </div>

<<<<<<< HEAD


=======
                             <div class="form-group col-xs-4">
                                <label>Cantidad</label><br>
                                <input id="cantidad" onkeyup="calcularSubtotal();
                                        calcularIva();
                                        calcularTotal();" min="0" type="number" class="form-control input-sm" name="cantidad">
                            </div>


                            <div class="form-group col-xs-4">
                                <label>PU USD</label><br>
                                <input id="pu_usd" onkeyup="calcularSubtotal();
                                        calcularIva();
                                        calcularTotal();" min="0" type="number" class="form-control input-sm" name="pu_usd">
                            </div> 

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            <!-- <div class="form-group col-xs-4">
                                 <label>Remisión</label><br>
                                 <input type="text" class="form-control input-sm" name="remision">
                             </div> 



                             <div class="form-group col-xs-4">
                                 <label>Fecha de Remisión</label><br>
                                 <input type="date" class="form-control input-sm" name="fecha_de_remision">
                             </div> 
                            -->
                        </div>



                        <br>    
                        <div class="row">

<<<<<<< HEAD
                            <div class="form-group col-xs-4">
                                <label>Cantidad</label><br>
                                <input id="cantidad" onkeyup="calcularSubtotal();
                                        calcularIva();
                                        calcularTotal();" min="0" type="number" class="form-control input-sm" name="cantidad">
                            </div>


                            <div class="form-group col-xs-4">
                                <label>PU USD</label><br>
                                <input id="pu_usd" onkeyup="calcularSubtotal();
                                        calcularIva();
                                        calcularTotal();" min="0" type="number" class="form-control input-sm" name="pu_usd">
                            </div> 
=======
                           
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606


                            <div class="form-group col-xs-4">
                                <label>Subtotal</label><br>
                                <input id="subtotal" title="Cantidad * PU USD" style="background-color:#03E7F7;" readonly  type="text" class="form-control input-sm" name="subtotal">
                            </div>
<<<<<<< HEAD



                        </div><br>



                        <div class="row">

                            <div class="form-group col-xs-4">
=======
                            
                            
                             <div class="form-group col-xs-4">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                <label>IVA</label><br>
                                <input title="PU USD * 16%"  style="background-color:#03E7F7;" id="iva" readonly type="text" class="form-control input-sm" name="iva">
                            </div> 



                            <div class="form-group col-xs-4">
                                <label>Total USD</label><br>
                                <input title="Subtotal  + IVA" readonly style="background-color:#03E7F7;"  id="total" type="text" class="form-control input-sm" name="total_usd">
                            </div> 


<<<<<<< HEAD
=======
                        </div><br>



                        <div class="row">

                           


>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            <div class="form-group col-xs-4">
                                <label>Fecha Elaboración Factura(dd/mm/aaaa):</label><br>
                                <input id="fecha" title="Ingresa la fecha en el formato indicado"  min="00/00/0000" placeholder="dd/mm/aaaa" onkeyup="calcularFechaVencimiento();" 
                                       onchange="return esfechavalida();" maxlength="10"  
                                       type="text" data-date="" data-date-format="DD/MM/YYYY" class="form-control input-sm" name="fecha">
                                <!-- cambiar -->
                            </div>

<<<<<<< HEAD

                          
=======
                                 <div class="form-group col-xs-4">
                                <label>Días de crédito</label><br>
                                <input id="dias_de_credito"  onkeyup="calcularFechaVencimiento();" min="0"  type="number" class="form-control input-sm" name="dias_de_credito">
                            </div> 



                            <div class="form-group col-xs-4">
                                <label>Fecha de Vencimiento</label><br>
                                <input id="fecha_vencimiento" title="Fecha de Elaboración de Factura + Días de crédito" readonly style="background-color:#03E7F7;"  type="text" class="form-control input-sm" name="fecha_vencimiento">
                            </div> 

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        </div><br> 









                        <!--<div class="form-group col-xs-4">
                            <label>Pedimento</label><br>
                            <input type="text" class="form-control input-sm" name="pedimento">
                        </div> 



                        <div class="form-group col-xs-4">
                            <label>Fecha Pedimento</label><br>
                            <input type="date" class="form-control input-sm" name="fecha_pedimento">
                        </div> -->







                        <div class="row">


<<<<<<< HEAD
                              <div class="form-group col-xs-4">
                                <label>Días de crédito</label><br>
                                <input id="dias_de_credito"  onkeyup="calcularFechaVencimiento();" min="0"  type="number" class="form-control input-sm" name="dias_de_credito">
                            </div> 



                            <div class="form-group col-xs-4">
                                <label>Fecha de Vencimiento</label><br>
                                <input id="fecha_vencimiento" title="Fecha de Elaboración de Factura + Días de crédito" readonly style="background-color:#03E7F7;"  type="text" class="form-control input-sm" name="fecha_vencimiento">
                            </div> 
=======
                       
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            <div class="form-group col-xs-4">
                                <label>Fecha de Pago</label><br>
                                <input type="date" class="form-control input-sm" name="fecha_de_pago">
                            </div> 

<<<<<<< HEAD

                            

                        </div><br> 


                        <div class="row">



                            <!--<div class="form-group col-xs-4">
                                <label>Status de Pago</label><br>
                                <input type="text" class="form-control input-sm" name="status_de_pago">
                            </div>-->

<div class="form-group col-xs-4">
=======
  <div class="form-group col-xs-4">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                <label>Status de Pago</label><br>

                                <select name="status_de_pago"  class="form-control input-sm" require>
                                    <option  value="" >Selecciona una opción</option>
                                    <OPTION VALUE="Pagado">Pagado</OPTION>
                                    <OPTION VALUE="Vencido">Vencido</OPTION>
                                </select>
                            </div> 



                            <div class="form-group col-xs-4">
                                <label>Refacturación</label><br>
                                <input type="text" class="form-control input-sm" name="refacturacion">
                            </div> 


<<<<<<< HEAD
                            <div class="form-group col-xs-4">
                                <label>Nueva Fecha de Factura</label><br>
                                <input type="text" class="form-control input-sm" name="nueva">
                            </div> 
                            

=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        </div><br> 


                        <div class="row">


<<<<<<< HEAD
<div class="form-group col-xs-4">
=======

                            <!--<div class="form-group col-xs-4">
                                <label>Status de Pago</label><br>
                                <input type="text" class="form-control input-sm" name="status_de_pago">
                            </div>-->

                          


                            <div class="form-group col-xs-4">
                                <label>Nueva Fecha de Factura</label><br>
                                <input type="text" class="form-control input-sm" name="nueva">
                            </div> 
                            
                            
                            <div class="form-group col-xs-4">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                <label>Observacion</label><br>
                                <input type="text" class="form-control input-sm" name="observaciones">
                            </div>




                            <div class="form-group col-xs-4">
                                <label>Vendedor</label><br>
                                <!--
                                <input type="text" class="form-control input-sm" name="vendedor">-->
                                <select name="vendedor"  class="form-control input-sm" require>
                                    <option  value="" >Selecciona una opción</option>
<<<<<<< HEAD
                                    <OPTION VALUE="Aldo Guillén">Aldo Guillén</OPTION>
                                    <OPTION VALUE="Rodrigo López">Rodrigo López</OPTION>
                                    <OPTION VALUE="Cesar Cantú">Cesar Cantú</OPTION>
                                    <OPTION VALUE="Gerardo Lopéz">Gerardo Lopéz</OPTION>
                                    <OPTION VALUE="Martín Sena">Martín Sena</OPTION>
                                    <OPTION VALUE="Sergio Peñafiel Soto">Sergio Peñafiel Soto</OPTION>
=======

                                    <OPTION VALUE="Casa Robuspack">Casa Robuspack</OPTION>
                                    <OPTION VALUE="Aldo Guillén">Aldo Guillén</OPTION>
                                    <OPTION VALUE="Martín Sena">Martín Sena</OPTION>
                                    <OPTION VALUE="Gerardo Lopéz">Gerardo Lopéz</OPTION>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606


                                </select>
                            </div> 


<<<<<<< HEAD
=======

                        </div><br> 


                        <div class="row">



>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            <div class="form-group col-xs-4">
                                <label>Fecha de cobro de comisiones</label><br>
                                <input type="date" class="form-control input-sm" name="fecha_de_cobro_de_comisiones">
                            </div> 


                        </div><br>









<<<<<<< HEAD
                        <center><input class="btn btn-success" type="submit" value="Agregar" id="botonOrden" data-toggle="tooltip" data-placement="right" title="Da clic para guardar los datos">
=======
                        <center><input class="btn btn-success" type="submit" value="Agregar" data-toggle="tooltip" data-placement="right" title="Da clic para guardar los datos">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            <a title="Da clic para regresar al menú" href="javascript:window.history.go(-1);"class="btn btn-danger">Cancelar</a>
                        </center>
                        </form>

                    </div>
                </div>
                <!-- END KONTEN UTAMA -->

                <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>

                </body>
                </html>
