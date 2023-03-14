<!--
 * @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 16/11/2018 Hora 2:34 pm
 * Sistema de Control Robuspack
 */-->
<php>
    <html lang="es-mx">
        <title>Robuspack</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">

        <link rel="icon" href="<?= base_url('assets/images/icono.PNG') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
        defined('BASEPATH') OR exit('No direct script access allowed');

        $result = $this->User_model->getAllSettings();
        $theme = $result->theme;
        ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $theme; ?>">
        <link rel="stylesheet" href="<?php echo base_url() . 'public/css/main.css' ?>"> 


        <script>
            function multCostoJuego() {
                precio_unitario = document.getElementById("mulprecio_unitario").value;
                piezas_juego = document.getElementById("mulpiezas_juego").value;
                costo_juego = (precio_unitario * piezas_juego).toFixed(2);
                document.getElementById("res_costo_juego").value = costo_juego;

                if (document.getElementById("res_costo_juego").value === "Infinity") {
                    document.getElementById("res_costo_juego").value = " ";
                }
                if (document.getElementById("res_costo_juego").value === "NaN") {
                    document.getElementById("res_costo_juego").value = " ";
                }

            }

            function divJuegosMensuales() {
                cantidad_maxima = document.getElementById("div_cantidad_maxima").value;
                piezas_juego = document.getElementById("mulpiezas_juego").value;
                juegos_mensuales = ((cantidad_maxima) / (piezas_juego)).toFixed(2);
                document.getElementById("res_juegos_mensuales").value = juegos_mensuales;


                if (document.getElementById("res_juegos_mensuales").value === "Infinity") {
                    document.getElementById("res_juegos_mensuales").value = " ";
                }
                if (document.getElementById("res_juegos_mensuales").value === "NaN") {
                    document.getElementById("res_juegos_mensuales").value = " ";
                }
            }

            function opeBeneficioGolpes() {
                golpes_prom_rodicut = document.getElementById("ope_golpes_prom_rodicut").value;
                golpes_prom_com = document.getElementById("ope_golpes_prom_comp").value;
                beneficio_golpes = (((golpes_prom_rodicut / golpes_prom_com) - 1) * 100).toFixed(2);
                document.getElementById("res_beneficio_golpes").value = beneficio_golpes;

                if (document.getElementById("res_beneficio_golpes").value === "Infinity") {
                    document.getElementById("res_beneficio_golpes").value = " ";
                }
                if (document.getElementById("res_beneficio_golpes").value === "NaN") {
                    document.getElementById("res_beneficio_golpes").value = " ";
                }
            }

            function opeBeneficioRotacion() {
                tiempo_rot_com = document.getElementById("ope_tiempo_rot_com").value;
                tiempo_rot_rodicut = document.getElementById("ope_tiempo_rot_rodicut").value;
                beneficio_rot_prom = (((tiempo_rot_com / tiempo_rot_rodicut) - 1) * 100).toFixed(2);
                document.getElementById("res_beneficio_rot_prom").value = beneficio_rot_prom;

                if (document.getElementById("res_beneficio_rot_prom").value === "Infinity") {
                    document.getElementById("res_beneficio_rot_prom").value = " ";
                }
                if (document.getElementById("res_beneficio_rot_prom").value === "NaN") {
                    document.getElementById("res_beneficio_rot_prom").value = " ";
                }
            }

            function divPrecio_golpe() {
                costo_juego = document.getElementById("res_costo_juego").value;
                golpes_prom_rodicut = document.getElementById("ope_golpes_prom_rodicut").value;
                precio_golpe = (costo_juego / golpes_prom_rodicut).toFixed(2);
                document.getElementById("res_precio_golpe").value = precio_golpe;

                if (document.getElementById("res_precio_golpe").value === "Infinity") {
                    document.getElementById("res_precio_golpe").value = " ";
                }
                if (document.getElementById("res_precio_golpe").value === "NaN") {
                    document.getElementById("res_precio_golpe").value = " ";
                }
            }

            function soloNumeros(evt) {

                var key = nav4 ? evt.which : evt.keyCode;
                return (key <= 110 || (key >= 48 && key <= 57));
            }

            function mulVida_util_dias() {
                numero = 1000000;
                golpes_maquina = document.getElementById("golpes_maquina").value;
                visa_util_dias = (1000000 / golpes_maquina).toFixed(2);
                document.getElementById("res_vida_util_dias").value = visa_util_dias;

                if (document.getElementById("res_vida_util_dias").value === "Infinity") {
                    document.getElementById("res_vida_util_dias").value = " ";
                }
                if (document.getElementById("res_vida_util_dias").value === "NaN") {
                    document.getElementById("res_vida_util_dias").value = " ";
                }
            }

            function mulPeriodo_Surtimiento() {
                cantidad_maxima = document.getElementById("div_cantidad_maxima").value;
                piezas_juego = document.getElementById("mulpiezas_juego").value;
                golpes_maquina = document.getElementById("golpes_maquina").value;
                periodo_surtimiento = (((cantidad_maxima / piezas_juego) * (1000000)) / golpes_maquina).toFixed(2);
                //periodo_surtimiento = cantidad_maxima*piezas_juego*golpes_maquina;
                document.getElementById("res_periodo_surtiemiento").value = periodo_surtimiento;

                if (document.getElementById("res_periodo_surtiemiento").value === "Infinity") {
                    document.getElementById("res_periodo_surtiemiento").value = " ";
                }
                if (document.getElementById("res_periodo_surtiemiento").value === "NaN") {
                    document.getElementById("res_periodo_surtiemiento").value = " ";
                }
            }

            function ConvertirPulgadasAMilimetros() {

                pulgadas = document.getElementById("pulgadas").value;
                numero = 25.4;

                milimetros = (pulgadas * numero).toFixed(2);
                //periodo_surtimiento = cantidad_maxima*piezas_juego*golpes_maquina;
                document.getElementById("milimetros").value = milimetros;

                if (document.getElementById("milimetros").value === "Infinity") {
                    document.getElementById("milimetros").value = " ";
                }
                if (document.getElementById("milimetros").value === "NaN") {
                    document.getElementById("milimetros").value = " ";
                }
            }
        </script>

        <script languaje="javascript">

            function habilitar(form)

            {


                if (formulario.referencia.options[1].selected === true)

                {

                    form.cantidad_minima.readOnly = true;
                    form.cantidad_minima.style.backgroundColor = '#FF0000';
                    document.getElementById("div_cantidad_maxima").readOnly = true;
                    document.getElementById("div_cantidad_maxima").style.backgroundColor = '#FF0000';
                    document.getElementById("mulprecio_unitario").readOnly = true;
                    document.getElementById("mulprecio_unitario").style.backgroundColor = '#FF0000';
                    document.getElementById("res_vida_util_dias").readOnly = true;
                    form.paqueteria.readOnly = true;
                    form.periodo_surtimiento.readOnly = true;
                    document.getElementById("periodo_surtimiento").readOnly = true;
                    document.getElementById("periodo_surtimiento").style.backgroundColor = '#FF0000';
                    document.getElementById("res_vida_util_dias").style.backgroundColor = '#FF0000';
                    document.getElementById("res_periodo_surtiemiento").style.backgroundColor = '#FF0000';
                    document.getElementById("paqueteria").style.backgroundColor = '#FF0000';
                    document.getElementById("tipo_entrega").style.backgroundColor = '#FF0000';
                    document.getElementById("dias_credito").style.backgroundColor = '#FF0000';
                    document.getElementById("pulgadas").style.backgroundColor = '#FF0000';
                    document.getElementById("milimetros").style.backgroundColor = '#FF0000';
                    document.getElementById("capacitacion").style.backgroundColor = '#FF0000';
                    document.getElementById("capacitacion_fecha").style.backgroundColor = '#FF0000';
                    document.getElementById("mulpiezas_juego").style.backgroundColor = '#FF0000';
                    document.getElementById("res_costo_juego").style.backgroundColor = '#FF0000';
                    document.getElementById("res_juegos_mensuales").style.backgroundColor = '#FF0000';
                    document.getElementById("ope_golpes_prom_comp").style.backgroundColor = '#FF0000';
                    document.getElementById("ope_golpes_prom_rodicut").style.backgroundColor = '#FF0000';
                    document.getElementById("res_beneficio_golpes").style.backgroundColor = '#FF0000';
                    document.getElementById("ope_tiempo_rot_com").style.backgroundColor = '#FF0000';
                    document.getElementById("ope_tiempo_rot_rodicut").style.backgroundColor = '#FF0000';
                    document.getElementById("res_beneficio_rot_prom").style.backgroundColor = '#FF0000';
                    document.getElementById("res_precio_golpe").style.backgroundColor = '#FF0000';
                    document.getElementById("uso_de_cfdi").style.backgroundColor = '#FF0000';
                    document.getElementById("metodo_pago").style.backgroundColor = '#FF0000';
                    document.getElementById("golpes_maquina").style.backgroundColor = '#FF0000';
                    form.tipo_entrega.readOnly = true;
                    form.dias_credito.readOnly = true;
                    document.getElementById("pulgadas").readOnly = true;
                    document.getElementById("capacitacion").readOnly = true;
                    document.getElementById("capacitacion_fecha").readOnly = true;
                    document.getElementById("mulpiezas_juego").readOnly = true;
                    document.getElementById("ope_golpes_prom_comp").readOnly = true;
                    document.getElementById("capacitacion_fecha").readOnly = true;
                    document.getElementById("ope_golpes_prom_rodicut").readOnly = true;
                    document.getElementById("ope_tiempo_rot_com").readOnly = true;
                    document.getElementById("ope_tiempo_rot_rodicut").readOnly = true;
                    form.uso_de_cfdi.readOnly = true;
                    form.metodo_pago.readOnly = true;
                    form.paqueteria.readOnly = true;
                    document.getElementById("golpes_maquina").readOnly = true;
                    document.getElementById("periodo_surtimiento").readOnly = true;

                    document.getElementById("tipo_entrega").type = "hidden";
                    document.getElementById("capacitacion").type = "hidden";



                    //document.getElementById("confirmacion_orden_compra").style.backgroundColor = '#FF0000';

                    //document.formulario.elements['confirmacion_orden_compra'].style.display = 'none';
                    document.formulario.elements['periodo_surtimiento'].style.display = 'none';
                    document.formulario.elements['tipo_entrega'].style.display = 'none';
                    document.formulario.elements['dias_credito'].style.display = 'none';
                    document.formulario.elements['uso_de_cfdi'].style.display = 'none';
                    document.formulario.elements['metodo_pago'].style.display = 'none';
                    document.formulario.elements['paqueteria'].style.display = 'none';
                    document.formulario.troquel.selectedIndex = 2;





                    document.getElementById("tipo_entrega").type = "hidden";
                    document.getElementById("capacitacion").style.backgroundColor = '#FF0000';




                    document.getElementById("capacitacion_fecha").value = " ";
                    document.getElementById("pulgadas").value = "";
                    document.getElementById("milimetros").value = "";
                    document.getElementById("cantidad_minima").value = " ";
                    document.getElementById("div_cantidad_maxima").value = " ";
                    document.getElementById("mulprecio_unitario").value = " ";
                    document.getElementById("capacitacion").value === 0;
                    document.getElementById("capacitacion").value = " ";
                    document.getElementById("res_vida_util_dias").value = " ";
                    document.getElementById("res_periodo_surtiemiento").value = " ";
                    document.getElementById("mulpiezas_juego").value = " ";
                    document.getElementById("res_juegos_mensuales").value = " ";
                    document.getElementById("res_costo_juego").value = " ";
                    document.getElementById("ope_golpes_prom_comp").value = " ";
                    document.getElementById("res_beneficio_golpes").value = " ";
                    document.getElementById("ope_golpes_prom_rodicut").value = " ";
                    document.getElementById("res_beneficio_rot_prom").value = " ";
                    document.getElementById("res_precio_golpe").value = " ";
                    document.getElementById("ope_tiempo_rot_com").value = " ";
                    document.getElementById("ope_tiempo_rot_rodicut").value = " ";
                    document.getElementById("golpes_maquina").value = " ";

                    /*document.getElementById("golpes_maquina").value = " ";
                     document.getElementById("metodo_pago").value = " ";
                     document.getElementById("uso_de_cfdi").value = " ";
                     document.getElementById("res_precio_golpe").value = " ";
                     document.getElementById("res_beneficio_rot_prom").value = " ";
                     
                     document.getElementById("ope_tiempo_rot_com").value = " ";
                     document.getElementById("res_beneficio_golpes").value = " ";
                     document.getElementById("ope_golpes_prom_rodicut").value = " ";
                     document.getElementById("ope_golpes_prom_comp").value = " ";
                     document.getElementById("res_juegos_mensuales").value = " ";
                     document.getElementById("res_costo_juego").value = " ";
                     document.getElementById("mulpiezas_juego").value = " ";-*/




                } else

                {

                    // document.formulario.confirmacion_orden_compra.selectedIndex = null;
                    document.formulario.uso_de_cfdi.selectedIndex = null;
                    document.formulario.paqueteria.selectedIndex = null;
                    document.formulario.metodo_pago.selectedIndex = null;
                    document.formulario.tipo_entrega.selectedIndex = null;
                    // document.formulario.periodo_surtimiento.selectedIndex = null;
                    document.formulario.dias_credito.selectedIndex = null;
                    document.formulario.troquel.selectedIndex = null;
                    // document.formulario.elements['confirmacion_orden_compra'].style.display = 'block';
                    //document.formulario.elements['periodo_surtimiento'].style.display = 'block';
                    document.formulario.elements['tipo_entrega'].style.display = 'block';
                    document.formulario.elements['dias_credito'].style.display = 'block';
                    document.formulario.elements['uso_de_cfdi'].style.display = 'block';
                    document.formulario.elements['metodo_pago'].style.display = 'block';
                    document.formulario.elements['paqueteria'].style.display = 'block';

















                    document.getElementById("capacitacion").type = "range";
                    //document.getElementById("formal").reset();
                    form.cantidad_minima.readOnly = false;
                    form.cantidad_minima.readOnly = false;
                    form.cantidad_minima.style.backgroundColor = '#FFFFFF';
                    document.getElementById("div_cantidad_maxima").readOnly = false;

                    document.getElementById("div_cantidad_maxima").style.backgroundColor = '#FFFFFF';
                    document.getElementById("mulprecio_unitario").readOnly = false;
                    document.getElementById("mulprecio_unitario").style.backgroundColor = '#FFFFFF';
                    document.getElementById("res_vida_util_dias").readOnly = true;
                    form.paqueteria.readOnly = false;
                    form.periodo_surtimiento.readOnly = false;
                    document.getElementById("periodo_surtimiento").readOnly = false;
                    document.getElementById("periodo_surtimiento").style.backgroundColor = '#FFFFFF';
                    document.getElementById("res_vida_util_dias").style.backgroundColor = '#03E7F7';
                    document.getElementById("res_periodo_surtiemiento").style.backgroundColor = '#03E7F7';
                    document.getElementById("paqueteria").style.backgroundColor = '#FFFFFF';
                    document.getElementById("tipo_entrega").style.backgroundColor = '#FFFFFF';
                    document.getElementById("dias_credito").style.backgroundColor = '#FFFFFF';
                    document.getElementById("pulgadas").style.backgroundColor = '#FFFFFF';
                    document.getElementById("milimetros").style.backgroundColor = '#03E7F7';
                    document.getElementById("capacitacion").style.backgroundColor = '#FFFFFF';
                    document.getElementById("capacitacion_fecha").style.backgroundColor = '#FFFFFF';
                    document.getElementById("mulpiezas_juego").style.backgroundColor = '#FFFFFF';
                    document.getElementById("res_costo_juego").style.backgroundColor = '#03E7F7';
                    document.getElementById("res_juegos_mensuales").style.backgroundColor = '#03E7F7';
                    document.getElementById("ope_golpes_prom_comp").style.backgroundColor = '#FFFFFF';
                    document.getElementById("ope_golpes_prom_rodicut").style.backgroundColor = '#FFFFFF';
                    document.getElementById("res_beneficio_golpes").style.backgroundColor = '#03E7F7';
                    document.getElementById("ope_tiempo_rot_com").style.backgroundColor = '#FFFFFF';
                    document.getElementById("ope_tiempo_rot_rodicut").style.backgroundColor = '#FFFFFF';
                    document.getElementById("res_beneficio_rot_prom").style.backgroundColor = '#03E7F7';
                    document.getElementById("res_precio_golpe").style.backgroundColor = '#03E7F7';
                    document.getElementById("uso_de_cfdi").style.backgroundColor = '#FFFFFF';
                    document.getElementById("metodo_pago").style.backgroundColor = '#FFFFFF';
                    document.getElementById("golpes_maquina").style.backgroundColor = '#FFFFFF';
                    document.getElementById("confirmacion_orden_compra").style.backgroundColor = '#FFFFFF';
                    form.tipo_entrega.readOnly = false;
                    form.dias_credito.readOnly = false;
                    document.getElementById("pulgadas").readOnly = false;
                    document.getElementById("capacitacion").readOnly = false;
                    document.getElementById("capacitacion_fecha").readOnly = false;
                    document.getElementById("mulpiezas_juego").readOnly = false;
                    document.getElementById("ope_golpes_prom_comp").readOnly = false;
                    document.getElementById("capacitacion_fecha").readOnly = false;
                    document.getElementById("ope_golpes_prom_rodicut").readOnly = false;
                    document.getElementById("ope_tiempo_rot_com").readOnly = false;
                    document.getElementById("ope_tiempo_rot_rodicut").readOnly = false;
                    form.uso_de_cfdi.readOnly = false;
                    form.metodo_pago.readOnly = false;
                    form.paqueteria.readOnly = false;
                    document.getElementById("golpes_maquina").readOnly = false;
                    document.getElementById("periodo_surtimiento").readOnly = false;


                }

            }





            function filterFloat(evt, input) {
                // Backspace = 8, Enter = 13, ‘0′ = 48, ‘9′ = 57, ‘.’ = 46, ‘-’ = 43
                var key = window.Event ? evt.which : evt.keyCode;
                var chark = String.fromCharCode(key);
                var tempValue = input.value + chark;
                if (key >= 48 && key <= 57) {
                    if (filter(tempValue) === false) {
                        return false;
                    } else {
                        return true;
                    }
                } else {
                    if (key == 8 || key == 13 || key == 46 || key == 0) {
                        return true;
                    } else {
                        return false;
                    }
                }
            }
            function filter(__val__) {
                var preg = /^([0-9]+\.?[0-9]{0,2})$/;
                if (preg.test(__val__) === true) {
                    return true;
                } else {
                    return false;
                }

            }

        </script>
        <script>
            addEventListener('load', inicio, false);

            function inicio()
            {
                document.getElementById('capacitacion').addEventListener('change', cambioCapacitacion, false);
            }

            function cambioCapacitacion()
            {
                document.getElementById('temp').innerHTML = document.getElementById('capacitacion').value;
            }


        </script> 
        </head>
        <body onclick="habilitar(this.form)">


            <form name="formulario" id="formal" role="form" action="<?= base_url('ClienteRefacciones/clienteRefaccionesModificar') ?>" method="post" align="center">
                <h1>Actualizar datos</h1>
                <MARQUEE SCROLLDELAY =200>Actualizando sus datos</MARQUEE>
                <div class="container" >
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                        <input class="form-control"type="hidden" name="id_venta" value="<?= $id_venta ?>">
                        </tr>
                        
                         <tr>
                            <td>Fecha de Última Factura</td>
                            <td><input id="fecha_ultima_factura"  class="form-control" type="date"  autofocus name="fecha_ultima_factura" value="<?= $fecha_ultima_factura ?>"></td>
                        </tr>
                        
                        
                         <tr>
                            <td>Consumo Real</td>
                            <td><input id="consumo_real"  class="form-control" type="text"  autofocus name="consumo_real" value="<?= $consumo_real   ?>"></td>
                        </tr>
                        
                         <tr>
                            <td colspan="2" >
                                <input  class="btn btn-success" title="Da clic para guardar los datos" type="submit" value="Guardar" >
                                <a title="Da clic para regresar al menú" href="../../ClienteRefacciones" class="btn btn-info">Cancelar</a>
                            </td>
                        </tr>
                        <br>
                        <tr>
                            <td>Grupo</td>
                            <td><input id="grupo"  style="background-color:#03E7F7;" readonly="readonly" class="form-control" type="text"  autofocus name="grupo" value="<?= $grupo ?>" ></td>
                        </tr>
                        <tr>
                            <td>Cliente</td>
                            <td>  <input class="form-control" type="text" readonly="readonly"  style="background-color:#03E7F7;"name="cliente" value="<?= $cliente ?>"> </td>
                        </tr>

                        <tr>
                            <td>Código</td>
                            <td>  <input class="form-control" type="text" readonly="readonly"  style="background-color:#03E7F7;"name="referencia" value="<?= $referencia ?>"> </td>
                        </tr>

                                                 <tr>
                            <td>Cantidad máxima</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="cantidad_maxima" value="<?= $cantidad_maxima?>"> </td>
                        </tr>


                        <tr>
                            <td>Precio unitario</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="precio_unitario" value="<?= $precio_unitario ?>"> </td>
                        </tr>



                        <tr>
                            <td>Vida Util en Dias</td>
                            <td><input id="res_vida_util_dias"  style="background-color:#03E7F7;" min="0" title="Campo AutoCompletable" readonly="readonly" class="form-control" type="text"  autofocus name="vida_util_dias" value="<?= $vida_util_dias ?>" ></td>
                        </tr>


                        <tr>
                            <td>Periodo surtimiento</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="periodo_surtimiento" value="<?= $periodo_surtimiento ?>"> </td>
                        </tr>




                        <tr>
                            <td>Periodo Surtimiento en Vida Util</td>
                            <td><input id="res_periodo_surtiemiento" class="form-control" min="0" title="Campo AutoCompletable"  type="text" min="0" style="background-color:#03E7F7;" readonly="readonly" autofocus name="periodo_surtimiento_vida_util" value="<?= $periodo_surtimiento_vida_util ?>"></td>
                        </tr>

                        <tr>
                            <td>Cantidad mínima</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="cantidad_minima" value="<?= $cantidad_minima ?>"> </td>
                        </tr>



                        <tr>
                            <td>Paqueteria</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="paqueteria" value="<?= $paqueteria ?>"> </td>
                        </tr>


                        <tr>
                            <td>Tipo entrega</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="tipo_entrega" value="<?= $tipo_entrega ?>"> </td>
                        </tr>


                        <tr>
                            <td>Dias crédito</td>
                            <td>  <input class="form-control" type="text" readonly="readonly"  style="background-color:#03E7F7;" name="dias_credito" value="<?= $dias_credito ?>"> </td>
                        </tr>



                        <tr>
                            <td>Pulgadas</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="pulgadas" value="<?= $pulgadas ?>"> </td>
                        </tr>

                        <tr>
                            <td>Diametro de Rodillo en Milimetros</td>
                            <td><input id="milimetros" class="form-control" type="text" readonly="readonly" min="0" style="background-color:#03E7F7;" title="Campo AutoCompletable"  autofocus name="diametro_rod_ml" value="<?= $diametro_rod_ml ?>"></td>
                        </tr>
                                                <tr>
                            <td>Máquina cliente</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="maquina_cliente" value="<?= $maquina_cliente ?>"> </td>
                        </tr>
                        
                        
                        
                        
                                                <tr>
                            <td>Capacitación</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="capacitacion" value="<?= $capacitacion ?>"> </td>
                        </tr>


                                                <tr>
                            <td>Capacitación fecha</td>
                            <td>  <input id="capacitacion_fecha" class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="capacitacion_fecha" value="<?= $capacitacion_fecha ?>"> </td>
                        </tr>

                        
                                               <tr>
                            <td>Piezas por juego</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="piezas_juego" value="<?= $piezas_juego ?>"> </td>
                        </tr>

                        <tr>
                            <td>Costo juego</td>
                            <td><input id="res_costo_juego" title="Campo AutoCompetable" onkeyup="divPrecio_golpe();"  readonly="readonly" style="background-color:#03E7F7;"  class="form-control" type="text"  autofocus name="costo_juego" value="<?= $costo_juego ?>"></td>
                        </tr>
                        <tr>
                            <td>Juego mensuales</td>
                            <td><input id="res_juegos_mensuales" title="Campo AutoCompetable" class="form-control" type="text"  readonly="readonly" style="background-color:#03E7F7;"  autofocus name="juego_mensuales" value="<?= $juego_mensuales ?>"></td>
                        </tr>
                                                 <tr>
                            <td>Golpes prom comp</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="golpes_prom_comp" value="<?= $golpes_prom_comp ?>"> </td>
                        </tr>

                                               
                          <tr>
                            <td>Golpes prom rodicut</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="golpes_prom_rodicut" value="<?= $golpes_prom_rodicut ?>"> </td>
                        </tr>

                        <tr>
                            <td>Beneficio golpes prom</td>
                            <td><input id="res_beneficio_golpes" title="Campo AutoCompetable" readonly="readonly" class="form-control" type="text"  readonly="readonly" style="background-color:#03E7F7;"  accept="" autofocus name="beneficio_golpes_prom" value="<?= $beneficio_golpes_prom ?>"></td>
                        </tr>
                                                 <tr>
                            <td>Tiempo rot com</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="tiempo_rot_com" value="<?= $tiempo_rot_com ?>"> </td>
                        </tr>

                                                  <tr>
                            <td>Tiempo rot rodicut</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="tiempo_rot_rodicut" value="<?= $tiempo_rot_rodicut ?>"> </td>
                        </tr>

                        <tr>
                            <td>Beneficio rot prom</td>
                            <td><input id="res_beneficio_rot_prom" title="Campo AutoCompetable"  readonly="readonly" style="background-color:#03E7F7;" class="form-control" type="text"  autofocus name="beneficio_rot_prom" value="<?= $beneficio_rot_prom ?>"></td>
                        </tr>
                        <tr>
                            <td>Precio golpe</td>
                            <td><input id="res_precio_golpe" class="form-control" type="text"  title="Campo AutoCompetable" readonly="readonly" style="background-color:#03E7F7;"  autofocus name="precio_golpe" value="<?= $precio_golpe ?>"></td>
                        </tr>
                                               <tr>
                            <td>Ciudad / planta</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="ciudad_planta" value="<?= $ciudad_planta ?>"> </td>
                        </tr>

                                               <tr>
                            <td>Observación</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="observacion" value="<?= $observacion ?>"> </td>
                        </tr>

                                              <tr>
                            <td>Marca de la máquina</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="marca_maquina" value="<?= $marca_maquina ?>"> </td>
                        </tr>

                        <tr>
                            <td>Modelo de la máquina</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;"name="contacto" value="<?= $contacto ?>"> </td>
                        </tr>
                        
                       <tr>
                            <td>Tipo de máquina</td>
                            <td>  <input class="form-control" type="text" readonly="readonly"  style="background-color:#03E7F7;"name="tipo_maquina" value="<?= $tipo_maquina ?>"> </td>
                        </tr>
                        
                        
                         <tr>
                            <td>Formato</td>
                            <td>  <input class="form-control" type="text" readonly="readonly"  style="background-color:#03E7F7;"name="formato" value="<?= $formato ?>"> </td>
                        </tr>
                        
                        
                         <tr>
                            <td>Ancho</td>
                            <td>  <input class="form-control" type="text" readonly="readonly"  style="background-color:#03E7F7;"name="ancho" value="<?= $ancho ?>"> </td>
                        </tr>

                        
                        
                           <tr>
                            <td>Troquel</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="troquel" value="<?= $troquel ?>"> </td>
                        </tr>
                        
                        
                         <tr>
                            <td>Uso de cfdi</td>
                            <td>  <input class="form-control" type="text" readonly="readonly"style="background-color:#03E7F7;" name="uso_de_cfdi" value="<?= $uso_de_cfdi ?>"> </td>
                        </tr>
                        
                        
                        <tr>
                            <td>Método de pago</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="metodo_pago" value="<?= $metodo_pago ?>"> </td>
                        </tr>
                        
                        <tr>
                            <td>Fecha visita</td>
                            <td>  <input class="form-control" type="text" readonly="readonly"  style="background-color:#03E7F7;" name="fecha_visita" value="<?= $fecha_visita ?>"> </td>
                        </tr>
                        
                        <tr>
                            <td>Fecha seguimiento</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="fecha_seguimiento" value="<?= $fecha_seguimiento ?>"> </td>
                        </tr>
                        
                         <tr>
                            <td>Golpes máquina por día</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="golpes_maquina" value="<?= $golpes_maquina ?>"> </td>
                        </tr>
                        
                        
                         <tr>
                            <td>Confirmación de Orden de Compra</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="confirmacion_orden_compra" value="<?= $confirmacion_orden_compra ?>"> </td>
                        </tr>
                       
                      
                         <input id="codigo_cuchilla" type="hidden" class="form-control input-sm"  name="codigo_cuchilla" value="<?= $codigo_cuchilla ?>">
                        <input id="cantidad_cuchilla" type="hidden" class="form-control input-sm"  name="cantidad_cuchilla" value="<?= $cantidad_cuchilla ?>">
                        <input id="precio_cuchilla" type="hidden" class="form-control input-sm"  name="precio_cuchilla" value="<?= $precio_cuchilla ?>">
                        <input id="codigo_cubierta" type="hidden" class="form-control input-sm"  name="codigo_cubierta" value="<?= $codigo_cubierta ?>">
                        <input id="cantidad_cubierta" type="hidden" class="form-control input-sm"  name="cantidad_cubierta" value="<?= $cantidad_cubierta ?>">
                        <input id="precio_cubierta" type="hidden" class="form-control input-sm"  name="precio_cubierta" value="<?= $precio_cubierta ?>">
                        <input id="codigo_llanta" type="hidden" class="form-control input-sm"  name="codigo_llanta" value="<?= $codigo_llanta ?>">
                        <input id="precio_llanta" type="hidden" class="form-control input-sm"  name="precio_llanta" value="<?= $precio_llanta ?>">
                        <input id="codigo_rasqueta" type="hidden" class="form-control input-sm"  name="codigo_rasqueta" value="<?= $codigo_rasqueta ?>">
                        <input id="cantidad_rasqueta" type="hidden" class="form-control input-sm"  name="cantidad_rasqueta" value="<?= $cantidad_rasqueta ?>">
                        <input id="precio_rasqueta" type="hidden" class="form-control input-sm"  name="precio_rasqueta" value="<?= $precio_rasqueta ?>">
                        <input id="codigo_inserto" type="hidden" class="form-control input-sm"  name="codigo_inserto" value="<?= $codigo_inserto ?>">
                        <input id="cantidad_inserto" type="hidden" class="form-control input-sm"  name="cantidad_inserto" value="<?= $cantidad_inserto ?>" >
                        <input id="precio_inserto" type="hidden" class="form-control input-sm"  name="precio_inserto" value="<?= $precio_inserto ?>">

                        <input id="codigo_inserto_2" type="hidden" class="form-control input-sm"  name="codigo_inserto_2" value="<?= $codigo_inserto_2 ?>">
                        <input id="cantidad_inserto_2" type="hidden" class="form-control input-sm"  name="cantidad_inserto_2" value="<?= $cantidad_inserto_2 ?>" >
                        <input id="precio_inserto_2" type="hidden" class="form-control input-sm"  name="precio_inserto_2" value="<?= $precio_inserto_2 ?>">

                         <input id="codigo_inserto_3" type="hidden" class="form-control input-sm"  name="codigo_inserto_3" value="<?= $codigo_inserto_3 ?>">
                        <input id="cantidad_inserto_3" type="hidden" class="form-control input-sm"  name="cantidad_inserto_3" value="<?= $cantidad_inserto_3 ?>" >
                        <input id="precio_inserto_3" type="hidden" class="form-control input-sm"  name="precio_inserto_3" value="<?= $precio_inserto_3 ?>">

                       
                        <input id="codigo_inserto_4" type="hidden" class="form-control input-sm"  name="codigo_inserto_4" value="<?= $codigo_inserto_4 ?>">
                        <input id="cantidad_inserto_4" type="hidden" class="form-control input-sm"  name="cantidad_inserto_4" value="<?= $cantidad_inserto_4 ?>" >
                        <input id="precio_inserto_4" type="hidden" class="form-control input-sm"  name="precio_inserto_4" value="<?= $precio_inserto_4 ?>">
                        
                        <input id="codigo_cuchilla_2" type="hidden" class="form-control input-sm"  name="codigo_cuchilla_2" value="<?= $codigo_cuchilla_2 ?>">
                        <input id="cantidad_cuchilla_2" type="hidden" class="form-control input-sm"  name="cantidad_cuchilla_2" value="<?= $cantidad_cuchilla_2 ?>">
                        <input id="precio_cuchilla_2" type="hidden" class="form-control input-sm"  name="precio_cuchilla_2" value="<?= $precio_cuchilla_2 ?>">
                        
                        <input id="codigo_cuchilla_3" type="hidden" class="form-control input-sm"  name="codigo_cuchilla_3" value="<?= $codigo_cuchilla_3 ?>">
                        <input id="cantidad_cuchilla_3" type="hidden" class="form-control input-sm"  name="cantidad_cuchilla_3" value="<?= $cantidad_cuchilla_3 ?>">
                        <input id="precio_cuchilla_3" type="hidden" class="form-control input-sm"  name="precio_cuchilla_3" value="<?= $precio_cuchilla_3 ?>">
                        
                        
                        <input id="codigo_cuchilla_4" type="hidden" class="form-control input-sm"  name="codigo_cuchilla_4" value="<?= $codigo_cuchilla_4 ?>">
                        <input id="cantidad_cuchilla_4" type="hidden" class="form-control input-sm"  name="cantidad_cuchilla_4" value="<?= $cantidad_cuchilla_4 ?>">
                        <input id="precio_cuchilla_4" type="hidden" class="form-control input-sm"  name="precio_cuchilla_4" value="<?= $precio_cuchilla_4 ?>">
                        
                        
                        <input id="codigo_cuchilla_5" type="hidden" class="form-control input-sm"  name="codigo_cuchilla_5" value="<?= $codigo_cuchilla_5 ?>">
                        <input id="cantidad_cuchilla_5" type="hidden" class="form-control input-sm"  name="cantidad_cuchilla_5" value="<?= $cantidad_cuchilla_5 ?>">
                        <input id="precio_cuchilla_5" type="hidden" class="form-control input-sm"  name="precio_cuchilla_5" value="<?= $precio_cuchilla_5 ?>">
                        
                        
                        <input id="codigo_cuchilla_6" type="hidden" class="form-control input-sm"  name="codigo_cuchilla_6" value="<?= $codigo_cuchilla_6 ?>">
                        <input id="cantidad_cuchilla_6" type="hidden" class="form-control input-sm"  name="cantidad_cuchilla_6" value="<?= $cantidad_cuchilla_6 ?>">
                        <input id="precio_cuchilla_6" type="hidden" class="form-control input-sm"  name="precio_cuchilla_6" value="<?= $precio_cuchilla_6 ?>">
                        
                        
                        <input id="codigo_cuchilla_7" type="hidden" class="form-control input-sm"  name="codigo_cuchilla_7" value="<?= $codigo_cuchilla_7 ?>">
                        <input id="cantidad_cuchilla_7" type="hidden" class="form-control input-sm"  name="cantidad_cuchilla_7" value="<?= $cantidad_cuchilla_7 ?>">
                        <input id="precio_cuchilla_7" type="hidden" class="form-control input-sm"  name="precio_cuchilla_7" value="<?= $precio_cuchilla_7 ?>">
                        
                        
                        <input id="codigo_cuchilla_8" type="hidden" class="form-control input-sm"  name="codigo_cuchilla_8" value="<?= $codigo_cuchilla_8 ?>">
                        <input id="cantidad_cuchilla_8" type="hidden" class="form-control input-sm"  name="cantidad_cuchilla_8" value="<?= $cantidad_cuchilla_8?>">
                        <input id="precio_cuchilla_8" type="hidden" class="form-control input-sm"  name="precio_cuchilla_8" value="<?= $precio_cuchilla_8 ?>">
                        
                        
                        <input id="codigo_cuchilla_9" type="hidden" class="form-control input-sm"  name="codigo_cuchilla_9" value="<?= $codigo_cuchilla_9 ?>">
                        <input id="cantidad_cuchilla_9" type="hidden" class="form-control input-sm"  name="cantidad_cuchilla_9" value="<?= $cantidad_cuchilla_9 ?>">
                        <input id="precio_cuchilla_9" type="hidden" class="form-control input-sm"  name="precio_cuchilla_9" value="<?= $precio_cuchilla_9 ?>">
                        
                        
                        <input id="codigo_cuchilla_10" type="hidden" class="form-control input-sm"  name="codigo_cuchilla_10" value="<?= $codigo_cuchilla_10 ?>">
                        <input id="cantidad_cuchilla_10" type="hidden" class="form-control input-sm"  name="cantidad_cuchilla_10" value="<?= $cantidad_cuchilla_10 ?>">
                        <input id="precio_cuchilla_10" type="hidden" class="form-control input-sm"  name="precio_cuchilla_10" value="<?= $precio_cuchilla_10 ?>">
                        
                        
                        <input id="codigo_cuchilla_11" type="hidden" class="form-control input-sm"  name="codigo_cuchilla_11" value="<?= $codigo_cuchilla_11 ?>">
                        <input id="cantidad_cuchilla_11" type="hidden" class="form-control input-sm"  name="cantidad_cuchilla_11" value="<?= $cantidad_cuchilla_11 ?>">
                        <input id="precio_cuchilla_11" type="hidden" class="form-control input-sm"  name="precio_cuchilla_11" value="<?= $precio_cuchilla_11 ?>">
                        
                        
                        
                       
                        </tbody>

                    </table>
                </div>
            </form>
        </body>
</php>