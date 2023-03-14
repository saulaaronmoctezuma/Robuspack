<!--
 * @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 25/26/2019 Hora 10:32 am
Fecha : Ultimo Cambio 26/26/2019 Hora 12:36 Pm
 * Sistema de Control Robuspack
 */-->
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Robuspack</title>

        <!-- Bootstrap -->

      <!--<link rel="stylesheet" href="<?= base_url() ?>assets/font/glyphicons-halflings-regular.ttf-->
        <?php
        //check user level
        $dataLevel = $this->userlevel->checkLevel($role);
        //check user level
        ?>
    </head>
    
      <style>
                                                
                                                
                                                .borrarStyle:hover
{
            background-color:yellow
}


    body {
        
        font-size: 11px;
      }
                                            </style>


    <script type="text/javascript">


        function agregarCliente()
        {
            getSelectValue = document.getElementById("contacto").value;
            if (getSelectValue === "") {
                /* document.getElementById("vacio").style.display = "inline-block";
                 document.getElementById("vale_garantia").style.display = "none";
                 document.getElementById("nombre_dueno").disabled = true;
                 document.getElementById("nombre_dueno").disabled = false;
                  
                  
                 */
                document.getElementById("contacto").options[1].disabled = false;
                document.getElementById("contacto").options[2].disabled = false;
                document.getElementById("contacto").options[3].disabled = false;
                document.getElementById("contacto").options[4].disabled = false;
                document.getElementById("contacto").options[5].disabled = false;
                document.getElementById("contacto").options[6].disabled = false;
                document.getElementById("contacto").options[7].disabled = false;
                document.getElementById("contacto").options[8].disabled = false;
                 document.getElementById("contacto").options[9].disabled = false;
                document.getElementById("contacto").options[1].style.color = "black";
                document.getElementById("contacto").options[2].style.color = "black";
                document.getElementById("contacto").options[3].style.color = "black";
                document.getElementById("contacto").options[4].style.color = "black";
                document.getElementById("contacto").options[5].style.color = "black";
                document.getElementById("contacto").options[6].style.color = "black";
                document.getElementById("contacto").options[7].style.color = "black";
                document.getElementById("contacto").options[8].style.color = "black";
                document.getElementById("contacto").options[9].style.color = "black";
                document.getElementById("dueno").style.display = "none";
                document.getElementById("nombre_dueno").style.display = "none";
                document.getElementById("lbl_nombre_dueno").style.display = "none";
                document.getElementById("celular_dueno").style.display = "none";
                document.getElementById("lbl_celular_dueno").style.display = "none";
                document.getElementById("correo_personal_dueno").style.display = "none";
                document.getElementById("lbl_correo_personal_dueno").style.display = "none";
                document.getElementById("correo_empresarial_dueno").style.display = "none";
                document.getElementById("lbl_correo_empresarial_dueno").style.display = "none";
                document.getElementById("ceo").style.display = "none";
                document.getElementById("nombre_ceo").style.display = "none";
                document.getElementById("lbl_nombre_ceo").style.display = "none";
                document.getElementById("celular_ceo").style.display = "none";
                document.getElementById("lbl_celular_ceo").style.display = "none";
                document.getElementById("correo_personal_ceo").style.display = "none";
                document.getElementById("lbl_correo_personal_ceo").style.display = "none";
                document.getElementById("correo_empresarial_ceo").style.display = "none";
                document.getElementById("lbl_correo_empresarial_ceo").style.display = "none";
                document.getElementById("gerente").style.display = "none";
                document.getElementById("nombre_gerente").style.display = "none";
                document.getElementById("lbl_nombre_gerente").style.display = "none";
                document.getElementById("celular_gerente").style.display = "none";
                document.getElementById("lbl_celular_gerente").style.display = "none";
                document.getElementById("correo_personal_gerente").style.display = "none";
                document.getElementById("lbl_correo_personal_gerente").style.display = "none";
                document.getElementById("correo_empresarial_gerente").style.display = "none";
                document.getElementById("lbl_correo_empresarial_gerente").style.display = "none";
                document.getElementById("produccion").style.display = "none";
                document.getElementById("nombre_produccion").style.display = "none";
                document.getElementById("lbl_nombre_produccion").style.display = "none";
                document.getElementById("celular_produccion").style.display = "none";
                document.getElementById("lbl_celular_produccion").style.display = "none";
                document.getElementById("correo_personal_produccion").style.display = "none";
                document.getElementById("lbl_correo_personal_produccion").style.display = "none";
                document.getElementById("correo_empresarial_produccion").style.display = "none";
                document.getElementById("lbl_correo_empresarial_produccion").style.display = "none";
                document.getElementById("mtto").style.display = "none";
                document.getElementById("nombre_mtto").style.display = "none";
                document.getElementById("lbl_nombre_mtto").style.display = "none";
                document.getElementById("celular_mtto").style.display = "none";
                document.getElementById("lbl_celular_mtto").style.display = "none";
                document.getElementById("correo_personal_mtto").style.display = "none";
                document.getElementById("lbl_correo_personal_mtto").style.display = "none";
                document.getElementById("correo_empresarial_mtto").style.display = "none";
                document.getElementById("lbl_correo_empresarial_mtto").style.display = "none";
                document.getElementById("compras").style.display = "none";
                document.getElementById("nombre_compras").style.display = "none";
                document.getElementById("lbl_nombre_compras").style.display = "none";
                document.getElementById("celular_compras").style.display = "none";
                document.getElementById("lbl_celular_compras").style.display = "none";
                document.getElementById("correo_personal_compras").style.display = "none";
                document.getElementById("lbl_correo_personal_compras").style.display = "none";
                document.getElementById("correo_empresarial_compras").style.display = "none";
                document.getElementById("lbl_correo_empresarial_compras").style.display = "none";
                document.getElementById("ventas").style.display = "none";
                document.getElementById("nombre_ventas").style.display = "none";
                document.getElementById("lbl_nombre_ventas").style.display = "none";
                document.getElementById("celular_ventas").style.display = "none";
                document.getElementById("lbl_celular_ventas").style.display = "none";
                document.getElementById("correo_personal_ventas").style.display = "none";
                document.getElementById("lbl_correo_personal_ventas").style.display = "none";
                document.getElementById("correo_empresarial_ventas").style.display = "none";
                document.getElementById("lbl_correo_empresarial_ventas").style.display = "none";
                document.getElementById("otros").style.display = "none";
                document.getElementById("nombre_otros").style.display = "none";
                document.getElementById("lbl_nombre_otros").style.display = "none";
                document.getElementById("celular_otros").style.display = "none";
                document.getElementById("lbl_celular_otros").style.display = "none";
                document.getElementById("correo_personal_otros").style.display = "none";
                document.getElementById("lbl_correo_personal_otros").style.display = "none";
                document.getElementById("correo_empresarial_otros").style.display = "none";
                document.getElementById("lbl_correo_empresarial_otros").style.display = "none";


            } else if (getSelectValue === "Dueño") {

                document.getElementById("contacto").options[1].disabled = true;
                document.getElementById("contacto").options[1].style.color = "red";
                document.getElementById("nombre_dueno").style.display = "inline-block";
                document.getElementById("lbl_nombre_dueno").style.display = "inline-block";
                document.getElementById("celular_dueno").style.display = "inline-block";
                document.getElementById("lbl_celular_dueno").style.display = "inline-block";
                document.getElementById("correo_personal_dueno").style.display = "inline-block";
                document.getElementById("lbl_correo_personal_dueno").style.display = "inline-block";
                document.getElementById("correo_empresarial_dueno").style.display = "inline-block";
                document.getElementById("lbl_correo_empresarial_dueno").style.display = "inline-block";

            }
            else if (getSelectValue === "Ceo") {
                document.getElementById("contacto").options[2].disabled = true;
                document.getElementById("contacto").options[2].style.color = "red";
                document.getElementById("ceo").style.display = "inline-block";
                document.getElementById("nombre_ceo").style.display = "inline-block";
                document.getElementById("lbl_nombre_ceo").style.display = "inline-block";
                document.getElementById("celular_ceo").style.display = "inline-block";
                document.getElementById("lbl_celular_ceo").style.display = "inline-block";
                document.getElementById("correo_personal_ceo").style.display = "inline-block";
                document.getElementById("lbl_correo_personal_ceo").style.display = "inline-block";
                document.getElementById("correo_empresarial_ceo").style.display = "inline-block";
                document.getElementById("lbl_correo_empresarial_ceo").style.display = "inline-block";

            } else if (getSelectValue === "Gerente") {

                document.getElementById("contacto").options[3].disabled = true;
                document.getElementById("contacto").options[3].style.color = "red";
                document.getElementById("gerente").style.display = "inline-block";
                document.getElementById("nombre_gerente").style.display = "inline-block";
                document.getElementById("lbl_nombre_gerente").style.display = "inline-block";
                document.getElementById("celular_gerente").style.display = "inline-block";
                document.getElementById("lbl_celular_gerente").style.display = "inline-block";
                document.getElementById("correo_personal_gerente").style.display = "inline-block";
                document.getElementById("lbl_correo_personal_gerente").style.display = "inline-block";
                document.getElementById("correo_empresarial_gerente").style.display = "inline-block";
                document.getElementById("lbl_correo_empresarial_gerente").style.display = "inline-block";

            } else if (getSelectValue === "Producción") {
                document.getElementById("contacto").options[4].style.color = "red";
                document.getElementById("contacto").options[4].disabled = true;
                document.getElementById("produccion").style.display = "inline-block";
                document.getElementById("nombre_produccion").style.display = "inline-block";
                document.getElementById("lbl_nombre_produccion").style.display = "inline-block";
                document.getElementById("celular_produccion").style.display = "inline-block";
                document.getElementById("lbl_celular_produccion").style.display = "inline-block";
                document.getElementById("correo_personal_produccion").style.display = "inline-block";
                document.getElementById("lbl_correo_personal_produccion").style.display = "inline-block";
                document.getElementById("correo_empresarial_produccion").style.display = "inline-block";
                document.getElementById("lbl_correo_empresarial_produccion").style.display = "inline-block";

            } else if (getSelectValue === "Mantenimiento") {
                document.getElementById("contacto").options[5].disabled = true;
                document.getElementById("contacto").options[5].style.color = "red";
                document.getElementById("mtto").style.display = "inline-block";
                document.getElementById("nombre_mtto").style.display = "inline-block";
                document.getElementById("lbl_nombre_mtto").style.display = "inline-block";
                document.getElementById("celular_mtto").style.display = "inline-block";
                document.getElementById("lbl_celular_mtto").style.display = "inline-block";
                document.getElementById("correo_personal_mtto").style.display = "inline-block";
                document.getElementById("lbl_correo_personal_mtto").style.display = "inline-block";
                document.getElementById("correo_empresarial_mtto").style.display = "inline-block";
                document.getElementById("lbl_correo_empresarial_mtto").style.display = "inline-block";

            } else if (getSelectValue === "Compras") {
                document.getElementById("contacto").options[6].disabled = true;
                document.getElementById("contacto").options[6].style.color = "red";
                document.getElementById("compras").style.display = "inline-block";
                document.getElementById("nombre_compras").style.display = "inline-block";
                document.getElementById("lbl_nombre_compras").style.display = "inline-block";
                document.getElementById("celular_compras").style.display = "inline-block";
                document.getElementById("lbl_celular_compras").style.display = "inline-block";
                document.getElementById("correo_personal_compras").style.display = "inline-block";
                document.getElementById("lbl_correo_personal_compras").style.display = "inline-block";
                document.getElementById("correo_empresarial_compras").style.display = "inline-block";
                document.getElementById("lbl_correo_empresarial_compras").style.display = "inline-block";

            } else if (getSelectValue === "Ventas") {
                document.getElementById("contacto").options[7].disabled = true;
                document.getElementById("contacto").options[7].style.color = "red";
                document.getElementById("ventas").style.display = "inline-block";
                document.getElementById("nombre_ventas").style.display = "inline-block";
                document.getElementById("lbl_nombre_ventas").style.display = "inline-block";
                document.getElementById("celular_ventas").style.display = "inline-block";
                document.getElementById("lbl_celular_ventas").style.display = "inline-block";
                document.getElementById("correo_personal_ventas").style.display = "inline-block";
                document.getElementById("lbl_correo_personal_ventas").style.display = "inline-block";
                document.getElementById("correo_empresarial_ventas").style.display = "inline-block";
                document.getElementById("lbl_correo_empresarial_ventas").style.display = "inline-block";

            } else if (getSelectValue === "Otros") {
                document.getElementById("contacto").options[8].disabled = true;
                document.getElementById("contacto").options[8].style.color = "red";
                document.getElementById("otros").style.display = "inline-block";
                document.getElementById("nombre_otros").style.display = "inline-block";
                document.getElementById("lbl_nombre_otros").style.display = "inline-block";
                document.getElementById("celular_otros").style.display = "inline-block";
                document.getElementById("lbl_celular_otros").style.display = "inline-block";
                document.getElementById("correo_personal_otros").style.display = "inline-block";
                document.getElementById("lbl_correo_personal_otros").style.display = "inline-block";
                document.getElementById("correo_empresarial_otros").style.display = "inline-block";
                document.getElementById("lbl_correo_empresarial_otros").style.display = "inline-block";

            }else if(getSelectValue === "Todos"){
                document.getElementById("contacto").options[1].disabled = true;
                document.getElementById("contacto").options[2].disabled = true;
                document.getElementById("contacto").options[3].disabled = true;
                document.getElementById("contacto").options[4].disabled = true;
                document.getElementById("contacto").options[5].disabled = true;
                document.getElementById("contacto").options[6].disabled = true;
                document.getElementById("contacto").options[7].disabled = true;
                document.getElementById("contacto").options[8].disabled = true;
                 document.getElementById("contacto").options[9].disabled = true;
                document.getElementById("contacto").options[9].style.color = "red";
                document.getElementById("contacto").options[1].style.color = "red";
                document.getElementById("contacto").options[2].style.color = "red";
                document.getElementById("contacto").options[3].style.color = "red";
                document.getElementById("contacto").options[4].style.color = "red";
                document.getElementById("contacto").options[5].style.color = "red";
                document.getElementById("contacto").options[6].style.color = "red";
                document.getElementById("contacto").options[7].style.color = "red";
                document.getElementById("contacto").options[8].style.color = "red";
                document.getElementById("dueno").style.display = "inline-block";
                document.getElementById("nombre_dueno").style.display = "inline-block";
                document.getElementById("lbl_nombre_dueno").style.display = "inline-block";
                document.getElementById("celular_dueno").style.display = "inline-block";
                document.getElementById("lbl_celular_dueno").style.display = "inline-block";
                document.getElementById("correo_personal_dueno").style.display = "inline-block";
                document.getElementById("lbl_correo_personal_dueno").style.display = "inline-block";
                document.getElementById("correo_empresarial_dueno").style.display = "inline-block";
                document.getElementById("lbl_correo_empresarial_dueno").style.display = "inline-block";
                document.getElementById("ceo").style.display = "inline-block";
                document.getElementById("nombre_ceo").style.display = "inline-block";
                document.getElementById("lbl_nombre_ceo").style.display = "inline-block";
                document.getElementById("celular_ceo").style.display = "inline-block";
                document.getElementById("lbl_celular_ceo").style.display = "inline-block";
                document.getElementById("correo_personal_ceo").style.display = "inline-block";
                document.getElementById("lbl_correo_personal_ceo").style.display = "inline-block";
                document.getElementById("correo_empresarial_ceo").style.display = "inline-block";
                document.getElementById("lbl_correo_empresarial_ceo").style.display = "inline-block";
                document.getElementById("gerente").style.display = "inline-block";
                document.getElementById("nombre_gerente").style.display = "inline-block";
                document.getElementById("lbl_nombre_gerente").style.display = "inline-block";
                document.getElementById("celular_gerente").style.display = "inline-block";
                document.getElementById("lbl_celular_gerente").style.display = "inline-block";
                document.getElementById("correo_personal_gerente").style.display = "inline-block";
                document.getElementById("lbl_correo_personal_gerente").style.display = "inline-block";
                document.getElementById("correo_empresarial_gerente").style.display = "inline-block";
                document.getElementById("lbl_correo_empresarial_gerente").style.display = "inline-block";
                document.getElementById("produccion").style.display = "inline-block";
                document.getElementById("nombre_produccion").style.display = "inline-block";
                document.getElementById("lbl_nombre_produccion").style.display = "inline-block";
                document.getElementById("celular_produccion").style.display = "inline-block";
                document.getElementById("lbl_celular_produccion").style.display = "inline-block";
                document.getElementById("correo_personal_produccion").style.display = "inline-block";
                document.getElementById("lbl_correo_personal_produccion").style.display = "inline-block";
                document.getElementById("correo_empresarial_produccion").style.display = "inline-block";
                document.getElementById("lbl_correo_empresarial_produccion").style.display = "inline-block";
                document.getElementById("mtto").style.display = "inline-block";
                document.getElementById("nombre_mtto").style.display = "inline-block";
                document.getElementById("lbl_nombre_mtto").style.display = "inline-block";
                document.getElementById("celular_mtto").style.display = "inline-block";
                document.getElementById("lbl_celular_mtto").style.display = "inline-block";
                document.getElementById("correo_personal_mtto").style.display = "inline-block";
                document.getElementById("lbl_correo_personal_mtto").style.display = "inline-block";
                document.getElementById("correo_empresarial_mtto").style.display = "inline-block";
                document.getElementById("lbl_correo_empresarial_mtto").style.display = "inline-block";
                document.getElementById("compras").style.display = "inline-block";
                document.getElementById("nombre_compras").style.display = "inline-block";
                document.getElementById("lbl_nombre_compras").style.display = "inline-block";
                document.getElementById("celular_compras").style.display = "inline-block";
                document.getElementById("lbl_celular_compras").style.display = "inline-block";
                document.getElementById("correo_personal_compras").style.display = "inline-block";
                document.getElementById("lbl_correo_personal_compras").style.display = "inline-block";
                document.getElementById("correo_empresarial_compras").style.display = "inline-block";
                document.getElementById("lbl_correo_empresarial_compras").style.display = "inline-block";
                document.getElementById("ventas").style.display = "inline-block";
                document.getElementById("nombre_ventas").style.display = "inline-block";
                document.getElementById("lbl_nombre_ventas").style.display = "inline-block";
                document.getElementById("celular_ventas").style.display = "inline-block";
                document.getElementById("lbl_celular_ventas").style.display = "inline-block";
                document.getElementById("correo_personal_ventas").style.display = "inline-block";
                document.getElementById("lbl_correo_personal_ventas").style.display = "inline-block";
                document.getElementById("correo_empresarial_ventas").style.display = "inline-block";
                document.getElementById("lbl_correo_empresarial_ventas").style.display = "inline-block";
                document.getElementById("otros").style.display = "inline-block";
                document.getElementById("nombre_otros").style.display = "inline-block";
                document.getElementById("lbl_nombre_otros").style.display = "inline-block";
                document.getElementById("celular_otros").style.display = "inline-block";
                document.getElementById("lbl_celular_otros").style.display = "inline-block";
                document.getElementById("correo_personal_otros").style.display = "inline-block";
                document.getElementById("lbl_correo_personal_otros").style.display = "inline-block";
                document.getElementById("correo_empresarial_otros").style.display = "inline-block";
                document.getElementById("lbl_correo_empresarial_otros").style.display = "inline-block";

            }







        }



        
        function agregarMaquina()
        {
            getSelectValue = document.getElementById("maquina").value;
            if (getSelectValue === "") {
                
                 document.getElementById("lbl_info_maquina_1").style.display = "none";
                document.getElementById("info_maquina_1").style.display = "none";
                document.getElementById("lbl_maquina_1").style.display = "none";
                document.getElementById("lbl_modelo_maquina_1").style.display = "none";
                document.getElementById("modelo_maquina_1").style.display = "none";
                document.getElementById("lbl_medida_maquina_1").style.display = "none";
                document.getElementById("medida_maquina_1").style.display = "none";
                document.getElementById("lbl_tipo_maquina_1").style.display = "none";
                document.getElementById("tipo_maquina_1").style.display = "none";
                document.getElementById("lbl_troquel_maquina_1").style.display = "none";
                document.getElementById("troquel_maquina_1").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_1").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_1").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_1").style.display = "none";
                document.getElementById("cliente_conoce_maquina_1").style.display = "none";
               
                 document.getElementById("lbl_info_maquina_2").style.display = "none";
                document.getElementById("info_maquina_2").style.display = "none";
                document.getElementById("lbl_maquina_2").style.display = "none";
                document.getElementById("lbl_modelo_maquina_2").style.display = "none";
                document.getElementById("modelo_maquina_2").style.display = "none";
                document.getElementById("lbl_medida_maquina_2").style.display = "none";
                document.getElementById("medida_maquina_2").style.display = "none";
                document.getElementById("lbl_tipo_maquina_2").style.display = "none";
                document.getElementById("tipo_maquina_2").style.display = "none";
                document.getElementById("lbl_troquel_maquina_2").style.display = "none";
                document.getElementById("troquel_maquina_2").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_2").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_2").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_2").style.display = "none";
                document.getElementById("cliente_conoce_maquina_2").style.display = "none";


                document.getElementById("lbl_info_maquina_3").style.display = "none";
                document.getElementById("info_maquina_3").style.display = "none";
                document.getElementById("lbl_maquina_3").style.display = "none";
                document.getElementById("lbl_modelo_maquina_3").style.display = "none";
                document.getElementById("modelo_maquina_3").style.display = "none";
                document.getElementById("lbl_medida_maquina_3").style.display = "none";
                document.getElementById("medida_maquina_3").style.display = "none";
                document.getElementById("lbl_tipo_maquina_3").style.display = "none";
                document.getElementById("tipo_maquina_3").style.display = "none";
                document.getElementById("lbl_troquel_maquina_3").style.display = "none";
                document.getElementById("troquel_maquina_3").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_3").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_3").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_3").style.display = "none";
                document.getElementById("cliente_conoce_maquina_3").style.display = "none";


                document.getElementById("lbl_info_maquina_4").style.display = "none";
                document.getElementById("info_maquina_4").style.display = "none";
                document.getElementById("lbl_maquina_4").style.display = "none";
                document.getElementById("lbl_modelo_maquina_4").style.display = "none";
                document.getElementById("modelo_maquina_4").style.display = "none";
                document.getElementById("lbl_medida_maquina_4").style.display = "none";
                document.getElementById("medida_maquina_4").style.display = "none";
                document.getElementById("lbl_tipo_maquina_4").style.display = "none";
                document.getElementById("tipo_maquina_4").style.display = "none";
                document.getElementById("lbl_troquel_maquina_4").style.display = "none";
                document.getElementById("troquel_maquina_4").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_4").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_4").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_4").style.display = "none";
                document.getElementById("cliente_conoce_maquina_4").style.display = "none";
                
                
                document.getElementById("lbl_info_maquina_5").style.display = "none";
                document.getElementById("info_maquina_5").style.display = "none";
                document.getElementById("lbl_maquina_5").style.display = "none";
                document.getElementById("lbl_modelo_maquina_5").style.display = "none";
                document.getElementById("modelo_maquina_5").style.display = "none";
                document.getElementById("lbl_medida_maquina_5").style.display = "none";
                document.getElementById("medida_maquina_5").style.display = "none";
                document.getElementById("lbl_tipo_maquina_5").style.display = "none";
                document.getElementById("tipo_maquina_5").style.display = "none";
                document.getElementById("lbl_troquel_maquina_5").style.display = "none";
                document.getElementById("troquel_maquina_5").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_5").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_5").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_5").style.display = "none";
                document.getElementById("cliente_conoce_maquina_5").style.display = "none";
                
                document.getElementById("lbl_info_maquina_6").style.display = "none";
                document.getElementById("info_maquina_6").style.display = "none";
                document.getElementById("lbl_maquina_6").style.display = "none";
                document.getElementById("lbl_modelo_maquina_6").style.display = "none";
                document.getElementById("modelo_maquina_6").style.display = "none";
                document.getElementById("lbl_medida_maquina_6").style.display = "none";
                document.getElementById("medida_maquina_6").style.display = "none";
                document.getElementById("lbl_tipo_maquina_6").style.display = "none";
                document.getElementById("tipo_maquina_6").style.display = "none";
                document.getElementById("lbl_troquel_maquina_6").style.display = "none";
                document.getElementById("troquel_maquina_6").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_6").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_6").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_6").style.display = "none";
                document.getElementById("cliente_conoce_maquina_6").style.display = "none";

                
                document.getElementById("lbl_info_maquina_7").style.display = "none";
                document.getElementById("info_maquina_7").style.display = "none";
                document.getElementById("lbl_maquina_7").style.display = "none";
                document.getElementById("lbl_modelo_maquina_7").style.display = "none";
                document.getElementById("modelo_maquina_7").style.display = "none";
                document.getElementById("lbl_medida_maquina_7").style.display = "none";
                document.getElementById("medida_maquina_7").style.display = "none";
                document.getElementById("lbl_tipo_maquina_7").style.display = "none";
                document.getElementById("tipo_maquina_7").style.display = "none";
                document.getElementById("lbl_troquel_maquina_7").style.display = "none";
                document.getElementById("troquel_maquina_7").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_7").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_7").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_7").style.display = "none";
                document.getElementById("cliente_conoce_maquina_7").style.display = "none";


            } else if (getSelectValue === "1") {
                // document.getElementById("nombre_dueno").disabled = true;
                document.getElementById("lbl_info_maquina_1").style.display = "inline-block";
                document.getElementById("info_maquina_1").style.display = "inline-block";
                document.getElementById("lbl_maquina_1").style.display = "inline-block";
                document.getElementById("lbl_modelo_maquina_1").style.display = "inline-block";
                document.getElementById("modelo_maquina_1").style.display = "inline-block";
                document.getElementById("lbl_medida_maquina_1").style.display = "inline-block";
                document.getElementById("medida_maquina_1").style.display = "inline-block";
                document.getElementById("lbl_tipo_maquina_1").style.display = "inline-block";
                document.getElementById("tipo_maquina_1").style.display = "inline-block";
                document.getElementById("lbl_troquel_maquina_1").style.display = "inline-block";
                document.getElementById("troquel_maquina_1").style.display = "inline-block";
                document.getElementById("lbl_codigo_cubierta_maquina_1").style.display = "inline-block";
                document.getElementById("codigo_cubierta_maquina_1").style.display = "inline-block";
                document.getElementById("lbl_cliente_conoce_maquina_1").style.display = "inline-block";
                document.getElementById("cliente_conoce_maquina_1").style.display = "inline-block";
                
             

            
                document.getElementById("lbl_info_maquina_2").style.display = "none";
                document.getElementById("info_maquina_2").style.display = "none";
                document.getElementById("lbl_maquina_2").style.display = "none";
                document.getElementById("lbl_modelo_maquina_2").style.display = "none";
                document.getElementById("modelo_maquina_2").style.display = "none";
                document.getElementById("lbl_medida_maquina_2").style.display = "none";
                document.getElementById("medida_maquina_2").style.display = "none";
                document.getElementById("lbl_tipo_maquina_2").style.display = "none";
                document.getElementById("tipo_maquina_2").style.display = "none";
                document.getElementById("lbl_troquel_maquina_2").style.display = "none";
                document.getElementById("troquel_maquina_2").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_2").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_2").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_2").style.display = "none";
                document.getElementById("cliente_conoce_maquina_2").style.display = "none";


                document.getElementById("lbl_info_maquina_3").style.display = "none";
                document.getElementById("info_maquina_3").style.display = "none";
                document.getElementById("lbl_maquina_3").style.display = "none";
                document.getElementById("lbl_modelo_maquina_3").style.display = "none";
                document.getElementById("modelo_maquina_3").style.display = "none";
                document.getElementById("lbl_medida_maquina_3").style.display = "none";
                document.getElementById("medida_maquina_3").style.display = "none";
                document.getElementById("lbl_tipo_maquina_3").style.display = "none";
                document.getElementById("tipo_maquina_3").style.display = "none";
                document.getElementById("lbl_troquel_maquina_3").style.display = "none";
                document.getElementById("troquel_maquina_3").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_3").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_3").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_3").style.display = "none";
                document.getElementById("cliente_conoce_maquina_3").style.display = "none";


                document.getElementById("lbl_info_maquina_4").style.display = "none";
                document.getElementById("info_maquina_4").style.display = "none";
                document.getElementById("lbl_maquina_4").style.display = "none";
                document.getElementById("lbl_modelo_maquina_4").style.display = "none";
                document.getElementById("modelo_maquina_4").style.display = "none";
                document.getElementById("lbl_medida_maquina_4").style.display = "none";
                document.getElementById("medida_maquina_4").style.display = "none";
                document.getElementById("lbl_tipo_maquina_4").style.display = "none";
                document.getElementById("tipo_maquina_4").style.display = "none";
                document.getElementById("lbl_troquel_maquina_4").style.display = "none";
                document.getElementById("troquel_maquina_4").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_4").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_4").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_4").style.display = "none";
                document.getElementById("cliente_conoce_maquina_4").style.display = "none";
                
                
                document.getElementById("lbl_info_maquina_5").style.display = "none";
                document.getElementById("info_maquina_5").style.display = "none";
                document.getElementById("lbl_maquina_5").style.display = "none";
                document.getElementById("lbl_modelo_maquina_5").style.display = "none";
                document.getElementById("modelo_maquina_5").style.display = "none";
                document.getElementById("lbl_medida_maquina_5").style.display = "none";
                document.getElementById("medida_maquina_5").style.display = "none";
                document.getElementById("lbl_tipo_maquina_5").style.display = "none";
                document.getElementById("tipo_maquina_5").style.display = "none";
                document.getElementById("lbl_troquel_maquina_5").style.display = "none";
                document.getElementById("troquel_maquina_5").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_5").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_5").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_5").style.display = "none";
                document.getElementById("cliente_conoce_maquina_5").style.display = "none";
                
                document.getElementById("lbl_info_maquina_6").style.display = "none";
                document.getElementById("info_maquina_6").style.display = "none";
                document.getElementById("lbl_maquina_6").style.display = "none";
                document.getElementById("lbl_modelo_maquina_6").style.display = "none";
                document.getElementById("modelo_maquina_6").style.display = "none";
                document.getElementById("lbl_medida_maquina_6").style.display = "none";
                document.getElementById("medida_maquina_6").style.display = "none";
                document.getElementById("lbl_tipo_maquina_6").style.display = "none";
                document.getElementById("tipo_maquina_6").style.display = "none";
                document.getElementById("lbl_troquel_maquina_6").style.display = "none";
                document.getElementById("troquel_maquina_6").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_6").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_6").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_6").style.display = "none";
                document.getElementById("cliente_conoce_maquina_6").style.display = "none";

                
                document.getElementById("lbl_info_maquina_7").style.display = "none";
                document.getElementById("info_maquina_7").style.display = "none";
                document.getElementById("lbl_maquina_7").style.display = "none";
                document.getElementById("lbl_modelo_maquina_7").style.display = "none";
                document.getElementById("modelo_maquina_7").style.display = "none";
                document.getElementById("lbl_medida_maquina_7").style.display = "none";
                document.getElementById("medida_maquina_7").style.display = "none";
                document.getElementById("lbl_tipo_maquina_7").style.display = "none";
                document.getElementById("tipo_maquina_7").style.display = "none";
                document.getElementById("lbl_troquel_maquina_7").style.display = "none";
                document.getElementById("troquel_maquina_7").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_7").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_7").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_7").style.display = "none";
                document.getElementById("cliente_conoce_maquina_7").style.display = "none";

                



            } else if (getSelectValue === "2") {

             
                  document.getElementById("lbl_info_maquina_1").style.display = "none";
                document.getElementById("info_maquina_1").style.display = "none";
                document.getElementById("lbl_maquina_1").style.display = "none";
                document.getElementById("lbl_modelo_maquina_1").style.display = "none";
                document.getElementById("modelo_maquina_1").style.display = "none";
                document.getElementById("lbl_medida_maquina_1").style.display = "none";
                document.getElementById("medida_maquina_1").style.display = "none";
                document.getElementById("lbl_tipo_maquina_1").style.display = "none";
                document.getElementById("tipo_maquina_1").style.display = "none";
                document.getElementById("lbl_troquel_maquina_1").style.display = "none";
                document.getElementById("troquel_maquina_1").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_1").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_1").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_1").style.display = "none";
                document.getElementById("cliente_conoce_maquina_1").style.display = "none";
                
                document.getElementById("lbl_maquina_2").style.display = "inline-block";

                document.getElementById("lbl_info_maquina_2").style.display = "inline-block";
                document.getElementById("info_maquina_2").style.display = "inline-block";
           
                document.getElementById("lbl_tipo_maquina_2").style.display = "inline-block";
                document.getElementById("tipo_maquina_2").style.display = "inline-block";
                 document.getElementById("lbl_modelo_maquina_2").style.display = "inline-block";
                document.getElementById("modelo_maquina_2").style.display = "inline-block";
                document.getElementById("lbl_medida_maquina_2").style.display = "inline-block";
                document.getElementById("medida_maquina_2").style.display = "inline-block";
                document.getElementById("lbl_troquel_maquina_2").style.display = "inline-block";
                document.getElementById("troquel_maquina_2").style.display = "inline-block";
                document.getElementById("lbl_codigo_cubierta_maquina_2").style.display = "inline-block";
                document.getElementById("codigo_cubierta_maquina_2").style.display = "inline-block";
                document.getElementById("lbl_cliente_conoce_maquina_2").style.display = "inline-block";
                document.getElementById("cliente_conoce_maquina_2").style.display = "inline-block";
                
                
                
                
               

            
              


                document.getElementById("lbl_info_maquina_3").style.display = "none";
                document.getElementById("info_maquina_3").style.display = "none";
                document.getElementById("lbl_maquina_3").style.display = "none";
                document.getElementById("lbl_modelo_maquina_3").style.display = "none";
                document.getElementById("modelo_maquina_3").style.display = "none";
                document.getElementById("lbl_medida_maquina_3").style.display = "none";
                document.getElementById("medida_maquina_3").style.display = "none";
                document.getElementById("lbl_tipo_maquina_3").style.display = "none";
                document.getElementById("tipo_maquina_3").style.display = "none";
                document.getElementById("lbl_troquel_maquina_3").style.display = "none";
                document.getElementById("troquel_maquina_3").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_3").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_3").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_3").style.display = "none";
                document.getElementById("cliente_conoce_maquina_3").style.display = "none";


                document.getElementById("lbl_info_maquina_4").style.display = "none";
                document.getElementById("info_maquina_4").style.display = "none";
                document.getElementById("lbl_maquina_4").style.display = "none";
                document.getElementById("lbl_modelo_maquina_4").style.display = "none";
                document.getElementById("modelo_maquina_4").style.display = "none";
                document.getElementById("lbl_medida_maquina_4").style.display = "none";
                document.getElementById("medida_maquina_4").style.display = "none";
                document.getElementById("lbl_tipo_maquina_4").style.display = "none";
                document.getElementById("tipo_maquina_4").style.display = "none";
                document.getElementById("lbl_troquel_maquina_4").style.display = "none";
                document.getElementById("troquel_maquina_4").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_4").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_4").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_4").style.display = "none";
                document.getElementById("cliente_conoce_maquina_4").style.display = "none";
                
                
                document.getElementById("lbl_info_maquina_5").style.display = "none";
                document.getElementById("info_maquina_5").style.display = "none";
                document.getElementById("lbl_maquina_5").style.display = "none";
                document.getElementById("lbl_modelo_maquina_5").style.display = "none";
                document.getElementById("modelo_maquina_5").style.display = "none";
                document.getElementById("lbl_medida_maquina_5").style.display = "none";
                document.getElementById("medida_maquina_5").style.display = "none";
                document.getElementById("lbl_tipo_maquina_5").style.display = "none";
                document.getElementById("tipo_maquina_5").style.display = "none";
                document.getElementById("lbl_troquel_maquina_5").style.display = "none";
                document.getElementById("troquel_maquina_5").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_5").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_5").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_5").style.display = "none";
                document.getElementById("cliente_conoce_maquina_5").style.display = "none";
                
                document.getElementById("lbl_info_maquina_6").style.display = "none";
                document.getElementById("info_maquina_6").style.display = "none";
                document.getElementById("lbl_maquina_6").style.display = "none";
                document.getElementById("lbl_modelo_maquina_6").style.display = "none";
                document.getElementById("modelo_maquina_6").style.display = "none";
                document.getElementById("lbl_medida_maquina_6").style.display = "none";
                document.getElementById("medida_maquina_6").style.display = "none";
                document.getElementById("lbl_tipo_maquina_6").style.display = "none";
                document.getElementById("tipo_maquina_6").style.display = "none";
                document.getElementById("lbl_troquel_maquina_6").style.display = "none";
                document.getElementById("troquel_maquina_6").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_6").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_6").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_6").style.display = "none";
                document.getElementById("cliente_conoce_maquina_6").style.display = "none";

                
                document.getElementById("lbl_info_maquina_7").style.display = "none";
                document.getElementById("info_maquina_7").style.display = "none";
                document.getElementById("lbl_maquina_7").style.display = "none";
                document.getElementById("lbl_modelo_maquina_7").style.display = "none";
                document.getElementById("modelo_maquina_7").style.display = "none";
                document.getElementById("lbl_medida_maquina_7").style.display = "none";
                document.getElementById("medida_maquina_7").style.display = "none";
                document.getElementById("lbl_tipo_maquina_7").style.display = "none";
                document.getElementById("tipo_maquina_7").style.display = "none";
                document.getElementById("lbl_troquel_maquina_7").style.display = "none";
                document.getElementById("troquel_maquina_7").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_7").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_7").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_7").style.display = "none";
                document.getElementById("cliente_conoce_maquina_7").style.display = "none";
                
                
                
               


            }
            else if (getSelectValue === "3") {

                document.getElementById("lbl_info_maquina_1").style.display = "inline-block";
                document.getElementById("info_maquina_1").style.display = "inline-block";
                document.getElementById("lbl_info_maquina_2").style.display = "inline-block";
                document.getElementById("info_maquina_2").style.display = "inline-block";
                document.getElementById("lbl_info_maquina_3").style.display = "inline-block";
                document.getElementById("info_maquina_3").style.display = "inline-block";
                document.getElementById("lbl_maquina_3").style.display = "inline-block";
                document.getElementById("lbl_tipo_maquina_3").style.display = "inline-block";
                document.getElementById("tipo_maquina_3").style.display = "inline-block";
                 document.getElementById("lbl_modelo_maquina_3").style.display = "inline-block";
                document.getElementById("modelo_maquina_3").style.display = "inline-block";
                document.getElementById("lbl_medida_maquina_3").style.display = "inline-block";
                document.getElementById("medida_maquina_3").style.display = "inline-block";
                document.getElementById("lbl_troquel_maquina_3").style.display = "inline-block";
                document.getElementById("troquel_maquina_3").style.display = "inline-block";
                document.getElementById("lbl_codigo_cubierta_maquina_3").style.display = "inline-block";
                document.getElementById("codigo_cubierta_maquina_3").style.display = "inline-block";
                document.getElementById("lbl_cliente_conoce_maquina_3").style.display = "inline-block";
                document.getElementById("cliente_conoce_maquina_3").style.display = "inline-block"; 

                document.getElementById("lbl_info_maquina_1").style.display = "none";
                document.getElementById("info_maquina_1").style.display = "none";
                document.getElementById("lbl_maquina_1").style.display = "none";
                document.getElementById("lbl_modelo_maquina_1").style.display = "none";
                document.getElementById("modelo_maquina_1").style.display = "none";
                document.getElementById("lbl_medida_maquina_1").style.display = "none";
                document.getElementById("medida_maquina_1").style.display = "none";
                document.getElementById("lbl_tipo_maquina_1").style.display = "none";
                document.getElementById("tipo_maquina_1").style.display = "none";
                document.getElementById("lbl_troquel_maquina_1").style.display = "none";
                document.getElementById("troquel_maquina_1").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_1").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_1").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_1").style.display = "none";
                document.getElementById("cliente_conoce_maquina_1").style.display = "none";

            
                document.getElementById("lbl_info_maquina_2").style.display = "none";
                document.getElementById("info_maquina_2").style.display = "none";
                document.getElementById("lbl_maquina_2").style.display = "none";
                document.getElementById("lbl_modelo_maquina_2").style.display = "none";
                document.getElementById("modelo_maquina_2").style.display = "none";
                document.getElementById("lbl_medida_maquina_2").style.display = "none";
                document.getElementById("medida_maquina_2").style.display = "none";
                document.getElementById("lbl_tipo_maquina_2").style.display = "none";
                document.getElementById("tipo_maquina_2").style.display = "none";
                document.getElementById("lbl_troquel_maquina_2").style.display = "none";
                document.getElementById("troquel_maquina_2").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_2").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_2").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_2").style.display = "none";
                document.getElementById("cliente_conoce_maquina_2").style.display = "none";


                


                document.getElementById("lbl_info_maquina_4").style.display = "none";
                document.getElementById("info_maquina_4").style.display = "none";
                document.getElementById("lbl_maquina_4").style.display = "none";
                document.getElementById("lbl_modelo_maquina_4").style.display = "none";
                document.getElementById("modelo_maquina_4").style.display = "none";
                document.getElementById("lbl_medida_maquina_4").style.display = "none";
                document.getElementById("medida_maquina_4").style.display = "none";
                document.getElementById("lbl_tipo_maquina_4").style.display = "none";
                document.getElementById("tipo_maquina_4").style.display = "none";
                document.getElementById("lbl_troquel_maquina_4").style.display = "none";
                document.getElementById("troquel_maquina_4").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_4").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_4").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_4").style.display = "none";
                document.getElementById("cliente_conoce_maquina_4").style.display = "none";
                
                
                document.getElementById("lbl_info_maquina_5").style.display = "none";
                document.getElementById("info_maquina_5").style.display = "none";
                document.getElementById("lbl_maquina_5").style.display = "none";
                document.getElementById("lbl_modelo_maquina_5").style.display = "none";
                document.getElementById("modelo_maquina_5").style.display = "none";
                document.getElementById("lbl_medida_maquina_5").style.display = "none";
                document.getElementById("medida_maquina_5").style.display = "none";
                document.getElementById("lbl_tipo_maquina_5").style.display = "none";
                document.getElementById("tipo_maquina_5").style.display = "none";
                document.getElementById("lbl_troquel_maquina_5").style.display = "none";
                document.getElementById("troquel_maquina_5").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_5").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_5").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_5").style.display = "none";
                document.getElementById("cliente_conoce_maquina_5").style.display = "none";
                
                document.getElementById("lbl_info_maquina_6").style.display = "none";
                document.getElementById("info_maquina_6").style.display = "none";
                document.getElementById("lbl_maquina_6").style.display = "none";
                document.getElementById("lbl_modelo_maquina_6").style.display = "none";
                document.getElementById("modelo_maquina_6").style.display = "none";
                document.getElementById("lbl_medida_maquina_6").style.display = "none";
                document.getElementById("medida_maquina_6").style.display = "none";
                document.getElementById("lbl_tipo_maquina_6").style.display = "none";
                document.getElementById("tipo_maquina_6").style.display = "none";
                document.getElementById("lbl_troquel_maquina_6").style.display = "none";
                document.getElementById("troquel_maquina_6").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_6").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_6").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_6").style.display = "none";
                document.getElementById("cliente_conoce_maquina_6").style.display = "none";

                
                document.getElementById("lbl_info_maquina_7").style.display = "none";
                document.getElementById("info_maquina_7").style.display = "none";
                document.getElementById("lbl_maquina_7").style.display = "none";
                document.getElementById("lbl_modelo_maquina_7").style.display = "none";
                document.getElementById("modelo_maquina_7").style.display = "none";
                document.getElementById("lbl_medida_maquina_7").style.display = "none";
                document.getElementById("medida_maquina_7").style.display = "none";
                document.getElementById("lbl_tipo_maquina_7").style.display = "none";
                document.getElementById("tipo_maquina_7").style.display = "none";
                document.getElementById("lbl_troquel_maquina_7").style.display = "none";
                document.getElementById("troquel_maquina_7").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_7").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_7").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_7").style.display = "none";
                document.getElementById("cliente_conoce_maquina_7").style.display = "none";


            } else if (getSelectValue === "4") {

                 document.getElementById("lbl_info_maquina_1").style.display = "none";
                document.getElementById("info_maquina_1").style.display = "none";
                document.getElementById("lbl_maquina_1").style.display = "none";
                document.getElementById("lbl_modelo_maquina_1").style.display = "none";
                document.getElementById("modelo_maquina_1").style.display = "none";
                document.getElementById("lbl_medida_maquina_1").style.display = "none";
                document.getElementById("medida_maquina_1").style.display = "none";
                document.getElementById("lbl_tipo_maquina_1").style.display = "none";
                document.getElementById("tipo_maquina_1").style.display = "none";
                document.getElementById("lbl_troquel_maquina_1").style.display = "none";
                document.getElementById("troquel_maquina_1").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_1").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_1").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_1").style.display = "none";
                document.getElementById("cliente_conoce_maquina_1").style.display = "none";

            
                document.getElementById("lbl_info_maquina_2").style.display = "none";
                document.getElementById("info_maquina_2").style.display = "none";
                document.getElementById("lbl_maquina_2").style.display = "none";
                document.getElementById("lbl_modelo_maquina_2").style.display = "none";
                document.getElementById("modelo_maquina_2").style.display = "none";
                document.getElementById("lbl_medida_maquina_2").style.display = "none";
                document.getElementById("medida_maquina_2").style.display = "none";
                document.getElementById("lbl_tipo_maquina_2").style.display = "none";
                document.getElementById("tipo_maquina_2").style.display = "none";
                document.getElementById("lbl_troquel_maquina_2").style.display = "none";
                document.getElementById("troquel_maquina_2").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_2").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_2").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_2").style.display = "none";
                document.getElementById("cliente_conoce_maquina_2").style.display = "none";


                document.getElementById("lbl_info_maquina_3").style.display = "none";
                document.getElementById("info_maquina_3").style.display = "none";
                document.getElementById("lbl_maquina_3").style.display = "none";
                document.getElementById("lbl_modelo_maquina_3").style.display = "none";
                document.getElementById("modelo_maquina_3").style.display = "none";
                document.getElementById("lbl_medida_maquina_3").style.display = "none";
                document.getElementById("medida_maquina_3").style.display = "none";
                document.getElementById("lbl_tipo_maquina_3").style.display = "none";
                document.getElementById("tipo_maquina_3").style.display = "none";
                document.getElementById("lbl_troquel_maquina_3").style.display = "none";
                document.getElementById("troquel_maquina_3").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_3").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_3").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_3").style.display = "none";
                document.getElementById("cliente_conoce_maquina_3").style.display = "none";

                
                document.getElementById("lbl_info_maquina_4").style.display = "inline-block";
                document.getElementById("info_maquina_4").style.display = "inline-block";
                document.getElementById("lbl_maquina_4").style.display = "inline-block";
                document.getElementById("lbl_modelo_maquina_4").style.display = "inline-block";
                document.getElementById("modelo_maquina_4").style.display = "inline-block";
                document.getElementById("lbl_medida_maquina_4").style.display = "inline-block";
                document.getElementById("medida_maquina_4").style.display = "inline-block";
                document.getElementById("lbl_tipo_maquina_4").style.display = "inline-block";
                document.getElementById("tipo_maquina_4").style.display = "inline-block";
                document.getElementById("lbl_troquel_maquina_4").style.display = "inline-block";
                document.getElementById("troquel_maquina_4").style.display = "inline-block";
                document.getElementById("lbl_codigo_cubierta_maquina_4").style.display = "inline-block";
                document.getElementById("codigo_cubierta_maquina_4").style.display = "inline-block";
                document.getElementById("lbl_cliente_conoce_maquina_4").style.display = "inline-block";
                document.getElementById("cliente_conoce_maquina_4").style.display = "inline-block";

               
                
                
                document.getElementById("lbl_info_maquina_5").style.display = "none";
                document.getElementById("info_maquina_5").style.display = "none";
                document.getElementById("lbl_maquina_5").style.display = "none";
                document.getElementById("lbl_modelo_maquina_5").style.display = "none";
                document.getElementById("modelo_maquina_5").style.display = "none";
                document.getElementById("lbl_medida_maquina_5").style.display = "none";
                document.getElementById("medida_maquina_5").style.display = "none";
                document.getElementById("lbl_tipo_maquina_5").style.display = "none";
                document.getElementById("tipo_maquina_5").style.display = "none";
                document.getElementById("lbl_troquel_maquina_5").style.display = "none";
                document.getElementById("troquel_maquina_5").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_5").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_5").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_5").style.display = "none";
                document.getElementById("cliente_conoce_maquina_5").style.display = "none";
                
                document.getElementById("lbl_info_maquina_6").style.display = "none";
                document.getElementById("info_maquina_6").style.display = "none";
                document.getElementById("lbl_maquina_6").style.display = "none";
                document.getElementById("lbl_modelo_maquina_6").style.display = "none";
                document.getElementById("modelo_maquina_6").style.display = "none";
                document.getElementById("lbl_medida_maquina_6").style.display = "none";
                document.getElementById("medida_maquina_6").style.display = "none";
                document.getElementById("lbl_tipo_maquina_6").style.display = "none";
                document.getElementById("tipo_maquina_6").style.display = "none";
                document.getElementById("lbl_troquel_maquina_6").style.display = "none";
                document.getElementById("troquel_maquina_6").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_6").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_6").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_6").style.display = "none";
                document.getElementById("cliente_conoce_maquina_6").style.display = "none";

                
                document.getElementById("lbl_info_maquina_7").style.display = "none";
                document.getElementById("info_maquina_7").style.display = "none";
                document.getElementById("lbl_maquina_7").style.display = "none";
                document.getElementById("lbl_modelo_maquina_7").style.display = "none";
                document.getElementById("modelo_maquina_7").style.display = "none";
                document.getElementById("lbl_medida_maquina_7").style.display = "none";
                document.getElementById("medida_maquina_7").style.display = "none";
                document.getElementById("lbl_tipo_maquina_7").style.display = "none";
                document.getElementById("tipo_maquina_7").style.display = "none";
                document.getElementById("lbl_troquel_maquina_7").style.display = "none";
                document.getElementById("troquel_maquina_7").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_7").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_7").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_7").style.display = "none";
                document.getElementById("cliente_conoce_maquina_7").style.display = "none";

                

            } else if (getSelectValue === "5") {

                 document.getElementById("lbl_info_maquina_1").style.display = "none";
                document.getElementById("info_maquina_1").style.display = "none";
                document.getElementById("lbl_maquina_1").style.display = "none";
                document.getElementById("lbl_modelo_maquina_1").style.display = "none";
                document.getElementById("modelo_maquina_1").style.display = "none";
                document.getElementById("lbl_medida_maquina_1").style.display = "none";
                document.getElementById("medida_maquina_1").style.display = "none";
                document.getElementById("lbl_tipo_maquina_1").style.display = "none";
                document.getElementById("tipo_maquina_1").style.display = "none";
                document.getElementById("lbl_troquel_maquina_1").style.display = "none";
                document.getElementById("troquel_maquina_1").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_1").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_1").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_1").style.display = "none";
                document.getElementById("cliente_conoce_maquina_1").style.display = "none";

            
                document.getElementById("lbl_info_maquina_2").style.display = "none";
                document.getElementById("info_maquina_2").style.display = "none";
                document.getElementById("lbl_maquina_2").style.display = "none";
                document.getElementById("lbl_modelo_maquina_2").style.display = "none";
                document.getElementById("modelo_maquina_2").style.display = "none";
                document.getElementById("lbl_medida_maquina_2").style.display = "none";
                document.getElementById("medida_maquina_2").style.display = "none";
                document.getElementById("lbl_tipo_maquina_2").style.display = "none";
                document.getElementById("tipo_maquina_2").style.display = "none";
                document.getElementById("lbl_troquel_maquina_2").style.display = "none";
                document.getElementById("troquel_maquina_2").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_2").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_2").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_2").style.display = "none";
                document.getElementById("cliente_conoce_maquina_2").style.display = "none";


                document.getElementById("lbl_info_maquina_3").style.display = "none";
                document.getElementById("info_maquina_3").style.display = "none";
                document.getElementById("lbl_maquina_3").style.display = "none";
                document.getElementById("lbl_modelo_maquina_3").style.display = "none";
                document.getElementById("modelo_maquina_3").style.display = "none";
                document.getElementById("lbl_medida_maquina_3").style.display = "none";
                document.getElementById("medida_maquina_3").style.display = "none";
                document.getElementById("lbl_tipo_maquina_3").style.display = "none";
                document.getElementById("tipo_maquina_3").style.display = "none";
                document.getElementById("lbl_troquel_maquina_3").style.display = "none";
                document.getElementById("troquel_maquina_3").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_3").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_3").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_3").style.display = "none";
                document.getElementById("cliente_conoce_maquina_3").style.display = "none";


                document.getElementById("lbl_info_maquina_4").style.display = "none";
                document.getElementById("info_maquina_4").style.display = "none";
                document.getElementById("lbl_maquina_4").style.display = "none";
                document.getElementById("lbl_modelo_maquina_4").style.display = "none";
                document.getElementById("modelo_maquina_4").style.display = "none";
                document.getElementById("lbl_medida_maquina_4").style.display = "none";
                document.getElementById("medida_maquina_4").style.display = "none";
                document.getElementById("lbl_tipo_maquina_4").style.display = "none";
                document.getElementById("tipo_maquina_4").style.display = "none";
                document.getElementById("lbl_troquel_maquina_4").style.display = "none";
                document.getElementById("troquel_maquina_4").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_4").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_4").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_4").style.display = "none";
                document.getElementById("cliente_conoce_maquina_4").style.display = "none";
                
                
                document.getElementById("lbl_info_maquina_5").style.display = "inline-block";
                document.getElementById("info_maquina_5").style.display = "inline-block";
                document.getElementById("lbl_maquina_5").style.display = "inline-block";
                document.getElementById("lbl_modelo_maquina_5").style.display = "inline-block";
                document.getElementById("modelo_maquina_5").style.display = "inline-block";
                document.getElementById("lbl_medida_maquina_5").style.display = "inline-block";
                document.getElementById("medida_maquina_5").style.display = "inline-block";
                document.getElementById("lbl_tipo_maquina_5").style.display = "inline-block";
                document.getElementById("tipo_maquina_5").style.display = "inline-block";
                document.getElementById("lbl_troquel_maquina_5").style.display = "inline-block";
                document.getElementById("troquel_maquina_5").style.display = "inline-block";
                document.getElementById("lbl_codigo_cubierta_maquina_5").style.display = "inline-block";
                document.getElementById("codigo_cubierta_maquina_5").style.display = "inline-block";
                document.getElementById("lbl_cliente_conoce_maquina_5").style.display = "inline-block";
                document.getElementById("cliente_conoce_maquina_5").style.display = "inline-block";
                 

                
                document.getElementById("lbl_info_maquina_6").style.display = "none";
                document.getElementById("info_maquina_6").style.display = "none";
                document.getElementById("lbl_maquina_6").style.display = "none";
                document.getElementById("lbl_modelo_maquina_6").style.display = "none";
                document.getElementById("modelo_maquina_6").style.display = "none";
                document.getElementById("lbl_medida_maquina_6").style.display = "none";
                document.getElementById("medida_maquina_6").style.display = "none";
                document.getElementById("lbl_tipo_maquina_6").style.display = "none";
                document.getElementById("tipo_maquina_6").style.display = "none";
                document.getElementById("lbl_troquel_maquina_6").style.display = "none";
                document.getElementById("troquel_maquina_6").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_6").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_6").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_6").style.display = "none";
                document.getElementById("cliente_conoce_maquina_6").style.display = "none";

                
                document.getElementById("lbl_info_maquina_7").style.display = "none";
                document.getElementById("info_maquina_7").style.display = "none";
                document.getElementById("lbl_maquina_7").style.display = "none";
                document.getElementById("lbl_modelo_maquina_7").style.display = "none";
                document.getElementById("modelo_maquina_7").style.display = "none";
                document.getElementById("lbl_medida_maquina_7").style.display = "none";
                document.getElementById("medida_maquina_7").style.display = "none";
                document.getElementById("lbl_tipo_maquina_7").style.display = "none";
                document.getElementById("tipo_maquina_7").style.display = "none";
                document.getElementById("lbl_troquel_maquina_7").style.display = "none";
                document.getElementById("troquel_maquina_7").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_7").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_7").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_7").style.display = "none";
                document.getElementById("cliente_conoce_maquina_7").style.display = "none";


            } else if (getSelectValue === "6") {

               document.getElementById("lbl_info_maquina_1").style.display = "none";
                document.getElementById("info_maquina_1").style.display = "none";
                document.getElementById("lbl_maquina_1").style.display = "none";
                document.getElementById("lbl_modelo_maquina_1").style.display = "none";
                document.getElementById("modelo_maquina_1").style.display = "none";
                document.getElementById("lbl_medida_maquina_1").style.display = "none";
                document.getElementById("medida_maquina_1").style.display = "none";
                document.getElementById("lbl_tipo_maquina_1").style.display = "none";
                document.getElementById("tipo_maquina_1").style.display = "none";
                document.getElementById("lbl_troquel_maquina_1").style.display = "none";
                document.getElementById("troquel_maquina_1").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_1").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_1").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_1").style.display = "none";
                document.getElementById("cliente_conoce_maquina_1").style.display = "none";

            
                document.getElementById("lbl_info_maquina_2").style.display = "none";
                document.getElementById("info_maquina_2").style.display = "none";
                document.getElementById("lbl_maquina_2").style.display = "none";
                document.getElementById("lbl_modelo_maquina_2").style.display = "none";
                document.getElementById("modelo_maquina_2").style.display = "none";
                document.getElementById("lbl_medida_maquina_2").style.display = "none";
                document.getElementById("medida_maquina_2").style.display = "none";
                document.getElementById("lbl_tipo_maquina_2").style.display = "none";
                document.getElementById("tipo_maquina_2").style.display = "none";
                document.getElementById("lbl_troquel_maquina_2").style.display = "none";
                document.getElementById("troquel_maquina_2").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_2").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_2").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_2").style.display = "none";
                document.getElementById("cliente_conoce_maquina_2").style.display = "none";


                document.getElementById("lbl_info_maquina_3").style.display = "none";
                document.getElementById("info_maquina_3").style.display = "none";
                document.getElementById("lbl_maquina_3").style.display = "none";
                document.getElementById("lbl_modelo_maquina_3").style.display = "none";
                document.getElementById("modelo_maquina_3").style.display = "none";
                document.getElementById("lbl_medida_maquina_3").style.display = "none";
                document.getElementById("medida_maquina_3").style.display = "none";
                document.getElementById("lbl_tipo_maquina_3").style.display = "none";
                document.getElementById("tipo_maquina_3").style.display = "none";
                document.getElementById("lbl_troquel_maquina_3").style.display = "none";
                document.getElementById("troquel_maquina_3").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_3").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_3").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_3").style.display = "none";
                document.getElementById("cliente_conoce_maquina_3").style.display = "none";


                document.getElementById("lbl_info_maquina_4").style.display = "none";
                document.getElementById("info_maquina_4").style.display = "none";
                document.getElementById("lbl_maquina_4").style.display = "none";
                document.getElementById("lbl_modelo_maquina_4").style.display = "none";
                document.getElementById("modelo_maquina_4").style.display = "none";
                document.getElementById("lbl_medida_maquina_4").style.display = "none";
                document.getElementById("medida_maquina_4").style.display = "none";
                document.getElementById("lbl_tipo_maquina_4").style.display = "none";
                document.getElementById("tipo_maquina_4").style.display = "none";
                document.getElementById("lbl_troquel_maquina_4").style.display = "none";
                document.getElementById("troquel_maquina_4").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_4").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_4").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_4").style.display = "none";
                document.getElementById("cliente_conoce_maquina_4").style.display = "none";
                
                
                document.getElementById("lbl_info_maquina_5").style.display = "none";
                document.getElementById("info_maquina_5").style.display = "none";
                document.getElementById("lbl_maquina_5").style.display = "none";
                document.getElementById("lbl_modelo_maquina_5").style.display = "none";
                document.getElementById("modelo_maquina_5").style.display = "none";
                document.getElementById("lbl_medida_maquina_5").style.display = "none";
                document.getElementById("medida_maquina_5").style.display = "none";
                document.getElementById("lbl_tipo_maquina_5").style.display = "none";
                document.getElementById("tipo_maquina_5").style.display = "none";
                document.getElementById("lbl_troquel_maquina_5").style.display = "none";
                document.getElementById("troquel_maquina_5").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_5").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_5").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_5").style.display = "none";
                document.getElementById("cliente_conoce_maquina_5").style.display = "none";
                
                
                document.getElementById("lbl_info_maquina_6").style.display = "inline-block";
                document.getElementById("info_maquina_6").style.display = "inline-block";
                document.getElementById("lbl_maquina_6").style.display = "inline-block";
                document.getElementById("lbl_modelo_maquina_6").style.display = "inline-block";
                document.getElementById("modelo_maquina_6").style.display = "inline-block";
                document.getElementById("lbl_medida_maquina_6").style.display = "inline-block";
                document.getElementById("medida_maquina_6").style.display = "inline-block";
                document.getElementById("lbl_tipo_maquina_6").style.display = "inline-block";
                document.getElementById("tipo_maquina_6").style.display = "inline-block";
                document.getElementById("lbl_troquel_maquina_6").style.display = "inline-block";
                document.getElementById("troquel_maquina_6").style.display = "inline-block";
                document.getElementById("lbl_codigo_cubierta_maquina_6").style.display = "inline-block";
                document.getElementById("codigo_cubierta_maquina_6").style.display = "inline-block";
                document.getElementById("lbl_cliente_conoce_maquina_6").style.display = "inline-block";
                document.getElementById("cliente_conoce_maquina_6").style.display = "inline-block";
                 

                
                document.getElementById("lbl_info_maquina_7").style.display = "none";
                document.getElementById("info_maquina_7").style.display = "none";
                document.getElementById("lbl_maquina_7").style.display = "none";
                document.getElementById("lbl_modelo_maquina_7").style.display = "none";
                document.getElementById("modelo_maquina_7").style.display = "none";
                document.getElementById("lbl_medida_maquina_7").style.display = "none";
                document.getElementById("medida_maquina_7").style.display = "none";
                document.getElementById("lbl_tipo_maquina_7").style.display = "none";
                document.getElementById("tipo_maquina_7").style.display = "none";
                document.getElementById("lbl_troquel_maquina_7").style.display = "none";
                document.getElementById("troquel_maquina_7").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_7").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_7").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_7").style.display = "none";
                document.getElementById("cliente_conoce_maquina_7").style.display = "none";

            } else if (getSelectValue === "7") {

               document.getElementById("lbl_info_maquina_1").style.display = "none";
                document.getElementById("info_maquina_1").style.display = "none";
                document.getElementById("lbl_maquina_1").style.display = "none";
                document.getElementById("lbl_modelo_maquina_1").style.display = "none";
                document.getElementById("modelo_maquina_1").style.display = "none";
                document.getElementById("lbl_medida_maquina_1").style.display = "none";
                document.getElementById("medida_maquina_1").style.display = "none";
                document.getElementById("lbl_tipo_maquina_1").style.display = "none";
                document.getElementById("tipo_maquina_1").style.display = "none";
                document.getElementById("lbl_troquel_maquina_1").style.display = "none";
                document.getElementById("troquel_maquina_1").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_1").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_1").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_1").style.display = "none";
                document.getElementById("cliente_conoce_maquina_1").style.display = "none";

            
                document.getElementById("lbl_info_maquina_2").style.display = "none";
                document.getElementById("info_maquina_2").style.display = "none";
                document.getElementById("lbl_maquina_2").style.display = "none";
                document.getElementById("lbl_modelo_maquina_2").style.display = "none";
                document.getElementById("modelo_maquina_2").style.display = "none";
                document.getElementById("lbl_medida_maquina_2").style.display = "none";
                document.getElementById("medida_maquina_2").style.display = "none";
                document.getElementById("lbl_tipo_maquina_2").style.display = "none";
                document.getElementById("tipo_maquina_2").style.display = "none";
                document.getElementById("lbl_troquel_maquina_2").style.display = "none";
                document.getElementById("troquel_maquina_2").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_2").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_2").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_2").style.display = "none";
                document.getElementById("cliente_conoce_maquina_2").style.display = "none";


                document.getElementById("lbl_info_maquina_3").style.display = "none";
                document.getElementById("info_maquina_3").style.display = "none";
                document.getElementById("lbl_maquina_3").style.display = "none";
                document.getElementById("lbl_modelo_maquina_3").style.display = "none";
                document.getElementById("modelo_maquina_3").style.display = "none";
                document.getElementById("lbl_medida_maquina_3").style.display = "none";
                document.getElementById("medida_maquina_3").style.display = "none";
                document.getElementById("lbl_tipo_maquina_3").style.display = "none";
                document.getElementById("tipo_maquina_3").style.display = "none";
                document.getElementById("lbl_troquel_maquina_3").style.display = "none";
                document.getElementById("troquel_maquina_3").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_3").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_3").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_3").style.display = "none";
                document.getElementById("cliente_conoce_maquina_3").style.display = "none";


                document.getElementById("lbl_info_maquina_4").style.display = "none";
                document.getElementById("info_maquina_4").style.display = "none";
                document.getElementById("lbl_maquina_4").style.display = "none";
                document.getElementById("lbl_modelo_maquina_4").style.display = "none";
                document.getElementById("modelo_maquina_4").style.display = "none";
                document.getElementById("lbl_medida_maquina_4").style.display = "none";
                document.getElementById("medida_maquina_4").style.display = "none";
                document.getElementById("lbl_tipo_maquina_4").style.display = "none";
                document.getElementById("tipo_maquina_4").style.display = "none";
                document.getElementById("lbl_troquel_maquina_4").style.display = "none";
                document.getElementById("troquel_maquina_4").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_4").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_4").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_4").style.display = "none";
                document.getElementById("cliente_conoce_maquina_4").style.display = "none";
                
                
                document.getElementById("lbl_info_maquina_5").style.display = "none";
                document.getElementById("info_maquina_5").style.display = "none";
                document.getElementById("lbl_maquina_5").style.display = "none";
                document.getElementById("lbl_modelo_maquina_5").style.display = "none";
                document.getElementById("modelo_maquina_5").style.display = "none";
                document.getElementById("lbl_medida_maquina_5").style.display = "none";
                document.getElementById("medida_maquina_5").style.display = "none";
                document.getElementById("lbl_tipo_maquina_5").style.display = "none";
                document.getElementById("tipo_maquina_5").style.display = "none";
                document.getElementById("lbl_troquel_maquina_5").style.display = "none";
                document.getElementById("troquel_maquina_5").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_5").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_5").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_5").style.display = "none";
                document.getElementById("cliente_conoce_maquina_5").style.display = "none";
                
                document.getElementById("lbl_info_maquina_6").style.display = "none";
                document.getElementById("info_maquina_6").style.display = "none";
                document.getElementById("lbl_maquina_6").style.display = "none";
                document.getElementById("lbl_modelo_maquina_6").style.display = "none";
                document.getElementById("modelo_maquina_6").style.display = "none";
                document.getElementById("lbl_medida_maquina_6").style.display = "none";
                document.getElementById("medida_maquina_6").style.display = "none";
                document.getElementById("lbl_tipo_maquina_6").style.display = "none";
                document.getElementById("tipo_maquina_6").style.display = "none";
                document.getElementById("lbl_troquel_maquina_6").style.display = "none";
                document.getElementById("troquel_maquina_6").style.display = "none";
                document.getElementById("lbl_codigo_cubierta_maquina_6").style.display = "none";
                document.getElementById("codigo_cubierta_maquina_6").style.display = "none";
                document.getElementById("lbl_cliente_conoce_maquina_6").style.display = "none";
                document.getElementById("cliente_conoce_maquina_6").style.display = "none";

                document.getElementById("lbl_info_maquina_7").style.display = "inline-block";
                document.getElementById("info_maquina_7").style.display = "inline-block";
                document.getElementById("lbl_maquina_7").style.display = "inline-block";
                document.getElementById("lbl_modelo_maquina_7").style.display = "inline-block";
                document.getElementById("modelo_maquina_7").style.display = "inline-block";
                document.getElementById("lbl_medida_maquina_7").style.display = "inline-block";
                document.getElementById("medida_maquina_7").style.display = "inline-block";
                document.getElementById("lbl_tipo_maquina_7").style.display = "inline-block";
                document.getElementById("tipo_maquina_7").style.display = "inline-block";
                document.getElementById("lbl_troquel_maquina_7").style.display = "inline-block";
                document.getElementById("troquel_maquina_7").style.display = "inline-block";
                document.getElementById("lbl_codigo_cubierta_maquina_7").style.display = "inline-block";
                document.getElementById("codigo_cubierta_maquina_7").style.display = "inline-block";
                document.getElementById("lbl_cliente_conoce_maquina_7").style.display = "inline-block";
                document.getElementById("cliente_conoce_maquina_7").style.display = "inline-block";
                 

                

            } else if (getSelectValue === "Todas") {
                      	 	document.getElementById("lbl_info_maquina_1").style.display = "inline-block";
                document.getElementById("info_maquina_1").style.display = "inline-block";
                document.getElementById("lbl_maquina_1").style.display = "inline-block";
                document.getElementById("lbl_modelo_maquina_1").style.display = "inline-block";
                document.getElementById("modelo_maquina_1").style.display = "inline-block";
                document.getElementById("lbl_medida_maquina_1").style.display = "inline-block";
                document.getElementById("medida_maquina_1").style.display = "inline-block";
                document.getElementById("lbl_tipo_maquina_1").style.display = "inline-block";
                document.getElementById("tipo_maquina_1").style.display = "inline-block";
                document.getElementById("lbl_troquel_maquina_1").style.display = "inline-block";
                document.getElementById("troquel_maquina_1").style.display = "inline-block";
                document.getElementById("lbl_codigo_cubierta_maquina_1").style.display = "inline-block";
                document.getElementById("codigo_cubierta_maquina_1").style.display = "inline-block";
                document.getElementById("lbl_cliente_conoce_maquina_1").style.display = "inline-block";
                document.getElementById("cliente_conoce_maquina_1").style.display = "inline-block";

            
                document.getElementById("lbl_info_maquina_2").style.display = "inline-block";
                document.getElementById("info_maquina_2").style.display = "inline-block";
                document.getElementById("lbl_maquina_2").style.display = "inline-block";
                document.getElementById("lbl_modelo_maquina_2").style.display = "inline-block";
                document.getElementById("modelo_maquina_2").style.display = "inline-block";
                document.getElementById("lbl_medida_maquina_2").style.display = "inline-block";
                document.getElementById("medida_maquina_2").style.display = "inline-block";
                document.getElementById("lbl_tipo_maquina_2").style.display = "inline-block";
                document.getElementById("tipo_maquina_2").style.display = "inline-block";
                document.getElementById("lbl_troquel_maquina_2").style.display = "inline-block";
                document.getElementById("troquel_maquina_2").style.display = "inline-block";
                document.getElementById("lbl_codigo_cubierta_maquina_2").style.display = "inline-block";
                document.getElementById("codigo_cubierta_maquina_2").style.display = "inline-block";
                document.getElementById("lbl_cliente_conoce_maquina_2").style.display = "inline-block";
                document.getElementById("cliente_conoce_maquina_2").style.display = "inline-block";


                document.getElementById("lbl_info_maquina_3").style.display = "inline-block";
                document.getElementById("info_maquina_3").style.display = "inline-block";
                document.getElementById("lbl_maquina_3").style.display = "inline-block";
                document.getElementById("lbl_modelo_maquina_3").style.display = "inline-block";
                document.getElementById("modelo_maquina_3").style.display = "inline-block";
                document.getElementById("lbl_medida_maquina_3").style.display = "inline-block";
                document.getElementById("medida_maquina_3").style.display = "inline-block";
                document.getElementById("lbl_tipo_maquina_3").style.display = "inline-block";
                document.getElementById("tipo_maquina_3").style.display = "inline-block";
                document.getElementById("lbl_troquel_maquina_3").style.display = "inline-block";
                document.getElementById("troquel_maquina_3").style.display = "inline-block";
                document.getElementById("lbl_codigo_cubierta_maquina_3").style.display = "inline-block";
                document.getElementById("codigo_cubierta_maquina_3").style.display = "inline-block";
                document.getElementById("lbl_cliente_conoce_maquina_3").style.display = "inline-block";
                document.getElementById("cliente_conoce_maquina_3").style.display = "inline-block";


                document.getElementById("lbl_info_maquina_4").style.display = "inline-block";
                document.getElementById("info_maquina_4").style.display = "inline-block";
                document.getElementById("lbl_maquina_4").style.display = "inline-block";
                document.getElementById("lbl_modelo_maquina_4").style.display = "inline-block";
                document.getElementById("modelo_maquina_4").style.display = "inline-block";
                document.getElementById("lbl_medida_maquina_4").style.display = "inline-block";
                document.getElementById("medida_maquina_4").style.display = "inline-block";
                document.getElementById("lbl_tipo_maquina_4").style.display = "inline-block";
                document.getElementById("tipo_maquina_4").style.display = "inline-block";
                document.getElementById("lbl_troquel_maquina_4").style.display = "inline-block";
                document.getElementById("troquel_maquina_4").style.display = "inline-block";
                document.getElementById("lbl_codigo_cubierta_maquina_4").style.display = "inline-block";
                document.getElementById("codigo_cubierta_maquina_4").style.display = "inline-block";
                document.getElementById("lbl_cliente_conoce_maquina_4").style.display = "inline-block";
                document.getElementById("cliente_conoce_maquina_4").style.display = "inline-block";
                
                
                document.getElementById("lbl_info_maquina_5").style.display = "inline-block";
                document.getElementById("info_maquina_5").style.display = "inline-block";
                document.getElementById("lbl_maquina_5").style.display = "inline-block";
                document.getElementById("lbl_modelo_maquina_5").style.display = "inline-block";
                document.getElementById("modelo_maquina_5").style.display = "inline-block";
                document.getElementById("lbl_medida_maquina_5").style.display = "inline-block";
                document.getElementById("medida_maquina_5").style.display = "inline-block";
                document.getElementById("lbl_tipo_maquina_5").style.display = "inline-block";
                document.getElementById("tipo_maquina_5").style.display = "inline-block";
                document.getElementById("lbl_troquel_maquina_5").style.display = "inline-block";
                document.getElementById("troquel_maquina_5").style.display = "inline-block";
                document.getElementById("lbl_codigo_cubierta_maquina_5").style.display = "inline-block";
                document.getElementById("codigo_cubierta_maquina_5").style.display = "inline-block";
                document.getElementById("lbl_cliente_conoce_maquina_5").style.display = "inline-block";
                document.getElementById("cliente_conoce_maquina_5").style.display = "inline-block";
                
                document.getElementById("lbl_info_maquina_6").style.display = "inline-block";
                document.getElementById("info_maquina_6").style.display = "inline-block";
                document.getElementById("lbl_maquina_6").style.display = "inline-block";
                document.getElementById("lbl_modelo_maquina_6").style.display = "inline-block";
                document.getElementById("modelo_maquina_6").style.display = "inline-block";
                document.getElementById("lbl_medida_maquina_6").style.display = "inline-block";
                document.getElementById("medida_maquina_6").style.display = "inline-block";
                document.getElementById("lbl_tipo_maquina_6").style.display = "inline-block";
                document.getElementById("tipo_maquina_6").style.display = "inline-block";
                document.getElementById("lbl_troquel_maquina_6").style.display = "inline-block";
                document.getElementById("troquel_maquina_6").style.display = "inline-block";
                document.getElementById("lbl_codigo_cubierta_maquina_6").style.display = "inline-block";
                document.getElementById("codigo_cubierta_maquina_6").style.display = "inline-block";
                document.getElementById("lbl_cliente_conoce_maquina_6").style.display = "inline-block";
                document.getElementById("cliente_conoce_maquina_6").style.display = "inline-block";

                document.getElementById("lbl_info_maquina_7").style.display = "inline-block";
                document.getElementById("info_maquina_7").style.display = "inline-block";
                document.getElementById("lbl_maquina_7").style.display = "inline-block";
                document.getElementById("lbl_modelo_maquina_7").style.display = "inline-block";
                document.getElementById("modelo_maquina_7").style.display = "inline-block";
                document.getElementById("lbl_medida_maquina_7").style.display = "inline-block";
                document.getElementById("medida_maquina_7").style.display = "inline-block";
                document.getElementById("lbl_tipo_maquina_7").style.display = "inline-block";
                document.getElementById("tipo_maquina_7").style.display = "inline-block";
                document.getElementById("lbl_troquel_maquina_7").style.display = "inline-block";
                document.getElementById("troquel_maquina_7").style.display = "inline-block";
                document.getElementById("lbl_codigo_cubierta_maquina_7").style.display = "inline-block";
                document.getElementById("codigo_cubierta_maquina_7").style.display = "inline-block";
                document.getElementById("lbl_cliente_conoce_maquina_7").style.display = "inline-block";
                document.getElementById("cliente_conoce_maquina_7").style.display = "inline-block";
                 
                
                
                

                
            }
            
            


        }
    </script>

    <body>
        <div id="maquinaria">
            <form action="<?= base_url() ?>CensoMaquinaria/updatedataProspectos" method="post" enctype="multipart/form-data">

                <MARQUEE SCROLLDELAY =200></MARQUEE>
                <div class="container" ><center><h1><font color=red>Actualizar Prospectos</font></h1></center>





                    <div class="jumbotron">



                        <br>
                        <div class="row"> 
                            
                    <!--          <input type="text" name="empresa_temporal" value="<?= $data->empresa_temporal ?>">
                
                <input type="text" name="grupo_temporal" value="<?= $data->grupo_temporal ?>">ID -->
<!--
                            <div class="form-group col-xs-6">



                                <label>Grupo</label>
                                <input id="grupo" type="text" class="form-control"  value="<?= $data->grupo ?>" name="grupo" placeholder="Ingresa el nombre de la grupo">

                            </div>

                            <div class="form-group col-xs-6">
                                <label for="nombre">Empresa </label>
                                
                                
                                <input id="empresa" type="text" class="form-control" value="<?= $data->empresa ?>"  name="empresa" placeholder="Ingresa el nombre de la empresa">
                            </div>-->
                            
                            
                            
                                            <?php
    /*if (($data->empresa_temporal != null)) {
        ?>
         <div class="form-group col-xs-6">
          <label for="nombre">Empresa</label>
         <input type="text"  class="form-control" name="empresa_temporal" value="<?= $data->empresa_temporal ?>">
         
         <input id="empresa" type="hidden" class="form-control" value="<?= $data->empresa ?>"  name="empresa" placeholder="Ingresa el nombre de la empresa">
          </div>

        <?php
    } else if (($data->empresa != null)) {
        
    ?>
         
         
          <div class="form-group col-xs-6">
          <label for="nombre">Empresa </label>
        <input id="empresa" type="text" class="form-control" value="<?= $data->empresa ?>"  name="empresa" placeholder="Ingresa el nombre de la empresa">
        
         <input type="hidden"  class="form-control" name="empresa_temporal" value="<?= $data->empresa_temporal ?>">
            </div>
 <?php
        

    }
        ?>
         
         
         
                                
                                
                     
                
                
                
                
                     <?php
    if (($data->grupo_temporal != null)) {
        ?>
         <div class="form-group col-xs-6">
          <label for="nombre">Grupo</label>
         <input type="text" class="form-control" name="grupo_temporal" value="<?= $data->grupo_temporal ?>">
         
           <input id="grupo" type="hidden" class="form-control"  value="<?= $data->grupo ?>" name="grupo">

          </div>

        <?php
    } else if (($data->grupo != null)) {
        
    ?>
         
         
             <div class="form-group col-xs-6">
                                <label>Grupo</label>
                                <input id="grupo" type="text" class="form-control"  value="<?= $data->grupo ?>" name="grupo" placeholder="Ingresa el nombre de la grupo">
     <input type="hidden" class="form-control" name="grupo_temporal" value="<?= $data->grupo_temporal ?>">
                            </div>
 <?php
        
 
    }*/
        ?>
                
                                      
                            
                                            <?php
    if (($data->empresa_temporal != null)&&($data->empresa == null)) {
        ?>
         <div class="form-group col-xs-6">
          <label for="nombre">Empresa</label>
         <input type="text"  class="form-control" name="empresa_temporal" value="<?= $data->empresa_temporal ?>">
         
         <input id="empresa" type="hidden" class="form-control" value="<?= $data->empresa ?>"  name="empresa" placeholder="Ingresa el nombre de la empresa">
          </div>

        <?php
    } else if (($data->empresa != null)&&($data->empresa_temporal == null)) {
        
    ?>
         
         
          <div class="form-group col-xs-6">
          <label for="nombre">Empresa </label>
        <input id="empresa" type="text" class="form-control" value="<?= $data->empresa ?>"  name="empresa" placeholder="Ingresa el nombre de la empresa">
        
         <input type="hidden"  class="form-control" name="empresa_temporal" value="<?= $data->empresa_temporal ?>">
            </div>
 <?php
        
 
    }else if (($data->empresa != null)&&($data->empresa_temporal != null)) {
        
    ?>
         
         
          <div class="form-group col-xs-6">
          <label for="nombre">Empresa </label>
        <input id="empresa" type="text" class="form-control" value="<?= $data->empresa ?>"  name="empresa" placeholder="Ingresa el nombre de la empresa">
        
         <input type="text" class="form-control" name="empresa_temporal" value="<?= $data->empresa_temporal ?>">
            </div>
 <?php
        
 
    }  else {
         ?>
         
         
          <div class="form-group col-xs-6">
          <label for="nombre">Empresa </label>
        <input id="empresa" type="text" class="form-control" value="<?= $data->empresa ?>"  name="empresa" placeholder="Ingresa el nombre de la empresa">
        
         <input type="text" class="form-control" name="empresa_temporal" value="<?= $data->empresa_temporal ?>">
            </div>
 <?php
?>
         
         
          <div class="form-group col-xs-6">
          <label for="nombre">Empresa </label>
        <input id="empresa" type="text" class="form-control" value="<?= $data->empresa ?>"  name="empresa" placeholder="Ingresa el nombre de la empresa">
        
         <input type="hidden"  class="form-control" name="empresa_temporal" value="<?= $data->empresa_temporal ?>">
            </div>
 <?php
        
        
        
    }
        ?>
                                
                                
                     
                
                
                
                
                     <?php
    if (($data->grupo_temporal != null)&&($data->grupo == null)) {
        ?>
         <div class="form-group col-xs-6">
          <label for="nombre">Grupo</label>
         <input type="text" class="form-control" name="grupo_temporal" value="<?= $data->grupo_temporal ?>">
         
           <input id="grupo" type="hidden" class="form-control"  value="<?= $data->grupo ?>" name="grupo">

          </div>

        <?php
    } else if (($data->grupo != null)&&($data->grupo_temporal == null)) {
        
    ?>
         
         
             <div class="form-group col-xs-6">
                                <label>Grupo</label>
                                <input id="grupo" type="text" class="form-control"  value="<?= $data->grupo ?>" name="grupo" placeholder="Ingresa el nombre de la grupo">
     <input type="hidden" class="form-control" name="grupo_temporal" value="<?= $data->grupo_temporal ?>">
                            </div>
 <?php
        
 
    }else if (($data->grupo != null)&&($data->grupo_temporal != null)) {
        
    ?>
         
         
             <div class="form-group col-xs-6">
                                <label>Grupo</label>
                                <input id="grupo" type="text" class="form-control"  value="<?= $data->grupo ?>" name="grupo" placeholder="Ingresa el nombre de la grupo">
     <input type="text" class="form-control" name="grupo_temporal" value="<?= $data->grupo_temporal ?>">
                            </div>
 <?php
        
 
    }else{
         ?>
         
         
             <div class="form-group col-xs-6">
                                <label>Grupo</label>
                                <input id="grupo" type="text" class="form-control"  value="<?= $data->grupo ?>" name="grupo" placeholder="Ingresa el nombre de la grupo">
     <input type="hidden" class="form-control" name="grupo_temporal" value="<?= $data->grupo_temporal ?>">
                            </div>
 <?php
    }
        ?>
                
                
                
                
                
                
      



                        </div>




                        <br>

                        <div class="row">


                            <div class="form-group col-xs-6">
                                <label for="nombre">Estado </label>
                                <input id="estado" type="text" class="form-control" value="<?= $data->estado ?>" name="estado" placeholder="Ingresa el estado">
                            </div>


                            <div class="form-group col-xs-6">
                                <label for="nombre">Ciudad / Municipio </label>
                                <input id="ciudad_municipio" type="text" class="form-control" value="<?= $data->ciudad_municipio ?>"  name="ciudad_municipio" placeholder="Ingresa el nombre de ciudad_municipio">
                            </div>

                        </div>



                        <br>

                        <div class="row">


                          <!--  <div class="form-group col-xs-6">
                                <label for="nombre">Tipo de Cliente </label>
                                <input id="tipo_de_cliente" type="text" value="<?= $data->tipo_de_cliente ?>" class="form-control form-control-sm"  name="tipo_de_cliente" placeholder="Ingresa el tipo de cliente">
                            </div>-->
                            
                            
                            
                            
                              <div class="form-group col-xs-6">
                                <label for="nombre">Tipo de Cliente  </label>
                                          <SELECT name="tipo_de_cliente" class="form-control" > 
                            <optgroup label="Selecciona una opción">
                                 <option value="" <?php if ($data->tipo_de_cliente == "") {echo "Selected"; } ?>>Selecciona una opción</option>
                                
                                <option value="SHEET PLANT CHICO" <?php if ($data->tipo_de_cliente == "SHEET PLANT CHICO") {echo "Selected"; } ?>>SHEET PLANT CHICO</option>
                                <option value="SHEET PLANT MEDIANO" <?php if ($data->tipo_de_cliente == "SHEET PLANT MEDIANO"){  echo "Selected";} ?>>SHEET PLANT MEDIANO</option>
                                <option value="SHEET PLANT GRANDE" <?php if ($data->tipo_de_cliente == "SHEET PLANT GRANDE") {echo "Selected"; } ?>>SHEET PLANT GRANDE</option>
                                <option value="COMERCIALIZADOR CHICO" <?php if ($data->tipo_de_cliente == "COMERCIALIZADOR CHICO"){  echo "Selected";} ?>>COMERCIALIZADOR CHICO</option>
                                <option value="COMERCIALIZADOR MEDIANO" <?php if ($data->tipo_de_cliente == "COMERCIALIZADOR MEDIANO") {echo "Selected"; } ?>>COMERCIALIZADOR MEDIANO</option>
                                <option value="COMERCIALIZADOR GRANDE" <?php if ($data->tipo_de_cliente == "COMERCIALIZADOR GRANDE"){  echo "Selected";} ?>>COMERCIALIZADOR GRANDE</option>
                                <option value="CORRUGADOR CHICO" <?php if ($data->tipo_de_cliente == "CORRUGADOR CHICO") {echo "Selected"; } ?>>CORRUGADOR CHICO</option>
                                <option value="CORRUGADOR MEDIANO" <?php if ($data->tipo_de_cliente == "CORRUGADOR MEDIANO"){  echo "Selected";} ?>>CORRUGADOR MEDIANO</option>
                               <option value="CORRUGADOR GRANDE" <?php if ($data->tipo_de_cliente == "CORRUGADOR GRANDE"){  echo "Selected";} ?>>CORRUGADOR GRANDE</option>
                                
                                
                                
                                
                            </optgroup>
                           </SELECT>
                            </div>
                            
                            


                            <div class="form-group col-xs-6">
                                <label for="nombre">Tamaño del Cliente </label>
                                <input id="tamano_cliente" type="text" value="<?= $data->tamano_cliente ?>" class="form-control form-control-sm"  name="tamano_cliente" placeholder="Ingresa el  de tamano_cliente">
                            </div>



                        </div>



                        <br>

                        <div class="row">

                            <!--<div class="form-group col-xs-6">
                                <label for="nombre">Asesor </label>
                                <input id="asesor"  readOnly type="text" value="<?= $data->asesor ?>" class="form-control form-control-sm"  name="asesor" placeholder="Ingresa el asesor">
                            </div>
                            
                             <input id="asesor_maquinaria"  readOnly type="hidden" value="<?= $data->asesor_maquinaria ?>" class="form-control form-control-sm"  name="asesor_maquinaria">
                             
                         <input id="asesor_consumibles"  readOnly type="hidden" value="<?= $data->asesor_consumibles ?>" class="form-control form-control-sm"  name="asesor_consumibles">
                         -->
                         
                         <div class="form-group col-xs-4">
                             <label for="nombre">Asesor Refacciones </label>
                                
                                <select name="asesor" class="form-control">
                                    <optgroup label="Selecciona una opción">
                                       
                                        <option value=""<?php if($data->asesor==""){echo "Selected";} ?> >Selecciona una opción</option>
                                          <option value="Aldo"<?php if($data->asesor=="Aldo"){echo "Selected";} ?>>Aldo Guillén</option>
                                       
                                        <option value="Carlos"<?php if($data->asesor=="Carlos"){echo "Selected";} ?>>Carlos Hernández</option>
                                       <option value="Rodrigo"<?php if($data->asesor=="Rodrigo"){echo "Selected";} ?>>Rodrigo Lopéz</option>
                                        
                                        
                                    </optgroup>
                                    
                                </select>
                          </div>
                              <div class="form-group col-xs-4">
                                <label for="nombre">Asesor consumibles </label>
                                
                                <select name="asesor_consumibles" class="form-control">
                                    <optgroup label="Selecciona una opción">
                                        <option value=""<?php if($data->asesor_consumibles==""){echo "Selected";} ?> >Selecciona una opción</option>
                                        <option value="Aldo"<?php if($data->asesor_consumibles=="Aldo"){echo "Selected";} ?>>Aldo Guillén</option>
                                        <option value="Carlos"<?php if($data->asesor_consumibles=="Carlos"){echo "Selected";} ?>>Carlos Hernández</option>
                                        
                                        <option value="Rodrigo"<?php if($data->asesor_consumibles=="Rodrigo"){echo "Selected";} ?>>Rodrigo Lopéz</option>
                                        
                                        
                                    </optgroup>
                                    
                                </select>
                               <!--<input id="asesor"  readOnly type="text" value="<?= $data->asesor ?>" class="form-control form-control-sm"  name="asesor" placeholder="Ingresa el asesor">
                           -->
                               
                               </div>
                            
                            
                            <div class="form group col-xs-4">
                                <label for="maquinaria">Asesor Maquinaria</label>
                                <select name="asesor_maquinaria" class="form-control">
                                    <optgroup label="Selecciona una opción">
                                        <option value=""<?php if($data->asesor_maquinaria==""){echo "Selected";} ?> >Selecciona una opción</option>
                                       
                                        <option value="Aldo"<?php if($data->asesor_maquinaria =="Aldo") {echo "Selected";} ?> >Aldo Guillén</option>
                                        
                                        <option value="Alejandra" <?php if($data->asesor_maquinaria == "Alejandra") {echo "Selected";} ?>>Alejandra Maldonado</option> 
                                          <option value="Benjamin"<?php if($data->asesor_maquinaria =="Benjamin") {echo "Selected";} ?> >Benjamin</option>
                                        <option value="Ricardo" <?php if($data->asesor_maquinaria == "Ricardo"){echo "Selected";} ?>>Ricardo</option>
                                        <option value="Ignacio"<?php if($data->asesor_maquinaria =="Ignacio") {echo "Selected";} ?> >Ignacio Hernández</option>
                                        <option value="Sergio"<?php if($data->asesor_maquinaria =="Sergio") {echo "Selected";} ?> >Sergio Peñafiel</option>
                                       
                                        
                                    </optgroup>
                                </select>
                                
                            </div>
                            
                         



                        </div>
                        <br>
                        <div class="row">

                            
                            <div class="form-group col-xs-6">
                                <label for="nombre">Estatus Cliente </label>
                                <input id="estatus_cliente" value="<?= $data->estatus_cliente ?>" type="text" class="form-control form-control-sm"  name="estatus_cliente" placeholder="Ingresa el estatus cliente">
                            </div>
        

                            <div class="form-group col-xs-6">
                                <label for="nombre">Tipo Mercado </label>
                                <input id="tipo_mercado" value="<?= $data->tipo_mercado ?>" type="text" class="form-control form-control-sm"  name="tipo_mercado" placeholder="Ingresa el tipo mercado">
                            </div>


                           

                        </div>


                        <br>

                        <div class="row">
                             <div class="form-group col-xs-6">
                                <label for="nombre">Volumen producccion </label>
                                <input id="volumen_produccion" value="<?= $data->volumen_produccion ?>" type="text" class="form-control form-control-sm"  name="volumen_produccion" placeholder="Ingresa el volumen produccion">
                            </div>

    


                            <div class="form-group col-xs-6">
                                <label for="nombre">Necesidad </label>
                                <input id="necesidad" type="text" value="<?= $data->necesidad ?>" class="form-control form-control-sm"  name="necesidad" placeholder="Ingresa la necesidad">
                            </div>

                           

                        </div>


                        <br>

                        <div class="row">


                             <div class="form-group col-xs-6">
                                <label for="nombre">Compromiso </label>
                                <input id="compromiso" type="text" value="<?= $data->compromiso ?>" class="form-control form-control-sm"  name="compromiso" placeholder="Ingresa el compromiso">
                            </div>


                            <div class="form-group col-xs-6">
                                <label for="nombre">Notas </label>
                                <input id="notas" type="text" value="<?= $data->notas ?>" class="form-control form-control-sm"  name="notas" placeholder="Ingresa las notas">
                            </div>

                           

                        </div>


                        <br>
                        <div class="row">

                             <div class="form-group col-xs-6">
                                <label for="nombre">Refacciones </label>
                                <input id="refacciones" type="text" value="<?= $data->refacciones ?>" class="form-control form-control-sm"  name="refacciones" placeholder="Ingresa la lista de refacciones">
                            </div>



                            <div class="form-group col-xs-6">
                                <label for="nombre">¿Tiene corrugadora? </label>
                                          <SELECT name="corrugadora" class="form-control" > 
                            <optgroup label="Selecciona una opción">
                                 <option value="" <?php if ($data->corrugadora == "") {echo "Selected"; } ?>>Selecciona una opción</option>
                                
                                <option value="Sí" <?php if ($data->corrugadora == "Sí") {echo "Selected"; } ?>>Sí</option>
                                <option value="No" <?php if ($data->corrugadora == "No"){  echo "Selected";} ?>>No</option>
                                
                                
                            </optgroup>
                           </SELECT>
                            </div>
                           
                            

                        </div>
                         <br>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label for="nombre">¿Es cliente de Robuspack? </label>
                                    <SELECT name="cliente_robuspack" class="form-control" required> 
                                      <optgroup label="Selecciona una opción">
                                            <option value="" <?php if ($data->cliente_robuspack == "") {echo "Selected"; } ?>>Selecciona una opción</option>
                                           <option value="Sí" <?php if ($data->cliente_robuspack == "Sí") {echo "Selected"; } ?>>Sí</option>
                                           <option value="No" <?php if ($data->cliente_robuspack == "No"){  echo "Selected";} ?>>No</option>
                                           <option value="Prospecto" <?php if ($data->cliente_robuspack == "Prospecto"){  echo "Selected";} ?>>Prospecto</option>
                                     </optgroup>
                                 </SELECT>
                            </div>
                          </div>   
                        


                    </div>




















                    <div class="jumbotron">

                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label for="nombre">Contacto </label>
                                <select name="contacto" id="contacto" class="form-control input-sm" onchange="agregarCliente()">
                                    <option   value="">Selecciona una opción</option>
                                    <OPTION VALUE="Dueño">Dueño</OPTION>
                                    <OPTION VALUE="Ceo">Ceo</OPTION>
                                    <OPTION VALUE="Gerente">Gerente</OPTION>
                                    <OPTION VALUE="Producción">Producción</OPTION>
                                    <OPTION VALUE="Mantenimiento">Mantenimiento</OPTION>
                                    <OPTION VALUE="Compras">Compras</OPTION>
                                    <OPTION VALUE="Ventas">Ventas</OPTION>
                                    <OPTION VALUE="Otros">Otros</OPTION>
                                     <OPTION VALUE="Todos">Todos</OPTION>
                                </select>

                            </div>

                        </div>


                        <center> 
                            <label id="dueno" style="display: none" class="font-weight-bold"><h3>

                                    DATOS DEL DUEÑO

                                </h3></label></center>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label id="lbl_nombre_dueno" style="display: none">Nombre </label>
                                <input id="nombre_dueno" value="<?= $data->nombre_dueno ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_dueno" placeholder1="Ingresa el nombre">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_celular_dueno" style="display: none">Celular  </label>
                                <input id="celular_dueno" value="<?= $data->celular_dueno ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_dueno" placeholder1="Ingresa el celular">

                            </div>
                        </div>





                        <div class="row">
                            <div class="form-group col-xs-6"> 

                                <label id="lbl_correo_personal_dueno" style="display: none">Correo Personal </label>
                                <input id="correo_personal_dueno" value="<?= $data->correo_personal_dueno ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_dueno" placeholder1="Ingresa el correo personal">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_dueno" style="display: none" >Correo Empresarial </label>
                                <input id="correo_empresarial_dueno" value="<?= $data->correo_empresarial_dueno ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_dueno" placeholder1="Ingresa el correo empresarial">

                            </div>
                        </div>




                        <center> 
                            <label id="ceo" style="display: none" class="font-weight-bold"><h3>

                                    DATOS DEL CEO

                                </h3></label></center>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label id="lbl_nombre_ceo" style="display: none">Nombre </label>
                                <input id="nombre_ceo" value="<?= $data->nombre_ceo ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_ceo" placeholder1="Ingresa el nombre">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_celular_ceo" style="display: none">Celular  </label>
                                <input id="celular_ceo" value="<?= $data->celular_ceo ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_ceo" placeholder1="Ingresa el celular">

                            </div>
                        </div>





                        <div class="row">
                            <div class="form-group col-xs-6"> 

                                <label id="lbl_correo_personal_ceo" style="display: none">Correo Personal </label>
                                <input id="correo_personal_ceo" value="<?= $data->correo_personal_ceo ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_ceo" placeholder1="Ingresa el correo personal">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_ceo" style="display: none" >Correo Empresarial </label>
                                <input id="correo_empresarial_ceo" value="<?= $data->correo_empresarial_ceo ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_ceo" placeholder1="Ingresa el correo empresarial">

                            </div>
                        </div>













                        <center> 
                            <label id="gerente" style="display: none" class="font-weight-bold"><h3>

                                    DATOS DEL GERENTE 

                                </h3></label></center>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label id="lbl_nombre_gerente" style="display: none">Nombre </label>
                                <input id="nombre_gerente" value="<?= $data->correo_empresarial_gerente ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_gerente" placeholder1="1Ingresa el nombre">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_celular_gerente" style="display: none">Celular  </label>
                                <input id="celular_gerente" value="<?= $data->celular_gerente ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_gerente" placeholder1="Ingresa el celular">

                            </div>
                        </div>





                        <div class="row">
                            <div class="form-group col-xs-6"> 

                                <label id="lbl_correo_personal_gerente" style="display: none">Correo Personal </label>
                                <input id="correo_personal_gerente" value="<?= $data->correo_personal_gerente ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_gerente" placeholder1="Ingresa el correo personal">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_gerente" style="display: none" >Correo Empresarial </label>
                                <input id="correo_empresarial_gerente" value="<?= $data->correo_empresarial_gerente ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_gerente" placeholder1="Ingresa el correo empresarial">

                            </div>
                        </div>





                        <center> 
                            <label id="produccion" style="display: none" class="font-weight-bold"><h3>

                                    DATOS DE PRODUCCION

                                </h3></label></center>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label id="lbl_nombre_produccion" style="display: none">Nombre </label>
                                <input id="nombre_produccion" value="<?= $data->nombre_produccion ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_produccion" placeholder1="Ingresa el nombre">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_celular_produccion" style="display: none">Celular  </label>
                                <input id="celular_produccion" value="<?= $data->celular_produccion ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_produccion" placeholder1="Ingresa el celular">

                            </div>
                        </div>





                        <div class="row">
                            <div class="form-group col-xs-6"> 

                                <label id="lbl_correo_personal_produccion" style="display: none">Correo Personal </label>
                                <input id="correo_personal_produccion" value="<?= $data->correo_personal_produccion ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_produccion" placeholder1="Ingresa el correo personal">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_produccion" style="display: none" >Correo Empresarial </label>
                                <input id="correo_empresarial_produccion" value="<?= $data->correo_empresarial_produccion ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_produccion" placeholde1r="Ingresa el correo empresarial">

                            </div>
                        </div>



                        <center> 
                            <label id="mtto" style="display: none" class="font-weight-bold"><h3>

                                    DATOS DEL ENCARGADO DE MTTO

                                </h3></label></center>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label id="lbl_nombre_mtto" style="display: none">Nombre </label>
                                <input id="nombre_mtto" value="<?= $data->nombre_mtto ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_mtto" placeholder1="Ingresa el nombre">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_celular_mtto" style="display: none">Celular  </label>
                                <input id="celular_mtto" value="<?= $data->celular_mtto ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_mtto" placeholder1="Ingresa el celular">

                            </div>
                        </div>





                        <div class="row">
                            <div class="form-group col-xs-6"> 

                                <label id="lbl_correo_personal_mtto" style="display: none">Correo Personal </label>
                                <input id="correo_personal_mtto" value="<?= $data->correo_personal_mtto ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_mtto" placeholder1="Ingresa el correo personal">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_mtto" style="display: none" >Correo Empresarial </label>
                                <input id="correo_empresarial_mtto" value="<?= $data->correo_empresarial_mtto ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_mtto" placeholder1="Ingresa el correo empresarial">

                            </div>
                        </div>



                        <center> 
                            <label id="compras" style="display: none" class="font-weight-bold"><h3>

                                    DATOS DEL ENCARGADO COMPRAS

                                </h3></label></center>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label id="lbl_nombre_compras" style="display: none">Nombre </label>
                                <input id="nombre_compras" value="<?= $data->nombre_compras ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_compras" placeholder1="Ingresa el nombre">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_celular_compras" style="display: none">Celular  </label>
                                <input id="celular_compras" value="<?= $data->celular_compras ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_compras" placeholder1="Ingresa el celular">

                            </div>
                        </div>





                        <div class="row">
                            <div class="form-group col-xs-6"> 

                                <label id="lbl_correo_personal_compras" style="display: none">Correo Personal </label>
                                <input id="correo_personal_compras" value="<?= $data->correo_personal_compras ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_compras" placeholder1="Ingresa el correo personal">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_compras" style="display: none" >Correo Empresarial </label>
                                <input id="correo_empresarial_compras" value="<?= $data->correo_empresarial_compras ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_compras" placeholder1="Ingresa el correo empresarial">

                            </div>
                        </div>



                        <center> 
                            <label id="ventas" style="display: none" class="font-weight-bold"><h3>

                                    DATOS DE ENCARGADO DE VENTAS

                                </h3></label></center>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label id="lbl_nombre_ventas" style="display: none">Nombre </label>
                                <input id="nombre_ventas" value="<?= $data->nombre_ventas ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_ventas" placeholder1="Ingresa el nombre">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_celular_ventas" style="display: none">Celular  </label>
                                <input id="celular_ventas" value="<?= $data->celular_ventas ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_ventas" placeholder1="Ingresa el celular">

                            </div>
                        </div>





                        <div class="row">
                            <div class="form-group col-xs-6"> 

                                <label id="lbl_correo_personal_ventas" style="display: none">Correo Personal </label>
                                <input id="correo_personal_ventas" value="<?= $data->correo_personal_ventas ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_ventas" placeholder1="Ingresa el correo personal">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_ventas" style="display: none" >Correo Empresarial </label>
                                <input id="correo_empresarial_ventas" value="<?= $data->correo_empresarial_ventas ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_ventas" placeholder1="Ingresa el correo empresarial">

                            </div>
                        </div>



                        <center> 
                            <label id="otros" style="display: none" class="font-weight-bold"><h3>

                                    DATOS DE OTROS

                                </h3></label></center>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label id="lbl_nombre_otros" style="display: none">Nombre </label>
                                <input id="nombre_otros" value="<?= $data->nombre_otros ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_otros" placeholder1="Ingresa el nombre">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_celular_otros" style="display: none">Celular  </label>
                                <input id="celular_otros" value="<?= $data->celular_otros ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_otros" placeholder1="Ingresa el celular">

                            </div>
                        </div>





                        <div class="row">
                            <div class="form-group col-xs-6"> 

                                <label id="lbl_correo_personal_otros" style="display: none">Correo Personal </label>
                                <input id="correo_personal_otros" value="<?= $data->correo_personal_otros ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_otros" placeholder1="Ingresa el correo personal">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_otros" style="display: none" >Correo Empresarial </label>
                                <input id="correo_empresarial_otros" value="<?= $data->correo_empresarial_otros ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_otros" placeholder1="Ingresa el correo empresarial">

                            </div>
                        </div>











                    </div>


                    

                    



                        
                        <input id="info_maquina_1" type="hidden" name="info_maquina_1"  value="<?= $data->info_maquina_1 ?>">
                        <input id="modelo_maquina_1" type="hidden" name="modelo_maquina_1"  value="<?= $data->modelo_maquina_1 ?>">
                        <input id="medida_maquina_1" type="hidden" name="medida_maquina_1"  value="<?= $data->medida_maquina_1 ?>">
                        <input id="tipo_maquina_1" type="hidden" name="tipo_maquina_1"  value="<?= $data->tipo_maquina_1 ?>">
                        <input id="troquel_maquina_1" type="hidden" name="troquel_maquina_1"  value="<?= $data->troquel_maquina_1 ?>">
                        <input id="codigo_cubierta_maquina_1" type="hidden" name="codigo_cubierta_maquina_1" value="<?= $data->codigo_cubierta_maquina_1 ?>">
                        <input id="cliente_conoce_maquina_1" type="hidden" name="cliente_conoce_maquina_1" value="<?= $data->cliente_conoce_maquina_1 ?>">
                        <input id="refacciones_maquina_1" type="hidden" name="refacciones_maquina_1" value="<?= $data->refacciones_maquina_1 ?>">
                        <input id="refacciones_maquina_1" type="hidden" name="refacciones_maquina_1" value="<?= $data->refacciones_maquina_1 ?>">

                        <input id="info_maquina_2" type="hidden" name="info_maquina_2"  value="<?= $data->info_maquina_2 ?>">
                        <input id="modelo_maquina_2" type="hidden" name="modelo_maquina_2"  value="<?= $data->modelo_maquina_2 ?>">
                        <input id="medida_maquina_2" type="hidden" name="medida_maquina_2"  value="<?= $data->medida_maquina_2 ?>">
                        <input id="tipo_maquina_2" type="hidden" name="tipo_maquina_2"  value="<?= $data->tipo_maquina_2 ?>">
                        <input id="troquel_maquina_2" type="hidden" name="troquel_maquina_2"  value="<?= $data->troquel_maquina_2 ?>">
                        <input id="codigo_cubierta_maquina_2" type="hidden" name="codigo_cubierta_maquina_2" value="<?= $data->codigo_cubierta_maquina_2 ?>">
                        <input id="cliente_conoce_maquina_2" type="hidden" name="cliente_conoce_maquina_2" value="<?= $data->cliente_conoce_maquina_2 ?>">
                        <input id="refacciones_maquina_2" type="hidden" name="refacciones_maquina_2" value="<?= $data->refacciones_maquina_2 ?>">
                        <input id="refacciones_maquina_2" type="hidden" name="refacciones_maquina_2" value="<?= $data->refacciones_maquina_2 ?>">

                        <input id="info_maquina_3" type="hidden" name="info_maquina_3"  value="<?= $data->info_maquina_3 ?>">
                        <input id="modelo_maquina_3" type="hidden" name="modelo_maquina_3"  value="<?= $data->modelo_maquina_3 ?>">
                        <input id="medida_maquina_3" type="hidden" name="medida_maquina_3"  value="<?= $data->medida_maquina_3 ?>">
                        <input id="tipo_maquina_3" type="hidden" name="tipo_maquina_3"  value="<?= $data->tipo_maquina_3 ?>">
                        <input id="troquel_maquina_3" type="hidden" name="troquel_maquina_3"  value="<?= $data->troquel_maquina_3 ?>">
                        <input id="codigo_cubierta_maquina_3" type="hidden" name="codigo_cubierta_maquina_3" value="<?= $data->codigo_cubierta_maquina_3 ?>">
                        <input id="cliente_conoce_maquina_3" type="hidden" name="cliente_conoce_maquina_3" value="<?= $data->cliente_conoce_maquina_3 ?>">
                        <input id="refacciones_maquina_3" type="hidden" name="refacciones_maquina_3" value="<?= $data->refacciones_maquina_3 ?>">
                        <input id="refacciones_maquina_3" type="hidden" name="refacciones_maquina_3" value="<?= $data->refacciones_maquina_3 ?>">

                        <input id="info_maquina_4" type="hidden" name="info_maquina_4"  value="<?= $data->info_maquina_4 ?>">
                        <input id="modelo_maquina_4" type="hidden" name="modelo_maquina_4"  value="<?= $data->modelo_maquina_4 ?>">
                        <input id="medida_maquina_4" type="hidden" name="medida_maquina_4"  value="<?= $data->medida_maquina_4 ?>">
                        <input id="tipo_maquina_4" type="hidden" name="tipo_maquina_4"  value="<?= $data->tipo_maquina_4 ?>">
                        <input id="troquel_maquina_4" type="hidden" name="troquel_maquina_4"  value="<?= $data->troquel_maquina_4 ?>">
                        <input id="codigo_cubierta_maquina_4" type="hidden" name="codigo_cubierta_maquina_4" value="<?= $data->codigo_cubierta_maquina_4 ?>">
                        <input id="cliente_conoce_maquina_4" type="hidden" name="cliente_conoce_maquina_4" value="<?= $data->cliente_conoce_maquina_4 ?>">
                        <input id="refacciones_maquina_4" type="hidden" name="refacciones_maquina_4" value="<?= $data->refacciones_maquina_4 ?>">
                        <input id="refacciones_maquina_4" type="hidden" name="refacciones_maquina_4" value="<?= $data->refacciones_maquina_4 ?>">

                        <input id="info_maquina_5" type="hidden" name="info_maquina_5"  value="<?= $data->info_maquina_5 ?>">
                        <input id="modelo_maquina_5" type="hidden" name="modelo_maquina_5"  value="<?= $data->modelo_maquina_5 ?>">
                        <input id="medida_maquina_5" type="hidden" name="medida_maquina_5"  value="<?= $data->medida_maquina_5 ?>">
                        <input id="tipo_maquina_5" type="hidden" name="tipo_maquina_5"  value="<?= $data->tipo_maquina_5 ?>">
                        <input id="troquel_maquina_5" type="hidden" name="troquel_maquina_5"  value="<?= $data->troquel_maquina_5 ?>">
                        <input id="codigo_cubierta_maquina_5" type="hidden" name="codigo_cubierta_maquina_5" value="<?= $data->codigo_cubierta_maquina_5 ?>">
                        <input id="cliente_conoce_maquina_5" type="hidden" name="cliente_conoce_maquina_5" value="<?= $data->cliente_conoce_maquina_5 ?>">
                        <input id="refacciones_maquina_5" type="hidden" name="refacciones_maquina_5" value="<?= $data->refacciones_maquina_5 ?>">
                        <input id="refacciones_maquina_5" type="hidden" name="refacciones_maquina_5" value="<?= $data->refacciones_maquina_5 ?>">

                        <input id="info_maquina_6" type="hidden" name="info_maquina_6"  value="<?= $data->info_maquina_6 ?>">
                        <input id="modelo_maquina_6" type="hidden" name="modelo_maquina_6"  value="<?= $data->modelo_maquina_6 ?>">
                        <input id="medida_maquina_6" type="hidden" name="medida_maquina_6"  value="<?= $data->medida_maquina_6 ?>">
                        <input id="tipo_maquina_6" type="hidden" name="tipo_maquina_6"  value="<?= $data->tipo_maquina_6 ?>">
                        <input id="troquel_maquina_6" type="hidden" name="troquel_maquina_6"  value="<?= $data->troquel_maquina_6 ?>">
                        <input id="codigo_cubierta_maquina_6" type="hidden" name="codigo_cubierta_maquina_6" value="<?= $data->codigo_cubierta_maquina_6 ?>">
                        <input id="cliente_conoce_maquina_6" type="hidden" name="cliente_conoce_maquina_6" value="<?= $data->cliente_conoce_maquina_6 ?>">
                        <input id="refacciones_maquina_6" type="hidden" name="refacciones_maquina_6" value="<?= $data->refacciones_maquina_6 ?>">
                        <input id="refacciones_maquina_6" type="hidden" name="refacciones_maquina_6" value="<?= $data->refacciones_maquina_6 ?>">

                        <input id="info_maquina_7" type="hidden" name="info_maquina_7"  value="<?= $data->info_maquina_7 ?>">
                        <input id="modelo_maquina_7" type="hidden" name="modelo_maquina_7"  value="<?= $data->modelo_maquina_7 ?>">
                        <input id="medida_maquina_7" type="hidden" name="medida_maquina_7"  value="<?= $data->medida_maquina_7 ?>">
                        <input id="tipo_maquina_7" type="hidden" name="tipo_maquina_7"  value="<?= $data->tipo_maquina_7 ?>">
                        <input id="troquel_maquina_7" type="hidden" name="troquel_maquina_7"  value="<?= $data->troquel_maquina_7 ?>">
                        <input id="codigo_cubierta_maquina_7" type="hidden" name="codigo_cubierta_maquina_7" value="<?= $data->codigo_cubierta_maquina_7 ?>">
                        <input id="cliente_conoce_maquina_7" type="hidden" name="cliente_conoce_maquina_7" value="<?= $data->cliente_conoce_maquina_7 ?>">
                        <input id="refacciones_maquina_7" type="hidden" name="refacciones_maquina_7" value="<?= $data->refacciones_maquina_7 ?>">
                        <input id="refacciones_maquina_7" type="hidden" name="refacciones_maquina_7" value="<?= $data->refacciones_maquina_7 ?>">

                        <input id="info_maquina_8" type="hidden" name="info_maquina_8"  value="<?= $data->info_maquina_8 ?>">
                        <input id="modelo_maquina_8" type="hidden" name="modelo_maquina_8"  value="<?= $data->modelo_maquina_8 ?>">
                        <input id="medida_maquina_8" type="hidden" name="medida_maquina_8"  value="<?= $data->medida_maquina_8 ?>">
                        <input id="tipo_maquina_8" type="hidden" name="tipo_maquina_8"  value="<?= $data->tipo_maquina_8 ?>">
                        <input id="troquel_maquina_8" type="hidden" name="troquel_maquina_8"  value="<?= $data->troquel_maquina_8 ?>">
                        <input id="codigo_cubierta_maquina_8" type="hidden" name="codigo_cubierta_maquina_8" value="<?= $data->codigo_cubierta_maquina_8 ?>">
                        <input id="cliente_conoce_maquina_8" type="hidden" name="cliente_conoce_maquina_8" value="<?= $data->cliente_conoce_maquina_8 ?>">
                        <input id="refacciones_maquina_8" type="hidden" name="refacciones_maquina_8" value="<?= $data->refacciones_maquina_8 ?>">
                        <input id="refacciones_maquina_8" type="hidden" name="refacciones_maquina_8" value="<?= $data->refacciones_maquina_8 ?>">


                        <input id="info_maquina_9" type="hidden" name="info_maquina_9"  value="<?= $data->info_maquina_9 ?>">
                        <input id="modelo_maquina_9" type="hidden" name="modelo_maquina_9"  value="<?= $data->modelo_maquina_9 ?>">
                        <input id="medida_maquina_9" type="hidden" name="medida_maquina_9"  value="<?= $data->medida_maquina_9 ?>">
                        <input id="tipo_maquina_9" type="hidden" name="tipo_maquina_9"  value="<?= $data->tipo_maquina_9 ?>">
                        <input id="troquel_maquina_9" type="hidden" name="troquel_maquina_9"  value="<?= $data->troquel_maquina_9 ?>">
                        <input id="codigo_cubierta_maquina_9" type="hidden" name="codigo_cubierta_maquina_9" value="<?= $data->codigo_cubierta_maquina_9 ?>">
                        <input id="cliente_conoce_maquina_9" type="hidden" name="cliente_conoce_maquina_9" value="<?= $data->cliente_conoce_maquina_9 ?>">
                        <input id="refacciones_maquina_9" type="hidden" name="refacciones_maquina_9" value="<?= $data->refacciones_maquina_9 ?>">
                        <input id="refacciones_maquina_9" type="hidden" name="refacciones_maquina_9" value="<?= $data->refacciones_maquina_9 ?>">

                        <input id="info_maquina_10" type="hidden" name="info_maquina_10"  value="<?= $data->info_maquina_10 ?>">
                        <input id="modelo_maquina_10" type="hidden" name="modelo_maquina_10"  value="<?= $data->modelo_maquina_10 ?>">
                        <input id="medida_maquina_10" type="hidden" name="medida_maquina_10"  value="<?= $data->medida_maquina_10 ?>">
                        <input id="tipo_maquina_10" type="hidden" name="tipo_maquina_10"  value="<?= $data->tipo_maquina_10 ?>">
                        <input id="troquel_maquina_10" type="hidden" name="troquel_maquina_10"  value="<?= $data->troquel_maquina_10 ?>">
                        <input id="codigo_cubierta_maquina_10" type="hidden" name="codigo_cubierta_maquina_10" value="<?= $data->codigo_cubierta_maquina_10 ?>">
                        <input id="cliente_conoce_maquina_10" type="hidden" name="cliente_conoce_maquina_10" value="<?= $data->cliente_conoce_maquina_10 ?>">
                        <input id="refacciones_maquina_10" type="hidden" name="refacciones_maquina_10" value="<?= $data->refacciones_maquina_10 ?>">
                        <input id="refacciones_maquina_10" type="hidden" name="refacciones_maquina_10" value="<?= $data->refacciones_maquina_10 ?>">

                        
                       
                        
                      

                       
                      
                          
                      
                        
                      
                        
            
        
          
                    
                    <!--<div class="jumbotron">
                             <div class="row">
                        <div class="form-group col-xs-6">
                            <label id="lbl_maquinas_conversion">Máquinas de conversión</label>
                            <textarea name="maquina_conversion" id="maquina_conversion" class="form-control input-sm" rows="4" cols="80" style="resize:block" 
                                      placeholder="Ingresa las marcas, los modelos y las medidas de las máquinas de conversión"> <?= $data->maquina_conversion ?> </textarea>
                            
                                     
                    
                      </div>
                    </div>
                        
                        
                        
                   </div>-->



















<!--                    <table class="table table-bordered table-striped" border="1">
    <tbody>-->



<!--  <tr>

    <td><b>Cliente</b></td>
  <td colspan="3">  <select id="a3" class="form-control" name="cliente"   <?php echo form_dropdown('clienteCombo', $clienteCombo, $data->cliente, '#', 'id="clienteCombo"'); ?> </select></td>
                    -->

                    <!--                        </tr> -->

 <!-- <tr>
    <td><b>Nivel</b></td>
                  <td colspan="3">
              
                <SELECT name="nivel" class="form-control" > 
    <optgroup label="Selecciona una opción">
         <option value="" <?php //if ($data->nivel == "") {echo "Selected"; }  ?>>Selecciona una opción</option>
        
        <option value="1" <?php //if ($data->nivel == "1") {echo "Selected"; }  ?>>1</option>
        <option value="2" <?php //if ($data->nivel == "2"){  echo "Selected";}  ?>>2</option>
         <option value="3" <?php //if ($data->nivel == "3") {echo "Selected"; }  ?>>3</option>
        <option value="4" <?php //if ($data->nivel == "4"){  echo "Selected";}  ?>>4</option>
         <option value="NS" <?php //if ($data->nivel == "NS") {echo "Selected"; }  ?>>NS</option>
        
        
    </optgroup>
   </SELECT>
                  </td>
</tr>-->




<!--                        <tr>
           <td><b>Necesidad</b></td>
                      <td>
                       
                       <textarea name="necesidad" class="form-control input-sm" style="resize:block;"><?= $data->necesidad ?></textarea>
                      </td>
       </tr>
       <tr>
           <td><b>Compromiso</b></td>
                         <td >
                             <input id="a2" class="form-control" type="text" name="compromiso" value="<?= $data->compromiso ?>">
                         <textarea name="compromiso" class="form-control input-sm" style="resize:block;" rows="7" cols="80"><?= $data->compromiso ?></textarea>
                         
                         </td>
       </tr>
       <tr>
           <td><b>Notas</b></td>
                           <td >
                               <input id="a2" class="form-control" type="text" name="notas" value="<?= $data->notas ?>">
                             <textarea name="notas" class="form-control input-sm" style="resize:block;" rows="7" cols="80"><?= $data->notas ?></textarea>
                           </td>
       </tr>


      
      
           
     <td colspan="2">  -->  <center> <input  class="btn btn-success" title="Da clic para guardar los datos" type="submit" value="Guardar" >
               <a title="Da clic para regresar al menú" href="../../CensoMaquinaria" class="btn btn-warning">Cancelar</a></center><!--
</td>
       </tr>
       </tr>-->



                    <!--                </tbody>
                            </div>
                                    
                            </table>-->
                </div>
    
        <!-- <input type="hidden" name="cliente_robuspack" value="<?= $data->cliente_robuspack ?>">-->
                <!-- file lama -->
                <input type="hidden" name="id" value="<?= $data->id_censomaquinaria ?>">
                <!-- ID -->
                <input type="hidden" name="id" value="<?= $data->id_censomaquinaria ?>">

                   <!-- <input type="submit" name="submit" value="Enviar" class="btn btn-default">-->



            </form>

        </div>
    </div>
    <!-- END KONTEN UTAMA -->

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
</body>

