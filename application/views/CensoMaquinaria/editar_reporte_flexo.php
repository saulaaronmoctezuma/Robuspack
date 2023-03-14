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
            <form action="<?= base_url() ?>CensoMaquinaria/updatedataFlexo" method="post" enctype="multipart/form-data">

                <MARQUEE SCROLLDELAY =200></MARQUEE>
                <div class="container" ><h1>Actualizar datos</h1>





                    <div class="jumbotron">



                        <br>
                        <div class="row"> 
                            
      <?php
    if (($data->empresa_temporal != null)&&($data->empresa == null)) {
        ?>
         <div class="form-group col-xs-6">
          <label for="nombre">Empresa</label>
          <input type="text" readonly  class="form-control" name="empresa_temporal" value="<?= $data->empresa_temporal ?>">
         
         <input id="empresa" type="hidden" class="form-control" value="<?= $data->empresa ?>"  name="empresa" placeholder="Ingresa el nombre de la empresa">
          </div>

        <?php
    } else if (($data->empresa != null)&&($data->empresa_temporal == null)) {
        
    ?>
         
         
          <div class="form-group col-xs-6">
          <label for="nombre">Empresa </label>
        <input id="empresa" style="background-color:#03E7F7;" readonly type="text" class="form-control" value="<?= $data->empresa ?>"  name="empresa" placeholder="Ingresa el nombre de la empresa">
        
         <input type="hidden"  class="form-control" name="empresa_temporal" value="<?= $data->empresa_temporal ?>">
            </div>
 <?php
        
 
    }else if (($data->empresa != null)&&($data->empresa_temporal != null)) {
        
    ?>
         
         
          <div class="form-group col-xs-6">
          <label for="nombre">Empresa </label>
        <input id="empresa" style="background-color:#03E7F7;" type="text" readonly class="form-control" value="<?= $data->empresa ?>"  name="empresa" placeholder="Ingresa el nombre de la empresa">
        
         <input type="text" style="background-color:#03E7F7;" class="form-control" name="empresa_temporal" value="<?= $data->empresa_temporal ?>">
            </div>
 <?php
        
 
    }  else {
         ?>
         
         
          <div class="form-group col-xs-6">
          <label for="nombre">Empresa </label>
        <input id="empresa" type="text" style="background-color:#03E7F7;" class="form-control" value="<?= $data->empresa ?>"  name="empresa" placeholder="Ingresa el nombre de la empresa">
        
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
         <input type="text" readonly class="form-control" name="grupo_temporal" value="<?= $data->grupo_temporal ?>">
         
           <input id="grupo" type="hidden" class="form-control"  value="<?= $data->grupo ?>" name="grupo">

          </div>

        <?php
    } else if (($data->grupo != null)&&($data->grupo_temporal == null)) {
        
    ?>
         
         
             <div class="form-group col-xs-6">
                                <label>Grupo</label>
                                <input id="grupo" readonly type="text" style="background-color:#03E7F7;" class="form-control"  value="<?= $data->grupo ?>" name="grupo" placeholder="Ingresa el nombre de la grupo">
     <input type="hidden" class="form-control" name="grupo_temporal" value="<?= $data->grupo_temporal ?>">
                            </div>
 <?php
        
 
    }else if (($data->grupo != null)&&($data->grupo_temporal != null)) {
        
    ?>
         
         
             <div class="form-group col-xs-6">
                                <label>Grupo</label>
                                <input id="grupo" style="background-color:#03E7F7;" readonly type="text" class="form-control"  value="<?= $data->grupo ?>" name="grupo" placeholder="Ingresa el nombre de la grupo">
     <input type="text" class="form-control" name="grupo_temporal" value="<?= $data->grupo_temporal ?>">
                            </div>
 <?php
        
 
    }else{
         ?>
         
         
             <div class="form-group col-xs-6">
                                <label>Grupo</label>
                                <input id="grupo"  style="background-color:#03E7F7;" readonly type="text" class="form-control"  value="<?= $data->grupo ?>" name="grupo" placeholder="Ingresa el nombre de la grupo">
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
                                <input id="estado" type="text" style="background-color:#03E7F7;" readonly class="form-control" value="<?= $data->estado ?>" name="estado" placeholder="Ingresa el estado">
                            </div>


                            <div class="form-group col-xs-6">
                                <label for="nombre">Ciudad / Municipio  </label>
                                <input id="ciudad_municipio" style="background-color:#03E7F7;" readonly type="text" class="form-control" value="<?= $data->ciudad_municipio ?>"  name="ciudad_municipio" placeholder="Ingresa el nombre de ciudad_municipio">
                            </div>

                        </div>
                        <br>
                        
                          <div class="row">
                            <div class="form-group col-xs-6">
                                <label for="nombre">YA ES CLIENTE RBK </label>
                    <input id="cliente_robuspack" min="0" type="number" class="form-control" value="<?= $data->cliente_robuspack ?>"  name="cliente_robuspack">
                            
                                
                                 <!--   <SELECT name="cliente_robuspack" class="form-control" > 
                                      <optgroup label="Selecciona una opción">
                                            <option value="" <?php if ($data->cliente_robuspack == "") {echo "Selected"; } ?>>Selecciona una opción</option>
                                           <option value="Sí" <?php if ($data->cliente_robuspack == "Sí") {echo "Selected"; } ?>>Sí</option>
                                           <option value="No" <?php if ($data->cliente_robuspack == "No"){  echo "Selected";} ?>>No</option>
                                     </optgroup>
                                 </SELECT>-->
                            </div>
                        </div>


                        <br>

                        <div class="row">


                            
                            
                           <input id="tipo_de_cliente" type="hidden" value="<?= $data->tipo_de_cliente ?>" class="form-control form-control-sm"  name="tipo_de_cliente">
                         <input id="tamano_cliente" type="hidden" value="<?= $data->tamano_cliente ?>" class="form-control form-control-sm"  name="tamano_cliente">
                         <input id="asesor"  readOnly type="hidden" value="<?= $data->asesor ?>" class="form-control form-control-sm"  name="asesor">
                         <input id="asesor_maquinaria"  readOnly type="hidden" value="<?= $data->asesor_maquinaria ?>" class="form-control form-control-sm"  name="asesor_maquinaria">
                         <input id="asesor_consumibles"  readOnly type="hidden" value="<?= $data->asesor_consumibles ?>" class="form-control form-control-sm"  name="asesor_consumibles">
                         
                         
                         <input id="estatus_cliente" value="<?= $data->estatus_cliente ?>" type="hidden" class="form-control form-control-sm"  name="estatus_cliente">
                         <input id="tipo_mercado" value="<?= $data->tipo_mercado ?>" type="hidden" class="form-control form-control-sm"  name="tipo_mercado">
                         <input id="volumen_produccion" value="<?= $data->volumen_produccion ?>" type="hidden" class="form-control form-control-sm"  name="volumen_produccion">
                         <input id="necesidad" type="hidden" value="<?= $data->necesidad ?>" class="form-control form-control-sm"  name="necesidad">
                         <input id="compromiso" type="hidden" value="<?= $data->compromiso ?>" class="form-control form-control-sm"  name="compromiso">
                         <input id="notas" type="hidden" value="<?= $data->notas ?>" class="form-control form-control-sm"  name="notas" >
                         <input id="refacciones" type="hidden" value="<?= $data->refacciones ?>" class="form-control form-control-sm"  name="refacciones">
                         <input id="corrugadora" type="hidden" value="<?= $data->corrugadora ?>" class="form-control form-control-sm"  name="corrugadora">
                          
                                             
                    <input id="nombre_dueno" value="<?= $data->nombre_dueno ?>" name="nombre_dueno" type="hidden" >
                    <input id="celular_dueno" value="<?= $data->celular_dueno ?>" type="hidden"  name="celular_dueno">
                    <input id="correo_personal_dueno" value="<?= $data->correo_personal_dueno ?>"  type="hidden"  name="correo_personal_dueno">
                    <input id="correo_empresarial_dueno" value="<?= $data->correo_empresarial_dueno ?>" type="hidden"   name="correo_empresarial_dueno">
                   
                    <input id="nombre_ceo" value="<?= $data->nombre_ceo ?>"  type="hidden"  name="nombre_ceo" >
                   <input id="celular_ceo" value="<?= $data->celular_ceo ?>" type="hidden"   name="celular_ceo" >
                   <input id="correo_personal_ceo" value="<?= $data->correo_personal_ceo ?>"  type="hidden"   name="correo_personal_ceo">
                   <input id="correo_empresarial_ceo" value="<?= $data->correo_empresarial_ceo ?>"  type="hidden"  name="correo_empresarial_ceo" >
                  
                   <input id="nombre_gerente" value="<?= $data->correo_empresarial_gerente ?>" type="hidden"   name="nombre_gerente" >
                    <input id="celular_gerente" value="<?= $data->celular_gerente ?>"  type="hidden"   name="celular_gerente" >
                   <input id="correo_personal_gerente" value="<?= $data->correo_personal_gerente ?>"  type="hidden"   name="correo_personal_gerente" > 
                   <input id="correo_empresarial_gerente" value="<?= $data->correo_empresarial_gerente ?>"type="hidden" class="form-control form-control-sm"  name="correo_empresarial_gerente">
                 
                  
                   <input id="nombre_produccion" value=" <?= $data->nombre_produccion ?>"  type="hidden"   name="nombre_produccion">
                   <input id="celular_produccion" value="<?= $data->celular_produccion ?>"  type="hidden"   name="celular_produccion" >
                   <input id="correo_personal_produccion" value="<?= $data->correo_personal_produccion ?>"  type="hidden"   name="correo_personal_produccion" >
                   <input id="correo_empresarial_produccion" value="<?= $data->correo_empresarial_produccion ?>"  type="hidden"  name="correo_empresarial_produccion" placeholde1r="Ingresa el correo empresarial">
                   
                   <input id="nombre_mtto" value="<?= $data->nombre_mtto ?>"  type="hidden"  name="nombre_mtto">
                   <input id="celular_mtto" value="<?= $data->celular_mtto ?>"  type="hidden"   name="celular_mtto" >
                   <input id="correo_personal_mtto" value="<?= $data->correo_personal_mtto ?>"  type="hidden"  name="correo_personal_mtto" >
                   <input id="correo_empresarial_mtto" value="<?= $data->correo_empresarial_mtto ?>"  type="hidden"   name="correo_empresarial_mtto" >
                    
                   <input id="nombre_compras" value="<?= $data->nombre_compras ?>" type="hidden"   name="nombre_compras" >
                     <input id="celular_compras" value="<?= $data->celular_compras ?>"  type="hidden"  name="celular_compras">
                   <input id="correo_personal_compras" value="<?= $data->correo_personal_compras ?>"  type="hidden" name="correo_personal_compras" >
                    <input id="correo_empresarial_compras" value="<?= $data->correo_empresarial_compras ?>"  type="hidden"  name="correo_empresarial_compras" >
                    
                    <input id="nombre_ventas" value="<?= $data->nombre_ventas ?>"  type="hidden"   name="nombre_ventas" >
                    <input id="celular_ventas" value="<?= $data->celular_ventas ?>" type="hidden"   name="celular_ventas" >
                    <input id="correo_personal_ventas" value="<?= $data->correo_personal_ventas ?>" type="hidden"  name="correo_personal_ventas">
                    <input id="correo_empresarial_ventas" value="<?= $data->correo_empresarial_ventas ?>"  type="hidden"  name="correo_empresarial_ventas">
                   
                    <input id="nombre_otros" value="<?= $data->nombre_otros ?>"  type="hidden"   name="nombre_otros">
                   <input id="celular_otros" value="<?= $data->celular_otros ?>"  type="hidden"  name="celular_otros" >
                    <input id="correo_personal_otros" value="<?= $data->correo_personal_otros ?>"  type="hidden"  name="correo_personal_otros" >
                   <input id="correo_empresarial_otros" value="<?= $data->correo_empresarial_otros ?>"  type="hidden"   name="correo_empresarial_otros" >



                   <input id="info_maquina_1" value="<?= $data->info_maquina_1 ?>" name="info_maquina_1" type="hidden">
                   <input id="modelo_maquina_1" value="<?= $data->modelo_maquina_1 ?>" name="modelo_maquina_1" type="hidden" >
                   <input id="medida_maquina_1" value="<?= $data->medida_maquina_1 ?>" name="medida_maquina_1" type="hidden" >
                   <input id="tipo_maquina_1" value="<?= $data->tipo_maquina_1 ?>" name="tipo_maquina_1" type="hidden" >
                   <input id="troquel_maquina_1" value="<?= $data->troquel_maquina_1 ?>" name="troquel_maquina_1" type="hidden" >
                   <input id="codigo_cubierta_maquina_1" value="<?= $data->info_maquina_1 ?>" name="codigo_cubierta_maquina_1" type="hidden" >
                   <input id="cliente_conoce_maquina_1" value="<?= $data->cliente_conoce_maquina_1 ?>" name="cliente_conoce_maquina_1" type="hidden" >

                   <input id="info_maquina_2" value="<?= $data->info_maquina_2 ?>" name="info_maquina_2" type="hidden">
                   <input id="modelo_maquina_2" value="<?= $data->modelo_maquina_2 ?>" name="modelo_maquina_2" type="hidden" >
                   <input id="medida_maquina_2" value="<?= $data->medida_maquina_2 ?>" name="medida_maquina_2" type="hidden" >
                   <input id="tipo_maquina_2" value="<?= $data->tipo_maquina_2 ?>" name="tipo_maquina_2" type="hidden" >
                   <input id="troquel_maquina_2" value="<?= $data->troquel_maquina_2 ?>" name="troquel_maquina_2" type="hidden" >
                   <input id="codigo_cubierta_maquina_2" value="<?= $data->info_maquina_2 ?>" name="codigo_cubierta_maquina_2" type="hidden" >
                   <input id="cliente_conoce_maquina_2" value="<?= $data->cliente_conoce_maquina_2 ?>" name="cliente_conoce_maquina_2" type="hidden" >


                   <input id="info_maquina_3" value="<?= $data->info_maquina_3 ?>" name="info_maquina_3" type="hidden">
                   <input id="modelo_maquina_3" value="<?= $data->modelo_maquina_3 ?>" name="modelo_maquina_3" type="hidden" >
                   <input id="medida_maquina_3" value="<?= $data->medida_maquina_3 ?>" name="medida_maquina_3" type="hidden" >
                   <input id="tipo_maquina_3" value="<?= $data->tipo_maquina_3 ?>" name="tipo_maquina_3" type="hidden" >
                   <input id="troquel_maquina_3" value="<?= $data->troquel_maquina_3 ?>" name="troquel_maquina_3" type="hidden" >
                   <input id="codigo_cubierta_maquina_3" value="<?= $data->info_maquina_3 ?>" name="codigo_cubierta_maquina_3" type="hidden" >
                   <input id="cliente_conoce_maquina_3" value="<?= $data->cliente_conoce_maquina_3 ?>" name="cliente_conoce_maquina_3" type="hidden" >

                   <input id="info_maquina_4" value="<?= $data->info_maquina_4 ?>" name="info_maquina_4" type="hidden">
                   <input id="modelo_maquina_4" value="<?= $data->modelo_maquina_4 ?>" name="modelo_maquina_4" type="hidden" >
                   <input id="medida_maquina_4" value="<?= $data->medida_maquina_4 ?>" name="medida_maquina_4" type="hidden" >
                   <input id="tipo_maquina_4" value="<?= $data->tipo_maquina_4 ?>" name="tipo_maquina_4" type="hidden" >
                   <input id="troquel_maquina_4" value="<?= $data->troquel_maquina_4 ?>" name="troquel_maquina_4" type="hidden" >
                   <input id="codigo_cubierta_maquina_4" value="<?= $data->info_maquina_4 ?>" name="codigo_cubierta_maquina_4" type="hidden" >
                   <input id="cliente_conoce_maquina_4" value="<?= $data->cliente_conoce_maquina_4 ?>" name="cliente_conoce_maquina_4" type="hidden" >

                   <input id="info_maquina_5" value="<?= $data->info_maquina_5 ?>" name="info_maquina_5" type="hidden">
                   <input id="modelo_maquina_5" value="<?= $data->modelo_maquina_5 ?>" name="modelo_maquina_5" type="hidden" >
                   <input id="medida_maquina_5" value="<?= $data->medida_maquina_5 ?>" name="medida_maquina_5" type="hidden" >
                   <input id="tipo_maquina_5" value="<?= $data->tipo_maquina_5 ?>" name="tipo_maquina_5" type="hidden" >
                   <input id="troquel_maquina_5" value="<?= $data->troquel_maquina_5 ?>" name="troquel_maquina_5" type="hidden" >
                   <input id="codigo_cubierta_maquina_5" value="<?= $data->info_maquina_5 ?>" name="codigo_cubierta_maquina_5" type="hidden" >
                   <input id="cliente_conoce_maquina_5" value="<?= $data->cliente_conoce_maquina_5 ?>" name="cliente_conoce_maquina_5" type="hidden" >

                   <input id="info_maquina_6" value="<?= $data->info_maquina_6 ?>" name="info_maquina_6" type="hidden">
                   <input id="modelo_maquina_6" value="<?= $data->modelo_maquina_6 ?>" name="modelo_maquina_6" type="hidden" >
                   <input id="medida_maquina_6" value="<?= $data->medida_maquina_6 ?>" name="medida_maquina_6" type="hidden" >
                   <input id="tipo_maquina_6" value="<?= $data->tipo_maquina_6 ?>" name="tipo_maquina_6" type="hidden" >
                   <input id="troquel_maquina_6" value="<?= $data->troquel_maquina_6 ?>" name="troquel_maquina_6" type="hidden" >
                   <input id="codigo_cubierta_maquina_6" value="<?= $data->info_maquina_6 ?>" name="codigo_cubierta_maquina_6" type="hidden" >
                   <input id="cliente_conoce_maquina_6" value="<?= $data->cliente_conoce_maquina_6 ?>" name="cliente_conoce_maquina_6" type="hidden" >


                   <input id="info_maquina_7" value="<?= $data->info_maquina_7 ?>" name="info_maquina_7" type="hidden">
                   <input id="modelo_maquina_7" value="<?= $data->modelo_maquina_7 ?>" name="modelo_maquina_7" type="hidden" >
                   <input id="medida_maquina_7" value="<?= $data->medida_maquina_7 ?>" name="medida_maquina_7" type="hidden" >
                   <input id="tipo_maquina_7" value="<?= $data->tipo_maquina_7 ?>" name="tipo_maquina_7" type="hidden" >
                   <input id="troquel_maquina_7" value="<?= $data->troquel_maquina_7 ?>" name="troquel_maquina_7" type="hidden" >
                   <input id="codigo_cubierta_maquina_7" value="<?= $data->info_maquina_7 ?>" name="codigo_cubierta_maquina_7" type="hidden" >
                   <input id="cliente_conoce_maquina_7" value="<?= $data->cliente_conoce_maquina_7 ?>" name="cliente_conoce_maquina_7" type="hidden" >

                   <input id="info_maquina_8" value="<?= $data->info_maquina_8 ?>" name="info_maquina_8" type="hidden">
                   <input id="modelo_maquina_8" value="<?= $data->modelo_maquina_8 ?>" name="modelo_maquina_8" type="hidden" >
                   <input id="medida_maquina_8" value="<?= $data->medida_maquina_8 ?>" name="medida_maquina_8" type="hidden" >
                   <input id="tipo_maquina_8" value="<?= $data->tipo_maquina_8 ?>" name="tipo_maquina_8" type="hidden" >
                   <input id="troquel_maquina_8" value="<?= $data->troquel_maquina_8 ?>" name="troquel_maquina_8" type="hidden" >
                   <input id="codigo_cubierta_maquina_8" value="<?= $data->info_maquina_8 ?>" name="codigo_cubierta_maquina_8" type="hidden" >
                   <input id="cliente_conoce_maquina_8" value="<?= $data->cliente_conoce_maquina_8 ?>" name="cliente_conoce_maquina_8" type="hidden" >


                   <input id="info_maquina_9" value="<?= $data->info_maquina_9 ?>" name="info_maquina_9" type="hidden">
                   <input id="modelo_maquina_9" value="<?= $data->modelo_maquina_9 ?>" name="modelo_maquina_9" type="hidden" >
                   <input id="medida_maquina_9" value="<?= $data->medida_maquina_9 ?>" name="medida_maquina_9" type="hidden" >
                   <input id="tipo_maquina_9" value="<?= $data->tipo_maquina_9 ?>" name="tipo_maquina_9" type="hidden" >
                   <input id="troquel_maquina_9" value="<?= $data->troquel_maquina_9 ?>" name="troquel_maquina_9" type="hidden" >
                   <input id="codigo_cubierta_maquina_9" value="<?= $data->codigo_cubierta_maquina_9 ?>" name="codigo_cubierta_maquina_9" type="hidden" >
                   <input id="cliente_conoce_maquina_9" value="<?= $data->cliente_conoce_maquina_9 ?>" name="cliente_conoce_maquina_9" type="hidden" >


                   <input id="info_maquina_10" value="<?= $data->info_maquina_10 ?>" name="info_maquina_10" type="hidden">
                   <input id="modelo_maquina_10" value="<?= $data->modelo_maquina_10 ?>" name="modelo_maquina_10" type="hidden" >
                   <input id="medida_maquina_10" value="<?= $data->medida_maquina_10 ?>" name="medida_maquina_10" type="hidden" >
                   <input id="tipo_maquina_10" value="<?= $data->tipo_maquina_10 ?>" name="tipo_maquina_10" type="hidden" >
                   <input id="troquel_maquina_10" value="<?= $data->troquel_maquina_10 ?>" name="troquel_maquina_10" type="hidden" >
                   <input id="codigo_cubierta_maquina_10" value="<?= $data->info_maquina_10 ?>" name="codigo_cubierta_maquina_10" type="hidden" >
                   <input id="cliente_conoce_maquina_10" value="<?= $data->cliente_conoce_maquina_10 ?>" name="cliente_conoce_maquina_10" type="hidden" >



                   <input id="maquina_conversion" value="<?= $data->maquina_conversion ?>" name="maquina_conversion" type="hidden" >
                   <input id="refacciones" value="<?= $data->refacciones ?>" name="refacciones" type="hidden" >
                   <input id="corrugadora" value="<?= $data->corrugadora ?>" name="corrugadora" type="hidden" >




                        
                            
                            
                           

                        </div>


                    </div>
























<div class="jumbotron">

<center> <input  class="btn btn-success" title="Da clic para guardar los datos" type="submit" value="Guardar" >
               <a title="Da clic para regresar al menú" href="../../ReporteFlexo" class="btn btn-warning">Cancelar</a></center>

                    </div>


                    



<!--
              </div>

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

