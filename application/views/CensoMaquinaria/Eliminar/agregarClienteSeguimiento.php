<?php ?>   
<html lang="es-mx">
<head>

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



<script>
     
     
      function valida() {
        var prioridad = document.formulario.prioridad.value;
        var estatus = document.formulario.estatus.value;
        var v3 = document.formulario.a3.value;
        var v4 = document.formulario.a4.value;
        var v5 = document.formulario.a5.value;
        var v6 = document.formulario.a6.value;

        if (prioridad == "") {
            alertify.alert("Introduce nombre del articulo");
            document.formulario.a1.focus;
            return false;
        }
        estatus (prioridad == "") {
            alertify.alert("Introduce nombre del prioridad");
            document.formulario.a1.focus;
            return false;
        }
     

        function Validacion() {
           
           
           
           
            if(document.getElementById("necesidad").value === ""){
                 alert("El campo grupo esta vacio")
            }   
            if(document.getElementById("cliente").value === ""){
               alert("El campo grupo esta vacio")
            }
            
             var grupo = document.getElementById("grupo").value
        var cliente = document.getElementById("necesidad").value
        var necesidad = document.getElementById("necesidad").value

        if (necesidad == "") {
            alert("Introduce la necesidad");
            document.formulario.a1.focus;
            return false;
        }
        if (cliente == "") {
            alert("Introduce la marca del articulo");
            document.formulario.a2.focus;
            return false;
        }
        }

        
        
    </script>
<div id="maquinaria">
    <div class="container" >      
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Bienvenido</strong> Agrega los datos segun corresponda
        </div>
        <h1>Gestión del Seguimiento del cliente</h1>
        <MARQUEE SCROLLDELAY =200></MARQUEE>
        <form name="formulario" id="formal" role="form" action="<?= base_url('ClienteSeguimiento/formularioAgregar') ?>" method="POST" onsubmit="return valida()">



            <div class="form-group">
                <input type="hidden" class="form-control" id="id_clienteseguimiento"  name="id_clienteseguimiento">
            </div>
            <!--<div class="form-group">
                <label for="nombre">Grupo </label>
                <input id="a1" type="text" class="form-control"  name="grupo" >
            </div>-->
             <div class="form-group">
                <label for="nombre">Grupo</label>
                <select required id="grupo"  class="form-control"  name="grupo" <?php   echo form_dropdown('grupoCombo', $grupoCombo, '#', 'id="grupoCombo"');  ?> </select>
            </div>
            
            <div class="form-group">
                <label for="nombre">Cliente</label>
                <select required id="cliente" class="form-control"  name="cliente" <?php   echo form_dropdown('clienteCombo', $clienteCombo, '#', 'id="clienteCombo"');  ?> </select>
            </div>
            
           
            <!--<div class="form-group">
                <label for="nombre">Cliente </label>
                <input id="a2" type="text" class="form-control"  name="cliente" >
            </div>-->
            <!--<div class="form-group">
                <label for="nombre">Prioridad </label>
                <input id="a3" type="text" class="form-control"  name="prioridad" >
            </div>-->
            <div class="form-group">
                <label>Prioridad</label>
               <select name="prioridad" class="form-control" required>
		  	<option  value="">Selecciona una opción</option>
			<OPTION VALUE="1 Urgente">1 Urgente</OPTION>
                        <OPTION VALUE="2 Muy Potencial">2 Muy Potencial</OPTION>
                        <OPTION VALUE="3 Potencial">3 Potencial</OPTION>
                        <OPTION VALUE="4 Posible Cliente">4 Posible Cliente</OPTION>
                        <OPTION VALUE="5 Preguntó Información">5 Preguntó Información</OPTION>
                        <option VALUE="6 Cliente n</optgroup>o Potencial">6 Cliente no Potencial</option>
               </select>
            
            </div>
            <!--<div class="form-group">
                <label for="nombre">Estatus </label>
                <input id="a4" type="text" class="form-control"  name="estatus" >
            </div>-->

            <div class="form-group">
                <label>Estatus</label>
                
                
                
                 <select name="estatus" class="form-control" required>
                    
		  					<option  value="">Selecciona una opción</option>
				  			
                        <OPTION VALUE="Sin Contactar">Sin Contactar</OPTION>
                        <OPTION VALUE="Envió de Información">Envió de Información</OPTION>
                        <OPTION VALUE="Visita Programada">Visita Programada</OPTION>
                        <OPTION VALUE="Visita Realizada">Visita Realizada</OPTION>
                        <OPTION VALUE="En cotización">En cotización</OPTION>
                        <OPTION VALUE="Muestreo">Muestreo</OPTION>
                        <OPTION VALUE="Venta Cerrada">Venta Cerrada</OPTION>
						
		  			</select>
            </div>

            <div class="form-group">
                <label for="nombre">Necesidad </label>
                <input id="necesidad" type="text" class="form-control"  name="necesidad" >
            </div>
            <div class="form-group">
                <label for="nombre">Fecha de Cotización </label>
                <input id="a4" type="date" class="form-control"  name="fecha_cotizacion" >
            </div>
            <div class="form-group">
                <label for="nombre">Archivo 1 </label>
                <input id="a4" type="text" class="form-control"  name="archivo1" >
            </div>
           
            <div class="form-group">
                <label for="nombre">Fecha a Contactar </label>
                <input id="a4" type="date" class="form-control"  name="fecha_contactar" >
            </div>
            <div class="form-group">
                <label for="nombre">Compromiso </label>
                <input id="a4" type="text" class="form-control"  name="compromiso" >
            </div>
            <div class="form-group">
                <label for="nombre">Notas </label>
                <input id="a4" type="text" class="form-control"  name="notas" >
            </div>

            <input class="btn btn-success" id="botonOrden" type="submit" value="Agregar" data-toggle="tooltip" data-placement="right">
            <a title="Da clic para regresar al menú" href="../ClienteSeguimiento/" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </div> 
</body>
</html>



