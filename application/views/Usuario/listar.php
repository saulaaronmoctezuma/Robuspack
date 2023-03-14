
<!--
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */
-->
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

        <link rel="icon" href="<?= base_url('assets/images/robuspack_icon.png') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">



    <div class="container" style="margin-top:1px;">

        <div class="table-responsive">
            <table class="table table-bordered table-striped"  >
                <center>  <h2> Últimas Conexiones</h2></center>

                <div class="alert alert-info alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Bienvenido</strong> Consulte sus datos
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                    <input type="text" id="buscandoIguales" placeholder="Escribe para buscar..."  class="form-control" />
                </div>
                <center> <div class="form-group">
                    <form method="post" action="<?php echo base_url(); ?>Reporte/pdfUsuario/pdf" target=”_blank”>

                        <button  class="btn btn-info" title="Da clic para exportar los datos a PDF" style="font-size:15px;color:red"><font color="white">Exportar&nbsp;&nbsp;     </font> <i class="fa fa-file-pdf-o"></i></button>
                    </form></center>
                </div>

        </div>

        <table  border="0" class="table table-bordered table-striped">
            <MARQUEE SCROLLDELAY =200> </MARQUEE>
            <thead>
                <tr >

                    <th style="text-align: center">Nombre</th>
                    <th style="text-align: center">Correo Electrónico</th>
                    <th style="text-align: center">Último Acceso</th>
                  


                </tr>
            </thead>
            <tbody align="center">


                <?php
                foreach ($usuario as $obj) {
                    echo '<tr><td>';
                    echo $obj->getFirst_name() .
                    '</td>'
                    
                    . '<td>'
                    . $obj->getEmail() .
                    '</td>'
                    . '<td>'
                    . $obj->getLast_login() .
                    '</td>'
                    ;






               
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
