<<<<<<< HEAD

=======
<!--
 * @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 25/26/2019 Hora 10:32 am
Fecha : Ultimo Cambio 26/26/2019 Hora 12:36 Pm
 * Sistema de Control Robuspack
 */-->
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
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
<<<<<<< HEAD
    
      <style>
                                                
                                                
                                                .borrarStyle:hover
{
            background-color:yellow
}


    body {
        
        font-size: 11px;
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



<<<<<<< HEAD
        
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        function agregarMaquina()
        {
            getSelectValue = document.getElementById("maquina").value;
            if (getSelectValue === "") {
<<<<<<< HEAD
                
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
                document.getElementById("lbl_info_maquina_1").style.display = "inline-block";
                document.getElementById("info_maquina_1").style.display = "inline-block";
<<<<<<< HEAD
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

                

=======

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


            } else if (getSelectValue === "2") {

<<<<<<< HEAD
             
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
                
                
                
                
               

            
              
=======
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

                document.getElementById("lbl_info_maquina_1").style.display = "inline-block";
                document.getElementById("info_maquina_1").style.display = "inline-block";
                document.getElementById("lbl_info_maquina_2").style.display = "inline-block";
                document.getElementById("info_maquina_2").style.display = "inline-block";
                document.getElementById("lbl_info_maquina_3").style.display = "inline-block";
                document.getElementById("info_maquina_3").style.display = "inline-block";
<<<<<<< HEAD
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


            } else if (getSelectValue === "4") {

<<<<<<< HEAD
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
=======
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
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606


            } else if (getSelectValue === "6") {

<<<<<<< HEAD
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
            
            
=======
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
    </script>

    <body>
        <div id="maquinaria">
            <form action="<?= base_url() ?>CensoMaquinaria/updatedata" method="post" enctype="multipart/form-data">

                <MARQUEE SCROLLDELAY =200></MARQUEE>
                <div class="container" ><h1>Actualizar datos</h1>





                    <div class="jumbotron">



                        <br>
                        <div class="row"> 
                            
<<<<<<< HEAD
                    <!--          <input type="text" name="empresa_temporal" value="<?= $data->empresa_temporal ?>">
                
                <input type="text" name="grupo_temporal" value="<?= $data->grupo_temporal ?>">ID -->
<!--
=======
                             <input type="hidden" name="empresa_temporal" value="<?= $data->empresa_temporal ?>">
                <!-- ID -->
                <input type="hidden" name="grupo_temporal" value="<?= $data->grupo_temporal ?>">

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            <div class="form-group col-xs-6">



                                <label>Grupo</label>
                                <input id="grupo" type="text" class="form-control"  value="<?= $data->grupo ?>" name="grupo" placeholder="Ingresa el nombre de la grupo">

                            </div>

                            <div class="form-group col-xs-6">
                                <label for="nombre">Empresa </label>
                                
                                
                                <input id="empresa" type="text" class="form-control" value="<?= $data->empresa ?>"  name="empresa" placeholder="Ingresa el nombre de la empresa">
<<<<<<< HEAD
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
                
                
                
                
                
                
      
=======
                            </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606



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


<<<<<<< HEAD
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
                            
                            
=======
                            <div class="form-group col-xs-6">
                                <label for="nombre">Tipo de Cliente </label>
                                <input id="tipo_de_cliente" type="text" value="<?= $data->tipo_de_cliente ?>" class="form-control form-control-sm"  name="tipo_de_cliente" placeholder="Ingresa el tipo de cliente">
                            </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606


                            <div class="form-group col-xs-6">
                                <label for="nombre">Tamaño del Cliente </label>
                                <input id="tamano_cliente" type="text" value="<?= $data->tamano_cliente ?>" class="form-control form-control-sm"  name="tamano_cliente" placeholder="Ingresa el  de tamano_cliente">
                            </div>



                        </div>



                        <br>

                        <div class="row">

<<<<<<< HEAD
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
                                         <option value="Rocio" <?php if($data->asesor_maquinaria == "Rocio"){echo "Selected";} ?>>Rocio</option>
                                          <option value="Edson" <?php if($data->asesor_maquinaria == "Edson"){echo "Selected";} ?>>Edson</option>
                                        <option value="Ignacio"<?php if($data->asesor_maquinaria =="Ignacio") {echo "Selected";} ?> >Ignacio Hernández</option>
                                        <option value="Sergio"<?php if($data->asesor_maquinaria =="Sergio") {echo "Selected";} ?> >Sergio Peñafiel</option>
                                       
                                        
                                    </optgroup>
                                </select>
                                
                            </div>
                            
                         

=======
                            <div class="form-group col-xs-6">
                                <label for="nombre">Asesor </label>
                                <input id="asesor" type="text" value="<?= $data->asesor ?>" class="form-control form-control-sm"  name="asesor" placeholder="Ingresa el asesor">
                            </div>

                            <div class="form-group col-xs-6">
                                <label for="nombre">Estatus Cliente </label>
                                <input id="estatus_cliente" value="<?= $data->estatus_cliente ?>" type="text" class="form-control form-control-sm"  name="estatus_cliente" placeholder="Ingresa el estatus cliente">
                            </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606


                        </div>
                        <br>
                        <div class="row">

<<<<<<< HEAD
                            
                            <div class="form-group col-xs-6">
                                <label for="nombre">Estatus Cliente </label>
                                <input id="estatus_cliente" value="<?= $data->estatus_cliente ?>" type="text" class="form-control form-control-sm"  name="estatus_cliente" placeholder="Ingresa el estatus cliente">
                            </div>
        
=======


>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            <div class="form-group col-xs-6">
                                <label for="nombre">Tipo Mercado </label>
                                <input id="tipo_mercado" value="<?= $data->tipo_mercado ?>" type="text" class="form-control form-control-sm"  name="tipo_mercado" placeholder="Ingresa el tipo mercado">
                            </div>


<<<<<<< HEAD
                           
=======
                            <div class="form-group col-xs-6">
                                <label for="nombre">Volumen producccion </label>
                                <input id="volumen_produccion" value="<?= $data->volumen_produccion ?>" type="text" class="form-control form-control-sm"  name="volumen_produccion" placeholder="Ingresa el volumen produccion">
                            </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                        </div>


                        <br>

                        <div class="row">
<<<<<<< HEAD
                             <div class="form-group col-xs-6">
                                <label for="nombre">Volumen producccion </label>
                                <input id="volumen_produccion" value="<?= $data->volumen_produccion ?>" type="text" class="form-control form-control-sm"  name="volumen_produccion" placeholder="Ingresa el volumen produccion">
                            </div>

    
=======



>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606


                            <div class="form-group col-xs-6">
                                <label for="nombre">Necesidad </label>
                                <input id="necesidad" type="text" value="<?= $data->necesidad ?>" class="form-control form-control-sm"  name="necesidad" placeholder="Ingresa la necesidad">
                            </div>

<<<<<<< HEAD
                           
=======
                            <div class="form-group col-xs-6">
                                <label for="nombre">Compromiso </label>
                                <input id="compromiso" type="text" value="<?= $data->compromiso ?>" class="form-control form-control-sm"  name="compromiso" placeholder="Ingresa el compromiso">
                            </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                        </div>


                        <br>

                        <div class="row">


<<<<<<< HEAD
                             <div class="form-group col-xs-6">
                                <label for="nombre">Compromiso </label>
                                <input id="compromiso" type="text" value="<?= $data->compromiso ?>" class="form-control form-control-sm"  name="compromiso" placeholder="Ingresa el compromiso">
                            </div>
=======

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606


                            <div class="form-group col-xs-6">
                                <label for="nombre">Notas </label>
                                <input id="notas" type="text" value="<?= $data->notas ?>" class="form-control form-control-sm"  name="notas" placeholder="Ingresa las notas">
                            </div>

<<<<<<< HEAD
                           
=======
                            <div class="form-group col-xs-6">
                                <label for="nombre">Refacciones </label>
                                <input id="refacciones" type="text" value="<?= $data->refacciones ?>" class="form-control form-control-sm"  name="refacciones" placeholder="Ingresa la lista de refacciones">
                            </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                        </div>


                        <br>
                        <div class="row">

<<<<<<< HEAD
                             <div class="form-group col-xs-6">
                                <label for="nombre">Refacciones </label>
                                <input id="refacciones" type="text" value="<?= $data->refacciones ?>" class="form-control form-control-sm"  name="refacciones" placeholder="Ingresa la lista de refacciones">
                            </div>
=======

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606



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
<<<<<<< HEAD
                           
                            

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
                        
=======

                        </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606


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
<<<<<<< HEAD
                                <input id="nombre_dueno" value="<?= $data->nombre_dueno ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_dueno" placeholder1="Ingresa el nombre">
=======
                                <input id="nombre_dueno" value="<?= $data->nombre_dueno ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_dueno" placeholder="Ingresa el nombre">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_celular_dueno" style="display: none">Celular  </label>
<<<<<<< HEAD
                                <input id="celular_dueno" value="<?= $data->celular_dueno ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_dueno" placeholder1="Ingresa el celular">
=======
                                <input id="celular_dueno" value="<?= $data->celular_dueno ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_dueno" placeholder="Ingresa el celular">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                        </div>





                        <div class="row">
                            <div class="form-group col-xs-6"> 

                                <label id="lbl_correo_personal_dueno" style="display: none">Correo Personal </label>
<<<<<<< HEAD
                                <input id="correo_personal_dueno" value="<?= $data->correo_personal_dueno ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_dueno" placeholder1="Ingresa el correo personal">
=======
                                <input id="correo_personal_dueno" value="<?= $data->correo_personal_dueno ?>" style="display: none" type="text" class="form-control form-control-sm"  name="correo_personal_dueno" placeholder="Ingresa el correo personal">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_dueno" style="display: none" >Correo Empresarial </label>
<<<<<<< HEAD
                                <input id="correo_empresarial_dueno" value="<?= $data->correo_empresarial_dueno ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_dueno" placeholder1="Ingresa el correo empresarial">
=======
                                <input id="correo_empresarial_dueno" value="<?= $data->correo_empresarial_dueno ?>" style="display: none" type="text" class="form-control form-control-sm"  name="correo_empresarial_dueno" placeholder="Ingresa el correo empresarial">
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
<<<<<<< HEAD
                                <input id="nombre_ceo" value="<?= $data->nombre_ceo ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_ceo" placeholder1="Ingresa el nombre">
=======
                                <input id="nombre_ceo" value="<?= $data->nombre_ceo ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_ceo" placeholder="Ingresa el nombre">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_celular_ceo" style="display: none">Celular  </label>
<<<<<<< HEAD
                                <input id="celular_ceo" value="<?= $data->celular_ceo ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_ceo" placeholder1="Ingresa el celular">
=======
                                <input id="celular_ceo" value="<?= $data->celular_ceo ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_ceo" placeholder="Ingresa el celular">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                        </div>





                        <div class="row">
                            <div class="form-group col-xs-6"> 

                                <label id="lbl_correo_personal_ceo" style="display: none">Correo Personal </label>
<<<<<<< HEAD
                                <input id="correo_personal_ceo" value="<?= $data->correo_personal_ceo ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_ceo" placeholder1="Ingresa el correo personal">
=======
                                <input id="correo_personal_ceo" value="<?= $data->correo_personal_ceo ?>" style="display: none" type="text" class="form-control form-control-sm"  name="correo_personal_ceo" placeholder="Ingresa el correo personal">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_ceo" style="display: none" >Correo Empresarial </label>
<<<<<<< HEAD
                                <input id="correo_empresarial_ceo" value="<?= $data->correo_empresarial_ceo ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_ceo" placeholder1="Ingresa el correo empresarial">
=======
                                <input id="correo_empresarial_ceo" value="<?= $data->correo_empresarial_ceo ?>" style="display: none" type="text" class="form-control form-control-sm"  name="correo_empresarial_ceo" placeholder="Ingresa el correo empresarial">
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
<<<<<<< HEAD
                                <input id="nombre_gerente" value="<?= $data->correo_empresarial_gerente ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_gerente" placeholder1="1Ingresa el nombre">
=======
                                <input id="nombre_gerente" value="<?= $data->correo_empresarial_ceo ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_gerente" placeholder="Ingresa el nombre">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_celular_gerente" style="display: none">Celular  </label>
<<<<<<< HEAD
                                <input id="celular_gerente" value="<?= $data->celular_gerente ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_gerente" placeholder1="Ingresa el celular">
=======
                                <input id="celular_gerente" value="<?= $data->celular_gerente ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_gerente" placeholder="Ingresa el celular">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                        </div>





                        <div class="row">
                            <div class="form-group col-xs-6"> 

                                <label id="lbl_correo_personal_gerente" style="display: none">Correo Personal </label>
<<<<<<< HEAD
                                <input id="correo_personal_gerente" value="<?= $data->correo_personal_gerente ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_gerente" placeholder1="Ingresa el correo personal">
=======
                                <input id="correo_personal_gerente" value="<?= $data->correo_personal_gerente ?>" style="display: none" type="text" class="form-control form-control-sm"  name="correo_personal_gerente" placeholder="Ingresa el correo personal">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_gerente" style="display: none" >Correo Empresarial </label>
<<<<<<< HEAD
                                <input id="correo_empresarial_gerente" value="<?= $data->correo_empresarial_gerente ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_gerente" placeholder1="Ingresa el correo empresarial">
=======
                                <input id="correo_empresarial_gerente" value="<?= $data->correo_empresarial_gerente ?>" style="display: none" type="text" class="form-control form-control-sm"  name="correo_empresarial_gerente" placeholder="Ingresa el correo empresarial">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                        </div>





                        <center> 
                            <label id="produccion" style="display: none" class="font-weight-bold"><h3>

<<<<<<< HEAD
                                    DATOS DE PRODUCCION
=======
                                    DATOS DEL PRODUCCION
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                                </h3></label></center>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label id="lbl_nombre_produccion" style="display: none">Nombre </label>
<<<<<<< HEAD
                                <input id="nombre_produccion" value="<?= $data->nombre_produccion ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_produccion" placeholder1="Ingresa el nombre">
=======
                                <input id="nombre_produccion" value="<?= $data->correo_empresarial_gerente ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_produccion" placeholder="Ingresa el nombre">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_celular_produccion" style="display: none">Celular  </label>
<<<<<<< HEAD
                                <input id="celular_produccion" value="<?= $data->celular_produccion ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_produccion" placeholder1="Ingresa el celular">
=======
                                <input id="celular_produccion" value="<?= $data->celular_produccion ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_produccion" placeholder="Ingresa el celular">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                        </div>





                        <div class="row">
                            <div class="form-group col-xs-6"> 

                                <label id="lbl_correo_personal_produccion" style="display: none">Correo Personal </label>
<<<<<<< HEAD
                                <input id="correo_personal_produccion" value="<?= $data->correo_personal_produccion ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_produccion" placeholder1="Ingresa el correo personal">
=======
                                <input id="correo_personal_produccion" value="<?= $data->correo_personal_produccion ?>" style="display: none" type="text" class="form-control form-control-sm"  name="correo_personal_produccion" placeholder="Ingresa el correo personal">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_produccion" style="display: none" >Correo Empresarial </label>
<<<<<<< HEAD
                                <input id="correo_empresarial_produccion" value="<?= $data->correo_empresarial_produccion ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_produccion" placeholde1r="Ingresa el correo empresarial">
=======
                                <input id="correo_empresarial_produccion" value="<?= $data->correo_empresarial_produccion ?>" style="display: none" type="text" class="form-control form-control-sm"  name="correo_empresarial_produccion" placeholder="Ingresa el correo empresarial">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                        </div>



                        <center> 
                            <label id="mtto" style="display: none" class="font-weight-bold"><h3>

<<<<<<< HEAD
                                    DATOS DEL ENCARGADO DE MTTO
=======
                                    DATOS DEL MTTO
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                                </h3></label></center>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label id="lbl_nombre_mtto" style="display: none">Nombre </label>
<<<<<<< HEAD
                                <input id="nombre_mtto" value="<?= $data->nombre_mtto ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_mtto" placeholder1="Ingresa el nombre">
=======
                                <input id="nombre_mtto" value="<?= $data->nombre_mtto ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_mtto" placeholder="Ingresa el nombre">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_celular_mtto" style="display: none">Celular  </label>
<<<<<<< HEAD
                                <input id="celular_mtto" value="<?= $data->celular_mtto ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_mtto" placeholder1="Ingresa el celular">
=======
                                <input id="celular_mtto" value="<?= $data->celular_mtto ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_mtto" placeholder="Ingresa el celular">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                        </div>





                        <div class="row">
                            <div class="form-group col-xs-6"> 

                                <label id="lbl_correo_personal_mtto" style="display: none">Correo Personal </label>
<<<<<<< HEAD
                                <input id="correo_personal_mtto" value="<?= $data->correo_personal_mtto ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_mtto" placeholder1="Ingresa el correo personal">
=======
                                <input id="correo_personal_mtto" value="<?= $data->correo_personal_mtto ?>" style="display: none" type="text" class="form-control form-control-sm"  name="correo_personal_mtto" placeholder="Ingresa el correo personal">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_mtto" style="display: none" >Correo Empresarial </label>
<<<<<<< HEAD
                                <input id="correo_empresarial_mtto" value="<?= $data->correo_empresarial_mtto ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_mtto" placeholder1="Ingresa el correo empresarial">
=======
                                <input id="correo_empresarial_mtto" value="<?= $data->correo_empresarial_mtto ?>" style="display: none" type="text" class="form-control form-control-sm"  name="correo_empresarial_mtto" placeholder="Ingresa el correo empresarial">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                        </div>



                        <center> 
                            <label id="compras" style="display: none" class="font-weight-bold"><h3>

<<<<<<< HEAD
                                    DATOS DEL ENCARGADO COMPRAS
=======
                                    DATOS DEL COMPRAS
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                                </h3></label></center>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label id="lbl_nombre_compras" style="display: none">Nombre </label>
<<<<<<< HEAD
                                <input id="nombre_compras" value="<?= $data->nombre_compras ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_compras" placeholder1="Ingresa el nombre">
=======
                                <input id="nombre_compras" value="<?= $data->nombre_compras ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_compras" placeholder="Ingresa el nombre">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_celular_compras" style="display: none">Celular  </label>
<<<<<<< HEAD
                                <input id="celular_compras" value="<?= $data->celular_compras ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_compras" placeholder1="Ingresa el celular">
=======
                                <input id="celular_compras" value="<?= $data->celular_compras ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_compras" placeholder="Ingresa el celular">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                        </div>





                        <div class="row">
                            <div class="form-group col-xs-6"> 

                                <label id="lbl_correo_personal_compras" style="display: none">Correo Personal </label>
<<<<<<< HEAD
                                <input id="correo_personal_compras" value="<?= $data->correo_personal_compras ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_compras" placeholder1="Ingresa el correo personal">
=======
                                <input id="correo_personal_compras" value="<?= $data->correo_personal_compras ?>" style="display: none" type="text" class="form-control form-control-sm"  name="correo_personal_compras" placeholder="Ingresa el correo personal">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_compras" style="display: none" >Correo Empresarial </label>
<<<<<<< HEAD
                                <input id="correo_empresarial_compras" value="<?= $data->correo_empresarial_compras ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_compras" placeholder1="Ingresa el correo empresarial">
=======
                                <input id="correo_empresarial_compras" value="<?= $data->correo_empresarial_compras ?>" style="display: none" type="text" class="form-control form-control-sm"  name="correo_empresarial_compras" placeholder="Ingresa el correo empresarial">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                        </div>



                        <center> 
                            <label id="ventas" style="display: none" class="font-weight-bold"><h3>

<<<<<<< HEAD
                                    DATOS DE ENCARGADO DE VENTAS
=======
                                    DATOS DEL VENTAS
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                                </h3></label></center>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label id="lbl_nombre_ventas" style="display: none">Nombre </label>
<<<<<<< HEAD
                                <input id="nombre_ventas" value="<?= $data->nombre_ventas ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_ventas" placeholder1="Ingresa el nombre">
=======
                                <input id="nombre_ventas" value="<?= $data->nombre_ventas ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_ventas" placeholder="Ingresa el nombre">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_celular_ventas" style="display: none">Celular  </label>
<<<<<<< HEAD
                                <input id="celular_ventas" value="<?= $data->celular_ventas ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_ventas" placeholder1="Ingresa el celular">
=======
                                <input id="celular_ventas" value="<?= $data->celular_ventas ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_ventas" placeholder="Ingresa el celular">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                        </div>





                        <div class="row">
                            <div class="form-group col-xs-6"> 

                                <label id="lbl_correo_personal_ventas" style="display: none">Correo Personal </label>
<<<<<<< HEAD
                                <input id="correo_personal_ventas" value="<?= $data->correo_personal_ventas ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_ventas" placeholder1="Ingresa el correo personal">
=======
                                <input id="correo_personal_ventas" value="<?= $data->correo_personal_ventas ?>" style="display: none" type="text" class="form-control form-control-sm"  name="correo_personal_ventas" placeholder="Ingresa el correo personal">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_ventas" style="display: none" >Correo Empresarial </label>
<<<<<<< HEAD
                                <input id="correo_empresarial_ventas" value="<?= $data->correo_empresarial_ventas ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_ventas" placeholder1="Ingresa el correo empresarial">
=======
                                <input id="correo_empresarial_ventas" value="<?= $data->correo_empresarial_ventas ?>" style="display: none" type="text" class="form-control form-control-sm"  name="correo_empresarial_ventas" placeholder="Ingresa el correo empresarial">
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
<<<<<<< HEAD
                                <input id="nombre_otros" value="<?= $data->nombre_otros ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_otros" placeholder1="Ingresa el nombre">
=======
                                <input id="nombre_otros" value="<?= $data->nombre_otros ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="nombre_otros" placeholder="Ingresa el nombre">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_celular_otros" style="display: none">Celular  </label>
<<<<<<< HEAD
                                <input id="celular_otros" value="<?= $data->celular_otros ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_otros" placeholder1="Ingresa el celular">
=======
                                <input id="celular_otros" value="<?= $data->celular_otros ?>" style="display: none" type="text" class="form-control form-control-sm bg-dark"  name="celular_otros" placeholder="Ingresa el celular">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                        </div>





                        <div class="row">
                            <div class="form-group col-xs-6"> 

                                <label id="lbl_correo_personal_otros" style="display: none">Correo Personal </label>
<<<<<<< HEAD
                                <input id="correo_personal_otros" value="<?= $data->correo_personal_otros ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_personal_otros" placeholder1="Ingresa el correo personal">
=======
                                <input id="correo_personal_otros" value="<?= $data->correo_personal_otros ?>" style="display: none" type="text" class="form-control form-control-sm"  name="correo_personal_otros" placeholder="Ingresa el correo personal">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                            <div class="form-group col-xs-6">
                                <label id="lbl_correo_empresarial_otros" style="display: none" >Correo Empresarial </label>
<<<<<<< HEAD
                                <input id="correo_empresarial_otros" value="<?= $data->correo_empresarial_otros ?>" style="display: none" type="email" class="form-control form-control-sm"  name="correo_empresarial_otros" placeholder1="Ingresa el correo empresarial">
=======
                                <input id="correo_empresarial_otros" value="<?= $data->correo_empresarial_otros ?>" style="display: none" type="text" class="form-control form-control-sm"  name="correo_empresarial_otros" placeholder="Ingresa el correo empresarial">
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                            </div>
                        </div>











                    </div>


<<<<<<< HEAD
                    

                    <div class="jumbotron">


<!--
=======
                    <div class="jumbotron">



>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        <div class="row">
                            <div class="form-group col-xs-4"></div>
                            <div class="form-group col-xs-4">
                                <label for="nombre">Máquinas a editar </label>
                                <select name="maquina" id="maquina" class="form-control input-sm" onchange="agregarMaquina()">
                                    <option  value="">Selecciona una opción</option>
<<<<<<< HEAD
                                    <OPTION VALUE="1">1 - <?= $data->info_maquina_1 ?></OPTION>
                                    <OPTION VALUE="2">2 - <?= $data->info_maquina_2 ?></OPTION>
                                    <OPTION VALUE="3">3 - <?= $data->info_maquina_3 ?> </OPTION>
                                    <OPTION VALUE="4">4 - <?= $data->info_maquina_4 ?></OPTION>
                                    <OPTION VALUE="5">5 - <?= $data->info_maquina_5 ?></OPTION>
                                    <OPTION VALUE="6">6 - <?= $data->info_maquina_6 ?></OPTION>
                                    <OPTION VALUE="7">7 - <?= $data->info_maquina_7 ?></OPTION>
                                    <OPTION VALUE="Todas">Todas</OPTION>
=======
                                    <OPTION VALUE="1">1</OPTION>
                                    <OPTION VALUE="2">2</OPTION>
                                    <OPTION VALUE="3">3</OPTION>
                                    <OPTION VALUE="4">4</OPTION>
                                    <OPTION VALUE="5">5</OPTION>
                                    <OPTION VALUE="6">6</OPTION>
                                    <OPTION VALUE="7">7</OPTION>

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                </select>

                            </div>
                            <div class="form-group col-xs-4"></div>

<<<<<<< HEAD
                        </div>-->

                        
                        
                        <div class="row">
                          <div class="form-group col-xs-4"></div>
                          <div class="form-group col-xs-4"><label id="lbl_maquina_1" style="display: block"><h3>MÁQUINA 1</h3> </label></div>
                            <div class="form-group col-xs-4"></div>
                                                        
                          </div>

                        <div class="row">
                            
                            
                      <div class="form-group col-xs-3"> 
                                <label id="lbl_info_maquina_1" style="display: block"> Maquina </label>
                                <textarea name="info_maquina_1"  id="info_maquina_1"  class="form-control input-sm" rows="1" cols="80" style="background-color:#C1FFFA;resize:none;display: block"><?= $data->info_maquina_1 ?></textarea>
                      </div>
                            
                            
                            
                            
                     <div class="form-group col-xs-3"> 

                                       <label id="lbl_tipo_maquina_1" style="display: block"> Tipo de máquina  </label>


                                <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="tipo_maquina_1" id="maquina_1"  class="form-control input-sm" > 
                                  
                                       <option value="" <?php if ($data->tipo_maquina_1 == "") {echo "Selected"; } ?>>Selecciona una opción</option>
                                       <option value="Flexo" <?php if ($data->tipo_maquina_1 == "Flexo") {echo "Selected"; } ?>>Flexo</option>
                                       <option value="Conversion" <?php if ($data->tipo_maquina_1 == "Conversion"){  echo "Selected";} ?>>Conversion</option>
                                       <option value="Corrugadora" <?php if ($data->tipo_maquina_1 == "Corrugadora"){  echo "Selected";} ?>>Corrugadora</option>
                                        <option value="FRDC" <?php if ($data->tipo_maquina_1 == "FRDC"){  echo "Selected";} ?>>FRDC</option>
                                       <option value="FFG" <?php if ($data->tipo_maquina_1 == "FFG"){  echo "Selected";} ?>>FFG</option>
                                </SELECT>
                     </div>
                            
                            
                     <div class="form-group col-xs-3"> 
                                <label id="lbl_modelo_maquina_1" style="display: block">Marca </label>
                                
                             <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="modelo_maquina_1" id="marca_maquina_1"  class="form-control input-sm" > 
                                <optgroup label="Selecciona una opción">
                                     <option value="" <?php if ($data->modelo_maquina_1 == "") {echo "Selected"; } ?>></option>
                                     <!--FLEXO-->
                                        <option value="CURIONI" <?php if ($data->modelo_maquina_1 == "CURIONI") {echo "Selected"; } ?>>CURIONI</option>
                                        <option value="DING LONG" <?php if ($data->modelo_maquina_1 == "DING LONG"){  echo "Selected";} ?>>DING LONG</option>
                                        <option value="EMBA" <?php if ($data->modelo_maquina_1 == "EMBA"){  echo "Selected";} ?>>EMBA</option>
                                        <option value="FLYDRAGON" <?php if ($data->modelo_maquina_1 == "FLYDRAGON"){  echo "Selected";} ?>>FLYDRAGON</option>
                                        <option value="GÖPFERT" <?php if ($data->modelo_maquina_1 == "GÖPFERT"){  echo "Selected";} ?>>GÖPFERT</option>
                                        <option value="HOOPER" <?php if ($data->modelo_maquina_1 == "HOOPER"){  echo "Selected";} ?>>HOOPER</option>
                                        <option value="HUALI" <?php if ($data->modelo_maquina_1 == "HUALI"){  echo "Selected";} ?>>HUALI</option>
                                        <option value="ISOWA" <?php if ($data->modelo_maquina_1 == "ISOWA"){  echo "Selected";} ?>>ISOWA</option>
                                        <option value="KL" <?php if ($data->modelo_maquina_1 == "KL") {echo "Selected"; } ?>>KL</option>
                                        <option value="CURIONI" <?php if ($data->modelo_maquina_1 == "CURIONI") {echo "Selected"; } ?>>CURIONI</option>
                                        <option value="DING LONG" <?php if ($data->modelo_maquina_1 == "DING LONG"){  echo "Selected";} ?>>DING LONG</option>
                                        <option value="EMBA" <?php if ($data->modelo_maquina_1 == "EMBA"){  echo "Selected";} ?>>EMBA</option>
                                        <option value="FLYDRAGON" <?php if ($data->modelo_maquina_1 == "FLYDRAGON"){  echo "Selected";} ?>>FLYDRAGON</option>
                                        <option value="GÖPFERT" <?php if ($data->modelo_maquina_1 == "GÖPFERT"){  echo "Selected";} ?>>GÖPFERT</option>
                                        <option value="HOOPER" <?php if ($data->modelo_maquina_1 == "HOOPER"){  echo "Selected";} ?>>HOOPER</option>
                                        <option value="HUALI" <?php if ($data->modelo_maquina_1 == "HUALI"){  echo "Selected";} ?>>HUALI</option>
                                        <option value="ISOWA" <?php if ($data->modelo_maquina_1 == "ISOWA"){  echo "Selected";} ?>>ISOWA</option>
                                        <option value="KOOPER" <?php if ($data->modelo_maquina_1 == "KOOPER") {echo "Selected"; } ?>>KOOPER</option>
                                        <option value="MACARBOX" <?php if ($data->modelo_maquina_1 == "MACARBOX") {echo "Selected"; } ?>>MACARBOX</option>
                                        <option value="MARTIN" <?php if ($data->modelo_maquina_1 == "MARTIN") {echo "Selected"; } ?>>MARTIN   </option>
                                        <option value="MARVI" <?php if ($data->modelo_maquina_1 == "MARVI") {echo "Selected"; } ?>>MARVI</option>
                                        <option value="STALEY" <?php if ($data->modelo_maquina_1 == "STALEY") {echo "Selected"; } ?>>STALEY</option>
                                        <option value="WARD" <?php if ($data->modelo_maquina_1 == "WARD") {echo "Selected"; } ?>>WARD</option>
                                        <option value="SIMON" <?php if ($data->modelo_maquina_1 == "SIMON") {echo "Selected"; } ?>>SIMON</option>
                                     
                                      <!--CONVERSION-->
                                        <option value="GODSWILL" <?php if ($data->modelo_maquina_1 == "GODSWILL") {echo "Selected"; } ?>>GODSWILL</option>
                                        <option value="GUNGXIN" <?php if ($data->modelo_maquina_1 == "GUNGXIN") {echo "Selected"; } ?>>GUNGXIN</option>
                                        <option value="HAIDAO" <?php if ($data->modelo_maquina_1 == "HAIDAO") {echo "Selected"; } ?>>HAIDAO   </option>
                                        <option value="HEBEI" <?php if ($data->modelo_maquina_1 == "HEBEI") {echo "Selected"; } ?>>HEBEI</option>
                                        <option value="HUATAO" <?php if ($data->modelo_maquina_1 == "HUATAO") {echo "Selected"; } ?>>HUATAO</option>
                                        <option value="JASTU" <?php if ($data->modelo_maquina_1 == "JASTU") {echo "Selected"; } ?>>JASTU</option>
                                        <option value="JIAJIE" <?php if ($data->modelo_maquina_1 == "JIAJIE") {echo "Selected"; } ?>>JIAJIE</option>
                                        <option value="SRPACK" <?php if ($data->modelo_maquina_1 == "SRPACK") {echo "Selected"; } ?>>SRPACK</option>
                                        <option value="AOKE" <?php if ($data->modelo_maquina_1 == "AOKE") {echo "Selected"; } ?>>AOKE</option>
                                      
                                      <!--CORRUGADORAS-->
                                        <option value="TECASA" <?php if ($data->modelo_maquina_1 == "TECASA") {echo "Selected"; } ?>>TECASA</option>
                                        <option value="WANLIAN" <?php if ($data->modelo_maquina_1 == "WANLIAN") {echo "Selected"; } ?>>WANLIAN</option>
  

                                </optgroup>
                           </SELECT>
                                
                     </div>
                            
                            
                            
                            
                     <div class="form-group col-xs-3"> 
                                <label id="lbl_medida_maquina_1" style="display: block">Medida  </label>
                     
                                 
                         <!--<SELECT style="background-color:#C1FFFA;resize:block;display: block" name="medida_maquina_1" id="medida_maquina_1"  class="form-control input-sm" > 
                            <optgroup label="Selecciona una opción">
                                 <option value="" <?php if ($data->medida_maquina_1 == "") {echo "Selected"; } ?>></option>
                                 <option value='35"' <?php if ($data->medida_maquina_1 == '35"') {echo "Selected"; } ?>>35"</option>
                                <option value='50"' <?php if ($data->medida_maquina_1 == '50"'){  echo "Selected";} ?>>50"</option>
                                 <option value='66"'<?php if ($data->medida_maquina_1 == '66"'){  echo "Selected";} ?>>66"</option>
                                  <option value="NO APLICA" <?php if ($data->medida_maquina_1 == "NO APLICA"){  echo "Selected";} ?>>NO APLICA</option>
                            </optgroup>
                        </SELECT>-->
                         <textarea name="medida_maquina_1"  id="medida_maquina_1" class="form-control input-sm" rows="1" cols="80" style="background-color:#C1FFFA;resize:block;display: block" placeholder=""><?= $data->medida_maquina_1 ?></textarea>
                          
                      </div>
             </div>
                        
                      
                           <div class="row">
                            
                             
                            
                             
                            
                            
                     <div class="form-group col-xs-3"> 
                            <label id="lbl_troquel_maquina_1" style="display: block"> Troquel  </label>
                              
                            <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="troquel_maquina_1" id="troquel_maquina_1"  class="form-control input-sm" > 
                               <optgroup label="Selecciona una opción">
                                <option value="" <?php if ($data->troquel_maquina_1 == "") {echo "Selected"; } ?>></option>
                                <option value= "Sí"<?php if ($data->troquel_maquina_1 == "Sí") {echo "Selected"; } ?>>Sí</option>
                                <option value= "No"<?php if ($data->troquel_maquina_1 == "No") {echo "Selected"; } ?>>No</option>
                                <option value= "No Aplica"<?php if ($data->troquel_maquina_1 == "No Aplica") {echo "Selected"; } ?>>No Aplica</option>
                               </optgroup>
                           </SELECT>
                            
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
                                <label id="lbl_codigo_cubierta_maquina_1" style="display: block"> Código Cubierta  </label>
                                <textarea name="codigo_cubierta_maquina_1"  id="codigo_cubierta_maquina_1" class="form-control input-sm" rows="1" cols="80" style="background-color:#C1FFFA;resize:none;display: block" ><?= $data->codigo_cubierta_maquina_1 ?></textarea>
                            </div>
                            
                             <div class="form-group col-xs-3"> 
                                <label id="lbl_cliente_conoce_maquina_1" style="display: block"> Nombre con el que el cliente conoce la máquina  </label>
                                <textarea name="cliente_conoce_maquina_1"  id="cliente_conoce_maquina_1" class="form-control input-sm" rows="1" cols="80" style="background-color:#C1FFFA;resize:none;display: block"><?= $data->cliente_conoce_maquina_1 ?></textarea>
                            </div>
                            
                             
                           
                            

                       
                                  <div class="form-group col-xs-3">
                                    <label for="nombre">Refacciones</label>
                                     <?php
                                    if ($data->refacciones_maquina_1 == null) {
                                        echo '<br><font color="red">No tienes ningún archivo cargado</font>'
                                        . '<input type="file"  name="refacciones_maquina_1">';
                                    } else if ($data->refacciones_maquina_1 != null)  {
                                         ?>  
                                     
                                       <a target="_blank" title="Da clic para visualizarlo o descargarlo" href="../../assets/censomaquinaria/<?= $data->refacciones_maquina_1 ?>">
                                    <font color="green"> Ya tienes un archivo cargado, da clic aqui para visualizarlo o descargarlo</font></a>
                                    <br><font color="purple">Selecciona si deseas actualizar el archivo</font>
                                
                                         <input type="file" name="refacciones_maquina_1">
                                 <?php
                                    }
                                    ?>
        
                        </div>

              </div>
              
            
            <div class="row ">
                            <div class="form-group col-xs-3 span12">
                      <label for="nombre">Cosumibles</label>

                                                     <?php
                                    if ($data->consumibles_maquina_1 == null) {
                                        echo '<br><font color="red">No tienes ningún archivo cargado</font>'
                                        . '<input type="file"  name="consumibles_maquina_1">';
                                    } else if (($data->consumibles_maquina_1 != null)) {
                                         ?>  
                               
                              
                                     
                                       <a target="_blank" title="Da clic para visualizarlo o descargarlo" href="../../assets/censomaquinaria/<?= $data->consumibles_maquina_1 ?>">
                                    <font color="green"> Ya tienes un archivo cargado, da clic aqui para visualizarlo o descargarlo</font></a>
                                    <br><font color="purple">Selecciona si deseas actualizar el archivo</font>
                                 <input type="file" name="consumibles_maquina_1">
                                                                  
                                 <?php
                                    }
                                    ?>
        
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
                                <textarea name="info_maquina_2"  id="info_maquina_2"  class="form-control input-sm" rows="1" cols="80" style="background-color:#FFFFFF;resize:none;display: block"><?= $data->info_maquina_2 ?></textarea>
                      </div>
                            
                            
                            
                                                        
                     <div class="form-group col-xs-3"> 

                                       <label id="lbl_tipo_maquina_2" style="display: block"> Tipo de máquina  </label>


                                <SELECT style="background-color:#FFFFFF;resize:block;display: block" name="tipo_maquina_2" id="maquina_2"  class="form-control input-sm" > 
                                  <optgroup label="Selecciona una opción">
                                       <option value="" <?php if ($data->tipo_maquina_2 == "") {echo "Selected"; } ?>>Selecciona una opción</option>
                                       <option value="Flexo" <?php if ($data->tipo_maquina_2 == "Flexo") {echo "Selected"; } ?>>Flexo</option>
                                       <option value="Conversion" <?php if ($data->tipo_maquina_2 == "Conversion"){  echo "Selected";} ?>>Conversion</option>
                                       <option value="Corrugadora" <?php if ($data->tipo_maquina_2 == "Corrugadora"){  echo "Selected";} ?>>Corrugadora</option>
                                        <option value="FRDC" <?php if ($data->tipo_maquina_2 == "FRDC"){  echo "Selected";} ?>>FRDC</option>
                                       <option value="FFG" <?php if ($data->tipo_maquina_2 == "FFG"){  echo "Selected";} ?>>FFG</option>
  </optgroup>
                                </SELECT>
                     </div>
                            
                            
                                                 <div class="form-group col-xs-3"> 
                                <label id="lbl_modelo_maquina_2" style="display: block">Marca </label>
                                
                             <SELECT style="background-color:#FFFFFF;resize:block;display: block" name="modelo_maquina_2" id="marca_maquina_2"  class="form-control input-sm" > 
                                <optgroup label="Selecciona una opción">
                                  <option value="" <?php if ($data->modelo_maquina_2 == "") {echo "Selected"; } ?>></option>
                                     <!--FLEXO-->
                                        <option value="CURIONI" <?php if ($data->modelo_maquina_2 == "CURIONI") {echo "Selected"; } ?>>CURIONI</option>
                                        <option value="DING LONG" <?php if ($data->modelo_maquina_2 == "DING LONG"){  echo "Selected";} ?>>DING LONG</option>
                                        <option value="EMBA" <?php if ($data->modelo_maquina_2 == "EMBA"){  echo "Selected";} ?>>EMBA</option>
                                        <option value="FLYDRAGON" <?php if ($data->modelo_maquina_2 == "FLYDRAGON"){  echo "Selected";} ?>>FLYDRAGON</option>
                                        <option value="GÖPFERT" <?php if ($data->modelo_maquina_2 == "GÖPFERT"){  echo "Selected";} ?>>GÖPFERT</option>
                                        <option value="HOOPER" <?php if ($data->modelo_maquina_2 == "HOOPER"){  echo "Selected";} ?>>HOOPER</option>
                                        <option value="HUALI" <?php if ($data->modelo_maquina_2 == "HUALI"){  echo "Selected";} ?>>HUALI</option>
                                        <option value="ISOWA" <?php if ($data->modelo_maquina_2 == "ISOWA"){  echo "Selected";} ?>>ISOWA</option>
                                        <option value="KL" <?php if ($data->modelo_maquina_2 == "KL") {echo "Selected"; } ?>>KL</option>
                                        <option value="CURIONI" <?php if ($data->modelo_maquina_2 == "CURIONI") {echo "Selected"; } ?>>CURIONI</option>
                                        <option value="DING LONG" <?php if ($data->modelo_maquina_2 == "DING LONG"){  echo "Selected";} ?>>DING LONG</option>
                                        <option value="EMBA" <?php if ($data->modelo_maquina_2 == "EMBA"){  echo "Selected";} ?>>EMBA</option>
                                        <option value="FLYDRAGON" <?php if ($data->modelo_maquina_2 == "FLYDRAGON"){  echo "Selected";} ?>>FLYDRAGON</option>
                                        <option value="GÖPFERT" <?php if ($data->modelo_maquina_2 == "GÖPFERT"){  echo "Selected";} ?>>GÖPFERT</option>
                                        <option value="HOOPER" <?php if ($data->modelo_maquina_2 == "HOOPER"){  echo "Selected";} ?>>HOOPER</option>
                                        <option value="HUALI" <?php if ($data->modelo_maquina_2 == "HUALI"){  echo "Selected";} ?>>HUALI</option>
                                        <option value="ISOWA" <?php if ($data->modelo_maquina_2 == "ISOWA"){  echo "Selected";} ?>>ISOWA</option>
                                        <option value="KOOPER" <?php if ($data->modelo_maquina_2 == "KOOPER") {echo "Selected"; } ?>>KOOPER</option>
                                        <option value="MACARBOX" <?php if ($data->modelo_maquina_2 == "MACARBOX") {echo "Selected"; } ?>>MACARBOX</option>
                                        <option value="MARTIN" <?php if ($data->modelo_maquina_2 == "MARTIN") {echo "Selected"; } ?>>MARTIN   </option>
                                        <option value="MARVI" <?php if ($data->modelo_maquina_2 == "MARVI") {echo "Selected"; } ?>>MARVI</option>
                                        <option value="STALEY" <?php if ($data->modelo_maquina_2 == "STALEY") {echo "Selected"; } ?>>STALEY</option>
                                        <option value="WARD" <?php if ($data->modelo_maquina_2 == "WARD") {echo "Selected"; } ?>>WARD</option>
                                        <option value="SIMON" <?php if ($data->modelo_maquina_2 == "SIMON") {echo "Selected"; } ?>>SIMON</option>
                                     
                                      <!--CONVERSION-->
                                        <option value="GODSWILL" <?php if ($data->modelo_maquina_2 == "GODSWILL") {echo "Selected"; } ?>>GODSWILL</option>
                                        <option value="GUNGXIN" <?php if ($data->modelo_maquina_2 == "GUNGXIN") {echo "Selected"; } ?>>GUNGXIN</option>
                                        <option value="HAIDAO" <?php if ($data->modelo_maquina_2 == "HAIDAO") {echo "Selected"; } ?>>HAIDAO   </option>
                                        <option value="HEBEI" <?php if ($data->modelo_maquina_2 == "HEBEI") {echo "Selected"; } ?>>HEBEI</option>
                                        <option value="HUATAO" <?php if ($data->modelo_maquina_2 == "HUATAO") {echo "Selected"; } ?>>HUATAO</option>
                                        <option value="JASTU" <?php if ($data->modelo_maquina_2 == "JASTU") {echo "Selected"; } ?>>JASTU</option>
                                        <option value="JIAJIE" <?php if ($data->modelo_maquina_2 == "JIAJIE") {echo "Selected"; } ?>>JIAJIE</option>
                                        <option value="SRPACK" <?php if ($data->modelo_maquina_2 == "SRPACK") {echo "Selected"; } ?>>SRPACK</option>
                                        <option value="AOKE" <?php if ($data->modelo_maquina_2 == "AOKE") {echo "Selected"; } ?>>AOKE</option>
                                      
                                      <!--CORRUGADORAS-->
                                        <option value="TECASA" <?php if ($data->modelo_maquina_2 == "TECASA") {echo "Selected"; } ?>>TECASA</option>
                                        <option value="WANLIAN" <?php if ($data->modelo_maquina_2 == "WANLIAN") {echo "Selected"; } ?>>WANLIAN</option

                                </optgroup>
                           </SELECT>
                                
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
                     
                                 
                       <!--  <SELECT style="background-color:#FFFFFF;resize:block;display: block" name="medida_maquina_2" id="medida_maquina_2"  class="form-control input-sm" > 
                            <optgroup label="Selecciona una opción">
                                 <option value="" <?php if ($data->medida_maquina_2 == "") {echo "Selected"; } ?>></option>
                                 <option value='35"' <?php if ($data->medida_maquina_2 == '35"') {echo "Selected"; } ?>>35"</option>
                                <option value='50"' <?php if ($data->medida_maquina_2 == '50"'){  echo "Selected";} ?>>50"</option>
                                 <option value='66"'<?php if ($data->medida_maquina_2 == '66"'){  echo "Selected";} ?>>66"</option>
                                  <option value="NO APLICA" <?php if ($data->medida_maquina_2 == "NO APLICA"){  echo "Selected";} ?>>NO APLICA</option>
                            </optgroup>
                        </SELECT>-->
                                
                                
                                
                                
                          <textarea name="medida_maquina_2"  id="medida_maquina_2" class="form-control input-sm" rows="1" cols="80" style="background-color:#C1FFFA;resize:none;display: block" placeholder=""><?= $data->medida_maquina_2 ?></textarea>
                          
                      </div>
                            
                          </div> 
                        
                       
                        
                        
                        <div class="row">
                            
                                                 <div class="form-group col-xs-3"> 
                            <label id="lbl_troquel_maquina_2" style="display: block"> Troquel  </label>
                              
                            <SELECT style="background-color:#FFFFFF;resize:block;display: block" name="troquel_maquina_2" id="troquel_maquina_2"  class="form-control input-sm" > 
                               <optgroup label="Selecciona una opción">
                                <option value="" <?php if ($data->troquel_maquina_2 == "") {echo "Selected"; } ?>></option>
                                <option value= "Sí"<?php if ($data->troquel_maquina_2 == "Sí") {echo "Selected"; } ?>>Sí</option>
                                <option value= "No"<?php if ($data->troquel_maquina_2 == "No") {echo "Selected"; } ?>>No</option>
                                <option value= "No Aplica"<?php if ($data->troquel_maquina_2 == "No Aplica") {echo "Selected"; } ?>>No Aplica</option>
                               </optgroup>
                           </SELECT>
                                
                            </div>
                            
                            
                            
                            
                             <div class="form-group col-xs-3"> 
                                <label id="lbl_codigo_cubierta_maquina_2" style="display: block"> Código Cubierta  </label>
                                <textarea name="codigo_cubierta_maquina_2"  id="codigo_cubierta_maquina_2" class="form-control input-sm" rows="1" cols="80" style="background-color:#ffffff;resize:none;display: block" placeholder=""><?= $data->codigo_cubierta_maquina_2 ?></textarea>
                            </div>
                            
                            
                            <div class="form-group col-xs-3"> 
                                <label id="lbl_cliente_conoce_maquina_2" style="display: block"> Nombre con el que el cliente conoce la máquina </label>
                                <textarea name="cliente_conoce_maquina_2"  id="cliente_conoce_maquina_2" class="form-control input-sm" rows="1" cols="80" style="background-color:#ffffff;resize:none;display: block" placeholder=""><?= $data->cliente_conoce_maquina_2 ?></textarea>
                            </div>
                            

                            
                            
                            
                            



                        
                     
                                  <div class="form-group col-xs-3">
                            <label for="nombre">Refacciones </label>
                             <?php
                                                      if ($data->refacciones_maquina_2 == null) {
                                                          echo '<br><font color="red">No tienes ningún archivo cargado</font>'
                                                          . '<input type="file"  name="refacciones_maquina_2">';
                                                      } else if ($data->refacciones_maquina_2 != null)  {
                                                           ?>  
                                                  
                                                
                                                       <a target="_blank" title="Da clic para visualizarlo o descargarlo" href="../../assets/censomaquinaria/<?= $data->refacciones_maquina_2 ?>">
                                    <font color="green"> Ya tienes un archivo cargado, da clic aqui para visualizarlo o descargarlo</font></a>
                                    <br><font color="purple">Selecciona si deseas actualizar el archivo</font>
                                                   <input type="file" name="refacciones_maquina_2">
                                                   <?php
                                                      }
                                                      ?>
        
                        </div>

              </div>
            <div class="row">
                            <div class="form-group col-xs-3">
                      <label for="nombre">Cosumibles </label>

                                                     <?php
                                    if ($data->consumibles_maquina_2 == null) {
                                        echo '<br><font color="red">No tienes ningún archivo cargado</font>'
                                        . '<input type="file"  name="consumibles_maquina_2">';
                                    } else if ($data->consumibles_maquina_2 != null) {
                                         ?>  
                                 
                                                
                                                       <a target="_blank" title="Da clic para visualizarlo o descargarlo" href="../../assets/censomaquinaria/<?= $data->consumibles_maquina_2 ?>">
                                    <font color="green"> Ya tienes un archivo cargado, da clic aqui para visualizarlo o descargarlo</font></a>
                                    <br><font color="purple">Selecciona si deseas actualizar el archivo</font>
                               
                                 <input type="file" name="consumibles_maquina_2">
                                                                  
                                 <?php
                                    }
                                    ?>
        
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
                                <textarea name="info_maquina_3"  id="info_maquina_3"  class="form-control input-sm" rows="1" cols="80" style="background-color:#C1FFFA;resize:none;display: block"><?= $data->info_maquina_3 ?></textarea>
                      </div>
                            
                            
                            
                                                        
                     <div class="form-group col-xs-3"> 

                                       <label id="lbl_tipo_maquina_3" style="display: block"> Tipo de máquina  </label>


                                <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="tipo_maquina_3" id="maquina_3"  class="form-control input-sm" > 
                                  <optgroup label="Selecciona una opción">
                                       <option value="" <?php if ($data->tipo_maquina_3 == "") {echo "Selected"; } ?>>Selecciona una opción</option>
                                       <option value="Flexo" <?php if ($data->tipo_maquina_3 == "Flexo") {echo "Selected"; } ?>>Flexo</option>
                                       <option value="Conversion" <?php if ($data->tipo_maquina_3 == "Conversion"){  echo "Selected";} ?>>Conversion</option>
                                       <option value="Corrugadora" <?php if ($data->tipo_maquina_3 == "Corrugadora"){  echo "Selected";} ?>>Corrugadora</option>
                                        <option value="FRDC" <?php if ($data->tipo_maquina_3 == "FRDC"){  echo "Selected";} ?>>FRDC</option>
                                       <option value="FFG" <?php if ($data->tipo_maquina_3 == "FFG"){  echo "Selected";} ?>>FFG</option>

                                  </optgroup>
                                </SELECT>
                     </div>
                            
                            
                                                 <div class="form-group col-xs-3"> 
                                <label id="lbl_modelo_maquina_3" style="display: block">Marca </label>
                                
                             <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="modelo_maquina_3" id="marca_maquina_3"  class="form-control input-sm" > 
                                <optgroup label="Selecciona una opción">
                                   <option value="" <?php if ($data->modelo_maquina_3 == "") {echo "Selected"; } ?>></option>
                                     <!--FLEXO-->
                                        <option value="CURIONI" <?php if ($data->modelo_maquina_3 == "CURIONI") {echo "Selected"; } ?>>CURIONI</option>
                                        <option value="DING LONG" <?php if ($data->modelo_maquina_3 == "DING LONG"){  echo "Selected";} ?>>DING LONG</option>
                                        <option value="EMBA" <?php if ($data->modelo_maquina_3 == "EMBA"){  echo "Selected";} ?>>EMBA</option>
                                        <option value="FLYDRAGON" <?php if ($data->modelo_maquina_3 == "FLYDRAGON"){  echo "Selected";} ?>>FLYDRAGON</option>
                                        <option value="GÖPFERT" <?php if ($data->modelo_maquina_3 == "GÖPFERT"){  echo "Selected";} ?>>GÖPFERT</option>
                                        <option value="HOOPER" <?php if ($data->modelo_maquina_3 == "HOOPER"){  echo "Selected";} ?>>HOOPER</option>
                                        <option value="HUALI" <?php if ($data->modelo_maquina_3 == "HUALI"){  echo "Selected";} ?>>HUALI</option>
                                        <option value="ISOWA" <?php if ($data->modelo_maquina_3 == "ISOWA"){  echo "Selected";} ?>>ISOWA</option>
                                        <option value="KL" <?php if ($data->modelo_maquina_3 == "KL") {echo "Selected"; } ?>>KL</option>
                                        <option value="CURIONI" <?php if ($data->modelo_maquina_3 == "CURIONI") {echo "Selected"; } ?>>CURIONI</option>
                                        <option value="DING LONG" <?php if ($data->modelo_maquina_3 == "DING LONG"){  echo "Selected";} ?>>DING LONG</option>
                                        <option value="EMBA" <?php if ($data->modelo_maquina_3 == "EMBA"){  echo "Selected";} ?>>EMBA</option>
                                        <option value="FLYDRAGON" <?php if ($data->modelo_maquina_3 == "FLYDRAGON"){  echo "Selected";} ?>>FLYDRAGON</option>
                                        <option value="GÖPFERT" <?php if ($data->modelo_maquina_3 == "GÖPFERT"){  echo "Selected";} ?>>GÖPFERT</option>
                                        <option value="HOOPER" <?php if ($data->modelo_maquina_3 == "HOOPER"){  echo "Selected";} ?>>HOOPER</option>
                                        <option value="HUALI" <?php if ($data->modelo_maquina_3 == "HUALI"){  echo "Selected";} ?>>HUALI</option>
                                        <option value="ISOWA" <?php if ($data->modelo_maquina_3 == "ISOWA"){  echo "Selected";} ?>>ISOWA</option>
                                        <option value="KOOPER" <?php if ($data->modelo_maquina_3 == "KOOPER") {echo "Selected"; } ?>>KOOPER</option>
                                        <option value="MACARBOX" <?php if ($data->modelo_maquina_3 == "MACARBOX") {echo "Selected"; } ?>>MACARBOX</option>
                                        <option value="MARTIN" <?php if ($data->modelo_maquina_3 == "MARTIN") {echo "Selected"; } ?>>MARTIN   </option>
                                        <option value="MARVI" <?php if ($data->modelo_maquina_3 == "MARVI") {echo "Selected"; } ?>>MARVI</option>
                                        <option value="STALEY" <?php if ($data->modelo_maquina_3 == "STALEY") {echo "Selected"; } ?>>STALEY</option>
                                        <option value="WARD" <?php if ($data->modelo_maquina_3 == "WARD") {echo "Selected"; } ?>>WARD</option>
                                        
                                        <option value="SIMON" <?php if ($data->modelo_maquina_3 == "SIMON") {echo "Selected"; } ?>>SIMON</option>
                                     
                                      <!--CONVERSION-->
                                        <option value="GODSWILL" <?php if ($data->modelo_maquina_3 == "GODSWILL") {echo "Selected"; } ?>>GODSWILL</option>
                                        <option value="GUNGXIN" <?php if ($data->modelo_maquina_3 == "GUNGXIN") {echo "Selected"; } ?>>GUNGXIN</option>
                                        <option value="HAIDAO" <?php if ($data->modelo_maquina_3 == "HAIDAO") {echo "Selected"; } ?>>HAIDAO   </option>
                                        <option value="HEBEI" <?php if ($data->modelo_maquina_3 == "HEBEI") {echo "Selected"; } ?>>HEBEI</option>
                                        <option value="HUATAO" <?php if ($data->modelo_maquina_3 == "HUATAO") {echo "Selected"; } ?>>HUATAO</option>
                                        <option value="JASTU" <?php if ($data->modelo_maquina_3 == "JASTU") {echo "Selected"; } ?>>JASTU</option>
                                        <option value="JIAJIE" <?php if ($data->modelo_maquina_3 == "JIAJIE") {echo "Selected"; } ?>>JIAJIE</option>
                                        <option value="SRPACK" <?php if ($data->modelo_maquina_3 == "SRPACK") {echo "Selected"; } ?>>SRPACK</option>
                                        <option value="AOKE" <?php if ($data->modelo_maquina_3 == "AOKE") {echo "Selected"; } ?>>AOKE</option>
                                      
                                      <!--CORRUGADORAS-->
                                        <option value="TECASA" <?php if ($data->modelo_maquina_3 == "TECASA") {echo "Selected"; } ?>>TECASA</option>
                                        <option value="WANLIAN" <?php if ($data->modelo_maquina_3 == "WANLIAN") {echo "Selected"; } ?>>WANLIAN</option

                                </optgroup>
                           </SELECT>
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
                     
                                 
                        <!-- <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="medida_maquina_3" id="medida_maquina_3"  class="form-control input-sm" > 
                            <optgroup label="Selecciona una opción">
                                 <option value="" <?php if ($data->medida_maquina_3 == "") {echo "Selected"; } ?>></option>
                                 <option value='35"' <?php if ($data->medida_maquina_3 == '35"') {echo "Selected"; } ?>>35"</option>
                                <option value='50"' <?php if ($data->medida_maquina_3 == '50"'){  echo "Selected";} ?>>50"</option>
                                 <option value='66"'<?php if ($data->medida_maquina_3 == '66"'){  echo "Selected";} ?>>66"</option>
                                  <option value="NO APLICA" <?php if ($data->medida_maquina_3 == "NO APLICA"){  echo "Selected";} ?>>NO APLICA</option>
                            </optgroup>
                         </SELECT>-->
                                
                          
                                         
                          <textarea name="medida_maquina_3"  id="medida_maquina_3" class="form-control input-sm" rows="1" cols="80" style="background-color:#C1FFFA;resize:block;display: block" placeholder=""><?= $data->medida_maquina_3 ?></textarea>
                          
                                
                                
                                
                          
                      </div>
                            
                          </div> 
                        
                       
                        
                        
                        <div class="row">
                            
                                                 <div class="form-group col-xs-3"> 
                            <label id="lbl_troquel_maquina_3" style="display: block"> Troquel  </label>
                              
                            <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="troquel_maquina_3" id="troquel_maquina_3"  class="form-control input-sm" > 
                               <optgroup label="Selecciona una opción">
                                <option value="" <?php if ($data->troquel_maquina_3 == "") {echo "Selected"; } ?>></option>
                                <option value= "Sí"<?php if ($data->troquel_maquina_3 == "Sí") {echo "Selected"; } ?>>Sí</option>
                                <option value= "No"<?php if ($data->troquel_maquina_3 == "No") {echo "Selected"; } ?>>No</option>
                                <option value= "No Aplica"<?php if ($data->troquel_maquina_3 == "No Aplica") {echo "Selected"; } ?>>No Aplica</option>
                               </optgroup>
                           </SELECT>
                                
                            </div>
                            
                            
                            
                            
                             <div class="form-group col-xs-3"> 
                                <label id="lbl_codigo_cubierta_maquina_3" style="display: block"> Código Cubierta  </label>
                                <textarea name="codigo_cubierta_maquina_3"  id="codigo_cubierta_maquina_3" class="form-control input-sm" rows="1" cols="80" style="background-color:#C1FFFA;resize:none;display: block" ><?= $data->codigo_cubierta_maquina_3 ?></textarea>
                            </div>
                            
                            
                            <div class="form-group col-xs-3"> 
                                <label id="lbl_cliente_conoce_maquina_3" style="display: block">Nombre con el que el cliente conoce la máquina  </label>
                                <textarea name="cliente_conoce_maquina_3"  id="cliente_conoce_maquina_3" class="form-control input-sm" rows="1" cols="80" style="background-color:#C1FFFA;resize:none;display: block"><?= $data->cliente_conoce_maquina_3 ?></textarea>
                            </div>
                            

                            
                            
                            
                            



                        
                     

                                  <div class="form-group col-xs-3">
                            <label for="nombre">Refacciones </label>
                             <?php
                                                      if ($data->refacciones_maquina_3 == null) {
                                                          echo '<br><font color="red">No tienes ningún archivo cargado</font>'
                                                          . '<input type="file"  name="refacciones_maquina_3">';
                                                      } else if ($data->refacciones_maquina_3 != null)  {
                                                           ?>  
                                                 
                                       <a target="_blank" title="Da clic para visualizarlo o descargarlo" href="../../assets/censomaquinaria/<?= $data->refacciones_maquina_3 ?>">
                                    <font color="green"> Ya tienes un archivo cargado, da clic aqui para visualizarlo o descargarlo</font></a>
                                    <br><font color="purple">Selecciona si deseas actualizar el archivo</font>
                                                   <input type="file" name="refacciones_maquina_3">
                                                   <?php
                                                      }
                                                      ?>
        
                        </div>

              </div>
            <div class="row">
                            <div class="form-group col-xs-3">
                      <label for="nombre">Cosumibles</label>

                                                     <?php
                                    if ($data->consumibles_maquina_3 == null) {
                                        echo '<br><font color="red">No tienes ningún archivo cargado</font>'
                                        . '<input type="file"  name="consumibles_maquina_3">';
                                    } else if ($data->consumibles_maquina_3 != null) {
                                         ?>  
                               
                                       <a target="_blank" title="Da clic para visualizarlo o descargarlo" href="../../assets/censomaquinaria/<?= $data->consumibles_maquina_3 ?>">
                                    <font color="green"> Ya tienes un archivo cargado, da clic aqui para visualizarlo o descargarlo</font></a>
                                    <br><font color="purple">Selecciona si deseas actualizar el archivo</font>
                                 <input type="file" name="consumibles_maquina_3">
                                                                  
                                 <?php
                                    }
                                    ?>
        
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
                                <textarea name="info_maquina_4"  id="info_maquina_4"  class="form-control input-sm" rows="1" cols="80" style="background-color:#FFFFFF;resize:none;display: block"><?= $data->info_maquina_4 ?></textarea>
                      </div>
                            
                            
                            
                                                        
                     <div class="form-group col-xs-3"> 

                                       <label id="lbl_tipo_maquina_4" style="display: block"> Tipo de máquina  </label>


                                <SELECT style="background-color:#FFFFFF;resize:block;display: block" name="tipo_maquina_4" id="maquina_4"  class="form-control input-sm" > 
                                  <optgroup label="Selecciona una opción">
                                      <option value="" <?php if ($data->tipo_maquina_4 == "") {echo "Selected"; } ?>>Selecciona una opción</option>
                                       <option value="Flexo" <?php if ($data->tipo_maquina_4 == "Flexo") {echo "Selected"; } ?>>Flexo</option>
                                       <option value="Conversion" <?php if ($data->tipo_maquina_4 == "Conversion"){  echo "Selected";} ?>>Conversion</option>
                                       <option value="Corrugadora" <?php if ($data->tipo_maquina_4 == "Corrugadora"){  echo "Selected";} ?>>Corrugadora</option>
                                        <option value="FRDC" <?php if ($data->tipo_maquina_4 == "FRDC"){  echo "Selected";} ?>>FRDC</option>
                                       <option value="FFG" <?php if ($data->tipo_maquina_4 == "FFG"){  echo "Selected";} ?>>FFG</option>

                                  </optgroup>
                                </SELECT>
                     </div>
                            
                            
                                                 <div class="form-group col-xs-3"> 
                                <label id="lbl_modelo_maquina_4" style="display: block">Marca </label>
                                
                             <SELECT style="background-color:#FFFFFF;resize:block;display: block" name="modelo_maquina_4" id="marca_maquina_4"  class="form-control input-sm" > 
                                <optgroup label="Selecciona una opción">
                                     <option value="" <?php if ($data->modelo_maquina_4 == "") {echo "Selected"; } ?>></option>
                                     <!--FLEXO-->
                                        <option value="CURIONI" <?php if ($data->modelo_maquina_4 == "CURIONI") {echo "Selected"; } ?>>CURIONI</option>
                                        <option value="DING LONG" <?php if ($data->modelo_maquina_4 == "DING LONG"){  echo "Selected";} ?>>DING LONG</option>
                                        <option value="EMBA" <?php if ($data->modelo_maquina_4 == "EMBA"){  echo "Selected";} ?>>EMBA</option>
                                        <option value="FLYDRAGON" <?php if ($data->modelo_maquina_4 == "FLYDRAGON"){  echo "Selected";} ?>>FLYDRAGON</option>
                                        <option value="GÖPFERT" <?php if ($data->modelo_maquina_4 == "GÖPFERT"){  echo "Selected";} ?>>GÖPFERT</option>
                                        <option value="HOOPER" <?php if ($data->modelo_maquina_4 == "HOOPER"){  echo "Selected";} ?>>HOOPER</option>
                                        <option value="HUALI" <?php if ($data->modelo_maquina_4 == "HUALI"){  echo "Selected";} ?>>HUALI</option>
                                        <option value="ISOWA" <?php if ($data->modelo_maquina_4 == "ISOWA"){  echo "Selected";} ?>>ISOWA</option>
                                        <option value="KL" <?php if ($data->modelo_maquina_4 == "KL") {echo "Selected"; } ?>>KL</option>
                                        <option value="CURIONI" <?php if ($data->modelo_maquina_4 == "CURIONI") {echo "Selected"; } ?>>CURIONI</option>
                                        <option value="DING LONG" <?php if ($data->modelo_maquina_4 == "DING LONG"){  echo "Selected";} ?>>DING LONG</option>
                                        <option value="EMBA" <?php if ($data->modelo_maquina_4 == "EMBA"){  echo "Selected";} ?>>EMBA</option>
                                        <option value="FLYDRAGON" <?php if ($data->modelo_maquina_4 == "FLYDRAGON"){  echo "Selected";} ?>>FLYDRAGON</option>
                                        <option value="GÖPFERT" <?php if ($data->modelo_maquina_4 == "GÖPFERT"){  echo "Selected";} ?>>GÖPFERT</option>
                                        <option value="HOOPER" <?php if ($data->modelo_maquina_4 == "HOOPER"){  echo "Selected";} ?>>HOOPER</option>
                                        <option value="HUALI" <?php if ($data->modelo_maquina_4 == "HUALI"){  echo "Selected";} ?>>HUALI</option>
                                        <option value="ISOWA" <?php if ($data->modelo_maquina_4 == "ISOWA"){  echo "Selected";} ?>>ISOWA</option>
                                        <option value="KOOPER" <?php if ($data->modelo_maquina_4 == "KOOPER") {echo "Selected"; } ?>>KOOPER</option>
                                        <option value="MACARBOX" <?php if ($data->modelo_maquina_4 == "MACARBOX") {echo "Selected"; } ?>>MACARBOX</option>
                                        <option value="MARTIN" <?php if ($data->modelo_maquina_4 == "MARTIN") {echo "Selected"; } ?>>MARTIN   </option>
                                        <option value="MARVI" <?php if ($data->modelo_maquina_4 == "MARVI") {echo "Selected"; } ?>>MARVI</option>
                                        <option value="STALEY" <?php if ($data->modelo_maquina_4 == "STALEY") {echo "Selected"; } ?>>STALEY</option>
                                        <option value="WARD" <?php if ($data->modelo_maquina_4 == "WARD") {echo "Selected"; } ?>>WARD</option>
                                        <option value="SIMON" <?php if ($data->modelo_maquina_4 == "SIMON") {echo "Selected"; } ?>>SIMON</option>
                                     
                                      <!--CONVERSION-->
                                        <option value="GODSWILL" <?php if ($data->modelo_maquina_4 == "GODSWILL") {echo "Selected"; } ?>>GODSWILL</option>
                                        <option value="GUNGXIN" <?php if ($data->modelo_maquina_4 == "GUNGXIN") {echo "Selected"; } ?>>GUNGXIN</option>
                                        <option value="HAIDAO" <?php if ($data->modelo_maquina_4 == "HAIDAO") {echo "Selected"; } ?>>HAIDAO   </option>
                                        <option value="HEBEI" <?php if ($data->modelo_maquina_4 == "HEBEI") {echo "Selected"; } ?>>HEBEI</option>
                                        <option value="HUATAO" <?php if ($data->modelo_maquina_4 == "HUATAO") {echo "Selected"; } ?>>HUATAO</option>
                                        <option value="JASTU" <?php if ($data->modelo_maquina_4 == "JASTU") {echo "Selected"; } ?>>JASTU</option>
                                        <option value="JIAJIE" <?php if ($data->modelo_maquina_4 == "JIAJIE") {echo "Selected"; } ?>>JIAJIE</option>
                                        <option value="SRPACK" <?php if ($data->modelo_maquina_4 == "SRPACK") {echo "Selected"; } ?>>SRPACK</option>
                                        <option value="AOKE" <?php if ($data->modelo_maquina_4 == "AOKE") {echo "Selected"; } ?>>AOKE</option>
                                      
                                      <!--CORRUGADORAS-->
                                        <option value="TECASA" <?php if ($data->modelo_maquina_4 == "TECASA") {echo "Selected"; } ?>>TECASA</option>
                                        <option value="WANLIAN" <?php if ($data->modelo_maquina_4 == "WANLIAN") {echo "Selected"; } ?>>WANLIAN</option

                                </optgroup>
                           </SELECT>
                                
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
                                /*case "Ejemplo":
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
                     
                                 
                        <!-- <SELECT style="background-color:#FFFFFF;resize:block;display: block" name="medida_maquina_4" id="medida_maquina_4"  class="form-control input-sm" > 
                            <optgroup label="Selecciona una opción">
                                 <option value="" <?php if ($data->medida_maquina_4 == "") {echo "Selected"; } ?>></option>
                                 <option value='35"' <?php if ($data->medida_maquina_4 == '35"') {echo "Selected"; } ?>>35"</option>
                                <option value='50"' <?php if ($data->medida_maquina_4 == '50"'){  echo "Selected";} ?>>50"</option>
                                 <option value='66"'<?php if ($data->medida_maquina_4 == '66"'){  echo "Selected";} ?>>66"</option>
                                  <option value="NO APLICA" <?php if ($data->medida_maquina_4 == "NO APLICA"){  echo "Selected";} ?>>NO APLICA</option>
                            </optgroup>
                        </SELECT>-->
                        
                        
                        
                                 
                          <textarea name="medida_maquina_4"  id="medida_maquina_4" class="form-control input-sm" rows="1" cols="80" style="background-color:#C1FFFA;resize:block;display: block" placeholder=""><?= $data->medida_maquina_4?></textarea>
                          
                      </div>
                            
                          </div> 
                        
                       
                        
                        
                        <div class="row">
                            
                                                 <div class="form-group col-xs-3"> 
                            <label id="lbl_troquel_maquina_4" style="display: block"> Troquel  </label>
                              
                            <SELECT style="background-color:#FFFFFF;resize:block;display: block" name="troquel_maquina_4" id="troquel_maquina_4"  class="form-control input-sm" > 
                               <optgroup label="Selecciona una opción">
                                <option value="" <?php if ($data->troquel_maquina_4 == "") {echo "Selected"; } ?>></option>
                                <option value= "Sí"<?php if ($data->troquel_maquina_4 == "Sí") {echo "Selected"; } ?>>Sí</option>
                                <option value= "No"<?php if ($data->troquel_maquina_4 == "No") {echo "Selected"; } ?>>No</option>
                                <option value= "No Aplica"<?php if ($data->troquel_maquina_4 == "No Aplica") {echo "Selected"; } ?>>No Aplica</option>
                               </optgroup>
                           </SELECT>
                                
                            </div>
                            
                            
                            
                            
                             <div class="form-group col-xs-3"> 
                                <label id="lbl_codigo_cubierta_maquina_4" style="display: block"> Código Cubierta  </label>
                                <textarea name="codigo_cubierta_maquina_4"  id="codigo_cubierta_maquina_4" class="form-control input-sm" rows="1" cols="80" style="background-color:#ffffff;resize:none;display: block" placeholder=""><?= $data->codigo_cubierta_maquina_4 ?></textarea>
                            </div>
                            
                            
                            <div class="form-group col-xs-3"> 
                                <label id="lbl_cliente_conoce_maquina_4" style="display: block"> Nombre con el que el cliente conoce la máquina  </label>
                                <textarea name="cliente_conoce_maquina_4"  id="cliente_conoce_maquina_4" class="form-control input-sm" rows="1" cols="80" style="background-color:#ffffff;resize:none;display: block" placeholder=""><?= $data->cliente_conoce_maquina_4 ?></textarea>
                            </div>
                            

                        
                         <div class="form-group col-xs-3">
                            <label for="nombre">Refacciones</label>
                             <?php
                                                      if ($data->refacciones_maquina_4 == null) {
                                                          echo '<br><font color="red">No tienes ningún archivo cargado</font>'
                                                          . '<input type="file"  name="refacciones_maquina_4">';
                                                      } else if ($data->refacciones_maquina_4 != null)  {
                                                           ?>  
                                             
                                       <a target="_blank" title="Da clic para visualizarlo o descargarlo" href="../../assets/censomaquinaria/<?= $data->refacciones_maquina_4 ?>">
                                    <font color="green"> Ya tienes un archivo cargado, da clic aqui para visualizarlo o descargarlo</font></a>
                                    <br><font color="purple">Selecciona si deseas actualizar el archivo</font>
                                                   <input type="file" name="refacciones_maquina_4">
                                                   <?php
                                                      }
                                                      ?>
        
                        </div>

              </div>
            <div class="row">
                            <div class="form-group col-xs-3">
                      <label for="nombre">Cosumibles</label>

                                                     <?php
                                    if ($data->consumibles_maquina_4 == null) {
                                        echo '<br><font color="red">No tienes ningún archivo cargado</font>'
                                        . '<input type="file"  name="consumibles_maquina_4">';
                                    } else if ($data->consumibles_maquina_4 != null) {
                                         ?>  
                              
                                       <a target="_blank" title="Da clic para visualizarlo o descargarlo" href="../../assets/censomaquinaria/<?= $data->consumibles_maquina_4 ?>">
                                    <font color="green"> Ya tienes un archivo cargado, da clic aqui para visualizarlo o descargarlo</font></a>
                                    <br><font color="purple">Selecciona si deseas actualizar el archivo</font>
                                 <input type="file" name="consumibles_maquina_4">
                                                                  
                                 <?php
                                    }
                                    ?>
        
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
                                <textarea name="info_maquina_5"  id="info_maquina_5"  class="form-control input-sm" rows="1" cols="80" style="background-color:#C1FFFA;resize:none;display: block"><?= $data->info_maquina_5 ?></textarea>
                      </div>
                            
                            
                            
                                                        
                     <div class="form-group col-xs-3"> 

                                       <label id="lbl_tipo_maquina_5" style="display: block"> Tipo de máquina  </label>


                                <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="tipo_maquina_5" id="maquina_5"  class="form-control input-sm" > 
                                  <optgroup label="Selecciona una opción">
                                       <option value="" <?php if ($data->tipo_maquina_5 == "") {echo "Selected"; } ?>>Selecciona una opción</option>
                                       <option value="Flexo" <?php if ($data->tipo_maquina_5 == "Flexo") {echo "Selected"; } ?>>Flexo</option>
                                       <option value="Conversion" <?php if ($data->tipo_maquina_5 == "Conversion"){  echo "Selected";} ?>>Conversion</option>
                                       <option value="Corrugadora" <?php if ($data->tipo_maquina_5 == "Corrugadora"){  echo "Selected";} ?>>Corrugadora</option>
                                        <option value="FRDC" <?php if ($data->tipo_maquina_5 == "FRDC"){  echo "Selected";} ?>>FRDC</option>
                                       <option value="FFG" <?php if ($data->tipo_maquina_5 == "FFG"){  echo "Selected";} ?>>FFG</option>
                                  
                                      
                                  </optgroup>
                                </SELECT>
                     </div>
                            
                            
                                                 <div class="form-group col-xs-3"> 
                                <label id="lbl_modelo_maquina_5" style="display: block">Marca </label>
                                
                             <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="modelo_maquina_5" id="marca_maquina_5"  class="form-control input-sm" > 
                                <optgroup label="Selecciona una opción">
                                     
                                     <option value="" <?php if ($data->modelo_maquina_5 == "") {echo "Selected"; } ?>></option>
                                     <!--FLEXO-->
                                        <option value="CURIONI" <?php if ($data->modelo_maquina_5 == "CURIONI") {echo "Selected"; } ?>>CURIONI</option>
                                        <option value="DING LONG" <?php if ($data->modelo_maquina_5 == "DING LONG"){  echo "Selected";} ?>>DING LONG</option>
                                        <option value="EMBA" <?php if ($data->modelo_maquina_5 == "EMBA"){  echo "Selected";} ?>>EMBA</option>
                                        <option value="FLYDRAGON" <?php if ($data->modelo_maquina_5 == "FLYDRAGON"){  echo "Selected";} ?>>FLYDRAGON</option>
                                        <option value="GÖPFERT" <?php if ($data->modelo_maquina_5 == "GÖPFERT"){  echo "Selected";} ?>>GÖPFERT</option>
                                        <option value="HOOPER" <?php if ($data->modelo_maquina_5 == "HOOPER"){  echo "Selected";} ?>>HOOPER</option>
                                        <option value="HUALI" <?php if ($data->modelo_maquina_5 == "HUALI"){  echo "Selected";} ?>>HUALI</option>
                                        <option value="ISOWA" <?php if ($data->modelo_maquina_5 == "ISOWA"){  echo "Selected";} ?>>ISOWA</option>
                                        <option value="KL" <?php if ($data->modelo_maquina_5 == "KL") {echo "Selected"; } ?>>KL</option>
                                        <option value="CURIONI" <?php if ($data->modelo_maquina_5 == "CURIONI") {echo "Selected"; } ?>>CURIONI</option>
                                        <option value="DING LONG" <?php if ($data->modelo_maquina_5 == "DING LONG"){  echo "Selected";} ?>>DING LONG</option>
                                        <option value="EMBA" <?php if ($data->modelo_maquina_5 == "EMBA"){  echo "Selected";} ?>>EMBA</option>
                                        <option value="FLYDRAGON" <?php if ($data->modelo_maquina_5 == "FLYDRAGON"){  echo "Selected";} ?>>FLYDRAGON</option>
                                        <option value="GÖPFERT" <?php if ($data->modelo_maquina_5 == "GÖPFERT"){  echo "Selected";} ?>>GÖPFERT</option>
                                        <option value="HOOPER" <?php if ($data->modelo_maquina_5 == "HOOPER"){  echo "Selected";} ?>>HOOPER</option>
                                        <option value="HUALI" <?php if ($data->modelo_maquina_5 == "HUALI"){  echo "Selected";} ?>>HUALI</option>
                                        <option value="ISOWA" <?php if ($data->modelo_maquina_5 == "ISOWA"){  echo "Selected";} ?>>ISOWA</option>
                                        <option value="KOOPER" <?php if ($data->modelo_maquina_5 == "KOOPER") {echo "Selected"; } ?>>KOOPER</option>
                                        <option value="MACARBOX" <?php if ($data->modelo_maquina_5 == "MACARBOX") {echo "Selected"; } ?>>MACARBOX</option>
                                        <option value="MARTIN" <?php if ($data->modelo_maquina_5 == "MARTIN") {echo "Selected"; } ?>>MARTIN   </option>
                                        <option value="MARVI" <?php if ($data->modelo_maquina_5 == "MARVI") {echo "Selected"; } ?>>MARVI</option>
                                        <option value="STALEY" <?php if ($data->modelo_maquina_5 == "STALEY") {echo "Selected"; } ?>>STALEY</option>
                                        <option value="WARD" <?php if ($data->modelo_maquina_5 == "WARD") {echo "Selected"; } ?>>WARD</option>
                                        <option value="SIMON" <?php if ($data->modelo_maquina_5 == "SIMON") {echo "Selected"; } ?>>SIMON</option>
                                     
                                      <!--CONVERSION-->
                                        <option value="GODSWILL" <?php if ($data->modelo_maquina_5 == "GODSWILL") {echo "Selected"; } ?>>GODSWILL</option>
                                        <option value="GUNGXIN" <?php if ($data->modelo_maquina_5 == "GUNGXIN") {echo "Selected"; } ?>>GUNGXIN</option>
                                        <option value="HAIDAO" <?php if ($data->modelo_maquina_5 == "HAIDAO") {echo "Selected"; } ?>>HAIDAO   </option>
                                        <option value="HEBEI" <?php if ($data->modelo_maquina_5 == "HEBEI") {echo "Selected"; } ?>>HEBEI</option>
                                        <option value="HUATAO" <?php if ($data->modelo_maquina_5 == "HUATAO") {echo "Selected"; } ?>>HUATAO</option>
                                        <option value="JASTU" <?php if ($data->modelo_maquina_5 == "JASTU") {echo "Selected"; } ?>>JASTU</option>
                                        <option value="JIAJIE" <?php if ($data->modelo_maquina_5 == "JIAJIE") {echo "Selected"; } ?>>JIAJIE</option>
                                        <option value="SRPACK" <?php if ($data->modelo_maquina_5 == "SRPACK") {echo "Selected"; } ?>>SRPACK</option>
                                        <option value="AOKE" <?php if ($data->modelo_maquina_5 == "AOKE") {echo "Selected"; } ?>>AOKE</option>
                                      
                                      <!--CORRUGADORAS-->
                                        <option value="TECASA" <?php if ($data->modelo_maquina_5 == "TECASA") {echo "Selected"; } ?>>TECASA</option>
                                        <option value="WANLIAN" <?php if ($data->modelo_maquina_5 == "WANLIAN") {echo "Selected"; } ?>>WANLIAN</option


                                </optgroup>
                           </SELECT>
                                
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
                                /*case "Ejemplo":
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
                                        var option5 = document.createElement("option");
                                        option5.text = array[v];
                                        sel5.add(option5);
                                }
                        }
	</script>

                                
                     </div>
                            
                            
                            
                              <div class="form-group col-xs-3"> 
                                <label id="lbl_medida_maquina_5" style="display: block">Medida  </label>
                     
                                 
                         <!--<SELECT style="background-color:#C1FFFA;resize:block;display: block" name="medida_maquina_5" id="medida_maquina_5"  class="form-control input-sm" > 
                            <optgroup label="Selecciona una opción">
                                 <option value="" <?php if ($data->medida_maquina_5 == "") {echo "Selected"; } ?>></option>
                                 <option value='35"' <?php if ($data->medida_maquina_5 == '35"') {echo "Selected"; } ?>>35"</option>
                                <option value='50"' <?php if ($data->medida_maquina_5 == '50"'){  echo "Selected";} ?>>50"</option>
                                 <option value='66"'<?php if ($data->medida_maquina_5 == '66"'){  echo "Selected";} ?>>66"</option>
                                  <option value="NO APLICA" <?php if ($data->medida_maquina_5 == "NO APLICA"){  echo "Selected";} ?>>NO APLICA</option>
                            </optgroup>
                        </SELECT>-->
                         
                                  
                          <textarea name="medida_maquina_5"  id="medida_maquina_5" class="form-control input-sm" rows="1" cols="80" style="background-color:#C1FFFA;resize:block;display: block" placeholder=""><?= $data->medida_maquina_5 ?></textarea>
                          
                      </div>
                            
                          </div> 
                        
                       
                        
                        
                        <div class="row">
                            
                                                 <div class="form-group col-xs-3"> 
                            <label id="lbl_troquel_maquina_5" style="display: block"> Troquel  </label>
                              
                            <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="troquel_maquina_5" id="troquel_maquina_5"  class="form-control input-sm" > 
                               <optgroup label="Selecciona una opción">
                                <option value="" <?php if ($data->troquel_maquina_5 == "") {echo "Selected"; } ?>></option>
                                <option value= "Sí"<?php if ($data->troquel_maquina_5 == "Sí") {echo "Selected"; } ?>>Sí</option>
                                <option value= "No"<?php if ($data->troquel_maquina_5 == "No") {echo "Selected"; } ?>>No</option>
                                <option value= "No Aplica"<?php if ($data->troquel_maquina_5 == "No Aplica") {echo "Selected"; } ?>>No Aplica</option>
                               </optgroup>
                           </SELECT>
                                
                            </div>
                            
                            
                            
                            
                             <div class="form-group col-xs-3"> 
                                <label id="lbl_codigo_cubierta_maquina_5" style="display: block"> Código Cubierta  </label>
                                <textarea name="codigo_cubierta_maquina_5"  id="codigo_cubierta_maquina_5" class="form-control input-sm" rows="1" cols="80" style="background-color:#C1FFFA;resize:none;display: block" ><?= $data->codigo_cubierta_maquina_5 ?></textarea>
                            </div>
                            
                            
                            <div class="form-group col-xs-3"> 
                                <label id="lbl_cliente_conoce_maquina_5" style="display: block"> Nombre con el que el cliente conoce la máquina?  </label>
                                <textarea name="cliente_conoce_maquina_5"  id="cliente_conoce_maquina_5" class="form-control input-sm" rows="1" cols="80" style="background-color:#C1FFFA;resize:none;display: block"><?= $data->cliente_conoce_maquina_5 ?></textarea>
                            </div>
                       
                            
                       
                                  <div class="form-group col-xs-3">
                            <label for="nombre">Refacciones</label>
                             <?php
                                                      if ($data->refacciones_maquina_5 == null) {
                                                          echo '<br><font color="red">No tienes ningún archivo cargado</font>'
                                                          . '<input type="file"  name="refacciones_maquina_5">';
                                                      } else if ($data->refacciones_maquina_5 != null)  {
                                                           ?>  
                                                
                                       <a target="_blank" title="Da clic para visualizarlo o descargarlo" href="../../assets/censomaquinaria/<?= $data->refacciones_maquina_5 ?>">
                                    <font color="green"> Ya tienes un archivo cargado, da clic aqui para visualizarlo o descargarlo</font></a>
                                    <br><font color="purple">Selecciona si deseas actualizar el archivo</font>
                                                   <input type="file" name="refacciones_maquina_5">
                                                   <?php
                                                      }
                                                      ?>
        
                        </div>

              </div>
            <div class="row">
                            <div class="form-group col-xs-3">
                      <label for="nombre">Cosumibles</label>

                                                     <?php
                                    if ($data->consumibles_maquina_5 == null) {
                                        echo '<br><font color="red">No tienes ningún archivo cargado</font>'
                                        . '<input type="file"  name="consumibles_maquina_5">';
                                    } else if ($data->consumibles_maquina_5 != null) {
                                         ?>  
                         
                                       <a target="_blank" title="Da clic para visualizarlo o descargarlo" href="../../assets/censomaquinaria/<?= $data->consumibles_maquina_5 ?>">
                                    <font color="green"> Ya tienes un archivo cargado, da clic aqui para visualizarlo o descargarlo</font></a>
                                  
                                    <br><font color="purple">Selecciona si deseas actualizar el archivo</font>
                                 <input type="file" name="consumibles_maquina_5">
                                                                  
                                 <?php
                                    }
                                    ?>
        
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
                                <textarea name="info_maquina_6"  id="info_maquina_6"  class="form-control input-sm" rows="1" cols="80" style="background-color:#FFFFFF;resize:none;display: block"><?= $data->info_maquina_6 ?></textarea>
                      </div>
                            
                            
                            
                                                        
                     <div class="form-group col-xs-3"> 

                                       <label id="lbl_tipo_maquina_6" style="display: block"> Tipo de máquina  </label>


                                <SELECT style="background-color:#FFFFFF;resize:block;display: block" name="tipo_maquina_6" id="maquina_6"  class="form-control input-sm" > 
                                  <optgroup label="Selecciona una opción">
                                       <option value="" <?php if ($data->tipo_maquina_6 == "") {echo "Selected"; } ?>>Selecciona una opción</option>
                                       <option value="Flexo" <?php if ($data->tipo_maquina_6 == "Flexo") {echo "Selected"; } ?>>Flexo</option>
                                       <option value="Conversion" <?php if ($data->tipo_maquina_6 == "Conversion"){  echo "Selected";} ?>>Conversion</option>
                                       <option value="Corrugadora" <?php if ($data->tipo_maquina_6 == "Corrugadora"){  echo "Selected";} ?>>Corrugadora</option>
                                        <option value="FRDC" <?php if ($data->tipo_maquina_6 == "FRDC"){  echo "Selected";} ?>>FRDC</option>
                                       <option value="FFG" <?php if ($data->tipo_maquina_6 == "FFG"){  echo "Selected";} ?>>FFG</option>
                                  </optgroup>
                                </SELECT>
                     </div>
                            
                            
                                                 <div class="form-group col-xs-3"> 
                                <label id="lbl_modelo_maquina_6" style="display: block">Marca </label>
                                
                             <SELECT style="background-color:#FFFFFF;resize:block;display: block" name="modelo_maquina_6" id="marca_maquina_6"  class="form-control input-sm" > 
                                <optgroup label="Selecciona una opción">
                                     <<option value="" <?php if ($data->modelo_maquina_6 == "") {echo "Selected"; } ?>></option>
                                     <!--FLEXO-->
                                        <option value="CURIONI" <?php if ($data->modelo_maquina_6 == "CURIONI") {echo "Selected"; } ?>>CURIONI</option>
                                        <option value="DING LONG" <?php if ($data->modelo_maquina_6 == "DING LONG"){  echo "Selected";} ?>>DING LONG</option>
                                        <option value="EMBA" <?php if ($data->modelo_maquina_6 == "EMBA"){  echo "Selected";} ?>>EMBA</option>
                                        <option value="FLYDRAGON" <?php if ($data->modelo_maquina_6 == "FLYDRAGON"){  echo "Selected";} ?>>FLYDRAGON</option>
                                        <option value="GÖPFERT" <?php if ($data->modelo_maquina_6 == "GÖPFERT"){  echo "Selected";} ?>>GÖPFERT</option>
                                        <option value="HOOPER" <?php if ($data->modelo_maquina_6 == "HOOPER"){  echo "Selected";} ?>>HOOPER</option>
                                        <option value="HUALI" <?php if ($data->modelo_maquina_6 == "HUALI"){  echo "Selected";} ?>>HUALI</option>
                                        <option value="ISOWA" <?php if ($data->modelo_maquina_6 == "ISOWA"){  echo "Selected";} ?>>ISOWA</option>
                                        <option value="KL" <?php if ($data->modelo_maquina_6 == "KL") {echo "Selected"; } ?>>KL</option>
                                        <option value="CURIONI" <?php if ($data->modelo_maquina_6 == "CURIONI") {echo "Selected"; } ?>>CURIONI</option>
                                        <option value="DING LONG" <?php if ($data->modelo_maquina_6 == "DING LONG"){  echo "Selected";} ?>>DING LONG</option>
                                        <option value="EMBA" <?php if ($data->modelo_maquina_6 == "EMBA"){  echo "Selected";} ?>>EMBA</option>
                                        <option value="FLYDRAGON" <?php if ($data->modelo_maquina_6 == "FLYDRAGON"){  echo "Selected";} ?>>FLYDRAGON</option>
                                        <option value="GÖPFERT" <?php if ($data->modelo_maquina_6 == "GÖPFERT"){  echo "Selected";} ?>>GÖPFERT</option>
                                        <option value="HOOPER" <?php if ($data->modelo_maquina_6 == "HOOPER"){  echo "Selected";} ?>>HOOPER</option>
                                        <option value="HUALI" <?php if ($data->modelo_maquina_6 == "HUALI"){  echo "Selected";} ?>>HUALI</option>
                                        <option value="ISOWA" <?php if ($data->modelo_maquina_6 == "ISOWA"){  echo "Selected";} ?>>ISOWA</option>
                                        <option value="KOOPER" <?php if ($data->modelo_maquina_6 == "KOOPER") {echo "Selected"; } ?>>KOOPER</option>
                                        <option value="MACARBOX" <?php if ($data->modelo_maquina_6 == "MACARBOX") {echo "Selected"; } ?>>MACARBOX</option>
                                        <option value="MARTIN" <?php if ($data->modelo_maquina_6 == "MARTIN") {echo "Selected"; } ?>>MARTIN   </option>
                                        <option value="MARVI" <?php if ($data->modelo_maquina_6 == "MARVI") {echo "Selected"; } ?>>MARVI</option>
                                        <option value="STALEY" <?php if ($data->modelo_maquina_6 == "STALEY") {echo "Selected"; } ?>>STALEY</option>
                                        <option value="WARD" <?php if ($data->modelo_maquina_6 == "WARD") {echo "Selected"; } ?>>WARD</option>
                                        <option value="SIMON" <?php if ($data->modelo_maquina_6 == "SIMON") {echo "Selected"; } ?>>SIMON</option>
                                     
                                      <!--CONVERSION-->
                                        <option value="GODSWILL" <?php if ($data->modelo_maquina_6 == "GODSWILL") {echo "Selected"; } ?>>GODSWILL</option>
                                        <option value="GUNGXIN" <?php if ($data->modelo_maquina_6 == "GUNGXIN") {echo "Selected"; } ?>>GUNGXIN</option>
                                        <option value="HAIDAO" <?php if ($data->modelo_maquina_6 == "HAIDAO") {echo "Selected"; } ?>>HAIDAO   </option>
                                        <option value="HEBEI" <?php if ($data->modelo_maquina_6 == "HEBEI") {echo "Selected"; } ?>>HEBEI</option>
                                        <option value="HUATAO" <?php if ($data->modelo_maquina_6 == "HUATAO") {echo "Selected"; } ?>>HUATAO</option>
                                        <option value="JASTU" <?php if ($data->modelo_maquina_6 == "JASTU") {echo "Selected"; } ?>>JASTU</option>
                                        <option value="JIAJIE" <?php if ($data->modelo_maquina_6 == "JIAJIE") {echo "Selected"; } ?>>JIAJIE</option>
                                        <option value="SRPACK" <?php if ($data->modelo_maquina_6 == "SRPACK") {echo "Selected"; } ?>>SRPACK</option>
                                        <option value="AOKE" <?php if ($data->modelo_maquina_6 == "AOKE") {echo "Selected"; } ?>>AOKE</option>
                                      
                                      <!--CORRUGADORAS-->
                                        <option value="TECASA" <?php if ($data->modelo_maquina_6 == "TECASA") {echo "Selected"; } ?>>TECASA</option>
                                        <option value="WANLIAN" <?php if ($data->modelo_maquina_6 == "WANLIAN") {echo "Selected"; } ?>>WANLIAN</option


                                </optgroup>
                           </SELECT>
                                
                                
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
                                /*case "Ejemplo":
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
                                        var option6 = document.createElement("option");
                                        option6.text = array[v];
                                        sel6.add(option6);
                                }
                        }
	</script>

                                
                     </div>
                            
                            
                            
                              <div class="form-group col-xs-3"> 
                                <label id="lbl_medida_maquina_6" style="display: block">Medida  </label>
                     
                                 
                         <!--<SELECT style="background-color:#FFFFFF;resize:block;display: block" name="medida_maquina_6" id="medida_maquina_6"  class="form-control input-sm" > 
                            <optgroup label="Selecciona una opción">
                                 <option value="" <?php if ($data->medida_maquina_6 == "") {echo "Selected"; } ?>></option>
                                 <option value='35"' <?php if ($data->medida_maquina_6 == '35"') {echo "Selected"; } ?>>35"</option>
                                <option value='50"' <?php if ($data->medida_maquina_6 == '50"'){  echo "Selected";} ?>>50"</option>
                                 <option value='66"'<?php if ($data->medida_maquina_6 == '66"'){  echo "Selected";} ?>>66"</option>
                                  <option value="NO APLICA" <?php if ($data->medida_maquina_6 == "NO APLICA"){  echo "Selected";} ?>>NO APLICA</option>
                            </optgroup>
                        </SELECT>-->
                         
                                  
                          <textarea name="medida_maquina_6"  id="medida_maquina_6" class="form-control input-sm" rows="1" cols="80" style="background-color:#C1FFFA;resize:none;display: block" placeholder=""><?= $data->medida_maquina_6 ?></textarea>
                          
                      </div>
                            
                          </div> 
                        
                       
                        
                        
                        <div class="row">
                            
                                                 <div class="form-group col-xs-3"> 
                            <label id="lbl_troquel_maquina_6" style="display: block"> Troquel  </label>
                              
                            <SELECT style="background-color:#FFFFFF;resize:block;display: block" name="troquel_maquina_6" id="troquel_maquina_6"  class="form-control input-sm" > 
                               <optgroup label="Selecciona una opción">
                                <option value="" <?php if ($data->troquel_maquina_6 == "") {echo "Selected"; } ?>></option>
                                <option value= "Sí"<?php if ($data->troquel_maquina_6 == "Sí") {echo "Selected"; } ?>>Sí</option>
                                <option value= "No"<?php if ($data->troquel_maquina_6 == "No") {echo "Selected"; } ?>>No</option>
                                <option value= "No Aplica"<?php if ($data->troquel_maquina_6 == "No Aplica") {echo "Selected"; } ?>>No Aplica</option>
                               </optgroup>
                           </SELECT>
                                
                            </div>
                            
                            
                            
                            
                             <div class="form-group col-xs-3"> 
                                <label id="lbl_codigo_cubierta_maquina_6" style="display: block"> Código Cubierta  </label>
                                <textarea name="codigo_cubierta_maquina_6"  id="codigo_cubierta_maquina_6" class="form-control input-sm" rows="1" cols="80" style="background-color:#FFFFFF;resize:none;display: block" placeholder=""><?= $data->codigo_cubierta_maquina_6 ?></textarea>
                            </div>
                            
                            
                            <div class="form-group col-xs-3"> 
                                <label id="lbl_cliente_conoce_maquina_6" style="display: block"> Nombre con el que el cliente conoce la máquina  </label>
                                <textarea name="cliente_conoce_maquina_6"  id="cliente_conoce_maquina_6" class="form-control input-sm" rows="1" cols="80" style="background-color:#FFFFFF;resize:none;display: block" placeholder=""><?= $data->cliente_conoce_maquina_6 ?></textarea>
                            </div>
                            



                        
                                  <div class="form-group col-xs-3">
                            <label for="nombre">Refacciones</label>
                             <?php
                                                      if ($data->refacciones_maquina_6 == null) {
                                                          echo '<br><font color="red">No tienes ningún archivo cargado</font>'
                                                          . '<input type="file"  name="refacciones_maquina_6">';
                                                      } else if ($data->refacciones_maquina_6 != null)  {
                                                           ?>  
                                                
                                       <a target="_blank" title="Da clic para visualizarlo o descargarlo" href="../../assets/censomaquinaria/<?= $data->refacciones_maquina_6 ?>">
                                    <font color="green"> Ya tienes un archivo cargado, da clic aqui para visualizarlo o descargarlo</font></a>
                                    <br><font color="purple">Selecciona si deseas actualizar el archivo</font>
                                                   <input type="file" name="refacciones_maquina_6">
                                                   <?php
                                                      }
                                                      ?>
        
                        </div>

              </div>
            <div class="row">
                            <div class="form-group col-xs-3">
                      <label for="nombre">Cosumibles</label>

                                                     <?php
                                    if ($data->consumibles_maquina_6 == null) {
                                        echo '<br><font color="red">No tienes ningún archivo cargado</font>'
                                        . '<input type="file"  name="consumibles_maquina_6">';
                                    } else if ($data->consumibles_maquina_6 != null) {
                                         ?>  
                               
                                       <a target="_blank" title="Da clic para visualizarlo o descargarlo" href="../../assets/censomaquinaria/<?= $data->consumibles_maquina_6 ?>">
                                    <font color="green"> Ya tienes un archivo cargado, da clic aqui para visualizarlo o descargarlo</font></a>
                                    <br><font color="purple">Selecciona si deseas actualizar el archivo</font>
                                 <input type="file" name="consumibles_maquina_6">
                                                                  
                                 <?php
                                    }
                                    ?>
        
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
                                <textarea name="info_maquina_7"  id="info_maquina_7"  class="form-control input-sm" rows="1" cols="80" style="background-color:#C1FFFA;resize:none;display: block"><?= $data->info_maquina_7 ?></textarea>
                      </div>
                            
                            
                            
                                                        
                     <div class="form-group col-xs-3"> 

                                       <label id="lbl_tipo_maquina_7" style="display: block"> Tipo de máquina  </label>


                                <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="tipo_maquina_7" id="maquina_7"  class="form-control input-sm" > 
                                  <optgroup label="Selecciona una opción">
                                       <option value="" <?php if ($data->tipo_maquina_7 == "") {echo "Selected"; } ?>>Selecciona una opción</option>
                                       <option value="Flexo" <?php if ($data->tipo_maquina_7 == "Flexo") {echo "Selected"; } ?>>Flexo</option>
                                       <option value="Conversion" <?php if ($data->tipo_maquina_7 == "Conversion"){  echo "Selected";} ?>>Conversion</option>
                                       <option value="Corrugadora" <?php if ($data->tipo_maquina_7 == "Corrugadora"){  echo "Selected";} ?>>Corrugadora</option>
                                       <option value="FRDC" <?php if ($data->tipo_maquina_7 == "FRDC"){  echo "Selected";} ?>>FRDC</option>
                                       <option value="FFG" <?php if ($data->tipo_maquina_7 == "FFG"){  echo "Selected";} ?>>FFG</option>

                                  </optgroup>
                                </SELECT>
                     </div>
                            
                            
                                                 <div class="form-group col-xs-3"> 
                                <label id="lbl_modelo_maquina_7" style="display: block">Marca </label>
                                
                             <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="modelo_maquina_7" id="marca_maquina_7"  class="form-control input-sm" > 
                                <optgroup label="Selecciona una opción">
                                  
                                    <option value="" <?php if ($data->modelo_maquina_7 == "") {echo "Selected"; } ?>></option>
                                     <!--FLEXO-->
                                        <option value="CURIONI" <?php if ($data->modelo_maquina_7 == "CURIONI") {echo "Selected"; } ?>>CURIONI</option>
                                        <option value="DING LONG" <?php if ($data->modelo_maquina_7 == "DING LONG"){  echo "Selected";} ?>>DING LONG</option>
                                        <option value="EMBA" <?php if ($data->modelo_maquina_7 == "EMBA"){  echo "Selected";} ?>>EMBA</option>
                                        <option value="FLYDRAGON" <?php if ($data->modelo_maquina_7 == "FLYDRAGON"){  echo "Selected";} ?>>FLYDRAGON</option>
                                        <option value="GÖPFERT" <?php if ($data->modelo_maquina_7 == "GÖPFERT"){  echo "Selected";} ?>>GÖPFERT</option>
                                        <option value="HOOPER" <?php if ($data->modelo_maquina_7 == "HOOPER"){  echo "Selected";} ?>>HOOPER</option>
                                        <option value="HUALI" <?php if ($data->modelo_maquina_7 == "HUALI"){  echo "Selected";} ?>>HUALI</option>
                                        <option value="ISOWA" <?php if ($data->modelo_maquina_7 == "ISOWA"){  echo "Selected";} ?>>ISOWA</option>
                                        <option value="KL" <?php if ($data->modelo_maquina_7 == "KL") {echo "Selected"; } ?>>KL</option>
                                        <option value="CURIONI" <?php if ($data->modelo_maquina_7 == "CURIONI") {echo "Selected"; } ?>>CURIONI</option>
                                        <option value="DING LONG" <?php if ($data->modelo_maquina_7 == "DING LONG"){  echo "Selected";} ?>>DING LONG</option>
                                        <option value="EMBA" <?php if ($data->modelo_maquina_7 == "EMBA"){  echo "Selected";} ?>>EMBA</option>
                                        <option value="FLYDRAGON" <?php if ($data->modelo_maquina_7 == "FLYDRAGON"){  echo "Selected";} ?>>FLYDRAGON</option>
                                        <option value="GÖPFERT" <?php if ($data->modelo_maquina_7 == "GÖPFERT"){  echo "Selected";} ?>>GÖPFERT</option>
                                        <option value="HOOPER" <?php if ($data->modelo_maquina_7 == "HOOPER"){  echo "Selected";} ?>>HOOPER</option>
                                        <option value="HUALI" <?php if ($data->modelo_maquina_7 == "HUALI"){  echo "Selected";} ?>>HUALI</option>
                                        <option value="ISOWA" <?php if ($data->modelo_maquina_7 == "ISOWA"){  echo "Selected";} ?>>ISOWA</option>
                                        <option value="KOOPER" <?php if ($data->modelo_maquina_7 == "KOOPER") {echo "Selected"; } ?>>KOOPER</option>
                                        <option value="MACARBOX" <?php if ($data->modelo_maquina_7 == "MACARBOX") {echo "Selected"; } ?>>MACARBOX</option>
                                        <option value="MARTIN" <?php if ($data->modelo_maquina_7 == "MARTIN") {echo "Selected"; } ?>>MARTIN   </option>
                                        <option value="MARVI" <?php if ($data->modelo_maquina_7 == "MARVI") {echo "Selected"; } ?>>MARVI</option>
                                        <option value="STALEY" <?php if ($data->modelo_maquina_7 == "STALEY") {echo "Selected"; } ?>>STALEY</option>
                                        <option value="WARD" <?php if ($data->modelo_maquina_7 == "WARD") {echo "Selected"; } ?>>WARD</option>
                                        <option value="SIMON" <?php if ($data->modelo_maquina_7 == "SIMON") {echo "Selected"; } ?>>SIMON</option>
                                     
                                      <!--CONVERSION-->
                                        <option value="GODSWILL" <?php if ($data->modelo_maquina_7 == "GODSWILL") {echo "Selected"; } ?>>GODSWILL</option>
                                        <option value="GUNGXIN" <?php if ($data->modelo_maquina_7 == "GUNGXIN") {echo "Selected"; } ?>>GUNGXIN</option>
                                        <option value="HAIDAO" <?php if ($data->modelo_maquina_7 == "HAIDAO") {echo "Selected"; } ?>>HAIDAO   </option>
                                        <option value="HEBEI" <?php if ($data->modelo_maquina_7 == "HEBEI") {echo "Selected"; } ?>>HEBEI</option>
                                        <option value="HUATAO" <?php if ($data->modelo_maquina_7 == "HUATAO") {echo "Selected"; } ?>>HUATAO</option>
                                        <option value="JASTU" <?php if ($data->modelo_maquina_7 == "JASTU") {echo "Selected"; } ?>>JASTU</option>
                                        <option value="JIAJIE" <?php if ($data->modelo_maquina_7 == "JIAJIE") {echo "Selected"; } ?>>JIAJIE</option>
                                        <option value="SRPACK" <?php if ($data->modelo_maquina_7 == "SRPACK") {echo "Selected"; } ?>>SRPACK</option>
                                        <option value="AOKE" <?php if ($data->modelo_maquina_7 == "AOKE") {echo "Selected"; } ?>>AOKE</option>
                                      
                                      <!--CORRUGADORAS-->
                                        <option value="TECASA" <?php if ($data->modelo_maquina_7 == "TECASA") {echo "Selected"; } ?>>TECASA</option>
                                        <option value="WANLIAN" <?php if ($data->modelo_maquina_7 == "WANLIAN") {echo "Selected"; } ?>>WANLIAN</option

                                        
                                    
                                    
                                </optgroup>
                           </SELECT>
                                
                                
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
                                /*case "Ejemplo":
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
                        
                                
                         
                        <!-- <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="medida_maquina_7" id="medida_maquina_7"  class="form-control input-sm" > 
                            <optgroup label="Selecciona una opción">
                                 <option value="" <?php if ($data->medida_maquina_7 == "") {echo "Selected"; } ?>></option>
                                 <option value='35"' <?php if ($data->medida_maquina_7 == '35"') {echo "Selected"; } ?>>35"</option>
                                <option value='50"' <?php if ($data->medida_maquina_7 == '50"'){  echo "Selected";} ?>>50"</option>
                                 <option value='66"'<?php if ($data->medida_maquina_7 == '66"'){  echo "Selected";} ?>>66"</option>
                                  <option value="NO APLICA" <?php if ($data->medida_maquina_7 == "NO APLICA"){  echo "Selected";} ?>>NO APLICA</option>
                            </optgroup>
                        </SELECT>-->
                        
                        
                              <textarea name="medida_maquina_7"  id="medida_maquina_7" class="form-control input-sm" rows="1" cols="80" style="background-color:#C1FFFA;resize:none;display: block" placeholder=""><?= $data->medida_maquina_7 ?></textarea>
                          
                      </div>
                            
                          </div> 
                        
                       
                        
                        
                        <div class="row">
                            
                                                 <div class="form-group col-xs-3"> 
                            <label id="lbl_troquel_maquina_7" style="display: block"> Troquel  </label>
                              
                            <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="troquel_maquina_7" id="troquel_maquina_7"  class="form-control input-sm" > 
                               <optgroup label="Selecciona una opción">
                                <option value="" <?php if ($data->troquel_maquina_7 == "") {echo "Selected"; } ?>></option>
                                <option value= "Sí"<?php if ($data->troquel_maquina_7 == "Sí") {echo "Selected"; } ?>>Sí</option>
                                <option value= "No"<?php if ($data->troquel_maquina_7 == "No") {echo "Selected"; } ?>>No</option>
                                <option value= "No Aplica"<?php if ($data->troquel_maquina_7 == "No Aplica") {echo "Selected"; } ?>>No Aplica</option>
                               </optgroup>
                           </SELECT>
                                
                            </div>
                            
                            
                            
                            
                             <div class="form-group col-xs-3"> 
                                <label id="lbl_codigo_cubierta_maquina_7" style="display: block"> Código Cubierta  </label>
                                <textarea name="codigo_cubierta_maquina_7"  id="codigo_cubierta_maquina_7" class="form-control input-sm" rows="1" cols="80" style="background-color:#C1FFFA;resize:none;display: block" placeholder=""><?= $data->codigo_cubierta_maquina_7 ?></textarea>
                            </div>
                            
                            
                            <div class="form-group col-xs-3"> 
                                <label id="lbl_cliente_conoce_maquina_7" style="display: block"> Nombre con el que el cliente conoce la máquina </label>
                                <textarea name="cliente_conoce_maquina_7"  id="cliente_conoce_maquina_7" class="form-control input-sm" rows="1" cols="80" style="background-color:#C1FFFA;resize:none;display: block" placeholder=""><?= $data->cliente_conoce_maquina_7 ?></textarea>
                            </div>
                            

                            
                            
                            
                            



                        
                      
                                  <div class="form-group col-xs-3">
                            <label for="nombre">Refacciones</label>
                             <?php
                                                      if ($data->refacciones_maquina_7 == null) {
                                                          echo '<br><font color="red">No tienes ningún archivo cargado</font>'
                                                          . '<input type="file"  name="refacciones_maquina_7">';
                                                      } else if ($data->refacciones_maquina_7 != null)  {
                                                           ?>  
                                               
                                       <a target="_blank" title="Da clic para visualizarlo o descargarlo" href="../../assets/censomaquinaria/<?= $data->refacciones_maquina_7 ?>">
                                    <font color="green"> Ya tienes un archivo cargado, da clic aqui para visualizarlo o descargarlo</font></a>
                                    <br><font color="purple">Selecciona si deseas actualizar el archivo</font>
                                                   <input type="file" name="refacciones_maquina_7">
                                                   <?php
                                                      }
                                                      ?>
        
                        </div>

              </div>
            <div class="row">
                            <div class="form-group col-xs-3">
                      <label for="nombre">Cosumibles</label>

                                                     <?php
                                    if ($data->consumibles_maquina_7 == null) {
                                        echo '<br><font color="red">No tienes ningún archivo cargado</font>'
                                        . '<input type="file"  name="consumibles_maquina_7">';
                                    } else if ($data->consumibles_maquina_7 != null) {
                                         ?>  

                                       <a target="_blank" title="Da clic para visualizarlo o descargarlo" href="../../assets/censomaquinaria/<?= $data->consumibles_maquina_7 ?>">
                                    <font color="green"> Ya tienes un archivo cargado, da clic aqui para visualizarlo o descargarlo</font></a>
                                    <br><font color="purple">Selecciona si deseas actualizar el archivo</font>
                                 <input type="file" name="consumibles_maquina_7">
                                                                  
                                 <?php
                                    }
                                    ?>
        
            </div>
                            

                        </div>
                        

                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        

                      <!--  <div class="row">
                            <div class="form-group col-xs-6"> 
                                <label id="lbl_info_maquina_3" style="display: block">Maquina 3  </label>
                                <textarea name="info_maquina_3"  id="info_maquina_3" class="form-control input-sm" rows="3" cols="80" style="resize:block;display: block" placeholder="Ingresa marca , modelo y medida de la máquina"><?= $data->info_maquina_3 ?></textarea>
=======
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-6"> 
                                <label id="lbl_info_maquina_1" style="display: none">Maquina 1  </label>
                                <textarea name="info_maquina_1"  id="info_maquina_1" class="form-control input-sm" rows="3" cols="80" style="resize:none;display: none" placeholder="Ingresa marca , modelo y medida de la máquina"><?= $data->info_maquina_1 ?></textarea>
                            </div>

                            <div class="form-group col-xs-6"> 
                                <label id="lbl_info_maquina_2" style="display: none">Maquina 2  </label>
                                <textarea name="info_maquina_2" id="info_maquina_2" class="form-control input-sm" rows="3" cols="80" style="resize:none;display: none" placeholder="Ingresa marca , modelo y medida de la máquina"><?= $data->info_maquina_2 ?></textarea>
                            </div>
                        </div>




                        <div class="row">
                            <div class="form-group col-xs-6"> 
                                <label id="lbl_info_maquina_3" style="display: none">Maquina 3  </label>
                                <textarea name="info_maquina_3"  id="info_maquina_3" class="form-control input-sm" rows="3" cols="80" style="resize:none;display: none" placeholder="Ingresa marca , modelo y medida de la máquina"><?= $data->info_maquina_3 ?></textarea>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            </div>



                            <div class="form-group col-xs-6"> 
<<<<<<< HEAD
                                <label id="lbl_info_maquina_4" style="display: block">Maquina 4  </label>
                                <textarea name="info_maquina_4"  id="info_maquina_4" class="form-control input-sm" rows="3" cols="80" style="resize:block;display: block" placeholder="Ingresa marca , modelo y medida de la máquina"><?= $data->info_maquina_4 ?></textarea>
=======
                                <label id="lbl_info_maquina_4" style="display: none">Maquina 4  </label>
                                <textarea name="info_maquina_4"  id="info_maquina_4" class="form-control input-sm" rows="3" cols="80" style="resize:none;display: none" placeholder="Ingresa marca , modelo y medida de la máquina"><?= $data->info_maquina_4 ?></textarea>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            </div>
                        </div>


                        <div class="row">
                            <div class="form-group col-xs-6"> 
<<<<<<< HEAD
                                <label id="lbl_info_maquina_5" style="display: block">Maquina 5 111  </label>
                                <textarea name="info_maquina_5" id="info_maquina_5" class="form-control input-sm" rows="3" cols="80" style="resize:block;display: block" placeholder="Ingresa marca , modelo y medida de la máquina"><?= $data->info_maquina_5 ?></textarea>
=======
                                <label id="lbl_info_maquina_5" style="display: none">Maquina 5  </label>
                                <textarea name="info_maquina_5" id="info_maquina_5" class="form-control input-sm" rows="3" cols="80" style="resize:none;display: none" placeholder="Ingresa marca , modelo y medida de la máquina"><?= $data->info_maquina_5 ?></textarea>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            </div>


                            <div class="form-group col-xs-6"> 
<<<<<<< HEAD
                                <label id="lbl_info_maquina_6" style="display: block">Maquina 6  </label>
                                <textarea name="info_maquina_6"  id="info_maquina_6" class="form-control input-sm" rows="3" cols="80" style="resize:block;display: block" placeholder="Ingresa marca , modelo y medida de la máquina"><?= $data->info_maquina_6 ?></textarea>
=======
                                <label id="lbl_info_maquina_6" style="display: none">Maquina 6  </label>
                                <textarea name="info_maquina_6"  id="info_maquina_6" class="form-control input-sm" rows="3" cols="80" style="resize:none;display: none" placeholder="Ingresa marca , modelo y medida de la máquina"><?= $data->info_maquina_6 ?></textarea>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            </div>
                        </div>


                        <div class="row">
                            <div class="form-group col-xs-6"> 
<<<<<<< HEAD
                                <label id="lbl_info_maquina_7" style="display: block">Maquina 7 </label>
                                <textarea name="info_maquina_7"  id="info_maquina_7" class="form-control input-sm" rows="3" cols="80" style="resize:block;display: block"
                                          placeholder="Ingresa marca , modelo y medida de la máquina">
                                        <?= $data->info_maquina_7 ?></textarea>
                            </div>
                        </div>
-->
                    
                    
                        <!--Inicio Máquina 8 -->
                                               
                         <div class="row">
                                    <div class="form-group col-xs-4"></div>
                                    <div class="form-group col-xs-4"><label id="lbl_maquina_8" style="display: block"><h3>MÁQUINA 8</h3> </label></div>
                                      <div class="form-group col-xs-4"></div>
                            </div>
                        <div class="row">
                        
                                                  <div class="form-group col-xs-3"> 
                                <label id="lbl_info_maquina_8" style="display: block"> Maquina </label>
                                <textarea name="info_maquina_8"  id="info_maquina_8"  class="form-control input-sm" rows="1" cols="80" style="resize:none;display: block"><?= $data->info_maquina_8 ?></textarea>
                      </div>
                            
                            
                            
                                                        
                     <div class="form-group col-xs-3"> 

                                       <label id="lbl_tipo_maquina_8" style="display: block"> Tipo de máquina  </label>


                                <SELECT style="resize:block;display: block" name="tipo_maquina_8" id="maquina_8"  class="form-control input-sm" > 
                                  <optgroup label="Selecciona una opción">
                                       <option value="" <?php if ($data->tipo_maquina_8 == "") {echo "Selected"; } ?>>Selecciona una opción</option>
                                       <option value="Flexo" <?php if ($data->tipo_maquina_8 == "Flexo") {echo "Selected"; } ?>>Flexo</option>
                                       <option value="Conversion" <?php if ($data->tipo_maquina_8 == "Conversion"){  echo "Selected";} ?>>Conversion</option>
                                       <option value="Corrugadora" <?php if ($data->tipo_maquina_8 == "Corrugadora"){  echo "Selected";} ?>>Corrugadora</option>
                                       <option value="FRDC" <?php if ($data->tipo_maquina_8 == "FRDC"){  echo "Selected";} ?>>FRDC</option>
                                       <option value="FFG" <?php if ($data->tipo_maquina_8 == "FFG"){  echo "Selected";} ?>>FFG</option>

                                  </optgroup>
                                </SELECT>
                     </div>
                            
                            
                                                 <div class="form-group col-xs-3"> 
                                <label id="lbl_modelo_maquina_8" style="display: block">Marca </label>
                                
                             <SELECT style="resize:block;display: block" name="modelo_maquina_8" id="marca_maquina_8"  class="form-control input-sm" > 
                                <optgroup label="Selecciona una opción">
                                  
                                    <option value="" <?php if ($data->modelo_maquina_8 == "") {echo "Selected"; } ?>></option>
                                     <!--FLEXO-->
                                        <option value="CURIONI" <?php if ($data->modelo_maquina_8 == "CURIONI") {echo "Selected"; } ?>>CURIONI</option>
                                        <option value="DING LONG" <?php if ($data->modelo_maquina_8 == "DING LONG"){  echo "Selected";} ?>>DING LONG</option>
                                        <option value="EMBA" <?php if ($data->modelo_maquina_8 == "EMBA"){  echo "Selected";} ?>>EMBA</option>
                                        <option value="FLYDRAGON" <?php if ($data->modelo_maquina_8 == "FLYDRAGON"){  echo "Selected";} ?>>FLYDRAGON</option>
                                        <option value="GÖPFERT" <?php if ($data->modelo_maquina_8 == "GÖPFERT"){  echo "Selected";} ?>>GÖPFERT</option>
                                        <option value="HOOPER" <?php if ($data->modelo_maquina_8 == "HOOPER"){  echo "Selected";} ?>>HOOPER</option>
                                        <option value="HUALI" <?php if ($data->modelo_maquina_8 == "HUALI"){  echo "Selected";} ?>>HUALI</option>
                                        <option value="ISOWA" <?php if ($data->modelo_maquina_8 == "ISOWA"){  echo "Selected";} ?>>ISOWA</option>
                                        <option value="KL" <?php if ($data->modelo_maquina_8 == "KL") {echo "Selected"; } ?>>KL</option>
                                        <option value="CURIONI" <?php if ($data->modelo_maquina_8 == "CURIONI") {echo "Selected"; } ?>>CURIONI</option>
                                        <option value="DING LONG" <?php if ($data->modelo_maquina_8 == "DING LONG"){  echo "Selected";} ?>>DING LONG</option>
                                        <option value="EMBA" <?php if ($data->modelo_maquina_8 == "EMBA"){  echo "Selected";} ?>>EMBA</option>
                                        <option value="FLYDRAGON" <?php if ($data->modelo_maquina_8 == "FLYDRAGON"){  echo "Selected";} ?>>FLYDRAGON</option>
                                        <option value="GÖPFERT" <?php if ($data->modelo_maquina_8 == "GÖPFERT"){  echo "Selected";} ?>>GÖPFERT</option>
                                        <option value="HOOPER" <?php if ($data->modelo_maquina_8 == "HOOPER"){  echo "Selected";} ?>>HOOPER</option>
                                        <option value="HUALI" <?php if ($data->modelo_maquina_8 == "HUALI"){  echo "Selected";} ?>>HUALI</option>
                                        <option value="ISOWA" <?php if ($data->modelo_maquina_8 == "ISOWA"){  echo "Selected";} ?>>ISOWA</option>
                                        <option value="KOOPER" <?php if ($data->modelo_maquina_8 == "KOOPER") {echo "Selected"; } ?>>KOOPER</option>
                                        <option value="MACARBOX" <?php if ($data->modelo_maquina_8 == "MACARBOX") {echo "Selected"; } ?>>MACARBOX</option>
                                        <option value="MARTIN" <?php if ($data->modelo_maquina_8 == "MARTIN") {echo "Selected"; } ?>>MARTIN   </option>
                                        <option value="MARVI" <?php if ($data->modelo_maquina_8 == "MARVI") {echo "Selected"; } ?>>MARVI</option>
                                        <option value="STALEY" <?php if ($data->modelo_maquina_8 == "STALEY") {echo "Selected"; } ?>>STALEY</option>
                                        <option value="WARD" <?php if ($data->modelo_maquina_8 == "WARD") {echo "Selected"; } ?>>WARD</option>
                                        <option value="SIMON" <?php if ($data->modelo_maquina_8 == "SIMON") {echo "Selected"; } ?>>SIMON</option>
                                     
                                      <!--CONVERSION-->
                                        <option value="GODSWILL" <?php if ($data->modelo_maquina_8 == "GODSWILL") {echo "Selected"; } ?>>GODSWILL</option>
                                        <option value="GUNGXIN" <?php if ($data->modelo_maquina_8 == "GUNGXIN") {echo "Selected"; } ?>>GUNGXIN</option>
                                        <option value="HAIDAO" <?php if ($data->modelo_maquina_8 == "HAIDAO") {echo "Selected"; } ?>>HAIDAO   </option>
                                        <option value="HEBEI" <?php if ($data->modelo_maquina_8 == "HEBEI") {echo "Selected"; } ?>>HEBEI</option>
                                        <option value="HUATAO" <?php if ($data->modelo_maquina_8 == "HUATAO") {echo "Selected"; } ?>>HUATAO</option>
                                        <option value="JASTU" <?php if ($data->modelo_maquina_8 == "JASTU") {echo "Selected"; } ?>>JASTU</option>
                                        <option value="JIAJIE" <?php if ($data->modelo_maquina_8 == "JIAJIE") {echo "Selected"; } ?>>JIAJIE</option>
                                        <option value="SRPACK" <?php if ($data->modelo_maquina_8 == "SRPACK") {echo "Selected"; } ?>>SRPACK</option>
                                        <option value="AOKE" <?php if ($data->modelo_maquina_8 == "AOKE") {echo "Selected"; } ?>>AOKE</option>
                                      <!--CORRUGADORAS-->
                                        <option value="TECASA" <?php if ($data->modelo_maquina_8 == "TECASA") {echo "Selected"; } ?>>TECASA</option>
                                        <option value="WANLIAN" <?php if ($data->modelo_maquina_8 == "WANLIAN") {echo "Selected"; } ?>>WANLIAN</option

                                        
                                    
                                    
                                </optgroup>
                           </SELECT>
                                
                                
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
                                /*case "Ejemplo":
                                        array=["UNO","DOS","TRES"];
                                break;*/
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
                        
                                
                         
                        <!-- <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="medida_maquina_8" id="medida_maquina_8"  class="form-control input-sm" > 
                            <optgroup label="Selecciona una opción">
                                 <option value="" <?php if ($data->medida_maquina_8 == "") {echo "Selected"; } ?>></option>
                                 <option value='35"' <?php if ($data->medida_maquina_8 == '35"') {echo "Selected"; } ?>>35"</option>
                                <option value='50"' <?php if ($data->medida_maquina_8 == '50"'){  echo "Selected";} ?>>50"</option>
                                 <option value='66"'<?php if ($data->medida_maquina_8 == '66"'){  echo "Selected";} ?>>66"</option>
                                  <option value="NO APLICA" <?php if ($data->medida_maquina_8 == "NO APLICA"){  echo "Selected";} ?>>NO APLICA</option>
                            </optgroup>
                        </SELECT>-->
                        
                        
                              <textarea name="medida_maquina_8"  id="medida_maquina_8" class="form-control input-sm" rows="1" cols="80" style="resize:none;display: block" placeholder=""><?= $data->medida_maquina_8 ?></textarea>
                          
                      </div>
                            
                          </div> 
                        
                       
                        
                        
                        <div class="row">
                            
                                                 <div class="form-group col-xs-3"> 
                            <label id="lbl_troquel_maquina_8" style="display: block"> Troquel  </label>
                              
                            <SELECT style="resize:block;display: block" name="troquel_maquina_8" id="troquel_maquina_8"  class="form-control input-sm" > 
                               <optgroup label="Selecciona una opción">
                                <option value="" <?php if ($data->troquel_maquina_8 == "") {echo "Selected"; } ?>></option>
                                <option value= "Sí"<?php if ($data->troquel_maquina_8 == "Sí") {echo "Selected"; } ?>>Sí</option>
                                <option value= "No"<?php if ($data->troquel_maquina_8 == "No") {echo "Selected"; } ?>>No</option>
                                <option value= "No Aplica"<?php if ($data->troquel_maquina_8 == "No Aplica") {echo "Selected"; } ?>>No Aplica</option>
                               </optgroup>
                           </SELECT>
                                
                            </div>
                            
                            
                            
                            
                             <div class="form-group col-xs-3"> 
                                <label id="lbl_codigo_cubierta_maquina_8" style="display: block"> Código Cubierta  </label>
                                <textarea name="codigo_cubierta_maquina_8"  id="codigo_cubierta_maquina_8" class="form-control input-sm" rows="1" cols="80" style="resize:none;display: block" placeholder=""><?= $data->codigo_cubierta_maquina_8 ?></textarea>
                            </div>
                            
                            
                            <div class="form-group col-xs-3"> 
                                <label id="lbl_cliente_conoce_maquina_8" style="display: block"> Nombre con el que el cliente conoce la máquina </label>
                                <textarea name="cliente_conoce_maquina_8"  id="cliente_conoce_maquina_8" class="form-control input-sm" rows="1" cols="80" style="resize:none;display: block" placeholder=""><?= $data->cliente_conoce_maquina_8 ?></textarea>
                            </div>
                            

                        
                                  <div class="form-group col-xs-3">
                            <label for="nombre">Refacciones</label>
                             <?php
                                                      if ($data->refacciones_maquina_8== null) {
                                                          echo '<br><font color="red">No tienes ningún archivo cargado</font>'
                                                          . '<input type="file"  name="refacciones_maquina_8">';
                                                      } else if ($data->refacciones_maquina_8 != null)  {
                                                           ?>  
                                                 
                                       <a target="_blank" title="Da clic para visualizarlo o descargarlo" href="../../assets/censomaquinaria/<?= $data->refacciones_maquina_8 ?>">
                                    <font color="green"> Ya tienes un archivo cargado, da clic aqui para visualizarlo o descargarlo</font></a>
                                    <br><font color="purple">Selecciona si deseas actualizar el archivo</font>
                                                   <input type="file" name="refacciones_maquina_8">
                                                   <?php
                                                      }
                                                      ?>
        
                        </div>

              </div>
            <div class="row">
                            <div class="form-group col-xs-3">
                      <label for="nombre">Cosumibles</label>

                                                     <?php
                                    if ($data->consumibles_maquina_8 == null) {
                                        echo '<br><font color="red">No tienes ningún archivo cargado</font>'
                                        . '<input type="file"  name="consumibles_maquina_8">';
                                    } else if ($data->consumibles_maquina_8 != null) {
                                         ?>  

                                       <a target="_blank" title="Da clic para visualizarlo o descargarlo" href="../../assets/censomaquinaria/<?= $data->consumibles_maquina_8 ?>">
                                    <font color="green"> Ya tienes un archivo cargado, da clic aqui para visualizarlo o descargarlo</font></a>
                                    <br><font color="purple">Selecciona si deseas actualizar el archivo</font>
                                 <input type="file" name="consumibles_maquina_8">
                                                                  
                                 <?php
                                    }
                                    ?>
        
            </div>
                            

                        </div>
                        
                        
                        
                        
                        
                        <!--Fin Máquina 8 -->
                        
                        <!--Inicio Máquina 9 -->
                                               
                         <div class="row">
                                    <div class="form-group col-xs-4"></div>
                                    <div class="form-group col-xs-4"><label id="lbl_maquina_9" style="display: block"><h3>MÁQUINA 9</h3> </label></div>
                                      <div class="form-group col-xs-4"></div>
                            </div>
                        <div class="row">
                        
                                                  <div class="form-group col-xs-3"> 
                                <label id="lbl_info_maquina_9" style="display: block"> Maquina </label>
                                <textarea name="info_maquina_9"  id="info_maquina_9"  class="form-control input-sm" rows="1" cols="90" style="background-color:#C1FFFA;resize:none;display: block"><?= $data->info_maquina_9 ?></textarea>
                      </div>
                            
                            
                            
                                                        
                     <div class="form-group col-xs-3"> 

                                       <label id="lbl_tipo_maquina_9" style="display: block"> Tipo de máquina  </label>


                                <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="tipo_maquina_9" id="maquina_9"  class="form-control input-sm" > 
                                  <optgroup label="Selecciona una opción">
                                       <option value="" <?php if ($data->tipo_maquina_9 == "") {echo "Selected"; } ?>>Selecciona una opción</option>
                                       <option value="Flexo" <?php if ($data->tipo_maquina_9 == "Flexo") {echo "Selected"; } ?>>Flexo</option>
                                       <option value="Conversion" <?php if ($data->tipo_maquina_9 == "Conversion"){  echo "Selected";} ?>>Conversion</option>
                                       <option value="Corrugadora" <?php if ($data->tipo_maquina_9 == "Corrugadora"){  echo "Selected";} ?>>Corrugadora</option>
                                       <option value="FRDC" <?php if ($data->tipo_maquina_9 == "FRDC"){  echo "Selected";} ?>>FRDC</option>
                                       <option value="FFG" <?php if ($data->tipo_maquina_9 == "FFG"){  echo "Selected";} ?>>FFG</option>

                                  </optgroup>
                                </SELECT>
                     </div>
                            
                            
                                                 <div class="form-group col-xs-3"> 
                                <label id="lbl_modelo_maquina_9" style="display: block">Marca </label>
                                
                             <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="modelo_maquina_9" id="marca_maquina_9"  class="form-control input-sm" > 
                                <optgroup label="Selecciona una opción">
                                  
                                    <option value="" <?php if ($data->modelo_maquina_9 == "") {echo "Selected"; } ?>></option>
                                     <!--FLEXO-->
                                        <option value="CURIONI" <?php if ($data->modelo_maquina_9 == "CURIONI") {echo "Selected"; } ?>>CURIONI</option>
                                        <option value="DING LONG" <?php if ($data->modelo_maquina_9 == "DING LONG"){  echo "Selected";} ?>>DING LONG</option>
                                        <option value="EMBA" <?php if ($data->modelo_maquina_9 == "EMBA"){  echo "Selected";} ?>>EMBA</option>
                                        <option value="FLYDRAGON" <?php if ($data->modelo_maquina_9 == "FLYDRAGON"){  echo "Selected";} ?>>FLYDRAGON</option>
                                        <option value="GÖPFERT" <?php if ($data->modelo_maquina_9 == "GÖPFERT"){  echo "Selected";} ?>>GÖPFERT</option>
                                        <option value="HOOPER" <?php if ($data->modelo_maquina_9 == "HOOPER"){  echo "Selected";} ?>>HOOPER</option>
                                        <option value="HUALI" <?php if ($data->modelo_maquina_9 == "HUALI"){  echo "Selected";} ?>>HUALI</option>
                                        <option value="ISOWA" <?php if ($data->modelo_maquina_9 == "ISOWA"){  echo "Selected";} ?>>ISOWA</option>
                                        <option value="KL" <?php if ($data->modelo_maquina_9 == "KL") {echo "Selected"; } ?>>KL</option>
                                        <option value="CURIONI" <?php if ($data->modelo_maquina_9 == "CURIONI") {echo "Selected"; } ?>>CURIONI</option>
                                        <option value="DING LONG" <?php if ($data->modelo_maquina_9 == "DING LONG"){  echo "Selected";} ?>>DING LONG</option>
                                        <option value="EMBA" <?php if ($data->modelo_maquina_9 == "EMBA"){  echo "Selected";} ?>>EMBA</option>
                                        <option value="FLYDRAGON" <?php if ($data->modelo_maquina_9 == "FLYDRAGON"){  echo "Selected";} ?>>FLYDRAGON</option>
                                        <option value="GÖPFERT" <?php if ($data->modelo_maquina_9 == "GÖPFERT"){  echo "Selected";} ?>>GÖPFERT</option>
                                        <option value="HOOPER" <?php if ($data->modelo_maquina_9 == "HOOPER"){  echo "Selected";} ?>>HOOPER</option>
                                        <option value="HUALI" <?php if ($data->modelo_maquina_9 == "HUALI"){  echo "Selected";} ?>>HUALI</option>
                                        <option value="ISOWA" <?php if ($data->modelo_maquina_9 == "ISOWA"){  echo "Selected";} ?>>ISOWA</option>
                                        <option value="KOOPER" <?php if ($data->modelo_maquina_9 == "KOOPER") {echo "Selected"; } ?>>KOOPER</option>
                                        <option value="MACARBOX" <?php if ($data->modelo_maquina_9 == "MACARBOX") {echo "Selected"; } ?>>MACARBOX</option>
                                        <option value="MARTIN" <?php if ($data->modelo_maquina_9 == "MARTIN") {echo "Selected"; } ?>>MARTIN   </option>
                                        <option value="MARVI" <?php if ($data->modelo_maquina_9 == "MARVI") {echo "Selected"; } ?>>MARVI</option>
                                        <option value="STALEY" <?php if ($data->modelo_maquina_9 == "STALEY") {echo "Selected"; } ?>>STALEY</option>
                                        <option value="WARD" <?php if ($data->modelo_maquina_9 == "WARD") {echo "Selected"; } ?>>WARD</option>
                                        <option value="SIMON" <?php if ($data->modelo_maquina_9 == "SIMON") {echo "Selected"; } ?>>SIMON</option>
                                     
                                      <!--CONVERSION-->
                                        <option value="GODSWILL" <?php if ($data->modelo_maquina_9 == "GODSWILL") {echo "Selected"; } ?>>GODSWILL</option>
                                        <option value="GUNGXIN" <?php if ($data->modelo_maquina_9 == "GUNGXIN") {echo "Selected"; } ?>>GUNGXIN</option>
                                        <option value="HAIDAO" <?php if ($data->modelo_maquina_9 == "HAIDAO") {echo "Selected"; } ?>>HAIDAO   </option>
                                        <option value="HEBEI" <?php if ($data->modelo_maquina_9 == "HEBEI") {echo "Selected"; } ?>>HEBEI</option>
                                        <option value="HUATAO" <?php if ($data->modelo_maquina_9 == "HUATAO") {echo "Selected"; } ?>>HUATAO</option>
                                        <option value="JASTU" <?php if ($data->modelo_maquina_9 == "JASTU") {echo "Selected"; } ?>>JASTU</option>
                                        <option value="JIAJIE" <?php if ($data->modelo_maquina_9 == "JIAJIE") {echo "Selected"; } ?>>JIAJIE</option>
                                        <option value="SRPACK" <?php if ($data->modelo_maquina_9 == "SRPACK") {echo "Selected"; } ?>>SRPACK</option>
                                        <option value="AOKE" <?php if ($data->modelo_maquina_9 == "AOKE") {echo "Selected"; } ?>>AOKE</option>
                                      <!--CORRUGADORAS-->
                                        <option value="TECASA" <?php if ($data->modelo_maquina_9 == "TECASA") {echo "Selected"; } ?>>TECASA</option>
                                        <option value="WANLIAN" <?php if ($data->modelo_maquina_9 == "WANLIAN") {echo "Selected"; } ?>>WANLIAN</option

                                        
                                    
                                    
                                </optgroup>
                           </SELECT>
                                
                                
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
                                /*case "Ejemplo":
                                        array=["UNO","DOS","TRES"];
                                break;*/
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
                        
                                
                         
                        <!-- <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="medida_maquina_9" id="medida_maquina_9"  class="form-control input-sm" > 
                            <optgroup label="Selecciona una opción">
                                 <option value="" <?php if ($data->medida_maquina_9 == "") {echo "Selected"; } ?>></option>
                                 <option value='35"' <?php if ($data->medida_maquina_9 == '35"') {echo "Selected"; } ?>>35"</option>
                                <option value='50"' <?php if ($data->medida_maquina_9 == '50"'){  echo "Selected";} ?>>50"</option>
                                 <option value='66"'<?php if ($data->medida_maquina_9 == '66"'){  echo "Selected";} ?>>66"</option>
                                  <option value="NO APLICA" <?php if ($data->medida_maquina_9 == "NO APLICA"){  echo "Selected";} ?>>NO APLICA</option>
                            </optgroup>
                        </SELECT>-->
                        
                        
                              <textarea name="medida_maquina_9"  id="medida_maquina_9" class="form-control input-sm" rows="1" cols="90" style="background-color:#C1FFFA;resize:none;display: block" placeholder=""><?= $data->medida_maquina_9 ?></textarea>
                          
                      </div>
                            
                          </div> 
                        
                       
                        
                        
                        <div class="row">
                            
                                                 <div class="form-group col-xs-3"> 
                            <label id="lbl_troquel_maquina_9" style="display: block"> Troquel  </label>
                              
                            <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="troquel_maquina_9" id="troquel_maquina_9"  class="form-control input-sm" > 
                               <optgroup label="Selecciona una opción">
                                <option value="" <?php if ($data->troquel_maquina_9 == "") {echo "Selected"; } ?>></option>
                                <option value= "Sí"<?php if ($data->troquel_maquina_9 == "Sí") {echo "Selected"; } ?>>Sí</option>
                                <option value= "No"<?php if ($data->troquel_maquina_9 == "No") {echo "Selected"; } ?>>No</option>
                                <option value= "No Aplica"<?php if ($data->troquel_maquina_9 == "No Aplica") {echo "Selected"; } ?>>No Aplica</option>
                               </optgroup>
                           </SELECT>
                                
                            </div>
                            
                            
                            
                            
                             <div class="form-group col-xs-3"> 
                                <label id="lbl_codigo_cubierta_maquina_9" style="display: block"> Código Cubierta  </label>
                                <textarea name="codigo_cubierta_maquina_9"  id="codigo_cubierta_maquina_9" class="form-control input-sm" rows="1" cols="90" style="background-color:#C1FFFA;resize:none;display: block" placeholder=""><?= $data->codigo_cubierta_maquina_9 ?></textarea>
                            </div>
                            
                            
                            <div class="form-group col-xs-3"> 
                                <label id="lbl_cliente_conoce_maquina_9" style="display: block"> Nombre con el que el cliente conoce la máquina </label>
                                <textarea name="cliente_conoce_maquina_9"  id="cliente_conoce_maquina_9" class="form-control input-sm" rows="1" cols="90" style="background-color:#C1FFFA;resize:none;display: block" placeholder=""><?= $data->cliente_conoce_maquina_9 ?></textarea>
                            </div>
                            

                       
                                  <div class="form-group col-xs-3">
                            <label for="nombre">Refacciones</label>
                             <?php
                                                      if ($data->refacciones_maquina_9 == null) {
                                                          echo '<br><font color="red">No tienes ningún archivo cargado</font>'
                                                          . '<input type="file"  name="refacciones_maquina_9">';
                                                      } else if ($data->refacciones_maquina_9 != null)  {
                                                           ?>  
                                                    
                                       <a target="_blank" title="Da clic para visualizarlo o descargarlo" href="../../assets/censomaquinaria/<?= $data->refacciones_maquina_9 ?>">
                                    <font color="green"> Ya tienes un archivo cargado, da clic aqui para visualizarlo o descargarlo</font></a>
                                    <br><font color="purple">Selecciona si deseas actualizar el archivo</font>
                                                   <input type="file" name="refacciones_maquina_9">
                                                   <?php
                                                      }
                                                      ?>
        
                        </div>

              </div>
            <div class="row">
                            <div class="form-group col-xs-3">
                      <label for="nombre">Cosumibles</label>

                                                     <?php
                                    if ($data->consumibles_maquina_9 == null) {
                                        echo '<br><font color="red">No tienes ningún archivo cargado</font>'
                                        . '<input type="file"  name="consumibles_maquina_9">';
                                    } else if ($data->consumibles_maquina_9 != null) {
                                         ?>  
                                
                                       <a target="_blank" title="Da clic para visualizarlo o descargarlo" href="../../assets/censomaquinaria/<?= $data->consumibles_maquina_9 ?>">
                                    <font color="green"> Ya tienes un archivo cargado, da clic aqui para visualizarlo o descargarlo</font></a>
                                    <br><font color="purple">Selecciona si deseas actualizar el archivo</font>
                                 <input type="file" name="consumibles_maquina_9">
                                                                  
                                 <?php
                                    }
                                    ?>
        
            </div>
                            

                        </div>


                        <!--Fin Máquina 9 -->
                        
                        <!--Inicio Máquina 10 -->
                        
                        
                        
                                               
                         <div class="row">
                                    <div class="form-group col-xs-4"></div>
                                    <div class="form-group col-xs-4"><label id="lbl_maquina_10" style="display: block"><h3>MÁQUINA 10</h3> </label></div>
                                      <div class="form-group col-xs-4"></div>
                            </div>
                        <div class="row">
                        
                                                  <div class="form-group col-xs-3"> 
                                <label id="lbl_info_maquina_10" style="display: block"> Maquina </label>
                                <textarea name="info_maquina_10"  id="info_maquina_10"  class="form-control input-sm" rows="1" cols="100" style="resize:none;display: block"><?= $data->info_maquina_10 ?></textarea>
                      </div>
                            
                            
                            
                                                        
                     <div class="form-group col-xs-3"> 

                                       <label id="lbl_tipo_maquina_10" style="display: block"> Tipo de máquina  </label>


                                <SELECT style="resize:block;display: block" name="tipo_maquina_10" id="maquina_10"  class="form-control input-sm" > 
                                  <optgroup label="Selecciona una opción">
                                       <option value="" <?php if ($data->tipo_maquina_10 == "") {echo "Selected"; } ?>>Selecciona una opción</option>
                                       <option value="Flexo" <?php if ($data->tipo_maquina_10 == "Flexo") {echo "Selected"; } ?>>Flexo</option>
                                       <option value="Conversion" <?php if ($data->tipo_maquina_10 == "Conversion"){  echo "Selected";} ?>>Conversion</option>
                                       <option value="Corrugadora" <?php if ($data->tipo_maquina_10 == "Corrugadora"){  echo "Selected";} ?>>Corrugadora</option>
                                       <option value="FRDC" <?php if ($data->tipo_maquina_10 == "FRDC"){  echo "Selected";} ?>>FRDC</option>
                                       <option value="FFG" <?php if ($data->tipo_maquina_10 == "FFG"){  echo "Selected";} ?>>FFG</option>

                                  </optgroup>
                                </SELECT>
                     </div>
                            
                            
                                                 <div class="form-group col-xs-3"> 
                                <label id="lbl_modelo_maquina_10" style="display: block">Marca </label>
                                
                             <SELECT style="resize:block;display: block" name="modelo_maquina_10" id="marca_maquina_10"  class="form-control input-sm" > 
                                <optgroup label="Selecciona una opción">
                                  
                                    <option value="" <?php if ($data->modelo_maquina_10 == "") {echo "Selected"; } ?>></option>
                                     <!--FLEXO-->
                                        <option value="CURIONI" <?php if ($data->modelo_maquina_10 == "CURIONI") {echo "Selected"; } ?>>CURIONI</option>
                                        <option value="DING LONG" <?php if ($data->modelo_maquina_10 == "DING LONG"){  echo "Selected";} ?>>DING LONG</option>
                                        <option value="EMBA" <?php if ($data->modelo_maquina_10 == "EMBA"){  echo "Selected";} ?>>EMBA</option>
                                        <option value="FLYDRAGON" <?php if ($data->modelo_maquina_10 == "FLYDRAGON"){  echo "Selected";} ?>>FLYDRAGON</option>
                                        <option value="GÖPFERT" <?php if ($data->modelo_maquina_10 == "GÖPFERT"){  echo "Selected";} ?>>GÖPFERT</option>
                                        <option value="HOOPER" <?php if ($data->modelo_maquina_10 == "HOOPER"){  echo "Selected";} ?>>HOOPER</option>
                                        <option value="HUALI" <?php if ($data->modelo_maquina_10 == "HUALI"){  echo "Selected";} ?>>HUALI</option>
                                        <option value="ISOWA" <?php if ($data->modelo_maquina_10 == "ISOWA"){  echo "Selected";} ?>>ISOWA</option>
                                        <option value="KL" <?php if ($data->modelo_maquina_10 == "KL") {echo "Selected"; } ?>>KL</option>
                                        <option value="CURIONI" <?php if ($data->modelo_maquina_10 == "CURIONI") {echo "Selected"; } ?>>CURIONI</option>
                                        <option value="DING LONG" <?php if ($data->modelo_maquina_10 == "DING LONG"){  echo "Selected";} ?>>DING LONG</option>
                                        <option value="EMBA" <?php if ($data->modelo_maquina_10 == "EMBA"){  echo "Selected";} ?>>EMBA</option>
                                        <option value="FLYDRAGON" <?php if ($data->modelo_maquina_10 == "FLYDRAGON"){  echo "Selected";} ?>>FLYDRAGON</option>
                                        <option value="GÖPFERT" <?php if ($data->modelo_maquina_10 == "GÖPFERT"){  echo "Selected";} ?>>GÖPFERT</option>
                                        <option value="HOOPER" <?php if ($data->modelo_maquina_10 == "HOOPER"){  echo "Selected";} ?>>HOOPER</option>
                                        <option value="HUALI" <?php if ($data->modelo_maquina_10 == "HUALI"){  echo "Selected";} ?>>HUALI</option>
                                        <option value="ISOWA" <?php if ($data->modelo_maquina_10 == "ISOWA"){  echo "Selected";} ?>>ISOWA</option>
                                        <option value="KOOPER" <?php if ($data->modelo_maquina_10 == "KOOPER") {echo "Selected"; } ?>>KOOPER</option>
                                        <option value="MACARBOX" <?php if ($data->modelo_maquina_10 == "MACARBOX") {echo "Selected"; } ?>>MACARBOX</option>
                                        <option value="MARTIN" <?php if ($data->modelo_maquina_10 == "MARTIN") {echo "Selected"; } ?>>MARTIN   </option>
                                        <option value="MARVI" <?php if ($data->modelo_maquina_10 == "MARVI") {echo "Selected"; } ?>>MARVI</option>
                                        <option value="STALEY" <?php if ($data->modelo_maquina_10 == "STALEY") {echo "Selected"; } ?>>STALEY</option>
                                        <option value="WARD" <?php if ($data->modelo_maquina_10 == "WARD") {echo "Selected"; } ?>>WARD</option>
                                        <option value="SIMON" <?php if ($data->modelo_maquina_10 == "SIMON") {echo "Selected"; } ?>>SIMON</option>
                                     
                                      <!--CONVERSION-->
                                        <option value="GODSWILL" <?php if ($data->modelo_maquina_10 == "GODSWILL") {echo "Selected"; } ?>>GODSWILL</option>
                                        <option value="GUNGXIN" <?php if ($data->modelo_maquina_10 == "GUNGXIN") {echo "Selected"; } ?>>GUNGXIN</option>
                                        <option value="HAIDAO" <?php if ($data->modelo_maquina_10 == "HAIDAO") {echo "Selected"; } ?>>HAIDAO   </option>
                                        <option value="HEBEI" <?php if ($data->modelo_maquina_10 == "HEBEI") {echo "Selected"; } ?>>HEBEI</option>
                                        <option value="HUATAO" <?php if ($data->modelo_maquina_10 == "HUATAO") {echo "Selected"; } ?>>HUATAO</option>
                                        <option value="JASTU" <?php if ($data->modelo_maquina_10 == "JASTU") {echo "Selected"; } ?>>JASTU</option>
                                        <option value="JIAJIE" <?php if ($data->modelo_maquina_10 == "JIAJIE") {echo "Selected"; } ?>>JIAJIE</option>
                                        <option value="SRPACK" <?php if ($data->modelo_maquina_10 == "SRPACK") {echo "Selected"; } ?>>SRPACK</option>
                                        <option value="AOKE" <?php if ($data->modelo_maquina_10== "AOKE") {echo "Selected"; } ?>>AOKE</option>
                                      <!--CORRUGADORAS-->
                                        <option value="TECASA" <?php if ($data->modelo_maquina_10 == "TECASA") {echo "Selected"; } ?>>TECASA</option>
                                        <option value="WANLIAN" <?php if ($data->modelo_maquina_10 == "WANLIAN") {echo "Selected"; } ?>>WANLIAN</option

                                        
                                    
                                    
                                </optgroup>
                           </SELECT>
                                
                                
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
                                /*case "Ejemplo":
                                        array=["UNO","DOS","TRES"];
                                break;*/
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
                        
                                
                         
                        <!-- <SELECT style="background-color:#C1FFFA;resize:block;display: block" name="medida_maquina_10" id="medida_maquina_10"  class="form-control input-sm" > 
                            <optgroup label="Selecciona una opción">
                                 <option value="" <?php if ($data->medida_maquina_10 == "") {echo "Selected"; } ?>></option>
                                 <option value='35"' <?php if ($data->medida_maquina_10 == '35"') {echo "Selected"; } ?>>35"</option>
                                <option value='50"' <?php if ($data->medida_maquina_10 == '50"'){  echo "Selected";} ?>>50"</option>
                                 <option value='66"'<?php if ($data->medida_maquina_10 == '66"'){  echo "Selected";} ?>>66"</option>
                                  <option value="NO APLICA" <?php if ($data->medida_maquina_10 == "NO APLICA"){  echo "Selected";} ?>>NO APLICA</option>
                            </optgroup>
                        </SELECT>-->
                        
                        
                              <textarea name="medida_maquina_10"  id="medida_maquina_10" class="form-control input-sm" rows="1" cols="100" style="resize:none;display: block" placeholder=""><?= $data->medida_maquina_10 ?></textarea>
                          
                      </div>
                            
                          </div> 
                        
                       
                        
                        
                        <div class="row">
                            
                                                 <div class="form-group col-xs-3"> 
                            <label id="lbl_troquel_maquina_10" style="display: block"> Troquel  </label>
                              
                            <SELECT style="resize:block;display: block" name="troquel_maquina_10" id="troquel_maquina_10"  class="form-control input-sm" > 
                               <optgroup label="Selecciona una opción">
                                <option value="" <?php if ($data->troquel_maquina_10 == "") {echo "Selected"; } ?>></option>
                                <option value= "Sí"<?php if ($data->troquel_maquina_10 == "Sí") {echo "Selected"; } ?>>Sí</option>
                                <option value= "No"<?php if ($data->troquel_maquina_10 == "No") {echo "Selected"; } ?>>No</option>
                                <option value= "No Aplica"<?php if ($data->troquel_maquina_10 == "No Aplica") {echo "Selected"; } ?>>No Aplica</option>
                               </optgroup>
                           </SELECT>
                                
                            </div>
                            
                            
                            
                            
                             <div class="form-group col-xs-3"> 
                                <label id="lbl_codigo_cubierta_maquina_10" style="display: block"> Código Cubierta  </label>
                                <textarea name="codigo_cubierta_maquina_10"  id="codigo_cubierta_maquina_10" class="form-control input-sm" rows="1" cols="100" style="resize:none;display: block" placeholder=""><?= $data->codigo_cubierta_maquina_10 ?></textarea>
                            </div>
                            
                            
                            <div class="form-group col-xs-3"> 
                                <label id="lbl_cliente_conoce_maquina_10" style="display: block"> Nombre con el que el cliente conoce la máquina </label>
                                <textarea name="cliente_conoce_maquina_10"  id="cliente_conoce_maquina_10" class="form-control input-sm" rows="1" cols="100" style="resize:none;display: block" placeholder=""><?= $data->cliente_conoce_maquina_10 ?></textarea>
                            </div>
                            

                        
                    
                    


                 
                                  <div class="form-group col-xs-3">
                            <label for="nombre">Refacciones</label>
                             <?php
                                                      if ($data->refacciones_maquina_10 == null) {
                                                          echo '<br><font color="red">No tienes ningún archivo cargado</font>'
                                                          . '<input type="file"  name="refacciones_maquina_10">';
                                                      } else if ($data->refacciones_maquina_10 != null)  {
                                                           ?>  
                                               
                                                
                                                       <a target="_blank" title="Da clic para visualizarlo o descargarlo" href="../../assets/censomaquinaria/<?= $data->refacciones_maquina_10 ?>">
                                    <font color="green"> Ya tienes un archivo cargado, da clic aqui para visualizarlo o descargarlo</font></a>
                                    <br><font color="purple">Selecciona si deseas actualizar el archivo</font>
                               
                                                   <input type="file" name="refacciones_maquina_10">
                                                   <?php
                                                      }
                                                      ?>
        
                        </div>

              </div>
            <div class="row">
                            <div class="form-group col-xs-3">
                      <label for="nombre">Cosumibles</label>

                                                     <?php
                                    if ($data->consumibles_maquina_10 == null) {
                                        echo '<br><font color="red">No tienes ningún archivo cargado</font>'
                                        . '<input type="file"  name="consumibles_maquina_10">';
                                    } else if ($data->consumibles_maquina_10 != null) {
                                         ?>  
                                <b>
                                 <a target="_blank" title="Da clic para visualizarlo o descargarlo" href="../../assets/censomaquinaria/<?= $data->consumibles_maquina_10 ?>">
                                    <font color="green"> Ya tienes un archivo cargado, da clic aqui para visualizarlo o descargarlo</font><!-- <?= $data->consumibles_maquina_10?></b></a>--></a>
                                    <br><font color="purple">Selecciona si deseas actualizar el archivo</font>
                                 <input type="file" name="consumibles_maquina_10">
                                                                  
                                 <?php
                                    }
                                    ?>
        
            </div>
                            

                        </div>
          
                    
                    <!--<div class="jumbotron">
                             <div class="row">
                        <div class="form-group col-xs-6">
                            <label id="lbl_maquinas_conversion">Máquinas de conversión</label>
                            <textarea name="maquina_conversion" id="maquina_conversion" class="form-control input-sm" rows="4" cols="80" style="resize:block" 
                                      placeholder="Ingresa las marcas, los modelos y las medidas de las máquinas de conversión"> <?= $data->maquina_conversion ?> </textarea>
                            
                                     
                    
                      </div>
                    </div>
                        
                        
                        
                   </div>-->
=======
                                <label id="lbl_info_maquina_7" style="display: none">Maquina 7 </label>
                                <textarea name="info_maquina_7"  id="info_maquina_7" class="form-control input-sm" rows="3" cols="80" style="resize:none;display: none" placeholder="Ingresa marca , modelo y medida de la máquina"><?= $data->info_maquina_7 ?></textarea>
                            </div>
                        </div>




                    </div>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606



















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
                       
<<<<<<< HEAD
                       <textarea name="necesidad" class="form-control input-sm" style="resize:block;"><?= $data->necesidad ?></textarea>
=======
                       <textarea name="necesidad" class="form-control input-sm" style="resize:none;"><?= $data->necesidad ?></textarea>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                      </td>
       </tr>
       <tr>
           <td><b>Compromiso</b></td>
                         <td >
                             <input id="a2" class="form-control" type="text" name="compromiso" value="<?= $data->compromiso ?>">
<<<<<<< HEAD
                         <textarea name="compromiso" class="form-control input-sm" style="resize:block;" rows="7" cols="80"><?= $data->compromiso ?></textarea>
=======
                         <textarea name="compromiso" class="form-control input-sm" style="resize:none;" rows="7" cols="80"><?= $data->compromiso ?></textarea>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                         
                         </td>
       </tr>
       <tr>
           <td><b>Notas</b></td>
                           <td >
                               <input id="a2" class="form-control" type="text" name="notas" value="<?= $data->notas ?>">
<<<<<<< HEAD
                             <textarea name="notas" class="form-control input-sm" style="resize:block;" rows="7" cols="80"><?= $data->notas ?></textarea>
=======
                             <textarea name="notas" class="form-control input-sm" style="resize:none;" rows="7" cols="80"><?= $data->notas ?></textarea>
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
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
<<<<<<< HEAD
    
        <!-- <input type="hidden" name="cliente_robuspack" value="<?= $data->cliente_robuspack ?>">-->
=======

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
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

