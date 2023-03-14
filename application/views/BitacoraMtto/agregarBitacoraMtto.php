
   

    <script languaje="javascript">
        function habilitar(form)
        {
            if (form.tipo[2].selected === true)
            {
                document.getElementById("capacitacion").type = "hidden";
                document.getElementById("aceptacion_capacitacion").type = "hidden";
                document.getElementById("lbl_capacitacion").style.visibility = "hidden";
                document.getElementById("lbl_aceptacion_capacitacion").style.visibility = "hidden";
            }
            else if (form.tipo[3].selected === true)
            {
                document.getElementById("capacitacion").type = "hidden";
                document.getElementById("aceptacion_capacitacion").type = "hidden";
                document.getElementById("lbl_capacitacion").style.visibility = "hidden";
                document.getElementById("lbl_aceptacion_capacitacion").style.visibility = "hidden";
            }
            else if (form.tipo[1].selected === true)
            {
                document.getElementById("capacitacion").type = "visibility";
                document.getElementById("aceptacion_capacitacion").type = "visibility";
                document.getElementById("lbl_capacitacion").style.visibility = "visible";
                document.getElementById("lbl_aceptacion_capacitacion").style.visibility = "visible";
            }
        }
    </script>
    
    <script>
        
    </script>
</head>
 <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
       
    

<div id="maquinaria">
    <div class="container" >      
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Bienvenido</strong> Agrega los datos segun corresponda
        </div>
        <center><h1>Gestión de Bitácora</h1></center>
        <MARQUEE SCROLLDELAY =200></MARQUEE>
        <form name="formulario" id="formal" role="form" action="<?= base_url('BitacoraMtto/formularioAgregar') ?>" method="POST" onsubmit="return validar()">



            <div class="form-group">
                <input type="hidden" class="form-control" id="id_bitacora"  name="id_bitacora">
            </div>

            <div class="row">

                <div class="form-group col-xs-3">
                    <label for="nombre">Cliente</label>
                    <select required id="cliente" class="form-control input-sm select2"  name="planta" <?php echo form_dropdown('clienteCombo', $clienteCombo, '#', 'id="clienteCombo"'); ?> </select>
                </div>


                <div class="form-group col-xs-3">
                    <div class="form-group">
                        <label for="maquina">Modelo </label>
                        <input id="a2" type="text" class="form-control input-sm"  name="modelo" >
                    </div>
                </div>

                <div class="form-group col-xs-3">
                    <div class="form-group">
                        <label for="maquina"># Máquina </label>
                        <input id="a2" type="text" class="form-control input-sm"  name="maquina" >
                    </div>
                </div>

                <div class="form-group col-xs-3">
                    <div class="form-group">
                        <label for="fecha">Fecha </label>
                        <input id="a3" type="text" class="form-control input-sm"  name="fecha" >
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group col-xs-12 ">

                    <label>Motivo de la asistencia por parte del Técnico</label>
                    <textarea name="motivo_asistencia" class="form-control input-sm"  rows="6" cols="60" style="resize:none;" placeholder="Ingresa el motivo de asistencia" required></textarea>
                </div>
            </div>

            <br>
            <div class="row">


                <div class="form-group col-xs-4">
                    <div class="form-group">
                        <label>Tipo de servicio</label>

                        <select name="tipo" id="tipo" onChange="habilitar(this.form)" class="form-control input-sm" required>
                            <option  value="">Selecciona una opción</option>
                            <OPTION VALUE="Instalación">Instalación</OPTION>
                            <OPTION VALUE="Garantía">Garantía</OPTION>
                            <OPTION VALUE="Servicio">Servicio</OPTION>
                        </select>
                    </div> 
                </div> 

                <div class="form-group col-xs-4">
                    <div class="form-group">
                        <label>Mantenimiento</label>

                        <select name="mantenimiento" id="mantenimiento" class="form-control input-sm" require>
                            <option  value="">Selecciona una opción</option>
                            <OPTION VALUE="N/A">N/A</OPTION>
                            <OPTION VALUE="Correctivo">Correctivo</OPTION>
                            <OPTION VALUE="Preventivo">Preventivo</OPTION>
                            <OPTION VALUE="Predictivo">Predictivo</OPTION>
                        </select>
                    </div> 
                </div>  

                <div class="form-group col-xs-4">
                    <label>Consecutivo</label>

                    <input id="consecutivo" type="text" class="form-control input-sm"  name="consecutivo" ><br>

                </div>
            </div> 

            <input id="a3" type="hidden" class="form-control input-sm"  name="reporto" >



            <label for="nombre">Descripción de Actividades Efectuadas</label>

            <div class="row">

                <div class="form-group col-xs-6">
                    <textarea name="des_acti1" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 1" require></textarea>
                </div>

                <div class="form-group col-xs-6">

                    <textarea name="des_acti9" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 9" require></textarea>
                </div>
            </div>


            <div class="row">
                <div class="form-group col-xs-6">
                    <textarea name="des_acti2" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 2" require></textarea>
                </div>

                <div class="form-group col-xs-6">

                    <textarea name="des_acti10" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 10" require></textarea>
                </div>
            </div>

            <div class="row">

                <div class="form-group col-xs-6">
                    <textarea name="des_acti3" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 3" require></textarea>
                </div>

                <div class="form-group col-xs-6">

                    <textarea name="des_acti11" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 11" require></textarea>
                </div>
            </div>


            <div class="row">
                <div class="form-group col-xs-6">
                    <textarea name="des_acti4" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 4" require></textarea>
                </div>

                <div class="form-group col-xs-6">

                    <textarea name="des_acti12" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 12" require></textarea>
                </div>
            </div>

            <div class="row">

                <div class="form-group col-xs-6">
                    <textarea name="des_acti5" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 5" require></textarea>
                </div>

                <div class="form-group col-xs-6">

                    <textarea name="des_acti13" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 13" require></textarea>
                </div>
            </div>


            <div class="row">
                <div class="form-group col-xs-6">
                    <textarea name="des_acti6" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 6" require></textarea>
                </div>

                <div class="form-group col-xs-6">

                    <textarea name="des_acti14" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 14" require></textarea>
                </div>
            </div>
            <div class="row">

                <div class="form-group col-xs-6">
                    <textarea name="des_acti7" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 7"  require></textarea>
                </div>

                <div class="form-group col-xs-6">

                    <textarea name="des_acti15" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 15" require></textarea>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-6">
                    <textarea name="des_acti8" class="form-control input-sm"  rows="5" cols="80" style="resize:none;" placeholder="Ingresa una Descripción 8" require></textarea>
                </div>
            </div>










            <label for="ref_recomen">Refacciones Usadas </label>

            <div class="row">
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas1" placeholder="1">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas9" placeholder="9" >
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas17" placeholder="17"  >
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas25" placeholder="25">
                </div>
            </div>


            <div class="row">
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas2" placeholder="2">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas10" placeholder="10">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas18" placeholder="18">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas26" placeholder="26">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas3" placeholder="3">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas11" placeholder="11">
                </div>



                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas19" placeholder="19">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas27" placeholder="27">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas4" placeholder="4">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas12" placeholder="12" >
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas20" placeholder="20">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas28" placeholder="28" >
                </div>
            </div>
            <div class="row">
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas5" placeholder="5" >
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas13" placeholder="13" >
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas21" placeholder="21" >
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas29" placeholder="29" >
                </div>
            </div>

            <div class="row">

                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas6" placeholder="6" >
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas14" placeholder="14" >
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas22" placeholder="22" >
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas30" placeholder="30" >
                </div>
            </div>
            <div class="row">
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas7" placeholder="7">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas15" placeholder="15">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas23" placeholder="23">
                </div>

            </div>

            <div class="row">
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm"  name="ref_usadas8" placeholder="8">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas16" placeholder="16" >
                </div>
                <div class="form-group col-xs-3">
                    <input id="a1" type="text" class="form-control input-sm" name="ref_usadas24" placeholder="24" >
                </div>

            </div>




            <br>
            <label for="ref_recomen">Refacciones Recomendadas </label>

            <div class="row">

                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen1" placeholder="1" >
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen9" placeholder="9"  >
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen17"  placeholder="17">
                </div>

                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen25" placeholder="25">
                </div>
            </div> 



            <div class="row">

                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen2" placeholder="2">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen10" placeholder="10" >
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen18"  placeholder="18">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen26" placeholder="26">
                </div>

            </div> 

            <div class="row">

                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen3" placeholder="3">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen11" placeholder="11">
                </div>


                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen19" placeholder="19">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen27" placeholder="27">
                </div>

            </div>

            <div class="row">  
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen4" placeholder="4">
                </div>

                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen12" placeholder="12">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen20" placeholder="20" >
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen28" placeholder="28">
                </div>

            </div>


            <div class="row">     
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen5" placeholder="5">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen13" placeholder="13">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen21" placeholder="21">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen29" placeholder="29">
                </div>
            </div>


            <div class="row">


                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen6" placeholder="6">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen14" placeholder="14">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen22" placeholder="22">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen30" placeholder="30">
                </div>
            </div>



            <div class="row">

                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen7" placeholder="7">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen15" placeholder="15">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen23" placeholder="23">
                </div>

            </div>

            <div class="row">

                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen8" placeholder="8">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen16" placeholder="16">
                </div>
                <div class="form-group col-xs-3">
                    <input id="a2" type="text" class="form-control input-sm"  name="ref_recomen24" placeholder="24">
                </div>
            </div>
            <br>

           
            <!--aqui va la capacion-->
            <div class="row">
                <div class="form-group col-xs-12">

                    <label id="lbl_capacitacion">Capacitación</label>
                    <input id="capacitacion" type="text" class="form-control input-sm"  name="capacitacion" placeholder="Capacitación" required>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="form-group col-xs-12">

                    <label id="lbl_aceptacion_capacitacion">Aceptacion de la capacitación</label>
                    <input required id="aceptacion_capacitacion" type="text" class="form-control input-sm"  name="aceptacion_capacitacion" placeholder="Ingresa nombre completo y puesto del trabajo">
                </div>
            </div>

            <br>

            <!--aqui va la capacion-->
            <div class="row">
                <div class="form-group col-xs-12 ">

                    <label>Observaciones del Técnico</label>
                    <textarea name="recomendaciones" class="form-control input-sm"  rows="6" cols="60" style="resize:none;" placeholder="Ingresa una(s) observacion(es)" require></textarea>
                </div>
            </div>


            <div class="form-group">
                <br>
                <label for="proxima_inter">Proxima Fecha de Intervención sugerida Robuspack </label>
                <input id="a4" type="text" class="form-control input-sm"  name="proxima_inter" >
            </div>
            <input type="hidden" class="form-control" id="foto"  name="foto">
            
            <br><br>
            <center>

                <input class="btn btn-success" id="botonOrden" type="submit" value="Agregar" data-toggle="tooltip" data-placement="right">
                <a title="Da clic para regresar" href="javascript:window.history.go(-1);"class="btn btn-danger">Cancelar</a>
            </center>

    </div>
</form>
</div> 

  <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
      $(".select2").select2({
          placeholder: "Selecciona una opción",
          allowClear: true
      });
      
    </script>


</body>
</html>


