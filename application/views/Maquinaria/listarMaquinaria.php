<!--
 * 
 *Sistema de Control Robuspack
 *Autor: Saúl Aarón González Moctezuma & Ana Karen González Palma
*
 */
-->
<title>Robuspack</title>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$result = $this->User_model->getAllSettings();
$theme = $result->theme;
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo $theme; ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'public/css/main.css' ?>">

<link rel="icon" href="<?= base_url('assets/images/icono.PNG') ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script type="text/javascript">
    function confirma() {
        if (confirm("¿Realmente desea eliminarlo?")) {
        } else {
            return false
        }
        
        document.oncontextmenu = function(){return false};
    }
</script>
<!-- Para traerse el rol que esta registrado-->
<?php
//check user level
$dataLevel = $this->userlevel->checkLevel($role);

$site_title = $result->site_title;
//check user level
?>


<html>
    <head>


  <body>
    
    
    
      <div class="container" style="margin-top:1px;">
       <center>  <h1>Lista de Precios Cubiertas</h1></center>

                <div class="alert alert-info alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Bienvenido</strong> Agrega, Modifica o Elimina sus Datos
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                    <input type="text" id="buscandoIguales" placeholder="Escribe para buscar..."  class="form-control" />
                </div>
    
       
       
        <?php
                            if ($dataLevel == 'is_admin') {
 echo   '<center><a title="Da clic para modificar el registro" href="' . base_url() . 'Maquinaria/agregar/"><button type="button" class="btn btn-success">Agregar Nuevo Registro</button></a>
               <br>  <br>
                  <a title="Da clic para modificar el registro" href="' . base_url() . 'ExportarExcel/crearExcelConsumibles/">     <button  class="btn btn-info" title="Da clic para exportar los datos a Excel" style="font-size:15px;color:white"><font color="white">Exportar</font> <i class="fa fa-file-excel-o"></i></button>
                   </a></center>';
                                  
                            } else if ($dataLevel == 'is_editor') {
                      echo   '<center><a title="Da clic para modificar el registro" href="' . base_url() . 'Maquinaria/agregar/"><button type="button" class="btn btn-success">Agregar Nuevo Registro</button></a>
               <br>  <br>
                  <a title="Da clic para modificar el registro" href="' . base_url() . 'ExportarExcel/crearExcelConsumibles/">     <button  class="btn btn-info" title="Da clic para exportar los datos a Excel" style="font-size:15px;color:white"><font color="white">Exportar</font> <i class="fa fa-file-excel-o"></i></button>
                   </a></center>';
                            }
                            
                             else if ($dataLevel == 'is_director') {
                      echo   '<X
               <br>  <br>
                  <a title="Da clic para modificar el registro" href="' . base_url() . 'ExportarExcel/crearExcelConsumibles/">     <button  class="btn btn-info" title="Da clic para exportar los datos a Excel" style="font-size:15px;color:white"><font color="white">Exportar</font> <i class="fa fa-file-excel-o"></i></button>
                   </a></center>';
                            }
                            ?>
       
     

    </div>
        
    
    
    
    
    
    
  
    <div class="container" style="margin-top:20px;">

        <div class="table-responsive">
            <table class="table table-hover tablesorter" >
               



               

                <!--<left> <h1>Buscar</h1> </left>
                <input type="text" id="search" placeholder="Escribe para buscar..."  class="form-control" />-->



                <table  border="0" class="table table-bordered table-striped">
                    <MARQUEE SCROLLDELAY =200> </MARQUEE>
                    <thead >
                        <tr >

                            <th class="header" style="text-align: center">Código</th>
                            <th class="header" style="text-align: center">Fecha</th>
                            <th class="header" style="text-align: center" >Fabricante</th>
                            <th class="header" style="text-align: center">Máquina</th>



                            <?php
                            if ($dataLevel == 'is_admin') {

                                 echo ' <th class="header" >Precio 1</th>
                                        <th class="header" style="text-align: center">Precio 2</th>
                                        <th class="header" style="text-align: center">Precio 3</th>
                                        <th class="header" style="text-align: center">Precio 4</th>
                                        <th class="header" style="text-align: center">Precio 5</th>
                                        <th class="header" style="text-align: center">Pc exwork</th>
                                        <th class="header" style="text-align: center" >Pc fob</th>
                                        <th class="header" style="text-align: center" >Pc cif</th>
                                        <th class="header" style="text-align: center" >Pc cip</th>
                                '
                                        ;
                            } else if ($dataLevel == 'is_editor') {

                                echo ' <th class="header" style="text-align: center" >Precio 1</th>
                                        <th class="header" style="text-align: center" >Precio 2</th>
                                        <th class="header" style="text-align: center" >Precio 3</th>
                                        <th class="header" style="text-align: center" >Precio 4</th>
                                        <th class="header" style="text-align: center" >Precio 5</th>
                                        <th class="header" style="text-align: center" >Pc exwork</th>
                                        <th class="header" style="text-align: center" >Pc fob</th>
                                        <th class="header" style="text-align: center" >Pc cif</th>
                                        <th class="header" style="text-align: center" >Pc cip</th>'
                                        ;
                            }else if ($dataLevel == 'is_Gerente_Ventas') {

                                echo ' <th class="header" style="text-align: center" >Precio 1</th>
                                        <th class="header" style="text-align: center" >Precio 2</th>
                                        <th class="header" style="text-align: center" >Precio 3</th>
                                        <th class="header" style="text-align: center" >Precio 4</th>
                                        <th class="header" style="text-align: center" >Precio 5</th>
                                        <th class="header" style="text-align: center" >Pc exwork</th>
                                        <th class="header" style="text-align: center" >Pc fob</th>
                                        <th class="header" style="text-align: center" >Pc cif</th>
                                        <th class="header" style="text-align: center" >Pc cip</th>'
                                        ;
                            }else if ($dataLevel == 'is_director') {

                                echo ' <th class="header" style="text-align: center" >Precio 1</th>
                                        <th class="header" style="text-align: center" >Precio 2</th>
                                        <th class="header" style="text-align: center" >Precio 3</th>
                                        <th class="header" style="text-align: center" >Precio 4</th>
                                        <th class="header" style="text-align: center" >Precio 5</th>
                                        <th class="header" style="text-align: center" >Pc exwork</th>
                                        <th class="header" style="text-align: center" >Pc fob</th>
                                        <th class="header" style="text-align: center" >Pc cif</th>
                                        <th class="header" style="text-align: center" >Pc cip</th>'
                                        ;
                            } 
                            
                            else if ($dataLevel == 'is_refacciones') {
                                echo ' <th class="header" style="text-align: center">Precio</th>';
                                 echo ' <th class="header" style="text-align: center">Precio 1</th>';
                            } 
                            else if ($dataLevel == 'is_maquinaria_refacciones') {
                                echo ' <th class="header" style="text-align: center">Precio</th>';
                                  echo ' <th class="header" style="text-align: center">Precio 1</th>';
                            }
                            else {
                                
                            }
                            ?>




                            <th class="header" style="text-align: center">Ancho</th>
                            <th class="header" style="text-align: center">Espesor</th>
                            <th class="header" style="text-align: center">Diámetro</th>
                            <th class="header" style="text-align: center">Cue</th>
                            <th class="header" style="text-align: center">Dicar</th>
                            


                            <?php
                            if ($dataLevel == 'is_admin') {

                                echo '<th class="header">Stock</th><th class="header" style="text-align: center"  >Piezas a recibir</th> <th class="header">Fecha Corte de Rotación</th>  <th class="header" colspan="2" style="text-align: center" >Acción</th>';
                            } else if ($dataLevel == 'is_editor') {

                                echo ' <th class="header">Stock</th> <th class="header" style="text-align: center" >Piezas a recibir</th> <th class="header">Fecha Corte de Rotación</th> <th class="header" colspan="2" style="text-align: center" >Acción</th>';
                            } else {
                                
                            }
                            ?>


                        </tr>
                    </thead>
                    <tbody>


                        <?php
                        foreach ($maquinaria as $obj) {
                            echo '<tr><td>';
                            echo $obj->getReferencia() .
                            '</td>'
                            . '<td>'
                            . $obj->getFecha() .
                            '</td>'
                            . '<td>'
                            . $obj->getFabricante() .
                            '</td>'
                            . '<td>'
                            . $obj->getMaquina() .
                            '</td>'
                            . '<td>';



                            if ($dataLevel == 'is_admin') {


                                echo $obj->getPrecio1() .
                                '</td>'
                                . '<td>'
                                . $obj->getPrecio2() .
                                '</td>'
                                . '<td>'
                                . $obj->getPrecio3() .
                                '</td>'
                                . '<td>'
                                . $obj->getPrecio4() .
                                '</td><td>'
                                        ;
                            }else if ($dataLevel == 'is_editor') {

                                echo $obj->getPrecio1() .
                                '</td>'
                                . '<td>'
                                . $obj->getPrecio2() .
                                '</td>'
                                . '<td>'
                                . $obj->getPrecio3() .
                                '</td>'
                                . '<td>'
                                . $obj->getPrecio4() .
                                '</td>'.'<td>';
                            } else if ($dataLevel == 'is_Gerente_Ventas') {

                                echo $obj->getPrecio1() .
                                '</td>'
                                . '<td>'
                                . $obj->getPrecio2() .
                                '</td>'
                                . '<td>'
                                . $obj->getPrecio3() .
                                '</td>'
                                . '<td>'
                                . $obj->getPrecio4() .
                                '</td>'.'<td>';
                            }
                                else if ($dataLevel == 'is_director') {

                                echo $obj->getPrecio1() .
                                '</td>'
                                . '<td>'
                                . $obj->getPrecio2() .
                                '</td>'
                                . '<td>'
                                . $obj->getPrecio3() .
                                '</td>'
                                . '<td>'
                                . $obj->getPrecio4() .
                                '</td>'.'<td>';
                            }   
                            
                            
                              else if ($dataLevel == 'is_refacciones') {

                                echo $obj->getPrecio4() .
                                '</td>'.'<td>';
                            }




                            echo $obj->getPrecio5() .
                            '</td>';
                            
                            
                            
                          
                            if ($dataLevel == 'is_admin') {


                                echo '<td>'.$obj->getPcexwork() .
                                '</td>'
                                . '<td>'
                                . $obj->getPcfob() .
                                '</td>'
                                . '<td>'
                                . $obj->getPccif() .
                                '</td>'
                                . '<td>'
                                . $obj->getPccip() .
                                '</td>'
                                        ;
                            } else if ($dataLevel == 'is_editor') {

                                echo '<td>'.$obj->getPcexwork() .
                                '</td>'
                                . '<td>'
                                . $obj->getPcfob() .
                                '</td>'
                                . '<td>'
                                . $obj->getPccif() .
                                '</td>'
                                . '<td>'
                                . $obj->getPccip() .
                                '</td>';
                              
                            }
                            else if ($dataLevel == 'is_Gerente_Ventas') {

                                echo '<td>'.$obj->getPcexwork() .
                                '</td>'
                                . '<td>'
                                . $obj->getPcfob() .
                                '</td>'
                                . '<td>'
                                . $obj->getPccif() .
                                '</td>'
                                . '<td>'
                                . $obj->getPccip() .
                                '</td>';
                              
                            }
                             else if ($dataLevel == 'is_director') {

                                echo '<td>'.$obj->getPcexwork() .
                                '</td>'
                                . '<td>'
                                . $obj->getPcfob() .
                                '</td>'
                                . '<td>'
                                . $obj->getPccif() .
                                '</td>'
                                . '<td>'
                                . $obj->getPccip() .
                                '</td>';
                              
                            }


                            
                            
                            
                            
                            echo '<td>'
                            . $obj->getAncho() .
                            '</td>'
                            . '<td>'
                            . $obj->getEspesor() .
                            '</td>'
                            . '<td>'
                            . $obj->getDiametro() .
                            '</td>'
                            . '<td>'
                            . $obj->getEmpresa_competencia_1() .
                            '</td>'
                            . '<td>'
                            . $obj->getEmpresa_competencia_2() .
                            '</td>'
                           ;
                            
                            
                            
                            
                            
                            
                             if ($dataLevel == 'is_admin') {
                            echo '<td>'.
                             $obj->getInventario() .
                            '</td>'
                            . '<td>'
                            . $obj->getPiezas_recibir() .
                            '</td>'
                            . '<td>'
                            . $obj->getFecha_corte_rotacion() .
                            '</td>';
                            } else if ($dataLevel == 'is_editor') {
                                echo '<td>'.
                             $obj->getInventario() .
                            '</td>'
                            . '<td>'
                            . $obj->getPiezas_recibir() .
                            '</td>'
                            . '<td>'
                            . $obj->getFecha_corte_rotacion() .
                            '</td>';
                              
                            }
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            

                            if ($dataLevel == 'is_admin') {
                                echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'Maquinaria/eliminar/' . $obj->getId_maquinaria() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                                echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'Maquinaria/obtener/' . $obj->getId_maquinaria() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                            } else if ($dataLevel == 'is_editor') {
                                echo '<td><a title="Da clic para eliminar el registro" onclick="if(confirma() == false) return false" href="' . base_url() . 'Maquinaria/eliminar/' . $obj->getId_maquinaria() . '"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
                                echo '<td><a title="Da clic para modificar el registro" href="' . base_url() . 'Maquinaria/obtener/' . $obj->getId_maquinaria() . '"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a></td>';
                            }
                        }

//echo "<td><a href='" . base_url() . "Maquinaria/eliminar/" . $obj->getId_maquinaria() . "'>Elimina</a></td>";
//   echo "<td><a href=" . base_url() . "Maquinaria/obtener/" . $obj->getId_maquinaria() . ">Actualizar</a></td>";
                        ?>
                        </tr>
                    </tbody>
                </table>


        </div> 
    </div>


    <!--<div class="text-center">
        <a  class="btn btn-success" href="<?= base_url('Maquinaria/agregar') ?>" data-toggle="tooltip" data-placement="right" title="Dar Clic para Guardar los Datos de las Maquinarias">Agregar nuevo registro</a>
    </div>-->




</body>
</html>