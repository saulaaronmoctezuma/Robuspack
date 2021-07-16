<!--
 * @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 16/11/2018 Hora 2:34 pm
 Ultimo Cambio 07/08/2019 Hora 3:44 pm
 * Sistema de Control Robuspack
 */
-->

<head>

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

    <style type="text/css">
        body{
            background:url(<?php echo base_url(); ?>assets/images/0h.jpg);
            margin:0;
            height: 100%;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -100;
        }
    </style>

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







            getSelectValue = document.getElementById("periodo_surtimiento").value;
            if (getSelectValue === "") {

                document.getElementById("res_juegos_mensuales").value = null;
            } else if (getSelectValue === "Semanal") {

                cantidad_maxima = document.getElementById("div_cantidad_maxima").value;
                piezas_juego = document.getElementById("mulpiezas_juego").value;
                juegos_mensuales = (4) * ((cantidad_maxima) / (piezas_juego)).toFixed(2);
                document.getElementById("res_juegos_mensuales").value = juegos_mensuales;


                if (document.getElementById("res_juegos_mensuales").value === "Infinity") {
                    document.getElementById("res_juegos_mensuales").value = " ";
                }
                if (document.getElementById("res_juegos_mensuales").value === "NaN") {
                    document.getElementById("res_juegos_mensuales").value = " ";
                }


                if (document.getElementById("res_costo_juego").value === "Infinity") {
                    document.getElementById("res_costo_juego").value = " ";
                }
                if (document.getElementById("res_costo_juego").value === "NaN") {
                    document.getElementById("res_costo_juego").value = " ";
                }

            } else if (getSelectValue === "Quincenal") {
                cantidad_maxima = document.getElementById("div_cantidad_maxima").value;
                piezas_juego = document.getElementById("mulpiezas_juego").value;
                juegos_mensuales = (2) * ((cantidad_maxima) / (piezas_juego)).toFixed(2);
                document.getElementById("res_juegos_mensuales").value = juegos_mensuales;


                if (document.getElementById("res_juegos_mensuales").value === "Infinity") {
                    document.getElementById("res_juegos_mensuales").value = " ";
                }
                if (document.getElementById("res_juegos_mensuales").value === "NaN") {
                    document.getElementById("res_juegos_mensuales").value = " ";
                }


                if (document.getElementById("res_costo_juego").value === "Infinity") {
                    document.getElementById("res_costo_juego").value = " ";
                }
                if (document.getElementById("res_costo_juego").value === "NaN") {
                    document.getElementById("res_costo_juego").value = " ";
                }
            } else if (getSelectValue === "Mensual") {
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


                if (document.getElementById("res_costo_juego").value === "Infinity") {
                    document.getElementById("res_costo_juego").value = " ";
                }
                if (document.getElementById("res_costo_juego").value === "NaN") {
                    document.getElementById("res_costo_juego").value = " ";
                }
            } else if (getSelectValue === "Bimestral") {
                cantidad_maxima = document.getElementById("div_cantidad_maxima").value;
                piezas_juego = document.getElementById("mulpiezas_juego").value;
                juegos_mensuales = (((cantidad_maxima) / (piezas_juego)) / (2)).toFixed(2);
                document.getElementById("res_juegos_mensuales").value = juegos_mensuales;


                if (document.getElementById("res_juegos_mensuales").value === "Infinity") {
                    document.getElementById("res_juegos_mensuales").value = " ";
                }
                if (document.getElementById("res_juegos_mensuales").value === "NaN") {
                    document.getElementById("res_juegos_mensuales").value = " ";
                }


                if (document.getElementById("res_costo_juego").value === "Infinity") {
                    document.getElementById("res_costo_juego").value = " ";
                }
                if (document.getElementById("res_costo_juego").value === "NaN") {
                    document.getElementById("res_costo_juego").value = " ";
                }
            } else if (getSelectValue === "Trimestral") {
                cantidad_maxima = document.getElementById("div_cantidad_maxima").value;
                piezas_juego = document.getElementById("mulpiezas_juego").value;
                juegos_mensuales = (((cantidad_maxima) / (piezas_juego)) / (3)).toFixed(2);
                document.getElementById("res_juegos_mensuales").value = juegos_mensuales;


                if (document.getElementById("res_juegos_mensuales").value === "Infinity") {
                    document.getElementById("res_juegos_mensuales").value = " ";
                }
                if (document.getElementById("res_juegos_mensuales").value === "NaN") {
                    document.getElementById("res_juegos_mensuales").value = " ";
                }


                if (document.getElementById("res_costo_juego").value === "Infinity") {
                    document.getElementById("res_costo_juego").value = " ";
                }
                if (document.getElementById("res_costo_juego").value === "NaN") {
                    document.getElementById("res_costo_juego").value = " ";
                }
            } else if (getSelectValue === "Semestral") {
                cantidad_maxima = document.getElementById("div_cantidad_maxima").value;
                piezas_juego = document.getElementById("mulpiezas_juego").value;
                juegos_mensuales = (((cantidad_maxima) / (piezas_juego)) / (6)).toFixed(2);
                document.getElementById("res_juegos_mensuales").value = juegos_mensuales;


                if (document.getElementById("res_juegos_mensuales").value === "Infinity") {
                    document.getElementById("res_juegos_mensuales").value = " ";
                }
                if (document.getElementById("res_juegos_mensuales").value === "NaN") {
                    document.getElementById("res_juegos_mensuales").value = " ";
                }


                if (document.getElementById("res_costo_juego").value === "Infinity") {
                    document.getElementById("res_costo_juego").value = " ";
                }
                if (document.getElementById("res_costo_juego").value === "NaN") {
                    document.getElementById("res_costo_juego").value = " ";
                }
            } else if (getSelectValue === "Anual") {
                cantidad_maxima = document.getElementById("div_cantidad_maxima").value;
                piezas_juego = document.getElementById("mulpiezas_juego").value;
                juegos_mensuales = (((cantidad_maxima) / (piezas_juego)) / (12)).toFixed(2);
                document.getElementById("res_juegos_mensuales").value = juegos_mensuales;


                if (document.getElementById("res_juegos_mensuales").value === "Infinity") {
                    document.getElementById("res_juegos_mensuales").value = " ";
                }
                if (document.getElementById("res_juegos_mensuales").value === "NaN") {
                    document.getElementById("res_juegos_mensuales").value = " ";
                }


                if (document.getElementById("res_costo_juego").value === "Infinity") {
                    document.getElementById("res_costo_juego").value = " ";
                }
                if (document.getElementById("res_costo_juego").value === "NaN") {
                    document.getElementById("res_costo_juego").value = " ";
                }
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



        function comprobarOption() {
            var opcion = document.getElementById("periodo_surtimiento").value;
            if (opcion === "Anual")
                document.getElementById("div_cantidad_maxima").disabled = FALSE;
            else
                document.getElementById("div_cantidad_maxima").disabled = TRUE;
        }

    </script>

    <script languaje="javascript">

        function habilitar(form)

        {

            if (form.referencia[1].selected === true)

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

                document.formulario.elements['periodo_surtimiento'].style.display = 'none';
                document.formulario.elements['tipo_entrega'].style.display = 'none';
                document.formulario.elements['dias_credito'].style.display = 'none';
                document.formulario.elements['uso_de_cfdi'].style.display = 'none';
                document.formulario.elements['metodo_pago'].style.display = 'none';
                document.formulario.elements['paqueteria'].style.display = 'none';

                //document.formulario.elements['confirmacion_orden_compra'].style.display = 'none';
                document.formulario.troquel.selectedIndex = 2;




                document.getElementById("tipo_entrega").type = "hidden";
                document.getElementById("capacitacion").style.backgroundColor = '#FF0000';



                document.getElementById("confirmacion_orden_compra").value = "";
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


                document.formulario.confirmacion_orden_compra.selectedIndex = 4;


            } else

            {

                document.formulario.confirmacion_orden_compra.selectedIndex = null;
                document.formulario.uso_de_cfdi.sele
                document.formulario.confirctedIndex = null;
                document.formulario.paqueteria.selectedIndex = null;
                document.formulario.metodo_pago.selectedIndex = null;
                document.formulario.tipo_entrega.selectedIndex = null;
                document.formulario.periodo_surtimiento.selectedIndex = null;
                document.formulario.dias_credito.selectedIndex = null;
                document.formulario.troquel.selectedIndex = null;
                document.formulario.elements['confirmacion_orden_compra'].style.display = 'block';
                document.formulario.elements['periodo_surtimiento'].style.display = 'block';
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
                document.getElementById("confirmacion_orden_compra").readOnly = false;
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

    <script type="text/javascript">
        function Validate()
        {
            var e = document.getElementById("referencia");
            var strUser = e.options[e.selectedIndex].value;

            var strUser1 = e.options[e.selectedIndex].text;
            if (strUser == 0)
            {
                alert("Selecciona un Código");

                document.getElementById('referencia').focus();
            }
        }

        function ValidaGrupo()
        {
            var e = document.getElementById("grupo");
            var strUser = e.options[e.selectedIndex].value;

            var strUser1 = e.options[e.selectedIndex].text;
            if (strUser == 0)
            {
                alert("Selecciona un Grupo");
                document.formulario.grupo.focus;
            }
        }
    </script>
</head>


<div     id="proveedor">
    <div class="container" >      
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Bienvenido</strong> Agrega los datos segun corresponda
        </div>
        <BR>
        <CENTER><h1>Control SIC</h1></center>
        <h3><MARQUEE HEIGHT=35 SCROLLDELAY =200>Agregando los datos de Control SIC</MARQUEE></h3>

        <form name="formulario" id="formal" role="form" action="<?= base_url('ClienteRefacciones/formularioAgregar') ?>" method="POST" onsubmit="return valida()">

            <center>
                <div class="jumbotron" >  
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id_venta"  name="id_venta">
                    </div>
                    <div class="row">


                        <div class="form-group col-xs-4">
                            <label for="nombre">Grupo</label>
                            <select d id="grupo"  class="form-control input-sm"  name="grupo"  <?php echo form_dropdown('grupoCombo', $grupoCombo, '#', 'id="grupoCombo"'); ?> </select>
                        </div>

                        <div class="form-group col-xs-4">
                            <label for="nombre">Cliente</label>
                            <select d id="cliente" class="form-control input-sm"  name="cliente" <?php echo form_dropdown('clienteCombo', $clienteCombo, '#', 'id="clienteCombo"'); ?> </select>
                        </div>

                        <div class="form-group col-xs-4">
                            <label for="nombre">Código</label>
                            <select id="referencia" name="referencia" type="text" class="form-control input-sm"  onChange="habilitar(this.form)" name="referencia" <?php echo form_dropdown('options', $options, '#', 'id="options"'); ?>  </select>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="form-group col-xs-4">
                            <label for="nombre">Cantidad máxima</label>
                            <input id="div_cantidad_maxima" min="0" onkeyup="divJuegosMensuales();
                                    mulPeriodo_Surtimiento();" type="number" class="form-control input-sm"  name="cantidad_maxima" placeholder="Ingresa la cantidad máxima " onkeypress="return soloNumeros(event)" >
                        </div>
                        <div class="form-group col-xs-4">
                            <label for="nombre">Precio unitario</label>
                            <input id="mulprecio_unitario" min="0" onkeyup="multCostoJuego();" type="number" class="form-control input-sm"  name="precio_unitario" placeholder="Ingresa el precio unitario " >
                        </div>
                        <div class="form-group col-xs-4">
                            <label for="nombre">Vida util en dias</label>
                            <input id="res_vida_util_dias"  type="number" readonly="readonly" min="0" style="background-color:#03E7F7;" title="Campo Autocompletable" class="form-control input-sm"  name="vida_util_dias" placeholder=" "  >
                        </div>
                    </div>
                    <br>


                    <div class="row">
                        <div class="form-group col-xs-4">
                            <label>Periodo surtimiento</label>

                            <select name="periodo_surtimiento" id="periodo_surtimiento" class="form-control input-sm"  onchange="divJuegosMensuales()">
                                <option  value="">Selecciona una opción</option>
                                <OPTION VALUE="Semanal">Semanal</OPTION>
                                <OPTION VALUE="Quincenal">Quincenal</OPTION>
                                <OPTION VALUE="Mensual">Mensual</OPTION>
                                <OPTION VALUE="Bimestral">Bimestral</OPTION>
                                <OPTION VALUE="Bimestral">Trimestral</OPTION>
                                <OPTION VALUE="Semestral">Semestral</OPTION>
                                <OPTION VALUE="Anual">Anual</OPTION>
                            </select>
                        </div> 



                        <div class="form-group col-xs-4">
                            <label for="nombre">Periodo Surtimiento Vida util</label>
                            <input id="res_periodo_surtiemiento" readonly="readonly" min="0" style="background-color:#03E7F7;"  type="text" class="form-control input-sm"  name="periodo_surtimiento_vida_util" title="Campo Autocompletable" >
                        </div>

                        <div class="form-group col-xs-4">
                            <label for="nombre">Cantidad mínima</label>
                            <input id="cantidad_minima" min="0" type="number" class="form-control input-sm"  name="cantidad_minima" placeholder="Ingresa la cantidad mínima" >
                        </div>

                    </div> 
                    <br>
                    <div class="row">
                        <div class="form-group col-xs-4">
                            <label>Paqueteria</label>

                            <select name="paqueteria" id="paqueteria" class="form-control input-sm" >
                                <option  value="">Selecciona una opción</option>
                                <OPTION VALUE="Tres guerras">Tres guerras</OPTION>
                                <OPTION VALUE="Paquete Express">Paquete Express</OPTION>
                                <OPTION VALUE="Estafeta">Estafeta</OPTION>
                                <OPTION VALUE="Flecha Amarilla">Flecha amarilla</OPTION>
                                <OPTION VALUE="Castores">Castores</OPTION>
                                <OPTION VALUE="Entrega Personal Robuspack">Entrega Personal Robuspack</OPTION>
                                <OPTION VALUE="Recolección en bodega">Recolección en bodega</OPTION>
                            </select>


                        </div>


                        <div class="form-group col-xs-4">
                            <label>Tipo de entrega</label>


                            <select name="tipo_entrega" id="tipo_entrega" class="form-control input-sm" >
                                <option  value="">Selecciona una opción</option>
                                <OPTION VALUE="Domicilio prepagado">Domicilio prepagado</OPTION>
                                <OPTION VALUE="Domicilio por cobrar">Domicilio por cobrar</OPTION>

                            </select>

                        </div> <div class="form-group col-xs-4">
                            <label>Días de crédito</label>

                            <select name="dias_credito" id="dias_credito" class="form-control input-sm" >
                                <option  value="">Selecciona una opción</option>
                                <OPTION VALUE="15">15</OPTION>
                                <OPTION VALUE="20">20</OPTION>
                                <OPTION VALUE="30">30</OPTION>
                                <OPTION VALUE="60">60</OPTION>
                                <OPTION VALUE="90">90</OPTION>
                                <OPTION VALUE="Ninguno">Ninguno</OPTION>

                            </select>
                        </div>
                    </div>
                    <br>



                    <div class="row">



                        <div class="form-group col-xs-4">
                            <label for="nombre">Diametro Rodillo en Pulgadas</label>
                            <input min="0" id="pulgadas" onkeyup="ConvertirPulgadasAMilimetros();" type="text" class="form-control input-sm"  name="pulgadas" placeholder="Ingresa las pulgadas"  onkeypress="return filterFloat(event, this);">
                        </div>
                        <div class="form-group col-xs-4">
                            <label for="nombre">Diametro Rodillo en Milimetros</label>
                            <input min="0" id="milimetros" type="number" class="form-control input-sm" readonly="readonly" min="0" style="background-color:#03E7F7;" name="diametro_rod_ml" title="Campo AutoCompletable" >
                        </div>
                        <div class="form-group col-xs-4">
                            <label for="nombre">Máquina cliente</label>
                            <input id="maquina_cliente" type="text" class="form-control input-sm"  name="maquina_cliente" placeholder="Ingresa la máquina del cliente "d>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <!--<div class="form-group col-xs-4">
                            <label for="nombre">Capacitación %</label>
                            <input id="capacitacion" type="text" class="form-control input-sm"  name="capacitacion" min="0" max="100  " maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" placeholder="Ingresa la capacitación " >
                        </div> -->


                        <div class="inputDiv col-xs-4">

                            <label for="nombre">Capacitación </label>


                            <input type="range" value="0" name="capacitacion" id="capacitacion" min="0" max="100">
                            <span id="temp">0</span> %
                            <br></div> 


                        <div class="form-group col-xs-4">
                            <label for="nombre">Capacitación a fecha</label>
                            <input id="capacitacion_fecha" type="date" min="2017-01-01" max="2025-12-31" class="form-control input-sm"  name="capacitacion_fecha" placeholder="Ingresa la fecha de la capacitación " >
                        </div>
                        <div class="form-group col-xs-4">
                            <label for="nombre">Piezas por juego</label>
                            <input id="mulpiezas_juego"  onkeyup="multCostoJuego();
                                    divJuegosMensuales();
                                    mulPeriodo_Surtimiento();"  type="number" class="form-control input-sm"  name="piezas_juego" placeholder="Ingresa las piezas por juego " >
                        </div>
                    </div> 
                    <br>
                    <div class="row">
                        <div class="form-group col-xs-4">
                            <label for="nombre">Costo por juego</label>
                            <input style="background-color:#03E7F7;" id="res_costo_juego" onkeyup="divPrecio_golpe();" readonly="readonly " type="text" class="form-control input-sm"  name="costo_juego" title="Precio_unitario * piezas por juego">
                        </div>



                        <div class="form-group col-xs-4">
                            <label for="nombre">Juegos mensuales</label>
                            <input style="background-color:#03E7F7;"  id="res_juegos_mensuales" type="text" readonly="readonly" class="form-control input-sm"  name="juego_mensuales" title="((cantidad_maxima) / (piezas_juego))"   >
                        </div>
                        <div class="form-group col-xs-4">
                            <label for="nombre">Golpes promedio vida util competencia</label>
                            <input min="0" id="ope_golpes_prom_comp" onkeyup="opeBeneficioGolpes();" type="number" class="form-control input-sm"  name="golpes_prom_comp" placeholder="Ingresa los golpes promedio de la competencia" >
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-xs-4">
                            <label for="nombre">Golpes promedio vida util rodicut</label>
                            <input id="ope_golpes_prom_rodicut" min="0" onkeyup="opeBeneficioGolpes();
                                    divPrecio_golpe();" type="number" class="form-control input-sm"  name="golpes_prom_rodicut" placeholder="Ingresa los golpes promedio de rodicut " >
                        </div>
                        <div class="form-group col-xs-4">
                            <label for="nombre"> % Beneficio golpes promedio</label>
                            <input style="background-color:#03E7F7;" id="res_beneficio_golpes" readonly="readonly" type="text" class="form-control input-sm input-sm"  name="beneficio_golpes_prom" title="Campo Autocompletable" >

                        </div>




                        <div class="form-group col-xs-4">
                            <label for="nombre">Tiempo rotación competencia min</label>
                            <input id="ope_tiempo_rot_com" min="0" onkeyup="opeBeneficioRotacion();"  type="number" class="form-control input-sm"  name="tiempo_rot_com" placeholder="Ingresa el tiempo de rotación de la competencia" >
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-xs-4">
                            <label for="nombre">Tiempo rotación rodicut min</label>
                            <input  min="0" id="ope_tiempo_rot_rodicut" onkeyup="opeBeneficioRotacion();" type="number" class="form-control input-sm"  name="tiempo_rot_rodicut" placeholder="Ingresa el tiempo de rotacion de rodicut" >
                        </div>
                        <div class="form-group col-xs-4">
                            <label for="nombre">% Beneficio rotación promedio</label>
                            <input style="background-color:#03E7F7;" id="res_beneficio_rot_prom" readonly="readonly" type="text" class="form-control input-sm"  name="beneficio_rot_prom" title="Campo Autocompletable" >
                        </div>
                        <div class="form-group col-xs-4">
                            <label for="nombre">Precio por golpe en USD</label>
                            <input  readonly="readonly" style="background-color:#03E7F7;"  id="res_precio_golpe"  type="text" class="form-control input-sm"  name="precio_golpe" title="Campo Autocompletable">
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="form-group col-xs-4">
                            <label for="nombre">Ciudad/planta</label>
                            <input id="a6" type="text" class="form-control input-sm"  name="ciudad_planta" placeholder="Ingresa la ciudad o la planta" d>
                        </div>

                        <div class="form-group col-xs-4">
                            <label for="nombre">Observación</label>

                            <textarea name="observacion" class="form-control input-sm"  rows="3" cols="80" style="resize:none;" placeholder="Ingresa una observación" d></textarea>
                        </div>


                        <div class="form-group col-xs-4">
                            <label for="nombre">Marca de Máquina</label>
                           <!-- <input id="a6" type="text" class="form-control input-sm"  name="marca_maquina" placeholder="Ingresa la marca " d>-->


                            <select name="marca_maquina" id="marca_maquina" class="form-control input-sm" >
                                <option  value="">Selecciona una opción</option>
                                <OPTION VALUE="CURIONI">CURIONI</OPTION>
                                <OPTION VALUE="HOPPER">HOPPER</OPTION>
                                <OPTION VALUE="LANGSTON">LANGSTON</OPTION>
                                <OPTION VALUE="LATITUD">LATITUD</OPTION>
                                <OPTION VALUE="MARTIN">MARTIN</OPTION>


                                <OPTION VALUE="STALEY">STALEY</OPTION>
                                <OPTION VALUE="SRPACK">SRPACK</OPTION>
                                <OPTION VALUE="TECASA">TECASA</OPTION>
                                <OPTION VALUE="WARD">WARD</OPTION>
                                <OPTION VALUE="WARD III">WARD III</OPTION>
                                <OPTION VALUE="WARD IV">WARD IV</OPTION>
                                <OPTION VALUE="WARD V">WARD V</OPTION>

                                <OPTION VALUE="MARQUIP">MARQUIP</OPTION>
                                <OPTION VALUE="HUALI">HUALI</OPTION>
                                <OPTION VALUE="HEBEI">HEBEI</OPTION>
                                <OPTION VALUE="NAVIC">NAVIC</OPTION>
                                <OPTION VALUE="KESHENGLON">KESHENGLON</OPTION>
                            </select>
                        </div>


                    </div> 
                    <br>
                    <div class="row">

                        <div class="form-group col-xs-4">
                            <label for="nombre">Modelo de la máquina</label>
                           <!--<input id="a6" type="text" class="form-control input-sm"  name="contacto" placeholder="Ingresa el modelo de maquina" d>-->
                            <select name="contacto" class="form-control input-sm" >
                                <option  value="">Selecciona una opción</option>
                                <OPTION VALUE="DRO">DRO</OPTION>
                                <OPTION VALUE="DRO  NT/ RS">DRO  NT/ RS</OPTION>
                                <OPTION VALUE="DRO NT">DRO NT</OPTION>

                                <OPTION VALUE="FFG Midline">FFG Midline</OPTION> 
                                <OPTION VALUE="FFG Transline">FFG Transline</OPTION>

                                <OPTION VALUE="LANGSTON">LANGSTON</OPTION> 
                                <OPTION VALUE="Midline NT/ RS">Midline NT/ RS</OPTION>
                                <OPTION VALUE="Miniline">Miniline</OPTION> 
                                <OPTION VALUE="Miniline RS">Miniline RS</OPTION> 

                                <OPTION VALUE="TECASA">TECASA</OPTION> 
                                <OPTION VALUE="Transline">Transline</OPTION> 
                                <OPTION VALUE="Transline RS">Transline RS</OPTION>
                                <OPTION VALUE="Transline NT/ RS">Transline NT/ RS</OPTION> 


                                <OPTION VALUE="INOVA">INOVA</OPTION> 
                                <OPTION VALUE="PRIMA">PRIMA</OPTION> 
                                <OPTION VALUE="NOVO">NOVO</OPTION> 
                                <OPTION VALUE="NOVA">NOVA</OPTION> 
                                <OPTION VALUE="BPSD">BPSD</OPTION> 
                                <OPTION VALUE="BP">BP</OPTION> 
                                <OPTION VALUE="ASPF">ASPF</OPTION>  
                                <OPTION VALUE="LKYS">LKYS</OPTION>  



                            </select>

                        </div>
                        <div class="form-group col-xs-4">
                            <label for="nombre"> Tipo máquina</label>

                            <select name="tipo_maquina" class="form-control input-sm" d>
                                <option  value="">Selecciona una opción</option>
                                <OPTION VALUE="FFG">FFG</OPTION>
                                <OPTION VALUE="FRDC">FRDC</OPTION>
                                <OPTION VALUE="RDC">RDC</OPTION>
                            </select>


  <!--<select name="tipo_maquina" class="form-control input-sm" D>
    <option  value="">Selecciona una opción</option>
    <OPTION VALUE="616">616</OPTION>
    <OPTION VALUE="618">618</OPTION>
    <OPTION VALUE="920">920</OPTION>
    <OPTION VALUE="924">924</OPTION>
    <OPTION VALUE="1228">1228</OPTION>
    <OPTION VALUE="1624">1624</OPTION>
    <OPTION VALUE="1628">1628</OPTION>
    <OPTION VALUE="J4500">J4500</OPTION>
    <OPTION VALUE="1224">1224</OPTION>
    <OPTION VALUE="TBC">TBC</OPTION>
</select>-->

                        </div>








                        <div class="form-group col-xs-4">
                            <label for="nombre"> Formato</label>

                            <select name="formato" class="form-control input-sm" D>
                                <option  value="">Selecciona una opción</option>
                                <OPTION VALUE="616">616</OPTION>
                                <OPTION VALUE="618">618</OPTION>
                                <OPTION VALUE="920">920</OPTION>
                                <OPTION VALUE="924">924</OPTION>
                                <OPTION VALUE="1228">1228</OPTION>
                                <OPTION VALUE="1624">1624</OPTION>
                                <OPTION VALUE="1628">1628</OPTION>
                                <OPTION VALUE="J4500">J4500</OPTION>
                                <OPTION VALUE="1224">1224</OPTION>
                                <OPTION VALUE="TBC">TBC</OPTION>
                            </select>

                        </div>
                    </div>
                    <br>

                    <div class="row">

                        <div class="form-group col-xs-4">
                            <label for="nombre">Ancho</label>

                            <select name="ancho" class="form-control input-sm" D>
                                <option  value="">Selecciona una opción</option>
                                <OPTION VALUE="2800 mm">2800 mm</OPTION>
                                <OPTION VALUE="2400 mm">2400 mm</OPTION>
                                <OPTION VALUE="2000 mm">2000 mm</OPTION>
                                <OPTION VALUE="3000 mm">3000 mm</OPTION>
                                <OPTION VALUE='2032 mm 80" inch'>2032mm 88" inch</OPTION>
                                <OPTION VALUE='3302 mm 130" inch'>3302 mm 130" inch</OPTION>
                                <OPTION VALUE='2800 mm 114" inch'>2800 mm 114" inch</OPTION>
                                <OPTION VALUE='3000 mm 125" inch'>3300 mm 125" inch</OPTION>
                                <OPTION VALUE="TBC">TBC</OPTION>
                                <OPTION VALUE="1800 mm">1800 mm</OPTION>
                                <OPTION VALUE='2000 mm80" inch'>2000 mm80" inch</OPTION>
                                <OPTION VALUE='110" inch'>110" inch</OPTION>
                                <OPTION VALUE='100" inch'>100" inch</OPTION>
                                <OPTION VALUE='2800 mm 113" inch'>2800 mm 113" inch</OPTION>
                                <OPTION VALUE="1600 mm">1600 mm</OPTION>

                            </select>

                        </div>



                        <div class="form-group col-xs-4">
                            <label>Troquel</label>

                            <select name="troquel" id="troquel" class="form-control input-sm" d>
                                <option  value="">Selecciona una opción</option>
                                <<OPTION VALUE="Sí">Sí</OPTION>
                                <OPTION VALUE="No">No</OPTION>

                            </select>

                        </div>



                        <div class="form-group col-xs-4">
                            <label for="nombre">Uso de cfdi</label>
                            <select name="uso_de_cfdi" id="uso_de_cfdi" class="form-control input-sm" >
                                <option  value="">Selecciona una opción</option>
                                <option value="G01 Adquisión de mercancías">G01 Adquisión de mercancías</option>
                                <option value="G02 Devolución, descuentos o bonificaciones">G02 Devolución, descuentos o bonificaciones</option>
                                <option value="G03 Gastos en general">G03 Gastos en general</option>
                                <option value="I01 Construcciones">I01 Construcciones</option>
                                <option value="I02 Mobiliario y equipo de oficina por inversiones">I02 Mobiliario y equipo de oficina por inversiones</option>
                                <option value="I03 Equipo de transporte">I03 Equipo de transporte</option>
                                <option value="I04 Equipo de cómputo y accesorios">I04 Equipo de cómputo y accesorios</option>
                                <option value="I05 Dados, troqueles, moldes, matrices y herramental">I05 Dados, troqueles, moldes, matrices y herramental</option>
                                <option value="I06 Comunicaciones telefónicas">I06 Comunicaciones telefónicas</option>
                                <option value="I07 Comunicaciones satelitales">I07 Comunicaciones satelitales</option>
                                <option value="I08 Otra maquinaria y equipo.">I08 Otra maquinaria y equipo</option>
                                <option value="D01 Honorarios médicos, dentales y gastos hospitalarios">D01 Honorarios médicos, dentales y gastos hospitalarios</option>
                                <option value="D02 Gastos médicos por incapacidad o discapacidad">D02 Gastos médicos por incapacidad o discapacidad</option>
                                <option value="D03 Gastos funerales">D03 Gastos funerales</option>
                                <option value="D04 Donativos">D04 Donativos</option>
                                <option value="D05 Intereses reales efectivamente pagados por créditos hipotecarios (casa habitación)">D05 Intereses reales efectivamente pagados por créditos hipotecarios (casa habitación)</option>
                                <option value="D06 Aportaciones voluntarias al SAR">D06 Aportaciones voluntarias al SAR</option>
                                <option value="D07 Primas por seguros de gastos médicos">D07 Primas por seguros de gastos médicos</option>
                                <option value="D08 Gastos de transportación escolar obligatoria">D08 Gastos de transportación escolar obligatoria</option>
                                <option value="D09 Depósitos en cuentas para el ahorro, primas que tengan como base planes de pensiones">D09 Depósitos en cuentas para el ahorro, primas que tengan como base planes de pensiones</option>
                                <option value="D10 Pagos por servicios educativos (colegiaturas)">D10 Pagos por servicios educativos (colegiaturas)</option>
                                <option value="P01 Por definir">P01 Por definir</option>



                            </select>
                        </div>

                    </div>
                    <br>

                    <div class="row">
                        <div class="form-group col-xs-4">
                            <label>Método de pago</label>


                            <select name="metodo_pago" id="metodo_pago" class="form-control input-sm" >
                                <option  value="">Seleccciona una opción</option>
                                <OPTION VALUE="01-Eféctivo">01-Eféctivo</OPTION>
                                <OPTION VALUE="02-Cheque nominátivo">02-Cheque nominátivo</OPTION>
                                <OPTION VALUE="03-Transferencia electrónica de fondos">03-Transferencia electrónica de fondos</OPTION>
                                <OPTION VALUE="04-Tarjeta de crédito">04-Tarjeta de crédito</OPTION>
                                <OPTION VALUE="05-Monedero electrónico">05-Monedero electrónico</OPTION>
                                <OPTION VALUE="06-Dinero electrónico">06-Dinero electrónico</OPTION>
                                <OPTION VALUE="08-Vales de despensa">08-Vales de despensa</OPTION>
                                <OPTION VALUE="28-Tarjeta de débito">28-Tarjeta de débito</OPTION>
                                <OPTION VALUE="29-Tarjeta de servicio">29-Tarjeta de servicio</OPTION>
                                <OPTION VALUE="99-Otros">99-Otros</OPTION>

                            </select>

                        </div>

                        <div class="form-group col-xs-4">
                            <label for="nombre">Fecha visita</label>
                            <input min="2017-01-01" max="2025-12-31"min="2017-01-01" max="2025-12-31" id="a6" type="date" class="form-control input-sm"  name="fecha_visita" placeholder="Ingresa " d>
                        </div>


                        <div class="form-group col-xs-4">
                            <label for="nombre">Fecha seguimiento</label>
                            <input id="a6" min="2017-01-01" max="2025-12-31" type="date" class="form-control input-sm"  name="fecha_seguimiento" placeholder="Ingresa " d>
                        </div>

                    </div>

                    <br>
                    <div class="row">
                        <div class="form-group col-xs-4">
                            <label for="nombre">Golpes máquina por día</label>
                            <input id="golpes_maquina" onkeyup="mulVida_util_dias();
                                    mulPeriodo_Surtimiento();" type="number" class="form-control input-sm" name="golpes_maquina" placeholder="Ingresa los golpes de la máquina "  min="0" pattern="^[0-9]+" onpaste="return false;" onDrop="return false;" autocomplete=off>
                        </div>

                        <div class="form-group col-xs-4">
                            <label>Confirmación de Orden de Compra</label>


                            <select name="confirmacion_orden_compra" id="confirmacion_orden_compra" class="form-control input-sm">
                                <option  value="">Seleccciona una opción</option>
                                <OPTION VALUE="Consignación">Consignación</OPTION>
                                <OPTION VALUE="Orden de Compra">Orden de Compra</OPTION>
                                <OPTION VALUE="Sin Pedido">Sin Pedido</OPTION>
                                <!-- <OPTION VALUE="No Aplica">No Aplica</OPTION>-->

                            </select>

                        </div>


                    </div>

                    <br><br>

                    <div class="row">

                        <div class="form-group col-xs-3">
                            <tr>  Producto
                        </div>
                        <div class="form-group col-xs-3">
                            Código
                        </div>

                        <div class="form-group col-xs-3">
                            Cantidad por mes
                        </div>

                        <div class="form-group col-xs-3">
                            Punit(Precio Unitario)
                        </div>


                    </div>





                    <div class="row">

                        <div class="form-group col-xs-3">
                            Cuchilla
                        </div>
                        <div class="form-group col-xs-3">
                            <input id="codigo_cuchilla"  type="text" class="form-control input-sm"  name="codigo_cuchilla" placeholder="">
                        </div>

                        <div class="form-group col-xs-3">
                            <input id="cantidad_cuchilla" min="0" type="number" class="form-control input-sm"  name="cantidad_cuchilla" placeholder="">

                        </div>

                        <div class="form-group col-xs-3">
                            <input id="precio_cuchilla"  type="text" class="form-control input-sm"  name="precio_cuchilla" placeholder="">

                        </div>


                    </div>
                    
                    <div class="row">

                        <div class="form-group col-xs-3">
                            
                        </div>
                        <div class="form-group col-xs-3">
                            <input id="codigo_cuchilla_2"  type="text" class="form-control input-sm"  name="codigo_cuchilla_2" placeholder="">
                        </div>

                        <div class="form-group col-xs-3">
                            <input id="cantidad_cuchilla_2" type="number" min="0" class="form-control input-sm"  name="cantidad_cuchilla_2" placeholder="">

                        </div>

                        <div class="form-group col-xs-3">
                            <input id="precio_cuchilla_2"  type="text" class="form-control input-sm"  name="precio_cuchilla_2" placeholder="">

                        </div>


                    </div>
                    
                    
                    <div class="row">

                        <div class="form-group col-xs-3">
                            
                        </div>
                        <div class="form-group col-xs-3">
                            <input id="codigo_cuchilla_3"  type="text" class="form-control input-sm"  name="codigo_cuchilla_3" placeholder="">
                        </div>

                        <div class="form-group col-xs-3">
                            <input id="cantidad_cuchilla_3" type="number" min="0" class="form-control input-sm"  name="cantidad_cuchilla_3" placeholder="">

                        </div>

                        <div class="form-group col-xs-3">
                            <input id="precio_cuchilla_3"  type="text" class="form-control input-sm"  name="precio_cuchilla_3" placeholder="">

                        </div>


                    </div>
                    
                    
                    


<div class="row">

                        <div class="form-group col-xs-3">
                            
                        </div>
                        <div class="form-group col-xs-3">
                            <input id="codigo_cuchilla_4"  type="text" class="form-control input-sm"  name="codigo_cuchilla_4" placeholder="">
                        </div>

                        <div class="form-group col-xs-3">
                            <input id="cantidad_cuchilla_4" type="number" min="0" class="form-control input-sm"  name="cantidad_cuchilla_4" placeholder="">

                        </div>

                        <div class="form-group col-xs-3">
                            <input id="precio_cuchilla_4"  type="text" class="form-control input-sm"  name="precio_cuchilla_4" placeholder="">

                        </div>


                    </div>
                    
                    
                    
                    
                    
                    <div class="row">

                        <div class="form-group col-xs-3">
                            
                        </div>
                        <div class="form-group col-xs-3">
                            <input id="codigo_cuchilla_5"  type="text" class="form-control input-sm"  name="codigo_cuchilla_5" placeholder="">
                        </div>

                        <div class="form-group col-xs-3">
                            <input id="cantidad_cuchilla_5" type="number" min="0" class="form-control input-sm"  name="cantidad_cuchilla_5" placeholder="">

                        </div>

                        <div class="form-group col-xs-3">
                            <input id="precio_cuchilla_5"  type="text" class="form-control input-sm"  name="precio_cuchilla_5" placeholder="">

                        </div>


                    </div>

                    
                    
                    
                    <div class="row">

                        <div class="form-group col-xs-3">
                            
                        </div>
                        <div class="form-group col-xs-3">
                            <input id="codigo_cuchilla_6"  type="text" class="form-control input-sm"  name="codigo_cuchilla_6" placeholder="">
                        </div>

                        <div class="form-group col-xs-3">
                            <input id="cantidad_cuchilla_6" type="number" min="0" class="form-control input-sm"  name="cantidad_cuchilla_6" placeholder="">

                        </div>

                        <div class="form-group col-xs-3">
                            <input id="precio_cuchilla_6"  type="text" class="form-control input-sm"  name="precio_cuchilla_6" placeholder="">

                        </div>


                    </div>
                    
                    
                    
                    
                    
                    <div class="row">

                        <div class="form-group col-xs-3">
                            
                        </div>
                        <div class="form-group col-xs-3">
                            <input id="codigo_cuchilla_7"  type="text" class="form-control input-sm"  name="codigo_cuchilla_7" placeholder="">
                        </div>

                        <div class="form-group col-xs-3">
                            <input id="cantidad_cuchilla_7" type="number" min="0" class="form-control input-sm"  name="cantidad_cuchilla_7" placeholder="">

                        </div>

                        <div class="form-group col-xs-3">
                            <input id="precio_cuchilla_7"  type="text" class="form-control input-sm"  name="precio_cuchilla_7" placeholder="">

                        </div>


                    </div>



                    <div class="row">

                        <div class="form-group col-xs-3">
                            
                        </div>
                        <div class="form-group col-xs-3">
                            <input id="codigo_cuchilla_8"  type="text" class="form-control input-sm"  name="codigo_cuchilla_8" placeholder="">
                        </div>

                        <div class="form-group col-xs-3">
                            <input id="cantidad_cuchilla_8" type="number" min="0" class="form-control input-sm"  name="cantidad_cuchilla_8" placeholder="">

                        </div>

                        <div class="form-group col-xs-3">
                            <input id="precio_cuchilla_8"  type="text" class="form-control input-sm"  name="precio_cuchilla_8" placeholder="">

                        </div>


                    </div>
                    
                    
                    <div class="row">

                        <div class="form-group col-xs-3">
                            
                        </div>
                        <div class="form-group col-xs-3">
                            <input id="codigo_cuchilla_9"  type="text" class="form-control input-sm"  name="codigo_cuchilla_9" placeholder="">
                        </div>

                        <div class="form-group col-xs-3">
                            <input id="cantidad_cuchilla_9" type="number" min="0" class="form-control input-sm"  name="cantidad_cuchilla_9" placeholder="">

                        </div>

                        <div class="form-group col-xs-3">
                            <input id="precio_cuchilla_9"  type="text" class="form-control input-sm"  name="precio_cuchilla_9" placeholder="">

                        </div>


                    </div>
                    
                    
                    
                    <div class="row">

                        <div class="form-group col-xs-3">
                            
                        </div>
                        <div class="form-group col-xs-3">
                            <input id="codigo_cuchilla_10"  type="text" class="form-control input-sm"  name="codigo_cuchilla_10" placeholder="">
                        </div>

                        <div class="form-group col-xs-3">
                            <input id="cantidad_cuchilla_10" type="number" min="0" class="form-control input-sm"  name="cantidad_cuchilla_10" placeholder="">

                        </div>

                        <div class="form-group col-xs-3">
                            <input id="precio_cuchilla_10"  type="text" class="form-control input-sm"  name="precio_cuchilla_10" placeholder="">

                        </div>


                    </div>
                    
                    
                    
                    
                    <div class="row">

                        <div class="form-group col-xs-3">
                            
                        </div>
                        <div class="form-group col-xs-3">
                            <input id="codigo_cuchilla_11"  type="text" class="form-control input-sm"  name="codigo_cuchilla_11" placeholder="">
                        </div>

                        <div class="form-group col-xs-3">
                            <input id="cantidad_cuchilla_11" type="number" min="0" class="form-control input-sm"  name="cantidad_cuchilla_11" placeholder="">

                        </div>

                        <div class="form-group col-xs-3">
                             <input id="precio_cuchilla_11"  type="text" class="form-control input-sm"  name="precio_cuchilla_11" placeholder="">
                        </div>


                    </div>


                    
                    
                    
                    
                    

                    <div class="row">

                        <div class="form-group col-xs-3">
                            Cubierta
                        </div>
                        <div class="form-group col-xs-3">
                            <input id="codigo_cubierta"  type="text" class="form-control input-sm"  name="codigo_cubierta" placeholder="">
                        </div>

                        <div class="form-group col-xs-3">
                            <input id="cantidad_cubierta" type="number" min="0"
 class="form-control input-sm"  name="cantidad_cubierta" placeholder="">

                        </div>
                        <div class="form-group col-xs-3">
                            <input id="precio_cubierta"  type="text" class="form-control input-sm"  name="precio_cubierta" placeholder="">

                        </div>


                    </div>
                    
                    
                    
                    
                   



                    <div class="row">

                        <div class="form-group col-xs-3">
                            Llanta
                        </div>
                        <div class="form-group col-xs-3">
                            <input id="codigo_llanta" type="text" class="form-control input-sm"  name="codigo_llanta" placeholder="">
                        </div>

                        <div class="form-group col-xs-3">
                            <input id="cantidad_llanta" min="0" type="number" class="form-control input-sm"  name="cantidad_llanta" placeholder="">

                        </div>

                        <div class="form-group col-xs-3">
                            <input id="precio_llanta" type="text" class="form-control input-sm"  name="precio_llanta" placeholder="">

                        </div>


                    </div>


                    <div class="row">

                        <div class="form-group col-xs-3">
                            Rasqueta
                        </div>
                        <div class="form-group col-xs-3">
                            <input id="codigo_rasqueta"  type="text" class="form-control input-sm"  name="codigo_rasqueta" placeholder="">
                        </div>

                        <div class="form-group col-xs-3">
                            <input id="cantidad_rasqueta" min="0" type="number" class="form-control input-sm"  name="cantidad_rasqueta" placeholder="">

                        </div>

                        <div class="form-group col-xs-3">
                            <input id="precio_rasqueta" type="text" class="form-control input-sm"  name="precio_rasqueta" placeholder="">

                        </div>


                    </div>

                    <div class="row">

                        <div class="form-group col-xs-3">
                            Inserto
                        </div>
                        <div class="form-group col-xs-3">
                            <input id="codigo_inserto"  type="text" class="form-control input-sm"  name="codigo_inserto" placeholder="">
                        </div>

                        <div class="form-group col-xs-3">
                            <input id="cantidad_inserto" min="0" type="number" class="form-control input-sm"  name="cantidad_inserto" placeholder="">

                        </div>

                        <div class="form-group col-xs-3">
                            <input id="precio_inserto"  type="text" class="form-control input-sm"  name="precio_inserto" placeholder="">

                        </div>




                    </div>
                     <div class="row">

                        <div class="form-group col-xs-3">

                        </div>
                        <div class="form-group col-xs-3">
                            <input id="codigo_inserto_2"  type="text" class="form-control input-sm"  name="codigo_inserto_2" placeholder="">
                        </div>

                        <div class="form-group col-xs-3">
                            <input id="cantidad_inserto_2" min="0" type="number" class="form-control input-sm"  name="cantidad_inserto_2" placeholder="">

                        </div>

                        <div class="form-group col-xs-3">
                            <input id="precio_inserto_2"  type="text" class="form-control input-sm"  name="precio_inserto_2" placeholder="">

                        </div>




                    </div>

                    
                      
                      <div class="row">

                        <div class="form-group col-xs-3">
                            
                        </div>
                        <div class="form-group col-xs-3">
                            <input id="codigo_inserto_3"  type="text" class="form-control input-sm"  name="codigo_inserto_3" placeholder="">
                        </div>

                        <div class="form-group col-xs-3">
                            <input id="cantidad_inserto_3" min="0" type="number" class="form-control input-sm"  name="cantidad_inserto_3" placeholder="">

                        </div>

                        <div class="form-group col-xs-3">
                            <input id="precio_inserto_3"  type="text" class="form-control input-sm"  name="precio_inserto_3" placeholder="">

                        </div>
                         
                         


                    </div>


                    <div class="row">

                        <div class="form-group col-xs-3">

                        </div>
                        <div class="form-group col-xs-3">
                            <input id="codigo_inserto_4"  type="text" class="form-control input-sm"  name="codigo_inserto_4" placeholder="">
                        </div>

                        <div class="form-group col-xs-3">
                            <input id="cantidad_inserto_4" min="0" type="number" class="form-control input-sm"  name="cantidad_inserto_4" placeholder="">

                        </div>

                        <div class="form-group col-xs-3">
                            <input id="precio_inserto_4"  type="text" class="form-control input-sm"  name="precio_inserto_4" placeholder="">

                        </div>




                    </div>

                    
                  


                    <input id="fecha_ultima_factura" type="hidden" class="form-control input-sm" name="fecha_ultima_factura">

                    <input id="consumo_real" type="hidden" class="form-control input-sm" name="consumo_real">
                    <input id="consumo_real" type="hidden" class="form-control input-sm" name="archivo">





                </div>
                </div>
            </center>


            <BR>
            <center>


                <input class="btn btn-success" type="submit" onclick="Validate();
                        ValidaGrupo()"  title="Da clic para guardar los datos" value="Guardar" data-toggle="tooltip" data-placement="right">



                <a title="Da clic para regresar" href="javascript:window.history.go(-1);"class="btn btn-danger">Cancelar</a>

            </center>
    </div>

</form>

</div> 

</body>

</html> 
