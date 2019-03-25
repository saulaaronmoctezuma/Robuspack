<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>robuspack</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>">
    </head>
    <body>
        <div class="container">
            <div class="col-sm-4 col-md-offset-4">
                <h4>robuspack</h4>
                <form class="form-horizontal" id="submit">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="no_maquina">
                    </div>
                    <div class="form-group">
                        <input type="text" name="modelo" class="form-control" placeholder="modelo">
                    </div>
                    <div class="form-group">
                        <input type="text" name="serie" class="form-control" placeholder="serie">
                    </div>
                
                    <div class="form-group">
                        <input type="file" name="placaArchivo">
                    </div>
                   
                    <div class="form-group">
                        <input type="text" name="cliente" class="form-control" placeholder="cliente">
                    </div>
                     <div class="form-group">
                        <input type="file" name="facturaArchivo">
                    </div>
                     <div class="form-group">
                        <input type="text" name="pedimento" class="form-control" placeholder="pedimento">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" id="btn_upload" type="submit">Upload</button>
                    </div>
                </form>	
            </div>
        </div>
        <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.2.1.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {

                $('#submit').submit(function (e) {
                    e.preventDefault();
                    $.ajax({
                        url: '<?php echo base_url(); ?>index.php/Placa/do_upload',
                        type: "post",
                        data: new FormData(this), //this is formData
                        processData: false,
                        contentType: false,
                        cache: false,
                        async: false,
                        success: function (data) {
                            location.href ="http://localhost/master/Placa";
                        }
                       
                    });
                });


            });

        </script>
    </body>
</html>