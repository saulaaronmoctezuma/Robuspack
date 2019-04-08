<head>

    <title>Robuspack</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">

    <link rel="icon" href="<?= base_url('assets/images/robuspack_icon.PNG') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    $result = $this->User_model->getAllSettings();
    $theme = $result->theme;
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $theme; ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'public/css/main.css' ?>">
</head>   

<div id="maquinaria" style="margin-top:1px;">
    <div class="container" >      
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Bienvenido</strong> Agrega los datos segun corresponda
        </div>
        <h1>Gestión de Empresas</h1>
        <MARQUEE SCROLLDELAY =200></MARQUEE>
        <form name="formulario" id="formal" role="form" action="<?= base_url('Empresa/formularioAgregar') ?>" method="POST" onsubmit="return valida()">



            <div class="form-group">
                <input type="hidden" class="form-control" id="id_clienteseguimiento"  name="id_empresa">
            </div>

            <div class="row">

                <!--  <div class="form-group col-xs-4">
                      <label for="nombre">Estado </label>
                      <input id="a1" type="text" class="form-control"  name="estado" >
                  </div>-->

                <div class="form-group col-xs-4">
                    <label for="nombre">Nombre de la Empresa </label>
                    <input id="a3" type="text" class="form-control"  name="nombre_empresa" placeholder="Ingresa el nombre de la empresa" >
                </div>


                <div class="form-group col-xs-4">
                    <label>Estado</label>
                    <select name="estado"  class="form-control input-sm" require>
                        <option  value="">Selecciona una opción</option>
                        <OPTION VALUE="Aguascalientes">Aguascalientes</OPTION>
                        <OPTION VALUE="Baja California">Baja California</OPTION>
                        <OPTION VALUE="Baja California Sur">Baja California Sur </OPTION>
                        <OPTION VALUE="Campeche">Campeche</OPTION>
                        <OPTION VALUE="Chihuahua">Chihuahua</OPTION>
                        <OPTION VALUE="Chiapas">Chiapas</OPTION>
                        <OPTION VALUE="Coahuila">Coahuila</OPTION>
                        <OPTION VALUE="Colima">Colima</OPTION>
                        <OPTION VALUE="Durango">Durango</OPTION>
                        <OPTION VALUE="Guanajuato">Guanajuato</OPTION>
                        <OPTION VALUE="Guerrero">Guerrero</OPTION>
                        <OPTION VALUE="Hidalgo">Hidalgo</OPTION>
                        <OPTION VALUE="Jalisco">Jalisco</OPTION>
                        <OPTION VALUE="México">México</OPTION>
                        <OPTION VALUE="Michoacán">Michoacán</OPTION>
                        <OPTION VALUE="Morelos">Morelos</OPTION>
                        <OPTION VALUE="Nayarit">Nayarit</OPTION>
                        <OPTION VALUE="Nuevo León">Nuevo León</OPTION>
                        <OPTION VALUE="Oaxaca">Oaxaca</OPTION>
                        <OPTION VALUE="Puebla">Puebla</OPTION>
                        <OPTION VALUE="Querétaro">Querétaro</OPTION>
                        <OPTION VALUE="Quintana Roo">Quintana Roo</OPTION>
                        <OPTION VALUE="San Luis Potosí">San Luis Potosí</OPTION>
                        <OPTION VALUE="Sinaloa">Sinaloa</OPTION>
                        <OPTION VALUE="Sonora">Sonora</OPTION>
                        <OPTION VALUE="Tabasco">Tabasco</OPTION>
                        <OPTION VALUE="Tamaulipas">Tamaulipas</OPTION>

                        <OPTION VALUE="Tlaxcala">Tlaxcala</OPTION>
                        <OPTION VALUE="Veracruz">Veracruz</OPTION>
                        <OPTION VALUE="Yucatán">Yucatán</OPTION>
                        <OPTION VALUE="Zacatecas">Zacatecas</OPTION>



                    </select>
                </div>

                <div class="form-group col-xs-4">
                    <label for="nombre">Ciudad </label>
                    <input id="a2" type="text" class="form-control"  name="ciudad" placeholder="Ingresa el nombre de la ciudad">
                </div>

            </div>
            <br>
            <div class="row">
                <!--<div class="form-group col-xs-4">
                    <label for="nombre">Estatus </label>
                    <input id="a4" type="text" class="form-control"  name="estatus" placeholder="Ingresa el estatus de la empresa" >
                </div>-->
                <div class="form-group col-xs-4">
                    <label for="nombre">Nombre del Contacto </label>
                    <input id="a4" type="text" class="form-control"  name="nombre" placeholder="Ingresa el nombre del contacto" >
                </div>


                <div class="form-group col-xs-4">
                    <label for="nombre">Cargo </label>
                    <input id="a4" type="text" class="form-control"  name="cargo" placeholder="Ingresa el cargo">
                </div>

                <div class="form-group col-xs-4">
                    <label for="nombre">Email </label>
                    <input id="a4" type="text" class="form-control"  name="email" placeholder="Ingresa el correo de la empresa" >
                </div>



            </div>
            <br>

            <div class="row">
                <div class="form-group col-xs-4">
                    <label for="nombre">Movil </label>
                    <input id="a2" type="text" class="form-control"  name="tel1" placeholder="Ingresa el número de telefono de la empresa" >
                </div>
                <div class="form-group col-xs-4">
                    <label for="nombre">Email 3 </label>
                    <input id="a4" type="text" class="form-control"  name="email3" placeholder="Ingresa el correo de la empresa" >
                </div>

            </div>
            <br>
            <div class="row">
                <div class="form-group col-xs-4">
                    <label>Movil 2 </label>
                    <input id="a3" type="text" class="form-control"  name="tel2" placeholder="Ingresa el número de telefono de la empresa" >
                </div>


                <div class="form-group col-xs-4">
                    <label for="nombre">Comentarios</label>
                    <textarea name="comentarios" class="form-control input-sm" style="resize:none;"   rows="5" cols="80" placeholder="Ingresa una observación"></textarea>
                </div>



                <!-- <div class="form-group col-xs-4">
                    <label for="nombre">Marketing </label>
                    <input id="a1" type="text" class="form-control"  name="marketing" >
                </div>-->





            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h>
                <div class="row">


                    <div class="form-group col-xs-4">
                        <label>Marketing</label>
                        <select name="marketing" class="form-control input-sm" require>
                            <option  value="">Selecciona una opción</option>
                            <OPTION VALUE="1">1</OPTION>
                            <OPTION VALUE="2">2</OPTION>
                            <OPTION VALUE="3">3</OPTION>
                            <OPTION VALUE="4">4</OPTION>
                            <OPTION VALUE="5">5</OPTION>
                        </select>
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="nombre">Teléfono 3 </label>
                        <input id="a4" type="text" class="form-control"  name="tel3" placeholder="Ingresa el número de telefono de la empresa">
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="nombre">Página Web </label>
                        <input id="a4" type="text" class="form-control"  name="pag_web" placeholder="Ingresa la página web de la empresa">
                    </div>
                </div>
                <br>





                <div class="row">

                    <div class="form-group col-xs-4">
                        <label>Estatus</label>
                        <select name="estatus" class="form-control input-sm" require>
                            <option  value="">Selecciona una opción</option>
                            <OPTION VALUE="Sin Contactar">Sin Contactar</OPTION>
                            <OPTION VALUE="Envió de Información">Envió de Información</OPTION>
                            <OPTION VALUE="Visita Programada">Visita Programada</OPTION>
                            <OPTION VALUE="Visita Realizada">Visita Realizada</OPTION>
                            <OPTION VALUE="En Cotización">En Cotización</OPTION>
                            <OPTION VALUE="Sin Compra Realizada">Sin Compra Realizada</OPTION>
                            <OPTION VALUE="Venta Cerrada">Venta Cerrada</OPTION>
                        </select>
                    </div>
                    <!--<div class="form-group col-xs-4">
                        <label for="nombre">Vendedor </label>
                        <input id="a4" type="text" class="form-control"  name="vendedor" >
                    </div>-->

                    <div class="form-group col-xs-4">
                        <label>Vendedor</label>
                        <select name="vendedor" class="form-control input-sm" require>
                            <option  value="">Selecciona una opción</option>
                            <OPTION VALUE="Sergio Peñafiel">Sergio Peñafiel</OPTION>
                            <OPTION VALUE="César Cantú">César Cantú</OPTION>
                            <OPTION VALUE="Alejandra Maldonado">Alejandra Maldonado</OPTION>
                            <OPTION VALUE="Gerardo Lopéz">Gerardo Lopéz</OPTION>
                            <OPTION VALUE="Benjamín Lopéz">Benjamín Lopéz</OPTION>
                            <OPTION VALUE="Carlos Hernández">Carlos Hernández</OPTION>
                            <OPTION VALUE="Elvira Parreño">Elvira Parreño</OPTION>
                            <OPTION VALUE="Orlene Hernández">Orlene Hernández</OPTION>
                            <OPTION VALUE="Reyna Correa">Reyna Correa</OPTION>
                            <OPTION VALUE="No Aplica">No Aplica</OPTION>

                        </select>
                    </div>


                    <div class="form-group col-xs-4">
                        <label for="nombre">Dirección </label>
                        <input id="a4" type="text" class="form-control"  name="direccion" placeholder="Ingresa la dirección de la empresa" >
                    </div>


                </div>
                <br>








                <div class="row">

                    <div class="form-group col-xs-4">
                        <label for="nombre">Domicilio Secundario </label>
                        <input id="a4" type="text" class="form-control"  name="dom_secundario"  placeholder="Ingresa el domicilio secundario de la empresa">
                    </div>
                    <div class="form-group col-xs-4">
                        <label for="nombre">Código Postal </label>
                        <input id="a4" type="text" class="form-control"  name="cp" placeholder="Ingresa el código postal de la empresa" >
                    </div>

                    <div class="form-group col-xs-4">
                        <label>Integrados</label>
                        <select name="integrados" class="form-control input-sm" require>
                            <option  value="">Selecciona una opción</option>
                            <OPTION VALUE="Sí">Sí</OPTION>
                            <OPTION VALUE="No">No</OPTION>

                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <!-- <div class="form-group col-xs-4">
                         <label for="nombre">Integrados </label>
                         <input id="a4" type="text" class="form-control"  name="integrados" >
                     </div>-->



                    <!-- <div class="form-group col-xs-4">
                          <label for="nombre">Corrugadora </label>
                          <input id="a4" type="text" class="form-control"  name="corrugadora" >
                      </div>-->

                    <div class="form-group col-xs-4">
                        <label>Corrugadora</label>
                        <select name="corrugadora" class="form-control input-sm" require>
                            <option  value="">Selecciona una opción</option>
                            <OPTION VALUE="Sí">Sí</OPTION>
                            <OPTION VALUE="No">No</OPTION>

                        </select>
                    </div>




                    <!--<div class="form-group col-xs-4">
                        <label for="nombre">Sheet Plant Size </label>
                        <input id="a4" type="text" class="form-control"  name="sheet" >
                    </div>-->
                    <div class="form-group col-xs-4">
                        <label>Sheet Plant Size</label>
                        <select name="sheet" class="form-control input-sm" require>
                            <option  value="">Selecciona una opción</option>
                            <OPTION VALUE="Pequeña">Pequeña</OPTION>
                            <OPTION VALUE="Mediana">Mediana</OPTION>
                            <OPTION VALUE="Grande">Grande</OPTION>
                        </select>
                    </div>

                    <div class="form-group col-xs-4">
                        <label>Single Face</label>
                        <select name="single" class="form-control input-sm" require>
                            <option  value="">Selecciona una opción</option>
                            <OPTION VALUE="Sí">Sí</OPTION>
                            <OPTION VALUE="No">No</OPTION>
                            <
                        </select>
                    </div>



                </div><br>
                <div class="row">
                    <!-- <div class="form-group col-xs-4">
                         <label for="nombre">Single Face</label>
                         <input id="a4" type="text" class="form-control"  name="single" >
                     </div>-->




                    <!-- <div class="form-group col-xs-4">
                         <label for="nombre">Comercializadora </label>
                         <input id="a4" type="text" class="form-control"  name="comercializadora" >
                     </div>-->
                    <div class="form-group col-xs-4">
                        <label>Comercializadora</label>
                        <select name="comercializadora" class="form-control input-sm" require>
                            <option  value="">Selecciona una opción</option>
                            <OPTION VALUE="Sí">Sí</OPTION>
                            <OPTION VALUE="No">No</OPTION>
                            <
                        </select>
                    </div>
                    <div class="form-group col-xs-4">
                        <label for="nombre">Litografía </label>
                        <input id="a4" type="text" class="form-control"  name="litografia" placeholder="Ingresa la litografía" >
                    </div>

                    <div class="form-group col-xs-4">
                        <label for="nombre">Volúmen en Pesos</label>
                        <input id="a4" type="text" class="form-control"  name="volumen" placeholder="Ingresa el volumen">
                    </div>
                </div><BR>
                <center>
                    <input title="Da clic para guardar los datos" class="btn btn-success" type="submit" value="Agregar" data-toggle="tooltip" data-placement="right">
                    <a title="Da clic para regresar al menú" href="javascript:window.history.go(-1);"class="btn btn-danger">Cancelar</a>
                </center>
        </form>
    </div>
</div>
</body>
</html>



