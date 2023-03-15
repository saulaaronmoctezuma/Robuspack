<?php ?>        

<div id="maquinaria">
    <form action="<?= base_url('Cotizador/cotizadorModificar') ?>" method="post" align="center">
        <h1>Actualizar datos</h1>
        <MARQUEE SCROLLDELAY =200></MARQUEE>
        <div class="container" >
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <td><input class="form-control"type="hidden" name="id_cotizador" value="<?= $id_cotizador ?>"></td>
                    </tr>
                    <tr>
                        <td>Cliente</td>
                        <td><input id="a1" class="form-control" type="text"  name="cliente" value="<?= $cliente ?>"></td>
                    </tr>
                    <tr>
                        <td>Dirección Fiscal</td>
                        <td><input id="a2" class="form-control" type="text"  name="dir_fiscal" value="<?= $dir_fiscal ?>"></td>
                    </tr>
                    <tr>
                        <td>Contacto</td>
                        <td><input id="a3" class="form-control" type="text"  name="contacto" value="<?= $contacto ?>" ></td>
                    </tr>

                    <tr>
                        <td>Teléfono</td>
                        <td><input id="a4" class="form-control" type="text"  name="tel" value="<?= $tel ?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input id="a4" class="form-control" type="text"  name="email"  value="<?= $email ?>"></td>
                    </tr> 
                    
                    <tr>
                        <td>No de O. Refacc</td>
                        <td><input id="a4" class="form-control" type="text"  name="no_refacc"  value="<?= $no_refacc ?>"></td>
                    </tr>
                    
                    <tr>
                        <td>No de Cotización</td>
                        <td><input id="a4" class="form-control" type="text"  name="no_cotizacion"  value="<?= $no_cotizacion ?>"></td>
                    </tr>
                    
                    <tr>
                        <td>Fecha de Solicitud</td>
                        <td><input id="a4" class="form-control" type="text"  name="fech_solicitud"  value="<?= $fech_solicitud ?>"></td>
                    </tr>
                    
                    <tr>
                        <td>Item No</td>
                        <td><input id="a4" class="form-control" type="text"  name="no_item"  value="<?= $no_item ?>"></td>
                    </tr>
                    
                    <tr>
                        <td>Descripción en Español</td>
                        <td><input id="a4" class="form-control" type="text"  name="descri_esp"  value="<?= $descri_esp ?>"></td>
                    </tr>
                    
                    <tr>
                        <td>Descripción en Inglés</td>
                        <td><input id="a4" class="form-control" type="text"  name="descri_ingles"  value="<?= $descri_ingles ?>"></td>
                    </tr>
                    
                     <tr>
                        <td>Observaciones</td>
                        <td><input id="a4" class="form-control" type="text"  name="observaciones"  value="<?= $observaciones ?>"></td>
                    </tr>
                    
                     <tr>
                        <td>Código Refacción</td>
                        <td><input id="a4" class="form-control" type="text"  name="cod_refacc"  value="<?= $cod_refacc ?>"></td>
                    </tr>
                    
                     <tr>
                        <td>Modelo de Máquina</td>
                        <td><input id="a4" class="form-control" type="text"  name="modelo_maq"  value="<?= $modelo_maq ?>"></td>
                    </tr>

                     <tr>
                        <td>Qty</td>
                        <td><input id="a4" class="form-control" type="text"  name="qty"  value="<?= $qty ?>"></td>
                    </tr>
                    
                     <tr>
                        <td>Precio Unitario</td>
                        <td><input id="a4" class="form-control" type="text"  name="pre_uni"  value="<?= $pre_uni ?>"></td>
                    </tr>
                    
                     <tr>
                        <td>Precio Total</td>
                        <td><input id="a4" class="form-control" type="text"  name="pre_total"  value="<?= $pre_total ?>"></td>
                    </tr>
                    
                     <tr>
                        <td>Moneda</td>
                        <td><input id="a4" class="form-control" type="text"  name="moneda"  value="<?= $moneda ?>"></td>
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
<?php ?>


