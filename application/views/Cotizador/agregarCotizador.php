<?php ?>        




<div id="cotizador">
    <div class="container" >      
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Bienvenido</strong> Agrega los datos segun corresponda
        </div>
        <h1> Cotizador </h1>
        <MARQUEE SCROLLDELAY =200></MARQUEE>
        <form name="formulario" id="formal" role="form" action="<?= base_url('Cotizador/formularioAgregar') ?>" method="POST" onsubmit="return valida()">



            <div class="form-group">
                <input type="hidden" class="form-control" id="id_cotizador"  name="id_cotizador">
            </div>

            <div class="form-group">
                <label for="nombre">Cliente</label>
                <input id="a1" type="text" class="form-control"  name="cliente" placeholder="Introduce el Cliente">
            </div>

            <div class="form-group">
                <label for="nombre">Dirección Fiscal</label>
                <input id="a4" type="text" class="form-control"  name="dir_fiscal" placeholder="Introduce la Dirección Fiscal">
            </div>
            
            <div class="form-group">
                <label for="nombre">Contacto</label>
                <input id="a4" type="text" class="form-control"  name="contacto" placeholder="Introduce el Contacto">
            </div>
            
            <div class="form-group">
                <label for="nombre">Teléfono</label>
                <input id="a4" type="text" class="form-control"  name="tel" placeholder="Introduce el Teléfono">
            </div>
            
            <div class="form-group">
                <label for="nombre">Email</label>
                <input id="a4" type="text" class="form-control"  name="email" placeholder="Introduce el Email">
            </div>
            
            <div class="form-group">
                <label for="nombre">No de O. Refacc</label>
                <input id="a4" type="text" class="form-control"  name="no_refacc" placeholder="Introduce el Correo">
            </div>
            
            <div class="form-group">
                <label for="nombre">No de Cotización</label>
                <input id="a4" type="text" class="form-control"  name="no_cotizacion" placeholder="Introduce el Correo">
            </div>
            
            <div class="form-group">
                <label for="nombre">Fecha de Solicitud</label>
                <input id="a4" type="text" class="form-control"  name="fech_solicitud" placeholder="Introduce el Correo">
            </div>
            
            <div class="form-group">
                <label for="nombre">Item No</label>
                <input id="a4" type="text" class="form-control"  name="no_item" placeholder="Introduce el Item">
            </div>
            
            <div class="form-group">
                <label for="nombre">Descripción en Español</label>
                <input id="a4" type="text" class="form-control"  name="descri_esp" placeholder="Introduce la Descripción en Español">
            </div>
            
            <div class="form-group">
                <label for="nombre">Descripción en Inglés</label>
                <input id="a4" type="text" class="form-control"  name="descri_ingles" placeholder="Introduce la Descripción en Inglés">
            </div>
            
            <div class="form-group">
                <label for="nombre">Observaciones</label>
                <input id="a4" type="text" class="form-control"  name="observaciones" placeholder="Introduce las Observaciones">
            </div>
            
            <div class="form-group">
                <label for="nombre">Código Refacción</label>
                <input id="a4" type="text" class="form-control"  name="cod_refacc" placeholder="Introduce el Código de Refacción">
            </div>
            
            <div class="form-group">
                <label for="nombre">Modelo de Máquina</label>
                <input id="a4" type="text" class="form-control"  name="modelo_maq" placeholder="Introduce el Modelo de Máquina">
            </div>
            
            <div class="form-group">
                <label for="nombre">Qty</label>
                <input id="a4" type="text" class="form-control"  name="qty" placeholder="Introduce el QTY">
            </div>
            
            <div class="form-group">
                <label for="nombre">Precio Unitario</label>
                <input id="a4" type="text" class="form-control"  name="pre_uni" placeholder="Introduce el Precio Unitario">
            </div>
            
            <div class="form-group">
                <label for="nombre">Precio Total</label>
                <input id="a4" type="text" class="form-control"  name="pre_total" placeholder="Introduce el Precio Total">
            </div>
            
            <div class="form-group">
                <label for="nombre">Moneda</label>
                <input id="a4" type="text" class="form-control"  name="moneda" placeholder="Introduce la Moneda">
            </div>


            <input class="btn btn-success" type="submit" value="Agregar" data-toggle="tooltip" data-placement="right" title="Da Clic para Guardar los Datos del Catálogo">
            </div>
        </form>
    </div> 
</body>
</html>

