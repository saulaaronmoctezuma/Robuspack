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
    <body>
  <div class="container" >   
            <form action="<?= base_url() ?>ClienteRefacciones/updatedata" method="post" enctype="multipart/form-data">
                
                <MARQUEE SCROLLDELAY =200></MARQUEE>
                 <div class="container" > <center><h1>Actualizar datos</h1></CENTER>
                    <table class="table table-bordered table-striped" sTYLE="table-layout:fixed">
                        <tbody>

                            
                                
                        
                        
                        
                         <tr>
                            <td bgcolor="#b0aeae" width="30%" height="16">Fecha de Última Factura</td>
                             <td bgcolor="#b0aeae"><input id="grupo"  STYLE="color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #72A4D2;" class="form-control" type="date"  autofocus name="fecha_ultima_factura" value="<?= $data->fecha_ultima_factura ?>">  </td>
                        </tr>
                        
                         <tr>
                            <td bgcolor="#b0aeae">Consumo Real</td>
                                 <td bgcolor="#b0aeae"><input id="consumo_real"  STYLE="color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #72A4D2;"  class="form-control" type="number"  autofocus name="consumo_real" value="<?= $data->consumo_real ?>">  </td>
                       
                        </tr>
                        
                                             
                        
                        
                         <?php
                    if (($data->archivo == null)) {
                        echo '    <tr>
                            <td bgcolor="#b0aeae">Archivo</td>
                            <td bgcolor="#b0aeae"><font color="red">No tienes ningún archivo cargado</font><input STYLE="color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #72A4D2;"  id="archivo"  class="form-control" type="file"  name="archivo"></td>
                        </tr>';
                    } else if (($data->archivo != null)) {
                        echo '
                            <tr>
                            <td bgcolor="#b0aeae">Archivo</td>
                            <td bgcolor="#b0aeae"><font color="red">
                           <a  title="Da clic para visualizar el archivo" href="' . base_url() . 'assets/ClienteRefacciones/' . $data->archivo . '" target=”_blank” rel=”nofollow”> Ya tienes un archivo cargado</a><br>
                           </font><br><input STYLE="color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #72A4D2;" size="10" maxlength="30 id="archivo"  class="form-control" type="file"  name="archivo">
                           </td>
                        </tr>';
                    }
                    ?>
                     
                        
                           
                         <?php
                    if (($data->archivo == null) && ($dataLevel == 'is_servicio_a_clientes')) {
                        echo '    <tr>
                            <td bgcolor="#b0aeae">Archivo</td>
                            <td bgcolor="#b0aeae"><font color="#B60D1F">No tienes archivo cargado</font><input STYLE="color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #72A4D2;"  id="archivo"  class="form-control" type="file"  name="archivo"></td>
                        </tr>';
                    } else if (($data->archivo != null) && ($dataLevel == 'is_servicio_a_clientes')) {
                        echo '
                           <tr>
                            <td bgcolor="#b0aeae">Archivo</td>
                            <td bgcolor="#b0aeae"><font color="red">
                           <a  title="Da clic para visualizar el archivo" href="' . base_url() . 'assets/ClienteRefacciones/' . $data->archivo . '" target=”_blank” rel=”nofollow”> <font color="red">Ya tienes un archivo cargado</font></a>
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
                        <br>
                        <tr>
                            <td>Grupo</td>
                            <td><input id="grupo"  style="background-color:#03E7F7;" readonly="readonly" class="form-control" type="text"  autofocus name="grupo" value="<?= $data->grupo ?>">  </td>
                        </tr>
                        <tr>
                            <td>Cliente</td>
                            <td>  <input class="form-control" type="text" readonly="readonly"  style="background-color:#03E7F7;"name="cliente" value="<?= $data->cliente ?>"> </td>
                        </tr>

                        <tr>
                            <td>Código</td>
                            <td>  <input class="form-control" type="text" readonly="readonly"  style="background-color:#03E7F7;"name="referencia" value="<?= $data->referencia   ?>" > </td>
                        </tr>

                                                 <tr>
                            <td>Cantidad máxima</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="cantidad_maxima" value="<?= $data->cantidad_maxima ?>"> </td>
                        </tr>


                        <tr>
                            <td>Precio unitario</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="precio_unitario" value="<?= $data->precio_unitario ?>"> </td>
                        </tr>



                        <tr>
                            <td>Vida Util en Dias</td>
                            <td><input id="res_vida_util_dias"  style="background-color:#03E7F7;" min="0" title="Campo AutoCompletable" readonly="readonly" class="form-control" type="text"  autofocus name="vida_util_dias" value="<?= $data->vida_util_dias ?>" ></td>
                        </tr>


                        <tr>
                            <td>Periodo surtimiento</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="periodo_surtimiento" value="<?= $data->periodo_surtimiento ?>"> </td>
                        </tr>




                        <tr>
                            <td>Periodo Surtimiento en Vida Util</td>
                            <td><input id="res_periodo_surtiemiento" class="form-control" title="Campo AutoCompletable"  type="text" style="background-color:#03E7F7;" readonly="readonly" autofocus name="periodo_surtimiento_vida_util" value="<?= $data->periodo_surtimiento_vida_util ?>"></td>
                        </tr>

                        <tr>
                            <td>Cantidad mínima</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="cantidad_minima" value="<?= $data->cantidad_minima ?>"
                                         > </td>
                        </tr>



                        <tr>
                            <td>Paqueteria</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="paqueteria" value="<?= $data->paqueteria ?>"
                                         > </td>
                        </tr>


                        <tr>
                            <td>Tipo entrega</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="tipo_entrega" value="<?= $data->tipo_entrega ?>"                                         > </td>
                        </tr>


                        <tr>
                            <td>Dias crédito</td>
                            <td>  <input class="form-control" type="text" readonly="readonly"  style="background-color:#03E7F7;" name="dias_credito" value="<?= $data->dias_credito ?>"
                                         > </td>
                        </tr>



                        <tr>
                            <td>Pulgadas</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="pulgadas" value="<?= $data->pulgadas ?>"
                                         > </td>
                        </tr>

                        <tr>
                            <td>Diametro de Rodillo en Milimetros</td>
                            <td><input id="milimetros" class="form-control" type="text" readonly="readonly" min="0" style="background-color:#03E7F7;" title="Campo AutoCompletable"  autofocus name="diametro_rod_ml" value="<?= $data->diametro_rod_ml ?>"
                        </tr>
                                                <tr>
                            <td>Máquina cliente</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="maquina_cliente" value="<?= $data->maquina_cliente ?>"> </td>
                        </tr>
                        
                        
                        
                        
                                                <tr>
                            <td>Capacitación</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="capacitacion" value="<?= $data->capacitacion ?>"
                            </td>
                        </tr>


                                                <tr>
                            <td>Capacitación fecha</td>
                            <td>  <input id="capacitacion_fecha" class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="capacitacion_fecha" value="<?= $data->capacitacion_fecha ?>"
                                         > </td>
                        </tr>

                        
                                               <tr>
                            <td>Piezas por juego</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="piezas_juego" value="<?= $data->piezas_juego ?>"
                                         > </td>
                        </tr>

                        <tr>
                            <td>Costo juego</td>
                            <td><input id="res_costo_juego" title="Campo AutoCompetable" onkeyup="divPrecio_golpe();"  readonly="readonly" style="background-color:#03E7F7;"  class="form-control" type="text"  autofocus name="costo_juego"
                                       value="<?= $data->costo_juego ?>"
                                       ></td>
                        </tr>
                        <tr>
                            <td>Juego mensuales</td>
                            <td><input id="res_juegos_mensuales" title="Campo AutoCompetable" class="form-control" type="text"  readonly="readonly" style="background-color:#03E7F7;"  autofocus name="juego_mensuales" value="<?= $data->juego_mensuales ?>"
                                       ></td>
                        </tr>
                                                 <tr>
                            <td>Golpes prom comp</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="golpes_prom_comp" value="<?= $data->golpes_prom_comp ?>"
                                         > </td>
                        </tr>

                                               
                          <tr>
                            <td>Golpes prom rodicut</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="golpes_prom_rodicut" value="<?= $data->golpes_prom_rodicut ?>"
                                         > </td>
                        </tr>

                        <tr>
                            <td>Beneficio golpes prom</td>
                            <td><input id="res_beneficio_golpes" title="Campo AutoCompetable" readonly="readonly" class="form-control" type="text"  readonly="readonly" style="background-color:#03E7F7;"  accept="" autofocus name="beneficio_golpes_prom" value="<?= $data->beneficio_golpes_prom ?>"
                                       ></td>
                        </tr>
                                                 <tr>
                            <td>Tiempo rot com</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="tiempo_rot_com" value="<?= $data->tiempo_rot_com ?>"
                                         > </td>
                        </tr>

                                                  <tr>
                            <td>Tiempo rot rodicut</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="tiempo_rot_rodicut"value="<?= $data->tiempo_rot_rodicut ?>"
                                         > </td>
                        </tr>

                        <tr>
                            <td>Beneficio rot prom</td>
                            <td><input id="res_beneficio_rot_prom" title="Campo AutoCompetable"  readonly="readonly" style="background-color:#03E7F7;" class="form-control" type="text"  autofocus name="beneficio_rot_prom" value="<?= $data->beneficio_rot_prom ?>"
                                       ></td>
                        </tr>
                        <tr>
                            <td>Precio golpe</td>
                            <td><input id="res_precio_golpe" class="form-control" type="text"  title="Campo AutoCompetable" readonly="readonly" style="background-color:#03E7F7;"  autofocus name="precio_golpe" value="<?= $data->precio_golpe ?>"
                                       ></td>
                        </tr>
                                               <tr>
                            <td>Ciudad / planta</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="ciudad_planta" value="<?= $data->ciudad_planta ?>"
                                         > </td>
                        </tr>

                                               <tr>
                            <td>Observación</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="observacion" value="<?= $data->observacion ?>"
                                         > </td>
                        </tr>

                                              <tr>
                            <td>Marca de la máquina</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="marca_maquina" value="<?= $data->marca_maquina ?>"
                                         > </td>
                        </tr>

                        <tr>
                            <td>Modelo de la máquina</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;"name="contacto" value="<?= $data->contacto ?>"
                                         > </td>
                        </tr>
                        
                       <tr>
                            <td>Tipo de máquina</td>
                            <td>  <input class="form-control" type="text" readonly="readonly"  style="background-color:#03E7F7;"name="tipo_maquina" value="<?= $data->tipo_maquina ?>"
                                         > </td>
                        </tr>
                        
                        
                         <tr>
                            <td>Formato</td>
                            <td>  <input class="form-control" type="text" readonly="readonly"  style="background-color:#03E7F7;"name="formato" value="<?= $data->formato ?>"
                                         > </td>
                        </tr>
                        
                        
                         <tr>
                            <td>Ancho</td>
                            <td>  <input class="form-control" type="text" readonly="readonly"  style="background-color:#03E7F7;"name="ancho" value="<?= $data->ancho ?>"
                                         > </td>
                        </tr>

                        
                        
                           <tr>
                            <td>Troquel</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="troquel" value="<?= $data->troquel ?>"
                                         > </td>
                        </tr>
                        
                        
                         <tr>
                            <td>Uso de cfdi</td>
                            <td>  <input class="form-control" type="text" readonly="readonly"style="background-color:#03E7F7;" name="uso_de_cfdi" value="<?= $data->uso_de_cfdi ?>"> </td>
                        </tr>
                        
                        
                        <tr>
                            <td>Método de pago</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="metodo_pago" value="<?= $data->metodo_pago ?>"> </td>
                        </tr>
                        
                        <tr>
                            <td>Fecha visita</td>
                            <td>  <input class="form-control" type="text" readonly="readonly"  style="background-color:#03E7F7;" name="fecha_visita"  value="<?= $data->fecha_visita ?>"> </td>
                        </tr>
                        
                        <tr>
                            <td>Fecha seguimiento</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="fecha_seguimiento" value="<?= $data->fecha_seguimiento ?>"> </td>
                        </tr>
                        
                         <tr>
                            <td>Golpes máquina por día</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="golpes_maquina" value="<?= $data->golpes_maquina ?>"  </td>
                        </tr>
                        
                        
                         <tr>
                            <td>Confirmación de Orden de Compra</td>
                            <td>  <input class="form-control" type="text" readonly="readonly" style="background-color:#03E7F7;" name="confirmacion_orden_compra" value="<?= $data->confirmacion_orden_compra ?>"  </td>
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
