
  <!--
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */
-->
<script>
    function vali() {
        var v1 = document.formulario.a1.value;
        var v2 = document.formulario.a2.value;
        var v3 = document.formulario.a3.value;
        var v4 = document.formulario.a4.value;
        var v5 = document.formulario.a5.value;
        var v6 = document.formulario.a6.value;

        if (v1 == "") {
            alertify.alert("Introduce nombre del articulo");
            document.formulario.a1.focus;
            return false;
        }
        if (v2 == "") {
            alertify.alert("Introduce la marca del articulo");
            document.formulario.a2.focus;
            return false;
        }
        if (v3 == "") {
            alertify.alert("Introduce el precio del articulo");
            document.formulario.a3.focus;
            return false;
        }
        if (v4 == "") {
            alertify.alert("Introduce la cantidad del articulo(s) ");
            document.formulario.a4.focus;
            return false;
        }
        if (v5 == "") {
            alertify.alert("Introduce la categoría del articulo");
            document.formulario.a5.focus;
            return false;
        }
        if (v6 == "") {
            alertify.alert("Introduce la lobservación del articulo");
            document.formulario.a6.focus;
            return false;
        }

        return true;

    }



    function soloNumeros(e) {
        var key = window.Event ? e.which : e.keyCode
        return (key == 190 || (key >= 48 && key <= 57))

    }

    var nav4 = window.Event ? true : false;
    function acceptNum(evt) {

        var key = nav4 ? evt.which : evt.keyCode;
        return (key <= 110 || (key >= 48 && key <= 57));
    }





</script>

<div id="proveedor">
    <form action="<?= base_url('Venta/ventaUpdate') ?>" method="post" align="center" onsubmit="return val1i()">
        <h1>Actualizar datos</h1>
        <MARQUEE SCROLLDELAY =200>Actualizando sus datos</MARQUEE>
        <div class="container" >
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <td><input class="form-control"type="hidden" name="id_venta" value="<?= $id_venta?>"></td>
                    </tr>
                    <tr>
                        <td>grupo</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="grupo" value="<?= $grupo ?>"></td>
                    </tr>
                    <tr>
                        <td>cliente</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="cliente" value="<?= $cliente ?>"></td>
                    </tr>
                    <tr>
                        <td>referencia</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="referencia" value="<?= $referencia ?>"></td>
                    </tr>
                    <tr>
                        <td>cantidad_maxima</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="cantidad_maxima" value="<?= $cantidad_maxima ?>"></td>
                    </tr>
                    <tr>
                        <td>precio_unitario</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="precio_unitario" value="<?= $precio_unitario ?>"></td>
                    </tr>
                    <tr>
                        <td>periodo_surtimiento</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="periodo_surtimiento" value="<?= $periodo_surtimiento ?>"></td>
                    </tr>
                    <tr>
                        <td>cantidad_minima</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="cantidad_minima" value="<?= $cantidad_minima ?>"></td>
                    </tr>
                    <tr>
                        <td>paqueteria</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="paqueteria" value="<?= $paqueteria ?>"></td>
                    </tr>
                    <tr>
                        <td>tipo_entrega</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="tipo_entrega" value="<?= $tipo_entrega ?>"></td>
                    </tr>
                    <tr>
                        <td>dias_credito</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="dias_credito" value="<?= $dias_credito ?>"></td>
                    </tr>
                    <tr>
                        <td>pulgadas</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="pulgadas" value="<?= $pulgadas ?>"></td>
                    </tr>
                    <tr>
                        <td>maquina_cliente</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="maquina_cliente" value="<?= $maquina_cliente ?>"></td>
                    </tr>
                    <tr>
                        <td>capacitacion</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="capacitacion" value="<?= $capacitacion ?>"></td>
                    </tr>
                    <tr>
                        <td>capacitacion_fecha</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="capacitacion_fecha" value="<?= $capacitacion_fecha ?>"></td>
                    </tr>
                    <tr>
                        <td>piezas_juego</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="piezas_juego" value="<?= $piezas_juego ?>"></td>
                    </tr>
                    <tr>
                        <td>costo_juego</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="costo_juego" value="<?= $costo_juego ?>"></td>
                    </tr>
                    <tr>
                        <td>juego_mensuales</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="juego_mensuales" value="<?= $juego_mensuales ?>"></td>
                    </tr>
                    <tr>
                        <td>golpes_prom_comp</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="golpes_prom_comp" value="<?= $golpes_prom_comp ?>"></td>
                    </tr>
                    <tr>
                        <td>golpes_prom_rodicut</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="golpes_prom_rodicut" value="<?= $golpes_prom_rodicut ?>"></td>
                    </tr>
                    <tr>
                        <td>beneficio_golpes_prom</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="beneficio_golpes_prom" value="<?= $beneficio_golpes_prom ?>"></td>
                    </tr>
                    <tr>
                        <td>tiempo_rot_com</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="tiempo_rot_com" value="<?= $tiempo_rot_com ?>"></td>
                    </tr>
                    <tr>
                        <td>tiempo_rot_rodicut</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="tiempo_rot_rodicut" value="<?= $tiempo_rot_rodicut ?>"></td>
                    </tr>
                    <tr>
                        <td>beneficio_rot_prom</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="beneficio_rot_prom" value="<?= $beneficio_rot_prom ?>"></td>
                    </tr>
                    <tr>
                        <td>precio_golpe</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="precio_golpe" value="<?= $precio_golpe ?>"></td>
                    </tr>
                    <tr>
                        <td>ciudad_planta</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="ciudad_planta" value="<?= $ciudad_planta ?>"></td>
                    </tr>
                    <tr>
                        <td>observacion</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="observacion" value="<?= $observacion ?>"></td>
                    </tr>
                    <tr>
                        <td>contacto</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="contacto" value="<?= $contacto ?>"></td>
                    </tr>
                    <tr>
                        <td>tipo_maquina</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="tipo_maquina" value="<?= $tipo_maquina ?>"></td>
                    </tr>
                    <tr>
                        <td>troquel</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="troquel" value="<?= $troquel ?>"></td>
                    </tr>
                    <tr>
                        <td>uso_de_cfdi</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="uso_de_cfdi" value="<?= $uso_de_cfdi ?>"></td>
                    </tr>
                    <tr>
                        <td>metodo_pago</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="metodo_pago" value="<?= $metodo_pago ?>"></td>
                    </tr>
                    <tr>
                        <td>forma_pago</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="forma_pago" value="<?= $forma_pago ?>"></td>
                    </tr>
                    <tr>
                        <td>fecha_visita</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="fecha_visita" value="<?= $fecha_visita ?>"></td>
                    </tr>
                    <tr>
                        <td>fecha_seguimiento</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="fecha_seguimiento" value="<?= $fecha_seguimiento ?>"></td>
                    </tr>
                    <tr>
                        <td>golpes_maquina</td>
                        <td><input id="a1" class="form-control" type="text" required autofocus name="golpes_maquina" value="<?= $golpes_maquina ?>"></td>
                    </tr>
                    
                    
                    <tr>
                        <td colspan="2">
                            <input class="form-control btn btn-success"  type="submit" value="Guardar" >
                        </td>
                    </tr>
                </tbody>
        </div>
        </table>
</div>
</form>



