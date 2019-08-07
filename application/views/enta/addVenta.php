<head>


    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="./Ve/bootstrap-datetimepicker.css" rel="stylesheet">
     <link rel="icon" href="<?=base_url('assets/images/icono.PNG')?>">

    <script>
        function multCostoJuego() {
            precio_unitario = document.getElementById("mulprecio_unitario").value;
            piezas_juego = document.getElementById("mulpiezas_juego").value;
            costo_juego = precio_unitario * piezas_juego;
            document.getElementById("res_costo_juego").value = costo_juego;
        }

        function divJuegosMensuales() {
            cantidad_maxima = document.getElementById("div_cantidad_maxima").value;
            piezas_juego = document.getElementById("mulpiezas_juego").value;
            juegos_mensuales = (cantidad_maxima) / (piezas_juego);
            document.getElementById("res_juegos_mensuales").value = juegos_mensuales;
            
            
            if(document.getElementById("res_juegos_mensuales").value === "Infinity"){
                document.getElementById("res_juegos_mensuales").value =" ";
            }
            if(document.getElementById("res_juegos_mensuales").value === "NaN"){
                document.getElementById("res_juegos_mensuales").value =" ";
            }
            
        }

        function opeBeneficioGolpes() {
            golpes_prom_rodicut = document.getElementById("ope_golpes_prom_rodicut").value;
            golpes_prom_com = document.getElementById("ope_golpes_prom_comp").value;
            beneficio_golpes = ((golpes_prom_rodicut / golpes_prom_com) - 1) * 100;
            document.getElementById("res_beneficio_golpes").value = beneficio_golpes;
        }

        function opeBeneficioRotacion() {
            tiempo_rot_com = document.getElementById("ope_tiempo_rot_com").value;
            tiempo_rot_rodicut = document.getElementById("ope_tiempo_rot_rodicut").value;
            beneficio_rot_prom = ((tiempo_rot_com / tiempo_rot_rodicut) - 1) * 100;
            document.getElementById("res_beneficio_rot_prom").value = beneficio_rot_prom;
        }
        function divPrecio_golpe() {
            costo_juego = document.getElementById("res_costo_juego").value;
            golpes_prom_rodicut = document.getElementById("ope_golpes_prom_rodicut").value;
            precio_golpe = costo_juego / golpes_prom_rodicut;
            document.getElementById("res_precio_golpe").value = precio_golpe;
        }
        
        
$(document).ready(function(){
 $('#maquinaria').change(function(){
 
  
  
   $.ajax({
    url:"<?php echo base_url(); ?>ClienteRefacciones/buscar_referencia",
    method:"POST",
    data:{id_maquinaria:id_maquinaria},
    success:function(data)
    {
     $('#state').html(data);
     $('#city').html('<option value="">Select id_maquinaria</option>');
    }
   });
});
    </script>
</head>


<div     id="proveedor">
    <div class="container" >      
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Bienvenido</strong> Agrega los datos segun corresponda
        </div>
        <h1>Gestión de Ventas</h1>
        <MARQUEE SCROLLDELAY =200>Agregando los datos de ventas</MARQUEE>
        <form name="formulario" id="formal" role="form" action="<?= base_url('Venta/add') ?>" method="POST" onsubmit="return valida()">



            <div class="form-group">
                <input type="hidden" class="form-control" id="id_venta"  name="id_venta">
            </div>
            <div class="form-group">
                <label for="nombre">grupo</label>
                <input id="a1" type="text" class="form-control"  name="grupo" placeholder="Ingresa el nombre del articulo">
            </div>
            <div class="form-group">
                <label for="nombre">cliente</label>
                <input id="a2" type="text" class="form-control"  name="cliente" placeholder="Ingresa la marca">
            </div>
              <div class="form-group">
   <select name="maquinaria" id="maquinaria" class="form-control input-lg">
    <option value="">Select maquinaria</option>
    <?php
    foreach($referencia as $row)
    {
     echo '<option value="'.$row->id_maquinaria.'">'.$row->referencia.'</option>';
    }
    ?>
   </select>
  </div>
            <div class="form-group">
                <label for="nombre">cantidad_maxima</label>
                <input id="div_cantidad_maxima" onkeyup="divJuegosMensuales();" type="text" class="form-control"  name="cantidad_maxima" placeholder="Ingresa el precio" onkeypress="return soloNumeros(event)">
            </div>
            <div class="form-group">
                <label for="nombre">precio_unitario</label>
                <input id="mulprecio_unitario" onkeyup="multCostoJuego();" type="text" class="form-control"  name="precio_unitario" placeholder="Ingresa la cantidad" onkeypress="return soloNumeros(event)">
            </div>

            <div class="form-group">
                <label for="nombre">periodo_surtimiento</label>
                <input id="a6" type="text" class="form-control"  name="periodo_surtimiento" placeholder="Ingresa observacion">
            </div>
            <div class="form-group">
                <label for="nombre">cantidad_minima</label>
                <input id="a6" type="text" class="form-control"  name="cantidad_minima" placeholder="Ingresa ">
            </div>
            <div class="form-group">
                <label for="nombre">paqueteria</label>
                <input id="a6" type="text" class="form-control"  name="paqueteria" placeholder="Ingresa ">
            </div>
            <div class="form-group">
                <label for="nombre">tipo_entrega</label>
                <input id="a6" type="text" class="form-control"  name="tipo_entrega" placeholder="Ingresa ">
            </div><div class="form-group">
                <label for="nombre">dias_credito</label>
                <input id="a6" type="text" class="form-control"  name="dias_credito" placeholder="Ingresa ">
            </div>
            <div class="form-group">
                <label for="nombre">pulgadas</label>
                <input id="a6" type="text" class="form-control"  name="pulgadas" placeholder="Ingresa ">
            </div>
            <div class="form-group">
                <label for="nombre">maquina_cliente</label>
                <input id="a6" type="text" class="form-control"  name="maquina_cliente" placeholder="Ingresa ">
            </div>
            <div class="form-group">
                <label for="nombre">capacitacion</label>
                <input id="a6" type="text" class="form-control"  name="capacitacion" placeholder="Ingresa ">
            </div>
            <div class="form-group">
                <label for="nombre">capacitacion_fecha</label>
                <input id="a6" type="date" class="form-control"  name="capacitacion_fecha" placeholder="Ingresa ">
            </div>
            <div class="form-group">
                <label for="nombre">piezas_juego</label>
                <input id="mulpiezas_juego"  onkeyup="multCostoJuego();divJuegosMensuales();"  type="text" class="form-control"  name="piezas_juego" placeholder="Ingresa ">
            </div><div class="form-group">
                <label for="nombre">costo_juego</label>
                <input id="res_costo_juego" onkeyup="divPrecio_golpe();" readonly="readonly " type="text" class="form-control"  name="costo_juego" placeholder="Ingresa ">
            </div>
            <div class="form-group">
                <label for="nombre">juego_mensuales</label>
                <input id="res_juegos_mensuales" type="text" readonly="readonly" class="form-control"  name="juego_mensuales" placeholder="Ingresa ">
            </div>
            <div class="form-group">
                <label for="nombre">golpes_prom_comp</label>
                <input id="ope_golpes_prom_comp" onkeyup="opeBeneficioGolpes();" type="text" class="form-control"  name="golpes_prom_comp" placeholder="Ingresa ">
            </div>
            <div class="form-group">
                <label for="nombre">golpes_prom_rodicut</label>
                <input id="ope_golpes_prom_rodicut" onkeyup="opeBeneficioGolpes();" onkeyup="divPrecio_golpe();" type="text" class="form-control"  name="golpes_prom_rodicut" placeholder="Ingresa ">
            </div>
            <div class="form-group">
                <label for="nombre"> % beneficio_golpes_prom</label>
                <input id="res_beneficio_golpes" readonly="readonly" type="text" class="form-control"  name="beneficio_golpes_prom" placeholder="Ingresa ">
            </div>
            <div class="form-group">
                <label for="nombre">tiempo_rot_com</label>
                <input id="ope_tiempo_rot_com" onkeyup="opeBeneficioRotacion();"  type="text" class="form-control"  name="tiempo_rot_com" placeholder="Ingresa ">
            </div>
            <div class="form-group">
                <label for="nombre">tiempo_rot_rodicut</label>
                <input id="ope_tiempo_rot_rodicut" onkeyup="opeBeneficioRotacion();" type="text" class="form-control"  name="tiempo_rot_rodicut" placeholder="Ingresa ">
            </div>
            <div class="form-group">
                <label for="nombre">beneficio_rot_prom</label>
                <input id="res_beneficio_rot_prom" readonly="readonly" type="text" class="form-control"  name="beneficio_rot_prom" placeholder="Ingresa ">
            </div>
            <div class="form-group">
                <label for="nombre">precio_golpe</label>
                <input id="res_precio_golpe" readonly="readonly" type="text" class="form-control"  name="precio_golpe" placeholder="Ingresa ">
            </div>
            <div class="form-group">
                <label for="nombre">ciudad_planta</label>
                <input id="a6" type="text" class="form-control"  name="ciudad_planta" placeholder="Ingresa ">
            </div><div class="form-group">
                <label for="nombre">observacion</label>
                <input id="a6" type="text" class="form-control"  name="observacion" placeholder="Ingresa ">
            </div><div class="form-group">
                <label for="nombre">contacto</label>
                <input id="a6" type="text" class="form-control"  name="contacto" placeholder="Ingresa ">
            </div>
            <div class="form-group">
                <label for="nombre">tipo_maquina</label>
                <input id="a6" type="text" class="form-control"  name="tipo_maquina" placeholder="Ingresa ">
            </div>
            <div class="form-group">
                <label for="nombre">troquel</label>
                <input id="a6" type="text" class="form-control"  name="troquel" placeholder="Ingresa ">
            </div><div class="form-group">
                <label for="nombre">uso_de_cfdi</label>
                <input id="a6" type="text" class="form-control"  name="uso_de_cfdi" placeholder="Ingresa ">
            </div>
            <div class="form-group">
                <label for="nombre">metodo_pago</label>
                <input id="a6" type="text" class="form-control"  name="metodo_pago" placeholder="Ingresa ">
            </div>
            <div class="form-group">
                <label for="nombre">forma_pago</label>
                <input id="a6" type="text" class="form-control"  name="forma_pago" placeholder="Ingresa ">
            </div>
            <div class="form-group">
                <label for="nombre">fecha_visita</label>
                <input id="a6" type="date" class="form-control"  name="fecha_visita" placeholder="Ingresa ">
            </div>

            <!--          <div class="form-group">
            <!-- <div class="col-sm-2"
         <label id="lblfecha" class="control-label" name="fecha_visita">fecha_visita</label>
         </div>
       <div class="col-sm-4">-->
            <!--       <div class="input-group date fecha" data-date-format="dd-mm-yyyy">
              <input type="text" name="fechaNac" value=""  id="fechaNac" class="form-control input-sm">
               <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                      </div>
            -->	



            <div class="form-group">
                <label for="nombre">fecha_seguimiento</label>
                <input id="a6" type="date" class="form-control"  name="fecha_seguimiento" placeholder="Ingresa ">
            </div><div class="form-group">
                <label for="nombre">golpes_maquina</label>
                <input id="a6" type="text" class="form-control"  name="golpes_maquina" placeholder="Ingresa ">
            </div>






            <input class="btn btn-success" type="submit" value="Agregar" data-toggle="tooltip" data-placement="right" title="Da clic para guardar los datos de la venta">
            </div>

            <div class="container">
                <div class="row">
                    <div class='col-sm-6'>
                        <div class="form-group">
                            <div class='input-group date' id='datetimepicker1'>
                                <input type='text' class="form-control" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div> 

</body>

</html>