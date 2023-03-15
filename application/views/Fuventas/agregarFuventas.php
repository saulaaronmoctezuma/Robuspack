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
                m3 = document.getElementById("descuento").value;
                sub = (m1 * m2);
                des = ((m3 * sub) / (100));
                r = (sub - des).toFixed(2);
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
                sub = (m1 * m2);
                r = ((m3 * sub) / (100));

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
                sub = (m1 * m2);
                des = ((m3 * sub) / (100));
                subtotal = sub - des;
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
                sub = (m1 * m2);
                des = ((m3 * sub) / (100));




                subtotal = sub - des;
                iva = 0.16;
                r2 = ((subtotal) + (subtotal * iva)).toFixed(2);

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
<<<<<<< HEAD
=======

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
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
<<<<<<< HEAD
            
             function precioMxn(){
                m1 = document.getElementById("tipo_de_cambio").value;
                m2 = document.getElementById("pu_usd").value;
                r = (m1 * m2).toFixed(4);
                document.getElementById("precio_mxn").value = r;
                
                  if (document.getElementById("precio_mxn").value === "Infinity") {
                    document.getElementById("precio_mxn").value = " ";
                }
                if (document.getElementById("precio_mxn").value === "NaN") {
                    document.getElementById("precio_mxn").value = " ";
                }
                
            }
            
            function filterFloat(evt,input){
    // Backspace = 8, Enter = 13, ‘0′ = 48, ‘9′ = 57, ‘.’ = 46, ‘-’ = 43
    var key = window.Event ? evt.which : evt.keyCode;   
    var chark = String.fromCharCode(key);
    var tempValue = input.value+chark;
    var isNumber = (key >= 48 && key <= 57);
    var isSpecial = (key == 8 || key == 13 || key == 0 ||  key == 46);
    if(isNumber || isSpecial){
        return filter(tempValue);
    }        
    
    return false;    
    
}
                    function filter(__val__){
                        var preg = /^([0-9]+\.?[0-9]{0,4})$/; 
                        return (preg.test(__val__) === true);
                    }


                      function filterFloatDescuento(evt,input){
                        // Backspace = 8, Enter = 13, ‘0′ = 48, ‘9′ = 57, ‘.’ = 46, ‘-’ = 43
                        var key = window.Event ? evt.which : evt.keyCode;   
                        var chark = String.fromCharCode(key);
                        var tempValue = input.value+chark;
                        var isNumber = (key >= 48 && key <= 57);
                        var isSpecial = (key == 8 || key == 13 || key == 0 ||  key == 46);
                        if(isNumber || isSpecial){
                            return filterDescuento(tempValue);
                        }        

                        return false;    

                    }
                    function filterDescuento(__val__){
                        var preg = /^([0-9]+\.?[0-9]{0,2})$/; 
                        return (preg.test(__val__) === true);
                    }
                    
                function calcularSubtotalMxn(){
             m1 = document.getElementById("cantidad").value;
             m2 = document.getElementById("precio_mxn").value;
             m3 = document.getElementById("descuento_mxn").value;
             sub = (m1 * m2);
             r = ((sub * m3) / (100));
             res = (sub - r).toFixed(2);
             
             console.log("cantidad * preciomx"+sub);
             document.getElementById("subtotal_mxn").value = res; 
             
             if (document.getElementById("subtotal_mxn").value === "Infinity") {
                    document.getElementById("subtotal_mxn").value = " ";
                }
                if (document.getElementById("subtotal_mxn").value === "NaN") {
                    document.getElementById("subtotal_mxn").value = " ";
                }
                    
          }
          
    function  calcularIvaMxn(){
          m1 = document.getElementById("subtotal_mxn").value;
         iva = 0.16;
          r = (m1 * iva).toFixed(2);
          
           document.getElementById("iva_mxn").value = r;
           
           if (document.getElementById("iva_mxn").value === "Infinity") {
                    document.getElementById("iva_mxn").value = " ";
                }
                if (document.getElementById("iva_mxn").value === "NaN") {
                    document.getElementById("iva_mxn").value = " ";
                }
          
    }
    
    
     function  calcularTotalMxn(){
          m1 = document.getElementById("subtotal_mxn").value;
          m2 = document.getElementById("iva_mxn").value;
         
          r = (parseFloat(m1) + parseFloat(m2)).toFixed(2);
          
           document.getElementById("total_mxn").value = r;
           
           if (document.getElementById("total_mxn").value === "Infinity") {
                    document.getElementById("total_mxn").value = " ";
                }
                if (document.getElementById("total_mxn").value === "NaN") {
                    document.getElementById("total_mxn").value = " ";
                }
          
    }

            

=======


>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            //--></script>


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
            <form name="formulario" id="formal" role="form"  action="<?= base_url() ?>Fuventas/insertdata" method="post" enctype="multipart/form-data">


                <div class="form-group">
                    <input type="hidden" class="form-control" id="id_maquinaria"  name="id_fuventas">
                </div>
                <div class="jumbotron">
                    <div class="row">

                        <div class="row">
                            <div class="form-group col-xs-1">
                                <label>Cantidad Registros</label><br>
                                <input class="form-control input-sm"  type="number" maxlength="2" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  min="1"  max="99" name="cantidad_registros" maxlength="2" value="1"><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-4">
                                <label>Ref</label><br>
                                <input class="form-control input-sm"  type="text" name="ref"><br>
                            </div>

                            <div class="form-group col-xs-4">
                                <label>Cliente</label><br>
                                <input type="text" class="form-control input-sm"   name="cliente"><br>
                            </div>

                            <div class="form-group col-xs-4">
                                <label>Dirección</label><br>

                                <input type="text" class="form-control input-sm" name="direccion"><br>
                            </div>
                        </div>

                        <div class="row">

                            <div class="form-group col-xs-4">
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



                            <div class="form-group col-xs-4">
                                <label>Descripción del Producto</label><br>
                                <input type="text" class="form-control input-sm" name="rfc">
                            </div> 

                        </div>







                        <div class="row">

                            <div class="form-group col-xs-4">
                                <label>Factura</label><br>
                                <input type="text" class="form-control input-sm" name="factura">
                            </div>

                            <div class="form-group col-xs-4">
                                <label for="nombre">Factura <i style="font-size:18px;color:red" class="fa fa-file-pdf-o"></i></label>

                                <input id="a4" type="file" name="facturapdf" class="form-control">
                            </div>

                            <div class="form-group col-xs-4">
                                <label>Remisión</label><br>
                                <input type="text" class="form-control input-sm" name="remision">
                            </div> 





                        </div>



                        <br>    
                        <div class="row">
                            <div class="form-group col-xs-4">
                                <label>Fecha de Remisión</label><br>
                                <input type="date" class="form-control input-sm" name="fecha_de_remision">
                            </div> 


                            <div class="form-group col-xs-4">
                                <label>OC</label><br>
                                <input type="text" class="form-control input-sm" name="orden_compra">
                            </div>


                            <div class="form-group col-xs-4">
                                <label>Cantidad</label><br>
                                <input id="cantidad" onkeyup="calcularSubtotal();
                                        calcularIva();
<<<<<<< HEAD
                                        calcularTotal();calcularSubtotalMxn();calcularIvaMxn();calcularTotalMxn();" onchange="calcularSubtotal();
                                                calcularIva();
                                                calcularTotal();
                                                descuento();calcularSubtotalMxn();calcularIvaMxn();calcularTotalMxn();" min="0" type="number" class="form-control input-sm" name="cantidad">
=======
                                        calcularTotal();" onchange="calcularSubtotal();
                                                calcularIva();
                                                calcularTotal();
                                                descuento();" min="0" type="number" class="form-control input-sm" name="cantidad">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            </div> 




                        </div><br>



                        <div class="row">

                            <div class="form-group col-xs-4">
                                <label> Tipo de precio </label><br>
                              <!--  <input type="text" class="form-control input-sm" name="tipo_de_prod"> -->

                                <select name="tipo_de_precio"  class="form-control input-sm" require>
                                    <option  value="" >Selecciona una opción</option>
                                    <OPTION VALUE="Lista de precios">Lista de precios</OPTION>
                                    <OPTION VALUE="Precio por promoción">Precio por promoción</OPTION>
                                </select>
                            </div> 

                            <div class="form-group col-xs-4">
                                <label>PU USD</label><br>

                                <input id="pu_usd" onkeyup="calcularSubtotal();
                                        calcularIva();
                                        calcularTotal();
<<<<<<< HEAD
                                        descuento();calcularSubtotalMxn();calcularIvaMxn();calcularTotalMxn()" onchange="calcularSubtotal();
                                                calcularIva();
                                                calcularTotal();
                                                descuento();calcularSubtotalMxn();calcularIvaMxn();calcularTotalMxn()" min="0" type="text" class="form-control input-sm" name="pu_usd">
=======
                                        descuento();" onchange="calcularSubtotal();
                                                calcularIva();
                                                calcularTotal();
                                                descuento();" min="0" type="text" class="form-control input-sm" name="pu_usd">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            </div> 


                            <div class="form-group col-xs-4">
                                <label>Descuento %</label><br>

                                <input id="descuento" onchange="calcularSubtotal();
                                        calcularIva();
                                        calcularTotal();
                                        descuento()"

                                       onkeyup="calcularSubtotal();
                                               calcularIva();
                                               calcularTotal();
                                               descuento();
                                               if (parseInt(this.value) > 100) {
                                                   this.value = 100;
                                                   return false;
                                               }" max="100"  oninput="if(parseInt(this.value)>100){ this.value =100; return false; }"  min="0"  value="0"  type="number" class="form-control input-sm" name="descuento">
                            </div>


                            <br>








                        </div><br> 




                        <div class="row">

                            <div class="form-group col-xs-4">
                                <label>Subtotal</label><br>
                                <input id="subtotal" title="Cantidad * PU USD" style="background-color:#03E7F7;" readonly  type="text" class="form-control input-sm" name="subtotal">
                            </div>


                            <div class="form-group col-xs-4">
                                <label>IVA</label><br>
                                <input title="PU USD * 16%"  style="background-color:#03E7F7;" id="iva" readonly type="text" class="form-control input-sm" name="iva">
                            </div> 


                            <div class="form-group col-xs-4">
                                <label>Total USD</label><br>
                                <input title="Subtotal  + IVA" readonly style="background-color:#03E7F7;"  id="total" type="text" class="form-control input-sm" name="total_usd">
                            </div> 








                        </div><br> 


<<<<<<< HEAD
  
                        <div class="row">
                            <div class="form-group col-xs-4">
                                <label>Tipo de cambio (TC)</label><br>
                                <input class="form-control input-sm" onkeyup="precioMxn();calcularTotalMxn();calcularSubtotalMxn();calcularIvaMxn();"  onkeypress="return filterFloat(event,this);" id="tipo_de_cambio" type="text" name="tipo_de_cambio"><br>
                            </div>

                            <div class="form-group col-xs-4">
                                <label>Precio en m.n(PU MN)</label><br>
                                <input type="text" style="background-color:#03E7F7;" readonly title="PU USD * Tipo de cambio (TC)" onkeyup="calcularSubtotalMxn();" class="form-control input-sm" id="precio_mxn" name="precio_mxn"><br>
                            </div>

                            <div class="form-group col-xs-4">
                                <label>Descuento en %</label><br>

                                <input id="descuento_mxn" title="% del descuento en %"  value="0" onkeyup="calcularSubtotalMxn();calcularIvaMxn();calcularTotalMxn()" oninput="if(parseFloat(this.value)>100){ this.value =100; return false; }" type="text" min="0" max="100" minlength="4" maxlength="7" onkeypress="return filterFloatDescuento(event,this);"  class="form-control input-sm" name="descuento_mxn"><br>
                                
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-xs-4">
                                <label>Subtotal en Mn</label><br>
                                <input class="form-control input-sm" title="(Precio en m.n(PU MN) * Cantidad) * (Descuento en % )  " readonly style="background-color:#03E7F7;" onkeyup="calcularTotalMxn()" type="text" id="subtotal_mxn" name="subtotal_mxn"><br>
                            </div>

                            <div class="form-group col-xs-4">
                                <label>Iva en Mn</label><br>
                                <input type="text" class="form-control input-sm"  readonly title="Subtotal en Mn * 16%" style="background-color:#03E7F7;" onkeyup="calcularTotalMxn()" id="iva_mxn"  name="iva_mxn"><br>
                            </div>

                            <div class="form-group col-xs-4">
                                <label>TOTAL EN MN</label><br>

                                <input type="text" style="background-color:#03E7F7;" readonly title="Subtotal en Mn + Iva en Mn" class="form-control input-sm" id="total_mxn" name="total_mxn"><br>
                            </div>
                        </div>
<br> 
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606



                        <div class="row">

                            <div class="form-group col-xs-4">
                                <label>Fecha Elaboración Factura(dd/mm/aaaa):</label><br>
                                <input id="fecha" title="Ingresa la fecha en el formato indicado"  min="00/00/0000" placeholder="dd/mm/aaaa" onkeyup="calcularFechaVencimiento();" 
                                       onchange="return esfechavalida();" maxlength="10"  
                                       type="text" data-date="" data-date-format="DD/MM/YYYY" class="form-control input-sm" name="fecha">
                                <!-- cambiar -->
                            </div>


                            <div class="form-group col-xs-4">
                                <label>Pedimento</label><br>
                                <input type="text" class="form-control input-sm" name="pedimento">
                            </div> 


                            <div class="form-group col-xs-4">
                                <label>Fecha Pedimento</label><br>
                                <input type="date" class="form-control input-sm" name="fecha_pedimento">
                            </div> 






                        </div><br> 


                        <div class="row">

                            <div class="form-group col-xs-4">
                                <label>Días de crédito</label><br>
                                <input id="dias_de_credito"  onkeyup="calcularFechaVencimiento();" onchange="calcularFechaVencimiento();" min="0"  type="number" class="form-control input-sm" name="dias_de_credito">
                            </div> 


                            <div class="form-group col-xs-4">
                                <label>Fecha de Vencimiento</label><br>
                                <input id="fecha_vencimiento" title="Fecha de Elaboración de Factura + Días de crédito" readonly style="background-color:#03E7F7;"  type="text" class="form-control input-sm" name="fecha_vencimiento">
                            </div> 


                            <div class="form-group col-xs-4">
                                <label>Fecha de Pago</label><br>
                                <input type="date" class="form-control input-sm" name="fecha_de_pago">
                            </div> 
                            <!--<div class="form-group col-xs-4">
                                <label>Status de Pago</label><br>
                                <input type="text" class="form-control input-sm" name="status_de_pago">
                            </div>-->


                          





                        </div><br> 


                        <div class="row">

                            
                              <div class="form-group col-xs-4">
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


                            <div class="form-group col-xs-4">
                                <label>Nueva Fecha de Factura</label><br>
                                <input type="text" class="form-control input-sm" name="nueva">
                            </div> 

                        




                        </div><br>


                        <div class="row">

                            
                                <div class="form-group col-xs-4">
                                <label>Observacion</label><br>
                                <input type="text" class="form-control input-sm" name="observaciones">
                            </div>



                            
                            <div class="form-group col-xs-4">
                                <label>Vendedor</label><br>
                                <!--
                                <input type="text" class="form-control input-sm" name="vendedor">-->
                                <select name="vendedor"  class="form-control input-sm" require>
                                    <option  value="" >Selecciona una opción</option>
                                    <OPTION VALUE="Aldo Guillén">Aldo Guillén</OPTION>
                                    <OPTION VALUE="Benjamin López">Benjamin López</OPTION>
<<<<<<< HEAD
                                   <!-- <OPTION VALUE="Casa Robuspack">Casa Robuspack</OPTION>
                                    <OPTION VALUE="Rodrigo López">Rodrigo López</OPTION>
                                    <OPTION VALUE="Carlos Hernández">Carlos Hernández</OPTION>
                                    <OPTION VALUE="Gerardo Lopéz">Gerardo Lopéz</OPTION>-->
                                    <OPTION VALUE="Orlando Bello Ochoa">Orlando Bello Ochoa</OPTION>
                                    <OPTION VALUE="José Miguel Bazán Rosales">José Miguel Bazán Rosales</OPTION>
                                    <!-- <OPTION VALUE="Martín Sena">Martín Sena</OPTION>-->
                                    <OPTION VALUE="Sergio Peñafiel Soto">Sergio Peñafiel Soto</OPTION>
                                     <OPTION VALUE="Alejandra Reyes">Alejandra Reyes</OPTION>
                                     <OPTION VALUE="Carlos Altamar">Carlos Altamar</OPTION>
=======
                                    <OPTION VALUE="Casa Robuspack">Casa Robuspack</OPTION>
                                    <OPTION VALUE="Jorge González">Jorge González</OPTION>
                                    <!--<OPTION VALUE="Cesar Cantú">Cesar Cantú</OPTION>-->
                                    <OPTION VALUE="Gerardo Lopéz">Gerardo Lopéz</OPTION>
                                    <!-- <OPTION VALUE="Martín Sena">Martín Sena</OPTION>-->
                                    <OPTION VALUE="Sergio Peñafiel Soto">Sergio Peñafiel Soto</OPTION>

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                                </select>
                            </div> 


                            <div class="form-group col-xs-4">
                                <label>Fecha de cobro de comisiones</label><br>
                                <input type="date" class="form-control input-sm" name="fecha_de_cobro_de_comisiones">
                            </div> 
                        </div>


                        <br><br>



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
