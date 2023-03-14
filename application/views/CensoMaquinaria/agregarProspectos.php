<!--
 * @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 25/06/2019 Hora 10:33 am
   Fecha : Ultimo Cambio 26/06/2019 Hora 12:36 am
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

        <link rel="stylesheet" href="<?= base_url() ?>assets/font/glyphicons-halflings-regular.ttf">
        <!-- Para traerse el rol que esta registrado-->
        <?php
        //check user level
        $dataLevel = $this->userlevel->checkLevel($role);


        //check user level
        ?>
    </head>




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

            } else if (getSelectValue === "Todos") {
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
                
                document.getElementById("check_medida_1").style.display = "none";
                document.getElementById("label_medida_1").style.display = "none";
                document.getElementById("check_medida_2").style.display = "none";
                document.getElementById("label_medida_2").style.display = "none";
                document.getElementById("check_medida_3").style.display = "none";
                document.getElementById("label_medida_3").style.display = "none";
                document.getElementById("check_medida_4").style.display = "none";
                document.getElementById("label_medida_4").style.display = "none";
                document.getElementById("check_medida_5").style.display = "none";
                document.getElementById("label_medida_5").style.display = "none";
                document.getElementById("check_medida_6").style.display = "none";
                document.getElementById("label_medida_6").style.display = "none";
                document.getElementById("check_medida_7").style.display = "none";
                document.getElementById("label_medida_7").style.display = "none";
                
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
                
                

                document.getElementById("check_medida_1").style.display = "inline-block";
                document.getElementById("label_medida_1").style.display = "inline-block";
                document.getElementById("check_medida_2").style.display = "none";
                document.getElementById("label_medida_2").style.display = "none";
                document.getElementById("check_medida_3").style.display = "none";
                document.getElementById("label_medida_3").style.display = "none";
                document.getElementById("check_medida_4").style.display = "none";
                document.getElementById("label_medida_4").style.display = "none";
                document.getElementById("check_medida_5").style.display = "none";
                document.getElementById("label_medida_5").style.display = "none";
                document.getElementById("check_medida_6").style.display = "none";
                document.getElementById("label_medida_6").style.display = "none";
                document.getElementById("check_medida_7").style.display = "none";
                document.getElementById("label_medida_7").style.display = "none";
                
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
                
                document.getElementById("check_medida_1").style.display = "inline-block";
                document.getElementById("label_medida_1").style.display = "inline-block";
                document.getElementById("check_medida_2").style.display = "inline-block";
                document.getElementById("label_medida_2").style.display = "inline-block";
                document.getElementById("check_medida_3").style.display = "none";
                document.getElementById("label_medida_3").style.display = "none";
                document.getElementById("check_medida_4").style.display = "none";
                document.getElementById("label_medida_4").style.display = "none";
                document.getElementById("check_medida_5").style.display = "none";
                document.getElementById("label_medida_5").style.display = "none";
                document.getElementById("check_medida_6").style.display = "none";
                document.getElementById("label_medida_6").style.display = "none";
                document.getElementById("check_medida_7").style.display = "none";
                document.getElementById("label_medida_7").style.display = "none";
             ;
            
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
                
               
                
                document.getElementById("check_medida_1").style.display = "inline-block";
                document.getElementById("label_medida_1").style.display = "inline-block";
                document.getElementById("check_medida_2").style.display = "inline-block";
                document.getElementById("label_medida_2").style.display = "inline-block";
                document.getElementById("check_medida_3").style.display = "inline-block";
                document.getElementById("label_medida_3").style.display = "inline-block";
                document.getElementById("check_medida_4").style.display = "none";
                document.getElementById("label_medida_4").style.display = "none";
                document.getElementById("check_medida_5").style.display = "none";
                document.getElementById("label_medida_5").style.display = "none";
                document.getElementById("check_medida_6").style.display = "none";
                document.getElementById("label_medida_6").style.display = "none";
                document.getElementById("check_medida_7").style.display = "none";
                document.getElementById("label_medida_7").style.display = "none";
                
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
                
                  document.getElementById("lbl_maquina_3").style.display = "inline-block";
                document.getElementById("lbl_info_maquina_3").style.display = "inline-block";
                document.getElementById("info_maquina_3").style.display = "inline-block";
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
                
                
                
                document.getElementById("check_medida_1").style.display = "inline-block";
                document.getElementById("label_medida_1").style.display = "inline-block";
                document.getElementById("check_medida_2").style.display = "inline-block";
                document.getElementById("label_medida_2").style.display = "inline-block";
                document.getElementById("check_medida_3").style.display = "inline-block";
                document.getElementById("label_medida_3").style.display = "inline-block";
                document.getElementById("check_medida_4").style.display = "inline-block";
                document.getElementById("label_medida_4").style.display = "inline-block";
                document.getElementById("check_medida_5").style.display = "none";
                document.getElementById("label_medida_5").style.display = "none";
                document.getElementById("check_medida_6").style.display = "none";
                document.getElementById("label_medida_6").style.display = "none";
                document.getElementById("check_medida_7").style.display = "none";
                document.getElementById("label_medida_7").style.display = "none";

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
                
                  document.getElementById("lbl_maquina_3").style.display = "inline-block";
                document.getElementById("lbl_info_maquina_3").style.display = "inline-block";
                document.getElementById("info_maquina_3").style.display = "inline-block";
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
                
                
               
                document.getElementById("check_medida_1").style.display = "inline-block";
                document.getElementById("label_medida_1").style.display = "inline-block";
                document.getElementById("check_medida_2").style.display = "inline-block";
                document.getElementById("label_medida_2").style.display = "inline-block";
                document.getElementById("check_medida_3").style.display = "inline-block";
                document.getElementById("label_medida_3").style.display = "inline-block";
                document.getElementById("check_medida_4").style.display = "inline-block";
                document.getElementById("label_medida_4").style.display = "inline-block";
                document.getElementById("check_medida_5").style.display = "inline-block";
                document.getElementById("label_medida_5").style.display = "inline-block";
                document.getElementById("check_medida_6").style.display = "none";
                document.getElementById("label_medida_6").style.display = "none";
                document.getElementById("check_medida_7").style.display = "none";
                document.getElementById("label_medida_7").style.display = "none";

                
               


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
                
                  document.getElementById("lbl_maquina_3").style.display = "inline-block";
                document.getElementById("lbl_info_maquina_3").style.display = "inline-block";
                document.getElementById("info_maquina_3").style.display = "inline-block";
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
                
                document.getElementById("check_medida_1").style.display = "inline-block";
                document.getElementById("label_medida_1").style.display = "inline-block";
                document.getElementById("check_medida_2").style.display = "inline-block";
                document.getElementById("label_medida_2").style.display = "inline-block";
                document.getElementById("check_medida_3").style.display = "inline-block";
                document.getElementById("label_medida_3").style.display = "inline-block";
                document.getElementById("check_medida_4").style.display = "inline-block";
                document.getElementById("label_medida_4").style.display = "inline-block";
                document.getElementById("check_medida_5").style.display = "inline-block";
                document.getElementById("label_medida_5").style.display = "inline-block";
                document.getElementById("check_medida_6").style.display = "inline-block";
                document.getElementById("label_medida_6").style.display = "inline-block";
                document.getElementById("check_medida_7").style.display = "none";
                document.getElementById("label_medida_7").style.display = "none";

              

              
                
                
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
                
                  document.getElementById("lbl_maquina_3").style.display = "inline-block";
                document.getElementById("lbl_info_maquina_3").style.display = "inline-block";
                document.getElementById("info_maquina_3").style.display = "inline-block";
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
                
                document.getElementById("check_medida_1").style.display = "inline-block";
                document.getElementById("label_medida_1").style.display = "inline-block";
                document.getElementById("check_medida_2").style.display = "inline-block";
                document.getElementById("label_medida_2").style.display = "inline-block";
                document.getElementById("check_medida_3").style.display = "inline-block";
                document.getElementById("label_medida_3").style.display = "inline-block";
                document.getElementById("check_medida_4").style.display = "inline-block";
                document.getElementById("label_medida_4").style.display = "inline-block";
                document.getElementById("check_medida_5").style.display = "inline-block";
                document.getElementById("label_medida_5").style.display = "inline-block";
                document.getElementById("check_medida_6").style.display = "inline-block";
                document.getElementById("label_medida_6").style.display = "inline-block";
                document.getElementById("check_medida_7").style.display = "inline-block";
                document.getElementById("label_medida_7").style.display = "inline-block";

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
                
                  document.getElementById("lbl_maquina_3").style.display = "inline-block";
                document.getElementById("lbl_info_maquina_3").style.display = "inline-block";
                document.getElementById("info_maquina_3").style.display = "inline-block";
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
                 

                

            } else if (getSelectValue === "Todas") {
                
                document.getElementById("check_medida_1").style.display = "inline-block";
                document.getElementById("label_medida_1").style.display = "inline-block";
                document.getElementById("check_medida_2").style.display = "inline-block";
                document.getElementById("label_medida_2").style.display = "inline-block";
                document.getElementById("check_medida_3").style.display = "inline-block";
                document.getElementById("label_medida_3").style.display = "inline-block";
                document.getElementById("check_medida_4").style.display = "inline-block";
                document.getElementById("label_medida_4").style.display = "inline-block";
                document.getElementById("check_medida_5").style.display = "inline-block";
                document.getElementById("label_medida_5").style.display = "inline-block";
                document.getElementById("check_medida_6").style.display = "inline-block";
                document.getElementById("label_medida_6").style.display = "inline-block";
                document.getElementById("check_medida_7").style.display = "inline-block";
                document.getElementById("label_medida_7").style.display = "inline-block";

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


          
  function showContentMedida1() {
            selectMedida1 = document.getElementById("medida_maquina_1");
            inputMedida1 = document.getElementById("medida_maquina_1_temporal");
            check = document.getElementById("check_medida_1");
            if (check.checked) {

                selectMedida1.style.display = 'none';
               selectMedida1.disabled=true;
                inputMedida1.disabled=false;
                inputMedida1.style.display = 'block';
                deseleccionarClienteCombo();

            }
            else {

                selectMedida1.style.display = 'block';
                
                 selectMedida1.disabled=false;
                inputMedida1.disabled=true;
                inputMedida1.style.display = 'none';
                limpiarCajaTextoCliente();
            }
        }
        
        
        
           function showContentMedida2() {
            selectMedida2 = document.getElementById("medida_maquina_2");
            inputMedida2 = document.getElementById("medida_maquina_2_temporal");
            check2 = document.getElementById("check_medida_2");
            if (check2.checked) {

                selectMedida2.style.display = 'none';
               selectMedida2.disabled=true;
                inputMedida2.disabled=false;
                inputMedida2.style.display = 'block';
                deseleccionarClienteCombo();

            }
            else {

                selectMedida2.style.display = 'block';
                
                 selectMedida2.disabled=false;
                inputMedida2.disabled=true;
                inputMedida2.style.display = 'none';
                limpiarCajaTextoCliente();
            }
        }
        
        
           function showContentMedida3() {
            selectMedida3= document.getElementById("medida_maquina_3");
            inputMedida3 = document.getElementById("medida_maquina_3_temporal");
            check3 = document.getElementById("check_medida_3");
            if (check3.checked) {

                selectMedida3.style.display = 'none';
               selectMedida3.disabled=true;
                inputMedida3.disabled=false;
                inputMedida3.style.display = 'block';
                deseleccionarClienteCombo();

            }
            else {

                selectMedida3.style.display = 'block';
                
                 selectMedida3.disabled=false;
                inputMedida3.disabled=true;
                inputMedida3.style.display = 'none';
                limpiarCajaTextoCliente();
            }
        }
        
        
        function showContentMedida4() {
            selectMedida4= document.getElementById("medida_maquina_4");
            inputMedida4 = document.getElementById("medida_maquina_4_temporal");
            check4 = document.getElementById("check_medida_4");
            if (check4.checked) {

                selectMedida4.style.display = 'none';
               selectMedida4.disabled=true;
                inputMedida4.disabled=false;
                inputMedida4.style.display = 'block';
                deseleccionarClienteCombo();

            }
            else {

                selectMedida4.style.display = 'block';
                
                 selectMedida4.disabled=false;
                inputMedida4.disabled=true;
                inputMedida4.style.display = 'none';
                limpiarCajaTextoCliente();
            }
        }
        
        function showContentMedida5() {
            selectMedida5= document.getElementById("medida_maquina_5");
            inputMedida5 = document.getElementById("medida_maquina_5_temporal");
            check5 = document.getElementById("check_medida_5");
            if (check5.checked) {

                selectMedida5.style.display = 'none';
               selectMedida5.disabled=true;
                inputMedida5.disabled=false;
                inputMedida5.style.display = 'block';
                deseleccionarClienteCombo();

            }
            else {

                selectMedida5.style.display = 'block';
                
                 selectMedida5.disabled=false;
                inputMedida5.disabled=true;
                inputMedida5.style.display = 'none';
                limpiarCajaTextoCliente();
            }
        }
        
        
        
        function showContentMedida6() {
            selectMedida6= document.getElementById("medida_maquina_6");
            inputMedida6 = document.getElementById("medida_maquina_6_temporal");
            check6 = document.getElementById("check_medida_6");
            if (check6.checked) {

                selectMedida6.style.display = 'none';
               selectMedida6.disabled=true;
                inputMedida6.disabled=false;
                inputMedida6.style.display = 'block';
                deseleccionarClienteCombo();

            }
            else {

                selectMedida6.style.display = 'block';
                
                 selectMedida6.disabled=false;
                inputMedida6.disabled=true;
                inputMedida6.style.display = 'none';
                limpiarCajaTextoCliente();
            }
        }
        
        
        function showContentMedida7() {
            selectMedida7= document.getElementById("medida_maquina_7");
            inputMedida7 = document.getElementById("medida_maquina_7_temporal");
            check7 = document.getElementById("check_medida_7");
            if (check7.checked) {

                selectMedida7.style.display = 'none';
               selectMedida7.disabled=true;
                inputMedida7.disabled=false;
                inputMedida7.style.display = 'block';
                deseleccionarClienteCombo();

            }
            else {

                selectMedida7.style.display = 'block';
                
                 selectMedida7.disabled=false;
                inputMedida7.disabled=true;
                inputMedida7.style.display = 'none';
                limpiarCajaTextoCliente();
            }
        }
        
        
        function showContentMedida8() {
            selectMedida8= document.getElementById("medida_maquina_8");
            inputMedida8 = document.getElementById("medida_maquina_8_temporal");
            check8 = document.getElementById("check_medida_8");
            if (check8.checked) {

                selectMedida8.style.display = 'none';
               selectMedida8.disabled=true;
                inputMedida8.disabled=false;
                inputMedida8.style.display = 'block';
                deseleccionarClienteCombo();

            }
            else {

                selectMedida8.style.display = 'block';
                
                 selectMedida8.disabled=false;
                inputMedida8.disabled=true;
                inputMedida8.style.display = 'none';
                limpiarCajaTextoCliente();
            }
        }   
        
        
        function showContentMedida9() {
            selectMedida9= document.getElementById("medida_maquina_9");
            inputMedida9 = document.getElementById("medida_maquina_9_temporal");
            check9 = document.getElementById("check_medida_9");
            if (check9.checked) {

                selectMedida9.style.display = 'none';
               selectMedida9.disabled=true;
                inputMedida9.disabled=false;
                inputMedida9.style.display = 'block';
                deseleccionarClienteCombo();

            }
            else {

                selectMedida9.style.display = 'block';
                
                 selectMedida9.disabled=false;
                inputMedida9.disabled=true;
                inputMedida9.style.display = 'none';
                limpiarCajaTextoCliente();
            }
        }
        
        
        
        function showContentMedida10() {
            selectMedida10= document.getElementById("medida_maquina_10");
            inputMedida10 = document.getElementById("medida_maquina_10_temporal");
            check10 = document.getElementById("check_medida_10");
            if (check10.checked) {

                selectMedida10.style.display = 'none';
               selectMedida10.disabled=true;
                inputMedida10.disabled=false;
                inputMedida10.style.display = 'block';
                deseleccionarClienteCombo();

            }
            else {

                selectMedida10.style.display = 'block';
                
                 selectMedida10.disabled=false;
                inputMedida10.disabled=true;
                inputMedida10.style.display = 'none';
                limpiarCajaTextoCliente();
            }
        }


        


        

        function showContent() {
            element = document.getElementById("div_empresa_temporal");
            elementempresa = document.getElementById("div_empresa");
            check = document.getElementById("check");
            if (check.checked) {

                element.style.display = 'block';
                elementempresa.style.display = 'none';
                deseleccionarClienteCombo();

            }
            else {

                element.style.display = 'none';
                elementempresa.style.display = 'block';
                limpiarCajaTextoCliente();
            }
        }

        function limpiarCajaTextoCliente() {
            document.getElementById('empresa_temporal').value = "";
        }

        function deseleccionarClienteCombo() {
            document.getElementById("empresa_temporal").selectedIndex = 0;

        }



        function showContentGrupo() {
            element = document.getElementById("div_grupo_temporal");
            elementempresa = document.getElementById("div_grupo");
            check = document.getElementById("check_grupo");
            if (check.checked) {

                element.style.display = 'block';
                elementempresa.style.display = 'none';
                deseleccionarClienteCombo();

            }
            else {

                element.style.display = 'none';
                elementempresa.style.display = 'block';
                limpiarCajaTextoCliente();
            }
        }

        function limpiarCajaTextoCliente() {
            document.getElementById('grupo_temporal').value = "";
        }

        function deseleccionarClienteCombo() {
            document.getElementById("grupo_temporal").selectedIndex = 0;

        }



    </script>
    
    
    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
       
    
    
    <style>

             body { color: #000000; }
        </style>


    <body>


        <div id="maquinaria"><br><br><br><br><br><br>
            <div class="container" >      
             <!--   <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Bienvenido</strong> Agrega los datos segun corresponda
                </div>  -->
             <center><h1>Agregar Prospectos</h1></center>
                <MARQUEE SCROLLDELAY =200></MARQUEE>
                <form action="<?= base_url() ?>CensoMaquinaria/insertdataProspecto" method="post" enctype="multipart/form-data">


                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id_maquinaria"  name="id_clienteseguimiento">
                       
                    </div>
                    <div class="jumbotron">



                        <br>
                        <div class="row"> 

                            <div class="form-group col-xs-6" id="div_grupo_temporal" style="display: none;"  >



                                <label>Grupo</label>
                                <input id="grupo_temporal" type="text" class="form-control"  name="grupo_temporal" placeholder="Ingresa el nombre de la grupo">

                            </div>
                            
                           
                            
                            
                            
                              <div class="form-group col-xs-6"  id="div_grupo">
                                <label for="nombre">Grupo</label>
                                <select required id="grupo"  class="form-control select2"  name="grupo"  <?php echo form_dropdown('grupoCombo', $grupoCombo, '#', 'id="grupoCombo"'); ?> </select>
                            </div>



                            <div class="form-group col-xs-6" id="div_empresa_temporal" style="display: none;"  >
                                <label for="nombre">Empresa </label>
                                <input id="empresa_temporal" type="text" class="form-control"  name="empresa_temporal" placeholder="Ingresa el nombre de la empresa">
                            </div>

                            <div class="form-group col-xs-6" id="div_empresa">
                                <label for="nombre">Empresa</label>
                                <select required id="empresa" class="form-control select2"  name="empresa" <?php echo form_dropdown('clienteCombo', $clienteCombo, '#', 'id="clienteCombo"'); ?> </select>
                            </div>


                        </div>
                        
                        <div class="row">
                            <div class="form-group col-xs-6 "><input type="checkbox" name="check" id="check_grupo" value="1" onchange="javascript:showContentGrupo()" />
                                <label><p style="color:blue;font-size:12px;">  &nbsp;Selecciona si no aparece el grupo</p></label></div>
                            <div class="form-group col-xs-6"> <input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent()" />
                                <label><p style="color:blue;font-size:12px;">  &nbsp;Selecciona si no aparece la empresa</p></label>
                            </div>
                        </div>








                        <br>

                        <div class="row">


                            <div class="form-group col-xs-6">
                                <label for="nombre">Estado </label>
                                <input id="estado" type="text" class="form-control"  name="estado" placeholder="Ingresa el estado">
                            </div>


                            <div class="form-group col-xs-6">
                                <label for="nombre">Ciudad / Municipio </label>
                                <input id="ciudad_municipio" type="text" class="form-control"  name="ciudad_municipio" placeholder="Ingresa el nombre de ciudad_municipio">
                            </div>

                        </div>



                        <br>

                        <div class="row">


                           <!-- <div class="form-group col-xs-6">
                                <label for="nombre">Tipo de Cliente </label>
                                <input id="tipo_de_cliente" type="text" class="form-control form-control-sm"  name="tipo_de_cliente" placeholder="Ingresa el tipo de cliente">
                            </div>-->
                            
                               <div class="form-group col-xs-6">
                                <label for="nombre">Tipo de Cliente</label>
                                <select name="tipo_de_cliente" class="form-control input-sm select2">
                                    <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="SHEET PLANT CHICO">SHEET PLANT CHICO </OPTION>
                                    <OPTION VALUE="SHEET PLANT MEDIANO">SHEET PLANT MEDIANO</OPTION>
                                    <OPTION VALUE="SHEET PLANT GRANDE">SHEET PLANT GRANDE</OPTION>
                                    <OPTION VALUE="COMERCIALIZADOR CHICO">COMERCIALIZADOR CHICO</OPTION>
                                    <OPTION VALUE="COMERCIALIZADOR MEDIANO">COMERCIALIZADOR MEDIANO</OPTION>
                                    <OPTION VALUE="COMERCIALIZADOR GRANDE">COMERCIALIZADOR GRANDE</OPTION>
                                    <OPTION VALUE="CORRUGADOR CHICO">CORRUGADOR CHICO</OPTION>
                                    <OPTION VALUE="CORRUGADOR MEDIANO">CORRUGADOR MEDIANO</OPTION>
                                    <OPTION VALUE="CORRUGADOR GRANDE">CORRUGADOR GRANDE</OPTION>
                                          
                                                                        </select>
                            </div>
                            
                            
                            


                            <div class="form-group col-xs-6">
                                <label for="nombre">Tamaño del Cliente </label>
                                <input id="tamano_cliente" type="text" class="form-control form-control-sm"  name="tamano_cliente" placeholder="Ingresa el  de tamaño del cliente">
                            </div>



                        </div>



                        <br>

                        <div class="row">

                            <div class="form-group col-xs-4     form-control-sm">
                                <label for="nombre">Asesor Refacciones</label>
                            
                                <select name="asesor" class="form-control select2">
                                    <option value="">Seleccione una opción</option>
                                    <option value="Carlos">Carlos</option>
                                    <option value="Aldo">Aldo</option>
                                </select>
                                
                                
                                <!--<input id="asesor" type="text" value="<?=  $first_name .' '.$last_name; ?>" readOnly class="form-control form-control-sm"  name="asesor" placeholder="Ingresa el asesor">
                            --></div>
                            
                             

                                               <?php
        if (($dataLevel == 'is_refacciones') )  {
            ?>
                            <div class="form-group col-xs-4 form-control-sm">
                                <label for="nombre">Asesor Consumibles</label>
                            
                                <select name="asesor_consumibles" class="form-control select2">
                                    <option value="">Seleccione una opción</option>
                                     <option value="<?= $first_name ?>" selected="selected"><?=  $first_name ?></option>
                                    <option value="Carlos">Carlos</option>
                                    <option value="Aldo">Aldo</option>
                                </select>
                                </div>
                                <?php
                                 }else{
                                ?>
                              <div class="form-group col-xs-4 form-control-sm">
                                <label for="nombre">Asesor Consumibles</label>
                                 <select name="asesor_consumibles" class="form-control select2">
                                    <option value="">Seleccione una opción</option>
                                   
                                    <option value="Carlos">Carlos</option>
                                    <option value="Aldo">Aldo</option>
                                </select>
                                </div>
                                    <?php
                                    }
        
        ?>
            
                                
                                <!--<input id="asesor" type="text" value="<?=  $first_name .' '.$last_name; ?>" readOnly class="form-control form-control-sm"  name="asesor" placeholder="Ingresa el asesor">
                            -->
                                   <?php
        if (($dataLevel == 'is_maquinaria') || ($dataLevel == 'is_Gerente_Ventas'))  {
            ?>
                 <div class="form-group col-xs-4">
                                <label form="Asesor_maquinaria">Asesor Maquinaria</label>
                          <!--  <input id="asesor_maquinaria" type="text" class="form-control form-control-sm"  name="asesor_maquinaria">-->
                            
                             
                                <select name="asesor_maquinaria" class="form-control select2">
                                    <option value="">Seleccione una opción</option>
                                    <option value="<?= $first_name ?>" selected="selected"><?=  $first_name ?></option>
                                    <option value="Alejandra">Alejandra</option>
                                    <option value="Alejandra">Aldo</option>
                                    <option value="Benjamin">Benjamin</option>
                                    <option value="Ignacio">Ignacio</option>
                                    <option value="Ricardo">Ricardo</option>
                                     <option value="Rocio">Rocio</option>
                                      <option value="Edson">Edson</option>
                                    <option value="Sergio">Sergio</option>
                                </select>
                                
                            
                            </div>           
            <?php
        }else{
            ?>
                 <div class="form-group col-xs-4">
                                <label form="Asesor_maquinaria">Asesor Maquinaria</label>
                          <!--  <input id="asesor_maquinaria" type="text" class="form-control form-control-sm"  name="asesor_maquinaria">-->
                            
                             
                                <select name="asesor_maquinaria" class="form-control select2">
                                    <option value="">Seleccione una opción</option>
                                  
                                    <option value="Alejandra">Alejandra</option>
                                    <option value="Alejandra">Aldo</option>
                                    <option value="Benjamin">Benjamin</option>
                                    <option value="Ignacio">Ignacio</option>
                                    <option value="Ricardo">Ricardo</option>
                                    <option value="Sergio">Sergio</option>
                                </select>
                                
                            
                            </div>               
             <?php
        }
        
        ?>
                            

                           


                        </div>
                        <br>
                        <div class="row">

                             <div class="form-group col-xs-4">
                                <label for="nombre">Estatus Cliente </label>
                                <input id="estatus_cliente" type="text" class="form-control form-control-sm"  name="estatus_cliente" placeholder="Ingresa el estatus cliente">
                            </div>
                            
                            <div class="form-group col-xs-4">
                                <label for="nombre">Estatus Cliente </label>
                                <input id="estatus_cliente" type="text" class="form-control form-control-sm"  name="estatus_cliente" placeholder="Ingresa el estatus cliente">
                            </div>

                            <div class="form-group col-xs-4">
                                <label for="nombre">Tipo Mercado</label>
                                <input id="tipo_mercado" type="text" class="form-control form-control-sm"  name="tipo_mercado" placeholder="Ingresa el tipo mercado">
                            </div>


                           

                        </div>


                        <br>

                        <div class="row">

                            <div class="form-group col-xs-6">
                                <label for="nombre">Volumen producción</label>
                                <input id="volumen_produccion" type="text" class="form-control form-control-sm"  name="volumen_produccion" placeholder="Ingresa el volumen produccion">
                            </div>




                            <div class="form-group col-xs-6">
                                <label for="nombre">Necesidad</label>
                                <input id="necesidad" type="text" class="form-control form-control-sm"  name="necesidad" placeholder="Ingresa la necesidad">
                            </div>

                            

                        </div>


                        <br>

                        <div class="row">



                            <div class="form-group col-xs-6">
                                <label for="nombre">Compromiso</label>
                                <input id="compromiso" type="text" class="form-control form-control-sm"  name="compromiso" placeholder="Ingresa el compromiso">
                            </div>


                            <div class="form-group col-xs-6">
                                <label for="nombre">Notas </label>
                                <input id="notas" type="text" class="form-control form-control-sm"  name="notas" placeholder="Ingresa las notas">
                            </div>

                            

                        </div>


                        <br>
                        <div class="row">


                            <div class="form-group col-xs-6">
                                <label for="nombre">Refacciones </label>
                                <input id="refacciones" type="text" class="form-control form-control-sm"  name="refacciones" placeholder="Ingresa la lista de refacciones">
                            </div>


                            <div class="form-group col-xs-6">
                                <label for="nombre">¿Tiene corrugadora? </label>
                                <select name="corrugadora" class="form-control input-sm">
                                    <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="Sí">Sí</OPTION>
                                    <OPTION VALUE="No"  selected>No</OPTION>

                                </select>
                            </div>
                            
                            
                            


                        </div>
                        <br>
                         <input type="hidden" class="form-control" id="cliente_robuspack"  name="cliente_robuspack">
                        <div class="row">
                             <div class="form-group col-xs-6">
                                <label for="nombre">¿Es cliente de Robuspack? </label>
                                <select name="cliente_robuspack" class="form-control input-sm">
                                    <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="Sí">Sí</OPTION>
                                    <OPTION selected VALUE="No">No</OPTION>

                                </select>
                            </div>
                            
                            
                        </div>


                    </div>



















                    <div class="jumbotron">

                        <div class="row">
                           <div class="form-group col-xs-6">
                                <font color="green">  Nota: Para agregar información de contactos selecciona una opcion , despues te aparecerán los datos a agregar.</font>
                            <br>
                                <label for="nombre">Contacto </label>
                              
                                <select name="contacto" id="contacto" class="form-control input-sm" onchange="agregarCliente()">
                                    <option  value="">Selecciona una opción</option>
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
                                <input id="nombre_dueno" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_dueno" placeholder="Ingresa el nombre">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_celular_dueno" style="display: none">Celular  </label>
                                <input id="celular_dueno" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_dueno" placeholder="Ingresa el celular">

                            </div>
                        </div>





                        <div class="row">
                            <div class="form-group col-xs-6"> 

                                <label id="lbl_correo_personal_dueno" style="display: none">Correo Personal </label>
                                <input id="correo_personal_dueno" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_dueno" placeholder="Ingresa el correo personal">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_dueno" style="display: none" >Correo Empresarial </label>
                                <input id="correo_empresarial_dueno" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_dueno" placeholder="Ingresa el correo empresarial">

                            </div>
                        </div>




                        <center> 
                            <label id="ceo" style="display: none" class="font-weight-bold"><h3>

                                    DATOS DEL CEO

                                </h3></label></center>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label id="lbl_nombre_ceo" style="display: none">Nombre </label>
                                <input id="nombre_ceo" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_ceo" placeholder="Ingresa el nombre">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_celular_ceo" style="display: none">Celular  </label>
                                <input id="celular_ceo" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_ceo" placeholder="Ingresa el celular">

                            </div>
                        </div>





                        <div class="row">
                            <div class="form-group col-xs-6"> 

                                <label id="lbl_correo_personal_ceo" style="display: none">Correo Personal </label>
                                <input id="correo_personal_ceo" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_ceo" placeholder="Ingresa el correo personal">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_ceo" style="display: none" >Correo Empresarial </label>
                                <input id="correo_empresarial_ceo" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_ceo" placeholder="Ingresa el correo empresarial">

                            </div>
                        </div>













                        <center> 
                            <label id="gerente" style="display: none" class="font-weight-bold"><h3>

                                    DATOS DEL GERENTE 

                                </h3></label></center>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label id="lbl_nombre_gerente" style="display: none">Nombre </label>
                                <input id="nombre_gerente" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_gerente" placeholder="Ingresa el nombre">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_celular_gerente" style="display: none">Celular  </label>
                                <input id="celular_gerente" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_gerente" placeholder="Ingresa el celular">

                            </div>
                        </div>





                        <div class="row">
                            <div class="form-group col-xs-6"> 

                                <label id="lbl_correo_personal_gerente" style="display: none">Correo Personal </label>
                                <input id="correo_personal_gerente" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_gerente" placeholder="Ingresa el correo personal">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_gerente" style="display: none" >Correo Empresarial </label>
                                <input id="correo_empresarial_gerente" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_gerente" placeholder="Ingresa el correo empresarial">

                            </div>
                        </div>





                        <center> 
                            <label id="produccion" style="display: none" class="font-weight-bold"><h3>

                                    DATOS DEL PRODUCCION

                                </h3></label></center>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label id="lbl_nombre_produccion" style="display: none">Nombre </label>
                                <input id="nombre_produccion" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_produccion" placeholder="Ingresa el nombre">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_celular_produccion" style="display: none">Celular  </label>
                                <input id="celular_produccion" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_produccion" placeholder="Ingresa el celular">

                            </div>
                        </div>





                        <div class="row">
                            <div class="form-group col-xs-6"> 

                                <label id="lbl_correo_personal_produccion" style="display: none">Correo Personal </label>
                                <input id="correo_personal_produccion" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_produccion" placeholder="Ingresa el correo personal">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_produccion" style="display: none" >Correo Empresarial </label>
                                <input id="correo_empresarial_produccion" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_produccion" placeholder="Ingresa el correo empresarial">

                            </div>
                        </div>



                        <center> 
                            <label id="mtto" style="display: none" class="font-weight-bold"><h3>

                                    DATOS DEL MTTO

                                </h3></label></center>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label id="lbl_nombre_mtto" style="display: none">Nombre </label>
                                <input id="nombre_mtto" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_mtto" placeholder="Ingresa el nombre">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_celular_mtto" style="display: none">Celular  </label>
                                <input id="celular_mtto" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_mtto" placeholder="Ingresa el celular">

                            </div>
                        </div>





                        <div class="row">
                            <div class="form-group col-xs-6"> 

                                <label id="lbl_correo_personal_mtto" style="display: none">Correo Personal </label>
                                <input id="correo_personal_mtto" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_mtto" placeholder="Ingresa el correo personal">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_mtto" style="display: none" >Correo Empresarial </label>
                                <input id="correo_empresarial_mtto" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_mtto" placeholder="Ingresa el correo empresarial">

                            </div>
                        </div>



                        <center> 
                            <label id="compras" style="display: none" class="font-weight-bold"><h3>

                                    DATOS DEL COMPRAS

                                </h3></label></center>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label id="lbl_nombre_compras" style="display: none">Nombre </label>
                                <input id="nombre_compras" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_compras" placeholder="Ingresa el nombre">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_celular_compras" style="display: none">Celular  </label>
                                <input id="celular_compras" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_compras" placeholder="Ingresa el celular">

                            </div>
                        </div>





                        <div class="row">
                            <div class="form-group col-xs-6"> 

                                <label id="lbl_correo_personal_compras" style="display: none">Correo Personal </label>
                                <input id="correo_personal_compras" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_compras" placeholder="Ingresa el correo personal">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_compras" style="display: none" >Correo Empresarial </label>
                                <input id="correo_empresarial_compras" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_compras" placeholder="Ingresa el correo empresarial">

                            </div>
                        </div>



                        <center> 
                            <label id="ventas" style="display: none" class="font-weight-bold"><h3>

                                    DATOS DEL VENTAS

                                </h3></label></center>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label id="lbl_nombre_ventas" style="display: none">Nombre </label>
                                <input id="nombre_ventas" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_ventas" placeholder="Ingresa el nombre">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_celular_ventas" style="display: none">Celular  </label>
                                <input id="celular_ventas" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_ventas" placeholder="Ingresa el celular">

                            </div>
                        </div>





                        <div class="row">
                            <div class="form-group col-xs-6"> 

                                <label id="lbl_correo_personal_ventas" style="display: none">Correo Personal </label>
                                <input id="correo_personal_ventas" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_ventas" placeholder="Ingresa el correo personal">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_ventas" style="display: none" >Correo Empresarial </label>
                                <input id="correo_empresarial_ventas" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_ventas" placeholder="Ingresa el correo empresarial">

                            </div>
                        </div>



                        <center> 
                            <label id="otros" style="display: none" class="font-weight-bold"><h3>

                                    DATOS DEL OTROS

                                </h3></label></center>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label id="lbl_nombre_otros" style="display: none">Nombre </label>
                                <input id="nombre_otros" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_otros" placeholder="Ingresa el nombre">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_celular_otros" style="display: none">Celular  </label>
                                <input id="celular_otros" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_otros" placeholder="Ingresa el celular">

                            </div>
                        </div>





                        <div class="row">
                            <div class="form-group col-xs-6"> 

                                <label id="lbl_correo_personal_otros" style="display: none">Correo Personal </label>
                                <input id="correo_personal_otros" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_otros" placeholder="Ingresa el correo personal">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_otros" style="display: none" >Correo Empresarial </label>
                                <input id="correo_empresarial_otros" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_otros" placeholder="Ingresa el correo empresarial">

                            </div>
                        </div>











                    </div>


                    
                        
            <div class="jumbotron">



<!--<div class="row">
                            <div class="form-group col-xs-4"></div>
                            <div class="form-group col-xs-4">
                                <label for="nombre">Máquinas flexos a agregar </label>
                                <select name="maquina" id="maquina" class="form-control input-sm" onchange="agregarMaquina()">
                                    <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="1">1</OPTION>
                                    <OPTION VALUE="2">2</OPTION>
                                    <OPTION VALUE="3">3</OPTION>
                                    <OPTION VALUE="4">4</OPTION>
                                    <OPTION VALUE="5">5</OPTION>
                                    <OPTION VALUE="6">6</OPTION>
                                    <OPTION VALUE="7">7</OPTION>
                                    

                                </select>

                            </div>
                            <div class="form-group col-xs-4"></div>

                        </div-->

                             
                            
<style>
    
    .celdaColor{
        background-color:#03E7F7;
        resize:none;
        display: block;
        
    }
</style>

                            <input id="info_maquina_1" type="hidden" name="info_maquina_1" class="form-control input-sm">
                            <input id="modelo_maquina_1" type="hidden" name="modelo_maquina_1" class="form-control input-sm">
                            <input id="medida_maquina_1" type="hidden" name="medida_maquina_1" class="form-control input-sm">
                            <input id="tipo_maquina_1" type="hidden" name="tipo_maquina_1" class="form-control input-sm">
                            <input id="troquel_maquina_1" type="hidden" name="troquel_maquina_1" class="form-control input-sm">
                            <input id="codigo_cubierta_maquina_1" type="hidden" name="codigo_cubierta_maquina_1" class="form-control input-sm">
                            <input id="cliente_conoce_maquina_1" type="hidden" name="cliente_conoce_maquina_1" class="form-control input-sm">
                             <input id="refacciones_maquina_1" type="hidden" name="refacciones_maquina_1" class="form-control input-sm">
                            <input id="refacciones_maquina_1" type="hidden" name="refacciones_maquina_1" class="form-control input-sm">
                            
                             <input id="info_maquina_2" type="hidden" name="info_maquina_2" class="form-control input-sm">
                            <input id="modelo_maquina_2" type="hidden" name="modelo_maquina_2" class="form-control input-sm">
                            <input id="medida_maquina_2" type="hidden" name="medida_maquina_2" class="form-control input-sm">
                            <input id="tipo_maquina_2" type="hidden" name="tipo_maquina_2" class="form-control input-sm">
                            <input id="troquel_maquina_2" type="hidden" name="troquel_maquina_2" class="form-control input-sm">
                            <input id="codigo_cubierta_maquina_2" type="hidden" name="codigo_cubierta_maquina_2" class="form-control input-sm">
                            <input id="cliente_conoce_maquina_2" type="hidden" name="cliente_conoce_maquina_2" class="form-control input-sm">
                             <input id="refacciones_maquina_2" type="hidden" name="refacciones_maquina_2" class="form-control input-sm">
                            <input id="refacciones_maquina_2" type="hidden" name="refacciones_maquina_2" class="form-control input-sm">
                            
                             <input id="info_maquina_3" type="hidden" name="info_maquina_3" class="form-control input-sm">
                            <input id="modelo_maquina_3" type="hidden" name="modelo_maquina_3" class="form-control input-sm">
                            <input id="medida_maquina_3" type="hidden" name="medida_maquina_3" class="form-control input-sm">
                            <input id="tipo_maquina_3" type="hidden" name="tipo_maquina_3" class="form-control input-sm">
                            <input id="troquel_maquina_3" type="hidden" name="troquel_maquina_3" class="form-control input-sm">
                            <input id="codigo_cubierta_maquina_3" type="hidden" name="codigo_cubierta_maquina_3" class="form-control input-sm">
                            <input id="cliente_conoce_maquina_3" type="hidden" name="cliente_conoce_maquina_3" class="form-control input-sm">
                             <input id="refacciones_maquina_3" type="hidden" name="refacciones_maquina_3" class="form-control input-sm">
                            <input id="refacciones_maquina_3" type="hidden" name="refacciones_maquina_3" class="form-control input-sm">
                            
                             <input id="info_maquina_4" type="hidden" name="info_maquina_4" class="form-control input-sm">
                            <input id="modelo_maquina_4" type="hidden" name="modelo_maquina_4" class="form-control input-sm">
                            <input id="medida_maquina_4" type="hidden" name="medida_maquina_4" class="form-control input-sm">
                            <input id="tipo_maquina_4" type="hidden" name="tipo_maquina_4" class="form-control input-sm">
                            <input id="troquel_maquina_4" type="hidden" name="troquel_maquina_4" class="form-control input-sm">
                            <input id="codigo_cubierta_maquina_4" type="hidden" name="codigo_cubierta_maquina_4" class="form-control input-sm">
                            <input id="cliente_conoce_maquina_4" type="hidden" name="cliente_conoce_maquina_4" class="form-control input-sm">
                             <input id="refacciones_maquina_4" type="hidden" name="refacciones_maquina_4" class="form-control input-sm">
                            <input id="refacciones_maquina_4" type="hidden" name="refacciones_maquina_4" class="form-control input-sm">
                            
                             <input id="info_maquina_5" type="hidden" name="info_maquina_5" class="form-control input-sm">
                            <input id="modelo_maquina_5" type="hidden" name="modelo_maquina_5" class="form-control input-sm">
                            <input id="medida_maquina_5" type="hidden" name="medida_maquina_5" class="form-control input-sm">
                            <input id="tipo_maquina_5" type="hidden" name="tipo_maquina_5" class="form-control input-sm">
                            <input id="troquel_maquina_5" type="hidden" name="troquel_maquina_5" class="form-control input-sm">
                            <input id="codigo_cubierta_maquina_5" type="hidden" name="codigo_cubierta_maquina_5" class="form-control input-sm">
                            <input id="cliente_conoce_maquina_5" type="hidden" name="cliente_conoce_maquina_5" class="form-control input-sm">
                             <input id="refacciones_maquina_5" type="hidden" name="refacciones_maquina_5" class="form-control input-sm">
                            <input id="refacciones_maquina_5" type="hidden" name="refacciones_maquina_5" class="form-control input-sm">
                            
                             <input id="info_maquina_6" type="hidden" name="info_maquina_6" class="form-control input-sm">
                            <input id="modelo_maquina_6" type="hidden" name="modelo_maquina_6" class="form-control input-sm">
                            <input id="medida_maquina_6" type="hidden" name="medida_maquina_6" class="form-control input-sm">
                            <input id="tipo_maquina_6" type="hidden" name="tipo_maquina_6" class="form-control input-sm">
                            <input id="troquel_maquina_6" type="hidden" name="troquel_maquina_6" class="form-control input-sm">
                            <input id="codigo_cubierta_maquina_6" type="hidden" name="codigo_cubierta_maquina_6" class="form-control input-sm">
                            <input id="cliente_conoce_maquina_6" type="hidden" name="cliente_conoce_maquina_6" class="form-control input-sm">
                             <input id="refacciones_maquina_6" type="hidden" name="refacciones_maquina_6" class="form-control input-sm">
                            <input id="refacciones_maquina_6" type="hidden" name="refacciones_maquina_6" class="form-control input-sm">
                            
                             <input id="info_maquina_7" type="hidden" name="info_maquina_7" class="form-control input-sm">
                            <input id="modelo_maquina_7" type="hidden" name="modelo_maquina_7" class="form-control input-sm">
                            <input id="medida_maquina_7" type="hidden" name="medida_maquina_7" class="form-control input-sm">
                            <input id="tipo_maquina_7" type="hidden" name="tipo_maquina_7" class="form-control input-sm">
                            <input id="troquel_maquina_7" type="hidden" name="troquel_maquina_7" class="form-control input-sm">
                            <input id="codigo_cubierta_maquina_7" type="hidden" name="codigo_cubierta_maquina_7" class="form-control input-sm">
                            <input id="cliente_conoce_maquina_7" type="hidden" name="cliente_conoce_maquina_7" class="form-control input-sm">
                             <input id="refacciones_maquina_7" type="hidden" name="refacciones_maquina_7" class="form-control input-sm">
                            <input id="refacciones_maquina_7" type="hidden" name="refacciones_maquina_7" class="form-control input-sm">
                            
                            <input id="info_maquina_8" type="hidden" name="info_maquina_8" class="form-control input-sm">
                            <input id="modelo_maquina_8" type="hidden" name="modelo_maquina_8" class="form-control input-sm">
                            <input id="medida_maquina_8" type="hidden" name="medida_maquina_8" class="form-control input-sm">
                            <input id="tipo_maquina_8" type="hidden" name="tipo_maquina_8" class="form-control input-sm">
                            <input id="troquel_maquina_8" type="hidden" name="troquel_maquina_8" class="form-control input-sm">
                            <input id="codigo_cubierta_maquina_8" type="hidden" name="codigo_cubierta_maquina_8" class="form-control input-sm">
                            <input id="cliente_conoce_maquina_8" type="hidden" name="cliente_conoce_maquina_8" class="form-control input-sm">
                             <input id="refacciones_maquina_8" type="hidden" name="refacciones_maquina_8" class="form-control input-sm">
                            <input id="refacciones_maquina_8" type="hidden" name="refacciones_maquina_8" class="form-control input-sm">
                            
                            
                             <input id="info_maquina_9" type="hidden" name="info_maquina_9" class="form-control input-sm">
                            <input id="modelo_maquina_9" type="hidden" name="modelo_maquina_9" class="form-control input-sm">
                            <input id="medida_maquina_9" type="hidden" name="medida_maquina_9" class="form-control input-sm">
                            <input id="tipo_maquina_9" type="hidden" name="tipo_maquina_9" class="form-control input-sm">
                            <input id="troquel_maquina_9" type="hidden" name="troquel_maquina_9" class="form-control input-sm">
                            <input id="codigo_cubierta_maquina_9" type="hidden" name="codigo_cubierta_maquina_9" class="form-control input-sm">
                            <input id="cliente_conoce_maquina_9" type="hidden" name="cliente_conoce_maquina_9" class="form-control input-sm">
                             <input id="refacciones_maquina_9" type="hidden" name="refacciones_maquina_9" class="form-control input-sm">
                            <input id="refacciones_maquina_9" type="hidden" name="refacciones_maquina_9" class="form-control input-sm">
                            
                             <input id="info_maquina_10" type="hidden" name="info_maquina_10" class="form-control input-sm">
                            <input id="modelo_maquina_10" type="hidden" name="modelo_maquina_10" class="form-control input-sm">
                            <input id="medida_maquina_10" type="hidden" name="medida_maquina_10" class="form-control input-sm">
                            <input id="tipo_maquina_10" type="hidden" name="tipo_maquina_10" class="form-control input-sm">
                            <input id="troquel_maquina_10" type="hidden" name="troquel_maquina_10" class="form-control input-sm">
                            <input id="codigo_cubierta_maquina_10" type="hidden" name="codigo_cubierta_maquina_10" class="form-control input-sm">
                            <input id="cliente_conoce_maquina_10" type="hidden" name="cliente_conoce_maquina_10" class="form-control input-sm">
                             <input id="refacciones_maquina_10" type="hidden" name="refacciones_maquina_10" class="form-control input-sm">
                            <input id="refacciones_maquina_10" type="hidden" name="refacciones_maquina_10" class="form-control input-sm">
                            
                             <input id="info_maquina_1" type="hidden" name="info_maquina_1" class="form-control input-sm">
                            <input id="modelo_maquina_1" type="hidden" name="modelo_maquina_1" class="form-control input-sm">
                            <input id="medida_maquina_1" type="hidden" name="medida_maquina_1" class="form-control input-sm">
                            <input id="tipo_maquina_1" type="hidden" name="tipo_maquina_1" class="form-control input-sm">
                            <input id="troquel_maquina_1" type="hidden" name="troquel_maquina_1" class="form-control input-sm">
                            <input id="codigo_cubierta_maquina_1" type="hidden" name="codigo_cubierta_maquina_1" class="form-control input-sm">
                            <input id="cliente_conoce_maquina_1" type="hidden" name="cliente_conoce_maquina_1" class="form-control input-sm">
                             <input id="refacciones_maquina_1" type="hidden" name="refacciones_maquina_1" class="form-control input-sm">
                            <input id="refacciones_maquina_1" type="hidden" name="refacciones_maquina_1" class="form-control input-sm">
                            
                            
                          
                          
                          
                          
                  <!-- Fin de jumbotron-->     
                    
                    
                    
                    
                    





                    <input type="hidden" name="maquina_conversion">

<!--<div class="jumbotron">
                      <div class="row">
                            <div class="form-group col-xs-6"> 
                                <label id="lbl_info_maquina_7" >TODAS LAS MÁQUINAS DE CONVERSION     - MARCA - MODELO Y MEDIDA</label>
                                <textarea name="maquina_conversion" id="maquina_conversion" class="form-control input-sm" rows="4" cols="80" 
                                          style="resize:block;" 
                                          placeholder="Ingresa marca , modelo y medida de la máquina de las maquinas de conversión"></textarea>
                            </div>
                      </div>
                            

   </div>-->














                    <center>
                        <input id="botonOrden" class="btn btn-success" type="submit" value="Agregar" data-toggle="tooltip" data-placement="right" title="Da clic para guardar los datos">

                        <a title="Da clic para regresar al menú" href="javascript:window.history.go(-1);"class="btn btn-danger">Cancelar</a></center>
            </div>
        </form>
    </div> 

    <!--
        <input type="submit" name="submit" value="Agregar" class="btn btn-success">
        <a title="Da clic para regresar" href="javascript:window.history.go(-1);"class="btn btn-danger">Cancelar</a>-->































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











    <!-- END KONTEN UTAMA -->

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>

</body>
</html>

        
        