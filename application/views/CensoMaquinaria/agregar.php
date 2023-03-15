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

<<<<<<< HEAD
<style>
    
    .celdaColor{
        background-color:#C1FFFA;
        resize:none;
        display: block;
        
    }
</style>
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606



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
<<<<<<< HEAD
                document.getElementById("dueno").style.display = "inline-block";
=======

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
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



<<<<<<< HEAD

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
=======
        function agregarMaquina()
        {
            getSelectValue = document.getElementById("maquina").value;
            if (getSelectValue === "") {
                document.getElementById("lbl_info_maquina_1").style.display = "none";
                document.getElementById("info_maquina_1").style.display = "none";
                document.getElementById("lbl_info_maquina_2").style.display = "none";
                document.getElementById("info_maquina_2").style.display = "none";
                document.getElementById("lbl_info_maquina_3").style.display = "none";
                document.getElementById("info_maquina_3").style.display = "none";
                document.getElementById("lbl_info_maquina_4").style.display = "none";
                document.getElementById("info_maquina_4").style.display = "none";
                document.getElementById("lbl_info_maquina_5").style.display = "none";
                document.getElementById("info_maquina_5").style.display = "none";
                document.getElementById("lbl_info_maquina_6").style.display = "none";
                document.getElementById("info_maquina_6").style.display = "none";
                document.getElementById("lbl_info_maquina_7").style.display = "none";
                document.getElementById("info_maquina_7").style.display = "none";
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606


            } else if (getSelectValue === "1") {
                // document.getElementById("nombre_dueno").disabled = true;
<<<<<<< HEAD
                
                

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
                
                
                             
                         
              
=======
                document.getElementById("lbl_info_maquina_1").style.display = "inline-block";
                document.getElementById("info_maquina_1").style.display = "inline-block";

                document.getElementById("lbl_info_maquina_2").style.display = "none";
                document.getElementById("info_maquina_2").style.display = "none";
                document.getElementById("lbl_info_maquina_3").style.display = "none";
                document.getElementById("info_maquina_3").style.display = "none";
                document.getElementById("lbl_info_maquina_4").style.display = "none";
                document.getElementById("info_maquina_4").style.display = "none";
                document.getElementById("lbl_info_maquina_5").style.display = "none";
                document.getElementById("info_maquina_5").style.display = "none";
                document.getElementById("lbl_info_maquina_6").style.display = "none";
                document.getElementById("info_maquina_6").style.display = "none";
                document.getElementById("lbl_info_maquina_7").style.display = "none";
                document.getElementById("info_maquina_7").style.display = "none";


            } else if (getSelectValue === "2") {

                document.getElementById("lbl_info_maquina_1").style.display = "inline-block";
                document.getElementById("info_maquina_1").style.display = "inline-block";
                document.getElementById("lbl_info_maquina_2").style.display = "inline-block";
                document.getElementById("info_maquina_2").style.display = "inline-block";
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606


                document.getElementById("lbl_info_maquina_3").style.display = "none";
                document.getElementById("info_maquina_3").style.display = "none";
<<<<<<< HEAD
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
                
                
                
               
=======
                document.getElementById("lbl_info_maquina_4").style.display = "none";
                document.getElementById("info_maquina_4").style.display = "none";
                document.getElementById("lbl_info_maquina_5").style.display = "none";
                document.getElementById("info_maquina_5").style.display = "none";
                document.getElementById("lbl_info_maquina_6").style.display = "none";
                document.getElementById("info_maquina_6").style.display = "none";
                document.getElementById("lbl_info_maquina_7").style.display = "none";
                document.getElementById("info_maquina_7").style.display = "none";
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606


            }
            else if (getSelectValue === "3") {
<<<<<<< HEAD
                
               
                
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
            
            
=======

                document.getElementById("lbl_info_maquina_1").style.display = "inline-block";
                document.getElementById("info_maquina_1").style.display = "inline-block";
                document.getElementById("lbl_info_maquina_2").style.display = "inline-block";
                document.getElementById("info_maquina_2").style.display = "inline-block";
                document.getElementById("lbl_info_maquina_3").style.display = "inline-block";
                document.getElementById("info_maquina_3").style.display = "inline-block";

                document.getElementById("lbl_info_maquina_4").style.display = "none";
                document.getElementById("info_maquina_4").style.display = "none";
                document.getElementById("lbl_info_maquina_5").style.display = "none";
                document.getElementById("info_maquina_5").style.display = "none";
                document.getElementById("lbl_info_maquina_6").style.display = "none";
                document.getElementById("info_maquina_6").style.display = "none";
                document.getElementById("lbl_info_maquina_7").style.display = "none";
                document.getElementById("info_maquina_7").style.display = "none";


            } else if (getSelectValue === "4") {

                document.getElementById("lbl_info_maquina_1").style.display = "inline-block";
                document.getElementById("info_maquina_1").style.display = "inline-block";
                document.getElementById("lbl_info_maquina_2").style.display = "inline-block";
                document.getElementById("info_maquina_2").style.display = "inline-block";
                document.getElementById("lbl_info_maquina_3").style.display = "inline-block";
                document.getElementById("info_maquina_3").style.display = "inline-block";
                document.getElementById("lbl_info_maquina_4").style.display = "inline-block";
                document.getElementById("info_maquina_4").style.display = "inline-block";

            } else if (getSelectValue === "5") {

                document.getElementById("lbl_info_maquina_1").style.display = "inline-block";
                document.getElementById("info_maquina_1").style.display = "inline-block";
                document.getElementById("lbl_info_maquina_2").style.display = "inline-block";
                document.getElementById("info_maquina_2").style.display = "inline-block";
                document.getElementById("lbl_info_maquina_3").style.display = "inline-block";
                document.getElementById("info_maquina_3").style.display = "inline-block";
                document.getElementById("lbl_info_maquina_4").style.display = "inline-block";
                document.getElementById("info_maquina_4").style.display = "inline-block";
                document.getElementById("lbl_info_maquina_5").style.display = "inline-block";
                document.getElementById("info_maquina_5").style.display = "inline-block"



                document.getElementById("lbl_info_maquina_6").style.display = "none";
                document.getElementById("info_maquina_6").style.display = "none";
                document.getElementById("lbl_info_maquina_7").style.display = "none";
                document.getElementById("info_maquina_7").style.display = "none";


            } else if (getSelectValue === "6") {

                document.getElementById("lbl_info_maquina_1").style.display = "inline-block";
                document.getElementById("info_maquina_1").style.display = "inline-block";
                document.getElementById("lbl_info_maquina_2").style.display = "inline-block";
                document.getElementById("info_maquina_2").style.display = "inline-block";
                document.getElementById("lbl_info_maquina_3").style.display = "inline-block";
                document.getElementById("info_maquina_3").style.display = "inline-block";
                document.getElementById("lbl_info_maquina_4").style.display = "inline-block";
                document.getElementById("info_maquina_4").style.display = "inline-block";
                document.getElementById("lbl_info_maquina_5").style.display = "inline-block";
                document.getElementById("info_maquina_5").style.display = "inline-block"
                document.getElementById("lbl_info_maquina_6").style.display = "inline-block";
                document.getElementById("info_maquina_6").style.display = "inline-block"

                document.getElementById("lbl_info_maquina_7").style.display = "none";
                document.getElementById("info_maquina_7").style.display = "none";

            } else if (getSelectValue === "7") {

                document.getElementById("lbl_info_maquina_1").style.display = "inline-block";
                document.getElementById("info_maquina_1").style.display = "inline-block";
                document.getElementById("lbl_info_maquina_2").style.display = "inline-block";
                document.getElementById("info_maquina_2").style.display = "inline-block";
                document.getElementById("lbl_info_maquina_3").style.display = "inline-block";
                document.getElementById("info_maquina_3").style.display = "inline-block";
                document.getElementById("lbl_info_maquina_4").style.display = "inline-block";
                document.getElementById("info_maquina_4").style.display = "inline-block";
                document.getElementById("lbl_info_maquina_5").style.display = "inline-block";
                document.getElementById("info_maquina_5").style.display = "inline-block"
                document.getElementById("lbl_info_maquina_6").style.display = "inline-block";
                document.getElementById("info_maquina_6").style.display = "inline-block"
                document.getElementById("lbl_info_maquina_7").style.display = "inline-block";
                document.getElementById("info_maquina_7").style.display = "inline-block"
            }

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606


        }


<<<<<<< HEAD
          
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
        


        

=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        function showContent() {
            element = document.getElementById("div_empresa_temporal");
            elementempresa = document.getElementById("div_empresa");
            check = document.getElementById("check");
            if (check.checked) {

                element.style.display = 'block';
                elementempresa.style.display = 'none';
<<<<<<< HEAD
                document.getElementById('empresa_temporal').value = "";
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
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
<<<<<<< HEAD
            document.getElementById("cliente").selectedIndex = 0;
=======
            document.getElementById("empresa_temporal").selectedIndex = 0;
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

        }



        function showContentGrupo() {
            element = document.getElementById("div_grupo_temporal");
            elementempresa = document.getElementById("div_grupo");
            check = document.getElementById("check_grupo");
            if (check.checked) {

                element.style.display = 'block';
                elementempresa.style.display = 'none';
<<<<<<< HEAD
               deseleccionarGrupoCombo();
=======
                deseleccionarClienteCombo();
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

            }
            else {

                element.style.display = 'none';
                elementempresa.style.display = 'block';
<<<<<<< HEAD
                limpiarCajaTextoGrupo();
            }
        }

        function limpiarCajaTextoGrupo() {
            document.getElementById('grupo_temporal').value = "";
        }

        function deseleccionarGrupoCombo() {
            document.getElementById("grupo").selectedIndex = 0;
            
=======
                limpiarCajaTextoCliente();
            }
        }

        function limpiarCajaTextoCliente() {
            document.getElementById('grupo_temporal').value = "";
        }

        function deseleccionarClienteCombo() {
            document.getElementById("grupo_temporal").selectedIndex = 0;
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

        }


<<<<<<< HEAD
   
    </script>
     <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
       
<style>
    
     body { color: #000000; }
</style>

=======

    </script>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

    <body>


        <div id="maquinaria">
            <div class="container" >      
                <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Bienvenido</strong> Agrega los datos segun corresponda
                </div>
                <h1>Agregar Datos</h1>
                <MARQUEE SCROLLDELAY =200></MARQUEE>
                <form action="<?= base_url() ?>CensoMaquinaria/insertdata" method="post" enctype="multipart/form-data">


                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id_maquinaria"  name="id_clienteseguimiento">
<<<<<<< HEAD
                        
                        
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
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
<<<<<<< HEAD
                                <select required id="grupo"  class="form-control select2"  name="grupo"  <?php echo form_dropdown('grupoCombo', $grupoCombo, '#', 'id="grupoCombo"'); ?> </select>
=======
                                <select required id="grupo"  class="form-control"  name="grupo"  <?php echo form_dropdown('grupoCombo', $grupoCombo, '#', 'id="grupoCombo"'); ?> </select>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            </div>



                            <div class="form-group col-xs-6" id="div_empresa_temporal" style="display: none;"  >
                                <label for="nombre">Empresa </label>
                                <input id="empresa_temporal" type="text" class="form-control"  name="empresa_temporal" placeholder="Ingresa el nombre de la empresa">
                            </div>

                            <div class="form-group col-xs-6" id="div_empresa">
                                <label for="nombre">Empresa</label>
<<<<<<< HEAD
                                <select required id="cliente" class="form-control select2"  name="empresa" <?php echo form_dropdown('clienteCombo', $clienteCombo, '#', 'id="clienteCombo"'); ?> </select>
=======
                                <select required id="cliente" class="form-control"  name="empresa" <?php echo form_dropdown('clienteCombo', $clienteCombo, '#', 'id="clienteCombo"'); ?> </select>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
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


<<<<<<< HEAD
                           <!-- <div class="form-group col-xs-6">
                                <label for="nombre">Tipo de Cliente </label>
                                <input id="tipo_de_cliente" type="text" class="form-control form-control-sm"  name="tipo_de_cliente" placeholder="Ingresa el tipo de cliente">
                            </div>-->
                            
                               <div class="form-group col-xs-6">
                                <label for="nombre">Tipo de Cliente</label>
                                <select name="tipo_de_cliente" class="form-control input-sm">
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
                            
                            
                            
=======
                            <div class="form-group col-xs-6">
                                <label for="nombre">Tipo de Cliente </label>
                                <input id="tipo_de_cliente" type="text" class="form-control form-control-sm"  name="tipo_de_cliente" placeholder="Ingresa el tipo de cliente">
                            </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606


                            <div class="form-group col-xs-6">
                                <label for="nombre">Tamaño del Cliente </label>
<<<<<<< HEAD
                                <input id="tamano_cliente" type="text" class="form-control form-control-sm"  name="tamano_cliente" placeholder="Ingresa el  de tamaño del cliente">
=======
                                <input id="tamano_cliente" type="text" class="form-control form-control-sm"  name="tamano_cliente" placeholder="Ingresa el  de tamano_cliente">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            </div>



                        </div>



                        <br>
<<<<<<< HEAD
                                <div class="row">

                            <div class="form-group col-xs-4     form-control-sm">
                                <label for="nombre">Asesor Refacciones</label>
                            
                                <select name="asesor" class="form-control">
                                    <option value="">Seleccione una opción</option>
                                    <option value="Carlos">Carlos</option>
                                    <option value="Aldo">Aldo</option>
                                   
                                </select>
                                
                                
                                <!--<input id="asesor" type="text" value="<?=  $first_name .' '.$last_name; ?>" readOnly class="form-control form-control-sm"  name="asesor" placeholder="Ingresa el asesor">
                            --></div>
                            
                            <div class="form-group col-xs-4     form-control-sm">
                                <label for="nombre">Asesor Consumibles</label>
                            
                                <select name="asesor_consumibles" class="form-control">
                                    <option value="">Seleccione una opción</option>
                                    <option value="Carlos">Carlos</option>
                                    <option value="Aldo">Aldo</option>
                                  
                                </select>
                                
                                
                                <!--<input id="asesor" type="text" value="<?=  $first_name .' '.$last_name; ?>" readOnly class="form-control form-control-sm"  name="asesor" placeholder="Ingresa el asesor">
                            --></div>
                            
                            <div class="form-group col-xs-4">
                                <label form="Asesor_maquinaria">Asesor Maquinaria</label>
                          <!--  <input id="asesor_maquinaria" type="text" class="form-control form-control-sm"  name="asesor_maquinaria">-->
                            
                               
                                <select name="asesor_maquinaria" class="form-control">
                                    <option value="">Seleccione una opción</option>
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

                           


                        </div>
                        
                        <br>


                        <div class="row">

                            <!--<div class="form-group col-xs-4">
                                <label for="nombre">Asesor </label>
                                <input id="asesor" type="text" value="<?=  $first_name ; ?>" readOnly class="form-control form-control-sm"  name="asesor" placeholder="Ingresa el asesor">
                            </div>
                            
                            
                             <input id="asesor_maquinaria" type="hidden" name="asesor_maquinaria">
                         <input id="asesor_consumibles"  type="hidden" name="asesor_consumibles">
                         
                       
-->





=======

                        <div class="row">

                            <div class="form-group col-xs-6">
                                <label for="nombre">Asesor </label>
                                <input id="asesor" type="text" class="form-control form-control-sm"  name="asesor" placeholder="Ingresa el asesor">
                            </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            <div class="form-group col-xs-6">
                                <label for="nombre">Estatus Cliente </label>
                                <input id="estatus_cliente" type="text" class="form-control form-control-sm"  name="estatus_cliente" placeholder="Ingresa el estatus cliente">
                            </div>
<<<<<<< HEAD
                            
                              <div class="form-group col-xs-6">
=======


                        </div>
                        <br>
                        <div class="row">




                            <div class="form-group col-xs-6">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                <label for="nombre">Tipo Mercado</label>
                                <input id="tipo_mercado" type="text" class="form-control form-control-sm"  name="tipo_mercado" placeholder="Ingresa el tipo mercado">
                            </div>


<<<<<<< HEAD

                        </div>
                        <br>
=======
                            <div class="form-group col-xs-6">
                                <label for="nombre">Volumen producción</label>
                                <input id="volumen_produccion" type="text" class="form-control form-control-sm"  name="volumen_produccion" placeholder="Ingresa el volumen produccion">
                            </div>

                        </div>


                        <br>

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        <div class="row">




<<<<<<< HEAD
                          

                            <div class="form-group col-xs-6">
                                <label for="nombre">Volumen producción</label>
                                <input id="volumen_produccion" type="text" class="form-control form-control-sm"  name="volumen_produccion" placeholder="Ingresa el volumen produccion">
                            </div>
                            
                            <div class="form-group col-xs-6">
=======

                            <div class="form-group col-xs-6">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                <label for="nombre">Necesidad</label>
                                <input id="necesidad" type="text" class="form-control form-control-sm"  name="necesidad" placeholder="Ingresa la necesidad">
                            </div>

<<<<<<< HEAD
=======
                            <div class="form-group col-xs-6">
                                <label for="nombre">Compromiso</label>
                                <input id="compromiso" type="text" class="form-control form-control-sm"  name="compromiso" placeholder="Ingresa el compromiso">
                            </div>

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        </div>


                        <br>

                        <div class="row">


<<<<<<< HEAD
                            <div class="form-group col-xs-6">
                                <label for="nombre">Compromiso</label>
                                <input id="compromiso" type="text" class="form-control form-control-sm"  name="compromiso" placeholder="Ingresa el compromiso">
                            </div>
                            
                            
=======



>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            <div class="form-group col-xs-6">
                                <label for="nombre">Notas </label>
                                <input id="notas" type="text" class="form-control form-control-sm"  name="notas" placeholder="Ingresa las notas">
                            </div>

<<<<<<< HEAD
=======
                            <div class="form-group col-xs-6">
                                <label for="nombre">Refacciones </label>
                                <input id="refacciones" type="text" class="form-control form-control-sm"  name="refacciones" placeholder="Ingresa la lista de refacciones">
                            </div>

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        </div>


                        <br>
<<<<<<< HEAD

=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        <div class="row">





<<<<<<< HEAD
                            

                            <div class="form-group col-xs-6">
                                <label for="nombre">Refacciones </label>
                                <input id="refacciones" type="text" class="form-control form-control-sm"  name="refacciones" placeholder="Ingresa la lista de refacciones">
                            </div>
                            
                            
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            <div class="form-group col-xs-6">
                                <label for="nombre">¿Tiene corrugadora? </label>
                                <select name="corrugadora" class="form-control input-sm">
                                    <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="Sí">Sí</OPTION>
                                    <OPTION VALUE="No">No</OPTION>

                                </select>
                            </div>

                        </div>


<<<<<<< HEAD
                        <br>
                        <div class="row">






                        </div>
                        
                         <div class="row">
                             <div class="form-group col-xs-6">
                                <label for="nombre">¿Es cliente de Robuspack? </label>
                                <select name="cliente_robuspack" required class="form-control input-sm">
                                    <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="Sí">Sí</OPTION>
                                    <OPTION VALUE="No">No</OPTION>
                                    <OPTION VALUE="Prospecto">Prospecto</OPTION>
                                </select>
                            </div>
                            
                            
                        </div>


=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    </div>



















                    <div class="jumbotron">

                        <div class="row">
<<<<<<< HEAD
                            <H6 style="color:red;font-size: 15px;">Para agregar los datos de uno o más contactos es necesario primero seleccionar una opción dependiendo del puesto agregar y en automatico aparecerá los datos que se solicitan</H6>
                            <div class="form-group col-xs-6">
                                
                                <label for="nombre">Contacto </label>
                                
=======
                            <div class="form-group col-xs-6">
                                <label for="nombre">Contacto </label>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
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
<<<<<<< HEAD
                                <input id="correo_personal_dueno" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_dueno" placeholder="Ingresa el correo personal">
=======
                                <input id="correo_personal_dueno" style="display: none" type="text" class="form-control form-control-sm"  name="correo_personal_dueno" placeholder="Ingresa el correo personal">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_dueno" style="display: none" >Correo Empresarial </label>
<<<<<<< HEAD
                                <input id="correo_empresarial_dueno" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_dueno" placeholder="Ingresa el correo empresarial">
=======
                                <input id="correo_empresarial_dueno" style="display: none" type="text" class="form-control form-control-sm"  name="correo_empresarial_dueno" placeholder="Ingresa el correo empresarial">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

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
<<<<<<< HEAD
                                <input id="correo_personal_ceo" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_ceo" placeholder="Ingresa el correo personal">
=======
                                <input id="correo_personal_ceo" style="display: none" type="text" class="form-control form-control-sm"  name="correo_personal_ceo" placeholder="Ingresa el correo personal">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_ceo" style="display: none" >Correo Empresarial </label>
<<<<<<< HEAD
                                <input id="correo_empresarial_ceo" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_ceo" placeholder="Ingresa el correo empresarial">
=======
                                <input id="correo_empresarial_ceo" style="display: none" type="text" class="form-control form-control-sm"  name="correo_empresarial_ceo" placeholder="Ingresa el correo empresarial">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

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
<<<<<<< HEAD
                                <input id="correo_personal_gerente" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_gerente" placeholder="Ingresa el correo personal">
=======
                                <input id="correo_personal_gerente" style="display: none" type="text" class="form-control form-control-sm"  name="correo_personal_gerente" placeholder="Ingresa el correo personal">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_gerente" style="display: none" >Correo Empresarial </label>
<<<<<<< HEAD
                                <input id="correo_empresarial_gerente" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_gerente" placeholder="Ingresa el correo empresarial">
=======
                                <input id="correo_empresarial_gerente" style="display: none" type="text" class="form-control form-control-sm"  name="correo_empresarial_gerente" placeholder="Ingresa el correo empresarial">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                        </div>





                        <center> 
                            <label id="produccion" style="display: none" class="font-weight-bold"><h3>
<<<<<<< HEAD
 
                                    DATOS DE LA PERSONA ENCARGADA DE PRODUCCIÓN
=======

                                    DATOS DEL PRODUCCION
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

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
<<<<<<< HEAD
                                <input id="correo_personal_produccion" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_produccion" placeholder="Ingresa el correo personal">
=======
                                <input id="correo_personal_produccion" style="display: none" type="text" class="form-control form-control-sm"  name="correo_personal_produccion" placeholder="Ingresa el correo personal">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_produccion" style="display: none" >Correo Empresarial </label>
<<<<<<< HEAD
                                <input id="correo_empresarial_produccion" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_produccion" placeholder="Ingresa el correo empresarial">
=======
                                <input id="correo_empresarial_produccion" style="display: none" type="text" class="form-control form-control-sm"  name="correo_empresarial_produccion" placeholder="Ingresa el correo empresarial">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                        </div>



                        <center> 
                            <label id="mtto" style="display: none" class="font-weight-bold"><h3>

<<<<<<< HEAD
                                    DATOS DE LA PERSONA ENCARGADA DE MANTENIMIENTO
=======
                                    DATOS DEL MTTO
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

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
<<<<<<< HEAD
                                <input id="correo_personal_mtto" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_mtto" placeholder="Ingresa el correo personal">
=======
                                <input id="correo_personal_mtto" style="display: none" type="text" class="form-control form-control-sm"  name="correo_personal_mtto" placeholder="Ingresa el correo personal">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_mtto" style="display: none" >Correo Empresarial </label>
<<<<<<< HEAD
                                <input id="correo_empresarial_mtto" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_mtto" placeholder="Ingresa el correo empresarial">
=======
                                <input id="correo_empresarial_mtto" style="display: none" type="text" class="form-control form-control-sm"  name="correo_empresarial_mtto" placeholder="Ingresa el correo empresarial">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                        </div>



                        <center> 
                            <label id="compras" style="display: none" class="font-weight-bold"><h3>

<<<<<<< HEAD
                                    DATOS DE LA PERSONA ENCARGADA DE COMPRAS
=======
                                    DATOS DEL COMPRAS
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

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
<<<<<<< HEAD
                                <input id="correo_personal_compras" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_compras" placeholder="Ingresa el correo personal">
=======
                                <input id="correo_personal_compras" style="display: none" type="text" class="form-control form-control-sm"  name="correo_personal_compras" placeholder="Ingresa el correo personal">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_compras" style="display: none" >Correo Empresarial </label>
<<<<<<< HEAD
                                <input id="correo_empresarial_compras" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_compras" placeholder="Ingresa el correo empresarial">
=======
                                <input id="correo_empresarial_compras" style="display: none" type="text" class="form-control form-control-sm"  name="correo_empresarial_compras" placeholder="Ingresa el correo empresarial">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                        </div>



                        <center> 
                            <label id="ventas" style="display: none" class="font-weight-bold"><h3>

<<<<<<< HEAD
                                    DATOS DE LA PERSONA ENCARGADA DE VENTAS
=======
                                    DATOS DEL VENTAS
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

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
<<<<<<< HEAD
                                <input id="correo_personal_ventas" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_ventas" placeholder="Ingresa el correo personal">
=======
                                <input id="correo_personal_ventas" style="display: none" type="text" class="form-control form-control-sm"  name="correo_personal_ventas" placeholder="Ingresa el correo personal">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_ventas" style="display: none" >Correo Empresarial </label>
<<<<<<< HEAD
                                <input id="correo_empresarial_ventas" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_ventas" placeholder="Ingresa el correo empresarial">
=======
                                <input id="correo_empresarial_ventas" style="display: none" type="text" class="form-control form-control-sm"  name="correo_empresarial_ventas" placeholder="Ingresa el correo empresarial">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                        </div>



                        <center> 
                            <label id="otros" style="display: none" class="font-weight-bold"><h3>

<<<<<<< HEAD
                                    DATOS DE OTROS
=======
                                    DATOS DEL OTROS
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

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
<<<<<<< HEAD
                                <input id="correo_personal_otros" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_otros" placeholder="Ingresa el correo personal">
=======
                                <input id="correo_personal_otros" style="display: none" type="text" class="form-control form-control-sm"  name="correo_personal_otros" placeholder="Ingresa el correo personal">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_otros" style="display: none" >Correo Empresarial </label>
<<<<<<< HEAD
                                <input id="correo_empresarial_otros" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_otros" placeholder="Ingresa el correo empresarial">
=======
                                <input id="correo_empresarial_otros" style="display: none" type="text" class="form-control form-control-sm"  name="correo_empresarial_otros" placeholder="Ingresa el correo empresarial">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                        </div>











                    </div>


<<<<<<< HEAD
                    
                        
            <div class="jumbotron">



<!--<div class="row">
                            <div class="form-group col-xs-4"></div>
                            <div class="form-group col-xs-4">
                                <label for="nombre">Máquinas flexos a agregar </label>
=======
                    <div class="jumbotron">



                        <div class="row">
                            <div class="form-group col-xs-4"></div>
                            <div class="form-group col-xs-4">
                                <label for="nombre">Máquinas a agregar </label>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                <select name="maquina" id="maquina" class="form-control input-sm" onchange="agregarMaquina()">
                                    <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="1">1</OPTION>
                                    <OPTION VALUE="2">2</OPTION>
                                    <OPTION VALUE="3">3</OPTION>
                                    <OPTION VALUE="4">4</OPTION>
                                    <OPTION VALUE="5">5</OPTION>
                                    <OPTION VALUE="6">6</OPTION>
                                    <OPTION VALUE="7">7</OPTION>
<<<<<<< HEAD
                                    
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                                </select>

                            </div>
                            <div class="form-group col-xs-4"></div>

<<<<<<< HEAD
                        </div-->
                        
                        
                        
                          <div class="row">
                          <div class="form-group col-xs-4"></div>
                          <div class="form-group col-xs-4"><label id="lbl_maquina_1" style="display: block"><h3>MÁQUINA 1</h3> </label></div>
                            <div class="form-group col-xs-4"></div>
                                                        
                          </div>

                        <div class="row">
                            
                            
                      <div class="form-group col-xs-3"> 
                                <label id="lbl_info_maquina_1" style="display: block"> Máquina </label>
                              
                                <textarea name="info_maquina_1"  id="info_maquina_1"  class="form-control input-sm" rows="1" cols="80" style="background-color:#C1FFFA;resize:none;display: block"></textarea>
                      </div>
                            
                            
                            
                            
                     <div class="form-group col-xs-3"> 

                                       <label id="lbl_tipo_maquina_1" style="display: block"> Tipo de máquina  </label>


                               
                                       
                               <!--<SELECT style="background-color:#C1FFFA;resize:block;display: block" name="tipo_maquina_1" id="tipo_maquina_1"  class="form-control input-sm" > 
                                    <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="FRDC">FRDC</OPTION>
                                    <OPTION VALUE="FFG">FFG</OPTION>
                                    <OPTION VALUE="CONVERSION">CONVERSION</OPTION>
                                    <OPTION VALUE="CORRUGADORA">CORRUGADORA</OPTION>
                                    
                                </select>-->
                          <select id="maquina_1" style="background-color:#C1FFFA;" name="tipo_maquina_1" class="form-control input-sm">
                                    <option value="">Selecciona una opción</option>
                                   <!-- <option value="Flexo">Flexo</option> -->
                                    <option value="Conversion">Conversion</option>
                                    <option value="Corrugadora">Corrugadora</option>
                                     <OPTION VALUE="FRDC">FRDC</OPTION>
                                    <OPTION VALUE="FFG">FFG</OPTION>
                                <!--<option value=3> item 3</option>-->
                                </select>
                                       
                                       
                     </div>
                            
                            
                     <div class="form-group col-xs-3"> 
                                <label id="lbl_modelo_maquina_1" style="display: block">Marca </label>
                                
                            <!-- <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="modelo_maquina_1" id="modelo_maquina_1"  class="form-control input-sm" > 
                                <optgroup label="Selecciona una opción">
                                    
                                    
                                    
                                    
                                    <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="STANLEY">STANLEY</OPTION>
                                    <OPTION VALUE="SIMON">SIMON</OPTION>
                                    <OPTION VALUE="EMBA">EMBA</OPTION>
                                    <OPTION VALUE="MARTIN">MARTIN</OPTION>
                                     <OPTION VALUE="HOOPER">HOOPER</OPTION>
                                    <OPTION VALUE="TECASA">TECASA</OPTION>
                                    <OPTION VALUE="SRPACK">SRPACK</OPTION>
                                    <OPTION VALUE="MACARBOX">MACARBOX</OPTION>
                                  
                                    
                                    
                                </select>
                                </optgroup>
                           </SELECT>-->
                           
                        
                        
                        <select id="marca_maquina_1" style="background-color:#C1FFFA;" name="modelo_maquina_1" class="form-control input-sm">
                            <option value="">Selecciona una opción</option>
                        </select>
                  
                    <script>
                        sel1 = document.querySelector("#maquina_1");


                        sel1.addEventListener("change" , function(){  

                                sub1 = document.querySelector("#marca_maquina_1");
                                sub1.innerHTML="";


                                //Datos para el segundo select de ejemplo
                        switch(sel1.value){
                                case "Selecciona una opción":
                                     document.getElementById("troquel_maquina_1").selectedIndex = 0;
                                break;
                                case "Flexo":
                                        array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_1").selectedIndex = 0;
                                break;

                                case "Conversion":
                                        array=["GUNGXIN","HEBEI","HUATAO","JIAJIE","GODSWILL","HAIDAO","JASTU","SRPACK","AOKE"];
                                        document.getElementById("troquel_maquina_1").selectedIndex = 3;
                                break;
                                case "Corrugadora":
                                        array=["TECASA","WANLIAN"];
                                        document.getElementById("troquel_maquina_1").selectedIndex = 3;
                                break;
                                case "FFG":
                                            array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_1").selectedIndex = 0;
                                break;
                                case "FRDC":
                                       array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_1").selectedIndex = 0;
                                break;
                                 case "FFG":
                                            array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_1").selectedIndex = 0;
                                break;
                                case "FRDC":
                                       array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_1").selectedIndex = 0;
                                break;
                                /*case "3":
                                        array=["UNO","DOS","TRES"];
                                break;*/
                                default:
                                        console.log(sel1.value);
                                        array=["Selecciona una opción"];
                                }


                                console.log(array);
                                        //Rellena el Select segundo a traves de un array
                                        selectFill1(sub1, array);

                        });


                        //Esta funcion te rellena el Select Secundario
                        function selectFill1(sel1, array){

                                for(v in array){
                                        var option1 = document.createElement("option");
                                        option1.text = array[v];
                                        sel1.add(option1);
                                }
                        }
	</script>

                                
                     </div>
                            
                            
                            
                            
                     <div class="form-group col-xs-3"> 
                                <label id="lbl_medida_maquina_1" style="display: block">Medida  </label>
                     
                                 
                         <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="medida_maquina_1" id="medida_maquina_1"  class="form-control input-sm" > 
                            <optgroup label="Selecciona una opción">
                                    <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE='35"'>35"</OPTION>
                                    <OPTION VALUE='50"'>50"</OPTION>
                                    <OPTION VALUE='66"'>66"</OPTION>
                                    <OPTION VALUE="No Aplica">No Aplica</OPTION>
                                    
                            </optgroup>
                        </SELECT>
                                
                                
                        
                                <input disabled id="medida_maquina_1_temporal"   style="display: none;background-color:#C1FFFA;" type="text" class="form-control input-sm"  name="medida_maquina_1" >
                                   <input type="checkbox" style="background-color:#C1FFFA;resize:none;display: block" name="check_medida_1" id="check_medida_1" value="1" onchange="javascript:showContentMedida1()" />
                                <label id="label_medida_1" style="display: block"><p style="color:blue;font-size:12px;">  &nbsp;Selecciona si no aparece</p></label>
                            
                      </div>
             </div>
                        
                      
                           <div class="row">
                            
                             
                            
                             
                            
                            
                     <div class="form-group col-xs-3"> 
                            <label id="lbl_troquel_maquina_1" style="display: block"> Troquel  </label>
                              
                            <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="troquel_maquina_1" id="troquel_maquina_1"  class="form-control input-sm" > 
                               <optgroup label="Selecciona una opción">
                                   <option  value="">Selecciona una opción</option>
                                     <OPTION VALUE="Sí">Sí</OPTION>
                                    <OPTION VALUE="No">No</OPTION>
                                    <OPTION VALUE="No Aplica">No Aplica</OPTION>
                               </optgroup>
                           </SELECT>
                                
                            </div>
                            
                             <div class="form-group col-xs-3"> 
                                <label id="lbl_codigo_cubierta_maquina_1" style="display: block"> Código de cubiertas  </label>
                                <textarea name="codigo_cubierta_maquina_1"  id="codigo_cubierta_maquina_1" class="form-control input-sm" rows="1" cols="80" style="background-color:#C1FFFA;resize:none;display: block"></textarea>
                            </div>
                            
                             <div class="form-group col-xs-3"> 
                                <label id="lbl_cliente_conoce_maquina_1" style="display: block"> Nombre con el que el cliente conoce la máquina  </label>
                                <textarea name="cliente_conoce_maquina_1"  id="cliente_conoce_maquina_1" class="form-control input-sm" rows="1" cols="80" style="background-color:#C1FFFA;resize:none;display: block"></textarea>
                            </div>
                            
                             
                           
                            

                         <div class="form-group col-xs-3">
                                <label for="nombre">Refacciones</label>

                                <input id="a4" type="file" name="refacciones_maquina_1" class="form-control input-sm celdaColor">
                            </div>
                            
                           
                            

                        </div>
                        
                        <div class="row">
                             <div class="form-group col-xs-3">
                                                        <label for="nombre">Consumibles</label>

                                                        <input id="a4" type="file" name="consumibles_maquina_1" class="form-control input-sm celdaColor">
                                                    </div>
                        </div>
                        
                        

                    


                         <div class="row">
                                    <div class="form-group col-xs-4"></div>
                                    <div class="form-group col-xs-4"><label id="lbl_maquina_2" style="display: block"><h3>MÁQUINA 2</h3> </label></div>
                                      <div class="form-group col-xs-4"></div>
                            </div>
                        <div class="row">
                        
                                                  <div class="form-group col-xs-3"> 
                                <label id="lbl_info_maquina_2" style="display: block"> Maquina </label>
                                <textarea name="info_maquina_2"  id="info_maquina_2"  class="form-control input-sm" rows="1" cols="80" style="background-color:#FFFFFF;resize:none;display: block" ></textarea>
                      </div>
                            
                            
                            
                                                        
                     <div class="form-group col-xs-3"> 

                                       <label id="lbl_tipo_maquina_2" style="display: block"> Tipo de máquina  </label>


                                <!--<SELECT style="background-color:#FFFFFF;resize:block;display: block" name="tipo_maquina_2" id="tipo_maquina_2"  class="form-control input-sm" > 
                                  <optgroup label="Selecciona una opción">
                                    <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="FRDC">FRDC</OPTION>
                                    <OPTION VALUE="FFG">FFG</OPTION>
                                    <OPTION VALUE="CONVERSION">CONVERSION</OPTION>
                                    <OPTION VALUE="CORRUGADORA">CORRUGADORA</OPTION>

                                  </optgroup>
                                </SELECT>-->
                                
                                
                                 <select id="maquina_2" name="tipo_maquina_2" class="form-control input-sm">
                                    <option value="">Selecciona una opción</option>
                                   <!-- <option value="Flexo">Flexo</option>-->
                                    <option value="Conversion">Conversion</option>
                                    <option value="Corrugadora">Corrugadora</option>
                                    <OPTION VALUE="FRDC">FRDC</OPTION>
                                    <OPTION VALUE="FFG">FFG</OPTION>
                                <!--<option value=3> item 3</option>-->
                                </select>
                     </div>
                            
                            
                                                 <div class="form-group col-xs-3"> 
                                <label id="lbl_modelo_maquina_2" style="display: block">Marca </label>
                                
                             <!--<SELECT style="background-color:#FFFFFF;resize:block;display: block" name="modelo_maquina_2" id="modelo_maquina_2"  class="form-control input-sm" > 
                                <optgroup label="Selecciona una opción">
                                    <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="STANLEY">STANLEY</OPTION>
                                    <OPTION VALUE="SIMON">SIMON</OPTION>
                                    <OPTION VALUE="EMBA">EMBA</OPTION>
                                    <OPTION VALUE="MARTIN">MARTIN</OPTION>
                                    <OPTION VALUE="HOOPER">HOOPER</OPTION>
                                    <OPTION VALUE="TECASA">TECASA</OPTION>
                                    <OPTION VALUE="SRPACK">SRPACK</OPTION>
                                    <OPTION VALUE="MACARBOX">MACARBOX</OPTION>


                                </optgroup>
                           </SELECT>-->
                           
                             <select id="marca_maquina_2" name="modelo_maquina_2" class="form-control input-sm">
                                        <option value="">Selecciona una opción</option>
                            </select>
                            
                                         <script>
                        sel2 = document.querySelector("#maquina_2");


                        sel2.addEventListener("change" , function(){  

                                sub2 = document.querySelector("#marca_maquina_2");
                                sub2.innerHTML="";


                                //Datos para el segundo select de ejemplo
                        switch(sel2.value){
                                case "Selecciona una opción":
                                     document.getElementById("troquel_maquina_2").selectedIndex = 0;
                                break;
                                
                                case "Flexo":
                                        array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_2").selectedIndex = 0;
                                break;
                                
                                case "Conversion":
                                        array=["GUNGXIN","HEBEI","HUATAO","JIAJIE","GODSWILL","HAIDAO","JASTU","SRPACK","AOKE"];
                                        document.getElementById("troquel_maquina_2").selectedIndex = 3;
                                break;
                                case "Corrugadora":
                                        array=["TECASA","WANLIAN"];
                                        document.getElementById("troquel_maquina_2").selectedIndex = 3;
                                break;
                                 case "FFG":
                                            array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_2").selectedIndex = 0;
                                break;
                                case "FRDC":
                                       array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_2").selectedIndex = 0;
                                break;
                                /*case "3":
                                        array=["UNO","DOS","TRES"];
                                break;*/
                                default:
                                        console.log(sel2.value);
                                        array=["Selecciona una opción"];
                                }


                                console.log(array);
                                        //Rellena el Select segundo a traves de un array
                                        selectFill2(sub2, array);

                        });


                        //Esta funcion te rellena el Select Secundario
                        function selectFill2(sel2, array){

                                for(v in array){
                                        var option2 = document.createElement("option");
                                        option2.text = array[v];
                                        sel2.add(option2);
                                }
                        }
	</script>


                                
                     </div>
                            
                            
                            
                              <div class="form-group col-xs-3"> 
                                <label id="lbl_medida_maquina_2" style="display: block">Medida  </label>
                     
                                 
                         <SELECT style="background-color:#FFFFFF;resize:block;display: block" name="medida_maquina_2" id="medida_maquina_2"  class="form-control input-sm" > 
                            <optgroup label="Selecciona una opción">
                                  <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE='35"'>35"</OPTION>
                                    <OPTION VALUE='50"'>50"</OPTION>
                                    <OPTION VALUE='66"'>66"</OPTION>
                                    <OPTION VALUE="No Aplica">No Aplica</OPTION>	

                            </optgroup>
                        </SELECT>
                                
                                
                                <input disabled id="medida_maquina_2_temporal"  style="display: none" type="text" class="form-control input-sm"  name="medida_maquina_2">
                                 <input type="checkbox" style="background-color:#C1FFFA;resize:block;display: block" name="check_medida_2" id="check_medida_2" value="1" onchange="javascript:showContentMedida2()" />
                                <label id="label_medida_2" style="display: block"><p style="color:blue;font-size:12px;">  &nbsp;Selecciona si no aparece</p></label>
                            
                      </div>
                            
                          </div> 
                        
                       
                        
                        
                        <div class="row">
                            
                                                 <div class="form-group col-xs-3"> 
                            <label id="lbl_troquel_maquina_2" style="display: block"> Troquel  </label>
                              
                            <SELECT style="background-color:#FFFFFF;resize:block;display: block" name="troquel_maquina_2" id="troquel_maquina_2"  class="form-control input-sm" > 
                               <optgroup label="Selecciona una opción">
                                    <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="Sí">Sí</OPTION>
                                    <OPTION VALUE="No">No</OPTION>
                                    <OPTION VALUE="No Aplica">No Aplica</OPTION>

                               </optgroup>
                           </SELECT>
                                
                            </div>
                            
                            
                            
                            
                             <div class="form-group col-xs-3"> 
                                <label id="lbl_codigo_cubierta_maquina_2" style="display: block"> Código de cubiertas   </label>
                                <textarea name="codigo_cubierta_maquina_2"  id="codigo_cubierta_maquina_2" class="form-control input-sm" rows="1" cols="80" style="background-color:#ffffff;resize:none;display: block" placeholder=""></textarea>
                            </div>
                            
                            
                            <div class="form-group col-xs-3"> 
                                <label id="lbl_cliente_conoce_maquina_2" style="display: block"> Nombre con el que el cliente conoce la máquina  </label>
                                <textarea name="cliente_conoce_maquina_2"  id="cliente_conoce_maquina_2" class="form-control input-sm" rows="1" cols="80" style="background-color:#ffffff;resize:none;display: block" placeholder=""></textarea>
                            </div>
                            

                            
                        
                              
                            
                            
                            

                             <div class="form-group col-xs-3">
                                <label for="nombre">Refacciones</label>

                                <input id="a4" type="file" name="refacciones_maquina_2" class="form-control input-sm">
                             </div>
                            
                        </div>



                        
                        <div class="row">
                             <div class="form-group col-xs-3">
                                                        <label for="nombre">Consumibles</label>

                                                        <input id="a4" type="file" name="consumibles_maquina_2" class="form-control input-sm">
                                                    </div>
                        </div>


                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                       
                        
                         <div class="row">
                                    <div class="form-group col-xs-4"></div>
                                    <div class="form-group col-xs-4"><label id="lbl_maquina_3" style="display: block"><h3>MÁQUINA 3</h3> </label></div>
                                      <div class="form-group col-xs-4"></div>
                            </div>
                        <div class="row">
                        
                                                  <div class="form-group col-xs-3"> 
                                <label id="lbl_info_maquina_3" style="display: block"> Maquina </label>
                                <textarea name="info_maquina_3"  id="info_maquina_3"  class="form-control input-sm" rows="1" cols="80" style="background-color:#C1FFFA;resize:none;display: block"></textarea>
                      </div>
                            
                            
                            
                                                        
                     <div class="form-group col-xs-3"> 

                                       <label id="lbl_tipo_maquina_3" style="display: block"> Tipo de máquina  </label>


                               <!-- <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="tipo_maquina_3" id="tipo_maquina_3"  class="form-control input-sm" > 
                                  <optgroup label="Selecciona una opción">
                                 <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="FRDC">FRDC</OPTION>
                                    <OPTION VALUE="FFG">FFG</OPTION>
                                    <OPTION VALUE="CONVERSION">CONVERSION</OPTION>
                                    <OPTION VALUE="CORRUGADORA">CORRUGADORA</OPTION>

                                  </optgroup>
                                </SELECT>-->
                                
                                
                                 <select id="maquina_3" style="background-color:#C1FFFA;" name="tipo_maquina_3" class="form-control input-sm">
                                    <option value="">Selecciona una opción</option>
                                    <!--<option value="Flexo">Flexo</option>-->
                                    <option value="Conversion">Conversion</option>
                                    <option value="Corrugadora">Corrugadora</option>
                                     <OPTION VALUE="FRDC">FRDC</OPTION>
                                    <OPTION VALUE="FFG">FFG</OPTION>
                                <!--<option value=3> item 3</option>-->
                                </select>
                     </div>
                            
                            
                                                 <div class="form-group col-xs-3"> 
                                <label id="lbl_modelo_maquina_3" style="display: block">Marca </label>
                                
                            <!-- <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="modelo_maquina_3" id="modelo_maquina_3"  class="form-control input-sm" > 
                                <optgroup label="Selecciona una opción">
                                    <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="STANLEY">STANLEY</OPTION>
                                    <OPTION VALUE="SIMON">SIMON</OPTION>
                                    <OPTION VALUE="EMBA">EMBA</OPTION>
                                    <OPTION VALUE="MARTIN">MARTIN</OPTION>
                                    <OPTION VALUE="HOOPER">HOOPER</OPTION>
                                    <OPTION VALUE="TECASA">TECASA</OPTION>
                                    <OPTION VALUE="SRPACK">SRPACK</OPTION>
                                    <OPTION VALUE="MACARBOX">MACARBOX</OPTION>


                                </optgroup>
                           </SELECT>-->
                           
                            <select id="marca_maquina_3" style="background-color:#C1FFFA;" name="modelo_maquina_3" class="form-control input-sm">
                                        <option value="">Selecciona una opción</option>
                            </select>
                            
                            
                            
                             <script>
                        sel3 = document.querySelector("#maquina_3");


                        sel3.addEventListener("change" , function(){  

                                sub3 = document.querySelector("#marca_maquina_3");
                                sub3.innerHTML="";


                                //Datos para el segundo select de ejemplo
                        switch(sel3.value){
                                case "Selecciona una opción":
                                     document.getElementById("troquel_maquina_3").selectedIndex = 0;
                                break;
                                
                                case "Flexo":
                                        array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_3").selectedIndex = 0;
                                break;

                                case "Conversion":
                                        array=["GUNGXIN","HEBEI","HUATAO","JIAJIE","GODSWILL","HAIDAO","JASTU","SRPACK","AOKE"];
                                        document.getElementById("troquel_maquina_3").selectedIndex = 3;
                                break;
                                case "Corrugadora":
                                        array=["TECASA","WANLIAN"];
                                        document.getElementById("troquel_maquina_3").selectedIndex = 3;
                                break;
                                 case "FFG":
                                            array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_3").selectedIndex = 0;
                                break;
                                case "FRDC":
                                       array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_3").selectedIndex = 0;
                                break;
                                /*case "3":
                                        array=["UNO","DOS","TRES"];
                                break;*/
                                default:
                                        console.log(sel3.value);
                                        array=["Selecciona una opción"];
                                }


                                console.log(array);
                                        //Rellena el Select segundo a traves de un array
                                        selectFill3(sub3, array);

                        });


                        //Esta funcion te rellena el Select Secundario
                        function selectFill3(sel3, array){

                                for(v in array){
                                        var option3 = document.createElement("option");
                                        option3.text = array[v];
                                        sel3.add(option3);
                                }
                        }
	</script>

                                
                     </div>
                            
                            
                            
                              <div class="form-group col-xs-3"> 
                                <label id="lbl_medida_maquina_3" style="display: block">Medida  </label>
                     
                                 
                         <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="medida_maquina_3" id="medida_maquina_3"  class="form-control input-sm" > 
                            <optgroup label="Selecciona una opción">
                                      <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE='35"'>35"</OPTION>
                                    <OPTION VALUE='50"'>50"</OPTION>
                                    <OPTION VALUE='66"'>66"</OPTION>
                                    <OPTION VALUE="No Aplica">No Aplica</OPTION>	

                            </optgroup>
                        </SELECT>
                                
                                
                           <input disabled id="medida_maquina_3_temporal"  style="background-color:#C1FFFA;display: none" type="text" class="form-control input-sm"  name="medida_maquina_3">
                                  <input type="checkbox" style="background-color:#C1FFFA;resize:block;display: block" name="check_medida_3" id="check_medida_3" value="1" onchange="javascript:showContentMedida3()" />
                                  <label id="label_medida_3" style="display: block"><p style="color:blue;font-size:12px;">  &nbsp;Selecciona si no aparece</p></label>
                            
                                
                                
                                
                      </div>
                            
                          </div> 
                        
                       
                        
                        
                        <div class="row">
                            
                                                 <div class="form-group col-xs-3"> 
                            <label id="lbl_troquel_maquina_3" style="display: block"> Troquel  </label>
                              
                            <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="troquel_maquina_3" id="troquel_maquina_3"  class="form-control input-sm" > 
                               <optgroup label="Selecciona una opción">
                                    <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="Sí">Sí</OPTION>
                                    <OPTION VALUE="No">No</OPTION>
                                    <OPTION VALUE="No Aplica">No Aplica</OPTION>

                               </optgroup>
                           </SELECT>
                                
                            </div>
                            
                            
                            
                            
                             <div class="form-group col-xs-3"> 
                                <label id="lbl_codigo_cubierta_maquina_3" style="display: block"> Código de cubiertas  </label>
                                <textarea name="codigo_cubierta_maquina_3"  id="codigo_cubierta_maquina_3" class="form-control input-sm" rows="1" cols="80" style="background-color:#C1FFFA;resize:none;display: block" ></textarea>
                            </div>
                            
                            
                            <div class="form-group col-xs-3"> 
                                <label id="lbl_cliente_conoce_maquina_3" style="display: block"> Nombre con el que el cliente conoce la máquina  </label>
                                <textarea name="cliente_conoce_maquina_3"  id="cliente_conoce_maquina_3" class="form-control input-sm" rows="1" cols="80" style="background-color:#C1FFFA;resize:none;display: block"></textarea>
                            </div>
                            

                            
                            
                            
                            



                        
                      <div class="form-group col-xs-3">
                                <label for="nombre">Refacciones</label>

                                <input id="a4" type="file" name="refacciones_maquina_3" class="form-control input-sm celdaColor">
                            </div>
                            
                           
                            

                        </div>
                        
                        <div class="row">
                             <div class="form-group col-xs-3">
                                                        <label for="nombre">Consumibles</label>

                                                        <input id="a4" type="file" name="consumibles_maquina_3" class="form-control input-sm celdaColor">
                                                    </div>
                        </div>



                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                      
                         <div class="row">
                                    <div class="form-group col-xs-4"></div>
                                    <div class="form-group col-xs-4"><label id="lbl_maquina_4" style="display: block"><h3>MÁQUINA 4</h3> </label></div>
                                      <div class="form-group col-xs-4"></div>
                            </div>
                        <div class="row">
                        
                                                  <div class="form-group col-xs-3"> 
                                <label id="lbl_info_maquina_4" style="display: block"> Maquina </label>
                                <textarea name="info_maquina_4"  id="info_maquina_4"  class="form-control input-sm" rows="1" cols="80" style="background-color:#FFFFFF;resize:none;display: block"></textarea>
                      </div>
                            
                            
                            
                                                        
                     <div class="form-group col-xs-3"> 

                                       <label id="lbl_tipo_maquina_4" style="display: block"> Tipo de máquina  </label>


                                <!--<SELECT style="background-color:#FFFFFF;resize:block;display: block" name="tipo_maquina_4" id="tipo_maquina_4"  class="form-control input-sm" > 
                                  <optgroup label="Selecciona una opción">
                                        <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="FRDC">FRDC</OPTION>
                                    <OPTION VALUE="FFG">FFG</OPTION>
                                    <OPTION VALUE="CONVERSION">CONVERSION</OPTION>
                                    <OPTION VALUE="CORRUGADORA">CORRUGADORA</OPTION>

                                  </optgroup>
                                </SELECT>-->
                                
                                <select id="maquina_4" name="tipo_maquina_4" class="form-control input-sm">
                                    <option value="">Selecciona una opción</option>
                                   <!-- <option value="Flexo">Flexo</option> -->
                                    <option value="Conversion">Conversion</option>
                                    <option value="Corrugadora">Corrugadora</option>
                                     <OPTION VALUE="FRDC">FRDC</OPTION>
                                    <OPTION VALUE="FFG">FFG</OPTION>
                                <!--<option value=3> item 3</option>-->
                                </select>
                     </div>
                            
                            
                                                 <div class="form-group col-xs-3"> 
                                <label id="lbl_modelo_maquina_4" style="display: block">Marca </label>
                                
                             <!--<SELECT style="background-color:#FFFFFF;resize:block;display: block" name="modelo_maquina_4" id="modelo_maquina_4"  class="form-control input-sm" > 
                                <optgroup label="Selecciona una opción">
                                             <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="STANLEY">STANLEY</OPTION>
                                    <OPTION VALUE="SIMON">SIMON</OPTION>
                                    <OPTION VALUE="EMBA">EMBA</OPTION>
                                    <OPTION VALUE="MARTIN">MARTIN</OPTION>
                                    <OPTION VALUE="HOOPER">HOOPER</OPTION>
                                    <OPTION VALUE="TECASA">TECASA</OPTION>
                                    <OPTION VALUE="SRPACK">SRPACK</OPTION>
                                    <OPTION VALUE="MACARBOX">MACARBOX</OPTION>


                                </optgroup>
                           </SELECT>-->
                           
                           
                            <select id="marca_maquina_4" name="modelo_maquina_4" class="form-control input-sm">
                                        <option value="">Selecciona una opción</option>
                            </select>
                            
                            <script>
                        sel4 = document.querySelector("#maquina_4");


                        sel4.addEventListener("change" , function(){  

                                sub4 = document.querySelector("#marca_maquina_4");
                                sub4.innerHTML="";


                                //Datos para el segundo select de ejemplo
                        switch(sel4.value){
                            
                            
                                case "Selecciona una opción":
                                     document.getElementById("troquel_maquina_4").selectedIndex = 0;
                                break;
                                
                                case "Flexo":
                                        array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_4").selectedIndex = 0;
                                break;

                                case "Conversion":
                                        array=["GUNGXIN","HEBEI","HUATAO","JIAJIE","GODSWILL","HAIDAO","JASTU","SRPACK","AOKE"];
                                        document.getElementById("troquel_maquina_4").selectedIndex = 3;
                                break;
                                case "Corrugadora":
                                        array=["TECASA","WANLIAN"];
                                        document.getElementById("troquel_maquina_4").selectedIndex = 3;
                                break;
                                 case "FFG":
                                            array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_4").selectedIndex = 0;
                                break;
                                case "FRDC":
                                       array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_4").selectedIndex = 0;
                                break;
                                /*case "3":
                                        array=["UNO","DOS","TRES"];
                                break;*/
                                default:
                                        console.log(sel4.value);
                                        array=["Selecciona una opción"];
                                }


                                console.log(array);
                                        //Rellena el Select segundo a traves de un array
                                        selectFill4(sub4, array);

                        });


                        //Esta funcion te rellena el Select Secundario
                        function selectFill4(sel4, array){

                                for(v in array){
                                        var option4 = document.createElement("option");
                                        option4.text = array[v];
                                        sel4.add(option4);
                                }
                        }
	</script>



                                
                     </div>
                            
                            
                            
                              <div class="form-group col-xs-3"> 
                                <label id="lbl_medida_maquina_4" style="display: block">Medida  </label>
                     
                                 
                         <SELECT style="background-color:#FFFFFF;resize:block;display: block" name="medida_maquina_4" id="medida_maquina_4"  class="form-control input-sm" > 
                            <optgroup label="Selecciona una opción">
                                       <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE='35"'>35"</OPTION>
                                    <OPTION VALUE='50"'>50"</OPTION>
                                    <OPTION VALUE='66"'>66"</OPTION>
                                    <OPTION VALUE="No Aplica">No Aplica</OPTION>	

                            </optgroup>
                        </SELECT>
                                
                                
                                   <input disabled id="medida_maquina_4_temporal"  style="display: none" type="text" class="form-control input-sm"  name="medida_maquina_4">
                                  <input type="checkbox" style="background-color:#C1FFFA;resize:block;display: block" name="check_medida_4" id="check_medida_4" value="1" onchange="javascript:showContentMedida4()" />
                                  <label id="label_medida_4" style="display: block"><p style="color:blue;font-size:12px;">  &nbsp;Selecciona si no aparece</p></label>
                            
                                
                                
                                
                                
                      </div>
                            
                          </div> 
                        
                       
                        
                        
                        <div class="row">
                            
                                                 <div class="form-group col-xs-3"> 
                            <label id="lbl_troquel_maquina_4" style="display: block"> Troquel  </label>
                              
                            <SELECT style="background-color:#FFFFFF;resize:block;display: block" name="troquel_maquina_4" id="troquel_maquina_4"  class="form-control input-sm" > 
                               <optgroup label="Selecciona una opción">
                                   <option  value="">Selecciona una opción</option>
                                     <OPTION VALUE="Sí">Sí</OPTION>
                                    <OPTION VALUE="No">No</OPTION>
                                    <OPTION VALUE="No Aplica">No Aplica</OPTION>
	

                               </optgroup>
                           </SELECT>
                                
                            </div>
                            
                            
                            
                            
                             <div class="form-group col-xs-3"> 
                                <label id="lbl_codigo_cubierta_maquina_4" style="display: block"> Código de cubiertas   </label>
                                <textarea name="codigo_cubierta_maquina_4"  id="codigo_cubierta_maquina_4" class="form-control input-sm" rows="1" cols="80" style="background-color:#ffffff;resize:none;display: block" placeholder=""></textarea>
                            </div>
                            
                            
                            <div class="form-group col-xs-3"> 
                                <label id="lbl_cliente_conoce_maquina_4" style="display: block"> Nombre con el que el cliente conoce la máquina  </label>
                                <textarea name="cliente_conoce_maquina_4"  id="cliente_conoce_maquina_4" class="form-control input-sm" rows="1" cols="80" style="background-color:#ffffff;resize:n;display: block" placeholder=""></textarea>
                            </div>
                            

                        
                        
                         <div class="form-group col-xs-3">
                                <label for="nombre">Refacciones 4</label>

                                <input id="a4" type="file" name="refacciones_maquina_4" class="form-control input-sm">
                            </div>
                            
                           
                            

                        </div>
                        
                        <div class="row">
                             <div class="form-group col-xs-3">
                                                        <label for="nombre">Consumibles 4</label>

                                                        <input id="a4" type="file" name="consumibles_maquina_4" class="form-control input-sm">
                                                    </div>
                        </div>

                      
                        
                        
                        
                        
                        
                        
                        
                       
                        
                         <div class="row">
                                    <div class="form-group col-xs-4"></div>
                                    <div class="form-group col-xs-4"><label id="lbl_maquina_5" style="display: block"><h3>MÁQUINA 5</h3> </label></div>
                                      <div class="form-group col-xs-4"></div>
                            </div>
                        <div class="row">
                        
                                                  <div class="form-group col-xs-3"> 
                                <label id="lbl_info_maquina_5" style="display: block"> Maquina </label>
                                <textarea name="info_maquina_5"  id="info_maquina_5"  class="form-control input-sm" rows="1" cols="80" style="background-color:#C1FFFA;resize:none;display: block"></textarea>
                      </div>
                            
                            
                            
                                                        
                     <div class="form-group col-xs-3"> 

                                       <label id="lbl_tipo_maquina_5" style="display: block"> Tipo de máquina  </label>


                                <!--<SELECT style="background-color:#C1FFFA;resize:block;display: block" name="tipo_maquina_5" id="tipo_maquina_5"  class="form-control input-sm" > 
                                  <optgroup label="Selecciona una opción">
                                          <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="FRDC">FRDC</OPTION>
                                    <OPTION VALUE="FFG">FFG</OPTION>
                                    <OPTION VALUE="CONVERSION">CONVERSION</OPTION>
                                    <OPTION VALUE="CORRUGADORA">CORRUGADORA</OPTION>

                                  </optgroup>
                                </SELECT>-->
                                
                             <select id="maquina_5" style="background-color:#C1FFFA;" name="tipo_maquina_5" class="form-control input-sm">
                                    <option value="">Selecciona una opción</option>
                                   <!-- <option value="Flexo">Flexo</option> -->
                                    <option value="Conversion">Conversion</option>
                                    <option value="Corrugadora">Corrugadora</option>
                                     <OPTION VALUE="FRDC">FRDC</OPTION>
                                    <OPTION VALUE="FFG">FFG</OPTION>
                                <!--<option value=3> item 3</option>-->
                             </select>
                                
                                
                     </div>
                            
                            
                                                 <div class="form-group col-xs-3"> 
                                <label id="lbl_modelo_maquina_5" style="display: block">Marca </label>
                                
                            <!-- <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="modelo_maquina_5" id="modelo_maquina_5"  class="form-control input-sm" > 
                                <optgroup label="Selecciona una opción">
                                           <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="STANLEY">STANLEY</OPTION>
                                    <OPTION VALUE="SIMON">SIMON</OPTION>
                                    <OPTION VALUE="EMBA">EMBA</OPTION>
                                    <OPTION VALUE="MARTIN">MARTIN</OPTION>
                                    <OPTION VALUE="HOOPER">HOOPER</OPTION>
                                    <OPTION VALUE="TECASA">TECASA</OPTION>
                                    <OPTION VALUE="SRPACK">SRPACK</OPTION>
                                    <OPTION VALUE="MACARBOX">MACARBOX</OPTION>

                                </optgroup>MÁQUINA 6
                           </SELECT>-->
                           
                              <select id="marca_maquina_5" style="background-color:#C1FFFA;" name="modelo_maquina_5" class="form-control input-sm">
                                        <option value="">Selecciona una opción</option>
                            </select>
                            
                            <script>
                        sel5 = document.querySelector("#maquina_5");


                        sel5.addEventListener("change" , function(){  

                                sub5 = document.querySelector("#marca_maquina_5");
                                sub5.innerHTML="";


                                //Datos para el segundo select de ejemplo
                        switch(sel5.value){
                                case "Selecciona una opción":
                                     document.getElementById("troquel_maquina_5").selectedIndex = 0;
                                break;
                                
                                case "Flexo":
                                        array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_5").selectedIndex = 0;
                                break;

                                case "Conversion":
                                        array=["GUNGXIN","HEBEI","HUATAO","JIAJIE","GODSWILL","HAIDAO","JASTU","SRPACK","AOKE"];
                                        document.getElementById("troquel_maquina_5").selectedIndex = 3;
                                break;
                                case "Corrugadora":
                                        array=["TECASA","WANLIAN"];
                                        document.getElementById("troquel_maquina_5").selectedIndex = 3;
                                break;
                                 case "FFG":
                                            array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_5").selectedIndex = 0;
                                break;
                                case "FRDC":
                                       array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_5").selectedIndex = 0;
                                break;
                                /*case "3":
                                        array=["UNO","DOS","TRES"];
                                break;*/
                                default:
                                        console.log(sel5.value);
                                        array=["Selecciona una opción"];
                                }


                                console.log(array);
                                        //Rellena el Select segundo a traves de un array
                                        selectFill5(sub5, array);

                        });


                        //Esta funcion te rellena el Select Secundario
                        function selectFill5(sel5, array){

                                for(v in array){
                                        var option = document.createElement("option");
                                        option.text = array[v];
                                        sel5.add(option);
                                }
                        }
	</script>

                                
                     </div>
                            
                            
                            
                              <div class="form-group col-xs-3"> 
                                <label id="lbl_medida_maquina_5" style="display: block">Medida  </label>
                     
                                 
                         <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="medida_maquina_5" id="medida_maquina_5"  class="form-control input-sm" > 
                            <optgroup label="Selecciona una opción">
                          <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE='35"'>35"</OPTION>
                                    <OPTION VALUE='50"'>50"</OPTION>
                                    <OPTION VALUE='66"'>66"</OPTION>
                                    <OPTION VALUE="No Aplica">No Aplica</OPTION>	

                            </optgroup>
                        </SELECT>
                                
                       
                                   <input disabled id="medida_maquina_5_temporal"  style="background-color:#C1FFFA;display: none" type="text" class="form-control input-sm"  name="medida_maquina_5">
                                  <input type="checkbox" style="background-color:#C1FFFA;resize:block;display: block" name="check_medida_5" id="check_medida_5" value="1" onchange="javascript:showContentMedida5()" />
                                  <label id="label_medida_5" style="display: block"><p style="color:blue;font-size:12px;">  &nbsp;Selecciona si no aparece</p></label>
                            
                                   
                      </div>
                            
                          </div> 
                        
                       
                        
                        
                        <div class="row">
                            
                                                 <div class="form-group col-xs-3"> 
                            <label id="lbl_troquel_maquina_5" style="display: block"> Troquel  </label>
                              
                            <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="troquel_maquina_5" id="troquel_maquina_5"  class="form-control input-sm" > 
                               <optgroup label="Selecciona una opción">
                                <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="Sí">Sí</OPTION>
                                    <OPTION VALUE="No">No</OPTION>
                                    <OPTION VALUE="No Aplica">No Aplica</OPTION>

                               </optgroup>
                           </SELECT>
                                
                            </div>
                            
                            
                            
                            
                             <div class="form-group col-xs-3"> 
                                <label id="lbl_codigo_cubierta_maquina_5" style="display: block"> Código de cubiertas  </label>
                                <textarea name="codigo_cubierta_maquina_5"  id="codigo_cubierta_maquina_5" class="form-control input-sm"
                                          rows="1" cols="80" style="background-color:#C1FFFA;resize:none;display: block"
                                        
                                          ></textarea>
                            </div>
                            
                            
                            <div class="form-group col-xs-3"> 
                                <label id="lbl_cliente_conoce_maquina_5" style="display: block"> Nombre con el que el cliente conoce la máquina  </label>
                                <textarea name="cliente_conoce_maquina_5"  id="cliente_conoce_maquina_5" class="form-control input-sm" rows="1" cols="80"
                                          style="background-color:#C1FFFA;resize:none;display: block" ></textarea>
                            </div>
                       
                            
                        <div class="form-group col-xs-3">
                                <label for="nombre">Refacciones</label>

                                <input id="a4" type="file" name="refacciones_maquina_5" class="form-control input-sm celdaColor">
                            </div>
                            
                           
                            

                        </div>
                        
                        <div class="row">
                             <div class="form-group col-xs-3">
                                                        <label for="nombre">Consumibles</label>

                                                        <input id="a4" type="file" name="consumibles_maquina_5" class="form-control input-sm celdaColor">
                                                    </div>
                        </div>

                        
                        
                        
                     
                        
                         <div class="row">
                                    <div class="form-group col-xs-4"></div>
                                    <div class="form-group col-xs-4"><label id="lbl_maquina_6" style="display: block"><h3>MÁQUINA 6</h3> </label></div>
                                      <div class="form-group col-xs-4"></div>
                            </div>
                        <div class="row">
                        
                                                  <div class="form-group col-xs-3"> 
                                <label id="lbl_info_maquina_6" style="display: block"> Maquina </label>
                                <textarea name="info_maquina_6"  id="info_maquina_6"  class="form-control input-sm" rows="1" cols="80" style="background-color:#FFFFFF;resize:none;display: block" ></textarea>
                      </div>
                            
                            
                            
                                                        
                     <div class="form-group col-xs-3"> 

                                       <label id="lbl_tipo_maquina_6" style="display: block"> Tipo de máquina  </label>


                                <!--<SELECT style="background-color:#FFFFFF;resize:block;display: block" name="tipo_maquina_6" id="tipo_maquina_6"  class="form-control input-sm" > 
                                  <optgroup label="Selecciona una opción">
                                          <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="FRDC">FRDC</OPTION>
                                    <OPTION VALUE="FFG">FFG</OPTION>
                                    <OPTION VALUE="CONVERSION">CONVERSION</OPTION>
                                    <OPTION VALUE="CORRUGADORA">CORRUGADORA</OPTION>

                                  </optgroup>
                                </SELECT>-->
                                
                                <select id="maquina_6" name="tipo_maquina_6" class="form-control input-sm">
                                    <option value="">Selecciona una opción</option>
                                  <!--  <option value="Flexo">Flexo</option> -->
                                    <option value="Conversion">Conversion</option>
                                    <option value="Corrugadora">Corrugadora</option>
                                     <OPTION VALUE="FRDC">FRDC</OPTION>
                                    <OPTION VALUE="FFG">FFG</OPTION>
                                <!--<option value=3> item 3</option>-->
                                </select>
                     </div>
                            
                            
                                                 <div class="form-group col-xs-3"> 
                                <label id="lbl_modelo_maquina_6" style="display: block">Marca </label>
                                
                             <!--<SELECT style="background-color:#FFFFFF;resize:block;display: block" name="modelo_maquina_6" id="modelo_maquina_6"  class="form-control input-sm" > 
                                <optgroup label="Selecciona una opción">
                                          <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="STANLEY">STANLEY</OPTION>
                                    <OPTION VALUE="SIMON">SIMON</OPTION>
                                    <OPTION VALUE="EMBA">EMBA</OPTION>
                                    <OPTION VALUE="MARTIN">MARTIN</OPTION>
                                    <OPTION VALUE="HOOPER">HOOPER</OPTION>
                                    <OPTION VALUE="TECASA">TECASA</OPTION>
                                    <OPTION VALUE="SRPACK">SRPACK</OPTION>
                                    <OPTION VALUE="MACARBOX">MACARBOX</OPTION>


                                </optgroup>
                           </SELECT>-->
                         <select id="marca_maquina_6" name="modelo_maquina_6" class="form-control input-sm">
                                        <option value="">Selecciona una opción</option>
                            </select>
                            
               <script>
                        sel6 = document.querySelector("#maquina_6");


                        sel6.addEventListener("change" , function(){  

                                sub6 = document.querySelector("#marca_maquina_6");
                                sub6.innerHTML="";


                                //Datos para el segundo select de ejemplo
                        switch(sel6.value){
                            
                                case "Selecciona una opción":
                                     document.getElementById("troquel_maquina_6").selectedIndex = 0;
                                break;
                                
                                case "Flexo":
                                        array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_6").selectedIndex = 0;
                                break;

                                case "Conversion":
                                        array=["GUNGXIN","HEBEI","HUATAO","JIAJIE","GODSWILL","HAIDAO","JASTU","SRPACK","AOKE"];
                                        document.getElementById("troquel_maquina_6").selectedIndex = 3;
                                break;
                                case "Corrugadora":
                                        array=["TECASA","WANLIAN"];
                                        document.getElementById("troquel_maquina_6").selectedIndex = 3;
                                break;
                                 case "FFG":
                                            array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_6").selectedIndex = 0;
                                break;
                                case "FRDC":
                                       array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_6").selectedIndex = 0;
                                break;
                                /*case "3":
                                        array=["UNO","DOS","TRES"];
                                break;*/
                                default:
                                        console.log(sel6.value);
                                        array=["Selecciona una opción"];
                                }


                                console.log(array);
                                        //Rellena el Select segundo a traves de un array
                                        selectFill6(sub6, array);

                        });


                        //Esta funcion te rellena el Select Secundario
                        function selectFill6(sel6, array){

                                for(v in array){
                                        var option = document.createElement("option");
                                        option.text = array[v];
                                        sel6.add(option);
                                }
                        }
	</script>


                                
                     </div>
                            
                            
                            
                              <div class="form-group col-xs-3"> 
                                <label id="lbl_medida_maquina_6" style="display: block">Medida  </label>
                     
                                 
                         <SELECT style="background-color:#FFFFFF;resize:block;display: block" name="medida_maquina_6" id="medida_maquina_6"  class="form-control input-sm" > 
                            <optgroup label="Selecciona una opción">
                              <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE='35"'>35"</OPTION>
                                    <OPTION VALUE='50"'>50"</OPTION>
                                    <OPTION VALUE='66"'>66"</OPTION>
                                    <OPTION VALUE="No Aplica">No Aplica</OPTION>	

                            </optgroup>
                        </SELECT>
                                
                                
                         
                                   <input  disabled id="medida_maquina_6_temporal"  style="display: none" type="text" class="form-control input-sm"  name="medida_maquina_6">
                                  <input type="checkbox" style="background-color:#C1FFFA;resize:block;display: block" name="check_medida_6" id="check_medida_6" value="1" onchange="javascript:showContentMedida6()" />
                                  <label id="label_medida_6" style="display: block"><p style="color:blue;font-size:12px;">  &nbsp;Selecciona si no aparece</p></label>
                            
                                
                      </div>
                            
                          </div> 
                        
                       
                        
                        
                        <div class="row">
                            
                                                 <div class="form-group col-xs-3"> 
                            <label id="lbl_troquel_maquina_6" style="display: block"> Troquel  </label>
                              
                            <SELECT style="background-color:#FFFFFF;resize:block;display: block" name="troquel_maquina_6" id="troquel_maquina_6"  class="form-control input-sm" > 
                               <optgroup label="Selecciona una opción">
                              <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="Sí">Sí</OPTION>
                                    <OPTION VALUE="No">No</OPTION>
                                    <OPTION VALUE="No Aplica">No Aplica</OPTION>

                               </optgroup>
                           </SELECT>
                                
                            </div>
                            
                            
                            
                            
                             <div class="form-group col-xs-3"> 
                                <label id="lbl_codigo_cubierta_maquina_6" style="display: block"> Código de cubiertas  </label>
                                <textarea name="codigo_cubierta_maquina_6"  id="codigo_cubierta_maquina_6" class="form-control input-sm" rows="1" cols="80" style="background-color:#FFFFFF;resize:none;display: block" placeholder=""></textarea>
                            </div>
                            
                            
                            <div class="form-group col-xs-3"> 
                                <label id="lbl_cliente_conoce_maquina_6" style="display: block"> Nombre con el que el cliente conoce la máquina  </label>
                                <textarea name="cliente_conoce_maquina_6"  id="cliente_conoce_maquina_6" class="form-control input-sm" rows="1" cols="80" style="background-color:#FFFFFF;resize:none;display: block" placeholder=""></textarea>
                            </div>
                            



                     
                        <div class="form-group col-xs-3">
                                <label for="nombre">Refacciones</label>

                                <input id="a4" type="file" name="refacciones_maquina_6" class="form-control input-sm">
                            </div>
                            
                           
                            

                        </div>
                        
                        <div class="row">
                             <div class="form-group col-xs-3">
                                                        <label for="nombre">Consumibles</label>

                                                        <input id="a4" type="file" name="consumibles_maquina_6" class="form-control input-sm">
                                                    </div>
                        </div>

                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                       
                         <div class="row">
                                    <div class="form-group col-xs-4"></div>
                                    <div class="form-group col-xs-4"><label id="lbl_maquina_7" style="display: block"><h3>MÁQUINA 7</h3> </label></div>
                                      <div class="form-group col-xs-4"></div>
                            </div>
                        <div class="row">
                        
                                                  <div class="form-group col-xs-3"> 
                                <label id="lbl_info_maquina_7" style="display: block"> Maquina </label>
                                <textarea name="info_maquina_7"  id="info_maquina_7"  class="form-control input-sm" rows="1" cols="80" style="background-color:#C1FFFA;resize:none;display: block" ></textarea>
                      </div>
                            
                            
                            
                                                        
                     <div class="form-group col-xs-3"> 

                                       <label id="lbl_tipo_maquina_7" style="display: block"> Tipo de máquina  </label>


                                <!--<SELECT style="background-color:#C1FFFA;resize:block;display: block" name="tipo_maquina_7" id="tipo_maquina_7"  class="form-control input-sm" > 
                                  <optgroup label="Selecciona una opción">
                                         <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="FRDC">FRDC</OPTION>
                                    <OPTION VALUE="FFG">FFG</OPTION>
                                    <OPTION VALUE="CONVERSION">CONVERSION</OPTION>
                                    <OPTION VALUE="CORRUGADORA">CORRUGADORA</OPTION>
>
                                  </optgroup>
                                </SELECT>-->
                                
                                 <select id="maquina_7" style="background-color:#C1FFFA;" name="tipo_maquina_7" class="form-control input-sm">
                                    <option value="">Selecciona una opción</option>
                                   <!-- <option value="Flexo">Flexo</option> -->
                                    <option value="Conversion">Conversion</option>
                                    <option value="Corrugadora">Corrugadora</option>
                                     <OPTION VALUE="FRDC">FRDC</OPTION>
                                    <OPTION VALUE="FFG">FFG</OPTION>
                                <!--<option value=3> item 3</option>-->
                                </select>
                     </div>
                            
                            
                                                 <div class="form-group col-xs-3"> 
                                <label id="lbl_modelo_maquina_7" style="display: block">Marca </label>
                                
<!--<SELECT style="background-color:#C1FFFA;resize:block;display: block" name="modelo_maquina_7" id="modelo_maquina_7"  class="form-control input-sm" > 
                                <optgroup label="Selecciona una opción">
                                            <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="STANLEY">STANLEY</OPTION>
                                    <OPTION VALUE="SIMON">SIMON</OPTION>
                                    <OPTION VALUE="EMBA">EMBA</OPTION>
                                    <OPTION VALUE="MARTIN">MARTIN</OPTION>
                                    <OPTION VALUE="HOOPER">HOOPER</OPTION>
                                    <OPTION VALUE="TECASA">TECASA</OPTION>
                                    <OPTION VALUE="SRPACK">SRPACK</OPTION>
                                    <OPTION VALUE="MACARBOX">MACARBOX</OPTION>


                                </optgroup>
                           </SELECT>-->
                           
                           <select id="marca_maquina_7" style="background-color:#C1FFFA;" name="modelo_maquina_7" class="form-control input-sm">
                                        <option value="">Selecciona una opción</option>
                            </select>
                            
                            
                             <script>
                        sel7 = document.querySelector("#maquina_7");


                        sel7.addEventListener("change" , function(){  

                                sub7 = document.querySelector("#marca_maquina_7");
                                sub7.innerHTML="";


                                //Datos para el segundo select de ejemplo
                        switch(sel7.value){
                                case "Selecciona una opción":
                                     document.getElementById("troquel_maquina_7").selectedIndex = 0;
                                break;
                                
                                case "Flexo":
                                        array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_7").selectedIndex = 0;
                                break;

                                case "Conversion":
                                        array=["GUNGXIN","HEBEI","HUATAO","JIAJIE","GODSWILL","HAIDAO","JASTU","SRPACK","AOKE"];
                                        document.getElementById("troquel_maquina_7").selectedIndex = 3;
                                break;
                                case "Corrugadora":
                                        array=["TECASA","WANLIAN"];
                                        document.getElementById("troquel_maquina_7").selectedIndex = 3;
                                break;
                                 case "FFG":
                                            array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_7").selectedIndex = 0;
                                break;
                                case "FRDC":
                                       array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_7").selectedIndex = 0;
                                break;
                                /*case "3":
                                        array=["UNO","DOS","TRES"];
                                break;*/
                                default:
                                        console.log(sel7.value);
                                        array=["Selecciona una opción"];
                                }


                                console.log(array);
                                        //Rellena el Select segundo a traves de un array
                                        selectFill7(sub7, array);

                        });


                        //Esta funcion te rellena el Select Secundario
                        function selectFill7(sel7, array){

                                for(v in array){
                                        var option7 = document.createElement("option");
                                        option7.text = array[v];
                                        sel7.add(option7);
                                }
                        }
	</script>


                                
                     </div>
                            
                            
                            
                              <div class="form-group col-xs-3"> 
                                <label id="lbl_medida_maquina_7" style="display: block">Medida  </label>
                     
                                 
                         <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="medida_maquina_7" id="medida_maquina_7"  class="form-control input-sm" > 
                            <optgroup label="Selecciona una opción">
                            <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE='35"'>35"</OPTION>
                                    <OPTION VALUE='50"'>50"</OPTION>
                                    <OPTION VALUE='66"'>66"</OPTION>
                                    <OPTION VALUE="No Aplica">No Aplica</OPTION>	

                            </optgroup>
                        </SELECT>
                                
                                
                         
                                   <input disabled id="medida_maquina_7_temporal"  style="background-color:#C1FFFA;display: none" type="text" class="form-control input-sm"  name="medida_maquina_7">
                                  <input type="checkbox" style="background-color:#C1FFFA;resize:block;display: block" name="check_medida_4" id="check_medida_7" value="1" onchange="javascript:showContentMedida7()" />
                                  <label id="label_medida_7" style="display: block"><p style="color:blue;font-size:12px;">  &nbsp;Selecciona si no aparece</p></label>
                            
                                
                      </div>
                            
                          </div> 
                        
                       
                        
                        
                        <div class="row">
                            
                                                 <div class="form-group col-xs-3"> 
                            <label id="lbl_troquel_maquina_7" style="display: block"> Troquel  </label>
                              
                            <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="troquel_maquina_7" id="troquel_maquina_7"  class="form-control input-sm" > 
                               <optgroup label="Selecciona una opción">
                                    <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="Sí">Sí</OPTION>
                                    <OPTION VALUE="No">No</OPTION>
                                    <OPTION VALUE="No Aplica">No Aplica</OPTION>

                               </optgroup>
                           </SELECT>
                                
                            </div>
                            
                            
                            
                            
                             <div class="form-group col-xs-3"> 
                                <label id="lbl_codigo_cubierta_maquina_7" style="display: block"> Código de cubiertas  </label>
                                <textarea name="codigo_cubierta_maquina_7"  id="codigo_cubierta_maquina_7" class="form-control input-sm" rows="1" cols="80" style="background-color:#C1FFFA;resize:none;display: block" placeholder=""></textarea>
                            </div>
                            
                            
                            <div class="form-group col-xs-3"> 
                                <label id="lbl_cliente_conoce_maquina_7" style="display: block"> Nombre con el que el cliente conoce la máquina  </label>
                                <textarea name="cliente_conoce_maquina_7"  id="cliente_conoce_maquina_7" class="form-control input-sm" rows="1" cols="80" style="background-color:#C1FFFA;resize:none;display: block" placeholder=""></textarea>
                            </div>
                            

                            
                            
                            
                            



                         <div class="form-group col-xs-3">
                                <label for="nombre">Refacciones</label>

                                <input id="a4" type="file" name="refacciones_maquina_7" class="form-control input-sm celdaColor">
                            </div>
                            
                           
                            

                        </div>
                        
                        <div class="row">
                             <div class="form-group col-xs-3">
                                                        <label for="nombre">Consumibles</label>

                                                        <input id="a4" type="file" name="consumibles_maquina_7" class="form-control input-sm celdaColor">
                                                    </div>
                        </div>

                        
                        
                        
                        
                        <!-- Máquina 8 -->
                        
                        
                        
                         <div class="row">
                                    <div class="form-group col-xs-4"></div>
                                    <div class="form-group col-xs-4"><label id="lbl_maquina_8" style="display: block"><h3>MÁQUINA 8</h3> </label></div>
                                      <div class="form-group col-xs-4"></div>
                            </div>
                        <div class="row">
                        
                                                  <div class="form-group col-xs-3"> 
                                <label id="lbl_info_maquina_8" style="display: block"> Maquina </label>
                                <textarea name="info_maquina_8"  id="info_maquina_8"  class="form-control input-sm" rows="1" cols="80" style="background-color:#FFFFFF;resize:none;display: block" ></textarea>
                      </div>
                            
                            
                            
                                                        
                     <div class="form-group col-xs-3"> 

                                       <label id="lbl_tipo_maquina_8" style="display: block"> Tipo de máquina  </label>


                           
                                
                                 <select id="maquina_8" style="background-color:#FFFFFF;" name="tipo_maquina_8" class="form-control input-sm">
                                    <option value="">Selecciona una opción</option>
                                   <!-- <option value="Flexo">Flexo</option> -->
                                    <option value="Conversion">Conversion</option>
                                    <option value="Corrugadora">Corrugadora</option>
                                     <OPTION VALUE="FRDC">FRDC</OPTION>
                                    <OPTION VALUE="FFG">FFG</OPTION>
                        
                                </select>
                     </div>
                            
                            
                                                 <div class="form-group col-xs-3"> 
                                <label id="lbl_modelo_maquina_8" style="display: block">Marca </label>
                                
                           
                           <select id="marca_maquina_8" style="background-color:#FFFFFF;" name="modelo_maquina_8" class="form-control input-sm">
                                        <option value="">Selecciona una opción</option>
                            </select>
                            
                            
                             <script>
                        sel8 = document.querySelector("#maquina_8");


                        sel8.addEventListener("change" , function(){  

                                sub8 = document.querySelector("#marca_maquina_8");
                                sub8.innerHTML="";


                                //Datos para el segundo select de ejemplo
                        switch(sel8.value){
                                case "Selecciona una opción":
                                     document.getElementById("troquel_maquina_8").selectedIndex = 0;
                                break;
                                
                                case "Flexo":
                                        array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_8").selectedIndex = 0;
                                break;

                                case "Conversion":
                                        array=["GUNGXIN","HEBEI","HUATAO","JIAJIE","GODSWILL","HAIDAO","JASTU","SRPACK","AOKE"];
                                        document.getElementById("troquel_maquina_8").selectedIndex = 3;
                                break;
                                case "Corrugadora":
                                        array=["TECASA","WANLIAN"];
                                        document.getElementById("troquel_maquina_8").selectedIndex = 3;
                                break;
                                 case "FFG":
                                            array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_8").selectedIndex = 0;
                                break;
                                case "FRDC":
                                       array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_8").selectedIndex = 0;
                                break;
                                
                                default:
                                        console.log(sel8.value);
                                        array=["Selecciona una opción"];
                                }


                                console.log(array);
                                        //Rellena el Select segundo a traves de un array
                                        selectFill8(sub8, array);

                        });


                        //Esta funcion te rellena el Select Secundario
                        function selectFill8(sel8, array){

                                for(v in array){
                                        var option8 = document.createElement("option");
                                        option8.text = array[v];
                                        sel8.add(option8);
                                }
                        }
	</script>


                                
                     </div>
                            
                            
                            
                              <div class="form-group col-xs-3"> 
                                <label id="lbl_medida_maquina_8" style="display: block">Medida  </label>
                     
                                 
                         <SELECT style="background-color:#FFFFFF;resize:block;display: block" name="medida_maquina_8" id="medida_maquina_8"  class="form-control input-sm" > 
                            <optgroup label="Selecciona una opción">
                            <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE='35"'>35"</OPTION>
                                    <OPTION VALUE='50"'>50"</OPTION>
                                    <OPTION VALUE='66"'>66"</OPTION>
                                    <OPTION VALUE="No Aplica">No Aplica</OPTION>	

                            </optgroup>
                        </SELECT>
                                
                                
                         
                                   <input disabled id="medida_maquina_8_temporal"  style="background-color:#C1FFFA;display: none" type="text" class="form-control input-sm"  name="medida_maquina_8">
                                  <input type="checkbox" style="background-color:#FFFFFF;resize:block;display: block" name="check_medida_4" id="check_medida_8" value="1" onchange="javascript:showContentMedida8()" />
                                  <label id="label_medida_8" style="display: block"><p style="color:blue;font-size:12px;">  &nbsp;Selecciona si no aparece</p></label>
                            
                                
                      </div>
                            
                          </div> 
                        
                       
                                                
                        <div class="row">
                            
                                                 <div class="form-group col-xs-3"> 
                            <label id="lbl_troquel_maquina_8" style="display: block"> Troquel  </label>
                              
                            <SELECT style="background-color:#FFFFFF;resize:block;display: block" name="troquel_maquina_8" id="troquel_maquina_8"  class="form-control input-sm" > 
                               <optgroup label="Selecciona una opción">
                                    <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="Sí">Sí</OPTION>
                                    <OPTION VALUE="No">No</OPTION>
                                    <OPTION VALUE="No Aplica">No Aplica</OPTION>

                               </optgroup>
                           </SELECT>
                                
                            </div>
                            
                                                        
                            
                             <div class="form-group col-xs-3"> 
                                <label id="lbl_codigo_cubierta_maquina_8" style="display: block"> Código de cubiertas  </label>
                                <textarea name="codigo_cubierta_maquina_8"  id="codigo_cubierta_maquina_8" class="form-control input-sm" rows="1" cols="80" style="background-color:#FFFFFF;resize:none;display: block" placeholder=""></textarea>
                            </div>
                            
                            
                            <div class="form-group col-xs-3"> 
                                <label id="lbl_cliente_conoce_maquina_8" style="display: block"> Nombre con el que el cliente conoce la máquina  </label>
                                <textarea name="cliente_conoce_maquina_8"  id="cliente_conoce_maquina_8" class="form-control input-sm" rows="1" cols="80" style="background-color:#FFFFFF;resize:none;display: block" placeholder=""></textarea>
                            </div>
                            

                          <div class="form-group col-xs-3">
                                <label for="nombre">Refacciones</label>

                                <input id="a4" type="file" name="refacciones_maquina_8" class="form-control input-sm ">
                            </div>
                            
                           
                            

                        </div>
                        
                        <div class="row">
                             <div class="form-group col-xs-3">
                                                        <label for="nombre">Consumibles</label>

                                                        <input id="a4" type="file" name="consumibles_maquina_8" class="form-control input-sm">
                                                    </div>
                        </div>

                        
                        
                        
                         <div class="row">
                                    <div class="form-group col-xs-4"></div>
                                    <div class="form-group col-xs-4"><label id="lbl_maquina_9" style="display: block"><h3>MÁQUINA 9</h3> </label></div>
                                      <div class="form-group col-xs-4"></div>
                            </div>
                        <div class="row">
                        
                                                  <div class="form-group col-xs-3"> 
                                <label id="lbl_info_maquina_9" style="display: block"> Maquina </label>
                                <textarea name="info_maquina_9"  id="info_maquina_9"  class="form-control input-sm" rows="1" cols="90" style="background-color:#C1FFFA;resize:none;display: block" ></textarea>
                      </div>
                            
                            
                            
                                                        
                     <div class="form-group col-xs-3"> 

                                       <label id="lbl_tipo_maquina_9" style="display: block"> Tipo de máquina  </label>


                           
                                
                                 <select id="maquina_9" style="background-color:#C1FFFA;" name="tipo_maquina_9" class="form-control input-sm">
                                    <option value="">Selecciona una opción</option>
                              <!--  <option value="Flexo">Flexo</option> -->
                                    <option value="Conversion">Conversion</option>
                                    <option value="Corrugadora">Corrugadora</option>
                                     <OPTION VALUE="FRDC">FRDC</OPTION>
                                    <OPTION VALUE="FFG">FFG</OPTION>
                        
                                </select>
                     </div>
                            
                            
                                                 <div class="form-group col-xs-3"> 
                                <label id="lbl_modelo_maquina_9" style="display: block">Marca </label>
                                
                           
                           <select id="marca_maquina_9" style="background-color:#C1FFFA;" name="modelo_maquina_9" class="form-control input-sm">
                                        <option value="">Selecciona una opción</option>
                            </select>
                            
                            
                             <script>
                        sel9 = document.querySelector("#maquina_9");


                        sel9.addEventListener("change" , function(){  

                                sub9 = document.querySelector("#marca_maquina_9");
                                sub9.innerHTML="";


                                //Datos para el segundo select de ejemplo
                        switch(sel9.value){
                                case "Selecciona una opción":
                                     document.getElementById("troquel_maquina_9").selectedIndex = 0;
                                break;
                                
                                case "Flexo":
                                        array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_9").selectedIndex = 0;
                                break;

                                case "Conversion":
                                        array=["GUNGXIN","HEBEI","HUATAO","JIAJIE","GODSWILL","HAIDAO","JASTU","SRPACK","AOKE"];
                                        document.getElementById("troquel_maquina_9").selectedIndex = 3;
                                break;
                                case "Corrugadora":
                                        array=["TECASA","WANLIAN"];
                                        document.getElementById("troquel_maquina_9").selectedIndex = 3;
                                break;
                                 case "FFG":
                                            array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_9").selectedIndex = 0;
                                break;
                                case "FRDC":
                                       array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_9").selectedIndex = 0;
                                break;
                                
                                default:
                                        console.log(sel9.value);
                                        array=["Selecciona una opción"];
                                }


                                console.log(array);
                                        //Rellena el Select segundo a traves de un array
                                        selectFill9(sub9, array);

                        });


                        //Esta funcion te rellena el Select Secundario
                        function selectFill9(sel9, array){

                                for(v in array){
                                        var option9 = document.createElement("option");
                                        option9.text = array[v];
                                        sel9.add(option9);
                                }
                        }
	</script>


                                
                     </div>
                            
                            
                            
                              <div class="form-group col-xs-3"> 
                                <label id="lbl_medida_maquina_9" style="display: block">Medida  </label>
                     
                                 
                         <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="medida_maquina_9" id="medida_maquina_9"  class="form-control input-sm" > 
                            <optgroup label="Selecciona una opción">
                            <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE='35"'>35"</OPTION>
                                    <OPTION VALUE='50"'>50"</OPTION>
                                    <OPTION VALUE='66"'>66"</OPTION>
                                    <OPTION VALUE="No Aplica">No Aplica</OPTION>	

                            </optgroup>
                        </SELECT>
                                
                                
                         
                                   <input disabled id="medida_maquina_9_temporal"  style="background-color:#C1FFFA;display: none" type="text" class="form-control input-sm"  name="medida_maquina_9">
                                  <input type="checkbox" style="background-color:#C1FFFA;resize:block;display: block" name="check_medida_4" id="check_medida_9" value="1" onchange="javascript:showContentMedida9()" />
                                  <label id="label_medida_9" style="display: block"><p style="color:blue;font-size:12px;">  &nbsp;Selecciona si no aparece</p></label>
                            
                                
                      </div>
                            
                          </div> 
                        
                       
                                                
                        <div class="row">
                            
                                                 <div class="form-group col-xs-3"> 
                            <label id="lbl_troquel_maquina_9" style="display: block"> Troquel  </label>
                              
                            <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="troquel_maquina_9" id="troquel_maquina_9"  class="form-control input-sm" > 
                               <optgroup label="Selecciona una opción">
                                    <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="Sí">Sí</OPTION>
                                    <OPTION VALUE="No">No</OPTION>
                                    <OPTION VALUE="No Aplica">No Aplica</OPTION>

                               </optgroup>
                           </SELECT>
                                
                            </div>
                            
                                                        
                            
                             <div class="form-group col-xs-3"> 
                                <label id="lbl_codigo_cubierta_maquina_9" style="display: block"> Código de cubiertas  </label>
                                <textarea name="codigo_cubierta_maquina_9"  id="codigo_cubierta_maquina_9" class="form-control input-sm" rows="1" cols="90" style="background-color:#C1FFFA;resize:none;display: block" placeholder=""></textarea>
                            </div>
                            
                            
                            <div class="form-group col-xs-3"> 
                                <label id="lbl_cliente_conoce_maquina_9" style="display: block"> Nombre con el que el cliente conoce la máquina  </label>
                                <textarea name="cliente_conoce_maquina_9"  id="cliente_conoce_maquina_9" class="form-control input-sm" rows="1" cols="90" style="background-color:#C1FFFA;resize:none;display: block" placeholder=""></textarea>
                            </div>
                            

                         <div class="form-group col-xs-3">
                                <label for="nombre">Refacciones</label>

                                <input id="a4" type="file" name="refacciones_maquina_9" class="form-control input-sm celdaColor">
                            </div>
                            
                           
                            

                        </div>
                        
                        <div class="row">
                             <div class="form-group col-xs-3">
                                                        <label for="nombre">Consumibles</label>

                                                        <input id="a4" type="file" name="consumibles_maquina_9 input-sm" class="form-control ">
                                                    </div>
                        </div>
                        
                        
                        
                        
                         <div class="row">
                                    <div class="form-group col-xs-4"></div>
                                    <div class="form-group col-xs-4"><label id="lbl_maquina_10" style="display: block"><h3>MÁQUINA 10</h3> </label></div>
                                      <div class="form-group col-xs-4"></div>
                            </div>
                        <div class="row">
                        
                                                  <div class="form-group col-xs-3"> 
                                <label id="lbl_info_maquina_10" style="display: block"> Maquina </label>
                                <textarea name="info_maquina_10"  id="info_maquina_10"  class="form-control input-sm" rows="1" cols="100" style="background-color:#FFFFFF;resize:none;display: block" ></textarea>
                      </div>
                            
                            
                            
                                                        
                     <div class="form-group col-xs-3"> 

                                       <label id="lbl_tipo_maquina_10" style="display: block"> Tipo de máquina  </label>


                           
                                
                                 <select id="maquina_10" style="background-color:#FFFFFF;" name="tipo_maquina_10" class="form-control input-sm">
                                    <option value="">Selecciona una opción</option>
                                 <!--   <option value="Flexo">Flexo</option> -->
                                    <option value="Conversion">Conversion</option>
                                    <option value="Corrugadora">Corrugadora</option>
                                     <OPTION VALUE="FRDC">FRDC</OPTION>
                                    <OPTION VALUE="FFG">FFG</OPTION>
                        
                                </select>
                     </div>
                            
                            
                                                 <div class="form-group col-xs-3"> 
                                <label id="lbl_modelo_maquina_10" style="display: block">Marca </label>
                                
                           
                           <select id="marca_maquina_10" style="background-color:#FFFFFF;" name="modelo_maquina_10" class="form-control input-sm">
                                        <option value="">Selecciona una opción</option>
                            </select>
                            
                            
                             <script>
                        sel10 = document.querySelector("#maquina_10");


                        sel10.addEventListener("change" , function(){  

                                sub10 = document.querySelector("#marca_maquina_10");
                                sub10.innerHTML="";


                                //Datos para el segundo select de ejemplo
                        switch(sel10.value){
                                case "Selecciona una opción":
                                     document.getElementById("troquel_maquina_10").selectedIndex = 0;
                                break;
                                
                                case "Flexo":
                                        array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_10").selectedIndex = 0;
                                break;

                                case "Conversion":
                                        array=["GUNGXIN","HEBEI","HUATAO","JIAJIE","GODSWILL","HAIDAO","JASTU","SRPACK","AOKE"];
                                        document.getElementById("troquel_maquina_10").selectedIndex = 3;
                                break;
                                case "Corrugadora":
                                        array=["TECASA","WANLIAN"];
                                        document.getElementById("troquel_maquina_10").selectedIndex = 3;
                                break;
                                 case "FFG":
                                            array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_10").selectedIndex = 0;
                                break;
                                case "FRDC":
                                       array=[ "FLYDRAGON","ISOWA","KL","CURIONI ","DING LONG","EMBA","GÖPFERT","HOOPER","HUALI","HUATAO","KOOPER","MACARBOX","MARTIN","MARVI","SRPACK","STALEY","TECASA","WARD","SIMON"];
                                        document.getElementById("troquel_maquina_10").selectedIndex = 0;
                                break;
                                
                                default:
                                        console.log(sel10.value);
                                        array=["Selecciona una opción"];
                                }


                                console.log(array);
                                        //Rellena el Select segundo a traves de un array
                                        selectFill10(sub10, array);

                        });


                        //Esta funcion te rellena el Select Secundario
                        function selectFill10(sel10, array){

                                for(v in array){
                                        var option10 = document.createElement("option");
                                        option10.text = array[v];
                                        sel10.add(option10);
                                }
                        }
	</script>


                                
                     </div>
                            
                            
                            
                              <div class="form-group col-xs-3"> 
                                <label id="lbl_medida_maquina_10" style="display: block">Medida  </label>
                     
                                 
                         <SELECT style="background-color:#FFFFFF;resize:block;display: block" name="medida_maquina_10" id="medida_maquina_10"  class="form-control input-sm" > 
                            <optgroup label="Selecciona una opción">
                            <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE='35"'>35"</OPTION>
                                    <OPTION VALUE='50"'>50"</OPTION>
                                    <OPTION VALUE='66"'>66"</OPTION>
                                    <OPTION VALUE="No Aplica">No Aplica</OPTION>	

                            </optgroup>
                        </SELECT>
                                
                                
                         
                                   <input disabled id="medida_maquina_10_temporal"  style="background-color:#FFFFFF;display: none" type="text" class="form-control input-sm"  name="medida_maquina_10">
                                  <input type="checkbox" style="background-color:#C1FFFA;resize:block;display: block" name="check_medida_4" id="check_medida_10" value="1" onchange="javascript:showContentMedida10()" />
                                  <label id="label_medida_10" style="display: block"><p style="color:blue;font-size:12px;">  &nbsp;Selecciona si no aparece</p></label>
                            
                                
                      </div>
                            
                          </div> 
                        
                       
                                                
                        <div class="row">
                            
                                                 <div class="form-group col-xs-3"> 
                            <label id="lbl_troquel_maquina_10" style="display: block"> Troquel  </label>
                              
                            <SELECT style="background-color:#FFFFFF;resize:block;display: block" name="troquel_maquina_10" id="troquel_maquina_10"  class="form-control input-sm" > 
                               <optgroup label="Selecciona una opción">
                                    <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="Sí">Sí</OPTION>
                                    <OPTION VALUE="No">No</OPTION>
                                    <OPTION VALUE="No Aplica">No Aplica</OPTION>

                               </optgroup>
                           </SELECT>
                                
                            </div>
                            
                                                        
                            
                             <div class="form-group col-xs-3"> 
                                <label id="lbl_codigo_cubierta_maquina_10" style="display: block"> Código de cubiertas  </label>
                                <textarea name="codigo_cubierta_maquina_10"  id="codigo_cubierta_maquina_10" class="form-control input-sm" rows="1" cols="100" style="background-color:#FFFFFF;resize:none;display: block" placeholder=""></textarea>
                            </div>
                            
                            
                            <div class="form-group col-xs-3"> 
                                <label id="lbl_cliente_conoce_maquina_10" style="display: block"> Nombre con el que el cliente conoce la máquina  </label>
                                <textarea name="cliente_conoce_maquina_10"  id="cliente_conoce_maquina_10" class="form-control input-sm" rows="1" cols="100" style="background-color:#FFFFFF;resize:none;display: block" placeholder=""></textarea>
                            </div>
                            

                         <div class="form-group col-xs-3">
                                <label for="nombre">Refacciones</label>

                                <input id="a4" type="file" name="refacciones_maquina_10" class="form-control input-sm">
                            </div>
                            
                           
                            

                        </div>
                        
                        <div class="row">
                             <div class="form-group col-xs-3">
                                                        <label for="nombre">Consumibles</label>

                                                        <input id="a4" type="file" name="consumibles_maquina_10" class="form-control input-sm">
                                                    </div>
                        </div>


                 </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    





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
=======
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-6"> 
                                <label id="lbl_info_maquina_1" style="display: none">Maquina 1  </label>
                                <textarea name="info_maquina_1" id="info_maquina_1" class="form-control input-sm" rows="3" cols="80" style="resize:none;display: none" placeholder="Ingresa marca , modelo y medida de la máquina"></textarea>
                            </div>

                            <div class="form-group col-xs-6"> 
                                <label id="lbl_info_maquina_2" style="display: none">Maquina 2  </label>
                                <textarea name="info_maquina_2" id="info_maquina_2" class="form-control input-sm" rows="3" cols="80" style="resize:none;display: none" placeholder="Ingresa marca , modelo y medida de la máquina"></textarea>
                            </div>
                        </div>




                        <div class="row">
                            <div class="form-group col-xs-6"> 
                                <label id="lbl_info_maquina_3" style="display: none">Maquina 3  </label>
                                <textarea name="info_maquina_3" id="info_maquina_3" class="form-control input-sm" rows="3" cols="80" style="resize:none;display: none" placeholder="Ingresa marca , modelo y medida de la máquina"></textarea>
                            </div>



                            <div class="form-group col-xs-6"> 
                                <label id="lbl_info_maquina_4" style="display: none">Maquina 4  </label>
                                <textarea name="info_maquina_4" id="info_maquina_4" class="form-control input-sm" rows="3" cols="80" style="resize:none;display: none" placeholder="Ingresa marca , modelo y medida de la máquina"></textarea>
                            </div>
                        </div>


                        <div class="row">
                            <div class="form-group col-xs-6"> 
                                <label id="lbl_info_maquina_5" style="display: none">Maquina 5  </label>
                                <textarea name="info_maquina_5" id="info_maquina_5" class="form-control input-sm" rows="3" cols="80" style="resize:none;display: none" placeholder="Ingresa marca , modelo y medida de la máquina"></textarea>
                            </div>


                            <div class="form-group col-xs-6"> 
                                <label id="lbl_info_maquina_6" style="display: none">Maquina 6  </label>
                                <textarea name="info_maquina_6" id="info_maquina_6" class="form-control input-sm" rows="3" cols="80" style="resize:none;display: none" placeholder="Ingresa marca , modelo y medida de la máquina"></textarea>
                            </div>
                        </div>


                        <div class="row">
                            <div class="form-group col-xs-6"> 
                                <label id="lbl_info_maquina_7" style="display: none">Maquina 7 </label>
                                <textarea name="info_maquina_7" id="info_maquina_7" class="form-control input-sm" rows="3" cols="80" style="resize:none;display: none" placeholder="Ingresa marca , modelo y medida de la máquina"></textarea>
                            </div>
                        </div>




                    </div>










>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606














                    <center>
<<<<<<< HEAD
                        <input id="botonOrden" class="btn btn-success" type="submit" value="Agregar" data-toggle="tooltip" data-placement="right" title="Da clic para guardar los datos">
=======
                        <input class="btn btn-success" type="submit" value="Agregar" data-toggle="tooltip" data-placement="right" title="Da clic para guardar los datos">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                        <a title="Da clic para regresar al menú" href="javascript:window.history.go(-1);"class="btn btn-danger">Cancelar</a></center>
            </div>
        </form>
    </div> 

    <!--
        <input type="submit" name="submit" value="Agregar" class="btn btn-success">
        <a title="Da clic para regresar" href="javascript:window.history.go(-1);"class="btn btn-danger">Cancelar</a>-->











































    <!-- END KONTEN UTAMA -->

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
<<<<<<< HEAD
    
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

        
        
=======

</body>
</html>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
