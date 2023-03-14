    <!--
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */
-->
    <html lang="es-mx">
    <title>Robuspack</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">

    <link rel="icon" href="<?= base_url('assets/images/robuspack_icon.png') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    $result = $this->User_model->getAllSettings();
    $theme = $result->theme;
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $theme; ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'public/css/main.css' ?>"> 

<div id="maquinaria">
    <form action="<?= base_url('Empresa/empresaModificar') ?>" method="post" align="center" onsubmit="return vali()">
        <h1>Actualizar datos</h1>
        <MARQUEE SCROLLDELAY =200></MARQUEE>
        <div class="container" >
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <td><input class="form-control"type="hidden" name="id_empresa" value="<?= $id_empresa ?>"></td>
                    </tr>
                   <!-- <tr>
                        <td>Estado</td>
                        <td><input id="a1" class="form-control" type="text" name="estado" value="<?= $estado ?>"></td>
                    </tr> 
                    -->
                      <tr>
                    <td>Estado</td>
                     <td>
                         <SELECT name="estado" class="form-control input-sm"> 
                            <optgroup label="Selecciona una opción">
                                
                                
                              <option value="Aguascalientes" <?php if ($estado == "Aguascalientes") {echo "Selected"; } ?>>Aguascalientes</option>
                                <option value="Baja California" <?php if ($estado == "Baja California") {  echo "Selected";} ?>>Baja California</option>
                                <option value="Baja California Sur" <?php if ($estado == "Baja California Sur") {echo "Selected"; } ?>>Baja California Sur</option>
                                <option value="Campeche" <?php if ($estado == "Campeche") {  echo "Selected";} ?>>Campeche</option>
                                <option value="Chihuahua" <?php if ($estado == "Chihuahua") {echo "Selected"; } ?>>Chihuahua</option>
                                <option value="Chiapas" <?php if ($estado == "Chiapas") {  echo "Selected";} ?>>Chiapas</option>
                                <option value="Coahuila" <?php if ($estado == "Coahuila") {echo "Selected"; } ?>>Coahuila</option>
                                <option value="Colima" <?php if ($estado == "Colima") {  echo "Selected";} ?>>Colima</option>
                                <option value="Durango" <?php if ($estado == "Durango") {echo "Selected"; } ?>>Durango</option>
                                <option value="Guanajuato" <?php if ($estado == "Guanajuato") {  echo "Selected";} ?>>Guanajuato</option>
                                <option value="Guerrero" <?php if ($estado == "Guerrero") {echo "Selected"; } ?>>Guerrero</option>
                                <option value="Hidalgo" <?php if ($estado == "Hidalgo") {  echo "Selected";} ?>>Hidalgo</option>
                                <option value="Jalisco" <?php if ($estado == "Jalisco") {echo "Selected"; } ?>>Jalisco</option>
                                <option value="México" <?php if ($estado == "México") {  echo "Selected";} ?>>México</option>
                                <option value="Michoacán" <?php if ($estado == "Michoacán") {echo "Selected"; } ?>>Michoacán</option>
                                <option value="Morelos" <?php if ($estado == "Morelos") {  echo "Selected";} ?>>Morelos</option>
                                <option value="Nayarit" <?php if ($estado == "Nayarit") {echo "Selected"; } ?>>Nayarit</option>
                                <option value="Nuevo León" <?php if ($estado == "Nuevo León") {  echo "Selected";} ?>>Nuevo León</option>
                                <option value="Oaxaca" <?php if ($estado == "Oaxaca") {echo "Selected"; } ?>>Oaxaca</option>
                                <option value="Puebla" <?php if ($estado == "Puebla") {  echo "Selected";} ?>>Puebla</option>
                                <option value="Querétaro" <?php if ($estado == "Querétaro") {echo "Selected"; } ?>>Querétaro</option>
                                <option value="Quintana Roo" <?php if ($estado == "Quintana Roo") {  echo "Selected";} ?>>Quintana Roo</option>
                                <option value="San Luis Potosí" <?php if ($estado == "San Luis Potosí") {echo "Selected"; } ?>>San Luis Potosí</option>
                                <option value="Sinaloa" <?php if ($estado == "Sinaloa") {  echo "Selected";} ?>>Sinaloa</option>
                                <option value="Sonora" <?php if ($estado == "Sonora") {echo "Selected"; } ?>>Sonora</option>
                                <option value="Tabasco" <?php if ($estado == "Tabasco") {  echo "Selected";} ?>>Tabasco</option>
                                <option value="Tamaulipas" <?php if ($estado == "Tamaulipas") {echo "Selected"; } ?>>Tamaulipas</option>
                                <option value="Tlaxcala" <?php if ($estado == "Tlaxcala") {  echo "Selected";} ?>>Tlaxcala</option>
                                <option value="Veracruz" <?php if ($estado == "Veracruz") {echo "Selected"; } ?>>Veracruz</option>
                                <option value="Yucatán" <?php if ($estado == "Yucatán") {  echo "Selected";} ?>>Yucatán</option>
                                <option value="Zacatecas" <?php if ($estado == "Zacatecas") {echo "Selected"; } ?>>Zacatecas</option>
                                
                            </optgroup>
                          </SELECT>
                    </td>
                </tr>
                    <tr>
                        <td>Ciudad</td>
                        <td><input id="a2" class="form-control" type="text" name="ciudad" value="<?= $ciudad ?>"></td>
                    </tr>
                    <tr>
                        <td>Nombre de la Empresa</td>
                        <td><input id="a3" class="form-control" type="text" name="nombre_empresa"  value="<?= $nombre_empresa ?>" ></td>
                    </tr>
                   <!--- <tr>
                        <td>Estatus</td>
                        <td><input id="a4" class="form-control" type="text" name="estatus"  value="<?= $estatus ?>"></td>
                    </tr>-->
                    
                       <tr>
                    <td>Estatus</td>
                     <td>
                         <SELECT name="estatus" class="form-control input-sm"> 
                            <optgroup label="Selecciona una opción">
                                <option value="Sin Contactar" <?php if ($estatus == "Sin Contactar") {echo "Selected"; } ?>>Sin Contactar</option>
                                <option value="Envió de Información" <?php if ($estatus == "Envió de Información") {  echo "Selected";} ?>>Envió de Información</option>
                                <option value="Visita Programada" <?php if ($estatus == "Visita Programada") {  echo "Selected";} ?>>Visita Programada</option>
                                <option value="Visita Realizada" <?php if ($estatus == "Visita Realizada") {  echo "Selected";} ?>>Visita Realizada</option>
                                <option value="En Cotización" <?php if ($estatus == "En Cotización") {  echo "Selected";} ?>>En Cotización</option>
                                 <option value="Sin Compra Realizada" <?php if ($estatus == "Sin Compra Realizada") {  echo "Selected";} ?>>Sin Compra Realizada</option>
                                  <option value="Venta Cerrada" <?php if ($estatus == "Venta Cerrada") {  echo "Selected";} ?>>Venta Cerrada</option>
                                 
                            </optgroup>
                          </SELECT>
                    </td>
                </tr>
                    
                     <!--<tr>
                         <td>Vendedor</td>
                        <td><input id="a4" class="form-control" type="text" name="vendedor" value="<?= $vendedor ?>"></td>
                    </tr>-->
                      <tr>
                    <td>Vendedor</td>
                     <td>
                         <SELECT name="vendedor" class="form-control input-sm"> 
                            <optgroup label="Selecciona una opción">
                                <option value="Sergio Peñafiel" <?php if ($vendedor == "Sergio Peñafiel") {echo "Selected"; } ?>>Sergio Peñafiel</option>
                                <option value="César Cantú" <?php if ($vendedor == "César Cantú") {  echo "Selected";} ?>>César Cantú</option>
                                <option value="Alejandra Maldonado" <?php if ($vendedor == "Alejandra Maldonado") {  echo "Selected";} ?>>Alejandra Maldonado</option>
                                <option value="Gerardo Lopéz" <?php if ($vendedor == "Gerardo Lopéz") {  echo "Selected";} ?>>Gerardo Lopéz</option>
                                <option value="Benjamín Lopéz" <?php if ($vendedor == "Benjamín Lopéz") {  echo "Selected";} ?>>Benjamín Lopéz</option>
                               <option value="Carlos Hernández" <?php if ($vendedor == "Carlos Hernández") {  echo "Selected";} ?>>Carlos Hernández</option>
                               <option value="Elvira Parreño" <?php if ($vendedor == "Elvira Parreño") {  echo "Selected";} ?>>Elvira Parreño</option>
                               <option value="Orlene Hernández" <?php if ($vendedor == "Orlene Hernández") {  echo "Selected";} ?>>Orlene Hernández</option>
                               <option value="No Aplica" <?php if ($vendedor == "No Aplica") {  echo "Selected";} ?>>No Aplica</option>
                               
                               
                           
                                </optgroup>
                          </SELECT>
                    </td>
                </tr>
                    
                    
                    
                    <tr>
                        <td>Nombre </td>
                        <td><input id="a5" class="form-control" type="text" name="nombre"  value="<?= $nombre ?>"></td>
                    </tr>
                    <tr>
                        <td>Cargo</td>
                        <td><input id="a5" class="form-control" type="text" name="cargo"  value="<?= $cargo ?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input id="a5" class="form-control" type="text" name="email"  value="<?= $email ?>"></td>
                    </tr>
                    <tr>
                        <td>Email 2</td>
                        <td><input id="a5" class="form-control" type="text" name="email2"  value="<?= $email2 ?>"></td>
                    </tr>
                    <tr> 
                        <td>Email 3</td>
                        <td><input id="a5" class="form-control" type="text" name="email3"  value="<?= $email3 ?>"></td>
                    </tr>
                     <tr>
                        <td>Página Web</td>
                        <td><input id="a5" class="form-control" type="text" name="pag_web"  value="<?= $pag_web ?>"></td>
                    </tr>
                    
                    
                    
                     <!--<tr>
                         <td>Marketing</td>
                        <td><input id="a4" class="form-control" type="text" name="marketing" value="<?= $marketing?>"></td>
                    </tr>-->
                    
                   <tr>
                    <td>Marketing</td>
                     <td>
                         <SELECT name="marketing" class="form-control input-sm"> 
                            <optgroup label="Selecciona una opción">
                                <option value="1" <?php if ($marketing == "1") {echo "Selected"; } ?>>1</option>
                                <option value="2" <?php if ($marketing == "2") {  echo "Selected";} ?>>2</option>
                                <option value="3" <?php if ($marketing == "3") {  echo "Selected";} ?>>3</option>
                                <option value="4" <?php if ($marketing == "4") {  echo "Selected";} ?>>4</option>
                                <option value="5" <?php if ($marketing == "5") {  echo "Selected";} ?>>5</option>
                            </optgroup>
                          </SELECT>
                    </td>
                </tr>
                
                    <tr>
                        <td>Teléfono 1 </td>
                        <td><input id="a5" class="form-control" type="text" name="tel1"  value="<?= $tel1 ?>"></td>
                    </tr>
                    <tr>
                        <td>Teléfono 2</td>
                        <td><input id="a5" class="form-control" type="text" name="tel2"  value="<?= $tel2 ?>"></td>
                    </tr>
                    <tr>
                        <td>Teléfono 3</td>
                        <td><input id="a5" class="form-control" type="text" name="tel3"  value="<?= $tel3 ?>"></td>
                    </tr>
                    <tr>
                        <td>Dirección</td>
                        <td><input id="a5" class="form-control" type="text" name="direccion"  value="<?= $direccion ?>"></td>
                    </tr>
                    <tr> 
                        <td>Domicilio Secundario</td>
                        <td><input id="a5" class="form-control" type="text" name="dom_secundario"  value="<?= $dom_secundario ?>"></td>
                    </tr>
                     <tr>
                        <td>Código Postal </td>
                        <td><input id="a5" class="form-control" type="text" name="cp"  value="<?= $cp ?>"></td>
                    </tr>
                    
                    
                    
                     <!--<tr>
                         <td>Integrados</td>
                        <td><input id="a4" class="form-control" type="text" name="integrados" value="<?= $integrados ?>"></td>
                    </tr>-->
                       <tr>
                    <td>Integrados</td>
                     <td>
                         <SELECT name="integrados" class="form-control input-sm"> 
                            <optgroup label="Selecciona una opción">
                                <option value="Sí" <?php if ($integrados == "Sí") {echo "Selected"; } ?>>Sí</option>
                                <option value="No" <?php if ($integrados == "No") {  echo "Selected";} ?>>No</option>
                            </optgroup>
                          </SELECT>
                    </td>
                </tr>
                    <!--<tr>
                        <td>Corrugadora </td>
                        <td><input id="a5" class="form-control" type="text" name="corrugadora"  value="<?= $corrugadora ?>"></td>
                    </tr>-->
                                       <tr>
                    <td>Corrugadora</td>
                     <td>
                         <SELECT name="corrugadora" class="form-control input-sm"> 
                            <optgroup label="Selecciona una opción">
                                <option value="Sí" <?php if ($corrugadora == "Sí") {echo "Selected"; } ?>>Sí</option>
                                <option value="No" <?php if ($corrugadora == "No") {  echo "Selected";} ?>>No</option>
                            </optgroup>
                          </SELECT>
                    </td>
                </tr>
                   <!-- <tr>
                        <td>Sheet Plant Size</td>
                        <td><input id="a5" class="form-control" type="text" name="sheet"  value="<?= $sheet ?>"></td>
                    </tr>-->
                     <tr>
                    <td>Sheet Plant Size</td>
                     <td>
                         <SELECT name="sheet" class="form-control input-sm"> 
                            <optgroup label="Selecciona una opción">
                                <option value="Pequeña" <?php if ($sheet == "Pequeña") {echo "Selected"; } ?>>Pequeña</option>
                                <option value="Mediana" <?php if ($sheet == "Mediana") {  echo "Selected";} ?>>Mediana</option>
                                <option value="Grande" <?php if ($sheet == "Grande") {  echo "Selected";} ?>>Grandes</option>
                            
                            </optgroup>
                          </SELECT>
                    </td>
                </tr>
                    <!--<tr>
                        <td>Single Face</td>
                        <td><input id="a5" class="form-control" type="text" name="single"  value="<?= $single ?>"></td>
                    </tr>-->
                             <tr>
                    <td>Single Face</td>
                     <td>
                         <SELECT name="single" class="form-control input-sm"> 
                            <optgroup label="Selecciona una opción">
                                <option value="Sí" <?php if ($single == "Sí") {echo "Selected"; } ?>>Sí</option>
                                <option value="No" <?php if ($single == "No") {  echo "Selected";} ?>>No</option>
                            </optgroup>
                          </SELECT>
                    </td>
                </tr>
                         <tr>
                    <td>Comercializadora</td>
                     <td>
                         <SELECT name="comercializadora" class="form-control input-sm"> 
                            <optgroup label="Selecciona una opción">
                                <option value="Sí" <?php if ($comercializadora == "Sí") {echo "Selected"; } ?>>Sí</option>
                                <option value="No" <?php if ($comercializadora == "No") {  echo "Selected";} ?>>No</option>
                            </optgroup>
                          </SELECT>
                    </td>
                </tr>
                   <!-- <tr>
                        <td>Comercializadora</td>
                        <td><input id="a5" class="form-control" type="text" name="comercializadora"  value="<?= $comercializadora ?>"></td>
                    </tr>-->
                    <tr> 
                        <td>Litografía</td>
                        <td><input id="a5" class="form-control" type="text" name="litografia"  value="<?= $litografia ?>"></td>
                    </tr>
                     <tr>
                        <td>Flexos Actuales</td>
                        <td><input id="a5" class="form-control" type="text" name="flexos"  value="<?= $flexos ?>"></td>
                    </tr>
                    
                    
                    
                     <tr>
                         <td>Volúmen en Pesos</td>
                        <td><input id="a4" class="form-control" type="text" name="volumen" value="<?= $volumen ?>"></td>
                    </tr>
                    <tr>
                        <td>Comentarios </td>
                        <td><input id="a5" class="form-control" type="text" name="comentarios"  value="<?= $comentarios ?>"></td>
                    </tr>
                   
                    
                    
                   
                    <tr>
                    <td>
                        <input  class="btn btn-success" title="Da clic para guardar los datos" type="submit" value="Guardar" >
                        <a title="Da clic para regresar al menú" href="../" class="btn btn-danger">Cancelar</a>
                    </td>
                </tr>
                </tbody>
        </div>
        </table>
</div>
</form>
<?php ?>
