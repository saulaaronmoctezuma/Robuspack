<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Robuspack</title>

        <!-- Bootstrap -->
       
        <link rel="stylesheet" href="<?= base_url() ?>assets/font/glyphicons-halflings-regular.ttf">

    </head>
    <body>

        <div class="container">
            <h1>Actualizar placa</h1>
            <hr>
        </div>

        <!-- KONTEN UTAMA -->
        <div class="container">
            <h2>Editar</h2>
            <div class="row">
                <form action="<?= base_url() ?>verificacion/updatedata" method="post" enctype="multipart/form-data">
                    
                     <label>No Maquina</label><br>
                    <input type="text" name="no_maqui" value="<?= $data->no_maqui?>"><br><br>
                     <label>Modelo</label><br>
                    <input type="text" name="modelo" value="<?= $data->modelo?>"><br><br>
                    <label>serie</label><br>
                    <input type="text" name="serie" value="<?= $data->serie ?>"><br><br>
                   
                   <label>cliente</label><br>
                    <input type="text" name="cliente" value="<?= $data->cliente ?>"><br><br>
                    
                    <label>pedimento</label><br>
                    <input type="text" name="pedimento" value="<?= $data->pedimento ?>"><br><br>
                    <!--<input type="file" name="fotopost">-->


                    <?php
                    if ($data->foto == null) {
                        echo ' <label>Foto Placa</label><br>
                             <input type="file" name="fotopost"><br><br>';
                    } else {
                        echo '<input class="form-control" type="hidden" name="old" value="' . $data->foto . '"><br><br><br>';
                    }
                    ?>
                    
                    
                    
                    <?php
                    if ($data->factura == null) {
                        echo ' <label>Factura</label><br>
                             <input type="file" name="fotopostpdf"><br><br>';
                    } else {
                        echo '<input class="form-control" type="hidden" name="fatura" value="' . $data->factura . '"><br><br><br>';
                    }
                    ?>
                 <!-- file lama -->
                    <input type="hidden" name="id" value="<?= $data->id_verificacion ?>">
                    <!-- ID -->
                    <input type="hidden" name="id" value="<?= $data->id_verificacion ?>">

                   <!-- <input type="submit" name="submit" value="Enviar" class="btn btn-default">-->
                    
                    
       <input  class="btn btn-success" title="Da clic para guardar los datos" type="submit" value="Guardar" >
                                <a title="Da clic para regresar al menú" href="../../verificacion" class="btn btn-warning">Cancelar</a>
                           
                </form>

            </div>
        </div>
        <!-- END KONTEN UTAMA -->

        <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    </body>
</html>
