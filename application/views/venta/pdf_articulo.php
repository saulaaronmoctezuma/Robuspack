<!--
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Articulos</title>
    <style type="text/css">
        body {
         background-color: #fff;
         margin: 40px;
         font-family: Lucida Grande, Verdana, Sans-serif;
         font-size: 14px;
         color: #4F5155;
        }
 
        a {
         color: #003399;
         background-color: transparent;
         font-weight: normal;
        }
 
        h1 {
         color: #444;
         background-color: transparent;
         border-bottom: 1px solid #D0D0D0;
         font-size: 16px;
         font-weight: bold;
         margin: 24px 0 2px 0;
         padding: 5px 0 6px 0;
        }
 
        h2 {
         color: #444;
         background-color: transparent;
         border-bottom: 1px solid #D0D0D0;
         font-size: 16px;
         font-weight: bold;
         margin: 24px 0 2px 0;
         padding: 5px 0 6px 0;
         text-align: center;
        }
 
        table{
            text-align: center;
        }
 
        /* estilos para el footer y el numero de pagina */
        @page { margin: 180px 50px; }
        #header { 
            position: fixed; 
            left: 0px; top: -180px; 
            right: 0px; 
            height: 150px; 
            background-color: #333; 
            color: #fff;
            text-align: center; 
        }
        #footer { 
            position: fixed; 
            left: 0px; 
            bottom: -180px; 
            right: 0px; 
            height: 150px; 
            background-color: #333; 
            color: #fff;
        }
        #footer .page:after { 
            content: counter(page, upper-roman); 
        }
    </style>
</head>
<body>
    <!--header para cada pagina-->
    
        <?php echo $title ?>
    </div>
    <!--footer para cada pagina-->
    
        <!--aqui se muestra el numero de la pagina en numeros romanos-->
        <p class="page"></p>
    
    <h2>Articulos</h2>
    <table>     
        <thead>
            <tr>
                <th width="50">Articulo</th>
                <th width="50">Nombre</th>
                 <th width="50">Marca</th>
                  <th width="50">Precio</th>
                   <th width="50">Cantidad</th>
                    <th width="10">Categoria</th>
                     <th width="10">Observacion</th>
                     
                
               
            </tr>
        </thead>
        <tbody>
            <?php foreach($articulos as $articulo) { ?>
            
            <tr>
                <td width="10"><?php echo $articulo->id_articulo ?></td>
                <td width="10"><?php echo $articulo->nombre ?></td>
                <td width="10"><?php echo $articulo->marca ?></td>
                <td width="10"><?php echo $articulo->precio ?></td>
                <td width="10"><?php echo $articulo->cantidad ?></td>
                <td width="10"><?php echo $articulo->categoria ?></td>
                <td width="10"><?php echo $articulo->observacion ?></td>
                
                  
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>