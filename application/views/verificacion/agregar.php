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
    <body>
       
            <!--<div class="container">
              <h1>Agregar placa nuevo</h1>
              <hr>
            </div>-->

            <!-- KONTEN UTAMA -->
            <div class="container">
                <h2>Agregar</h2>
                <div class="row">
                    <form action="<?= base_url() ?>verificacion/insertdata" method="post" enctype="multipart/form-data">

                        
                           <?php
                    if ($dataLevel == 'is_admin') {
                        echo '<label>No máquina</label><br>
                        <input type="text" name="no_maqui"><br><br>
                        <label>Modelo</label><br>
                        <input type="text" name="modelo"><br><br>

                        <label>Serie</label><br>
                        <input type="text" name="serie"><br><br>
                        <label>Cliente</label><br>
                        <input type="text" name="cliente"><br><br>
                        <label>Pedimento</label><br>
                        <input type="text" name="pedimento"><br><br>

                        <label>Foto</label><br>
                        <input type="file" name="fotopost"><br>

                        <label>Factura</label><br>
                        <input type="file" name="fotopostpdf"><br>';
                    } else if ($dataLevel == 'is_logistica') {
                       echo '<label>No máquina</label><br>
                        <input type="text" name="no_maqui"><br><br>
                        <label>Modelo</label><br>
                        <input type="text" name="modelo"><br><br>

                        <label>Serie</label><br>
                        <input type="text" name="serie"><br><br>
                        <label>Cliente</label><br>
                        <input type="text" name="cliente"><br><br>
                        <label>Pedimento</label><br>
                        <input type="text" name="pedimento"><br><br>

                        
                        <input type="hidden" name="fotopost"><br>

                      
                        <input type="hidden" name="fotopostpdf"><br>';
                    } else if ($dataLevel == 'id_editor') {
                        echo '<label>No máquina</label><br>
                        <input type="text" name="no_maqui"><br><br>
                        <label>Modelo</label><br>
                        <input type="text" name="modelo"><br><br>

                        <label>Serie</label><br>
                        <input type="text" name="serie"><br><br>
                        <label>Cliente</label><br>
                        <input type="text" name="cliente"><br><br>
                        <label>Pedimento</label><br>
                        <input type="text" name="pedimento"><br><br>

                        <label>Foto</label><br>
                        <input type="file" name="fotopost"><br>

                        <label>Factura</label><br>
                        <input type="file" name="fotopostpdf"><br>';
                    } else if ($dataLevel == 'is_refacciones') {
                       echo '<label>No máquina</label><br>
                        <input type="text" name="no_maqui"><br><br>
                        <label>Modelo</label><br>
                        <input type="text" name="modelo"><br><br>

                        <label>Serie</label><br>
                        <input type="text" name="serie"><br><br>
                        <label>Cliente</label><br>
                        <input type="text" name="cliente"><br><br>
                        <label>Pedimento</label><br>
                        <input type="text" name="pedimento"><br><br>

                        <label>Foto</label><br>
                        <input type="file" name="fotopost"><br>

                        <label>Factura</label><br>
                        <input type="file" name="fotopostpdf"><br>';
                    } else {
                        
                    }
                    ?>
                        
                        
                        <!--<label>No máquina</label><br>
                        <input type="text" name="no_maqui"><br><br>
                        <label>Modelo</label><br>
                        <input type="text" name="modelo"><br><br>

                        <label>Serie</label><br>
                        <input type="text" name="serie"><br><br>
                        <label>Cliente</label><br>
                        <input type="text" name="cliente"><br><br>
                        <label>Pedimento</label><br>
                        <input type="text" name="pedimento"><br><br>

                        <label>Foto</label><br>
                        <input type="file" name="fotopost"><br>

                        <label>Factura</label><br>
                        <input type="file" name="fotopostpdf"><br>-->

                        <input type="submit" name="submit" value="Agregar" class="btn btn-success">
                        <a title="Da clic para regresar" href="javascript:window.history.go(-1);"class="btn btn-danger">Cancelar</a>

                    </form>

                </div>
            </div>
            <!-- END KONTEN UTAMA -->

            <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
            <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
        </body>
    </html>
