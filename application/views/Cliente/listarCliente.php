<html lang="es-mx">
    <head>

        <title>Robuspack</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">


        <!-- Pregunta al dar clic a eliminar-->
        <script type="text/javascript">
            function confirma() {
                if (confirm("¿Realmente desea eliminarlo?")) {
                } else {
                    return false
                }
            }
        </script>

        <!-- Para traerse el rol que esta registrado-->
        <?php
        //check user level
        $dataLevel = $this->userlevel->checkLevel($role);
        $result = $this->User_model->getAllSettings();
        $site_title = $result->site_title;
        //check user level
        ?> 
        

        <?php
        defined('BASEPATH') OR exit('No direct script access allowed');

        $result = $this->User_model->getAllSettings();
        $theme = $result->theme;
        ?>
        <link rel="stylesheet" href="<?php echo $theme; ?>">
        <link rel="stylesheet" href="<?php echo base_url() . 'public/css/main.css' ?>">

        <link rel="icon" href="<?= base_url('assets/images/icono.PNG') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <div class="container" style="margin-top:1px;">
       <center>  <h1> Registro de Clientes</h1></center>

                <div class="alert alert-info alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Bienvenido</strong> Agrega, Modifica o Elimina sus Datos
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                    <input type="text" id="buscandoIguales" placeholder="Escribe para buscar..."  class="form-control" />
                </div>
       
       <div class="text-center">
    <a  class="btn btn-success" href="<?= base_url('Cliente/agregar') ?>" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos de los Clientes">Agregar Nuevo Registro</a>
       </div>
       <br><center>
       
              <form method="post" action="<?php echo base_url(); ?>ExportarExcel/crearExcelCliente">

                        <button  class="btn btn-info" title="Da clic para exportar los datos a Excel" style="font-size:16px;color:white"><font color="white">Exportar</font> <i class="fa fa-file-excel-o"></i></button>
                    </form>   
                 
</center>
    </div>


    <div class="container" style="margin-top:1px;">


        <div class="table-responsive">
            <table class="table table-bordered table-striped"  >
                
        </div>

        <table  border="0" class="table table-bordered table-striped">
            <MARQUEE SCROLLDELAY =200> </MARQUEE>
            <thead>
                <tr >
                    
                    <th style="text-align: center">Formato</th>
                    <th style="text-align: center">PDF</th>
                    <th class="header" colspan="2" style="text-align: center" >Acción</th>

                    <th style="text-align: center">Grupo</th>
                    <th style="text-align: center">Cliente</th>
                    <th style="text-align: center">Cliente SAE Pesos</th>
                    <th style="text-align: center">Cliente SAE Doláres</th>
                    <th style="text-align: center">Razón Social</th>
                    <th style="text-align: center">RFC</th>
                    <th style="text-align: center">Dirección Fiscal</th>
                    <th style="text-align: center">Teléfono Celular</th>

                    <th style="text-align: center">Extensión</th>
                    <th style="text-align: center">Correo Compras</th>
                    <th style="text-align: center">Correo Cxp</th>
                    <th style="text-align: center">Correo Mantenimiento</th>
                    <th style="text-align: center">Otro Correo</th>

                    <th style="text-align: center">Moneda</th>
                    <th style="text-align: center">Cuenta Bancaria Pesos</th>
                   <th style="text-align: center">Cuenta Bancaria Dolares</th>
                    <th style="text-align: center">Vendedor Refacciones</th>
                    <th style="text-align: center" >Vendedor Maquinaria</th>
                    <th style="text-align: center" >Forma de pago</th>
                   <th style="text-align: center" >Método de pago</th>
                    <th style="text-align: center">CFDI</th>
                    
                    
                    <th style="text-align: center" >Dirección de Entrega</th>
                    


                </tr>
            </thead>
            <tbody align="center">


                <?php
                foreach ($cliente as $obj) {
                    echo '<tr>';
                      echo '<td><a href="' . base_url() . 'Reporte/visualizar/' . $obj->getId_Cliente() . '"  target=”_blank”><span class="glyphicon glyphicon-indent-right"></a></td>
					<td> <a target="_blank" title="Descargar la ficha técnica en PDF" href="' . base_url() . 'Reporte/pdf/' . $obj->getId_Cliente() . '"  ><i style="font-size:18px;color:red" class="fa fa-file-pdf-o"></i></a></td>
				
				';



                    //compara si es administrador
                    if ($dataLevel == 'is_admin') {
                        echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'Cliente/eliminar/' . $obj->getId_Cliente() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'Cliente/obtener/' . $obj->getId_Cliente() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    }else  if ($dataLevel == 'is_editor') {
                        echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'Cliente/eliminar/' . $obj->getId_Cliente() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'Cliente/obtener/' . $obj->getId_Cliente() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    } else if ($dataLevel == 'is_credito') {
                       echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'Cliente/obtener/' . $obj->getId_Cliente() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    } else if ($dataLevel == 'is_logistica') {
                       echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'Cliente/obtener/' . $obj->getId_Cliente() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                    }


                  
                
                echo '<td>';
                    echo $obj->getGrupo() .
                    '</td>'
                    . '<td>'
                    . $obj->getCliente() .
                    '</td>'
                    . '<td>'
                    . $obj->getCliente_sae() .
                    '</td>'
                     . '<td>'
                    . $obj->getCliente_sae_dolares() .
                    '</td>'
                    . '<td>'
                    . $obj->getRazon_soc() .
                    '</td>'
                    . '<td>'
                    . $obj->getRfc() .
                    '</td>'
                    . '<td>'
                    . $obj->getDireccion() .
                    '</td>'
                    . '<td>'
                    . $obj->getTel_cel() .
                    '</td>'
                    . '<td>'
                    . $obj->getExtension() .
                    '</td>'
                    . '<td>'
                    . $obj->getCorreo() .
                    '</td>'
                    . '<td>'
                    . $obj->getCorreo1() .
                    '</td>'
                    . '<td>'
                    . $obj->getCorreo2() .
                    '</td>'
                    . '<td>'
                    . $obj->getCorreo3() .
                    '</td>'
                    . '<td>'
                    . $obj->getMoneda() .
                    '</td>'
                    . '<td>'
                    . $obj->getCta_banc() .
                    '</td>'
                    . '<td>'
                    . $obj->getCta_banc_dolares() .
                    '</td>'
                    . '<td>'
                    . $obj->getVendedor_refacciones() .
                    '</td>'
                    . '<td>'
                    . $obj->getVendedor_maquinaria() .
                    '</td>'
                    . '<td>'
                    . $obj->getForma_pago() .
                    '</td>'
                    . '<td>'
                    . $obj->getMetodo_pago() .
                    '</td>'
                    . '<td>'
                    . $obj->getUso_de_cfdi() .
                    '</td>'
                    . '<td>'
                    . $obj->getDireccion_entrega() .
                    '</td>';


                }
                ?>
                </tr>
            </tbody>
        </table>


    </div> 
</div>

</div>
</body>
</html>
