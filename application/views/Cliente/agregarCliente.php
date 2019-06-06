
<html lang="es-mx">
    <title>Robuspack</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">

   
            <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $header ?>
    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    $result = $this->User_model->getAllSettings();
    $theme = $result->theme;
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $theme; ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'public/css/main.css' ?>">

    <div id="maquinaria">
        <div class="container" >      
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Bienvenido</strong> Agrega los datos segun corresponda
            </div>
            <center> <h4>Agregar Cliente </h4></center>
            <MARQUEE SCROLLDELAY =200></MARQUEE>
            <form name="formulario" id="formal" role="form" action="<?= base_url('Cliente/formularioAgregar') ?>" method="POST" onsubmit="return valida()">

sd
                <div class="form-group">
                    <input type="hidden" class="form-control" id="id_maquinaria"  name="id_maquinaria">
                </div>
                <div class="jumbotron" >  
                    <div class="row">
                        <div class="form-group col-xs-6">
                            <label for="nombre">Grupo</label>
                            <input id="a1" type="text" class="form-control input-sm"  name="grupo" placeholder="Introduce el nombre del grupo">
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="nombre">Cliente</label>
                            <input id="a2" type="text" class="form-control input-sm"  name="cliente" placeholder="Introduce el nombre del cliente" >
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group  col-xs-4">
                            <label for="nombre">Cliente SAE Pesos</label>
                            <input id="a3" type="number" class="form-control input-sm"  name="cliente_sae" placeholder="Introduce el cliente sae" >
                        </div>
                        <div class="form-group  col-xs-4">
                            <label for="nombre">Cliente SAE Dolares</label>
                            <input id="a3" type="number" class="form-control input-sm"  name="cliente_sae_dolares" placeholder="Introduce el cliente sae dolares" >
                        </div>
                        <div class="form-group  col-xs-4">
                            <label for="nombre">Razón Social</label>
                            <input id="a4" type="text" class="form-control input-sm"  name="razon_soc" placeholder="Introduce la razón social" >
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-xs-4">
                            <label for="nombre">RFC</label>
                            <input id="a4" type="text" class="form-control input-sm"  name="rfc" placeholder="Introduce el rfc" >
                        </div>
                        <div class="form-group col-xs-4">
                            <label for="nombre">Dirección Fiscal</label>
                            <input id="a5" type="text" class="form-control input-sm"  name="direccion" placeholder="Introduce la dirección" >
                        </div>

                        <div class="form-group col-xs-4">
                            <label for="nombre">Teléfono Celular o Celular</label>
                            <input id="a6" type="number" class="form-control input-sm"  name="tel_cel" placeholder="Introduce el télefono o celular" >
                        </div>
                    </div>
                    <br>
                    <div class="row">


                        <div class="form-group col-xs-4">
                            <label for="nombre">Extensión</label>
                            <input id="a8" type="number" class="form-control input-sm"  name="extension" placeholder="Introduce la extensión" >
                        </div>
                        <div class="form-group col-xs-4">
                            <label for="nombre">Correo Compras</label>
                            <input id="a10" type="text" class="form-control input-sm"  name="correo" placeholder="Introduce el correo electrónico" >
                        </div>
                        <div class="form-group col-xs-4">

                            <label for="nombre">Correo Cuentas por pagar</label>
                            <input id="a10" type="text" class="form-control input-sm"  name="correo1" placeholder="Introduce el correo electrónico" >
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="form-group col-xs-4">
                            <label for="nombre">Correo Mantenimiento</label>
                            <input id="a10" type="text" class="form-control input-sm"  name="correo2" placeholder="Introduce el correo electrónico" >
                        </div>
                        <div class="form-group col-xs-4">
                            <label for="nombre">Otro Correo</label>
                            <input id="a10" type="text" class="form-control input-sm"  name="correo3" placeholder="Introduce el correo electrónico" >
                        </div>
                        <div class="form-group col-xs-4">
                            <label>Moneda</label>


                            <select name="moneda" class="form-control input-sm">
                                <option  value="">Selecciona una opción</option>
                                <OPTION VALUE="Pesos">Pesos</OPTION>
                                <OPTION VALUE="Doláres">Doláres</OPTION>
                                <OPTION VALUE="Ambos">Ambos</OPTION>
                            </select>

                        </div>

                    </div>



                    <br>    
                   

                    <div class="row">

                        <div class="form-group col-xs-4">
                            <label for="nombre">Cuenta Bancaria Pesos</label>
                            <input id="a4" type="number" class="form-control input-sm"  name="cta_banc" placeholder="Introduce la cuenta bancaria de pesos" >
                        </div>

                        <div class="form-group col-xs-4">
                            <label for="nombre">Cuenta Bancaria Dolares</label>
                            <input id="a4" type="number" class="form-control input-sm"  name="cta_banc_dolares" placeholder="Introduce la cuenta bancaria de dolares" >
                        </div>
                        <div class="form-group col-xs-4">
                            <label>Vendedor Refacciones</label>

                            <select name="vendedor_refacciones" class="form-control input-sm" >
                                <option   value="">Selecciona una opción</option>
                                <OPTION VALUE="Carlos Hernández Maza">Carlos Hernández Maza</OPTION>
                                <OPTION VALUE="Elvira Parreño Arango">Elvira Parreño Arango</OPTION>
                                <OPTION VALUE="Ilse Alejandra Bazaldua Zúñiga">Ilse Alejandra Bazaldua Zúñiga</OPTION>
                                <OPTION VALUE="Karen Orlene Hernández Villagrán">Karen Orlene Hernández Villagrán</OPTION>
                                <OPTION VALUE="César Alberto Cantú Omaña">César Alberto Cantú Omaña</OPTION>
                                <OPTION VALUE="Josué Aldo Guillén Ortega">Josué Aldo Guillén Ortega</OPTION>
                            </select>
                        </div>
                    </div>

                    <br>
                    <div class="row">





                        <div class="form-group col-xs-4">
                            <label>Vendedor Maquinaria</label>

                            <select name="vendedor_maquinaria" class="form-control input-sm" >
                                <option  value="">Selecciona una opción</option>
                                <OPTION VALUE="Sergio Peñafiel Soto">Sergio Peñafiel Soto</OPTION>
                                <OPTION VALUE="Gerardo López Martínez">Gerardo López Martínez</OPTION>
                                <OPTION VALUE="Benjamín López Gamboa">Benjamín López Gamboa</OPTION>
                                <OPTION VALUE="Alejandra de Jesús Maldonado Martínez">Alejandra de Jesús Maldonado Martínez</OPTION>

                            </select>

                        </div>
                        <div class="form-group col-xs-4">
                            <label for="nombre">Forma de Pago</label>
                            <select name="forma_pago" id="forma_pago" class="form-control input-sm" require>
                                <option  value="">Seleccciona una opción</option>
                                <OPTION VALUE="01-Eféctivo">01-Eféctivo</OPTION>
                                <OPTION VALUE="02-Cheque nominátivo">02-Cheque nominátivo</OPTION>
                                <OPTION VALUE="03-Transferencia electrónica de fondos">03-Transferencia electrónica de fondos</OPTION>
                                <OPTION VALUE="04-Tarjeta de crédito">04-Tarjeta de crédito</OPTION>
                                <OPTION VALUE="05-Monedero electrónico">05-Monedero electrónico</OPTION>
                                <OPTION VALUE="06-Dinero electrónico">06-Dinero electrónico</OPTION>
                                <OPTION VALUE="08-Vales de despensa">08-Vales de despensa</OPTION>
                                <OPTION VALUE="28-Tarjeta de débito">28-Tarjeta de débito</OPTION>
                                <OPTION VALUE="29-Tarjeta de servicio">29-Tarjeta de servicio</OPTION>
                                <OPTION VALUE="99-Otros">99-Otros</OPTION>

                            </select> 
                        </div>

                        <div class="form-group col-xs-4">
                            <label>Método de pago</label>


                            <select name="metodo_pago" id="metodo_pago" class="form-control input-sm" require>
                                <option  value="">Seleccciona una opción</option>
                                <OPTION VALUE="PUE Pago en una sola exhibición">PUE Pago en una sola exhibición</OPTION>
                                <OPTION VALUE="PPD Pago en parcialidades o diferido">PPD Pago en parcialidades o diferido</OPTION>


                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">



                        <div class="form-group col-xs-4">
                            <label for="nombre">Uso de cfdi</label>
                            <select name="uso_de_cfdi" id="uso_de_cfdi" class="form-control input-sm" require>
                                <option  value="">Selecciona una opción</option>
                                <option value="G01 Adquisión de mercancías">G01 Adquisión de mercancías</option>
                                <option value="G02 Devolución, descuentos o bonificaciones">G02 Devolución, descuentos o bonificaciones</option>
                                <option value="G03 Gastos en general">G03 Gastos en general</option>
                                <option value="I01 Construcciones">I01 Construcciones</option>
                                <option value="I02 Mobiliario y equipo de oficina por inversiones">I02 Mobiliario y equipo de oficina por inversiones</option>
                                <option value="I03 Equipo de transporte">I03 Equipo de transporte</option>
                                <option value="I04 Equipo de cómputo y accesorios">I04 Equipo de cómputo y accesorios</option>
                                <option value="I05 Dados, troqueles, moldes, matrices y herramental">I05 Dados, troqueles, moldes, matrices y herramental</option>
                                <option value="I06 Comunicaciones telefónicas">I06 Comunicaciones telefónicas</option>
                                <option value="I07 Comunicaciones satelitales">I07 Comunicaciones satelitales</option>
                                <option value="I08 Otra maquinaria y equipo.">I08 Otra maquinaria y equipo</option>
                                <option value="D01 Honorarios médicos, dentales y gastos hospitalarios">D01 Honorarios médicos, dentales y gastos hospitalarios</option>
                                <option value="D02 Gastos médicos por incapacidad o discapacidad">D02 Gastos médicos por incapacidad o discapacidad</option>
                                <option value="D03 Gastos funerales">D03 Gastos funerales</option>
                                <option value="D04 Donativos">D04 Donativos</option>
                                <option value="D05 Intereses reales efectivamente pagados por créditos hipotecarios (casa habitación)">D05 Intereses reales efectivamente pagados por créditos hipotecarios (casa habitación)</option>
                                <option value="D06 Aportaciones voluntarias al SAR">D06 Aportaciones voluntarias al SAR</option>
                                <option value="D07 Primas por seguros de gastos médicos">D07 Primas por seguros de gastos médicos</option>
                                <option value="D08 Gastos de transportación escolar obligatoria">D08 Gastos de transportación escolar obligatoria</option>
                                <option value="D09 Depósitos en cuentas para el ahorro, primas que tengan como base planes de pensiones">D09 Depósitos en cuentas para el ahorro, primas que tengan como base planes de pensiones</option>
                                <option value="D10 Pagos por servicios educativos (colegiaturas)">D10 Pagos por servicios educativos (colegiaturas)</option>
                                <option value="P01 Por definir">P01 Por definir</option>



                            </select>
                        </div>







                        <div class="form-group col-xs-4">
                            <label for="nombre">Dirección Entrega</label>
                            <input id="a5" type="text" class="form-control input-sm"  name="direccion_entrega" placeholder="Introduce la dirección" >
                        </div>


                    </div>
                </div>
        </div>
        <br>
        <center>
            <input title="Da clic para guardar los datos" class="btn btn-success" type="submit" value="Agregar" data-toggle="tooltip" data-placement="right">
            <a title="Da clic para regresar al menú" href="javascript:window.history.go(-1);"class="btn btn-danger">Cancelar</a>
        </center>

    </div>
</form>
</div> 
</body>
</html>



