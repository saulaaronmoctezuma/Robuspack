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


            } else if (getSelectValue === "1") {
                // document.getElementById("nombre_dueno").disabled = true;
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


            }
            else if (getSelectValue === "3") {

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
                                <select required id="grupo"  class="form-control"  name="grupo"  <?php echo form_dropdown('grupoCombo', $grupoCombo, '#', 'id="grupoCombo"'); ?> </select>
                            </div>



                            <div class="form-group col-xs-6" id="div_empresa_temporal" style="display: none;"  >
                                <label for="nombre">Empresa </label>
                                <input id="empresa_temporal" type="text" class="form-control"  name="empresa_temporal" placeholder="Ingresa el nombre de la empresa">
                            </div>

                            <div class="form-group col-xs-6" id="div_empresa">
                                <label for="nombre">Empresa</label>
                                <select required id="cliente" class="form-control"  name="empresa" <?php echo form_dropdown('clienteCombo', $clienteCombo, '#', 'id="clienteCombo"'); ?> </select>
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


                            <div class="form-group col-xs-6">
                                <label for="nombre">Tipo de Cliente </label>
                                <input id="tipo_de_cliente" type="text" class="form-control form-control-sm"  name="tipo_de_cliente" placeholder="Ingresa el tipo de cliente">
                            </div>


                            <div class="form-group col-xs-6">
                                <label for="nombre">Tamaño del Cliente </label>
                                <input id="tamano_cliente" type="text" class="form-control form-control-sm"  name="tamano_cliente" placeholder="Ingresa el  de tamano_cliente">
                            </div>



                        </div>



                        <br>

                        <div class="row">

                            <div class="form-group col-xs-6">
                                <label for="nombre">Asesor </label>
                                <input id="asesor" type="text" class="form-control form-control-sm"  name="asesor" placeholder="Ingresa el asesor">
                            </div>

                            <div class="form-group col-xs-6">
                                <label for="nombre">Estatus Cliente </label>
                                <input id="estatus_cliente" type="text" class="form-control form-control-sm"  name="estatus_cliente" placeholder="Ingresa el estatus cliente">
                            </div>


                        </div>
                        <br>
                        <div class="row">




                            <div class="form-group col-xs-6">
                                <label for="nombre">Tipo Mercado</label>
                                <input id="tipo_mercado" type="text" class="form-control form-control-sm"  name="tipo_mercado" placeholder="Ingresa el tipo mercado">
                            </div>


                            <div class="form-group col-xs-6">
                                <label for="nombre">Volumen producción</label>
                                <input id="volumen_produccion" type="text" class="form-control form-control-sm"  name="volumen_produccion" placeholder="Ingresa el volumen produccion">
                            </div>

                        </div>


                        <br>

                        <div class="row">





                            <div class="form-group col-xs-6">
                                <label for="nombre">Necesidad</label>
                                <input id="necesidad" type="text" class="form-control form-control-sm"  name="necesidad" placeholder="Ingresa la necesidad">
                            </div>

                            <div class="form-group col-xs-6">
                                <label for="nombre">Compromiso</label>
                                <input id="compromiso" type="text" class="form-control form-control-sm"  name="compromiso" placeholder="Ingresa el compromiso">
                            </div>

                        </div>


                        <br>

                        <div class="row">





                            <div class="form-group col-xs-6">
                                <label for="nombre">Notas </label>
                                <input id="notas" type="text" class="form-control form-control-sm"  name="notas" placeholder="Ingresa las notas">
                            </div>

                            <div class="form-group col-xs-6">
                                <label for="nombre">Refacciones </label>
                                <input id="refacciones" type="text" class="form-control form-control-sm"  name="refacciones" placeholder="Ingresa la lista de refacciones">
                            </div>

                        </div>


                        <br>
                        <div class="row">





                            <div class="form-group col-xs-6">
                                <label for="nombre">¿Tiene corrugadora? </label>
                                <select name="corrugadora" class="form-control input-sm">
                                    <option  value="">Selecciona una opción</option>
                                    <OPTION VALUE="Sí">Sí</OPTION>
                                    <OPTION VALUE="No">No</OPTION>

                                </select>
                            </div>

                        </div>


                    </div>



















                    <div class="jumbotron">

                        <div class="row">
                            <div class="form-group col-xs-6">
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
                                <input id="correo_personal_dueno" style="display: none" type="text" class="form-control form-control-sm"  name="correo_personal_dueno" placeholder="Ingresa el correo personal">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_dueno" style="display: none" >Correo Empresarial </label>
                                <input id="correo_empresarial_dueno" style="display: none" type="text" class="form-control form-control-sm"  name="correo_empresarial_dueno" placeholder="Ingresa el correo empresarial">

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
                                <input id="correo_personal_ceo" style="display: none" type="text" class="form-control form-control-sm"  name="correo_personal_ceo" placeholder="Ingresa el correo personal">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_ceo" style="display: none" >Correo Empresarial </label>
                                <input id="correo_empresarial_ceo" style="display: none" type="text" class="form-control form-control-sm"  name="correo_empresarial_ceo" placeholder="Ingresa el correo empresarial">

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
                                <input id="correo_personal_gerente" style="display: none" type="text" class="form-control form-control-sm"  name="correo_personal_gerente" placeholder="Ingresa el correo personal">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_gerente" style="display: none" >Correo Empresarial </label>
                                <input id="correo_empresarial_gerente" style="display: none" type="text" class="form-control form-control-sm"  name="correo_empresarial_gerente" placeholder="Ingresa el correo empresarial">

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
                                <input id="correo_personal_produccion" style="display: none" type="text" class="form-control form-control-sm"  name="correo_personal_produccion" placeholder="Ingresa el correo personal">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_produccion" style="display: none" >Correo Empresarial </label>
                                <input id="correo_empresarial_produccion" style="display: none" type="text" class="form-control form-control-sm"  name="correo_empresarial_produccion" placeholder="Ingresa el correo empresarial">

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
                                <input id="correo_personal_mtto" style="display: none" type="text" class="form-control form-control-sm"  name="correo_personal_mtto" placeholder="Ingresa el correo personal">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_mtto" style="display: none" >Correo Empresarial </label>
                                <input id="correo_empresarial_mtto" style="display: none" type="text" class="form-control form-control-sm"  name="correo_empresarial_mtto" placeholder="Ingresa el correo empresarial">

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
                                <input id="correo_personal_compras" style="display: none" type="text" class="form-control form-control-sm"  name="correo_personal_compras" placeholder="Ingresa el correo personal">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_compras" style="display: none" >Correo Empresarial </label>
                                <input id="correo_empresarial_compras" style="display: none" type="text" class="form-control form-control-sm"  name="correo_empresarial_compras" placeholder="Ingresa el correo empresarial">

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
                                <input id="correo_personal_ventas" style="display: none" type="text" class="form-control form-control-sm"  name="correo_personal_ventas" placeholder="Ingresa el correo personal">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_ventas" style="display: none" >Correo Empresarial </label>
                                <input id="correo_empresarial_ventas" style="display: none" type="text" class="form-control form-control-sm"  name="correo_empresarial_ventas" placeholder="Ingresa el correo empresarial">

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
                                <input id="correo_personal_otros" style="display: none" type="text" class="form-control form-control-sm"  name="correo_personal_otros" placeholder="Ingresa el correo personal">

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_otros" style="display: none" >Correo Empresarial </label>
                                <input id="correo_empresarial_otros" style="display: none" type="text" class="form-control form-control-sm"  name="correo_empresarial_otros" placeholder="Ingresa el correo empresarial">

                            </div>
                        </div>











                    </div>


                    <div class="jumbotron">



                        <div class="row">
                            <div class="form-group col-xs-4"></div>
                            <div class="form-group col-xs-4">
                                <label for="nombre">Máquinas a agregar </label>
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
























                    <center>
                        <input class="btn btn-success" type="submit" value="Agregar" data-toggle="tooltip" data-placement="right" title="Da clic para guardar los datos">

                        <a title="Da clic para regresar al menú" href="javascript:window.history.go(-1);"class="btn btn-danger">Cancelar</a></center>
            </div>
        </form>
    </div> 

    <!--
        <input type="submit" name="submit" value="Agregar" class="btn btn-success">
        <a title="Da clic para regresar" href="javascript:window.history.go(-1);"class="btn btn-danger">Cancelar</a>-->











































    <!-- END KONTEN UTAMA -->

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>

</body>
</html>
