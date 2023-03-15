<<<<<<< HEAD
<!--
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */
-->
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="css/960.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <style type="text/css">

        body{
            background: #ffefef;
        }
        #consulta{
            display: none;
            font-size: 12px;
            background: #d5d8dd;
            margin-bottom: 15px;
        }
        .container_12{
            background: #1b89da;
            border: 5px solid #fff;
        }
        #cuerpo{
            margin-top: 10px;
        }
        #cabecera{
            margin-top: 10px;
            background: #111;
            color: #fff;
            margin-left: 0px;
        }
        .mostrar{
            color: #fff;
            font-weight: bold;
            text-align: center;
            font-size: 22px;
            cursor: pointer;
        }
        pre{
            border: 1px solid #111;
            background: #fff;
            margin-left: -60px;
            margin-right: 30px;
        }
        #consulta_sql{
            margin: 20px 0px;
        }
        h3{
            font-size: 18px;
            text-align: center;
            color: #9e0606;
        }
    </style>
</head>
<script type="text/javascript">
    $(document).ready(function(){
        $(".mostrar").click(function(){
            $(this).next('#consulta').slideToggle();
        });
    })
</script>
<body>
    <div class="container_12">

        <div class="mostrsar grid_12">Subconsultas MaxMin</div>
        <div class="grid_ss12" id="conulta">

            <div class="grid_12" id="cabecera">
                <div class="grid_1">id</div>
                <div class="grid_1">maquina</div>
                <div class="grid_1">Grupo</div>
                <div class="grid_2">Cliente</div>
                <div class="grid_2">Cantidad Maxima</div>
                <div class="grid_2">Inventario</div>
                
            </div>
            
            <h1>       <p class="lead">El resultado de tu query es <?php echo "<hr />"; echo "<hr />"; echo $consulta[2]["referencia"];echo "<hr />";
                                                                                                        echo $consulta[2]["maquina"];
            ?></p></h1>
           
            <?php
            echo $this->db->last_query();
            foreach($maxmin as $fila)
            {
            ?>
            <div class="grid_12" id="cuerpo">
                <div class="grid_1"><?=$fila->maquina?></div>
                <div class="grid_1"><?=$fila->referencia?></div>
                <div class="grid_2"><?=$fila->grupo?></div>
                <div class="grid_2"><?=$fila->cliente?></div>
                <div class="grid_2"><?=$fila->cantidad_maxima?></div>
                <div class="grid_2"><?=$fila->inventario?></div>
            </div>
            <?php
            }
            ?>        
</body>
</html>