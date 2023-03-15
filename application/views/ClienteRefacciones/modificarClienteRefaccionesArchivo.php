Actualizar datos<html lang="es">
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
    

        <!-- Bootstrap -->

        <?php
        //check user level
        $dataLevel = $this->userlevel->checkLevel($role);


        //check user level
        ?>

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
    </head>
    <body>
        <div class="container" style="margin-top:1px;"

            <form name="formulario" id="formal" role="form"  action="<?= base_url() ?>ClienteRefacciones/updatedata" method="post" enctype="multipart/form-data" align="center">

                <MARQUEE SCROLLDELAY =200></MARQUEE>

                <table class="table table-bordered table-striped" sTYLE="table-layout:fixed">
                    <tbody>

                    <form name="formulario" id="formal" role="form" action="<?= base_url() ?>ClienteRefacciones/updatedata" method="post" enctype="multipart/form-data" align="center">

           <!-- <form name="formulario" id="formal" role="form" action="<?= base_url('ClienteRefacciones/clienteRefaccionesModificar') ?>" method="post" align="center">-->
                        <h1>Actualizar datos</h1>
                        <MARQUEE SCROLLDELAY =200>Actualizando sus datos</MARQUEE>
                        <div class="container" >
                            <table class="table table-bordered table-striped">
                                <tbody>

                                    <tr>
                                        <td>Grupo1</td>
                                        <td> <select id="a3" class="form-control" name="grupo"   <?php echo form_dropdown('grupoCombo', $grupoCombo, $data->grupo, '#', 'id="grupoCombo"'); ?> </select></td>
                                    </tr>
                                    <tr>
                                        <td>Cliente</td>
                                        <td> <select id="a3" class="form-control" name="cliente"   <?php echo form_dropdown('clienteCombo', $clienteCombo, $data->cliente, '#', 'id="clienteCombo"'); ?> </select></td>
                                    </tr>

                                    <tr>
                                        <td>Código</td>
                                        <td> <select id="a3" class="form-control" name="referencia" onmouseout="habilitar(this.form)" <?php echo form_dropdown('options', $options, $data->referencia, '#', 'id="options"'); ?> </select></td>
                                    </tr>
                                    <tr>
                                        <td>Cantidad máxima</td>
                                        <td><input  id="div_cantidad_maxima" onkeyup="divJuegosMensuales();
                                    mulPeriodo_Surtimiento();" class="form-control" type="number"  autofocus name="cantidad_maxima" value="<?= $data->cantidad_maxima ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Precio unitario</td>
                                        <td><input id="mulprecio_unitario" onkeyup="multCostoJuego();"  class="form-control" type="number"  autofocus name="precio_unitario" value="<?= $data->precio_unitario ?>" ></td>
                                    </tr>
                                    <tr>
                                        <td>Vida Util en Dias</td>
                                        <td><input id="res_vida_util_dias"  style="background-color:#03E7F7;" min="0" title="Campo AutoCompletable" readonly="readonly" class="form-control" type="text"  autofocus name="vida_util_dias" value="<?= $data->vida_util_dias ?>" ></td>
                                    </tr>
                                    <tr>
                                        <td>Periodo surtimiento</td>
                                        <td>
                                            <SELECT name="periodo_surtimiento" id="periodo_surtimiento" class="form-control input-sm"> 
                                                <optgroup label="Selecciona una opción">
                                                    <option value="Semanal" <?php
                                                    if ($data->periodo_surtimiento == "Semanal") {
                                                        echo "Selected";
                                                    }
                                                    ?>>Semanal</option>
                                                    <option value="Quincenal" <?php
                                                    if ($data->periodo_surtimiento == "Quincenal") {
                                                        echo "Selected";
                                                    }
                                                    ?>>Quincenal</option>
                                                    <option value="Mensual" <?php
                                                    if ($data->periodo_surtimiento == "Mensual") {
                                                        echo "Selected";
                                                    }
                                                    ?>>Mensual</option>
                                                    <option value="Bimestral" <?php
                                                    if ($data->periodo_surtimiento == "Bimestral") {
                                                        echo "Selected";
                                                    }
                                                    ?>>Bimestral</option>
                                                    <option value="Trimestral" <?php
                                                    if ($data->periodo_surtimiento == "Trimestral") {
                                                        echo "Selected";
                                                    }
                                                    ?>>Trimestral</option>
                                                    <option value="Semestral" <?php
                                                    if ($data->periodo_surtimiento == "Semestral") {
                                                        echo "Selected";
                                                    }
                                                    ?>>Semestral</option>
                                                    <option value="Anual" <?php
                                                    if ($data->periodo_surtimiento == "Anual") {
                                                        echo "Selected";
                                                    }
                                                    ?>>Anual</option>
                                                </optgroup>
                                            </SELECT>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Periodo Surtimiento en Vida Util</td>
                                        <td><input id="res_periodo_surtiemiento" class="form-control" min="0" title="Campo AutoCompletable"  type="text" min="0" style="background-color:#03E7F7;" readonly="readonly" autofocus name="periodo_surtimiento_vida_util" value="<?= $data->periodo_surtimiento_vida_util ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Cantidad mínima</td>
                                        <td><input id="cantidad_minima" class="form-control" type="number"  autofocus name="cantidad_minima" value="<?= $data->cantidad_minima ?>"></td>
                                    </tr>


                                    <tr>
                                        <td>Paqueteria</td>

                                        <td>
                                            <SELECT name="paqueteria" id="paqueteria" class="form-control input-sm"> 
                                                <optgroup label="Selecciona una opción">

                                                    <option value="Tres guerras" <?php
                                                    if ($data->paqueteria == "Tres guerras") {
                                                        echo "Selected";
                                                    }
                                                    ?>>Tres guerras</option>
                                                    <option value="Paquete Express" <?php
                                                    if ($data->paqueteria == "Paquete Express") {
                                                        echo "Selected";
                                                    }
                                                    ?>>Paquete Express</option>
                                                    <option value="Estafeta" <?php
                                                    if ($data->paqueteria == "Estafeta") {
                                                        echo "Selected";
                                                    }
                                                    ?>>Estafeta</option>
                                                    <option value="Flecha Amarilla" <?php
                                                    if ($data->paqueteria == "Flecha Amarilla") {
                                                        echo "Selected";
                                                    }
                                                    ?>>Flecha Amarilla</option>
                                                    <option value="Almex" <?php
                                                    if ($data->paqueteria == "Almex") {
                                                        echo "Selected";
                                                    }
                                                    ?>>Almex</option>
                                                </optgroup>
                                            </SELECT>
                                        </td>


                                    </tr>

                                    <tr>
                                        <td>Tipo entrega</td>

                                        <td>
                                            <SELECT name="tipo_entrega" id="tipo_entrega" class="form-control input-sm"> 
                                                <optgroup label="Selecciona una opción">

                                                    <option value="Domicilio prepagado" <?php
                                                    if ($data->tipo_entrega == "Domicilio prepagado") {
                                                        echo "Selected";
                                                    }
                                                    ?>>Domicilio prepagado</option>
                                                    <option value="Domicilio por cobrar" <?php
                                                    if ($data->tipo_entrega == "Domicilio por cobrar") {
                                                        echo "Selected";
                                                    }
                                                    ?>>Domicilio por cobrar</option>
                                                </optgroup>
                                            </SELECT>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Dias crédito</td>

                                        <td>
                                            <SELECT name="dias_credito" id="dias_credito" class="form-control input-sm"> 
                                                <optgroup label="Selecciona una opción">


                                                    <option value="Ninguno" <?php
                                                    if ($data->dias_credito == "Ninguno") {
                                                        echo "Selected";
                                                    }
                                                    ?>>Ninguno</option>
                                                    <option value="15" <?php
                                                    if ($data->dias_credito == "15") {
                                                        echo "Selected";
                                                    }
                                                    ?>>15</option>
                                                    <option value="20" <?php
                                                    if ($data->dias_credito == "20") {
                                                        echo "Selected";
                                                    }
                                                    ?>>20</option>
                                                    <option value="30" <?php
                                                    if ($data->dias_credito == "30") {
                                                        echo "Selected";
                                                    }
                                                    ?>>30</option>
                                                    <option value="60" <?php
                                                    if ($data->dias_credito == "60") {
                                                        echo "Selected";
                                                    }
                                                    ?>>60</option>
                                                    <option value="90" <?php
                                                    if ($data->dias_credito == "90") {
                                                        echo "Selected";
                                                    }
                                                    ?>>90</option>




                                                </optgroup>
                                            </SELECT>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Pulgadas</td>
                                        <td><input id="pulgadas" onkeyup="ConvertirPulgadasAMilimetros();" class="form-control" type="number"  autofocus name="pulgadas" value="<?= $data->pulgadas ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Diametro de Rodillo en Milimetros</td>
                                        <td><input id="milimetros" class="form-control" type="text" readonly="readonly" min="0" style="background-color:#03E7F7;" title="Campo AutoCompletable"  autofocus name="diametro_rod_ml" value="<?= $data->diametro_rod_ml ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Máquina cliente</td>
                                        <td><input id="a1" class="form-control" type="text"  autofocus name="maquina_cliente" value="<?= $data->maquina_cliente ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Capacitación</td>
                                        <td><input id="capacitacion" class="form-control" type="range"  autofocus name="capacitacion">  <span id="temp"><?= $data->capacitacion ?></span>%</td>
                                    </tr>
                                    <tr>
                                        <td>Capacitación fecha</td>
                                        <td><input id="capacitacion_fecha" class="form-control" type="date"  autofocus name="capacitacion_fecha" value="<?= $data->capacitacion_fecha ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Piezas por juego</td>
                                        <td><input id="mulpiezas_juego"  onkeyup="multCostoJuego();
                                    divJuegosMensuales();
                                    mulPeriodo_Surtimiento();" class="form-control" type="number"  autofocus name="piezas_juego" value="<?= $data->piezas_juego ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Costo juego</td>
                                        <td><input id="res_costo_juego" title="Campo AutoCompetable" onkeyup="divPrecio_golpe();"  readonly="readonly" style="background-color:#03E7F7;"  class="form-control" type="text"  autofocus name="costo_juego" value="<?= $data->costo_juego ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Juego mensuales</td>
                                        <td><input id="res_juegos_mensuales" title="Campo AutoCompetable" class="form-control" type="text"  readonly="readonly" style="background-color:#03E7F7;"  autofocus name="juego_mensuales" value="<?= $data->juego_mensuales ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Golpes prom comp</td>
                                        <td><input id="ope_golpes_prom_comp" onkeyup="opeBeneficioGolpes();" class="form-control" type="number"  autofocus name="golpes_prom_comp" value="<?= $data->golpes_prom_comp ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Golpes prom rodicut</td>
                                        <td><input  id="ope_golpes_prom_rodicut" onkeyup="opeBeneficioGolpes();
                                    divPrecio_golpe();" class="form-control" type="number"  autofocus name="golpes_prom_rodicut" value="<?= $data->golpes_prom_rodicut ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Beneficio golpes prom</td>
                                        <td><input id="res_beneficio_golpes" title="Campo AutoCompetable" readonly="readonly" class="form-control" type="text"  readonly="readonly" style="background-color:#03E7F7;"  accept="" autofocus name="beneficio_golpes_prom" value="<?= $data->beneficio_golpes_prom ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Tiempo rot com</td>
                                        <td><input id="ope_tiempo_rot_com" onkeyup="opeBeneficioRotacion();" class="form-control" type="number"  autofocus name="tiempo_rot_com" value="<?= $data->tiempo_rot_com ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Tiempo rot rodicut</td>
                                        <td><input id="ope_tiempo_rot_rodicut" onkeyup="opeBeneficioRotacion();"class="form-control" type="number"  autofocus name="tiempo_rot_rodicut" value="<?= $data->tiempo_rot_rodicut ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Beneficio rot prom</td>
                                        <td><input id="res_beneficio_rot_prom" title="Campo AutoCompetable"  readonly="readonly" style="background-color:#03E7F7;" class="form-control" type="text"  autofocus name="beneficio_rot_prom" value="<?= $data->beneficio_rot_prom ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Precio golpe</td>
                                        <td><input id="res_precio_golpe" class="form-control" type="text"  title="Campo AutoCompetable" readonly="readonly" style="background-color:#03E7F7;"  autofocus name="precio_golpe" value="<?= $data->precio_golpe ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Ciudad / planta</td>
                                        <td><input id="a1" class="form-control" type="text"  autofocus name="ciudad_planta" value="<?= $data->ciudad_planta ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Observación</td>
                                        <td><input id="a1" class="form-control" type="text"  autofocus name="observacion" value="<?= $data->observacion ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Marca de la máquina</td>
                                        <td>

<!-- <input id="a1" class="form-control" type="text"  autofocus name="marca_maquina" value="<?= $data->marca_maquina ?>">-->



                                            <SELECT name="marca_maquina" class="form-control input-sm"> 
                                                <optgroup label="Selecciona una opción">

                                                    <option value="CURIONI" <?php if ($data->marca_maquina == "CURIONI") {
                                                        echo "Selected";
                                                    } ?>>CURIONI</option>
                                                    <option value="HOPPER" <?php if ($data->marca_maquina == "HOPPER") {
                                                        echo "Selected";
                                                    } ?>>HOPPER</option>
                                                    <option value="LANGSTON" <?php if ($data->marca_maquina == "LANGSTON") {
                                                        echo "Selected";
                                                    } ?>>LANGSTON</option>
                                                    <option value="LATITUD" <?php if ($data->marca_maquina == "LATITUD") {
                                                        echo "Selected";
                                                    } ?>>LATITUD</option>
                                                    <option value="MARTIN" <?php if ($data->marca_maquina == "MARTIN") {
                                                        echo "Selected";
                                                    } ?>>MARTIN</option>
                                                    <option value="SMARTBOX" <?php if ($data->marca_maquina == "SMARTBOX") {
                                                        echo "Selected";
                                                    } ?>>SMARTBOX</option>
                                                    <option value="STALEY" <?php if ($data->marca_maquina == "STALEY") {
                                                        echo "Selected";
                                                    } ?>>STALEY</option>
                                                    <option value="TECASA" <?php if ($data->marca_maquina == "TECASA") {
                                                        echo "Selected";
                                                    } ?>>TECASA</option>
                                                    <option value="WARD" <?php if ($data->marca_maquina == "WARD") {
                                                        echo "Selected";
                                                    } ?>>WARD</option>
                                                    <option value="WARD III" <?php if ($data->marca_maquina == "WARD III") {
                                                        echo "Selected";
                                                    } ?>>WARD III</option>
                                                    <option value="WARD IV" <?php if ($data->marca_maquina == "WARD IV") {
                                                        echo "Selected";
                                                    } ?>>WARD IV</option>
                                                    <option value="WARD V" <?php if ($data->marca_maquina == "WARD V") {
                                                        echo "Selected";
                                                    } ?>>WARD V</option>


                                                </optgroup>
                                            </SELECT>











                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Modelo de la máquina</td>
                                        <td>
                                           <!-- <input id="a1" class="form-control" type="text"  autofocus name="contacto" value="<?= $contacto ?>">-->

                                            <SELECT name="contacto" class="form-control input-sm"> 
                                                <optgroup label="Selecciona una opción">
                                                    <option value="DRO" <?php if ($data->contacto == "DRO") {
                                                        echo "Selected";
                                                    } ?>>DRO</option>
                                                    <option value="DRO  NT/ RS" <?php if ($data->contacto == "DRO  NT/ RS") {
                                                        echo "Selected";
                                                    } ?>>DRO  NT/ RS</option>
                                                    <option value="DRO NT" <?php if ($data->contacto == "DRO NT") {
                                                        echo "Selected";
                                                    } ?>>DRO NT</option>
                                                    <!--<option value="FFG" <?php if ($data->contacto == "FFG") {
                                                        echo "Selected";
                                                    } ?>>FFG</option>-->
                                                    <option value="FFG Midline" <?php if ($data->contacto == "FFG Midline") {
                                                        echo "Selected";
                                                    } ?>>FFG Midline</option>
                                                    <option value="FFG Transline" <?php if ($data->contacto == "FFG Transline") {
                                                        echo "Selected";
                                                    } ?>>FFG Transline</option>
                                                    <!-- <option value="FRDC" <?php if ($data->contacto == "FRDC") {
                                                        echo "Selected";
                                                    } ?>>FRDC</option>-->
                                                    <option value="LANGSTON" <?php if ($data->contacto == "LANGSTON") {
                                                        echo "Selected";
                                                    } ?>>LANGSTON</option>
                                                    <option value="Midline NT/ RS" <?php if ($data->contacto == "Midline NT/ RS") {
                                                        echo "Selected";
                                                    } ?>>Midline NT/ RS</option>
                                                    <option value="Miniline" <?php if ($data->contacto == "Miniline") {
                                                        echo "Selected";
                                                    } ?>>Miniline</option>
                                                    <option value="Miniline RS" <?php if ($data->contacto == "Miniline RS") {
                                                        echo "Selected";
                                                    } ?>>Miniline RS</option>
                                                    <option value="SR-PACK" <?php if ($data->contacto == "SR-PACK") {
                                                        echo "Selected";
                                                    } ?>>SR-PACK</option>
                                                    <option value="TECASA" <?php if ($data->contacto == "TECASA") {
                                                        echo "Selected";
                                                    } ?>>TECASA</option>
                                                    <option value="Transline" <?php if ($data->contacto == "Transline") {
                                                        echo "Selected";
                                                    } ?>>Transline</option>
                                                    <option value="Transline RS" <?php if ($data->contacto == "Transline RS") {
                                                        echo "Selected";
                                                    } ?>>Transline RS</option>
                                                    <option value="Transline NT/ RS" <?php if ($data->contacto == "Transline NT/ RS") {
                                                        echo "Selected";
                                                    } ?>>Transline NT/ RS</option>




                                                </optgroup>
                                            </SELECT>


                                        </td>
                                    </tr>



                                    <tr>
                                        <td>Tipo de máquina</td>
                                        <td>


                                            <SELECT name="tipo_maquina" class="form-control input-sm"> 
                                                <optgroup label="Selecciona una opción">

                                                    <option value="" <?php if ($data->tipo_maquina == "") {
                                                        echo "Selected";
                                                    } ?>></option>                    
                                                    <option value="FFG" <?php if ($data->tipo_maquina == "FFG") {
                                                        echo "Selected";
                                                    } ?>>FFG</option>
                                                    <option value="FRDC" <?php if ($data->tipo_maquina == "FRDC") {
                                                        echo "Selected";
                                                    } ?>>FRDC</option>
                                                    <option value="RDC" <?php if ($data->tipo_maquina == "RDC") {
                                                        echo "Selected";
                                                    } ?>>RDC</option>

                                                    <!-- <option value="616" <?php if ($tipo_maquina == "616") {
                                                                                                            echo "Selected";
                                                                                                        } ?>>616</option>
                                                    <option value="618" <?php if ($tipo_maquina == "618") {
                                                                                                            echo "Selected";
                                                                                                        } ?>>618</option>
                                                    <option value="920" <?php if ($tipo_maquina == "920") {
                                                                                                            echo "Selected";
                                                                                                        } ?>>920</option>
                                                    <option value="924" <?php if ($tipo_maquina == "924") {
                                                                                                            echo "Selected";
                                                                                                        } ?>>924</option>
                                                    <option value="1228" <?php if ($tipo_maquina == "1228") {
                                                                                                            echo "Selected";
                                                                                                        } ?>>1228</option>
                                                    <option value="1628" <?php if ($tipo_maquina == "1628") {
                                                                                                            echo "Selected";
                                                                                                        } ?>>1628</option>
                                                    <option value="J4500" <?php if ($tipo_maquina == "J4500") {
                                                                                                            echo "Selected";
                                                                                                        } ?>>J4500</option>
                                                    <option value="1224" <?php if ($tipo_maquina == "1224") {
                                                                                                            echo "Selected";
                                                                                                        } ?>>1224</option>
                                                    <option value="TBC" <?php if ($tipo_maquina == "TBC") {
                                                                                                                    echo "Selected";
                                                                                                                } ?>>TBC</option>-->
                                                                                                </SELECT>
                                        </td>
                                    </tr>









                                    <tr>
                                        <td>Formato</td>
                                        <td>


                                            <SELECT name="formato" class="form-control input-sm"> 


                                                <option value="" <?php if ($data->formato == "") {
                                                                echo "Selected";
                                                            } ?>>Selecciona una opción</option>             
                                                <option value="616" <?php if ($data->formato == "616") {
                                                        echo "Selected";
                                                    } ?>>616</option>
                                                <option value="618" <?php if ($data->formato == "618") {
                                                                echo "Selected";
                                                            } ?>>618</option>
                                                <option value="920" <?php if ($data->formato == "920") {
                                                        echo "Selected";
                                                    } ?>>920</option>
                                                <option value="924" <?php if ($data->formato == "924") {
                                                        echo "Selected";
                                                    } ?>>924</option>
                                                <option value="1228" <?php if ($data->formato == "1228") {
                                                        echo "Selected";
                                                    } ?>>1228</option>
                                                <option value="1624" <?php if ($data->formato == "1624") {
                                                        echo "Selected";
                                                    } ?>>1624</option>
                                                <option value="1628" <?php if ($data->formato == "1628") {
                                                                echo "Selected";
                                                            } ?>>1628</option>
                                                <option value="J4500" <?php if ($data->formato == "J4500") {
                                                        echo "Selected";
                                                    } ?>>J4500</option>
                                                <option value="1224" <?php if ($data->formato == "1224") {
                                                        echo "Selected";
                                                    } ?>>1224</option>
                                                <option value="TBC" <?php if ($data->formato == "TBC") {
                                                        echo "Selected";
                                                    } ?>>TBC</option>
                                            </SELECT>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Ancho</td>
                                        <td>


                                            <SELECT name="ancho" class="form-control input-sm"> 
                                                <optgroup label="Selecciona una opción">
                                                    <option value="" <?php if ($data->ancho == "") {
                                                        echo "Selected";
                                                    } ?>>Selecciona una opción</option>

                                                    <option value="2800 mm" <?php if ($data->ancho == "2800 mm") {
                                                        echo "Selected";
                                                    } ?>>2800 mm</option>
                                                    <option value="2400 mm" <?php if ($data->ancho == "2400 mm") {
                                                                echo "Selected";
                                                            } ?>>2400 mm</option>
                                                    <option value="2000 mm" <?php if ($data->ancho == "2000 mm") {
                                                        echo "Selected";
                                                    } ?>>2000 mm</option>
                                                    <option value="3000 mm" <?php if ($data->ancho == "3000 mm") {
                                                        echo "Selected";
                                                    } ?>>3000 mm</option>
                                                    <option value='2032 mm 80" inch' <?php if ($data->ancho == '2032 mm 80" inch') {
                                                        echo "Selected";
                                                    } ?>>2032 mm 80" inch</option>
                                                    <option value='3302 mm 130" inch' <?php if ($data->ancho == '3302 mm 130" inch') {
                                                        echo "Selected";
                                                    } ?>>3302 mm 130" inch</option>
                                                    <option value='2800 mm 114" inch' <?php if ($data->ancho == '2800 mm 114" inch') {
                                                                echo "Selected";
                                                            } ?>>2800 mm 114" inch</option>
                                                    <option value='3000 mm 125" inch' <?php if ($data->ancho == '3000 mm 125" inch') {
                                                        echo "Selected";
                                                    } ?>>3000 mm 125" inch</option>
                                                    <option value="TBC" <?php if ($data->ancho == "TBC") {
                                                        echo "Selected";
                                                    } ?>>TBC</option>
                                                    <option value="1800 mm" <?php if ($data->ancho == "1800 mm") {
                                                        echo "Selected";
                                                    } ?>>1800 mm</option>
                                                    <option value="2000 mm80" <?php if ($data->ancho == "2000 mm80") {
                                                        echo "Selected";
                                                    } ?>>2000 mm80</option>
                                                    <option value='110" inch' <?php if ($data->ancho == "1800 mm") {
                                                                echo "Selected";
                                                            } ?>>1800 mm</option>
                                                    <option value='100" inch' <?php if ($data->ancho == '100" inch') {
                                                        echo "Selected";
                                                    } ?>>100" inch</option>
                                                    <option value="'2800 mm 113' inch"  <?php if ($data->ancho == '2800 mm 113" inch') {
                                                        echo "Selected";
                                                    } ?>>2800 mm 113" inch</option>
                                                    <option value="1600 mm" <?php if ($data->ancho == "1600 mm") {
                                                        echo "Selected";
                                                    } ?>>1600 mm</option>
                                            </SELECT>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>Troquel</td>
                                        <td>
                                            <SELECT name="troquel" class="form-control input-sm"> 
                                                <optgroup label="Selecciona una opción">
                                                    <option value="Si" <?php
                                                    if ($data->troquel == "Si") {
                                                        echo "Selected";
                                                    }
                                                    ?>>Si</option>
                                                    <option value="No" <?php
                                                    if ($data->troquel == "No") {
                                                        echo "Selected";
                                                    }
                                                    ?>>No</option>
                                                </optgroup>
                                            </SELECT>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td>Uso de cfdi</td>

                                        <td>
                                            <SELECT name="uso_de_cfdi" id="uso_de_cfdi" class="form-control input-sm"> 
                                                <optgroup label="Selecciona una opción">


                                                    <option value="G01 Adquisión de mercancías" <?php
                                                    if ($data->uso_de_cfdi == "G01 Adquisión de mercancías") {
                                                        echo "Selected";
                                                    }
                                                    ?>>G01 Adquisión de mercancías</option>
                                                    <option value="G02 Devolución, descuentos o bonificaciones" <?php
                                                    if ($data->uso_de_cfdi == "G02 Devolución, descuentos o bonificaciones") {
                                                        echo "Selected";
                                                    }
                                                    ?>>G02 Devolución, descuentos o bonificaciones</option>
                                                    <option value="G03 Gastos en general" <?php
                                                    if ($data->uso_de_cfdi == "G03 Gastos en general") {
                                                        echo "Selected";
                                                    }
                                                    ?>>G03 Gastos en general</option>
                                                    <option value="I01 Construcciones" <?php
                                                    if ($data->uso_de_cfdi == "I01 Construcciones") {
                                                        echo "Selected";
                                                    }
                                                    ?>>I01 Construcciones</option>
                                                    <option value="I02 Mobiliario y equipo de oficina por inversiones" <?php
                                                    if ($data->uso_de_cfdi == "I02 Mobiliario y equipo de oficina por inversiones") {
                                                        echo "Selected";
                                                    }
                                                    ?>>I02 Mobiliario y equipo de oficina por inversiones</option>
                                                    <option value="I03 Equipo de transporte" <?php
                                                    if ($data->uso_de_cfdi == "I03 Equipo de transporte") {
                                                        echo "Selected";
                                                    }
                                                    ?>>I03 Equipo de transporte</option>
                                                    <option value="I04 Equipo de cómputo y accesorios" <?php
                                                    if ($data->uso_de_cfdi == "I04 Equipo de cómputo y accesorios") {
                                                        echo "Selected";
                                                    }
                                                    ?>>I04 Equipo de cómputo y accesorios</option>
                                                    <option value="I05 Dados, troqueles, moldes, matrices y herramental" <?php
                                                    if ($data->uso_de_cfdi == "I05 Dados, troqueles, moldes, matrices y herramental") {
                                                        echo "Selected";
                                                    }
                                                    ?>>I05 Dados, troqueles, moldes, matrices y herramental</option>
                                                    <option value="I06 Comunicaciones telefónicas" <?php
                                                    if ($data->uso_de_cfdi == "I06 Comunicaciones telefónicas") {
                                                        echo "Selected";
                                                    }
                                                    ?>>I06 Comunicaciones telefónicas</option>
                                                    <option value="I07 Comunicaciones satelitales" <?php
                                                    if ($data->uso_de_cfdi == "I07 Comunicaciones satelitales") {
                                                        echo "Selected";
                                                    }
                                                    ?>>I07 Comunicaciones satelitales</option>
                                                    <option value="I08 Otra maquinaria y equipo" <?php
                                                   if ($data->uso_de_cfdi == "I08 Otra maquinaria y equipo") {
                                                       echo "Selected";
                                                   }
                                                   ?>>I08 Otra maquinaria y equipo</option>
                                                    <option value="D01 Honorarios médicos, dentales y gastos hospitalarios" <?php
                                                   if ($data->uso_de_cfdi == "D01 Honorarios médicos, dentales y gastos hospitalarios") {
                                                       echo "Selected";
                                                   }
                                                   ?>>D01 Honorarios médicos, dentales y gastos hospitalarios</option>
                                                    <option value="D02 Gastos médicos por incapacidad o discapacidad" <?php
                                                    if ($data->uso_de_cfdi == "D02 Gastos médicos por incapacidad o discapacidad") {
                                                        echo "Selected";
                                                    }
                                                    ?>>D02 Gastos médicos por incapacidad o discapacidad</option>
                                                    <option value="D03 Gastos funerales" <?php
                                                    if ($data->uso_de_cfdi == "D03 Gastos funerales") {
                                                        echo "Selected";
                                                    }
                                                    ?>>D03 Gastos funerales</option>
                                                    <option value="D04 Donativos" <?php
                                                    if ($data->uso_de_cfdi == "D04 Donativos") {
                                                        echo "Selected";
                                                    }
                                                    ?>>D04 Donativos</option>
                                                    <option value="D05 Intereses reales efectivamente pagados por créditos hipotecarios (casa habitación)" <?php
                                                    if ($data->uso_de_cfdi == "D05 Intereses reales efectivamente pagados por créditos hipotecarios (casa habitación)") {
                                                        echo "Selected";
                                                    }
                                                    ?>>D05 Intereses reales efectivamente pagados por créditos hipotecarios (casa habitación)</option>
                                                    <option value="D06 Aportaciones voluntarias al SAR" <?php
                                                    if ($data->uso_de_cfdi == "D05 Intereses reales efectivamente pagados por créditos hipotecarios (casa habitación)") {
                                                        echo "Selected";
                                                    }
                                                    ?>>D05 Intereses reales efectivamente pagados por créditos hipotecarios (casa habitación)</option>
                                                    <option value="D07 Primas por seguros de gastos médicos" <?php
                                                    if ($data->uso_de_cfdi == "D07 Primas por seguros de gastos médicos") {
                                                        echo "Selected";
                                                    }
                                                    ?>>D07 Primas por seguros de gastos médicos</option>
                                                    <option value="D08 Gastos de transportación escolar obligatoria " <?php
                                if ($data->uso_de_cfdi == "D08 Gastos de transportación escolar obligatoria ") {
                                    echo "Selected";
                                }
                                ?>>D08 Gastos de transportación escolar obligatoria</option>
                                                    <option value="D09 Depósitos en cuentas para el ahorro, primas que tengan como base planes de pensiones" <?php
                                if ($data->uso_de_cfdi == "D09 Depósitos en cuentas para el ahorro, primas que tengan como base planes de pensiones") {
                                    echo "Selected";
                                }
                                ?>>D09 Depósitos en cuentas para el ahorro, primas que tengan como base planes de pensiones</option>
                                                    <option value="D10 Pagos por servicios educativos (colegiaturas" <?php
                                if ($data->uso_de_cfdi == "D10 Pagos por servicios educativos (colegiaturas") {
                                    echo "Selected";
                                }
                                ?>>D10 Pagos por servicios educativos (colegiaturas</option>
                                                    <option value="P01 Por definir" <?php
                                if ($data->uso_de_cfdi == "P01 Por definir") {
                                    echo "Selected";
                                }
                                ?>>P01 Por definir</option>
                                                </optgroup>
                                            </SELECT>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Método de pago</td>

                                        <td>
                                            <SELECT name="metodo_pago" id="metodo_pago" class="form-control input-sm"> 
                                                <optgroup label="Selecciona una opción">


                                                    <option value="01-Efectivo" <?php
                                if ($data->metodo_pago == "01-Efectivo") {
                                    echo "Selected";
                                }
                                ?>>01-Efectivo</option>
                                                    <option value="02-Cheque nominátivo" <?php
                                if ($data->metodo_pago == "02-Cheque nominátivo") {
                                    echo "Selected";
                                }
                                ?>>02-Cheque nominátivo</option>
                                                    <option value="03-Transferencia electrónica de fondos" <?php
                                if ($data->metodo_pago == "03-Transferencia electrónica de fondos") {
                                    echo "Selected";
                                }
                                ?>>03-Transferencia electrónica de fondos</option>
                                                    <option value="04-Tarjeta de crédito" <?php
                                if ($data->metodo_pago == "04-Tarjeta de crédito") {
                                    echo "Selected";
                                }
                                ?>>04-Tarjeta de crédito</option>
                                                    <option value="05-Monedero electrónico" <?php
                                if ($data->metodo_pago == "05-Monedero electrónico") {
                                    echo "Selected";
                                }
                                ?>>05-Monedero electrónico</option>
                                                    <option value="06-Dinero electrónico" <?php
                                if ($data->metodo_pago == "06-Dinero electrónico") {
                                    echo "Selected";
                                }
                                ?>>06-Dinero electrónico</option>
                                                    <option value="08-Vales de despensa" <?php
                                if ($data->metodo_pago == "08-Vales de despensa") {
                                    echo "Selected";
                                }
                                ?>>08-Vales de despensa</option>
                                                    <option value="28-Tarjeta de débito" <?php
                                if ($data->metodo_pago == "28-Tarjeta de débito") {
                                    echo "Selected";
                                }
                                ?>>28-Tarjeta de débito</option>
                                                    <option value="29-Tarjeta de servicio" <?php
                                if ($data->metodo_pago == "29-Tarjeta de servicio") {
                                    echo "Selected";
                                }
                                ?>>29-Tarjeta de servicio</option>
                                                    <option value="99-Otros" <?php
                                if ($data->metodo_pago == "99-Otros") {
                                    echo "Selected";
                                }
                                ?>>99-Otros</option>
                                                </optgroup>
                                            </SELECT>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Fecha visita</td>
                                        <td><input id="a1" class="form-control" type="date"  autofocus name="fecha_visita" value="<?= $data->fecha_visita ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Fecha seguimiento</td>
                                        <td><input id="a1" class="form-control" type="date"  autofocus name="fecha_seguimiento" value="<?= $data->fecha_seguimiento ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Golpes máquina por día</td>
                                        <td><input id="golpes_maquina" onkeyup="mulVida_util_dias();
                                    mulPeriodo_Surtimiento();" class="form-control" type="text"  autofocus name="golpes_maquina" value="<?= $data->golpes_maquina ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Confirmación de Orden de Compra</td>
                                        <td>
                                            <SELECT name="confirmacion_orden_compra" id="confirmacion_orden_compra" class="form-control input-sm"> 
                                                <optgroup label="Selecciona una opción">
                                                    <option value="Consignación" <?php
                                if ($data->confirmacion_orden_compra == "Consignación") {
                                    echo "Selected";
                                }
                                ?>>Consignación</option>
                                                    <option value="Orden de Compra" <?php
                                if ($data->confirmacion_orden_compra == "Orden de Compra") {
                                    echo "Selected";
                                }
                                ?>>Orden de Compra</option>
                                                    <option value="Sin Pedido" <?php
                                if ($data->confirmacion_orden_compra == "Sin Pedido") {
                                    echo "Selected";
                                }
                                ?>>Sin Pedido</option>

                                                    <option value="No Aplica" <?php
                                if ($data->confirmacion_orden_compra == "No Aplica") {
                                    echo "Selected";
                                }
                                ?>>No Aplica</option>
                                                </optgroup>
                                            </SELECT>
                                        </td>


                                    </tr>
                                <input id="fecha_ultima_factura"  class="form-control" type="hidden"  autofocus name="fecha_ultima_factura" value="<?= $data->fecha_ultima_factura ?>">                      
                                <input id="consumo_real"  class="form-control" type="hidden"  autofocus name="consumo_real" value="<?= $data->consumo_real ?>">                      

<?php
if ($dataLevel == 'is_admin') {
    echo '<tr>';
    echo '<td>Fecha Última Factura</td>';
    echo '<td><input id="fecha_ultima_factura"  class="form-control" type="date"  autofocus name="fecha_ultima_factura" value="' . $data->fecha_ultima_factura . '"> </td>';
    ;

    echo '</tr>';


    echo '<tr>';
    echo '<td>Consumo Real</td>';
    echo '<td><input id="consumo_real"  class="form-control" type="text"  autofocus name="consumo_real" value="' . $data->consumo_real . '"> </td>';
    ;

    echo '</tr>';
}
?>

  <?php
                    if (($data->archivo == null) && ($dataLevel == 'is_editor')) {
                        echo '    <tr
                            <td bgcolor="#>b0aeae">Archivo</td>
                            <td bgcolor="#b0aeae"><input STYLE="color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #72A4D2;"  id="archivo"  class="form-control" type="file"  name="archivo"></td>
                        </tr>';
                    } else if (($data->archivo != null) && ($dataLevel == 'is_editor')) {
                        echo '
                            <tr>
                            <td bgcolor="#b0aeae">Archivo</td>
                            <td bgcolor="#b0aeae"><font color="red">
                           <a  title="Da clic para descargar el archivo" href="' . base_url() . 'assets/ClienteRefacciones/' . $data->archivo . '" target=”_blank” rel=”nofollow”> Ya tienes un archivo cargado</a>
                           </font><br><input STYLE="color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #72A4D2;" size="10" maxlength="30 id="archivo"  class="form-control" type="file"  name="archivo"></td>
                        </tr>';
                    }
                    ?>

                                <tr>
                                    <td colspan="2" >
                                <center> <input  class="btn btn-success" title="Da clic para guardar los datos" type="submit" value="Guardar" >
                                    <a title="Da clic para regresar al menú" href="../../ClienteRefacciones" class="btn btn-info">Cancelar</a></center>
                                </td>
                                </tr>
                                </tr>
                                
                                
                        
                        
                     
                        <input id="codigo_cuchilla" type="hidden" class="form-control input-sm"  name="codigo_cuchilla" value="<?= $codigo_cuchilla ?>">
                        <input id="cantidad_cuchilla" type="hidden" class="form-control input-sm"  name="cantidad_cuchilla" value="<?= $cantidad_cuchilla ?>">
                        <input id="precio_cuchilla" type="hidden" class="form-control input-sm"  name="precio_cuchilla" value="<?= $precio_cuchilla ?>">
                        <input id="codigo_cubierta" type="hidden" class="form-control input-sm"  name="codigo_cubierta" value="<?= $codigo_cubierta ?>">
                        <input id="cantidad_cubierta" type="hidden" class="form-control input-sm"  name="cantidad_cubierta" value="<?= $cantidad_cubierta ?>">
                        <input id="precio_cubierta" type="hidden" class="form-control input-sm"  name="precio_cubierta" value="<?= $precio_cubierta ?>">
                        <input id="codigo_llanta" type="hidden" class="form-control input-sm"  name="codigo_llanta" value="<?= $codigo_llanta ?>">
                         <input id="cantidad_llanta" type="hidden" class="form-control input-sm"  name="cantidad_llanta" value="<?= $cantidad_llanta ?>">
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
                        </div>

                </table>
        </div>

        <!-- file lama -->
        <input type="hidden" name="id" value="<?= $data->id_venta ?>">
        <!-- ID -->
        <input type="hidden" name="id" value="<?= $data->id_venta ?>">

                   <!-- <input type="submit" name="submit" value="Enviar" class="btn btn-default">-->



    </form>

</div>
</div>
<!-- END KONTEN UTAMA -->

<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
</body>