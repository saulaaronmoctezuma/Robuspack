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
        
            <form action="<?= base_url('Cliente/clienteModificar') ?>" method="post" align="center" onsubmit="return vali()">
                <h1>Actualizar datos</h1>
              
                <div class="container" >
                    <table class="table table-bordered table-striped">
                        <tbody>
                            
                                <input class="form-control input-sm" type="hidden" name="id_cliente" value="<?= $id_cliente ?>">
                            
                            <tr>
                                <td>Grupo</td>
                                <td><input id="a1" class="form-control input-sm" type="text" name="grupo" value="<?= $grupo ?>"></td>
                            </tr> 
                            <tr>
                                <td>Cliente</td>
                                <td><input id="a2" class="form-control input-sm" type="text" name="cliente" value="<?= $cliente ?>"></td>
                            </tr>
                            <tr>
                                <td>Cliente SAE Pesos</td>
<<<<<<< HEAD
                                <td><input id="a3" class="form-control input-sm" type="text" name="cliente_sae"  value="<?= $cliente_sae ?>" ></td>
                            </tr>
                            <tr>
                                <td>Cliente SAE Doláres</td>
                                <td><input id="a3" class="form-control input-sm" type="text" name="cliente_sae_dolares"  value="<?= $cliente_sae_dolares ?>" ></td>
=======
                                <td><input id="a3" class="form-control input-sm" type="number" name="cliente_sae"  value="<?= $cliente_sae ?>" ></td>
                            </tr>
                            <tr>
                                <td>Cliente SAE Doláres</td>
                                <td><input id="a3" class="form-control input-sm" type="number" name="cliente_sae_dolares"  value="<?= $cliente_sae_dolares ?>" ></td>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            </tr>
                            <tr>
                                <td>Razón Social</td>
                                <td><input id="a4" class="form-control input-sm" type="text" name="razon_soc"  value="<?= $razon_soc ?>"></td>
                            </tr>
                            <tr>
                                <td>RFC</td>
                                <td><input id="a4" class="form-control input-sm" type="text" name="rfc" value="<?= $rfc ?>"></td>
                            </tr>
                            <tr>
                                <td>Dirección</td>
                                <td><input id="a5" class="form-control input-sm" type="text" name="direccion"  value="<?= $direccion ?>"></td>
                            </tr>
                            <tr>
                                <td>Teléfono Celular</td>
                                <td><input id="a6" class="form-control input-sm" type="tel" name="tel_cel"  value="<?= $tel_cel ?>"></td>
                            </tr>

                            <tr>
                                <td>Extensión</td>
                                <td><input id="a6" class="form-control input-sm" type="number" name="extension" value="<?= $extension ?>"></td>
                            </tr>
                            <tr>
                                <td>Correo Compras</td>
                                <td><input id="a9" class="form-control input-sm" type="text" name="correo" value="<?= $correo ?>"></td>
                            </tr>
                            <tr>
                                <td>Correo Cuentas por pagar</td>
                                <td><input id="a9" class="form-control input-sm" type="text" name="correo1" value="<?= $correo1 ?>"></td>
                            </tr>
                            <tr>
                                <td>Correo Mantenimiento</td>
                                <td><input id="a9" class="form-control input-sm"  type="text" name="correo2" value="<?= $correo2 ?>"></td>
                            </tr>
                            <tr>
                                <td>Otro Correo</td>
                                <td><input id="a9" class="form-control input-sm" type="text" name="correo3" value="<?= $correo3 ?>"></td>
                            </tr>

<!--<tr>
    <td>Moneda</td>
    <td><input id="a7" class="form-control" type="tel" name="moneda" value="<?= $moneda ?>"></td>
</tr>-->

                            <tr>
                                <td>Moneda</td>

                                <td>
                                    <SELECT name="moneda" class="form-control input-sm"> 
                                        <optgroup label="Selecciona una opción">

                                            <option value="Pesos" <?php if ($moneda == "Pesos") {
            echo "Selected";
        } ?>>Pesos</option>
                                            <option value="Dolares" <?php if ($moneda == "Dolares") {
            echo "Selected";
        } ?>>Dolares</option>
                                            <option value="Ambos" <?php if ($moneda == "Ambos") {
            echo "Selected";
        } ?>>Ambos</option>
                                        </optgroup>
                                    </SELECT>
                                </td>
                            </tr>
                            <tr>
                                <td>Cuenta Bancaria Pesos</td>
                                <td><input id="a10" class="form-control input-sm" type="number" name="cta_banc"  value="<?= $cta_banc ?>"></td>
                            </tr>

                            <tr>
                                <td>Cuenta Bancaria Dolares</td>
                                <td><input id="a10" class="form-control input-sm" type="number" name="cta_banc_dolares"  value="<?= $cta_banc_dolares ?>"></td>
                            </tr>
                            <!--<tr>
                                <td>Vendedor Refacciones</td>
                                <td><input id="a10" class="form-control" type="text" name="vendedor_refacciones" value="<?= $vendedor_refacciones ?>"></td>
                            </tr>-->




                            <tr>
                                <td>Vendedor Refacciones / Cubiertas </td>

                                <td>
                                    <SELECT name="vendedor_refacciones" class="form-control input-sm"> 

                                        <option  value="" <?php if ($vendedor_refacciones == "") {
            echo "Selected";
        } ?>>Selecciona una opción</option>

<<<<<<< HEAD
                                       
                                        
                                    
                                    
        
        
        
         <option value="Alejandra de Jesús Maldonado Martínez" <?php if ($vendedor_refacciones == "Alejandra de Jesús Maldonado Martínez") {echo "Selected";} ?>>Alejandra de Jesús Maldonado Martínez</option>
         
         <option value="Álvaro Avila" <?php if ($vendedor_refacciones == "Álvaro Avila") {echo "Selected";} ?>>Álvaro Avila</option>
         
          <option value="Carlos Hernández Maza" <?php if ($vendedor_refacciones == "Carlos Hernández Maza") {
            echo "Selected";
        } ?>>Carlos Hernández Maza</option>
        
            <option value="Casa Robuspack" <?php if ($vendedor_refacciones == "Casa Robuspack") {
            echo "Selected";
        } ?>>Casa Robuspack</option>
        
        
         <option value="Gerardo López Martínezk" <?php if ($vendedor_refacciones == "Gerardo López Martínez") {
            echo "Selected";
        } ?>>Gerardo López Martínez</option>
        
         <option value="Josué Aldo Guillén Ortega" <?php if ($vendedor_refacciones == "Josué Aldo Guillén Ortega") {
            echo "Selected";
        } ?>>Josué Aldo Guillén Ortega</option>
        
                          <option value="Orlando Bello" <?php if ($vendedor_refacciones == "Orlando Bello") {
            echo "Selected";
        } ?>>Orlando Bello</option>
        
                      
                  <option value="Mauricio Ruiz" <?php if ($vendedor_refacciones == "Mauricio Ruiz") {
            echo "Selected";
        } ?>>Mauricio Ruiz</option>
        
                          <option value="Miguel Bazán" <?php if ($vendedor_refacciones == "Miguel Bazán") {
            echo "Selected";
        } ?>>Miguel Bazán</option>
=======
         <option value="Carlos Hernández Maza" <?php if ($vendedor_refacciones == "Carlos Hernández Maza") {echo "Selected";} ?>>Carlos Hernández Maza</option>
           <option value="Martin Sena Cardona" <?php if ($vendedor_refacciones == "Martin Sena Cardona") {echo "Selected";} ?>>Martin Sena Cardona</option>
         
         
         
                                        <option value="Elvira Parreño Arango" <?php if ($vendedor_refacciones == "Elvira Parreño Arango") {
            echo "Selected";
        } ?>>Elvira Parreño Arango</option>
                                        <option value="Ilse Alejandra Bazaldua Zúñiga" <?php if ($vendedor_refacciones == "Ilse Alejandra Bazaldua Zúñiga") {
            echo "Selected";
        } ?>>Ilse Alejandra Bazaldua Zúñiga</option>
                                        <option value="Karen Orlene Hernández Villagrán" <?php if ($vendedor_refacciones == "Karen Orlene Hernández Villagrán") {
            echo "Selected";
        } ?>>Karen Orlene Hernández Villagrán</option>
                                        <option value="César Alberto Cantú Omaña" <?php if ($vendedor_refacciones == "César Alberto Cantú Omaña") {
            echo "Selected";
        } ?>>César Alberto Cantú Omaña</option>
                                        <option value="Josué Aldo Guillén Ortega" <?php if ($vendedor_refacciones == "Josué Aldo Guillén Ortega") {
            echo "Selected";
        } ?>>Josué Aldo Guillén Ortega</option>
                                        <option value="Casa Robuspack" <?php if ($vendedor_refacciones == "Casa Robuspack") {
            echo "Selected";
        } ?>>Casa Robuspack</option>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606


                                    </SELECT>
                                </td>
                            </tr>








<!--<tr>
    <td>Vendedor Maquinaria</td>
    <td><input id="a10" class="form-control" type="text" name="vendedor_maquinaria" value="<?= $vendedor_maquinaria ?>"></td>
</tr>-->



                            <tr>
                                <td>Vendedor Maquinaria</td>

                                <td>
                                    <SELECT name="vendedor_maquinaria" class="form-control input-sm"> 

                                        <option value="" <?php if ($vendedor_maquinaria == "") {
            echo "Selected";
        } ?>>Selecciona una opción</option>

                                        <option value="Sergio Peñafiel Soto" <?php if ($vendedor_maquinaria == "Sergio Peñafiel Soto") {
                                                        echo "Selected";
                                                    } ?>>Sergio Peñafiel Soto</option>
                                        <option value="Gerardo López Martínez" <?php if ($vendedor_maquinaria == "Gerardo López Martínez") {
                                                echo "Selected";
                                            } ?>>Gerardo López Martínez</option>
                                        <option value="Benjamín López Gamboa" <?php if ($vendedor_maquinaria == "Benjamín López Gamboa") {
                                                echo "Selected";
                                            } ?>>Benjamín López Gamboa</option>
                                        <option value="Alejandra de Jesús Maldonado Martínez" <?php if ($vendedor_maquinaria == "Alejandra de Jesús Maldonado Martínez") {
                                                        echo "Selected";
                                                    } ?>>Alejandra de Jesús Maldonado Martínez</option>
<<<<<<< HEAD
                                                    
                                                    
                                                    
                                                    <option value="Josué Aldo Guillén Ortega" <?php if ($vendedor_maquinaria == "Josué Aldo Guillén Ortega") {
                                                        echo "Selected";
                                                    } ?>>Josué Aldo Guillén Ortega</option>
                                                    
                                                    
                                                     <option value="Ignacio Hernández" <?php if ($vendedor_maquinaria == "Ignacio Hernández") {
                                                        echo "Selected";
                                                    } ?>>Ignacio Hernández</option>
                                                    
                                                     <option value="Ricardo Ruiz Chavez" <?php if ($vendedor_maquinaria == "Ricardo Ruiz Chavez") {
                                                        echo "Selected";
                                                    } ?>>Ricardo Ruiz Chavez</option>
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606




                                    </SELECT>
                                </td>
                            </tr>

                            <tr>
                                <td>Forma de Pago</td>
                                <td><SELECT name="forma_pago" id="forma_pago" class="form-control input-sm"> 
                                        <optgroup label="Selecciona una opción">


                                            <option value="01-Efectivo" <?php
                                            if ($forma_pago == "01-Efectivo") {
                                                echo "Selected";
                                            }
                                            ?>>01-Efectivo</option>
                                            <option value="02-Cheque nominátivo" <?php
                                            if ($forma_pago == "02-Cheque nominátivo") {
                                                echo "Selected";
                                            }
                                            ?>>02-Cheque nominátivo</option>
                                            <option value="03-Transferencia electrónica de fondos" <?php
                                            if ($forma_pago == "03-Transferencia electrónica de fondos") {
                                                echo "Selected";
                                            }
                                            ?>>03-Transferencia electrónica de fondos</option>
                                            <option value="04-Tarjeta de crédito" <?php
                                            if ($forma_pago == "04-Tarjeta de crédito") {
                                                echo "Selected";
                                            }
                                            ?>>04-Tarjeta de crédito</option>
                                            <option value="05-Monedero electrónico" <?php
                                            if ($forma_pago == "05-Monedero electrónico") {
                                                echo "Selected";
                                            }
                                            ?>>05-Monedero electrónico</option>
                                            <option value="06-Dinero electrónico" <?php
                                            if ($forma_pago == "06-Dinero electrónico") {
                                                echo "Selected";
                                            }
                                            ?>>06-Dinero electrónico</option>
                                            <option value="08-Vales de despensa" <?php
                                            if ($forma_pago == "08-Vales de despensa") {
                                                echo "Selected";
                                            }
                                            ?>>08-Vales de despensa</option>
                                            <option value="28-Tarjeta de débito" <?php
                                            if ($forma_pago == "28-Tarjeta de débito") {
                                                echo "Selected";
                                            }
                                            ?>>28-Tarjeta de débito</option>
                                            <option value="29-Tarjeta de servicio" <?php
                                            if ($forma_pago == "29-Tarjeta de servicio") {
                                                echo "Selected";
                                            }
                                            ?>>29-Tarjeta de servicio</option>
                                            <option value="99-Otros" <?php
                                            if ($forma_pago == "99-Otros") {
                                                echo "Selected";
                                            }
                                            ?>>99-Otros</option>
                                        </optgroup>
                                    </SELECT>
                                </td>
                            </tr>

                            <tr>

                                <td>Método de pago</td>

                                <td>
                                    <SELECT name="metodo_pago" class="form-control input-sm"> 

                                        <option value="" <?php if ($metodo_pago == "") {
                                                echo "Selected";
                                            } ?>>Selecciona una opción</option>

                                        <option value="PUE Pago en una sola exhibición" <?php if ($metodo_pago == "PUE Pago en una sola exhibición") {
                                                        echo "Selected";
                                                    } ?>>PUE Pago en una sola exhibición</option>
                                        <option value="PPD Pago en parcialidades o diferido" <?php if ($metodo_pago == "PPD Pago en parcialidades o diferido") {
                                                echo "Selected";
                                            } ?>>PPD Pago en parcialidades o diferido</option>



                                    </SELECT>
                                </td>

                            </tr>

                            <tr>
                                <td>Uso de cfdi</td>

                                <td>
                                    <SELECT name="uso_de_cfdi" id="uso_de_cfdi" class="form-control input-sm"> 
                                        <optgroup label="Selecciona una opción">


                                            <option value="G01 Adquisión de mercancías" <?php
                                                    if ($uso_de_cfdi == "G01 Adquisión de mercancías") {
                                                        echo "Selected";
                                                    }
                                                    ?>>G01 Adquisión de mercancías</option>
                                            <option value="G02 Devolución, descuentos o bonificaciones" <?php
                                                    if ($uso_de_cfdi == "G02 Devolución, descuentos o bonificaciones") {
                                                        echo "Selected";
                                                    }
                                                    ?>>G02 Devolución, descuentos o bonificaciones</option>
                                            <option value="G03 Gastos en general" <?php
                                                    if ($uso_de_cfdi == "G03 Gastos en general") {
                                                        echo "Selected";
                                                    }
                                                    ?>>G03 Gastos en general</option>
                                            <option value="I01 Construcciones" <?php
                                                    if ($uso_de_cfdi == "I01 Construcciones") {
                                                        echo "Selected";
                                                    }
                                                    ?>>I01 Construcciones</option>
                                            <option value="I02 Mobiliario y equipo de oficina por inversiones" <?php
                                                    if ($uso_de_cfdi == "I02 Mobiliario y equipo de oficina por inversiones") {
                                                        echo "Selected";
                                                    }
                                                    ?>>I02 Mobiliario y equipo de oficina por inversiones</option>
                                            <option value="I03 Equipo de transporte" <?php
                                                    if ($uso_de_cfdi == "I03 Equipo de transporte") {
                                                        echo "Selected";
                                                    }
                                                    ?>>I03 Equipo de transporte</option>
                                            <option value="I04 Equipo de cómputo y accesorios" <?php
                                                    if ($uso_de_cfdi == "I04 Equipo de cómputo y accesorios") {
                                                        echo "Selected";
                                                    }
                                                    ?>>I04 Equipo de cómputo y accesorios</option>
                                            <option value="I05 Dados, troqueles, moldes, matrices y herramental" <?php
                                                    if ($uso_de_cfdi == "I05 Dados, troqueles, moldes, matrices y herramental") {
                                                        echo "Selected";
                                                    }
                                                    ?>>I05 Dados, troqueles, moldes, matrices y herramental</option>
                                            <option value="I06 Comunicaciones telefónicas" <?php
                                                    if ($uso_de_cfdi == "I06 Comunicaciones telefónicas") {
                                                        echo "Selected";
                                                    }
                                                    ?>>I06 Comunicaciones telefónicas</option>
                                            <option value="I07 Comunicaciones satelitales" <?php
                                                    if ($uso_de_cfdi == "I07 Comunicaciones satelitales") {
                                                        echo "Selected";
                                                    }
                                                    ?>>I07 Comunicaciones satelitales</option>
                                            <option value="I08 Otra maquinaria y equipo" <?php
                                                    if ($uso_de_cfdi == "I08 Otra maquinaria y equipo") {
                                                        echo "Selected";
                                                    }
                                                    ?>>I08 Otra maquinaria y equipo</option>
                                            <option value="D01 Honorarios médicos, dentales y gastos hospitalarios" <?php
                                                    if ($uso_de_cfdi == "D01 Honorarios médicos, dentales y gastos hospitalarios") {
                                                        echo "Selected";
                                                    }
                                                    ?>>D01 Honorarios médicos, dentales y gastos hospitalarios</option>
                                            <option value="D02 Gastos médicos por incapacidad o discapacidad" <?php
                                                    if ($uso_de_cfdi == "D02 Gastos médicos por incapacidad o discapacidad") {
                                                        echo "Selected";
                                                    }
                                                    ?>>D02 Gastos médicos por incapacidad o discapacidad</option>
                                            <option value="D03 Gastos funerales" <?php
                                                    if ($uso_de_cfdi == "D03 Gastos funerales") {
                                                        echo "Selected";
                                                    }
                                                    ?>>D03 Gastos funerales</option>
                                            <option value="D04 Donativos" <?php
                                                    if ($uso_de_cfdi == "D04 Donativos") {
                                                        echo "Selected";
                                                    }
                                                    ?>>D04 Donativos</option>
                                            <option value="D05 Intereses reales efectivamente pagados por créditos hipotecarios (casa habitación)" <?php
                                                    if ($uso_de_cfdi == "D05 Intereses reales efectivamente pagados por créditos hipotecarios (casa habitación)") {
                                                        echo "Selected";
                                                    }
                                                    ?>>D05 Intereses reales efectivamente pagados por créditos hipotecarios (casa habitación)</option>
                                            <option value="D06 Aportaciones voluntarias al SAR" <?php
                                                    if ($uso_de_cfdi == "D05 Intereses reales efectivamente pagados por créditos hipotecarios (casa habitación)") {
                                                        echo "Selected";
                                                    }
                                                    ?>>D05 Intereses reales efectivamente pagados por créditos hipotecarios (casa habitación)</option>
                                            <option value="D07 Primas por seguros de gastos médicos" <?php
                                                    if ($uso_de_cfdi == "D07 Primas por seguros de gastos médicos") {
                                                        echo "Selected";
                                                    }
                                                    ?>>D07 Primas por seguros de gastos médicos</option>
                                            <option value="D08 Gastos de transportación escolar obligatoria " <?php
                                            if ($uso_de_cfdi == "D08 Gastos de transportación escolar obligatoria ") {
                                                echo "Selected";
                                            }
                                                    ?>>D08 Gastos de transportación escolar obligatoria</option>
                                            <option value="D09 Depósitos en cuentas para el ahorro, primas que tengan como base planes de pensiones" <?php
                                                    if ($uso_de_cfdi == "D09 Depósitos en cuentas para el ahorro, primas que tengan como base planes de pensiones") {
                                                        echo "Selected";
                                                    }
                                                    ?>>D09 Depósitos en cuentas para el ahorro, primas que tengan como base planes de pensiones</option>


                                            <option value="D10 Pagos por servicios educativos (colegiaturas)" <?php
                                            if ($uso_de_cfdi == "D10 Pagos por servicios educativos (colegiaturas)") {
                                                echo "Selected";
                                            }
                                                    ?>>D10 Pagos por servicios educativos (colegiaturas)</option>


                                            <option value="P01 Por definir" <?php
                                            if ($uso_de_cfdi == "P01 Por definir") {
                                                echo "Selected";
                                            }
                                                    ?>>P01 Por definir</option>
                                        </optgroup>
                                    </SELECT>
                                </td>
                            </tr>

                            <tr>
                                <td>Dirección de Entrega</td>
                                <td><input id="a5" class="form-control input-sm" type="text" name="direccion_entrega"  value="<?= $direccion_entrega ?>"></td>
                            </tr>

                            <tr> 
                                <td>Empresa</td>
                                <td><SELECT name="empresa" class="form-control "> 
<!--                                            <optgroup label="Selecciona una opción">-->
                                            <option value="" <?php
                                            if ($empresa == "") {
                                                echo "Selected";
                                            }
                                                    ?>>Selecciona una opción</option>

                                            <option value="ROBUSPACK S DE RL DE CV" <?php
                                            if ($empresa == "ROBUSPACK S DE RL DE CV") {
                                                echo "Selected";
                                            }
                                                    ?>>ROBUSPACK S DE RL DE CV</option>
                                            <option value="MAKBOX S DE RL DE CV" <?php
                                            if ($empresa == "MAKBOX S DE RL DE CV") {
                                                echo "Selected";
                                            }
                                                    ?>>MAKBOX S DE RL DE CV</option>
<<<<<<< HEAD
                                                    
                                         <option value="ROBUSPACK REFACCIONES S DE RL DE CV" <?php
                                            if ($empresa == "ROBUSPACK REFACCIONES S DE RL DE CV") {
                                                echo "Selected";
                                            }
                                                    ?>>ROBUSPACK REFACCIONES S DE RL DE CV</option>
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

<!--                                        </optgroup>-->
                                    </SELECT></td>

                            </tr>

                            <tr>
                                <td colspan="2">
                                    <input  class="btn btn-success" title="Da clic para guardar los datos" type="submit" value="Guardar" >
                                    <a title="Da clic para regresar al menú" href="../../Cliente" class="btn btn-warning">Cancelar</a>
                                </td>
                            </tr>
                        </tbody>
                </div>
                </table>
        </div>
        </form>
<?php ?>


