<html lang="es-mx">
    <!-- Para traerse el rol que esta registrado-->

    <head>
        <title>Robuspack</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <?php
        defined('BASEPATH') OR exit('No direct script access allowed');

        $result = $this->User_model->getAllSettings();
        $theme = $result->theme;
        ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $theme; ?>">
        <link rel="stylesheet" href="<?php echo base_url() . 'public/css/main.css' ?>">



        <!-- Pregunta al dar clic a eliminar-->
        <script type="text/javascript">
            function confirma() {
                if (confirm("¿Realmente desea eliminarlo?")) {
                    alert("El registro ha sido eliminado.")
                } else {
                    return false
                }
            }
        </script>

        <link rel="icon" href="<?= base_url('assets/images/robuspack_icon.png') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Para traerse el rol que esta registrado-->
        <?php
        //check user level
        $dataLevel = $this->userlevel->checkLevel($role);

        $site_title = $result->site_title;
        //check user level
        ?>


    </head>
    
    <div class="container" style="margin-top:1px;">
        
    <center>  <h1>Reporte Maquinas Flexograficas</h1></center>
    
    
    
  <div class="form-group input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                    <input type="text" id="buscandoIguales" placeholder="Escribe para buscar..."  class="form-control" />
                </div>

               <div class="text-center">
                    <form method="post" action="<?php echo base_url(); ?>ExportarExcel/crearExcelReporteFlexo">
                        <input type="submit" title="Da clic para exportar los datos a Excel" name="export" class="btn btn-success" value="Exportar a excel" />
                    </form>
                </div>
    </div>
 
    
    
    <div class="container" style="margin-top:1px;">


        <div class="table-responsive">



            

                
                <table  border="1" class="table table-bordered table-striped">
                    <MARQUEE SCROLLDELAY =200> </MARQUEE>
                    <thead>
                        <tr bgcolor="#C8C5C5">

                            <th style="text-align: center">Compañía</th>
                            <th style="text-align: center">Ciudad</th>
                            <th style="text-align: center">Estado</th>
                            <th style="text-align: center">Máquinas Flexograficas</th>
                            <th style="text-align: center">Usan troquel</th>
                             <th style="text-align: center">YA ES CLIENTE RBK</th>
                            <th style="text-align: center">% de Presencia</th>
                            
                            
                            
                         <?php
                            if ($dataLevel == 'is_admin') {
                                echo ' 
                        <th class="text-align: center">Modificar</th>';
                            } else if ($dataLevel == 'is_editor') {
                                echo ' 
                        <th class="text-align: center">Modificar</th>';
                            }else if ($dataLevel == 'is_Gerente_Ventas') {
                                echo ' 
                        <th class="text-align: center">Modificar</th>';
                            }
                            ?>
                      



                         
                        </tr>
                    </thead>

                    <tbody align="center">

                        <?php
                        foreach ($resumen as $obj) {
                            echo '<tr><td>';
                            echo $obj->getEmpresa_concatenada() .
                            '</td>'
                            .'<td>'.
                            $obj->getEstado() .
                            '</td>'
                            . '<td>' .
                            $obj->getMunicipio() .
                            '</td>'
                                     . '<td>' .
                            $obj->getTroquel() .
                            '</td>'
                                     . '<td>' .
                            $obj->getTotal_flexos() .
                            '</td>'
                                       . '<td>' .
                            $obj->getCliente_robuspack() .
                            '</td>'
                             ;
                             
                              if($obj->getPresencia()==null ){
                                 echo '<td>' .
                            '0.00%'.
                            '</td>';
                              }
                                  else{
                                echo  '<td>' .
                            $obj->getPresencia() .'%',
                            '</td>';
                                  }
                            
                               //compara si es administrador
    if ($dataLevel == 'is_admin') {
       echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'CensoMaquinaria/actualizarFlexo/' . $obj->getId_censomaquinaria() . '"><button type="button" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-edit"></button></a></td>';
    } else if ($dataLevel == 'is_editor') {
        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'CensoMaquinaria/actualizarFlexo/' . $obj->getId_censomaquinaria() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
    } else if ($dataLevel == 'is_Gerente_Ventas') {
        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'CensoMaquinaria/actualizarFlexo/' . $obj->getId_censomaquinaria() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
    } else if ($dataLevel == 'is_maquinaria') {
        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'CensoMaquinaria/actualizarFlexo/' . $obj->getId_censomaquinaria() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
    } else if ($dataLevel == 'is_director') {
        
    } else {
        echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'CensoMaquinaria/actualizarFlexo/' . $obj->getId_censomaquinaria() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
    }
}
?>

                        
                        
                      
                   

                        </tr>
                        
                        
                        <tr>
                            <td colspan="3" bgcolor="#6F6F6F"><p style="color:white;">Total</p></td>
                          <td bgcolor="#6F6F6F">
                            <?php
                            foreach ($totalRegistroFlexo as $fila) {
                                ?>

                              <p style="color:white;"> <?= $fila->total_registros ?></p>

                                <?php
                            }
                            ?>
                        </td>
                        
                           <td bgcolor="#6F6F6F">
                            <?php
                            foreach ($totalRegistroTroquel as $fila) {
                                ?>

                              <p style="color:white;"> <?= $fila->total_registros ?></p>

                                <?php
                            }
                            ?>
                        </td>
                        
                          <td bgcolor="#6F6F6F">
                            <?php
                            foreach ($totalRegistroCliente as $fila) {
                                ?>

                              <p style="color:white;"> <?= $fila->total_registros ?></p>

                                <?php
                            }
                            ?>
                        </td>
                        
                         <td bgcolor="#6F6F6F">
                            <?php
                            foreach ($totalPorcentajePresencia as $fila) {
                                ?>

                              <p style="color:white;"> <?= $fila->total_registros ?>%</p>

                                <?php
                            }
                            ?>
                        </td>
                         <td colspan="2" bgcolor="#6F6F6F"><p style="color:white;"></p></td>
                         </tr>
                        
                        
              
                    </tbody>
                </table>




                </body>
        </div>
</html>
