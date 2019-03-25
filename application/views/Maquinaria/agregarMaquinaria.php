<?php ?>        
<link rel="icon" href="<?= base_url('assets/images/icono.PNG') ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$result = $this->User_model->getAllSettings();
$theme = $result->theme;
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo $theme; ?>">
<!--<link rel="stylesheet" href="<?php echo base_url() . 'public/css/main.css' ?>">-->





<div id="maquinaria">
    <div class="container" >      
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Bienvenido</strong> Agrega los datos segun corresponda
        </div>
        <h1>Gestión de Lista de Precios Cubiertas</h1>
        <MARQUEE SCROLLDELAY =200></MARQUEE>
        <form name="formulario" id="formal" role="form" action="<?= base_url('Maquinaria/formularioAgregar') ?>" method="POST" onsubmit="return valida()">



            <div class="form-group">
                <input type="hidden" class="form-control" id="id_maquinaria"  name="id_maquinaria">
            </div>
            <div class="jumbotron">
                <div class="row">
                    <div class="form-group col-xs-6">
                        <label for="nombre">Código</label>
                        <input id="a1" type="text" class="form-control"  name="referencia" placeholder="Introduce el código">
                    </div>
                    <div class="form-group col-xs-6">
                        <label for="nombre">Fecha</label>
                        <input id="a2" type="date" class="form-control"  name="fecha" placeholder="Introduce la Fecha">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-6">
                        <label for="nombre">Fabricante</label>
                        <input id="a3" type="text" class="form-control"  name="fabricante" placeholder="Introduce el Nombre del Fabricante">
                    </div>
                    <div class="form-group col-xs-6">
                        <label for="nombre">Maquina</label>
                        <input id="a4" type="text" class="form-control"  name="maquina" placeholder="Introduce el Nombre de la Máquina" title="Introduce el Nombre de la Máquina">
                    </div>

                </div>


                <div class="row">
                    <div class="form-group col-xs-4">
                        <label for="nombre">Precio 1  de la Máquina</label>
                        <input id="a4" type="text" class="form-control"  name="precio1" placeholder="Introduce el Precio  1 de la Máquina">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="nombre">Precio 2  de la Máquina</label>
                        <input id="a4" type="text" class="form-control"  name="precio2" placeholder="Introduce el Precio 2 de la Máquina">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="nombre">Precio 3  de la Máquina</label>
                        <input id="a4" type="text" class="form-control"  name="precio3" placeholder="Introduce el Precio 3 de la Máquina">
                    </div>
                </div>



                <div class="row">

                    <div class="form-group col-xs-4">
                        <label for="nombre">Precio 4  de la Máquina</label>
                        <input id="a4" type="text" class="form-control"  name="precio4" placeholder="Introduce el Precio 4 de la Máquina">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="nombre">Precio  5 de la Máquina</label>
                        <input id="a4" type="text" class="form-control"  name="precio5" placeholder="Introduce el Precio 5 de la Máquina">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="nombre">Pc Exwork</label>
                        <input id="a4" type="text" class="form-control"  name="pcexwork" placeholder="Introduce el Precio Pc Exwork">
                    </div>




                </div>
                <div class="row">
                    <div class="form-group col-xs-4">
                        <label for="nombre">Pc Fob</label>
                        <input id="a4" type="text" class="form-control"  name="pcfob" placeholder="Introduce el Precio Pc Fob">
                    </div>
                    <div class="form-group col-xs-4">
                        <label for="nombre">Pc Cif</label>
                        <input id="a4" type="text" class="form-control"  name="pccif" placeholder="Introduce el Precio Pc Cif">
                    </div>
                    <div class="form-group col-xs-4">
                        <label for="nombre">Pc Cip</label>
                        <input id="a4" type="text" class="form-control"  name="pccip" placeholder="Introduce el Precio Pc Cip">
                    </div>
                </div>

                <div class="row">  
                    <div class="form-group col-xs-4">
                        <label for="nombre">Ancho</label>
                        <input id="a5" type="text" class="form-control"  name="ancho" placeholder="Introduce el Ancho de la Máquina" >
                    </div>



                    <div class="form-group  col-xs-4">
                        <label for="nombre">Espesor</label>
                        <input id="a6" type="text" class="form-control"  name="espesor" placeholder="Introduce el Espesor de la Máquina" >
                    </div>
                    <div class="form-group  col-xs-4">
                        <label for="nombre">Diámetro</label>
                        <input id="a7" type="text" class="form-control"  name="diametro" placeholder="Introduce el Diámetro de la Máquina" >
                    </div>
                </div>


                <div class="row">
                    <div class="form-group  col-xs-4">
                        <label for="nombre">Cue</label>
                        <input id="a8" type="text" class="form-control"  name="empresa_competencia_1" placeholder="Introduce la Clave de la Competencia 1">
                    </div>
                    <div class="form-group col-xs-4">
                        <label for="nombre">Dicar</label>
                        <input id="a10" type="text" class="form-control"  name="empresa_competencia_2" placeholder="Introduce la Clave de la Competencia 2">
                    </div>
                    <div class="form-group col-xs-4">
                        <label for="nombre">Stock</label>
                        <input id="a4" type="number" class="form-control"  name="inventario" placeholder="Introduce las Piezas Existentes en el Inventario">
                    </div>
                    
                     </div>
                
               <div class="row">
                    <div class="form-group col-xs-4">
                        <label for="nombre">Piezas recibir</label>
                        <input id="a4" type="number" class="form-control"  name="piezas_recibir" placeholder="Introduce las Piezas por recibir">
                    </div>
               
                   
                   <div class="form-group col-xs-4">
                        <label for="nombre">fecha_corte_rotacion</label>
                        <input id="fecha_corte_rotacion" type="date" class="form-control"  name="fecha_corte_rotacion" placeholder="Introduce las Piezas por recibir">
                    </div>
            </div>
            <center>
                <input class="btn btn-success" type="submit" value="Agregar" data-toggle="tooltip" data-placement="right" title="Da clic para guardar los datos">
                
                <a title="Da clic para regresar al menú" href="javascript:window.history.go(-1);"class="btn btn-danger">Cancelar</a></center>
    </div>
</form>
</div> 
</body>
</html>

