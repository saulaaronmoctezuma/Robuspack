    
      <!--
    /*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación
 * Fecha: 11-04-2019 10:19 am"
 */-->
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
    <form action="<?= base_url('RecoleccionDatos/recoleccionDatosModificar') ?>" method="post" align="center" onsubmit="return vali()">
        <h1>Actualizar datos</h1>
        <MARQUEE SCROLLDELAY =200></MARQUEE>
        <div class="container" >
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <input class="form-control"type="hidden" name="id_recolecion_datos" value="<?= $id_recolecion_datos  ?>">
                    </tr>
                    
                    
                    <tr>
                        <td>Identificador</td>
                        <td><input id="a3" class="form-control" type="text" name="identificador"  value="<?= $identificador ?>" ></td>
                    </tr>
                   
                    <tr>
                        <td>Nombre de la Empresa</td>
                        <td><input id="a3" class="form-control" type="text" name="nombre_empresa"  value="<?= $nombre_empresa ?>" ></td>
                    </tr>
                    
                     <tr>
                        <td>Ciudad</td>
                        <td><input id="a2" class="form-control" type="text" name="ciudad" value="<?= $ciudad ?>"></td>
                    </tr>
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
                                <option value="Distrito Federal" <?php if ($estado == "Distrito Federal") {echo "Selected"; } ?>>Distrito Federal</option>
                                <option value="Durango" <?php if ($estado == "Durango") {echo "Selected"; } ?>>Durango</option>
                                <option value="Estado de México" <?php if ($estado == "Estado de México") {  echo "Selected";} ?>>Estado de México</option>
                                <option value="Guanajuato" <?php if ($estado == "Guanajuato") {  echo "Selected";} ?>>Guanajuato</option>
                                <option value="Guerrero" <?php if ($estado == "Guerrero") {echo "Selected"; } ?>>Guerrero</option>
                                <option value="Hidalgo" <?php if ($estado == "Hidalgo") {  echo "Selected";} ?>>Hidalgo</option>
                                <option value="Jalisco" <?php if ($estado == "Jalisco") {echo "Selected"; } ?>>Jalisco</option>
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
                        <td>Domicilio </td>
                        <td><input id="a5" class="form-control" type="text" name="domicilio"  value="<?= $domicilio ?>"></td>
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
                        <td>Teléfono </td>
                        <td><input id="a5" class="form-control" type="text" name="tel"  value="<?= $tel ?>"></td>
                    </tr>
                    
                    
                     <tr>
                        <td>Nombre 2 </td>
                        <td><input id="a5" class="form-control" type="text" name="nombre2"  value="<?= $nombre2 ?>"></td>
                    </tr>
                    <tr>
                        <td>Cargo 2</td>
                        <td><input id="a5" class="form-control" type="text" name="cargo2"  value="<?= $cargo2 ?>"></td>
                    </tr>
                    <tr>
                        <td>Email 2</td>
                        <td><input id="a5" class="form-control" type="text" name="email2"  value="<?= $email2 ?>"></td>
                    </tr>
                    
                    <tr>
                        <td>Teléfono 2</td>
                        <td><input id="a5" class="form-control" type="text" name="tel2"  value="<?= $tel2 ?>"></td>
                    </tr>
                   
                   <!-- <tr>
                        <td> Comentarios</td>
                        <td><input id="a5" class="form-control" type="text" name="comentarios"  value="<?= $comentarios ?>"></td>
                    </tr>
                   -->
                    
                    <tr>
                         <td>Comentarios</td>
                       <td>
                           <textarea name="comentarios" class="form-control input-sm" style="resize:none;" rows="8" cols="80"><?= $comentarios ?></textarea>
                        </td>
                    </tr>
                    
                    
                    
                   
                    <tr>
                    <td>
                        <input  class="btn btn-success" title="Da clic para guardar los datos" type="submit" value="Guardar" >
                        <a title="Da clic para regresar al menú" href="../" class="btn btn-warning">Cancelar</a>
                    </td>
                </tr>
                </tbody>
        </div>
        </table>
</div>
</form>
<?php ?>
