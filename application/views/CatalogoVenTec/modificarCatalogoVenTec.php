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
           

<div id="maquinaria">
    <form action="<?= base_url('CatalogoVenTec/catalogoVenTecModificar') ?>" method="post" align="center" onsubmit="return vali()">
        <h1>Actualizar datos</h1>
        <MARQUEE SCROLLDELAY =200></MARQUEE>
        <div class="container" >
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <td><input class="form-control"type="hidden" name="id_catalogo" value="<?= $id_catalogo ?>"></td>
                    </tr>
                    <tr>
                        <td>Nombre</td>
                        <td><input id="a1" class="form-control" type="text"  name="nombre" value="<?= $nombre ?>"></td>
                    </tr>
                   
                    
                    
                    
                    
                    
                    
                    
                    
                 <tr>
                 <td>Rol</td>
                    <td>
                    <SELECT name="rol" class="form-control input-sm"> 
                            <optgroup label="Selecciona una opción">
                                <option value="Vendedor" <?php if ($rol == "Vendedor") {echo "Selected"; } ?>>Vendedor</option>
                                <option value="Técnico" <?php if ($rol == "Técnico") {  echo "Selected";} ?>>Técnico</option>
                                
                                
                            </optgroup>
                    </SELECT>
                    </td>
                 </tr>
                
                    
                    
                    
                    
                    
                    
                  
                    
                    
                    
                        <tr>
                 <td>Área</td>
                    <td>
                    <SELECT name="area" class="form-control input-sm"> 
                            <optgroup label="Selecciona una opción">
                                <option value="Maquinaria" <?php if ($area == "Maquinaria") {echo "Selected"; } ?>>Maquinaria</option>
                                <option value="Refacciones" <?php if ($area == "Refacciones") {  echo "Selected";} ?>>Refacciones</option>
                                <option value="Soporte" <?php if ($area == "Soporte") {  echo "Selected";} ?>>Soporte</option>
                                
                            </optgroup>
                    </SELECT>
                    </td>
                 </tr>
                
                    
                    
                  
                    
                      
                    
                        <tr>
                 <td>% de Comisión</td>
                    <td>
                    <SELECT name="comision" class="form-control input-sm"> 
                            <optgroup label="Selecciona una opción">
                                <option value="1%" <?php if ($comision == "1%") {echo "Selected"; } ?>>1%</option>
                                <option value="2%" <?php if ($comision == "2%") {  echo "Selected";} ?>>2%</option>
                                <option value="2.5%" <?php if ($comision == "2.5%") {  echo "Selected";} ?>>2.5%</option>
                                <option value="3%" <?php if ($comision == "3%") {  echo "Selected";} ?>>3%</option>
                                <option value="4%" <?php if ($comision == "4%") {  echo "Selected";} ?>>4%</option>
                                <option value="5%" <?php if ($comision == "5%") {  echo "Selected";} ?>>5%</option>
                                
                            </optgroup>
                    </SELECT>
                    </td>
                 </tr>
                    
                    
                    
                    
                     <tr>
                        <td>Correo Electrónico</td>
                        <td><input id="a4" class="form-control" type="email"  name="correo"  value="<?= $correo ?>"></td>
                    </tr>
                      
                    
                    
                    
                     <tr>
                    <td>
                        <input  class="btn btn-success" title="Da clic para guardar los datos" type="submit" value="Guardar" >
                       <a title="Da clic para regresar al menú" href="javascript:window.history.go(-1);"class="btn btn-danger">Cancelar</a>
                    </td>
                </tr>
                </tbody>
        </div>
        </table>
</div>
</form>
<?php ?>


