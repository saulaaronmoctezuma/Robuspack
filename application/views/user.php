<html lang="es">  
    
<div class="container">
        <h2>Lista de Usuario</h2>
        <div class="form-group input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                <input type="text" id="buscandoIguales" placeholder="Escribe para buscar..."  class="form-control" />
        </div>
        
        <table class="table table-hover table-bordered table-striped">
          <tr>
              <th>
                  Nombre
              </th>
              <th>
                  Correo Electrónico
              </th>
              <th>
                 Ultimo acceso
              </th>
              <th>
                  Nombre del Nivel
              </th>
              <th>
                  Estado
              </th>
              <th colspan="2">
                  Editar
              </th>
          </tr>
                <?php
                    foreach($groups as $row)
                    { 
                    if($row->role == 1){
                        $rolename = "Administrador";
                    }elseif($row->role == 2){
                        $rolename = "Gerente Operaciones";
                    }elseif($row->role == 3){
                        $rolename = "Consultor";
                    }elseif($row->role == 4){
                        $rolename = "Refacciones";
                    }elseif($row->role == 5){
                        $rolename = "Maquinaria";
                    }elseif($row->role == 6){
                        $rolename = "Mediciones";
                    }elseif($row->role == 7){
                        $rolename = "Crédito";
                    }elseif($row->role == 8){
                        $rolename = "Gerente Ventas";
                    }elseif($row->role == 9){
                        $rolename = "Director";
                    }elseif($row->role == 10){
                        $rolename = "Maquinaria y Refacciones";
                    }elseif($row->role == 11){
                        $rolename = "Mantenimiento";
                    }elseif($row->role == 12){
                        $rolename = "Jefe de Mantenimiento";
                    }elseif($row->role == 13){
                        $rolename = "Logistica";
                    }
                    
                    
                    echo '<tr>';
                    echo '<td>'.$row->first_name.'</td>';
                    echo '<td>'.$row->email.'</td>';
                    echo '<td>'.$row->last_login.'</td>';
                    echo '<td>'.$rolename.'</td>';
                    echo '<td>'.$row->status.'</td>';
                    echo '<td><a href="'.site_url().'main/changelevel"><button type="button" class="btn btn-primary">Rol</button></a></td>';
                    echo '<td><a href="'.site_url().'main/deleteuser/'.$row->id.'"><button type="button" class="btn btn-danger">Eliminar</button></a></td>';
                    echo '</tr>';
                    }
                ?>
        </table>
    </div>
</html>